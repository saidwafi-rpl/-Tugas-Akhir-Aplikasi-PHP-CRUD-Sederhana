<?php

session_start(); // Mulai sesi
include("config.php");

// Periksa apakah ada ID yang dikirim melalui URL
if (isset($_GET['id'])) {
    // Ambil ID dari URL
    $id = $_GET['id'];

    // Buat query untuk menghapus data siswa berdasarkan ID
    $sql = "DELETE FROM tb_siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // Simpan pesan notifikasi dalam sesi berdasarkan hasil query
    if ($query) {
        $_SESSION['notifikasi'] = "Data siswa berhasil dihapus!";
    } else {
        $_SESSION['notifikasi'] = "Data siswa gagal dihapus!";
    }

    // Alihkan ke halaman index.php
    header('Location: index.php');
} else {
    // Jika akses langsung tanpa ID, tampilkan pesan error
    die("Akses ditolak");
}

?>