<?php

session_start();
include("../koneksi.php");

if (isset($_POST['simpan'])) {
    $dokter_id = $_POST['dokter_id'];
    $nama = $_POST['nama'];
    $spesialisasi = $_POST['spesialisasi'];

    $sql = "UPDATE dokter SET
    nama='$nama',
    spesialisasi='$spesialisasi'
    WHERE dokter_id=$dokter_id";

    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data dokter berhasil diperbarui!";
    } else {
        $_SESSION['notifikasi'] = "Data dokter gagal diperbarui!";
    }
    header('Location: index.php');
} else {
    die("Akses ditolak...");
}

?>