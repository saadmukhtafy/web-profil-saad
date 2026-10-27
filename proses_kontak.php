<?php

$koneksi = mysqli_connect("localhost", "root", "", "web_profile");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$sql = "INSERT INTO kontak (nama, email, pesan)
        VALUES ('$nama', '$email', '$pesan')";

if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil disimpan!";
    echo '<br><br><a href="index.php">← Kembali</a>';
} else {
    echo "Data gagal disimpan: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);

?>