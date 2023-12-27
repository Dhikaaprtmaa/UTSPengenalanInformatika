## 1.1 Latar Belakang

Pada zaman sekarang semua kalangan banyak yang mementingkan fashion, dan banyak juga orang orang yang masih bingung dalam pemilihan styling outfit
Mempermudah para costumer untuk melihat produk fashion yang di inginkan melalui website katalog produk ini 
## 1.2. Deksripsi Teknologi Informasi

Website katalog produk adalah sebuah situs web yang menampilkan daftar produk yang dijual oleh suatu perusahaan atau toko online. Katalog produk biasanya menyertakan informasi seperti deskripsi produk, harga, gambar, dan fitur-fitur lain yang berguna bagi pelanggan.

## 1.3. Branding

Logo:
Desain logo yang modern,dikombinasikan dengan unsur fashion seperti garis-garis atau elemen abstrak yang mencerminkan kechic-an.

Warna:
Pilih palet warna yang kontemporer dan stylish. Misalnya, kombinasi hitam, putih, hijau tua dan abu-abu dapat memberikan kesan urban dan elegan.

Slogan:
"City Style, Urban Elegance" atau "Where Urban Meets Chic" adalah contoh slogan yang dapat mencerminkan perpaduan gaya perkotaan dengan keanggunan.

Tagline:
Buat tagline yang singkat dan menarik seperti "Step into the UrbanChic Lifestyle" atau "Elevate Your Style, Embrace the City."

Media Sosial:
Aktif di platform media sosial dengan konten yang memamerkan gaya perkotaan yang trendi. Gunakan hashtag seperti #UrbanChicStyle untuk meningkatkan visibilitas.

Pengemasan:
Desain kemasan yang eksklusif dan modern untuk meningkatkan kesan produk. Pastikan bahwa pengalaman membuka paket mencerminkan kechic-an yang dijanjikan.

Inovasi Produk:
Tawarkan produk-produk dengan desain yang modern dan sesuai dengan tren perkotaan. Kolaborasi dengan desainer lokal atau influencer fashion dapat menambah nilai pada brand.

Kenyamanan Pelanggan:
Fokus pada pelayanan pelanggan yang baik dan berikan pengalaman belanja yang nyaman. Pertimbangkan program loyalitas atau diskon khusus untuk pelanggan setia.

Acara atau Kolaborasi:
Seringkali mengadakan acara atau kolaborasi dengan komunitas perkotaan atau influencer yang memiliki gaya yang sejalan dengan brand UrbanChic.

Kampanye Visual:
Gunakan kampanye visual yang mempromosikan produk dengan gaya yang edgy dan modern. Video atau foto sesi pemotretan dengan latar perkotaan dapat memberikan kesan yang kuat.



## 2. User Story

Sebagai | Saya bisa | Sehingga | Prioritas
---|---|---|---
Admin |Mempunyai akun sendiri | Dapat login ke laman admin | ⭐⭐⭐
Admin | Masuk ke laman admin | Dapat mengatur data | ⭐⭐⭐⭐
Admin | Mengatur data | Dapat mengatur data produk | ⭐⭐⭐
Admin | Mengatur data | Dapat menambahkan dan menghapus data kategori | ⭐⭐⭐
Admin | Mengatur data | Dapat menambahkan dan menghapus data produk | ⭐⭐⭐
Admin | Menambahkan detail produk | Dapat menambahkan jumlah produk,gambar produk dan ketersediaan produk | ⭐⭐
Admin | Diadakan contact us | Pengguna dapat memesan melalui laman contact us admin | ⭐⭐⭐⭐
Pengguna | Masuk ke laman utama pengguna | Dapat melihat katalog sebuah produk | ⭐⭐⭐⭐⭐
Pengguna | Melihat kategori produk | Dapat melihat produk per kategori contohnya hanya baju saja atau hanya celana saja  | ⭐⭐⭐
Pengguna | Mencari produk yang diinginkan | Dapat melihat produk yang di inginkan saja  | ⭐⭐⭐
Pengguna | Melihat detail produk | Dapat melihat produk yang di inginkan agar lebih jelas dan detail | ⭐⭐⭐
Pengguna | Melihat ketersedian produk | Dapat melihat ketersediaan produk yang di inginkan agar bisa memesan produk  | ⭐⭐⭐⭐
Pengguna | Melihat deskripsi produk | Dapat membaca dan melihat produk lebih detail mulai dari bahan yang di gunakan, ukuran, dan warna produk yang tersedia  | ⭐⭐⭐
Pengguna | Melihat laman about us | Dapat melihat tentang toko yang di kunjungi  | ⭐⭐
Pengguna | Melihat contact toko | Dapat memesan melalui contact toko tersebut  | ⭐⭐⭐⭐
Pengguna | Memasuki laman see more | Dapat melihat semua kategori dan produk dengan lebih lengkap | ⭐⭐⭐⭐






