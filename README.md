# Responsi Praktikum Teknologi Cloud Model No. 3

1. Login ke https://katacoda.com
2. Buka playground Ubuntu https://katacoda.com/courses/ubuntu/playground1804
3. Clone repository ini dengan menjalankan perintah :
   - ```git clone https://github.com/HassanFHidayat/hassan-web.git```
4. Masuk ke direktori hassan-web.
   - ```cd /hassan-web```
5. Setelah berada pada direktori hassan-web, ubah permission direktori foto terlebih dahulu. Sehingga ketika website dijalankan dapat menyimpan foto yang diupload. Ukuran maksimal file foto yang bisa diupload adalah 2MB.
   - ```chmod -R 777 foto/```
6. Kemudian build menggunakan docker-compose dan tunggu hingga proses selesai.
   - ```docker-compose up -d```
7. Buka port 8080 pada host 1 untuk melihat website dan port 80 pada host 1 untuk membuka phpmyadmin.
   - Username dan password phpmyadmin :
     - username : root
     - password : 123
8. Pada website yang muncul bisa digunakan untuk menambahkan, mengedit dan menghapus data user.
