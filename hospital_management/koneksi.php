<<<<<<< HEAD
<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "hospital_management";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

=======
<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "hospital_management";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

>>>>>>> afe0478f7fb015f508b4f1079d5633d8f2deffa6
?>