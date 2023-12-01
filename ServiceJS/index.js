import axios from 'axios';
import { JSDOM } from 'jsdom';
import express from 'express';
const app = express()

const LINK_GET = "http://127.0.0.1:8000/api"

const getData = async (hash) => {
    try {
        const response = await axios.get('https://phapdien.moj.gov.vn/TraCuuPhapDien/BPD/demuc/' + hash + '.html');
        return response.data;
    } catch (error) {
        throw error;
    }
};

async function postData(data) {
    try {
        const response = await axios.post(LINK_GET + '/create-tieu-muc', data);
        return response.data;
    } catch (error) {
        throw error;
    }
}

async function getHTML(hash) {
    return new Promise(async (resolve, reject) => {
        const data = await getData(hash);
        resolve(data);
    });
}

async function getDataDetail(element) {
    try {
        const resData = await getHTML(element.hash);
        const htmlSnippet = resData
        const dom = new JSDOM(htmlSnippet);
        const doc = dom.window.document;
        const contentDivs = doc.querySelectorAll('div._content');
        var MPC_chuong = null;
        var res = {
            'MPC_chuong': MPC_chuong,
            'ten_chuong': "",
            'data': []
        };
        var payload = [];
        contentDivs.forEach((contentDiv) => {
            const paragraphs = contentDiv.querySelectorAll('p');
            var res_data = {
                'ten_dieu': null,
                'ghi_chu': null,
                'link_ghi_chu': null,
                'noi_dung': null,
                'chi_dan': null,
                'link_chi_dan': null,
                'MAPC': null
            };
            paragraphs.forEach((paragraph, index) => {
                const className = paragraph.className;
                const textContent = trimText(paragraph.textContent);
                if (className === 'pChuong') {
                    const links = paragraph.querySelectorAll('a');
                    links.forEach((link) => {
                        const name_value = link.getAttribute('name');
                        if (name_value != MPC_chuong) {
                            if (MPC_chuong != null) {
                                payload.push(res);
                                res = {
                                    'MPC_chuong': MPC_chuong,
                                    'ten_chuong': "",
                                    'data': []
                                };
                            }
                            MPC_chuong = name_value;
                            res.MPC_chuong = MPC_chuong;
                        }
                    });
                    res.ten_chuong = res.ten_chuong + textContent + " ";
                } else if (className === 'pDieu') {
                    const links = paragraph.querySelectorAll('a');
                    links.forEach((link) => {
                        const MAPC_DIEU = link.getAttribute('name');
                        res_data.MAPC = MAPC_DIEU
                    });
                    res_data.ten_dieu = textContent;

                } else if (className === 'pGhiChu') {
                    const links = paragraph.querySelectorAll('a');
                    links.forEach((link) => {
                        const linkHref = link.getAttribute('href');
                        res_data.link_ghi_chu = linkHref;
                    });
                    res_data.ghi_chu = textContent;
                } else if (className === 'pChiDan') {
                    const links = paragraph.querySelectorAll('a');
                    links.forEach((link) => {
                        const linkHref = link.getAttribute('href');
                        res_data.link_chi_dan = linkHref;
                    });
                    res_data.chi_dan = textContent;
                } else {
                    try {
                        if (paragraphs[index + 1].className === "pDieu") {
                            res.data.push(res_data);
                            res_data = {
                                'ten_dieu': null,
                                'ghi_chu': null,
                                'link_ghi_chu': null,
                                'noi_dung': null,
                                'chi_dan': null,
                                'link_chi_dan': null,
                                'MAPC': null
                            };
                        }
                    } catch (error) {

                    }
                }
            });
        });
        return payload;
    } catch (error) {
        console.log(error);
    }
}

async function getDataPL() {
    try {
        const list_de_muc = await axios.get(LINK_GET + '/get-data-de-muc');
        var element = list_de_muc.data.data[3];
        // await list_de_muc.data.forEach(async element =>  {

        //     var res_post = {
        //         'id_chu_de' : element.id,
        //         'data'      : payload
        //     }
        //     await postData(res_post);
        // });
        var res_detail = await getDataDetail(element)
        var res_post = {
            'id_de_muc': element.id,
            'id_chu_de': element.id_chu_de,
            'data': res_detail
        }
        await postData(res_post);
        return {
            'status': true,
            'message': "Đã get dữ liệu và thêm mới thành công!",
        }
    } catch (error) {
        return {
            'status': false,
            'message': "Đã có lỗi",
            'error': error
        }
    }
};

function trimText(text) {
    return text.replace(/\s+/g, ' ').trim();
}

app.get('/get-data', async (req, res) => {
    const respone = await getDataPL();
    console.log("Đã Lấy Xong");
    res.status(200).send(respone)
})
const port = 3000;
app.listen(port, () => {
    console.log(`Server is running on port ${port}`);
});


