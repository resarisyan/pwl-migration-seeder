<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Cara Penggunaan

1. `composer install`
2. `cp .env.example .env`
3. `php artisan key:generate`
4. Buat database baru yang namanya sama dengan isi DB_DATABASE yang ada di .env
5. `php artisan migrate`
6. `php artisan db:seed --class=DosenSeeder`
7. `php artisan db:seed --class=MahasiswaSeeder`
8. `php artisan db:seed --class=MatakuliahSeeder`
9. `php artisan db:seed --class=KrsSeeder`
10. `php artisan db:seed --class=JadwalSeeder`
