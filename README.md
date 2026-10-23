# Shorum Mobil
Marketplace jual-beli mobil berbasis PHP 8.2, MySQL, MVC native, PDO, dan UI responsif.

## Fitur
- Registrasi/login/logout aman
- Daftar, cari, filter, urutkan, dan detail mobil
- Penjual dapat membuat, mengubah, menghapus, serta menandai iklan terjual
- Upload hingga 5 foto (JPG/PNG/WebP, maks 2 MB per file)
- Favorit, kontak WhatsApp, dashboard, CSRF, prepared statements
- Responsif, keyboard-friendly, dark-light theme

## Menjalankan
1. Salin `.env.example` menjadi `.env`, lalu sesuaikan database.
2. Buat database lalu import `database/schema.sql`.
3. Pastikan folder `public/uploads` dapat ditulis web server.
4. Jalankan: `php -S localhost:8080 -t public public/router.php`
5. Buka `http://localhost:8080`.

## Akun demo
Password seluruh akun demo: `password`
- budi@example.com
- sari@example.com

> Untuk produksi: arahkan document root ke `public`, gunakan HTTPS, matikan APP_DEBUG, batasi izin upload, dan simpan rahasia di environment server.
