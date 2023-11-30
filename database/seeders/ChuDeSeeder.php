<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChuDeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('chu_des')->delete();

        DB::table('chu_des')->truncate();

        DB::table('chu_des')->insert([
            [
               "hash"  =>  "c3b69131-2931-4f67-926e-b244e18e8081",
               "ten_chu_de"  =>  "An ninh quốc gia",
               "so_thu_tu"  =>  "1"
            ],
            [
               "hash"  =>  "5576c952-dabe-4363-b94a-13419996ff4b",
               "ten_chu_de"  =>  "Bảo hiểm",
               "so_thu_tu"  =>  "2"
            ],
            [
               "hash"  =>  "c124612e-a23f-4199-8747-55fe4e8a8c89",
               "ten_chu_de"  =>  "Bưu chính, viễn thông",
               "so_thu_tu"  =>  "3"
            ],
            [
               "hash"  =>  "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
               "ten_chu_de"  =>  "Bổ trợ tư pháp",
               "so_thu_tu"  =>  "4"
            ],
            [
               "hash"  =>  "cb5c6841-2c38-48ca-b946-da24c8d8a099",
               "ten_chu_de"  =>  "Cán bộ, công chức, viên chức",
               "so_thu_tu"  =>  "5"
            ],
            [
               "hash"  =>  "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
               "ten_chu_de"  =>  "Chính sách xã hội",
               "so_thu_tu"  =>  "6"
            ],
            [
               "hash"  =>  "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
               "ten_chu_de"  =>  "Công nghiệp",
               "so_thu_tu"  =>  "7"
            ],
            [
               "hash"  =>  "efbefb52-bf45-41df-aaf4-6a4e833f333e",
               "ten_chu_de"  =>  "Dân số, gia đình, trẻ em, bình đẳng giới",
               "so_thu_tu"  =>  "8"
            ],
            [
               "hash"  =>  "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
               "ten_chu_de"  =>  "Dân sự",
               "so_thu_tu"  =>  "9"
            ],
            [
               "hash"  =>  "a6ee2d1a-2edc-4c30-bff5-81efbd765464",
               "ten_chu_de"  =>  "Dân tộc",
               "so_thu_tu"  =>  "10"
            ],
            [
               "hash"  =>  "b64f0e6a-3020-4c4a-be45-a1e5370a0939",
               "ten_chu_de"  =>  "Đất đai",
               "so_thu_tu"  =>  "11"
            ],
            [
               "hash"  =>  "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
               "ten_chu_de"  =>  "Doanh nghiệp, hợp tác xã",
               "so_thu_tu"  =>  "12"
            ],
            [
               "hash"  =>  "0fb2411e-095b-4095-bbbe-fb8465ec4199",
               "ten_chu_de"  =>  "Giáo dục, đào tạo",
               "so_thu_tu"  =>  "13"
            ],
            [
               "hash"  =>  "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
               "ten_chu_de"  =>  "Giao thông, vận tải",
               "so_thu_tu"  =>  "14"
            ],
            [
               "hash"  =>  "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
               "ten_chu_de"  =>  "Hành chính tư pháp",
               "so_thu_tu"  =>  "15"
            ],
            [
               "hash"  =>  "0672ce80-caa2-4d12-a474-6d86349c9dab",
               "ten_chu_de"  =>  "Hình sự",
               "so_thu_tu"  =>  "16"
            ],
            [
               "hash"  =>  "9daf2b7f-cf24-4c97-adf8-0903f6b7f18e",
               "ten_chu_de"  =>  "Kế toán, kiểm toán",
               "so_thu_tu"  =>  "17"
            ],
            [
               "hash"  =>  "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
               "ten_chu_de"  =>  "Khiếu nại, tố cáo",
               "so_thu_tu"  =>  "18"
            ],
            [
               "hash"  =>  "3f0ce861-9980-43c9-9dcc-8e064c536bee",
               "ten_chu_de"  =>  "Khoa học, công nghệ",
               "so_thu_tu"  =>  "19"
            ],
            [
               "hash"  =>  "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
               "ten_chu_de"  =>  "Lao động",
               "so_thu_tu"  =>  "20"
            ],
            [
               "hash"  =>  "1657cd3c-c513-4df5-ae6b-e39a778c640d",
               "ten_chu_de"  =>  "Môi trường",
               "so_thu_tu"  =>  "21"
            ],
            [
               "hash"  =>  "0f8741e9-b3d2-488b-aa70-961ccc802227",
               "ten_chu_de"  =>  "Ngân hàng, tiền tệ",
               "so_thu_tu"  =>  "22"
            ],
            [
               "hash"  =>  "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
               "ten_chu_de"  =>  "Ngoại giao, điều ước quốc tế",
               "so_thu_tu"  =>  "23"
            ],
            [
               "hash"  =>  "81215563-6346-448e-bded-2933f86276bb",
               "ten_chu_de"  =>  "Nông nghiệp, nông thôn",
               "so_thu_tu"  =>  "24"
            ],
            [
               "hash"  =>  "859b54fa-0c05-4807-a50c-c8be82fcae62",
               "ten_chu_de"  =>  "Quốc phòng",
               "so_thu_tu"  =>  "25"
            ],
            [
               "hash"  =>  "7a9dcc15-370d-40b4-a02b-28e583b25dbf",
               "ten_chu_de"  =>  "Tài chính",
               "so_thu_tu"  =>  "26"
            ],
            [
               "hash"  =>  "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
               "ten_chu_de"  =>  "Tài nguyên",
               "so_thu_tu"  =>  "27"
            ],
            [
               "hash"  =>  "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
               "ten_chu_de"  =>  "Tài sản công, nợ công, dự trữ nhà nước",
               "so_thu_tu"  =>  "28"
            ],
            [
               "hash"  =>  "c7ee2251-ddf9-4c7a-88f8-a9568fad0247",
               "ten_chu_de"  =>  "Thi đua, khen thưởng, các danh hiệu vinh dự nhà nước",
               "so_thu_tu"  =>  "29"
            ],
            [
               "hash"  =>  "88a4972a-48c2-4def-926b-a71b9f6e4be7",
               "ten_chu_de"  =>  "Thi hành án",
               "so_thu_tu"  =>  "30"
            ],
            [
               "hash"  =>  "ee961e69-7a8d-4405-8fe6-ecdf7e44323f",
               "ten_chu_de"  =>  "Thống kê",
               "so_thu_tu"  =>  "31"
            ],
            [
               "hash"  =>  "73b6a37d-b55b-443d-b0fd-8f7d1b215ca1",
               "ten_chu_de"  =>  "Thông tin, báo chí, xuất bản",
               "so_thu_tu"  =>  "32"
            ],
            [
               "hash"  =>  "09ca05d1-7f1d-4887-a65d-a210374d1969",
               "ten_chu_de"  =>  "Thuế, phí, lệ phí, các khoản thu khác",
               "so_thu_tu"  =>  "33"
            ],
            [
               "hash"  =>  "717625a2-281b-4307-b21b-68b1c73d2207",
               "ten_chu_de"  =>  "Thương mại, đầu tư, chứng khoán",
               "so_thu_tu"  =>  "34"
            ],
            [
               "hash"  =>  "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
               "ten_chu_de"  =>  "Tổ chức bộ máy nhà nước",
               "so_thu_tu"  =>  "35"
            ],
            [
               "hash"  =>  "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
               "ten_chu_de"  =>  "Tổ chức chính trị - xã hội, hội",
               "so_thu_tu"  =>  "36"
            ],
            [
               "hash"  =>  "cef09501-9f71-4c9a-aa35-238ea8c79f76",
               "ten_chu_de"  =>  "Tố tụng và các phương thức giải quyết tranh chấp",
               "so_thu_tu"  =>  "37"
            ],
            [
               "hash"  =>  "48d084d9-d3f1-4c13-a898-dde6840fe0ff",
               "ten_chu_de"  =>  "Tôn giáo, tín ngưỡng",
               "so_thu_tu"  =>  "38"
            ],
            [
               "hash"  =>  "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
               "ten_chu_de"  =>  "Trật tự, an toàn xã hội",
               "so_thu_tu"  =>  "39"
            ],
            [
               "hash"  =>  "01684735-cbae-4b6f-9471-1010ab2f350a",
               "ten_chu_de"  =>  "Tương trợ tư pháp",
               "so_thu_tu"  =>  "40"
            ],
            [
               "hash"  =>  "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
               "ten_chu_de"  =>  "Văn hóa, thể thao, du lịch",
               "so_thu_tu"  =>  "41"
            ],
            [
               "hash"  =>  "1c1f149f-f1bf-4ddb-9f6b-b2adbf17d410",
               "ten_chu_de"  =>  "Văn thư lưu trữ",
               "so_thu_tu"  =>  "42"
            ],
            [
               "hash"  =>  "11a7e159-46bf-48bf-93ec-4e415f84c678",
               "ten_chu_de"  =>  "Xây dựng, nhà ở, đô thị",
               "so_thu_tu"  =>  "43"
            ],
            [
               "hash"  =>  "ec61c177-8f68-4a69-a42b-2257d599d907",
               "ten_chu_de"  =>  "Xây dựng pháp luật và thi hành pháp luật",
               "so_thu_tu"  =>  "44"
            ],
            [
               "hash"  =>  "607817d9-0840-4986-b41f-5f3e9ae650c2",
               "ten_chu_de"  =>  "Y tế, dược",
               "so_thu_tu"  =>  "45"
            ]
         ]);

    }
}
