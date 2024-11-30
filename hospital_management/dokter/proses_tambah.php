<<<<<<< HEAD
<?php

session_start();
include("../koneksi.php");

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $spesialisasi = $_POST['spesialisasi'];

    $sql = "INSERT INTO dokter
    (nama,spesialisasi)
    VALUES ('$nama','$spesialisasi')";

    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data dokter berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data dokter gagal ditambahkan";
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
    $nama = $_POST['nama'];
    $spesialisasi = $_POST['spesialisasi'];

    $sql = "INSERT INTO dokter
    (nama,spesialisasi)
    VALUES ('$nama','$spesialisasi')";

    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data dokter berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data dokter gagal ditambahkan";
    }

    header('Location: index.php');

} else {
    die("Akses ditolak...");
}

>>>>>>> afe0478f7fb015f508b4f1079d5633d8f2deffa6
?>