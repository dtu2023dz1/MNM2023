const { default: axios } = require('axios');
const { JSDOM } = require('jsdom');
const  data_de_muc = require('./Data_DeMuc')


const getData = async (hash) => {
    try {
        const response = await axios.get('https://phapdien.moj.gov.vn/TraCuuPhapDien/BPD/demuc/' + hash + '.html');
        return response.data;
    } catch (error) {
        throw error;
    }
};

async function getHTML(hash) {
    return new Promise(async (resolve, reject) => {
        const data = await getData(hash);
        resolve(data);
    });
}
(async () => {
    try {
        await data_de_muc.data.forEach(async element =>  {
            const resData = await getHTML(element.Value);
            const htmlSnippet = resData
            const dom = new JSDOM(htmlSnippet);
            const doc = dom.window.document;
            const contentDivs = doc.querySelectorAll('div._content');
            let payload = [];
            contentDivs.forEach((contentDiv) => {
                const paragraphs = contentDiv.querySelectorAll('p');
                var MPC_chuong = null;
                var res_data = {
                    'MPC_chuong'    : MPC_chuong,
                    'ten_dieu'      : null,
                    'ghi_chu'       : null,
                    'link_ghi_chu'  : null,
                    'noi_dung'      : null,
                    'chi_dan'       : null,
                    'link_chi_dan'  : null,
                    'MAPC'          : null
                };
                paragraphs.forEach((paragraph, index) => {
                    const className = paragraph.className;
                    const textContent  = trimText(paragraph.textContent);
                    if (className === 'pChuong') {
                        const links = paragraph.querySelectorAll('a');
                        links.forEach((link) => {
                            const name_value = link.getAttribute('name');
                            MPC_chuong = name_value;
                        });
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
                                payload.push(res_data);
                                res_data = {
                                    'MPC_chuong'    : MPC_chuong,
                                    'ten_dieu'      : null,
                                    'ghi_chu'       : null,
                                    'link_ghi_chu'  : null,
                                    'noi_dung'      : null,
                                    'chi_dan'       : null,
                                    'link_chi_dan'  : null,
                                    'MAPC'          : null
                                };
                            }
                        } catch (error) {

                        }
                    }
                });
            });
            console.log(payload);
            console.log("=============================================================================================");
        });
    } catch (error) {
        console.error('Error:', error);
    }
})();

function trimText(text) {
    return text.replace(/\s+/g, ' ').trim();
}
