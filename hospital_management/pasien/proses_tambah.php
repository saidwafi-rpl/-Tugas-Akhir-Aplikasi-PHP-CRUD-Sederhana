<?php

session_start();
include("../koneksi.php");

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $tgl_Lahir = $_POST['tgl_Lahir'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO pasien
    (nama, tgl_Lahir, gender)
    VALUES ('$nama','$tgl_Lahir','$gender')";

    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data pasien berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data pasien gagal ditambahkan";
    }

    header('Location: index.php');

} else {
    die("Akses ditolak...");
}

?>