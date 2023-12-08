<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Giới thiệu về Laravel

Laravel là một khung ứng dụng web với cú pháp tinh tế, biểu cảm. Chúng tôi tin rằng sự phát triển phải là một trải nghiệm thú vị và sáng tạo để thực sự thỏa mãn. Laravel loại bỏ những khó khăn trong quá trình phát triển bằng cách giảm bớt các tác vụ phổ biến được sử dụng trong nhiều dự án web, chẳng hạn như:

- [Công cụ định tuyến đơn giản, nhanh chóng](https://laravel.com/docs/routing).
- [Thùng chứa phụ thuộc mạnh mẽ](https://laravel.com/docs/container).
- Nhiều back-end để [lưu trữ phiên](https://laravel.com/docs/session) và [bộ đệm.](https://laravel.com/docs/cache)
- [Cơ sở dữ liệu ORM ](https://laravel.com/docs/eloquent) biểu đạt, trực quan.
- [Di chuyển lược đồ](https://laravel.com/docs/migrations) bất khả tri của cơ sở dữ liệu.
- [Xử lý công việc nền mạnh mẽ.](https://laravel.com/docs/queues).
- [Phát sóng sự kiện theo thời gian thực.](https://laravel.com/docs/broadcasting).

Laravel có thể truy cập, mạnh mẽ và cung cấp các công cụ cần thiết cho các ứng dụng lớn, mạnh mẽ.

## Học Laravel

Laravel có thư viện [tài liệu](https://laravel.com/docs) và video hướng dẫn rộng rãi và kỹ lưỡng nhất trong tất cả các khung ứng dụng web hiện đại, giúp bạn dễ dàng bắt đầu với khung này.

Bạn cũng có thể dùng thử [Laravel Bootcamp](https://bootcamp.laravel.com), nơi bạn sẽ được hướng dẫn xây dựng một ứng dụng Laravel hiện đại từ đầu.

Nếu bạn không muốn đọc, [Laracasts](https://laracasts.com) có thể giúp đỡ. Laracasts chứa hơn 2000 video hướng dẫn về nhiều chủ đề bao gồm Laravel, PHP hiện đại, thử nghiệm đơn vị và JavaScript. Nâng cao kỹ năng của bạn bằng cách tìm hiểu thư viện video toàn diện của chúng tôi.

### Đối tác cao cấp

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**
## Ngôn ngữ sử dụng

🔑 PHP

🔑 Python

🔑 Jquery

🔑 Javascript

🔑 Vuejs

🔑 NodeJs

## Cơ sở dữ liệu

🔑 MySQL
## Thông tin về dự án
Phần mềm hỗ trợ tra cứu thông tin về pháp luật bằng từ khóa, hỗ trợ tra cứu thông tin xử lý bằng giọng nói, chatbot hỗ trợ trả lời những câu hỏi liên quan quan đến pháp luật.


## Chạy dự án
1. Yêu cầu cài đặt môi trường [XAMPP](https://www.apachefriends.org/download.html) 8.1 trở lên.

2. Yêu cầu cài đặt môi trường [nodejs](https://nodejs.org/en) 
3. Chạy lệnh tại CMD

        composer install
	    npm install   

4.  Thay đổi file .env

        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE={yourname_database}
        DB_USERNAME=root
        DB_PASSWORD=
5.  Chạy lệnh sau để tạo bảng dữ liệu

        php artisan migrate

6.  Chạy lệnh sau để import dữ liệu đang có sẵn

        php artisan db:seed

7.  Chạy lệnh sau để bật serve local

        php artisan serve

8.  Chạy lệnh sau để

        php artisan queue:work
9.  Chạy sever node

        cd ServiceJS
        node index.js
10. Dùng postman chạy link (dùng để gọi server node để lấy dữ liệu tiểu mục)

        http://127.0.0.1:3000/get-data
## Sử dụng Chatbot
Hầu hết các mô-đun được viết bằng ngôn ngữ Python phiên bản 3.

Đầu tiên, tạo venv
```sh
python3 -m venv venv
source <venv>/bin/activate
```
Hãy cài đặt thư viện
```sh
pip install -r requirements.txt
```
Bước đầu tiên, huấn luyện mô hình (Từ dữ liệu đầu vào của các câu trả lời, bạn có thể tạo câu hỏi cho các câu trả lời đó):
```sh
python3 index.py
```
Bước tiếp theo, hãy thử sử dụng hàm tĩnh
```sh
python3 main.py --message "Điều 15 của Nghị định số 127/2006/NĐ-CP nói về điều gì?"
```
API của dự án này được xây dựng trên nền tảng FastApi, hãy thử sử dụng nó với API
```sh
uvicorn server:app --reload 
```
Kết quả được hiển thị
```sh
INFO:     Will watch for changes in these directories: 
INFO:     Uvicorn running on http://127.0.0.1:8000 (Press CTRL+C to quit)
INFO:     Started reloader process [462581] using WatchFiles
INFO:     Started server process [462602]
INFO:     Waiting for application startup.
INFO:     Application startup complete.
```
Thông báo này ngụ ý rằng có một API đang lắng nghe trên cổng 8000 trên máy của bạn. Để gọi đây là:
```sh
curl --location --request POST 'http://127.0.0.1:8000/message' \
--header 'Content-Type: application/json' \
--data-raw '{
    "msg": "Điều 15 của Nghị định số 127/2006/NĐ-CP nói về điều gì?"
}'
```
## REST APIs
        https://lawnavigator.dzfullstack.com/api/documentation

## Lawnavigator.dzfullstack
   [Live preview](https://lawnavigator.dzfullstack.com/)
## Giấy phép

Laravel framework là phần mềm nguồn mở được cấp phép theo giấy phép [MIT license](https://opensource.org/licenses/MIT).

Giấy phép từ [ThemeWagon](https://themewagon.com/license/) giao diện nguồn mở được sử dụng để phát triển dự án

Giấy phép từ [AdminLTE](https://adminlte.io/docs/3.0/license.html) giao diện nguồn mở được sử dụng để phát triển dự án

## Author
1.  Lê Thanh Trường
2.  Trần Trung Trực
3.  Nguyễn Ngọc Khánh
## Giao Diện Người Dùng
![san_pham_1](https://github.com/dtu2023dz1/MNM2023/assets/151995348/30040766-a4c6-4134-aa47-952cae198288)
![san_pham2](https://github.com/dtu2023dz1/MNM2023/assets/151995348/2c0a30f9-79bb-49e5-b054-273137a78166)
![san_pham_3](https://github.com/dtu2023dz1/MNM2023/assets/151995348/26e9147f-a01c-44f4-b2cb-fbe8f6435c77)
## Giao Diện Admin
# API Token
![image](https://github.com/dtu2023dz1/MNM2023/assets/151995348/dc80fb9f-e87d-4d67-bb5f-55b09c999a7b)





