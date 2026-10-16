# Joyful Travel

Website agen perjalanan untuk memesan paket wisata internasional ke **Australia**, **Finlandia**, dan **Jepang**. Proyek ini dibuat sebagai proyek UAS pemrograman web (Desember 2024).

<!-- Tambahkan screenshot di sini, misalnya: ![Halaman utama](img/screenshot-home.png) -->

## Fitur

**Pengunjung**
- Registrasi dan login.
- Halaman tiap destinasi berisi itinerary dan dua pilihan paket.
- Pemesanan lewat form modal (nama, paket, tanggal keberangkatan, nomor HP).

**Admin**
- Dashboard riwayat reservasi.
- Pencarian reservasi berdasarkan nama.
- Tambah reservasi, ubah jadwal (reschedule), dan batalkan pesanan.

**Umum**
- Navbar berubah sesuai peran (tamu, pengunjung, admin).
- Halaman About dan Contact.

## Teknologi

- PHP native dengan MySQLi (prepared statement)
- MySQL / MariaDB
- Bootstrap 5, Bootstrap Icons, dan JavaScript

## Keamanan

- Password disimpan sebagai hash (`password_hash` / `password_verify`). Akun lama yang password-nya masih polos otomatis di-upgrade ke hash saat login.
- Semua query yang menerima input user memakai prepared statement.
- Output di-escape untuk mencegah XSS.
- Aksi admin (ubah dan batalkan pesanan) dicek di server, dan pembatalan hanya diterima lewat POST.

## Cara menjalankan (XAMPP)

1. Salin folder ini ke `htdocs/travel1`.
2. Buat database `travel1` di phpMyAdmin, lalu import `travel1.sql`.
3. Sesuaikan koneksi database di baris pertama `functions.php` jika user atau password MySQL Anda berbeda.
4. Buka http://localhost/travel1/.

Akun demo (password `password123`):

| Username | Peran |
|---|---|
| `admin` | admin |
| `fafafufu` | pengunjung |

## Struktur

| File | Fungsi |
|---|---|
| `functions.php` | Koneksi database, query, autentikasi, dan cek role |
| `login.php`, `register.php`, `logout.php` | Autentikasi |
| `index.php`, `index-user.php` | Halaman utama untuk tamu dan pengunjung |
| `rooms-*.php`, `reservasi-*.php` | Halaman destinasi dan form pemesanan |
| `guest.php`, `update.php`, `hapus.php` | Dashboard admin |
| `travel1.sql` | Skema dan data contoh |
