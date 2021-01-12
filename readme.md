## OW to DEPLOYMENT

1. Clone PROJECT
2. Menjalankan composer install
3. Duplicate file dan ganti .env.example file menjadi .env
4. Database di file .env
    -  DB_CONNECTION=mysql
    -  DB_HOST=127.0.0.1
    -  DB_PORT=3306
    -  DB_DATABASE=dbmajoo
    -  DB_USERNAME=root
    -  DB_PASSWORD=
5. Email Verification di .env (bisa menggunakan akun mailtrap pribadi)
   -  MAIL_MAILER=smtp
   -  MAIL_HOST=smtp.mailtrap.io
   -  MAIL_PORT=2525
   -  MAIL_USERNAME=f4be48b0d3485c
   -  MAIL_PASSWORD=41a7a3977db118
   -  MAIL_ENCRYPTION=tls
6. Menjalankan php artisan key:generate
7. Menjalankan php artisan migrate membuat tabel pada database
8. Menjalankan php artisan db:seed mengisi data users dan products pada database
9. Menjalankan php artisan serve memulai
10. Untuk login user menggunakan
-  email : user@gmail.com 
-  password : user12345
11. Untuk login Admin pergi ke laman http://127.0.0.1:8000/admin dan menggunakan
-  email : admin@gmail.com
-  password : admin12345
