<?php

include("../koneksi.php");
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Hospital Management</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    <ul>
        <li><a href="\hospital_management\dokter\index.php">Data Dokter</a></li>
        <li><a href="\hospital_management\pasien\index.php">Data Pasien</a></li>
    </ul>
    
    <h2>Hospital Management</h2>

    <?php if (isset($_SESSION['notifikasi'])): ?>
        <p><?php echo $_SESSION['notifikasi']; ?></p>

        <?php unset($_SESSION['notifikasi']); ?>
    <?php endif; ?>

    <table>
        <thead>
            <tr align="center">
                <th>#</th>
                <th>Nama Lengkap</th>
                <th>Tanggal Lahir</th>
                <th>L/P</th>
                <th><a href="tambah_pasien.php">Tambah Data</a></th>
            </tr>
        </thead>
        <tbody>
            <?php

            $no = 1;
            $query = $db->query("SELECT * FROM pasien");
            while ($pasien = $query->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $pasien['nama'] ?></td>
                <td><?php echo date("d-m-Y", strtotime($pasien['tgl_Lahir'])); ?></td>
                <td><?php echo $pasien['gender'] ?></td>
                <td align="center">
                    <a href="edit_pasien.php?pasien_id=<?php echo $pasien['pasien_id'] ?>">Edit</a>
                    <a onclick="return confirm('Anda yakin ingin menghapus data?')"
                    href="hapus_pasien.php?pasien_id=<?php echo $pasien['pasien_id'] ?>">Hapus</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>