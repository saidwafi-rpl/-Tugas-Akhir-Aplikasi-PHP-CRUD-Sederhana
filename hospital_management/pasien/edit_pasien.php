<<<<<<< HEAD
<?php

include("../koneksi.php");
$pasien_id = $_GET['pasien_id'];

$query = $db->query("SELECT * FROM pasien WHERE pasien_id = '$pasien_id'");
$pasien = $query->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pasien</title>
</head>
<body>
    <h3>Edit Data Pasien</h3>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="pasien_id" value="<?php echo $pasien['pasien_id']; ?>">
        <table border="0">
            <tr>
                <td>Nama Lengkap</td>
                <td>
                    <input type="text" name="nama" value="<?php echo $pasien ['nama']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>
                    <input type="date" name="tgl_Lahir" value="<?php echo $pasien['tgl_Lahir']; ?>" style="width: 100%">
                </td>
            </tr>
            <tr>
                <td>L/P</td>
                <td>
                    <select name="gender" style="width: 100%" required>
                        <option value="" disabled>Pilih Jenis Kelamin</option>
                        <option value="male" <?php echo ($pasien['gender'] == 'L') ? 'selected' : ''; ?>>L</option>
                        <option value="female" <?php echo ($pasien['gender'] == 'P') ? 'selected' : ''; ?>>P</option>   
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
=======
<?php

include("../koneksi.php");
$pasien_id = $_GET['pasien_id'];

$query = $db->query("SELECT * FROM pasien WHERE pasien_id = '$pasien_id'");
$pasien = $query->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pasien</title>
</head>
<body>
    <h3>Edit Data Pasien</h3>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="pasien_id" value="<?php echo $pasien['pasien_id']; ?>">
        <table border="0">
            <tr>
                <td>Nama Lengkap</td>
                <td>
                    <input type="text" name="nama" value="<?php echo $pasien ['nama']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>
                    <input type="date" name="tgl_Lahir" value="<?php echo $pasien['tgl_Lahir']; ?>" style="width: 100%">
                </td>
            </tr>
            <tr>
                <td>L/P</td>
                <td>
                    <select name="gender" style="width: 100%" required>
                        <option value="" disabled>Pilih Jenis Kelamin</option>
                        <option value="male" <?php echo ($pasien['gender'] == 'L') ? 'selected' : ''; ?>>L</option>
                        <option value="female" <?php echo ($pasien['gender'] == 'P') ? 'selected' : ''; ?>>P</option>   
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
>>>>>>> afe0478f7fb015f508b4f1079d5633d8f2deffa6
</html>