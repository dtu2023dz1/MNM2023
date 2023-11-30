<?php

namespace Database\Seeders;

use App\Models\DeMuc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChuongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list_chuong = [
            [
              "hash"  =>   "5102DF50-10AF-4048-B91D-1DC19D0AD38F",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "01001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "55323c64-e78f-4537-afcd-6a3c2af3c71d"
            ],
            [
              "hash"  =>   "58C47CDD-5914-4723-9B70-C8BCC05C700F",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "01001000000000002000",
              "ten_chuong"  =>   "Chương II BẢO VỆ AN NINH QUỐC GIA",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "55323c64-e78f-4537-afcd-6a3c2af3c71d"
            ],
            [
              "hash"  =>   "9AE36261-9D0B-4050-A104-E10CC777EB62",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "01001000000000003000",
              "ten_chuong"  =>   "Chương III CƠ QUAN CHUYÊN TRÁCH BẢO VỆ AN NINH QUỐC GIA",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "55323c64-e78f-4537-afcd-6a3c2af3c71d"
            ],
            [
              "hash"  =>   "D596AC50-1F72-4210-86CE-DD870A2403DB",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "01001000000000004000",
              "ten_chuong"  =>   "Chương IV QUẢN LÝ NHÀ NƯỚC VỀ AN NINH QUỐC GIA",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "55323c64-e78f-4537-afcd-6a3c2af3c71d"
            ],
            [
              "hash"  =>   "05370F7D-82D4-4B27-B41C-458FF27B5FC6",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "01001000000000005000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "55323c64-e78f-4537-afcd-6a3c2af3c71d"
            ],
            [
              "hash"  =>   "0F449936-115D-4858-9D0E-23AB55274006",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "01002000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "84a4b90e-6b07-41ca-919d-759cfb657f3f"
            ],
            [
              "hash"  =>   "41EFE383-0749-43D5-ADE5-14EC617B94A7",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "01002000000000002000",
              "ten_chuong"  =>   "Chương II PHẠM VI, PHÂN LOẠI,BAN HÀNH DANH MỤC BÍ MẬT NHÀ NƯỚC",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "84a4b90e-6b07-41ca-919d-759cfb657f3f"
            ],
            [
              "hash"  =>   "3F686ED4-A502-4144-BB5B-A9F65B04DDF9",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "01002000000000003000",
              "ten_chuong"  =>   "Chương III HOẠT ĐỘNG BẢO VỆ BÍ MẬT NHÀ NƯỚC",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "84a4b90e-6b07-41ca-919d-759cfb657f3f"
            ],
            [
              "hash"  =>   "AC096337-D6F9-4069-A38E-C81BA39B73F4",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "01002000000000004000",
              "ten_chuong"  =>   "Chương IV TRÁCH NHIỆM BẢO VỆ BÍ MẬT NHÀ NƯỚC",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "84a4b90e-6b07-41ca-919d-759cfb657f3f"
            ],
            [
              "hash"  =>   "D377BFBA-8945-47A9-85FA-0F24E2E217D2",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "01002000000000005000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "84a4b90e-6b07-41ca-919d-759cfb657f3f"
            ],
            [
              "hash"  =>   "06E291DA-15D7-446F-A703-6E7D3BE9C030",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "01003000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "68079655-45cb-43a1-8c03-6603a7c52ec6"
            ],
            [
              "hash"  =>   "17B1A815-10FF-4BE8-9752-7E60418DC4F5",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "01003000000000002000",
              "ten_chuong"  =>   "Chương II XÁC LẬP DANH MỤC CÔNG TRÌNH QUAN TRỌNG LIÊN QUAN ĐẾN AN NINH QUỐC GIA",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "68079655-45cb-43a1-8c03-6603a7c52ec6"
            ],
            [
              "hash"  =>   "562FBC06-170C-4D42-9BF6-02B93D2A6EF5",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "01003000000000003000",
              "ten_chuong"  =>   "Chương III LỰC LƯỢNG BẢO VỆ CÔNG TRÌNH QUAN TRỌNG LIÊN QUAN ĐẾN AN NINH QUỐC GIA ",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "68079655-45cb-43a1-8c03-6603a7c52ec6"
            ],
            [
              "hash"  =>   "BBEBF206-2608-4F12-8AD8-147CAA860819",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "01003000000000004000",
              "ten_chuong"  =>   "Chương IV QUẢN LÝ NHÀ NƯỚC VỀ BẢO VỆ CÔNG TRÌNH QUAN TRỌNG LIÊN QUAN ĐẾN AN NINH QUỐC GIA",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "68079655-45cb-43a1-8c03-6603a7c52ec6"
            ],
            [
              "hash"  =>   "A0345128-998E-4783-AB78-EE4DE5081E8C",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "01003000000000005000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "68079655-45cb-43a1-8c03-6603a7c52ec6"
            ],
            [
              "hash"  =>   "486C3C8A-B624-42C2-8976-9096907C0FEC",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "01004000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "8b06986b-89cf-4a8d-8a2f-e14ff9e3123e"
            ],
            [
              "hash"  =>   "FF8EB20D-185A-4652-88D3-948E9BC6D029",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "01004000000000002000",
              "ten_chuong"  =>   "Chương II CHẾ ĐỘ PHÁP LÝ VỀ BIÊN GIỚI QUỐC GIA, KHU VỰC BIÊN GIỚI",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "8b06986b-89cf-4a8d-8a2f-e14ff9e3123e"
            ],
            [
              "hash"  =>   "2A7C5903-E636-40AE-B54B-82E49C2AB18B",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "01004000000000003000",
              "ten_chuong"  =>   "Chương III XÂY DỰNG, QUẢN LÝ, BẢO VỆ BIÊN GIỚI QUỐC GIA, KHU VỰC BIÊN GIỚI",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "8b06986b-89cf-4a8d-8a2f-e14ff9e3123e"
            ],
            [
              "hash"  =>   "4A4BD64B-C4AF-4C03-863B-B4AF65F377F4",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "01004000000000004000",
              "ten_chuong"  =>   "Chương IV QUẢN LÝ NHÀ NƯỚC VỀ BIÊN GIỚI QUỐC GIA",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "8b06986b-89cf-4a8d-8a2f-e14ff9e3123e"
            ],
            [
              "hash"  =>   "4B558B2C-41B1-4262-86CE-F95BD46D0170",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "01004000000000005000",
              "ten_chuong"  =>   "Chương V KHEN THƯỞNG VÀ XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "8b06986b-89cf-4a8d-8a2f-e14ff9e3123e"
            ],
            [
              "hash"  =>   "FF8060A0-DF7E-43D6-8CC8-C58859DB522E",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "01004000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "8b06986b-89cf-4a8d-8a2f-e14ff9e3123e"
            ],
            [
              "hash"  =>   "630790EE-E70A-4EDD-BD48-A6435ED340C7",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "01005000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "e499d586-a641-4a44-8591-7814730dc583"
            ],
            [
              "hash"  =>   "98D119A3-FDD8-4DB6-8C52-398CFBC4A8FA",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "01005000000000002000",
              "ten_chuong"  =>   "Chương II VÙNG BIỂN VIỆT NAM",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "e499d586-a641-4a44-8591-7814730dc583"
            ],
            [
              "hash"  =>   "35607889-174C-41F8-9F72-D5F0D6384BD3",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "01005000000000003000",
              "ten_chuong"  =>   "Chương III HOẠT ĐỘNG TRONG VÙNG BIỂN VIỆT NAM",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "e499d586-a641-4a44-8591-7814730dc583"
            ],
            [
              "hash"  =>   "0A6E9DC4-9EAA-4A6B-961A-A53558848CBC",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "01005000000000004000",
              "ten_chuong"  =>   "Chương IV PHÁT TRIỂN KINH TẾ BIỂN",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "e499d586-a641-4a44-8591-7814730dc583"
            ],
            [
              "hash"  =>   "5192C1BC-C4C6-45DE-91CB-88E1117436E9",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "01005000000000005000",
              "ten_chuong"  =>   "Chương V TUẦN TRA, KIỂM SOÁT TRÊN BIỂN",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "e499d586-a641-4a44-8591-7814730dc583"
            ],
            [
              "hash"  =>   "FC91A44F-0484-4AB5-A345-3F87E2393CD5",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "01005000000000006000",
              "ten_chuong"  =>   "Chương VI XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "e499d586-a641-4a44-8591-7814730dc583"
            ],
            [
              "hash"  =>   "ECAF4AEA-B1A9-4941-8402-AD4FBC418D6F",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "01005000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "e499d586-a641-4a44-8591-7814730dc583"
            ],
            [
              "hash"  =>   "4E79BF1E-4539-4AC7-898D-37653799A947",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "01006000000000001000",
              "ten_chuong"  =>   "Chương I QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "18b6dee2-0ff9-4cb7-b2b4-fb6ee352013e"
            ],
            [
              "hash"  =>   "6064875C-4456-405E-9A8C-AE046A5D3C6F",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "01006000000000002000",
              "ten_chuong"  =>   "Chương II CHỨC NĂNG, NHIỆM VỤ VÀ QUYỀN HẠN CỦA CÔNG AN NHÂN DÂN",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "18b6dee2-0ff9-4cb7-b2b4-fb6ee352013e"
            ],
            [
              "hash"  =>   "251C60A5-BCF5-4776-B232-3B01ACD321C3",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "01006000000000003000",
              "ten_chuong"  =>   "Chương III TỔ CHỨC CỦA CÔNG AN NHÂN DÂN",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "18b6dee2-0ff9-4cb7-b2b4-fb6ee352013e"
            ],
            [
              "hash"  =>   "2312EFBA-BFE2-4A0D-B1CE-4F7FD0901DDD",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "01006000000000004000",
              "ten_chuong"  =>   "Chương IV SĨ QUAN, HẠ SĨ QUAN, CHIẾN SĨ CÔNG AN NHÂN DÂN",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "18b6dee2-0ff9-4cb7-b2b4-fb6ee352013e"
            ],
            [
              "hash"  =>   "1E7EEC40-AF10-45C6-A65E-8E2B556DE8F3",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "01006000000000005000",
              "ten_chuong"  =>   "Chương V BẢO ĐẢM ĐIỀU KIỆN HOẠT ĐỘNG VÀ CHẾ ĐỘ,CHÍNH SÁCH ĐỐI VỚI CÔNG AN NHÂN DÂN",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "18b6dee2-0ff9-4cb7-b2b4-fb6ee352013e"
            ],
            [
              "hash"  =>   "5CC09C3B-39EF-462A-B29C-7A88C72BBE71",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "01006000000000005500",
              "ten_chuong"  =>   "Chương VI QUY ĐỊNH VỀ NGHI LỄ, ĐIỀU LỆNH, QUÂN SỰ, VÕ THUẬT TRONG CÔNG AN NHÂN DÂN",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "18b6dee2-0ff9-4cb7-b2b4-fb6ee352013e"
            ],
            [
              "hash"  =>   "B27AEEE2-4BCD-4B66-B80C-6FD4E79347A2",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "01006000000000006000",
              "ten_chuong"  =>   "Chương VII KHEN THƯỞNG VÀ XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "18b6dee2-0ff9-4cb7-b2b4-fb6ee352013e"
            ],
            [
              "hash"  =>   "53FFB68A-E088-402A-9826-DBD4AFFEE761",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "01006000000000007000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "18b6dee2-0ff9-4cb7-b2b4-fb6ee352013e"
            ],
            [
              "hash"  =>   "048D55FE-E969-47AF-8D9F-D5E4DF12A69F",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "01007000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "7ca2c60d-7e8f-4604-b622-7d297acd506f"
            ],
            [
              "hash"  =>   "A0A46D7C-EDC4-4BBE-9B91-E313D3FFDEAB",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "01007000000000002000",
              "ten_chuong"  =>   "Chương II HOẠT ĐỘNG MẬT MÃ ĐỂ BẢO VỆ THÔNG TIN BÍ MẬT NHÀ NƯỚC",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "7ca2c60d-7e8f-4604-b622-7d297acd506f"
            ],
            [
              "hash"  =>   "8ABA9D04-2E1B-44B8-8424-B490A49DC8A1",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "01007000000000003000",
              "ten_chuong"  =>   "Chương III NHIỆM VỤ, QUYỀN HẠN, TỔ CHỨC CỦA LỰC L ƯỢNG CƠ YẾU",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "7ca2c60d-7e8f-4604-b622-7d297acd506f"
            ],
            [
              "hash"  =>   "4E86A777-EF11-4532-835A-09AB44E8403E",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "01007000000000004000",
              "ten_chuong"  =>   "Chương IV NGƯỜI LÀM VIỆC TRONG TỔ CHỨC CƠ YẾU VÀ CHẾ ĐỘ, CHÍNH SÁCHĐỐI VỚI NGƯỜI LÀM VIỆC TRONG TỔ CHỨC CƠ YẾU",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "7ca2c60d-7e8f-4604-b622-7d297acd506f"
            ],
            [
              "hash"  =>   "4EBA17CC-918B-4B4E-9CA0-BBDA5948A9DD",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "01007000000000005000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "7ca2c60d-7e8f-4604-b622-7d297acd506f"
            ],
            [
              "hash"  =>   "ECEC8BDA-1E5E-4DE4-A1FC-113C79D4394C",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "01008000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "74d84211-de1e-44b4-b2c2-976d87c3190b"
            ],
            [
              "hash"  =>   "32945BFC-ED1E-4AE3-BD43-DEE0F320E3EE",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "01008000000000002000",
              "ten_chuong"  =>   "Chương II THỊ THỰC",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "74d84211-de1e-44b4-b2c2-976d87c3190b"
            ],
            [
              "hash"  =>   "C4E77635-813B-4BCD-90AA-EC3750093249",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "01008000000000003000",
              "ten_chuong"  =>   "Chương III NHẬP CẢNH",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "74d84211-de1e-44b4-b2c2-976d87c3190b"
            ],
            [
              "hash"  =>   "BDB35089-C375-49AF-99C6-00DB1C0A2B19",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "01008000000000004000",
              "ten_chuong"  =>   "Chương IV QUÁ CẢNH",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "74d84211-de1e-44b4-b2c2-976d87c3190b"
            ],
            [
              "hash"  =>   "0059DD7C-7063-450F-A056-B1B6D1E32EDF",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "01008000000000005000",
              "ten_chuong"  =>   "Chương V XUẤT CẢNH",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "74d84211-de1e-44b4-b2c2-976d87c3190b"
            ],
            [
              "hash"  =>   "C110E086-7308-4CD0-AF61-6534F61E3101",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "01008000000000006000",
              "ten_chuong"  =>   "Chương VI CƯ TRÚ",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "74d84211-de1e-44b4-b2c2-976d87c3190b"
            ],
            [
              "hash"  =>   "B7F45277-C342-41CB-8569-76A0CCF9A274",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "01008000000000007000",
              "ten_chuong"  =>   "Chương VII QUYỀN, NGHĨA VỤ CỦA NGƯỜI NƯỚC NGOÀI; QUYỀN, TRÁCH NHIỆM CỦA CƠ QUAN, TỔ CHỨC, CÁ NHÂN MỜI, BẢO LÃNH NGƯỜI NƯỚC NGOÀI NHẬP CẢNH, XUẤT CẢNH, CƯ TRÚ TẠI VIỆT NAM",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "74d84211-de1e-44b4-b2c2-976d87c3190b"
            ],
            [
              "hash"  =>   "8FF012F2-B58D-4577-A337-4B807B2ED583",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "01008000000000008000",
              "ten_chuong"  =>   "Chương VIII TRÁCH NHIỆM CỦA CÁC CƠ QUAN, TỔ CHỨC VỀ NHẬP CẢNH, XUẤT CẢNH, QUÁ CẢNH, CƯ TRÚ CỦA NGƯỜI NƯỚC NGOÀI TẠI VIỆT NAM",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "74d84211-de1e-44b4-b2c2-976d87c3190b"
            ],
            [
              "hash"  =>   "A1554431-1539-4FE6-9751-CFF7FB5DD16E",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "01008000000000009000",
              "ten_chuong"  =>   "Chương IX ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "74d84211-de1e-44b4-b2c2-976d87c3190b"
            ],
            [
              "hash"  =>   "942082B4-14D9-49FC-9E60-D940DBDDCFC6",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "01009000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "53892a89-6ea2-44c2-8f84-840fab0e8c47"
            ],
            [
              "hash"  =>   "BEA466EA-1453-4DC6-B803-155555DD58CC",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "01009000000000002000",
              "ten_chuong"  =>   "Chương II TỔ CHỨC HOẠT ĐỘNG PHÒNG, CHỐNG KHỦNG BỐ",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "53892a89-6ea2-44c2-8f84-840fab0e8c47"
            ],
            [
              "hash"  =>   "7E815EED-FDE9-4C9C-AA3B-A304512918F2",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "01009000000000003000",
              "ten_chuong"  =>   "Chương III PHÒNG NGỪA KHỦNG BỐ",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "53892a89-6ea2-44c2-8f84-840fab0e8c47"
            ],
            [
              "hash"  =>   "601ADE8C-37D8-4DA8-A9C1-85C513EBC0DF",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "01009000000000004000",
              "ten_chuong"  =>   "Chương IV CHỐNG KHỦNG BỐ",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "53892a89-6ea2-44c2-8f84-840fab0e8c47"
            ],
            [
              "hash"  =>   "EC619C9A-D9FA-45CA-A853-EA687D109F48",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "01009000000000005000",
              "ten_chuong"  =>   "Chương V CHỐNG TÀI TRỢ KHỦNG BỐ",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "53892a89-6ea2-44c2-8f84-840fab0e8c47"
            ],
            [
              "hash"  =>   "A70ABD54-02FD-4747-AC47-E36D93191FE8",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "01009000000000006000",
              "ten_chuong"  =>   "Chương VI HỢP TÁC QUỐC TẾ VỀ PHÒNG, CHỐNG KHỦNG BỐ",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "53892a89-6ea2-44c2-8f84-840fab0e8c47"
            ],
            [
              "hash"  =>   "B9A2596E-23C1-4D73-B9F5-AA0D520CD70D",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "01009000000000007000",
              "ten_chuong"  =>   "Chương VII TRÁCH NHIỆM CỦA CƠ QUAN NHÀ NƯỚC TRONG PHÒNG, CHỐNG KHỦNG BỐ",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "53892a89-6ea2-44c2-8f84-840fab0e8c47"
            ],
            [
              "hash"  =>   "314DA4E1-2123-457C-ABE1-C0F2BE62A711",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "01009000000000008000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "53892a89-6ea2-44c2-8f84-840fab0e8c47"
            ],
            [
              "hash"  =>   "D446FCD3-4482-4ED1-BC31-00A9D4EBBD9C",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "01011000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "1fd42d83-9d78-4dd4-b6b6-73e9bd3472e1"
            ],
            [
              "hash"  =>   "4CF5C11B-3F1F-4A17-8311-151EBA4D312F",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "01011000000000002000",
              "ten_chuong"  =>   "Chương II BẢO VỆ AN NINH MẠNG ĐỐI VỚI HỆ THỐNG THÔNG TINQUAN TRỌNG VỀ AN NINH QUỐC GIA",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "1fd42d83-9d78-4dd4-b6b6-73e9bd3472e1"
            ],
            [
              "hash"  =>   "2F4558E8-B41D-4BA2-9982-9F7ADE6B7EAE",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "01011000000000003000",
              "ten_chuong"  =>   "Chương III PHÒNG NGỪA, XỬ LÝ HÀNH VI XÂM PHẠM AN NINH MẠNG",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "1fd42d83-9d78-4dd4-b6b6-73e9bd3472e1"
            ],
            [
              "hash"  =>   "2935A32E-595A-434C-951F-1F20458514D0",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "01011000000000004000",
              "ten_chuong"  =>   "Chương IV HOẠT ĐỘNG BẢO VỆ AN NINH MẠNG",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "1fd42d83-9d78-4dd4-b6b6-73e9bd3472e1"
            ],
            [
              "hash"  =>   "3741984A-7D4E-4D62-96FA-57961E06054C",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "01011000000000005000",
              "ten_chuong"  =>   "Chương V BẢO ĐẢM HOẠT ĐỘNG BẢO VỆ AN NINH MẠNG",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "1fd42d83-9d78-4dd4-b6b6-73e9bd3472e1"
            ],
            [
              "hash"  =>   "F1E12971-74E1-4B10-9B98-7535BF071A87",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "01011000000000006000",
              "ten_chuong"  =>   "Chương VI TRÁCH NHIỆM CỦA CƠ QUAN, TỔ CHỨC, CÁ NHÂN",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "1fd42d83-9d78-4dd4-b6b6-73e9bd3472e1"
            ],
            [
              "hash"  =>   "E5C8C703-2483-4C46-BF65-2624F9A06DFD",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "01011000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "1fd42d83-9d78-4dd4-b6b6-73e9bd3472e1"
            ],
            [
              "hash"  =>   "1FD8FA96-CF90-4E0B-B03B-4EF1437184EB",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "01012000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "f0f0c740-cb1f-4013-b5bc-9e14672d586d"
            ],
            [
              "hash"  =>   "4BB874B1-65E4-4297-AF2E-D951049AA3E6",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "01012000000000002000",
              "ten_chuong"  =>   "Chương II ĐỐI TƯỢNG CẢNH VỆ, BIỆN PHÁP VÀ CHẾ ĐỘ CẢNH VỆ",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "f0f0c740-cb1f-4013-b5bc-9e14672d586d"
            ],
            [
              "hash"  =>   "43BD420D-6993-4B9E-BD98-9A69554E5673",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "01012000000000003000",
              "ten_chuong"  =>   "Chương III LỰC LƯỢNG CẢNH VỆ; NHIỆM VỤ, QUYỀN HẠN, TRÁCH NHIỆM CỦA LỰC LƯỢNG CẢNH VỆ VÀ CHẾ ĐỘ, CHÍNH SÁCH ĐỐI VỚI CÁN BỘ, CHIẾN SĨ CẢNH VỆ",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "f0f0c740-cb1f-4013-b5bc-9e14672d586d"
            ],
            [
              "hash"  =>   "DAD7DD83-6A85-402D-A5A6-E23543C3F27C",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "01012000000000004000",
              "ten_chuong"  =>   "Chương IV TRÁCH NHIỆM CỦA CƠ QUAN, TỔ CHỨC, CÁ NHÂN ĐỐI VỚI CÔNG TÁC CẢNH VỆ",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "f0f0c740-cb1f-4013-b5bc-9e14672d586d"
            ],
            [
              "hash"  =>   "E9D5372D-0CFC-4BCC-B6C7-126E8E7E165F",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "01012000000000005000",
              "ten_chuong"  =>   "Chương V KHEN THƯỞNG VÀ XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "f0f0c740-cb1f-4013-b5bc-9e14672d586d"
            ],
            [
              "hash"  =>   "BB21DBC6-6F1E-4C28-89D4-78F40DD1116D",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "01012000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "c3b69131-2931-4f67-926e-b244e18e8081",
              "hash_de_muc"  =>   "f0f0c740-cb1f-4013-b5bc-9e14672d586d"
            ],
            [
              "hash"  =>   "EE92F7A1-BB39-45C0-9593-8EF84B542AA0",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "02001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "5576c952-dabe-4363-b94a-13419996ff4b",
              "hash_de_muc"  =>   "c8ba5bc7-224a-4f31-8d92-567613f68ca9"
            ],
            [
              "hash"  =>   "15DA2CD8-7AA5-4772-9323-491000F1F9D3",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "02001000000000002000",
              "ten_chuong"  =>   "Chương II QUYỀN, TRÁCH NHIỆM CỦA NG­ƯỜI LAO ĐỘNG, NGƯ­ỜI SỬ DỤNG LAO ĐỘNG, CƠ QUAN BẢO HIỂM XÃ HỘI",
              "hash_chu_de"  =>   "5576c952-dabe-4363-b94a-13419996ff4b",
              "hash_de_muc"  =>   "c8ba5bc7-224a-4f31-8d92-567613f68ca9"
            ],
            [
              "hash"  =>   "DEA428FB-051E-4015-B3CA-098630355D1A",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "02001000000000003000",
              "ten_chuong"  =>   "Chương III BẢO HIỂM XÃ HỘI BẮT BUỘC",
              "hash_chu_de"  =>   "5576c952-dabe-4363-b94a-13419996ff4b",
              "hash_de_muc"  =>   "c8ba5bc7-224a-4f31-8d92-567613f68ca9"
            ],
            [
              "hash"  =>   "1DE9DF2F-D353-4E7B-8D9A-D0BBB3604050",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "02001000000000004000",
              "ten_chuong"  =>   "Chương IV BẢO HIỂM XÃ HỘI TỰ NGUYỆN",
              "hash_chu_de"  =>   "5576c952-dabe-4363-b94a-13419996ff4b",
              "hash_de_muc"  =>   "c8ba5bc7-224a-4f31-8d92-567613f68ca9"
            ],
            [
              "hash"  =>   "47D51910-9B46-485D-B255-6F5014A2FC56",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "02001000000000005000",
              "ten_chuong"  =>   "Chương V QUỸ BẢO HIỂM XÃ HỘI",
              "hash_chu_de"  =>   "5576c952-dabe-4363-b94a-13419996ff4b",
              "hash_de_muc"  =>   "c8ba5bc7-224a-4f31-8d92-567613f68ca9"
            ],
            [
              "hash"  =>   "78EC6911-C2B8-4E89-ADDF-9958EBBC3120",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "02001000000000006000",
              "ten_chuong"  =>   "Chương VI TỔ CHỨC, QUẢN LÝ BẢO HIỂM XÃ HỘI",
              "hash_chu_de"  =>   "5576c952-dabe-4363-b94a-13419996ff4b",
              "hash_de_muc"  =>   "c8ba5bc7-224a-4f31-8d92-567613f68ca9"
            ],
            [
              "hash"  =>   "8D7AEF0F-43E5-4FCD-89EA-4F1D32181B24",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "02001000000000007000",
              "ten_chuong"  =>   "Chương VII TRÌNH TỰ, THỦ TỤC THỰC HIỆN BẢO HIỂM XÃ HỘI",
              "hash_chu_de"  =>   "5576c952-dabe-4363-b94a-13419996ff4b",
              "hash_de_muc"  =>   "c8ba5bc7-224a-4f31-8d92-567613f68ca9"
            ],
            [
              "hash"  =>   "1E24FF53-85B2-4ABA-B71B-4AD1569F309A",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "02001000000000008000",
              "ten_chuong"  =>   "Chương VIII KHIẾU NẠI, TỐ CÁO VÀ XỬ LÝ VI PHẠM VỀ BẢO HIỂM XÃ HỘI",
              "hash_chu_de"  =>   "5576c952-dabe-4363-b94a-13419996ff4b",
              "hash_de_muc"  =>   "c8ba5bc7-224a-4f31-8d92-567613f68ca9"
            ],
            [
              "hash"  =>   "2B970D4A-D01F-42C8-A376-4427724B64BA",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "02001000000000009000",
              "ten_chuong"  =>   "Chương IX ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "5576c952-dabe-4363-b94a-13419996ff4b",
              "hash_de_muc"  =>   "c8ba5bc7-224a-4f31-8d92-567613f68ca9"
            ],
            [
              "hash"  =>   "80D81345-44A1-4135-8A67-99AE092EE52F",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "02002000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "5576c952-dabe-4363-b94a-13419996ff4b",
              "hash_de_muc"  =>   "583b913f-4d4b-46da-911c-112342c6ea49"
            ],
            [
              "hash"  =>   "C1D16830-0A13-4D45-B25F-EA737B450658",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "02002000000000002000",
              "ten_chuong"  =>   "Chương II ĐỐI TƯỢNG, MỨC ĐÓNG, TRÁCH NHIỆM VÀ PHƯƠNG THỨC ĐÓNG BẢO HIỂM Y TẾ",
              "hash_chu_de"  =>   "5576c952-dabe-4363-b94a-13419996ff4b",
              "hash_de_muc"  =>   "583b913f-4d4b-46da-911c-112342c6ea49"
            ],
            [
              "hash"  =>   "F0C66F34-E08C-4E18-85D5-A24858DA5982",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "02002000000000003000",
              "ten_chuong"  =>   "Chương III THẺ BẢO HIỂM Y TẾ",
              "hash_chu_de"  =>   "5576c952-dabe-4363-b94a-13419996ff4b",
              "hash_de_muc"  =>   "583b913f-4d4b-46da-911c-112342c6ea49"
            ],
            [
              "hash"  =>   "EBE2103D-FE38-4DED-9146-3F6A14BF7FC8",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "02002000000000004000",
              "ten_chuong"  =>   "Chương IV PHẠM VI ĐƯỢC HƯỞNG BẢO HIỂM Y TẾ",
              "hash_chu_de"  =>   "5576c952-dabe-4363-b94a-13419996ff4b",
              "hash_de_muc"  =>   "583b913f-4d4b-46da-911c-112342c6ea49"
            ],
            [
              "hash"  =>   "5A46A56D-B734-4504-A845-A0EC5080D8AE",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "02002000000000005000",
              "ten_chuong"  =>   "Chương V TỔ CHỨC KHÁM BỆNH, CHỮA BỆNH CHO NGƯỜI THAM GIA BẢO HIỂM Y TẾ",
              "hash_chu_de"  =>   "5576c952-dabe-4363-b94a-13419996ff4b",
              "hash_de_muc"  =>   "583b913f-4d4b-46da-911c-112342c6ea49"
            ],
            [
              "hash"  =>   "C785DB34-545B-453A-9B95-53EB301C8B4F",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "02002000000000006000",
              "ten_chuong"  =>   "Chương VI THANH TOÁN CHI PHÍ KHÁM BỆNH, CHỮA BỆNH BẢO HIỂM Y TẾ",
              "hash_chu_de"  =>   "5576c952-dabe-4363-b94a-13419996ff4b",
              "hash_de_muc"  =>   "583b913f-4d4b-46da-911c-112342c6ea49"
            ],
            [
              "hash"  =>   "37EDD42F-D6FD-4ECA-92AA-05AD7682C616",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "02002000000000007000",
              "ten_chuong"  =>   "Chương VII QUỸ BẢO HIỂM Y TẾ",
              "hash_chu_de"  =>   "5576c952-dabe-4363-b94a-13419996ff4b",
              "hash_de_muc"  =>   "583b913f-4d4b-46da-911c-112342c6ea49"
            ],
            [
              "hash"  =>   "03585541-8902-48DD-8C16-E9458ABEC998",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "02002000000000008000",
              "ten_chuong"  =>   "Chương VIII QUYỀN VÀ TRÁCH NHIỆM CỦA CÁC BÊN LIÊN QUAN ĐẾN BẢO HIỂM Y TẾ",
              "hash_chu_de"  =>   "5576c952-dabe-4363-b94a-13419996ff4b",
              "hash_de_muc"  =>   "583b913f-4d4b-46da-911c-112342c6ea49"
            ],
            [
              "hash"  =>   "3E4F5BF9-4C1D-4FD7-A041-A401E4344F73",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "02002000000000009000",
              "ten_chuong"  =>   "Chương IX THANH TRA, KHIẾU NẠI, TỐ CÁO, GIẢI QUYẾT TRANH CHẤP VÀ XỬ LÝ VI PHẠM VỀ BẢO HIỂM Y TẾ",
              "hash_chu_de"  =>   "5576c952-dabe-4363-b94a-13419996ff4b",
              "hash_de_muc"  =>   "583b913f-4d4b-46da-911c-112342c6ea49"
            ],
            [
              "hash"  =>   "25DA0B28-7EF2-492E-B0C2-6209F8651583",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "02002000000000010000",
              "ten_chuong"  =>   "Chương X ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "5576c952-dabe-4363-b94a-13419996ff4b",
              "hash_de_muc"  =>   "583b913f-4d4b-46da-911c-112342c6ea49"
            ],
            [
              "hash"  =>   "407CF66E-2161-4D19-9295-188A02740C0E",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "03001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "66c59035-9acd-430a-affd-86563bc7ce77"
            ],
            [
              "hash"  =>   "5E484750-FD0D-4224-8918-23340D1C3CAB",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "03001000000000002000",
              "ten_chuong"  =>   "Chương II BẢO ĐẢM AN TOÀN THÔNG TIN MẠNG",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "66c59035-9acd-430a-affd-86563bc7ce77"
            ],
            [
              "hash"  =>   "D04E2C4B-7367-4D29-95FE-0D4CD837AC9C",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "03001000000000003000",
              "ten_chuong"  =>   "Chương III MẬT MÃ DÂN SỰ",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "66c59035-9acd-430a-affd-86563bc7ce77"
            ],
            [
              "hash"  =>   "A528DF97-A3B2-4E5B-8E5A-EFC7D982C0E3",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "03001000000000004000",
              "ten_chuong"  =>   "Chương IV TIÊU CHUẨN, QUY CHUẨN KỸ THUẬT AN TOÀN THÔNG TIN MẠNG",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "66c59035-9acd-430a-affd-86563bc7ce77"
            ],
            [
              "hash"  =>   "10643A90-C3EA-4F4E-9799-EEAE56BD3403",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "03001000000000005000",
              "ten_chuong"  =>   "Chương V KINH DOANH TRONG LĨNH VỰC AN TOÀN THÔNG TIN MẠNG",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "66c59035-9acd-430a-affd-86563bc7ce77"
            ],
            [
              "hash"  =>   "CB07BC75-D53B-4E05-B5B9-97534C799A83",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "03001000000000006000",
              "ten_chuong"  =>   "Chương VI PHÁT TRIỂN NGUỒN NHÂN LỰC AN TOÀN THÔNG TIN MẠNG",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "66c59035-9acd-430a-affd-86563bc7ce77"
            ],
            [
              "hash"  =>   "04F52A1F-EC1D-4A03-8842-8BDAF24CEB7A",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "03001000000000007000",
              "ten_chuong"  =>   "Chương VII QUẢN LÝ NHÀ NƯỚC VỀ AN TOÀN THÔNG TIN MẠNG",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "66c59035-9acd-430a-affd-86563bc7ce77"
            ],
            [
              "hash"  =>   "3BC9F2E7-7D05-444B-A6D5-80977D008991",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "03001000000000008000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "66c59035-9acd-430a-affd-86563bc7ce77"
            ],
            [
              "hash"  =>   "3DCBDACA-3E7B-479D-9F00-A7905358000C",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "03002000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "82e15104-9b5b-4b48-94f2-4ab37fc8e8a1"
            ],
            [
              "hash"  =>   "A69A0DA8-B59A-43AD-A79B-FDA969AB0A9B",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "03002000000000002000",
              "ten_chuong"  =>   "Chương II CUNG ỨNG VÀ SỬ DỤNG DỊCH VỤ BƯU CHÍNH",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "82e15104-9b5b-4b48-94f2-4ab37fc8e8a1"
            ],
            [
              "hash"  =>   "A6BE527F-1EEA-4676-AA47-C07E6E6C8DE3",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "03002000000000003000",
              "ten_chuong"  =>   "Chương III ĐẦU TƯ, KINH DOANH DỊCH VỤ BƯU CHÍNH",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "82e15104-9b5b-4b48-94f2-4ab37fc8e8a1"
            ],
            [
              "hash"  =>   "3A6945CB-B0A4-4EF8-9F62-67FA08DA0979",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "03002000000000004000",
              "ten_chuong"  =>   "Chương IV CHẤT LƯỢNG VÀ GIÁ CƯỚC DỊCH VỤ BƯU CHÍNH",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "82e15104-9b5b-4b48-94f2-4ab37fc8e8a1"
            ],
            [
              "hash"  =>   "2CC9F6E1-4AFB-4CF9-BC78-02D230D13851",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "03002000000000005000",
              "ten_chuong"  =>   "Chương V QUYỀN VÀ NGHĨA VỤ CỦA DOANH NGHIỆP CUNG ỨNG DỊCH VỤ BƯU CHÍNH, NGƯỜI SỬ DỤNG DỊCH VỤ BƯU CHÍNH",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "82e15104-9b5b-4b48-94f2-4ab37fc8e8a1"
            ],
            [
              "hash"  =>   "2CF92EA5-F1E9-4767-B4E2-40863CA56BEB",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "03002000000000006000",
              "ten_chuong"  =>   "Chương VI HOẠT ĐỘNG BƯU CHÍNH CÔNG ÍCH",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "82e15104-9b5b-4b48-94f2-4ab37fc8e8a1"
            ],
            [
              "hash"  =>   "AA254900-2183-4932-AC94-7AE2A9E8468A",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "03002000000000007000",
              "ten_chuong"  =>   "Chương VII TEM BƯU CHÍNH",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "82e15104-9b5b-4b48-94f2-4ab37fc8e8a1"
            ],
            [
              "hash"  =>   "549BE262-C916-44F0-8CE7-A181FAA935E2",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "03002000000000008000",
              "ten_chuong"  =>   "Chương VIII GIẢI QUYẾT TRANH CHẤP VÀ BỒI THƯỜNG THIỆT HẠI TRONG CUNG ỨNG VÀ SỬ DỤNG DỊCH VỤ BƯU CHÍNH",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "82e15104-9b5b-4b48-94f2-4ab37fc8e8a1"
            ],
            [
              "hash"  =>   "BA5F138F-6704-4585-9F3D-BB9B9C91DA4E",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "03002000000000009000",
              "ten_chuong"  =>   "Chương IX TRÁCH NHIỆM QUẢN LÝ NHÀ NƯỚC VỀ HOẠT ĐỘNG BƯU CHÍNH",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "82e15104-9b5b-4b48-94f2-4ab37fc8e8a1"
            ],
            [
              "hash"  =>   "473B9E91-3320-4ED7-8F0A-8FF63787F3BB",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "03002000000000010000",
              "ten_chuong"  =>   "Chương X ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "82e15104-9b5b-4b48-94f2-4ab37fc8e8a1"
            ],
            [
              "hash"  =>   "08588C06-26EF-4804-9279-E52202A31705",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "03003000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "7812bcbd-b493-41bd-9787-2589fde15e8f"
            ],
            [
              "hash"  =>   "8E6970E9-DBCC-4CDA-8BBD-C74D8F8C64EA",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "03003000000000002000",
              "ten_chuong"  =>   "Chương II ỨNG DỤNG CÔNG NGHỆ THÔNG TIN",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "7812bcbd-b493-41bd-9787-2589fde15e8f"
            ],
            [
              "hash"  =>   "A1E844B8-ADCA-4D82-A447-BF114FE145AD",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "03003000000000003000",
              "ten_chuong"  =>   "Chương III PHÁT TRIỂN CÔNG NGHỆ THÔNG TIN",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "7812bcbd-b493-41bd-9787-2589fde15e8f"
            ],
            [
              "hash"  =>   "5377D81C-208F-4DD7-8F6D-DAEDE0F580CD",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "03003000000000004000",
              "ten_chuong"  =>   "Chương IV BIỆN PHÁP BẢO ĐẢM ỨNG DỤNG VÀ PHÁT TRIỂN CÔNG NGHỆ THÔNG TIN",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "7812bcbd-b493-41bd-9787-2589fde15e8f"
            ],
            [
              "hash"  =>   "077ED828-608C-452C-8245-BB855446B2CF",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "03003000000000005000",
              "ten_chuong"  =>   "Chương V GIẢI QUYẾT TRANH CHẤP VÀ XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "7812bcbd-b493-41bd-9787-2589fde15e8f"
            ],
            [
              "hash"  =>   "913D449C-5AE2-40F9-8A55-4B7203FF13A8",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "03003000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "7812bcbd-b493-41bd-9787-2589fde15e8f"
            ],
            [
              "hash"  =>   "E9172BF4-CF8C-4BF7-BF91-503923F2E6F5",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "03004000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "aac1fa20-8498-4c00-b5f3-a9c1a75b0df1"
            ],
            [
              "hash"  =>   "41F61162-8A5F-4242-81BF-7F760EEC4E02",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "03004000000000002000",
              "ten_chuong"  =>   "Chương II THÔNG ĐIỆP DỮ LIỆU",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "aac1fa20-8498-4c00-b5f3-a9c1a75b0df1"
            ],
            [
              "hash"  =>   "33C584F6-0379-411C-8D9E-0A7371F0FB6E",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "03004000000000003000",
              "ten_chuong"  =>   "Chương III CHỮ KÝ ĐIỆN TỬ VÀ CHỨNG THỰC CHỮ KÝ ĐIỆN TỬ",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "aac1fa20-8498-4c00-b5f3-a9c1a75b0df1"
            ],
            [
              "hash"  =>   "6DBADCE3-7DB6-4F96-A0DA-0B43DCF9B6B4",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "03004000000000004000",
              "ten_chuong"  =>   "Chương IV GIAO KẾT VÀ THỰC HIỆN HỢP ĐỒNG ĐIỆN TỬ",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "aac1fa20-8498-4c00-b5f3-a9c1a75b0df1"
            ],
            [
              "hash"  =>   "A4AF3474-F0FE-44FA-B9D9-6B89E3CC48D9",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "03004000000000005000",
              "ten_chuong"  =>   "Chương V GIAO DỊCH ĐIỆN TỬ CỦA CƠ QUAN NHÀ NƯỚC",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "aac1fa20-8498-4c00-b5f3-a9c1a75b0df1"
            ],
            [
              "hash"  =>   "F9065B00-000A-406B-900A-63927660C591",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "03004000000000006000",
              "ten_chuong"  =>   "Chương VI AN NINH, AN TOÀN, BẢO VỆ, BẢO MẬT TRONG GIAO DỊCH ĐIỆN TỬ",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "aac1fa20-8498-4c00-b5f3-a9c1a75b0df1"
            ],
            [
              "hash"  =>   "C56B9848-EAFD-4951-AE54-2FECFF50BFCD",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "03004000000000007000",
              "ten_chuong"  =>   "Chương VII GIẢI QUYẾT TRANH CHẤP VÀ XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "aac1fa20-8498-4c00-b5f3-a9c1a75b0df1"
            ],
            [
              "hash"  =>   "6B31DFDD-CA65-4520-9E63-B8ADF764E827",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "03004000000000008000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "aac1fa20-8498-4c00-b5f3-a9c1a75b0df1"
            ],
            [
              "hash"  =>   "30C3B3E7-878A-4958-B128-683ACE108F34",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "03005000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "29b3d08e-82e7-404c-8607-26db1a607f84"
            ],
            [
              "hash"  =>   "D7C8A44F-5506-4FA4-8498-BBDBE629E79A",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "03005000000000002000",
              "ten_chuong"  =>   "Chương II QUY HOẠCH TẦN SỐ VÔ TUYẾN ĐIỆN",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "29b3d08e-82e7-404c-8607-26db1a607f84"
            ],
            [
              "hash"  =>   "2F250E3F-F565-4054-8C95-E7C8281479CE",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "03005000000000003000",
              "ten_chuong"  =>   "Chương III QUẢN LÝ CHẤT LƯỢNG PHÁT XẠ VÔ TUYẾN ĐIỆN, AN TOÀN BỨC XẠ VÔ TUYẾN ĐIỆN VÀ TƯƠNG THÍCH ĐIỆN TỪ",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "29b3d08e-82e7-404c-8607-26db1a607f84"
            ],
            [
              "hash"  =>   "FD9504F1-43D3-4881-B833-C8621EB38F67",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "03005000000000004000",
              "ten_chuong"  =>   "Chương IV CẤP GIẤY PHÉP VÀ SỬ DỤNG TẦN SỐ VÔ TUYẾN ĐIỆN",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "29b3d08e-82e7-404c-8607-26db1a607f84"
            ],
            [
              "hash"  =>   "7C1600FC-A48B-46D1-A494-967D5B0C77C4",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "03005000000000005000",
              "ten_chuong"  =>   "Chương V KIỂM TRA, KIỂM SOÁT TẦN SỐ VÔ TUYẾN ĐIỆN VÀ XỬ LÝ NHIỄU CÓ HẠI",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "29b3d08e-82e7-404c-8607-26db1a607f84"
            ],
            [
              "hash"  =>   "8426E60D-CFAD-480E-9027-9193F6FBD8DE",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "03005000000000006000",
              "ten_chuong"  =>   "Chương VI ĐĂNG KÝ, PHỐI HỢP QUỐC TẾ VỀ TẦN SỐ VÔ TUYẾN ĐIỆN, QUỸ ĐẠO VỆ TINH",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "29b3d08e-82e7-404c-8607-26db1a607f84"
            ],
            [
              "hash"  =>   "B1CEF0C3-5823-44C6-979C-819CA41253FA",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "03005000000000007000",
              "ten_chuong"  =>   "Chương VII QUẢN LÝ VÀ SỬ DỤNG TẦN SỐ VÔ TUYẾN ĐIỆN PHỤC VỤ MỤC ĐÍCH QUỐC PHÒNG, AN NINH",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "29b3d08e-82e7-404c-8607-26db1a607f84"
            ],
            [
              "hash"  =>   "C3EE7F0B-50AC-48E1-A8E5-6731F97512CF",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "03005000000000008000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "29b3d08e-82e7-404c-8607-26db1a607f84"
            ],
            [
              "hash"  =>   "83539A99-7427-4DEE-84D6-70ED3783EC89",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "03006000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "a20d4a54-701d-4ef7-9593-75068883d1d9"
            ],
            [
              "hash"  =>   "48EA5CEB-26B7-4043-B56D-100B54305445",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "03006000000000002000",
              "ten_chuong"  =>   "Chương II KINH DOANH VIỄN THÔNG",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "a20d4a54-701d-4ef7-9593-75068883d1d9"
            ],
            [
              "hash"  =>   "89B3CA1B-544C-4CE0-858F-1953655C0CFD",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "03006000000000003000",
              "ten_chuong"  =>   "Chương III VIỄN THÔNG CÔNG ÍCH",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "a20d4a54-701d-4ef7-9593-75068883d1d9"
            ],
            [
              "hash"  =>   "3B83C07E-7CE3-4FEC-9541-B9ED266CC427",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "03006000000000004000",
              "ten_chuong"  =>   "Chương IV THIẾT LẬP MẠNG VÀ CUNG CẤP DỊCH VỤ VIỄN THÔNG",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "a20d4a54-701d-4ef7-9593-75068883d1d9"
            ],
            [
              "hash"  =>   "DD74ECCE-18F3-4E48-ABA2-2F2ABA38C4D9",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "03006000000000005000",
              "ten_chuong"  =>   "Chương V CẤP GIẤY PHÉP VIỄN THÔNG",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "a20d4a54-701d-4ef7-9593-75068883d1d9"
            ],
            [
              "hash"  =>   "5D83EB98-F86F-4E7C-97F2-D82FAF0EF1D7",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "03006000000000006000",
              "ten_chuong"  =>   "Chương VI KẾT NỐI VÀ CHIA SẺ CƠ SỞ HẠ TẦNG VIỄN THÔNG",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "a20d4a54-701d-4ef7-9593-75068883d1d9"
            ],
            [
              "hash"  =>   "8CB739E1-7B9D-4E0C-A204-CBB17C0E1921",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "03006000000000007000",
              "ten_chuong"  =>   "Chương VII TÀI NGUYÊN VIỄN THÔNG",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "a20d4a54-701d-4ef7-9593-75068883d1d9"
            ],
            [
              "hash"  =>   "48E378DB-F509-4112-BCA1-5D0E29AF26C1",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "03006000000000008000",
              "ten_chuong"  =>   "Chương VIII QUẢN LÝ TIÊU CHUẨN, QUY CHUẨN KỸ THUẬT, CHẤT LƯỢNG VÀ GIÁ CƯỚC VIỄN THÔNG",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "a20d4a54-701d-4ef7-9593-75068883d1d9"
            ],
            [
              "hash"  =>   "0EE85805-89CA-4568-876D-B5D7A875E052",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "03006000000000009000",
              "ten_chuong"  =>   "Chương IX CÔNG TRÌNH VIỄN THÔNG",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "a20d4a54-701d-4ef7-9593-75068883d1d9"
            ],
            [
              "hash"  =>   "1B65FDBC-93DF-4CDB-8E24-84E6F424BEC8",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "03006000000000010000",
              "ten_chuong"  =>   "Chương X ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "c124612e-a23f-4199-8747-55fe4e8a8c89",
              "hash_de_muc"  =>   "a20d4a54-701d-4ef7-9593-75068883d1d9"
            ],
            [
              "hash"  =>   "EF5AC60E-DFA4-4D61-954B-4FFC7ADA89A2",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "04001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "e7b9346d-dea5-49c5-a166-bd41599dd9e7"
            ],
            [
              "hash"  =>   "108A534C-0454-4AD6-AA25-8C0C0AA588AA",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "04001000000000002000",
              "ten_chuong"  =>   "Chương II ĐẤU GIÁ VIÊN, TỔ CHỨC ĐẤU GIÁ TÀI SẢN",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "e7b9346d-dea5-49c5-a166-bd41599dd9e7"
            ],
            [
              "hash"  =>   "43A3F931-F78E-4D71-B9AA-F95A8144CEE6",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "04001000000000003000",
              "ten_chuong"  =>   "Chương III TRÌNH TỰ, THỦ TỤC ĐẤU GIÁ TÀI SẢN",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "e7b9346d-dea5-49c5-a166-bd41599dd9e7"
            ],
            [
              "hash"  =>   "7AB6599A-44D9-44AA-BF97-214D40885ADF",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "04001000000000004000",
              "ten_chuong"  =>   "Chương IV ĐẤU GIÁ TÀI SẢN MÀ PHÁP LUẬT QUY ĐỊNH  PHẢI BÁN THÔNG QUA ĐẤU GIÁ",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "e7b9346d-dea5-49c5-a166-bd41599dd9e7"
            ],
            [
              "hash"  =>   "CC1922CD-1066-4564-8161-A140A0B818F0",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "04001000000000005000",
              "ten_chuong"  =>   "Chương V THÙ LAO DỊCH VỤ ĐẤU GIÁ, CHI PHÍ ĐẤU GIÁ TÀI SẢN",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "e7b9346d-dea5-49c5-a166-bd41599dd9e7"
            ],
            [
              "hash"  =>   "434AABD6-A495-4B5A-8C24-7C72FBBD02D8",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "04001000000000006000",
              "ten_chuong"  =>   "Chương VI XỬ LÝ VI PHẠM, HỦY KẾT QUẢ ĐẤU GIÁ TÀI SẢN, BỒI THƯỜNG THIỆT HẠI",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "e7b9346d-dea5-49c5-a166-bd41599dd9e7"
            ],
            [
              "hash"  =>   "6BDAF48F-89FB-4D4F-B9A8-6C5C5CAC03B9",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "04001000000000007000",
              "ten_chuong"  =>   "Chương VII QUẢN LÝ NHÀ NƯỚC VỀ ĐẤU GIÁ TÀI SẢN",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "e7b9346d-dea5-49c5-a166-bd41599dd9e7"
            ],
            [
              "hash"  =>   "B129C8BF-B76F-4E6C-A988-F12F8C633531",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "04001000000000008000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "e7b9346d-dea5-49c5-a166-bd41599dd9e7"
            ],
            [
              "hash"  =>   "89E1EAF1-77DD-4285-9FA8-51536B0CB377",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "04002000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "c2d76287-6995-4aed-8dfa-c3029a2e24e2"
            ],
            [
              "hash"  =>   "FCEE2BBF-9B4E-4D4E-9035-EEA4C1C4F4AD",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "04002000000000002000",
              "ten_chuong"  =>   "Chương II CÔNG CHỨNG VIÊN",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "c2d76287-6995-4aed-8dfa-c3029a2e24e2"
            ],
            [
              "hash"  =>   "E6B12BC8-86DA-41F0-A54A-EAD8BC708C25",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "04002000000000003000",
              "ten_chuong"  =>   "Chương III TỔ CHỨC HÀNH NGHỀ CÔNG CHỨNG",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "c2d76287-6995-4aed-8dfa-c3029a2e24e2"
            ],
            [
              "hash"  =>   "3882F2C3-4ADF-499C-9473-D4F36D0FDCA3",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "04002000000000004000",
              "ten_chuong"  =>   "Chương IV HÀNH NGHỀ CÔNG CHỨNG",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "c2d76287-6995-4aed-8dfa-c3029a2e24e2"
            ],
            [
              "hash"  =>   "485ABB80-69A2-45DE-84AD-15DFC436E765",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "04002000000000005000",
              "ten_chuong"  =>   "Chương V THỦ TỤC CÔNG CHỨNG HỢP ĐỒNG, GIAO DỊCH, BẢN DỊCH",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "c2d76287-6995-4aed-8dfa-c3029a2e24e2"
            ],
            [
              "hash"  =>   "99409430-CA45-42EE-8A4A-2754F080A8B2",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "04002000000000006000",
              "ten_chuong"  =>   "Chương VI CƠ SỞ DỮ LIỆU CÔNG CHỨNG VÀ LƯU TRỮ HỒ SƠ CÔNG CHỨNG",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "c2d76287-6995-4aed-8dfa-c3029a2e24e2"
            ],
            [
              "hash"  =>   "83C1CB26-0AC8-476E-8422-55107D15FF88",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "04002000000000007000",
              "ten_chuong"  =>   "Chương VII PHÍ CÔNG CHỨNG, THÙ LAO CÔNG CHỨNG VÀ CHI PHÍ KHÁC",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "c2d76287-6995-4aed-8dfa-c3029a2e24e2"
            ],
            [
              "hash"  =>   "7A20066E-0398-4FD5-A5C4-A77CE040FDDF",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "04002000000000008000",
              "ten_chuong"  =>   "Chương VIII QUẢN LÝ NHÀ NƯỚC VỀ CÔNG CHỨNG",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "c2d76287-6995-4aed-8dfa-c3029a2e24e2"
            ],
            [
              "hash"  =>   "C20A4A20-5673-4C5B-9C26-412F8050B933",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "04002000000000009000",
              "ten_chuong"  =>   "Chương IX XỬ LÝ VI PHẠM VÀ GIẢI QUYẾT TRANH CHẤP",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "c2d76287-6995-4aed-8dfa-c3029a2e24e2"
            ],
            [
              "hash"  =>   "F419CDFA-AE47-4FF2-A4A9-22255427912B",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "04002000000000010000",
              "ten_chuong"  =>   "Chương X ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "c2d76287-6995-4aed-8dfa-c3029a2e24e2"
            ],
            [
              "hash"  =>   "F3063E85-35C6-4A93-99B4-E9A2C924C971",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "04003000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "fed3bc5b-86a8-41a4-a1b6-2a47e30c77d1"
            ],
            [
              "hash"  =>   "FA90B6AB-2CD6-41F5-8765-6A3965468681",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "04003000000000002000",
              "ten_chuong"  =>   "Chương II GIÁM ĐỊNH VIÊN TƯ PHÁP",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "fed3bc5b-86a8-41a4-a1b6-2a47e30c77d1"
            ],
            [
              "hash"  =>   "9ED4ED1F-56A8-4FE4-9E57-0994AA1232A5",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "04003000000000003000",
              "ten_chuong"  =>   "Chương III TỔ CHỨC GIÁM ĐỊNH TƯ PHÁP",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "fed3bc5b-86a8-41a4-a1b6-2a47e30c77d1"
            ],
            [
              "hash"  =>   "C450FAF9-6BF1-4DF0-9958-170A4CBA608A",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "04003000000000004000",
              "ten_chuong"  =>   "Chương IV NGƯỜI GIÁM ĐỊNH TƯ PHÁP THEO VỤ VIỆC, TỔ CHỨC GIÁM ĐỊNH TƯ PHÁP THEO VỤ VIỆC",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "fed3bc5b-86a8-41a4-a1b6-2a47e30c77d1"
            ],
            [
              "hash"  =>   "596A96D3-96F5-4D0C-8086-0DEC2324D7E6",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "04003000000000005000",
              "ten_chuong"  =>   "Chương V HOẠT ĐỘNG GIÁM ĐỊNH TƯ PHÁP",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "fed3bc5b-86a8-41a4-a1b6-2a47e30c77d1"
            ],
            [
              "hash"  =>   "EAF7A6EA-C954-4B82-BEAC-A3F7F54DCD24",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "04003000000000006000",
              "ten_chuong"  =>   "Chương VI CHI PHÍ GIÁM ĐỊNH TƯ PHÁP, CHẾ ĐỘ, CHÍNH SÁCH TRONG HOẠT ĐỘNG GIÁM ĐỊNH TƯ PHÁP",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "fed3bc5b-86a8-41a4-a1b6-2a47e30c77d1"
            ],
            [
              "hash"  =>   "2E710EAB-56B2-42E8-B821-F801B7F8E565",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "04003000000000007000",
              "ten_chuong"  =>   "Chương VII TRÁCH NHIỆM CỦA CƠ QUAN NHÀ NƯỚC ĐỐI VỚI TỔ CHỨC, HOẠT ĐỘNG GIÁM ĐỊNH TƯ PHÁP",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "fed3bc5b-86a8-41a4-a1b6-2a47e30c77d1"
            ],
            [
              "hash"  =>   "7AAB57F6-F6DB-43C4-A17C-67B3DDFE2716",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "04003000000000007500",
              "ten_chuong"  =>   "Chương VIII CÔNG TÁC GIÁM ĐỊNH TƯ PHÁP TRONG CÁC LĨNH VỰC",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "fed3bc5b-86a8-41a4-a1b6-2a47e30c77d1"
            ],
            [
              "hash"  =>   "11CFFEF1-EE8E-4DEC-A6D5-CA8DFDFE61AB",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "04003000000000008000",
              "ten_chuong"  =>   "Chương IX ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "fed3bc5b-86a8-41a4-a1b6-2a47e30c77d1"
            ],
            [
              "hash"  =>   "9007CD1B-C762-45E8-AEB7-5D0590365B74",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "04004000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "d762a424-dab9-400c-b04f-9a03fe7085fa"
            ],
            [
              "hash"  =>   "CABC4A74-6A0E-4F4A-8335-0A0CA97B588C",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "04004000000000002000",
              "ten_chuong"  =>   "Chương II LUẬT SƯ",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "d762a424-dab9-400c-b04f-9a03fe7085fa"
            ],
            [
              "hash"  =>   "7180464F-A796-42E1-A3E8-9ACBE012AFA9",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "04004000000000003000",
              "ten_chuong"  =>   "Chương III HÀNH NGHỀ LUẬT SƯ",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "d762a424-dab9-400c-b04f-9a03fe7085fa"
            ],
            [
              "hash"  =>   "66500863-D02A-484E-9181-819A4A715A15",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "04004000000000004000",
              "ten_chuong"  =>   "Chương IV THÙ LAO VÀ CHI PHÍ; TIỀN LƯƠNG THEO HỢP ĐỒNG LAO ĐỘNG",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "d762a424-dab9-400c-b04f-9a03fe7085fa"
            ],
            [
              "hash"  =>   "86DB41C5-A2C4-4010-AD8A-972BEDF28213",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "04004000000000005000",
              "ten_chuong"  =>   "Chương V TỔ CHỨC XÃ HỘI - NGHỀ NGHIỆP CỦA LUẬT SƯ",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "d762a424-dab9-400c-b04f-9a03fe7085fa"
            ],
            [
              "hash"  =>   "049D9151-2E86-43C1-BECE-C81431FE441B",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "04004000000000006000",
              "ten_chuong"  =>   "Chương VI HÀNH NGHỀ CỦA TỔ CHỨC HÀNH NGHỀ LUẬT SƯ NƯỚC NGOÀI, LUẬT SƯ NƯỚC NGOÀI TẠI VIỆT NAM",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "d762a424-dab9-400c-b04f-9a03fe7085fa"
            ],
            [
              "hash"  =>   "C8FE6D0F-3A7E-40CA-B364-E8467867F2BD",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "04004000000000007000",
              "ten_chuong"  =>   "Chương VII QUẢN LÝ LUẬT SƯ VÀ HÀNH NGHỀ LUẬT SƯ",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "d762a424-dab9-400c-b04f-9a03fe7085fa"
            ],
            [
              "hash"  =>   "584A954F-E2DC-43B1-8147-9FC58FD189C8",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "04004000000000008000",
              "ten_chuong"  =>   "Chương VIII XỬ LÝ VI PHẠM, GIẢI QUYẾT TRANH CHẤP",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "d762a424-dab9-400c-b04f-9a03fe7085fa"
            ],
            [
              "hash"  =>   "3CE81C81-D697-4979-A214-5E6A66CC8EA3",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "04004000000000009000",
              "ten_chuong"  =>   "Chương IX ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "d762a424-dab9-400c-b04f-9a03fe7085fa"
            ],
            [
              "hash"  =>   "7D81E95A-9E56-423F-A901-B3ADDE521179",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "04005000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "d4bc3980-2c1f-4dfc-b2e9-0943e6aa611d"
            ],
            [
              "hash"  =>   "7A2FAEEE-28E4-4224-AD06-B82CEA545C98",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "04005000000000002000",
              "ten_chuong"  =>   "Chương II NGƯỜI ĐƯỢC TRỢ GIÚP PHÁP LÝ, QUYỀN VÀ NGHĨA VỤ CỦA NGƯỜI ĐƯỢC TRỢ GIÚP PHÁP LÝ",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "d4bc3980-2c1f-4dfc-b2e9-0943e6aa611d"
            ],
            [
              "hash"  =>   "A596159D-46CF-4B9E-AC16-E11A37BED1DA",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "04005000000000003000",
              "ten_chuong"  =>   "Chương III TỔ CHỨC THỰC HIỆN TRỢ GIÚP PHÁP LÝ, QUYỀN VÀ NGHĨA VỤ CỦA TỔ CHỨC THỰC HIỆN TRỢ GIÚP PHÁP LÝ",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "d4bc3980-2c1f-4dfc-b2e9-0943e6aa611d"
            ],
            [
              "hash"  =>   "A3AC2496-3C4B-4079-9836-689B9F814610",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "04005000000000004000",
              "ten_chuong"  =>   "Chương IV NGƯỜI THỰC HIỆN TRỢ GIÚP PHÁP LÝ, QUYỀN, NGHĨA VỤ CỦA NGƯỜI THỰC HIỆN TRỢ GIÚP PHÁP LÝ",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "d4bc3980-2c1f-4dfc-b2e9-0943e6aa611d"
            ],
            [
              "hash"  =>   "4E15AF63-6ACB-4FCC-8584-871C11A2DF87",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "04005000000000005000",
              "ten_chuong"  =>   "Chương V PHẠM VI, LĨNH VỰC, HÌNH THỨC VÀ HOẠT ĐỘNG TRỢ GIÚP PHÁP LÝ",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "d4bc3980-2c1f-4dfc-b2e9-0943e6aa611d"
            ],
            [
              "hash"  =>   "537CDAA8-67B8-43C5-8F72-8389C5CD272E",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "04005000000000006000",
              "ten_chuong"  =>   "Chương VI TRÁCH NHIỆM CỦA CƠ QUAN, TỔ CHỨC ĐỐI VỚI HOẠT ĐỘNG TRỢ GIÚP PHÁP LÝ",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "d4bc3980-2c1f-4dfc-b2e9-0943e6aa611d"
            ],
            [
              "hash"  =>   "8CDFCF2B-2603-4AC9-BB43-0130FCDB2C7E",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "04005000000000007000",
              "ten_chuong"  =>   "Chương VII GIẢI QUYẾT KHIẾU NẠI, TỐ CÁO VÀ TRANH CHẤP",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "d4bc3980-2c1f-4dfc-b2e9-0943e6aa611d"
            ],
            [
              "hash"  =>   "F8DE07F3-0183-43E1-9183-0AD97FF910A2",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "04005000000000008000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "d4bc3980-2c1f-4dfc-b2e9-0943e6aa611d"
            ],
            [
              "hash"  =>   "A6830973-AE80-443D-8A63-0EDB103B9069",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "04006000000000001000",
              "ten_chuong"  =>   "Chương I QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "22caf491-de7a-428a-888a-ed629c7f7a35"
            ],
            [
              "hash"  =>   "37AA40F0-6B9B-4FDD-A4A8-78FC2CA034B2",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "04006000000000002000",
              "ten_chuong"  =>   "Chương II TRUNG TÂM TƯ VẤN PHÁP LUẬT",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "22caf491-de7a-428a-888a-ed629c7f7a35"
            ],
            [
              "hash"  =>   "2FCA3C10-C50A-410F-A1CF-ED326781D600",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "04006000000000003000",
              "ten_chuong"  =>   "Chương III NGƯỜI THỰC HIỆN TƯ VẤN PHÁP LUẬT",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "22caf491-de7a-428a-888a-ed629c7f7a35"
            ],
            [
              "hash"  =>   "537865DD-EC1E-4A6F-B42E-AE180A1B21F6",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "04006000000000004000",
              "ten_chuong"  =>   "Chương IV QUẢN LÝ HOẠT ĐỘNG TƯ VẤN PHÁP LUẬT",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "22caf491-de7a-428a-888a-ed629c7f7a35"
            ],
            [
              "hash"  =>   "8703E126-71C3-4EA1-99E7-AEED5F5F20CC",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "04006000000000005000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "e967223c-d26a-4c7f-a8d9-420843bd5bf9",
              "hash_de_muc"  =>   "22caf491-de7a-428a-888a-ed629c7f7a35"
            ],
            [
              "hash"  =>   "EE4450F0-968C-4F38-88FE-B12FBC00230C",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "05002000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "cb5c6841-2c38-48ca-b946-da24c8d8a099",
              "hash_de_muc"  =>   "bc6d8c20-c34f-4bd7-a17d-0f29f1abb7ac"
            ],
            [
              "hash"  =>   "7503CEFD-0181-436C-B002-FF75B4FDB0B4",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "05002000000000002000",
              "ten_chuong"  =>   "Chương II QUYỀN, NGHĨA VỤ CỦA VIÊN CHỨC",
              "hash_chu_de"  =>   "cb5c6841-2c38-48ca-b946-da24c8d8a099",
              "hash_de_muc"  =>   "bc6d8c20-c34f-4bd7-a17d-0f29f1abb7ac"
            ],
            [
              "hash"  =>   "9D4357FC-66DA-48A2-AE8A-5AB350736AAE",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "05002000000000003000",
              "ten_chuong"  =>   "Chương III TUYỂN DỤNG, SỬ DỤNG VIÊN CHỨC",
              "hash_chu_de"  =>   "cb5c6841-2c38-48ca-b946-da24c8d8a099",
              "hash_de_muc"  =>   "bc6d8c20-c34f-4bd7-a17d-0f29f1abb7ac"
            ],
            [
              "hash"  =>   "1912F1CF-FFB0-4F47-84D6-DE8B9635137D",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "05002000000000004000",
              "ten_chuong"  =>   "Chương IV QUẢN LÝ VIÊN CHỨC",
              "hash_chu_de"  =>   "cb5c6841-2c38-48ca-b946-da24c8d8a099",
              "hash_de_muc"  =>   "bc6d8c20-c34f-4bd7-a17d-0f29f1abb7ac"
            ],
            [
              "hash"  =>   "692C2311-9C85-43F4-90CA-618CAB8FA450",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "05002000000000005000",
              "ten_chuong"  =>   "Chương V KHEN THƯỞNG VÀ XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "cb5c6841-2c38-48ca-b946-da24c8d8a099",
              "hash_de_muc"  =>   "bc6d8c20-c34f-4bd7-a17d-0f29f1abb7ac"
            ],
            [
              "hash"  =>   "2B1F400A-D9D9-420F-954D-D7DD69054E85",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "05002000000000005500",
              "ten_chuong"  =>   "Chương VI MÃ SỐ VÀ TIÊU CHUẨN CHỨC DANH NGHỀ NGHIỆP VIÊN CHỨC TRONG CÁC NGÀNH NGHỀ, LĨNH VỰC",
              "hash_chu_de"  =>   "cb5c6841-2c38-48ca-b946-da24c8d8a099",
              "hash_de_muc"  =>   "bc6d8c20-c34f-4bd7-a17d-0f29f1abb7ac"
            ],
            [
              "hash"  =>   "2F5DA77A-743F-48A9-9AA6-02FA18781C00",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "05002000000000005750",
              "ten_chuong"  =>   "Chương VII ĐƠN VỊ SỰ NGHIỆP CÔNG LẬP TRONG CÁC NGÀNH, LĨNH VỰC",
              "hash_chu_de"  =>   "cb5c6841-2c38-48ca-b946-da24c8d8a099",
              "hash_de_muc"  =>   "bc6d8c20-c34f-4bd7-a17d-0f29f1abb7ac"
            ],
            [
              "hash"  =>   "9BA0A70B-BDA6-4BD8-8283-01ECDED3445E",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "05002000000000006000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "cb5c6841-2c38-48ca-b946-da24c8d8a099",
              "hash_de_muc"  =>   "bc6d8c20-c34f-4bd7-a17d-0f29f1abb7ac"
            ],
            [
              "hash"  =>   "3992F50D-7668-4721-8279-7DA986D9FD61",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "06001000000000001000",
              "ten_chuong"  =>   "Chương I QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "3a8413a9-7763-4a9b-93f8-dd5f18ba1594"
            ],
            [
              "hash"  =>   "224DD77C-2A4E-481D-ABB6-70FF8960C4EE",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "06001000000000002000",
              "ten_chuong"  =>   "Chương II TRỢ GIÚP XÃ HỘI THƯỜNG XUYÊN TẠI CỘNG ĐỒNG",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "3a8413a9-7763-4a9b-93f8-dd5f18ba1594"
            ],
            [
              "hash"  =>   "F665BC9A-B84B-4360-86A6-045D4B10CD86",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "06001000000000003000",
              "ten_chuong"  =>   "Chương III TRỢ GIÚP XÃ HỘI KHẨN CẤP",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "3a8413a9-7763-4a9b-93f8-dd5f18ba1594"
            ],
            [
              "hash"  =>   "0FA2434E-1EAE-4F28-8A92-2FE93F204642",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "06001000000000004000",
              "ten_chuong"  =>   "Chương IV CHĂM SÓC, NUÔI DƯỠNG TẠI CỘNG ĐỒNG",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "3a8413a9-7763-4a9b-93f8-dd5f18ba1594"
            ],
            [
              "hash"  =>   "A2CE4BE2-5BC3-4A7C-9A7C-147A11930D9B",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "06001000000000005000",
              "ten_chuong"  =>   "Chương V CHĂM SÓC, NUÔI DƯỠNG ĐỐI TƯỢNG BẢO TRỢ XÃ HỘI TẠI CƠ SỞ TRỢ GIÚP XÃ HỘI, NHÀ XÃ HỘI",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "3a8413a9-7763-4a9b-93f8-dd5f18ba1594"
            ],
            [
              "hash"  =>   "04B814E9-34D6-4901-9E28-404C1ED1414A",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "06001000000000006000",
              "ten_chuong"  =>   "Chương VI KINH PHÍ THỰC HIỆN",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "3a8413a9-7763-4a9b-93f8-dd5f18ba1594"
            ],
            [
              "hash"  =>   "6069FA49-AF0A-45F0-806E-F87D1502E215",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "06001000000000007000",
              "ten_chuong"  =>   "Chương VII TỔ CHỨC THỰC HIỆN",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "3a8413a9-7763-4a9b-93f8-dd5f18ba1594"
            ],
            [
              "hash"  =>   "5584DE9E-1370-442C-8A0B-83187634C9FA",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "06001000000000008000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "3a8413a9-7763-4a9b-93f8-dd5f18ba1594"
            ],
            [
              "hash"  =>   "82154C1C-7EDD-4E55-A56D-7BE770CDF723",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "06002000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "f4428e88-cf73-4d8f-920d-ae402512fe94"
            ],
            [
              "hash"  =>   "189B7AC4-CED3-4565-A3D7-8E258AA4116C",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "06002000000000002000",
              "ten_chuong"  =>   "Chương II PHỤNG DƯỠNG, CHĂM SÓC NGƯỜI CAO TUỔI",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "f4428e88-cf73-4d8f-920d-ae402512fe94"
            ],
            [
              "hash"  =>   "F9384930-31FB-49E0-8D4A-B74847A27B8C",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "06002000000000003000",
              "ten_chuong"  =>   "Chương III PHÁT HUY VAI TRÒ NGƯỜI CAO TUỔI",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "f4428e88-cf73-4d8f-920d-ae402512fe94"
            ],
            [
              "hash"  =>   "FDBBF8DD-24F4-48C8-8CA1-E0A49BD97B24",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "06002000000000004000",
              "ten_chuong"  =>   "Chương IV HỘI NGƯỜI CAO TUỔI VIỆT NAM",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "f4428e88-cf73-4d8f-920d-ae402512fe94"
            ],
            [
              "hash"  =>   "C0CE6973-984F-4C88-A180-8F371BB2BDEB",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "06002000000000005000",
              "ten_chuong"  =>   "Chương V TRÁCH NHIỆM CỦA CƠ QUAN NHÀ NƯỚC VỀ CÔNG TÁC NGƯỜI CAO TUỔI",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "f4428e88-cf73-4d8f-920d-ae402512fe94"
            ],
            [
              "hash"  =>   "BB7A600D-FBB3-4895-8609-9D791FFE250E",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "06002000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "f4428e88-cf73-4d8f-920d-ae402512fe94"
            ],
            [
              "hash"  =>   "AF65CFB5-3E06-46CC-85A3-607FD8C2AA12",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "06003000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "bacdbd85-9876-46f4-a7e7-3575950d10f7"
            ],
            [
              "hash"  =>   "C136A75C-824B-4332-8EBB-0A6129849FF9",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "06003000000000002000",
              "ten_chuong"  =>   "Chương II XÁC NHẬN KHUYẾT TẬT",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "bacdbd85-9876-46f4-a7e7-3575950d10f7"
            ],
            [
              "hash"  =>   "4859490E-CA46-45DA-A861-E40D42B47836",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "06003000000000003000",
              "ten_chuong"  =>   "Chương III CHĂM SÓC SỨC KHỎE",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "bacdbd85-9876-46f4-a7e7-3575950d10f7"
            ],
            [
              "hash"  =>   "01BC0034-862B-4BA1-BFEC-0D122B1864A9",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "06003000000000004000",
              "ten_chuong"  =>   "Chương IV GIÁO DỤC",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "bacdbd85-9876-46f4-a7e7-3575950d10f7"
            ],
            [
              "hash"  =>   "842AB44C-B67B-4346-BD78-58843115C5DC",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "06003000000000005000",
              "ten_chuong"  =>   "Chương V DẠY NGHỀ VÀ VIỆC LÀM",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "bacdbd85-9876-46f4-a7e7-3575950d10f7"
            ],
            [
              "hash"  =>   "0A954905-1C48-4285-A181-648F14ABC61B",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "06003000000000006000",
              "ten_chuong"  =>   "Chương VI VĂN HÓA, THỂ DỤC, THỂ THAO, GIẢI TRÍ VÀ DU LỊCH",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "bacdbd85-9876-46f4-a7e7-3575950d10f7"
            ],
            [
              "hash"  =>   "DB7101F8-D4D3-4484-A15C-EE6C05364BDD",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "06003000000000007000",
              "ten_chuong"  =>   "Chương VII NHÀ CHUNG CƯ, CÔNG TRÌNH CÔNG CỘNG, GIAO THÔNG, CÔNG NGHỆ THÔNG TIN VÀ TRUYỀN THÔNG",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "bacdbd85-9876-46f4-a7e7-3575950d10f7"
            ],
            [
              "hash"  =>   "1C862786-61F0-4FDD-8201-54CFFF505435",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "06003000000000008000",
              "ten_chuong"  =>   "Chương VIII BẢO TRỢ XÃ HỘI",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "bacdbd85-9876-46f4-a7e7-3575950d10f7"
            ],
            [
              "hash"  =>   "E43AD328-E4BF-4782-B6F4-DAFB53924982",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "06003000000000009000",
              "ten_chuong"  =>   "Chương IX TRÁCH NHIỆM CỦA CƠ QUAN NHÀ NƯỚC VỀ CÔNG TÁC NGƯỜI KHUYẾT TẬT",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "bacdbd85-9876-46f4-a7e7-3575950d10f7"
            ],
            [
              "hash"  =>   "A5FD49DE-C3C7-4882-B2E1-139A20D42641",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "06003000000000010000",
              "ten_chuong"  =>   "Chương X ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "bacdbd85-9876-46f4-a7e7-3575950d10f7"
            ],
            [
              "hash"  =>   "87BA6296-2886-44DF-8B41-D0345936E33E",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "06004000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "3ab62963-aeea-43da-b7b9-209ebdb37946"
            ],
            [
              "hash"  =>   "D69F1A6D-3B9A-4705-A4EE-6793F5B9A91A",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "06004000000000002000",
              "ten_chuong"  =>   "Chương II NHỮNG BIỆN PHÁP VÀ TRÁCH NHIỆM CỦA CƠ QUAN, TỔ CHỨC, CÁ NHÂN VÀ GIA ĐÌNH TRONG PHÒNG, CHỐNG MẠI DÂM",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "3ab62963-aeea-43da-b7b9-209ebdb37946"
            ],
            [
              "hash"  =>   "B1B6742B-481D-4D86-90B9-ADA104B3D6BB",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "06004000000000003000",
              "ten_chuong"  =>   "Chương III XỬ LÝ VI PHẠM PHÁP LUẬT VỀ PHÒNG, CHỐNG MẠI DÂM",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "3ab62963-aeea-43da-b7b9-209ebdb37946"
            ],
            [
              "hash"  =>   "F92CD370-0E5E-41F7-8A9C-50640A88C594",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "06004000000000004000",
              "ten_chuong"  =>   "Chương IV QUẢN LÝ NHÀ NƯỚC VỀ CÔNG TÁC PHÒNG, CHỐNG MẠI DÂM",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "3ab62963-aeea-43da-b7b9-209ebdb37946"
            ],
            [
              "hash"  =>   "B8C1C43D-B5C6-4E81-BBCE-6148D79A1711",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "06004000000000005000",
              "ten_chuong"  =>   "Chương V KHEN THƯỞNG VÀ KHIẾU NẠI, TỐ CÁO",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "3ab62963-aeea-43da-b7b9-209ebdb37946"
            ],
            [
              "hash"  =>   "BF266F6B-C09A-4A21-82E5-D2BF55C9B38D",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "06004000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "e4b6a170-8415-42a5-9ee2-f8eb147f5d15",
              "hash_de_muc"  =>   "3ab62963-aeea-43da-b7b9-209ebdb37946"
            ],
            [
              "hash"  =>   "005C521B-662B-4186-A96D-8DDBFF2B9BA4",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "07003000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "b10f42da-f79a-463d-98e0-cffc1df99fda"
            ],
            [
              "hash"  =>   "A68FF6F9-AB2E-44DF-9070-50E177299E35",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "07003000000000002500",
              "ten_chuong"  =>   "Chương II QUY HOẠCH VÀ ĐẦU TƯ PHÁT TRIỂN ĐIỆN LỰC",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "b10f42da-f79a-463d-98e0-cffc1df99fda"
            ],
            [
              "hash"  =>   "0EE087EF-5106-4E8C-BCAD-DAC02F4E7E16",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "07003000000000003000",
              "ten_chuong"  =>   "Chương III TIẾT KIỆM TRONG PHÁT ĐIỆN, TRUYỀN TẢI, PHÂN PHỐI VÀ SỬ DỤNG ĐIỆN",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "b10f42da-f79a-463d-98e0-cffc1df99fda"
            ],
            [
              "hash"  =>   "4F68CC14-E2A9-45C6-BE78-9A099C9EE878",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "07003000000000004000",
              "ten_chuong"  =>   "Chương IV THỊ TRƯỜNG ĐIỆN LỰC",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "b10f42da-f79a-463d-98e0-cffc1df99fda"
            ],
            [
              "hash"  =>   "6A2610F3-1849-4BE8-A7CA-151B5B52A9A6",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "07003000000000005000",
              "ten_chuong"  =>   "Chương V GIẤY PHÉP HOẠT ĐỘNG ĐIỆN LỰC",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "b10f42da-f79a-463d-98e0-cffc1df99fda"
            ],
            [
              "hash"  =>   "A4C31A4A-ED81-4668-B1A8-4C98FEAC06E4",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "07003000000000006000",
              "ten_chuong"  =>   "Chương VI QUYỀN, NGHĨA VỤ CỦA ĐƠN VỊ ĐIỆN LỰC VÀ KHÁCH HÀNG SỬ DỤNG ĐIỆN",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "b10f42da-f79a-463d-98e0-cffc1df99fda"
            ],
            [
              "hash"  =>   "2F5D0749-AC04-4BD9-87D0-E081634CEBEC",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "07003000000000007000",
              "ten_chuong"  =>   "Chương VII BẢO VỆ TRANG THIẾT BỊ ĐIỆN, CÔNG TRÌNH ĐIỆN LỰC VÀ AN TOÀN ĐIỆN",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "b10f42da-f79a-463d-98e0-cffc1df99fda"
            ],
            [
              "hash"  =>   "DD1E3E7A-F1F2-4A2E-AA0A-D3FBC0BF385D",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "07003000000000008000",
              "ten_chuong"  =>   "Chương VIII ĐIỆN PHỤC VỤ NÔNG THÔN, MIỀN NÚI, BIÊN GIỚI, HẢI ĐẢO",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "b10f42da-f79a-463d-98e0-cffc1df99fda"
            ],
            [
              "hash"  =>   "772FFCFC-77D4-456C-9104-B3C5006FE849",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "07003000000000009000",
              "ten_chuong"  =>   "Chương IX QUẢN LÝ NHÀ NƯỚC VỀ HOẠT ĐỘNG ĐIỆN LỰC VÀ SỬ DỤNG ĐIỆN",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "b10f42da-f79a-463d-98e0-cffc1df99fda"
            ],
            [
              "hash"  =>   "9DF88D2F-167D-4CDD-95E5-514BDD264253",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "07003000000000010000",
              "ten_chuong"  =>   "Chương X ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "b10f42da-f79a-463d-98e0-cffc1df99fda"
            ],
            [
              "hash"  =>   "5EC2E2ED-FDCD-49CA-8F11-BD91FF8C36A2",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "07004000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "4342e880-6160-4d52-85ba-671ad605adae"
            ],
            [
              "hash"  =>   "41E3EAA1-3335-4AE8-B4F8-A7E952583AD6",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "07004000000000002000",
              "ten_chuong"  =>   "Chương II PHÁT TRIỂN CÔNG NGHIỆP HÓA CHẤT",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "4342e880-6160-4d52-85ba-671ad605adae"
            ],
            [
              "hash"  =>   "37C617B6-4A37-480C-B81E-7C7C8AB3B690",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "07004000000000003000",
              "ten_chuong"  =>   "Chương III SẢN XUẤT, KINH DOANH HÓA CHẤT",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "4342e880-6160-4d52-85ba-671ad605adae"
            ],
            [
              "hash"  =>   "210670C5-A962-43CC-B090-2720E12723DD",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "07004000000000004000",
              "ten_chuong"  =>   "Chương IV PHÂN LOẠI, GHI NHÃN, BAO GÓI VÀ PHIẾU AN TOÀN HÓA CHẤT",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "4342e880-6160-4d52-85ba-671ad605adae"
            ],
            [
              "hash"  =>   "B9FFD723-F4AF-4D99-A9D4-76D2B5F47592",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "07004000000000005000",
              "ten_chuong"  =>   "Chương V SỬ DỤNG HÓA CHẤT",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "4342e880-6160-4d52-85ba-671ad605adae"
            ],
            [
              "hash"  =>   "AD12AF1A-FB95-4C17-B159-86D2115DEC54",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "07004000000000006000",
              "ten_chuong"  =>   "Chương VI PHÒNG NGỪA, ỨNG PHÓ SỰ CỐ HÓA CHẤT",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "4342e880-6160-4d52-85ba-671ad605adae"
            ],
            [
              "hash"  =>   "D72B1270-1111-4AB0-AE60-596DDC13055E",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "07004000000000007000",
              "ten_chuong"  =>   "Chương VII KHAI BÁO, ĐĂNG KÝ VÀ CUNG CẤP THÔNG TIN HÓA CHẤT",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "4342e880-6160-4d52-85ba-671ad605adae"
            ],
            [
              "hash"  =>   "D662624A-AD75-4708-8742-9A018B028CC0",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "07004000000000008000",
              "ten_chuong"  =>   "Chương VIII BẢO VỆ MÔI TRƯỜNG VÀ AN TOÀN CHO CỘNG ĐỒNG",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "4342e880-6160-4d52-85ba-671ad605adae"
            ],
            [
              "hash"  =>   "C538E481-63F3-453A-A57F-B61DD39D84F2",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "07004000000000009000",
              "ten_chuong"  =>   "Chương IX TRÁCH NHIỆM QUẢN LÝ NHÀ NƯỚC VỀ HOẠT ĐỘNG HÓA CHẤT",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "4342e880-6160-4d52-85ba-671ad605adae"
            ],
            [
              "hash"  =>   "2C1E55BA-6CD1-4EA0-BCD8-F44A9111EA4F",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "07004000000000010000",
              "ten_chuong"  =>   "Chương X ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "4342e880-6160-4d52-85ba-671ad605adae"
            ],
            [
              "hash"  =>   "C814275D-1283-4B1B-8702-8B96C9E5E834",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "07005000000000001000",
              "ten_chuong"  =>   "Chương I QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "19cf24e0-40e1-4a77-b7d6-977575e0e5f2"
            ],
            [
              "hash"  =>   "33A9C259-3C48-4366-ACB0-DE276E5A59D4",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "07005000000000002000",
              "ten_chuong"  =>   "Chương II CHÍNH SÁCH KHUYẾN CÔNG",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "19cf24e0-40e1-4a77-b7d6-977575e0e5f2"
            ],
            [
              "hash"  =>   "DB91AF59-5C2A-42B2-B0C3-FE1CEA3C10B9",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "07005000000000003000",
              "ten_chuong"  =>   "Chương III TỔ CHỨC HỆ THỐNG KHUYẾN CÔNG",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "19cf24e0-40e1-4a77-b7d6-977575e0e5f2"
            ],
            [
              "hash"  =>   "EB1C9EBA-4052-47CF-A8CD-453DC410C260",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "07005000000000004000",
              "ten_chuong"  =>   "Chương IV KINH PHÍ KHUYẾN CÔNG",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "19cf24e0-40e1-4a77-b7d6-977575e0e5f2"
            ],
            [
              "hash"  =>   "68CA0FCC-B135-4733-A844-C2860EA4B370",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "07005000000000005000",
              "ten_chuong"  =>   "Chương V QUẢN LÝ NHÀ NƯỚC VỀ HOẠT ĐỘNG KHUYẾN CÔNG",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "19cf24e0-40e1-4a77-b7d6-977575e0e5f2"
            ],
            [
              "hash"  =>   "90294D2A-8B08-4516-A59A-8BA1B2D2046A",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "07005000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "19cf24e0-40e1-4a77-b7d6-977575e0e5f2"
            ],
            [
              "hash"  =>   "8DA993FE-5680-4554-B444-DC3EB8CEBAF6",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "07007000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "913b88fd-89da-4fc5-8268-477ae6d71bac"
            ],
            [
              "hash"  =>   "4E7295D3-EB10-4843-8BB7-6CD92CD6FB08",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "07007000000000002000",
              "ten_chuong"  =>   "Chương II SỬ DỤNG NĂNG LƯỢNG TIẾT KIỆM VÀ HIỆU QUẢ TRONG SẢN XUẤT CÔNG NGHIỆP",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "913b88fd-89da-4fc5-8268-477ae6d71bac"
            ],
            [
              "hash"  =>   "147BED71-8D73-42F7-9664-20BE6B157EC0",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "07007000000000003000",
              "ten_chuong"  =>   "Chương III SỬ DỤNG NĂNG LƯỢNG TIẾT KIỆM VÀ HIỆU QUẢ TRONG XÂY DỰNG, CHIẾU SÁNG CÔNG CỘNG",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "913b88fd-89da-4fc5-8268-477ae6d71bac"
            ],
            [
              "hash"  =>   "59BF8A78-6FD2-4A64-BA0A-05A748117224",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "07007000000000004000",
              "ten_chuong"  =>   "Chương IV SỬ DỤNG NĂNG LƯỢNG TIẾT KIỆM VÀ HIỆU QUẢ TRONG GIAO THÔNG VẬN TẢI",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "913b88fd-89da-4fc5-8268-477ae6d71bac"
            ],
            [
              "hash"  =>   "26B4E13B-237F-4A98-9E12-6327F474C2B5",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "07007000000000005000",
              "ten_chuong"  =>   "Chương V SỬ DỤNG NĂNG LƯỢNG TIẾT KIỆM VÀ HIỆU QUẢ TRONG SẢN XUẤT NÔNG NGHIỆP",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "913b88fd-89da-4fc5-8268-477ae6d71bac"
            ],
            [
              "hash"  =>   "30FD3177-4042-46D2-B8E3-6E21403436A8",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "07007000000000006000",
              "ten_chuong"  =>   "Chương VI SỬ DỤNG NĂNG LƯỢNG TIẾT KIỆM VÀ HIỆU QUẢ TRONG HOẠT ĐỘNG DỊCH VỤ VÀ HỘ GIA ĐÌNH",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "913b88fd-89da-4fc5-8268-477ae6d71bac"
            ],
            [
              "hash"  =>   "76D648BF-E192-4EC6-88BA-0AC867917B27",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "07007000000000007000",
              "ten_chuong"  =>   "Chương VII SỬ DỤNG NĂNG LƯỢNG TIẾT KIỆM VÀ HIỆU QUẢ TRONG DỰ ÁN ĐẦU TƯ, CƠ QUAN, ĐƠN VỊ SỬ DỤNG NGÂN SÁCH NHÀ NƯỚC",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "913b88fd-89da-4fc5-8268-477ae6d71bac"
            ],
            [
              "hash"  =>   "082BC75C-5F7E-4048-B682-21E550BC7EF2",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "07007000000000008000",
              "ten_chuong"  =>   "Chương VIII QUẢN LÝ VIỆC SỬ DỤNG NĂNG LƯỢNG CỦA CƠ SỞ SỬ DỤNG NĂNG LƯỢNG TRỌNG ĐIỂM",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "913b88fd-89da-4fc5-8268-477ae6d71bac"
            ],
            [
              "hash"  =>   "71799E97-CC7D-45FE-9764-1AD5AB8087D0",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "07007000000000009000",
              "ten_chuong"  =>   "Chương IX QUẢN LÝ PHƯƠNG TIỆN, THIẾT BỊ SỬ DỤNG NĂNG LƯỢNG",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "913b88fd-89da-4fc5-8268-477ae6d71bac"
            ],
            [
              "hash"  =>   "9C595799-3CAD-4BF0-8E63-3592ED20AB0A",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "07007000000000010000",
              "ten_chuong"  =>   "Chương X BIỆN PHÁP THÚC ĐẨY SỬ DỤNG NĂNG LƯỢNG TIẾT KIỆM VÀ HIỆU QUẢ",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "913b88fd-89da-4fc5-8268-477ae6d71bac"
            ],
            [
              "hash"  =>   "C8E77324-A7C1-449B-AF2A-2577F7868AE0",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "07007000000000011000",
              "ten_chuong"  =>   "Chương XI TRÁCH NHIỆM QUẢN LÝ NHÀ NƯỚC VỀ SỬ DỤNG NĂNG LƯỢNG TIẾT KIỆM VÀ HIỆU QUẢ",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "913b88fd-89da-4fc5-8268-477ae6d71bac"
            ],
            [
              "hash"  =>   "FEDD3CDF-14B6-4AE9-846B-FE8BA242B0F0",
              "so_thu_tu"  =>   12,
              "MAPC"  =>   "07007000000000012000",
              "ten_chuong"  =>   "Chương XII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "3a225bc6-c8c9-459e-967e-9876d4eb2c33",
              "hash_de_muc"  =>   "913b88fd-89da-4fc5-8268-477ae6d71bac"
            ],
            [
              "hash"  =>   "251CA48E-6D9B-4942-A4D9-2AF99951F5A1",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "08001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "23e1929c-6151-4f15-9d67-11d4f7964dc8"
            ],
            [
              "hash"  =>   "0B5B788F-F845-4714-82AA-73AE67C98A6B",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "08001000000000002000",
              "ten_chuong"  =>   "Chương II QUYỀN VÀ BỔN PHẬN CỦA TRẺ EM",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "23e1929c-6151-4f15-9d67-11d4f7964dc8"
            ],
            [
              "hash"  =>   "BC25202A-DB90-49AC-A868-5CDF6DE86374",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "08001000000000003000",
              "ten_chuong"  =>   "Chương III CHĂM SÓC VÀ GIÁO DỤC TRẺ EM",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "23e1929c-6151-4f15-9d67-11d4f7964dc8"
            ],
            [
              "hash"  =>   "0D370C57-3D10-487C-9CD3-28954075D7BA",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "08001000000000004000",
              "ten_chuong"  =>   "Chương IV BẢO VỆ TRẺ EM",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "23e1929c-6151-4f15-9d67-11d4f7964dc8"
            ],
            [
              "hash"  =>   "8E8BD828-0157-4D6B-9F89-3DEA96D77062",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "08001000000000005000",
              "ten_chuong"  =>   "Chương V TRẺ EM THAM GIA VÀO CÁC VẤN ĐỀ VỀ TRẺ EM",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "23e1929c-6151-4f15-9d67-11d4f7964dc8"
            ],
            [
              "hash"  =>   "E4B1D51A-A480-4EFF-9276-36F6C564FA0A",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "08001000000000006000",
              "ten_chuong"  =>   "Chương VI TRÁCH NHIỆM CỦA CƠ QUAN, TỔ CHỨC, CƠ SỞ GIÁO DỤC, GIA ĐÌNH, CÁ NHÂN TRONG VIỆC THỰC HIỆN QUYỀN VÀ BỔN PHẬN CỦA TRẺ EM",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "23e1929c-6151-4f15-9d67-11d4f7964dc8"
            ],
            [
              "hash"  =>   "21EA159A-6C47-43F2-8F10-AB196595A9DD",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "08001000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "23e1929c-6151-4f15-9d67-11d4f7964dc8"
            ],
            [
              "hash"  =>   "74E149D8-D939-4839-95E9-F386045C637C",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "08002000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "83242e4c-1738-4140-afe5-a5d4f0b8d776"
            ],
            [
              "hash"  =>   "1341BD8F-BDFE-40CD-809D-966792220997",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "08002000000000002000",
              "ten_chuong"  =>   "Chương II BÌNH ĐẲNG GIỚI TRONG CÁC LĨNH VỰC CỦA ĐỜI SỐNG XÃ HỘI VÀ GIA ĐÌNH",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "83242e4c-1738-4140-afe5-a5d4f0b8d776"
            ],
            [
              "hash"  =>   "0FCEF2E3-D47D-406A-ABD8-3B4D9BA0F78B",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "08002000000000003000",
              "ten_chuong"  =>   "Chương III CÁC BIỆN PHÁP BẢO ĐẢM BÌNH ĐẲNG GIỚI",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "83242e4c-1738-4140-afe5-a5d4f0b8d776"
            ],
            [
              "hash"  =>   "FA9F5C20-5D44-45EA-9444-39277F3E2FDF",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "08002000000000004000",
              "ten_chuong"  =>   "Chương IV TRÁCH NHIỆM CỦA CƠ QUAN, TỔ CHỨC, GIA ĐÌNH VÀ CÁ NHÂN TRONG VIỆC THỰC HIỆN VÀ BẢO ĐẢM BÌNH ĐẲNG GIỚI",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "83242e4c-1738-4140-afe5-a5d4f0b8d776"
            ],
            [
              "hash"  =>   "D685F8B1-D176-497D-B58C-C24575521A74",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "08002000000000005000",
              "ten_chuong"  =>   "Chương V THANH TRA, GIÁM SÁTVÀ XỬ LÝ VI PHẠM PHÁP LUẬT VỀ BÌNH ĐẲNG GIỚI",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "83242e4c-1738-4140-afe5-a5d4f0b8d776"
            ],
            [
              "hash"  =>   "5859FE9C-44D8-4C05-8546-90FA01446A71",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "08002000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "83242e4c-1738-4140-afe5-a5d4f0b8d776"
            ],
            [
              "hash"  =>   "0D61FEFA-3D40-4959-93AB-07173660952D",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "08003000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "c57132ec-b2a3-4e38-9433-afd6cc770a8c"
            ],
            [
              "hash"  =>   "1D5141AD-067E-49D6-80CF-2EB259068908",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "08003000000000002000",
              "ten_chuong"  =>   "Chương II QUY MÔ, CƠ CẤU DÂN SỐ VÀ PHÂN BỐ DÂN CƯ",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "c57132ec-b2a3-4e38-9433-afd6cc770a8c"
            ],
            [
              "hash"  =>   "A5B6E7F9-327F-4508-896B-FF46745F9D61",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "08003000000000003000",
              "ten_chuong"  =>   "Chương III CHẤT LƯỢNG DÂN SỐ",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "c57132ec-b2a3-4e38-9433-afd6cc770a8c"
            ],
            [
              "hash"  =>   "02747BF4-790C-4D3F-BB9F-703109326E92",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "08003000000000004000",
              "ten_chuong"  =>   "Chương IV CÁC BIỆN PHÁP THỰC HIỆN CÔNG TÁC DÂN SỐ",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "c57132ec-b2a3-4e38-9433-afd6cc770a8c"
            ],
            [
              "hash"  =>   "DD0D1F96-432E-4143-8AA7-25FE25CD3EF5",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "08003000000000005000",
              "ten_chuong"  =>   "Chương V QUẢN LÝ NHÀ NƯỚC VỀ DÂN SỐ",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "c57132ec-b2a3-4e38-9433-afd6cc770a8c"
            ],
            [
              "hash"  =>   "E55F297F-63C7-4C2F-BAA2-5E9D1608226B",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "08003000000000006000",
              "ten_chuong"  =>   "Chương VI KHEN THƯỞNG VÀ XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "c57132ec-b2a3-4e38-9433-afd6cc770a8c"
            ],
            [
              "hash"  =>   "1FC2C94C-96CC-4F78-9793-DD1C53C7764C",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "08003000000000006500",
              "ten_chuong"  =>   "Chương VII KINH PHÍ THỰC HIỆN  CÔNG TÁC DÂN SỐ - KẾ HOẠCH HÓA GIA ĐÌNH",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "c57132ec-b2a3-4e38-9433-afd6cc770a8c"
            ],
            [
              "hash"  =>   "016C0C54-579B-4406-8B87-B8714F15E406",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "08003000000000007000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "c57132ec-b2a3-4e38-9433-afd6cc770a8c"
            ],
            [
              "hash"  =>   "B690D968-20F2-4C9C-9F57-E93B2FFDD4D8",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "08004000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "4913a1cf-5f78-471c-a807-ed5f8c57aaee"
            ],
            [
              "hash"  =>   "21D89443-949E-4473-A49C-02686AF7849F",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "08004000000000002000",
              "ten_chuong"  =>   "Chương II KẾT HÔN",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "4913a1cf-5f78-471c-a807-ed5f8c57aaee"
            ],
            [
              "hash"  =>   "A44E4180-4AFA-4F20-AFD2-D29D4DC3224A",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "08004000000000003000",
              "ten_chuong"  =>   "Chương III QUAN HỆ GIỮA VỢ VÀ CHỒNG",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "4913a1cf-5f78-471c-a807-ed5f8c57aaee"
            ],
            [
              "hash"  =>   "2275CB2E-FB97-47F5-8454-E463012EEC9B",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "08004000000000004000",
              "ten_chuong"  =>   "Chương IV CHẤM DỨT HÔN NHÂN",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "4913a1cf-5f78-471c-a807-ed5f8c57aaee"
            ],
            [
              "hash"  =>   "19C592CD-01F2-4449-A352-7EB5AFA4EFFC",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "08004000000000005000",
              "ten_chuong"  =>   "Chương V QUAN HỆ GIỮA CHA MẸ VÀ CON",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "4913a1cf-5f78-471c-a807-ed5f8c57aaee"
            ],
            [
              "hash"  =>   "71875C7D-74AB-427F-BEE2-59EE18398E65",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "08004000000000006000",
              "ten_chuong"  =>   "Chương VI QUAN HỆ GIỮA CÁC THÀNH VIÊN KHÁC CỦA GIA ĐÌNH",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "4913a1cf-5f78-471c-a807-ed5f8c57aaee"
            ],
            [
              "hash"  =>   "7AECA906-6EEB-4D07-A435-29A803725B17",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "08004000000000007000",
              "ten_chuong"  =>   "Chương VII CẤP DƯỠNG",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "4913a1cf-5f78-471c-a807-ed5f8c57aaee"
            ],
            [
              "hash"  =>   "53CB50A5-AFCF-4639-A970-B8332D267313",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "08004000000000008000",
              "ten_chuong"  =>   "Chương VIII QUAN HỆ HÔN NHÂN VÀ GIA ĐÌNH CÓ YẾU TỐ NƯỚC NGOÀI",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "4913a1cf-5f78-471c-a807-ed5f8c57aaee"
            ],
            [
              "hash"  =>   "46BD1918-2A4E-4596-8B7A-41FDC5CE76DB",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "08004000000000009000",
              "ten_chuong"  =>   "Chương IX ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "4913a1cf-5f78-471c-a807-ed5f8c57aaee"
            ],
            [
              "hash"  =>   "E8CA04C2-E5B2-413D-BB1A-7FCE0AD12749",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "08005000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "dae8ac70-fd7f-41ed-84e8-90980ae92475"
            ],
            [
              "hash"  =>   "2AB522BA-B7EA-4694-AE31-4B9C55D07860",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "08005000000000002000",
              "ten_chuong"  =>   "Chương II PHÒNG NGỪA BẠO LỰC GIA ĐÌNH",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "dae8ac70-fd7f-41ed-84e8-90980ae92475"
            ],
            [
              "hash"  =>   "DCCA1D2B-8884-4BD4-85AC-7ACA6196E6B9",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "08005000000000003000",
              "ten_chuong"  =>   "Chương III BẢO VỆ VÀ HỖ TRỢ NẠN NHÂN BẠO LỰC GIA ĐÌNH",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "dae8ac70-fd7f-41ed-84e8-90980ae92475"
            ],
            [
              "hash"  =>   "65C5AEFF-AE5B-4ECE-A4FB-628C59B54012",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "08005000000000004000",
              "ten_chuong"  =>   "Chương IV TRÁCH NHIỆM CỦA CÁ NHÂN, GIA ĐÌNH, CƠ QUAN, TỔ CHỨC RONG PHÒNG, CHỐNG BẠO LỰC GIA ĐÌNH",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "dae8ac70-fd7f-41ed-84e8-90980ae92475"
            ],
            [
              "hash"  =>   "AC5477B6-3A1D-4012-8D99-34A87B685557",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "08005000000000005000",
              "ten_chuong"  =>   "Chương V XỬ LÝ VI PHẠM PHÁP LUẬT VỀ PHÒNG, CHỐNG BẠO LỰC GIA ĐÌNH VÀ KHIẾU NẠI, TỐ CÁO",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "dae8ac70-fd7f-41ed-84e8-90980ae92475"
            ],
            [
              "hash"  =>   "741D72AC-F3C4-4C8F-936E-12BCB4E7561D",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "08005000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "efbefb52-bf45-41df-aaf4-6a4e833f333e",
              "hash_de_muc"  =>   "dae8ac70-fd7f-41ed-84e8-90980ae92475"
            ],
            [
              "hash"  =>   "DE64B52F-5EE9-433F-B3F7-1CD0C700F850",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "0900100000000000100000010000000000000000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "eb0e4753-243e-4344-90e6-70aaf5188a6d"
            ],
            [
              "hash"  =>   "5EF6FE32-3F14-4940-98D8-14DE900B14D6",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "0900100000000000100000020000000000000000",
              "ten_chuong"  =>   "Chương II XÁC LẬP, THỰC HIỆN VÀ BẢO VỆ QUYỀN DÂN SỰ",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "eb0e4753-243e-4344-90e6-70aaf5188a6d"
            ],
            [
              "hash"  =>   "4D5AFF8F-AAA9-474B-AFE6-DC83CA1814E3",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "0900100000000000100000030000000000000000",
              "ten_chuong"  =>   "Chương III CÁ NHÂN",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "eb0e4753-243e-4344-90e6-70aaf5188a6d"
            ],
            [
              "hash"  =>   "885A8A2E-4399-421B-9E6E-40D76420E474",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "0900100000000000100000040000000000000000",
              "ten_chuong"  =>   "Chương IV PHÁP NHÂN",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "eb0e4753-243e-4344-90e6-70aaf5188a6d"
            ],
            [
              "hash"  =>   "C34E0894-0CD6-4760-878D-8C787CCFE84E",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "0900100000000000100000050000000000000000",
              "ten_chuong"  =>   "Chương V NHÀ NƯỚC CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM, CƠ QUAN NHÀ NƯỚC Ở TRUNG ƯƠNG, Ở ĐỊA PHƯƠNG TRONG QUAN HỆ DÂN SỰ",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "eb0e4753-243e-4344-90e6-70aaf5188a6d"
            ],
            [
              "hash"  =>   "C609CCEE-7A24-49C6-9DBD-770E2DAC2035",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "0900100000000000100000060000000000000000",
              "ten_chuong"  =>   "Chương VI HỘ GIA ĐÌNH, TỔ HỢP TÁC VÀ TỔ CHỨC KHÁC KHÔNG CÓ TƯ CÁCH PHÁP NHÂN TRONG QUAN HỆ DÂN SỰ",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "eb0e4753-243e-4344-90e6-70aaf5188a6d"
            ],
            [
              "hash"  =>   "A8C799C7-587B-44A6-A0D4-BC77C99A0932",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "0900100000000000100000070000000000000000",
              "ten_chuong"  =>   "Chương VII TÀI SẢN",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "eb0e4753-243e-4344-90e6-70aaf5188a6d"
            ],
            [
              "hash"  =>   "FC64DEDF-6D04-4DF1-B452-F3D73C5D7B66",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "0900100000000000100000080000000000000000",
              "ten_chuong"  =>   "Chương VIII GIAO DỊCH DÂN SỰ",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "eb0e4753-243e-4344-90e6-70aaf5188a6d"
            ],
            [
              "hash"  =>   "0CA0CC49-D1E1-4AA1-990C-ACECFF673076",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "0900100000000000100000090000000000000000",
              "ten_chuong"  =>   "Chương IX ĐẠI DIỆN",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "eb0e4753-243e-4344-90e6-70aaf5188a6d"
            ],
            [
              "hash"  =>   "B3A56ED0-F591-4EDB-BF34-910A8C3317D1",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "0900100000000000100000100000000000000000",
              "ten_chuong"  =>   "Chương X THỜI HẠN VÀ THỜI HIỆU",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "eb0e4753-243e-4344-90e6-70aaf5188a6d"
            ],
            [
              "hash"  =>   "2A571091-8E11-4AE7-884B-6D008AAB181D",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "0900100000000000200000110000000000000000",
              "ten_chuong"  =>   "Chương XI QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "eb0e4753-243e-4344-90e6-70aaf5188a6d"
            ],
            [
              "hash"  =>   "F0DB56F0-6862-40B9-9C7F-5272FEBC88C5",
              "so_thu_tu"  =>   12,
              "MAPC"  =>   "0900100000000000200000120000000000000000",
              "ten_chuong"  =>   "Chương XII CHIẾM HỮU",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "eb0e4753-243e-4344-90e6-70aaf5188a6d"
            ],
            [
              "hash"  =>   "CEE4881A-2046-423E-A11C-1D2DAA51D98D",
              "so_thu_tu"  =>   13,
              "MAPC"  =>   "0900100000000000200000130000000000000000",
              "ten_chuong"  =>   "Chương XIII QUYỀN SỞ HỮU",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "eb0e4753-243e-4344-90e6-70aaf5188a6d"
            ],
            [
              "hash"  =>   "E2F9F599-C668-4079-9348-41D3E0EBB757",
              "so_thu_tu"  =>   14,
              "MAPC"  =>   "0900100000000000200000140000000000000000",
              "ten_chuong"  =>   "Chương XIV QUYỀN KHÁC ĐỐI VỚI TÀI SẢN",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "eb0e4753-243e-4344-90e6-70aaf5188a6d"
            ],
            [
              "hash"  =>   "9DFE7E99-2B02-46F6-9A4D-F82DA11A653F",
              "so_thu_tu"  =>   15,
              "MAPC"  =>   "0900100000000000300000150000000000000000",
              "ten_chuong"  =>   "Chương XV QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "eb0e4753-243e-4344-90e6-70aaf5188a6d"
            ],
            [
              "hash"  =>   "8C36BD8E-3BC7-4F3F-BDFF-DB47B909C959",
              "so_thu_tu"  =>   16,
              "MAPC"  =>   "0900100000000000300000160000000000000000",
              "ten_chuong"  =>   "Chương XVI MỘT SỐ HỢP ĐỒNG THÔNG DỤNG",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "eb0e4753-243e-4344-90e6-70aaf5188a6d"
            ],
            [
              "hash"  =>   "BA2ADD86-91C4-4446-A6D5-FDCEE5816B8A",
              "so_thu_tu"  =>   17,
              "MAPC"  =>   "0900100000000000300000170000000000000000",
              "ten_chuong"  =>   "Chương XVII HỨA THƯỞNG, THI CÓ GIẢI",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "eb0e4753-243e-4344-90e6-70aaf5188a6d"
            ],
            [
              "hash"  =>   "F3724C42-F220-4C55-AE90-F155C4880686",
              "so_thu_tu"  =>   18,
              "MAPC"  =>   "0900100000000000300000180000000000000000",
              "ten_chuong"  =>   "Chương XVIII THỰC HIỆN CÔNG VIỆC KHÔNG CÓ UỶ QUYỀN",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "eb0e4753-243e-4344-90e6-70aaf5188a6d"
            ],
            [
              "hash"  =>   "A6D3D83C-BBE3-4D13-A212-A7AB2717474A",
              "so_thu_tu"  =>   19,
              "MAPC"  =>   "0900100000000000300000190000000000000000",
              "ten_chuong"  =>   "Chương XIX NGHĨA VỤ HOÀN TRẢ DO CHIẾM HỮU, SỬ DỤNG TÀI SẢN, ĐƯỢC LỢI VỀ TÀI SẢN KHÔNG CÓ CĂN CỨ PHÁP LUẬT",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "eb0e4753-243e-4344-90e6-70aaf5188a6d"
            ],
            [
              "hash"  =>   "45B552BA-8905-46DD-9F47-E81F59EB01A1",
              "so_thu_tu"  =>   20,
              "MAPC"  =>   "0900100000000000300000200000000000000000",
              "ten_chuong"  =>   "Chương XX TRÁCH NHIỆM BỒI THƯỜNG THIỆT HẠI NGOÀI HỢP ĐỒNG",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "eb0e4753-243e-4344-90e6-70aaf5188a6d"
            ],
            [
              "hash"  =>   "D3698C18-9AAE-4F46-A6D8-4F15F5E0D874",
              "so_thu_tu"  =>   21,
              "MAPC"  =>   "0900100000000000400000210000000000000000",
              "ten_chuong"  =>   "Chương XXI QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "eb0e4753-243e-4344-90e6-70aaf5188a6d"
            ],
            [
              "hash"  =>   "D392FCBF-3A37-4C9B-A878-D162D62E7A1B",
              "so_thu_tu"  =>   22,
              "MAPC"  =>   "0900100000000000400000220000000000000000",
              "ten_chuong"  =>   "Chương XXII THỪA KẾ THEO DI CHÚC",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "eb0e4753-243e-4344-90e6-70aaf5188a6d"
            ],
            [
              "hash"  =>   "E210A77B-71F0-482D-AAFF-F4D75F7E1092",
              "so_thu_tu"  =>   23,
              "MAPC"  =>   "0900100000000000400000230000000000000000",
              "ten_chuong"  =>   "Chương XXIII THỪA KẾ THEO PHÁP LUẬT",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "eb0e4753-243e-4344-90e6-70aaf5188a6d"
            ],
            [
              "hash"  =>   "C14C4EB3-DB25-479A-BEAE-255AD8F0C2C9",
              "so_thu_tu"  =>   24,
              "MAPC"  =>   "0900100000000000400000240000000000000000",
              "ten_chuong"  =>   "Chương XXIV THANH TOÁN VÀ PHÂN CHIA DI SẢN",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "eb0e4753-243e-4344-90e6-70aaf5188a6d"
            ],
            [
              "hash"  =>   "6CD04138-E514-4B9C-920A-1DDC86F1BBDA",
              "so_thu_tu"  =>   25,
              "MAPC"  =>   "0900100000000000500000250000000000000000",
              "ten_chuong"  =>   "Chương XXV QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "eb0e4753-243e-4344-90e6-70aaf5188a6d"
            ],
            [
              "hash"  =>   "1A32D01D-8A8D-4785-A576-40B9194F91A6",
              "so_thu_tu"  =>   26,
              "MAPC"  =>   "0900100000000000500000260000000000000000",
              "ten_chuong"  =>   "Chương XXVI PHÁP LUẬT ÁP DỤNG ĐỐI VỚI CÁ NHÂN, PHÁP NHÂN",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "eb0e4753-243e-4344-90e6-70aaf5188a6d"
            ],
            [
              "hash"  =>   "AE8274B4-5033-4290-B947-771AA7472384",
              "so_thu_tu"  =>   27,
              "MAPC"  =>   "0900100000000000500000270000000000000000",
              "ten_chuong"  =>   "Chương XXVII PHÁP LUẬT ÁP DỤNG ĐỐI VỚI QUAN HỆ TÀI SẢN, QUAN HỆ NHÂN THÂN",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "eb0e4753-243e-4344-90e6-70aaf5188a6d"
            ],
            [
              "hash"  =>   "9D356D42-9852-48BD-AE0E-DC04D1624CBC",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "09003000000000001000",
              "ten_chuong"  =>   "Chương I QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "9fbd9627-0235-4d28-92c7-e4b4c6e96577"
            ],
            [
              "hash"  =>   "26FB8306-5F1B-4438-BBA3-E161DFC106A5",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "09003000000000002000",
              "ten_chuong"  =>   "Chương II TÀI SẢN BẢO ĐẢM",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "9fbd9627-0235-4d28-92c7-e4b4c6e96577"
            ],
            [
              "hash"  =>   "8BF034BC-CF77-4BEB-87D4-E7CCDDDE8E31",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "09003000000000003000",
              "ten_chuong"  =>   "Chương III XÁC LẬP, THỰC HIỆN BIỆN PHÁP BẢO ĐẢM",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "9fbd9627-0235-4d28-92c7-e4b4c6e96577"
            ],
            [
              "hash"  =>   "DD61B111-CE7E-47E6-83D9-5DE696C91F23",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "09003000000000004000",
              "ten_chuong"  =>   "Chương IV XỬ LÝ TÀI SẢN BẢO ĐẢM",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "9fbd9627-0235-4d28-92c7-e4b4c6e96577"
            ],
            [
              "hash"  =>   "446EAB8B-7278-445C-A218-40ADEB1C00DF",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "09003000000000005000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "8545ecbc-f0ce-44aa-83d6-c43d056f63f2",
              "hash_de_muc"  =>   "9fbd9627-0235-4d28-92c7-e4b4c6e96577"
            ],
            [
              "hash"  =>   "EBFAF16A-C75C-45AA-A868-0F5D0A2F25D2",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "10001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "a6ee2d1a-2edc-4c30-bff5-81efbd765464",
              "hash_de_muc"  =>   "049522e0-fec2-4d52-916d-dd103ba69627"
            ],
            [
              "hash"  =>   "C8BFC372-E3D7-44CB-BD54-0CBEAE7FA08C",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "10001000000000002000",
              "ten_chuong"  =>   "Chương II CHÍNH SÁCH DÂN TỘC",
              "hash_chu_de"  =>   "a6ee2d1a-2edc-4c30-bff5-81efbd765464",
              "hash_de_muc"  =>   "049522e0-fec2-4d52-916d-dd103ba69627"
            ],
            [
              "hash"  =>   "3B00CC7F-1DB7-4627-B330-123BF8038F58",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "10001000000000003000",
              "ten_chuong"  =>   "Chương III QUẢN LÝ NHÀ NƯỚC VỀ CÔNG TÁC DÂN TỘC",
              "hash_chu_de"  =>   "a6ee2d1a-2edc-4c30-bff5-81efbd765464",
              "hash_de_muc"  =>   "049522e0-fec2-4d52-916d-dd103ba69627"
            ],
            [
              "hash"  =>   "90D96DC6-7DE5-42ED-844A-A220677ACF1F",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "10001000000000004000",
              "ten_chuong"  =>   "Chương IV TỔ CHỨC THỰC HIỆN",
              "hash_chu_de"  =>   "a6ee2d1a-2edc-4c30-bff5-81efbd765464",
              "hash_de_muc"  =>   "049522e0-fec2-4d52-916d-dd103ba69627"
            ],
            [
              "hash"  =>   "CD35FF07-826B-4CC8-92CA-EF6C698F0E91",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "10001000000000005000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "a6ee2d1a-2edc-4c30-bff5-81efbd765464",
              "hash_de_muc"  =>   "049522e0-fec2-4d52-916d-dd103ba69627"
            ],
            [
              "hash"  =>   "51B155F2-9ECB-457A-B170-15CBF224EFFE",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "11001000000000001000",
              "ten_chuong"  =>   "Chương I  QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "b64f0e6a-3020-4c4a-be45-a1e5370a0939",
              "hash_de_muc"  =>   "06936689-e896-45ee-9486-99b9370f31bc"
            ],
            [
              "hash"  =>   "4ABFA7C0-2C7B-419F-AB81-6BB344CFC8B1",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "11001000000000002000",
              "ten_chuong"  =>   "Chương II  QUYỀN VÀ TRÁCH NHIỆM CỦA NHÀ NƯỚC ĐỐI VỚI ĐẤT ĐAI",
              "hash_chu_de"  =>   "b64f0e6a-3020-4c4a-be45-a1e5370a0939",
              "hash_de_muc"  =>   "06936689-e896-45ee-9486-99b9370f31bc"
            ],
            [
              "hash"  =>   "F543A510-BD3F-4706-8DAC-CB64DE412E4A",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "11001000000000003000",
              "ten_chuong"  =>   "Chương III  ĐỊA GIỚI HÀNH CHÍNH VÀ ĐIỀU TRA CƠ BẢN VỀ ĐẤT ĐAI",
              "hash_chu_de"  =>   "b64f0e6a-3020-4c4a-be45-a1e5370a0939",
              "hash_de_muc"  =>   "06936689-e896-45ee-9486-99b9370f31bc"
            ],
            [
              "hash"  =>   "65AA5D4B-7938-4283-ACCA-4E2D1040E04C",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "11001000000000004000",
              "ten_chuong"  =>   "Chương IV QUY HOẠCH, KẾ HOẠCH SỬ DỤNG ĐẤT",
              "hash_chu_de"  =>   "b64f0e6a-3020-4c4a-be45-a1e5370a0939",
              "hash_de_muc"  =>   "06936689-e896-45ee-9486-99b9370f31bc"
            ],
            [
              "hash"  =>   "8A08D0C6-96A3-488F-8463-0951A3F1325E",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "11001000000000004500",
              "ten_chuong"  =>   "Chương V THÍ ĐIỂM MỘT SỐ CHÍNH SÁCH ĐỂ THÁO GỠ VƯỚNG MẮC, TỒN ĐỌNG TRONG QUẢN LÝ, SỬ DỤNG ĐẤT QUỐC PHÒNG, AN NINH KẾT HỢP VỚI HOẠT ĐỘNG LAO ĐỘNG SẢN XUẤT, XÂY DỰNG KINH TẾ",
              "hash_chu_de"  =>   "b64f0e6a-3020-4c4a-be45-a1e5370a0939",
              "hash_de_muc"  =>   "06936689-e896-45ee-9486-99b9370f31bc"
            ],
            [
              "hash"  =>   "8165FF5B-1489-49BF-AE53-0D5A7845E615",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "11001000000000005000",
              "ten_chuong"  =>   "Chương VI GIAO ĐẤT, CHO THUÊ ĐẤT, CHUYỂN MỤC ĐÍCH SỬ DỤNG ĐẤT",
              "hash_chu_de"  =>   "b64f0e6a-3020-4c4a-be45-a1e5370a0939",
              "hash_de_muc"  =>   "06936689-e896-45ee-9486-99b9370f31bc"
            ],
            [
              "hash"  =>   "9D9857AD-6827-4FD0-AAB7-4A12E7A8870D",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "11001000000000006000",
              "ten_chuong"  =>   "Chương VII THU HỒI ĐẤT, TRƯNG DỤNG ĐẤT, BỒI THƯỜNG, HỖ TRỢ, TÁI ĐỊNH CƯ",
              "hash_chu_de"  =>   "b64f0e6a-3020-4c4a-be45-a1e5370a0939",
              "hash_de_muc"  =>   "06936689-e896-45ee-9486-99b9370f31bc"
            ],
            [
              "hash"  =>   "D34695E6-F2BA-49DF-80FC-AEFE7EE6DA53",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "11001000000000007000",
              "ten_chuong"  =>   "Chương VIII ĐĂNG KÝ ĐẤT ĐAI, CẤP GIẤY CHỨNG NHẬN QUYỀN SỬ DỤNG ĐẤT, QUYỀN SỞ HỮU NHÀ Ở VÀ TÀI SẢN KHÁC GẮN LIỀN VỚI ĐẤT",
              "hash_chu_de"  =>   "b64f0e6a-3020-4c4a-be45-a1e5370a0939",
              "hash_de_muc"  =>   "06936689-e896-45ee-9486-99b9370f31bc"
            ],
            [
              "hash"  =>   "1A5D70DA-F872-48E6-8D5B-36A9673CB2E6",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "11001000000000008000",
              "ten_chuong"  =>   "Chương IX TÀI CHÍNH VỀ ĐẤT ĐAI, GIÁ ĐẤT VÀ ĐẤU GIÁ QUYỀN SỬ DỤNG ĐẤT",
              "hash_chu_de"  =>   "b64f0e6a-3020-4c4a-be45-a1e5370a0939",
              "hash_de_muc"  =>   "06936689-e896-45ee-9486-99b9370f31bc"
            ],
            [
              "hash"  =>   "EE7FCF4D-004B-49D2-B136-EE37CB4DEFBC",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "11001000000000009000",
              "ten_chuong"  =>   "Chương X HỆ THỐNG THÔNG TIN ĐẤT ĐAI VÀ CƠ SỞ DỮ LIỆU ĐẤT ĐAI",
              "hash_chu_de"  =>   "b64f0e6a-3020-4c4a-be45-a1e5370a0939",
              "hash_de_muc"  =>   "06936689-e896-45ee-9486-99b9370f31bc"
            ],
            [
              "hash"  =>   "6A24CE3E-78D3-4B05-BEBE-ABE069AE5455",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "11001000000000010000",
              "ten_chuong"  =>   "Chương XI CHẾ ĐỘ SỬ DỤNG CÁC LOẠI ĐẤT",
              "hash_chu_de"  =>   "b64f0e6a-3020-4c4a-be45-a1e5370a0939",
              "hash_de_muc"  =>   "06936689-e896-45ee-9486-99b9370f31bc"
            ],
            [
              "hash"  =>   "B3AD74C7-F235-4360-BC8C-A2C95BD8C431",
              "so_thu_tu"  =>   12,
              "MAPC"  =>   "11001000000000011000",
              "ten_chuong"  =>   "Chương XII QUYỀN VÀ NGHĨA VỤ CỦA NGƯỜI SỬ DỤNG ĐẤT",
              "hash_chu_de"  =>   "b64f0e6a-3020-4c4a-be45-a1e5370a0939",
              "hash_de_muc"  =>   "06936689-e896-45ee-9486-99b9370f31bc"
            ],
            [
              "hash"  =>   "05B88DAA-1D81-4980-9661-E0EA15AE5EB8",
              "so_thu_tu"  =>   13,
              "MAPC"  =>   "11001000000000012000",
              "ten_chuong"  =>   "Chương XIII  THỦ TỤC HÀNH CHÍNH VỀ ĐẤT ĐAI",
              "hash_chu_de"  =>   "b64f0e6a-3020-4c4a-be45-a1e5370a0939",
              "hash_de_muc"  =>   "06936689-e896-45ee-9486-99b9370f31bc"
            ],
            [
              "hash"  =>   "E6FE871F-CAAF-4396-8261-0B34A09F9C78",
              "so_thu_tu"  =>   14,
              "MAPC"  =>   "11001000000000013000",
              "ten_chuong"  =>   "Chương XIV  GIÁM SÁT, THANH TRA, GIẢI QUYẾT TRANH CHẤP, KHIẾU NẠI, TỐ CÁO VÀ XỬ LÝ VI PHẠM PHÁP LUẬT VỀ ĐẤT ĐAI",
              "hash_chu_de"  =>   "b64f0e6a-3020-4c4a-be45-a1e5370a0939",
              "hash_de_muc"  =>   "06936689-e896-45ee-9486-99b9370f31bc"
            ],
            [
              "hash"  =>   "7C059C72-B901-4008-8A82-7F13CBB52CAC",
              "so_thu_tu"  =>   15,
              "MAPC"  =>   "11001000000000014000",
              "ten_chuong"  =>   "Chương XV  ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "b64f0e6a-3020-4c4a-be45-a1e5370a0939",
              "hash_de_muc"  =>   "06936689-e896-45ee-9486-99b9370f31bc"
            ],
            [
              "hash"  =>   "C463B2AF-6114-48ED-9D1D-96002D8E58A3",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "12001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
              "hash_de_muc"  =>   "319387a3-090a-47a5-82f6-a9bacbe5d341"
            ],
            [
              "hash"  =>   "289E8F18-8110-40E2-9404-32AF4AD38CAA",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "12001000000000002000",
              "ten_chuong"  =>   "Chương II THÀNH LẬP DOANH NGHIỆP",
              "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
              "hash_de_muc"  =>   "319387a3-090a-47a5-82f6-a9bacbe5d341"
            ],
            [
              "hash"  =>   "8BBE6E6B-6F49-4BB2-9FA8-A744BE8DD5D7",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "12001000000000003000",
              "ten_chuong"  =>   "Chương III CÔNG TY TRÁCH NHIỆM HỮU HẠN",
              "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
              "hash_de_muc"  =>   "319387a3-090a-47a5-82f6-a9bacbe5d341"
            ],
            [
              "hash"  =>   "C69979FD-AAFD-4EC6-94B4-142A70AC05EA",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "12001000000000004000",
              "ten_chuong"  =>   "Chương IV DOANH NGHIỆP NHÀ NƯỚC",
              "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
              "hash_de_muc"  =>   "319387a3-090a-47a5-82f6-a9bacbe5d341"
            ],
            [
              "hash"  =>   "ABA4C792-D38F-4A6D-AD24-00AF60E70A38",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "12001000000000005000",
              "ten_chuong"  =>   "Chương V CÔNG TY CỔ PHẦN",
              "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
              "hash_de_muc"  =>   "319387a3-090a-47a5-82f6-a9bacbe5d341"
            ],
            [
              "hash"  =>   "E5D9E698-57E2-4B28-8326-7FA025BF23F1",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "12001000000000006000",
              "ten_chuong"  =>   "Chương VI CÔNG TY HỢP DANH",
              "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
              "hash_de_muc"  =>   "319387a3-090a-47a5-82f6-a9bacbe5d341"
            ],
            [
              "hash"  =>   "37CC3D45-93E6-41D4-9202-8671BD4D4B3F",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "12001000000000007000",
              "ten_chuong"  =>   "Chương VII DOANH NGHIỆP TƯ NHÂN",
              "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
              "hash_de_muc"  =>   "319387a3-090a-47a5-82f6-a9bacbe5d341"
            ],
            [
              "hash"  =>   "3539C6AD-02CF-4688-8B49-F70575F57215",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "12001000000000008000",
              "ten_chuong"  =>   "Chương VIII NHÓM CÔNG TY",
              "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
              "hash_de_muc"  =>   "319387a3-090a-47a5-82f6-a9bacbe5d341"
            ],
            [
              "hash"  =>   "80B9930A-4C80-42C3-8110-3625E6516E5D",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "12001000000000009000",
              "ten_chuong"  =>   "Chương IX TỔ CHỨC LẠI, GIẢI THỂ VÀ PHÁ SẢN DOANH NGHIỆP",
              "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
              "hash_de_muc"  =>   "319387a3-090a-47a5-82f6-a9bacbe5d341"
            ],
            [
              "hash"  =>   "CCD051B1-1F47-458C-9A02-12DDDC65BA16",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "12001000000000010000",
              "ten_chuong"  =>   "Chương X ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
              "hash_de_muc"  =>   "319387a3-090a-47a5-82f6-a9bacbe5d341"
            ],
            [
              "hash"  =>   "86B998F6-CC90-427B-BA66-6E7B6B1D9866",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "12004000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
              "hash_de_muc"  =>   "1dc74584-acb9-4572-95f5-3e46bb5524d2"
            ],
            [
              "hash"  =>   "B84109E9-8626-4065-9E03-876458163D85",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "12004000000000002000",
              "ten_chuong"  =>   "Chương II THÀNH VIÊN, HỢP TÁC XÃ THÀNH VIÊN",
              "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
              "hash_de_muc"  =>   "1dc74584-acb9-4572-95f5-3e46bb5524d2"
            ],
            [
              "hash"  =>   "5BE64F52-D8B2-4AC3-888F-6703DE101132",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "12004000000000003000",
              "ten_chuong"  =>   "Chương III THÀNH LẬP VÀ ĐĂNG KÝ HỢP TÁC XÃ, LIÊN HIỆP HỢP TÁC XÃ",
              "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
              "hash_de_muc"  =>   "1dc74584-acb9-4572-95f5-3e46bb5524d2"
            ],
            [
              "hash"  =>   "D32E8DF6-481F-42D1-AB7A-8E63D5180582",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "12004000000000004000",
              "ten_chuong"  =>   "Chương IV TỔ CHỨC QUẢN LÝ HỢP TÁC XÃ, LIÊN HIỆP HỢP TÁC XÃ",
              "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
              "hash_de_muc"  =>   "1dc74584-acb9-4572-95f5-3e46bb5524d2"
            ],
            [
              "hash"  =>   "4AC00839-819D-41C8-B759-4B2EFB160390",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "12004000000000005000",
              "ten_chuong"  =>   "Chương V TÀI SẢN, TÀI CHÍNH CỦA HỢP TÁC XÃ, LIÊN HIỆP HỢP TÁC XÃ",
              "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
              "hash_de_muc"  =>   "1dc74584-acb9-4572-95f5-3e46bb5524d2"
            ],
            [
              "hash"  =>   "B01F9D21-8785-4495-9A84-3B863FB8EED2",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "12004000000000006000",
              "ten_chuong"  =>   "Chương VI CHIA, TÁCH, HỢP NHẤT, SÁP NHẬP, GIẢI THỂ, PHÁ SẢN HỢP TÁC XÃ, LIÊN HIỆP HỢP TÁC XÃ",
              "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
              "hash_de_muc"  =>   "1dc74584-acb9-4572-95f5-3e46bb5524d2"
            ],
            [
              "hash"  =>   "6A22588B-2F87-447A-9EEE-3489F061EE68",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "12004000000000007000",
              "ten_chuong"  =>   "Chương VII TỔ CHỨC ĐẠI DIỆN CỦA HỢP TÁC XÃ, LIÊN HIỆP HỢP TÁC XÃ",
              "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
              "hash_de_muc"  =>   "1dc74584-acb9-4572-95f5-3e46bb5524d2"
            ],
            [
              "hash"  =>   "7CA26D9B-A5C7-4BB1-862F-3170EA151AAF",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "12004000000000008000",
              "ten_chuong"  =>   "Chương VIII QUẢN LÝ NHÀ NƯỚC ĐỐI VỚI HỢP TÁC XÃ, LIÊN HIỆP HỢP TÁC XÃ",
              "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
              "hash_de_muc"  =>   "1dc74584-acb9-4572-95f5-3e46bb5524d2"
            ],
            [
              "hash"  =>   "2F488395-4FD2-4106-A651-9D6951927054",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "12004000000000009000",
              "ten_chuong"  =>   "Chương IX ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
              "hash_de_muc"  =>   "1dc74584-acb9-4572-95f5-3e46bb5524d2"
            ],
            [
              "hash"  =>   "BC21A4C2-3FDF-4FD4-90CB-D7A08A15038A",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "12005000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
              "hash_de_muc"  =>   "8bf5b97d-4c67-45ea-92b7-d2e2c28bca6a"
            ],
            [
              "hash"  =>   "099B15A1-CCF8-44B3-8A63-4EA1F6C26118",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "12005000000000002000",
              "ten_chuong"  =>   "Chương II THÀNH VIÊN TỔ HỢP TÁC",
              "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
              "hash_de_muc"  =>   "8bf5b97d-4c67-45ea-92b7-d2e2c28bca6a"
            ],
            [
              "hash"  =>   "B1FDFF02-ADFD-4718-9684-731608F992F4",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "12005000000000003000",
              "ten_chuong"  =>   "Chương III THÀNH LẬP VÀ CHẤM DỨT HOẠT ĐỘNG TỔ HỢP TÁC",
              "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
              "hash_de_muc"  =>   "8bf5b97d-4c67-45ea-92b7-d2e2c28bca6a"
            ],
            [
              "hash"  =>   "AF4C3F14-13E2-4A0B-8F8B-BA15089DB37F",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "12005000000000004000",
              "ten_chuong"  =>   "Chương IV TỔ CHỨC VÀ ĐIỀU HÀNH TỔ HỢP TÁC",
              "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
              "hash_de_muc"  =>   "8bf5b97d-4c67-45ea-92b7-d2e2c28bca6a"
            ],
            [
              "hash"  =>   "AE8D4156-285D-48A9-A32C-00D860B41A58",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "12005000000000005000",
              "ten_chuong"  =>   "Chương V TỔ CHỨC THỰC HIỆN",
              "hash_chu_de"  =>   "8e485a16-50aa-4c80-9fbe-3b286287f8c1",
              "hash_de_muc"  =>   "8bf5b97d-4c67-45ea-92b7-d2e2c28bca6a"
            ],
            [
              "hash"  =>   "46957D0D-6F5E-44B4-A90F-315CADE3D441",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "13001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "0fb2411e-095b-4095-bbbe-fb8465ec4199",
              "hash_de_muc"  =>   "cd978e77-1991-4698-a663-ad2013c7a9f1"
            ],
            [
              "hash"  =>   "32903421-3343-4A2D-B5D2-291A9C8E040B",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "13001000000000002000",
              "ten_chuong"  =>   "Chương II HỆ THỐNG GIÁO DỤC QUỐC DÂN",
              "hash_chu_de"  =>   "0fb2411e-095b-4095-bbbe-fb8465ec4199",
              "hash_de_muc"  =>   "cd978e77-1991-4698-a663-ad2013c7a9f1"
            ],
            [
              "hash"  =>   "09813BBA-FFEE-4787-9A63-581360C39386",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "13001000000000003000",
              "ten_chuong"  =>   "Chương III NHÀ TRƯỜNG, TRƯỜNG CHUYÊN BIỆT VÀ CƠ SỞ GIÁO DỤC KHÁC",
              "hash_chu_de"  =>   "0fb2411e-095b-4095-bbbe-fb8465ec4199",
              "hash_de_muc"  =>   "cd978e77-1991-4698-a663-ad2013c7a9f1"
            ],
            [
              "hash"  =>   "AABF34F8-05CF-482A-B248-F685BA3A1DBA",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "13001000000000004000",
              "ten_chuong"  =>   "Chương IV NHÀ GIÁO",
              "hash_chu_de"  =>   "0fb2411e-095b-4095-bbbe-fb8465ec4199",
              "hash_de_muc"  =>   "cd978e77-1991-4698-a663-ad2013c7a9f1"
            ],
            [
              "hash"  =>   "1ADF5BD7-2882-4F68-B06F-3A4ACC85202E",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "13001000000000005000",
              "ten_chuong"  =>   "Chương V NGƯỜI HỌC",
              "hash_chu_de"  =>   "0fb2411e-095b-4095-bbbe-fb8465ec4199",
              "hash_de_muc"  =>   "cd978e77-1991-4698-a663-ad2013c7a9f1"
            ],
            [
              "hash"  =>   "68666DDD-9636-4DC6-9426-1A5187E2BEAC",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "13001000000000006000",
              "ten_chuong"  =>   "Chương VI TRÁCH NHIỆM CỦA NHÀ TRƯỜNG, GIA ĐÌNH VÀ XÃ HỘI TRONG GIÁO DỤC",
              "hash_chu_de"  =>   "0fb2411e-095b-4095-bbbe-fb8465ec4199",
              "hash_de_muc"  =>   "cd978e77-1991-4698-a663-ad2013c7a9f1"
            ],
            [
              "hash"  =>   "5BCB5671-8B7D-4349-87BC-D67CFF46FDA6",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "13001000000000007000",
              "ten_chuong"  =>   "Chương VII ĐẦU TƯ VÀ TÀI CHÍNH TRONG GIÁO DỤC",
              "hash_chu_de"  =>   "0fb2411e-095b-4095-bbbe-fb8465ec4199",
              "hash_de_muc"  =>   "cd978e77-1991-4698-a663-ad2013c7a9f1"
            ],
            [
              "hash"  =>   "3A5E94A9-6726-4663-B185-9F46AD762FDB",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "13001000000000008000",
              "ten_chuong"  =>   "Chương VIII QUẢN LÝ NHÀ NƯỚC VỀ GIÁO DỤC",
              "hash_chu_de"  =>   "0fb2411e-095b-4095-bbbe-fb8465ec4199",
              "hash_de_muc"  =>   "cd978e77-1991-4698-a663-ad2013c7a9f1"
            ],
            [
              "hash"  =>   "24BB2C36-DE41-4A52-9610-653BD0783B07",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "13001000000000009000",
              "ten_chuong"  =>   "Chương IX ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "0fb2411e-095b-4095-bbbe-fb8465ec4199",
              "hash_de_muc"  =>   "cd978e77-1991-4698-a663-ad2013c7a9f1"
            ],
            [
              "hash"  =>   "DDF56EB6-90E8-445E-8EE1-AC9C7AC717EB",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "13002000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "0fb2411e-095b-4095-bbbe-fb8465ec4199",
              "hash_de_muc"  =>   "cff88bae-70b7-4ad7-84ca-cdeecfaf89aa"
            ],
            [
              "hash"  =>   "D31E3B4E-6DE5-4E92-A3FE-CB52E3B16AA4",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "13002000000000002000",
              "ten_chuong"  =>   "Chương II TỔ CHỨC CƠ SỞ GIÁO DỤC ĐẠI HỌC",
              "hash_chu_de"  =>   "0fb2411e-095b-4095-bbbe-fb8465ec4199",
              "hash_de_muc"  =>   "cff88bae-70b7-4ad7-84ca-cdeecfaf89aa"
            ],
            [
              "hash"  =>   "2FF40F52-0402-441C-8731-FA47D4FAE139",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "13002000000000003000",
              "ten_chuong"  =>   "Chương III NHIỆM VỤ VÀ QUYỀN HẠN CỦA CƠ SỞ GIÁO DỤC ĐẠI HỌC",
              "hash_chu_de"  =>   "0fb2411e-095b-4095-bbbe-fb8465ec4199",
              "hash_de_muc"  =>   "cff88bae-70b7-4ad7-84ca-cdeecfaf89aa"
            ],
            [
              "hash"  =>   "CC11DE4F-0302-4237-9175-411FDD0C4A82",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "13002000000000004000",
              "ten_chuong"  =>   "Chương IV HOẠT ĐỘNG ĐÀO TẠO",
              "hash_chu_de"  =>   "0fb2411e-095b-4095-bbbe-fb8465ec4199",
              "hash_de_muc"  =>   "cff88bae-70b7-4ad7-84ca-cdeecfaf89aa"
            ],
            [
              "hash"  =>   "88158E44-CECE-4508-BBF3-AAB3B049157C",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "13002000000000005000",
              "ten_chuong"  =>   "Chương V HOẠT ĐỘNG KHOA HỌC VÀ CÔNG NGHỆ",
              "hash_chu_de"  =>   "0fb2411e-095b-4095-bbbe-fb8465ec4199",
              "hash_de_muc"  =>   "cff88bae-70b7-4ad7-84ca-cdeecfaf89aa"
            ],
            [
              "hash"  =>   "93865D79-E1EE-40B9-B8DD-A00FED921146",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "13002000000000006000",
              "ten_chuong"  =>   "Chương VI HOẠT ĐỘNG HỢP TÁC QUỐC TẾ",
              "hash_chu_de"  =>   "0fb2411e-095b-4095-bbbe-fb8465ec4199",
              "hash_de_muc"  =>   "cff88bae-70b7-4ad7-84ca-cdeecfaf89aa"
            ],
            [
              "hash"  =>   "27F8A943-870E-42C5-9BDF-A782CBCC87B2",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "13002000000000007000",
              "ten_chuong"  =>   "Chương VII BẢO ĐẢM CHẤT LƯỢNG VÀ KIỂM ĐỊNH CHẤT LƯỢNG GIÁO DỤC ĐẠI HỌC",
              "hash_chu_de"  =>   "0fb2411e-095b-4095-bbbe-fb8465ec4199",
              "hash_de_muc"  =>   "cff88bae-70b7-4ad7-84ca-cdeecfaf89aa"
            ],
            [
              "hash"  =>   "AD74B0B6-983B-4F7B-8AE6-E88587CAADFD",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "13002000000000008000",
              "ten_chuong"  =>   "Chương VIII GIẢNG VIÊN",
              "hash_chu_de"  =>   "0fb2411e-095b-4095-bbbe-fb8465ec4199",
              "hash_de_muc"  =>   "cff88bae-70b7-4ad7-84ca-cdeecfaf89aa"
            ],
            [
              "hash"  =>   "1893F342-DD84-4AC5-B434-0C99C8E4C86B",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "13002000000000009000",
              "ten_chuong"  =>   "Chương IX NGƯỜI HỌC",
              "hash_chu_de"  =>   "0fb2411e-095b-4095-bbbe-fb8465ec4199",
              "hash_de_muc"  =>   "cff88bae-70b7-4ad7-84ca-cdeecfaf89aa"
            ],
            [
              "hash"  =>   "1860D0A4-529E-4165-8D9A-6E3CBA01AF40",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "13002000000000010000",
              "ten_chuong"  =>   "Chương X TÀI CHÍNH, TÀI SẢN CỦA CƠ SỞ GIÁO DỤC ĐẠI HỌC",
              "hash_chu_de"  =>   "0fb2411e-095b-4095-bbbe-fb8465ec4199",
              "hash_de_muc"  =>   "cff88bae-70b7-4ad7-84ca-cdeecfaf89aa"
            ],
            [
              "hash"  =>   "4CCE1C5C-A25E-40F6-A931-0FBFD9D121F4",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "13002000000000011000",
              "ten_chuong"  =>   "Chương XI QUẢN LÝ NHÀ NƯỚC VỀ GIÁO DỤC ĐẠI HỌC",
              "hash_chu_de"  =>   "0fb2411e-095b-4095-bbbe-fb8465ec4199",
              "hash_de_muc"  =>   "cff88bae-70b7-4ad7-84ca-cdeecfaf89aa"
            ],
            [
              "hash"  =>   "0B11CB12-5A82-4F90-B221-8C2CA7972170",
              "so_thu_tu"  =>   12,
              "MAPC"  =>   "13002000000000011500",
              "ten_chuong"  =>   "Chương XII KINH PHÍ BẢO ĐẢM CHO CÔNG TÁC GIÁO DỤC ĐẠI HỌC",
              "hash_chu_de"  =>   "0fb2411e-095b-4095-bbbe-fb8465ec4199",
              "hash_de_muc"  =>   "cff88bae-70b7-4ad7-84ca-cdeecfaf89aa"
            ],
            [
              "hash"  =>   "C8336957-357A-47F3-B4DB-1EE187E4F0BF",
              "so_thu_tu"  =>   13,
              "MAPC"  =>   "13002000000000012000",
              "ten_chuong"  =>   "Chương XIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "0fb2411e-095b-4095-bbbe-fb8465ec4199",
              "hash_de_muc"  =>   "cff88bae-70b7-4ad7-84ca-cdeecfaf89aa"
            ],
            [
              "hash"  =>   "A7511208-745C-4772-96A5-5BEBB80F4C4F",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "14001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "bac21193-4c90-4e8c-a274-ffce8648c505"
            ],
            [
              "hash"  =>   "548AFDD9-D867-4484-8FC2-9EB93E5969E5",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "14001000000000002000",
              "ten_chuong"  =>   "Chương II KẾT CẤU HẠ TẦNG ĐƯỜNG SẮT",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "bac21193-4c90-4e8c-a274-ffce8648c505"
            ],
            [
              "hash"  =>   "2B799A60-B27A-43CA-84D0-9C97FAC9BE6F",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "14001000000000003000",
              "ten_chuong"  =>   "Chương III PHÁT TRIỂN CÔNG NGHIỆP ĐƯỜNG SẮT, PHƯƠNG TIỆN GIAO THÔNG ĐƯỜNG SẮT",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "bac21193-4c90-4e8c-a274-ffce8648c505"
            ],
            [
              "hash"  =>   "B473C427-CCBC-4D20-BA48-B50F756DD819",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "14001000000000004000",
              "ten_chuong"  =>   "Chương IV NHÂN VIÊN ĐƯỜNG SẮT TRỰC TIẾP PHỤC VỤ CHẠY TÀU",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "bac21193-4c90-4e8c-a274-ffce8648c505"
            ],
            [
              "hash"  =>   "E4828905-48AF-45E5-903A-E01E6BD8AADC",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "14001000000000005000",
              "ten_chuong"  =>   "Chương V TÍN HIỆU, QUY TẮC GIAO THÔNG VÀ BẢO ĐẢM TRẬT TỰ, AN TOÀN GIAO THÔNG VẬN TẢI ĐƯỜNG SẮT",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "bac21193-4c90-4e8c-a274-ffce8648c505"
            ],
            [
              "hash"  =>   "20C59FC5-28F1-4AFC-AF09-A3B4970BE65E",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "14001000000000006000",
              "ten_chuong"  =>   "Chương VI KINH DOANH ĐƯỜNG SẮT",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "bac21193-4c90-4e8c-a274-ffce8648c505"
            ],
            [
              "hash"  =>   "E0A6CF4C-539B-452B-B485-A6999B458FAA",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "14001000000000007000",
              "ten_chuong"  =>   "Chương VII ĐƯỜNG SẮT ĐÔ THỊ",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "bac21193-4c90-4e8c-a274-ffce8648c505"
            ],
            [
              "hash"  =>   "D84DBDA4-35BA-470B-A29B-89B4789062B7",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "14001000000000008000",
              "ten_chuong"  =>   "Chương VIII ĐƯỜNG SẮT TỐC ĐỘ CAO",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "bac21193-4c90-4e8c-a274-ffce8648c505"
            ],
            [
              "hash"  =>   "D2CAFD4F-9115-45E0-9444-4A937F15019C",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "14001000000000009000",
              "ten_chuong"  =>   "Chương IX QUẢN LÝ NHÀ NƯỚC VỀ HOẠT ĐỘNG ĐƯỜNG SẮT",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "bac21193-4c90-4e8c-a274-ffce8648c505"
            ],
            [
              "hash"  =>   "886AE9E6-61C4-45C8-8FAF-3BD4D2C1EB60",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "14001000000000010000",
              "ten_chuong"  =>   "Chương X ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "bac21193-4c90-4e8c-a274-ffce8648c505"
            ],
            [
              "hash"  =>   "9E60BCD7-5CE5-495A-B152-B1C635848485",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "14002000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "a2005eb5-2c8c-4ca0-910d-8d73efabab5a"
            ],
            [
              "hash"  =>   "300CF457-9AB5-4FF8-86FC-62387594135F",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "14002000000000002000",
              "ten_chuong"  =>   "Chương II QUY TẮC GIAO THÔNG ĐƯỜNG BỘ",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "a2005eb5-2c8c-4ca0-910d-8d73efabab5a"
            ],
            [
              "hash"  =>   "C0CEC85B-E470-4B4A-8735-7ABA77E3E21A",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "14002000000000003000",
              "ten_chuong"  =>   "Chương III KẾT CẤU HẠ TẦNG GIAO THÔNG ĐƯỜNG BỘ",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "a2005eb5-2c8c-4ca0-910d-8d73efabab5a"
            ],
            [
              "hash"  =>   "83268775-6EE2-4197-9EA8-D68FD1BF63FA",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "14002000000000004000",
              "ten_chuong"  =>   "Chương IV PHƯƠNG TIỆN THAM GIA GIAO THÔNG ĐƯỜNG BỘ",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "a2005eb5-2c8c-4ca0-910d-8d73efabab5a"
            ],
            [
              "hash"  =>   "97AB6437-410C-437E-859C-AB9AE3E8EA06",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "14002000000000005000",
              "ten_chuong"  =>   "Chương V NGƯỜI ĐIỀU KHIỂN PHƯƠNG TIỆN THAM GIA GIAO THÔNG ĐƯỜNG BỘ",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "a2005eb5-2c8c-4ca0-910d-8d73efabab5a"
            ],
            [
              "hash"  =>   "D1F7FCD1-DB99-41E6-B29E-E509AA03F3D6",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "14002000000000006000",
              "ten_chuong"  =>   "Chương VI VẬN TẢI ĐƯỜNG BỘ",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "a2005eb5-2c8c-4ca0-910d-8d73efabab5a"
            ],
            [
              "hash"  =>   "CD6FEA47-81B5-4E7D-895F-E938E3FA1DC6",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "14002000000000007000",
              "ten_chuong"  =>   "Chương VII QUẢN LÝ NHÀ NƯỚC VỀ GIAO THÔNG ĐƯỜNG BỘ",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "a2005eb5-2c8c-4ca0-910d-8d73efabab5a"
            ],
            [
              "hash"  =>   "79873837-AB79-4F1D-82E5-3769ACE70E9F",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "14002000000000008000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "a2005eb5-2c8c-4ca0-910d-8d73efabab5a"
            ],
            [
              "hash"  =>   "3A54FE86-CDE0-4D0A-B4A6-4ED3452A4CEC",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "14003000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "024d0bdb-4439-40e4-90ae-f3525f58351b"
            ],
            [
              "hash"  =>   "CEC23346-AC8C-429B-A38F-BD5BEFD5A015",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "14003000000000002000",
              "ten_chuong"  =>   "Chương II QUY HOẠCH, XÂY DỰNG VÀ BẢO VỆ KẾT CẤU HẠ TẦNG ĐƯỜNG THỦY NỘI ĐỊA",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "024d0bdb-4439-40e4-90ae-f3525f58351b"
            ],
            [
              "hash"  =>   "ADDC2E9E-EC43-4C28-B1FA-93986E3F3111",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "14003000000000003000",
              "ten_chuong"  =>   "Chương III PHƯƠNG TIỆN THỦY NỘI ĐỊA",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "024d0bdb-4439-40e4-90ae-f3525f58351b"
            ],
            [
              "hash"  =>   "300486F8-9BC2-4A29-90A2-5025C725FFAB",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "14003000000000004000",
              "ten_chuong"  =>   "Chương IV THUYỀN VIÊN VÀ NGƯỜI LÁI PHƯƠNG TIỆN",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "024d0bdb-4439-40e4-90ae-f3525f58351b"
            ],
            [
              "hash"  =>   "D07D767A-A61A-4C27-944D-1A74957851A9",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "14003000000000005000",
              "ten_chuong"  =>   "Chương V QUY TẮC GIAO THÔNG VÀ TÍN HIỆU CỦA PHƯƠNG TIỆN",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "024d0bdb-4439-40e4-90ae-f3525f58351b"
            ],
            [
              "hash"  =>   "3CB7085F-17E3-4574-86C5-B0C8DD53F790",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "14003000000000006000",
              "ten_chuong"  =>   "Chương VI HOẠT ĐỘNG CỦA CẢNG, BẾN THỦY NỘI ĐỊA, CẢNG VỤ VÀ HOA TIÊU ĐƯỜNG THỦY NỘI ĐỊA",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "024d0bdb-4439-40e4-90ae-f3525f58351b"
            ],
            [
              "hash"  =>   "CACC392B-0DB0-4FE8-BE82-09C7947E4580",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "14003000000000007000",
              "ten_chuong"  =>   "Chương VII VẬN TẢI ĐƯỜNG THỦY NỘI ĐỊA",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "024d0bdb-4439-40e4-90ae-f3525f58351b"
            ],
            [
              "hash"  =>   "B3339741-4000-4FA5-AEC2-B1FB85915C48",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "14003000000000008000",
              "ten_chuong"  =>   "Chương VIII QUẢN LÝ NHÀ NƯỚC VỀ GIAO THÔNG ĐƯỜNG THỦY NỘI ĐỊA",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "024d0bdb-4439-40e4-90ae-f3525f58351b"
            ],
            [
              "hash"  =>   "C4A7C3BC-9F8B-4CE6-BDA5-D410EDC8A767",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "14003000000000009000",
              "ten_chuong"  =>   "Chương IX ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "024d0bdb-4439-40e4-90ae-f3525f58351b"
            ],
            [
              "hash"  =>   "80F723FF-C4E8-4CE7-9D1B-83E85D42ABF7",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "14004000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "c9269682-f64e-4a54-a352-98e10cadaf26"
            ],
            [
              "hash"  =>   "A2AE281C-0140-41B8-AC3A-BEEBA9FED493",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "14004000000000002000",
              "ten_chuong"  =>   "Chương II TÀU BIỂN",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "c9269682-f64e-4a54-a352-98e10cadaf26"
            ],
            [
              "hash"  =>   "71FFB39F-C940-45D1-87AD-A02A99B5B71B",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "14004000000000003000",
              "ten_chuong"  =>   "Chương III THUYỀN BỘ VÀ THUYỀN VIÊN",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "c9269682-f64e-4a54-a352-98e10cadaf26"
            ],
            [
              "hash"  =>   "57AF9043-CC34-4D5C-81CA-10C0A0A98191",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "14004000000000004000",
              "ten_chuong"  =>   "Chương IV CẢNG BIỂN",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "c9269682-f64e-4a54-a352-98e10cadaf26"
            ],
            [
              "hash"  =>   "A0D16A0A-F33A-40C6-BD43-F16E8CEC9980",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "14004000000000005000",
              "ten_chuong"  =>   "Chương V AN TOÀN HÀNG HẢI, AN NINH HÀNG HẢI, LAO ĐỘNG HÀNG HẢI VÀ BẢO VỆ MÔI TRƯỜNG",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "c9269682-f64e-4a54-a352-98e10cadaf26"
            ],
            [
              "hash"  =>   "8E08A386-BA58-4B51-820C-5F8454730E16",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "14004000000000006000",
              "ten_chuong"  =>   "Chương VI BẮT GIỮ TÀU BIỂN",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "c9269682-f64e-4a54-a352-98e10cadaf26"
            ],
            [
              "hash"  =>   "DA628381-0AC7-4682-94FE-D24D3332BE72",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "14004000000000007000",
              "ten_chuong"  =>   "Chương VII HỢP ĐỒNG VẬN CHUYỂN HÀNG HÓA BẰNG ĐƯỜNG BIỂN",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "c9269682-f64e-4a54-a352-98e10cadaf26"
            ],
            [
              "hash"  =>   "399BC454-9FBD-45BF-AC40-1ADDAC120F40",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "14004000000000008000",
              "ten_chuong"  =>   "Chương VIII HỢP ĐỒNG VẬN CHUYỂN HÀNH KHÁCH VÀ HÀNH LÝ BẰNG ĐƯỜNG BIỂN",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "c9269682-f64e-4a54-a352-98e10cadaf26"
            ],
            [
              "hash"  =>   "E0B2E5C3-9F95-4784-9F59-CC495C3E249A",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "14004000000000009000",
              "ten_chuong"  =>   "Chương IX HỢP ĐỒNG THUÊ TÀU",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "c9269682-f64e-4a54-a352-98e10cadaf26"
            ],
            [
              "hash"  =>   "8A0B585B-9DCC-4C0B-958E-AD9B6B6811E0",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "14004000000000010000",
              "ten_chuong"  =>   "Chương X ĐẠI LÝ TÀU BIỂN VÀ MÔI GIỚI HÀNG HẢI",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "c9269682-f64e-4a54-a352-98e10cadaf26"
            ],
            [
              "hash"  =>   "156B5F99-C3CC-47E5-95B1-9EEEE2CA937E",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "14004000000000011000",
              "ten_chuong"  =>   "Chương XI HOA TIÊU HÀNG HẢI",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "c9269682-f64e-4a54-a352-98e10cadaf26"
            ],
            [
              "hash"  =>   "8A94E6D1-4801-406E-987F-4B21065144C8",
              "so_thu_tu"  =>   12,
              "MAPC"  =>   "14004000000000012000",
              "ten_chuong"  =>   "Chương XII LAI DẮT TÀU BIỂN",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "c9269682-f64e-4a54-a352-98e10cadaf26"
            ],
            [
              "hash"  =>   "F7EC29BA-AEC4-4EDD-BDB0-C460CFAB56A2",
              "so_thu_tu"  =>   13,
              "MAPC"  =>   "14004000000000013000",
              "ten_chuong"  =>   "Chương XIII CỨU HỘ HÀNG HẢI",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "c9269682-f64e-4a54-a352-98e10cadaf26"
            ],
            [
              "hash"  =>   "F4BA5C08-87D3-4A07-BF7A-16E05C90E83B",
              "so_thu_tu"  =>   14,
              "MAPC"  =>   "14004000000000014000",
              "ten_chuong"  =>   "Chương XIV TRỤC VỚT TÀI SẢN CHÌM ĐẮM",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "c9269682-f64e-4a54-a352-98e10cadaf26"
            ],
            [
              "hash"  =>   "AAE7464C-AC28-4659-8FF0-FE5526865711",
              "so_thu_tu"  =>   15,
              "MAPC"  =>   "14004000000000015000",
              "ten_chuong"  =>   "Chương XV TAI NẠN ĐÂM VA",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "c9269682-f64e-4a54-a352-98e10cadaf26"
            ],
            [
              "hash"  =>   "54F1C6F0-8906-4149-8EE7-DB0BF2CF022B",
              "so_thu_tu"  =>   16,
              "MAPC"  =>   "14004000000000016000",
              "ten_chuong"  =>   "Chương XVI TỔN THẤT CHUNG",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "c9269682-f64e-4a54-a352-98e10cadaf26"
            ],
            [
              "hash"  =>   "3CD1B507-915D-49CA-AB56-5D10E7BF0CA3",
              "so_thu_tu"  =>   17,
              "MAPC"  =>   "14004000000000017000",
              "ten_chuong"  =>   "Chương XVII GIỚI HẠN TRÁCH NHIỆM DÂN SỰ ĐỐI VỚI CÁC KHIẾU NẠI HÀNG HẢI",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "c9269682-f64e-4a54-a352-98e10cadaf26"
            ],
            [
              "hash"  =>   "CE6954E5-E811-4628-BF96-CF8824D0F719",
              "so_thu_tu"  =>   18,
              "MAPC"  =>   "14004000000000018000",
              "ten_chuong"  =>   "Chương XVIII HỢP ĐỒNG BẢO HIỂM HÀNG HẢI",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "c9269682-f64e-4a54-a352-98e10cadaf26"
            ],
            [
              "hash"  =>   "6078F454-E1EA-4457-8307-BCE3B38E1AAA",
              "so_thu_tu"  =>   19,
              "MAPC"  =>   "14004000000000019000",
              "ten_chuong"  =>   "Chương XIX GIẢI QUYẾT TRANH CHẤP HÀNG HẢI",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "c9269682-f64e-4a54-a352-98e10cadaf26"
            ],
            [
              "hash"  =>   "D16EED1E-621E-4883-A6C0-68CC366D3919",
              "so_thu_tu"  =>   20,
              "MAPC"  =>   "14004000000000020000",
              "ten_chuong"  =>   "Chương XX ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "c9269682-f64e-4a54-a352-98e10cadaf26"
            ],
            [
              "hash"  =>   "B8452E94-3A71-4CE7-A956-1AB0FC719C90",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "14005000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "5679c4d3-5ccc-4bd8-8ed9-e849a866f444"
            ],
            [
              "hash"  =>   "16DC2702-C017-431A-80B9-B6F4B4E43541",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "14005000000000002000",
              "ten_chuong"  =>   "Chương II TÀU BAY",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "5679c4d3-5ccc-4bd8-8ed9-e849a866f444"
            ],
            [
              "hash"  =>   "2028C90F-38AD-4350-AD3B-5FE256B7143E",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "14005000000000003000",
              "ten_chuong"  =>   "Chương III CẢNG HÀNG KHÔNG, SÂN BAY",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "5679c4d3-5ccc-4bd8-8ed9-e849a866f444"
            ],
            [
              "hash"  =>   "06EA55A6-5AE3-405F-90C8-00D2CB982EC3",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "14005000000000004000",
              "ten_chuong"  =>   "Chương IV NHÂN VIÊN HÀNG KHÔNG",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "5679c4d3-5ccc-4bd8-8ed9-e849a866f444"
            ],
            [
              "hash"  =>   "F66F3947-2C92-4CB6-83F5-714495603EAE",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "14005000000000005000",
              "ten_chuong"  =>   "Chương V HOẠT ĐỘNG BAY",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "5679c4d3-5ccc-4bd8-8ed9-e849a866f444"
            ],
            [
              "hash"  =>   "1868298C-668D-4338-BBF2-74ACDA4EC4C1",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "14005000000000006000",
              "ten_chuong"  =>   "Chương VI VẬN CHUYỂN HÀNG KHÔNG",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "5679c4d3-5ccc-4bd8-8ed9-e849a866f444"
            ],
            [
              "hash"  =>   "7C05CE76-8907-434B-B47D-7F53A429900B",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "14005000000000007000",
              "ten_chuong"  =>   "Chương VII TRÁCH NHIỆM DÂN SỰ",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "5679c4d3-5ccc-4bd8-8ed9-e849a866f444"
            ],
            [
              "hash"  =>   "12EA23E4-FEB9-4C32-B6AB-BA545B4734FE",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "14005000000000008000",
              "ten_chuong"  =>   "Chương VIII AN NINH HÀNG KHÔNG",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "5679c4d3-5ccc-4bd8-8ed9-e849a866f444"
            ],
            [
              "hash"  =>   "17666A07-7C76-4853-9C7D-344D943D08DC",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "14005000000000009000",
              "ten_chuong"  =>   "Chương IX HOẠT ĐỘNG HÀNG KHÔNG CHUNG",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "5679c4d3-5ccc-4bd8-8ed9-e849a866f444"
            ],
            [
              "hash"  =>   "C9123243-4DA0-47B9-9F4D-14EE964DD134",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "14005000000000010000",
              "ten_chuong"  =>   "Chương X ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "b82ee309-2527-4a7d-8d4d-fccdfabbc86c",
              "hash_de_muc"  =>   "5679c4d3-5ccc-4bd8-8ed9-e849a866f444"
            ],
            [
              "hash"  =>   "4EC9DBD2-6C43-49D6-B369-9E67A42DE60C",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "15001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "0d5b64ca-267f-4cb9-9400-63448387b0d6"
            ],
            [
              "hash"  =>   "93CC78EC-3551-4901-AB11-F8698FDBDEC4",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "15001000000000002000",
              "ten_chuong"  =>   "Chương II CẤP BẢN SAO TỪ SỔ GỐC, CHỨNG THỰC BẢN SAO TỪ BẢN CHÍNH, CHỨNG THỰC CHỮ KÝ",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "0d5b64ca-267f-4cb9-9400-63448387b0d6"
            ],
            [
              "hash"  =>   "B1F620A3-C737-4177-9031-BCE7881AD557",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "15001000000000003000",
              "ten_chuong"  =>   "Chương III CHỨNG THỰC HỢP ĐỒNG, GIAO DỊCH",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "0d5b64ca-267f-4cb9-9400-63448387b0d6"
            ],
            [
              "hash"  =>   "8F559AD5-5966-4090-AAE0-E12A419AAEB7",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "15001000000000004000",
              "ten_chuong"  =>   "Chương IV QUẢN LÝ NHÀ NƯỚC VỀ CHỨNG THỰC",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "0d5b64ca-267f-4cb9-9400-63448387b0d6"
            ],
            [
              "hash"  =>   "9C88970B-8503-4A87-9123-C3835F5F431A",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "15001000000000005000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "0d5b64ca-267f-4cb9-9400-63448387b0d6"
            ],
            [
              "hash"  =>   "7C87FCC3-311F-428B-8329-00A8F284DA4B",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "15003000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "d0a39796-1eb4-4862-972b-87d5ad87ae2c"
            ],
            [
              "hash"  =>   "01C73E60-5A7B-4E09-9719-14ABD3AB946F",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "15003000000000002000",
              "ten_chuong"  =>   "Chương II ĐĂNG KÝ HỘ TỊCH TẠI UỶ BAN NHÂN DÂN CẤP XÃ",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "d0a39796-1eb4-4862-972b-87d5ad87ae2c"
            ],
            [
              "hash"  =>   "7F1575CA-3CAD-431B-B91F-4B3766B89034",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "15003000000000003000",
              "ten_chuong"  =>   "Chương III ĐĂNG KÝ HỘ TỊCH TẠI ỦY BAN NHÂN DÂN CẤP HUYỆN",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "d0a39796-1eb4-4862-972b-87d5ad87ae2c"
            ],
            [
              "hash"  =>   "CA6E1C23-774A-41C7-9BDB-FDC437DF1533",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "15003000000000004000",
              "ten_chuong"  =>   "Chương IV ĐĂNG KÝ HỘ TỊCH TẠI CƠ QUAN ĐẠI DIỆN",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "d0a39796-1eb4-4862-972b-87d5ad87ae2c"
            ],
            [
              "hash"  =>   "F9D16185-BE7C-4B7D-A5CC-E92A7389C301",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "15003000000000005000",
              "ten_chuong"  =>   "Chương V CƠ SỞ DỮ LIỆU HỘ TỊCH, CẤP TRÍCH LỤC HỘ TỊCH",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "d0a39796-1eb4-4862-972b-87d5ad87ae2c"
            ],
            [
              "hash"  =>   "2F9C32CD-AFBC-4CD5-8A52-BA39B98FB467",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "15003000000000006000",
              "ten_chuong"  =>   "Chương VI TRÁCH NHIỆM QUẢN LÝ NHÀ NƯỚC VỀ HỘ TỊCH, CÔNG CHỨC LÀM CÔNG TÁC HỘ TỊCH",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "d0a39796-1eb4-4862-972b-87d5ad87ae2c"
            ],
            [
              "hash"  =>   "2BD97753-0453-4D1E-B26D-F292D2CCD16E",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "15003000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "d0a39796-1eb4-4862-972b-87d5ad87ae2c"
            ],
            [
              "hash"  =>   "55494C9D-2572-4D3D-B9AE-A4E07797637F",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "15004000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "a2284f91-14b5-47f5-b05d-51bf84d8a561"
            ],
            [
              "hash"  =>   "D205000E-AED6-4314-8D2B-F557085B8B81",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "15004000000000002000",
              "ten_chuong"  =>   "Chương II TỔ CHỨC, QUẢN LÝ CƠ SỞ DỮ LIỆU LÝ LỊCH TƯ PHÁP",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "a2284f91-14b5-47f5-b05d-51bf84d8a561"
            ],
            [
              "hash"  =>   "B30F9918-B5FB-4756-8866-1BE053E26EF1",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "15004000000000003000",
              "ten_chuong"  =>   "Chương III CUNG CẤP, TIẾP NHẬN, CẬP NHẬT, XỬ LÝ THÔNG TIN LÝ LỊCH TƯ PHÁP VÀ LẬP LÝ LỊCH TƯ PHÁP",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "a2284f91-14b5-47f5-b05d-51bf84d8a561"
            ],
            [
              "hash"  =>   "CC169E00-CAED-4EE4-AF75-6B52E0FDAAD9",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "15004000000000004000",
              "ten_chuong"  =>   "Chương IV CẤP PHIẾU LÝ LỊCH TƯ PHÁP",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "a2284f91-14b5-47f5-b05d-51bf84d8a561"
            ],
            [
              "hash"  =>   "3B5ED826-7895-4129-8DA4-64AE6B59E0B1",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "15004000000000005000",
              "ten_chuong"  =>   "Chương V XỬ LÝ VI PHẠM VÀ GIẢI QUYẾT KHIẾU NẠI,  TỐ CÁOVỀ LÝ LỊCH TƯ PHÁP",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "a2284f91-14b5-47f5-b05d-51bf84d8a561"
            ],
            [
              "hash"  =>   "F746EA8C-0E44-4A76-A4F6-9453108EA8AE",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "15004000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "a2284f91-14b5-47f5-b05d-51bf84d8a561"
            ],
            [
              "hash"  =>   "888BD265-9BCE-4F89-BCD8-DAA8F2E513D8",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "15005000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "8fcdd797-43ee-4c72-924d-119a7395ed59"
            ],
            [
              "hash"  =>   "7C8288D8-78E8-4F5C-8480-021C833553E1",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "15005000000000002000",
              "ten_chuong"  =>   "Chương II NUÔI CON NUÔI TRONG NƯỚC",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "8fcdd797-43ee-4c72-924d-119a7395ed59"
            ],
            [
              "hash"  =>   "37EDCB65-0AFB-4284-8DDB-C392221A2630",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "15005000000000003000",
              "ten_chuong"  =>   "Chương III NUÔI CON NUÔI CÓ YẾU TỐ NƯỚC NGOÀI",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "8fcdd797-43ee-4c72-924d-119a7395ed59"
            ],
            [
              "hash"  =>   "36A2D139-DF87-474D-9138-A6FCF6627E04",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "15005000000000004000",
              "ten_chuong"  =>   "Chương IV TRÁCH NHIỆM CỦA CÁC CƠ QUAN NHÀ NƯỚC VỀ NUÔI CON NUÔI",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "8fcdd797-43ee-4c72-924d-119a7395ed59"
            ],
            [
              "hash"  =>   "28598A93-C6DE-4E54-9F77-B1DEA7CB5636",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "15005000000000005000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "8fcdd797-43ee-4c72-924d-119a7395ed59"
            ],
            [
              "hash"  =>   "066656E5-9AA1-4FFE-AE84-F80FB465B298",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "15006000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "ff9bd05c-2e15-4b95-9b1c-26dbd5684060"
            ],
            [
              "hash"  =>   "97A96A47-16B0-4B4B-BA00-5906FAD77086",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "15006000000000002000",
              "ten_chuong"  =>   "Chương II CÓ QUỐC TỊCH VIỆT NAM",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "ff9bd05c-2e15-4b95-9b1c-26dbd5684060"
            ],
            [
              "hash"  =>   "B58C56C1-D82C-46AC-A353-98AAF5FA5684",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "15006000000000003000",
              "ten_chuong"  =>   "Chương III MẤT QUỐC TỊCH VIỆT NAM",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "ff9bd05c-2e15-4b95-9b1c-26dbd5684060"
            ],
            [
              "hash"  =>   "9C33FAF5-4295-4D76-BCA7-A9B4DF461769",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "15006000000000004000",
              "ten_chuong"  =>   "Chương IV THAY ĐỔI QUỐC TỊCH CỦA NGƯỜI CHƯA THÀNH NIÊN VÀ CỦA CON NUÔI",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "ff9bd05c-2e15-4b95-9b1c-26dbd5684060"
            ],
            [
              "hash"  =>   "B5B8A5F8-9703-4502-9161-73E87C6DB046",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "15006000000000005000",
              "ten_chuong"  =>   "Chương V TRÁCH NHIỆM CỦA CÁC CƠ QUAN NHÀ NƯỚC VỀ QUỐC TỊCH",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "ff9bd05c-2e15-4b95-9b1c-26dbd5684060"
            ],
            [
              "hash"  =>   "6A847DA6-9B79-4AC5-ADD4-196DEB4493EB",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "15006000000000005500",
              "ten_chuong"  =>   "Chương VI QUY ĐỊNH VỀ ĐIỀU KIỆN, TRÌNH TỰ, THỦ TỤC NHẬP QUỐC TỊCH VIỆT NAM VÀ ĐĂNG KÝ KHAI SINH, KẾT HÔN CHO NGƯỜI DI CƯ TỰ DO TẠI CÁC HUYỆN CỦA VIỆT NAM TIẾP GIÁP VỚI LÀO",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "ff9bd05c-2e15-4b95-9b1c-26dbd5684060"
            ],
            [
              "hash"  =>   "27C1E198-9A69-44C8-902B-603B7E45C3CD",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "15006000000000006000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "a5b5fa2d-056c-48c4-b6fc-c782359511ff",
              "hash_de_muc"  =>   "ff9bd05c-2e15-4b95-9b1c-26dbd5684060"
            ],
            [
              "hash"  =>   "C790AA2E-BCCD-462F-AE2B-7193698807F8",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "1600100000000000100000100000000000000000",
              "ten_chuong"  =>   "Chương I ĐIỀU KHOẢN CƠ BẢN",
              "hash_chu_de"  =>   "0672ce80-caa2-4d12-a474-6d86349c9dab",
              "hash_de_muc"  =>   "bcc2a59a-ccbe-4739-afd4-f45811a15122"
            ],
            [
              "hash"  =>   "861E0E68-4658-4DC1-ACED-7C029FAC3D71",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "1600100000000000100000200000000000000000",
              "ten_chuong"  =>   "Chương II HIỆU LỰC CỦA BỘ LUẬT HÌNH SỰ",
              "hash_chu_de"  =>   "0672ce80-caa2-4d12-a474-6d86349c9dab",
              "hash_de_muc"  =>   "bcc2a59a-ccbe-4739-afd4-f45811a15122"
            ],
            [
              "hash"  =>   "AEB5E3A2-7E89-4F34-8AC7-43B2946F4F07",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "1600100000000000100000300000000000000000",
              "ten_chuong"  =>   "Chương III TỘI PHẠM",
              "hash_chu_de"  =>   "0672ce80-caa2-4d12-a474-6d86349c9dab",
              "hash_de_muc"  =>   "bcc2a59a-ccbe-4739-afd4-f45811a15122"
            ],
            [
              "hash"  =>   "790D2039-2B81-4511-A8E1-22859F913FEC",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "1600100000000000100000400000000000000000",
              "ten_chuong"  =>   "Chương IV NHỮNG TRƯỜNG HỢP LOẠI TRỪ TRÁCH NHIỆM HÌNH SỰ",
              "hash_chu_de"  =>   "0672ce80-caa2-4d12-a474-6d86349c9dab",
              "hash_de_muc"  =>   "bcc2a59a-ccbe-4739-afd4-f45811a15122"
            ],
            [
              "hash"  =>   "114E334B-FE98-45EE-A0F9-43AD4F765CD3",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "1600100000000000100000500000000000000000",
              "ten_chuong"  =>   "Chương V THỜI HIỆU TRUY CỨU TRÁCH NHIỆM HÌNH SỰ, MIỄN TRÁCH NHIỆM HÌNH SỰ",
              "hash_chu_de"  =>   "0672ce80-caa2-4d12-a474-6d86349c9dab",
              "hash_de_muc"  =>   "bcc2a59a-ccbe-4739-afd4-f45811a15122"
            ],
            [
              "hash"  =>   "EE0ACA87-CA88-42A3-9EC7-10474999A5F3",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "1600100000000000100000600000000000000000",
              "ten_chuong"  =>   "Chương VI HÌNH PHẠT",
              "hash_chu_de"  =>   "0672ce80-caa2-4d12-a474-6d86349c9dab",
              "hash_de_muc"  =>   "bcc2a59a-ccbe-4739-afd4-f45811a15122"
            ],
            [
              "hash"  =>   "40A25C9B-7C85-4714-BEB2-A49696C8C33E",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "1600100000000000100000700000000000000000",
              "ten_chuong"  =>   "Chương VII CÁC BIỆN PHÁP TƯ PHÁP",
              "hash_chu_de"  =>   "0672ce80-caa2-4d12-a474-6d86349c9dab",
              "hash_de_muc"  =>   "bcc2a59a-ccbe-4739-afd4-f45811a15122"
            ],
            [
              "hash"  =>   "6178ED33-D787-42C7-8B80-DC805F17C1F0",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "1600100000000000100000800000000000000000",
              "ten_chuong"  =>   "Chương VIII QUYẾT ĐỊNH HÌNH PHẠT",
              "hash_chu_de"  =>   "0672ce80-caa2-4d12-a474-6d86349c9dab",
              "hash_de_muc"  =>   "bcc2a59a-ccbe-4739-afd4-f45811a15122"
            ],
            [
              "hash"  =>   "921A084B-E992-42B7-A46A-01F3413EB3F2",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "1600100000000000100000900000000000000000",
              "ten_chuong"  =>   "Chương IX THỜI HIỆU THI HÀNH BẢN ÁN, MIỄN CHẤP HÀNH HÌNH PHẠT, GIẢM THỜI HẠN CHẤP HÀNH HÌNH PHẠT",
              "hash_chu_de"  =>   "0672ce80-caa2-4d12-a474-6d86349c9dab",
              "hash_de_muc"  =>   "bcc2a59a-ccbe-4739-afd4-f45811a15122"
            ],
            [
              "hash"  =>   "C0ED016A-F42D-4542-B318-497751670D23",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "1600100000000000100001000000000000000000",
              "ten_chuong"  =>   "Chương X XÓA ÁN TÍCH",
              "hash_chu_de"  =>   "0672ce80-caa2-4d12-a474-6d86349c9dab",
              "hash_de_muc"  =>   "bcc2a59a-ccbe-4739-afd4-f45811a15122"
            ],
            [
              "hash"  =>   "48C02463-9DDD-45DD-B504-E171BC4F0CC9",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "1600100000000000100001100000000000000000",
              "ten_chuong"  =>   "Chương XI NHỮNG QUY ĐỊNH ĐỐI VỚI PHÁP NHÂN THƯƠNG MẠI PHẠM TỘI",
              "hash_chu_de"  =>   "0672ce80-caa2-4d12-a474-6d86349c9dab",
              "hash_de_muc"  =>   "bcc2a59a-ccbe-4739-afd4-f45811a15122"
            ],
            [
              "hash"  =>   "D1814732-0429-4C0C-A4A6-0EAA26B9599F",
              "so_thu_tu"  =>   12,
              "MAPC"  =>   "1600100000000000100001200000000000000000",
              "ten_chuong"  =>   "Chương XII NHỮNG QUY ĐỊNH ĐỐI VỚI NGƯỜI DƯỚI 18 TUỔI PHẠM TỘI",
              "hash_chu_de"  =>   "0672ce80-caa2-4d12-a474-6d86349c9dab",
              "hash_de_muc"  =>   "bcc2a59a-ccbe-4739-afd4-f45811a15122"
            ],
            [
              "hash"  =>   "27D5DFCA-7081-4F32-B45A-D15380345AF6",
              "so_thu_tu"  =>   13,
              "MAPC"  =>   "1600100000000000200001300000000000000000",
              "ten_chuong"  =>   "Chương XIII CÁC TỘI XÂM PHẠM AN NINH QUỐC GIA",
              "hash_chu_de"  =>   "0672ce80-caa2-4d12-a474-6d86349c9dab",
              "hash_de_muc"  =>   "bcc2a59a-ccbe-4739-afd4-f45811a15122"
            ],
            [
              "hash"  =>   "10FE0ACE-E685-4329-9F94-6734E74E5E2B",
              "so_thu_tu"  =>   14,
              "MAPC"  =>   "1600100000000000200001400000000000000000",
              "ten_chuong"  =>   "Chương XIV CÁC TỘI XÂM PHẠM TÍNH MẠNG, SỨC KHỎE, NHÂN PHẨM, DANH DỰ CỦA CON NGƯỜI",
              "hash_chu_de"  =>   "0672ce80-caa2-4d12-a474-6d86349c9dab",
              "hash_de_muc"  =>   "bcc2a59a-ccbe-4739-afd4-f45811a15122"
            ],
            [
              "hash"  =>   "4A10FCF9-5CB1-47BE-AEA1-5FE9574CDCC1",
              "so_thu_tu"  =>   15,
              "MAPC"  =>   "1600100000000000200001500000000000000000",
              "ten_chuong"  =>   "Chương XV CÁC TỘI XÂM PHẠM QUYỀN TỰ DO CỦA CON NGƯỜI, QUYỀN TỰ DO, DÂN CHỦ CỦA CÔNG DÂN",
              "hash_chu_de"  =>   "0672ce80-caa2-4d12-a474-6d86349c9dab",
              "hash_de_muc"  =>   "bcc2a59a-ccbe-4739-afd4-f45811a15122"
            ],
            [
              "hash"  =>   "A0D5F624-F6FB-4E61-BF1F-B4C1F27B2877",
              "so_thu_tu"  =>   16,
              "MAPC"  =>   "1600100000000000200001600000000000000000",
              "ten_chuong"  =>   "Chương XVI CÁC TỘI XÂM PHẠM SỞ HỮU",
              "hash_chu_de"  =>   "0672ce80-caa2-4d12-a474-6d86349c9dab",
              "hash_de_muc"  =>   "bcc2a59a-ccbe-4739-afd4-f45811a15122"
            ],
            [
              "hash"  =>   "420C6C5D-850A-4EA1-A300-1404281DFF0E",
              "so_thu_tu"  =>   17,
              "MAPC"  =>   "1600100000000000200001700000000000000000",
              "ten_chuong"  =>   "Chương XVII CÁC TỘI XÂM PHẠM CHẾ ĐỘ HÔN NHÂN VÀ GIA ĐÌNH",
              "hash_chu_de"  =>   "0672ce80-caa2-4d12-a474-6d86349c9dab",
              "hash_de_muc"  =>   "bcc2a59a-ccbe-4739-afd4-f45811a15122"
            ],
            [
              "hash"  =>   "9799828A-1964-4365-AC11-863594459617",
              "so_thu_tu"  =>   18,
              "MAPC"  =>   "1600100000000000200001800000000000000000",
              "ten_chuong"  =>   "Chương XVIII CÁC TỘI XÂM PHẠM TRẬT TỰ QUẢN LÝ KINH TẾ",
              "hash_chu_de"  =>   "0672ce80-caa2-4d12-a474-6d86349c9dab",
              "hash_de_muc"  =>   "bcc2a59a-ccbe-4739-afd4-f45811a15122"
            ],
            [
              "hash"  =>   "17AFB471-74DD-44DF-9D0F-EA3A979146A0",
              "so_thu_tu"  =>   19,
              "MAPC"  =>   "1600100000000000200001900000000000000000",
              "ten_chuong"  =>   "Chương XIX CÁC TỘI PHẠM VỀ MÔI TRƯỜNG",
              "hash_chu_de"  =>   "0672ce80-caa2-4d12-a474-6d86349c9dab",
              "hash_de_muc"  =>   "bcc2a59a-ccbe-4739-afd4-f45811a15122"
            ],
            [
              "hash"  =>   "DAC40E14-0594-42A7-BEA0-E4136BE22EF4",
              "so_thu_tu"  =>   20,
              "MAPC"  =>   "1600100000000000200002000000000000000000",
              "ten_chuong"  =>   "Chương XX CÁC TỘI PHẠM VỀ MA TÚY",
              "hash_chu_de"  =>   "0672ce80-caa2-4d12-a474-6d86349c9dab",
              "hash_de_muc"  =>   "bcc2a59a-ccbe-4739-afd4-f45811a15122"
            ],
            [
              "hash"  =>   "D6AC6B0D-7165-4701-A6DE-03F506E5BD7C",
              "so_thu_tu"  =>   21,
              "MAPC"  =>   "1600100000000000200002100000000000000000",
              "ten_chuong"  =>   "Chương XXI CÁC TỘI XÂM PHẠM AN TOÀN CÔNG CỘNG, TRẬT TỰ CÔNG CỘNG",
              "hash_chu_de"  =>   "0672ce80-caa2-4d12-a474-6d86349c9dab",
              "hash_de_muc"  =>   "bcc2a59a-ccbe-4739-afd4-f45811a15122"
            ],
            [
              "hash"  =>   "12AFD6BF-E42A-4A4D-A431-957970587342",
              "so_thu_tu"  =>   22,
              "MAPC"  =>   "1600100000000000200002200000000000000000",
              "ten_chuong"  =>   "Chương XXII CÁC TỘI XÂM PHẠM TRẬT TỰ QUẢN LÝ HÀNH CHÍNH",
              "hash_chu_de"  =>   "0672ce80-caa2-4d12-a474-6d86349c9dab",
              "hash_de_muc"  =>   "bcc2a59a-ccbe-4739-afd4-f45811a15122"
            ],
            [
              "hash"  =>   "E9AC87B5-F1F4-477B-8E3B-19FC33389F91",
              "so_thu_tu"  =>   23,
              "MAPC"  =>   "1600100000000000200002300000000000000000",
              "ten_chuong"  =>   "Chương XXIII CÁC TỘI PHẠM VỀ CHỨC VỤ",
              "hash_chu_de"  =>   "0672ce80-caa2-4d12-a474-6d86349c9dab",
              "hash_de_muc"  =>   "bcc2a59a-ccbe-4739-afd4-f45811a15122"
            ],
            [
              "hash"  =>   "E463C321-9DEF-4179-B1DD-89D6115F4AB9",
              "so_thu_tu"  =>   24,
              "MAPC"  =>   "1600100000000000200002400000000000000000",
              "ten_chuong"  =>   "Chương XXIV CÁC TỘI XÂM PHẠM HOẠT ĐỘNG TƯ PHÁP",
              "hash_chu_de"  =>   "0672ce80-caa2-4d12-a474-6d86349c9dab",
              "hash_de_muc"  =>   "bcc2a59a-ccbe-4739-afd4-f45811a15122"
            ],
            [
              "hash"  =>   "05649DF2-5DB9-4969-8B24-D01ACB79B4BE",
              "so_thu_tu"  =>   25,
              "MAPC"  =>   "1600100000000000200002500000000000000000",
              "ten_chuong"  =>   "Chương XXV CÁC TỘI XÂM PHẠM NGHĨA VỤ, TRÁCH NHIỆM CỦA QUÂN NHÂN VÀ TRÁCH NHIỆM CỦA NGƯỜI PHỐI THUỘC VỚI QUÂN ĐỘI TRONG CHIẾN ĐẤU, PHỤC VỤ CHIẾN ĐẤU",
              "hash_chu_de"  =>   "0672ce80-caa2-4d12-a474-6d86349c9dab",
              "hash_de_muc"  =>   "bcc2a59a-ccbe-4739-afd4-f45811a15122"
            ],
            [
              "hash"  =>   "00A0C009-66F7-420E-92ED-220C7F29F74E",
              "so_thu_tu"  =>   26,
              "MAPC"  =>   "1600100000000000200002600000000000000000",
              "ten_chuong"  =>   "Chương XXVI CÁC TỘI PHÁ HOẠI HÒA BÌNH, CHỐNG LOÀI NGƯỜI VÀ TỘI PHẠM CHIẾN TRANH",
              "hash_chu_de"  =>   "0672ce80-caa2-4d12-a474-6d86349c9dab",
              "hash_de_muc"  =>   "bcc2a59a-ccbe-4739-afd4-f45811a15122"
            ],
            [
              "hash"  =>   "292CBB3D-8CD2-47A2-B17B-2F05A057E357",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "17001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "9daf2b7f-cf24-4c97-adf8-0903f6b7f18e",
              "hash_de_muc"  =>   "f5a43ce4-3b6e-4fc6-8c1e-eb7222d51d27"
            ],
            [
              "hash"  =>   "986CCEB8-21D6-4852-8135-0EA9CD95F6B3",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "17001000000000002000",
              "ten_chuong"  =>   "Chương II NỘI DUNG CÔNG TÁC KẾ TOÁN",
              "hash_chu_de"  =>   "9daf2b7f-cf24-4c97-adf8-0903f6b7f18e",
              "hash_de_muc"  =>   "f5a43ce4-3b6e-4fc6-8c1e-eb7222d51d27"
            ],
            [
              "hash"  =>   "09F90172-138F-4657-9766-0E4BF863C5F8",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "17001000000000003000",
              "ten_chuong"  =>   "Chương III TỔ CHỨC BỘ MÁY KẾ TOÁN VÀ NGƯỜI LÀM KẾ TOÁN",
              "hash_chu_de"  =>   "9daf2b7f-cf24-4c97-adf8-0903f6b7f18e",
              "hash_de_muc"  =>   "f5a43ce4-3b6e-4fc6-8c1e-eb7222d51d27"
            ],
            [
              "hash"  =>   "6F3D7619-0B3D-4D6F-99B4-BA43E27AE7CD",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "17001000000000004000",
              "ten_chuong"  =>   "Chương IV HOẠT ĐỘNG KINH DOANH DỊCH VỤ KẾ TOÁN",
              "hash_chu_de"  =>   "9daf2b7f-cf24-4c97-adf8-0903f6b7f18e",
              "hash_de_muc"  =>   "f5a43ce4-3b6e-4fc6-8c1e-eb7222d51d27"
            ],
            [
              "hash"  =>   "7265C55F-1FBC-483F-8D4A-962E4628E58C",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "17001000000000005000",
              "ten_chuong"  =>   "Chương V QUẢN LÝ NHÀ NƯỚC VỀ KẾ TOÁN",
              "hash_chu_de"  =>   "9daf2b7f-cf24-4c97-adf8-0903f6b7f18e",
              "hash_de_muc"  =>   "f5a43ce4-3b6e-4fc6-8c1e-eb7222d51d27"
            ],
            [
              "hash"  =>   "FA02EF26-7A1A-42E8-B89E-ECA7A6637619",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "17001000000000005500",
              "ten_chuong"  =>   "Chương VI CÁC CHẾ ĐỘ KẾ TOÁN CỤ THỂ",
              "hash_chu_de"  =>   "9daf2b7f-cf24-4c97-adf8-0903f6b7f18e",
              "hash_de_muc"  =>   "f5a43ce4-3b6e-4fc6-8c1e-eb7222d51d27"
            ],
            [
              "hash"  =>   "1143FAFF-A6CC-4364-B7A7-9481231BCF62",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "17001000000000006000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "9daf2b7f-cf24-4c97-adf8-0903f6b7f18e",
              "hash_de_muc"  =>   "f5a43ce4-3b6e-4fc6-8c1e-eb7222d51d27"
            ],
            [
              "hash"  =>   "D7FEADA9-A760-481A-9EA7-2B94912E3C9E",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "17003000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "9daf2b7f-cf24-4c97-adf8-0903f6b7f18e",
              "hash_de_muc"  =>   "4f1e7688-a75f-471f-b053-75eab7c11188"
            ],
            [
              "hash"  =>   "6B14BE46-D2FD-4CA6-8645-9489CD4E29E3",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "17003000000000002000",
              "ten_chuong"  =>   "Chương II CHỨC NĂNG, NHIỆM VỤ, QUYỀN HẠN VÀ TỔ CHỨC  CỦA KIỂM TOÁN NHÀ NƯỚC",
              "hash_chu_de"  =>   "9daf2b7f-cf24-4c97-adf8-0903f6b7f18e",
              "hash_de_muc"  =>   "4f1e7688-a75f-471f-b053-75eab7c11188"
            ],
            [
              "hash"  =>   "FFB8588B-CD1F-47E0-9924-BB7E86EA9894",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "17003000000000003000",
              "ten_chuong"  =>   "Chương III KIỂM TOÁN VIÊN NHÀ NƯỚC  VÀ CỘNG TÁC VIÊN KIỂM TOÁN NHÀ NƯỚC",
              "hash_chu_de"  =>   "9daf2b7f-cf24-4c97-adf8-0903f6b7f18e",
              "hash_de_muc"  =>   "4f1e7688-a75f-471f-b053-75eab7c11188"
            ],
            [
              "hash"  =>   "CDC419FA-E7C8-4D9C-93BE-EB5683461A5D",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "17003000000000004000",
              "ten_chuong"  =>   "Chương IV HOẠT ĐỘNG KIỂM TOÁN NHÀ NƯỚC",
              "hash_chu_de"  =>   "9daf2b7f-cf24-4c97-adf8-0903f6b7f18e",
              "hash_de_muc"  =>   "4f1e7688-a75f-471f-b053-75eab7c11188"
            ],
            [
              "hash"  =>   "26DE3EF2-93B9-4C3B-9C54-A5362545E505",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "17003000000000005000",
              "ten_chuong"  =>   "Chương V QUYỀN VÀ NGHĨA VỤ CỦA ĐƠN VỊ ĐƯỢC KIỂM TOÁN",
              "hash_chu_de"  =>   "9daf2b7f-cf24-4c97-adf8-0903f6b7f18e",
              "hash_de_muc"  =>   "4f1e7688-a75f-471f-b053-75eab7c11188"
            ],
            [
              "hash"  =>   "DFFC4CA8-09C2-4B4C-BD3F-FB8AF2B7AE6B",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "17003000000000006000",
              "ten_chuong"  =>   "Chương VI BẢO ĐẢM HOẠT ĐỘNG CỦA KIỂM TOÁN NHÀ NƯỚC",
              "hash_chu_de"  =>   "9daf2b7f-cf24-4c97-adf8-0903f6b7f18e",
              "hash_de_muc"  =>   "4f1e7688-a75f-471f-b053-75eab7c11188"
            ],
            [
              "hash"  =>   "C1AB891B-63B1-426D-A6FC-2E6CB837EA4F",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "17003000000000007000",
              "ten_chuong"  =>   "Chương VII TRÁCH NHIỆM CỦA CƠ QUAN, TỔ CHỨC, CÁ NHÂN ĐỐI VỚI  HOẠT ĐỘNG KIỂM TOÁN NHÀ NƯỚC",
              "hash_chu_de"  =>   "9daf2b7f-cf24-4c97-adf8-0903f6b7f18e",
              "hash_de_muc"  =>   "4f1e7688-a75f-471f-b053-75eab7c11188"
            ],
            [
              "hash"  =>   "D8FFA362-EDAF-4E85-BE36-FD22A9F359A1",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "17003000000000008000",
              "ten_chuong"  =>   "Chương VIII KHIẾU NẠI, TỐ CÁO, KHỞI KIỆN VÀ XỬ LÝ VI PHẠM TRONG HOẠT ĐỘNG KIỂM TOÁN NHÀ NƯỚC",
              "hash_chu_de"  =>   "9daf2b7f-cf24-4c97-adf8-0903f6b7f18e",
              "hash_de_muc"  =>   "4f1e7688-a75f-471f-b053-75eab7c11188"
            ],
            [
              "hash"  =>   "F059D4A7-4EFD-4B36-B684-7A2DA5D230D2",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "17003000000000009000",
              "ten_chuong"  =>   "Chương IX ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "9daf2b7f-cf24-4c97-adf8-0903f6b7f18e",
              "hash_de_muc"  =>   "4f1e7688-a75f-471f-b053-75eab7c11188"
            ],
            [
              "hash"  =>   "768018E1-CA2C-4F36-8490-CCE62CE20168",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "18001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "673fcdfe-cda8-43aa-b3b9-f3e1e4710027"
            ],
            [
              "hash"  =>   "1A166E4D-F1C5-4C33-80FA-B2A8B14285BB",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "18001000000000002000",
              "ten_chuong"  =>   "Chương II KHIẾU NẠI QUYẾT ĐỊNH HÀNH CHÍNH, HÀNH VI HÀNH CHÍNH",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "673fcdfe-cda8-43aa-b3b9-f3e1e4710027"
            ],
            [
              "hash"  =>   "9AC833F7-C6EE-4D06-B6EE-EE45E3AE04D5",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "18001000000000003000",
              "ten_chuong"  =>   "Chương III GIẢI QUYẾT KHIẾU NẠI",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "673fcdfe-cda8-43aa-b3b9-f3e1e4710027"
            ],
            [
              "hash"  =>   "19318245-CAF6-44BB-B5D5-7ADBAC176F92",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "18001000000000003500",
              "ten_chuong"  =>   "Chương IV KHIẾU NẠI VÀ GIẢI QUYẾT KHIẾU NẠI TRONG CÁC LĨNH VỰC",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "673fcdfe-cda8-43aa-b3b9-f3e1e4710027"
            ],
            [
              "hash"  =>   "C6DBD6CE-22A8-4DC9-AC7C-DCCB02357106",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "18001000000000004000",
              "ten_chuong"  =>   "Chương V KHIẾU NẠI, GIẢI QUYẾT KHIẾU NẠI QUYẾT ĐỊNH KỶ LUẬT CÁN BỘ, CÔNG CHỨC",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "673fcdfe-cda8-43aa-b3b9-f3e1e4710027"
            ],
            [
              "hash"  =>   "B51201D7-FF62-451F-98DE-0AC4E8FC272D",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "18001000000000005000",
              "ten_chuong"  =>   "Chương VI TIẾP CÔNG DÂN",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "673fcdfe-cda8-43aa-b3b9-f3e1e4710027"
            ],
            [
              "hash"  =>   "B92FD1DB-F9C2-43A4-A4C5-73EEB4DBE5C5",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "18001000000000006000",
              "ten_chuong"  =>   "Chương VII TRÁCH NHIỆM CỦA CƠ QUAN, TỔ CHỨC, CÁ NHÂN CÓ THẨM QUYỀN TRONG VIỆCQUẢN LÝ CÔNG TÁC GIẢI QUYẾT KHIẾU NẠI",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "673fcdfe-cda8-43aa-b3b9-f3e1e4710027"
            ],
            [
              "hash"  =>   "BFAC56DD-C364-4C5F-BBB4-E3FB0E6346AA",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "18001000000000007000",
              "ten_chuong"  =>   "Chương VIII XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "673fcdfe-cda8-43aa-b3b9-f3e1e4710027"
            ],
            [
              "hash"  =>   "DB36594B-3D52-42F4-AED4-E5E101E5E72E",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "18001000000000008000",
              "ten_chuong"  =>   "Chương IX ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "673fcdfe-cda8-43aa-b3b9-f3e1e4710027"
            ],
            [
              "hash"  =>   "2B7ACF70-DF6E-4D18-A109-5F4DDAE9F4CA",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "18002000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "d9e2a674-7659-4e9d-9cdd-5aa21a50cb69"
            ],
            [
              "hash"  =>   "EADAA61B-A83E-4189-9625-8FDB91A4E170",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "18002000000000002000",
              "ten_chuong"  =>   "Chương II PHÒNG NGỪA THAM NHŨNG TRONG CƠ QUAN, TỔ CHỨC, ĐƠN VỊ",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "d9e2a674-7659-4e9d-9cdd-5aa21a50cb69"
            ],
            [
              "hash"  =>   "0457C7FC-1472-4985-91E6-45C91BB30CC9",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "18002000000000003000",
              "ten_chuong"  =>   "Chương III PHÁT HIỆN THAM NHŨNG TRONG CƠ QUAN, TỔ CHỨC, ĐƠN VỊ",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "d9e2a674-7659-4e9d-9cdd-5aa21a50cb69"
            ],
            [
              "hash"  =>   "29B6BD32-F722-4DD0-8A40-0AF87A7E8CF5",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "18002000000000004000",
              "ten_chuong"  =>   "Chương IV CHẾ ĐỘ TRÁCH NHIỆM CỦA NGƯỜI ĐỨNG ĐẦU CƠ QUAN, TỔ CHỨC, ĐƠN VỊ TRONG PHÒNG, CHỐNG THAM NHŨNG",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "d9e2a674-7659-4e9d-9cdd-5aa21a50cb69"
            ],
            [
              "hash"  =>   "36CB012F-C9C3-4DC8-8672-A61C760B06ED",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "18002000000000005000",
              "ten_chuong"  =>   "Chương V TRÁCH NHIỆM CỦA XÃ HỘI TRONG PHÒNG, CHỐNG THAM NHŨNG ",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "d9e2a674-7659-4e9d-9cdd-5aa21a50cb69"
            ],
            [
              "hash"  =>   "2AADA476-C767-4ABF-AF25-FF37FB117C62",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "18002000000000006000",
              "ten_chuong"  =>   "Chương VI PHÒNG, CHỐNG THAM NHŨNG TRONG DOANH NGHIỆP, TỔ CHỨC KHU VỰC NGOÀI NHÀ NƯỚC",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "d9e2a674-7659-4e9d-9cdd-5aa21a50cb69"
            ],
            [
              "hash"  =>   "50B62B0E-7004-4552-91AC-FBCD0E458CB6",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "18002000000000007000",
              "ten_chuong"  =>   "Chương VII TRÁCH NHIỆM CỦA CƠ QUAN NHÀ NƯỚC TRONG PHÒNG, CHỐNG THAM NHŨNG",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "d9e2a674-7659-4e9d-9cdd-5aa21a50cb69"
            ],
            [
              "hash"  =>   "5CB75135-8D76-4160-AE1B-CD73D2AA10CE",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "18002000000000008000",
              "ten_chuong"  =>   "Chương VIII HỢP TÁC QUỐC TẾ VỀ PHÒNG, CHỐNG THAM NHŨNG",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "d9e2a674-7659-4e9d-9cdd-5aa21a50cb69"
            ],
            [
              "hash"  =>   "BAABCD35-3767-4F87-B82B-72C620F675D7",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "18002000000000009000",
              "ten_chuong"  =>   "Chương IX XỬ LÝ THAM NHŨNG VÀ HÀNH VI KHÁC VI PHẠM PHÁP LUẬT VỀ PHÒNG, CHỐNG THAM NHŨNG",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "d9e2a674-7659-4e9d-9cdd-5aa21a50cb69"
            ],
            [
              "hash"  =>   "524E9A94-5048-43C0-A733-1A0A9BC18A68",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "18002000000000010000",
              "ten_chuong"  =>   "Chương X ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "d9e2a674-7659-4e9d-9cdd-5aa21a50cb69"
            ],
            [
              "hash"  =>   "169C0BB8-6371-4051-B22F-584DE872DB63",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "18004000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "d23549c3-e7ec-4158-9864-35fc6aefc1cc"
            ],
            [
              "hash"  =>   "A953A15B-231B-4A76-8D12-7F059B962EF1",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "18004000000000002000",
              "ten_chuong"  =>   "Chương II QUYỀN VÀ NGHĨA VỤ CỦA NGƯỜI ĐẾN KHIẾU NẠI, TỐ CÁO, KIẾN NGHỊ, PHẢN ÁNH; TRÁCH NHIỆM CỦA NGƯỜI TIẾP CÔNG DÂN",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "d23549c3-e7ec-4158-9864-35fc6aefc1cc"
            ],
            [
              "hash"  =>   "F0EA0F93-F9D6-4CE7-B794-6CA277E9E8CE",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "18004000000000003000",
              "ten_chuong"  =>   "Chương III TIẾP CÔNG DÂN TẠI TRỤ SỞ TIẾP CÔNG DÂN Ở TRUNG ƯƠNG, TRỤ SỞ TIẾP CÔNG DÂN CẤP TỈNH, TRỤ SỞ TIẾP CÔNG DÂN CẤP HUYỆN; VIỆC TIẾP CÔNG DÂN Ở CẤP XÃ",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "d23549c3-e7ec-4158-9864-35fc6aefc1cc"
            ],
            [
              "hash"  =>   "AEC4605C-2B5A-43EB-A076-231B3CE85AB9",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "18004000000000004000",
              "ten_chuong"  =>   "Chương IV TIẾP CÔNG DÂN TẠI CƠ QUAN HÀNH CHÍNH NHÀ NƯỚC; TẠI TÒA ÁN NHÂN DÂN, VIỆN KIỂM SÁT NHÂN DÂN, KIỂM TOÁN NHÀ NƯỚC",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "d23549c3-e7ec-4158-9864-35fc6aefc1cc"
            ],
            [
              "hash"  =>   "CFECC660-3198-4487-AA0A-2944BE40E04A",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "18004000000000005000",
              "ten_chuong"  =>   "Chương V TIẾP CÔNG DÂN CỦA CÁC CƠ QUAN CỦA QUỐC HỘI, ĐẠI BIỂU QUỐC HỘI, CỦA HỘI ĐỒNG NHÂN DÂN VÀ ĐẠI BIỂU HỘI ĐỒNG NHÂN DÂN CÁC CẤP",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "d23549c3-e7ec-4158-9864-35fc6aefc1cc"
            ],
            [
              "hash"  =>   "E74BC2D0-99E9-4D4B-8174-0E6EE6E0F4BD",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "18004000000000006000",
              "ten_chuong"  =>   "Chương VI HOẠT ĐỘNG TIẾP CÔNG DÂN CỦA CƠ QUAN, TỔ CHỨC, ĐƠN VỊ, CÁ NHÂN",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "d23549c3-e7ec-4158-9864-35fc6aefc1cc"
            ],
            [
              "hash"  =>   "D2D9B479-F0CB-4CC6-B3C2-6241CBF37746",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "18004000000000007000",
              "ten_chuong"  =>   "Chương VII TRÁCH NHIỆM TIẾP VÀ XỬ LÝ TRƯỜNG HỢP NHIỀU NGƯỜI CÙNG KHIẾU NẠI, TỐ CÁO, KIẾN NGHỊ, PHẢN ÁNH VỀ MỘT NỘI DUNG",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "d23549c3-e7ec-4158-9864-35fc6aefc1cc"
            ],
            [
              "hash"  =>   "BCCC963D-A0C3-451D-93B7-B0C8FE27925A",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "18004000000000008000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KIỆN BẢO ĐẢM CHO HOẠT ĐỘNG TIẾP CÔNG DÂN",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "d23549c3-e7ec-4158-9864-35fc6aefc1cc"
            ],
            [
              "hash"  =>   "A46B67B2-010E-44E0-8735-16818BF71021",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "18004000000000009000",
              "ten_chuong"  =>   "Chương IX ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "d23549c3-e7ec-4158-9864-35fc6aefc1cc"
            ],
            [
              "hash"  =>   "DD92532D-A026-4658-9B42-CBABC0EB4A3F",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "18005000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "bc9a9ade-0c9f-43cc-8cc2-8c69773d163e"
            ],
            [
              "hash"  =>   "E642C8F1-95A1-4CEF-AC5D-7CCF395E6C97",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "18005000000000002000",
              "ten_chuong"  =>   "Chương II QUYỀN VÀ NGHĨA VỤ CỦA NGƯỜI TỐ CÁO, NGƯỜI BỊ TỐ CÁO, NGƯỜI GIẢI QUYẾT TỐ CÁO",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "bc9a9ade-0c9f-43cc-8cc2-8c69773d163e"
            ],
            [
              "hash"  =>   "64809D54-D1AF-427A-80CA-0A33CB2ED7AF",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "18005000000000003000",
              "ten_chuong"  =>   "Chương III GIẢI QUYẾT TỐ CÁO ĐỐI VỚI HÀNH VI VI PHẠM PHÁP LUẬT TRONG VIỆC THỰC HIỆN NHIỆM VỤ, CÔNG VỤ",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "bc9a9ade-0c9f-43cc-8cc2-8c69773d163e"
            ],
            [
              "hash"  =>   "11F3D5DE-3CFE-433F-8DC3-5CBCE230B5AE",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "18005000000000004000",
              "ten_chuong"  =>   "Chương IV GIẢI QUYẾT TỐ CÁO ĐỐI VỚI HÀNH VI VI PHẠM PHÁP LUẬT VỀ QUẢN LÝ NHÀ NƯỚC TRONG CÁC LĨNH VỰC",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "bc9a9ade-0c9f-43cc-8cc2-8c69773d163e"
            ],
            [
              "hash"  =>   "04DB3977-ECE8-4EA0-9EE0-74C3ECD4EAD9",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "18005000000000005000",
              "ten_chuong"  =>   "Chương V TRÁCH NHIỆM TỔ CHỨC THỰC HIỆN KẾT LUẬN NỘI DUNG TỐ CÁO",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "bc9a9ade-0c9f-43cc-8cc2-8c69773d163e"
            ],
            [
              "hash"  =>   "DB827057-BDA3-46D2-9099-DBE0AD990AE4",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "18005000000000006000",
              "ten_chuong"  =>   "Chương VI BẢO VỆ NGƯỜI TỐ CÁO",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "bc9a9ade-0c9f-43cc-8cc2-8c69773d163e"
            ],
            [
              "hash"  =>   "AD8C34B3-BA43-48EC-A5A7-544162DD391E",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "18005000000000007000",
              "ten_chuong"  =>   "Chương VII TRÁCH NHIỆM CỦA CƠ QUAN, TỔ CHỨC TRONG VIỆC QUẢN LÝ CÔNG TÁC GIẢI QUYẾT TỐ CÁO",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "bc9a9ade-0c9f-43cc-8cc2-8c69773d163e"
            ],
            [
              "hash"  =>   "87FBB53C-7C91-4802-AA51-13FEBB9D056E",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "18005000000000008000",
              "ten_chuong"  =>   "Chương VIII KHEN THƯỞNG VÀ XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "bc9a9ade-0c9f-43cc-8cc2-8c69773d163e"
            ],
            [
              "hash"  =>   "7D772BC6-DEEC-45CF-817B-5B393D83C44B",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "18005000000000009000",
              "ten_chuong"  =>   "Chương IX ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "ff58c8ec-ab1b-4fdd-b732-5f09f9fa09cd",
              "hash_de_muc"  =>   "bc9a9ade-0c9f-43cc-8cc2-8c69773d163e"
            ],
            [
              "hash"  =>   "5E157D8B-25EA-4D4D-8C09-A6388F7AE281",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "19001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "47316aca-6f15-49c8-b604-5a6c87351849"
            ],
            [
              "hash"  =>   "BBC161F6-DCEB-4F98-A08A-416021FC243C",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "19001000000000002000",
              "ten_chuong"  =>   "Chương II QUYỀN VÀ NGHĨA VỤ CỦA TỔ CHỨC, CÁ NHÂN ĐỐI VỚI CHẤT LƯỢNG SẢN PHẨM, HÀNG HÓA",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "47316aca-6f15-49c8-b604-5a6c87351849"
            ],
            [
              "hash"  =>   "314715B1-A348-497D-B1B0-8C50F22B8FAB",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "19001000000000003000",
              "ten_chuong"  =>   "Chương III QUẢN LÝ CHẤT LƯỢNG SẢN PHẨM, HÀNG HÓA TRONG SẢN XUẤT, XUẤT KHẨU, NHẬP KHẨU, LƯU THÔNG TRÊN THỊ TRƯỜNG VÀ TRONG QUÁ TRÌNH SỬ DỤNG",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "47316aca-6f15-49c8-b604-5a6c87351849"
            ],
            [
              "hash"  =>   "44119D97-D4AD-4E8F-B053-B3E8C3CE5B9B",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "19001000000000004000",
              "ten_chuong"  =>   "Chương IV KIỂM TRA, THANH TRA VỀ CHẤT LƯỢNG SẢN PHẨM, HÀNG HÓA",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "47316aca-6f15-49c8-b604-5a6c87351849"
            ],
            [
              "hash"  =>   "CE3C7679-5620-41E1-A5D0-AFA38A285CEE",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "19001000000000005000",
              "ten_chuong"  =>   "Chương V GIẢI QUYẾT TRANH CHẤP, BỒI THƯỜNG THIỆT HẠI, GIẢI QUYẾT KHIẾU NẠI, TỐ CÁO VÀ XỬ LÝ VI PHẠM PHÁP LUẬT VỀ CHẤT LƯỢNG SẢN PHẨM, HÀNG HÓA",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "47316aca-6f15-49c8-b604-5a6c87351849"
            ],
            [
              "hash"  =>   "AF3BA2DE-19B8-48CE-AB16-BCF25D55213A",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "19001000000000006000",
              "ten_chuong"  =>   "Chương VI TRÁCH NHIỆM QUẢN LÝ NHÀ NƯỚC VỀ CHẤT LƯỢNG SẢN PHẨM, HÀNG HÓA",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "47316aca-6f15-49c8-b604-5a6c87351849"
            ],
            [
              "hash"  =>   "19C26EEA-AA31-4E19-B9E2-5868E3305C11",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "19001000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "47316aca-6f15-49c8-b604-5a6c87351849"
            ],
            [
              "hash"  =>   "EA84AE54-29A5-4F1A-B731-E431CA32EE12",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "19002000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "22643fdd-9668-4407-968a-ceac2101f1a0"
            ],
            [
              "hash"  =>   "DA8F57CD-A7C0-49F6-88CF-4C16CEBE7A60",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "19002000000000002000",
              "ten_chuong"  =>   "Chương II THẨM ĐỊNH CÔNG NGHỆ DỰ ÁN ĐẦU TƯ",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "22643fdd-9668-4407-968a-ceac2101f1a0"
            ],
            [
              "hash"  =>   "AAEEDB01-93BC-401F-9AB3-805902FEDC37",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "19002000000000003000",
              "ten_chuong"  =>   "Chương III HỢP ĐỒNG CHUYỂN GIAO CÔNG NGHỆ",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "22643fdd-9668-4407-968a-ceac2101f1a0"
            ],
            [
              "hash"  =>   "22145CE3-BF60-40B9-8BB8-13A9C8E52AB7",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "19002000000000004000",
              "ten_chuong"  =>   "Chương IV BIỆN PHÁP KHUYẾN KHÍCH CHUYỂN GIAO CÔNG NGHỆ, PHÁT TRIỂN THỊ TRƯỜNG KHOA HỌC VÀ CÔNG NGHỆ",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "22643fdd-9668-4407-968a-ceac2101f1a0"
            ],
            [
              "hash"  =>   "B20B26F2-7778-4AD7-BC63-4C42147A3233",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "19002000000000005000",
              "ten_chuong"  =>   "Chương V QUẢN LÝ NHÀ NƯỚC VỀ CHUYỂN GIAO CÔNG NGHỆ",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "22643fdd-9668-4407-968a-ceac2101f1a0"
            ],
            [
              "hash"  =>   "A7CD3BAA-227D-4722-AB60-2F3496D60AA0",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "19002000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "22643fdd-9668-4407-968a-ceac2101f1a0"
            ],
            [
              "hash"  =>   "B760E577-DCC0-4517-9225-360986BF5A0B",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "19003000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "527141b6-8429-4502-868e-f34c7b180e0c"
            ],
            [
              "hash"  =>   "B2CBBE39-5E7C-4B9A-8B93-031C912898DB",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "19003000000000002000",
              "ten_chuong"  =>   "Chương II ỨNG DỤNG, NGHIÊN CỨU VÀ PHÁT TRIỂN CÔNG NGHỆ CAO",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "527141b6-8429-4502-868e-f34c7b180e0c"
            ],
            [
              "hash"  =>   "EAE3269C-FD5B-4795-B951-9EBC49D49EB5",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "19003000000000003000",
              "ten_chuong"  =>   "Chương III PHÁT TRIỂN CÔNG NGHỆ CAO TRONG CÁC NGÀNH KINH TẾ - KỸ THUẬT",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "527141b6-8429-4502-868e-f34c7b180e0c"
            ],
            [
              "hash"  =>   "F5E34E66-6580-4277-B6EF-F526B2613988",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "19003000000000004000",
              "ten_chuong"  =>   "Chương IV NHÂN LỰC CÔNG NGHỆ CAO",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "527141b6-8429-4502-868e-f34c7b180e0c"
            ],
            [
              "hash"  =>   "E63B6D06-AF22-4714-BD85-3062088DE358",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "19003000000000005000",
              "ten_chuong"  =>   "Chương V CƠ SỞ HẠ TẦNG KỸ THUẬT PHỤC VỤ HOẠT ĐỘNG CÔNG NGHỆ CAO",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "527141b6-8429-4502-868e-f34c7b180e0c"
            ],
            [
              "hash"  =>   "AA50E581-F78C-4F29-9525-C2DAD050D4A8",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "19003000000000005500",
              "ten_chuong"  =>   "Chương VI QUY ĐỊNH VỀ KHU CÔNG NGHỆ CAO HÒA LẠC",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "527141b6-8429-4502-868e-f34c7b180e0c"
            ],
            [
              "hash"  =>   "C52B3639-6E7A-4D54-B7C8-B0AC98F44906",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "19003000000000006000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "527141b6-8429-4502-868e-f34c7b180e0c"
            ],
            [
              "hash"  =>   "14B248F9-D094-4253-8212-D3F285BC6829",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "19004000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "41685e38-e7ab-4c85-a35e-fb1557319a78"
            ],
            [
              "hash"  =>   "AE3FD61C-C0DC-453E-BC19-8B8AE92096C3",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "19004000000000002000",
              "ten_chuong"  =>   "Chương II ĐƠN VỊ ĐO, CHUẨN ĐO LƯỜNG",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "41685e38-e7ab-4c85-a35e-fb1557319a78"
            ],
            [
              "hash"  =>   "B5D52954-A83E-4801-B9C6-B9B9B8EBB043",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "19004000000000003000",
              "ten_chuong"  =>   "Chương III PHƯƠNG TIỆN ĐO",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "41685e38-e7ab-4c85-a35e-fb1557319a78"
            ],
            [
              "hash"  =>   "6E1C4C62-3CBA-4391-AE84-3D9F0A43B190",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "19004000000000004000",
              "ten_chuong"  =>   "Chương IV PHÊ DUYỆT MẪU, KIỂM ĐỊNH, HIỆU CHUẨN, THỬ NGHIỆM PHƯƠNG TIỆN ĐO, CHUẨN ĐO LƯỜNG",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "41685e38-e7ab-4c85-a35e-fb1557319a78"
            ],
            [
              "hash"  =>   "F0CDDFC1-58BF-4AA4-BADA-9667EE639A78",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "19004000000000005000",
              "ten_chuong"  =>   "Chương V PHÉP ĐO, LƯỢNG CỦA HÀNG ĐÓNG GÓI SẴN",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "41685e38-e7ab-4c85-a35e-fb1557319a78"
            ],
            [
              "hash"  =>   "DB2BBEEF-2B8D-4376-B09D-938AB25031F3",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "19004000000000006000",
              "ten_chuong"  =>   "Chương VI QUYỀN VÀ NGHĨA VỤ CỦA TỔ CHỨC, CÁ NHÂN TRONG HOẠT ĐỘNG ĐO LƯỜNG",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "41685e38-e7ab-4c85-a35e-fb1557319a78"
            ],
            [
              "hash"  =>   "2304FB0B-A31C-4AB9-83D7-5634A802B76F",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "19004000000000007000",
              "ten_chuong"  =>   "Chương VII KIỂM TRA, THANH TRA, XỬ LÝ VI PHẠM PHÁP LUẬT VỀ ĐO LƯỜNG",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "41685e38-e7ab-4c85-a35e-fb1557319a78"
            ],
            [
              "hash"  =>   "B3F08BC2-4719-4D85-ADC2-F4D93959B821",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "19004000000000008000",
              "ten_chuong"  =>   "Chương VIII TRÁCH NHIỆM QUẢN LÝ NHÀ NƯỚC VỀ ĐO LƯỜNG",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "41685e38-e7ab-4c85-a35e-fb1557319a78"
            ],
            [
              "hash"  =>   "FA654481-5AB1-4749-BD49-31CCB2B46B33",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "19004000000000009000",
              "ten_chuong"  =>   "Chương IX ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "41685e38-e7ab-4c85-a35e-fb1557319a78"
            ],
            [
              "hash"  =>   "6F00D89E-E45D-40E9-8BF1-FABC02681849",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "19005000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "30eb5989-103c-41de-9b52-3047233f2d9f"
            ],
            [
              "hash"  =>   "444EE55A-F7F9-4947-895C-B8FDAC2AE8D9",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "19005000000000002000",
              "ten_chuong"  =>   "Chương II TỔ CHỨC KHOA HỌC VÀ CÔNG NGHỆ",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "30eb5989-103c-41de-9b52-3047233f2d9f"
            ],
            [
              "hash"  =>   "C9DBEBE5-2FF7-4F14-97D3-454C54805770",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "19005000000000003000",
              "ten_chuong"  =>   "Chương III CÁ NHÂN HOẠT ĐỘNG KHOA HỌC VÀ CÔNG NGHỆ, PHÁT TRIỂN NGUỒN NHÂN LỰC KHOA HỌC VÀ CÔNG NGHỆ",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "30eb5989-103c-41de-9b52-3047233f2d9f"
            ],
            [
              "hash"  =>   "B1DB86CD-A078-4E4F-9A71-D31425495BAC",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "19005000000000004000",
              "ten_chuong"  =>   "Chương IV XÁC ĐỊNH, TỔ CHỨC THỰC HIỆN NHIỆM VỤ KHOA HỌC VÀ CÔNG NGHỆ",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "30eb5989-103c-41de-9b52-3047233f2d9f"
            ],
            [
              "hash"  =>   "AA920755-F83D-42D0-9F01-11360E34DFC6",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "19005000000000005000",
              "ten_chuong"  =>   "Chương V ỨNG DỤNG KẾT QUẢ NGHIÊN CỨU KHOA HỌC VÀ PHÁT TRIỂN CÔNG NGHỆ, PHỔ BIẾN KIẾN THỨC KHOA HỌC VÀ CÔNG NGHỆ",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "30eb5989-103c-41de-9b52-3047233f2d9f"
            ],
            [
              "hash"  =>   "6089050F-50BC-4CDF-932E-D6D74D74AB6B",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "19005000000000006000",
              "ten_chuong"  =>   "Chương VI ĐẦU TƯ, TÀI CHÍNH PHỤC VỤ PHÁT TRIỂN KHOA HỌC VÀ CÔNG NGHỆ",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "30eb5989-103c-41de-9b52-3047233f2d9f"
            ],
            [
              "hash"  =>   "CEC0DDF8-D344-48BE-9C17-5C9824D64278",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "19005000000000007000",
              "ten_chuong"  =>   "Chương VII XÂY DỰNG KẾT CẤU HẠ TẦNG VÀ PHÁT TRIỂN THỊ TRƯỜNG KHOA HỌC VÀ CÔNG NGHỆ",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "30eb5989-103c-41de-9b52-3047233f2d9f"
            ],
            [
              "hash"  =>   "97B9FC6C-4C80-4A76-B799-25044F571AC4",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "19005000000000008000",
              "ten_chuong"  =>   "Chương VIII HỘI NHẬP QUỐC TẾ VỀ KHOA HỌC VÀ CÔNG NGHỆ",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "30eb5989-103c-41de-9b52-3047233f2d9f"
            ],
            [
              "hash"  =>   "019A5531-893D-4DBD-8E71-F010B4AF4CAC",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "19005000000000009000",
              "ten_chuong"  =>   "Chương IX TRÁCH NHIỆM QUẢN LÝ NHÀ NƯỚC VỀ KHOA HỌC VÀ CÔNG NGHỆ",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "30eb5989-103c-41de-9b52-3047233f2d9f"
            ],
            [
              "hash"  =>   "9A4EE0E8-485E-4CBA-9203-190DF4F30804",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "19005000000000010000",
              "ten_chuong"  =>   "Chương X KHEN THƯỞNG VÀ XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "30eb5989-103c-41de-9b52-3047233f2d9f"
            ],
            [
              "hash"  =>   "919E5B20-D6DA-44F4-8CD4-F716D7718755",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "19005000000000011000",
              "ten_chuong"  =>   "Chương XI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "30eb5989-103c-41de-9b52-3047233f2d9f"
            ],
            [
              "hash"  =>   "FDBAC210-D3FD-47A9-A9AB-F62A288BE3D2",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "19006000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "316fd577-4857-4351-aa3e-ad9eba3ceaaf"
            ],
            [
              "hash"  =>   "2564C509-DB26-47F5-A805-6074A395E2D3",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "19006000000000002000",
              "ten_chuong"  =>   "Chương II CÁC BIỆN PHÁP ĐẨY MẠNH PHÁT TRIỂN, ỨNG DỤNG NĂNG LƯỢNG NGUYÊN TỬ",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "316fd577-4857-4351-aa3e-ad9eba3ceaaf"
            ],
            [
              "hash"  =>   "EA6D18C4-7A56-4903-A85F-FD27718A8D13",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "19006000000000003000",
              "ten_chuong"  =>   "Chương III AN TOÀN BỨC XẠ, AN TOÀN HẠT NHÂN VÀ AN NINH NGUỒN PHÓNG XẠ, VẬT LIỆU HẠT NHÂN, THIẾT BỊ HẠT NHÂN",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "316fd577-4857-4351-aa3e-ad9eba3ceaaf"
            ],
            [
              "hash"  =>   "6D399DF9-1B08-4F50-A3FE-2DFFFDE9E271",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "19006000000000004000",
              "ten_chuong"  =>   "Chương IV CƠ SỞ BỨC XẠ",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "316fd577-4857-4351-aa3e-ad9eba3ceaaf"
            ],
            [
              "hash"  =>   "49619AA6-3701-44CE-A793-A5B137887A45",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "19006000000000005000",
              "ten_chuong"  =>   "Chương V CƠ SỞ HẠT NHÂN",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "316fd577-4857-4351-aa3e-ad9eba3ceaaf"
            ],
            [
              "hash"  =>   "FDB84B61-CBE3-47B9-B5F5-8B5A4F704910",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "19006000000000006000",
              "ten_chuong"  =>   "Chương VI THĂM DÒ, KHAI THÁC, CHẾ BIẾN QUẶNG PHÓNG XẠ",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "316fd577-4857-4351-aa3e-ad9eba3ceaaf"
            ],
            [
              "hash"  =>   "9A120442-1F9D-4E0A-AAA3-C4C138E0597C",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "19006000000000007000",
              "ten_chuong"  =>   "Chương VII VẬN CHUYỂN VÀ NHẬP KHẨU, XUẤT KHẨU VẬT LIỆU PHÓNG XẠ, THIẾT BỊ HẠT NHÂN",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "316fd577-4857-4351-aa3e-ad9eba3ceaaf"
            ],
            [
              "hash"  =>   "26E4AA86-0DE7-4534-8E88-8CDAC0A75CCA",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "19006000000000008000",
              "ten_chuong"  =>   "Chương VIII DỊCH VỤ HỖ TRỢ ỨNG DỤNG NĂNG LƯỢNG NGUYÊN TỬ",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "316fd577-4857-4351-aa3e-ad9eba3ceaaf"
            ],
            [
              "hash"  =>   "531A8FE1-587E-4FA2-B3EE-C8848550B16C",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "19006000000000009000",
              "ten_chuong"  =>   "Chương IX KHAI BÁO VÀ CẤP GIẤY PHÉP",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "316fd577-4857-4351-aa3e-ad9eba3ceaaf"
            ],
            [
              "hash"  =>   "059DC4E1-6FB1-4D7C-8137-C3C688BE5DAF",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "19006000000000010000",
              "ten_chuong"  =>   "Chương X ỨNG PHÓ SỰ CỐ, BỒI THƯỜNG THIỆT HẠI BỨC XẠ, HẠT NHÂN",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "316fd577-4857-4351-aa3e-ad9eba3ceaaf"
            ],
            [
              "hash"  =>   "1C252894-B042-4A44-8E44-B34A0540D52E",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "19006000000000011000",
              "ten_chuong"  =>   "Chương XI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "316fd577-4857-4351-aa3e-ad9eba3ceaaf"
            ],
            [
              "hash"  =>   "79D4AFC0-090F-472A-92CD-BFFDA744F5C5",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "19008000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "f48e34a3-d808-406e-911d-c5b9fd05e693"
            ],
            [
              "hash"  =>   "F8CFFE64-581E-4EE1-8B51-F4EFEAA53366",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "19008000000000002000",
              "ten_chuong"  =>   "Chương II XÂY DỰNG, CÔNG BỐ VÀ ÁP DỤNG TIÊU CHUẨN",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "f48e34a3-d808-406e-911d-c5b9fd05e693"
            ],
            [
              "hash"  =>   "87FFDA10-7A3E-49A8-8BD5-66F9A00B9B57",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "19008000000000003000",
              "ten_chuong"  =>   "Chương III XÂY DỰNG, BAN HÀNH VÀ ÁP DỤNG QUY CHUẨN KỸ THUẬT",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "f48e34a3-d808-406e-911d-c5b9fd05e693"
            ],
            [
              "hash"  =>   "FD4F56A9-0BC0-4B78-BAED-4A8E1C00ED54",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "19008000000000004000",
              "ten_chuong"  =>   "Chương IV ĐÁNH GIÁ SỰ PHÙ HỢP VỚI TIÊU CHUẨN VÀ QUY CHUẨN KỸ THUẬT",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "f48e34a3-d808-406e-911d-c5b9fd05e693"
            ],
            [
              "hash"  =>   "11B453F2-BF4F-41CF-AD58-7676C4846678",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "19008000000000005000",
              "ten_chuong"  =>   "Chương V TRÁCH NHIỆM CỦA CƠ QUAN, TỔ CHỨC, CÁ NHÂN HOẠT ĐỘNG TRONG LĨNH VỰC TIÊU CHUẨN VÀ LĨNH VỰC QUY CHUẨN KỸ THUẬT",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "f48e34a3-d808-406e-911d-c5b9fd05e693"
            ],
            [
              "hash"  =>   "73D48CD2-5F01-4D73-BFB4-F5EC48D6A6C5",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "19008000000000006000",
              "ten_chuong"  =>   "Chương VI THANH TRA, XỬ LÝ VI PHẠM, GIẢI QUYẾT KHIẾU NẠI, TỐ CÁO VÀ TRANH CHẤP VỀ HOẠT ĐỘNG TRONG LĨNH VỰC TIÊU CHUẨN VÀ LĨNH VỰC QUY CHUẨN KỸ THUẬT",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "f48e34a3-d808-406e-911d-c5b9fd05e693"
            ],
            [
              "hash"  =>   "682CAC88-BE35-4496-857C-6EBC0B08CF02",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "19008000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "3f0ce861-9980-43c9-9dcc-8e064c536bee",
              "hash_de_muc"  =>   "f48e34a3-d808-406e-911d-c5b9fd05e693"
            ],
            [
              "hash"  =>   "7F9CC884-4034-4F89-B7CE-EA429EF225A4",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "20001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "985838c2-d5e2-423d-9253-7f95ea82af57"
            ],
            [
              "hash"  =>   "362429AC-9C3D-4A8F-AAB6-543AB290339F",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "20001000000000002000",
              "ten_chuong"  =>   "Chương II CƠ SỞ GIÁO DỤC NGHỀ NGHIỆP",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "985838c2-d5e2-423d-9253-7f95ea82af57"
            ],
            [
              "hash"  =>   "D353E96E-FB90-4F2E-885E-CEE9D7932583",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "20001000000000003000",
              "ten_chuong"  =>   "Chương III HOẠT ĐỘNG ĐÀO TẠO VÀ HỢP TÁC QUỐC TẾ  TRONG GIÁO DỤC NGHỀ NGHIỆP",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "985838c2-d5e2-423d-9253-7f95ea82af57"
            ],
            [
              "hash"  =>   "A84CB0D9-AF95-4ED7-A205-98ACB0EF8CA0",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "20001000000000004000",
              "ten_chuong"  =>   "Chương IV QUYỀN VÀ TRÁCH NHIỆM CỦA DOANH NGHIỆP TRONG HOẠT ĐỘNG GIÁO DỤC NGHỀ NGHIỆP",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "985838c2-d5e2-423d-9253-7f95ea82af57"
            ],
            [
              "hash"  =>   "FF71A756-ED7F-40F1-AB31-B69B1BE921E9",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "20001000000000005000",
              "ten_chuong"  =>   "Chương V NHÀ GIÁO VÀ NGƯỜI HỌC",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "985838c2-d5e2-423d-9253-7f95ea82af57"
            ],
            [
              "hash"  =>   "2286B1EF-E6ED-4AB1-9FCD-949CE01101C6",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "20001000000000006000",
              "ten_chuong"  =>   "Chương VI KIỂM ĐỊNH CHẤT LƯỢNG GIÁO DỤC NGHỀ NGHIỆP",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "985838c2-d5e2-423d-9253-7f95ea82af57"
            ],
            [
              "hash"  =>   "FE0C29A4-2DF5-4839-BAE2-526B7241C1AA",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "20001000000000007000",
              "ten_chuong"  =>   "Chương VII QUẢN LÝ NHÀ NƯỚC VỀ GIÁO DỤC NGHỀ NGHIỆP",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "985838c2-d5e2-423d-9253-7f95ea82af57"
            ],
            [
              "hash"  =>   "318AFDEC-2E7E-488C-B16E-96F96171F282",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "20001000000000008000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "985838c2-d5e2-423d-9253-7f95ea82af57"
            ],
            [
              "hash"  =>   "0D7BED3B-D4B3-4653-926E-DDA07F9A9742",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "20002000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "2efd8c6f-509f-4207-84b6-6b22ff780f2a"
            ],
            [
              "hash"  =>   "A5EC74F5-D8CB-44F5-A5ED-202900545A2E",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "20002000000000002000",
              "ten_chuong"  =>   "Chương II VIỆC LÀM, TUYỂN DỤNG VÀ QUẢN LÝ LAO ĐỘNG",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "2efd8c6f-509f-4207-84b6-6b22ff780f2a"
            ],
            [
              "hash"  =>   "5F0D15A2-EAF3-4423-8B48-5B62892989BF",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "20002000000000003000",
              "ten_chuong"  =>   "Chương III HỢP ĐỒNG LAO ĐỘNG",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "2efd8c6f-509f-4207-84b6-6b22ff780f2a"
            ],
            [
              "hash"  =>   "E7FA1FE3-6D32-4AEF-9246-DECD3924E6C3",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "20002000000000004000",
              "ten_chuong"  =>   "Chương IV GIÁO DỤC NGHỀ NGHIỆP VÀ PHÁT TRIỂN KỸ NĂNG NGHỀ",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "2efd8c6f-509f-4207-84b6-6b22ff780f2a"
            ],
            [
              "hash"  =>   "4C1968F3-9687-4921-960F-4FCB30977B55",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "20002000000000005000",
              "ten_chuong"  =>   "Chương V ĐỐI THOẠI TẠI NƠI LÀM VIỆC, THƯƠNG LƯỢNG TẬP THỂ, THỎA ƯỚC LAO ĐỘNG TẬP THỂ",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "2efd8c6f-509f-4207-84b6-6b22ff780f2a"
            ],
            [
              "hash"  =>   "BDD26C3B-D0F1-409A-A44D-B1BF25160661",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "20002000000000006000",
              "ten_chuong"  =>   "Chương VI TIỀN LƯƠNG",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "2efd8c6f-509f-4207-84b6-6b22ff780f2a"
            ],
            [
              "hash"  =>   "4185F2EE-886F-4A26-8E23-B499AEB10564",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "20002000000000007000",
              "ten_chuong"  =>   "Chương VII THỜI GIỜ LÀM VIỆC, THỜI GIỜ NGHỈ NGƠI",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "2efd8c6f-509f-4207-84b6-6b22ff780f2a"
            ],
            [
              "hash"  =>   "384BE105-B747-4F46-998A-D9D492F7F325",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "20002000000000008000",
              "ten_chuong"  =>   "Chương VIII KỶ LUẬT LAO ĐỘNG, TRÁCH NHIỆM VẬT CHẤT",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "2efd8c6f-509f-4207-84b6-6b22ff780f2a"
            ],
            [
              "hash"  =>   "A967E6E7-B97D-4345-8DD0-24084BA262A5",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "20002000000000009000",
              "ten_chuong"  =>   "Chương IX AN TOÀN, VỆ SINH LAO ĐỘNG",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "2efd8c6f-509f-4207-84b6-6b22ff780f2a"
            ],
            [
              "hash"  =>   "23F4D19E-0E82-4750-AF56-1B8C3F414D4E",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "20002000000000010000",
              "ten_chuong"  =>   "Chương X NHỮNG QUY ĐỊNH RIÊNG ĐỐI VỚI LAO ĐỘNG NỮ VÀ BẢO ĐẢM BÌNH ĐẲNG GIỚI",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "2efd8c6f-509f-4207-84b6-6b22ff780f2a"
            ],
            [
              "hash"  =>   "87D57611-CF71-4849-95AF-085175DE12CA",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "20002000000000011000",
              "ten_chuong"  =>   "Chương XI NHỮNG QUY ĐỊNH RIÊNG ĐỐI VỚI LAO ĐỘNG CHƯA THÀNH NIÊN VÀ MỘT SỐ LAO ĐỘNG KHÁC",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "2efd8c6f-509f-4207-84b6-6b22ff780f2a"
            ],
            [
              "hash"  =>   "67190B71-4DB1-42B9-9311-682C38BB8843",
              "so_thu_tu"  =>   12,
              "MAPC"  =>   "20002000000000012000",
              "ten_chuong"  =>   "Chương XII BẢO HIỂM XÃ HỘI, BẢO HIỂM Y TẾ, BẢO HIỂM THẤT NGHIỆP",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "2efd8c6f-509f-4207-84b6-6b22ff780f2a"
            ],
            [
              "hash"  =>   "56B7AFCE-C677-47C0-A549-68B924228CA1",
              "so_thu_tu"  =>   13,
              "MAPC"  =>   "20002000000000013000",
              "ten_chuong"  =>   "Chương XIII TỔ CHỨC ĐẠI DIỆN NGƯỜI LAO ĐỘNG TẠI CƠ SỞ",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "2efd8c6f-509f-4207-84b6-6b22ff780f2a"
            ],
            [
              "hash"  =>   "49CF1CF8-8129-4FE7-8ACE-26D809CFDD9F",
              "so_thu_tu"  =>   14,
              "MAPC"  =>   "20002000000000014000",
              "ten_chuong"  =>   "Chương XIV GIẢI QUYẾT TRANH CHẤP LAO ĐỘNG",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "2efd8c6f-509f-4207-84b6-6b22ff780f2a"
            ],
            [
              "hash"  =>   "ADD826A9-0D5E-43C1-B984-574D80C9FB9B",
              "so_thu_tu"  =>   15,
              "MAPC"  =>   "20002000000000015000",
              "ten_chuong"  =>   "Chương XV QUẢN LÝ NHÀ NƯỚC VỀ LAO ĐỘNG",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "2efd8c6f-509f-4207-84b6-6b22ff780f2a"
            ],
            [
              "hash"  =>   "704942F6-029E-494A-ACD2-E0E06B63DF27",
              "so_thu_tu"  =>   16,
              "MAPC"  =>   "20002000000000016000",
              "ten_chuong"  =>   "Chương XVI THANH TRA LAO ĐỘNG, XỬ LÝ VI PHẠM PHÁP LUẬT VỀ LAO ĐỘNG",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "2efd8c6f-509f-4207-84b6-6b22ff780f2a"
            ],
            [
              "hash"  =>   "3FC2524E-2ADA-4BB1-A72D-F930DA282BAB",
              "so_thu_tu"  =>   17,
              "MAPC"  =>   "20002000000000017000",
              "ten_chuong"  =>   "Chương XVII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "2efd8c6f-509f-4207-84b6-6b22ff780f2a"
            ],
            [
              "hash"  =>   "C1AA750D-9B6E-4CCE-827E-40347E61E4D2",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "20004000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "916a0b51-9d2e-4256-be6e-14c2e4b059ae"
            ],
            [
              "hash"  =>   "C7E1100F-5159-4394-B405-5C08526EE52C",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "20004000000000002000",
              "ten_chuong"  =>   "Chương II CHÍNH SÁCH HỖ TRỢ TẠO VIỆC LÀM",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "916a0b51-9d2e-4256-be6e-14c2e4b059ae"
            ],
            [
              "hash"  =>   "4E06FA1A-FFD6-47BD-B0E5-21825DA6F1B6",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "20004000000000003000",
              "ten_chuong"  =>   "Chương III THÔNG TIN THỊ TRƯỜNG LAO ĐỘNG",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "916a0b51-9d2e-4256-be6e-14c2e4b059ae"
            ],
            [
              "hash"  =>   "F823823A-32B0-47A7-8D66-EE5C4C4D4B50",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "20004000000000004000",
              "ten_chuong"  =>   "Chương IV ĐÁNH GIÁ, CẤP CHỨNG CHỈ KỸ NĂNG NGHỀ QUỐC GIA",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "916a0b51-9d2e-4256-be6e-14c2e4b059ae"
            ],
            [
              "hash"  =>   "968F98C7-7316-44BC-A143-9B35815113C8",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "20004000000000005000",
              "ten_chuong"  =>   "Chương V TỔ CHỨC VÀ HOẠT ĐỘNG DỊCH VỤ VIỆC LÀM",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "916a0b51-9d2e-4256-be6e-14c2e4b059ae"
            ],
            [
              "hash"  =>   "B5642AC2-F9C4-4E55-B287-BEDE550D1B95",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "20004000000000006000",
              "ten_chuong"  =>   "Chương VI BẢO HIỂM THẤT NGHIỆP",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "916a0b51-9d2e-4256-be6e-14c2e4b059ae"
            ],
            [
              "hash"  =>   "3C3817A6-6A59-48BB-85F6-5544EC9BF74A",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "20004000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "916a0b51-9d2e-4256-be6e-14c2e4b059ae"
            ],
            [
              "hash"  =>   "7489882B-7CA0-4C15-9429-39FDCAE53556",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "20005000000000001000",
              "ten_chuong"  =>   "Chương I QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "b10e4fa0-bfe1-42c1-8ff0-0af74ec834ed"
            ],
            [
              "hash"  =>   "D49504B4-FE39-4D6E-A711-3A1231BAACCD",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "20005000000000002000",
              "ten_chuong"  =>   "Chương II CÁC BIỆN PHÁP PHÒNG, CHỐNG CÁC YẾU TỐ NGUY HIỂM, YẾU TỐ CÓ HẠI CHO NGƯỜI LAO ĐỘNG",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "b10e4fa0-bfe1-42c1-8ff0-0af74ec834ed"
            ],
            [
              "hash"  =>   "7FE24736-D88A-4F6B-8E6B-DFF1AD1BB047",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "20005000000000003000",
              "ten_chuong"  =>   "Chương III CÁC BIỆN PHÁP XỬ LÝ SỰ CỐ KỸ THUẬT GÂY MẤT AN TOÀN, VỆ SINH LAO ĐỘNG VÀ TAI NẠN LAO ĐỘNG, BỆNH NGHỀ NGHIỆP",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "b10e4fa0-bfe1-42c1-8ff0-0af74ec834ed"
            ],
            [
              "hash"  =>   "70C31805-DCBF-46B6-8250-13602230FE98",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "20005000000000004000",
              "ten_chuong"  =>   "Chương IV BẢO ĐẢM AN TOÀN, VỆ SINH LAO ĐỘNG ĐỐI VỚI MỘT SỐ LAO ĐỘNG ĐẶC THÙ",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "b10e4fa0-bfe1-42c1-8ff0-0af74ec834ed"
            ],
            [
              "hash"  =>   "3446F5BD-C769-4787-AA1D-245ECEE8E203",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "20005000000000005000",
              "ten_chuong"  =>   "Chương V BẢO ĐẢM AN TOÀN, VỆ SINH LAO ĐỘNG ĐỐI VỚI CƠ SỞ SẢN XUẤT, KINH DOANH",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "b10e4fa0-bfe1-42c1-8ff0-0af74ec834ed"
            ],
            [
              "hash"  =>   "6227F72B-882F-4CB9-96C5-DDEB619A9229",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "20005000000000006000",
              "ten_chuong"  =>   "Chương VI QUẢN LÝ NHÀ NƯỚC VỀ AN TOÀN, VỆ SINH LAO ĐỘNG",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "b10e4fa0-bfe1-42c1-8ff0-0af74ec834ed"
            ],
            [
              "hash"  =>   "8142DE09-EE50-49F3-AA75-7487F45C94CD",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "20005000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "ed53d710-e3ae-4741-abc7-0f5dd82dec24",
              "hash_de_muc"  =>   "b10e4fa0-bfe1-42c1-8ff0-0af74ec834ed"
            ],
            [
              "hash"  =>   "0AC1863B-B822-4EFF-8B99-1FB91B5F6D22",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "21002000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "1657cd3c-c513-4df5-ae6b-e39a778c640d",
              "hash_de_muc"  =>   "ff7a2466-8f89-4d2b-9031-b99e8ca02a4a"
            ],
            [
              "hash"  =>   "0A8A1734-EAAD-4D6C-B81A-156DB64AFBCB",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "21002000000000002000",
              "ten_chuong"  =>   "Chương II QUY HOẠCH BẢO TỒN ĐA DẠNG SINH HỌC",
              "hash_chu_de"  =>   "1657cd3c-c513-4df5-ae6b-e39a778c640d",
              "hash_de_muc"  =>   "ff7a2466-8f89-4d2b-9031-b99e8ca02a4a"
            ],
            [
              "hash"  =>   "6F15855F-C6C1-4D9E-8534-F0ED105E35A2",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "21002000000000003000",
              "ten_chuong"  =>   "Chương III BẢO TỒN VÀ PHÁT TRIỂN BỀN VỮNG HỆ SINH THÁI TỰ NHIÊN",
              "hash_chu_de"  =>   "1657cd3c-c513-4df5-ae6b-e39a778c640d",
              "hash_de_muc"  =>   "ff7a2466-8f89-4d2b-9031-b99e8ca02a4a"
            ],
            [
              "hash"  =>   "8E9FC81B-05E4-48AC-A22B-5ED466150942",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "21002000000000004000",
              "ten_chuong"  =>   "Chương IV BẢO TỒN VÀ PHÁT TRIỂN BỀN VỮNG CÁC LOÀI SINH VẬT",
              "hash_chu_de"  =>   "1657cd3c-c513-4df5-ae6b-e39a778c640d",
              "hash_de_muc"  =>   "ff7a2466-8f89-4d2b-9031-b99e8ca02a4a"
            ],
            [
              "hash"  =>   "D58686FF-84BA-48C3-8A54-8F672FA5BE27",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "21002000000000005000",
              "ten_chuong"  =>   "Chương V BẢO TỒN VÀ PHÁT TRIỂN BỀN VỮNG TÀI NGUYÊN DI TRUYỀN",
              "hash_chu_de"  =>   "1657cd3c-c513-4df5-ae6b-e39a778c640d",
              "hash_de_muc"  =>   "ff7a2466-8f89-4d2b-9031-b99e8ca02a4a"
            ],
            [
              "hash"  =>   "C44CDF2E-2576-4961-A314-D0770E580D53",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "21002000000000006000",
              "ten_chuong"  =>   "Chương VI HỢP TÁC QUỐC TẾ VỀ ĐA DẠNG SINH HỌC",
              "hash_chu_de"  =>   "1657cd3c-c513-4df5-ae6b-e39a778c640d",
              "hash_de_muc"  =>   "ff7a2466-8f89-4d2b-9031-b99e8ca02a4a"
            ],
            [
              "hash"  =>   "5669E067-CFA2-477C-B944-86358C9A407C",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "21002000000000007000",
              "ten_chuong"  =>   "Chương VII CƠ CHẾ, NGUỒN LỰC BẢO TỒN VÀ PHÁT TRIỂN BỀN VỮNG ĐA DẠNG SINH HỌC",
              "hash_chu_de"  =>   "1657cd3c-c513-4df5-ae6b-e39a778c640d",
              "hash_de_muc"  =>   "ff7a2466-8f89-4d2b-9031-b99e8ca02a4a"
            ],
            [
              "hash"  =>   "3BDB1363-550E-47C9-B41D-6D62CBFF90CF",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "21002000000000008000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "1657cd3c-c513-4df5-ae6b-e39a778c640d",
              "hash_de_muc"  =>   "ff7a2466-8f89-4d2b-9031-b99e8ca02a4a"
            ],
            [
              "hash"  =>   "F1B1A4E5-AB9A-4EDA-8FA8-8D0B3B09829D",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "22001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "93c2e70c-57d6-4c12-8911-b345dcb69597"
            ],
            [
              "hash"  =>   "1058E1E7-5BFE-479E-A1A1-F7FD4D75E2A4",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "22001000000000002000",
              "ten_chuong"  =>   "Chương II QUYỀN, NGHĨA VỤ CỦA NGƯỜI ĐƯỢC BẢO HIỂM TIỀN GỬI, TỔ CHỨC THAM GIA BẢO HIỂM TIỀN GỬI, TỔ CHỨC BẢO HIỂM TIỀN GỬI",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "93c2e70c-57d6-4c12-8911-b345dcb69597"
            ],
            [
              "hash"  =>   "3680874F-41AF-49A3-A880-74067862D27D",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "22001000000000003000",
              "ten_chuong"  =>   "Chương III HOẠT ĐỘNG BẢO HIỂM TIỀN GỬI",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "93c2e70c-57d6-4c12-8911-b345dcb69597"
            ],
            [
              "hash"  =>   "CEB48DD3-8C50-4411-A529-9CEF94B9EF6B",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "22001000000000004000",
              "ten_chuong"  =>   "Chương IV TỔ CHỨC BẢO HIỂM TIỀN GỬI",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "93c2e70c-57d6-4c12-8911-b345dcb69597"
            ],
            [
              "hash"  =>   "CBE9995D-A0E7-474B-B847-45FDA56A5B10",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "22001000000000005000",
              "ten_chuong"  =>   "Chương V HOẠT ĐỘNG THÔNG TIN, BÁO CÁO",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "93c2e70c-57d6-4c12-8911-b345dcb69597"
            ],
            [
              "hash"  =>   "C140AF89-0DA2-4F23-9635-18117AE5962E",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "22001000000000006000",
              "ten_chuong"  =>   "Chương VI THANH TRA, KHIẾU NẠI VỀ BẢO HIỂM TIỀN GỬI",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "93c2e70c-57d6-4c12-8911-b345dcb69597"
            ],
            [
              "hash"  =>   "CCC8C165-E592-409A-A420-141A9D59DB3D",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "22001000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "93c2e70c-57d6-4c12-8911-b345dcb69597"
            ],
            [
              "hash"  =>   "3917FEAA-7532-43ED-AE0D-708511C376BC",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "22002000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "d8e4a3a0-254c-4593-967c-214ae12bcb0f"
            ],
            [
              "hash"  =>   "F49C79DE-7E68-4EB9-8B7E-5C398D45B5E7",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "22002000000000002000",
              "ten_chuong"  =>   "Chương II HỐI PHIẾU ĐÒI NỢ",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "d8e4a3a0-254c-4593-967c-214ae12bcb0f"
            ],
            [
              "hash"  =>   "85107CEE-5AF4-4254-A164-E060A7C5E72B",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "22002000000000003000",
              "ten_chuong"  =>   "Chương III HỐI PHIẾU NHẬN NỢ",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "d8e4a3a0-254c-4593-967c-214ae12bcb0f"
            ],
            [
              "hash"  =>   "9AF3DA6B-D136-4495-893A-CAF109855ED4",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "22002000000000004000",
              "ten_chuong"  =>   "Chương IV SÉC",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "d8e4a3a0-254c-4593-967c-214ae12bcb0f"
            ],
            [
              "hash"  =>   "36405B08-4F70-493D-8481-CC250A0D2650",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "22002000000000005000",
              "ten_chuong"  =>   "Chương V KHỞI KIỆN, THANH TRA VÀ XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "d8e4a3a0-254c-4593-967c-214ae12bcb0f"
            ],
            [
              "hash"  =>   "A45C47AA-BDF1-4106-B1AC-DE03460A52CB",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "22002000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "d8e4a3a0-254c-4593-967c-214ae12bcb0f"
            ],
            [
              "hash"  =>   "F702F4D4-E05E-4FDD-B197-A596DA9BFE32",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "22003000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "2afc8615-c2a3-4d3a-b77a-fd4f71142375"
            ],
            [
              "hash"  =>   "4893153C-EFC8-4E7F-ADF6-990DB4B7FFC5",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "22003000000000002000",
              "ten_chuong"  =>   "Chương II GIẤY PHÉP",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "2afc8615-c2a3-4d3a-b77a-fd4f71142375"
            ],
            [
              "hash"  =>   "7587B446-588F-49A6-8E62-53254B0F450B",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "22003000000000003000",
              "ten_chuong"  =>   "Chương III TỔ CHỨC, QUẢN TRỊ, ĐIỀU HÀNH CỦA TỔ CHỨC TÍN DỤNG",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "2afc8615-c2a3-4d3a-b77a-fd4f71142375"
            ],
            [
              "hash"  =>   "A15E8258-55D7-4E7C-A98F-1F9AC6436855",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "22003000000000004000",
              "ten_chuong"  =>   "Chương IV HOẠT ĐỘNG CỦA TỔ CHỨC TÍN DỤNG",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "2afc8615-c2a3-4d3a-b77a-fd4f71142375"
            ],
            [
              "hash"  =>   "C52C2D5E-8BCF-4DFA-987B-89292C9C1AB7",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "22003000000000005000",
              "ten_chuong"  =>   "Chương V VĂN PHÒNG ĐẠI DIỆN CỦA TỔ CHỨC TÍN DỤNG NƯỚC NGOÀI, TỔ CHỨC NƯỚC NGOÀI KHÁC CÓ HOẠT ĐỘNG NGÂN HÀNG",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "2afc8615-c2a3-4d3a-b77a-fd4f71142375"
            ],
            [
              "hash"  =>   "463536CF-6727-4259-8BE2-7848E208FC8D",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "22003000000000006000",
              "ten_chuong"  =>   "Chương VI CÁC HẠN CHẾ ĐỂ BẢO ĐẢM AN TOÀN TRONG HOẠT ĐỘNG CỦA TỔ CHỨC TÍN DỤNG",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "2afc8615-c2a3-4d3a-b77a-fd4f71142375"
            ],
            [
              "hash"  =>   "DC0B6DA4-5DF6-4DEE-A82A-4653B2320522",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "22003000000000007000",
              "ten_chuong"  =>   "Chương VII TÀI CHÍNH, HẠCH TOÁN, BÁO CÁO",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "2afc8615-c2a3-4d3a-b77a-fd4f71142375"
            ],
            [
              "hash"  =>   "459157F0-26EF-4456-8AD0-29F3D741205B",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "22003000000000008000",
              "ten_chuong"  =>   "Chương VIII KIỂM SOÁT ĐẶC BIỆT, TỔ CHỨC LẠI, PHÁ SẢN, GIẢI THỂ, THANH LÝ TỔ CHỨC TÍN DỤNG",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "2afc8615-c2a3-4d3a-b77a-fd4f71142375"
            ],
            [
              "hash"  =>   "38802B57-9131-416D-9CC4-8FF42E860322",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "22003000000000009000",
              "ten_chuong"  =>   "Chương IX CƠ QUAN QUẢN LÝ NHÀ NƯỚC",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "2afc8615-c2a3-4d3a-b77a-fd4f71142375"
            ],
            [
              "hash"  =>   "015A9CA8-1BD1-4E44-AB53-9812CBFAB17D",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "22003000000000009500",
              "ten_chuong"  =>   "Chương X CÔNG TY QUẢN LÝ TÀI SẢN CỦA CÁC TỔ CHỨC TÍN DỤNG VIỆT NAM",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "2afc8615-c2a3-4d3a-b77a-fd4f71142375"
            ],
            [
              "hash"  =>   "1A98937D-C8A1-410E-823E-CFCBAAFB754C",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "22003000000000010000",
              "ten_chuong"  =>   "Chương XI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "2afc8615-c2a3-4d3a-b77a-fd4f71142375"
            ],
            [
              "hash"  =>   "F440A516-98DC-428E-A507-4D01E8387911",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "22004000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "3fc237d4-1e47-4b5e-a651-aa7e2002bc48"
            ],
            [
              "hash"  =>   "E94625D7-DAEC-46E3-A5A0-F85C5AF9664B",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "22004000000000002000",
              "ten_chuong"  =>   "Chương II TỔ CHỨC CỦA NGÂN HÀNG NHÀ NƯỚC",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "3fc237d4-1e47-4b5e-a651-aa7e2002bc48"
            ],
            [
              "hash"  =>   "5D875A01-C758-4AE4-8B18-5578580B2C02",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "22004000000000003000",
              "ten_chuong"  =>   "Chương III HOẠT ĐỘNG CỦA NGÂN HÀNG NHÀ NƯỚC",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "3fc237d4-1e47-4b5e-a651-aa7e2002bc48"
            ],
            [
              "hash"  =>   "517D12C1-9255-49E5-BCC4-86E72798341B",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "22004000000000004000",
              "ten_chuong"  =>   "Chương IV TÀI CHÍNH, KẾ TOÁN CỦA NGÂN HÀNG NHÀ NƯỚC",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "3fc237d4-1e47-4b5e-a651-aa7e2002bc48"
            ],
            [
              "hash"  =>   "BE1713E2-7886-445A-BDAA-F96E82F63327",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "22004000000000005000",
              "ten_chuong"  =>   "Chương V THANH TRA, GIÁM SÁT NGÂN HÀNG",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "3fc237d4-1e47-4b5e-a651-aa7e2002bc48"
            ],
            [
              "hash"  =>   "7F8A8126-BC02-479F-B666-68B11E22BCC7",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "22004000000000006000",
              "ten_chuong"  =>   "Chương VI KIỂM TOÁN NỘI BỘ",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "3fc237d4-1e47-4b5e-a651-aa7e2002bc48"
            ],
            [
              "hash"  =>   "9D5ED55B-D414-46AA-ADBD-F58A5C02B1F3",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "22004000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "3fc237d4-1e47-4b5e-a651-aa7e2002bc48"
            ],
            [
              "hash"  =>   "D8C1C880-E2C2-4A06-804B-E188C358FB05",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "22005000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "da0b1767-9a75-469a-b2d9-47038a564c65"
            ],
            [
              "hash"  =>   "07816F44-1568-4A68-9536-EF8CE42F0E5C",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "22005000000000002000",
              "ten_chuong"  =>   "Chương II CÁC GIAO DỊCH VÃNG LAI",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "da0b1767-9a75-469a-b2d9-47038a564c65"
            ],
            [
              "hash"  =>   "1FD5ACFE-4F51-41EE-AA22-D95DD05A52B0",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "22005000000000003000",
              "ten_chuong"  =>   "Chương III CÁC GIAO DỊCH VỐN",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "da0b1767-9a75-469a-b2d9-47038a564c65"
            ],
            [
              "hash"  =>   "C76D236E-84B9-4F10-AB0D-D58BBE836229",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "22005000000000004000",
              "ten_chuong"  =>   "Chương IV SỬ DỤNG NGOẠI HỐI TRÊN LÃNH THỔ VIỆT NAM",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "da0b1767-9a75-469a-b2d9-47038a564c65"
            ],
            [
              "hash"  =>   "A522BE6B-DBEE-4894-B3C7-34AF768316EF",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "22005000000000005000",
              "ten_chuong"  =>   "Chương V THỊ TRƯỜNG NGOẠI TỆ, CƠ CHẾ TỶ GIÁ HỐI ĐOÁI, QUẢN LÝ VÀNG LÀ NGOẠI HỐI",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "da0b1767-9a75-469a-b2d9-47038a564c65"
            ],
            [
              "hash"  =>   "CC0253CE-9905-4099-B443-9669BA737D9B",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "22005000000000006000",
              "ten_chuong"  =>   "Chương VI QUẢN LÝ DỰ TRỮ NGOẠI HỐI NHÀ NƯỚC",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "da0b1767-9a75-469a-b2d9-47038a564c65"
            ],
            [
              "hash"  =>   "ACEEF686-9531-4A3B-839F-6DCEF8CB0C71",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "22005000000000007000",
              "ten_chuong"  =>   "Chương VII HOẠT ĐỘNG KINH DOANH, CUNG ỨNG DỊCH VỤ NGOẠI HỐI CỦA CÁC TỔ CHỨC TÍN DỤNG, CHI NHÁNH NGÂN HÀNG NƯỚC NGOÀI VÀ CÁC TỔ CHỨC KHÁC",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "da0b1767-9a75-469a-b2d9-47038a564c65"
            ],
            [
              "hash"  =>   "43369C2A-C430-466A-98C9-924AF47CBE5F",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "22005000000000008000",
              "ten_chuong"  =>   "Chương VIII QUẢN LÝ NHÀ NƯỚC VỀ HOẠT ĐỘNG NGOẠI HỐI",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "da0b1767-9a75-469a-b2d9-47038a564c65"
            ],
            [
              "hash"  =>   "01E6C427-FF29-4513-91E8-B2294401B6E8",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "22005000000000009000",
              "ten_chuong"  =>   "Chương IX KHIẾU NẠI, TỐ CÁO, KHỞI KIỆN VÀ XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "da0b1767-9a75-469a-b2d9-47038a564c65"
            ],
            [
              "hash"  =>   "FE05CC69-73D4-49D9-9085-6DBD2E6579C5",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "22005000000000010000",
              "ten_chuong"  =>   "Chương X ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "0f8741e9-b3d2-488b-aa70-961ccc802227",
              "hash_de_muc"  =>   "da0b1767-9a75-469a-b2d9-47038a564c65"
            ],
            [
              "hash"  =>   "13FD0640-B8E6-4CAE-AE4E-6CC9EC439A1D",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "23001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "c281cd7b-893d-4490-b9da-b226d670363c"
            ],
            [
              "hash"  =>   "B4353448-44C0-4C2F-A5FF-F760D84BD1DD",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "23001000000000002000",
              "ten_chuong"  =>   "Chương II NHIỆM VỤ, QUYỀN HẠN CỦA CƠ QUAN ĐẠI DIỆN",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "c281cd7b-893d-4490-b9da-b226d670363c"
            ],
            [
              "hash"  =>   "746BA726-5C69-46EA-AE97-E62EC311CD34",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "23001000000000003000",
              "ten_chuong"  =>   "Chương III TỔ CHỨC BỘ MÁY, BIÊN CHẾ, KINH PHÍ VÀ TRỤ SỞ CỦA CƠ QUAN ĐẠI DIỆN",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "c281cd7b-893d-4490-b9da-b226d670363c"
            ],
            [
              "hash"  =>   "03DD9BE3-C34C-479B-8A59-1349504426D3",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "23001000000000004000",
              "ten_chuong"  =>   "Chương IV THÀNH VIÊN CƠ QUAN ĐẠI DIỆN",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "c281cd7b-893d-4490-b9da-b226d670363c"
            ],
            [
              "hash"  =>   "7D277B94-4934-4FC8-AFF4-50662F9FAC5F",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "23001000000000005000",
              "ten_chuong"  =>   "Chương V CHỈ ĐẠO, QUẢN LÝ, GIÁM SÁT VÀ PHỐI HỢP CÔNG TÁC ĐỐI VỚI CƠ QUAN ĐẠI DIỆN",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "c281cd7b-893d-4490-b9da-b226d670363c"
            ],
            [
              "hash"  =>   "6911D706-350B-4400-8E6D-B3AD8E1C2DB0",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "23001000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "c281cd7b-893d-4490-b9da-b226d670363c"
            ],
            [
              "hash"  =>   "6E7BA796-4428-4BAC-9A32-3CE4EF9878F7",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "23004000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "d87ac709-a919-4bdb-8777-9696f549c433"
            ],
            [
              "hash"  =>   "665261F9-1720-40D1-8FA8-9F0DC0229455",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "23004000000000002000",
              "ten_chuong"  =>   "Chương II KÝ KẾT ĐIỀU ƯỚC QUỐC TẾ",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "d87ac709-a919-4bdb-8777-9696f549c433"
            ],
            [
              "hash"  =>   "5CC16FE9-07C6-4C4E-B8E7-420C4214C2B6",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "23004000000000003000",
              "ten_chuong"  =>   "Chương III BẢO LƯU ĐIỀU ƯỚC QUỐC TẾ",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "d87ac709-a919-4bdb-8777-9696f549c433"
            ],
            [
              "hash"  =>   "BD4519B4-6E0D-4664-8548-66E8DB00EFC7",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "23004000000000004000",
              "ten_chuong"  =>   "Chương IV HIỆU LỰC, SỬA ĐỔI, BỔ SUNG, GIA HẠN ĐIỀU ƯỚC QUỐC TẾ",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "d87ac709-a919-4bdb-8777-9696f549c433"
            ],
            [
              "hash"  =>   "A0663CE0-E27B-4CCD-9BE8-168786A69A20",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "23004000000000005000",
              "ten_chuong"  =>   "Chương V LƯU CHIỂU, LƯU TRỮ, SAO LỤC, ĐĂNG TẢI ĐIỀU ƯỚC QUỐC TẾ",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "d87ac709-a919-4bdb-8777-9696f549c433"
            ],
            [
              "hash"  =>   "68114CC0-32B5-4EC9-A6AF-9CA533040DDC",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "23004000000000006000",
              "ten_chuong"  =>   "Chương VI THỦ TỤC ĐỐI NGOẠI",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "d87ac709-a919-4bdb-8777-9696f549c433"
            ],
            [
              "hash"  =>   "ADA2A524-642C-42CD-B0C5-0B77BE65332C",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "23004000000000007000",
              "ten_chuong"  =>   "Chương VII TRÌNH TỰ, THỦ TỤC RÚT GỌN",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "d87ac709-a919-4bdb-8777-9696f549c433"
            ],
            [
              "hash"  =>   "87956C34-8D68-456A-AA8F-783B47093441",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "23004000000000008000",
              "ten_chuong"  =>   "Chương VIII TỔ CHỨC THỰC HIỆN ĐIỀU ƯỚC QUỐC TẾ",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "d87ac709-a919-4bdb-8777-9696f549c433"
            ],
            [
              "hash"  =>   "80B3DA1D-00A7-444B-A4B7-B5B29926146D",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "23004000000000009000",
              "ten_chuong"  =>   "Chương IX QUẢN LÝ NHÀ NƯỚC VỀ ĐIỀU ƯỚC QUỐC TẾ",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "d87ac709-a919-4bdb-8777-9696f549c433"
            ],
            [
              "hash"  =>   "4808FA02-E046-4B0E-AAE4-32AFD438708D",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "23004000000000009500",
              "ten_chuong"  =>   "Chương X QUY ĐỊNH VỀ CÔNG TÁC ĐIỀU ƯỚC QUỐC TẾ  VÀ CÔNG TÁC THỎA THUẬN QUỐC TẾ TRONG CÔNG AN NHÂN DÂN",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "d87ac709-a919-4bdb-8777-9696f549c433"
            ],
            [
              "hash"  =>   "D6DC1A55-3DE8-4A81-99A8-82ABED59FA46",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "23004000000000010000",
              "ten_chuong"  =>   "Chương XI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "d87ac709-a919-4bdb-8777-9696f549c433"
            ],
            [
              "hash"  =>   "CE77ED48-10BD-4654-8E36-136699ADC121",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "23005000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "11be5109-f55e-41ed-b890-0168cc4aacbc"
            ],
            [
              "hash"  =>   "B9954F82-5C42-45C5-B765-824BA4463156",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "23005000000000002000",
              "ten_chuong"  =>   "Chương II HÀM, CẤP NGOẠI GIAO, MỐI QUAN HỆ GIỮA HÀM NGOẠI GIAO VÀ CHỨC VỤ NGOẠI GIAO",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "11be5109-f55e-41ed-b890-0168cc4aacbc"
            ],
            [
              "hash"  =>   "A9AF6035-7D44-43B7-A104-912FA35ED2EE",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "23005000000000003000",
              "ten_chuong"  =>   "Chương III TIÊU CHUẨN CÁC HÀM NGOẠI GIAO PHONG HÀM, THĂNG HÀM, HẠ HÀM VÀ TƯỚC HÀM NGOẠI GIAO",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "11be5109-f55e-41ed-b890-0168cc4aacbc"
            ],
            [
              "hash"  =>   "B66763AC-90C1-423E-BEDA-85B57703539C",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "23005000000000004000",
              "ten_chuong"  =>   "Chương IV NGHĨA VỤ VÀ QUYỀN LỢI CỦA NGƯỜI MANG HÀM NGOẠI GIAO",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "11be5109-f55e-41ed-b890-0168cc4aacbc"
            ],
            [
              "hash"  =>   "CAAF3D78-1BEB-40E0-9A3F-67B791BC6E90",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "23005000000000005000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "11be5109-f55e-41ed-b890-0168cc4aacbc"
            ],
            [
              "hash"  =>   "EF853E5C-7351-43C5-8487-06FEBE867687",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "23006000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "a1971a0f-7216-4ee2-b312-9b376f35fbd8"
            ],
            [
              "hash"  =>   "9B54C2BD-A6B7-472F-826A-665E6B0F9039",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "23006000000000002000",
              "ten_chuong"  =>   "Chương II KÝ KẾT THỎA THUẬN QUỐC TẾ",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "a1971a0f-7216-4ee2-b312-9b376f35fbd8"
            ],
            [
              "hash"  =>   "744CA6A7-390D-4024-9344-27E91D8759B3",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "23006000000000003000",
              "ten_chuong"  =>   "Chương III HIỆU LỰC, SỬA ĐỔI, BỔ SUNG, GIA HẠN, CHẤM DỨT HIỆU LỰC, RÚT KHỎI, TẠM ĐÌNH CHỈ THỰC HIỆN THỎA THUẬN QUỐC TẾ",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "a1971a0f-7216-4ee2-b312-9b376f35fbd8"
            ],
            [
              "hash"  =>   "C7FC73ED-92DE-4B7A-A264-D51A76A6F1CC",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "23006000000000004000",
              "ten_chuong"  =>   "Chương IV TRÌNH TỰ, THỦ TỤC RÚT GỌN ",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "a1971a0f-7216-4ee2-b312-9b376f35fbd8"
            ],
            [
              "hash"  =>   "BCF24538-FA70-4C7E-A2FA-80496716792D",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "23006000000000005000",
              "ten_chuong"  =>   "Chương V THỰC HIỆN THỎA THUẬN QUỐC TẾ",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "a1971a0f-7216-4ee2-b312-9b376f35fbd8"
            ],
            [
              "hash"  =>   "E5AC2FBD-8D61-485A-842B-7928374E472F",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "23006000000000006000",
              "ten_chuong"  =>   "Chương VI TRÁCH NHIỆM CỦA CƠ QUAN NHÀ NƯỚC Ở TRUNG ƯƠNG, CƠ QUAN NHÀ NƯỚC CẤP TỈNH VÀ CƠ QUAN TRUNG ƯƠNG CỦA TỔ CHỨC, CƠ QUAN CẤP TỈNH CỦA TỔ CHỨC, CƠ QUAN QUẢN LÝ HOẠT ĐỘNG ĐỐI NGOẠI CỦA TỔ CHỨC; KINH PHÍ KÝ KẾT VÀ THỰC HIỆN THỎA THUẬN QUỐC TẾ",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "a1971a0f-7216-4ee2-b312-9b376f35fbd8"
            ],
            [
              "hash"  =>   "8A80FB5C-741B-46C1-84AA-AD1631CB8C9C",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "23006000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "a1971a0f-7216-4ee2-b312-9b376f35fbd8"
            ],
            [
              "hash"  =>   "C02DC0C6-B257-4C26-A629-84267BC4A061",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "23007000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "7d8d6ae7-3937-4b64-aa21-9f5260ea2a31"
            ],
            [
              "hash"  =>   "464720FF-6276-4305-8918-D21E3319C47A",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "23007000000000002000",
              "ten_chuong"  =>   "Chương II ĐIỀU KIỆN, THỦ TỤC CẤP, SỬA ĐỔI, GIA HẠN VÀ THU HỒI GIẤY PHÉP LẬP VĂN PHÒNG ĐẠI DIỆN",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "7d8d6ae7-3937-4b64-aa21-9f5260ea2a31"
            ],
            [
              "hash"  =>   "7A9643F4-D32E-4BE6-A0CD-8AB3238CA32F",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "23007000000000003000",
              "ten_chuong"  =>   "Chương III QUYỀN VÀ NGHĨA VỤ CỦA VĂN PHÒNG ĐẠI DIỆN",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "7d8d6ae7-3937-4b64-aa21-9f5260ea2a31"
            ],
            [
              "hash"  =>   "BE822471-87AE-4628-8BAC-CDD3D7BAE5F8",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "23007000000000004000",
              "ten_chuong"  =>   "Chương IV QUẢN LÝ NHÀ NƯỚC",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "7d8d6ae7-3937-4b64-aa21-9f5260ea2a31"
            ],
            [
              "hash"  =>   "8572E8C6-BC60-4CC1-B9CC-37A0E1B86C1E",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "23007000000000005000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "7d8d6ae7-3937-4b64-aa21-9f5260ea2a31"
            ],
            [
              "hash"  =>   "A0E9A912-509B-4D43-A294-0D0BEF3079FB",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "23008000000000001000",
              "ten_chuong"  =>   "Chương I MỘT SỐ CHÍNH SÁCH ĐỐI VỚI NGƯỜI VIỆT NAM Ở NƯỚC NGOÀI",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "04e3798c-9ab3-4896-a06a-dbc630f8d59c"
            ],
            [
              "hash"  =>   "6C646FFE-CAAD-47D7-9EEF-D2C408D663DA",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "23008000000000002000",
              "ten_chuong"  =>   "Chương II THÀNH LẬP QUỸ BẢO HỘ CÔNG DÂN VÀ PHÁP NHÂN VIỆT NAM Ở NƯỚC NGOÀI",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "04e3798c-9ab3-4896-a06a-dbc630f8d59c"
            ],
            [
              "hash"  =>   "9B62DA11-2BCC-4B38-8446-88432470F984",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "23008000000000003000",
              "ten_chuong"  =>   "Chương III QUY CHẾ TỔ CHỨC NGÀY VIỆT NAM Ở NƯỚC NGOÀI",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "04e3798c-9ab3-4896-a06a-dbc630f8d59c"
            ],
            [
              "hash"  =>   "422BC2C3-CC0F-47C6-A343-9EF7F8C65EA0",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "23008000000000004000",
              "ten_chuong"  =>   "Chương IV CHỨC NĂNG, NHIỆM VỤ, QUYỀN HẠN VÀ CƠ CẤU TỔ CHỨC CỦA ỦY BAN NHÀ NƯỚC VỀ NGƯỜI VIỆT NAM Ở NƯỚC NGOÀI TRỰC THUỘC BỘ NGOẠI GIAO",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "04e3798c-9ab3-4896-a06a-dbc630f8d59c"
            ],
            [
              "hash"  =>   "0E0A7A22-2DD9-48FB-B52D-8B5A93ACA139",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "23009000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "caa9cca3-02cc-4751-b79c-6e668f6b5e37"
            ],
            [
              "hash"  =>   "C4D67AAC-4BE3-4FA5-BD2C-22F1C3E98A52",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "23009000000000002000",
              "ten_chuong"  =>   "Chương II QUYỀN ƯU ĐÃI, MIỄN TRỪ DÀNH CHO CƠ QUAN ĐẠI DIỆN NGOẠI GIAO ",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "caa9cca3-02cc-4751-b79c-6e668f6b5e37"
            ],
            [
              "hash"  =>   "FCDEEE9C-9A8A-491B-AFBF-916E0574C8EF",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "23009000000000003000",
              "ten_chuong"  =>   "Chương III QUYỀN ƯU ĐÃI, MIỄN TRỪ DÀNH CHO CƠ QUAN LÃNH SỰ",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "caa9cca3-02cc-4751-b79c-6e668f6b5e37"
            ],
            [
              "hash"  =>   "2826C7B1-2350-433C-B2C8-266A177D9C36",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "23009000000000004000",
              "ten_chuong"  =>   "Chương IV QUYỀN ƯU ĐÃI, MIỄN TRỪ DÀNH CHO CƠ QUAN ĐẠI DIỆN CỦA TỔ CHỨC QUỐC TẾ",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "caa9cca3-02cc-4751-b79c-6e668f6b5e37"
            ],
            [
              "hash"  =>   "358A23DC-0F65-4679-BC0E-2D89103EEF98",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "23009000000000005000",
              "ten_chuong"  =>   "Chương V QUẢN LÝ NHÀ NƯỚC VỀ VIỆC THỰC HIỆN QUYỀN ƯU ĐÃI, MIỄN TRỪ ĐỐI VỚI CƠ QUAN ĐẠI DIỆN NGOẠI GIAO, CƠ QUAN LÃNH SỰ VÀ CƠ QUAN ĐẠI DIỆN CỦA TỔ CHỨC QUỐC TẾ TẠI VIỆT NAM",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "caa9cca3-02cc-4751-b79c-6e668f6b5e37"
            ],
            [
              "hash"  =>   "0AC42778-FD47-4BB2-9AFF-288DF01A2547",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "23009000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN CUỐI CÙNG ",
              "hash_chu_de"  =>   "6db952fa-b9dd-41f7-adf5-ccb22100ac9c",
              "hash_de_muc"  =>   "caa9cca3-02cc-4751-b79c-6e668f6b5e37"
            ],
            [
              "hash"  =>   "815ECDDF-CEA5-47CF-8A3B-5089AA3769EE",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "24001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "9692aa2c-e220-4b39-9385-c1b837149556"
            ],
            [
              "hash"  =>   "C1FD3EDA-DE12-4ECF-BE07-6252E76B777F",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "24001000000000002000",
              "ten_chuong"  =>   "Chương II PHÒNG, CHỐNG SINH VẬT GÂY HẠI THỰC VẬT",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "9692aa2c-e220-4b39-9385-c1b837149556"
            ],
            [
              "hash"  =>   "723FF07A-53DF-43AD-BF2F-D630018F7415",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "24001000000000003000",
              "ten_chuong"  =>   "Chương III KIỂM DỊCH THỰC VẬT",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "9692aa2c-e220-4b39-9385-c1b837149556"
            ],
            [
              "hash"  =>   "FF418AE3-3226-4E05-8B6C-07809DDAC01B",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "24001000000000004000",
              "ten_chuong"  =>   "Chương IV QUẢN LÝ THUỐC BẢO VỆ THỰC VẬT",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "9692aa2c-e220-4b39-9385-c1b837149556"
            ],
            [
              "hash"  =>   "E6718DF5-8C1A-434B-A0CB-678AFC43C0BE",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "24001000000000005000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "9692aa2c-e220-4b39-9385-c1b837149556"
            ],
            [
              "hash"  =>   "AB6E6D41-7995-453E-B33D-9B41A569D7C6",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "24002000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "ad9817c1-1032-4748-97f7-fd4db42fd04e"
            ],
            [
              "hash"  =>   "8B2BF84C-1BAF-4FB8-B99C-D949AFED4F0D",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "24002000000000002000",
              "ten_chuong"  =>   "Chương II QUY HOẠCH LÂM NGHIỆP",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "ad9817c1-1032-4748-97f7-fd4db42fd04e"
            ],
            [
              "hash"  =>   "4CE94B4C-C6F6-44D8-9F8D-3F4323AF4D8A",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "24002000000000003000",
              "ten_chuong"  =>   "Chương III QUẢN LÝ RỪNG",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "ad9817c1-1032-4748-97f7-fd4db42fd04e"
            ],
            [
              "hash"  =>   "005BF622-8B53-4565-8531-004E7738EFB7",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "24002000000000004000",
              "ten_chuong"  =>   "Chương IV BẢO VỆ RỪNG",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "ad9817c1-1032-4748-97f7-fd4db42fd04e"
            ],
            [
              "hash"  =>   "D6003DD9-80F0-458A-A782-186749B4DC8A",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "24002000000000005000",
              "ten_chuong"  =>   "Chương V PHÁT TRIỂN RỪNG",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "ad9817c1-1032-4748-97f7-fd4db42fd04e"
            ],
            [
              "hash"  =>   "1E40BD84-B27A-4B45-8984-787F02AF7686",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "24002000000000006000",
              "ten_chuong"  =>   "Chương VI SỬ DỤNG RỪNG",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "ad9817c1-1032-4748-97f7-fd4db42fd04e"
            ],
            [
              "hash"  =>   "0D7A8FF8-E3CA-4D03-9CB0-9A7821355764",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "24002000000000007000",
              "ten_chuong"  =>   "Chương VII CHẾ BIẾN VÀ THƯƠNG MẠI LÂM SẢN",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "ad9817c1-1032-4748-97f7-fd4db42fd04e"
            ],
            [
              "hash"  =>   "EF83AF8D-3576-4F58-92DB-00E8F7E890E0",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "24002000000000008000",
              "ten_chuong"  =>   "Chương VIII QUYỀN VÀ NGHĨA VỤ CỦA CHỦ RỪNG",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "ad9817c1-1032-4748-97f7-fd4db42fd04e"
            ],
            [
              "hash"  =>   "A6C05D0C-537F-4138-B95B-A1BDB38BC344",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "24002000000000009000",
              "ten_chuong"  =>   "Chương IX ĐỊNH GIÁ RỪNG, ĐẦU TƯ, TÀI CHÍNH TRONG LÂM NGHIỆP",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "ad9817c1-1032-4748-97f7-fd4db42fd04e"
            ],
            [
              "hash"  =>   "972A4D96-DF83-4B6B-8347-17CC65E5BA17",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "24002000000000010000",
              "ten_chuong"  =>   "Chương X KHOA HỌC VÀ CÔNG NGHỆ, HỢP TÁC QUỐC TẾ VỀ LÂM NGHIỆP",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "ad9817c1-1032-4748-97f7-fd4db42fd04e"
            ],
            [
              "hash"  =>   "808DBCB3-BC3D-4D53-A634-9B63DABEC85B",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "24002000000000011000",
              "ten_chuong"  =>   "Chương XI QUẢN LÝ NHÀ NƯỚC VỀ LÂM NGHIỆP VÀ KIỂM LÂM",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "ad9817c1-1032-4748-97f7-fd4db42fd04e"
            ],
            [
              "hash"  =>   "B4F0B448-192A-44A8-9F6A-69C2CB2D3F58",
              "so_thu_tu"  =>   12,
              "MAPC"  =>   "24002000000000012000",
              "ten_chuong"  =>   "Chương XII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "ad9817c1-1032-4748-97f7-fd4db42fd04e"
            ],
            [
              "hash"  =>   "9147F1E5-0CF6-4A9D-BDE5-C60435D2FAE8",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "24003000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "fbbe39e6-c4bc-41d7-ad09-af874ca0893c"
            ],
            [
              "hash"  =>   "8654304D-EADF-4404-A9FD-5D3B4CFAB867",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "24003000000000002000",
              "ten_chuong"  =>   "Chương II QUY HOẠCH, ĐẦU TƯ XÂY DỰNG,TU BỔ, NÂNG CẤP VÀ KIÊN CỐ HÓA ĐÊ ĐIỀU",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "fbbe39e6-c4bc-41d7-ad09-af874ca0893c"
            ],
            [
              "hash"  =>   "DB170E99-94D3-4E11-A538-B9F593F63586",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "24003000000000003000",
              "ten_chuong"  =>   "Chương III BẢO VỆ VÀ SỬ DỤNG ĐÊ ĐIỀU",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "fbbe39e6-c4bc-41d7-ad09-af874ca0893c"
            ],
            [
              "hash"  =>   "100E891F-A073-456D-ADA6-78F062924192",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "24003000000000004000",
              "ten_chuong"  =>   "Chương IV HỘ ĐÊ",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "fbbe39e6-c4bc-41d7-ad09-af874ca0893c"
            ],
            [
              "hash"  =>   "70CE106A-9514-4B6C-99A4-DA010A89AB37",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "24003000000000005000",
              "ten_chuong"  =>   "Chương V LỰC LƯỢNG TRỰC TIẾP QUẢN LÝ ĐÊ ĐIỀU",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "fbbe39e6-c4bc-41d7-ad09-af874ca0893c"
            ],
            [
              "hash"  =>   "AA2FB1A2-FE1C-448A-BFE0-C32EAEFA3C88",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "24003000000000006000",
              "ten_chuong"  =>   "Chương VI TRÁCH NHIỆM QUẢN LÝ NHÀ NƯỚC VỀ ĐÊ ĐIỀU",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "fbbe39e6-c4bc-41d7-ad09-af874ca0893c"
            ],
            [
              "hash"  =>   "C5A7A665-AC28-46AF-91C4-F9BCB776CEF3",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "24003000000000007000",
              "ten_chuong"  =>   "Chương VII THANH TRA, KHEN THƯỞNG VÀ XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "fbbe39e6-c4bc-41d7-ad09-af874ca0893c"
            ],
            [
              "hash"  =>   "844D1289-420F-4863-B531-F2FD41843ECE",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "24003000000000008000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "fbbe39e6-c4bc-41d7-ad09-af874ca0893c"
            ],
            [
              "hash"  =>   "9654E41E-CA1A-4D9F-AEBC-DED042ABC252",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "24004000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "74254489-5f53-472e-978a-f6af98103323"
            ],
            [
              "hash"  =>   "EE5844AA-F739-4C91-9BE2-F7FA6166A10F",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "24004000000000002000",
              "ten_chuong"  =>   "Chương II GIỐNG CÂY TRỒNG",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "74254489-5f53-472e-978a-f6af98103323"
            ],
            [
              "hash"  =>   "3843EDD2-60D5-43ED-90D7-0541A6D61889",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "24004000000000003000",
              "ten_chuong"  =>   "Chương III PHÂN BÓN",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "74254489-5f53-472e-978a-f6af98103323"
            ],
            [
              "hash"  =>   "EEA47041-9CAD-4FA5-8C1A-8D83EA1A7813",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "24004000000000004000",
              "ten_chuong"  =>   "Chương IV CANH TÁC",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "74254489-5f53-472e-978a-f6af98103323"
            ],
            [
              "hash"  =>   "CB6EB858-0E64-459A-B72E-8CD1644BFFD7",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "24004000000000005000",
              "ten_chuong"  =>   "Chương V THU HOẠCH, SƠ CHẾ, BẢO QUẢN, CHẾ BIẾN, THƯƠNG MẠI VÀ QUẢN LÝ CHẤT LƯỢNG SẢN PHẨM CÂY TRỒNG",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "74254489-5f53-472e-978a-f6af98103323"
            ],
            [
              "hash"  =>   "3A100929-53E5-4936-921C-A9B62A94E5F5",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "24004000000000006000",
              "ten_chuong"  =>   "Chương VI QUẢN LÝ NHÀ NƯỚC VỀ HOẠT ĐỘNG TRỒNG TRỌT",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "74254489-5f53-472e-978a-f6af98103323"
            ],
            [
              "hash"  =>   "5E94DE22-BA8D-4813-BF3F-70235C25DD27",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "24004000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "74254489-5f53-472e-978a-f6af98103323"
            ],
            [
              "hash"  =>   "C4C18BC5-DFBC-4816-8B41-7D797E4C4220",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "24005000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "d92bb10f-899d-478f-a0c3-605cce865129"
            ],
            [
              "hash"  =>   "D507B8DF-5B94-4654-B56A-BEFDC5D09322",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "24005000000000002000",
              "ten_chuong"  =>   "Chương II GIỐNG VÀ SẢN PHẨM GIỐNG VẬT NUÔI",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "d92bb10f-899d-478f-a0c3-605cce865129"
            ],
            [
              "hash"  =>   "E0F383C1-0E2A-44E3-B5CF-E172B539B1FC",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "24005000000000003000",
              "ten_chuong"  =>   "Chương III THỨC ĂN CHĂN NUÔI",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "d92bb10f-899d-478f-a0c3-605cce865129"
            ],
            [
              "hash"  =>   "6270D12C-9E26-40C0-A22F-0F3EFC20BA4D",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "24005000000000004000",
              "ten_chuong"  =>   "Chương IV ĐIỀU KIỆN CƠ SỞ CHĂN NUÔI, XỬ LÝ CHẤT THẢI CHĂN NUÔI",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "d92bb10f-899d-478f-a0c3-605cce865129"
            ],
            [
              "hash"  =>   "21E91DBF-7B2F-49C1-A56D-B0D09C5343FF",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "24005000000000005000",
              "ten_chuong"  =>   "Chương V CHĂN NUÔI ĐỘNG VẬT KHÁC VÀ ĐỐI XỬ NHÂN ĐẠO VỚI VẬT NUÔI",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "d92bb10f-899d-478f-a0c3-605cce865129"
            ],
            [
              "hash"  =>   "20B8B3D3-6CB7-426E-AC72-820EFAA476D9",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "24005000000000006000",
              "ten_chuong"  =>   "Chương VI CHẾ BIẾN VÀ THỊ TRƯỜNG SẢN PHẨM CHĂN NUÔI",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "d92bb10f-899d-478f-a0c3-605cce865129"
            ],
            [
              "hash"  =>   "91689645-939E-4DB2-89FE-88BC9F27C9DC",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "24005000000000007000",
              "ten_chuong"  =>   "Chương VII QUẢN LÝ NHÀ NƯỚC VỀ CHĂN NUÔI",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "d92bb10f-899d-478f-a0c3-605cce865129"
            ],
            [
              "hash"  =>   "226ADE72-FB33-42F3-A0C9-A4150867FE1F",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "24005000000000008000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "d92bb10f-899d-478f-a0c3-605cce865129"
            ],
            [
              "hash"  =>   "2EAEC30A-6B50-44B5-AD24-F349DD85717E",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "24006000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "427ac7e7-cae1-474a-9284-28eeada93cd6"
            ],
            [
              "hash"  =>   "18EB948E-ADFF-4FBE-9DA3-B3E807E4CCC1",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "24006000000000002000",
              "ten_chuong"  =>   "Chương II ĐIỀU TRA CƠ BẢN, CHIẾN LƯỢC, QUY HOẠCH THỦY LỢI",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "427ac7e7-cae1-474a-9284-28eeada93cd6"
            ],
            [
              "hash"  =>   "2286F836-3E7F-48F8-8FD2-230AF947DF43",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "24006000000000003000",
              "ten_chuong"  =>   "Chương III ĐẦU TƯ XÂY DỰNG CÔNG TRÌNH THỦY LỢI",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "427ac7e7-cae1-474a-9284-28eeada93cd6"
            ],
            [
              "hash"  =>   "69B29FE8-1284-4DDC-BD36-0FD8B7F4666A",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "24006000000000004000",
              "ten_chuong"  =>   "Chương IV QUẢN LÝ, KHAI THÁC CÔNG TRÌNH THỦY LỢI VÀ VẬN HÀNH HỒ CHỨA THỦY ĐIỆN PHỤC VỤ THỦY LỢI",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "427ac7e7-cae1-474a-9284-28eeada93cd6"
            ],
            [
              "hash"  =>   "05B94AF0-2590-4E85-B742-C9D15B1DA2E3",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "24006000000000005000",
              "ten_chuong"  =>   "Chương V DỊCH VỤ THỦY LỢI",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "427ac7e7-cae1-474a-9284-28eeada93cd6"
            ],
            [
              "hash"  =>   "3A2E4E33-66F2-450C-93DD-4D6EC53C2F37",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "24006000000000006000",
              "ten_chuong"  =>   "Chương VI BẢO VỆ VÀ BẢO ĐẢM AN TOÀN CÔNG TRÌNH THUỶ LỢI",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "427ac7e7-cae1-474a-9284-28eeada93cd6"
            ],
            [
              "hash"  =>   "1A7EDDC9-A6A7-423A-AD0B-716F073B47AE",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "24006000000000007000",
              "ten_chuong"  =>   "Chương VII THỦY LỢI NHỎ, THỦY LỢI NỘI ĐỒNG",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "427ac7e7-cae1-474a-9284-28eeada93cd6"
            ],
            [
              "hash"  =>   "08E8E098-5736-4B63-8F56-4E62DBE3F43F",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "24006000000000008000",
              "ten_chuong"  =>   "Chương VIII QUYỀN, TRÁCH NHIỆM CỦA TỔ CHỨC, CÁ NHÂN TRONG HOẠT ĐỘNG THỦY LỢI",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "427ac7e7-cae1-474a-9284-28eeada93cd6"
            ],
            [
              "hash"  =>   "52130B09-4473-4947-BC89-8841721C6CDA",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "24006000000000009000",
              "ten_chuong"  =>   "Chương IX TRÁCH NHIỆM QUẢN LÝ NHÀ NƯỚC VỀ THUỶ LỢI",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "427ac7e7-cae1-474a-9284-28eeada93cd6"
            ],
            [
              "hash"  =>   "AC223183-D688-489F-A373-13BAD08743E3",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "24006000000000010000",
              "ten_chuong"  =>   "Chương X ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "427ac7e7-cae1-474a-9284-28eeada93cd6"
            ],
            [
              "hash"  =>   "146313C8-CB10-4A20-AF59-6311C54E35E0",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "24008000000000001000",
              "ten_chuong"  =>   "Chương I QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "d6bb8050-369a-41fb-b2ad-11dc28ebd3b8"
            ],
            [
              "hash"  =>   "62743D89-D0D7-48CC-A803-35285ADBDD1B",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "24008000000000002000",
              "ten_chuong"  =>   "Chương II QUẢN LÝ QUY HOẠCH ĐẤT LÀM MUỐI VÀ SẢN XUẤT, KINH DOANH MUỐI",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "d6bb8050-369a-41fb-b2ad-11dc28ebd3b8"
            ],
            [
              "hash"  =>   "FF6C2E5F-FFAA-419A-9AEC-072F8A402093",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "24008000000000003000",
              "ten_chuong"  =>   "Chương III CHÍNH SÁCH KHUYẾN KHÍCH PHÁT TRIỂN SẢN XUẤT, KINH DOANH MUỐI",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "d6bb8050-369a-41fb-b2ad-11dc28ebd3b8"
            ],
            [
              "hash"  =>   "D7F0F9B6-478E-42F7-A4F3-CA5774AF41E6",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "24008000000000004000",
              "ten_chuong"  =>   "Chương IV TỔ CHỨC THỰC HIỆN",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "d6bb8050-369a-41fb-b2ad-11dc28ebd3b8"
            ],
            [
              "hash"  =>   "2E1E0150-796D-4D31-A1DB-29DB15704399",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "24008000000000005000",
              "ten_chuong"  =>   "Chương V HIỆU LỰC THI HÀNH",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "d6bb8050-369a-41fb-b2ad-11dc28ebd3b8"
            ],
            [
              "hash"  =>   "F4FAC19E-69D1-4E9D-95E4-EBE13566A27C",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "24009000000000001000",
              "ten_chuong"  =>   "Chương I QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "9b1d96e2-feb2-4e7f-824b-b50ed8ee2a7a"
            ],
            [
              "hash"  =>   "57B3CB8B-A885-448C-8C52-8CD006B294D7",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "24009000000000002000",
              "ten_chuong"  =>   "Chương II CÔNG NHẬN NGHỀ TRUYỀN THỐNG, LÀNG NGHỀ, LÀNG NGHỀ TRUYỀN THỐNG",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "9b1d96e2-feb2-4e7f-824b-b50ed8ee2a7a"
            ],
            [
              "hash"  =>   "8DAB2346-1E62-436F-9AFF-13C4B9605141",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "24009000000000003000",
              "ten_chuong"  =>   "Chương III QUẢN LÝ VÀ PHÁT TRIỂN NGÀNH NGHỀ NÔNG THÔN",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "9b1d96e2-feb2-4e7f-824b-b50ed8ee2a7a"
            ],
            [
              "hash"  =>   "D494E845-C1A8-4211-89AB-D1B3BEC031B7",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "24009000000000004000",
              "ten_chuong"  =>   "Chương IV QUẢN LÝ VÀ PHÁT TRIỂN LÀNG NGHỀ, LÀNG NGHỀ TRUYỀN THỐNG",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "9b1d96e2-feb2-4e7f-824b-b50ed8ee2a7a"
            ],
            [
              "hash"  =>   "0B3887C6-1BAB-434E-80EA-B0CB4C2710B9",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "24009000000000004500",
              "ten_chuong"  =>   "Chương V CƠ CHẾ, CHÍNH SÁCH KHUYẾN KHÍCH DOANH NGHIỆP ĐẦU TƯ VÀO NÔNG NGHIỆP, NÔNG THÔN",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "9b1d96e2-feb2-4e7f-824b-b50ed8ee2a7a"
            ],
            [
              "hash"  =>   "C5F6F076-9360-499E-82F3-555CE6265F2C",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "24009000000000004750",
              "ten_chuong"  =>   "Chương VI VỀ KINH TẾ TRANG TRẠI",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "9b1d96e2-feb2-4e7f-824b-b50ed8ee2a7a"
            ],
            [
              "hash"  =>   "591C8711-1CA3-47E4-BAC6-D1DD667106D7",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "24009000000000004937",
              "ten_chuong"  =>   "Chương VII QUY HOẠCH PHÁT TRIỂN MÍA ĐƯỜNG ĐẾN NĂM 2010 VÀ ĐỊNH HƯỚNG ĐẾN NĂM 2020",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "9b1d96e2-feb2-4e7f-824b-b50ed8ee2a7a"
            ],
            [
              "hash"  =>   "92DD3FB6-8ECB-4621-AB39-2AE5A7B140F4",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "24009000000000005000",
              "ten_chuong"  =>   "Chương VIII TỔ CHỨC THỰC HIỆN",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "9b1d96e2-feb2-4e7f-824b-b50ed8ee2a7a"
            ],
            [
              "hash"  =>   "8759043F-81B4-4E4C-A6E7-DAF3D1DD620E",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "24011000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "2fe0aa65-9b7f-4df7-859e-a5aab478512d"
            ],
            [
              "hash"  =>   "A7AA5E46-31A9-4E45-8242-E87BFF1A49B3",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "24011000000000002000",
              "ten_chuong"  =>   "Chương II PHÒNG, CHỐNG DỊCH BỆNH ĐỘNG VẬT",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "2fe0aa65-9b7f-4df7-859e-a5aab478512d"
            ],
            [
              "hash"  =>   "1D544EE4-4F5E-43DA-BA2A-CC238628BA08",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "24011000000000003000",
              "ten_chuong"  =>   "Chương III KIỂM DỊCH ĐỘNG VẬT, SẢN PHẨM ĐỘNG VẬT",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "2fe0aa65-9b7f-4df7-859e-a5aab478512d"
            ],
            [
              "hash"  =>   "19B34D2D-09A7-4F54-A2CE-CF92B3FF2277",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "24011000000000004000",
              "ten_chuong"  =>   "Chương IV KIỂM SOÁT GIẾT MỔ ĐỘNG VẬT TRÊN CẠN; SƠ CHẾ, CHẾ BIẾN ĐỘNG VẬT, SẢN PHẨM ĐỘNG VẬT; KIỂM TRA VỆ SINH THÚ Y",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "2fe0aa65-9b7f-4df7-859e-a5aab478512d"
            ],
            [
              "hash"  =>   "BE7969DA-BAC2-4EB1-8A91-F588C00BCEA6",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "24011000000000005000",
              "ten_chuong"  =>   "Chương V QUẢN LÝ THUỐC THÚ Y",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "2fe0aa65-9b7f-4df7-859e-a5aab478512d"
            ],
            [
              "hash"  =>   "FB9A54BA-1A28-42F1-9ADE-105EDD4DBAA5",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "24011000000000006000",
              "ten_chuong"  =>   "Chương VI HÀNH NGHỀ THÚ Y",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "2fe0aa65-9b7f-4df7-859e-a5aab478512d"
            ],
            [
              "hash"  =>   "EC6DF653-0A32-4590-A643-F75831563204",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "24011000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "2fe0aa65-9b7f-4df7-859e-a5aab478512d"
            ],
            [
              "hash"  =>   "99CF698E-AC6D-4D27-8B5A-AB62ACCD2772",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "24012000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "a3eb99fa-1160-42b1-90ff-39fe66fd4f85"
            ],
            [
              "hash"  =>   "4BA4E52A-F8DA-44E8-8F9D-E50B90D26866",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "24012000000000002000",
              "ten_chuong"  =>   "Chương II BẢO VỆ VÀ PHÁT TRIỂN NGUỒN LỢI THỦY SẢN",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "a3eb99fa-1160-42b1-90ff-39fe66fd4f85"
            ],
            [
              "hash"  =>   "F356D60F-6D3C-44CB-8F80-FF2B17A44585",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "24012000000000003000",
              "ten_chuong"  =>   "Chương III NUÔI TRỒNG THỦY SẢN",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "a3eb99fa-1160-42b1-90ff-39fe66fd4f85"
            ],
            [
              "hash"  =>   "E7731F56-2B8C-4368-9D73-F87C6C3311C2",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "24012000000000004000",
              "ten_chuong"  =>   "Chương IV KHAI THÁC THỦY SẢN",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "a3eb99fa-1160-42b1-90ff-39fe66fd4f85"
            ],
            [
              "hash"  =>   "856B4706-E580-4ED6-9479-64B44A404405",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "24012000000000005000",
              "ten_chuong"  =>   "Chương V QUẢN LÝ TÀU CÁ, TÀU CÔNG VỤ THỦY SẢN, CẢNG CÁ, KHU NEO ĐẬU TRÁNH TRÚ BÃO CHO TÀU CÁ",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "a3eb99fa-1160-42b1-90ff-39fe66fd4f85"
            ],
            [
              "hash"  =>   "15B11D1C-9E0E-4FF9-9511-35E2F9F6309D",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "24012000000000006000",
              "ten_chuong"  =>   "Chương VI KIỂM NGƯ",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "a3eb99fa-1160-42b1-90ff-39fe66fd4f85"
            ],
            [
              "hash"  =>   "852AC5E1-F260-405F-9181-C88CD999FBD3",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "24012000000000007000",
              "ten_chuong"  =>   "Chương VII MUA, BÁN, SƠ CHẾ, CHẾ BIẾN, XUẤT KHẨU, NHẬP KHẨU THỦY SẢN, SẢN PHẨM THỦY SẢN",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "a3eb99fa-1160-42b1-90ff-39fe66fd4f85"
            ],
            [
              "hash"  =>   "AAE3376B-FDAE-4847-AF61-CA5E724A9A19",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "24012000000000008000",
              "ten_chuong"  =>   "Chương VIII QUẢN LÝ NHÀ NƯỚC VỀ THỦY SẢN",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "a3eb99fa-1160-42b1-90ff-39fe66fd4f85"
            ],
            [
              "hash"  =>   "B74B0E81-1AC1-4759-AD4C-D7BA02680571",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "24012000000000009000",
              "ten_chuong"  =>   "Chương IX ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "81215563-6346-448e-bded-2933f86276bb",
              "hash_de_muc"  =>   "a3eb99fa-1160-42b1-90ff-39fe66fd4f85"
            ],
            [
              "hash"  =>   "FCF8F66D-D6D9-48EC-B1DD-E5BA240EA3CD",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "25001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "b444d15f-0b38-474b-bf13-5188e9a517bb"
            ],
            [
              "hash"  =>   "F28DD3AD-03C0-4F71-9162-216C2C9AF73E",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "25001000000000002000",
              "ten_chuong"  =>   "Chương II BẢO VỆ CÔNG TRÌNH QUỐC PHÒNG VÀ KHU QUÂN SỰ",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "b444d15f-0b38-474b-bf13-5188e9a517bb"
            ],
            [
              "hash"  =>   "1C5957A7-0ABE-4C17-8435-F192F6C7AA59",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "25001000000000003000",
              "ten_chuong"  =>   "Chương III QUẢN LÝ NHÀ NƯỚC VỀ BẢO VỆ CÔNG TRÌNH QUỐC PHÒNG VÀ KHU QUÂN SỰ",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "b444d15f-0b38-474b-bf13-5188e9a517bb"
            ],
            [
              "hash"  =>   "485C9BFA-ABE9-423C-9953-7350970B702F",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "25001000000000004000",
              "ten_chuong"  =>   "Chương IV KHEN THƯỞNG VÀ XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "b444d15f-0b38-474b-bf13-5188e9a517bb"
            ],
            [
              "hash"  =>   "869FDD88-80EE-4496-813C-25920E14EDE1",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "25001000000000005000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN CUỐI CÙNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "b444d15f-0b38-474b-bf13-5188e9a517bb"
            ],
            [
              "hash"  =>   "7596EBA3-3A74-4A12-A4B4-9ECA0CF0E2FD",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "25002000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "4e35f01e-45ff-4fc6-a105-37b0a7de5979"
            ],
            [
              "hash"  =>   "E8E1FB09-3657-4966-A806-2F52ED75C588",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "25002000000000002000",
              "ten_chuong"  =>   "Chương II HOẠT ĐỘNG CƠ BẢN VỀ BIÊN PHÒNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "4e35f01e-45ff-4fc6-a105-37b0a7de5979"
            ],
            [
              "hash"  =>   "CCC9392D-2D5B-4CC2-AD1F-1CBC3E5186A9",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "25002000000000003000",
              "ten_chuong"  =>   "Chương III LỰC LƯỢNG BỘ ĐỘI BIÊN PHÒNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "4e35f01e-45ff-4fc6-a105-37b0a7de5979"
            ],
            [
              "hash"  =>   "F0665D6F-FA50-4841-AA3A-F6F3FEF91E53",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "25002000000000004000",
              "ten_chuong"  =>   "Chương IV BẢO ĐẢM BIÊN PHÒNG VÀ CHẾ ĐỘ, CHÍNH SÁCH ĐỐI VỚI LỰC LƯỢNG THỰC THI NHIỆM VỤ BIÊN PHÒNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "4e35f01e-45ff-4fc6-a105-37b0a7de5979"
            ],
            [
              "hash"  =>   "29CB1966-2E0A-43C3-A951-C68C5B5851FF",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "25002000000000005000",
              "ten_chuong"  =>   "Chương V TRÁCH NHIỆM CỦA CƠ QUAN, TỔ CHỨC VỀ BIÊN PHÒNG ",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "4e35f01e-45ff-4fc6-a105-37b0a7de5979"
            ],
            [
              "hash"  =>   "9B0B6A06-9CE7-446B-B17E-F62BCD22E042",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "25002000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "4e35f01e-45ff-4fc6-a105-37b0a7de5979"
            ],
            [
              "hash"  =>   "CF22B8FA-BB68-46DE-94A1-E7FC74C6510F",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "25003000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "526b44e7-b7f6-49dc-86fd-062aeae93568"
            ],
            [
              "hash"  =>   "3C7746F7-5001-4F50-B8DD-3DBE6FAE5041",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "25003000000000002000",
              "ten_chuong"  =>   "Chương II TỔ CHỨC HOẠT ĐỘNG CÔNG NGHIỆP QUỐC PHÒNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "526b44e7-b7f6-49dc-86fd-062aeae93568"
            ],
            [
              "hash"  =>   "196DBC17-026D-4838-815E-3A263809261E",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "25003000000000003000",
              "ten_chuong"  =>   "Chương III QUY HOẠCH, KẾ HOẠCH XÂY DỰNG VÀ PHÁT TRIỂN CÔNG NGHIỆP QUỐC PHÒNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "526b44e7-b7f6-49dc-86fd-062aeae93568"
            ],
            [
              "hash"  =>   "3C7F3365-96C2-4878-8FA4-DC2DAB2F6722",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "25003000000000004000",
              "ten_chuong"  =>   "Chương IV NGUỒN LỰC XÂY DỰNG VÀ PHÁT TRIỂN CÔNG NGHIỆP QUỐC PHÒNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "526b44e7-b7f6-49dc-86fd-062aeae93568"
            ],
            [
              "hash"  =>   "2B6B61B1-DEC7-47CA-8E91-42BF54193BC5",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "25003000000000005000",
              "ten_chuong"  =>   "Chương V CHÍNH SÁCH ĐỐI VỚI CÔNG NGHIỆP QUỐC PHÒNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "526b44e7-b7f6-49dc-86fd-062aeae93568"
            ],
            [
              "hash"  =>   "CC817413-989E-4FB2-B5F8-C611C4FA13A7",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "25003000000000006000",
              "ten_chuong"  =>   "Chương VI QUẢN LÝ NHÀ NƯỚC VỀ CÔNG NGHIỆP QUỐC PHÒNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "526b44e7-b7f6-49dc-86fd-062aeae93568"
            ],
            [
              "hash"  =>   "AE40B419-377B-41C3-8486-B877B89D9682",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "25003000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "526b44e7-b7f6-49dc-86fd-062aeae93568"
            ],
            [
              "hash"  =>   "8C7E069D-EA53-4ED0-82F5-D80D40E98D37",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "25005000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "74c5ded7-629a-4da1-b2ed-f8f29866d114"
            ],
            [
              "hash"  =>   "E9ABBFD2-BDE5-4B97-868F-D77971E424F1",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "25005000000000002000",
              "ten_chuong"  =>   "Chương II TỔ CHỨC, BIÊN CHẾ, VŨ KHÍ, TRANG BỊ CỦA DÂN QUÂN TỰ VỆ",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "74c5ded7-629a-4da1-b2ed-f8f29866d114"
            ],
            [
              "hash"  =>   "414005CB-B992-4335-9708-8E0A3E12C029",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "25005000000000003000",
              "ten_chuong"  =>   "Chương III ĐÀO TẠO CHỈ HUY TRƯỞNG BAN CHỈ HUY QUÂN SỰ CẤP XÃ; TẬP HUẤN, BỒI DƯỠNG CÁC CHỨC VỤ CHỈ HUY; HUẤN LUYỆN DÂN QUÂN TỰ VỆ",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "74c5ded7-629a-4da1-b2ed-f8f29866d114"
            ],
            [
              "hash"  =>   "10E8FE4C-BB9B-4E77-8E74-F4E7A038AA9F",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "25005000000000004000",
              "ten_chuong"  =>   "Chương IV HOẠT ĐỘNG CỦA DÂN QUÂN TỰ VỆ",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "74c5ded7-629a-4da1-b2ed-f8f29866d114"
            ],
            [
              "hash"  =>   "FD38DD3D-EBF8-4A29-A940-7F82F9387AC3",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "25005000000000005000",
              "ten_chuong"  =>   "Chương V CHẾ ĐỘ, CHÍNH SÁCH VÀ NHIỆM VỤ CHI CHO DÂN QUÂN TỰ VỆ",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "74c5ded7-629a-4da1-b2ed-f8f29866d114"
            ],
            [
              "hash"  =>   "A025FDDC-5D96-4033-8ED1-DFA431369539",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "25005000000000006000",
              "ten_chuong"  =>   "Chương VI TRÁCH NHIỆM CỦA CƠ QUAN, TỔ CHỨC VỀ DÂN QUÂN TỰ VỆ",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "74c5ded7-629a-4da1-b2ed-f8f29866d114"
            ],
            [
              "hash"  =>   "9A530113-5AA3-4A2E-9B24-08E41B4F6109",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "25005000000000007000",
              "ten_chuong"  =>   "Chương VII THI ĐUA, KHEN THƯỞNG VÀ XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "74c5ded7-629a-4da1-b2ed-f8f29866d114"
            ],
            [
              "hash"  =>   "D72EDBA6-5C67-421F-ABBE-AAD773F9C4A4",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "25005000000000008000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "74c5ded7-629a-4da1-b2ed-f8f29866d114"
            ],
            [
              "hash"  =>   "07A6382C-607A-490F-BEA0-1FB7E2784C19",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "25006000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "a6942cbd-cf83-4f3f-b314-27a25a014442"
            ],
            [
              "hash"  =>   "92176388-CAC7-4E9B-AEA7-F3CDEC45B2A1",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "25006000000000002000",
              "ten_chuong"  =>   "Chương II CHUẨN BỊ ĐỘNG VIÊN CÔNG NGHIỆP",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "a6942cbd-cf83-4f3f-b314-27a25a014442"
            ],
            [
              "hash"  =>   "8707A224-E327-46FE-A9BB-468372B62272",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "25006000000000003000",
              "ten_chuong"  =>   "Chương III THỰC HIỆN ĐỘNG VIÊN CÔNG NGHIỆP",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "a6942cbd-cf83-4f3f-b314-27a25a014442"
            ],
            [
              "hash"  =>   "95BF449C-CEDB-410C-BF06-FC72D4BDEDB7",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "25006000000000004000",
              "ten_chuong"  =>   "Chương IV CHẾ ĐỘ, CHÍNH SÁCH ĐỐI VỚI DOANH NGHIỆP CÔNG NGHIỆP VÀ NGƯỜI LAO ĐỘNG TRONG ĐỘNG VIÊN CÔNG NGHIỆP",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "a6942cbd-cf83-4f3f-b314-27a25a014442"
            ],
            [
              "hash"  =>   "29D6D28D-5F42-43CE-8A47-6E32AC883D88",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "25006000000000005000",
              "ten_chuong"  =>   "Chương V NGÂN SÁCH BẢO ĐẢM CHO ĐỘNG VIÊN CÔNG NGHIỆP",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "a6942cbd-cf83-4f3f-b314-27a25a014442"
            ],
            [
              "hash"  =>   "16A1230E-E5FE-4A9D-AB9C-E6CE1A320124",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "25006000000000006000",
              "ten_chuong"  =>   "Chương VI QUẢN LÝ NHÀ NƯỚC VỀ ĐỘNG VIÊN CÔNG NGHIỆP",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "a6942cbd-cf83-4f3f-b314-27a25a014442"
            ],
            [
              "hash"  =>   "48AF7366-9EE4-4886-B37D-EFA82375DBF6",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "25006000000000007000",
              "ten_chuong"  =>   "Chương VII KHEN THƯỞNG VÀ XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "a6942cbd-cf83-4f3f-b314-27a25a014442"
            ],
            [
              "hash"  =>   "E02CBB3E-1C21-4027-B83A-2815DB4E9972",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "25006000000000008000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "a6942cbd-cf83-4f3f-b314-27a25a014442"
            ],
            [
              "hash"  =>   "5E86549D-23C4-425C-B0B3-B01136098040",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "25007000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "3049f520-19c1-439b-ab42-3994f94824cc"
            ],
            [
              "hash"  =>   "4992029C-3C9E-4D0F-9B42-80EB7664ED26",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "25007000000000002000",
              "ten_chuong"  =>   "Chương II GIÁO DỤC QUỐC PHÒNG VÀ AN NINH TRONG NHÀ TRƯỜNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "3049f520-19c1-439b-ab42-3994f94824cc"
            ],
            [
              "hash"  =>   "23F638EB-04D6-408F-BAA8-6B66265A3CF9",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "25007000000000003000",
              "ten_chuong"  =>   "Chương III BỒI DƯỠNG KIẾN THỨC QUỐC PHÒNG VÀ AN NINH",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "3049f520-19c1-439b-ab42-3994f94824cc"
            ],
            [
              "hash"  =>   "CB6A716E-145C-4BF4-B9B3-1767E870ED81",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "25007000000000004000",
              "ten_chuong"  =>   "Chương IV PHỔ BIẾN KIẾN THỨC QUỐC PHÒNG VÀ AN NINH CHO TOÀN DÂN",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "3049f520-19c1-439b-ab42-3994f94824cc"
            ],
            [
              "hash"  =>   "5A78EB80-BFD5-46B9-B605-EB1E8CA5FDD7",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "25007000000000005000",
              "ten_chuong"  =>   "Chương V GIÁO VIÊN, GIẢNG VIÊN, BÁO CÁO VIÊN, TUYÊN TRUYỀN VIÊNGIÁO DỤC QUỐC PHÒNG VÀ AN NINH",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "3049f520-19c1-439b-ab42-3994f94824cc"
            ],
            [
              "hash"  =>   "D01EF37C-CE36-41F8-BC09-DDE176CB0824",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "25007000000000006000",
              "ten_chuong"  =>   "Chương VI KINH PHÍ GIÁO DỤC QUỐC PHÒNG VÀ AN NINH",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "3049f520-19c1-439b-ab42-3994f94824cc"
            ],
            [
              "hash"  =>   "EC593752-4E8A-45AC-AF08-8837A03DD56E",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "25007000000000007000",
              "ten_chuong"  =>   "Chương VII NHIỆM VỤ, QUYỀN HẠN CỦA CƠ QUAN, TỔ CHỨCVỀ GIÁO DỤC QUỐC PHÒNG VÀ AN NINH",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "3049f520-19c1-439b-ab42-3994f94824cc"
            ],
            [
              "hash"  =>   "5E53F59C-4DD8-4E29-9F78-5EC70CF58874",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "25007000000000007500",
              "ten_chuong"  =>   "Chương VIII. MỘT SỐ QUY ĐỊNH VỀ CÔNG TÁC GIÁO DỤC QUỐC PHÒNG  VÀ AN NINH CỦA CÁC BỘ, NGÀNH",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "3049f520-19c1-439b-ab42-3994f94824cc"
            ],
            [
              "hash"  =>   "E7B68823-8F49-4A2E-8ED1-F1378E5CECDA",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "25007000000000008000",
              "ten_chuong"  =>   "Chương IX ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "3049f520-19c1-439b-ab42-3994f94824cc"
            ],
            [
              "hash"  =>   "C9CB1310-C63C-4D2A-958A-9D2220C6A742",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "25008000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "1a6472e3-9daf-4b62-b672-1f0dd9f8450f"
            ],
            [
              "hash"  =>   "985B8396-5F86-4A94-AADB-518E64072DC7",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "25008000000000002000",
              "ten_chuong"  =>   "Chương II NHIỆM VỤ, QUYỀN HẠN CỦA CẢNH SÁT BIỂN VIỆT NAM",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "1a6472e3-9daf-4b62-b672-1f0dd9f8450f"
            ],
            [
              "hash"  =>   "27FE6549-4B25-4BFF-BA58-F071C238B1D3",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "25008000000000003000",
              "ten_chuong"  =>   "Chương III HOẠT ĐỘNG CỦA CẢNH SÁT BIỂN VIỆT NAM",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "1a6472e3-9daf-4b62-b672-1f0dd9f8450f"
            ],
            [
              "hash"  =>   "738179B7-831E-4E6C-81E7-2EF9AC440803",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "25008000000000004000",
              "ten_chuong"  =>   "Chương IV PHỐI HỢP HOẠT ĐỘNG GIỮA CẢNH SÁT BIỂN VIỆT NAM VỚI CƠ QUAN, TỔ CHỨC, LỰC LƯỢNG CHỨC NĂNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "1a6472e3-9daf-4b62-b672-1f0dd9f8450f"
            ],
            [
              "hash"  =>   "F6A866FF-A01C-44ED-A4F0-540CDDBA4ED9",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "25008000000000005000",
              "ten_chuong"  =>   "Chương V TỔ CHỨC CỦA CẢNH SÁT BIỂN VIỆT NAM",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "1a6472e3-9daf-4b62-b672-1f0dd9f8450f"
            ],
            [
              "hash"  =>   "F5F71C1B-3005-46CE-B2C7-F85D055D74C4",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "25008000000000006000",
              "ten_chuong"  =>   "Chương VI BẢO ĐẢM HOẠT ĐỘNG VÀ CHẾ ĐỘ, CHÍNH SÁCH ĐỐI VỚI CẢNH SÁT BIỂN VIỆT NAM",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "1a6472e3-9daf-4b62-b672-1f0dd9f8450f"
            ],
            [
              "hash"  =>   "492A17D7-A040-45A4-BECC-8076BF876E43",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "25008000000000007000",
              "ten_chuong"  =>   "Chương VII QUẢN LÝ NHÀ NƯỚC VÀ TRÁCH NHIỆM CỦA BỘ, CƠ QUAN NGANG BỘ, CHÍNH QUYỀN ĐỊA PHƯƠNG ĐỐI VỚI CẢNH SÁT BIỂN VIỆT NAM",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "1a6472e3-9daf-4b62-b672-1f0dd9f8450f"
            ],
            [
              "hash"  =>   "9BD3F3AD-4910-4CD3-AFE4-9E034208F18E",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "25008000000000008000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "1a6472e3-9daf-4b62-b672-1f0dd9f8450f"
            ],
            [
              "hash"  =>   "FF5439FB-DCC5-4DFF-9C3D-9F9C07BAF9BA",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "25009000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "ca22c0ee-5a52-4a85-bfe6-06919ef05ce7"
            ],
            [
              "hash"  =>   "2A78B9F7-85D5-4071-A302-BEE94DAA2B67",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "25009000000000002000",
              "ten_chuong"  =>   "Chương II XÂY DỰNG, HUY ĐỘNG, TIẾP NHẬN LỰC LƯỢNG DỰ BỊ ĐỘNG VIÊN",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "ca22c0ee-5a52-4a85-bfe6-06919ef05ce7"
            ],
            [
              "hash"  =>   "233645CE-342F-4554-AC7C-D06234D6FAF0",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "25009000000000003000",
              "ten_chuong"  =>   "Chương III CHẾ ĐỘ, CHÍNH SÁCH VÀ KINH PHÍ BẢO ĐẢM CHO XÂY DỰNG, HUY ĐỘNG LỰC LƯỢNG DỰ BỊ ĐỘNG VIÊN",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "ca22c0ee-5a52-4a85-bfe6-06919ef05ce7"
            ],
            [
              "hash"  =>   "DB7FE1C0-511B-47E0-A493-8B77CA36CB62",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "25009000000000004000",
              "ten_chuong"  =>   "Chương IV TRÁCH NHIỆM CỦA CƠ QUAN, TỔ CHỨC TRONG XÂY DỰNG, HUY ĐỘNG LỰC LƯỢNG DỰ BỊ ĐỘNG VIÊN",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "ca22c0ee-5a52-4a85-bfe6-06919ef05ce7"
            ],
            [
              "hash"  =>   "6A9C68BF-D10E-4BEF-940D-A06C02A5C1B9",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "25009000000000005000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "ca22c0ee-5a52-4a85-bfe6-06919ef05ce7"
            ],
            [
              "hash"  =>   "B06383A6-62D7-4B17-9FA3-48BA11785052",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "25011000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "9bd8b88d-65b4-44e2-b4b0-34c74810af4a"
            ],
            [
              "hash"  =>   "DB70212D-658B-436E-9375-C7497B0FCB72",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "25011000000000002000",
              "ten_chuong"  =>   "Chương II ĐĂNG KÝ NGHĨA VỤ QUÂN SỰ VÀ QUẢN LÝ CÔNG DÂN TRONG ĐỘ TUỔI THỰC HIỆN NGHĨA VỤ QUÂN SỰ",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "9bd8b88d-65b4-44e2-b4b0-34c74810af4a"
            ],
            [
              "hash"  =>   "144073EE-1365-47D7-9DAF-CF9C79364092",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "25011000000000003000",
              "ten_chuong"  =>   "Chương III PHỤC VỤ CỦA HẠ SĨ QUAN, BINH SĨ TẠI NGŨ VÀ HẠ SĨ QUAN, BINH SĨ DỰ BỊ",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "9bd8b88d-65b4-44e2-b4b0-34c74810af4a"
            ],
            [
              "hash"  =>   "46C78FD3-9446-4D6C-9878-007C54F5E028",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "25011000000000004000",
              "ten_chuong"  =>   "Chương IV NHẬP NGŨ VÀ XUẤT NGŨ TRONG THỜI BÌNH",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "9bd8b88d-65b4-44e2-b4b0-34c74810af4a"
            ],
            [
              "hash"  =>   "CCD86FEA-18A4-4375-99B9-68CD95EE2F1D",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "25011000000000005000",
              "ten_chuong"  =>   "Chương V NHẬP NGŨ THEO LỆNH ĐỘNG VIÊN, XUẤT NGŨ KHI BÃI BỎ TÌNH TRẠNG CHIẾN TRANH HOẶC TÌNH TRẠNG KHẨN CẤP VỀ QUỐC PHÒNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "9bd8b88d-65b4-44e2-b4b0-34c74810af4a"
            ],
            [
              "hash"  =>   "62119E86-7CB4-430D-838D-F9F63E46E45F",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "25011000000000006000",
              "ten_chuong"  =>   "Chương VI CHẾ ĐỘ, CHÍNH SÁCH VÀ NGÂN SÁCH BẢO ĐẢM TRONG VIỆCTHỰC HIỆN NGHĨA VỤ QUÂN SỰ",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "9bd8b88d-65b4-44e2-b4b0-34c74810af4a"
            ],
            [
              "hash"  =>   "DF21D522-6948-45F1-AD1C-728E3CD2409A",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "25011000000000007000",
              "ten_chuong"  =>   "Chương VII NHIỆM VỤ, QUYỀN HẠN CỦA CƠ QUAN, TỔ CHỨC",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "9bd8b88d-65b4-44e2-b4b0-34c74810af4a"
            ],
            [
              "hash"  =>   "8B9EC8FD-4497-438C-9783-35F7F720A5BD",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "25011000000000008000",
              "ten_chuong"  =>   "Chương VIII XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "9bd8b88d-65b4-44e2-b4b0-34c74810af4a"
            ],
            [
              "hash"  =>   "00A222F7-1CCF-4F41-874A-52370703A6FA",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "25011000000000009000",
              "ten_chuong"  =>   "Chương IX ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "9bd8b88d-65b4-44e2-b4b0-34c74810af4a"
            ],
            [
              "hash"  =>   "A1C8ABBE-726A-41AC-B7D5-34B428D3BFA4",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "25012000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "fa959814-d73c-4253-8857-795185e44d16"
            ],
            [
              "hash"  =>   "1A5B91AC-6F3F-4F35-A735-3A41ABADE4FD",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "25012000000000002000",
              "ten_chuong"  =>   "Chương II CHẾ ĐỘ PHỤC VỤ CỦA QUÂN NHÂN CHUYÊN NGHIỆP",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "fa959814-d73c-4253-8857-795185e44d16"
            ],
            [
              "hash"  =>   "63BFD323-8211-4C33-9F46-4864ADF955A5",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "25012000000000003000",
              "ten_chuong"  =>   "Chương III CHẾ ĐỘ PHỤC VỤ CỦA CÔNG NHÂN VÀ VIÊN CHỨC QUỐC PHÒNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "fa959814-d73c-4253-8857-795185e44d16"
            ],
            [
              "hash"  =>   "8FB3D0B4-B2EE-4D3D-A3C1-98D2F46F0EF5",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "25012000000000004000",
              "ten_chuong"  =>   "Chương IV CHẾ ĐỘ, CHÍNH SÁCH ĐỐI VỚI QUÂN NHÂN CHUYÊN NGHIỆP, CÔNG NHÂN VÀ VIÊN CHỨC QUỐC PHÒNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "fa959814-d73c-4253-8857-795185e44d16"
            ],
            [
              "hash"  =>   "4A3FFCAF-BD4E-4E28-8FC4-67626ACB5114",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "25012000000000005000",
              "ten_chuong"  =>   "Chương V TRÁCH NHIỆM, QUYỀN HẠN CỦA CƠ QUAN, TỔ CHỨC",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "fa959814-d73c-4253-8857-795185e44d16"
            ],
            [
              "hash"  =>   "7FB9D5FD-8D20-46D4-9080-025DE96E45DA",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "25012000000000006000",
              "ten_chuong"  =>   "Chương VI KHEN THƯỞNG VÀ XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "fa959814-d73c-4253-8857-795185e44d16"
            ],
            [
              "hash"  =>   "861D7D48-E7B8-428E-82C3-1F8CB9BF79AC",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "25012000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "fa959814-d73c-4253-8857-795185e44d16"
            ],
            [
              "hash"  =>   "C4EEA2AE-65E7-40A3-A6B7-C70728504D50",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "25013000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "97b77c60-c651-4741-9728-b69544031858"
            ],
            [
              "hash"  =>   "A1EB7349-715A-47AB-A31E-2AADA9ABBEE1",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "25013000000000002000",
              "ten_chuong"  =>   "Chương II HOẠT ĐỘNG CƠ BẢN VỀ QUỐC PHÒNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "97b77c60-c651-4741-9728-b69544031858"
            ],
            [
              "hash"  =>   "5D49D387-9D1A-49BE-8413-53A54443BF5E",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "25013000000000003000",
              "ten_chuong"  =>   "Chương III TÌNH TRẠNG CHIẾN TRANH, TÌNH TRẠNG KHẨN CẤP VỀ QUỐC PHÒNG, THIẾT QUÂN LUẬT, GIỚI NGHIÊM",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "97b77c60-c651-4741-9728-b69544031858"
            ],
            [
              "hash"  =>   "E4009328-70A8-4077-B2EF-560AEED5A36F",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "25013000000000004000",
              "ten_chuong"  =>   "Chương IV LỰC LƯỢNG VŨ TRANG NHÂN DÂN",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "97b77c60-c651-4741-9728-b69544031858"
            ],
            [
              "hash"  =>   "9B5482DC-7D85-4B85-BEAD-89D597DD7C5B",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "25013000000000005000",
              "ten_chuong"  =>   "Chương V BẢO ĐẢM QUỐC PHÒNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "97b77c60-c651-4741-9728-b69544031858"
            ],
            [
              "hash"  =>   "B4588D1E-E5F5-4D4F-83FF-59AA5F77D8A4",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "25013000000000006000",
              "ten_chuong"  =>   "Chương VI NHIỆM VỤ, QUYỀN HẠN CỦA CƠ QUAN, TỔ CHỨC VỀ QUỐC PHÒNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "97b77c60-c651-4741-9728-b69544031858"
            ],
            [
              "hash"  =>   "23823A46-8BA1-490A-9738-77BD92BE0AA6",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "25013000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "97b77c60-c651-4741-9728-b69544031858"
            ],
            [
              "hash"  =>   "24FDA5A1-946C-4502-AE30-3B34433C84EC",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "25014000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "d8bc3d2e-b1e3-4023-a2dd-23005a3ca616"
            ],
            [
              "hash"  =>   "10BCE1A9-72E3-420B-BEC3-8BECAA0AF25A",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "25014000000000002000",
              "ten_chuong"  =>   "Chương II QUÂN HÀM, CHỨC VỤ SĨ QUAN",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "d8bc3d2e-b1e3-4023-a2dd-23005a3ca616"
            ],
            [
              "hash"  =>   "EC1CE2A8-F576-471D-A4CF-003C326CDEBC",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "25014000000000003000",
              "ten_chuong"  =>   "Chương III NGHĨA VỤ,TRÁCH NHIỆM VÀ QUYỀN LỢI CỦA SĨ QUAN",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "d8bc3d2e-b1e3-4023-a2dd-23005a3ca616"
            ],
            [
              "hash"  =>   "F0C46D70-A0CB-48CF-AE0D-27701F17F6ED",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "25014000000000004000",
              "ten_chuong"  =>   "Chương IV SĨ QUAN DỰ BỊ",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "d8bc3d2e-b1e3-4023-a2dd-23005a3ca616"
            ],
            [
              "hash"  =>   "EDF60FAF-8D28-4440-BF35-52E57A89B5D1",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "25014000000000005000",
              "ten_chuong"  =>   "Chương V QUẢN LÝ NHÀ NƯỚC VỀ SĨ QUAN",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "d8bc3d2e-b1e3-4023-a2dd-23005a3ca616"
            ],
            [
              "hash"  =>   "155D8A20-9D8E-4EA8-8A2A-FA9985C5380B",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "25014000000000006000",
              "ten_chuong"  =>   "Chương VI KHEN THƯỞNG VÀ XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "d8bc3d2e-b1e3-4023-a2dd-23005a3ca616"
            ],
            [
              "hash"  =>   "74D52044-B28E-4DED-AFFA-02B7ECED3FF1",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "25014000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "859b54fa-0c05-4807-a50c-c8be82fcae62",
              "hash_de_muc"  =>   "d8bc3d2e-b1e3-4023-a2dd-23005a3ca616"
            ],
            [
              "hash"  =>   "2FBEB421-FB7E-4CC7-98EA-15DBE8C1736A",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "26001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "7a9dcc15-370d-40b4-a02b-28e583b25dbf",
              "hash_de_muc"  =>   "e982aa33-8e27-4d94-99e9-b513b6993c6d"
            ],
            [
              "hash"  =>   "CE0A8611-780F-4E4F-9679-CCF8E729CE0B",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "26001000000000002000",
              "ten_chuong"  =>   "Chương II QUYỀN, NGHĨA VỤ CỦA TỔ CHỨC, CÁ NHÂN SẢN XUẤT, KINH DOANH VÀ NGƯỜI TIÊU DÙNG TRONG LĨNH VỰC GIÁ",
              "hash_chu_de"  =>   "7a9dcc15-370d-40b4-a02b-28e583b25dbf",
              "hash_de_muc"  =>   "e982aa33-8e27-4d94-99e9-b513b6993c6d"
            ],
            [
              "hash"  =>   "2FBBC2C1-8DD2-418D-992D-0EEA90D9112C",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "26001000000000003000",
              "ten_chuong"  =>   "Chương III HOẠT ĐỘNG ĐIỀU TIẾT GIÁ CỦA NHÀ NƯỚC",
              "hash_chu_de"  =>   "7a9dcc15-370d-40b4-a02b-28e583b25dbf",
              "hash_de_muc"  =>   "e982aa33-8e27-4d94-99e9-b513b6993c6d"
            ],
            [
              "hash"  =>   "544B22AA-0748-4894-99FD-7C6E0FD14DAC",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "26001000000000004000",
              "ten_chuong"  =>   "Chương IV THẨM ĐỊNH GIÁ",
              "hash_chu_de"  =>   "7a9dcc15-370d-40b4-a02b-28e583b25dbf",
              "hash_de_muc"  =>   "e982aa33-8e27-4d94-99e9-b513b6993c6d"
            ],
            [
              "hash"  =>   "007BD061-DBB9-4EE1-96A8-75F4EB611A38",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "26001000000000004500",
              "ten_chuong"  =>   "Chương V QUY ĐỊNH VỀ GIÁ, BÌNH ỔN GIÁ VÀ ĐỊNH GIÁ ĐỐI VỚI HÀNG HÓA, DỊCH VỤ DO NHÀ NƯỚC ĐỊNH GIÁ",
              "hash_chu_de"  =>   "7a9dcc15-370d-40b4-a02b-28e583b25dbf",
              "hash_de_muc"  =>   "e982aa33-8e27-4d94-99e9-b513b6993c6d"
            ],
            [
              "hash"  =>   "76FB4804-EBD4-40C1-82FC-4F5D0C6D8829",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "26001000000000005000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "7a9dcc15-370d-40b4-a02b-28e583b25dbf",
              "hash_de_muc"  =>   "e982aa33-8e27-4d94-99e9-b513b6993c6d"
            ],
            [
              "hash"  =>   "7EDA5507-633B-4373-867E-FE0CC941078F",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "26002000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "7a9dcc15-370d-40b4-a02b-28e583b25dbf",
              "hash_de_muc"  =>   "db2f0e24-579c-40dc-ba36-8a3f27dddffb"
            ],
            [
              "hash"  =>   "0EB41105-151A-481F-A1A8-28B46A04478C",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "26002000000000002000",
              "ten_chuong"  =>   "Chương II NHIỆM VỤ, TỔ CHỨC CỦA HẢI QUAN",
              "hash_chu_de"  =>   "7a9dcc15-370d-40b4-a02b-28e583b25dbf",
              "hash_de_muc"  =>   "db2f0e24-579c-40dc-ba36-8a3f27dddffb"
            ],
            [
              "hash"  =>   "45E532FC-FE66-4553-B41C-76BEABB7DCEA",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "26002000000000003000",
              "ten_chuong"  =>   "Chương III THỦ TỤC HẢI QUAN, CHẾ ĐỘ KIỂM TRA, GIÁM SÁT HẢI QUAN",
              "hash_chu_de"  =>   "7a9dcc15-370d-40b4-a02b-28e583b25dbf",
              "hash_de_muc"  =>   "db2f0e24-579c-40dc-ba36-8a3f27dddffb"
            ],
            [
              "hash"  =>   "8D6B4AD5-F04E-4EF3-8455-E22BCE8BEF2B",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "26002000000000004000",
              "ten_chuong"  =>   "Chương IV TỔ CHỨC THU THUẾ VÀ CÁC KHOẢN THU KHÁC ĐỐI VỚI HÀNG HÓA XUẤT KHẨU, NHẬP KHẨU",
              "hash_chu_de"  =>   "7a9dcc15-370d-40b4-a02b-28e583b25dbf",
              "hash_de_muc"  =>   "db2f0e24-579c-40dc-ba36-8a3f27dddffb"
            ],
            [
              "hash"  =>   "AFADDDFB-ADBF-42AB-8A1D-E2DC71EFA5AB",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "26002000000000005000",
              "ten_chuong"  =>   "Chương V PHÒNG, CHỐNG BUÔN LẬU, VẬN CHUYỂN TRÁI PHÉP HÀNG HÓA QUA BIÊN GIỚI",
              "hash_chu_de"  =>   "7a9dcc15-370d-40b4-a02b-28e583b25dbf",
              "hash_de_muc"  =>   "db2f0e24-579c-40dc-ba36-8a3f27dddffb"
            ],
            [
              "hash"  =>   "986402B3-0C38-40F8-9B0D-B2E2C0AD267C",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "26002000000000006000",
              "ten_chuong"  =>   "Chương VI THÔNG TIN HẢI QUAN VÀ THỐNG KÊ HÀNG HÓA XUẤT KHẨU, NHẬP KHẨU",
              "hash_chu_de"  =>   "7a9dcc15-370d-40b4-a02b-28e583b25dbf",
              "hash_de_muc"  =>   "db2f0e24-579c-40dc-ba36-8a3f27dddffb"
            ],
            [
              "hash"  =>   "75CA8FC8-57C0-47F7-A980-961C32964174",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "26002000000000007000",
              "ten_chuong"  =>   "Chương VII QUẢN LÝ NHÀ NƯỚC VỀ HẢI QUAN",
              "hash_chu_de"  =>   "7a9dcc15-370d-40b4-a02b-28e583b25dbf",
              "hash_de_muc"  =>   "db2f0e24-579c-40dc-ba36-8a3f27dddffb"
            ],
            [
              "hash"  =>   "B46CB9ED-885E-4341-87E0-1BE33F42B3B1",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "26002000000000008000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "7a9dcc15-370d-40b4-a02b-28e583b25dbf",
              "hash_de_muc"  =>   "db2f0e24-579c-40dc-ba36-8a3f27dddffb"
            ],
            [
              "hash"  =>   "560E9122-4F58-492F-B5B5-A6B5A9A03E8F",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "26003000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "7a9dcc15-370d-40b4-a02b-28e583b25dbf",
              "hash_de_muc"  =>   "c9f81fd6-ecf4-4c63-a44c-6d59a4daac9c"
            ],
            [
              "hash"  =>   "FA82FA32-CFE2-445B-A25C-636688DEAAB0",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "26003000000000002000",
              "ten_chuong"  =>   "Chương II NHIỆM VỤ, QUYỀN HẠN CỦA CÁC CƠ QUAN NHÀ NƯỚC VÀ TRÁCH NHIỆM, NGHĨA VỤ CỦA TỔ CHỨC, CÁ NHÂN VỀ NGÂN SÁCH NHÀ NƯỚC",
              "hash_chu_de"  =>   "7a9dcc15-370d-40b4-a02b-28e583b25dbf",
              "hash_de_muc"  =>   "c9f81fd6-ecf4-4c63-a44c-6d59a4daac9c"
            ],
            [
              "hash"  =>   "60B877BB-9983-413F-9D01-76E3DC7BD932",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "26003000000000003000",
              "ten_chuong"  =>   "Chương III NGUỒN THU, NHIỆM VỤ CHI CỦA NGÂN SÁCH CÁC CẤP",
              "hash_chu_de"  =>   "7a9dcc15-370d-40b4-a02b-28e583b25dbf",
              "hash_de_muc"  =>   "c9f81fd6-ecf4-4c63-a44c-6d59a4daac9c"
            ],
            [
              "hash"  =>   "AEE103CD-FEBF-4C9A-85B8-E317CD8692E0",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "26003000000000004000",
              "ten_chuong"  =>   "Chương IV LẬP DỰ TOÁN NGÂN SÁCH NHÀ NƯỚC",
              "hash_chu_de"  =>   "7a9dcc15-370d-40b4-a02b-28e583b25dbf",
              "hash_de_muc"  =>   "c9f81fd6-ecf4-4c63-a44c-6d59a4daac9c"
            ],
            [
              "hash"  =>   "4399C307-EFDC-49D9-8F6D-D0B55A9C605E",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "26003000000000005000",
              "ten_chuong"  =>   "Chương V CHẤP HÀNH NGÂN SÁCH NHÀ NƯỚC",
              "hash_chu_de"  =>   "7a9dcc15-370d-40b4-a02b-28e583b25dbf",
              "hash_de_muc"  =>   "c9f81fd6-ecf4-4c63-a44c-6d59a4daac9c"
            ],
            [
              "hash"  =>   "5AF11358-B61C-417C-B635-0D5F2B20D126",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "26003000000000006000",
              "ten_chuong"  =>   "Chương VI KẾ TOÁN, KIỂM TOÁN VÀ QUYẾT TOÁN NGÂN SÁCH NHÀ NƯỚC",
              "hash_chu_de"  =>   "7a9dcc15-370d-40b4-a02b-28e583b25dbf",
              "hash_de_muc"  =>   "c9f81fd6-ecf4-4c63-a44c-6d59a4daac9c"
            ],
            [
              "hash"  =>   "D511A409-1A35-4C0F-939C-8E6F8824A130",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "26003000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "7a9dcc15-370d-40b4-a02b-28e583b25dbf",
              "hash_de_muc"  =>   "c9f81fd6-ecf4-4c63-a44c-6d59a4daac9c"
            ],
            [
              "hash"  =>   "9ECD463C-11F8-4E75-8EF0-88D94871DAB6",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "27001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "12f7dcb6-5ab4-4b7e-a248-2a5e09c113f5"
            ],
            [
              "hash"  =>   "A6AC085B-4DE8-4D68-AAC7-CCCAEA43D52B",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "27001000000000002000",
              "ten_chuong"  =>   "Chương II HOẠT ĐỘNG ĐO ĐẠC VÀ BẢN ĐỒ CƠ BẢN",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "12f7dcb6-5ab4-4b7e-a248-2a5e09c113f5"
            ],
            [
              "hash"  =>   "2C7D5EE3-0653-411A-9C9D-3ED1C7B45E50",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "27001000000000003000",
              "ten_chuong"  =>   "Chương III HOẠT ĐỘNG ĐO ĐẠC VÀ BẢN ĐỒ CHUYÊN NGÀNH",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "12f7dcb6-5ab4-4b7e-a248-2a5e09c113f5"
            ],
            [
              "hash"  =>   "C7ABFACB-9FD9-40D0-A39B-4FEFA1745176",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "27001000000000004000",
              "ten_chuong"  =>   "Chương IV CHẤT LƯỢNG SẢN PHẨM ĐO ĐẠC VÀ BẢN ĐỒ",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "12f7dcb6-5ab4-4b7e-a248-2a5e09c113f5"
            ],
            [
              "hash"  =>   "D00350E5-8FA5-4DD2-A38C-E078034672B0",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "27001000000000005000",
              "ten_chuong"  =>   "Chương V CÔNG TRÌNH HẠ TẦNG ĐO ĐẠC",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "12f7dcb6-5ab4-4b7e-a248-2a5e09c113f5"
            ],
            [
              "hash"  =>   "37D2F223-5A29-4BC6-AD49-328094A84838",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "27001000000000006000",
              "ten_chuong"  =>   "Chương VI THÔNG TIN, DỮ LIỆU, SẢN PHẨM ĐO ĐẠC VÀ BẢN ĐỒ; HẠ TẦNG DỮ LIỆU KHÔNG GIAN ĐỊA LÝ QUỐC GIA",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "12f7dcb6-5ab4-4b7e-a248-2a5e09c113f5"
            ],
            [
              "hash"  =>   "4B8A5F35-B6B8-41A4-9859-0A61D774FCC5",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "27001000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KIỆN KINH DOANH DỊCH VỤ ĐO ĐẠC VÀ BẢN ĐỒ; QUYỀN, NGHĨA VỤ CỦA TỔ CHỨC, CÁ NHÂN HOẠT ĐỘNG ĐO ĐẠC VÀ BẢN ĐỒ",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "12f7dcb6-5ab4-4b7e-a248-2a5e09c113f5"
            ],
            [
              "hash"  =>   "67556152-30DB-46AD-968D-22F4D72018D5",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "27001000000000008000",
              "ten_chuong"  =>   "Chương VIII QUẢN LÝ NHÀ NƯỚC VỀ ĐO ĐẠC VÀ BẢN ĐỒ",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "12f7dcb6-5ab4-4b7e-a248-2a5e09c113f5"
            ],
            [
              "hash"  =>   "F0AD5CB0-4ED4-4AC3-BFF7-DFCE984BDC21",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "27001000000000008500",
              "ten_chuong"  =>   "Chương IX QUY ĐỊNH KỸ THUẬT, TIÊU CHUẨN VÀ QUY CHUẨN KỸ THUẬT; ĐỊNH MỨC KINH TẾ - KỸ THUẬT VỀ ĐO ĐẠC VÀ BẢN ĐỒ",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "12f7dcb6-5ab4-4b7e-a248-2a5e09c113f5"
            ],
            [
              "hash"  =>   "BBE2CD7B-B866-4241-97A1-92EA209C3158",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "27001000000000008750",
              "ten_chuong"  =>   "Chương X DANH MỤC ĐỊA DANH DÂN CƯ, SƠN VĂN, THỦY VĂN, KINH TẾ - XÃ HỘI PHỤC VỤ CÔNG TÁC THÀNH LẬP BẢN ĐỒ CÁC TỈNH, THÀNH PHỐ",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "12f7dcb6-5ab4-4b7e-a248-2a5e09c113f5"
            ],
            [
              "hash"  =>   "4E965146-79DD-486C-9276-12320216DB9C",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "27001000000000009000",
              "ten_chuong"  =>   "Chương XI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "12f7dcb6-5ab4-4b7e-a248-2a5e09c113f5"
            ],
            [
              "hash"  =>   "758C2D04-CC6C-401E-94D9-765700D25489",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "27002000000000001000",
              "ten_chuong"  =>   "Chương I QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "a6f7334f-42bb-4437-a03f-e6a04816dc9c"
            ],
            [
              "hash"  =>   "794D65E9-F9E7-4590-B2D4-57BCC31CB564",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "27002000000000002000",
              "ten_chuong"  =>   "Chương II QUẢN LÝ, KHAI THÁC MẠNG LƯỚI TRẠM KHÍ TƯỢNG THỦY VĂN",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "a6f7334f-42bb-4437-a03f-e6a04816dc9c"
            ],
            [
              "hash"  =>   "73CAAAFC-77C8-4A16-B0B0-8909BFD8EA9A",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "27002000000000003000",
              "ten_chuong"  =>   "Chương III DỰ BÁO, CẢNH BÁO KHÍ TƯỢNG THUỶ VĂN",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "a6f7334f-42bb-4437-a03f-e6a04816dc9c"
            ],
            [
              "hash"  =>   "28E157C3-2FDB-4614-B5AC-A83B6EB11B9D",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "27002000000000004000",
              "ten_chuong"  =>   "Chương IV THÔNG TIN, DỮ LIỆU KHÍ TƯỢNG THUỶ VĂN",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "a6f7334f-42bb-4437-a03f-e6a04816dc9c"
            ],
            [
              "hash"  =>   "6093D453-F956-4EC3-A4EA-6F8394697AB1",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "27002000000000005000",
              "ten_chuong"  =>   "Chương V GIÁM SÁT BIẾN ĐỔI KHÍ HẬU",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "a6f7334f-42bb-4437-a03f-e6a04816dc9c"
            ],
            [
              "hash"  =>   "B2CA9818-FAD1-4CEC-B3F2-00E79A3282C5",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "27002000000000006000",
              "ten_chuong"  =>   "Chương VI HOẠT ĐỘNG PHỤC VỤ, DỊCH VỤ KHÍ TƯỢNG THỦY VĂN",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "a6f7334f-42bb-4437-a03f-e6a04816dc9c"
            ],
            [
              "hash"  =>   "26545145-6D36-4FE1-B522-2AF683516A3C",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "27002000000000007000",
              "ten_chuong"  =>   "Chương VII TÁC ĐỘNG VÀO THỜI TIẾT",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "a6f7334f-42bb-4437-a03f-e6a04816dc9c"
            ],
            [
              "hash"  =>   "948E28D5-3F90-43DA-AC25-E0573F0401A9",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "27002000000000008000",
              "ten_chuong"  =>   "Chương VIII HỢP TÁC QUỐC TẾ VỀ HOẠT ĐỘNG KHÍ TƯỢNG THUỶ VĂN",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "a6f7334f-42bb-4437-a03f-e6a04816dc9c"
            ],
            [
              "hash"  =>   "056B24AC-8335-4A6A-B774-069D4DF09855",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "27002000000000009000",
              "ten_chuong"  =>   "Chương IX QUẢN LÝ NHÀ NƯỚC VỀ HOẠT ĐỘNG KHÍ TƯỢNG THUỶ VĂN",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "a6f7334f-42bb-4437-a03f-e6a04816dc9c"
            ],
            [
              "hash"  =>   "A90445DB-D37E-4A24-A7EB-22BF5E86C176",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "27002000000000009500",
              "ten_chuong"  =>   "Chương X QUY ĐỊNH KỸ THUẬT VÀ QUY CHUẨN KỸ THUẬT TRONG CÔNG TÁC KHÍ TƯỢNG THỦY VĂN",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "a6f7334f-42bb-4437-a03f-e6a04816dc9c"
            ],
            [
              "hash"  =>   "DBFFCD49-BFC7-4A2C-BE10-4A156D66F4AD",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "27002000000000009750",
              "ten_chuong"  =>   "Chương XI QUY ĐỊNH VỀ ĐỊNH MỨC KINH TẾ - KỸ THUẬT TRONG CÔNG TÁC KHÍ TƯỢNG THỦY VĂN",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "a6f7334f-42bb-4437-a03f-e6a04816dc9c"
            ],
            [
              "hash"  =>   "5A74311A-D3A1-49E7-83CC-3DE6E7507F0F",
              "so_thu_tu"  =>   12,
              "MAPC"  =>   "27002000000000010000",
              "ten_chuong"  =>   "Chương XII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "a6f7334f-42bb-4437-a03f-e6a04816dc9c"
            ],
            [
              "hash"  =>   "AADDCF70-50B8-405F-942A-94528218BD81",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "27003000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "07929ef0-f5ac-4870-886c-2e8195fa39f4"
            ],
            [
              "hash"  =>   "BF388301-9E63-4C5B-ACAD-184188BB61F5",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "27003000000000002000",
              "ten_chuong"  =>   "Chương II CHIẾN LƯỢC, QUY HOẠCH KHOÁNG SẢN",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "07929ef0-f5ac-4870-886c-2e8195fa39f4"
            ],
            [
              "hash"  =>   "90A9FB84-A0CA-4735-94A2-5E54F728144D",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "27003000000000003000",
              "ten_chuong"  =>   "Chương III BẢO VỆ KHOÁNG SẢN CHƯA KHAI THÁC",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "07929ef0-f5ac-4870-886c-2e8195fa39f4"
            ],
            [
              "hash"  =>   "2B80868A-9F05-4425-9384-537AB1851B9D",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "27003000000000004000",
              "ten_chuong"  =>   "Chương IV ĐIỀU TRA CƠ BẢN ĐỊA CHẤT VỀ KHOÁNG SẢN",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "07929ef0-f5ac-4870-886c-2e8195fa39f4"
            ],
            [
              "hash"  =>   "AC3D7013-AAEE-4954-858D-32BACCB9263F",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "27003000000000005000",
              "ten_chuong"  =>   "Chương V KHU VỰC KHOÁNG SẢN",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "07929ef0-f5ac-4870-886c-2e8195fa39f4"
            ],
            [
              "hash"  =>   "6BA207A7-A362-4BA0-871F-5E22B8B3B159",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "27003000000000006000",
              "ten_chuong"  =>   "Chương VI BẢO VỆ MÔI TRƯỜNG, SỬ DỤNG ĐẤT, NƯỚC, HẠ TẦNG KỸ THUẬT TRONG HOẠT ĐỘNG KHOÁNG SẢN",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "07929ef0-f5ac-4870-886c-2e8195fa39f4"
            ],
            [
              "hash"  =>   "F4BC897B-90F7-4A56-A018-B151D43724E1",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "27003000000000007000",
              "ten_chuong"  =>   "Chương VII THĂM DÒ KHOÁNG SẢN",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "07929ef0-f5ac-4870-886c-2e8195fa39f4"
            ],
            [
              "hash"  =>   "922E1DF4-08E7-4413-971D-7981812966C8",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "27003000000000008000",
              "ten_chuong"  =>   "Chương VIII KHAI THÁC KHOÁNG SẢN VÀ KHAI THÁC TẬN THU KHOÁNG SẢN",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "07929ef0-f5ac-4870-886c-2e8195fa39f4"
            ],
            [
              "hash"  =>   "3007B3DA-C7F1-4708-995A-0F4E7C8E67AE",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "27003000000000009000",
              "ten_chuong"  =>   "Chương IX TÀI CHÍNH VỀ KHOÁNG SẢN VÀ ĐẤU GIÁ QUYỀN KHAI THÁC KHOÁNG SẢN",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "07929ef0-f5ac-4870-886c-2e8195fa39f4"
            ],
            [
              "hash"  =>   "F6A47ED0-6E0C-4ABD-BD56-3E96EE53E337",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "27003000000000010000",
              "ten_chuong"  =>   "Chương X TRÁCH NHIỆM QUẢN LÝ NHÀ NƯỚC VỀ KHOÁNG SẢN",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "07929ef0-f5ac-4870-886c-2e8195fa39f4"
            ],
            [
              "hash"  =>   "BB8E1C01-BC5F-4589-8632-C8175689D227",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "27003000000000010500",
              "ten_chuong"  =>   "Chương XI QUY ĐỊNH KỸ THUẬT VÀ ĐỊNH MỨC KINH TẾ - KỸ THUẬT LĨNH VỰC KHOÁNG SẢN",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "07929ef0-f5ac-4870-886c-2e8195fa39f4"
            ],
            [
              "hash"  =>   "05FAD718-9E74-4ABD-9513-B501314580FE",
              "so_thu_tu"  =>   12,
              "MAPC"  =>   "27003000000000010750",
              "ten_chuong"  =>   "Chương XII CHỨC NĂNG, NHIỆM VỤ, QUYỀN HẠN VÀ CƠ CẤU TỔ CHỨC CỦA TỔNG CỤC ĐỊA CHẤT VÀ KHOÁNG SẢN VIỆT NAM",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "07929ef0-f5ac-4870-886c-2e8195fa39f4"
            ],
            [
              "hash"  =>   "682A606E-2E7D-48B0-BD90-57DA49454E5C",
              "so_thu_tu"  =>   13,
              "MAPC"  =>   "27003000000000011000",
              "ten_chuong"  =>   "Chương XIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "07929ef0-f5ac-4870-886c-2e8195fa39f4"
            ],
            [
              "hash"  =>   "32E71D6E-7C74-4A11-A111-E72D9EDA5EE9",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "27004000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "ae3606a8-ef39-4d23-a46e-becbc1f86038"
            ],
            [
              "hash"  =>   "6581EB18-072F-4282-A466-CF8415BF7D49",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "27004000000000002000",
              "ten_chuong"  =>   "Chương II CHIẾN LƯỢC KHAI THÁC, SỬ DỤNG BỀN VỮNG TÀI NGUYÊN, BẢO VỆ MÔI TRƯỜNG BIỂN VÀ HẢI ĐẢO",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "ae3606a8-ef39-4d23-a46e-becbc1f86038"
            ],
            [
              "hash"  =>   "F7758D2D-D9C5-4ED6-9A8E-AC3F4185E9B3",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "27004000000000003000",
              "ten_chuong"  =>   "Chương III ĐIỀU TRA CƠ BẢN, NGHIÊN CỨU KHOA HỌC VỀ TÀI NGUYÊN, MÔI TRƯỜNG BIỂN VÀ HẢI ĐẢO",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "ae3606a8-ef39-4d23-a46e-becbc1f86038"
            ],
            [
              "hash"  =>   "386C2BFA-F0B1-420E-87A5-794E0A666722",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "27004000000000004000",
              "ten_chuong"  =>   "Chương IV QUY HOẠCH TỔNG THỂ KHAI THÁC, SỬ DỤNG BỀN VỮNG TÀI NGUYÊN VÙNG BỜ; CHƯƠNG TRÌNH QUẢN LÝ TỔNG HỢP TÀI NGUYÊN VÙNG BỜ",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "ae3606a8-ef39-4d23-a46e-becbc1f86038"
            ],
            [
              "hash"  =>   "D1912CE2-A1B3-4BFE-82CA-BD5BC06D96C2",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "27004000000000005000",
              "ten_chuong"  =>   "Chương V QUẢN LÝ TÀI NGUYÊN HẢI ĐẢO",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "ae3606a8-ef39-4d23-a46e-becbc1f86038"
            ],
            [
              "hash"  =>   "BEBE01FF-2B87-4D5E-8124-8A878DD8C28C",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "27004000000000006000",
              "ten_chuong"  =>   "Chương VI KIỂM SOÁT Ô NHIỄM, ỨNG PHÓ SỰ CỐ TRÀN DẦU, HÓA CHẤT ĐỘC VÀ NHẬN CHÌM Ở BIỂN",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "ae3606a8-ef39-4d23-a46e-becbc1f86038"
            ],
            [
              "hash"  =>   "2ECCF482-2E3B-4CB8-B637-D09DCE009CE7",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "27004000000000007000",
              "ten_chuong"  =>   "Chương VII QUAN TRẮC, GIÁM SÁT TỔNG HỢP VÀ HỆ THỐNG THÔNG TIN,CƠ SỞ DỮ LIỆU VỀ TÀI NGUYÊN, MÔI TRƯỜNG BIỂN VÀ HẢI ĐẢO",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "ae3606a8-ef39-4d23-a46e-becbc1f86038"
            ],
            [
              "hash"  =>   "F02C74CD-A799-4DD0-9D8F-ABDDB108C97F",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "27004000000000008000",
              "ten_chuong"  =>   "Chương VIII HỢP TÁC QUỐC TẾ VỀ TÀI NGUYÊN, MÔI TRƯỜNG BIỂN VÀ HẢI ĐẢO",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "ae3606a8-ef39-4d23-a46e-becbc1f86038"
            ],
            [
              "hash"  =>   "3C43171B-027A-413F-A44E-FC4F07005EAB",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "27004000000000009000",
              "ten_chuong"  =>   "Chương IX TRÁCH NHIỆM QUẢN LÝ TỔNG HỢP TÀI NGUYÊN VÀ BẢO VỆ MÔI TRƯỜNG BIỂN VÀ HẢI ĐẢO",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "ae3606a8-ef39-4d23-a46e-becbc1f86038"
            ],
            [
              "hash"  =>   "32DC08E5-1CB9-4C86-B4B0-82BCED12FEC6",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "27004000000000009500",
              "ten_chuong"  =>   "Chương X QUY ĐỊNH KỸ THUẬT VÀ ĐỊNH MỨC KINH TẾ - KỸ THUẬT LĨNH VỰC TÀI NGUYÊN, MÔI TRƯỜNG BIỂN VÀ HẢI ĐẢO",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "ae3606a8-ef39-4d23-a46e-becbc1f86038"
            ],
            [
              "hash"  =>   "6D957030-ACC7-4644-ADB9-FD86EDEB8E76",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "27004000000000009750",
              "ten_chuong"  =>   "Chương XI CHỨC NĂNG, NHIỆM VỤ, QUYỀN HẠN VÀ CƠ CẤU TỔ CHỨC CỦA TỔNG CỤC BIỂN VÀ HẢI ĐẢO VIỆT NAM",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "ae3606a8-ef39-4d23-a46e-becbc1f86038"
            ],
            [
              "hash"  =>   "2B995926-D968-4F3D-9355-D229426EA973",
              "so_thu_tu"  =>   12,
              "MAPC"  =>   "27004000000000010000",
              "ten_chuong"  =>   "Chương XII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "ae3606a8-ef39-4d23-a46e-becbc1f86038"
            ],
            [
              "hash"  =>   "7D0BBA9F-8D02-45C8-A9E1-FD68067AD32E",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "27005000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "2b14c823-f513-4350-9d72-94a30840c722"
            ],
            [
              "hash"  =>   "102152FC-A2E1-47A9-8791-73861DFC49C5",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "27005000000000002000",
              "ten_chuong"  =>   "Chương II ĐIỀU TRA CƠ BẢN, CHIẾN LƯỢC, QUY HOẠCH TÀI NGUYÊN NƯỚC",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "2b14c823-f513-4350-9d72-94a30840c722"
            ],
            [
              "hash"  =>   "392AAF6C-132D-4DFF-B2B0-483E90D43A6C",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "27005000000000003000",
              "ten_chuong"  =>   "Chương III BẢO VỆ TÀI NGUYÊN NƯỚC",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "2b14c823-f513-4350-9d72-94a30840c722"
            ],
            [
              "hash"  =>   "0F0EB0FF-035B-4844-B1A4-58980F6B9287",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "27005000000000004000",
              "ten_chuong"  =>   "Chương IV KHAI THÁC, SỬ DỤNG TÀI NGUYÊN NƯỚC",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "2b14c823-f513-4350-9d72-94a30840c722"
            ],
            [
              "hash"  =>   "415E5244-2698-438F-9C3A-AE111E72D148",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "27005000000000005000",
              "ten_chuong"  =>   "Chương V PHÒNG, CHỐNG VÀ KHẮC PHỤC HẬU QUẢ TÁC HẠI DO NƯỚC GÂY RA",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "2b14c823-f513-4350-9d72-94a30840c722"
            ],
            [
              "hash"  =>   "B43FEE0D-D3C6-47D8-958B-8F85A3D0F728",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "27005000000000006000",
              "ten_chuong"  =>   "Chương VI TÀI CHÍNH VỀ TÀI NGUYÊN NƯỚC",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "2b14c823-f513-4350-9d72-94a30840c722"
            ],
            [
              "hash"  =>   "B8EE02F9-48B2-412A-B9DE-F4A1B702F46C",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "27005000000000007000",
              "ten_chuong"  =>   "Chương VII QUAN HỆ QUỐC TẾ VỀ TÀI NGUYÊN NƯỚC",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "2b14c823-f513-4350-9d72-94a30840c722"
            ],
            [
              "hash"  =>   "E0CFD1E6-BCA1-453C-A0E5-2740ECAE9E17",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "27005000000000008000",
              "ten_chuong"  =>   "Chương VIII TRÁCH NHIỆM QUẢN LÝ TÀI NGUYÊN NƯỚC",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "2b14c823-f513-4350-9d72-94a30840c722"
            ],
            [
              "hash"  =>   "BAD716C9-826B-4DBD-A4B7-A76434F167DC",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "27005000000000008500",
              "ten_chuong"  =>   "Chương IX QUY ĐỊNH KỸ THUẬT, ĐỊNH MỨC KINH TẾ - KỸ THUẬT TRONG QUẢN LÝ TÀI NGUYÊN NƯỚC",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "2b14c823-f513-4350-9d72-94a30840c722"
            ],
            [
              "hash"  =>   "58E699CA-46E2-4659-8770-3B0337A54A49",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "27005000000000009000",
              "ten_chuong"  =>   "Chương X THANH TRA CHUYÊN NGÀNH TÀI NGUYÊN NƯỚC, GIẢI QUYẾT TRANH CHẤP VỀ TÀI NGUYÊN NƯỚC",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "2b14c823-f513-4350-9d72-94a30840c722"
            ],
            [
              "hash"  =>   "76CDF04B-F63E-462D-A54B-4EAA9B9CD90C",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "27005000000000010000",
              "ten_chuong"  =>   "Chương XI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "2b14c823-f513-4350-9d72-94a30840c722"
            ],
            [
              "hash"  =>   "FD30FCE3-A3BB-4A32-B06B-345C626A4015",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "27006000000000001000",
              "ten_chuong"  =>   "Chương I QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "8585b6f4-56c8-457e-afd1-c8e17d60afcb"
            ],
            [
              "hash"  =>   "999847CA-23FF-49DE-BCCD-DBFE2D4FA0AC",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "27006000000000002000",
              "ten_chuong"  =>   "Chương II HỆ THỐNG THU NHẬN DỮ LIỆU ẢNH VIỄN THÁM",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "8585b6f4-56c8-457e-afd1-c8e17d60afcb"
            ],
            [
              "hash"  =>   "319A1B0D-F848-404E-B553-92B31470E52F",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "27006000000000003000",
              "ten_chuong"  =>   "Chương III CƠ SỞ DỮ LIỆU ẢNH VIỄN THÁM",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "8585b6f4-56c8-457e-afd1-c8e17d60afcb"
            ],
            [
              "hash"  =>   "4B94244D-CFF8-4F43-B638-A2F39F105FED",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "27006000000000004000",
              "ten_chuong"  =>   "Chương IV LƯU TRỮ, CUNG CẤP, KHAI THÁC, SỬ DỤNG THÔNG TIN, DỮ LIỆU ẢNH VIỄN THÁM, SẢN PHẨM VIỄN THÁM",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "8585b6f4-56c8-457e-afd1-c8e17d60afcb"
            ],
            [
              "hash"  =>   "21B00E04-9B23-4167-ADE6-B166B46E9920",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "27006000000000005000",
              "ten_chuong"  =>   "Chương V TRÁCH NHIỆM VỀ HOẠT ĐỘNG VIỄN THÁM",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "8585b6f4-56c8-457e-afd1-c8e17d60afcb"
            ],
            [
              "hash"  =>   "1F772365-7570-4CD5-B154-7FB805362698",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "27006000000000005500",
              "ten_chuong"  =>   "Chương VI QUY ĐỊNH QUY TRÌNH, KỸ THUẬT VÀ ĐỊNH MỨC - KINH TẾ KỸ THUẬT",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "8585b6f4-56c8-457e-afd1-c8e17d60afcb"
            ],
            [
              "hash"  =>   "153080DF-8349-4337-AC41-581D208321C2",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "27006000000000006000",
              "ten_chuong"  =>   "Chương VII HIỆU LỰC THI HÀNH VÀ TỔ CHỨC THỰC HIỆN",
              "hash_chu_de"  =>   "c054141c-d30c-4e83-9f35-2fb1c61c6e7c",
              "hash_de_muc"  =>   "8585b6f4-56c8-457e-afd1-c8e17d60afcb"
            ],
            [
              "hash"  =>   "ACB5D709-73B3-411E-A9F5-C5BABC772734",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "28001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "18250665-85b4-4ab9-b862-4eb8afbde3fa"
            ],
            [
              "hash"  =>   "4DD40E58-5D68-4F6E-88BA-AE102AB61BFF",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "28001000000000002000",
              "ten_chuong"  =>   "Chương II CHIẾN LƯỢC, KẾ HOẠCH DỰ TRỮ QUỐC GIA",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "18250665-85b4-4ab9-b862-4eb8afbde3fa"
            ],
            [
              "hash"  =>   "8095DA80-E684-4606-BE1A-3C5178C2A7AE",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "28001000000000003000",
              "ten_chuong"  =>   "Chương III NGÂN SÁCH NHÀ NƯỚC CHI CHO DỰ TRỮ QUỐC GIA",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "18250665-85b4-4ab9-b862-4eb8afbde3fa"
            ],
            [
              "hash"  =>   "C1045414-6DA7-4E81-9771-7A005B3B9608",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "28001000000000004000",
              "ten_chuong"  =>   "Chương IV QUẢN LÝ, ĐIỀU HÀNH DỰ TRỮ QUỐC GIA",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "18250665-85b4-4ab9-b862-4eb8afbde3fa"
            ],
            [
              "hash"  =>   "02A9806B-83D2-4E92-BCBC-2688AA98635D",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "28001000000000005000",
              "ten_chuong"  =>   "Chương V KHO DỰ TRỮ QUỐC GIA, NGHIÊN CỨU KHOA HỌC VÀ ỨNG DỤNG CÔNG NGHỆ BẢO QUẢN HÀNG DỰ TRỮ QUỐC GIA",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "18250665-85b4-4ab9-b862-4eb8afbde3fa"
            ],
            [
              "hash"  =>   "8122B02D-2448-4B6C-BC59-F85E72AF9DB0",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "28001000000000005500",
              "ten_chuong"  =>   "Chương VI HOÁ ĐƠN BÁN HÀNG DỰ TRỮ QUỐC GIA VÀ XỬ LÝ CÁC KHOẢN NỢ DỰ TRỮ QUỐC GIA TỒN ĐỌNG",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "18250665-85b4-4ab9-b862-4eb8afbde3fa"
            ],
            [
              "hash"  =>   "92913CEC-2B46-4FF6-911C-1E763F4DB0C3",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "28001000000000006000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "18250665-85b4-4ab9-b862-4eb8afbde3fa"
            ],
            [
              "hash"  =>   "AD4C4CF7-B2B7-44CF-B0BF-B4CAE4998DAB",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "28003000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "dc9295ff-6fda-47b1-854e-4cc831d036da"
            ],
            [
              "hash"  =>   "4FC6F6E5-C7EE-4880-B544-79E3A7AA3B81",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "28003000000000002000",
              "ten_chuong"  =>   "Chương II NỘI DUNG QUẢN LÝ NHÀ NƯỚC VỀ TÀI SẢN CÔNG VÀ NHIỆM VỤ, QUYỀN HẠN CỦA CÁC CƠ QUAN NHÀ NƯỚC ĐỐI VỚI TÀI SẢN CÔNG",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "dc9295ff-6fda-47b1-854e-4cc831d036da"
            ],
            [
              "hash"  =>   "29891F4A-3868-494D-928D-EF0E0A65CFE1",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "28003000000000003000",
              "ten_chuong"  =>   "Chương III CHẾ ĐỘ QUẢN LÝ, SỬ DỤNG TÀI SẢN CÔNG TẠI CƠ QUAN, TỔ CHỨC, ĐƠN VỊ",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "dc9295ff-6fda-47b1-854e-4cc831d036da"
            ],
            [
              "hash"  =>   "80FA4F76-DEAD-4631-9CE1-6A0FDA0E789C",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "28003000000000004000",
              "ten_chuong"  =>   "Chương IV CHẾ ĐỘ QUẢN LÝ, SỬ DỤNG TÀI SẢN KẾT CẤU HẠ TẦNG",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "dc9295ff-6fda-47b1-854e-4cc831d036da"
            ],
            [
              "hash"  =>   "F50442FE-A5D2-480D-BF54-449019CE61B1",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "28003000000000005000",
              "ten_chuong"  =>   "Chương V CHẾ ĐỘ QUẢN LÝ, SỬ DỤNG TÀI SẢN CÔNGTẠI DOANH NGHIỆP ",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "dc9295ff-6fda-47b1-854e-4cc831d036da"
            ],
            [
              "hash"  =>   "67AF59A3-3D38-444F-8446-7D52C0032A95",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "28003000000000006000",
              "ten_chuong"  =>   "Chương VI CHẾ ĐỘ QUẢN LÝ, SỬ DỤNG TÀI SẢN CỦA DỰ ÁN SỬ DỤNG VỐN NHÀ NƯỚC, TÀI SẢN ĐƯỢC XÁC LẬP QUYỀN SỞ HỮU TOÀN DÂN ",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "dc9295ff-6fda-47b1-854e-4cc831d036da"
            ],
            [
              "hash"  =>   "61109FA6-409C-463D-B042-FA830B703813",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "28003000000000007000",
              "ten_chuong"  =>   "Chương VII CHẾ ĐỘ QUẢN LÝ, SỬ DỤNG, KHAI THÁC NGUỒN LỰC TÀI CHÍNH TỪ ĐẤT ĐAI, TÀI NGUYÊN ",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "dc9295ff-6fda-47b1-854e-4cc831d036da"
            ],
            [
              "hash"  =>   "ECB65BC4-2229-4F21-B93A-01301B974A0B",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "28003000000000008000",
              "ten_chuong"  =>   "Chương VIII HỆ THỐNG THÔNG TIN VỀ TÀI SẢN CÔNG VÀ CƠ SỞ DỮ LIỆU QUỐC GIA VỀ TÀI SẢN CÔNG",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "dc9295ff-6fda-47b1-854e-4cc831d036da"
            ],
            [
              "hash"  =>   "6CAEB634-D339-4A12-B176-5328F250A522",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "28003000000000009000",
              "ten_chuong"  =>   "Chương IX DỊCH VỤ VỀ TÀI SẢN CÔNG",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "dc9295ff-6fda-47b1-854e-4cc831d036da"
            ],
            [
              "hash"  =>   "F2B791B4-A155-4E3F-BAF5-622553460DAC",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "28003000000000010000",
              "ten_chuong"  =>   "Chương X ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "dc9295ff-6fda-47b1-854e-4cc831d036da"
            ],
            [
              "hash"  =>   "AB8D1D72-26E4-4696-AD78-B94169250D3F",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "28005000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "1be13677-e642-46c3-9f06-1f9510c3ee84"
            ],
            [
              "hash"  =>   "A8A93700-02AA-4327-9E73-02BF89EBACA7",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "28005000000000002000",
              "ten_chuong"  =>   "Chương II THẨM ĐỊNH, PHÊ DUYỆT KHOẢN VIỆN TRỢ",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "1be13677-e642-46c3-9f06-1f9510c3ee84"
            ],
            [
              "hash"  =>   "8DADFA88-AA10-43EA-B372-F6FDBFA754B7",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "28005000000000003000",
              "ten_chuong"  =>   "Chương III QUẢN LÝ THỰC HIỆN VIỆN TRỢ",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "1be13677-e642-46c3-9f06-1f9510c3ee84"
            ],
            [
              "hash"  =>   "6C1BD95D-F7B2-4416-ABBF-2983EFE63EBA",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "28005000000000004000",
              "ten_chuong"  =>   "Chương IV QUẢN LÝ TÀI CHÍNH VIỆN TRỢ",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "1be13677-e642-46c3-9f06-1f9510c3ee84"
            ],
            [
              "hash"  =>   "09BF706B-38B5-45BA-A82D-B2E9AEB0F913",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "28005000000000005000",
              "ten_chuong"  =>   "Chương V QUẢN LÝ NHÀ NƯỚC VỀ VIỆN TRỢ ",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "1be13677-e642-46c3-9f06-1f9510c3ee84"
            ],
            [
              "hash"  =>   "B1C57FFD-B234-440A-B6AA-90D7E7A47032",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "28005000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "1be13677-e642-46c3-9f06-1f9510c3ee84"
            ],
            [
              "hash"  =>   "029AFC60-5C15-49AD-8A31-FED4330227F4",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "28007000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "9307592e-075c-4fed-ae43-f64ba345399c"
            ],
            [
              "hash"  =>   "EF3058B0-6DE4-4898-BDFF-DCC0FDE10A1B",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "28007000000000002000",
              "ten_chuong"  =>   "Chương II ĐẦU TƯ VỐN NHÀ NƯỚC VÀO DOANH NGHIỆP",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "9307592e-075c-4fed-ae43-f64ba345399c"
            ],
            [
              "hash"  =>   "2DC7BBDE-0DB8-488C-BAD5-E467764AF530",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "28007000000000003000",
              "ten_chuong"  =>   "Chương III QUẢN LÝ, SỬ DỤNG VỐN, TÀI SẢN TẠI DOANH NGHIỆP DO NHÀ NƯỚC NẮM GIỮ 100% VỐN ĐIỀU LỆ",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "9307592e-075c-4fed-ae43-f64ba345399c"
            ],
            [
              "hash"  =>   "284ED005-6572-4EE6-B35D-698290D57057",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "28007000000000004000",
              "ten_chuong"  =>   "Chương IV CƠ CẤU LẠI VỐN NHÀ NƯỚC TẠI DOANH NGHIỆP",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "9307592e-075c-4fed-ae43-f64ba345399c"
            ],
            [
              "hash"  =>   "F907A805-912F-476A-8E25-CF5B943F7B3A",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "28007000000000005000",
              "ten_chuong"  =>   "Chương V QUYỀN, TRÁCH NHIỆM CỦA ĐẠI DIỆN CHỦ SỞ HỮU NHÀ NƯỚC",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "9307592e-075c-4fed-ae43-f64ba345399c"
            ],
            [
              "hash"  =>   "4916AEB9-8215-4E87-B6A6-80420E60A091",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "28007000000000006000",
              "ten_chuong"  =>   "Chương VI NGƯỜI ĐẠI DIỆN PHẦN VỐN NHÀ NƯỚC, NGƯỜI ĐẠI DIỆN PHẦN VỐN CỦA DOANH NGHIỆP",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "9307592e-075c-4fed-ae43-f64ba345399c"
            ],
            [
              "hash"  =>   "DBA8662B-3EDE-4E2C-91E2-05307C484E58",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "28007000000000007000",
              "ten_chuong"  =>   "Chương VII GIÁM SÁT, KIỂM TRA, THANH TRA HOẠT ĐỘNG ĐẦU TƯ, QUẢN LÝ, SỬ DỤNG VỐN NHÀ NƯỚC TẠI DOANH NGHIỆP",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "9307592e-075c-4fed-ae43-f64ba345399c"
            ],
            [
              "hash"  =>   "98E5539F-BE91-4015-8B34-3CBB11D5130F",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "28007000000000008000",
              "ten_chuong"  =>   "Chương VIII ĐÁNH GIÁ, XẾP LOẠI, BÁO CÁO VÀ CÔNG KHAI HOẠT ĐỘNG CỦA DOANH NGHIỆP DO NHÀ NƯỚC NẮM GIỮ 100% VỐN ĐIỀU LỆ",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "9307592e-075c-4fed-ae43-f64ba345399c"
            ],
            [
              "hash"  =>   "DDEBCD5B-57AE-4749-BB7D-8FA260B925FA",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "28007000000000009000",
              "ten_chuong"  =>   "Chương IX KHEN THƯỞNG VÀ XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "9307592e-075c-4fed-ae43-f64ba345399c"
            ],
            [
              "hash"  =>   "4A42ECEB-EB22-4E76-89A5-7A6C47D63E9C",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "28007000000000010000",
              "ten_chuong"  =>   "Chương X ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "1afcaf4b-85cb-4039-8627-3a8a101a7e5b",
              "hash_de_muc"  =>   "9307592e-075c-4fed-ae43-f64ba345399c"
            ],
            [
              "hash"  =>   "BC7A1E0A-1623-4BF9-8C2C-B00C6C157167",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "29001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "c7ee2251-ddf9-4c7a-88f8-a9568fad0247",
              "hash_de_muc"  =>   "467d54d1-b81e-49a0-a066-21e2c9b191fc"
            ],
            [
              "hash"  =>   "9CD13867-EBEB-46FE-A382-8A48C4EE48BC",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "29001000000000002000",
              "ten_chuong"  =>   "Chương II TỔ CHỨC THI ĐUA, DANH HIỆU VÀ TIÊU CHUẨN DANH HIỆU THI ĐUA",
              "hash_chu_de"  =>   "c7ee2251-ddf9-4c7a-88f8-a9568fad0247",
              "hash_de_muc"  =>   "467d54d1-b81e-49a0-a066-21e2c9b191fc"
            ],
            [
              "hash"  =>   "C9C30D29-28A3-4E98-9662-66F12103453A",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "29001000000000003000",
              "ten_chuong"  =>   "Chương III HÌNH THỨC, ĐỐI TƯỢNG, TIÊU CHUẨN KHEN THƯỞNG",
              "hash_chu_de"  =>   "c7ee2251-ddf9-4c7a-88f8-a9568fad0247",
              "hash_de_muc"  =>   "467d54d1-b81e-49a0-a066-21e2c9b191fc"
            ],
            [
              "hash"  =>   "5CF48E69-99E6-4DBA-A43C-33EADAAD899C",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "29001000000000004000",
              "ten_chuong"  =>   "Chương IV THẨM QUYỀN QUYẾT ĐỊNH, TRAO TẶNG, THỦ TỤC, HỒ SƠ XÉT ĐỀ NGHỊ DANH HIỆU THI ĐUA VÀ KHEN THƯỞNG",
              "hash_chu_de"  =>   "c7ee2251-ddf9-4c7a-88f8-a9568fad0247",
              "hash_de_muc"  =>   "467d54d1-b81e-49a0-a066-21e2c9b191fc"
            ],
            [
              "hash"  =>   "922F0CC0-F87A-4BFD-8A0F-6AA0CC68FB11",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "29001000000000005000",
              "ten_chuong"  =>   "Chương V QUYỀN VÀ NGHĨA VỤ CỦA CÁ NHÂN, TẬP THỂ ĐƯỢC TẶNG DANH HIỆU THI ĐUA VÀ KHEN THƯỞNG",
              "hash_chu_de"  =>   "c7ee2251-ddf9-4c7a-88f8-a9568fad0247",
              "hash_de_muc"  =>   "467d54d1-b81e-49a0-a066-21e2c9b191fc"
            ],
            [
              "hash"  =>   "FE62F37E-1A02-4349-A97E-A31EE146D373",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "29001000000000005750",
              "ten_chuong"  =>   "Chương VI THI ĐUA, KHEN THƯỞNG TRONG MỘT SỐ LĨNH VỰC",
              "hash_chu_de"  =>   "c7ee2251-ddf9-4c7a-88f8-a9568fad0247",
              "hash_de_muc"  =>   "467d54d1-b81e-49a0-a066-21e2c9b191fc"
            ],
            [
              "hash"  =>   "CEAD0132-35EB-4EA6-BCE9-34C5FC1834DB",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "29001000000000006000",
              "ten_chuong"  =>   "Chương VII QUẢN LÝ NHÀ NƯỚC VỀ CÔNG TÁC THI ĐUA, KHEN THƯỞNG",
              "hash_chu_de"  =>   "c7ee2251-ddf9-4c7a-88f8-a9568fad0247",
              "hash_de_muc"  =>   "467d54d1-b81e-49a0-a066-21e2c9b191fc"
            ],
            [
              "hash"  =>   "08AD602D-1307-41F1-99B3-AD7331C394C8",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "29001000000000007000",
              "ten_chuong"  =>   "Chương VIII XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "c7ee2251-ddf9-4c7a-88f8-a9568fad0247",
              "hash_de_muc"  =>   "467d54d1-b81e-49a0-a066-21e2c9b191fc"
            ],
            [
              "hash"  =>   "32A8EF20-E0CE-428D-AC59-CF7972FCA8BE",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "29001000000000008000",
              "ten_chuong"  =>   "Chương IX ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "c7ee2251-ddf9-4c7a-88f8-a9568fad0247",
              "hash_de_muc"  =>   "467d54d1-b81e-49a0-a066-21e2c9b191fc"
            ],
            [
              "hash"  =>   "151FEE31-33EF-48FE-A64A-84E385BAEC57",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "30002000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "88a4972a-48c2-4def-926b-a71b9f6e4be7",
              "hash_de_muc"  =>   "7434b4be-95be-4913-b9a4-7d67671c4466"
            ],
            [
              "hash"  =>   "00882899-F064-4254-80D3-F22C501FA3C1",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "30002000000000002000",
              "ten_chuong"  =>   "Chương II HỆ THỐNG TỔ CHỨC THI HÀNH ÁN DÂN SỰ VÀ CHẤP HÀNH VIÊN",
              "hash_chu_de"  =>   "88a4972a-48c2-4def-926b-a71b9f6e4be7",
              "hash_de_muc"  =>   "7434b4be-95be-4913-b9a4-7d67671c4466"
            ],
            [
              "hash"  =>   "B30C8DD7-64CB-4307-A1B0-6E91A10510C9",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "30002000000000003000",
              "ten_chuong"  =>   "Chương III THỦ TỤC THI HÀNH ÁN DÂN SỰ",
              "hash_chu_de"  =>   "88a4972a-48c2-4def-926b-a71b9f6e4be7",
              "hash_de_muc"  =>   "7434b4be-95be-4913-b9a4-7d67671c4466"
            ],
            [
              "hash"  =>   "7672A81F-896C-4BF6-BDF0-5701EE4CFDEB",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "30002000000000004000",
              "ten_chuong"  =>   "Chương IV BIỆN PHÁP BẢO ĐẢM VÀ CƯỠNG CHẾ THI HÀNH ÁN",
              "hash_chu_de"  =>   "88a4972a-48c2-4def-926b-a71b9f6e4be7",
              "hash_de_muc"  =>   "7434b4be-95be-4913-b9a4-7d67671c4466"
            ],
            [
              "hash"  =>   "6DFBF9F9-93D5-4748-9116-270505E1CC9E",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "30002000000000005000",
              "ten_chuong"  =>   "Chương V THI HÀNH ÁN TRONG MỘT SỐ TRƯỜNG HỢP CỤ THỂ",
              "hash_chu_de"  =>   "88a4972a-48c2-4def-926b-a71b9f6e4be7",
              "hash_de_muc"  =>   "7434b4be-95be-4913-b9a4-7d67671c4466"
            ],
            [
              "hash"  =>   "EE6E3879-0B2B-4EE5-9332-CBD1298E6412",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "30002000000000006000",
              "ten_chuong"  =>   "Chương VI KHIẾU NẠI, TỐ CÁO VÀ KHÁNG NGHỊ VỀ THI HÀNH ÁN DÂN SỰ",
              "hash_chu_de"  =>   "88a4972a-48c2-4def-926b-a71b9f6e4be7",
              "hash_de_muc"  =>   "7434b4be-95be-4913-b9a4-7d67671c4466"
            ],
            [
              "hash"  =>   "F07B5299-88F8-448E-81BB-DBDAD717EF7F",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "30002000000000007000",
              "ten_chuong"  =>   "Chương VII XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "88a4972a-48c2-4def-926b-a71b9f6e4be7",
              "hash_de_muc"  =>   "7434b4be-95be-4913-b9a4-7d67671c4466"
            ],
            [
              "hash"  =>   "7A2C0FED-F82C-4038-B5E8-E751A0F46A0F",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "30002000000000008000",
              "ten_chuong"  =>   "Chương VIII NHIỆM VỤ, QUYỀN HẠN CỦA CƠ QUAN, TỔ CHỨC TRONG THI HÀNH ÁN DÂN SỰ",
              "hash_chu_de"  =>   "88a4972a-48c2-4def-926b-a71b9f6e4be7",
              "hash_de_muc"  =>   "7434b4be-95be-4913-b9a4-7d67671c4466"
            ],
            [
              "hash"  =>   "9CBF77AD-6BF8-4B7F-82ED-391B2EFEFC45",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "30002000000000008500",
              "ten_chuong"  =>   "Chương IX QUY ĐỊNH HƯỚNG DẪN KẾ TOÁN NGHIỆP VỤ THI HÀNH ÁN DÂN SỰ",
              "hash_chu_de"  =>   "88a4972a-48c2-4def-926b-a71b9f6e4be7",
              "hash_de_muc"  =>   "7434b4be-95be-4913-b9a4-7d67671c4466"
            ],
            [
              "hash"  =>   "932CB6AC-34FF-443C-8B11-088B3308A26D",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "30002000000000008750",
              "ten_chuong"  =>   "Chương X QUY ĐỊNH HƯỚNG DẪN CHẾ ĐỘ BÁO CÁO, THỐNG KÊ THI HÀNH ÁN DÂN SỰ",
              "hash_chu_de"  =>   "88a4972a-48c2-4def-926b-a71b9f6e4be7",
              "hash_de_muc"  =>   "7434b4be-95be-4913-b9a4-7d67671c4466"
            ],
            [
              "hash"  =>   "924969AB-9B08-4116-8628-CEACAB1CDC2B",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "30002000000000009000",
              "ten_chuong"  =>   "Chương XI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "88a4972a-48c2-4def-926b-a71b9f6e4be7",
              "hash_de_muc"  =>   "7434b4be-95be-4913-b9a4-7d67671c4466"
            ],
            [
              "hash"  =>   "D6380CA0-7926-4048-AD40-DA8F6CBBB243",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "30004000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "88a4972a-48c2-4def-926b-a71b9f6e4be7",
              "hash_de_muc"  =>   "47d2af30-c19b-4481-a0e1-47045635b0a3"
            ],
            [
              "hash"  =>   "0A9F155A-49D0-4BA6-A61F-EE0439C17934",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "30004000000000002000",
              "ten_chuong"  =>   "Chương II THỪA PHÁT LẠI",
              "hash_chu_de"  =>   "88a4972a-48c2-4def-926b-a71b9f6e4be7",
              "hash_de_muc"  =>   "47d2af30-c19b-4481-a0e1-47045635b0a3"
            ],
            [
              "hash"  =>   "420EE8A9-5D31-4AB9-857A-DDE77AA4CDBC",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "30004000000000003000",
              "ten_chuong"  =>   "Chương III VĂN PHÒNG THỪA PHÁT LẠI",
              "hash_chu_de"  =>   "88a4972a-48c2-4def-926b-a71b9f6e4be7",
              "hash_de_muc"  =>   "47d2af30-c19b-4481-a0e1-47045635b0a3"
            ],
            [
              "hash"  =>   "4DABCDCF-8B0D-4052-8285-32A6BFA531A2",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "30004000000000004000",
              "ten_chuong"  =>   "Chương IV THẨM QUYỀN, PHẠM VI, THỦ TỤC THỰC HIỆN CÔNG VIỆC CỦA THỪA PHÁT LẠI",
              "hash_chu_de"  =>   "88a4972a-48c2-4def-926b-a71b9f6e4be7",
              "hash_de_muc"  =>   "47d2af30-c19b-4481-a0e1-47045635b0a3"
            ],
            [
              "hash"  =>   "8FA85EAF-704D-4419-A155-40B02D93CDE0",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "30004000000000005000",
              "ten_chuong"  =>   "Chương V QUẢN LÝ NHÀ NƯỚC, XỬ LÝ VI PHẠM, GIẢI QUYẾT KHIẾU NẠI, TỐ CÁO, GIẢI QUYẾT TRANH CHẤP VÀ KIỂM SÁT HOẠT ĐỘNG CỦA THỪA PHÁT LẠI",
              "hash_chu_de"  =>   "88a4972a-48c2-4def-926b-a71b9f6e4be7",
              "hash_de_muc"  =>   "47d2af30-c19b-4481-a0e1-47045635b0a3"
            ],
            [
              "hash"  =>   "4F9B09EE-2191-4329-A87B-83FC37141DF6",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "30004000000000006000",
              "ten_chuong"  =>   "Chương VI HIỆU LỰC THI HÀNH VÀ ĐIỀU KHOẢN CHUYỂN TIẾP",
              "hash_chu_de"  =>   "88a4972a-48c2-4def-926b-a71b9f6e4be7",
              "hash_de_muc"  =>   "47d2af30-c19b-4481-a0e1-47045635b0a3"
            ],
            [
              "hash"  =>   "D663B4F6-A29E-4FFE-AC62-76801C401827",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "31001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "ee961e69-7a8d-4405-8fe6-ecdf7e44323f",
              "hash_de_muc"  =>   "13bbc44f-b9ad-49f2-b66b-65da10d2dd34"
            ],
            [
              "hash"  =>   "0E709AAF-D0ED-4F3C-883F-838E75130102",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "31001000000000002000",
              "ten_chuong"  =>   "Chương II HỆ THỐNG THÔNG TIN THỐNG KÊ NHÀ NƯỚC",
              "hash_chu_de"  =>   "ee961e69-7a8d-4405-8fe6-ecdf7e44323f",
              "hash_de_muc"  =>   "13bbc44f-b9ad-49f2-b66b-65da10d2dd34"
            ],
            [
              "hash"  =>   "B9455399-84B0-40ED-AE9C-D4181C22290A",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "31001000000000003000",
              "ten_chuong"  =>   "Chương III THU THẬP THÔNG TIN THỐNG KÊ NHÀ NƯỚC",
              "hash_chu_de"  =>   "ee961e69-7a8d-4405-8fe6-ecdf7e44323f",
              "hash_de_muc"  =>   "13bbc44f-b9ad-49f2-b66b-65da10d2dd34"
            ],
            [
              "hash"  =>   "04577A98-092A-4A8F-9324-70860077E280",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "31001000000000003500",
              "ten_chuong"  =>   "Chương IV QUY ĐỊNH VỀ CÔNG TÁC THÔNG KÊ VÀ HỆ THỐNG CHỈ TIÊU THỐNG KÊ TRONG CÁC LĨNH VỰC",
              "hash_chu_de"  =>   "ee961e69-7a8d-4405-8fe6-ecdf7e44323f",
              "hash_de_muc"  =>   "13bbc44f-b9ad-49f2-b66b-65da10d2dd34"
            ],
            [
              "hash"  =>   "CAE4D2AF-19B0-4BE2-BD77-FD93F3DC7FEE",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "31001000000000004000",
              "ten_chuong"  =>   "Chương V PHÂN TÍCH VÀ DỰ BÁO THỐNG KÊ, CÔNG BỐ VÀ PHỔ BIẾN THÔNG TIN THỐNG KÊ NHÀ NƯỚC",
              "hash_chu_de"  =>   "ee961e69-7a8d-4405-8fe6-ecdf7e44323f",
              "hash_de_muc"  =>   "13bbc44f-b9ad-49f2-b66b-65da10d2dd34"
            ],
            [
              "hash"  =>   "EFF8666D-5C24-4654-BD9B-DD15E568B551",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "31001000000000005000",
              "ten_chuong"  =>   "Chương VI NGHIÊN CỨU, ỨNG DỤNG PHƯƠNG PHÁP THỐNG KÊ, CÔNG NGHỆ THÔNG TIN - TRUYỀN THÔNG VÀ HỢP TÁC QUỐC TẾ TRONG HOẠT ĐỘNG THỐNG KÊ NHÀ NƯỚC",
              "hash_chu_de"  =>   "ee961e69-7a8d-4405-8fe6-ecdf7e44323f",
              "hash_de_muc"  =>   "13bbc44f-b9ad-49f2-b66b-65da10d2dd34"
            ],
            [
              "hash"  =>   "7D681324-9E08-4E7A-AAD1-E954CA84C501",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "31001000000000006000",
              "ten_chuong"  =>   "Chương VII SỬ DỤNG CƠ SỞ DỮ LIỆU THỐNG KÊ VÀ THÔNG TIN THỐNG KÊ NHÀ NƯỚC",
              "hash_chu_de"  =>   "ee961e69-7a8d-4405-8fe6-ecdf7e44323f",
              "hash_de_muc"  =>   "13bbc44f-b9ad-49f2-b66b-65da10d2dd34"
            ],
            [
              "hash"  =>   "B0AA73BA-52A3-4781-A59A-9D03E113C053",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "31001000000000007000",
              "ten_chuong"  =>   "Chương VIII TỔ CHỨC THỐNG KÊ NHÀ NƯỚC",
              "hash_chu_de"  =>   "ee961e69-7a8d-4405-8fe6-ecdf7e44323f",
              "hash_de_muc"  =>   "13bbc44f-b9ad-49f2-b66b-65da10d2dd34"
            ],
            [
              "hash"  =>   "2AF248ED-F25B-4895-B55F-B94E90DB3172",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "31001000000000008000",
              "ten_chuong"  =>   "Chương IX HOẠT ĐỘNG THỐNG KÊ, SỬ DỤNG THÔNG TIN THỐNG KÊ NGOÀI THỐNG KÊ NHÀ NƯỚC",
              "hash_chu_de"  =>   "ee961e69-7a8d-4405-8fe6-ecdf7e44323f",
              "hash_de_muc"  =>   "13bbc44f-b9ad-49f2-b66b-65da10d2dd34"
            ],
            [
              "hash"  =>   "45556972-12F0-4148-9CA0-4CF2A7B784EE",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "31001000000000009000",
              "ten_chuong"  =>   "Chương X ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "ee961e69-7a8d-4405-8fe6-ecdf7e44323f",
              "hash_de_muc"  =>   "13bbc44f-b9ad-49f2-b66b-65da10d2dd34"
            ],
            [
              "hash"  =>   "A777DCE9-494F-4A9A-AE46-4DD3706E033E",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "32001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "73b6a37d-b55b-443d-b0fd-8f7d1b215ca1",
              "hash_de_muc"  =>   "78cd97a5-7ff4-48b4-affc-42cd96aeec18"
            ],
            [
              "hash"  =>   "C224A1BC-F2B4-4B38-A244-71A3B7BC1DD7",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "32001000000000002000",
              "ten_chuong"  =>   "Chương II QUYỀN TỰ DO BÁO CHÍ, QUYỀN TỰ DO NGÔN LUẬN TRÊN BÁO CHÍ CỦA CÔNG DÂN",
              "hash_chu_de"  =>   "73b6a37d-b55b-443d-b0fd-8f7d1b215ca1",
              "hash_de_muc"  =>   "78cd97a5-7ff4-48b4-affc-42cd96aeec18"
            ],
            [
              "hash"  =>   "12D49C27-408F-4657-AE4B-4E7D771CBF9E",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "32001000000000003000",
              "ten_chuong"  =>   "Chương III TỔ CHỨC BÁO CHÍ",
              "hash_chu_de"  =>   "73b6a37d-b55b-443d-b0fd-8f7d1b215ca1",
              "hash_de_muc"  =>   "78cd97a5-7ff4-48b4-affc-42cd96aeec18"
            ],
            [
              "hash"  =>   "75CE51CC-8466-4599-9505-0859858AF696",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "32001000000000004000",
              "ten_chuong"  =>   "Chương IV HOẠT ĐỘNG BÁO CHÍ",
              "hash_chu_de"  =>   "73b6a37d-b55b-443d-b0fd-8f7d1b215ca1",
              "hash_de_muc"  =>   "78cd97a5-7ff4-48b4-affc-42cd96aeec18"
            ],
            [
              "hash"  =>   "FEB8D8F7-EEDB-409F-8C0F-977FE565C2D3",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "32001000000000005000",
              "ten_chuong"  =>   "Chương V KHEN THƯỞNG, THANH TRA VÀ XỬ LÝ VI PHẠM TRONG HOẠT ĐỘNG BÁO CHÍ",
              "hash_chu_de"  =>   "73b6a37d-b55b-443d-b0fd-8f7d1b215ca1",
              "hash_de_muc"  =>   "78cd97a5-7ff4-48b4-affc-42cd96aeec18"
            ],
            [
              "hash"  =>   "A78EC0DE-69D7-449D-91F1-AD565D0D36AB",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "32001000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "73b6a37d-b55b-443d-b0fd-8f7d1b215ca1",
              "hash_de_muc"  =>   "78cd97a5-7ff4-48b4-affc-42cd96aeec18"
            ],
            [
              "hash"  =>   "BD738247-A2C5-4399-BA55-3FB3D0E2B708",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "32002000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "73b6a37d-b55b-443d-b0fd-8f7d1b215ca1",
              "hash_de_muc"  =>   "24a6c4d2-66f1-4e91-b25e-5526c4f71ae9"
            ],
            [
              "hash"  =>   "B435C095-F98F-4CBB-A549-AEDBBD61BAC7",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "32002000000000002000",
              "ten_chuong"  =>   "Chương II CÔNG KHAI THÔNG TIN",
              "hash_chu_de"  =>   "73b6a37d-b55b-443d-b0fd-8f7d1b215ca1",
              "hash_de_muc"  =>   "24a6c4d2-66f1-4e91-b25e-5526c4f71ae9"
            ],
            [
              "hash"  =>   "E7FFA408-242D-4FB1-AEAC-CBA1F4D192C5",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "32002000000000003000",
              "ten_chuong"  =>   "Chương III CUNG CẤP THÔNG TIN THEO YÊU CẦU",
              "hash_chu_de"  =>   "73b6a37d-b55b-443d-b0fd-8f7d1b215ca1",
              "hash_de_muc"  =>   "24a6c4d2-66f1-4e91-b25e-5526c4f71ae9"
            ],
            [
              "hash"  =>   "D65D94E1-BAC2-423B-8D33-44BA217A28F0",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "32002000000000004000",
              "ten_chuong"  =>   "Chương IV TRÁCH NHIỆM BẢO ĐẢM THỰC HIỆN QUYỀN TIẾP CẬN THÔNG TIN CỦA CÔNG DÂN",
              "hash_chu_de"  =>   "73b6a37d-b55b-443d-b0fd-8f7d1b215ca1",
              "hash_de_muc"  =>   "24a6c4d2-66f1-4e91-b25e-5526c4f71ae9"
            ],
            [
              "hash"  =>   "64BDD05D-189F-44FA-AFA5-E6CCC36A025B",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "32002000000000005000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "73b6a37d-b55b-443d-b0fd-8f7d1b215ca1",
              "hash_de_muc"  =>   "24a6c4d2-66f1-4e91-b25e-5526c4f71ae9"
            ],
            [
              "hash"  =>   "6F57CC2C-20AD-4197-BF78-4AFCFDBADFFF",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "32003000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "73b6a37d-b55b-443d-b0fd-8f7d1b215ca1",
              "hash_de_muc"  =>   "3c2e5819-1141-455c-a5a6-1597ea904830"
            ],
            [
              "hash"  =>   "68528D07-4313-46E3-9DCF-69C70F9A7496",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "32003000000000002000",
              "ten_chuong"  =>   "Chương II LĨNH VỰC XUẤT BẢN",
              "hash_chu_de"  =>   "73b6a37d-b55b-443d-b0fd-8f7d1b215ca1",
              "hash_de_muc"  =>   "3c2e5819-1141-455c-a5a6-1597ea904830"
            ],
            [
              "hash"  =>   "34494AA6-6D61-47D0-A838-530FAAD832A2",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "32003000000000003000",
              "ten_chuong"  =>   "Chương III LĨNH VỰC IN XUẤT BẢN PHẨM",
              "hash_chu_de"  =>   "73b6a37d-b55b-443d-b0fd-8f7d1b215ca1",
              "hash_de_muc"  =>   "3c2e5819-1141-455c-a5a6-1597ea904830"
            ],
            [
              "hash"  =>   "31CA0BC3-8F9F-43E0-873F-A33ACA067EE7",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "32003000000000004000",
              "ten_chuong"  =>   "Chương IV LĨNH VỰC PHÁT HÀNH XUẤT BẢN PHẨM",
              "hash_chu_de"  =>   "73b6a37d-b55b-443d-b0fd-8f7d1b215ca1",
              "hash_de_muc"  =>   "3c2e5819-1141-455c-a5a6-1597ea904830"
            ],
            [
              "hash"  =>   "FF393FF0-97B5-4F47-8604-4C47E6BB88B2",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "32003000000000005000",
              "ten_chuong"  =>   "Chương V XUẤT BẢN VÀ PHÁT HÀNH XUẤT BẢN PHẨM ĐIỆN TỬ",
              "hash_chu_de"  =>   "73b6a37d-b55b-443d-b0fd-8f7d1b215ca1",
              "hash_de_muc"  =>   "3c2e5819-1141-455c-a5a6-1597ea904830"
            ],
            [
              "hash"  =>   "7112EE98-8BF3-4B96-A355-A253FACCA539",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "32003000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "73b6a37d-b55b-443d-b0fd-8f7d1b215ca1",
              "hash_de_muc"  =>   "3c2e5819-1141-455c-a5a6-1597ea904830"
            ],
            [
              "hash"  =>   "BFFC93CE-D078-4D74-BE05-6CDA1CDAC6BB",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "33002000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "554293de-37dd-4111-896d-420469f81e92"
            ],
            [
              "hash"  =>   "85638DCA-9C8E-4896-9A84-8FCE8509764C",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "33002000000000002000",
              "ten_chuong"  =>   "Chương II CHI PHÍ GIÁM ĐỊNH TRONG TỐ TỤNG",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "554293de-37dd-4111-896d-420469f81e92"
            ],
            [
              "hash"  =>   "5B2EEB62-7EE3-4673-8B3C-C3D380EB1F18",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "33002000000000003000",
              "ten_chuong"  =>   "Chương III CHI PHÍ ĐỊNH GIÁ TÀI SẢN TRONG TỐ TỤNG",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "554293de-37dd-4111-896d-420469f81e92"
            ],
            [
              "hash"  =>   "AE36F6EE-A3C1-4FA2-A62F-47A0B4A1017C",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "33002000000000004000",
              "ten_chuong"  =>   "Chương IV CHI PHÍ CHO NGƯỜI LÀM CHỨNG TRONG TỐ TỤNG",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "554293de-37dd-4111-896d-420469f81e92"
            ],
            [
              "hash"  =>   "D40D45EC-C2CE-4B6E-B1E1-846C723889E9",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "33002000000000005000",
              "ten_chuong"  =>   "Chương V CHI PHÍ CHO NGƯỜI PHIÊN DỊCH TRONG TỐ TỤNG",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "554293de-37dd-4111-896d-420469f81e92"
            ],
            [
              "hash"  =>   "81F70DA3-41C2-4398-B9E4-B7E0E952282B",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "33002000000000006000",
              "ten_chuong"  =>   "Chương VI KINH PHÍ THANH TOÁN CHI PHÍ GIÁM ĐỊNH, ĐỊNH GIÁ; CHI PHÍ CHO NGƯỜI LÀM CHỨNG, NGƯỜI PHIÊN DỊCH TRONG TỐ TỤNG",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "554293de-37dd-4111-896d-420469f81e92"
            ],
            [
              "hash"  =>   "AF40C08C-B674-458F-BFF0-961B426C0244",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "33002000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "554293de-37dd-4111-896d-420469f81e92"
            ],
            [
              "hash"  =>   "61E9B283-6050-41B9-A201-C722C0822646",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "33003000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "f607aadf-fb26-4b0e-bc95-276da24e5b5d"
            ],
            [
              "hash"  =>   "9B470F37-A28E-42AE-9774-0236174C1D9C",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "33003000000000002000",
              "ten_chuong"  =>   "Chương II NGUYÊN TẮC XÁC ĐỊNH MỨC THU, MIỄN, GIẢM PHÍ, LỆ PHÍ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "f607aadf-fb26-4b0e-bc95-276da24e5b5d"
            ],
            [
              "hash"  =>   "10F5666F-CCB2-422C-9934-FC8739FF1494",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "33003000000000003000",
              "ten_chuong"  =>   "Chương III KÊ KHAI, THU, NỘP, QUẢN LÝ VÀ SỬ DỤNG PHÍ, LỆ PHÍ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "f607aadf-fb26-4b0e-bc95-276da24e5b5d"
            ],
            [
              "hash"  =>   "0939656A-C3E1-4990-B560-463212D4DA21",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "33003000000000004000",
              "ten_chuong"  =>   "Chương IV QUYỀN, TRÁCH NHIỆM CỦA TỔ CHỨC THU VÀ NGƯỜI NỘP PHÍ, LỆ PHÍ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "f607aadf-fb26-4b0e-bc95-276da24e5b5d"
            ],
            [
              "hash"  =>   "86FC63C0-DA7F-4400-AA2F-8E33BFEC72B6",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "33003000000000005000",
              "ten_chuong"  =>   "Chương V THẨM QUYỀN VÀ TRÁCH NHIỆM CỦA CÁC CƠ QUAN NHÀ NƯỚC VỀ QUẢN LÝ PHÍ VÀ LỆ PHÍ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "f607aadf-fb26-4b0e-bc95-276da24e5b5d"
            ],
            [
              "hash"  =>   "928CA264-4D92-4CB7-BC33-09EAAEE4E2E2",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "33003000000000005500",
              "ten_chuong"  =>   "Chương VI QUY ĐỊNH VỀ PHÍ TRONG CÁC LĨNH VỰC",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "f607aadf-fb26-4b0e-bc95-276da24e5b5d"
            ],
            [
              "hash"  =>   "0A0698ED-BE82-49DF-93DF-6F6B5A3CECB5",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "33003000000000005750",
              "ten_chuong"  =>   "Chương VII QUY ĐỊNH VỀ LỆ PHÍ TRONG CÁC LĨNH VỰC",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "f607aadf-fb26-4b0e-bc95-276da24e5b5d"
            ],
            [
              "hash"  =>   "3E697BEB-2F5B-4E5C-85AA-F21402FBCDF1",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "33003000000000006000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "f607aadf-fb26-4b0e-bc95-276da24e5b5d"
            ],
            [
              "hash"  =>   "9435CF11-355F-4DD3-A9CF-A3AA515ADBE3",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "33004000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "7aa2408a-41e6-4271-99e4-7b85a55ba7d6"
            ],
            [
              "hash"  =>   "E7792648-1EB9-43DE-9B0A-4A5DE9424063",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "33004000000000002000",
              "ten_chuong"  =>   "Chương II NHIỆM VỤ, QUYỀN HẠN VÀ TRÁCH NHIỆM CỦA CƠ QUAN, TỔ CHỨC, CÁ NHÂN TRONG QUẢN LÝ THUẾ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "7aa2408a-41e6-4271-99e4-7b85a55ba7d6"
            ],
            [
              "hash"  =>   "D8E7E43B-D6F0-4B33-89CD-858C25AC850C",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "33004000000000003000",
              "ten_chuong"  =>   "Chương III ĐĂNG KÝ THUẾ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "7aa2408a-41e6-4271-99e4-7b85a55ba7d6"
            ],
            [
              "hash"  =>   "D771C51B-A6F5-452D-97C4-198FC1708E7E",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "33004000000000004000",
              "ten_chuong"  =>   "Chương IV KHAI THUẾ, TÍNH THUẾ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "7aa2408a-41e6-4271-99e4-7b85a55ba7d6"
            ],
            [
              "hash"  =>   "AB036AE7-9367-45C6-88D6-9C098E2C671A",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "33004000000000005000",
              "ten_chuong"  =>   "Chương V ẤN ĐỊNH THUẾ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "7aa2408a-41e6-4271-99e4-7b85a55ba7d6"
            ],
            [
              "hash"  =>   "68834907-DDB1-4930-AEB0-CD24F9C8DAE4",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "33004000000000006000",
              "ten_chuong"  =>   "Chương VI NỘP THUẾ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "7aa2408a-41e6-4271-99e4-7b85a55ba7d6"
            ],
            [
              "hash"  =>   "AA570393-E795-4F63-8BAA-DD41CDACFFF7",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "33004000000000007000",
              "ten_chuong"  =>   "Chương VII TRÁCH NHIỆM HOÀN THÀNH NGHĨA VỤ NỘP THUẾ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "7aa2408a-41e6-4271-99e4-7b85a55ba7d6"
            ],
            [
              "hash"  =>   "AC9857D5-D75F-4362-BAF9-851E1B35F702",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "33004000000000008000",
              "ten_chuong"  =>   "Chương VIII THỦ TỤC HOÀN THUẾ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "7aa2408a-41e6-4271-99e4-7b85a55ba7d6"
            ],
            [
              "hash"  =>   "F537EA25-E010-4E1B-85A6-0841F109881E",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "33004000000000009000",
              "ten_chuong"  =>   "Chương IX KHÔNG THU THUẾ, MIỄN THUẾ, GIẢM THUẾ; KHOANH TIỀN THUẾ NỢ; XÓA NỢ TIỀN THUẾ, TIỀN CHẬM NỘP, TIỀN PHẠT",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "7aa2408a-41e6-4271-99e4-7b85a55ba7d6"
            ],
            [
              "hash"  =>   "D84EC58F-65DF-4B90-8F75-DCEC7EE09442",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "33004000000000010000",
              "ten_chuong"  =>   "Chương X ÁP DỤNG HÓA ĐƠN, CHỨNG TỪ ĐIỆN TỬ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "7aa2408a-41e6-4271-99e4-7b85a55ba7d6"
            ],
            [
              "hash"  =>   "640BF235-A248-4B6C-B37E-A7DA1017AC56",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "33004000000000011000",
              "ten_chuong"  =>   "Chương XI THÔNG TIN NGƯỜI NỘP THUẾ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "7aa2408a-41e6-4271-99e4-7b85a55ba7d6"
            ],
            [
              "hash"  =>   "31DE7B5A-DBC2-4C69-B075-6A25BE751B3C",
              "so_thu_tu"  =>   12,
              "MAPC"  =>   "33004000000000012000",
              "ten_chuong"  =>   "Chương XII TỔ CHỨC KINH DOANH DỊCH VỤ LÀM THỦ TỤC VỀ THUẾ, LÀM THỦ TỤC HẢI QUAN",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "7aa2408a-41e6-4271-99e4-7b85a55ba7d6"
            ],
            [
              "hash"  =>   "E1D08930-631F-4759-B752-1578217E847C",
              "so_thu_tu"  =>   13,
              "MAPC"  =>   "33004000000000013000",
              "ten_chuong"  =>   "Chương XIII KIỂM TRA THUẾ, THANH TRA THUẾ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "7aa2408a-41e6-4271-99e4-7b85a55ba7d6"
            ],
            [
              "hash"  =>   "1B254BCE-795F-4D04-B7C7-9A79312E8D8D",
              "so_thu_tu"  =>   14,
              "MAPC"  =>   "33004000000000014000",
              "ten_chuong"  =>   "Chương XIV CƯỠNG CHẾ THI HÀNH QUYẾT ĐỊNH HÀNH CHÍNH VỀ QUẢN LÝ THUẾ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "7aa2408a-41e6-4271-99e4-7b85a55ba7d6"
            ],
            [
              "hash"  =>   "00591707-C175-43CB-A3EE-254E409F5705",
              "so_thu_tu"  =>   15,
              "MAPC"  =>   "33004000000000015000",
              "ten_chuong"  =>   "Chương XV XỬ PHẠT VI PHẠM HÀNH CHÍNH VỀ QUẢN LÝ THUẾ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "7aa2408a-41e6-4271-99e4-7b85a55ba7d6"
            ],
            [
              "hash"  =>   "07A951F7-BE0E-4435-8F73-81CF53C524C2",
              "so_thu_tu"  =>   16,
              "MAPC"  =>   "33004000000000016000",
              "ten_chuong"  =>   "Chương XVI KHIẾU NẠI, TỐ CÁO, KHỞI KIỆN",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "7aa2408a-41e6-4271-99e4-7b85a55ba7d6"
            ],
            [
              "hash"  =>   "D8FE6781-4248-484A-AABD-3F4CBE52BE45",
              "so_thu_tu"  =>   17,
              "MAPC"  =>   "33004000000000017000",
              "ten_chuong"  =>   "Chương XVII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "7aa2408a-41e6-4271-99e4-7b85a55ba7d6"
            ],
            [
              "hash"  =>   "53EE6F89-0686-4D09-A9CE-FFD274C6A489",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "33006000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "ccc43f43-94e8-47f7-a669-677d5a9e3c08"
            ],
            [
              "hash"  =>   "A07588F8-DCC8-4778-B582-4F5BF66C0F75",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "33006000000000002000",
              "ten_chuong"  =>   "Chương II CĂN CỨ VÀ PHƯƠNG PHÁP TÍNH THUẾ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "ccc43f43-94e8-47f7-a669-677d5a9e3c08"
            ],
            [
              "hash"  =>   "FA92CBAE-C135-4F65-8E6B-7CB1DCA9BE5C",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "33006000000000003000",
              "ten_chuong"  =>   "Chương III KHẤU TRỪ, HOÀN THUẾ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "ccc43f43-94e8-47f7-a669-677d5a9e3c08"
            ],
            [
              "hash"  =>   "8474C2B8-1160-4040-8ABF-3C502E3F9159",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "33006000000000003500",
              "ten_chuong"  =>   "Chương IV HƯỚNG DẪN VỀ THUẾ GIÁ TRỊ GIA TĂNG TRONG MỘT SỐ LĨNH VỰC ĐẶC THÙ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "ccc43f43-94e8-47f7-a669-677d5a9e3c08"
            ],
            [
              "hash"  =>   "1A99CFD9-D949-4C09-8D11-529A93AF64F7",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "33006000000000004000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "ccc43f43-94e8-47f7-a669-677d5a9e3c08"
            ],
            [
              "hash"  =>   "6FA4C9C7-4E2D-42A4-9D39-4620915E77E6",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "33007000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "74578908-a474-48ba-a2e1-488ce45475aa"
            ],
            [
              "hash"  =>   "A3C750EF-7EEF-45EC-B1EF-490FEFE27150",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "33007000000000002000",
              "ten_chuong"  =>   "Chương II CĂN CỨ TÍNH THUẾ VÀ BIỂU THUẾ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "74578908-a474-48ba-a2e1-488ce45475aa"
            ],
            [
              "hash"  =>   "82E147DD-9B7B-449E-9B08-B39E7864C13C",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "33007000000000003000",
              "ten_chuong"  =>   "Chương III KÊ KHAI TÍNH THUẾ VÀ LẬP SỔ THUẾ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "74578908-a474-48ba-a2e1-488ce45475aa"
            ],
            [
              "hash"  =>   "8705DFC0-ED29-483D-94E6-558E8DFE0BA3",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "33007000000000004000",
              "ten_chuong"  =>   "Chương IV THU THUẾ VÀ NỘP THUẾ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "74578908-a474-48ba-a2e1-488ce45475aa"
            ],
            [
              "hash"  =>   "0DE1CB38-F8A6-4FE3-993E-9D9BBF242F02",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "33007000000000005000",
              "ten_chuong"  =>   "Chương V GIẢM THUẾ VÀ MIỄN THUẾ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "74578908-a474-48ba-a2e1-488ce45475aa"
            ],
            [
              "hash"  =>   "BC9FBDA0-0CF1-48F0-A8FF-E81D87A03454",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "33007000000000006000",
              "ten_chuong"  =>   "Chương VI XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "74578908-a474-48ba-a2e1-488ce45475aa"
            ],
            [
              "hash"  =>   "BB392C3A-C6F3-4705-989A-6CF64CECC0E1",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "33007000000000007000",
              "ten_chuong"  =>   "Chương VII KHIẾU NẠI VÀ THỜI HIỆU",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "74578908-a474-48ba-a2e1-488ce45475aa"
            ],
            [
              "hash"  =>   "BDB9E0CD-74DF-4CFB-8695-BBF278531A5F",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "33007000000000008000",
              "ten_chuong"  =>   "Chương VIII TỔ CHỨC THỰC HIỆN",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "74578908-a474-48ba-a2e1-488ce45475aa"
            ],
            [
              "hash"  =>   "A93D83A0-89C2-412E-A894-0C1D4FA7B851",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "33007000000000009000",
              "ten_chuong"  =>   "Chương IX ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "74578908-a474-48ba-a2e1-488ce45475aa"
            ],
            [
              "hash"  =>   "F62099DB-849E-4C62-B685-AD7F35039BB7",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "33008000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "059ac230-9bb7-4445-b8e1-20819540ccd9"
            ],
            [
              "hash"  =>   "F61AD843-2F70-4AEE-91B6-03C1B883182B",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "33008000000000002000",
              "ten_chuong"  =>   "Chương II CĂN CỨ TÍNH THUẾ, ĐĂNG KÝ, KHAI, TÍNH VÀ NỘP THUẾ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "059ac230-9bb7-4445-b8e1-20819540ccd9"
            ],
            [
              "hash"  =>   "D5A09419-7668-4DFF-A7CC-8F238F2C4D38",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "33008000000000003000",
              "ten_chuong"  =>   "Chương III MIỄN THUẾ, GIẢM THUẾ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "059ac230-9bb7-4445-b8e1-20819540ccd9"
            ],
            [
              "hash"  =>   "51DA69C2-8CC8-4C13-B574-818CD531D35B",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "33008000000000003500",
              "ten_chuong"  =>   "Chương IV NỘI DUNG CHI, MỨC CHI TRONG HOẠT ĐỘNG TRIỂN KHAI LUẬT THUẾ SỬ DỤNG ĐẤT PHI NÔNG NGHIỆP",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "059ac230-9bb7-4445-b8e1-20819540ccd9"
            ],
            [
              "hash"  =>   "F4379CEA-5A99-406E-A4B3-580070C6D474",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "33008000000000004000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "059ac230-9bb7-4445-b8e1-20819540ccd9"
            ],
            [
              "hash"  =>   "F5B78A12-D0F0-4A87-B800-B78404EECD71",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "33009000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "aec013b7-861e-4925-be1f-a8a2469346e4"
            ],
            [
              "hash"  =>   "F5CE5824-CD69-4963-9F84-30E17356CC7C",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "33009000000000002000",
              "ten_chuong"  =>   "Chương II CĂN CỨ TÍNH THUẾ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "aec013b7-861e-4925-be1f-a8a2469346e4"
            ],
            [
              "hash"  =>   "91175090-AEBC-48EA-B942-4032D2BEDA1C",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "33009000000000003000",
              "ten_chuong"  =>   "Chương III KÊ KHAI, NỘP THUẾ , MIỄN, GIẢM THUẾ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "aec013b7-861e-4925-be1f-a8a2469346e4"
            ],
            [
              "hash"  =>   "124C8802-9C46-49C0-93FB-6E7A9AC5F483",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "33009000000000004000",
              "ten_chuong"  =>   "Chương IV ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "aec013b7-861e-4925-be1f-a8a2469346e4"
            ],
            [
              "hash"  =>   "556F718A-721F-405E-AFF7-1E4F7CE11A79",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "33011000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "db87752b-26a5-4f34-8dc2-bd8e6a823c21"
            ],
            [
              "hash"  =>   "148307F2-15FA-4B44-910F-E48991FD9B13",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "33011000000000002000",
              "ten_chuong"  =>   "Chương II CĂN CỨ VÀ PHƯƠNG PHÁP TÍNH THUẾ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "db87752b-26a5-4f34-8dc2-bd8e6a823c21"
            ],
            [
              "hash"  =>   "79A47541-4D25-4B92-9662-1674F1F2F05C",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "33011000000000003000",
              "ten_chuong"  =>   "Chương III ƯU ĐÃI THUẾ THU NHẬP DOANH NGHIỆP",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "db87752b-26a5-4f34-8dc2-bd8e6a823c21"
            ],
            [
              "hash"  =>   "E8516203-3367-4C86-8E5F-071C666DD7DB",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "33011000000000003500",
              "ten_chuong"  =>   "Chương IV HƯỚNG DẪN VỀ THUẾ THU NHẬP DOANH NGHIỆP TRONG MỘT SỐ LĨNH VỰC ĐẶC THÙ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "db87752b-26a5-4f34-8dc2-bd8e6a823c21"
            ],
            [
              "hash"  =>   "2A52F5F4-C597-477D-9AC1-23429BF8C1AD",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "33011000000000004000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "db87752b-26a5-4f34-8dc2-bd8e6a823c21"
            ],
            [
              "hash"  =>   "836ED625-3555-4EC8-9BDD-E4A51966BEDD",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "33013000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "4b478410-d0e7-4487-9d32-889cd067b4fb"
            ],
            [
              "hash"  =>   "CA538A8F-B678-4504-A28E-21A229EF3980",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "33013000000000002000",
              "ten_chuong"  =>   "Chương II CĂN CỨ TÍNH THUẾ, THỜI ĐIỂM TÍNH THUẾ VÀ BIỂU THUẾ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "4b478410-d0e7-4487-9d32-889cd067b4fb"
            ],
            [
              "hash"  =>   "4D42B440-9333-45C9-9F36-FDFA92F6220D",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "33013000000000003000",
              "ten_chuong"  =>   "Chương III THUẾ CHỐNG BÁN PHÁ GIÁ, THUẾ CHỐNG TRỢ CẤP, THUẾ TỰ VỆ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "4b478410-d0e7-4487-9d32-889cd067b4fb"
            ],
            [
              "hash"  =>   "BEC281FC-CB2B-4579-A46C-DEC4EBE73562",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "33013000000000004000",
              "ten_chuong"  =>   "Chương IV MIỄN THUẾ, GIẢM THUẾ, HOÀN THUẾ",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "4b478410-d0e7-4487-9d32-889cd067b4fb"
            ],
            [
              "hash"  =>   "35D1434B-8465-4BFF-BA16-22CE0F2C1E77",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "33013000000000004500",
              "ten_chuong"  =>   "Chương V QUY ĐỊNH VỀ BIỂU THUÊ NHẬP KHẨU ƯU ĐÃI ĐẶC BIỆT CỦA VIỆT NAM ĐỂ THỰC HIỆN CÁC HIỆP ĐỊNH THƯƠNG MẠI",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "4b478410-d0e7-4487-9d32-889cd067b4fb"
            ],
            [
              "hash"  =>   "F716AD20-5810-4447-808C-3FD612C027C4",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "33013000000000004750",
              "ten_chuong"  =>   "Chương VI QUY ĐỊNH VỀ VIỆC MIỄN THUẾ XUẤT KHẨU, THUẾ NHẬP KHẨU ĐỐI VỚI MỘT SỐ MẶT HÀNG",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "4b478410-d0e7-4487-9d32-889cd067b4fb"
            ],
            [
              "hash"  =>   "623763F9-14F5-416B-8A89-8EF9D77D9517",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "33013000000000005000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "09ca05d1-7f1d-4887-a65d-a210374d1969",
              "hash_de_muc"  =>   "4b478410-d0e7-4487-9d32-889cd067b4fb"
            ],
            [
              "hash"  =>   "CB38A072-BC4E-4965-AB9A-28F47332DF95",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "34001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "3284cd8d-f598-48ea-b425-53e118893530"
            ],
            [
              "hash"  =>   "3FF2571E-8BC9-4328-99FA-25438F846E02",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "34001000000000002000",
              "ten_chuong"  =>   "Chương II TRÁCH NHIỆM CỦA TỔ CHỨC, CÁ NHÂN KINH DOANH HÀNG HÓA, DỊCH VỤ ĐỐI VỚI NGƯỜI TIÊU DÙNG",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "3284cd8d-f598-48ea-b425-53e118893530"
            ],
            [
              "hash"  =>   "F42E6019-9FFA-478F-970D-DEB1AD6324BF",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "34001000000000003000",
              "ten_chuong"  =>   "Chương III TRÁCH NHIỆM CỦA TỔ CHỨC XÃ HỘI TRONG VIỆC THAM GIA BẢO VỆ QUYỀN LỢI NGƯỜI TIÊU DÙNG",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "3284cd8d-f598-48ea-b425-53e118893530"
            ],
            [
              "hash"  =>   "F1F6C989-C307-4592-B04B-D79312AE332D",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "34001000000000004000",
              "ten_chuong"  =>   "Chương IV GIẢI QUYẾT TRANH CHẤP GIỮA NGƯỜI TIÊU DÙNG VÀ TỔ CHỨC, CÁ NHÂN KINH DOANH HÀNG HÓA, DỊCH VỤ",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "3284cd8d-f598-48ea-b425-53e118893530"
            ],
            [
              "hash"  =>   "8ED16517-DA61-45C5-8BAD-6C0D58A3E0BD",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "34001000000000005000",
              "ten_chuong"  =>   "Chương V TRÁCH NHIỆM QUẢN LÝ NHÀ NƯỚC VỀ BẢO VỆ QUYỀN LỢI NGƯỜI TIÊU DÙNG",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "3284cd8d-f598-48ea-b425-53e118893530"
            ],
            [
              "hash"  =>   "82895478-7CFB-425B-AD47-6B2B02123C8E",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "34001000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "3284cd8d-f598-48ea-b425-53e118893530"
            ],
            [
              "hash"  =>   "165F1371-8CBE-4B19-B6FE-6B0B92DA92E2",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "34002000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "6b408d5f-24e1-4144-8bf6-123e3225f567"
            ],
            [
              "hash"  =>   "9907CC38-28EA-4919-89C6-359A303D5B0F",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "34002000000000002000",
              "ten_chuong"  =>   "Chương II THỊ TRƯỜNG LIÊN QUAN VÀ THỊ PHẦN",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "6b408d5f-24e1-4144-8bf6-123e3225f567"
            ],
            [
              "hash"  =>   "21DC9D96-26FF-4FF8-A7C5-61AAF4DA44F1",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "34002000000000003000",
              "ten_chuong"  =>   "Chương III THỎA THUẬN HẠN CHẾ CẠNH TRANH",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "6b408d5f-24e1-4144-8bf6-123e3225f567"
            ],
            [
              "hash"  =>   "BD2D896B-3C67-4A25-BD3C-6274E6BA2A57",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "34002000000000004000",
              "ten_chuong"  =>   "Chương IV LẠM DỤNG VỊ TRÍ THỐNG LĨNH THỊ TRƯỜNG,LẠM DỤNG VỊ TRÍ ĐỘC QUYỀN",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "6b408d5f-24e1-4144-8bf6-123e3225f567"
            ],
            [
              "hash"  =>   "85238798-3DEC-4190-9444-D7AAA2FBBD05",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "34002000000000005000",
              "ten_chuong"  =>   "Chương V TẬP TRUNG KINH TẾ",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "6b408d5f-24e1-4144-8bf6-123e3225f567"
            ],
            [
              "hash"  =>   "72710D43-8662-45EF-9FD8-6AA6BEAF78CC",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "34002000000000006000",
              "ten_chuong"  =>   "Chương VI HÀNH VI CẠNH TRANH KHÔNG LÀNH MẠNH BỊ CẤM",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "6b408d5f-24e1-4144-8bf6-123e3225f567"
            ],
            [
              "hash"  =>   "6E7BA605-8A95-49AF-A458-D158B4E8FD33",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "34002000000000007000",
              "ten_chuong"  =>   "Chương VII ỦY BAN CẠNH TRANH QUỐC GIA",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "6b408d5f-24e1-4144-8bf6-123e3225f567"
            ],
            [
              "hash"  =>   "C0DF86E4-53A6-4062-BF9C-26D2F2E4E561",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "34002000000000008000",
              "ten_chuong"  =>   "Chương VIII TỐ TỤNG CẠNH TRANH",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "6b408d5f-24e1-4144-8bf6-123e3225f567"
            ],
            [
              "hash"  =>   "27C5E15E-F278-4749-9CB0-401E5CFA4D86",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "34002000000000009000",
              "ten_chuong"  =>   "Chương IX XỬ LÝ VI PHẠM PHÁP LUẬT VỀ CẠNH TRANH",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "6b408d5f-24e1-4144-8bf6-123e3225f567"
            ],
            [
              "hash"  =>   "AB87414C-CD09-437A-8B30-E3CB2D6CB871",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "34002000000000010000",
              "ten_chuong"  =>   "Chương X ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "6b408d5f-24e1-4144-8bf6-123e3225f567"
            ],
            [
              "hash"  =>   "581C4FBD-DDDA-42FF-A0C6-6764F31037A4",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "34003000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "a5dd4141-f13c-40f3-802d-a6175684bb0a"
            ],
            [
              "hash"  =>   "3BA3B047-58FE-4DB6-BC5C-E2B59F3D0787",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "34003000000000002000",
              "ten_chuong"  =>   "Chương II CÁC BIỆN PHÁP HÀNH CHÍNH",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "a5dd4141-f13c-40f3-802d-a6175684bb0a"
            ],
            [
              "hash"  =>   "01C00219-0AE6-41B1-A765-676375DCB1B4",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "34003000000000003000",
              "ten_chuong"  =>   "Chương III CÁC BIỆN PHÁP KỸ THUẬT, KIỂM DỊCH",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "a5dd4141-f13c-40f3-802d-a6175684bb0a"
            ],
            [
              "hash"  =>   "B858E4CE-5FBF-4E14-9446-4A2DFC6775DD",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "34003000000000004000",
              "ten_chuong"  =>   "Chương IV BIỆN PHÁP PHÒNG VỆ THƯƠNG MẠI",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "a5dd4141-f13c-40f3-802d-a6175684bb0a"
            ],
            [
              "hash"  =>   "DBC672A8-4875-4744-89C8-0960CF45195F",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "34003000000000005000",
              "ten_chuong"  =>   "Chương V BIỆN PHÁP KIỂM SOÁT KHẨN CẤP TRONG HOẠT ĐỘNG NGOẠI THƯƠNG",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "a5dd4141-f13c-40f3-802d-a6175684bb0a"
            ],
            [
              "hash"  =>   "6680B692-8A4F-42AD-A95F-18E27122B94E",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "34003000000000006000",
              "ten_chuong"  =>   "Chương VI CÁC BIỆN PHÁP PHÁT TRIỂN HOẠT ĐỘNG NGOẠI THƯƠNG",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "a5dd4141-f13c-40f3-802d-a6175684bb0a"
            ],
            [
              "hash"  =>   "0868DF06-08BD-473C-A493-A26C088A8186",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "34003000000000007000",
              "ten_chuong"  =>   "Chương VII GIẢI QUYẾT TRANH CHẤP VỀ ÁP DỤNG BIỆN PHÁP QUẢN LÝ NGOẠI THƯƠNG",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "a5dd4141-f13c-40f3-802d-a6175684bb0a"
            ],
            [
              "hash"  =>   "59A15DF4-B86B-4114-AD28-4661CB20CD29",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "34003000000000008000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "a5dd4141-f13c-40f3-802d-a6175684bb0a"
            ],
            [
              "hash"  =>   "2330F72D-C62B-4CF8-B9C4-AB522461E0D9",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "34004000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "a1df366a-8d87-4f3f-9aa9-2a14ab8c2a3a"
            ],
            [
              "hash"  =>   "2F6FB758-FE69-426A-8B76-1CA3520084B5",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "34004000000000002000",
              "ten_chuong"  =>   "Chương II CHÀO BÁN CHỨNG KHOÁN",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "a1df366a-8d87-4f3f-9aa9-2a14ab8c2a3a"
            ],
            [
              "hash"  =>   "3187C212-2BCF-4BC3-AB54-2EC250AFFB9F",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "34004000000000003000",
              "ten_chuong"  =>   "Chương III CÔNG TY ĐẠI CHÚNG",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "a1df366a-8d87-4f3f-9aa9-2a14ab8c2a3a"
            ],
            [
              "hash"  =>   "8796ED06-23CF-4D32-993F-F29AB1CE99DD",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "34004000000000004000",
              "ten_chuong"  =>   "Chương IV THỊ TRƯỜNG GIAO DỊCH CHỨNG KHOÁN",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "a1df366a-8d87-4f3f-9aa9-2a14ab8c2a3a"
            ],
            [
              "hash"  =>   "58A868A5-05A5-4827-8782-5E73675256F1",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "34004000000000005000",
              "ten_chuong"  =>   "Chương V ĐĂNG KÝ, LƯU KÝ, BÙ TRỪ VÀ THANH TOÁN CHỨNG KHOÁN",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "a1df366a-8d87-4f3f-9aa9-2a14ab8c2a3a"
            ],
            [
              "hash"  =>   "C438B4E5-AD5F-4D85-B670-3724E11E0BAE",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "34004000000000006000",
              "ten_chuong"  =>   "Chương VI CÔNG TY CHỨNG KHOÁN, CÔNG TY QUẢN LÝ QUỸ ĐẦU TƯ CHỨNG KHOÁN",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "a1df366a-8d87-4f3f-9aa9-2a14ab8c2a3a"
            ],
            [
              "hash"  =>   "539790D0-8DC5-4800-8ED3-98A395EDDAAF",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "34004000000000007000",
              "ten_chuong"  =>   "Chương VII QUỸ ĐẦU TƯ CHỨNG KHOÁN, CÔNG TY ĐẦU TƯ CHỨNG KHOÁN VÀ NGÂN HÀNG GIÁM SÁT",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "a1df366a-8d87-4f3f-9aa9-2a14ab8c2a3a"
            ],
            [
              "hash"  =>   "F36BA544-3CFE-49E8-BFAE-A9314DFFEF39",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "34004000000000008000",
              "ten_chuong"  =>   "Chương VIII CÔNG BỐ THÔNG TIN",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "a1df366a-8d87-4f3f-9aa9-2a14ab8c2a3a"
            ],
            [
              "hash"  =>   "9F686CB2-A508-4002-8FC3-866F2410EFB2",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "34004000000000009000",
              "ten_chuong"  =>   "Chương IX THANH TRA, XỬ LÝ VI PHẠM, GIẢI QUYẾT TRANH CHẤP VÀ BỒI THƯỜNG THIỆT HẠI",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "a1df366a-8d87-4f3f-9aa9-2a14ab8c2a3a"
            ],
            [
              "hash"  =>   "408FB857-AF86-4B59-B611-C4470D4D2E76",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "34004000000000010000",
              "ten_chuong"  =>   "Chương X ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "a1df366a-8d87-4f3f-9aa9-2a14ab8c2a3a"
            ],
            [
              "hash"  =>   "286AAFDC-7696-4C74-9ABC-D0C607FEA554",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "34007000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "d5ad4f7a-8411-47ad-a46a-1c6d6dfd46b2"
            ],
            [
              "hash"  =>   "14AAE5D9-FF03-4260-973C-DCF4E18E55BC",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "34007000000000002000",
              "ten_chuong"  =>   "Chương II CHỦ TRƯƠNG ĐẦU TƯ VÀ QUYẾT ĐỊNH ĐẦU TƯ CHƯƠNG TRÌNH, DỰ ÁN ĐẦU TƯ CÔNG",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "d5ad4f7a-8411-47ad-a46a-1c6d6dfd46b2"
            ],
            [
              "hash"  =>   "9310324A-F4F3-467C-A933-A96A12A4D61E",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "34007000000000003000",
              "ten_chuong"  =>   "Chương III LẬP, THẨM ĐỊNH, PHÊ DUYỆT VÀ GIAO KẾ HOẠCH ĐẦU TƯ CÔNG",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "d5ad4f7a-8411-47ad-a46a-1c6d6dfd46b2"
            ],
            [
              "hash"  =>   "9A473BBE-87B1-43C0-A042-C84FF4B45699",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "34007000000000004000",
              "ten_chuong"  =>   "Chương IV THỰC HIỆN VÀ THEO DÕI, KIỂM TRA, ĐÁNH GIÁ, THANH TRA, GIÁM SÁT KẾ HOẠCH, CHƯƠNG TRÌNH, DỰ ÁN ĐẦU TƯ CÔNG",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "d5ad4f7a-8411-47ad-a46a-1c6d6dfd46b2"
            ],
            [
              "hash"  =>   "A77D18B9-4478-4F4B-98A4-4ECAF7F39EF0",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "34007000000000005000",
              "ten_chuong"  =>   "Chương V NHIỆM VỤ, QUYỀN HẠN, TRÁCH NHIỆM CỦA CƠ QUAN, TỔ CHỨC, CÁ NHÂN TRONG HOẠT ĐỘNG ĐẦU TƯ CÔNG",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "d5ad4f7a-8411-47ad-a46a-1c6d6dfd46b2"
            ],
            [
              "hash"  =>   "2FFDCA13-F949-4008-9C33-B788C97C2AF6",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "34007000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "d5ad4f7a-8411-47ad-a46a-1c6d6dfd46b2"
            ],
            [
              "hash"  =>   "A20803B6-1A37-4708-9789-E1559171CD73",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "34009000000000000500",
              "ten_chuong"  =>   "Chương I QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "3bcee07e-6c24-43df-9c31-c8850ed610a8"
            ],
            [
              "hash"  =>   "63A42CB3-802F-42C6-BEC7-0DB43D253AC3",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "34009000000000001000",
              "ten_chuong"  =>   "Chương II QUY ĐỊNH VÊ KINH DOANH SỔ SỐ",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "3bcee07e-6c24-43df-9c31-c8850ed610a8"
            ],
            [
              "hash"  =>   "C358F196-D3C5-4163-BFFA-7B056EF73673",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "34009000000000002500",
              "ten_chuong"  =>   "Chương III QUY ĐỊNH VỀ THƯƠNG MẠI ĐIỆN TỬ",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "3bcee07e-6c24-43df-9c31-c8850ed610a8"
            ],
            [
              "hash"  =>   "E5155DB3-EE8D-48AE-A6E8-024EA9009465",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "34009000000000004000",
              "ten_chuong"  =>   "Chương IV QUY ĐỊNH VỀ KINH DOANH TRÒ CHƠI ĐIỆN TỬ CÓ THƯỞNG DÀNH CHO NGƯỜI NƯỚC NGOÀI",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "3bcee07e-6c24-43df-9c31-c8850ed610a8"
            ],
            [
              "hash"  =>   "48D51B3C-B319-4238-8BA0-C50482222831",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "34009000000000005000",
              "ten_chuong"  =>   "Chương V QUY ĐỊNH VỀ KINH DOANH XĂNG DẦU",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "3bcee07e-6c24-43df-9c31-c8850ed610a8"
            ],
            [
              "hash"  =>   "B351D86E-A12B-4F9F-BF87-B3B2B447C00D",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "34009000000000006000",
              "ten_chuong"  =>   "Chương VI QUY ĐỊNH VỀ DỊCH VỤ XẾP HẠNG TÍN NHIỆM",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "3bcee07e-6c24-43df-9c31-c8850ed610a8"
            ],
            [
              "hash"  =>   "C8E3FB54-D924-467E-8886-36CA5F202FE5",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "34009000000000008000",
              "ten_chuong"  =>   "Chương VII QUY ĐỊNH VỀ KINH DOANH CASINO",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "3bcee07e-6c24-43df-9c31-c8850ed610a8"
            ],
            [
              "hash"  =>   "FF0D6352-C5B3-4E26-9B98-DB1CEBD1ABC6",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "34009000000000009000",
              "ten_chuong"  =>   "Chương VIII QUY ĐỊNH VỀ KINH DOANH ĐẶT CƯỢC ĐUA NGỰA, ĐUA CHÓ VÀ BÓNG ĐÁ QUỐC TẾ",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "3bcee07e-6c24-43df-9c31-c8850ed610a8"
            ],
            [
              "hash"  =>   "8953AC26-C6EC-4B38-A502-682504055373",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "34009000000000010000",
              "ten_chuong"  =>   "Chương IX QUY ĐỊNH ĐIỀU KIỆN KINH DOANH THIẾT BỊ, PHẦN MỀM NGỤY TRANG DÙNG ĐỂ GHI ÂM, GHI HÌNH, ĐỊNH VỊ",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "3bcee07e-6c24-43df-9c31-c8850ed610a8"
            ],
            [
              "hash"  =>   "D496D802-77D4-44EE-93B1-AEEB281BAD5D",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "34009000000000011000",
              "ten_chuong"  =>   "Chương X QUY ĐỊNH ĐIỀU KIỆN SẢN XUẤT, LẮP RÁP, NHẬP KHẨU VÀ KINH DOANH DỊCH VỤ BẢO HÀNH, BẢO DƯỠNG Ô TÔ",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "3bcee07e-6c24-43df-9c31-c8850ed610a8"
            ],
            [
              "hash"  =>   "8D635E4F-9FAC-4201-BB58-DFD401EE811D",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "34009000000000012000",
              "ten_chuong"  =>   "Chương XI QUY ĐỊNH VỀ QUẢN LÝ HOẠT ĐỘNG KINH DOANH THEO PHƯƠNG THỨC ĐA CẤP",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "3bcee07e-6c24-43df-9c31-c8850ed610a8"
            ],
            [
              "hash"  =>   "9F600334-1763-415A-8D8D-07E6EB1ACE04",
              "so_thu_tu"  =>   12,
              "MAPC"  =>   "34009000000000013000",
              "ten_chuong"  =>   "Chương XII QUY ĐỊNH VỀ KINH DOANH KHÍ",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "3bcee07e-6c24-43df-9c31-c8850ed610a8"
            ],
            [
              "hash"  =>   "7B26FE9A-C396-4A03-BADE-12500CE686A8",
              "so_thu_tu"  =>   13,
              "MAPC"  =>   "34009000000000014000",
              "ten_chuong"  =>   "Chương XIII QUY ĐỊNH VỀ KINH DOANH XUẤT KHẨU GẠO",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "3bcee07e-6c24-43df-9c31-c8850ed610a8"
            ],
            [
              "hash"  =>   "1DFB06AC-0D65-45F4-A47F-100926B2B1C2",
              "so_thu_tu"  =>   14,
              "MAPC"  =>   "34009000000000015000",
              "ten_chuong"  =>   "Chương XIV QUY ĐỊNH VỀ KINH DOANH DỊCH VỤ KARAOKE, DỊCH VỤ VŨ TRƯỜNG",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "3bcee07e-6c24-43df-9c31-c8850ed610a8"
            ],
            [
              "hash"  =>   "174A77F8-5906-495C-A8A2-4878BD5097B5",
              "so_thu_tu"  =>   15,
              "MAPC"  =>   "34009000000000016000",
              "ten_chuong"  =>   "Chương XV QUY ĐỊNH VỀ ĐẦU TƯ XÂY DỰNG VÀ KINH DOANH SÂN GÔN",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "3bcee07e-6c24-43df-9c31-c8850ed610a8"
            ],
            [
              "hash"  =>   "C670AE42-1E24-4185-A511-901DBF53C1CA",
              "so_thu_tu"  =>   16,
              "MAPC"  =>   "34009000000000017000",
              "ten_chuong"  =>   "Chương XVI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "3bcee07e-6c24-43df-9c31-c8850ed610a8"
            ],
            [
              "hash"  =>   "72C9B6C5-9128-49C3-92E1-5A03674260A1",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "34011000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "60e61f6a-bddb-4e43-94a0-59e153947e7a"
            ],
            [
              "hash"  =>   "8E9112BB-F226-4213-B50B-413D6779BA57",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "34011000000000001000",
              "ten_chuong"  =>   "Chương I QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "c8606224-625f-4a7c-9054-b81d95af4068"
            ],
            [
              "hash"  =>   "7F4020C2-39CF-454D-A367-2A987CEC6ECE",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "34011000000000002000",
              "ten_chuong"  =>   "Chương II MUA BÁN HÀNG HÓA",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "60e61f6a-bddb-4e43-94a0-59e153947e7a"
            ],
            [
              "hash"  =>   "C13DEB9D-30EF-47DF-BA76-8FBA2B608EC8",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "34011000000000002000",
              "ten_chuong"  =>   "Chương II VỊ TRÍ, CHỨC NĂNG, NHIỆM VỤ, QUYỀN HẠN, VÀ TỔ CHỨC CỦA LỰC LƯỢNG QUẢN LÝ THỊ TRƯỜNG",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "c8606224-625f-4a7c-9054-b81d95af4068"
            ],
            [
              "hash"  =>   "E993E07C-A63C-4112-B353-5027EE73DEAB",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "34011000000000003000",
              "ten_chuong"  =>   "Chương III THẺ KIỂM TRA THỊ TRƯỜNG, HOẠT ĐỘNG KIỂM TRA, THANH TRA CHUYÊN NGÀNH CỦA QUẢN LÝ THỊ TRƯỜNG VÀ QUYỀN, TRÁCH NHIỆM CỦA TỔ CHỨC, CÁ NHÂN ĐƯỢC KIỂM TRA",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "c8606224-625f-4a7c-9054-b81d95af4068"
            ],
            [
              "hash"  =>   "F6465A38-F40F-4C2B-AFD0-AF99B15E476C",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "34011000000000003000",
              "ten_chuong"  =>   "Chương III CUNG ỨNG DỊCH VỤ",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "60e61f6a-bddb-4e43-94a0-59e153947e7a"
            ],
            [
              "hash"  =>   "357495EA-CDC4-49A8-A345-E633202103B2",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "34011000000000004000",
              "ten_chuong"  =>   "Chương IV XÚC TIẾN THƯƠNG MẠI",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "60e61f6a-bddb-4e43-94a0-59e153947e7a"
            ],
            [
              "hash"  =>   "95AB1672-4B7F-4953-B56B-CCC72666DBFA",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "34011000000000004000",
              "ten_chuong"  =>   "Chương IV CÁC BIỆN PHÁP NGHIỆP VỤ CỦA LỰC LƯỢNG QUẢN LÝ THỊ TRƯỜNG",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "c8606224-625f-4a7c-9054-b81d95af4068"
            ],
            [
              "hash"  =>   "4479CE4B-B895-4470-ADB3-B472BDE26295",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "34011000000000005000",
              "ten_chuong"  =>   "Chương V PHỐI HỢP TRONG HOẠT ĐỘNG KIỂM TRA CỦA LỰC LƯỢNG QUẢN LÝ THỊ TRƯỜNG",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "c8606224-625f-4a7c-9054-b81d95af4068"
            ],
            [
              "hash"  =>   "9FA5A526-B016-4C06-A2BE-B203C50BBED5",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "34011000000000005000",
              "ten_chuong"  =>   "Chương V CÁC HOẠT ĐỘNG TRUNG GIAN THƯƠNG MẠI",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "60e61f6a-bddb-4e43-94a0-59e153947e7a"
            ],
            [
              "hash"  =>   "1D521A07-12CE-4292-BBAC-5E187668567C",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "34011000000000006000",
              "ten_chuong"  =>   "Chương VI BẢO ĐẢM HOẠT ĐỘNG VÀ CHẾ ĐỘ, CHÍNH SÁCH ĐỐI VỚI LỰC LƯỢNG QUẢN LÝ THỊ TRƯỜNG",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "c8606224-625f-4a7c-9054-b81d95af4068"
            ],
            [
              "hash"  =>   "BFFE4BD9-8CBF-4D79-BFC5-871D80B92FE3",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "34011000000000006000",
              "ten_chuong"  =>   "Chương VI MỘT SỐ HOẠT ĐỘNG THƯƠNG MẠI CỤ THỂ KHÁC",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "60e61f6a-bddb-4e43-94a0-59e153947e7a"
            ],
            [
              "hash"  =>   "CE76BFBB-14B2-4C2D-8056-A9836AF5925F",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "34011000000000007000",
              "ten_chuong"  =>   "Chương VII CHẾ TÀI TRONG THƯƠNG MẠI VÀ GIẢI QUYẾT TRANH CHẤP TRONG THƯƠNG MẠI",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "60e61f6a-bddb-4e43-94a0-59e153947e7a"
            ],
            [
              "hash"  =>   "F897C433-9FD7-4D04-ACCE-3B67C226FF02",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "34011000000000007000",
              "ten_chuong"  =>   "Chương VII TRÁCH NHIỆM CỦA CƠ QUAN, TỔ CHỨC ĐỐI VỚI HOẠT ĐỘNG CỦA LỰC LƯỢNG QUẢN LÝ THỊ TRƯỜNG",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "c8606224-625f-4a7c-9054-b81d95af4068"
            ],
            [
              "hash"  =>   "1F99F4BC-F582-4142-BEA7-440246617070",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "34011000000000008000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "c8606224-625f-4a7c-9054-b81d95af4068"
            ],
            [
              "hash"  =>   "4AF527FE-AEE7-4D3D-8C17-AD115C6A9965",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "34011000000000008000",
              "ten_chuong"  =>   "Chương VIII XỬ LÝ VI PHẠM PHÁP LUẬT VỀ THƯƠNG MẠI",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "60e61f6a-bddb-4e43-94a0-59e153947e7a"
            ],
            [
              "hash"  =>   "C9AF5281-C92A-489F-B8FB-226B77C91C72",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "34011000000000009000",
              "ten_chuong"  =>   "Chương IX ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "717625a2-281b-4307-b21b-68b1c73d2207",
              "hash_de_muc"  =>   "60e61f6a-bddb-4e43-94a0-59e153947e7a"
            ],
            [
              "hash"  =>   "353AE04F-FA9C-4916-95AC-E728954DD03D",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "35001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "3285256c-25e1-4621-afdc-647fbdd766ea"
            ],
            [
              "hash"  =>   "C85B4751-422C-48C9-B09F-8F6FB93EFC13",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "35001000000000002000",
              "ten_chuong"  =>   "Chương II DỰ KIẾN CƠ CẤU, THÀNH PHẦN VÀ PHÂN BỔ ĐẠI BIỂU QUỐC HỘI, ĐẠI BIỂU HỘI ĐỒNG NHÂN DÂN; ĐƠN VỊ BẦU CỬ VÀ KHU VỰC BỎ PHIẾU",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "3285256c-25e1-4621-afdc-647fbdd766ea"
            ],
            [
              "hash"  =>   "05189E58-DB5C-413D-B42C-855EC5B0FECC",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "35001000000000003000",
              "ten_chuong"  =>   "Chương III HỘI ĐỒNG BẦU CỬ QUỐC GIA VÀ CÁC TỔ CHỨC PHỤ TRÁCH BẦU CỬ Ở ĐỊA PHƯƠNG",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "3285256c-25e1-4621-afdc-647fbdd766ea"
            ],
            [
              "hash"  =>   "FAC2CB46-FDEF-49D9-945D-F10CB094E817",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "35001000000000004000",
              "ten_chuong"  =>   "Chương IV DANH SÁCH CỬ TRI",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "3285256c-25e1-4621-afdc-647fbdd766ea"
            ],
            [
              "hash"  =>   "65135CF9-A36F-41AD-8945-9F317FA291B0",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "35001000000000005000",
              "ten_chuong"  =>   "Chương V ỨNG CỬ VÀ HIỆP THƯƠNG, GIỚI THIỆU NGƯỜI ỨNG CỬ ĐẠI BIỂU QUỐC HỘI, ĐẠI BIỂU HỘI ĐỒNG NHÂN DÂN",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "3285256c-25e1-4621-afdc-647fbdd766ea"
            ],
            [
              "hash"  =>   "0DB0A96E-6C58-4FDA-8995-4714BA6A89A1",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "35001000000000006000",
              "ten_chuong"  =>   "Chương VI TUYÊN TRUYỀN, VẬN ĐỘNG BẦU CỬ",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "3285256c-25e1-4621-afdc-647fbdd766ea"
            ],
            [
              "hash"  =>   "D6AC4C0F-0FE0-46CA-A4A4-F07F72643954",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "35001000000000007000",
              "ten_chuong"  =>   "Chương VII NGUYÊN TẮC VÀ TRÌNH TỰ BỎ PHIẾU",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "3285256c-25e1-4621-afdc-647fbdd766ea"
            ],
            [
              "hash"  =>   "16422EFD-ECD9-4133-A290-049A1D695A5A",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "35001000000000008000",
              "ten_chuong"  =>   "Chương VIII KẾT QUẢ BẦU CỬ",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "3285256c-25e1-4621-afdc-647fbdd766ea"
            ],
            [
              "hash"  =>   "147BBFA2-FEB5-4CBB-ADDD-8B64C73A97B3",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "35001000000000009000",
              "ten_chuong"  =>   "Chương IX BẦU CỬ BỔ SUNG ĐẠI BIỂU QUỐC HỘI, ĐẠI BIỂU HỘI ĐỒNG NHÂN DÂN",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "3285256c-25e1-4621-afdc-647fbdd766ea"
            ],
            [
              "hash"  =>   "EA6743A5-7106-4CBA-8932-13AAC5BA08C9",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "35001000000000010000",
              "ten_chuong"  =>   "Chương X XỬ LÝ VI PHẠM PHÁP LUẬT VỀ BẦU CỬ VÀ ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "3285256c-25e1-4621-afdc-647fbdd766ea"
            ],
            [
              "hash"  =>   "DFDFAE75-FB03-45EE-9DBF-E93BB4CD9CE7",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "35003000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "29f5421a-be82-4114-9002-8d58cef7f0fa"
            ],
            [
              "hash"  =>   "EE6005EF-B07F-4DA8-B86B-A31BB4C63770",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "35003000000000002000",
              "ten_chuong"  =>   "Chương II GIÁM SÁT CỦA QUỐC HỘI",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "29f5421a-be82-4114-9002-8d58cef7f0fa"
            ],
            [
              "hash"  =>   "E59D6652-BC5C-4B41-985F-B2B9E8FD270F",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "35003000000000003000",
              "ten_chuong"  =>   "Chương III GIÁM SÁT CỦA HỘI ĐỒNG NHÂN DÂN",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "29f5421a-be82-4114-9002-8d58cef7f0fa"
            ],
            [
              "hash"  =>   "DC41296E-EF33-47AB-ADF1-6160B669E0F1",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "35003000000000004000",
              "ten_chuong"  =>   "Chương IV BẢO ĐẢM HOẠT ĐỘNG GIÁM SÁT",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "29f5421a-be82-4114-9002-8d58cef7f0fa"
            ],
            [
              "hash"  =>   "EEACC289-8A5C-4BAA-BC07-9AD5CEEF3345",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "35003000000000005000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "29f5421a-be82-4114-9002-8d58cef7f0fa"
            ],
            [
              "hash"  =>   "3B70BD06-8B0A-47FA-9176-4DB17574E085",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "35004000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "7b384cc2-bbb1-436c-a9fb-35487e6dc2ae"
            ],
            [
              "hash"  =>   "C32EADEC-0847-4D82-93B8-2329ED0CA3E6",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "35004000000000002000",
              "ten_chuong"  =>   "Chương II TẬP HỢP, XÂY DỰNG KHỐI ĐẠI ĐOÀN KẾT TOÀN DÂN TỘC",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "7b384cc2-bbb1-436c-a9fb-35487e6dc2ae"
            ],
            [
              "hash"  =>   "C2083181-06CE-4033-9A0A-D6898C560F20",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "35004000000000003000",
              "ten_chuong"  =>   "Chương III ĐẠI DIỆN, BẢO VỆ QUYỀN VÀ LỢI ÍCH HỢP PHÁP, CHÍNH ĐÁNG CỦA NHÂN DÂN",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "7b384cc2-bbb1-436c-a9fb-35487e6dc2ae"
            ],
            [
              "hash"  =>   "22732977-8B2D-4BD1-B34A-6988BEDB2EA5",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "35004000000000004000",
              "ten_chuong"  =>   "Chương IV THAM GIA XÂY DỰNG NHÀ NƯỚC",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "7b384cc2-bbb1-436c-a9fb-35487e6dc2ae"
            ],
            [
              "hash"  =>   "D80019AF-502D-404D-8722-268189A4416E",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "35004000000000005000",
              "ten_chuong"  =>   "Chương V HOẠT ĐỘNG GIÁM SÁT",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "7b384cc2-bbb1-436c-a9fb-35487e6dc2ae"
            ],
            [
              "hash"  =>   "1809CC77-4045-4D6A-B541-FB698BB60DA5",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "35004000000000006000",
              "ten_chuong"  =>   "Chương VI HOẠT ĐỘNG PHẢN BIỆN XÃ HỘI",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "7b384cc2-bbb1-436c-a9fb-35487e6dc2ae"
            ],
            [
              "hash"  =>   "F8F08242-017B-4453-B19C-F37E2085E611",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "35004000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KIỆN BẢO ĐẢM HOẠT ĐỘNG CỦA MẶT TRẬN TỔ QUỐC VIỆT NAM",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "7b384cc2-bbb1-436c-a9fb-35487e6dc2ae"
            ],
            [
              "hash"  =>   "827DEA40-714C-4D2F-A64F-C7F4C133EDDB",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "35004000000000008000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "7b384cc2-bbb1-436c-a9fb-35487e6dc2ae"
            ],
            [
              "hash"  =>   "FDB895E7-CBCD-444C-AC83-B573777136C9",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "35005000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "32791cd9-b864-47f1-aefa-bd5d57cd3202"
            ],
            [
              "hash"  =>   "F78AE93A-B043-4ADA-8D93-644E27F5AF3A",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "35005000000000002000",
              "ten_chuong"  =>   "Chương II CHÍNH SÁCH XÂY DỰNG, PHÁT TRIỂN VÀ QUẢN LÝ THỦ ĐÔ",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "32791cd9-b864-47f1-aefa-bd5d57cd3202"
            ],
            [
              "hash"  =>   "F4AC47C9-F0C8-4B43-9BC4-4550F0524F43",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "35005000000000003000",
              "ten_chuong"  =>   "Chương III TRÁCH NHIỆM XÂY DỰNG, PHÁT TRIỂN VÀ QUẢN LÝ THỦ ĐÔ",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "32791cd9-b864-47f1-aefa-bd5d57cd3202"
            ],
            [
              "hash"  =>   "E890C0EB-D19C-4E2D-9C6F-9328E97C56A5",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "35005000000000004000",
              "ten_chuong"  =>   "Chương IV ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "32791cd9-b864-47f1-aefa-bd5d57cd3202"
            ],
            [
              "hash"  =>   "286965E0-4D51-4478-B6B5-CAD683EA5A77",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "35006000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "ee26521a-9b59-4b41-898b-0ffe23805c9a"
            ],
            [
              "hash"  =>   "5B037249-BE86-4DD8-B15E-ABA67BC50641",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "35006000000000002000",
              "ten_chuong"  =>   "Chương II NHIỆM VỤ VÀ QUYỀN HẠN CỦA CHÍNH PHỦ",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "ee26521a-9b59-4b41-898b-0ffe23805c9a"
            ],
            [
              "hash"  =>   "620CA19A-677F-4F62-99BC-F64FC350F27A",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "35006000000000003000",
              "ten_chuong"  =>   "Chương III NHIỆM VỤ VÀ QUYỀN HẠN CỦA THỦ TƯỚNG CHÍNH PHỦ",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "ee26521a-9b59-4b41-898b-0ffe23805c9a"
            ],
            [
              "hash"  =>   "FEE7B2D5-D6C3-45D5-963C-5644638E8354",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "35006000000000004000",
              "ten_chuong"  =>   "Chương IV NHIỆM VỤ VÀ QUYỀN HẠN CỦA BỘ TRƯỞNG, THỦ TRƯỞNG CƠ QUAN NGANG BỘ",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "ee26521a-9b59-4b41-898b-0ffe23805c9a"
            ],
            [
              "hash"  =>   "CF69E8D9-D5BF-4E01-8780-72EE2B3105D6",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "35006000000000005000",
              "ten_chuong"  =>   "Chương V BỘ, CƠ QUAN NGANG BỘ, CƠ QUAN THUỘC CHÍNH PHỦ",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "ee26521a-9b59-4b41-898b-0ffe23805c9a"
            ],
            [
              "hash"  =>   "F60EB8E9-DD88-49C7-A2B9-AC8E2255FDE6",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "35006000000000006000",
              "ten_chuong"  =>   "Chương VI CHẾ ĐỘ LÀM VIỆC CỦA CHÍNH PHỦ",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "ee26521a-9b59-4b41-898b-0ffe23805c9a"
            ],
            [
              "hash"  =>   "E7E1B1E6-825C-46D1-BEB6-3A7340913625",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "35006000000000006500",
              "ten_chuong"  =>   "Chương VII QUY ĐỊNH VỀ THÀNH LẬP, TỔ CHỨC LẠI, GIẢI THỂ TỔ CHỨC HÀNH CHÍNH",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "ee26521a-9b59-4b41-898b-0ffe23805c9a"
            ],
            [
              "hash"  =>   "A943EBBC-DAFC-4FBA-8081-845383E8DEA6",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "35006000000000007000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "ee26521a-9b59-4b41-898b-0ffe23805c9a"
            ],
            [
              "hash"  =>   "2D2CABF0-B88A-4C3E-87F0-53200D563F9F",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "35007000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "11c45594-f8b8-4299-9b1b-ee6c01f943e5"
            ],
            [
              "hash"  =>   "23C246A4-BE49-4A78-9D70-7C7F21335C0D",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "35007000000000002000",
              "ten_chuong"  =>   "Chương II CHÍNH QUYỀN ĐỊA PHƯƠNG Ở NÔNG THÔN",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "11c45594-f8b8-4299-9b1b-ee6c01f943e5"
            ],
            [
              "hash"  =>   "D0E0DAB3-230B-4ADC-B9C6-5C9DC4FDD7F7",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "35007000000000003000",
              "ten_chuong"  =>   "Chương III CHÍNH QUYỀN ĐỊA PHƯƠNG Ở ĐÔ THỊ",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "11c45594-f8b8-4299-9b1b-ee6c01f943e5"
            ],
            [
              "hash"  =>   "F10D6B5B-AF7A-43BE-AEDB-07C982582A4C",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "35007000000000004000",
              "ten_chuong"  =>   "Chương IV CHÍNH QUYỀN ĐỊA PHƯƠNG Ở HẢI ĐẢO",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "11c45594-f8b8-4299-9b1b-ee6c01f943e5"
            ],
            [
              "hash"  =>   "7F924853-351D-4BD3-ACC3-8F371C20B352",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "35007000000000005000",
              "ten_chuong"  =>   "Chương V CHÍNH QUYỀN ĐỊA PHƯƠNG Ở ĐƠN VỊ HÀNH CHÍNH - KINH TẾ ĐẶC BIỆT",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "11c45594-f8b8-4299-9b1b-ee6c01f943e5"
            ],
            [
              "hash"  =>   "2942E6F4-B7DB-4EAF-8A09-15C1711124C3",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "35007000000000006000",
              "ten_chuong"  =>   "Chương VI HOẠT ĐỘNG CỦA CHÍNH QUYỀN ĐỊA PHƯƠNG",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "11c45594-f8b8-4299-9b1b-ee6c01f943e5"
            ],
            [
              "hash"  =>   "228B4D65-3084-4DE2-9D85-EB37A36E8DBB",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "35007000000000007000",
              "ten_chuong"  =>   "Chương VII THÀNH LẬP, GIẢI THỂ, NHẬP, CHIA, ĐIỀU CHỈNH ĐỊA GIỚI ĐƠN VỊ HÀNH CHÍNH",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "11c45594-f8b8-4299-9b1b-ee6c01f943e5"
            ],
            [
              "hash"  =>   "C49C721D-C11B-46D2-B3A0-446C5751914E",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "35007000000000007500",
              "ten_chuong"  =>   "Chương VIII CƠ CHẾ, CHÍNH SÁCH ĐẶC THÙ PHÁT TRIỂN MỘT SỐ ĐỊA PHƯƠNG",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "11c45594-f8b8-4299-9b1b-ee6c01f943e5"
            ],
            [
              "hash"  =>   "BC8C8872-ACC3-4F79-B1A9-2CED905DD285",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "35007000000000008000",
              "ten_chuong"  =>   "Chương IX ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "11c45594-f8b8-4299-9b1b-ee6c01f943e5"
            ],
            [
              "hash"  =>   "94B180B8-DEDA-4683-A62A-9755BC6ADA49",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "35008000000000001000",
              "ten_chuong"  =>   "Chương I VỊ TRÍ, CHỨC NĂNG, NHIỆM VỤ, QUYỀN HẠN CỦA QUỐC HỘI",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "b22e0b0a-4de6-4d97-8f57-5a8f4d4a9b09"
            ],
            [
              "hash"  =>   "F7CA2999-85F4-4AC9-A0FB-04D331A5ADD1",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "35008000000000002000",
              "ten_chuong"  =>   "Chương II ĐẠI BIỂU QUỐC HỘI",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "b22e0b0a-4de6-4d97-8f57-5a8f4d4a9b09"
            ],
            [
              "hash"  =>   "7C1F5788-0D49-4AC8-A189-40B12C1C2620",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "35008000000000003000",
              "ten_chuong"  =>   "Chương III ỦY BAN THƯỜNG VỤ QUỐC HỘI VÀ CHỦ TỊCH QUỐC HỘI",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "b22e0b0a-4de6-4d97-8f57-5a8f4d4a9b09"
            ],
            [
              "hash"  =>   "E37BB2B4-6E09-420E-95A3-F1F6A4156CE5",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "35008000000000004000",
              "ten_chuong"  =>   "Chương IV HỘI ĐỒNG DÂN TỘC VÀ CÁC ỦY BAN CỦA QUỐC HỘI",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "b22e0b0a-4de6-4d97-8f57-5a8f4d4a9b09"
            ],
            [
              "hash"  =>   "FAA20DB3-155A-4819-99AA-90DA125914D2",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "35008000000000005000",
              "ten_chuong"  =>   "Chương V KỲ HỌP QUỐC HỘI",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "b22e0b0a-4de6-4d97-8f57-5a8f4d4a9b09"
            ],
            [
              "hash"  =>   "BC531DCD-FCDE-45F8-9131-336810E69CAE",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "35008000000000006000",
              "ten_chuong"  =>   "Chương VI TỔNG THƯ KÝ QUỐC HỘI, VĂN PHÒNG QUỐC HỘI, CÁC CƠ QUAN THUỘC ỦY BAN THƯỜNG VỤ QUỐC HỘI VÀ KINH PHÍ HOẠT ĐỘNG CỦA QUỐC HỘI",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "b22e0b0a-4de6-4d97-8f57-5a8f4d4a9b09"
            ],
            [
              "hash"  =>   "B3C2AF7F-13D5-404F-8368-F238AFDDA0A4",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "35008000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "b22e0b0a-4de6-4d97-8f57-5a8f4d4a9b09"
            ],
            [
              "hash"  =>   "760ACD77-4E0B-49CE-9103-5CBC1ECCB421",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "35009000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "472928db-3e71-4968-934b-5c4d9720e40e"
            ],
            [
              "hash"  =>   "CD1A0CDD-DF9B-40BD-B5D9-729F5E95554B",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "35009000000000002000",
              "ten_chuong"  =>   "Chương II TÒA ÁN NHÂN DÂN TỐI CAO",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "472928db-3e71-4968-934b-5c4d9720e40e"
            ],
            [
              "hash"  =>   "0AB90D21-7070-4BDE-95E7-81BCB5060A3D",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "35009000000000003000",
              "ten_chuong"  =>   "Chương III TÒA ÁN NHÂN DÂN CẤP CAO",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "472928db-3e71-4968-934b-5c4d9720e40e"
            ],
            [
              "hash"  =>   "8F7DEB74-7269-43A1-8388-6F868DBD2B3F",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "35009000000000004000",
              "ten_chuong"  =>   "Chương IV TÒA ÁN NHÂN DÂN TỈNH, THÀNH PHỐ TRỰC THUỘC TRUNG ƯƠNG",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "472928db-3e71-4968-934b-5c4d9720e40e"
            ],
            [
              "hash"  =>   "D26B89B0-FFA8-48F8-A328-9D68EED2BB0C",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "35009000000000005000",
              "ten_chuong"  =>   "Chương V TÒA ÁN NHÂN DÂN HUYỆN, QUẬN, THỊ XÃ, THÀNH PHỐ THUỘC TỈNH VÀ TƯƠNG ĐƯƠNG",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "472928db-3e71-4968-934b-5c4d9720e40e"
            ],
            [
              "hash"  =>   "40DB2086-43F3-48D1-9234-35A8F872DCAC",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "35009000000000006000",
              "ten_chuong"  =>   "Chương VI TÒA ÁN QUÂN SỰ",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "472928db-3e71-4968-934b-5c4d9720e40e"
            ],
            [
              "hash"  =>   "6360A6C9-26D1-4890-A0E1-B8F752288A23",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "35009000000000007000",
              "ten_chuong"  =>   "Chương VII THẨM PHÁN",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "472928db-3e71-4968-934b-5c4d9720e40e"
            ],
            [
              "hash"  =>   "23AF2B14-2011-47A5-9CA8-380E377B1731",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "35009000000000008000",
              "ten_chuong"  =>   "Chương VIII HỘI THẨM",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "472928db-3e71-4968-934b-5c4d9720e40e"
            ],
            [
              "hash"  =>   "9858D4DF-34F3-4860-979C-295FEC6222CC",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "35009000000000009000",
              "ten_chuong"  =>   "Chương IX THƯ KÝ TÒA ÁN, THẨM TRA VIÊN",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "472928db-3e71-4968-934b-5c4d9720e40e"
            ],
            [
              "hash"  =>   "0CD6CF55-42D4-49EC-827C-746053A2F344",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "35009000000000010000",
              "ten_chuong"  =>   "Chương X BẢO ĐẢM HOẠT ĐỘNG CỦA TÒA ÁN NHÂN DÂN",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "472928db-3e71-4968-934b-5c4d9720e40e"
            ],
            [
              "hash"  =>   "FF3CEB70-58AA-419D-A53A-592A1432C5F3",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "35009000000000011000",
              "ten_chuong"  =>   "Chương XI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "472928db-3e71-4968-934b-5c4d9720e40e"
            ],
            [
              "hash"  =>   "06E01BDE-D0E0-4A52-B793-F823AD72472B",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "35010000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "7d0dfc81-bcee-4437-9236-9066a6f45d3f"
            ],
            [
              "hash"  =>   "05E863F6-F807-4923-8541-6E628E0EBCE3",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "35010000000000002000",
              "ten_chuong"  =>   "Chương II CÁC CÔNG TÁC THỰC HIỆN CHỨC NĂNG, NHIỆM VỤ CỦA VIỆN KIỂM SÁT NHÂN DÂN",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "7d0dfc81-bcee-4437-9236-9066a6f45d3f"
            ],
            [
              "hash"  =>   "E65F552E-BB35-4843-8E87-F9B11D43AC5B",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "35010000000000003000",
              "ten_chuong"  =>   "Chương III TỔ CHỨC CỦA VIỆN KIỂM SÁT NHÂN DÂN",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "7d0dfc81-bcee-4437-9236-9066a6f45d3f"
            ],
            [
              "hash"  =>   "3DC6F7A1-3D70-4A2E-AB78-2E1764923D83",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "35010000000000004000",
              "ten_chuong"  =>   "Chương IV CÁN BỘ, CÔNG CHỨC, VIÊN CHỨC VÀ NGƯỜI LAO ĐỘNG KHÁC CỦA VIỆN KIỂM SÁT NHÂN DÂN",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "7d0dfc81-bcee-4437-9236-9066a6f45d3f"
            ],
            [
              "hash"  =>   "11AAA2E5-9300-470F-9658-06E2941AD92E",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "35010000000000005000",
              "ten_chuong"  =>   "Chương V BẢO ĐẢM HOẠT ĐỘNG CỦA VIỆN KIỂM SÁT NHÂN DÂN",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "7d0dfc81-bcee-4437-9236-9066a6f45d3f"
            ],
            [
              "hash"  =>   "612C6789-304D-4E58-9F7B-3BED8F77E5FB",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "35010000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "3fc1ee9d-eec6-4839-9c98-7ac2ca9e0792",
              "hash_de_muc"  =>   "7d0dfc81-bcee-4437-9236-9066a6f45d3f"
            ],
            [
              "hash"  =>   "5EDC1B40-72D7-41BF-8A13-93A57C325468",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "36001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "fc3ab628-e974-4615-9209-270bd558b40e"
            ],
            [
              "hash"  =>   "0FCE1022-A991-4697-B7E2-5832D946FBD3",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "36001000000000002000",
              "ten_chuong"  =>   "Chương II QUYỀN, TRÁCH NHIỆM CỦA CÔNG ĐOÀN VÀ ĐOÀN VIÊN CÔNG ĐOÀN",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "fc3ab628-e974-4615-9209-270bd558b40e"
            ],
            [
              "hash"  =>   "294AE5E4-ED69-46C0-BB7A-3987396464C8",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "36001000000000003000",
              "ten_chuong"  =>   "Chương III TRÁCH NHIỆM CỦA NHÀ NƯỚC, CƠ QUAN, TỔ CHỨC, DOANH NGHIỆP ĐỐI VỚI CÔNG ĐOÀN",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "fc3ab628-e974-4615-9209-270bd558b40e"
            ],
            [
              "hash"  =>   "D62162B5-EFCD-4414-A33F-294B303FC7BC",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "36001000000000004000",
              "ten_chuong"  =>   "Chương IV NHỮNG BẢO ĐẢM HOẠT ĐỘNG CỦA CÔNG ĐOÀN",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "fc3ab628-e974-4615-9209-270bd558b40e"
            ],
            [
              "hash"  =>   "7903CE2E-C8CD-4C82-9292-D24632F1DB5A",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "36001000000000005000",
              "ten_chuong"  =>   "Chương V GIẢI QUYẾT TRANH CHẤP, XỬ LÝ VI PHẠM PHÁP LUẬT VỀ CÔNG ĐOÀN",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "fc3ab628-e974-4615-9209-270bd558b40e"
            ],
            [
              "hash"  =>   "EDFAA8E4-1B5A-4222-A0F1-CA2D68761D1F",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "36001000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "fc3ab628-e974-4615-9209-270bd558b40e"
            ],
            [
              "hash"  =>   "5BB7E042-1A30-4929-84E7-6F712A1979B8",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "36002000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "62aa0284-6ac0-4c02-8504-945335930df9"
            ],
            [
              "hash"  =>   "16C0F15E-CA4B-4C2C-9B15-10DF7BD45A7C",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "36002000000000002000",
              "ten_chuong"  =>   "Chương II HOẠT ĐỘNG CHỮ THẬP ĐỎ",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "62aa0284-6ac0-4c02-8504-945335930df9"
            ],
            [
              "hash"  =>   "AF5D36AC-123B-4134-815A-F9CEE500DC6E",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "36002000000000003000",
              "ten_chuong"  =>   "Chương III BIỂU TƯỢNG TRONG HOẠT ĐỒNG CHỮ THẬP ĐỎ",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "62aa0284-6ac0-4c02-8504-945335930df9"
            ],
            [
              "hash"  =>   "53D19B6B-8B4C-4B56-AB61-0CCFADEF8C36",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "36002000000000004000",
              "ten_chuong"  =>   "Chương IV VẬN ĐỘNG, QUYÊN GÓP, TIẾP NHẬN, QUẢN LÝ, SỬ DỤNG NGUỒN LỰC CHO HOẠT ĐỘNG CHỮ THẬP ĐỎ",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "62aa0284-6ac0-4c02-8504-945335930df9"
            ],
            [
              "hash"  =>   "47D312EB-8C65-4059-AD1C-E33F770408B2",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "36002000000000005000",
              "ten_chuong"  =>   "Chương V HỢP TÁC QUỐC TẾ VỀ HOẠT ĐỘNG CHỮ THẬP ĐỎ",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "62aa0284-6ac0-4c02-8504-945335930df9"
            ],
            [
              "hash"  =>   "B849A291-21B6-4CD9-BF06-540381116E9B",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "36002000000000006000",
              "ten_chuong"  =>   "Chương VI HỘI CHỮ THẬP ĐỎ",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "62aa0284-6ac0-4c02-8504-945335930df9"
            ],
            [
              "hash"  =>   "9990455D-314B-40AE-89AE-6399C0F21BBC",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "36002000000000007000",
              "ten_chuong"  =>   "Chương VII TRÁCH NHIỆM CỦA CƠ QUAN NHÀ NƯỚC, CƠ QUAN THÔNG TIN ĐẠI CHÚNG TRONG HOẠT ĐỘNG CHỮ THẬP ĐỎ",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "62aa0284-6ac0-4c02-8504-945335930df9"
            ],
            [
              "hash"  =>   "9D325D56-20AD-4541-B5FC-5D9824F5C2C4",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "36002000000000008000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "62aa0284-6ac0-4c02-8504-945335930df9"
            ],
            [
              "hash"  =>   "ECB3DF65-E476-468E-A1D2-14A561B138B1",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "36003000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "012d9b93-c11d-48b6-b08e-14d77515ca1e"
            ],
            [
              "hash"  =>   "D5731DF7-F6E1-42A3-8C14-DA68711D7394",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "36003000000000002000",
              "ten_chuong"  =>   "Chương II TRÁCH NHIỆM CỦA THANH NIÊN",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "012d9b93-c11d-48b6-b08e-14d77515ca1e"
            ],
            [
              "hash"  =>   "0DEBB168-FB4B-4FB2-A3DF-26A3A749B707",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "36003000000000003000",
              "ten_chuong"  =>   "Chương III CHÍNH SÁCH CỦA NHÀ NƯỚC ĐỐI VỚI THANH NIÊN",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "012d9b93-c11d-48b6-b08e-14d77515ca1e"
            ],
            [
              "hash"  =>   "B12A6607-BBEE-47D2-92FE-AC04E94DA004",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "36003000000000004000",
              "ten_chuong"  =>   "Chương IV TRÁCH NHIỆM CỦA TỔ CHỨC THANH NIÊN",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "012d9b93-c11d-48b6-b08e-14d77515ca1e"
            ],
            [
              "hash"  =>   "C90AE710-58B6-471C-B26E-4A18C4A11FDC",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "36003000000000005000",
              "ten_chuong"  =>   "Chương V TRÁCH NHIỆM CỦA MẶT TRẬN TỔ QUỐC VIỆT NAM, TỔ CHỨC XÃ HỘI, TỔ CHỨC KINH TẾ, CƠ SỞ GIÁO DỤC, GIA ĐÌNH",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "012d9b93-c11d-48b6-b08e-14d77515ca1e"
            ],
            [
              "hash"  =>   "8DF9885D-E1E9-4DC2-85E2-A98A40D69E02",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "36003000000000006000",
              "ten_chuong"  =>   "Chương VI QUẢN LÝ NHÀ NƯỚC VỀ THANH NIÊN",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "012d9b93-c11d-48b6-b08e-14d77515ca1e"
            ],
            [
              "hash"  =>   "9D8010AB-2A24-49D7-A304-6A55A6286F93",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "36003000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "012d9b93-c11d-48b6-b08e-14d77515ca1e"
            ],
            [
              "hash"  =>   "DA46243F-A748-4E86-BC49-91EAC6A94B5D",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "36004000000000001000",
              "ten_chuong"  =>   "Chương I QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "9d3b3dad-7259-40ca-a446-261a7e528988"
            ],
            [
              "hash"  =>   "6E757CE1-7139-4F27-94B8-F91AD705B41E",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "36004000000000002000",
              "ten_chuong"  =>   "Chương II ĐIỀU KIỆN, THỦ TỤC CẤP GIẤY PHÉP THÀNH LẬP QUỸ",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "9d3b3dad-7259-40ca-a446-261a7e528988"
            ],
            [
              "hash"  =>   "D72AA252-8BE6-4004-8275-01A6FE977200",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "36004000000000003000",
              "ten_chuong"  =>   "Chương III TỔ CHỨC VÀ HOẠT ĐỘNG CỦA QUỸ",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "9d3b3dad-7259-40ca-a446-261a7e528988"
            ],
            [
              "hash"  =>   "659BF2FE-39C6-4265-96D2-93D4FA3E759B",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "36004000000000004000",
              "ten_chuong"  =>   "Chương IV TÀI SẢN, TÀI CHÍNH CỦA QUỸ",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "9d3b3dad-7259-40ca-a446-261a7e528988"
            ],
            [
              "hash"  =>   "0838224C-9CF1-4E4D-9602-22A2A53F2B02",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "36004000000000005000",
              "ten_chuong"  =>   "Chương V HỢP NHẤT, SÁP NHẬP, CHIA, TÁCH, ĐỔI TÊN; ĐÌNH CHỈ CÓ THỜI HẠN VÀ GIẢI THỂ QUỸ",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "9d3b3dad-7259-40ca-a446-261a7e528988"
            ],
            [
              "hash"  =>   "68F45FAA-D388-4C5D-B7C5-98CF19D5B628",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "36004000000000006000",
              "ten_chuong"  =>   "Chương VI QUẢN LÝ NHÀ NƯỚC ĐỐI VỚI QUỸ",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "9d3b3dad-7259-40ca-a446-261a7e528988"
            ],
            [
              "hash"  =>   "887E7E46-E63D-4463-9C88-4B200D0F455D",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "36004000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "9d3b3dad-7259-40ca-a446-261a7e528988"
            ],
            [
              "hash"  =>   "9293753F-154D-4097-BE51-5E648E5F1596",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "36005000000000000500",
              "ten_chuong"  =>   "Chương I QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "213aa299-188e-4c1d-af68-ba87a99d849b"
            ],
            [
              "hash"  =>   "0F213B39-84F5-413A-A323-12C8F0526529",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "36005000000000001000",
              "ten_chuong"  =>   "Chương II QUY ĐỊNH QUYỀN LẬP HỘI",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "213aa299-188e-4c1d-af68-ba87a99d849b"
            ],
            [
              "hash"  =>   "3EE0D209-D3D9-44EC-89BB-D4F173A8DA4D",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "36005000000000002000",
              "ten_chuong"  =>   "Chương III QUY ĐỊNH VỀ TỔ CHỨC, HOẠT ĐỘNG VÀ QUẢN LÝ HỘI",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "213aa299-188e-4c1d-af68-ba87a99d849b"
            ],
            [
              "hash"  =>   "AE4DC179-94F2-4C55-8644-ADC568216AF8",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "36005000000000003000",
              "ten_chuong"  =>   "Chương IV ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "213aa299-188e-4c1d-af68-ba87a99d849b"
            ],
            [
              "hash"  =>   "1D8060B9-13CD-4783-B4A2-18E005E55048",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "36006000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "2bcac534-554f-47d3-b299-bd9cfc1b92d5"
            ],
            [
              "hash"  =>   "F339A495-F7AE-437A-AD76-EE442BFFA254",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "36006000000000002000",
              "ten_chuong"  =>   "Chương II CỰU CHIẾN BINH",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "2bcac534-554f-47d3-b299-bd9cfc1b92d5"
            ],
            [
              "hash"  =>   "DE39358E-E0CF-4BCE-BFB4-930EA80BB238",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "36006000000000003000",
              "ten_chuong"  =>   "Chương III HỘI CỰU CHIẾN BINH VIỆT NAM",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "2bcac534-554f-47d3-b299-bd9cfc1b92d5"
            ],
            [
              "hash"  =>   "55E2EF1B-B113-4FBC-BC25-C6BD31737354",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "36006000000000004000",
              "ten_chuong"  =>   "Chương IV TRÁCH NHIỆM CỦA CƠ QUAN, TỔ CHỨC ĐỐI VỚI CỰU CHIẾN BINH, HỘI CỰU CHIẾN BINH VIỆT NAM",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "2bcac534-554f-47d3-b299-bd9cfc1b92d5"
            ],
            [
              "hash"  =>   "4DEEB2B0-C1FF-42AF-8DB4-2CD6A86EEDCD",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "36006000000000005000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "ce9b9ff4-87dd-44d1-add8-27c1ec82d856",
              "hash_de_muc"  =>   "2bcac534-554f-47d3-b299-bd9cfc1b92d5"
            ],
            [
              "hash"  =>   "FB06E4F0-4EBF-4B52-AD7E-D6F8DE97864A",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "37001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "fe2f89c2-15c9-4a77-bdf8-f4898d545be7"
            ],
            [
              "hash"  =>   "2E5CFCD3-5EA1-4A24-9B8E-8AB0CC371AE9",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "37001000000000002000",
              "ten_chuong"  =>   "Chương II HÒA GIẢI VIÊN, TỔ HÒA GIẢI",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "fe2f89c2-15c9-4a77-bdf8-f4898d545be7"
            ],
            [
              "hash"  =>   "551CB8D7-C27B-4EE2-8730-43AF8AD94858",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "37001000000000003000",
              "ten_chuong"  =>   "Chương III HOẠT ĐỘNG HÒA GIẢI Ở CƠ SỞ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "fe2f89c2-15c9-4a77-bdf8-f4898d545be7"
            ],
            [
              "hash"  =>   "3213E773-5702-4080-80EB-5701031F6D5A",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "37001000000000004000",
              "ten_chuong"  =>   "Chương IV TRÁCH NHIỆM CỦA CƠ QUAN, TỔ CHỨC TRONG HOẠT ĐỘNG HÒA GIẢI Ở CƠ SỞ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "fe2f89c2-15c9-4a77-bdf8-f4898d545be7"
            ],
            [
              "hash"  =>   "4597A0DA-D1F9-4952-A1AD-313A3B64ED19",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "37001000000000005000",
              "ten_chuong"  =>   "Chương V QUY ĐỊNH VIỆC LẬP DỰ TOÁN, QUẢN LÝ, SỬ DỤNG VÀ  QUYẾT TOÁN KINH PHÍ NGÂN SÁCH NHÀ NƯỚC THỰC HIỆN CÔNG TÁC HÒA GIẢI Ở CƠ SỞ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "fe2f89c2-15c9-4a77-bdf8-f4898d545be7"
            ],
            [
              "hash"  =>   "7DE7EC22-2180-4547-A2FD-AA54E993AE56",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "37001000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "fe2f89c2-15c9-4a77-bdf8-f4898d545be7"
            ],
            [
              "hash"  =>   "ECF2B1E6-6D6D-4F4E-B15C-ADF858FD1608",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "37002000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "3e044577-82d7-4a50-b5ed-42a1231c6f80"
            ],
            [
              "hash"  =>   "C2052037-1603-4655-83EE-B315E629D4B8",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "37002000000000002000",
              "ten_chuong"  =>   "Chương II ĐƠN VÀ THỤ LÝ ĐƠN YÊU CẦU MỞ THỦ TỤC PHÁ SẢN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "3e044577-82d7-4a50-b5ed-42a1231c6f80"
            ],
            [
              "hash"  =>   "04B0F2CD-1DC7-46AB-BF34-26D786AF1A62",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "37002000000000003000",
              "ten_chuong"  =>   "Chương III MỞ THỦ TỤC PHÁ SẢN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "3e044577-82d7-4a50-b5ed-42a1231c6f80"
            ],
            [
              "hash"  =>   "F46DEA36-0075-4591-A390-229B6A0363C0",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "37002000000000004000",
              "ten_chuong"  =>   "Chương IV NGHĨA VỤ VỀ TÀI SẢN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "3e044577-82d7-4a50-b5ed-42a1231c6f80"
            ],
            [
              "hash"  =>   "E482C7AB-E92C-4D94-9D84-C8F626F186D9",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "37002000000000005000",
              "ten_chuong"  =>   "Chương V CÁC BIỆN PHÁP BẢO TOÀN TÀI SẢN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "3e044577-82d7-4a50-b5ed-42a1231c6f80"
            ],
            [
              "hash"  =>   "21261624-5EB1-44F7-863A-D008DC02F171",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "37002000000000006000",
              "ten_chuong"  =>   "Chương VI HỘI NGHỊ CHỦ NỢ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "3e044577-82d7-4a50-b5ed-42a1231c6f80"
            ],
            [
              "hash"  =>   "C2F0CA24-9108-48E4-AAFB-7AAF6FB5F027",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "37002000000000007000",
              "ten_chuong"  =>   "Chương VII THỦ TỤC PHỤC HỒI HOẠT ĐỘNG KINH DOANH",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "3e044577-82d7-4a50-b5ed-42a1231c6f80"
            ],
            [
              "hash"  =>   "44AF35E3-B464-4FAF-90B5-3F4A7382D0BF",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "37002000000000008000",
              "ten_chuong"  =>   "Chương VIII THỦ TỤC PHÁ SẢN TỔ CHỨC TÍN DỤNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "3e044577-82d7-4a50-b5ed-42a1231c6f80"
            ],
            [
              "hash"  =>   "57831B1F-4AE4-49E2-BD41-DBC396774A2D",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "37002000000000009000",
              "ten_chuong"  =>   "Chương IX TUYÊN BỐ DOANH NGHIỆP, HỢP TÁC XÃ PHÁ SẢN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "3e044577-82d7-4a50-b5ed-42a1231c6f80"
            ],
            [
              "hash"  =>   "154287E9-2782-4FD1-9F6A-1B4441E602A0",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "37002000000000010000",
              "ten_chuong"  =>   "Chương X XỬ LÝ TÀI SẢN DOANH NGHIỆP, HỢP TÁC XÃ CÓ TRANH CHẤP",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "3e044577-82d7-4a50-b5ed-42a1231c6f80"
            ],
            [
              "hash"  =>   "5792B441-AF24-4372-A09F-1270D41277F7",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "37002000000000011000",
              "ten_chuong"  =>   "Chương XI THỦ TỤC PHÁ SẢN CÓ YẾU TỐ NƯỚC NGOÀI",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "3e044577-82d7-4a50-b5ed-42a1231c6f80"
            ],
            [
              "hash"  =>   "FA4CB3B4-4054-48D7-9D9C-1EC57D47D245",
              "so_thu_tu"  =>   12,
              "MAPC"  =>   "37002000000000012000",
              "ten_chuong"  =>   "Chương XII THI HÀNH QUYẾT ĐỊNH TUYÊN BỐ DOANH NGHIỆP, HỢP TÁC XÃ PHÁ SẢN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "3e044577-82d7-4a50-b5ed-42a1231c6f80"
            ],
            [
              "hash"  =>   "E72897C3-AEC3-4DA9-B6B3-AA1722F430DA",
              "so_thu_tu"  =>   13,
              "MAPC"  =>   "37002000000000013000",
              "ten_chuong"  =>   "Chương XIII XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "3e044577-82d7-4a50-b5ed-42a1231c6f80"
            ],
            [
              "hash"  =>   "CD9E9C7D-1C43-46CA-AF2C-98B3562A5D18",
              "so_thu_tu"  =>   14,
              "MAPC"  =>   "37002000000000014000",
              "ten_chuong"  =>   "Chương XIV ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "3e044577-82d7-4a50-b5ed-42a1231c6f80"
            ],
            [
              "hash"  =>   "CB346569-9444-4A0E-AB3A-F15E00F85CB1",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "37003000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "62ca4694-ef40-4288-8ab4-e7098e95cd5c"
            ],
            [
              "hash"  =>   "88CE7769-5C31-4455-8893-ECBDC155E3D0",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "37003000000000002000",
              "ten_chuong"  =>   "Chương II THỦ TỤC BẮT GIỮ TÀU BAY, THẢ TÀU BAY ĐANG BỊ BẮT GIỮ VÀ BẮT GIỮ LẠI TÀU BAY THEO YÊU CẦU CỦA NGƯỜI CÓ QUYỀN, LỢI ÍCH ĐỐI VỚI TÀU BAY",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "62ca4694-ef40-4288-8ab4-e7098e95cd5c"
            ],
            [
              "hash"  =>   "60E45FD6-58FB-4063-964B-218FCB4BE5C9",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "37003000000000003000",
              "ten_chuong"  =>   "Chương III THỦ TỤC BẮT GIỮ TÀU BAY, THẢ TÀU BAY ĐANG BỊ BẮT GIỮ ĐỂ THI HÀNH ÁN DÂN SỰ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "62ca4694-ef40-4288-8ab4-e7098e95cd5c"
            ],
            [
              "hash"  =>   "2EBF6D7A-F377-48E1-A106-E12847E03553",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "37003000000000004000",
              "ten_chuong"  =>   "Chương IV ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "62ca4694-ef40-4288-8ab4-e7098e95cd5c"
            ],
            [
              "hash"  =>   "C32EE6DC-6BA0-4F02-A129-A8A2640EB9AD",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "37004000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "be7352a9-a7bd-40e6-86cc-86e18772a8fe"
            ],
            [
              "hash"  =>   "65B2E8AD-8671-4079-817B-E079AD342115",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "37004000000000002000",
              "ten_chuong"  =>   "Chương II THỦ TỤC BẮT GIỮ TÀU BIỂN, THẢ TÀU BIỂN ĐANG BỊ BẮT GIỮ VÀ BẮT GIỮ LẠI TÀU BIỂN ĐỂ BẢO ĐẢM GIẢI QUYẾT KHIẾU NẠI HÀNG HẢI",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "be7352a9-a7bd-40e6-86cc-86e18772a8fe"
            ],
            [
              "hash"  =>   "F3C8BAEE-0642-48AC-8175-03E2E362E5D9",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "37004000000000003000",
              "ten_chuong"  =>   "Chương III THỦ TỤC ÁP DỤNG, HỦY BỎ BIỆN PHÁP KHẨN CẤP TẠM THỜI BẮT GIỮ TÀU BIỂN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "be7352a9-a7bd-40e6-86cc-86e18772a8fe"
            ],
            [
              "hash"  =>   "73417368-E406-4913-A453-D711C72B95A0",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "37004000000000004000",
              "ten_chuong"  =>   "Chương IV THỦ TỤC BẮT GIỮ TÀU BIỂN, THẢ TÀU BIỂN ĐANG BỊ BẮT GIỮ ĐỂ THI HÀNH ÁN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "be7352a9-a7bd-40e6-86cc-86e18772a8fe"
            ],
            [
              "hash"  =>   "E167FCF4-6DF0-4A66-8027-A74256DBF7FD",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "37004000000000005000",
              "ten_chuong"  =>   "Chương V THỦ TỤC BẮT GIỮ TÀU BIỂN, THẢ TÀU BIỂN ĐANG BỊ BẮT GIỮ ĐỂ THỰC HIỆN TƯƠNG TRỢ TƯ PHÁP",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "be7352a9-a7bd-40e6-86cc-86e18772a8fe"
            ],
            [
              "hash"  =>   "B00713B0-7341-4EF2-8179-A84470D01973",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "37004000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "be7352a9-a7bd-40e6-86cc-86e18772a8fe"
            ],
            [
              "hash"  =>   "D6C44C58-CD90-4F0A-84FF-03C74DD333DE",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "3700500000000000100000100000000000000000",
              "ten_chuong"  =>   "Chương I NHIỆM VỤ VÀ HIỆU LỰC CỦA BỘ LUẬT TỐ TỤNG DÂN SỰ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "79A67B0D-35F1-4838-B3AF-AEC0E7FF886F",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "3700500000000000100000200000000000000000",
              "ten_chuong"  =>   "Chương II NHỮNG NGUYÊN TẮC CƠ BẢN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "11D4AF92-7EE4-4065-B335-0FC02F9EB3E6",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "3700500000000000100000300000000000000000",
              "ten_chuong"  =>   "Chương III THẨM QUYỀN CỦA TÒA ÁN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "C4297C74-1A72-40C2-AC02-CE003C0BD29A",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "3700500000000000100000400000000000000000",
              "ten_chuong"  =>   "Chương IV CƠ QUAN TIẾN HÀNH TỐ TỤNG, NGƯỜI TIẾN HÀNH TỐ TỤNG VÀ VIỆC THAY ĐỔI NGƯỜI TIẾN HÀNH TỐ TỤNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "48CD1FA7-0210-4365-84AA-BB85229747BE",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "3700500000000000100000500000000000000000",
              "ten_chuong"  =>   "Chương V THÀNH PHẦN GIẢI QUYẾT VỤ VIỆC DÂN SỰ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "C1CEB269-70C5-471F-9AA3-D87D9D09F89B",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "3700500000000000100000600000000000000000",
              "ten_chuong"  =>   "Chương VI NGƯỜI THAM GIA TỐ TỤNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "79872C7B-9016-4FF2-8256-591120BFFDCC",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "3700500000000000100000700000000000000000",
              "ten_chuong"  =>   "Chương VII CHỨNG MINH VÀ CHỨNG CỨ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "DD786797-38D1-4A18-96A6-92ABB7CA71E0",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "3700500000000000100000800000000000000000",
              "ten_chuong"  =>   "Chương VIII CÁC BIỆN PHÁP KHẨN CẤP TẠM THỜI",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "59B9716C-A27A-40E1-B158-82199D5D4B62",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "3700500000000000100000900000000000000000",
              "ten_chuong"  =>   "Chương IX ÁN PHÍ, LỆ PHÍ VÀ CHI PHÍ TỐ TỤNG KHÁC",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "59B88890-85AE-471A-927F-FBBAEBA006B5",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "3700500000000000100001000000000000000000",
              "ten_chuong"  =>   "Chương X CẤP, TỐNG ĐẠT, THÔNG BÁO VĂN BẢN TỐ TỤNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "D1ADD7A4-45E2-424D-90D9-8FB122D4538A",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "3700500000000000100001100000000000000000",
              "ten_chuong"  =>   "Chương XI THỜI HẠN TỐ TỤNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "5859FA46-DB3A-44C6-96CE-FED9717204E5",
              "so_thu_tu"  =>   12,
              "MAPC"  =>   "3700500000000000200001200000000000000000",
              "ten_chuong"  =>   "Chương XII KHỞI KIỆN VÀ THỤ LÝ VỤ ÁN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "E33137CA-834C-4727-9402-D61671748CEF",
              "so_thu_tu"  =>   13,
              "MAPC"  =>   "3700500000000000200001300000000000000000",
              "ten_chuong"  =>   "Chương XIII THỦ TỤC HÒA GIẢI VÀ CHUẨN BỊ XÉT XỬ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "6391F20E-B857-4E39-84A0-D0815DAC45D2",
              "so_thu_tu"  =>   14,
              "MAPC"  =>   "3700500000000000200001400000000000000000",
              "ten_chuong"  =>   "Chương XIV PHIÊN TÒA SƠ THẨM",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "412FD21D-8809-45BA-ADFC-691FC1A17A04",
              "so_thu_tu"  =>   15,
              "MAPC"  =>   "3700500000000000300001500000000000000000",
              "ten_chuong"  =>   "Chương XV TÍNH CHẤT CỦA XÉT XỬ PHÚC THẨM VÀ KHÁNG CÁO, KHÁNG NGHỊ BẢN ÁN, QUYẾT ĐỊNH CỦA TÒA ÁN CẤP SƠ THẨM",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "B50484E8-41F8-4046-BC98-79599E2B9510",
              "so_thu_tu"  =>   16,
              "MAPC"  =>   "3700500000000000300001600000000000000000",
              "ten_chuong"  =>   "Chương XVI CHUẨN BỊ XÉT XỬ PHÚC THẨM",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "758C031B-0B72-434E-87C9-FB3C192DFDB8",
              "so_thu_tu"  =>   17,
              "MAPC"  =>   "3700500000000000300001700000000000000000",
              "ten_chuong"  =>   "Chương XVII THỦ TỤC XÉT XỬ PHÚC THẨM",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "3E87428D-AB45-460F-8132-6E5FD054CFAF",
              "so_thu_tu"  =>   18,
              "MAPC"  =>   "3700500000000000400001800000000000000000",
              "ten_chuong"  =>   "Chương XVIII GIẢI QUYẾT VỤ ÁN DÂN SỰ THEO THỦ TỤC RÚT GỌN TẠI TÒA ÁN CẤP SƠ THẨM",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "DB75C626-F13C-4B39-9C5C-54CBC9938B7B",
              "so_thu_tu"  =>   19,
              "MAPC"  =>   "3700500000000000400001900000000000000000",
              "ten_chuong"  =>   "Chương XIX GIẢI QUYẾT VỤ ÁN DÂN SỰ THEO THỦ TỤC RÚT GỌN TẠI TÒA ÁN CẤP PHÚC THẨM",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "75B620C2-0CD7-4664-9719-AABAC069F366",
              "so_thu_tu"  =>   20,
              "MAPC"  =>   "3700500000000000500002000000000000000000",
              "ten_chuong"  =>   "Chương XX THỦ TỤC GIÁM ĐỐC THẨM",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "51402DD3-D13A-461E-B4E1-57E08ED4487C",
              "so_thu_tu"  =>   21,
              "MAPC"  =>   "3700500000000000500002100000000000000000",
              "ten_chuong"  =>   "Chương XXI THỦ TỤC TÁI THẨM",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "E7DB95B5-73D2-450F-B38D-A867669D5609",
              "so_thu_tu"  =>   22,
              "MAPC"  =>   "3700500000000000500002200000000000000000",
              "ten_chuong"  =>   "Chương XXII THỦ TỤC ĐẶC BIỆT XEM XÉT LẠI QUYẾT ĐỊNH CỦA HỘI ĐỒNG THẨM PHÁN TÒA ÁN NHÂN DÂN TỐI CAO",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "B5E34510-57D1-4704-9602-00FAC7882D61",
              "so_thu_tu"  =>   23,
              "MAPC"  =>   "3700500000000000600002300000000000000000",
              "ten_chuong"  =>   "Chương XXIII QUY ĐỊNH CHUNG VỀ THỦ TỤC GIẢI QUYẾT VIỆC DÂN SỰ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "8C7C01E1-FE46-4B9B-856F-3EED343D17AE",
              "so_thu_tu"  =>   24,
              "MAPC"  =>   "3700500000000000600002400000000000000000",
              "ten_chuong"  =>   "Chương XXIV THỦ TỤC GIẢI QUYẾT YÊU CẦU TUYÊN BỐ MỘT NGƯỜI MẤT NĂNG LỰC HÀNH VI DÂN SỰ, BỊ HẠN CHẾ NĂNG LỰC HÀNH VI DÂN SỰ HOẶC CÓ KHÓ KHĂN TRONG NHẬN THỨC, LÀM CHỦ HÀNH VI",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "1119246C-48FC-455F-9934-DA373BFDE107",
              "so_thu_tu"  =>   25,
              "MAPC"  =>   "3700500000000000600002500000000000000000",
              "ten_chuong"  =>   "Chương XXV THỦ TỤC GIẢI QUYẾT YÊU CẦU THÔNG BÁO TÌM KIẾM NGƯỜI VẮNG MẶT TẠI NƠI CƯ TRÚ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "E2E02399-CE81-4905-ACFE-DFC704A0D08B",
              "so_thu_tu"  =>   26,
              "MAPC"  =>   "3700500000000000600002600000000000000000",
              "ten_chuong"  =>   "Chương XXVI THỦ TỤC GIẢI QUYẾT YÊU CẦU TUYÊN BỐ MỘT NGƯỜI MẤT TÍCH",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "90DFBD0E-445D-4463-AA3B-6D8E5092DC0D",
              "so_thu_tu"  =>   27,
              "MAPC"  =>   "3700500000000000600002700000000000000000",
              "ten_chuong"  =>   "Chương XXVII THỦ TỤC GIẢI QUYẾT YÊU CẦU TUYÊN BỐ MỘT NGƯỜI LÀ ĐÃ CHẾT",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "7C5DB02D-675C-4C78-ACF8-D3EA7FC2F599",
              "so_thu_tu"  =>   28,
              "MAPC"  =>   "3700500000000000600002800000000000000000",
              "ten_chuong"  =>   "Chương XXVIII THỦ TỤC GIẢI QUYẾT YÊU CẦU CÔNG NHẬN THUẬN TÌNH LY HÔN, THỎA THUẬN NUÔI CON, CHIA TÀI SẢN KHI LY HÔN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "9E60DEBD-5874-4837-BEAB-38AA16BFF64B",
              "so_thu_tu"  =>   29,
              "MAPC"  =>   "3700500000000000600002900000000000000000",
              "ten_chuong"  =>   "Chương XXIX THỦ TỤC GIẢI QUYẾT YÊU CẦU TUYÊN BỐ VĂN BẢN CÔNG CHỨNG VÔ HIỆU",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "43DF7386-6D30-4A4C-A453-613A5F981A0F",
              "so_thu_tu"  =>   30,
              "MAPC"  =>   "3700500000000000600003000000000000000000",
              "ten_chuong"  =>   "Chương XXX THỦ TỤC GIẢI QUYẾT YÊU CẦU TUYÊN BỐ HỢP ĐỒNG LAO ĐỘNG VÔ HIỆU; THỎA ƯỚC LAO ĐỘNG TẬP THỂ VÔ HIỆU",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "6C3681C3-F7BE-4027-B969-25F5A444AA89",
              "so_thu_tu"  =>   31,
              "MAPC"  =>   "3700500000000000600003100000000000000000",
              "ten_chuong"  =>   "Chương XXXI THỦ TỤC XÉT TÍNH HỢP PHÁP CỦA CUỘC ĐÌNH CÔNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "CA9DAAF2-D67F-467B-BB19-BE6F574A09A7",
              "so_thu_tu"  =>   32,
              "MAPC"  =>   "3700500000000000600003200000000000000000",
              "ten_chuong"  =>   "Chương XXXII THỦ TỤC GIẢI QUYẾT CÁC VIỆC DÂN SỰ LIÊN QUAN ĐẾN HOẠT ĐỘNG TRỌNG TÀI THƯƠNG MẠI VIỆT NAM",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "17FB7647-4F8E-429E-9FE7-3D0545BCB67F",
              "so_thu_tu"  =>   33,
              "MAPC"  =>   "3700500000000000600003300000000000000000",
              "ten_chuong"  =>   "Chương XXXIII THỦ TỤC CÔNG NHẬN KẾT QUẢ HÒA GIẢI THÀNH NGOÀI TÒA ÁN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "36EB3618-627A-4EE0-AD8C-9090BABB905A",
              "so_thu_tu"  =>   34,
              "MAPC"  =>   "3700500000000000600003400000000000000000",
              "ten_chuong"  =>   "Chương XXXIV THỦ TỤC GIẢI QUYẾT VIỆC DÂN SỰ LIÊN QUAN ĐẾN VIỆC BẮT GIỮ TÀU BAY, TÀU BIỂN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "DF811FDF-803C-41FC-9D42-810875403755",
              "so_thu_tu"  =>   35,
              "MAPC"  =>   "3700500000000000700003500000000000000000",
              "ten_chuong"  =>   "Chương XXXV QUY ĐỊNH CHUNG VỀ THỦ TỤC CÔNG NHẬN VÀ CHO THI HÀNH TẠI VIỆT NAM HOẶC KHÔNG CÔNG NHẬN BẢN ÁN, QUYẾT ĐỊNH DÂN SỰ CỦA TÒA ÁN NƯỚC NGOÀI; CÔNG NHẬN VÀ CHO THI HÀNH PHÁN QUYẾT CỦA TRỌNG TÀI NƯỚC NGOÀI",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "2EE97530-2BA1-4184-8FA4-8F7A7E8A8C1F",
              "so_thu_tu"  =>   36,
              "MAPC"  =>   "3700500000000000700003600000000000000000",
              "ten_chuong"  =>   "Chương XXXVI THỦ TỤC XÉT ĐƠN YÊU CẦU CÔNG NHẬN VÀ CHO THI HÀNH TẠI VIỆT NAM BẢN ÁN, QUYẾT ĐỊNH DÂN SỰ CỦA TÒA ÁN NƯỚC NGOÀI; THỦ TỤC XÉT ĐƠN YÊU CẦU KHÔNG CÔNG NHẬN BẢN ÁN, QUYẾT ĐỊNH DÂN SỰ CỦA TÒA ÁN NƯỚC NGOÀI",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "176E1290-908A-48D1-B123-558A66B1E5A4",
              "so_thu_tu"  =>   37,
              "MAPC"  =>   "3700500000000000700003700000000000000000",
              "ten_chuong"  =>   "Chương XXXVII THỦ TỤC XÉT ĐƠN YÊU CẦU CÔNG NHẬN VÀ CHO THI HÀNH TẠI VIỆT NAM PHÁN QUYẾT CỦA TRỌNG TÀI NƯỚC NGOÀI",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "C482BBE6-12A8-49CB-9B94-514A78ABB927",
              "so_thu_tu"  =>   38,
              "MAPC"  =>   "3700500000000000800003800000000000000000",
              "ten_chuong"  =>   "Chương XXXVIII QUY ĐỊNH CHUNG VỀ THỦ TỤC GIẢI QUYẾT VỤ VIỆC DÂN SỰ CÓ YẾU TỐ NƯỚC NGOÀI",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "D8912F2C-038F-41C6-984D-A0B3A9F0C4FC",
              "so_thu_tu"  =>   39,
              "MAPC"  =>   "3700500000000000900003900000000000000000",
              "ten_chuong"  =>   "Chương XXXIX THI HÀNH BẢN ÁN, QUYẾT ĐỊNH DÂN SỰ CỦA TÒA ÁN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "79A9733E-D4B9-4608-B57D-7D2A9CAB66D0",
              "so_thu_tu"  =>   40,
              "MAPC"  =>   "3700500000000001000004000000000000000000",
              "ten_chuong"  =>   "Chương XL XỬ LÝ HÀNH VI CẢN TRỞ HOẠT ĐỘNG TỐ TỤNG DÂN SỰ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "2a0ee4ce-22b7-4228-902b-c91c426ec79f"
            ],
            [
              "hash"  =>   "710BD601-7A33-4322-8141-25FCD687CAB6",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "37006000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "7cdd63fb-16ea-4ed4-bf3c-6529a021b3d2"
            ],
            [
              "hash"  =>   "6149F4DE-22C2-4068-9186-39F75776774F",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "37006000000000002000",
              "ten_chuong"  =>   "Chương II THẨM QUYỀN CỦA TÒA ÁN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "7cdd63fb-16ea-4ed4-bf3c-6529a021b3d2"
            ],
            [
              "hash"  =>   "1C73759E-CBFB-4E5D-B039-A3329BC0BFC3",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "37006000000000003000",
              "ten_chuong"  =>   "Chương III CƠ QUAN TIẾN HÀNH TỐ TỤNG, NGƯỜI TIẾN HÀNH TỐ TỤNG VÀ VIỆC THAY ĐỔI NGƯỜI TIẾN HÀNH TỐ TỤNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "7cdd63fb-16ea-4ed4-bf3c-6529a021b3d2"
            ],
            [
              "hash"  =>   "5CD9C680-AAE2-4A90-86E2-5E02404C1AC9",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "37006000000000004000",
              "ten_chuong"  =>   "Chương IV NGƯỜI THAM GIA TỐ TỤNG, QUYỀN VÀ NGHĨA VỤ CỦA NGƯỜI THAM GIA TỐ TỤNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "7cdd63fb-16ea-4ed4-bf3c-6529a021b3d2"
            ],
            [
              "hash"  =>   "798C4FE7-E579-4FE1-AF14-06E0FED37C99",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "37006000000000005000",
              "ten_chuong"  =>   "Chương V CÁC BIỆN PHÁP KHẨN CẤP TẠM THỜI",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "7cdd63fb-16ea-4ed4-bf3c-6529a021b3d2"
            ],
            [
              "hash"  =>   "D2903242-EF00-4EAE-A907-7370F0438995",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "37006000000000006000",
              "ten_chuong"  =>   "Chương VI CHỨNG MINH VÀ CHỨNG CỨ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "7cdd63fb-16ea-4ed4-bf3c-6529a021b3d2"
            ],
            [
              "hash"  =>   "FC836854-FDA9-496B-87ED-E61328248DEA",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "37006000000000007000",
              "ten_chuong"  =>   "Chương VII CẤP, TỐNG ĐẠT, THÔNG BÁO VĂN BẢN TỐ TỤNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "7cdd63fb-16ea-4ed4-bf3c-6529a021b3d2"
            ],
            [
              "hash"  =>   "EE6190F2-B46C-4F3C-9D82-5F29D7027A36",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "37006000000000008000",
              "ten_chuong"  =>   "Chương VIII PHÁT HIỆN VÀ KIẾN NGHỊ SỬA ĐỔI, BỔ SUNG HOẶC BÃI BỎ VĂN BẢN QUY PHẠM PHÁP LUẬT TRONG QUÁ TRÌNH GIẢI QUYẾT VỤ ÁN HÀNH CHÍNH",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "7cdd63fb-16ea-4ed4-bf3c-6529a021b3d2"
            ],
            [
              "hash"  =>   "2C16980F-DFDE-4773-AED5-761ACFB35847",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "37006000000000009000",
              "ten_chuong"  =>   "Chương IX KHỞI KIỆN, THỤ LÝ VỤ ÁN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "7cdd63fb-16ea-4ed4-bf3c-6529a021b3d2"
            ],
            [
              "hash"  =>   "65FEB704-7212-4B88-925B-A6569F9BCCEC",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "37006000000000010000",
              "ten_chuong"  =>   "Chương X THỦ TỤC ĐỐI THOẠI VÀ CHUẨN BỊ XÉT XỬ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "7cdd63fb-16ea-4ed4-bf3c-6529a021b3d2"
            ],
            [
              "hash"  =>   "3B2B909B-71BF-4465-9BDC-537534AEA9CD",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "37006000000000011000",
              "ten_chuong"  =>   "Chương XI PHIÊN TÒA SƠ THẨM",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "7cdd63fb-16ea-4ed4-bf3c-6529a021b3d2"
            ],
            [
              "hash"  =>   "22A4155B-D83A-49A3-AEA1-6A0ECE3BB14C",
              "so_thu_tu"  =>   12,
              "MAPC"  =>   "37006000000000012000",
              "ten_chuong"  =>   "Chương XII THỦ TỤC GIẢI QUYẾT KHIẾU KIỆN DANH SÁCH CỬ TRI BẦU CỬ ĐẠI BIỂU QUỐC HỘI, DANH SÁCH CỬ TRI BẦU CỬ ĐẠI BIỂU HỘI ĐỒNG NHÂN DÂN, DANH SÁCH CỬ TRI TRƯNG CẦU Ý DÂN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "7cdd63fb-16ea-4ed4-bf3c-6529a021b3d2"
            ],
            [
              "hash"  =>   "6F9781D7-1C67-43CA-B7A7-4F96712556E6",
              "so_thu_tu"  =>   13,
              "MAPC"  =>   "37006000000000013000",
              "ten_chuong"  =>   "Chương XIII THỦ TỤC PHÚC THẨM",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "7cdd63fb-16ea-4ed4-bf3c-6529a021b3d2"
            ],
            [
              "hash"  =>   "ABF034D1-21C9-454A-AC5C-D9E0A0E97177",
              "so_thu_tu"  =>   14,
              "MAPC"  =>   "37006000000000014000",
              "ten_chuong"  =>   "Chương XIV GIẢI QUYẾT VỤ ÁN HÀNH CHÍNH THEO THỦ TỤC RÚT GỌN TẠI TÒA ÁN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "7cdd63fb-16ea-4ed4-bf3c-6529a021b3d2"
            ],
            [
              "hash"  =>   "7F4EA4FA-82EC-4891-B6EB-D0EF53DC62C8",
              "so_thu_tu"  =>   15,
              "MAPC"  =>   "37006000000000015000",
              "ten_chuong"  =>   "Chương XV THỦ TỤC GIÁM ĐỐC THẨM",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "7cdd63fb-16ea-4ed4-bf3c-6529a021b3d2"
            ],
            [
              "hash"  =>   "FFFDD9F1-205F-4746-AA38-EB124B29A95E",
              "so_thu_tu"  =>   16,
              "MAPC"  =>   "37006000000000016000",
              "ten_chuong"  =>   "Chương XVI THỦ TỤC TÁI THẨM",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "7cdd63fb-16ea-4ed4-bf3c-6529a021b3d2"
            ],
            [
              "hash"  =>   "BFEF892F-962E-4A2C-A8FB-0A93883BF8E1",
              "so_thu_tu"  =>   17,
              "MAPC"  =>   "37006000000000017000",
              "ten_chuong"  =>   "Chương XVII THỦ TỤC ĐẶC BIỆT XEM XÉT LẠI QUYẾT ĐỊNH CỦA HỘI ĐỒNG THẨM PHÁN TÒA ÁN NHÂN DÂN TỐI CAO",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "7cdd63fb-16ea-4ed4-bf3c-6529a021b3d2"
            ],
            [
              "hash"  =>   "2782C47C-2F5E-40DF-804B-D972502F85B2",
              "so_thu_tu"  =>   18,
              "MAPC"  =>   "37006000000000018000",
              "ten_chuong"  =>   "Chương XVIII THỦ TỤC GIẢI QUYẾT VỤ ÁN HÀNH CHÍNH CÓ YẾU TỐ NƯỚC NGOÀI",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "7cdd63fb-16ea-4ed4-bf3c-6529a021b3d2"
            ],
            [
              "hash"  =>   "EA424E3A-E2AF-4F9E-9D16-718526E92791",
              "so_thu_tu"  =>   19,
              "MAPC"  =>   "37006000000000019000",
              "ten_chuong"  =>   "Chương XIX THỦ TỤC THI HÀNH BẢN ÁN, QUYẾT ĐỊNH CỦA TÒA ÁN VỀ VỤ ÁN HÀNH CHÍNH",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "7cdd63fb-16ea-4ed4-bf3c-6529a021b3d2"
            ],
            [
              "hash"  =>   "090C4AE7-F19E-4532-A5D1-7FA28AEE977D",
              "so_thu_tu"  =>   20,
              "MAPC"  =>   "37006000000000020000",
              "ten_chuong"  =>   "Chương XX XỬ LÝ CÁC HÀNH VI CẢN TRỞ HOẠT ĐỘNG TỐ TỤNG HÀNH CHÍNH",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "7cdd63fb-16ea-4ed4-bf3c-6529a021b3d2"
            ],
            [
              "hash"  =>   "2BCC2229-063A-46DC-8992-95C4517073E3",
              "so_thu_tu"  =>   21,
              "MAPC"  =>   "37006000000000021000",
              "ten_chuong"  =>   "Chương XXI KHIẾU NẠI, TỐ CÁO TRONG TỐ TỤNG HÀNH CHÍNH",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "7cdd63fb-16ea-4ed4-bf3c-6529a021b3d2"
            ],
            [
              "hash"  =>   "9FA13012-00FE-461F-B096-0BB7020D7FD7",
              "so_thu_tu"  =>   22,
              "MAPC"  =>   "37006000000000022000",
              "ten_chuong"  =>   "Chương XXII ÁN PHÍ, LỆ PHÍ VÀ CÁC CHI PHÍ TỐ TỤNG KHÁC",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "7cdd63fb-16ea-4ed4-bf3c-6529a021b3d2"
            ],
            [
              "hash"  =>   "7097B4B7-4E27-4D11-B81A-187304B18726",
              "so_thu_tu"  =>   23,
              "MAPC"  =>   "37006000000000023000",
              "ten_chuong"  =>   "Chương XXIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "7cdd63fb-16ea-4ed4-bf3c-6529a021b3d2"
            ],
            [
              "hash"  =>   "24D9870B-BACC-479A-876F-E53B1B2F196C",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "3700700000000000100000100000000000000000",
              "ten_chuong"  =>   "Chương I PHẠM VI ĐIỀU CHỈNH, NHIỆM VỤ, HIỆU LỰC CỦA BỘ LUẬT TỐ TỤNG HÌNH SỰ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "F4A37D0C-2A96-4692-A080-DBB6C8503341",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "3700700000000000100000200000000000000000",
              "ten_chuong"  =>   "Chương II NHỮNG NGUYÊN TẮC CƠ BẢN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "F86E5710-3C7D-4795-A90B-3EE7DF41FF85",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "3700700000000000100000300000000000000000",
              "ten_chuong"  =>   "Chương III CƠ QUAN CÓ THẨM QUYỀN TIẾN HÀNH TỐ TỤNG, NGƯỜI CÓ THẨM QUYỀN TIẾN HÀNH TỐ TỤNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "A0C2DBB6-A12B-4534-93D4-529A2B6F69B3",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "3700700000000000100000400000000000000000",
              "ten_chuong"  =>   "Chương IV NGƯỜI THAM GIA TỐ TỤNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "B25E238F-1C68-44D7-923F-A9C5E0ACE886",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "3700700000000000100000500000000000000000",
              "ten_chuong"  =>   "Chương V BÀO CHỮA, BẢO VỆ QUYỀN VÀ LỢI ÍCH HỢP PHÁP CỦA BỊ HẠI, ĐƯƠNG SỰ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "17AB34DB-1701-4E8D-A22E-376CB62354FC",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "3700700000000000100000600000000000000000",
              "ten_chuong"  =>   "Chương VI CHỨNG MINH VÀ CHỨNG CỨ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "A6171BD1-7AFC-4B8A-941F-74D6A6961E71",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "3700700000000000100000700000000000000000",
              "ten_chuong"  =>   "Chương VII BIỆN PHÁP NGĂN CHẶN, BIỆN PHÁP CƯỠNG CHẾ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "79628945-AAD2-4DA6-8901-9CD171C3EC57",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "3700700000000000100000800000000000000000",
              "ten_chuong"  =>   "Chương VIII HỒ SƠ VỤ ÁN, VĂN BẢN TỐ TỤNG, THỜI HẠN VÀ CHI PHÍ TỐ TỤNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "11C1FE24-2711-4D02-8D02-1E43035B0278",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "3700700000000000200000900000000000000000",
              "ten_chuong"  =>   "Chương IX KHỞI TỐ VỤ ÁN HÌNH SỰ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "0BC9D4AC-1B6F-4843-B4AF-ECC12CA274CA",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "3700700000000000200001000000000000000000",
              "ten_chuong"  =>   "Chương X NHỮNG QUY ĐỊNH CHUNG VỀ ĐIỀU TRA VỤ ÁN HÌNH SỰ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "C2693013-CAB6-4011-B3EE-30DE49BA2596",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "3700700000000000200001100000000000000000",
              "ten_chuong"  =>   "Chương XI KHỞI TỐ BỊ CAN VÀ HỎI CUNG BỊ CAN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "38EC041E-AA62-4BE1-9E42-CCC4ABEA23C4",
              "so_thu_tu"  =>   12,
              "MAPC"  =>   "3700700000000000200001200000000000000000",
              "ten_chuong"  =>   "Chương XII LẤY LỜI KHAI NGƯỜI LÀM CHỨNG, NGƯỜI BỊ HẠI, NGUYÊN ĐƠN DÂN SỰ, BỊ ĐƠN DÂN SỰ, NGƯỜI CÓ QUYỀN LỢI, NGHĨA VỤ LIÊN QUAN ĐẾN VỤ ÁN, ĐỐI CHẤT VÀ NHẬN DẠNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "53D8F0E4-6A28-4920-ABE0-632ACA8BB9D1",
              "so_thu_tu"  =>   13,
              "MAPC"  =>   "3700700000000000200001300000000000000000",
              "ten_chuong"  =>   "Chương XIII KHÁM XÉT, THU GIỮ, TẠM GIỮ TÀI LIỆU, ĐỒ VẬT",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "2B9FA772-8147-448B-AA93-98F20097EB95",
              "so_thu_tu"  =>   14,
              "MAPC"  =>   "3700700000000000200001400000000000000000",
              "ten_chuong"  =>   "Chương XIV KHÁM NGHIỆM HIỆN TRƯỜNG, KHÁM NGHIỆM TỬ THI, XEM XÉT DẤU VẾT TRÊN THÂN THỂ, THỰC NGHIỆM ĐIỀU TRA",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "AAAA9C66-388B-4EA8-AD96-DD7ED66E01CC",
              "so_thu_tu"  =>   15,
              "MAPC"  =>   "3700700000000000200001500000000000000000",
              "ten_chuong"  =>   "Chương XV GIÁM ĐỊNH VÀ ĐỊNH GIÁ TÀI SẢN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "09856324-0006-474A-9242-C0716C27790E",
              "so_thu_tu"  =>   16,
              "MAPC"  =>   "3700700000000000200001600000000000000000",
              "ten_chuong"  =>   "Chương XVI BIỆN PHÁP ĐIỀU TRA TỐ TỤNG ĐẶC BIỆT",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "D322F6AA-98ED-4BDF-9FC2-B0BFEA6CFEA9",
              "so_thu_tu"  =>   17,
              "MAPC"  =>   "3700700000000000200001700000000000000000",
              "ten_chuong"  =>   "Chương XVII TẠM ĐÌNH CHỈ ĐIỀU TRA VÀ KẾT THÚC ĐIỀU TRA",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "EA1FAF8F-5CE8-4CFC-8939-FA3BC4BEDF83",
              "so_thu_tu"  =>   18,
              "MAPC"  =>   "3700700000000000300001800000000000000000",
              "ten_chuong"  =>   "Chương XVIII NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "19827134-1A0B-4992-B9A1-8CB044ED1E2C",
              "so_thu_tu"  =>   19,
              "MAPC"  =>   "3700700000000000300001900000000000000000",
              "ten_chuong"  =>   "Chương XIX QUYẾT ĐỊNH VIỆC TRUY TỐ BỊ CAN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "FA9AC572-A53A-46CF-BE38-816CEDA6CCC2",
              "so_thu_tu"  =>   20,
              "MAPC"  =>   "3700700000000000400002000000000000000000",
              "ten_chuong"  =>   "Chương XX NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "94266444-1DA9-48F7-8F39-4362C81214F6",
              "so_thu_tu"  =>   21,
              "MAPC"  =>   "3700700000000000400002100000000000000000",
              "ten_chuong"  =>   "Chương XXI XÉT XỬ SƠ THẨM",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "E40DDF77-CE42-4A5B-8C8E-9B1D71646F11",
              "so_thu_tu"  =>   22,
              "MAPC"  =>   "3700700000000000400002200000000000000000",
              "ten_chuong"  =>   "Chương XXII XÉT XỬ PHÚC THẨM",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "1260043D-E931-4794-9B2E-E5FF431425BF",
              "so_thu_tu"  =>   23,
              "MAPC"  =>   "3700700000000000500002300000000000000000",
              "ten_chuong"  =>   "Chương XXIII BẢN ÁN, QUYẾT ĐỊNH ĐƯỢC THI HÀNH NGAY VÀ THẨM QUYỀN RA QUYẾT ĐỊNH THI HÀNH ÁN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "0FAAA860-C5BD-40E9-BEE1-964EA34978C8",
              "so_thu_tu"  =>   24,
              "MAPC"  =>   "3700700000000000500002400000000000000000",
              "ten_chuong"  =>   "Chương XXIV MỘT SỐ THỦ TỤC VỀ THI HÀNH ÁN TỬ HÌNH, XÉT THA TÙ TRƯỚC THỜI HẠN CÓ ĐIỀU KIỆN, XÓA ÁN TÍCH",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "FDA43962-A2C0-432F-9DAC-0491CEE51C35",
              "so_thu_tu"  =>   25,
              "MAPC"  =>   "3700700000000000600002500000000000000000",
              "ten_chuong"  =>   "Chương XXV THỦ TỤC GIÁM ĐỐC THẨM",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "27D615C8-56FB-4CF2-B5A5-0254BE03A8E3",
              "so_thu_tu"  =>   26,
              "MAPC"  =>   "3700700000000000600002600000000000000000",
              "ten_chuong"  =>   "Chương XXVI THỦ TỤC TÁI THẨM",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "EDF5A682-5197-449A-92FD-61AFE9DE7674",
              "so_thu_tu"  =>   27,
              "MAPC"  =>   "3700700000000000600002700000000000000000",
              "ten_chuong"  =>   "Chương XXVII THỦ TỤC XEM XÉT LẠI QUYẾT ĐỊNH CỦA HỘI ĐỒNG THẨM PHÁN TÒA ÁN NHÂN DÂN TỐI CAO",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "285E27DB-9BC7-409F-8E08-BB0EDDC90C9F",
              "so_thu_tu"  =>   28,
              "MAPC"  =>   "3700700000000000700002800000000000000000",
              "ten_chuong"  =>   "Chương XXVIII THỦ TỤC TỐ TỤNG ĐỐI VỚI NGƯỜI DƯỚI 18 TUỔI",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "6BAF6D65-069F-462B-8173-6BF1EAE5B746",
              "so_thu_tu"  =>   29,
              "MAPC"  =>   "3700700000000000700002900000000000000000",
              "ten_chuong"  =>   "Chương XXIX THỦ TỤC TỐ TỤNG TRUY CỨU TRÁCH NHIỆM HÌNH SỰ PHÁP NHÂN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "5182D75F-DF49-4021-8913-391399C5B968",
              "so_thu_tu"  =>   30,
              "MAPC"  =>   "3700700000000000700003000000000000000000",
              "ten_chuong"  =>   "Chương XXX THỦ TỤC ÁP DỤNG BIỆN PHÁP BẮT BUỘC CHỮA BỆNH",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "005B97A7-9E6D-442D-8452-E2D9E51E85EE",
              "so_thu_tu"  =>   31,
              "MAPC"  =>   "3700700000000000700003100000000000000000",
              "ten_chuong"  =>   "Chương XXXI THỦ TỤC RÚT GỌN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "830DFEA7-82CF-4DEF-91E8-77A144F48304",
              "so_thu_tu"  =>   32,
              "MAPC"  =>   "3700700000000000700003200000000000000000",
              "ten_chuong"  =>   "Chương XXXII XỬ LÝ CÁC HÀNH VI CẢN TRỞ HOẠT ĐỘNG TỐ TỤNG HÌNH SỰ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "9133A009-1D4E-489D-A357-FDE0B6F3C9D9",
              "so_thu_tu"  =>   33,
              "MAPC"  =>   "3700700000000000700003300000000000000000",
              "ten_chuong"  =>   "Chương XXXIII KHIẾU NẠI, TỐ CÁO TRONG TỐ TỤNG HÌNH SỰ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "D9DDE105-279E-484E-9DFE-31ED0C472A68",
              "so_thu_tu"  =>   34,
              "MAPC"  =>   "3700700000000000700003400000000000000000",
              "ten_chuong"  =>   "Chương XXXIV BẢO VỆ NGƯỜI TỐ GIÁC TỘI PHẠM, NGƯỜI LÀM CHỨNG, BỊ HẠI VÀ NGƯỜI THAM GIA TỐ TỤNG KHÁC",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "8921BEB8-FE0A-4540-9EA1-5EEBE68B31F0",
              "so_thu_tu"  =>   35,
              "MAPC"  =>   "3700700000000000800003500000000000000000",
              "ten_chuong"  =>   "Chương XXXV NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "6813D9F8-9806-4F0E-A38B-CAE972CFCBBF",
              "so_thu_tu"  =>   36,
              "MAPC"  =>   "3700700000000000800003600000000000000000",
              "ten_chuong"  =>   "Chương XXXVI MỘT SỐ HOẠT ĐỘNG HỢP TÁC QUỐC TẾ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "0e10d80f-a915-4cc9-999c-99eaefed23d0"
            ],
            [
              "hash"  =>   "894D5F2B-38CB-4FA4-8387-0AEBA995008D",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "37008000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "6d281129-df44-468d-91ef-0e75fa435310"
            ],
            [
              "hash"  =>   "D936CC5A-CD11-440F-BB11-92DAAC831D51",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "37008000000000002000",
              "ten_chuong"  =>   "Chương II PHẠM VI TRÁCH NHIỆM BỒI THƯỜNG CỦA NHÀ NƯỚC",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "6d281129-df44-468d-91ef-0e75fa435310"
            ],
            [
              "hash"  =>   "29CEFA68-60F0-4E01-BDC3-6D0E43D97575",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "37008000000000003000",
              "ten_chuong"  =>   "Chương III THIỆT HẠI ĐƯỢC BỒI THƯỜNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "6d281129-df44-468d-91ef-0e75fa435310"
            ],
            [
              "hash"  =>   "313BF778-28EF-4383-B70B-64B6E8411A9B",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "37008000000000004000",
              "ten_chuong"  =>   "Chương IV CƠ QUAN GIẢI QUYẾT BỒI THƯỜNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "6d281129-df44-468d-91ef-0e75fa435310"
            ],
            [
              "hash"  =>   "7DD820E1-513A-40E8-A507-01CD4D8C5568",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "37008000000000005000",
              "ten_chuong"  =>   "Chương V THỦ TỤC GIẢI QUYẾT YÊU CẦU BỒI THƯỜNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "6d281129-df44-468d-91ef-0e75fa435310"
            ],
            [
              "hash"  =>   "C7837FAF-774F-4C59-8E62-D9421F66878D",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "37008000000000006000",
              "ten_chuong"  =>   "Chương VI KINH PHÍ BỒI THƯỜNG VÀ THỦ TỤC CHI TRẢ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "6d281129-df44-468d-91ef-0e75fa435310"
            ],
            [
              "hash"  =>   "5931B738-6E5A-4D03-AFF0-8060B4CFCB1D",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "37008000000000007000",
              "ten_chuong"  =>   "Chương VII TRÁCH NHIỆM HOÀN TRẢ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "6d281129-df44-468d-91ef-0e75fa435310"
            ],
            [
              "hash"  =>   "10BF2E3D-CA19-4EA2-B1D0-7EEBBFD0E509",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "37008000000000008000",
              "ten_chuong"  =>   "Chương VIII TRÁCH NHIỆM CỦA CÁC CƠ QUAN NHÀ NƯỚC  TRONG CÔNG TÁC BỒI THƯỜNG NHÀ NƯỚC",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "6d281129-df44-468d-91ef-0e75fa435310"
            ],
            [
              "hash"  =>   "4CEADEF7-33F4-4779-955A-43171ADDFCA3",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "37008000000000009000",
              "ten_chuong"  =>   "Chương IX ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "6d281129-df44-468d-91ef-0e75fa435310"
            ],
            [
              "hash"  =>   "3F93FDA4-5FA7-49F1-9611-3922B0A09D45",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "37009000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "3c3bfd95-920c-404d-82f9-c95af4d8b4e1"
            ],
            [
              "hash"  =>   "DA374C1C-8783-40FA-A802-19930C07C2A2",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "37009000000000002000",
              "ten_chuong"  =>   "Chương II THỎA THUẬN TRỌNG TÀI",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "3c3bfd95-920c-404d-82f9-c95af4d8b4e1"
            ],
            [
              "hash"  =>   "CB671881-7F23-46D6-AC64-264F429BDC01",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "37009000000000003000",
              "ten_chuong"  =>   "Chương III TRỌNG TÀI VIÊN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "3c3bfd95-920c-404d-82f9-c95af4d8b4e1"
            ],
            [
              "hash"  =>   "469338CC-742A-4767-B3BC-08CCFDF36329",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "37009000000000004000",
              "ten_chuong"  =>   "Chương IV TRUNG TÂM TRỌNG TÀI",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "3c3bfd95-920c-404d-82f9-c95af4d8b4e1"
            ],
            [
              "hash"  =>   "14AE8E26-C87B-41D3-97A1-03B457878B46",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "37009000000000005000",
              "ten_chuong"  =>   "Chương V KHỞI KIỆN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "3c3bfd95-920c-404d-82f9-c95af4d8b4e1"
            ],
            [
              "hash"  =>   "EBDB937D-CA5B-4F59-9CA0-7AD56E9030C5",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "37009000000000006000",
              "ten_chuong"  =>   "Chương VI HỘI ĐỒNG TRỌNG TÀI",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "3c3bfd95-920c-404d-82f9-c95af4d8b4e1"
            ],
            [
              "hash"  =>   "547A6395-9A96-4C57-8160-1F1CE7DE48B8",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "37009000000000007000",
              "ten_chuong"  =>   "Chương VII BIỆN PHÁP KHẨN CẤP TẠM THỜI",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "3c3bfd95-920c-404d-82f9-c95af4d8b4e1"
            ],
            [
              "hash"  =>   "8FD781C9-E879-4A5C-98D2-D6D985077EE6",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "37009000000000008000",
              "ten_chuong"  =>   "Chương VIII PHIÊN HỌP GIẢI QUYẾT TRANH CHẤP",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "3c3bfd95-920c-404d-82f9-c95af4d8b4e1"
            ],
            [
              "hash"  =>   "776C1A94-0095-48DA-8557-AB94D7550479",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "37009000000000009000",
              "ten_chuong"  =>   "Chương IX PHÁN QUYẾT TRỌNG TÀI",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "3c3bfd95-920c-404d-82f9-c95af4d8b4e1"
            ],
            [
              "hash"  =>   "224C32F5-3745-4B7D-864E-810E3947C7EA",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "37009000000000010000",
              "ten_chuong"  =>   "Chương X THI HÀNH PHÁN QUYẾT TRỌNG TÀI",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "3c3bfd95-920c-404d-82f9-c95af4d8b4e1"
            ],
            [
              "hash"  =>   "90B4D5EE-1E43-4D03-AD37-FA9750781BC5",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "37009000000000011000",
              "ten_chuong"  =>   "Chương XI HUỶ PHÁN QUYẾT TRỌNG TÀI",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "3c3bfd95-920c-404d-82f9-c95af4d8b4e1"
            ],
            [
              "hash"  =>   "71D5B79F-596F-47FC-B096-4BC21A027A5B",
              "so_thu_tu"  =>   12,
              "MAPC"  =>   "37009000000000012000",
              "ten_chuong"  =>   "Chương XII TỔ CHỨC VÀ HOẠT ĐỘNG CỦA TRỌNG TÀI NƯỚC NGOÀI TẠI VIỆT NAM",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "3c3bfd95-920c-404d-82f9-c95af4d8b4e1"
            ],
            [
              "hash"  =>   "55697321-9A0E-4423-95E9-7BA1B6216B75",
              "so_thu_tu"  =>   13,
              "MAPC"  =>   "37009000000000013000",
              "ten_chuong"  =>   "Chương XIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "3c3bfd95-920c-404d-82f9-c95af4d8b4e1"
            ],
            [
              "hash"  =>   "88CB2383-CC6B-48D4-BCDD-CD6CCDF0F0F7",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "37010000000000001000",
              "ten_chuong"  =>   "Chương I QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "09fb5301-812d-4630-8f9a-9c8cac67a21c"
            ],
            [
              "hash"  =>   "2E1DB90F-B70B-4226-A72F-02FEEB5BB281",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "37010000000000002000",
              "ten_chuong"  =>   "Chương II HỆ THỐNG TỔ CHỨC, NHIỆM VỤ, QUYỀN HẠN CỦA CƠ QUAN QUẢN LÝ, THI HÀNH TẠM GIỮ, TẠM GIAM",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "09fb5301-812d-4630-8f9a-9c8cac67a21c"
            ],
            [
              "hash"  =>   "106832C8-17CD-4A36-9979-F8333DE7D0F9",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "37010000000000003000",
              "ten_chuong"  =>   "Chương III CHẾ ĐỘ QUẢN LÝ GIAM GIỮ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "09fb5301-812d-4630-8f9a-9c8cac67a21c"
            ],
            [
              "hash"  =>   "869C24A3-90FD-4B19-A98B-1AA395317B99",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "37010000000000004000",
              "ten_chuong"  =>   "Chương IV CHẾ ĐỘ CỦA NGƯỜI BỊ TẠM GIỮ, NGƯỜI BỊ TẠM GIAM",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "09fb5301-812d-4630-8f9a-9c8cac67a21c"
            ],
            [
              "hash"  =>   "3A3B6CFC-0ECA-4347-9C17-402BCA825B7C",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "37010000000000005000",
              "ten_chuong"  =>   "Chương V CHẾ ĐỘ ĐỐI VỚI NGƯỜI BỊ TẠM GIỮ, NGƯỜI BỊ TẠM GIAM LÀ NGƯỜI DƯỚI 18 TUỔI, PHỤ NỮ CÓ THAI HOẶC NUÔI CON DƯỚI 36 THÁNG TUỔI",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "09fb5301-812d-4630-8f9a-9c8cac67a21c"
            ],
            [
              "hash"  =>   "8A813C10-64ED-488C-9BC8-A33205906B67",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "37010000000000006000",
              "ten_chuong"  =>   "Chương VI CHẾ ĐỘ ĐỐI VỚI NGƯỜI BỊ KẾT ÁN TỬ HÌNH ĐANG BỊ TẠM GIAM",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "09fb5301-812d-4630-8f9a-9c8cac67a21c"
            ],
            [
              "hash"  =>   "8A3A002A-6F51-4E34-8CBE-84209C6FF9E0",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "37010000000000007000",
              "ten_chuong"  =>   "Chương VII BẢO ĐẢM ĐIỀU KIỆN QUẢN LÝ, THI HÀNH TẠM GIỮ, TẠM GIAM",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "09fb5301-812d-4630-8f9a-9c8cac67a21c"
            ],
            [
              "hash"  =>   "9FF36D60-21BF-4C15-8111-311573CD5CAB",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "37010000000000008000",
              "ten_chuong"  =>   "Chương VIII KIỂM SÁT QUẢN LÝ, THI HÀNH TẠM GIỮ, TẠM GIAM",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "09fb5301-812d-4630-8f9a-9c8cac67a21c"
            ],
            [
              "hash"  =>   "76ED1AA9-EDD0-4B7B-AB80-4106AD4D00EB",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "37010000000000009000",
              "ten_chuong"  =>   "Chương IX KHIẾU NẠI, TỐ CÁO VÀ GIẢI QUYẾT KHIẾU NẠI, TỐ CÁO TRONG QUẢN LÝ, THI HÀNH TẠM GIỮ, TẠM GIAM",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "09fb5301-812d-4630-8f9a-9c8cac67a21c"
            ],
            [
              "hash"  =>   "2D99BE7E-2551-473D-AF09-FC7C3D6B371C",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "37010000000000010000",
              "ten_chuong"  =>   "Chương X TRÁCH NHIỆM TRONG QUẢN LÝ, THI HÀNH TẠM GIỮ, TẠM GIAM",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "09fb5301-812d-4630-8f9a-9c8cac67a21c"
            ],
            [
              "hash"  =>   "9EF21362-DB24-40D8-ADEE-14916822F0A4",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "37010000000000011000",
              "ten_chuong"  =>   "Chương XI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "09fb5301-812d-4630-8f9a-9c8cac67a21c"
            ],
            [
              "hash"  =>   "41E0B4BE-F4CF-407B-A398-1E9FC6EB793D",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "37011000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "6d1742f8-bf8d-45f2-a18b-44fa107c360a"
            ],
            [
              "hash"  =>   "8AB034EF-26C5-4805-AD96-61B9358FBBD2",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "37011000000000002000",
              "ten_chuong"  =>   "Chương II TỔ CHỨC BỘ MÁY, NHIỆM VỤ, QUYỀN HẠN CỦA CƠ QUAN ĐIỀU TRA CỦA CÔNG AN NHÂN DÂN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "6d1742f8-bf8d-45f2-a18b-44fa107c360a"
            ],
            [
              "hash"  =>   "0C4F7072-7375-4971-A865-7E59E713160A",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "37011000000000003000",
              "ten_chuong"  =>   "Chương III TỔ CHỨC BỘ MÁY, NHIỆM VỤ, QUYỀN HẠN CỦA CƠ QUAN ĐIỀU TRA TRONG QUÂN ĐỘI NHÂN DÂN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "6d1742f8-bf8d-45f2-a18b-44fa107c360a"
            ],
            [
              "hash"  =>   "866D5CCF-66FF-4B08-AA86-487FC31A7130",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "37011000000000004000",
              "ten_chuong"  =>   "Chương IV TỔ CHỨC BỘ MÁY, NHIỆM VỤ, QUYỀN HẠN CỦA CƠ QUAN ĐIỀU TRA CỦA VIỆN KIỂM SÁT NHÂN DÂN TỐI CAO",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "6d1742f8-bf8d-45f2-a18b-44fa107c360a"
            ],
            [
              "hash"  =>   "1B33AFE5-2FF1-4E39-A856-C3C422A86DF9",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "37011000000000005000",
              "ten_chuong"  =>   "Chương V NHIỆM VỤ, QUYỀN HẠN CỦA CƠ QUAN ĐƯỢC GIAO NHIỆM VỤ TIẾN HÀNH MỘT SỐ HOẠT ĐỘNG ĐIỀU TRA",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "6d1742f8-bf8d-45f2-a18b-44fa107c360a"
            ],
            [
              "hash"  =>   "48A09B5C-D153-4E13-93BB-1860769732F6",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "37011000000000006000",
              "ten_chuong"  =>   "Chương VI QUAN HỆ PHÂN CÔNG VÀ PHỐI HỢP TRONG HOẠT ĐỘNG ĐIỀU TRA HÌNH SỰ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "6d1742f8-bf8d-45f2-a18b-44fa107c360a"
            ],
            [
              "hash"  =>   "4678AA44-6F67-49F1-88C6-D4B9DEBC5149",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "37011000000000007000",
              "ten_chuong"  =>   "Chương VII THỦ TRƯỞNG, PHÓ THỦ TRƯỞNG CƠ QUAN ĐIỀU TRA, ĐIỀU TRA VIÊN VÀ CÁN BỘ ĐIỀU TRA",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "6d1742f8-bf8d-45f2-a18b-44fa107c360a"
            ],
            [
              "hash"  =>   "B0648AC6-9AF8-45C0-B8EB-EC79D77D37B9",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "37011000000000008000",
              "ten_chuong"  =>   "Chương VIII BẢO ĐẢM ĐIỀU KIỆN CHO HOẠT ĐỘNG ĐIỀU TRA HÌNH SỰ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "6d1742f8-bf8d-45f2-a18b-44fa107c360a"
            ],
            [
              "hash"  =>   "022CE142-C349-4DA7-BEDE-3682CA3A9ECD",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "37011000000000009000",
              "ten_chuong"  =>   "Chương IX TRÁCH NHIỆM CỦA CHÍNH PHỦ, CÁC BỘ, NGÀNH VÀ ỦY BAN NHÂN DÂN TỈNH, THÀNH PHỐ TRỰC THUỘC TRUNG ƯƠNG TRONG CÔNG TÁC ĐIỀU TRA HÌNH SỰ",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "6d1742f8-bf8d-45f2-a18b-44fa107c360a"
            ],
            [
              "hash"  =>   "C90C7EDE-E5A6-4F62-B3B9-3AE73D434B29",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "37011000000000010000",
              "ten_chuong"  =>   "Chương X ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "6d1742f8-bf8d-45f2-a18b-44fa107c360a"
            ],
            [
              "hash"  =>   "0C715157-5E56-4FE9-970D-680864601E44",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "37012000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "1a57cf9e-7470-4872-ab8e-19658d465dc5"
            ],
            [
              "hash"  =>   "F06956CE-A1F4-410B-834C-BC8CB13F3898",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "37012000000000002000",
              "ten_chuong"  =>   "Chương II HÒA GIẢI VIÊN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "1a57cf9e-7470-4872-ab8e-19658d465dc5"
            ],
            [
              "hash"  =>   "00262956-9A51-4092-B566-E97153812900",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "37012000000000003000",
              "ten_chuong"  =>   "Chương III TRÌNH TỰ, THỦ TỤC HÒA GIẢI, ĐỐI THOẠI VÀ CÔNG NHẬN KẾT QUẢ HÒA GIẢI, ĐỐI THOẠI TẠI TÒA ÁN",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "1a57cf9e-7470-4872-ab8e-19658d465dc5"
            ],
            [
              "hash"  =>   "B6796A39-8B96-4B0B-8492-BCAD2AF8D6C0",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "37012000000000004000",
              "ten_chuong"  =>   "Chương IV ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "cef09501-9f71-4c9a-aa35-238ea8c79f76",
              "hash_de_muc"  =>   "1a57cf9e-7470-4872-ab8e-19658d465dc5"
            ],
            [
              "hash"  =>   "EB83B56F-3C4E-401C-8DBC-305AAA2BA444",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "38001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "48d084d9-d3f1-4c13-a898-dde6840fe0ff",
              "hash_de_muc"  =>   "4b6f90cb-015c-4cdd-9c87-b8ecc0470fdb"
            ],
            [
              "hash"  =>   "1660776B-AB5E-428B-A8F4-5948F7E5ACB8",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "38001000000000002000",
              "ten_chuong"  =>   "Chương II QUYỀN TỰ DO TÍN NGƯỠNG, TÔN GIÁO",
              "hash_chu_de"  =>   "48d084d9-d3f1-4c13-a898-dde6840fe0ff",
              "hash_de_muc"  =>   "4b6f90cb-015c-4cdd-9c87-b8ecc0470fdb"
            ],
            [
              "hash"  =>   "4CD0C131-1331-4B86-902C-80BF9AA75AF7",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "38001000000000003000",
              "ten_chuong"  =>   "Chương III HOẠT ĐỘNG TÍN NGƯỠNG",
              "hash_chu_de"  =>   "48d084d9-d3f1-4c13-a898-dde6840fe0ff",
              "hash_de_muc"  =>   "4b6f90cb-015c-4cdd-9c87-b8ecc0470fdb"
            ],
            [
              "hash"  =>   "1DB6ABDD-3F38-464B-9A40-155A7D55BA3A",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "38001000000000004000",
              "ten_chuong"  =>   "Chương IV ĐĂNG KÝ SINH HOẠT TÔN GIÁO TẬP TRUNG, ĐĂNG KÝ HOẠT ĐỘNG TÔN GIÁO",
              "hash_chu_de"  =>   "48d084d9-d3f1-4c13-a898-dde6840fe0ff",
              "hash_de_muc"  =>   "4b6f90cb-015c-4cdd-9c87-b8ecc0470fdb"
            ],
            [
              "hash"  =>   "DD06F82A-4374-4C6F-81F4-4565BC24A7E8",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "38001000000000005000",
              "ten_chuong"  =>   "Chương V TỔ CHỨC TÔN GIÁO",
              "hash_chu_de"  =>   "48d084d9-d3f1-4c13-a898-dde6840fe0ff",
              "hash_de_muc"  =>   "4b6f90cb-015c-4cdd-9c87-b8ecc0470fdb"
            ],
            [
              "hash"  =>   "1B953D64-58F2-4995-BAA9-A888F606E8D7",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "38001000000000006000",
              "ten_chuong"  =>   "Chương VI HOẠT ĐỘNG TÔN GIÁO; HOẠT ĐỘNG XUẤT BẢN, GIÁO DỤC, Y TẾ, BẢO TRỢ XÃ HỘI, TỪ THIỆN, NHÂN ĐẠO CỦA TỔ CHỨC TÔN GIÁO",
              "hash_chu_de"  =>   "48d084d9-d3f1-4c13-a898-dde6840fe0ff",
              "hash_de_muc"  =>   "4b6f90cb-015c-4cdd-9c87-b8ecc0470fdb"
            ],
            [
              "hash"  =>   "C2F70E1F-376C-4490-9B17-189205ECA276",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "38001000000000007000",
              "ten_chuong"  =>   "Chương VII TÀI SẢN CỦA CƠ SỞ TÍN NGƯỠNG, TỔ CHỨC TÔN GIÁO",
              "hash_chu_de"  =>   "48d084d9-d3f1-4c13-a898-dde6840fe0ff",
              "hash_de_muc"  =>   "4b6f90cb-015c-4cdd-9c87-b8ecc0470fdb"
            ],
            [
              "hash"  =>   "1C437817-4787-417B-84F5-81185479CB87",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "38001000000000008000",
              "ten_chuong"  =>   "Chương VIII QUẢN LÝ NHÀ NƯỚC VÀ XỬ LÝ VI PHẠM PHÁP LUẬT TRONG LĨNH VỰC TÍN NGƯỠNG, TÔN GIÁO",
              "hash_chu_de"  =>   "48d084d9-d3f1-4c13-a898-dde6840fe0ff",
              "hash_de_muc"  =>   "4b6f90cb-015c-4cdd-9c87-b8ecc0470fdb"
            ],
            [
              "hash"  =>   "6D21AD48-65A8-47A6-8EB6-3482D663E38A",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "38001000000000009000",
              "ten_chuong"  =>   "Chương IX ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "48d084d9-d3f1-4c13-a898-dde6840fe0ff",
              "hash_de_muc"  =>   "4b6f90cb-015c-4cdd-9c87-b8ecc0470fdb"
            ],
            [
              "hash"  =>   "C3B316C4-CDAF-479A-B7C5-E665CA2B0AB4",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "39002000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "e51fdb4d-9c73-44bc-9fae-10c4cde48953"
            ],
            [
              "hash"  =>   "AC7C7923-51AC-4F18-9218-C77937563F7D",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "39002000000000002000",
              "ten_chuong"  =>   "Chương II NHIỆM VỤ, QUYỀN HẠN VÀ TỔ CHỨC CỦA CÔNG AN XÃ",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "e51fdb4d-9c73-44bc-9fae-10c4cde48953"
            ],
            [
              "hash"  =>   "68EE302C-10C7-4B54-8EC1-2FAC98D1DB25",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "39002000000000003000",
              "ten_chuong"  =>   "Chương III BẢO ĐẢM HOẠT ĐỘNG VÀ CHẾ ĐỘ, CHÍNH SÁCH ĐỐI VỚI CÔNG AN XÃ",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "e51fdb4d-9c73-44bc-9fae-10c4cde48953"
            ],
            [
              "hash"  =>   "3FF99139-0031-458E-90D5-41CAE010910D",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "39002000000000004000",
              "ten_chuong"  =>   "Chương IV TRÁCH NHIỆM QUẢN LÝ NHÀ NƯỚC VỀ CÔNG AN XÃ",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "e51fdb4d-9c73-44bc-9fae-10c4cde48953"
            ],
            [
              "hash"  =>   "F5D79AE2-F658-4640-BB25-9A58BA9554BF",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "39002000000000006000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "e51fdb4d-9c73-44bc-9fae-10c4cde48953"
            ],
            [
              "hash"  =>   "22D27955-954D-4FED-85F8-E365B8BAA921",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "39003000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "6a501e4a-ba3f-40e2-902f-af4a52b14bb4"
            ],
            [
              "hash"  =>   "43E336AF-9820-43B0-B4C4-9C19C0E8F563",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "39003000000000002000",
              "ten_chuong"  =>   "Chương II QUYỀN, TRÁCH NHIỆM CỦA CÔNG DÂN VỀ CƯ TRÚ",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "6a501e4a-ba3f-40e2-902f-af4a52b14bb4"
            ],
            [
              "hash"  =>   "8B3212E7-6119-40C7-B4C6-229BE744C2CB",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "39003000000000003000",
              "ten_chuong"  =>   "Chương III ĐĂNG KÝ THƯỜNG TRÚ",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "6a501e4a-ba3f-40e2-902f-af4a52b14bb4"
            ],
            [
              "hash"  =>   "3A14D0B4-5077-45C0-80D1-30E7F5D869CA",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "39003000000000004000",
              "ten_chuong"  =>   "Chương IV ĐĂNG KÝ TẠM TRÚ, THÔNG BÁO LƯU TRÚ, KHAI BÁO TẠM VẮNG",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "6a501e4a-ba3f-40e2-902f-af4a52b14bb4"
            ],
            [
              "hash"  =>   "534B4C7F-FA39-489C-AD28-9AE3C88510A4",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "39003000000000005000",
              "ten_chuong"  =>   "Chương V TRÁCH NHIỆM QUẢN LÝ CƯ TRÚ",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "6a501e4a-ba3f-40e2-902f-af4a52b14bb4"
            ],
            [
              "hash"  =>   "DAD35E5C-58F8-42BC-A115-918BAD00692B",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "39003000000000005500",
              "ten_chuong"  =>   "Chương VI BIỂU MẪU SỬ DỤNG TRONG ĐĂNG KÝ, QUẢN LÝ CƯ TRÚ",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "6a501e4a-ba3f-40e2-902f-af4a52b14bb4"
            ],
            [
              "hash"  =>   "D421A1F5-469D-4297-BC53-5C668BBAD814",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "39003000000000006000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "6a501e4a-ba3f-40e2-902f-af4a52b14bb4"
            ],
            [
              "hash"  =>   "32B7555E-595C-4BFC-8666-1244F2C06950",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "39004000000000001000",
              "ten_chuong"  =>   "Chương I QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "4920f114-9be7-403d-8de8-4d9340680d4e"
            ],
            [
              "hash"  =>   "6B038503-9005-4286-BFE8-C00FD10DE3C6",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "39004000000000002000",
              "ten_chuong"  =>   "Chương II ĐIỀU KIỆN VỀ AN NINH, TRẬT TỰ",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "4920f114-9be7-403d-8de8-4d9340680d4e"
            ],
            [
              "hash"  =>   "CAE0B03F-F308-4084-8E00-45FDCCB4FCF7",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "39004000000000003000",
              "ten_chuong"  =>   "Chương III GIẤY CHỨNG NHẬN ĐỦ ĐIỀU KIỆN VỀ AN NINH, TRẬT TỰ",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "4920f114-9be7-403d-8de8-4d9340680d4e"
            ],
            [
              "hash"  =>   "090C3775-5CDF-469A-B7B9-63AC6CE8E246",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "39004000000000004000",
              "ten_chuong"  =>   "Chương IV HỒ SƠ, TRÌNH TỰ, THỦ TỤC, THẨM QUYỀN CẤP GIẤY CHỨNG NHẬN ĐỦ ĐIỀU KIỆN VỀ AN NINH, TRẬT TỰ VÀ CHỨNG CHỈ NGHIỆP VỤ BẢO VỆ",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "4920f114-9be7-403d-8de8-4d9340680d4e"
            ],
            [
              "hash"  =>   "36A1A5AE-64B1-4A12-A798-E3E2D42EB621",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "39004000000000005000",
              "ten_chuong"  =>   "Chương V TRÁCH NHIỆM CỦA CƠ SỞ KINH DOANH",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "4920f114-9be7-403d-8de8-4d9340680d4e"
            ],
            [
              "hash"  =>   "84954864-5D88-4220-83B1-2688CFB2F2D0",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "39004000000000006000",
              "ten_chuong"  =>   "Chương VI TRÁCH NHIỆM CỦA CÁC BỘ, CƠ QUAN NGANG BỘ, CƠ QUAN THUỘC CHÍNH PHỦ, ỦY BAN NHÂN DÂN CẤP TỈNH VÀ CÔNG TÁC KIỂM TRA, THANH TRA",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "4920f114-9be7-403d-8de8-4d9340680d4e"
            ],
            [
              "hash"  =>   "C3A7D6E0-A386-4061-9552-C9B8D53EFC1B",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "39004000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "4920f114-9be7-403d-8de8-4d9340680d4e"
            ],
            [
              "hash"  =>   "E7BC477D-E645-4974-A632-E913D1125FA3",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "39005000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "cf43428f-7076-42b8-b0ef-678f73203eef"
            ],
            [
              "hash"  =>   "E3463981-0EE2-440C-8844-529451B41A5C",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "39005000000000002000",
              "ten_chuong"  =>   "Chương II NHỮNG QUY ĐỊNH CỤ THỂ",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "cf43428f-7076-42b8-b0ef-678f73203eef"
            ],
            [
              "hash"  =>   "FAF20128-272B-4AC4-BBD5-5A0ADF4E41F4",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "39005000000000003000",
              "ten_chuong"  =>   "Chương III KHEN THƯỞNG VÀ XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "cf43428f-7076-42b8-b0ef-678f73203eef"
            ],
            [
              "hash"  =>   "FBDCC542-538A-41C1-B6DC-CAF16C22EEFD",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "39005000000000004000",
              "ten_chuong"  =>   "Chương IV ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "cf43428f-7076-42b8-b0ef-678f73203eef"
            ],
            [
              "hash"  =>   "86FFA166-8257-43E6-B06A-081D36F95E6C",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "39006000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "a69013cd-2792-4838-8fac-76a54ec31022"
            ],
            [
              "hash"  =>   "49DB1F45-8C48-4371-9A6D-B30DBAA7D8C1",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "39006000000000002000",
              "ten_chuong"  =>   "Chương II PHÒNG CHÁY",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "a69013cd-2792-4838-8fac-76a54ec31022"
            ],
            [
              "hash"  =>   "078ADE97-CE8F-4356-BA87-25CC51AA0153",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "39006000000000003000",
              "ten_chuong"  =>   "Chương III CHỮA CHÁY",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "a69013cd-2792-4838-8fac-76a54ec31022"
            ],
            [
              "hash"  =>   "93362740-CC2D-42A2-9D8E-5EB27CFF8E40",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "39006000000000004000",
              "ten_chuong"  =>   "Chương IV TỔ CHỨC LỰC LƯỢNG PHÒNG CHÁY VÀ CHỮA CHÁY",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "a69013cd-2792-4838-8fac-76a54ec31022"
            ],
            [
              "hash"  =>   "256FEF79-349E-426D-B506-DFBFE44BA148",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "39006000000000005000",
              "ten_chuong"  =>   "Chương V PHƯƠNG TIỆN PHÒNG CHÁY VÀ CHỮA CHÁY",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "a69013cd-2792-4838-8fac-76a54ec31022"
            ],
            [
              "hash"  =>   "FEFE42D7-15FB-446E-9C04-015D53722540",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "39006000000000006000",
              "ten_chuong"  =>   "Chương VI ĐẦU TƯ CHO HOẠT ĐỘNG PHÒNG CHÁY VÀ CHỮA CHÁY",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "a69013cd-2792-4838-8fac-76a54ec31022"
            ],
            [
              "hash"  =>   "03D0978C-0803-468D-9E21-B0C669C8DC41",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "39006000000000007000",
              "ten_chuong"  =>   "Chương VII QUẢN LÝ NHÀ NƯỚC VỀ PHÒNG CHÁY VÀ CHỮA CHÁY",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "a69013cd-2792-4838-8fac-76a54ec31022"
            ],
            [
              "hash"  =>   "E47FD08D-2FBE-4280-AA49-D5AA4CD55FD9",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "39006000000000008000",
              "ten_chuong"  =>   "Chương VIII KHEN THƯỞNG VÀ XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "a69013cd-2792-4838-8fac-76a54ec31022"
            ],
            [
              "hash"  =>   "D97586B5-183B-41CF-A481-A1BC42B54185",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "39006000000000008500",
              "ten_chuong"  =>   "Chương IX CÔNG TÁC CỨU NẠN, CỨU HỘ CỦA LỰC LƯỢNG PHÒNG CHÁY VÀ CHỮA CHÁY",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "a69013cd-2792-4838-8fac-76a54ec31022"
            ],
            [
              "hash"  =>   "CA519358-4A34-4C82-B916-386A1D53A56F",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "39006000000000009000",
              "ten_chuong"  =>   "Chương X ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "a69013cd-2792-4838-8fac-76a54ec31022"
            ],
            [
              "hash"  =>   "D48C1E81-C804-4E44-8247-477985E7631C",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "39007000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "05a9e8b3-09c8-4c0c-a99e-117a864efe3d"
            ],
            [
              "hash"  =>   "2CD9CA01-E0C8-4C91-87E5-B0D51D635FE9",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "39007000000000002000",
              "ten_chuong"  =>   "Chương II TRÁCH NHIỆM PHÒNG, CHỐNG MA TÚY",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "05a9e8b3-09c8-4c0c-a99e-117a864efe3d"
            ],
            [
              "hash"  =>   "7BD25D0F-E57E-4EFE-ABCF-DA7038061FF5",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "39007000000000003000",
              "ten_chuong"  =>   "Chương III KIỂM SOÁT CÁC HOẠT ĐỘNG HỢP PHÁP LIÊN QUAN ĐẾN MA TÚY",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "05a9e8b3-09c8-4c0c-a99e-117a864efe3d"
            ],
            [
              "hash"  =>   "539ECEF7-2214-49DF-91FA-952C39E92746",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "39007000000000004000",
              "ten_chuong"  =>   "Chương IV QUẢN LÝ NGƯỜI SỬ DỤNG TRÁI PHÉP CHẤT MA TÚY",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "05a9e8b3-09c8-4c0c-a99e-117a864efe3d"
            ],
            [
              "hash"  =>   "0B3CF6E6-14EF-4CC3-A86E-0631BD8E1889",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "39007000000000005000",
              "ten_chuong"  =>   "Chương V CAI NGHIỆN MA TÚY",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "05a9e8b3-09c8-4c0c-a99e-117a864efe3d"
            ],
            [
              "hash"  =>   "50ABE5D8-B3A9-4677-9492-ABEE96ECD01B",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "39007000000000006000",
              "ten_chuong"  =>   "Chương VI QUẢN LÝ NHÀ NƯỚC VỀ PHÒNG, CHỐNG MA TÚY",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "05a9e8b3-09c8-4c0c-a99e-117a864efe3d"
            ],
            [
              "hash"  =>   "ED6F0697-CE1E-421C-A773-5AFB5B45E06B",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "39007000000000007000",
              "ten_chuong"  =>   "Chương VII HỢP TÁC QUỐC TẾ VỀ PHÒNG, CHỐNG MA TÚY",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "05a9e8b3-09c8-4c0c-a99e-117a864efe3d"
            ],
            [
              "hash"  =>   "519245EF-E4B2-4F2D-98D2-36D5222DB794",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "39007000000000008000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "05a9e8b3-09c8-4c0c-a99e-117a864efe3d"
            ],
            [
              "hash"  =>   "A5D73226-43FB-4B68-AD2C-2C385918F73B",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "39008000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "20c13bd9-9dee-45c7-a6f5-11d531e74da8"
            ],
            [
              "hash"  =>   "5BB285BE-BD52-4905-B68C-AF127460A7E4",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "39008000000000002000",
              "ten_chuong"  =>   "Chương II PHÒNG NGỪA MUA BÁN NGƯỜI",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "20c13bd9-9dee-45c7-a6f5-11d531e74da8"
            ],
            [
              "hash"  =>   "88994471-0177-4D69-9CC0-1DD6898B6C2F",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "39008000000000003000",
              "ten_chuong"  =>   "Chương III PHÁT HIỆN, XỬ LÝ HÀNH VI VI PHẠM PHÁP LUẬT VỀ PHÒNG, CHỐNG MUA BÁN NGƯỜI",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "20c13bd9-9dee-45c7-a6f5-11d531e74da8"
            ],
            [
              "hash"  =>   "0A345D3F-B964-4B9B-93B7-F16303446669",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "39008000000000004000",
              "ten_chuong"  =>   "Chương IV TIẾP NHẬN, XÁC MINH VÀ BẢO VỆ NẠN NHÂN",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "20c13bd9-9dee-45c7-a6f5-11d531e74da8"
            ],
            [
              "hash"  =>   "FDD885E2-9845-462E-B99C-3539C686EFB5",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "39008000000000005000",
              "ten_chuong"  =>   "Chương V HỖ TRỢ NẠN NHÂN",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "20c13bd9-9dee-45c7-a6f5-11d531e74da8"
            ],
            [
              "hash"  =>   "C2B87B67-3F57-4C19-BBAF-150CE35D7272",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "39008000000000006000",
              "ten_chuong"  =>   "Chương VI TRÁCH NHIỆM CỦA CHÍNH PHỦ, CÁC BỘ, NGÀNH VÀ ĐỊA PHƯƠNG TRONG PHÒNG, CHỐNG MUA BÁN NGƯỜI",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "20c13bd9-9dee-45c7-a6f5-11d531e74da8"
            ],
            [
              "hash"  =>   "0327AD99-B915-4D0A-B8C7-FAA056704951",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "39008000000000007000",
              "ten_chuong"  =>   "Chương VII HỢP TÁC QUỐC TẾ TRONG PHÒNG, CHỐNG MUA BÁN NGƯỜI",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "20c13bd9-9dee-45c7-a6f5-11d531e74da8"
            ],
            [
              "hash"  =>   "AC2A48DC-F859-4AC5-B76E-BBC6B0ECC31D",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "39008000000000008000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "20c13bd9-9dee-45c7-a6f5-11d531e74da8"
            ],
            [
              "hash"  =>   "5B1DAAD0-C165-4B9C-B9BA-9F4B94B032EB",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "39009000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "9fcc00f2-817c-4857-9347-1a65efa9c0cd"
            ],
            [
              "hash"  =>   "1177E4EC-298B-43CE-9DD1-F1BE628911CE",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "39009000000000002000",
              "ten_chuong"  =>   "Chương II NHIỆM VỤ, QUYỀN HẠN VÀ TỔ CHỨC CỦA CẢNH SÁT MÔI TRƯỜNG",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "9fcc00f2-817c-4857-9347-1a65efa9c0cd"
            ],
            [
              "hash"  =>   "8B6DA7C2-87C9-44B3-B2F6-2D455646A224",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "39009000000000003000",
              "ten_chuong"  =>   "Chương III BẢO ĐẢM HOẠT ĐỘNG VÀ CHẾ ĐỘ, CHÍNH SÁCH ĐỐI VỚI CẢNH SÁT MÔI TRƯỜNG",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "9fcc00f2-817c-4857-9347-1a65efa9c0cd"
            ],
            [
              "hash"  =>   "FD5BFB4E-CEED-4492-B3DF-2700F1FC04BE",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "39009000000000004000",
              "ten_chuong"  =>   "Chương IV TRÁCH NHIỆM CỦA CƠ QUAN, TỔ CHỨC ĐỐI VỚI CẢNH SÁT MÔI TRƯỜNG",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "9fcc00f2-817c-4857-9347-1a65efa9c0cd"
            ],
            [
              "hash"  =>   "7BC481C4-DA0D-4A67-AC13-86C27C5C0791",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "39009000000000005000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "9fcc00f2-817c-4857-9347-1a65efa9c0cd"
            ],
            [
              "hash"  =>   "93DD7625-048F-4D85-9607-234A285D60A1",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "39010000000000001000",
              "ten_chuong"  =>   "Chương I QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "cf97fc4b-c101-4750-a556-063f0d29e520"
            ],
            [
              "hash"  =>   "09F6CD27-4E6F-4BBE-AC3C-50B5B1A2FECE",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "39010000000000002000",
              "ten_chuong"  =>   "Chương II QUẢN LÝ, SỬ DỤNG PHÁO",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "cf97fc4b-c101-4750-a556-063f0d29e520"
            ],
            [
              "hash"  =>   "A4A8B123-E341-4F09-BA5C-EE34A3453BFF",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "39010000000000003000",
              "ten_chuong"  =>   "Chương III TRÁCH NHIỆM CỦA CÁC BỘ, NGÀNH VÀ ỦY BAN NHÂN DÂN TỈNH, THÀNH PHỐ TRỰC THUỘC TRUNG ƯƠNG",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "cf97fc4b-c101-4750-a556-063f0d29e520"
            ],
            [
              "hash"  =>   "BF320411-77E5-46DA-AEA4-B73117E53296",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "39010000000000004000",
              "ten_chuong"  =>   "Chương IV ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "cf97fc4b-c101-4750-a556-063f0d29e520"
            ],
            [
              "hash"  =>   "14AC6496-0923-40C8-90DA-78666225789F",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "39011000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "e3dbc67f-7664-4196-b4b9-a785a0075b2a"
            ],
            [
              "hash"  =>   "EBEEEC20-9412-45E1-9DA6-747B0CB8CE65",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "39011000000000002000",
              "ten_chuong"  =>   "Chương II QUẢN LÝ, SỬ DỤNG VŨ KHÍ",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "e3dbc67f-7664-4196-b4b9-a785a0075b2a"
            ],
            [
              "hash"  =>   "22433C2E-B116-49CD-86CF-A97583912AFC",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "39011000000000003000",
              "ten_chuong"  =>   "Chương III QUẢN LÝ, SỬ DỤNG VẬT LIỆU NỔ",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "e3dbc67f-7664-4196-b4b9-a785a0075b2a"
            ],
            [
              "hash"  =>   "3E7BA218-6C07-4ADA-B79F-6595ED0853E7",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "39011000000000004000",
              "ten_chuong"  =>   "Chương IV QUẢN LÝ, SỬ DỤNG TIỀN CHẤT THUỐC NỔ",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "e3dbc67f-7664-4196-b4b9-a785a0075b2a"
            ],
            [
              "hash"  =>   "D72698DF-927A-43EA-A76C-EB693534051D",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "39011000000000005000",
              "ten_chuong"  =>   "Chương V QUẢN LÝ, SỬ DỤNG CÔNG CỤ HỖ TRỢ",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "e3dbc67f-7664-4196-b4b9-a785a0075b2a"
            ],
            [
              "hash"  =>   "FCB00A52-D8AB-48F4-9E4B-1A889AB4259D",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "39011000000000006000",
              "ten_chuong"  =>   "Chương VI TIẾP NHẬN, THU GOM, PHÂN LOẠI, BẢO QUẢN, THANH LÝ,TIÊU HỦY VŨ KHÍ, VẬT LIỆU NỔ, CÔNG CỤ HỖ TRỢ",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "e3dbc67f-7664-4196-b4b9-a785a0075b2a"
            ],
            [
              "hash"  =>   "1D3EFF90-1D18-4934-99E4-32D22A9B0C13",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "39011000000000007000",
              "ten_chuong"  =>   "Chương VII QUẢN LÝ NHÀ NƯỚC VỀ VŨ KHÍ, VẬT LIỆU NỔ, TIỀN CHẤT THUỐC NỔ, CÔNG CỤ HỖ TRỢ",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "e3dbc67f-7664-4196-b4b9-a785a0075b2a"
            ],
            [
              "hash"  =>   "BA9BFEA0-A1D9-447F-A944-FC684D3930B0",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "39011000000000008000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "e3dbc67f-7664-4196-b4b9-a785a0075b2a"
            ],
            [
              "hash"  =>   "25F0472C-3A22-4B57-A60B-D2568C4BE62F",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "39012000000000001000",
              "ten_chuong"  =>   "Chương I QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "f459bbbc-e15c-416d-b9f4-086464028e0f"
            ],
            [
              "hash"  =>   "23032BF7-6DE7-4688-9448-54CEB8CAEA9F",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "39012000000000002000",
              "ten_chuong"  =>   "Chương II QUY ĐỊNH CỤ THỂ",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "f459bbbc-e15c-416d-b9f4-086464028e0f"
            ],
            [
              "hash"  =>   "1B295201-2E36-4491-B84E-EC7F61B99184",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "39012000000000003000",
              "ten_chuong"  =>   "Chương III TRÁCH NHIỆM CỦA CƠ QUAN, TỔ CHỨC, CÁ NHÂN TRONG VIỆC QUẢN LÝ VÀ SỬ DỤNG CON DẤU",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "f459bbbc-e15c-416d-b9f4-086464028e0f"
            ],
            [
              "hash"  =>   "8726ABAF-6EBB-4496-87FF-FB724CD591B6",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "39012000000000004000",
              "ten_chuong"  =>   "Chương IV ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "f459bbbc-e15c-416d-b9f4-086464028e0f"
            ],
            [
              "hash"  =>   "76B220BC-1B73-4644-B055-8F6C50587A6B",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "3901300000000000200000010000000000000000",
              "ten_chuong"  =>   "Chương I CÁC HÌNH THỨC XỬ PHẠT VÀ BIỆN PHÁP KHẮC PHỤC HẬU QUẢ",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "9d9a7001-0799-4bd8-8c31-964f9a7b9603"
            ],
            [
              "hash"  =>   "A375A4FC-F0B4-4C92-B6D3-FC5885F52CB2",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "3901300000000000200000020000000000000000",
              "ten_chuong"  =>   "Chương II THẨM QUYỀN XỬ PHẠT VI PHẠM HÀNH CHÍNH VÀ ÁP DỤNG BIỆN PHÁP KHẮC PHỤC HẬU QUẢ",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "9d9a7001-0799-4bd8-8c31-964f9a7b9603"
            ],
            [
              "hash"  =>   "6AABF618-B608-4EBF-9146-6C15FB82A64B",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "3901300000000000200000030000000000000000",
              "ten_chuong"  =>   "Chương III THỦ TỤC XỬ PHẠT, THI HÀNH QUYẾT ĐỊNH XỬ PHẠT VÀ CƯỠNG CHẾ THI HÀNH QUYẾT ĐỊNH XỬ PHẠT",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "9d9a7001-0799-4bd8-8c31-964f9a7b9603"
            ],
            [
              "hash"  =>   "6E11B5BB-3121-40D2-A396-7362BE98BC14",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "3901300000000000200000040000000000000000",
              "ten_chuong"  =>   "Chương IV QUY ĐỊNH XỬ PHẠT VI PHẠM HÀNH CHÍNH TRONG CÁC LĨNH VỰC",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "9d9a7001-0799-4bd8-8c31-964f9a7b9603"
            ],
            [
              "hash"  =>   "39D59620-01D2-4CDB-B016-46C25A4DE625",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "3901300000000000300000010000000000000000",
              "ten_chuong"  =>   "Chương I CÁC BIỆN PHÁP XỬ LÝ HÀNH CHÍNH",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "9d9a7001-0799-4bd8-8c31-964f9a7b9603"
            ],
            [
              "hash"  =>   "1540918E-7D25-4E90-914B-26DDDC07CC1A",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "3901300000000000300000020000000000000000",
              "ten_chuong"  =>   "Chương II THỦ TỤC LẬP HỒ SƠ ĐỀ NGHỊ ÁP DỤNG  CÁC BIỆN PHÁP XỬ LÝ HÀNH CHÍNH",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "9d9a7001-0799-4bd8-8c31-964f9a7b9603"
            ],
            [
              "hash"  =>   "63C11D4F-ACC8-4150-84D9-BE722A44702A",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "3901300000000000300000030000000000000000",
              "ten_chuong"  =>   "Chương III THẨM QUYỀN, THỦ TỤC XEM XÉT, QUYẾT ĐỊNH ÁP DỤNG BIỆN PHÁP XỬ LÝ HÀNH CHÍNH",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "9d9a7001-0799-4bd8-8c31-964f9a7b9603"
            ],
            [
              "hash"  =>   "7F1E80CC-882A-42C1-8730-C5A2D1461546",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "3901300000000000300000040000000000000000",
              "ten_chuong"  =>   "Chương IV THI HÀNH QUYẾT ĐỊNH ÁP DỤNG BIỆN PHÁP XỬ LÝ HÀNH CHÍNH",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "9d9a7001-0799-4bd8-8c31-964f9a7b9603"
            ],
            [
              "hash"  =>   "1925140E-FB6A-4BE2-B613-F0B84E40B23C",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "3901300000000000300000050000000000000000",
              "ten_chuong"  =>   "Chương V CÁC QUY ĐỊNH KHÁC LIÊN QUAN ĐẾN VIỆC ÁP DỤNG CÁC BIỆN PHÁP XỬ LÝ HÀNH CHÍNH",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "9d9a7001-0799-4bd8-8c31-964f9a7b9603"
            ],
            [
              "hash"  =>   "08CD44D2-7CE3-4B23-8B65-2252EAEDAA64",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "3901300000000000400000010000000000000000",
              "ten_chuong"  =>   "Chương I QUY ĐỊNH CHUNG VỀ CÁC BIỆN PHÁP NGĂN CHẶN VÀ BẢO ĐẢM XỬ LÝ VI PHẠM HÀNH CHÍNH",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "9d9a7001-0799-4bd8-8c31-964f9a7b9603"
            ],
            [
              "hash"  =>   "A3FD345F-9267-4051-96F3-02CA69FF36A6",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "3901300000000000400000020000000000000000",
              "ten_chuong"  =>   "Chương II THẨM QUYỀN, THỦ TỤC ÁP DỤNG CÁC BIỆN PHÁP NGĂN CHẶN VÀ BẢO ĐẢM XỬ LÝ VI PHẠM HÀNH CHÍNH",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "9d9a7001-0799-4bd8-8c31-964f9a7b9603"
            ],
            [
              "hash"  =>   "21FCDA93-1940-48C4-9709-397A07D05382",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "3901300000000000500000010000000000000000",
              "ten_chuong"  =>   "Chương I QUY ĐỊNH CHUNG VỀ XỬ LÝ VI PHẠM HÀNH CHÍNH  ĐỐI VỚI NGƯỜI CHƯA THÀNH NIÊN",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "9d9a7001-0799-4bd8-8c31-964f9a7b9603"
            ],
            [
              "hash"  =>   "0CC63B22-754B-417B-BC9A-C7EDAAF492B1",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "3901300000000000500000020000000000000000",
              "ten_chuong"  =>   "Chương II CÁC BIỆN PHÁP THAY THẾ XỬ LÝ VI PHẠM HÀNH CHÍNH ĐỐI VỚI NGƯỜI CHƯA THÀNH NIÊN",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "9d9a7001-0799-4bd8-8c31-964f9a7b9603"
            ],
            [
              "hash"  =>   "EAE1CC2F-A961-422E-9C9F-C88B25FCB1CF",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "39014000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "51ae5342-6f32-4eaf-9b8b-01add97cbee4"
            ],
            [
              "hash"  =>   "7117B1A8-921E-4D64-A4B8-EC43BCAE2255",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "39014000000000002000",
              "ten_chuong"  =>   "Chương II NHIỆM VỤ, QUYỀN HẠN, TỔ CHỨC VÀ HOẠT ĐỘNG CỦA CẢNH SÁT CƠ ĐỘNG",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "51ae5342-6f32-4eaf-9b8b-01add97cbee4"
            ],
            [
              "hash"  =>   "086A4EA5-2B52-4AEC-9F35-1E3F0BC5999F",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "39014000000000003000",
              "ten_chuong"  =>   "Chương III BẢO ĐẢM HOẠT ĐỘNG VÀ CHẾ ĐỘ, CHÍNH SÁCHĐỐI VỚI CẢNH SÁT CƠ ĐỘNG",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "51ae5342-6f32-4eaf-9b8b-01add97cbee4"
            ],
            [
              "hash"  =>   "4B8C2BA5-DF49-4BC2-B20B-4B8605F390E3",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "39014000000000004000",
              "ten_chuong"  =>   "Chương IV QUẢN LÝ NHÀ NƯỚC VÀ TRÁCH NHIỆM CỦA CƠ QUAN, TỔ CHỨC, CÁ NHÂN ĐỐI VỚI CẢNH SÁT CƠ ĐỘNG",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "51ae5342-6f32-4eaf-9b8b-01add97cbee4"
            ],
            [
              "hash"  =>   "3043322A-429F-41A7-81CD-4ADE64E8F4E5",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "39014000000000005000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "51ae5342-6f32-4eaf-9b8b-01add97cbee4"
            ],
            [
              "hash"  =>   "D76C00F0-37C5-4F42-87E9-FE45E6C91503",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "39015000000000001000",
              "ten_chuong"  =>   "Chương I QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "0aeb67ae-9e3e-42c0-830e-33cc254cf384"
            ],
            [
              "hash"  =>   "D848566B-D153-4E43-8134-B446064F3878",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "39015000000000002000",
              "ten_chuong"  =>   "Chương II CƠ SỞ DỮ LIỆU QUỐC GIA VỀ DÂN CƯ, CƠ SỞ DỮ LIỆU CĂN CƯỚC CÔNG DÂN",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "0aeb67ae-9e3e-42c0-830e-33cc254cf384"
            ],
            [
              "hash"  =>   "A7DB12D0-3636-4BF5-A306-CDAAABCD49F7",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "39015000000000003000",
              "ten_chuong"  =>   "Chương III THẺ CĂN CƯỚC CÔNG DÂN VÀ QUẢN LÝ THẺ CĂN CƯỚC CÔNG DÂN",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "0aeb67ae-9e3e-42c0-830e-33cc254cf384"
            ],
            [
              "hash"  =>   "090CF390-F453-4E03-95B4-EC41EDC5989A",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "39015000000000004000",
              "ten_chuong"  =>   "Chương IV BẢO ĐẢM ĐIỀU KIỆN CHO HOẠT ĐỘNG QUẢN LÝ CĂN CƯỚC CÔNG DÂN, CƠ SỞ DỮ LIỆU QUỐC GIA VỀ DÂN CƯ VÀ CƠ SỞ DỮ LIỆU CĂN CƯỚC CÔNG DÂN",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "0aeb67ae-9e3e-42c0-830e-33cc254cf384"
            ],
            [
              "hash"  =>   "2D96874B-868B-4D3E-8748-0769329D6A39",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "39015000000000005000",
              "ten_chuong"  =>   "Chương V TRÁCH NHIỆM QUẢN LÝ CĂN CƯỚC CÔNG DÂN, CƠ SỞ DỮ LIỆU QUỐC GIA VỀ DÂN CƯ VÀ CƠ SỞ DỮ LIỆU CĂN CƯỚC CÔNG DÂN",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "0aeb67ae-9e3e-42c0-830e-33cc254cf384"
            ],
            [
              "hash"  =>   "1E5B266B-BFC0-4095-8EBB-2B73AB37726C",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "39015000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "965fd0b7-e8b0-434a-83c2-9f9b2b4fbcba",
              "hash_de_muc"  =>   "0aeb67ae-9e3e-42c0-830e-33cc254cf384"
            ],
            [
              "hash"  =>   "71044506-5690-4DB6-9A29-954B6D2D7D57",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "40001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "01684735-cbae-4b6f-9471-1010ab2f350a",
              "hash_de_muc"  =>   "e8e1515c-249d-4a9b-af30-ac0d8a3aac7d"
            ],
            [
              "hash"  =>   "A0C844D3-6B89-4766-A692-8C01424EED31",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "40001000000000002000",
              "ten_chuong"  =>   "Chương II TƯƠNG TRỢ TƯ PHÁP VỀ DÂN SỰ",
              "hash_chu_de"  =>   "01684735-cbae-4b6f-9471-1010ab2f350a",
              "hash_de_muc"  =>   "e8e1515c-249d-4a9b-af30-ac0d8a3aac7d"
            ],
            [
              "hash"  =>   "280E15B9-CFB2-480E-8C6A-B1D791CCADC6",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "40001000000000003000",
              "ten_chuong"  =>   "Chương III TƯƠNG TRỢ TƯ PHÁP VỀ HÌNH SỰ",
              "hash_chu_de"  =>   "01684735-cbae-4b6f-9471-1010ab2f350a",
              "hash_de_muc"  =>   "e8e1515c-249d-4a9b-af30-ac0d8a3aac7d"
            ],
            [
              "hash"  =>   "72A2E958-43DD-4BB6-A952-1901189EB4BA",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "40001000000000004000",
              "ten_chuong"  =>   "Chương IV DẪN ĐỘ",
              "hash_chu_de"  =>   "01684735-cbae-4b6f-9471-1010ab2f350a",
              "hash_de_muc"  =>   "e8e1515c-249d-4a9b-af30-ac0d8a3aac7d"
            ],
            [
              "hash"  =>   "F0801776-A526-41AF-961D-125EB5D50B37",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "40001000000000005000",
              "ten_chuong"  =>   "Chương V CHUYỂN GIAO NGƯỜI ĐANG CHẤP HÀNH HÌNH PHẠT TÙ",
              "hash_chu_de"  =>   "01684735-cbae-4b6f-9471-1010ab2f350a",
              "hash_de_muc"  =>   "e8e1515c-249d-4a9b-af30-ac0d8a3aac7d"
            ],
            [
              "hash"  =>   "E4E2211B-827B-4B80-B3CE-99187AA09E66",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "40001000000000006000",
              "ten_chuong"  =>   "Chương VI TRÁCH NHIỆM CỦA CÁC CƠ QUAN NHÀ NƯỚC TRONG HOẠT ĐỘNG TƯƠNG TRỢ TƯ PHÁP",
              "hash_chu_de"  =>   "01684735-cbae-4b6f-9471-1010ab2f350a",
              "hash_de_muc"  =>   "e8e1515c-249d-4a9b-af30-ac0d8a3aac7d"
            ],
            [
              "hash"  =>   "B16C32C9-3E22-4C1E-98D6-B3BB74C8BCBB",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "40001000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "01684735-cbae-4b6f-9471-1010ab2f350a",
              "hash_de_muc"  =>   "e8e1515c-249d-4a9b-af30-ac0d8a3aac7d"
            ],
            [
              "hash"  =>   "A8422DE1-F247-46C0-972A-AC670B44EF31",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "41001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "ed278a00-f167-476a-8719-bffc8cb3a4c8"
            ],
            [
              "hash"  =>   "F41131EB-DCC8-408C-8008-5E47FB84B668",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "41001000000000002000",
              "ten_chuong"  =>   "Chương II HOẠT ĐỘNG BIỂU DIỄN NGHỆ THUẬT",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "ed278a00-f167-476a-8719-bffc8cb3a4c8"
            ],
            [
              "hash"  =>   "B706AE76-D3E6-4C04-98F5-8D1FEEC80758",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "41001000000000003000",
              "ten_chuong"  =>   "Chương III LƯU HÀNH BẢN GHI ÂM, GHI HÌNH CÓ NỘI DUNG BIỂU DIỄN NGHỆ THUẬT",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "ed278a00-f167-476a-8719-bffc8cb3a4c8"
            ],
            [
              "hash"  =>   "3FFDFD60-CEFF-4F07-84A6-54BE75ABB9CF",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "41001000000000004000",
              "ten_chuong"  =>   "Chương IV TỔ CHỨC THỰC HIỆN",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "ed278a00-f167-476a-8719-bffc8cb3a4c8"
            ],
            [
              "hash"  =>   "0B564C11-FD5D-424B-9287-9874D304B008",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "41001000000000005000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "ed278a00-f167-476a-8719-bffc8cb3a4c8"
            ],
            [
              "hash"  =>   "A45B9749-5820-4244-83C9-1DE62A6C2DEF",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "41002000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "f79b4160-3a6b-4eb2-8854-ac95a79a0b81"
            ],
            [
              "hash"  =>   "9F541ABE-B45B-42AC-9603-C07FC925744A",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "41002000000000002000",
              "ten_chuong"  =>   "Chương II NHUẬN BÚT, THÙ LAO ĐỐI VỚI TÁC PHẨM ĐIỆN ẢNH",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "f79b4160-3a6b-4eb2-8854-ac95a79a0b81"
            ],
            [
              "hash"  =>   "78E45E36-D6FA-481D-A1C4-FCA4CC331084",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "41002000000000003000",
              "ten_chuong"  =>   "Chương III NHUẬN BÚT ĐỐI VỚI TÁC PHẨM MỸ THUẬT, NHIẾP ẢNH",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "f79b4160-3a6b-4eb2-8854-ac95a79a0b81"
            ],
            [
              "hash"  =>   "BA5AD8E6-7F08-4153-9F2C-74FE3C6DB7CE",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "41002000000000005000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "f79b4160-3a6b-4eb2-8854-ac95a79a0b81"
            ],
            [
              "hash"  =>   "3E0BA293-DD67-4FD9-91CB-F3D79FD3FA50",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "41004000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "02ffb112-0020-4201-a689-eb3c4b60d1a9"
            ],
            [
              "hash"  =>   "21E27EEF-5EBA-4397-AF77-2B72B9DFE88C",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "41004000000000002000",
              "ten_chuong"  =>   "Chương II QUYỀN VÀ NGHĨA VỤ CỦA TỔ CHỨC,CÁ NHÂN ĐỐI VỚI DI SẢN VĂN HÓA",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "02ffb112-0020-4201-a689-eb3c4b60d1a9"
            ],
            [
              "hash"  =>   "4097609D-9BA8-4D31-9C14-061853097957",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "41004000000000003000",
              "ten_chuong"  =>   "Chương III BẢO VỆ VÀ PHÁT HUY GIÁ TRỊ VĂN HÓA PHI VẬT THỂ",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "02ffb112-0020-4201-a689-eb3c4b60d1a9"
            ],
            [
              "hash"  =>   "97EEB70F-9131-4C17-B2BA-A033797CA598",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "41004000000000004000",
              "ten_chuong"  =>   "Chương IV BẢO VỆ VÀ PHÁT HUY GIÁ TRỊ DI SẢN VĂN HÓA VẬT THỂ",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "02ffb112-0020-4201-a689-eb3c4b60d1a9"
            ],
            [
              "hash"  =>   "0E5DFA61-C87F-4A3B-8413-4D7ABCD147F4",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "41004000000000005000",
              "ten_chuong"  =>   "Chương V QUẢN LÝ NHÀ NƯỚC VỀ DI SẢN VĂN HÓA",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "02ffb112-0020-4201-a689-eb3c4b60d1a9"
            ],
            [
              "hash"  =>   "9F0EF50E-6972-4D74-B6E6-6D65E4A40BB5",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "41004000000000006000",
              "ten_chuong"  =>   "Chương VI KHEN THƯỞNG VÀ XỬ PHẠT VI PHẠM",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "02ffb112-0020-4201-a689-eb3c4b60d1a9"
            ],
            [
              "hash"  =>   "EC82A8F8-BF46-4A86-8BA6-A5F97033D95F",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "41004000000000006500",
              "ten_chuong"  =>   "Chương VII QUY ĐỊNH LẬP DỰ TOÁN, QUẢN LÝ, SỬ DỤNG VÀ QUYẾT TOÁN KINH PHÍ NGÂN SÁCH NHÀ NƯỚC BẢO ĐẢM CHO CÁC HOẠT ĐỘNG VỀ DI SẢN VĂN HÓA",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "02ffb112-0020-4201-a689-eb3c4b60d1a9"
            ],
            [
              "hash"  =>   "4EF29884-AF7B-4C78-AA59-8D539E4E5467",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "41004000000000007000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "02ffb112-0020-4201-a689-eb3c4b60d1a9"
            ],
            [
              "hash"  =>   "8FEE3AB1-E2F1-4F42-B17A-5979314BD83D",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "41005000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "26f7a2a3-4962-4fda-852b-49da69886c12"
            ],
            [
              "hash"  =>   "4D2A1BAD-9C99-4C82-ACEA-547ECE1B8367",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "41005000000000002000",
              "ten_chuong"  =>   "Chương II KHÁCH DU LỊCH",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "26f7a2a3-4962-4fda-852b-49da69886c12"
            ],
            [
              "hash"  =>   "EC740ACF-E589-4576-BD6F-82791E41A196",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "41005000000000003000",
              "ten_chuong"  =>   "Chương III TÀI NGUYÊN DU LỊCH, PHÁT TRIỂN SẢN PHẨM DU LỊCH VÀ QUY HOẠCH VỀ DU LỊCH",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "26f7a2a3-4962-4fda-852b-49da69886c12"
            ],
            [
              "hash"  =>   "4B70379A-2D13-47FC-AA09-EA18DE6657BE",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "41005000000000004000",
              "ten_chuong"  =>   "Chương IV ĐIỂM DU LỊCH, KHU DU LỊCH",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "26f7a2a3-4962-4fda-852b-49da69886c12"
            ],
            [
              "hash"  =>   "1937E6A0-0A1E-47E7-843F-4A28F0BC515A",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "41005000000000005000",
              "ten_chuong"  =>   "Chương V KINH DOANH DU LỊCH",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "26f7a2a3-4962-4fda-852b-49da69886c12"
            ],
            [
              "hash"  =>   "C4CD6ACC-D9F2-423C-B2FB-7B43C06C74BF",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "41005000000000006000",
              "ten_chuong"  =>   "Chương VI HƯỚNG DẪN VIÊN DU LỊCH",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "26f7a2a3-4962-4fda-852b-49da69886c12"
            ],
            [
              "hash"  =>   "23162CC3-2F0A-43F7-91D4-B0AD482D7EB0",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "41005000000000007000",
              "ten_chuong"  =>   "Chương VII XÚC TIẾN DU LỊCH, QUỸ HỖ TRỢ PHÁT TRIỂN DU LỊCH",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "26f7a2a3-4962-4fda-852b-49da69886c12"
            ],
            [
              "hash"  =>   "3A09CB60-D5D6-4E50-8588-EFE35A03692B",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "41005000000000008000",
              "ten_chuong"  =>   "Chương VIII QUẢN LÝ NHÀ NƯỚC VỀ DU LỊCH",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "26f7a2a3-4962-4fda-852b-49da69886c12"
            ],
            [
              "hash"  =>   "7639BA69-B7C2-4807-AC8D-8613526A159A",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "41005000000000009000",
              "ten_chuong"  =>   "Chương IX ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "26f7a2a3-4962-4fda-852b-49da69886c12"
            ],
            [
              "hash"  =>   "68324D28-3BDA-48D5-8EDA-B771449E472C",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "41007000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "2f7bed93-ec8e-4d43-9111-7f1caa9cc74f"
            ],
            [
              "hash"  =>   "6193AEB6-55B7-43DC-ACC8-1BBD07CD1271",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "41007000000000002000",
              "ten_chuong"  =>   "Chương II THI SÁNG TÁC TÁC PHẨM MỸ THUẬT VÀ TRIỂN LÃM MỸ THUẬT",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "2f7bed93-ec8e-4d43-9111-7f1caa9cc74f"
            ],
            [
              "hash"  =>   "68826825-D565-4198-A91F-AB9D816600EF",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "41007000000000003000",
              "ten_chuong"  =>   "Chương III TRƯNG BÀY, MUA BÁN, SAO CHÉP, ĐẤU GIÁ, GIÁM ĐỊNH TÁC PHẨM MỸ THUẬT",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "2f7bed93-ec8e-4d43-9111-7f1caa9cc74f"
            ],
            [
              "hash"  =>   "25ED6870-99C3-4C6C-84B9-8CFE7C518786",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "41007000000000004000",
              "ten_chuong"  =>   "Chương IV TƯỢNG ĐÀI, TRANH HOÀNH TRÁNG",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "2f7bed93-ec8e-4d43-9111-7f1caa9cc74f"
            ],
            [
              "hash"  =>   "FF084B37-A593-4EC5-8BBE-92CDB3BA899D",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "41007000000000005000",
              "ten_chuong"  =>   "Chương V TRẠI SÁNG TÁC ĐIÊU KHẮC",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "2f7bed93-ec8e-4d43-9111-7f1caa9cc74f"
            ],
            [
              "hash"  =>   "78965765-64B6-4C2F-B5A4-D851FDBCEB7B",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "41007000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "2f7bed93-ec8e-4d43-9111-7f1caa9cc74f"
            ],
            [
              "hash"  =>   "BD05F9A9-F5D7-4A6D-9F0B-4C03F11D63B3",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "41009000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "5f523176-05b6-4d4e-903d-a12faffaa759"
            ],
            [
              "hash"  =>   "03180BB9-5563-4912-AF59-EACB4A127DB5",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "41009000000000002000",
              "ten_chuong"  =>   "Chương II QUYỀN VÀ NGHĨA VỤ CỦA TỔ CHỨC, CÁ NHÂN TRONG HOẠT ĐỘNG QUẢNG CÁO",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "5f523176-05b6-4d4e-903d-a12faffaa759"
            ],
            [
              "hash"  =>   "F596031E-8C96-45B8-A40C-77FC4CC4CE76",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "41009000000000003000",
              "ten_chuong"  =>   "Chương III HOẠT ĐỘNG QUẢNG CÁO",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "5f523176-05b6-4d4e-903d-a12faffaa759"
            ],
            [
              "hash"  =>   "8A673E4F-644A-4E03-85A6-648D59E88804",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "41009000000000004000",
              "ten_chuong"  =>   "Chương IV QUẢNG CÁO CÓ YẾU TỐ NƯỚC NGOÀI",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "5f523176-05b6-4d4e-903d-a12faffaa759"
            ],
            [
              "hash"  =>   "AD537241-FF85-454D-B14C-D31E6E6395F8",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "41009000000000005000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "5f523176-05b6-4d4e-903d-a12faffaa759"
            ],
            [
              "hash"  =>   "9D41EA78-7C13-4AFD-AF5A-A7CD3852E407",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "41011000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "8e9f6ba1-5870-479a-8030-0fa7c13c2d1a"
            ],
            [
              "hash"  =>   "EE630E58-78E3-42BE-BF36-BD1A916A0EC9",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "41011000000000002000",
              "ten_chuong"  =>   "Chương II THỂ DỤC, THỂ THAO CHO MỌI NGƯỜI",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "8e9f6ba1-5870-479a-8030-0fa7c13c2d1a"
            ],
            [
              "hash"  =>   "F7E2DBB0-902A-46AA-9AFD-1BC76A6340E2",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "41011000000000003000",
              "ten_chuong"  =>   "Chương III THỂ THAO THÀNH TÍCH CAO",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "8e9f6ba1-5870-479a-8030-0fa7c13c2d1a"
            ],
            [
              "hash"  =>   "8057E757-76BD-4493-860B-D355B28C6886",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "41011000000000004000",
              "ten_chuong"  =>   "Chương IV CƠ SỞ THỂ THAO",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "8e9f6ba1-5870-479a-8030-0fa7c13c2d1a"
            ],
            [
              "hash"  =>   "B5B33220-3B4D-44C3-90E7-5FAE2E6D9642",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "41011000000000005000",
              "ten_chuong"  =>   "Chương V NGUỒN LỰC PHÁT TRIỂN THỂ DỤC, THỂ THAO",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "8e9f6ba1-5870-479a-8030-0fa7c13c2d1a"
            ],
            [
              "hash"  =>   "EF487312-78F3-451A-B6CF-3D7679BAE07C",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "41011000000000006000",
              "ten_chuong"  =>   "Chương VI ỦY BAN Ô-LIM-PÍCH VIỆT NAM VÀ TỔ CHỨC XÃ HỘI - NGHỀ NGHIỆP VỀ THỂ THAO",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "8e9f6ba1-5870-479a-8030-0fa7c13c2d1a"
            ],
            [
              "hash"  =>   "6FC54401-A221-47C5-AFB8-30AF42209512",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "41011000000000007000",
              "ten_chuong"  =>   "Chương VII HỢP TÁC QUỐC TẾ VỀ THỂ THAO",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "8e9f6ba1-5870-479a-8030-0fa7c13c2d1a"
            ],
            [
              "hash"  =>   "025721E7-2A0C-4FF1-B3DA-FACFAAB7AB3D",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "41011000000000008000",
              "ten_chuong"  =>   "Chương VIII KHEN THƯỞNG VÀ XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "8e9f6ba1-5870-479a-8030-0fa7c13c2d1a"
            ],
            [
              "hash"  =>   "E2A4D514-5345-49BE-B484-8F9621B7BFD2",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "41011000000000009000",
              "ten_chuong"  =>   "Chương IX ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "8e9f6ba1-5870-479a-8030-0fa7c13c2d1a"
            ],
            [
              "hash"  =>   "483279F0-3127-4EEB-93B0-2C3DE67A72B2",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "41012000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "956c36d8-0ced-4865-a298-51759c932274"
            ],
            [
              "hash"  =>   "54D317E0-BB1F-496E-B485-6308A1F6E7C7",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "41012000000000002000",
              "ten_chuong"  =>   "Chương II THÀNH LẬP THƯ VIỆN",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "956c36d8-0ced-4865-a298-51759c932274"
            ],
            [
              "hash"  =>   "BA0ECB27-7563-4F24-82F8-ADB87B265A11",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "41012000000000003000",
              "ten_chuong"  =>   "Chương III HOẠT ĐỘNG THƯ VIỆN",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "956c36d8-0ced-4865-a298-51759c932274"
            ],
            [
              "hash"  =>   "5C284E40-5CBB-4912-B920-9A975610021E",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "41012000000000004000",
              "ten_chuong"  =>   "Chương IV QUYỀN, NGHĨA VỤ VÀ TRÁCH NHIỆM CỦA CƠ QUAN, TỔ CHỨC, CÁ NHÂN TRONG HOẠT ĐỘNG THƯ VIỆN",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "956c36d8-0ced-4865-a298-51759c932274"
            ],
            [
              "hash"  =>   "92EDD60F-546F-4EA1-B62D-40AEB63B7862",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "41012000000000005000",
              "ten_chuong"  =>   "Chương V TRÁCH NHIỆM QUẢN LÝ NHÀ NƯỚC VỀ THƯ VIỆN",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "956c36d8-0ced-4865-a298-51759c932274"
            ],
            [
              "hash"  =>   "5ACC0B3C-2DD4-4673-B1EF-D3C267221622",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "41012000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "956c36d8-0ced-4865-a298-51759c932274"
            ],
            [
              "hash"  =>   "BF75BB1F-D163-4A2E-A260-5FEE81DC30C8",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "41014000000000001000",
              "ten_chuong"  =>   "Chương I QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "c78e4b28-0d12-4211-98a5-47fbbd144f7b"
            ],
            [
              "hash"  =>   "1EB94449-CDBE-4995-A95D-1EFCEAA6FC5D",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "41014000000000002000",
              "ten_chuong"  =>   "Chương II LỄ QUỐC TANG",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "c78e4b28-0d12-4211-98a5-47fbbd144f7b"
            ],
            [
              "hash"  =>   "664729C1-37CC-432B-A494-2592E63798C1",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "41014000000000003000",
              "ten_chuong"  =>   "Chương III LỄ TANG CẤP NHÀ NƯỚC",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "c78e4b28-0d12-4211-98a5-47fbbd144f7b"
            ],
            [
              "hash"  =>   "529C9993-6186-4F5C-B97A-6FC48BA154D4",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "41014000000000004000",
              "ten_chuong"  =>   "Chương IV LỄ TANG CẤP CAO",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "c78e4b28-0d12-4211-98a5-47fbbd144f7b"
            ],
            [
              "hash"  =>   "947437B5-D018-4ED7-864B-E53883D14318",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "41014000000000005000",
              "ten_chuong"  =>   "Chương V LỄ TANG CÁN BỘ, CÔNG CHỨC, VIÊN CHỨC",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "c78e4b28-0d12-4211-98a5-47fbbd144f7b"
            ],
            [
              "hash"  =>   "AD14666B-099A-4FF0-AA81-27C8FB299B7F",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "41014000000000005500",
              "ten_chuong"  =>   "Chương VI TỔ CHỨC LỄ TANG TRONG CÔNG AN NHÂN DÂN VÀ TỔ CHỨC LỄ TANG ĐỐI VỚI QUÂN NHÂN, CÔNG NHÂN, VIÊN CHỨC QUỐC PHÒNG; NGƯỜI LÀM CÔNG TÁC CƠ YẾU DO BỘ QUỐC PHÒNG QUẢN LÝ",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "c78e4b28-0d12-4211-98a5-47fbbd144f7b"
            ],
            [
              "hash"  =>   "12D1FB86-211B-4846-899B-74213AACD8C2",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "41014000000000006000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "487180ab-07c0-45c1-9e73-1ab76b2a55c9",
              "hash_de_muc"  =>   "c78e4b28-0d12-4211-98a5-47fbbd144f7b"
            ],
            [
              "hash"  =>   "B28F69B9-FAEE-4DF9-AFD9-341545350182",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "42001000000000001000",
              "ten_chuong"  =>   "Chương I QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "1c1f149f-f1bf-4ddb-9f6b-b2adbf17d410",
              "hash_de_muc"  =>   "59750dbc-0ac3-4d75-928e-18983dc7ecf6"
            ],
            [
              "hash"  =>   "202BFADC-2C5C-463A-9B35-F745E47F5ACB",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "42001000000000002000",
              "ten_chuong"  =>   "Chương II SOẠN THẢO, KÝ BAN HÀNH VĂN BẢN HÀNH CHÍNH",
              "hash_chu_de"  =>   "1c1f149f-f1bf-4ddb-9f6b-b2adbf17d410",
              "hash_de_muc"  =>   "59750dbc-0ac3-4d75-928e-18983dc7ecf6"
            ],
            [
              "hash"  =>   "814CADB9-1239-46D9-8D9E-67EF6246E4E5",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "42001000000000003000",
              "ten_chuong"  =>   "Chương III QUẢN LÝ VĂN BẢN",
              "hash_chu_de"  =>   "1c1f149f-f1bf-4ddb-9f6b-b2adbf17d410",
              "hash_de_muc"  =>   "59750dbc-0ac3-4d75-928e-18983dc7ecf6"
            ],
            [
              "hash"  =>   "9D05CF69-AADA-4092-A6AA-E2825F9F81D5",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "42001000000000004000",
              "ten_chuong"  =>   "Chương IV LẬP HỒ SƠ VÀ NỘP LƯU HỒ SƠ, TÀI LIỆU VÀO LƯU TRỮ CƠ QUAN",
              "hash_chu_de"  =>   "1c1f149f-f1bf-4ddb-9f6b-b2adbf17d410",
              "hash_de_muc"  =>   "59750dbc-0ac3-4d75-928e-18983dc7ecf6"
            ],
            [
              "hash"  =>   "7D30359A-3B58-4F9E-A89C-074269FC90F2",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "42001000000000005000",
              "ten_chuong"  =>   "Chương V QUẢN LÝ, SỬ DỤNG CON DẤU VÀ THIẾT BỊ LƯU KHÓA BÍ MẬT TRONG CÔNG TÁC VĂN THƯ",
              "hash_chu_de"  =>   "1c1f149f-f1bf-4ddb-9f6b-b2adbf17d410",
              "hash_de_muc"  =>   "59750dbc-0ac3-4d75-928e-18983dc7ecf6"
            ],
            [
              "hash"  =>   "511C2624-81A6-4770-81D9-CC07074E4AB0",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "42001000000000006000",
              "ten_chuong"  =>   "Chương VI QUẢN LÝ NHÀ NƯỚC VỀ CÔNG TÁC VĂN THƯ",
              "hash_chu_de"  =>   "1c1f149f-f1bf-4ddb-9f6b-b2adbf17d410",
              "hash_de_muc"  =>   "59750dbc-0ac3-4d75-928e-18983dc7ecf6"
            ],
            [
              "hash"  =>   "EADCF438-30F1-4D95-8437-5BA7CFA67A9C",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "42001000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "1c1f149f-f1bf-4ddb-9f6b-b2adbf17d410",
              "hash_de_muc"  =>   "59750dbc-0ac3-4d75-928e-18983dc7ecf6"
            ],
            [
              "hash"  =>   "38308FD3-3066-40D4-95CC-185740954B0F",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "42002000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "1c1f149f-f1bf-4ddb-9f6b-b2adbf17d410",
              "hash_de_muc"  =>   "76b5a1aa-cc76-45cf-9e54-837937d1a754"
            ],
            [
              "hash"  =>   "EA59A6EB-6997-4082-AD2F-5B21653FCE33",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "42002000000000002000",
              "ten_chuong"  =>   "Chương II THU THẬP TÀI LIỆU LƯU TRỮ",
              "hash_chu_de"  =>   "1c1f149f-f1bf-4ddb-9f6b-b2adbf17d410",
              "hash_de_muc"  =>   "76b5a1aa-cc76-45cf-9e54-837937d1a754"
            ],
            [
              "hash"  =>   "9A379C8E-FEAA-402D-AA5B-FF47509BD1F8",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "42002000000000003000",
              "ten_chuong"  =>   "Chương III BẢO QUẢN, THỐNG KÊ TÀI LIỆU LƯU TRỮ, HỦY TÀI LIỆU HẾT GIÁ TRỊ",
              "hash_chu_de"  =>   "1c1f149f-f1bf-4ddb-9f6b-b2adbf17d410",
              "hash_de_muc"  =>   "76b5a1aa-cc76-45cf-9e54-837937d1a754"
            ],
            [
              "hash"  =>   "3824E920-A472-4EF6-A466-48996AE919FA",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "42002000000000004000",
              "ten_chuong"  =>   "Chương IV SỬ DỤNG TÀI LIỆU LƯU TRỮ",
              "hash_chu_de"  =>   "1c1f149f-f1bf-4ddb-9f6b-b2adbf17d410",
              "hash_de_muc"  =>   "76b5a1aa-cc76-45cf-9e54-837937d1a754"
            ],
            [
              "hash"  =>   "47ECDD28-A818-4F49-BF36-DC03E1CF0183",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "42002000000000005000",
              "ten_chuong"  =>   "Chương V ĐÀO TẠO, BỒI DƯỠNG NGHIỆP VỤ LƯU TRỮ,  HOẠT ĐỘNG DỊCH VỤ LƯU TRỮ",
              "hash_chu_de"  =>   "1c1f149f-f1bf-4ddb-9f6b-b2adbf17d410",
              "hash_de_muc"  =>   "76b5a1aa-cc76-45cf-9e54-837937d1a754"
            ],
            [
              "hash"  =>   "1A64BFA0-6A14-4545-B4E7-1BB3F47598C2",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "42002000000000006000",
              "ten_chuong"  =>   "Chương VI QUẢN LÝ VỀ LƯU TRỮ",
              "hash_chu_de"  =>   "1c1f149f-f1bf-4ddb-9f6b-b2adbf17d410",
              "hash_de_muc"  =>   "76b5a1aa-cc76-45cf-9e54-837937d1a754"
            ],
            [
              "hash"  =>   "393B1489-CED3-4883-8B30-C61AD6B7D563",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "42002000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "1c1f149f-f1bf-4ddb-9f6b-b2adbf17d410",
              "hash_de_muc"  =>   "76b5a1aa-cc76-45cf-9e54-837937d1a754"
            ],
            [
              "hash"  =>   "A53E2EC6-B5E4-4D74-B27A-9C23D25C8D4E",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "43001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "11a7e159-46bf-48bf-93ec-4e415f84c678",
              "hash_de_muc"  =>   "295ceaf7-684c-42a9-9f57-c60ff5581bcc"
            ],
            [
              "hash"  =>   "438B81B2-E189-45D6-B1B3-7A4ECF5B06EF",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "43001000000000002000",
              "ten_chuong"  =>   "Chương II QUẢN LÝ KIẾN TRÚC",
              "hash_chu_de"  =>   "11a7e159-46bf-48bf-93ec-4e415f84c678",
              "hash_de_muc"  =>   "295ceaf7-684c-42a9-9f57-c60ff5581bcc"
            ],
            [
              "hash"  =>   "1FDED0D1-FCA4-4DBB-8B55-CC708FB9DEE4",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "43001000000000003000",
              "ten_chuong"  =>   "Chương III HÀNH NGHỀ KIẾN TRÚC",
              "hash_chu_de"  =>   "11a7e159-46bf-48bf-93ec-4e415f84c678",
              "hash_de_muc"  =>   "295ceaf7-684c-42a9-9f57-c60ff5581bcc"
            ],
            [
              "hash"  =>   "27E3FC4A-DAEC-4D84-969B-AE32FD634F66",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "43001000000000004000",
              "ten_chuong"  =>   "Chương IV QUẢN LÝ NHÀ NƯỚC VỀ KIẾN TRÚC",
              "hash_chu_de"  =>   "11a7e159-46bf-48bf-93ec-4e415f84c678",
              "hash_de_muc"  =>   "295ceaf7-684c-42a9-9f57-c60ff5581bcc"
            ],
            [
              "hash"  =>   "9FA3F4CA-5FED-427A-833E-D4171CEDE688",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "43001000000000005000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "11a7e159-46bf-48bf-93ec-4e415f84c678",
              "hash_de_muc"  =>   "295ceaf7-684c-42a9-9f57-c60ff5581bcc"
            ],
            [
              "hash"  =>   "484AD818-9717-43F7-B1A0-BEBD319C2261",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "43002000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "11a7e159-46bf-48bf-93ec-4e415f84c678",
              "hash_de_muc"  =>   "d1ac30ec-b37c-448d-90c2-cf94b0794564"
            ],
            [
              "hash"  =>   "1B4424F1-5AA0-4714-AB84-3F61E61DAD69",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "43002000000000002000",
              "ten_chuong"  =>   "Chương II KINH DOANH BẤT ĐỘNG SẢN CÓ SẴN",
              "hash_chu_de"  =>   "11a7e159-46bf-48bf-93ec-4e415f84c678",
              "hash_de_muc"  =>   "d1ac30ec-b37c-448d-90c2-cf94b0794564"
            ],
            [
              "hash"  =>   "7A7CBF64-B191-419E-8EA7-608140EEDD4D",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "43002000000000003000",
              "ten_chuong"  =>   "Chương III KINH DOANH BẤT ĐỘNG SẢN HÌNH THÀNH TRONG TƯƠNG LAI",
              "hash_chu_de"  =>   "11a7e159-46bf-48bf-93ec-4e415f84c678",
              "hash_de_muc"  =>   "d1ac30ec-b37c-448d-90c2-cf94b0794564"
            ],
            [
              "hash"  =>   "8B823DF0-11B0-437C-8432-AF97095EEE90",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "43002000000000004000",
              "ten_chuong"  =>   "Chương IV KINH DOANH DỊCH VỤ BẤT ĐỘNG SẢN",
              "hash_chu_de"  =>   "11a7e159-46bf-48bf-93ec-4e415f84c678",
              "hash_de_muc"  =>   "d1ac30ec-b37c-448d-90c2-cf94b0794564"
            ],
            [
              "hash"  =>   "956DB0EB-F6BD-4F00-8025-AA63B1ADFBC3",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "43002000000000005000",
              "ten_chuong"  =>   "Chương V QUẢN LÝ NHÀ NƯỚC VỀ KINH DOANH BẤT ĐỘNG SẢN",
              "hash_chu_de"  =>   "11a7e159-46bf-48bf-93ec-4e415f84c678",
              "hash_de_muc"  =>   "d1ac30ec-b37c-448d-90c2-cf94b0794564"
            ],
            [
              "hash"  =>   "45E212BA-FADD-4E75-BBB4-023CC91816D1",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "43002000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "11a7e159-46bf-48bf-93ec-4e415f84c678",
              "hash_de_muc"  =>   "d1ac30ec-b37c-448d-90c2-cf94b0794564"
            ],
            [
              "hash"  =>   "313F74C3-6444-4B64-8A90-4FB416B69DDC",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "44001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "87ca311f-a832-430e-993a-ffef40ef4043"
            ],
            [
              "hash"  =>   "A90CBF7D-2043-4A6B-919B-30B82C413BD0",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "44001000000000002000",
              "ten_chuong"  =>   "Chương II THẨM QUYỀN BAN HÀNH, NỘI DUNG VĂN BẢN QUY PHẠM PHÁP LUẬT",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "87ca311f-a832-430e-993a-ffef40ef4043"
            ],
            [
              "hash"  =>   "1FA7A1B8-B689-4E6B-81CF-9C1363BC6F5E",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "44001000000000003000",
              "ten_chuong"  =>   "Chương III XÂY DỰNG, BAN HÀNH VĂN BẢN QUY PHẠM PHÁP LUẬT CỦA QUỐC HỘI, ỦY BAN THƯỜNG VỤ QUỐC HỘI",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "87ca311f-a832-430e-993a-ffef40ef4043"
            ],
            [
              "hash"  =>   "26EA738B-02CA-4D31-95E9-3B9C999BC202",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "44001000000000004000",
              "ten_chuong"  =>   "Chương IV XÂY DỰNG, BAN HÀNH VĂN BẢN QUY PHẠM PHÁP LUẬT CỦA CHỦ TỊCH NƯỚC",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "87ca311f-a832-430e-993a-ffef40ef4043"
            ],
            [
              "hash"  =>   "D8F339B3-9E50-4FC5-81E8-D2F14733172C",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "44001000000000005000",
              "ten_chuong"  =>   "Chương V XÂY DỰNG, BAN HÀNH VĂN BẢN QUY PHẠM PHÁP LUẬT CỦA CHÍNH PHỦ, THỦ TƯỚNG CHÍNH PHỦ, BỘ TRƯỞNG, THỦ TRƯỞNG CƠ QUAN NGANG BỘ",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "87ca311f-a832-430e-993a-ffef40ef4043"
            ],
            [
              "hash"  =>   "E17AB3EA-D2B7-4F45-ACB7-03B13A777138",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "44001000000000006000",
              "ten_chuong"  =>   "Chương VI XÂY DỰNG, BAN HÀNH VĂN BẢN QUY PHẠM PHÁP LUẬT CỦA HỘI ĐỒNG THẨM PHÁN TÒA ÁN NHÂN DÂN TỐI CAO, CHÁNH ÁN TÒA ÁN NHÂN DÂN TỐI CAO, VIỆN TRƯỞNG VIỆN KIỂM SÁT NHÂN DÂN TỐI CAO, TỔNG KIỂM TOÁN NHÀ NƯỚC",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "87ca311f-a832-430e-993a-ffef40ef4043"
            ],
            [
              "hash"  =>   "C7D0F4BD-B7DD-4B23-856D-1449E63AD7A7",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "44001000000000007000",
              "ten_chuong"  =>   "Chương VII XÂY DỰNG, BAN HÀNH VĂN BẢN QUY PHẠM PHÁP LUẬT LIÊN TỊCH",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "87ca311f-a832-430e-993a-ffef40ef4043"
            ],
            [
              "hash"  =>   "BB86E01A-0DC6-4F4D-B88B-4E9FAC676A7F",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "44001000000000008000",
              "ten_chuong"  =>   "Chương VIII XÂY DỰNG, BAN HÀNH NGHỊ QUYẾT CỦA HỘI ĐỒNG NHÂN DÂN CẤP TỈNH",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "87ca311f-a832-430e-993a-ffef40ef4043"
            ],
            [
              "hash"  =>   "872194AF-5D7B-4B40-85B0-ACA26AF923C7",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "44001000000000009000",
              "ten_chuong"  =>   "Chương IX XÂY DỰNG, BAN HÀNH QUYẾT ĐỊNH CỦA ỦY BAN NHÂN DÂN CẤP TỈNH",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "87ca311f-a832-430e-993a-ffef40ef4043"
            ],
            [
              "hash"  =>   "CD515391-C284-4E68-88C6-993076CC3AAF",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "44001000000000010000",
              "ten_chuong"  =>   "Chương X XÂY DỰNG, BAN HÀNH VĂN BẢN QUY PHẠM PHÁP LUẬT CỦA HỘI ĐỒNG NHÂN DÂN, ỦY BAN NHÂN DÂN CẤP HUYỆN",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "87ca311f-a832-430e-993a-ffef40ef4043"
            ],
            [
              "hash"  =>   "19EA9C11-700E-4536-B7A9-BCEC8156DED1",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "44001000000000011000",
              "ten_chuong"  =>   "Chương XI XÂY DỰNG, BAN HÀNH VĂN BẢN QUY PHẠM PHÁP LUẬT CỦA HỘI ĐỒNG NHÂN DÂN, ỦY BAN NHÂN DÂN CẤP XÃ",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "87ca311f-a832-430e-993a-ffef40ef4043"
            ],
            [
              "hash"  =>   "413CF953-FE63-4A30-B2C1-CE28FF45FD13",
              "so_thu_tu"  =>   12,
              "MAPC"  =>   "44001000000000012000",
              "ten_chuong"  =>   "Chương XII XÂY DỰNG, BAN HÀNH VĂN BẢN QUY PHẠM PHÁP LUẬT THEO TRÌNH TỰ, THỦ TỤC RÚT GỌN",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "87ca311f-a832-430e-993a-ffef40ef4043"
            ],
            [
              "hash"  =>   "BDEFCB89-4F4F-45FD-9DDE-53D00CCEDA28",
              "so_thu_tu"  =>   13,
              "MAPC"  =>   "44001000000000013000",
              "ten_chuong"  =>   "Chương XIII HIỆU LỰC CỦA VĂN BẢN QUY PHẠM PHÁP LUẬT, NGUYÊN TẮC ÁP DỤNG, CÔNG KHAI VĂN BẢN QUY PHẠM PHÁP LUẬT",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "87ca311f-a832-430e-993a-ffef40ef4043"
            ],
            [
              "hash"  =>   "E1CF1C25-C149-4673-84D5-0F3A89E968D2",
              "so_thu_tu"  =>   14,
              "MAPC"  =>   "44001000000000014000",
              "ten_chuong"  =>   "Chương XIV GIẢI THÍCH HIẾN PHÁP, LUẬT, PHÁP LỆNH",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "87ca311f-a832-430e-993a-ffef40ef4043"
            ],
            [
              "hash"  =>   "ECAFAC9B-4794-47F2-96EB-ED91A6C91370",
              "so_thu_tu"  =>   15,
              "MAPC"  =>   "44001000000000015000",
              "ten_chuong"  =>   "Chương XV GIÁM SÁT, KIỂM TRA, XỬ LÝ VĂN BẢN QUY PHẠM PHÁP LUẬT",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "87ca311f-a832-430e-993a-ffef40ef4043"
            ],
            [
              "hash"  =>   "2204F3DA-D3E9-4CBE-9095-FCBD8B581C1D",
              "so_thu_tu"  =>   16,
              "MAPC"  =>   "44001000000000016000",
              "ten_chuong"  =>   "Chương XVI HỢP NHẤT VĂN BẢN QUY PHẠM PHÁP LUẬT, PHÁP ĐIỂN HỆ THỐNG QUY PHẠM PHÁP LUẬT, RÀ SOÁT, HỆ THỐNG HÓA VĂN BẢN QUY PHẠM PHÁP LUẬT",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "87ca311f-a832-430e-993a-ffef40ef4043"
            ],
            [
              "hash"  =>   "05215DB8-2987-4172-AACC-9D7DA9EB220F",
              "so_thu_tu"  =>   17,
              "MAPC"  =>   "44001000000000017000",
              "ten_chuong"  =>   "Chương XVII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "87ca311f-a832-430e-993a-ffef40ef4043"
            ],
            [
              "hash"  =>   "BE13D04B-DD61-4C34-9C92-4A047D99B5B6",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "44003000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "62a101f0-01c7-41a9-b6b9-a4c04a4bb34b"
            ],
            [
              "hash"  =>   "8CE8F56E-9131-49FC-8293-49D2FB5041EE",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "44003000000000002000",
              "ten_chuong"  =>   "Chương II NHIỆM VỤ, QUYỀN HẠN CỦA TỔ CHỨC PHÁP CHẾ",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "62a101f0-01c7-41a9-b6b9-a4c04a4bb34b"
            ],
            [
              "hash"  =>   "B7092325-D379-42A9-81C0-6F311C62982F",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "44003000000000003000",
              "ten_chuong"  =>   "Chương III TỔ CHỨC PHÁP CHẾ VÀ NGƯỜI LÀM CÔNG TÁC PHÁP CHẾ",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "62a101f0-01c7-41a9-b6b9-a4c04a4bb34b"
            ],
            [
              "hash"  =>   "8A46BEF9-C536-4C2F-AB1A-42E5098147B5",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "44003000000000004000",
              "ten_chuong"  =>   "Chương IV QUẢN LÝ NHÀ NƯỚC VÀ TỔ CHỨC THỰC HIỆN",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "62a101f0-01c7-41a9-b6b9-a4c04a4bb34b"
            ],
            [
              "hash"  =>   "57A1EF88-0940-4C1A-8C92-2AF65DA40A45",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "44004000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "ab2a3ec6-2176-4dac-a836-cde2cae944b1"
            ],
            [
              "hash"  =>   "3C451E64-063F-4550-B85F-E3DED58AAD5B",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "44004000000000002000",
              "ten_chuong"  =>   "Chương II THẨM QUYỀN VÀ VIỆC TỔ CHỨC HỢP NHẤT VĂN BẢN",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "ab2a3ec6-2176-4dac-a836-cde2cae944b1"
            ],
            [
              "hash"  =>   "A88C8ADB-29C2-4D53-998E-6E4958B0ACAD",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "44004000000000003000",
              "ten_chuong"  =>   "Chương III KỸ THUẬT HỢP NHẤT VĂN BẢN",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "ab2a3ec6-2176-4dac-a836-cde2cae944b1"
            ],
            [
              "hash"  =>   "F9009890-726F-4AEA-8DD7-9FF037EEEF75",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "44004000000000003500",
              "ten_chuong"  =>   "Chương IV. MỘT SỐ QUY ĐỊNH VỀ CÔNG TÁC HỢP NHẤT VĂN BẢN  QUY PHẠM PHÁP LUẬT CỦA CÁC BỘ, NGÀNH",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "ab2a3ec6-2176-4dac-a836-cde2cae944b1"
            ],
            [
              "hash"  =>   "CD9F18A5-5E24-4D4D-A110-E62C8C3A9329",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "44004000000000003750",
              "ten_chuong"  =>   "Chương V. QUY ĐỊNH LẬP DỰ TOÁN, QUẢN LÝ, SỬ DỤNG VÀ QUYẾT TOÁN KINH PHÍ NGÂN SÁCH NHÀ NƯỚC BẢO ĐẢM CHO CÔNG TÁC  HỢP NHẤT VĂN BẢN QUY PHẠM PHÁP LUẬT",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "ab2a3ec6-2176-4dac-a836-cde2cae944b1"
            ],
            [
              "hash"  =>   "07954F74-00E7-4DDA-98C1-A649487F0A09",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "44004000000000004000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "ab2a3ec6-2176-4dac-a836-cde2cae944b1"
            ],
            [
              "hash"  =>   "256F3B87-61A5-43C4-BBC3-609852F06172",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "44005000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "606f1686-5fd0-4a16-aa1b-21acef306e78"
            ],
            [
              "hash"  =>   "9C04BE56-7402-4061-892D-84B7F614C61D",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "44005000000000002000",
              "ten_chuong"  =>   "Chương II QUY ĐỊNH THỦ TỤC HÀNH CHÍNH",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "606f1686-5fd0-4a16-aa1b-21acef306e78"
            ],
            [
              "hash"  =>   "8B899B79-84EE-480F-9882-64B5C096C0FB",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "44005000000000003000",
              "ten_chuong"  =>   "Chương III THỰC HIỆN THỦ TỤC HÀNH CHÍNH",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "606f1686-5fd0-4a16-aa1b-21acef306e78"
            ],
            [
              "hash"  =>   "B625F3D7-6DA1-4395-B8ED-6AFAE008074C",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "44005000000000004000",
              "ten_chuong"  =>   "Chương IV CƠ SỞ DỮ LIỆU QUỐC GIA VỀ THỦ TỤC HÀNH CHÍNH",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "606f1686-5fd0-4a16-aa1b-21acef306e78"
            ],
            [
              "hash"  =>   "9B7CFCC5-515F-4651-A4E5-F1DBD55AA9D1",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "44005000000000005000",
              "ten_chuong"  =>   "Chương V RÀ SOÁT, ĐÁNH GIÁ THỦ TỤC HÀNH CHÍNH",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "606f1686-5fd0-4a16-aa1b-21acef306e78"
            ],
            [
              "hash"  =>   "93712787-F268-41D5-848B-CDF4FE37F99E",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "44005000000000006000",
              "ten_chuong"  =>   "Chương VI KHEN THƯỞNG, KINH PHÍ THỰC HIỆN, THÔNG TIN, BÁO CÁO",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "606f1686-5fd0-4a16-aa1b-21acef306e78"
            ],
            [
              "hash"  =>   "FDE7F236-19CD-4B66-823C-B8913A016995",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "44005000000000006500",
              "ten_chuong"  =>   "Chương VII. QUY ĐỊNH VỀ HOẠT ĐỘNG KIỂM SOÁT THỦ TỤC HÀNH CHÍNH TRONG MỘT SỐ LĨNH VỰC",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "606f1686-5fd0-4a16-aa1b-21acef306e78"
            ],
            [
              "hash"  =>   "B56CA8B1-9A86-4F24-AE3B-54326C7CE258",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "44005000000000007000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "606f1686-5fd0-4a16-aa1b-21acef306e78"
            ],
            [
              "hash"  =>   "5EBA7CCE-2AAD-499A-B593-0C7E56A03F8C",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "44007000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "59a38639-f218-4f4d-872e-c2d9f9a69dd0"
            ],
            [
              "hash"  =>   "B44DE9A1-64DA-4A73-BB3F-49F4C3AAD526",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "44007000000000002000",
              "ten_chuong"  =>   "Chương II BỘ PHÁP ĐIỂN VÀ TRÌNH TỰ, THỦ TỤC PHÁP ĐIỂN",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "59a38639-f218-4f4d-872e-c2d9f9a69dd0"
            ],
            [
              "hash"  =>   "987FEDBE-1491-4F77-BA01-8410765F23B9",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "44007000000000003000",
              "ten_chuong"  =>   "Chương III TRÁCH NHIỆM CỦA CÁC CƠ QUAN TRONG CÔNG TÁC PHÁP ĐIỂN VÀ VIỆC BẢO ĐẢM KINH PHÍ CHO CÔNG TÁC PHÁP ĐIỂN",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "59a38639-f218-4f4d-872e-c2d9f9a69dd0"
            ],
            [
              "hash"  =>   "A40ECAD9-7CFE-46EC-8EA4-931A20743224",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "44007000000000003500",
              "ten_chuong"  =>   "Chương IV QUY ĐỊNH LẬP DỰ TOÁN, QUẢN LÝ, SỬ DỤNG VÀ QUYẾT TOÁN KINH PHÍ NGÂN SÁCH NHÀ NƯỚC BẢO ĐẢM CHO CÔNG TÁC PHÁP ĐIỂN HỆ THỐNG QUY PHẠM PHÁP LUẬT",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "59a38639-f218-4f4d-872e-c2d9f9a69dd0"
            ],
            [
              "hash"  =>   "7D8AC96D-6D72-4EB5-996C-B31BFD35E02F",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "44007000000000004000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "59a38639-f218-4f4d-872e-c2d9f9a69dd0"
            ],
            [
              "hash"  =>   "2D268CE2-4846-4FFF-9AFD-38A774E6C4A0",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "44008000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "34030833-66c0-4966-9dff-1f02e805d94f"
            ],
            [
              "hash"  =>   "0C25B6C1-6E3A-4165-B84F-9BBEFF2A481D",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "44008000000000002000",
              "ten_chuong"  =>   "Chương II NỘI DUNG, HÌNH THỨC PHỔ BIẾN, GIÁO DỤC PHÁP LUẬT",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "34030833-66c0-4966-9dff-1f02e805d94f"
            ],
            [
              "hash"  =>   "92CA5669-9E52-4756-82A8-5C561F8A2F7E",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "44008000000000003000",
              "ten_chuong"  =>   "Chương III TRÁCH NHIỆM PHỔ BIẾN, GIÁO DỤC PHÁP LUẬT CỦA CƠ QUAN, TỔ CHỨC, CÁ NHÂN",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "34030833-66c0-4966-9dff-1f02e805d94f"
            ],
            [
              "hash"  =>   "768DFF6F-CB90-428F-809A-DCFB52A73E30",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "44008000000000004000",
              "ten_chuong"  =>   "Chương IV CÁC ĐIỀU KIỆN BẢO ĐẢM CHO CÔNG TÁC PHỔ BIẾN, GIÁO DỤC PHÁP LUẬT",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "34030833-66c0-4966-9dff-1f02e805d94f"
            ],
            [
              "hash"  =>   "0BBD0290-F54B-420E-A86C-BCEEFEFA212B",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "44008000000000004500",
              "ten_chuong"  =>   "Chương V QUY ĐỊNH VỀ CHUẨN TIẾP CẬN PHÁP LUẬT CHO NGƯỜI DÂN  TẠI CƠ SỞ",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "34030833-66c0-4966-9dff-1f02e805d94f"
            ],
            [
              "hash"  =>   "A29C9187-AC1C-4D6B-B90C-AE11A2FEC8E1",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "44008000000000004750",
              "ten_chuong"  =>   "Chương VI QUY ĐỊNH VỀ CÔNG TÁC PHỔ BIẾN, GIÁO DỤC  PHÁP LUẬT TRONG CÁC LĨNH VỰC",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "34030833-66c0-4966-9dff-1f02e805d94f"
            ],
            [
              "hash"  =>   "8A195394-0A00-4B2E-A0C1-D009B8C943B4",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "44008000000000004875",
              "ten_chuong"  =>   "Chương VII QUY ĐỊNH LẬP DỰ TOÁN, QUẢN LÝ, SỬ DỤNG VÀ QUYẾT TOÁN KINH PHÍ NGÂN SÁCH NHÀ NƯỚC BẢO ĐẢM CHO CÔNG TÁC PHỔ BIẾN, GIÁO DỤC PHÁP LUẬT",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "34030833-66c0-4966-9dff-1f02e805d94f"
            ],
            [
              "hash"  =>   "CE9B27C2-08EB-4C52-A6E2-DB308760842B",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "44008000000000005000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "34030833-66c0-4966-9dff-1f02e805d94f"
            ],
            [
              "hash"  =>   "7C9C2F06-E064-4BE5-95BC-9ECFCACF3297",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "44009000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "96d672a7-a611-424b-bbf5-31467640284c"
            ],
            [
              "hash"  =>   "F30138EB-8ED7-42FD-A519-5F55BBB09FD5",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "44009000000000002000",
              "ten_chuong"  =>   "Chương II XÂY DỰNG, PHÊ DUYỆT CHƯƠNG TRÌNH,  DỰ ÁN HỢP TÁC PHÁP LUẬT",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "96d672a7-a611-424b-bbf5-31467640284c"
            ],
            [
              "hash"  =>   "15609CC6-F3A2-4460-A7FC-976423BF5DEC",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "44009000000000003000",
              "ten_chuong"  =>   "Chương III THỰC HIỆN HỢP TÁC QUỐC TẾ VỀ PHÁP LUẬT",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "96d672a7-a611-424b-bbf5-31467640284c"
            ],
            [
              "hash"  =>   "F6401336-1057-460F-B173-C3162874EAE7",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "44009000000000005000",
              "ten_chuong"  =>   "Chương V TRÁCH NHIỆM CỦA CƠ QUAN, TỔ CHỨC TRONG  QUẢN LÝ HỢP TÁC QUỐC TẾ VỀ PHÁP LUẬT",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "96d672a7-a611-424b-bbf5-31467640284c"
            ],
            [
              "hash"  =>   "09036973-B520-4F3B-A27B-BDF6FDC1FF6B",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "44011000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "93811189-2f4e-4bb7-90ce-cd15c0a093b7"
            ],
            [
              "hash"  =>   "14F75FE1-5E89-4CA4-85C9-1D7470479C87",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "44011000000000002000",
              "ten_chuong"  =>   "Chương II NỘI DUNG THEO DÕI TÌNH HÌNH THI HÀNH PHÁP LUẬT",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "93811189-2f4e-4bb7-90ce-cd15c0a093b7"
            ],
            [
              "hash"  =>   "9E112022-C282-4194-A90A-43835A57EC1C",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "44011000000000003000",
              "ten_chuong"  =>   "Chương III HOẠT ĐỘNG THEO DÕI TÌNH HÌNH THI HÀNH PHÁP LUẬT",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "93811189-2f4e-4bb7-90ce-cd15c0a093b7"
            ],
            [
              "hash"  =>   "7AF6E37F-F79E-4CC9-BFE0-849145AB9A91",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "44011000000000004000",
              "ten_chuong"  =>   "Chương IV TRÁCH NHIỆM CỦA CƠ QUAN NHÀ NƯỚC TRONG THEO DÕI TÌNH HÌNH THI HÀNH PHÁP LUẬT",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "93811189-2f4e-4bb7-90ce-cd15c0a093b7"
            ],
            [
              "hash"  =>   "B0145702-3EDF-44C9-973B-DBF7006224CE",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "44011000000000004500",
              "ten_chuong"  =>   "Chương V CÔNG TÁC THEO DÕI TÌNH HÌNH THI HÀNH PHÁP LUẬT CỦA CÁC BỘ, NGÀNH",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "93811189-2f4e-4bb7-90ce-cd15c0a093b7"
            ],
            [
              "hash"  =>   "1E2141A3-7049-4023-A4BD-95A5072DB60F",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "44011000000000005000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "93811189-2f4e-4bb7-90ce-cd15c0a093b7"
            ],
            [
              "hash"  =>   "62B5D6A4-EA46-4787-B532-B7AAFD88B455",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "44012000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "87bb6177-4c03-4173-8a12-9a75337bb2e0"
            ],
            [
              "hash"  =>   "CC8FA8A2-3B67-4235-BBC0-0FF61B92E102",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "44012000000000002000",
              "ten_chuong"  =>   "Chương II NỘI DUNG, HÌNH THỨC VÀ YÊU CẦU VỀ PHẢN ÁNH, KIẾN NGHỊ",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "87bb6177-4c03-4173-8a12-9a75337bb2e0"
            ],
            [
              "hash"  =>   "5F7D6B7C-A0BD-4B8A-B57F-5537D1824465",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "44012000000000003000",
              "ten_chuong"  =>   "Chương III TIẾP NHẬN PHẢN ÁNH, KIẾN NGHỊ",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "87bb6177-4c03-4173-8a12-9a75337bb2e0"
            ],
            [
              "hash"  =>   "3ED5699B-18BA-43FD-B788-FBF28D60B3EE",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "44012000000000004000",
              "ten_chuong"  =>   "Chương IV XỬ LÝ PHẢN ÁNH, KIẾN NGHỊ",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "87bb6177-4c03-4173-8a12-9a75337bb2e0"
            ],
            [
              "hash"  =>   "3AA79B50-819D-4C0D-9539-B9ADDCF1EA67",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "44012000000000005000",
              "ten_chuong"  =>   "Chương V CÁC ĐIỀU KIỆN BẢO ĐẢM",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "87bb6177-4c03-4173-8a12-9a75337bb2e0"
            ],
            [
              "hash"  =>   "8704A038-CF31-402A-8C93-EA119DAA3923",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "44012000000000006000",
              "ten_chuong"  =>   "Chương VI KHEN THƯỞNG VÀ XỬ LÝ VI PHẠM",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "87bb6177-4c03-4173-8a12-9a75337bb2e0"
            ],
            [
              "hash"  =>   "6D80787A-8303-4F67-8B77-7C570BC84450",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "44012000000000006500",
              "ten_chuong"  =>   "Chương VII. QUY ĐỊNH VIỆC TIẾP NHẬN, XỬ LÝ PHẢN ÁNH, KIẾN NGHỊ CỦA CÁ NHÂN, TỔ CHỨC VỀ QUY ĐỊNH HÀNH CHÍNH TRONG MỘT SỐ LĨNH VỰC",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "87bb6177-4c03-4173-8a12-9a75337bb2e0"
            ],
            [
              "hash"  =>   "E3FA809D-4DE5-4756-8F2F-B3C60A1ACD1C",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "44012000000000007000",
              "ten_chuong"  =>   "Chương VIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "87bb6177-4c03-4173-8a12-9a75337bb2e0"
            ],
            [
              "hash"  =>   "DD35279C-C49F-4D5B-9AD6-165AED8AA68D",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "44015000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "b892dee4-ee6e-4228-988f-7101b89443de"
            ],
            [
              "hash"  =>   "979625BB-9D91-441A-949B-AED9BBCD278C",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "44015000000000002000",
              "ten_chuong"  =>   "Chương II ĐỀ NGHỊ TRƯNG CẦU Ý DÂN VÀ QUYẾT ĐỊNH VIỆC TRƯNG CẦU Ý DÂN",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "b892dee4-ee6e-4228-988f-7101b89443de"
            ],
            [
              "hash"  =>   "C75901B4-8FFB-4D2D-9842-98EB6EBEA53A",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "44015000000000003000",
              "ten_chuong"  =>   "Chương III NHIỆM VỤ, QUYỀN HẠN CỦA CƠ QUAN, TỔ CHỨC TRONG TỔ CHỨC TRƯNG CẦU Ý DÂN",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "b892dee4-ee6e-4228-988f-7101b89443de"
            ],
            [
              "hash"  =>   "7CBEBDB5-A328-4481-85FD-4B26D777F0F2",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "44015000000000004000",
              "ten_chuong"  =>   "Chương IV DANH SÁCH CỬ TRI VÀ KHU VỰC BỎ PHIẾU TRƯNG CẦU Ý DÂN",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "b892dee4-ee6e-4228-988f-7101b89443de"
            ],
            [
              "hash"  =>   "93CCD71B-8221-4F90-A281-9E7790FD13CF",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "44015000000000005000",
              "ten_chuong"  =>   "Chương V THÔNG TIN, TUYÊN TRUYỀN VỀ TRƯNG CẦU Ý DÂN",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "b892dee4-ee6e-4228-988f-7101b89443de"
            ],
            [
              "hash"  =>   "A2DEECF7-9419-4942-A436-D27C09EDD8E7",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "44015000000000006000",
              "ten_chuong"  =>   "Chương VI TRÌNH TỰ, THỦ TỤC BỎ PHIẾU TRƯNG CẦU Ý DÂN; QUYỀN, NGHĨA VỤ CỦA CỬ TRI TRONG TRƯNG CẦU Ý DÂN",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "b892dee4-ee6e-4228-988f-7101b89443de"
            ],
            [
              "hash"  =>   "2E90BA42-674A-40EE-B8F8-D9920DA50B0D",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "44015000000000007000",
              "ten_chuong"  =>   "Chương VII KẾT QUẢ TRƯNG CẦU Ý DÂN",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "b892dee4-ee6e-4228-988f-7101b89443de"
            ],
            [
              "hash"  =>   "3E32093D-8E08-420B-BA50-46DD2525F645",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "44015000000000008000",
              "ten_chuong"  =>   "Chương VIII XỬ LÝ VI PHẠM PHÁP LUẬT VỀ TRƯNG CẦU Ý DÂN VÀ ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "ec61c177-8f68-4a69-a42b-2257d599d907",
              "hash_de_muc"  =>   "b892dee4-ee6e-4228-988f-7101b89443de"
            ],
            [
              "hash"  =>   "94C0B96B-C50D-417C-B295-FAA370A57DAB",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "45001000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0cf69ad9-6f29-4ee4-8e16-2c3aa65c3a52"
            ],
            [
              "hash"  =>   "F45B5C92-0728-4E0D-B9EE-5EEA50077346",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "45001000000000002000",
              "ten_chuong"  =>   "Chương II QUYỀN VÀ NGHĨA VỤ CỦA TỔ CHỨC, CÁ NHÂN TRONG BẢO ĐẢM AN TOÀN THỰC PHẨM",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0cf69ad9-6f29-4ee4-8e16-2c3aa65c3a52"
            ],
            [
              "hash"  =>   "6443D5A8-273B-4237-AE14-EF36E2E21628",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "45001000000000003000",
              "ten_chuong"  =>   "Chương III ĐIỀU KIỆN BẢO ĐẢM AN TOÀN ĐỐI VỚI THỰC PHẨM",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0cf69ad9-6f29-4ee4-8e16-2c3aa65c3a52"
            ],
            [
              "hash"  =>   "4799A33B-ECD6-4632-8D64-EBC611426694",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "45001000000000004000",
              "ten_chuong"  =>   "Chương IV ĐIỀU KIỆN BẢO ĐẢM AN TOÀN THỰC PHẨM TRONG SẢN XUẤT, KINH DOANH THỰC PHẨM MỤC",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0cf69ad9-6f29-4ee4-8e16-2c3aa65c3a52"
            ],
            [
              "hash"  =>   "EDB3EF77-F035-4C89-BE35-B688779C1A54",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "45001000000000005000",
              "ten_chuong"  =>   "Chương V CHỨNG NHẬN CƠ SỞ ĐỦ ĐIỀU KIỆN AN TOÀN THỰC PHẨM TRONG SẢN XUẤT, KINH DOANH THỰC PHẨM",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0cf69ad9-6f29-4ee4-8e16-2c3aa65c3a52"
            ],
            [
              "hash"  =>   "46E65240-BD6C-4F73-9939-A3D6B3E45EA3",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "45001000000000006000",
              "ten_chuong"  =>   "Chương VI NHẬP KHẨU VÀ XUẤT KHẨU THỰC PHẨM Mục 1. ĐIỀU KIỆN BẢO ĐẢM AN TOÀN ĐỐI VỚI THỰC PHẨM NHẬP KHẨU",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0cf69ad9-6f29-4ee4-8e16-2c3aa65c3a52"
            ],
            [
              "hash"  =>   "D8F551F3-588C-49DF-8922-922479BC0FEB",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "45001000000000007000",
              "ten_chuong"  =>   "Chương VII QUẢNG CÁO, GHI NHÃN THỰC PHẨM",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0cf69ad9-6f29-4ee4-8e16-2c3aa65c3a52"
            ],
            [
              "hash"  =>   "859D62C3-2CE7-439F-9844-2E21CFC28AD8",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "45001000000000008000",
              "ten_chuong"  =>   "Chương VIII KIỂM NGHIỆM THỰC PHẨM, PHÂN TÍCH NGUY CƠ ĐỐI VỚI AN TOÀN THỰC PHẨM, PHÒNG NGỪA, NGĂN CHẶN VÀ KHẮC PHỤC SỰ CỐ VỀ AN TOÀN THỰC PHẨM Mục 1. KIỂM NGHIỆM THỰC PHẨM",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0cf69ad9-6f29-4ee4-8e16-2c3aa65c3a52"
            ],
            [
              "hash"  =>   "1431A6B3-9B88-47FB-ABA4-C0278F318B64",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "45001000000000009000",
              "ten_chuong"  =>   "Chương IX THÔNG TIN, GIÁO DỤC, TRUYỀN THÔNG VỀ AN TOÀN THỰC PHẨM",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0cf69ad9-6f29-4ee4-8e16-2c3aa65c3a52"
            ],
            [
              "hash"  =>   "D8D4BBF7-2995-4E2D-81AF-D42AE5DD85F9",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "45001000000000010000",
              "ten_chuong"  =>   "Chương X QUẢN LÝ NHÀ NƯỚC VỀ AN TOÀN THỰC PHẨM",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0cf69ad9-6f29-4ee4-8e16-2c3aa65c3a52"
            ],
            [
              "hash"  =>   "472E7559-6B39-4A57-B605-DAA747687F06",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "45001000000000011000",
              "ten_chuong"  =>   "Chương XI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0cf69ad9-6f29-4ee4-8e16-2c3aa65c3a52"
            ],
            [
              "hash"  =>   "7D9DEE67-4279-45C1-81CC-494A867D73D8",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "45002000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "e78855bc-bfb3-4c1f-8582-168945065e04"
            ],
            [
              "hash"  =>   "A51DD8D7-A398-4C1D-8BC0-F990F6619071",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "45002000000000002000",
              "ten_chuong"  =>   "Chương II VỆ SINH TRONG SINH HOẠT VÀ LAO ĐỘNG, VỆ SINH CÔNG CỘNG, PHÒNG VÀ CHỐNG DỊCH BỆNH",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "e78855bc-bfb3-4c1f-8582-168945065e04"
            ],
            [
              "hash"  =>   "C8DE9543-F447-439D-B30D-92BC61ED0D19",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "45002000000000003000",
              "ten_chuong"  =>   "Chương III THỂ DỤC THỂ THAO, ĐIỀU DƯỠNG VÀ PHỤC HỒI CHỨC NĂNG ",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "e78855bc-bfb3-4c1f-8582-168945065e04"
            ],
            [
              "hash"  =>   "0FEBA832-07BA-42F2-9980-E43BD9DE0D26",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "45002000000000004000",
              "ten_chuong"  =>   "Chương IV KHÁM BỆNH VÀ CHỮA BỆNH ",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "e78855bc-bfb3-4c1f-8582-168945065e04"
            ],
            [
              "hash"  =>   "807ECB64-11AD-469D-BD76-9D8B0173E88D",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "45002000000000005000",
              "ten_chuong"  =>   "Chương V Y HỌC, DƯỢC HỌC CỔ TRUYỀN DÂN TỘC ",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "e78855bc-bfb3-4c1f-8582-168945065e04"
            ],
            [
              "hash"  =>   "D37756EA-1380-4D59-A3F9-CF59D0519034",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "45002000000000006000",
              "ten_chuong"  =>   "Chương VI THUỐC PHÒNG BỆNH, CHỮA BỆNH",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "e78855bc-bfb3-4c1f-8582-168945065e04"
            ],
            [
              "hash"  =>   "2F7A87FF-EF6E-490F-9FCC-B2AFD1F2B371",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "45002000000000007000",
              "ten_chuong"  =>   "Chương VII BẢO VỆ SỨC KHOẺ NGƯỜI CAO TUỔI, THƯƠNG BINH, BỆNH BINH, NGƯỜI TÀN TẬT VÀ ĐỒNG BÀO CÁC DÂN TỘC THIỂU SỐ",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "e78855bc-bfb3-4c1f-8582-168945065e04"
            ],
            [
              "hash"  =>   "07CD237A-03CB-45D2-BD19-6D31CAB5EA8A",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "45002000000000008000",
              "ten_chuong"  =>   "Chương VIII THỰC HIỆN KẾ HOẠCH HOÁ GIA ĐÌNH VÀ BẢO VỆ SỨC KHOẺ PHỤ NỮ, TRẺ EM",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "e78855bc-bfb3-4c1f-8582-168945065e04"
            ],
            [
              "hash"  =>   "DFC4438B-060D-4F7C-8796-83F7174623C9",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "45002000000000009000",
              "ten_chuong"  =>   "Chương IX THANH TRA NHÀ NƯỚC VỀ Y TẾ ",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "e78855bc-bfb3-4c1f-8582-168945065e04"
            ],
            [
              "hash"  =>   "A704C86E-B8CE-49D1-A6AD-58FB418D73DB",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "45002000000000010000",
              "ten_chuong"  =>   "Chương X KHEN THƯỞNG VÀ XỬ LÝ CÁC VI PHẠM",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "e78855bc-bfb3-4c1f-8582-168945065e04"
            ],
            [
              "hash"  =>   "69DA867F-2BFA-4329-B4F6-1B185E44C2C8",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "45002000000000011000",
              "ten_chuong"  =>   "Chương XI ĐIỀU KHOẢN CUỐI CÙNG ",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "e78855bc-bfb3-4c1f-8582-168945065e04"
            ],
            [
              "hash"  =>   "938D531A-21E3-4A56-8766-4B64798B418B",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "45003000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0b675c1b-8f59-429c-ac5f-cdfed4072cab"
            ],
            [
              "hash"  =>   "CA5CDEFA-7A27-405E-ABA2-BD7CDEB2B19E",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "45003000000000002000",
              "ten_chuong"  =>   "Chương II QUY ĐỊNH VỀ CƠ CHẾ HOẠT ĐỘNG",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0b675c1b-8f59-429c-ac5f-cdfed4072cab"
            ],
            [
              "hash"  =>   "9C5DBC74-032C-433D-ACA0-3FD1C744FB67",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "45003000000000003000",
              "ten_chuong"  =>   "Chương III QUY ĐỊNH VỀ CƠ CHẾ TÀI CHÍNH Mục 1 CƠ CHẾ TÀI CHÍNH ĐỐI VỚI CHI ĐẦU TƯ PHÁT TRIỂN",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0b675c1b-8f59-429c-ac5f-cdfed4072cab"
            ],
            [
              "hash"  =>   "25E7D9E2-9A07-4453-B591-7AA8CB1AF5B5",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "45003000000000004000",
              "ten_chuong"  =>   "Chương IV QUY ĐỊNH VỀ GIÁ DỊCH VỤ KHÁM BỆNH, CHỮA BỆNH",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0b675c1b-8f59-429c-ac5f-cdfed4072cab"
            ],
            [
              "hash"  =>   "F1BB2B79-877B-4567-AFAC-77590E390081",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "45003000000000005000",
              "ten_chuong"  =>   "Chương V CÁC QUY ĐỊNH KHÁC",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0b675c1b-8f59-429c-ac5f-cdfed4072cab"
            ],
            [
              "hash"  =>   "44181F97-C216-454C-84E9-8ED218C5F7F7",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "45003000000000006000",
              "ten_chuong"  =>   "Chương VI TỔ CHỨC THỰC HIỆN",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0b675c1b-8f59-429c-ac5f-cdfed4072cab"
            ],
            [
              "hash"  =>   "DFC67A04-BA66-4E8D-8BA1-B68266564B4A",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "45004000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ÐỊNH CHUNG",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "69c5de18-47ab-4e67-a069-08c27a6e1ba7"
            ],
            [
              "hash"  =>   "AA04E6D7-A09D-41A6-B3F6-C1B9A3BA02D8",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "45004000000000002000",
              "ten_chuong"  =>   "Chương II CHÍNH SÁCH CỦA NHÀ NƯỚC VỀ DƯỢC VÀ PHÁT TRIỂN CÔNG NGHIỆP DƯỢC",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "69c5de18-47ab-4e67-a069-08c27a6e1ba7"
            ],
            [
              "hash"  =>   "1A2F2C2D-E46E-4BEC-A02F-0ADE501CC780",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "45004000000000003000",
              "ten_chuong"  =>   "Chương III HÀNH NGHỀ DƯỢC",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "69c5de18-47ab-4e67-a069-08c27a6e1ba7"
            ],
            [
              "hash"  =>   "6FA75AA3-CF02-4603-A38A-EA1966407D58",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "45004000000000004000",
              "ten_chuong"  =>   "Chương IV KINH DOANH DƯỢC",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "69c5de18-47ab-4e67-a069-08c27a6e1ba7"
            ],
            [
              "hash"  =>   "EDFEA2EB-BB1A-4771-A9C5-FD92F3CA39DA",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "45004000000000005000",
              "ten_chuong"  =>   "Chương V ĐĂNG KÝ, LƯU HÀNH, THU HỒI THUỐC VÀ NGUYÊN LIỆU LÀM THUỐC",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "69c5de18-47ab-4e67-a069-08c27a6e1ba7"
            ],
            [
              "hash"  =>   "5841ABB4-B3CF-4796-A710-309D1E56A0B6",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "45004000000000006000",
              "ten_chuong"  =>   "Chương VI DƯỢC LIỆU VÀ THUỐC CỔ TRUYỀN",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "69c5de18-47ab-4e67-a069-08c27a6e1ba7"
            ],
            [
              "hash"  =>   "DD5D9BD4-0CB3-4965-9D83-6B4612A7AC70",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "45004000000000007000",
              "ten_chuong"  =>   "Chương VII ĐƠN THUỐC VÀ SỬ DỤNG THUỐC",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "69c5de18-47ab-4e67-a069-08c27a6e1ba7"
            ],
            [
              "hash"  =>   "31CDF4DE-9671-4315-902F-2646AAAC02D4",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "45004000000000008000",
              "ten_chuong"  =>   "Chương VIII THÔNG TIN THUỐC, CẢNH GIÁC DƯỢC VÀ QUẢNG CÁO THUỐC",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "69c5de18-47ab-4e67-a069-08c27a6e1ba7"
            ],
            [
              "hash"  =>   "910839D7-3B1A-4304-AE4F-1FFFEF272AB2",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "45004000000000009000",
              "ten_chuong"  =>   "Chương IX DƯỢC LÂM SÀNG",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "69c5de18-47ab-4e67-a069-08c27a6e1ba7"
            ],
            [
              "hash"  =>   "8150735E-557C-457D-8527-732427A99F8D",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "45004000000000010000",
              "ten_chuong"  =>   "Chương X QUẢN LÝ THUỐC TRONG CƠ SỞ KHÁM BỆNH, CHỮA BỆNH",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "69c5de18-47ab-4e67-a069-08c27a6e1ba7"
            ],
            [
              "hash"  =>   "887F9E56-678E-429A-89F9-0B099B530C3D",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "45004000000000011000",
              "ten_chuong"  =>   "Chương XI THỬ THUỐC TRÊN LÂM SÀNG, THỬ TƯƠNG ĐƯƠNG SINH HỌC CỦA THUỐC",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "69c5de18-47ab-4e67-a069-08c27a6e1ba7"
            ],
            [
              "hash"  =>   "0EFC6232-99BD-4BAB-BE58-572EC99ADEEE",
              "so_thu_tu"  =>   12,
              "MAPC"  =>   "45004000000000012000",
              "ten_chuong"  =>   "Chương XII QUY CHUẨN, TIÊU CHUẨN CHẤT LƯỢNG VÀ VIỆC KIỂM NGHIỆM THUỐC, NGUYÊN LIỆU LÀM THUỐC, BAO BÌ TIẾP XÚC TRỰC TIẾP VỚI THUỐC",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "69c5de18-47ab-4e67-a069-08c27a6e1ba7"
            ],
            [
              "hash"  =>   "8BCDCC26-05F8-4E74-9F60-D6AC6424E34C",
              "so_thu_tu"  =>   13,
              "MAPC"  =>   "45004000000000013000",
              "ten_chuong"  =>   "Chương XIII QUẢN LÝ GIÁ THUỐC",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "69c5de18-47ab-4e67-a069-08c27a6e1ba7"
            ],
            [
              "hash"  =>   "F353647A-A941-4C6D-8DD0-952590934819",
              "so_thu_tu"  =>   14,
              "MAPC"  =>   "45004000000000014000",
              "ten_chuong"  =>   "Chương XIV ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "69c5de18-47ab-4e67-a069-08c27a6e1ba7"
            ],
            [
              "hash"  =>   "51A5D1F1-6696-4085-A2C2-002543E523FB",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "45005000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0abd54e4-923f-48a3-9f22-b9672dcf4185"
            ],
            [
              "hash"  =>   "4A7E5667-BD16-45AE-BACE-ED0111450DEA",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "45005000000000002000",
              "ten_chuong"  =>   "Chương II HIẾN, LẤY MÔ, BỘ PHẬN CƠ THỂ Ở NGƯỜI SỐNG",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0abd54e4-923f-48a3-9f22-b9672dcf4185"
            ],
            [
              "hash"  =>   "691EC8C7-9068-457B-B260-DC0B66FEA8BA",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "45005000000000003000",
              "ten_chuong"  =>   "Chương III HIẾN, LẤY MÔ, BỘ PHẬN CƠ THỂ Ở NGƯỜI SAU KHI CHẾT VÀ HIẾN, LẤY XÁC",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0abd54e4-923f-48a3-9f22-b9672dcf4185"
            ],
            [
              "hash"  =>   "177E511E-E6CC-47BA-BEC6-7A7F1A79B888",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "45005000000000004000",
              "ten_chuong"  =>   "Chương IV GHÉP MÔ, BỘ PHẬN CƠ THỂ NGƯỜI",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0abd54e4-923f-48a3-9f22-b9672dcf4185"
            ],
            [
              "hash"  =>   "03B09C25-7EB6-4B99-94CE-9598BDCDFD83",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "45005000000000005000",
              "ten_chuong"  =>   "Chương V NGÂN HÀNG MÔ VÀ TRUNG TÂM ĐIỀU PHỐI QUỐC GIA VỀ GHÉP BỘ PHẬN CƠ THỂ NGƯỜI",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0abd54e4-923f-48a3-9f22-b9672dcf4185"
            ],
            [
              "hash"  =>   "2B5A473A-90C4-4E68-A804-7A8631CC273A",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "45005000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0abd54e4-923f-48a3-9f22-b9672dcf4185"
            ],
            [
              "hash"  =>   "0AADABE0-D8AF-4142-AAFB-0317C267748F",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "45006000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "7e486c5b-907f-4a92-9c0f-1742c0d013fb"
            ],
            [
              "hash"  =>   "9F9D321C-9243-4445-ACFB-DC6CF75DC31D",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "45006000000000002000",
              "ten_chuong"  =>   "Chương II QUYỀN VÀ NGHĨA VỤ CỦA NGƯỜI BỆNH",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "7e486c5b-907f-4a92-9c0f-1742c0d013fb"
            ],
            [
              "hash"  =>   "7CD28DC5-ABB1-4CED-BC7B-5F8C7B113E99",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "45006000000000003000",
              "ten_chuong"  =>   "Chương III NGƯỜI HÀNH NGHỀ KHÁM BỆNH, CHỮA BỆNH",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "7e486c5b-907f-4a92-9c0f-1742c0d013fb"
            ],
            [
              "hash"  =>   "FFDE63B1-B23E-44B9-A524-A3FE4C1CAFFA",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "45006000000000004000",
              "ten_chuong"  =>   "Chương IV CƠ SỞ KHÁM BỆNH, CHỮA BỆNH",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "7e486c5b-907f-4a92-9c0f-1742c0d013fb"
            ],
            [
              "hash"  =>   "FDF20487-AD0A-4D84-A98E-A95185D4C038",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "45006000000000005000",
              "ten_chuong"  =>   "Chương V CÁC QUY ĐỊNH CHUYÊN MÔN KỸ THUẬT TRONG KHÁM BỆNH, CHỮA BỆNH",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "7e486c5b-907f-4a92-9c0f-1742c0d013fb"
            ],
            [
              "hash"  =>   "D16AF30E-AD5C-44B3-919F-184F6DEC8F95",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "45006000000000006000",
              "ten_chuong"  =>   "Chương VI ÁP DỤNG KỸ THUẬT, PHƯƠNG PHÁP MỚI TRONG KHÁM BỆNH, CHỮA BỆNH",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "7e486c5b-907f-4a92-9c0f-1742c0d013fb"
            ],
            [
              "hash"  =>   "487EF0F2-3077-4536-9F6F-D40D60F2BFF6",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "45006000000000007000",
              "ten_chuong"  =>   "Chương VII SAI SÓT CHUYÊN MÔN KỸ THUẬT, GIẢI QUYẾT KHIẾU NẠI, TỐ CÁO VÀ TRANH CHẤP TRONG KHÁM BỆNH, CHỮA BỆNH",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "7e486c5b-907f-4a92-9c0f-1742c0d013fb"
            ],
            [
              "hash"  =>   "5E7226D2-D796-44EA-AD0B-9462C1CCBF04",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "45006000000000008000",
              "ten_chuong"  =>   "Chương VIII CÁC ĐIỀU KIỆN BẢO ĐẢM CÔNG TÁC KHÁM BỆNH, CHỮA BỆNH",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "7e486c5b-907f-4a92-9c0f-1742c0d013fb"
            ],
            [
              "hash"  =>   "4F04D023-493C-4529-8D19-A9322495012B",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "45006000000000009000",
              "ten_chuong"  =>   "Chương IX ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "7e486c5b-907f-4a92-9c0f-1742c0d013fb"
            ],
            [
              "hash"  =>   "B26A9DA3-096A-45CA-9191-28A8E21BC0CD",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "45007000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "a650d744-65b5-4ec6-a985-8a52d5e6a524"
            ],
            [
              "hash"  =>   "7EDF28F4-3C9E-464C-AD96-606C18B427FB",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "45007000000000002000",
              "ten_chuong"  =>   "Chương II PHÒNG BỆNH TRUYỀN NHIỄM",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "a650d744-65b5-4ec6-a985-8a52d5e6a524"
            ],
            [
              "hash"  =>   "D225A7EC-EDD0-47A9-9DC8-D8B8D21EA3B5",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "45007000000000003000",
              "ten_chuong"  =>   "Chương III KIỂM DỊCH Y TẾ BIÊN GIỚI",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "a650d744-65b5-4ec6-a985-8a52d5e6a524"
            ],
            [
              "hash"  =>   "1D10F757-6365-4348-B3C9-D6E79EBC5C7B",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "45007000000000004000",
              "ten_chuong"  =>   "Chương IV CHỐNG DỊCH",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "a650d744-65b5-4ec6-a985-8a52d5e6a524"
            ],
            [
              "hash"  =>   "80109DEB-420E-49B1-A5C0-BE424544ADE7",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "45007000000000005000",
              "ten_chuong"  =>   "Chương V CÁC ĐIỀU KIỆN BẢO ĐẢM ĐỂ PHÒNG, CHỐNG BỆNH TRUYỀN NHIỄM",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "a650d744-65b5-4ec6-a985-8a52d5e6a524"
            ],
            [
              "hash"  =>   "5059CC82-54FF-4B60-AE9A-0B649D770AE2",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "45007000000000006000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "a650d744-65b5-4ec6-a985-8a52d5e6a524"
            ],
            [
              "hash"  =>   "1DB7BC9B-6733-4D1E-B89B-6E062BE82F11",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "45008000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "bfffac09-7a35-4529-8a83-5849b3267f3f"
            ],
            [
              "hash"  =>   "3AB893A7-A5A8-413E-AC15-0917E225EDCB",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "45008000000000002000",
              "ten_chuong"  =>   "Chương II CÁC BIỆN PHÁP XÃ HỘI TRONG PHÒNG, CHỐNG HIV/AIDS",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "bfffac09-7a35-4529-8a83-5849b3267f3f"
            ],
            [
              "hash"  =>   "B55AFF98-AD4F-47C9-AF12-2ECAD3775A1C",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "45008000000000003000",
              "ten_chuong"  =>   "Chương III CÁC BIỆN PHÁP CHUYÊN MÔN KỸ THUẬT Y TẾTRONG PHÒNG, CHỐNG HIV/AIDS",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "bfffac09-7a35-4529-8a83-5849b3267f3f"
            ],
            [
              "hash"  =>   "AF7EE33E-1ABB-4709-9A44-E08A7AA09D1A",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "45008000000000004000",
              "ten_chuong"  =>   "Chương IV ĐIỀU TRỊ, CHĂM SÓC VÀ HỖ TRỢ NGƯỜI NHIỄM HIV",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "bfffac09-7a35-4529-8a83-5849b3267f3f"
            ],
            [
              "hash"  =>   "C0FCF4DD-1A4F-427D-9912-AF75DC595C3C",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "45008000000000005000",
              "ten_chuong"  =>   "Chương V CÁC ĐIỀU KIỆN BẢO ĐẢM THỰC HIỆN BIỆN PHÁP PHÒNG, CHỐNG HIV/AIDS",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "bfffac09-7a35-4529-8a83-5849b3267f3f"
            ],
            [
              "hash"  =>   "D6891E6B-8716-4512-A112-7887AE9EBAE3",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "45008000000000005500",
              "ten_chuong"  =>   "Chương VI QUY ĐỊNH VỀ QUẢN LÝ, SỬ DỤNG KINH PHÍ, CƠ CHẾ QUẢN LÝ TÀI CHÍNH BẢO ĐẢM CHO MỘT SỐ HOẠT ĐỘNG PHÒNG, CHỐNG HIV/AIDS VÀ CHỨC NĂNG, NHIỆM VỤ, QUYỀN HẠN, CƠ CẤU TỔ CHỨC CỦA TRUNG TÂM PHÒNG, CHỐNG HIV/AIDS CẤP TỈNH",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "bfffac09-7a35-4529-8a83-5849b3267f3f"
            ],
            [
              "hash"  =>   "B31C5F1C-8285-4349-934B-EEEC7C5D7DFD",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "45008000000000006000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "bfffac09-7a35-4529-8a83-5849b3267f3f"
            ],
            [
              "hash"  =>   "C57A78E7-2DF6-4C5B-B4D4-FAC67F0BAE8B",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "45009000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "3cd17527-175c-446a-8b09-5c4cbfcb4f1f"
            ],
            [
              "hash"  =>   "8023D33D-8FC1-4738-AE9D-CABDE5F2A00F",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "45009000000000002000",
              "ten_chuong"  =>   "Chương II CÁC BIỆN PHÁP GIẢM NHU CẦU SỬ DỤNG THUỐC LÁ",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "3cd17527-175c-446a-8b09-5c4cbfcb4f1f"
            ],
            [
              "hash"  =>   "C289ED6C-6013-4888-8401-8527F0FC09BC",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "45009000000000003000",
              "ten_chuong"  =>   "Chương III CÁC BIỆN PHÁP KIỂM SOÁT NGUỒN CUNG CẤP THUỐC LÁ",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "3cd17527-175c-446a-8b09-5c4cbfcb4f1f"
            ],
            [
              "hash"  =>   "1DCCEBE4-1616-4E8B-B3A7-BFA785039EF4",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "45009000000000004000",
              "ten_chuong"  =>   "Chương IV CÁC ĐIỀU KIỆN BẢO ĐẢM ĐỂ PHÒNG, CHỐNG TÁC HẠI CỦA THUỐC LÁ",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "3cd17527-175c-446a-8b09-5c4cbfcb4f1f"
            ],
            [
              "hash"  =>   "BE32A513-9E2C-4ECC-BFBC-06A764511BF3",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "45009000000000004500",
              "ten_chuong"  =>   "Chương V. MỘT SỐ QUY ĐỊNH QUẢN LÝ VÀ SỬ DỤNG KINH PHÍ TỪ NGÂN SÁCH NHÀ NƯỚC THỰC HIỆN CÔNG TÁC PHÒNG, CHỐNG TÁC HẠI CỦA THUỐC LÁ",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "3cd17527-175c-446a-8b09-5c4cbfcb4f1f"
            ],
            [
              "hash"  =>   "DC207633-1CB1-4D18-A6B8-9869B526B8D1",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "45009000000000005000",
              "ten_chuong"  =>   "Chương VI ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "3cd17527-175c-446a-8b09-5c4cbfcb4f1f"
            ],
            [
              "hash"  =>   "FD343538-11B2-4661-8B47-60FB16F1D8EE",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "45010000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "f807bad9-3b81-41c5-bbc1-b4ab37a89431"
            ],
            [
              "hash"  =>   "8264FCB1-DD21-4328-90F9-FDCE7E72310B",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "45010000000000002000",
              "ten_chuong"  =>   "Chương II ĐIỀU KIỆN SẢN XUẤT MỸ PHẨM",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "f807bad9-3b81-41c5-bbc1-b4ab37a89431"
            ],
            [
              "hash"  =>   "E07EDA8C-F04F-4F06-A9CF-6934C36CCFDA",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "45010000000000003000",
              "ten_chuong"  =>   "Chương III THẨM QUYỀN, HỒ SƠ, THỦ TỤC CẤP GIẤY CHỨNG NHẬN ĐỦ ĐIỀU KIỆN SẢN XUẤT MỸ PHẨM",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "f807bad9-3b81-41c5-bbc1-b4ab37a89431"
            ],
            [
              "hash"  =>   "C9415D68-5675-4FE8-B902-DABEAF6FB5B5",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "45010000000000003500",
              "ten_chuong"  =>   "Chương IV QUẢN LÝ MỸ PHẨM",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "f807bad9-3b81-41c5-bbc1-b4ab37a89431"
            ],
            [
              "hash"  =>   "368CFEF8-CA95-4968-B264-81D17EBE8899",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "45010000000000004000",
              "ten_chuong"  =>   "Chương V ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "f807bad9-3b81-41c5-bbc1-b4ab37a89431"
            ],
            [
              "hash"  =>   "3AFCCD5D-BAF7-425A-8B7F-51EF509BED58",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "45011000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "e50cbcc9-5eb2-4a22-b6c4-2f08f2811fdb"
            ],
            [
              "hash"  =>   "D0899458-C242-4A22-9934-6C108AA7F13B",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "45011000000000002000",
              "ten_chuong"  =>   "Chương II BIỆN PHÁP GIẢM MỨC TIÊU THỤ RƯỢU, BIA",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "e50cbcc9-5eb2-4a22-b6c4-2f08f2811fdb"
            ],
            [
              "hash"  =>   "49680157-6FFF-4D18-BB1D-8A0E23A85F70",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "45011000000000003000",
              "ten_chuong"  =>   "Chương III BIỆN PHÁP QUẢN LÝ VIỆC CUNG CẤP RƯỢU, BIA",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "e50cbcc9-5eb2-4a22-b6c4-2f08f2811fdb"
            ],
            [
              "hash"  =>   "CEC68624-CEF5-4DE9-B377-FBB6DAEFAEC1",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "45011000000000004000",
              "ten_chuong"  =>   "Chương IV BIỆN PHÁP GIẢM TÁC HẠI CỦA RƯỢU, BIA",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "e50cbcc9-5eb2-4a22-b6c4-2f08f2811fdb"
            ],
            [
              "hash"  =>   "BF73C2E7-22BD-4CD1-95BD-E70CCCF1FDB5",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "45011000000000005000",
              "ten_chuong"  =>   "Chương V ĐIỀU KIỆN BẢO ĐẢM CHO HOẠT ĐỘNG PHÒNG, CHỐNG TÁC HẠI CỦA RƯỢU, BIA",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "e50cbcc9-5eb2-4a22-b6c4-2f08f2811fdb"
            ],
            [
              "hash"  =>   "400BF707-6A53-42C8-8BB0-AF7CC9077B22",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "45011000000000006000",
              "ten_chuong"  =>   "Chương VI QUẢN LÝ NHÀ NƯỚC VÀ TRÁCH NHIỆM CỦA CƠ QUAN, TỔ CHỨC, CÁ NHÂN TRONG PHÒNG, CHỐNG TÁC HẠI CỦA RƯỢU, BIA",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "e50cbcc9-5eb2-4a22-b6c4-2f08f2811fdb"
            ],
            [
              "hash"  =>   "9FB14C85-6F3C-471F-8CF4-B1D8BE3AAD62",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "45011000000000007000",
              "ten_chuong"  =>   "Chương VII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "e50cbcc9-5eb2-4a22-b6c4-2f08f2811fdb"
            ],
            [
              "hash"  =>   "156D70E3-87E9-434A-BD8B-03D783AF3D16",
              "so_thu_tu"  =>   1,
              "MAPC"  =>   "45012000000000001000",
              "ten_chuong"  =>   "Chương I NHỮNG QUY ĐỊNH CHUNG",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0cf4f78c-b5f8-4618-8803-41a226c2ab84"
            ],
            [
              "hash"  =>   "F01D9D2B-C07A-4AAF-BCDC-010D6A5E3F40",
              "so_thu_tu"  =>   2,
              "MAPC"  =>   "45012000000000002000",
              "ten_chuong"  =>   "Chương II PHÂN LOẠI TRANG THIẾT BỊ Y TẾ",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0cf4f78c-b5f8-4618-8803-41a226c2ab84"
            ],
            [
              "hash"  =>   "66B57F26-C6F5-4E2E-B4CB-338C990E1A24",
              "so_thu_tu"  =>   3,
              "MAPC"  =>   "45012000000000003000",
              "ten_chuong"  =>   "Chương III SẢN XUẤT TRANG THIẾT BỊ Y TẾ",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0cf4f78c-b5f8-4618-8803-41a226c2ab84"
            ],
            [
              "hash"  =>   "4CBEFBFA-E100-4181-A996-5E379C5B3EA2",
              "so_thu_tu"  =>   4,
              "MAPC"  =>   "45012000000000004000",
              "ten_chuong"  =>   "Chương IV NGHIÊN CỨU LÂM SÀNG TRANG THIẾT BỊ Y TẾ",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0cf4f78c-b5f8-4618-8803-41a226c2ab84"
            ],
            [
              "hash"  =>   "F9E9BFBC-C69F-467C-B0BF-72B1DE4B847B",
              "so_thu_tu"  =>   5,
              "MAPC"  =>   "45012000000000005000",
              "ten_chuong"  =>   "Chương V LƯU HÀNH TRANG THIẾT BỊ Y TẾ",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0cf4f78c-b5f8-4618-8803-41a226c2ab84"
            ],
            [
              "hash"  =>   "14642279-6DC8-41F0-8782-42FE0677AAFB",
              "so_thu_tu"  =>   6,
              "MAPC"  =>   "45012000000000006000",
              "ten_chuong"  =>   "Chương VI QUẢN LÝ MUA BÁN TRANG THIẾT BỊ Y TẾ",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0cf4f78c-b5f8-4618-8803-41a226c2ab84"
            ],
            [
              "hash"  =>   "E7BA7198-99CD-4C2F-8A01-0A77452C5FE6",
              "so_thu_tu"  =>   7,
              "MAPC"  =>   "45012000000000007000",
              "ten_chuong"  =>   "Chương VII DỊCH VỤ TRANG THIẾT BỊ Y TẾ",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0cf4f78c-b5f8-4618-8803-41a226c2ab84"
            ],
            [
              "hash"  =>   "8F9B600F-EB83-4900-86C7-FE43B430E1CE",
              "so_thu_tu"  =>   8,
              "MAPC"  =>   "45012000000000008000",
              "ten_chuong"  =>   "Chương VIII QUẢN LÝ NGUYÊN LIỆU SẢN XUẤT TRANG THIẾT BỊ Y TẾ, CHẤT NGOẠI KIỂM CHỨA CHẤT MA TÚY VÀ TIỀN CHẤT",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0cf4f78c-b5f8-4618-8803-41a226c2ab84"
            ],
            [
              "hash"  =>   "010248CA-B2EE-4314-9264-1A35F45C5758",
              "so_thu_tu"  =>   9,
              "MAPC"  =>   "45012000000000009000",
              "ten_chuong"  =>   "Chương IX THÔNG TIN TRANG THIẾT BỊ Y TẾ",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0cf4f78c-b5f8-4618-8803-41a226c2ab84"
            ],
            [
              "hash"  =>   "D4516B7B-1141-4E36-8F2E-A1C57A17CF88",
              "so_thu_tu"  =>   10,
              "MAPC"  =>   "45012000000000010000",
              "ten_chuong"  =>   "Chương X QUẢN LÝ, SỬ DỤNG TRANG THIẾT BỊ Y TẾ TẠI CÁC CƠ SỞ Y TẾ",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0cf4f78c-b5f8-4618-8803-41a226c2ab84"
            ],
            [
              "hash"  =>   "8833D814-C5D5-4D46-8C00-7B83E30C1411",
              "so_thu_tu"  =>   11,
              "MAPC"  =>   "45012000000000011000",
              "ten_chuong"  =>   "Chương XI CÔNG BỐ, ĐĂNG KÝ TRỰC TUYẾN",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0cf4f78c-b5f8-4618-8803-41a226c2ab84"
            ],
            [
              "hash"  =>   "C951AFEA-DF55-4063-A6C8-C43BE1691237",
              "so_thu_tu"  =>   12,
              "MAPC"  =>   "45012000000000012000",
              "ten_chuong"  =>   "Chương XII TỔ CHỨC THỰC HIỆN",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0cf4f78c-b5f8-4618-8803-41a226c2ab84"
            ],
            [
              "hash"  =>   "140A9E6A-1365-4BA0-A1B5-EEA17E44DABD",
              "so_thu_tu"  =>   13,
              "MAPC"  =>   "45012000000000013000",
              "ten_chuong"  =>   "Chương XIII ĐIỀU KHOẢN THI HÀNH",
              "hash_chu_de"  =>   "607817d9-0840-4986-b41f-5f3e9ae650c2",
              "hash_de_muc"  =>   "0cf4f78c-b5f8-4618-8803-41a226c2ab84"
            ]
        ];

        DB::table('chuongs')->delete();

        DB::table('chuongs')->truncate();

        $list_de_muc    = DeMuc::all();
        $seeder         = array();
        foreach ($list_chuong as $key => $value) {
            foreach ($list_de_muc as $key_de_muc => $value_de_muc) {
                if($value['hash_de_muc'] == $value_de_muc->hash && $value['hash_chu_de'] == $value_de_muc->hash_chu_de) {
                    $value['id_de_muc']  =  $value_de_muc->id;
                    $value['id_chu_de']  =  $value_de_muc->id_chu_de;
                    array_push($seeder, $value);
                }
            }
        }
        DB::table('chuongs')->insert($seeder);
    }
}
