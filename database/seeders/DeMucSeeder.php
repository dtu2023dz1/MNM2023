<?php

namespace Database\Seeders;

use App\Models\ChuDe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeMucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list_de_muc = [
            [
               "hash"  =>   "049522e0-fec2-4d52-916d-dd103ba69627",
               "ten_de_muc"  =>   "Công tác dân tộc",
               "hash_chu_de"  =>   "a6ee2d1a-2edc-4c30-bff5-81efbd765464",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "06936689-e896-45ee-9486-99b9370f31bc",
               "ten_de_muc"  =>   "Đất đai",
               "hash_chu_de"  =>   "b64f0e6a-3020-4c4a-be45-a1e5370a0939",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "0cf69ad9-6f29-4ee4-8e16-2c3aa65c3a52",
               "ten_de_muc"  =>   "An toàn thực phẩm",
               "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "0d5b64ca-267f-4cb9-9400-63448387b0d6",
               "ten_de_muc"  =>   "Cấp bản sao từ sổ gốc, chứng thực bản sao từ bản chính, chứng thực chữ ký",
               "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "12f7dcb6-5ab4-4b7e-a248-2a5e09c113f5",
               "ten_de_muc"  =>   "Đo đạc và bản đồ",
               "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "13bbc44f-b9ad-49f2-b66b-65da10d2dd34",
               "ten_de_muc"  =>   "Thống kê",
               "hash_chu_de"  =>   "ee961e69-7a8d-4405-8fe6-ecdf7e44323f",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "18250665-85b4-4ab9-b862-4eb8afbde3fa",
               "ten_de_muc"  =>   "Dự trữ quốc gia",
               "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "23e1929c-6151-4f15-9d67-11d4f7964dc8",
               "ten_de_muc"  =>   "Trẻ em",
               "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "295ceaf7-684c-42a9-9f57-c60ff5581bcc",
               "ten_de_muc"  =>   "Kiến trúc",
               "hash_chu_de"  =>   "11a7e159-46bf-48bf-93ec-4e415f84c678",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "319387a3-090a-47a5-82f6-a9bacbe5d341",
               "ten_de_muc"  =>   "Doanh nghiệp",
               "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "3284cd8d-f598-48ea-b425-53e118893530",
               "ten_de_muc"  =>   "Bảo vệ quyền lợi người tiêu dùng",
               "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "3285256c-25e1-4621-afdc-647fbdd766ea",
               "ten_de_muc"  =>   "Bầu cử đại biểu Quốc hội và đại biểu Hội đồng nhân dân",
               "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "3a8413a9-7763-4a9b-93f8-dd5f18ba1594",
               "ten_de_muc"  =>   "Chính sách trợ giúp xã hội đối với đối tượng bảo trợ xã hội",
               "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "4062b86e-ef5c-4ea4-af09-45d8b23978d2",
               "ten_de_muc"  =>   "Đặc xá",
               "hash_chu_de"  =>   "88a4972a-48c2-4def-926b-a71b9f6e4be7",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "467d54d1-b81e-49a0-a066-21e2c9b191fc",
               "ten_de_muc"  =>   "Thi đua, khen thưởng",
               "hash_chu_de"  =>   "c7ee2251-ddf9-4c7a-88f8-a9568fad0247",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "47316aca-6f15-49c8-b604-5a6c87351849",
               "ten_de_muc"  =>   "Chất lượng sản phẩm, hàng hóa",
               "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "4b6f90cb-015c-4cdd-9c87-b8ecc0470fdb",
               "ten_de_muc"  =>   "Tín ngưỡng, tôn giáo",
               "hash_chu_de"  =>   "48d084d9-d3f1-4c13-a898-dde6840fe0ff",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "55323c64-e78f-4537-afcd-6a3c2af3c71d",
               "ten_de_muc"  =>   "An ninh quốc gia",
               "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "59750dbc-0ac3-4d75-928e-18983dc7ecf6",
               "ten_de_muc"  =>   "Công tác văn thư",
               "hash_chu_de"  =>   "1c1f149f-f1bf-4ddb-9f6b-b2adbf17d410",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "66c59035-9acd-430a-affd-86563bc7ce77",
               "ten_de_muc"  =>   "An toàn thông tin mạng",
               "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "673fcdfe-cda8-43aa-b3b9-f3e1e4710027",
               "ten_de_muc"  =>   "Khiếu nại",
               "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "78cd97a5-7ff4-48b4-affc-42cd96aeec18",
               "ten_de_muc"  =>   "Báo chí",
               "hash_chu_de"  =>   "73b6a37d-b55b-443d-b0fd-8f7d1b215ca1",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "87ca311f-a832-430e-993a-ffef40ef4043",
               "ten_de_muc"  =>   "Ban hành văn bản quy phạm pháp luật",
               "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "93c2e70c-57d6-4c12-8911-b345dcb69597",
               "ten_de_muc"  =>   "Bảo hiểm tiền gửi",
               "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "9692aa2c-e220-4b39-9385-c1b837149556",
               "ten_de_muc"  =>   "Bảo vệ và kiểm dịch thực vật",
               "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "985838c2-d5e2-423d-9253-7f95ea82af57",
               "ten_de_muc"  =>   "Giáo dục nghề nghiệp",
               "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "b444d15f-0b38-474b-bf13-5188e9a517bb",
               "ten_de_muc"  =>   "Bảo vệ công trình quốc phòng và khu quân sự",
               "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "bac21193-4c90-4e8c-a274-ffce8648c505",
               "ten_de_muc"  =>   "Đường sắt",
               "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "bcc2a59a-ccbe-4739-afd4-f45811a15122",
               "ten_de_muc"  =>   "Hình sự",
               "hash_chu_de"  =>   "0672ce80-caa2-4d12-a474-6d86349c9dab",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "c20ba1de-f6cb-4b91-9d2c-05eabd8e0c2e",
               "ten_de_muc"  =>   "Bảo vệ môi trường",
               "hash_chu_de"  =>   "1657cd3c-c513-4df5-ae6b-e39a778c640d",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "c281cd7b-893d-4490-b9da-b226d670363c",
               "ten_de_muc"  =>   "Cơ quan đại diện nước Cộng hòa Xã hội Chủ nghĩa Việt Nam ở nước ngoài",
               "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "c8ba5bc7-224a-4f31-8d92-567613f68ca9",
               "ten_de_muc"  =>   "Bảo hiểm xã hội",
               "hash_chu_de"  =>   "5576c952-dabe-4363-b94a-13419996ff4b",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "cd978e77-1991-4698-a663-ad2013c7a9f1",
               "ten_de_muc"  =>   "Giáo dục",
               "hash_chu_de"  =>   "0fb2411e-095b-4095-bbbe-fb8465ec4199",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "e7b9346d-dea5-49c5-a166-bd41599dd9e7",
               "ten_de_muc"  =>   "Đấu giá tài sản",
               "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "e8e1515c-249d-4a9b-af30-ac0d8a3aac7d",
               "ten_de_muc"  =>   "Tương trợ tư pháp",
               "hash_chu_de"  =>   "01684735-cbae-4b6f-9471-1010ab2f350a",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "e982aa33-8e27-4d94-99e9-b513b6993c6d",
               "ten_de_muc"  =>   "Giá",
               "hash_chu_de"  =>   "7a9dcc15-370d-40b4-a02b-28e583b25dbf",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "e5ca7d0c-8da3-49f6-b631-e061b904c687",
               "ten_de_muc"  =>   "Án phí, lệ phí Tòa án (loại bỏ)",
               "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "e6c9c518-5eb6-4bee-a980-e144e80fc213",
               "ten_de_muc"  =>   "Cán bộ, công chức",
               "hash_chu_de"  =>   "cb5c6841-2c38-48ca-b946-da24c8d8a099",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "eb0e4753-243e-4344-90e6-70aaf5188a6d",
               "ten_de_muc"  =>   "Dân sự",
               "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "ed278a00-f167-476a-8719-bffc8cb3a4c8",
               "ten_de_muc"  =>   "Hoạt động nghệ thuật biểu diễn",
               "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "eeffe922-dc02-4aef-89a3-3f26e19a2e62",
               "ten_de_muc"  =>   "Chứng minh nhân dân",
               "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "f5a43ce4-3b6e-4fc6-8c1e-eb7222d51d27",
               "ten_de_muc"  =>   "Kế toán",
               "hash_chu_de"  =>   "9daf2b7f-cf24-4c97-adf8-0903f6b7f18e",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "f7d0fe22-a98a-4ae1-922a-d88a7970be32",
               "ten_de_muc"  =>   "Cơ chế hỗ trợ phát triển các dự án điện gió tại Việt Nam (loại bỏ)",
               "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "fc3ab628-e974-4615-9209-270bd558b40e",
               "ten_de_muc"  =>   "Công đoàn",
               "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "fe2f89c2-15c9-4a77-bdf8-f4898d545be7",
               "ten_de_muc"  =>   "Hòa giải ở cơ sở",
               "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
               "so_thu_tu"  =>   "1",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "f601c67b-6eec-4cc8-9f5a-848dcd4e2329",
               "ten_de_muc"  =>   "Quản lý nợ công",
               "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "f4428e88-cf73-4d8f-920d-ae402512fe94",
               "ten_de_muc"  =>   "Người cao tuổi",
               "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "e78855bc-bfb3-4c1f-8582-168945065e04",
               "ten_de_muc"  =>   "Bảo vệ sức khỏe nhân dân",
               "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "e51fdb4d-9c73-44bc-9fae-10c4cde48953",
               "ten_de_muc"  =>   "Công an xã",
               "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "d1ac30ec-b37c-448d-90c2-cf94b0794564",
               "ten_de_muc"  =>   "Kinh doanh bất động sản",
               "hash_chu_de"  =>   "11a7e159-46bf-48bf-93ec-4e415f84c678",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "c1ceaaf5-7a2d-4763-9a40-9a5c5a2d183c",
               "ten_de_muc"  =>   "Hoạt động thông tin, báo chí của báo chí nước ngoài, cơ quan đại diện nước ngoài, tổ chức nước ngoài tại Việt Nam",
               "hash_chu_de"  =>   "73b6a37d-b55b-443d-b0fd-8f7d1b215ca1",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "cff88bae-70b7-4ad7-84ca-cdeecfaf89aa",
               "ten_de_muc"  =>   "Giáo dục đại học",
               "hash_chu_de"  =>   "0fb2411e-095b-4095-bbbe-fb8465ec4199",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "d8e4a3a0-254c-4593-967c-214ae12bcb0f",
               "ten_de_muc"  =>   "Các công cụ chuyển nhượng",
               "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "d9e2a674-7659-4e9d-9cdd-5aa21a50cb69",
               "ten_de_muc"  =>   "Phòng, chống tham nhũng",
               "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "db2f0e24-579c-40dc-ba36-8a3f27dddffb",
               "ten_de_muc"  =>   "Hải quan",
               "hash_chu_de"  =>   "7a9dcc15-370d-40b4-a02b-28e583b25dbf",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "c2d76287-6995-4aed-8dfa-c3029a2e24e2",
               "ten_de_muc"  =>   "Công chứng",
               "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "bc6d8c20-c34f-4bd7-a17d-0f29f1abb7ac",
               "ten_de_muc"  =>   "Viên chức",
               "hash_chu_de"  =>   "cb5c6841-2c38-48ca-b946-da24c8d8a099",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "a6f7334f-42bb-4437-a03f-e6a04816dc9c",
               "ten_de_muc"  =>   "Khí tượng thủy văn",
               "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "ad9817c1-1032-4748-97f7-fd4db42fd04e",
               "ten_de_muc"  =>   "Lâm nghiệp",
               "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "ae5932bb-132b-4ac1-8231-ae7812efcdb3",
               "ten_de_muc"  =>   "Ban hành văn bản quy phạm pháp luật của Hội đồng nhân dân và Ủy ban nhân dân (loại bỏ)",
               "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "a2005eb5-2c8c-4ca0-910d-8d73efabab5a",
               "ten_de_muc"  =>   "Giao thông đường bộ",
               "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "82e15104-9b5b-4b48-94f2-4ab37fc8e8a1",
               "ten_de_muc"  =>   "Bưu chính",
               "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "83242e4c-1738-4140-afe5-a5d4f0b8d776",
               "ten_de_muc"  =>   "Bình đẳng giới",
               "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "84a4b90e-6b07-41ca-919d-759cfb657f3f",
               "ten_de_muc"  =>   "Bảo vệ bí mật nhà nước",
               "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "7434b4be-95be-4913-b9a4-7d67671c4466",
               "ten_de_muc"  =>   "Thi hành án dân sự",
               "hash_chu_de"  =>   "88a4972a-48c2-4def-926b-a71b9f6e4be7",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "76b5a1aa-cc76-45cf-9e54-837937d1a754",
               "ten_de_muc"  =>   "Lưu trữ",
               "hash_chu_de"  =>   "1c1f149f-f1bf-4ddb-9f6b-b2adbf17d410",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "62aa0284-6ac0-4c02-8504-945335930df9",
               "ten_de_muc"  =>   "Hoạt động chữ thập đỏ",
               "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "6ae40c23-0862-4cc6-9faf-a6591febd46e",
               "ten_de_muc"  =>   "Dầu khí",
               "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "6b408d5f-24e1-4144-8bf6-123e3225f567",
               "ten_de_muc"  =>   "Cạnh tranh",
               "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "583b913f-4d4b-46da-911c-112342c6ea49",
               "ten_de_muc"  =>   "Bảo hiểm y tế",
               "hash_chu_de"  =>   "5576c952-dabe-4363-b94a-13419996ff4b",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "554293de-37dd-4111-896d-420469f81e92",
               "ten_de_muc"  =>   "Chi phí giám định, định giá; chi phí cho người làm chứng, người phiên dịch trong tố tụng",
               "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "4e35f01e-45ff-4fc6-a105-37b0a7de5979",
               "ten_de_muc"  =>   "Biên phòng Việt Nam",
               "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "4872e9d9-201e-4ef6-bab9-e49d7e505f0c",
               "ten_de_muc"  =>   "Chứng thực (loại bỏ)",
               "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "3e044577-82d7-4a50-b5ed-42a1231c6f80",
               "ten_de_muc"  =>   "Phá sản",
               "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "414ba2e8-f259-4b94-a478-102ba6e5a180",
               "ten_de_muc"  =>   "Bầu cử đại biểu Quốc hội (loại bỏ)",
               "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "41bd48e0-70b5-4e06-8a55-6fae3449472f",
               "ten_de_muc"  =>   "Dịch Quốc hiệu, tên các cơ quan, đơn vị và chức danh lãnh đạo, cán bộ công chức trong hệ thống hành chính nhà nước sang tiếng Anh để giao dịch đối ngoại",
               "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "2cf19c6c-277f-4f20-820f-e8caf00fe650",
               "ten_de_muc"  =>   "Hỗ trợ pháp lý cho doanh nghiệp",
               "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "2efd8c6f-509f-4207-84b6-6b22ff780f2a",
               "ten_de_muc"  =>   "Lao động",
               "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "24a6c4d2-66f1-4e91-b25e-5526c4f71ae9",
               "ten_de_muc"  =>   "Tiếp cận thông tin",
               "hash_chu_de"  =>   "73b6a37d-b55b-443d-b0fd-8f7d1b215ca1",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "22643fdd-9668-4407-968a-ceac2101f1a0",
               "ten_de_muc"  =>   "Chuyển giao công nghệ",
               "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "1e2a6395-d769-4414-bf58-53b250c89583",
               "ten_de_muc"  =>   "Kiểm sát viên Viện kiểm sát nhân dân",
               "hash_chu_de"  =>   "cb5c6841-2c38-48ca-b946-da24c8d8a099",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "176d1e26-86ea-43d0-a30b-0436225de492",
               "ten_de_muc"  =>   "Đăng ký biện pháp bảo đảm",
               "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "1261f60d-7916-4275-a63d-da426d1a955d",
               "ten_de_muc"  =>   "Kiểm toán độc lập",
               "hash_chu_de"  =>   "9daf2b7f-cf24-4c97-adf8-0903f6b7f18e",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "ff7a2466-8f89-4d2b-9031-b99e8ca02a4a",
               "ten_de_muc"  =>   "Đa dạng sinh học",
               "hash_chu_de"  =>   "1657cd3c-c513-4df5-ae6b-e39a778c640d",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "f79b4160-3a6b-4eb2-8854-ac95a79a0b81",
               "ten_de_muc"  =>   "Nhuận bút, thù lao đối với tác phẩm điện ảnh, mỹ thuật, nhiếp ảnh, sân khấu và các loại hình nghệ thuật biểu diễn khác",
               "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
               "so_thu_tu"  =>   "2",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "0b675c1b-8f59-429c-ac5f-cdfed4072cab",
               "ten_de_muc"  =>   "Cơ chế hoạt động, cơ chế tài chính đối với các đơn vị sự nghiệp y tế công lập và giá dịch vụ khám bệnh, chữa bệnh của các cơ sở khám bệnh, chữa bệnh công lập",
               "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "07929ef0-f5ac-4870-886c-2e8195fa39f4",
               "ten_de_muc"  =>   "Khoáng sản",
               "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "012d9b93-c11d-48b6-b08e-14d77515ca1e",
               "ten_de_muc"  =>   "Thanh niên",
               "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "024d0bdb-4439-40e4-90ae-f3525f58351b",
               "ten_de_muc"  =>   "Giao thông đường thủy nội địa",
               "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "29f5421a-be82-4114-9002-8d58cef7f0fa",
               "ten_de_muc"  =>   "Hoạt động giám sát của Quốc hội và Hội đồng nhân dân",
               "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "2afc8615-c2a3-4d3a-b77a-fd4f71142375",
               "ten_de_muc"  =>   "Các tổ chức tín dụng",
               "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "3c2e5819-1141-455c-a5a6-1597ea904830",
               "ten_de_muc"  =>   "Xuất bản",
               "hash_chu_de"  =>   "73b6a37d-b55b-443d-b0fd-8f7d1b215ca1",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "4a142ced-63ce-410b-9bfd-60923fd10bc1",
               "ten_de_muc"  =>   "Hỗ trợ doanh nghiệp nhỏ và vừa",
               "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "4b27a678-6cea-4635-9bf3-4f3655ca74af",
               "ten_de_muc"  =>   "Kinh doanh bảo hiểm",
               "hash_chu_de"  =>   "5576c952-dabe-4363-b94a-13419996ff4b",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "4f1e7688-a75f-471f-b053-75eab7c11188",
               "ten_de_muc"  =>   "Kiểm toán Nhà nước",
               "hash_chu_de"  =>   "9daf2b7f-cf24-4c97-adf8-0903f6b7f18e",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "526b44e7-b7f6-49dc-86fd-062aeae93568",
               "ten_de_muc"  =>   "Công nghiệp quốc phòng",
               "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "527141b6-8429-4502-868e-f34c7b180e0c",
               "ten_de_muc"  =>   "Công nghệ cao",
               "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "70094636-89bd-45c5-90d2-14e1c13e8621",
               "ten_de_muc"  =>   "Người lao động Việt Nam đi làm việc ở nước ngoài theo hợp đồng",
               "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "62ca4694-ef40-4288-8ab4-e7098e95cd5c",
               "ten_de_muc"  =>   "Thủ tục bắt giữ tàu bay",
               "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "62a101f0-01c7-41a9-b6b9-a4c04a4bb34b",
               "ten_de_muc"  =>   "Chức năng, nhiệm vụ, quyền hạn và tổ chức bộ máy của tổ chức pháp chế",
               "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "68079655-45cb-43a1-8c03-6603a7c52ec6",
               "ten_de_muc"  =>   "Bảo vệ công trình quan trọng liên quan đến an ninh quốc gia",
               "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "7812bcbd-b493-41bd-9787-2589fde15e8f",
               "ten_de_muc"  =>   "Công nghệ thông tin",
               "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "6a501e4a-ba3f-40e2-902f-af4a52b14bb4",
               "ten_de_muc"  =>   "Cư trú",
               "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "9fbd9627-0235-4d28-92c7-e4b4c6e96577",
               "ten_de_muc"  =>   "Quy định thi hành Bộ luật Dân sự về bảo đảm thực hiện nghĩa vụ",
               "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "af0d43c4-2550-49ed-b13a-11ca72d1028c",
               "ten_de_muc"  =>   "Thanh tra",
               "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "a90329db-1e81-4442-af57-d69748e5bdb7",
               "ten_de_muc"  =>   "Thẩm phán và Hội thẩm Tòa án nhân dân",
               "hash_chu_de"  =>   "cb5c6841-2c38-48ca-b946-da24c8d8a099",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "a5dd4141-f13c-40f3-802d-a6175684bb0a",
               "ten_de_muc"  =>   "Quản lý ngoại thương",
               "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "bacdbd85-9876-46f4-a7e7-3575950d10f7",
               "ten_de_muc"  =>   "Người khuyết tật",
               "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "b10f42da-f79a-463d-98e0-cffc1df99fda",
               "ten_de_muc"  =>   "Điện lực",
               "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "da2154d2-f8c9-434c-b94c-e17fea6bc416",
               "ten_de_muc"  =>   "Công bố, phổ biến tác phẩm ra nước ngoài",
               "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "dc9295ff-6fda-47b1-854e-4cc831d036da",
               "ten_de_muc"  =>   "Quản lý, sử dụng tài sản công",
               "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "d0a39796-1eb4-4862-972b-87d5ad87ae2c",
               "ten_de_muc"  =>   "Hộ tịch",
               "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "c57132ec-b2a3-4e38-9433-afd6cc770a8c",
               "ten_de_muc"  =>   "Dân số",
               "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "c8ac5011-9b1f-4056-943c-e38b120b88c4",
               "ten_de_muc"  =>   "Đăng ký và quản lý hoạt động của các tổ chức phi chính phủ nước ngoài tại Việt Nam",
               "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "c9f81fd6-ecf4-4c63-a44c-6d59a4daac9c",
               "ten_de_muc"  =>   "Ngân sách nhà nước",
               "hash_chu_de"  =>   "7a9dcc15-370d-40b4-a02b-28e583b25dbf",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "f549c597-2521-4480-bc28-505b06f2e22f",
               "ten_de_muc"  =>   "Thi hành án hình sự",
               "hash_chu_de"  =>   "88a4972a-48c2-4def-926b-a71b9f6e4be7",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "f607aadf-fb26-4b0e-bc95-276da24e5b5d",
               "ten_de_muc"  =>   "Phí và lệ phí",
               "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "fed3bc5b-86a8-41a4-a1b6-2a47e30c77d1",
               "ten_de_muc"  =>   "Giám định tư pháp",
               "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "fcd37748-c924-4971-9ce2-a63754a138b0",
               "ten_de_muc"  =>   "Nhà ở",
               "hash_chu_de"  =>   "11a7e159-46bf-48bf-93ec-4e415f84c678",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "fbbe39e6-c4bc-41d7-ad09-af874ca0893c",
               "ten_de_muc"  =>   "Đê điều",
               "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
               "so_thu_tu"  =>   "3",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "ea9167c8-2106-4c53-b57d-1244d9604b71",
               "ten_de_muc"  =>   "Quy hoạch đô thị",
               "hash_chu_de"  =>   "11a7e159-46bf-48bf-93ec-4e415f84c678",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "d23549c3-e7ec-4158-9864-35fc6aefc1cc",
               "ten_de_muc"  =>   "Tiếp công dân",
               "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "c9269682-f64e-4a54-a352-98e10cadaf26",
               "ten_de_muc"  =>   "Hàng hải Việt Nam",
               "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "d762a424-dab9-400c-b04f-9a03fe7085fa",
               "ten_de_muc"  =>   "Luật sư",
               "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "d87ac709-a919-4bdb-8777-9696f549c433",
               "ten_de_muc"  =>   "Điều ước quốc tế",
               "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "ab2a3ec6-2176-4dac-a836-cde2cae944b1",
               "ten_de_muc"  =>   "Hợp nhất văn bản quy phạm pháp luật",
               "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "be7352a9-a7bd-40e6-86cc-86e18772a8fe",
               "ten_de_muc"  =>   "Thủ tục bắt giữ tàu biển",
               "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "a2284f91-14b5-47f5-b05d-51bf84d8a561",
               "ten_de_muc"  =>   "Lý lịch tư pháp",
               "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "aac1fa20-8498-4c00-b5f3-a9c1a75b0df1",
               "ten_de_muc"  =>   "Giao dịch điện tử",
               "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "ae3606a8-ef39-4d23-a46e-becbc1f86038",
               "ten_de_muc"  =>   "Tài nguyên, môi trường biển và hải đảo",
               "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "aeb7c71a-4628-4414-bc92-b822e26bd237",
               "ten_de_muc"  =>   "Quản lý và sử dụng nguồn hỗ trợ phát triển chính thức (ODA) và nguồn vốn vay ưu đãi của các nhà tài trợ",
               "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "a1df366a-8d87-4f3f-9aa9-2a14ab8c2a3a",
               "ten_de_muc"  =>   "Chứng khoán",
               "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "9d3b3dad-7259-40ca-a446-261a7e528988",
               "ten_de_muc"  =>   "Tổ chức, hoạt động của quỹ xã hội, quỹ từ thiện",
               "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "916a0b51-9d2e-4256-be6e-14c2e4b059ae",
               "ten_de_muc"  =>   "Việc làm",
               "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "8b06986b-89cf-4a8d-8a2f-e14ff9e3123e",
               "ten_de_muc"  =>   "Biên giới quốc gia",
               "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "7aa2408a-41e6-4271-99e4-7b85a55ba7d6",
               "ten_de_muc"  =>   "Quản lý thuế",
               "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "7b384cc2-bbb1-436c-a9fb-35487e6dc2ae",
               "ten_de_muc"  =>   "Mặt trận Tổ quốc Việt Nam",
               "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "69c5de18-47ab-4e67-a069-08c27a6e1ba7",
               "ten_de_muc"  =>   "Dược",
               "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "669be92e-f0d5-4aa5-a6c9-4c9817a8fe40",
               "ten_de_muc"  =>   "Thi hành tạm giữ, tạm giam",
               "hash_chu_de"  =>   "88a4972a-48c2-4def-926b-a71b9f6e4be7",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "74254489-5f53-472e-978a-f6af98103323",
               "ten_de_muc"  =>   "Trồng trọt",
               "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "4342e880-6160-4d52-85ba-671ad605adae",
               "ten_de_muc"  =>   "Hóa chất",
               "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "59d6a8e8-a660-4c2e-b438-50123aee8ce2",
               "ten_de_muc"  =>   "Hàm, cấp ngoại giao",
               "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "4913a1cf-5f78-471c-a807-ed5f8c57aaee",
               "ten_de_muc"  =>   "Hôn nhân và gia đình",
               "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "4920f114-9be7-403d-8de8-4d9340680d4e",
               "ten_de_muc"  =>   "Điều kiện về an ninh, trật tự đối với một số ngành, nghề kinh doanh có điều kiện",
               "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "47d2af30-c19b-4481-a0e1-47045635b0a3",
               "ten_de_muc"  =>   "Tổ chức và hoạt động của Thừa phát lại",
               "hash_chu_de"  =>   "88a4972a-48c2-4def-926b-a71b9f6e4be7",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "41685e38-e7ab-4c85-a35e-fb1557319a78",
               "ten_de_muc"  =>   "Đo lường",
               "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "3ed05e51-5d2b-483a-a770-238f62a6ad25",
               "ten_de_muc"  =>   "Công tác phòng không nhân dân (loại bỏ)",
               "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "3fc237d4-1e47-4b5e-a651-aa7e2002bc48",
               "ten_de_muc"  =>   "Ngân hàng Nhà nước Việt Nam",
               "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "3ab62963-aeea-43da-b7b9-209ebdb37946",
               "ten_de_muc"  =>   "Phòng, chống mại dâm",
               "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "28115daa-9d22-4d88-8690-c08d3c85b96f",
               "ten_de_muc"  =>   "Thực hành tiết kiệm, chống lãng phí",
               "hash_chu_de"  =>   "7a9dcc15-370d-40b4-a02b-28e583b25dbf",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "02ffb112-0020-4201-a689-eb3c4b60d1a9",
               "ten_de_muc"  =>   "Di sản văn hóa",
               "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "1dc74584-acb9-4572-95f5-3e46bb5524d2",
               "ten_de_muc"  =>   "Hợp tác xã",
               "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
               "so_thu_tu"  =>   "4",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "1be13677-e642-46c3-9f06-1f9510c3ee84",
               "ten_de_muc"  =>   "Quản lý và sử dụng viện trợ không hoàn lại không thuộc hỗ trợ phát triển chính thức của các cơ quản, tổ chức, cá nhân nước ngoài dành cho Việt Nam",
               "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
               "so_thu_tu"  =>   "5",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "19cf24e0-40e1-4a77-b7d6-977575e0e5f2",
               "ten_de_muc"  =>   "Khuyến công",
               "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
               "so_thu_tu"  =>   "5",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "11be5109-f55e-41ed-b890-0168cc4aacbc",
               "ten_de_muc"  =>   "Hàm, cấp ngoại giao",
               "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
               "so_thu_tu"  =>   "5",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "178b89ce-ae3f-4a79-9785-467a03ed47e5",
               "ten_de_muc"  =>   "Xây dựng",
               "hash_chu_de"  =>   "11a7e159-46bf-48bf-93ec-4e415f84c678",
               "so_thu_tu"  =>   "5",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "0abd54e4-923f-48a3-9f22-b9672dcf4185",
               "ten_de_muc"  =>   "Hiến, lấy, ghép mô, bộ phận cơ thể người và hiến, lấy xác",
               "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
               "so_thu_tu"  =>   "5",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "0dc5ba03-9284-4d66-88c9-d24c3ce5b1fe",
               "ten_de_muc"  =>   "Ưu đãi người có công với cách mạng",
               "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
               "so_thu_tu"  =>   "5",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "29b3d08e-82e7-404c-8607-26db1a607f84",
               "ten_de_muc"  =>   "Tần số vô tuyến điện",
               "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
               "so_thu_tu"  =>   "5",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "2b14c823-f513-4350-9d72-94a30840c722",
               "ten_de_muc"  =>   "Tài nguyên nước",
               "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
               "so_thu_tu"  =>   "5",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f",
               "ten_de_muc"  =>   "Tố tụng dân sự",
               "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
               "so_thu_tu"  =>   "5",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "213aa299-188e-4c1d-af68-ba87a99d849b",
               "ten_de_muc"  =>   "Quyền lập hội và tổ chức, hoạt động, quản lý hội",
               "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
               "so_thu_tu"  =>   "5",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "26f7a2a3-4962-4fda-852b-49da69886c12",
               "ten_de_muc"  =>   "Du lịch",
               "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
               "so_thu_tu"  =>   "5",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "32791cd9-b864-47f1-aefa-bd5d57cd3202",
               "ten_de_muc"  =>   "Thủ đô",
               "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
               "so_thu_tu"  =>   "5",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "30eb5989-103c-41de-9b52-3047233f2d9f",
               "ten_de_muc"  =>   "Khoa học và công nghệ",
               "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
               "so_thu_tu"  =>   "5",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "606f1686-5fd0-4a16-aa1b-21acef306e78",
               "ten_de_muc"  =>   "Kiểm soát thủ tục hành chính",
               "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
               "so_thu_tu"  =>   "5",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "5679c4d3-5ccc-4bd8-8ed9-e849a866f444",
               "ten_de_muc"  =>   "Hàng không dân dụng Việt Nam",
               "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
               "so_thu_tu"  =>   "5",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "74c5ded7-629a-4da1-b2ed-f8f29866d114",
               "ten_de_muc"  =>   "Dân quân tự vệ",
               "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
               "so_thu_tu"  =>   "5",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "7c82e103-c4c2-4dbe-8ce1-3710f38bfc16",
               "ten_de_muc"  =>   "Thuế bảo vệ môi trường",
               "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
               "so_thu_tu"  =>   "5",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "8bf5b97d-4c67-45ea-92b7-d2e2c28bca6a",
               "ten_de_muc"  =>   "Tổ hợp tác",
               "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
               "so_thu_tu"  =>   "5",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "8fcdd797-43ee-4c72-924d-119a7395ed59",
               "ten_de_muc"  =>   "Nuôi con nuôi",
               "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
               "so_thu_tu"  =>   "5",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "b10e4fa0-bfe1-42c1-8ff0-0af74ec834ed",
               "ten_de_muc"  =>   "An toàn, vệ sinh lao động",
               "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
               "so_thu_tu"  =>   "5",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "bc9a9ade-0c9f-43cc-8cc2-8c69773d163e",
               "ten_de_muc"  =>   "Tố cáo",
               "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
               "so_thu_tu"  =>   "5",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "da0b1767-9a75-469a-b2d9-47038a564c65",
               "ten_de_muc"  =>   "Ngoại hối",
               "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
               "so_thu_tu"  =>   "5",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "d92bb10f-899d-478f-a0c3-605cce865129",
               "ten_de_muc"  =>   "Chăn nuôi",
               "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
               "so_thu_tu"  =>   "5",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "dae8ac70-fd7f-41ed-84e8-90980ae92475",
               "ten_de_muc"  =>   "Phòng, chống bạo lực gia đình",
               "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
               "so_thu_tu"  =>   "5",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "d41ae77e-7fa3-4db3-b810-d4019ad6db18",
               "ten_de_muc"  =>   "Đấu thầu",
               "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
               "so_thu_tu"  =>   "5",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "d4bc3980-2c1f-4dfc-b2e9-0943e6aa611d",
               "ten_de_muc"  =>   "Trợ giúp pháp lý",
               "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
               "so_thu_tu"  =>   "5",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "cf43428f-7076-42b8-b0ef-678f73203eef",
               "ten_de_muc"  =>   "Một số biện pháp bảo đảm trật tự công cộng",
               "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
               "so_thu_tu"  =>   "5",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "e499d586-a641-4a44-8591-7814730dc583",
               "ten_de_muc"  =>   "Biển Việt Nam",
               "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
               "so_thu_tu"  =>   "5",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "ccc43f43-94e8-47f7-a669-677d5a9e3c08",
               "ten_de_muc"  =>   "Thuế giá trị gia tăng",
               "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
               "so_thu_tu"  =>   "6",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "ee26521a-9b59-4b41-898b-0ffe23805c9a",
               "ten_de_muc"  =>   "Tổ chức Chính phủ",
               "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
               "so_thu_tu"  =>   "6",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "fa4dfe9e-3948-4137-8164-88c8612fa68d",
               "ten_de_muc"  =>   "Đầu tư",
               "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
               "so_thu_tu"  =>   "6",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "e30822e9-e0e3-4359-9866-bc8892d06202",
               "ten_de_muc"  =>   "Trưng mua, trưng dụng tài sản",
               "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
               "so_thu_tu"  =>   "6",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "c56140e5-f4ce-4cbd-ac38-a4e2cd3f4169",
               "ten_de_muc"  =>   "Quản lý phân bón",
               "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
               "so_thu_tu"  =>   "6",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "a69013cd-2792-4838-8fac-76a54ec31022",
               "ten_de_muc"  =>   "Phòng cháy và chữa cháy",
               "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
               "so_thu_tu"  =>   "6",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "a6942cbd-cf83-4f3f-b314-27a25a014442",
               "ten_de_muc"  =>   "Động viên công nghiệp",
               "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
               "so_thu_tu"  =>   "6",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "8585b6f4-56c8-457e-afd1-c8e17d60afcb",
               "ten_de_muc"  =>   "Hoạt động viễn thám",
               "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
               "so_thu_tu"  =>   "6",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "7e486c5b-907f-4a92-9c0f-1742c0d013fb",
               "ten_de_muc"  =>   "Khám bệnh, chữa bệnh",
               "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
               "so_thu_tu"  =>   "6",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "9a0e0abb-24e0-4cf1-95a0-9597195ae845",
               "ten_de_muc"  =>   "Kiểm tra và xử lý văn bản quy phạm pháp luật",
               "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
               "so_thu_tu"  =>   "6",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "a20d4a54-701d-4ef7-9593-75068883d1d9",
               "ten_de_muc"  =>   "Viễn thông",
               "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
               "so_thu_tu"  =>   "6",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "a1971a0f-7216-4ee2-b312-9b376f35fbd8",
               "ten_de_muc"  =>   "Thỏa thuận quốc tế",
               "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
               "so_thu_tu"  =>   "6",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "7cdd63fb-16ea-4ed4-bf3c-6529a021b3d2",
               "ten_de_muc"  =>   "Tố tụng hành chính",
               "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
               "so_thu_tu"  =>   "6",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "6b4d44e7-dd9d-4879-bab2-c8c46de13d06",
               "ten_de_muc"  =>   "Phòng, chống rửa tiền",
               "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
               "so_thu_tu"  =>   "6",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "68aef5c8-dbb5-4e57-9d86-564d971b622a",
               "ten_de_muc"  =>   "Điện ảnh",
               "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
               "so_thu_tu"  =>   "6",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "427ac7e7-cae1-474a-9284-28eeada93cd6",
               "ten_de_muc"  =>   "Thủy lợi",
               "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
               "so_thu_tu"  =>   "6",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "316fd577-4857-4351-aa3e-ad9eba3ceaaf",
               "ten_de_muc"  =>   "Năng lượng nguyên tử",
               "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
               "so_thu_tu"  =>   "6",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "34708b80-eee9-443c-aa12-de41c9afebd5",
               "ten_de_muc"  =>   "Kiểm tra và xử lý văn bản quy phạm pháp luật (loại bỏ)",
               "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
               "so_thu_tu"  =>   "6",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "22caf491-de7a-428a-888a-ed629c7f7a35",
               "ten_de_muc"  =>   "Tư vấn pháp luật",
               "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
               "so_thu_tu"  =>   "6",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "2bcac534-554f-47d3-b299-bd9cfc1b92d5",
               "ten_de_muc"  =>   "Cựu chiến binh",
               "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
               "so_thu_tu"  =>   "6",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "18b6dee2-0ff9-4cb7-b2b4-fb6ee352013e",
               "ten_de_muc"  =>   "Công an nhân dân",
               "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
               "so_thu_tu"  =>   "6",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "ff9bd05c-2e15-4b95-9b1c-26dbd5684060",
               "ten_de_muc"  =>   "Quốc tịch Việt Nam",
               "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
               "so_thu_tu"  =>   "6",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "11c45594-f8b8-4299-9b1b-ee6c01f943e5",
               "ten_de_muc"  =>   "Tổ chức chính quyền địa phương",
               "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
               "so_thu_tu"  =>   "7",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "05a9e8b3-09c8-4c0c-a99e-117a864efe3d",
               "ten_de_muc"  =>   "Phòng, chống ma túy",
               "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
               "so_thu_tu"  =>   "7",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0",
               "ten_de_muc"  =>   "Tố tụng hình sự",
               "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
               "so_thu_tu"  =>   "7",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "3049f520-19c1-439b-ab42-3994f94824cc",
               "ten_de_muc"  =>   "Giáo dục quốc phòng và an ninh",
               "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
               "so_thu_tu"  =>   "7",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "2f7bed93-ec8e-4d43-9111-7f1caa9cc74f",
               "ten_de_muc"  =>   "Hoạt động mỹ thuật",
               "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
               "so_thu_tu"  =>   "7",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "59a38639-f218-4f4d-872e-c2d9f9a69dd0",
               "ten_de_muc"  =>   "Pháp điển hệ thống quy phạm pháp luật",
               "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
               "so_thu_tu"  =>   "7",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "7d8d6ae7-3937-4b64-aa21-9f5260ea2a31",
               "ten_de_muc"  =>   "Lập và hoạt động của văn phòng đại diện của các tổ chức hợp tác, nghiên cứu của nước ngoài tại Việt Nam",
               "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
               "so_thu_tu"  =>   "7",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "7ca2c60d-7e8f-4604-b622-7d297acd506f",
               "ten_de_muc"  =>   "Cơ yếu",
               "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
               "so_thu_tu"  =>   "7",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "74578908-a474-48ba-a2e1-488ce45475aa",
               "ten_de_muc"  =>   "Thuế sử dụng đất nông nghiệp",
               "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
               "so_thu_tu"  =>   "7",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "913b88fd-89da-4fc5-8268-477ae6d71bac",
               "ten_de_muc"  =>   "Sử dụng năng lượng tiết kiệm và hiệu quả",
               "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
               "so_thu_tu"  =>   "7",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "9307592e-075c-4fed-ae43-f64ba345399c",
               "ten_de_muc"  =>   "Quản lý, sử dụng vốn nhà nước đầu tư vào sản xuất, kinh doanh tại doanh nghiệp",
               "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
               "so_thu_tu"  =>   "7",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "a650d744-65b5-4ec6-a985-8a52d5e6a524",
               "ten_de_muc"  =>   "Phòng, chống bệnh truyền nhiễm",
               "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
               "so_thu_tu"  =>   "7",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "d5ad4f7a-8411-47ad-a46a-1c6d6dfd46b2",
               "ten_de_muc"  =>   "Đầu tư công",
               "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
               "so_thu_tu"  =>   "7",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "c0ed6aee-d94b-4d9c-8af8-d51501df344e",
               "ten_de_muc"  =>   "Khuyến nông (loại bỏ)",
               "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
               "so_thu_tu"  =>   "7",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "ecc7fc57-1135-48c4-8472-3ecaa5427829",
               "ten_de_muc"  =>   "Sở hữu trí tuệ",
               "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
               "so_thu_tu"  =>   "7",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "f48e34a3-d808-406e-911d-c5b9fd05e693",
               "ten_de_muc"  =>   "Tiêu chuẩn và quy chuẩn kỹ thuật",
               "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
               "so_thu_tu"  =>   "8",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "d6bb8050-369a-41fb-b2ad-11dc28ebd3b8",
               "ten_de_muc"  =>   "Quản lý sản xuất, kinh doanh muối",
               "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
               "so_thu_tu"  =>   "8",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "bfffac09-7a35-4529-8a83-5849b3267f3f",
               "ten_de_muc"  =>   "Phòng, chống nhiễm vi rút gây ra hội chứng suy giảm miễn dịch mắc phải ở người",
               "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
               "so_thu_tu"  =>   "8",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "b8f68141-2d67-4c85-886c-58a9bbf45472",
               "ten_de_muc"  =>   "Hoạt động văn hóa và kinh doanh dịch vụ văn hóa công cộng",
               "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
               "so_thu_tu"  =>   "8",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "b22e0b0a-4de6-4d97-8f57-5a8f4d4a9b09",
               "ten_de_muc"  =>   "Tổ chức Quốc hội",
               "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
               "so_thu_tu"  =>   "8",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "74d84211-de1e-44b4-b2c2-976d87c3190b",
               "ten_de_muc"  =>   "Nhập cảnh, xuất cảnh, quá cảnh, cư trú của người nước ngoài tại Việt Nam",
               "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
               "so_thu_tu"  =>   "8",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "7e3aa61c-90f6-4d9d-9cc7-522ed4a5cea2",
               "ten_de_muc"  =>   "Khu công nghiệp, khu chế xuất và khu kinh tế",
               "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
               "so_thu_tu"  =>   "8",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "6d281129-df44-468d-91ef-0e75fa435310",
               "ten_de_muc"  =>   "Trách nhiệm bồi thường của Nhà nước",
               "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
               "so_thu_tu"  =>   "8",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "34030833-66c0-4966-9dff-1f02e805d94f",
               "ten_de_muc"  =>   "Phổ biến, giáo dục pháp luật",
               "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
               "so_thu_tu"  =>   "8",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "20c13bd9-9dee-45c7-a6f5-11d531e74da8",
               "ten_de_muc"  =>   "Phòng, chống mua bán người",
               "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
               "so_thu_tu"  =>   "8",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "04e3798c-9ab3-4896-a06a-dbc630f8d59c",
               "ten_de_muc"  =>   "Một số chính sách đối với người Việt Nam ở nước ngoài",
               "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
               "so_thu_tu"  =>   "8",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "059ac230-9bb7-4445-b8e1-20819540ccd9",
               "ten_de_muc"  =>   "Thuế sử dụng đất phi nông nghiệp",
               "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
               "so_thu_tu"  =>   "8",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "1a6472e3-9daf-4b62-b672-1f0dd9f8450f",
               "ten_de_muc"  =>   "Cảnh sát biển Việt Nam",
               "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
               "so_thu_tu"  =>   "8",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "3c3bfd95-920c-404d-82f9-c95af4d8b4e1",
               "ten_de_muc"  =>   "Trọng tài thương mại",
               "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
               "so_thu_tu"  =>   "9",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "3cd17527-175c-446a-8b09-5c4cbfcb4f1f",
               "ten_de_muc"  =>   "Phòng, chống tác hại của thuốc lá",
               "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
               "so_thu_tu"  =>   "9",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "6d681037-f829-4df0-be87-0d964f5141a4",
               "ten_de_muc"  =>   "Lập, phê duyệt và quản lý quy hoạch tổng thể phát triển kinh tế - xã hội",
               "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
               "so_thu_tu"  =>   "9",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "7bafb7cc-e2e8-4dc1-8a43-6ce1b5015e9c",
               "ten_de_muc"  =>   "Quy chế các đoàn của ta ra nước ngoài và các đoàn nước ngoài vào nước ta",
               "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
               "so_thu_tu"  =>   "9",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "5f523176-05b6-4d4e-903d-a12faffaa759",
               "ten_de_muc"  =>   "Quảng cáo",
               "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
               "so_thu_tu"  =>   "9",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "53892a89-6ea2-44c2-8f84-840fab0e8c47",
               "ten_de_muc"  =>   "Phòng, chống khủng bố",
               "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
               "so_thu_tu"  =>   "9",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "472928db-3e71-4968-934b-5c4d9720e40e",
               "ten_de_muc"  =>   "Tổ chức Tòa án nhân dân",
               "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
               "so_thu_tu"  =>   "9",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "a7598f56-47fc-48c0-855f-30e4a34cb4f5",
               "ten_de_muc"  =>   "Một số hoạt động kinh doanh đặc thù",
               "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
               "so_thu_tu"  =>   "9",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "aec013b7-861e-4925-be1f-a8a2469346e4",
               "ten_de_muc"  =>   "Thuế tài nguyên",
               "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
               "so_thu_tu"  =>   "9",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "9fcc00f2-817c-4857-9347-1a65efa9c0cd",
               "ten_de_muc"  =>   "Cảnh sát môi trường",
               "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
               "so_thu_tu"  =>   "9",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "9b1d96e2-feb2-4e7f-824b-b50ed8ee2a7a",
               "ten_de_muc"  =>   "Phát triển ngành nghề nông thôn",
               "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
               "so_thu_tu"  =>   "9",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "96d672a7-a611-424b-bbf5-31467640284c",
               "ten_de_muc"  =>   "Quản lý hợp tác quốc tế về pháp luật",
               "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
               "so_thu_tu"  =>   "9",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "ca22c0ee-5a52-4a85-bfe6-06919ef05ce7",
               "ten_de_muc"  =>   "Lực lượng dự bị động viên",
               "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
               "so_thu_tu"  =>   "9",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "caa9cca3-02cc-4751-b79c-6e668f6b5e37",
               "ten_de_muc"  =>   "Quyền ưu đãi, miễn trừ dành cho cơ quan đại diện ngoại giao, cơ quan lãnh sự và cơ quan đại diện của tổ chức quốc tế tại Việt Nam",
               "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
               "so_thu_tu"  =>   "9",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "cf97fc4b-c101-4750-a556-063f0d29e520",
               "ten_de_muc"  =>   "Quản lý, sử dụng pháo",
               "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
               "so_thu_tu"  =>   "10",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "e071327d-c715-4ad2-9dd7-e8c2aa4e912a",
               "ten_de_muc"  =>   "Xuất cảnh, nhập cảnh của công dân Việt Nam",
               "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
               "so_thu_tu"  =>   "10",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "f807bad9-3b81-41c5-bbc1-b4ab37a89431",
               "ten_de_muc"  =>   "Điều kiện sản xuất mỹ phẩm",
               "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
               "so_thu_tu"  =>   "10",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "995b0a50-c2a1-45d8-baf6-a0b02c7821cf",
               "ten_de_muc"  =>   "Một số chế độ đối với đối tượng tham gia chiến tranh bảo vệ Tổ quốc, làm nhiệm vụ quốc tế ở Căm-pu-chia, giúp bạn Lào sau ngày 30 tháng 4 năm 1975 có từ đủ 20 năm trở lên phục vụ trong quân đội, công an đã phục viên, xuất ngũ, thôi việc",
               "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
               "so_thu_tu"  =>   "10",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "ab116df3-d3ed-4a95-95bf-0d6b8962e724",
               "ten_de_muc"  =>   "Thuế thu nhập cá nhân",
               "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
               "so_thu_tu"  =>   "10",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "b60f2225-2af4-4339-9980-3e1a78bc9ea5",
               "ten_de_muc"  =>   "Tổ chức, quản lý hội nghị, hội thảo quốc tế tại Việt Nam",
               "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
               "so_thu_tu"  =>   "10",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "410d4005-c2b8-4f05-b9c0-96ec01b866d7",
               "ten_de_muc"  =>   "Quy chế đặt tên, đổi tên đường, phố và công trình công cộng",
               "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
               "so_thu_tu"  =>   "10",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "7d0dfc81-bcee-4437-9236-9066a6f45d3f",
               "ten_de_muc"  =>   "Tổ chức Viện kiểm sát nhân dân",
               "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
               "so_thu_tu"  =>   "10",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "3bcee07e-6c24-43df-9c31-c8850ed610a8",
               "ten_de_muc"  =>   "Một số hoạt động kinh doanh đặc thù",
               "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
               "so_thu_tu"  =>   "10",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "2162aa7c-d532-413b-8704-b82973267484",
               "ten_de_muc"  =>   "Phòng, chống thiên tai",
               "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
               "so_thu_tu"  =>   "10",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "18c03099-0cb1-433e-ace2-68b646075d1e",
               "ten_de_muc"  =>   "Rà soát, hệ thống hóa văn bản quy phạm pháp luật (loại bỏ)",
               "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
               "so_thu_tu"  =>   "10",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "09fb5301-812d-4630-8f9a-9c8cac67a21c",
               "ten_de_muc"  =>   "Thi hành tạm giữ, tạm giam",
               "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
               "so_thu_tu"  =>   "10",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "044627ad-52ff-4294-90d6-8b129b705963",
               "ten_de_muc"  =>   "Quản lý thức ăn chăn nuôi (loại bỏ)",
               "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
               "so_thu_tu"  =>   "11",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "1fd42d83-9d78-4dd4-b6b6-73e9bd3472e1",
               "ten_de_muc"  =>   "An ninh mạng",
               "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
               "so_thu_tu"  =>   "11",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "6d1742f8-bf8d-45f2-a18b-44fa107c360a",
               "ten_de_muc"  =>   "Tổ chức cơ quan điều tra hình sự",
               "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
               "so_thu_tu"  =>   "11",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "9bd8b88d-65b4-44e2-b4b0-34c74810af4a",
               "ten_de_muc"  =>   "Nghĩa vụ quân sự",
               "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
               "so_thu_tu"  =>   "11",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "93811189-2f4e-4bb7-90ce-cd15c0a093b7",
               "ten_de_muc"  =>   "Theo dõi tình hình thi hành pháp luật",
               "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
               "so_thu_tu"  =>   "11",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "8e9f6ba1-5870-479a-8030-0fa7c13c2d1a",
               "ten_de_muc"  =>   "Thể dục, thể thao",
               "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
               "so_thu_tu"  =>   "11",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "fbe36156-5fe3-4ddd-a36a-4052eb2f6be0",
               "ten_de_muc"  =>   "Quản lý thức ăn chăn nuôi",
               "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
               "so_thu_tu"  =>   "11",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "e50cbcc9-5eb2-4a22-b6c4-2f08f2811fdb",
               "ten_de_muc"  =>   "Phòng, chống tác hại của rượu, bia",
               "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
               "so_thu_tu"  =>   "11",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "e30bae87-de7f-4082-b4da-a4ace65447a0",
               "ten_de_muc"  =>   "Tổ chức chính quyền địa phương",
               "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
               "so_thu_tu"  =>   "11",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "e3dbc67f-7664-4196-b4b9-a785a0075b2a",
               "ten_de_muc"  =>   "Quản lý, sử dụng vũ khí, vật liệu nổ và công cụ hỗ trợ",
               "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
               "so_thu_tu"  =>   "11",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "db87752b-26a5-4f34-8dc2-bd8e6a823c21",
               "ten_de_muc"  =>   "Thuế thu nhập doanh nghiệp",
               "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
               "so_thu_tu"  =>   "11",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "c8606224-625f-4a7c-9054-b81d95af4068",
               "ten_de_muc"  =>   "Quản lý thị trường",
               "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
               "so_thu_tu"  =>   "11",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "f0f0c740-cb1f-4013-b5bc-9e14672d586d",
               "ten_de_muc"  =>   "Cảnh vệ",
               "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
               "so_thu_tu"  =>   "12",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "fa959814-d73c-4253-8857-795185e44d16",
               "ten_de_muc"  =>   "Quân nhân chuyên nghiệp, công nhân và viên chức quốc phòng",
               "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
               "so_thu_tu"  =>   "12",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "f459bbbc-e15c-416d-b9f4-086464028e0f",
               "ten_de_muc"  =>   "Quản lý và sử dụng con dấu",
               "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
               "so_thu_tu"  =>   "12",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "956c36d8-0ced-4865-a298-51759c932274",
               "ten_de_muc"  =>   "Thư viện",
               "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
               "so_thu_tu"  =>   "12",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "87bb6177-4c03-4173-8a12-9a75337bb2e0",
               "ten_de_muc"  =>   "Tiếp nhận, xử lý phản ánh, kiến nghị của cá nhân, tổ chức về quy định hành chính",
               "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
               "so_thu_tu"  =>   "12",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "2fe0aa65-9b7f-4df7-859e-a5aab478512d",
               "ten_de_muc"  =>   "Thú y",
               "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
               "so_thu_tu"  =>   "12",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "2e267ed0-726e-456e-b9be-4fd43101bdf7",
               "ten_de_muc"  =>   "Thuế tiêu thụ đặc biệt",
               "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
               "so_thu_tu"  =>   "12",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "0cf4f78c-b5f8-4618-8803-41a226c2ab84",
               "ten_de_muc"  =>   "Quản lý trang thiết bị y tế",
               "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
               "so_thu_tu"  =>   "12",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "1a57cf9e-7470-4872-ab8e-19658d465dc5",
               "ten_de_muc"  =>   "Hòa giải, đối thoại tại Tòa án",
               "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
               "so_thu_tu"  =>   "12",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "1acc68c2-3a9e-4a00-b5f2-74a47a31b7ae",
               "ten_de_muc"  =>   "Quy hoạch",
               "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
               "so_thu_tu"  =>   "12",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "4b478410-d0e7-4487-9d32-889cd067b4fb",
               "ten_de_muc"  =>   "Thuế xuất khẩu, thuế nhập khẩu",
               "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
               "so_thu_tu"  =>   "13",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "60e61f6a-bddb-4e43-94a0-59e153947e7a",
               "ten_de_muc"  =>   "Thương mại",
               "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
               "so_thu_tu"  =>   "13",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "8235ccff-cbf5-4e10-a1a5-20842940408f",
               "ten_de_muc"  =>   "Thực hiện nếp sống văn minh trong việc cưới, việc tang",
               "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
               "so_thu_tu"  =>   "13",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "9d9a7001-0799-4bd8-8c31-964f9a7b9603",
               "ten_de_muc"  =>   "Xử lý vi phạm hành chính",
               "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
               "so_thu_tu"  =>   "13",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "97b77c60-c651-4741-9728-b69544031858",
               "ten_de_muc"  =>   "Quốc phòng",
               "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
               "so_thu_tu"  =>   "13",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "a3eb99fa-1160-42b1-90ff-39fe66fd4f85",
               "ten_de_muc"  =>   "Thủy sản",
               "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
               "so_thu_tu"  =>   "13",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "f9c15fe6-0ef1-4870-959e-d0cf1a2deb41",
               "ten_de_muc"  =>   "Thực hiện dân chủ ở xã, phường, thị trấn",
               "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
               "so_thu_tu"  =>   "13",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "c78e4b28-0d12-4211-98a5-47fbbd144f7b",
               "ten_de_muc"  =>   "Tổ chức lễ tang cán bộ, công chức, viên chức",
               "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
               "so_thu_tu"  =>   "14",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "d8bc3d2e-b1e3-4023-a2dd-23005a3ca616",
               "ten_de_muc"  =>   "Sĩ quan Quân đội nhân dân Việt Nam",
               "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
               "so_thu_tu"  =>   "14",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "51ae5342-6f32-4eaf-9b8b-01add97cbee4",
               "ten_de_muc"  =>   "Cảnh sát cơ động",
               "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
               "so_thu_tu"  =>   "14",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "6e01ee92-35fd-4279-9b99-695c406b0785",
               "ten_de_muc"  =>   "Thực hiện dân chủ trong hoạt động của cơ quan hành chính nhà nước và đơn vị sự nghiệp công lập",
               "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
               "so_thu_tu"  =>   "14",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "0aeb67ae-9e3e-42c0-830e-33cc254cf384",
               "ten_de_muc"  =>   "Căn cước công dân",
               "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
               "so_thu_tu"  =>   "15",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "b892dee4-ee6e-4228-988f-7101b89443de",
               "ten_de_muc"  =>   "Trưng cầu ý dân",
               "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
               "so_thu_tu"  =>   "15",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "a19e4401-8e66-438e-9f76-f769826ebbe3",
               "ten_de_muc"  =>   "Thực hiện chế độ hưu trí đối với quân nhân trực tiếp tham gia kháng chiến chống Mỹ cứu nước từ ngày 30 tháng 4 năm 1975 trở về trước có 20 năm trở lên phục vụ quân đội đã phục viên, xuất ngũ",
               "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
               "so_thu_tu"  =>   "15",
               "id_chu_de"   => 0
            ],
            [
               "hash"  =>   "87ed8af5-652f-4b67-8ce0-26632dc76ef6",
               "ten_de_muc"  =>   "Tiêu chuẩn vật chất hậu cần đối với quân nhân tại ngũ (loại bỏ)",
               "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
               "so_thu_tu"  =>   "16",
               "id_chu_de"   => 0
            ]
        ];

        DB::table('de_mucs')->delete();

        DB::table('de_mucs')->truncate();

        $list_chu_de    = ChuDe::all();
        $seeder         = array();
        foreach($list_de_muc as $key => $value) {
            foreach ($list_chu_de as $key_chu_de => $value_chu_de) {
                if( $value['hash_chu_de'] == $value_chu_de->hash) {
                    $value['id_chu_de'] = $value_chu_de->id;
                    array_push($seeder, $value);
                    break;
                }
            }
        }
        DB::table('de_mucs')->insert($seeder);
    }
}