## 3. Struktur Data

```mermaid
flowchart TD;
    A[Toko] --> B[Kategori];
    B --> C[id kategori];
    B --> D[Nama kategori];
    B --> E[Jumlah kategori];
    B --> F[Produk];
    F --> G[Nama Produk];
    F --> H[Harga Produk];
    F --> I[Detail produk];
    F --> J[Harga Produk];
    F --> K[Jumlah Produk];  
```

## 4. Arsitektur Sistem

```mermaid
flowchart LR;
    A[Home] --> B[Kategori];
    B --> C[Produk];
    C --> D[Detail Produk];
    D --> E[Memesan];
    E --> F[Contact Us];
    F --> G[Instagram];
    F --> H[Facebook];
    F --> I[Twitter];
    F --> J[Whatsapp];
```

## 5. Teknologi, Library, dan Framework

Menggunakan database dari PhPmyAdmin,mysql,MariaDB
Dibuat menggunakan HTML,css,javascript
Menggunakan tambahan seperti bootstrap dan fontawesome untuk menambahkan beberapa fitur
 Serta Menggunakan text editor VS Code

## 6. Desain User Experience dan User Interface

Halaman login admin![Toko Online _ Home - Google Chrome 20_12_2023 17_24_55](https://github.com/Dhikaaprtmaa/UTSPengenalanInformatika/assets/144656642/a6d579c9-6f61-40c8-8ac8-e5f3ef56b7d0)

Halaman home admin

![Toko Online _ Home - Google Chrome 20_12_2023 17_25_02](https://github.com/Dhikaaprtmaa/UTSPengenalanInformatika/assets/144656642/d570ae72-5e0d-4b4b-bc6d-f814aeff638b)

Halaman Kategori admin

![Toko Online _ Home - Google Chrome 20_12_2023 17_25_12](https://github.com/Dhikaaprtmaa/UTSPengenalanInformatika/assets/144656642/c6b95ce4-ddb6-4ff2-9a20-d54cb55ffb6b)

Halaman Produk admin

![Toko Online _ Home - Google Chrome 20_12_2023 17_25_15](https://github.com/Dhikaaprtmaa/UTSPengenalanInformatika/assets/144656642/fd448a05-be6c-4d05-9955-2799c85225a1)

Halaman Home pengguna

![Fashion Textile Craftsman Logo _ BrandCrowd Logo Maker _ BrandCrowd - Google Chrome 20_12_2023 17_24_17](https://github.com/Dhikaaprtmaa/UTSPengenalanInformatika/assets/144656642/923f78d0-f353-4f9e-85db-dbe0dc7b0ae7)

Halaman Produk Pengguna

![Toko Online _ Home - Google Chrome 20_12_2023 17_24_44](https://github.com/Dhikaaprtmaa/UTSPengenalanInformatika/assets/144656642/aebb9e29-e304-4a8e-ac1b-30dfbee8cc57)

Halaman Contact Us

![Toko Online _ Home - Google Chrome 20_12_2023 17_24_35](https://github.com/Dhikaaprtmaa/UTSPengenalanInformatika/assets/144656642/ee333820-59d1-487b-9b4b-00fdf81b9473)


Halaman About Us

![ImgBB — penyimpanan gambar gratis _ unggah gambar - Google Chrome 20_12_2023 17_35_12](https://github.com/Dhikaaprtmaa/UTSPengenalanInformatika/assets/144656642/d8c356c7-2425-442b-844b-1d4458a6541e)

## 7. Demonstrasi Video

POV Admin : (https://drive.google.com/file/d/1rUwPmkgZnkwPZSWDObZx9Gq5u6b2oXss/view?usp=drive_link)

POV User : (https://drive.google.com/file/d/1oELpA8QlKsXy6BrnG8oWA7SFBkqpOdTE/view?usp=drive_link)

## 8. Bagaimana mesin komputasi dan sistem operasi berperan dalam produk teknologi informasimu ?

Link youtube nya di detik jawaban ini

## 9. Bagaimana algoritma, struktur data, dan bahasa pemrograman berperan dalam produk teknologi informasimu ?

Link youtube nya di detik jawaban ini

## 10. Bagaimana metode pengembangan perangkat lunak / Software Development Life Cycle berperan dalam produk teknologi informasimu ?

Link youtube nya di detik jawaban ini

## 11. Bagaimana database / sistem basis data berperan dalam produk teknologi informasimu ?

Link youtube nya di detik jawaban ini
