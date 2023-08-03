## Persyaratan Sistem

Pastikan komputer Anda memenuhi persyaratan sistem berikut sebelum melakukan setup:

-   PHP versi 7.4 atau yang lebih baru
-   Composer
-   MySQL Server
-   Node.js dan npm

## Langkah-langkah Setup

Berikut adalah langkah-langkah untuk melakukan setup proyek Laravel ini:

**Clone Repositori**

`git clone https://github.com/VRLab-ITDRI/webVR-smk`

1. **pindah ke dalam directory**

    - `$ cd PamerKarya`

2. **update composer**

    - `$ composer update`

3. **Setting env**

    - Rename file .env.example

4. **Buat key generate**

    - `$ php artisan key:generate`

5. **migrate database**
    - `$ php artisan migrate`
    - `$ php artisan db:seed (untuk generate user dummy dan kategori)`
6. **meghubungkan tempat penyimpanan gambar**
    - `$ php artisan storage:link`
7. **jalankan aplikasi**
    - `$ php artisan serve`
