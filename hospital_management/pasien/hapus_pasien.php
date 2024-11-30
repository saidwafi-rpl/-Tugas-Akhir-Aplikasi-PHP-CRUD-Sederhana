<<<<<<< HEAD
<?php

session_start();
include("../koneksi.php");

if (isset($_GET['pasien_id'])) {
    $pasien_id = $_GET['pasien_id'];
    $sql = "DELETE FROM pasien WHERE pasien_id=$pasien_id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data pasien berhasil dihapus!";
    } else {
        $_SESSION['notifikasi'] = "Data pasien gagal dihapus";
    }

    header('Location: index.php');
} else {
    die("Akses ditolak...");
}

=======
<?php

session_start();
include("../koneksi.php");

if (isset($_GET['pasien_id'])) {
    $pasien_id = $_GET['pasien_id'];
    $sql = "DELETE FROM pasien WHERE pasien_id=$pasien_id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data pasien berhasil dihapus!";
    } else {
        $_SESSION['notifikasi'] = "Data pasien gagal dihapus";
    }

    header('Location: index.php');
} else {
    die("Akses ditolak...");
}

>>>>>>> afe0478f7fb015f508b4f1079d5633d8f2deffa6
?>