# web-profil-saad
# Website Profil Pribadi

## Deskripsi Project

Website ini dibuat sebagai tugas mata kuliah Pemrograman Web untuk menerapkan pembelajaran pengembangan website menggunakan HTML, CSS, Bootstrap, PHP, dan MySQL.

## Teknologi yang Digunakan

- HTML: Membuat struktur halaman website.
- CSS: Mengatur tampilan dan desain website.
- Bootstrap: Membantu membuat tampilan yang responsif.
- PHP: Memproses data dari formulir kontak.
- Laragon: Menjalankan web server lokal.
- MySQL: Menyimpan data formulir kontak.
- DBeaver: Membantu membuat dan mengelola database MySQL.

## Fitur Website

1. Halaman Home
2. Halaman Profil
3. Halaman Portofolio
4. Sosial Media
5. Formulir Kontak yang terhubung ke database MySQL

## Langkah-Langkah Menjalankan Website

### 1. Menyiapkan Project

Download atau clone repository GitHub, kemudian letakkan folder project di direktori:

`C:\laragon\www\web_profile`

### 2. Menjalankan Laragon

- Buka aplikasi Laragon.
- Klik tombol Start All.
- Pastikan web server dan database MySQL sudah berjalan.

### 3. Menyiapkan Database MySQL

- Buka aplikasi DBeaver.
- Buat koneksi ke database MySQL yang dijalankan melalui Laragon.
- Buat database bernama `web_profile`.
- Buat tabel `kontak` dengan kolom `id`, `nama`, `email`, dan `pesan`.
- Simpan perubahan database.

### 4. Menghubungkan PHP dengan MySQL

- Buka file `koneksi.php` atau file PHP yang menangani formulir kontak.
- Sesuaikan hostname, username, password, dan nama database dengan konfigurasi MySQL pada Laragon.
- Pastikan koneksi berhasil.

### 5. Menjalankan Website

Buka browser dan akses alamat:

`http://localhost/web_profile/`

### 6. Menguji Formulir Kontak

- Buka halaman Kontak.
- Isi nama, email, dan pesan.
- Klik tombol Kirim.
- Buka DBeaver dan periksa tabel `kontak`.
- Pastikan data berhasil tersimpan ke database MySQL.

## Catatan

Website dijalankan melalui server lokal Laragon. Untuk mengakses website secara online dengan fitur PHP dan MySQL, diperlukan hosting yang mendukung PHP dan database MySQL.
