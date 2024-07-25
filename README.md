
## About Ambon travel
 website Ambon travel adalah website yang di gunakan untuk menginformasikan tentang destinasi wisata, Galeri Wisata, Berita dan peta kepada seluruh masyarakat dan wisatawan yang 
 mencari rekomendasi destinasi wisata di kota ambon.
 
## Tujuan 
  1. menginformasikan tentang wisata di kota ambon
  2. di jadikan bahan pengetahuan baru
  3. memberikan rekomendasi tentang objek wisata
     
## Fitur/Admin(CRUD)
   1. Dashboard
   2. Kategori wisata
   3. Galeri
   4. Berita
   5. Peta

### Fitur/pengunjung
    1. Home
    2. Destinasi
    3. Galeri
    4. Berita
    5. peta
        
## acivitas Admin
![Screenshot (418)](https://github.com/user-attachments/assets/d0a6e65a-d9c5-4878-ae08-5891ac4d8c87)

![Screenshot (417)](https://github.com/user-attachments/assets/b80f18b2-ffb6-488e-8dda-f7cd2af08c63)

## Instalasi

clone project atau download

```bash
  git clone git@github.com:irwantigani/Travel-ambon.git
  cd Travel-ambon
  npm install
  composer install
  cp .env.example .env
```

Buka `.env` dan atur database anda
```bash
  DB_PORT=3306
  DB_DATABASE=laravel
  DB_USERNAME=root
  DB_PASSWORD=
```

Install website
```bash
  php artisan key:generate
  php artisan migrate --seed
```

Jalankan website
```bash
  php artisan serve
```
## Default akun untuk testing

Admin
```bash
  email : irwantigani@gmail.com
  password : 12345678
```

