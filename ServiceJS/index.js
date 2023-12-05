import axios from 'axios';
import { JSDOM } from 'jsdom';
import express from 'express';
import async from 'async';
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
        var list_chuong = [];
        var list_index  = [];
        var MPC_chuong  = null;
        contentDivs.forEach((contentDiv) => {
            const paragraphs = contentDiv.querySelectorAll('p');
            var MA_DIEU = null;
            for (var index = 0; index < paragraphs.length; index++) {
                var paragraph = paragraphs[index];
                const className = paragraph.className;
                const textContent = trimText(paragraph.textContent);
                if (className === 'pChuong') {
                    const links = paragraph.querySelectorAll('a');
                    if (textContent.includes("Chương")) {
                        links.forEach((link) => {
                            const name_value = link.getAttribute('name');
                            if (name_value != MPC_chuong) {
                                list_chuong.push({
                                    'MPC_chuong': name_value,
                                    'ten_chuong': textContent,
                                    'data': [],
                                    'vi_tri': index
                                });
                                list_index.push(index);
                            }
                        });
                    }
                }
            }
            list_chuong.forEach(function (value, index_key, array) {
                var list = [];
                var res_data = {
                    'ten_tieu_muc': null,
                    'ghi_chu': null,
                    'link_ghi_chu': null,
                    'noi_dung': '',
                    'chi_dan': null,
                    'link_chi_dan': null,
                    'MAPC': null
                };
                var key = value.vi_tri + 1;
                try {
                    var vi_tri_dong_for = 0;
                    if(index_key == list_chuong.length - 1) {
                        vi_tri_dong_for = paragraphs.length - 1;
                    } else {
                        vi_tri_dong_for = list_index[index_key + 1];
                    }
                    for (key; key <= vi_tri_dong_for; key++) {
                        var paragraph = paragraphs[key];
                        if (key == vi_tri_dong_for) {
                            list.push(res_data);
                        }
                        if (key + 1 <= vi_tri_dong_for) {
                            var paragraph_nex = paragraphs[key + 1];
                            if (paragraph_nex.className == "pDieu" && res_data.ten_tieu_muc != null) {
                                list.push(res_data);
                                res_data = {
                                    'ten_tieu_muc': null,
                                    'ghi_chu': null,
                                    'link_ghi_chu': null,
                                    'noi_dung': '',
                                    'chi_dan': null,
                                    'link_chi_dan': null,
                                    'MAPC': null
                                };
                            }
                        }
                        const className = paragraph.className;
                        const textContent = trimText(paragraph.textContent);
                        if (className === 'pDieu') {
                            const links = paragraph.querySelectorAll('a');
                            const MAPC_DIEU = links[0].getAttribute('name');
                            MA_DIEU = MAPC_DIEU;
                            res_data.MAPC = MAPC_DIEU
                            res_data.ten_tieu_muc = textContent;
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
                            res_data.noi_dung = res_data.noi_dung + textContent + ". ";
                        }
                    }
                    value.data = list;
                } catch (error) {
                    console.log(index_key);
                }
            });
        });
        return list_chuong;
    } catch (error) {
        console.log(error);
    }
}

async function asyncTaskFunction(element) {
    var res_detail = await getDataDetail(element)
    var res_post = {
        'id_de_muc': element.id,
        'id_chu_de': element.id_chu_de,
        'data': res_detail
    }
    await postData(res_post);
    callback(); // Gọi callback để thông báo rằng công việc đã hoàn thành
}

async function getDataPL() {
    try {
        const list_de_muc = await axios.get(LINK_GET + '/get-data-de-muc-api');
        const taskQueue = async.queue(asyncTaskFunction, 1);
        await list_de_muc.data.data.forEach(async element =>  {
            setTimeout(() => {
                console.log("Da vao day element " + element.ten_de_muc);
                taskQueue.push(element);
            }, 2000);
        });
        taskQueue.drain(() => {
            console.log('Tất cả công việc đã hoàn thành');
            return {
                'status': true,
                'message': "Đã get dữ liệu và thêm mới thành công!",
            }
        });

        return {
            'status': true,
            'message': "Đã get dữ liệu và thêm mới thành công!",
        }
    } catch (error) {
        console.log(error);
        return {
            'status': false,
            'message': "Đã có lỗi",
            'error': error
        }
    }
};

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}
function trimText(text) {
    return text.replace(/\s+/g, ' ').trim();
}

app.get('/get-data', async (req, res) => {
    const respone = await getDataPL();
    res.status(200).send(respone)
})
const port = 3000;
app.listen(port, () => {
    console.log(`Server is running on port ${port}`);
});


