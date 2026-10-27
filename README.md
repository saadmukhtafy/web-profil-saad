# Panduan Instalasi dan Menjalankan Website Profil Pribadi

## A. Mengunduh Project dari GitHub

1. Buka repository project melalui GitHub.
2. Klik tombol **Code**, kemudian pilih **Download ZIP**.
3. Ekstrak file ZIP yang telah diunduh.
4. Pastikan folder project berisi file `index.php`, `proses_kontak.php`, `project1.html`, `project2.html`, `project3.html`, `kode.sql`, `package.json`, `package-lock.json`, serta folder `foto` dan `foto-project`.
5. Folder `node_modules` memang tidak tersedia karena dependency harus diinstal pada komputer masing-masing.

## B. Persiapan Aplikasi

6. Pastikan komputer sudah memiliki aplikasi berikut:
   - Visual Studio Code sebagai kode editor.
   - Laragon atau XAMPP sebagai web server.
   - Node.js dan npm untuk instalasi dependency.
   - MySQL/MariaDB sebagai database.
   - Browser untuk menjalankan website.
7. Buka terminal atau Command Prompt, kemudian periksa instalasi Node.js dan npm menggunakan perintah:

   `node -v`

   `npm -v`

8. Jika kedua perintah menampilkan nomor versi, berarti Node.js dan npm sudah terinstal.

## C. Instalasi Dependency

9. Buka folder project `UTS-PROJET` menggunakan Visual Studio Code.
10. Buka terminal melalui menu **Terminal → New Terminal**.
11. Pastikan terminal berada pada direktori utama project yang memiliki file `package.json`.
12. Jalankan perintah berikut:

    `npm install`

13. Tunggu hingga proses instalasi selesai.
14. Setelah instalasi berhasil, folder `node_modules` akan terbentuk secara otomatis dan berisi dependency yang dibutuhkan berdasarkan konfigurasi `package.json`.
15. Folder `node_modules` tidak perlu diunggah kembali ke GitHub.

## D. Konfigurasi Web Server dan Database

16. Pindahkan folder project ke direktori `C:\laragon\www` jika menggunakan Laragon atau `C:\xampp\htdocs` jika menggunakan XAMPP.
17. Jalankan aplikasi Laragon atau XAMPP.
18. Aktifkan layanan **Apache dan MySQL/MariaDB**.
19. Buka phpMyAdmin atau aplikasi pengelola database lainnya.
20. Buat database dengan nama `web_profile`, kemudian impor file `kode.sql` apabila berisi struktur database project.
21. Pastikan konfigurasi koneksi database pada file `proses_kontak.php` sesuai dengan pengaturan database pada komputer masing-masing.

## E. Menjalankan Website

22. Buka browser seperti Google Chrome atau Microsoft Edge.
23. Masukkan alamat berikut pada kolom URL:

    `http://localhost/UTS-PROJET/`

24. Tekan **Enter** untuk membuka website.
25. Website akan menampilkan halaman utama melalui file `index.php`.
26. Lakukan pengujian pada halaman profil, portofolio, detail project, navigasi, dan formulir kontak untuk memastikan seluruh fitur berjalan dengan baik.

## Catatan Penting

- Folder `node_modules` tidak disertakan dalam repository GitHub karena berukuran besar dan dapat dibuat kembali melalui `npm install`.
- Setiap pengguna perlu menginstal Node.js dan menjalankan `npm install` pada komputer masing-masing apabila project menggunakan dependency npm.
- File `package.json` dan `package-lock.json` harus tetap disertakan dalam repository.
- Website menggunakan PHP dan MySQL/MariaDB sehingga membutuhkan web server untuk menjalankan fitur backend.
- GitHub digunakan untuk menyimpan dan membagikan source code, sedangkan website dijalankan melalui server lokal pada komputer masing-masing.
