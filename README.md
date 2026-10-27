# Panduan Instalasi dan Menjalankan Website Profil Pribadi

Panduan ini ditujukan bagi pengguna yang ingin mengunduh dan menjalankan project website profil pribadi dari GitHub pada komputer masing-masing.

## A. Mengunduh Project dari GitHub

1. Buka repository project melalui GitHub.
2. Klik tombol **Code → Download ZIP**.
3. Ekstrak file ZIP yang telah diunduh.
4. Pastikan folder project berisi file `index.php`, `proses_kontak.php`, `project1.html`, `project2.html`, `project3.html`, `kode.sql`, `package.json`, `package-lock.json`, serta folder `foto` dan `foto-project`.
5. Folder `node_modules` tidak disertakan karena dependency akan diinstal sendiri pada komputer masing-masing.

## B. Persiapan Aplikasi

6. Pastikan komputer sudah memiliki aplikasi berikut:
   - Visual Studio Code.
   - Laragon atau XAMPP.
   - Node.js dan npm.
   - MySQL atau MariaDB.
   - DBeaver, phpMyAdmin, atau MySQL Workbench.
   - Browser seperti Google Chrome.

7. Buka terminal atau Command Prompt, kemudian periksa instalasi Node.js dan npm:

   `node -v`

   `npm -v`

8. Jika muncul nomor versi, berarti Node.js dan npm sudah berhasil terinstal.

## C. Instalasi Dependency Node.js

9. Buka folder project `UTS-PROJET` menggunakan Visual Studio Code.
10. Pilih menu **Terminal → New Terminal**.
11. Pastikan terminal berada pada direktori project yang memiliki file `package.json`.
12. Jalankan perintah:

    `npm install`

13. Tunggu hingga proses instalasi selesai.
14. Folder `node_modules` akan dibuat secara otomatis berdasarkan dependency yang tercantum pada `package.json`.
15. Folder tersebut tidak perlu diunggah ke GitHub.

## D. Konfigurasi Web Server

16. Pindahkan folder `UTS-PROJET` ke direktori berikut:

    **Laragon:** `C:\laragon\www\UTS-PROJET`

    **XAMPP:** `C:\xampp\htdocs\UTS-PROJET`

17. Buka Laragon atau XAMPP.
18. Jalankan layanan **Apache dan MySQL/MariaDB**.
19. Pastikan kedua layanan berjalan dengan baik sebelum melanjutkan konfigurasi database.

## E. Mengimpor File Database SQL

File `kode.sql` digunakan untuk memindahkan struktur dan data database project ke komputer lain, sesuai isi file SQL tersebut.

Pengguna dapat memilih salah satu aplikasi berikut.

### Pilihan 1 — Menggunakan DBeaver

20. Buka aplikasi DBeaver.
21. Buat koneksi database MySQL/MariaDB dengan memilih **New Database Connection**.
22. Pilih MySQL atau MariaDB sesuai server yang digunakan.
23. Masukkan konfigurasi koneksi, misalnya:
    - Host: `localhost`
    - Port: `3306`
    - Username: `root`
    - Password: sesuai konfigurasi MySQL masing-masing.

24. Klik **Test Connection**, kemudian **Finish** jika koneksi berhasil.
25. Buat database baru bernama `web_profile` apabila belum tersedia.
26. Klik kanan koneksi database, kemudian pilih **SQL Editor → Open SQL Script**, atau buka file `kode.sql` melalui menu **File → Open File**.
27. Pilih file `kode.sql` yang berada dalam folder project.
28. Pastikan database aktif atau target eksekusi adalah `web_profile`.
29. Jalankan seluruh skrip SQL menggunakan fitur **Execute SQL Script** (biasanya `Alt + X`).
30. Tunggu hingga proses selesai, kemudian lakukan **Refresh** pada database.
31. Periksa apakah tabel yang diperlukan sudah berhasil dibuat.

### Pilihan 2 — Menggunakan phpMyAdmin

32. Buka browser dan akses:

    `http://localhost/phpmyadmin`

33. Login jika diperlukan.
34. Klik **New**, kemudian buat database bernama `web_profile`.
35. Pilih database `web_profile`.
36. Klik menu **Import**.
37. Pilih **Choose File**, kemudian cari file `kode.sql` pada folder project.
38. Pastikan format file adalah SQL.
39. Klik tombol **Import** atau **Go** untuk menjalankan proses.
40. Tunggu hingga muncul pemberitahuan bahwa proses impor berhasil.
41. Periksa tabel database yang telah dibuat.

### Pilihan 3 — Menggunakan MySQL Workbench

42. Buka MySQL Workbench dan hubungkan ke server MySQL lokal.
43. Buat schema baru bernama `web_profile` jika belum tersedia.
44. Pilih menu **File → Open SQL Script**, kemudian buka file `kode.sql`.
45. Pastikan schema `web_profile` menjadi database aktif.
46. Jalankan seluruh skrip menggunakan tombol **Execute**.
47. Tunggu hingga proses selesai.
48. Refresh bagian **Schemas** untuk memastikan tabel berhasil dibuat.

**Catatan:** Ketiga pilihan di atas merupakan alternatif. Pengguna cukup menggunakan satu aplikasi pengelola database. Jika file SQL sudah berisi perintah pembuatan atau pemilihan database, periksa nama database di dalam skrip agar tidak terjadi kesalahan saat impor.

## F. Menyesuaikan Koneksi Database PHP

49. Buka file `proses_kontak.php` menggunakan Visual Studio Code.
50. Periksa bagian konfigurasi koneksi database, contohnya:

    ```php
    $koneksi = mysqli_connect(
        "localhost",
        "root",
        "",
        "web_profile"
    );
    ```

51. Sesuaikan hostname, username, password, dan nama database dengan pengaturan MySQL/MariaDB pada komputer masing-masing.
52. Simpan perubahan file.
53. Pastikan database memiliki tabel yang diperlukan oleh formulir kontak.

## G. Menjalankan Website

54. Pastikan layanan Apache dan MySQL/MariaDB masih berjalan.
55. Buka browser.
56. Masukkan alamat berikut:

    `http://localhost/UTS-PROJET/`

57. Tekan **Enter** untuk membuka website.
58. Halaman utama akan dijalankan melalui file `index.php`.
59. Pengguna dapat mengakses halaman profil, portofolio, detail project, dan formulir kontak.
60. Uji formulir kontak dengan mengirimkan data percobaan.
61. Buka DBeaver, phpMyAdmin, atau MySQL Workbench untuk memastikan data berhasil tersimpan ke database.

## H. Catatan Penting

- Folder `node_modules` tidak disertakan dalam repository GitHub.
- Setiap pengguna perlu menjalankan `npm install` pada komputer masing-masing jika dependency npm diperlukan.
- File `package.json` dan `package-lock.json` harus tetap tersedia.
- File `kode.sql` digunakan untuk mempersiapkan database lokal.
- Pengguna cukup memilih salah satu aplikasi untuk mengimpor database.
- Konfigurasi koneksi database harus disesuaikan dengan komputer masing-masing.
- Website memerlukan server PHP dan MySQL/MariaDB agar fitur backend dapat berjalan.
- GitHub digunakan untuk menyimpan source code, bukan menjalankan PHP dan database secara langsung.
