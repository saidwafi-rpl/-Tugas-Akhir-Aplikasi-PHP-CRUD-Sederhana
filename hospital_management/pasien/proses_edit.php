<<<<<<< HEAD
<?php

session_start();
include("../koneksi.php");

if (isset($_POST['simpan'])) {
    $pasien_id = $_POST['pasien_id'];
    $nama = $_POST['nama'];
    $tgl_Lahir = $_POST['tgl_Lahir'];
    $gender = $_POST['gender'];

    $sql = "UPDATE pasien SET
    nama='$nama',
    tgl_Lahir='$tgl_Lahir',
    gender='$gender'
    WHERE pasien_id=$pasien_id";

    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data Pasien berhasil diperbarui!";
    } else {
        $_SESSION['notifikasi'] = "Data Pasien gagal diperbarui!";
    }
    header('Location: index.php');
} else {
    die("Akses ditolak...");
}

=======
<?php

session_start();
include("../koneksi.php");

if (isset($_POST['simpan'])) {
    $pasien_id = $_POST['pasien_id'];
    $nama = $_POST['nama'];
    $tgl_Lahir = $_POST['tgl_Lahir'];
    $gender = $_POST['gender'];

    $sql = "UPDATE pasien SET
    nama='$nama',
    tgl_Lahir='$tgl_Lahir',
    gender='$gender'
    WHERE pasien_id=$pasien_id";

    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data Pasien berhasil diperbarui!";
    } else {
        $_SESSION['notifikasi'] = "Data Pasien gagal diperbarui!";
    }
    header('Location: index.php');
} else {
    die("Akses ditolak...");
}

>>>>>>> afe0478f7fb015f508b4f1079d5633d8f2deffa6
?>