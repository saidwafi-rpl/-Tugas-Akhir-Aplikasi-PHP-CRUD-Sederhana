<<<<<<< HEAD
<?php

include("../koneksi.php");
$dokter_id = $_GET['dokter_id'];

$query = $db->query("SELECT * FROM dokter WHERE dokter_id = '$dokter_id'");
$dokter = $query->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Dokter</title>
</head>
<body>
    <h3>Edit Data Dokter</h3>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="dokter_id" value="<?php echo $dokter['dokter_id']; ?>">
        <table border="0">
            <tr>
                <td>Nama Dokter</td>
                <td>
                    <input type="text" name="nama" value="<?php echo $dokter['nama']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Spesialisasi</td>
                <td>
                    <select name="spesialisasi" style="width: 100%" required>
                        <option value="" disabled>Pilih Spesialisasi</option>
                        <option value="internis" <?php echo ($dokter['spesialisasi'] == 'internis') ? 'selected' : ''; ?>>Penyakit Dalam (Internis)</option>
                        <option value="surgeon" <?php echo ($dokter['spesialisasi'] == 'surgeon') ? 'selected' : ''; ?>>Bedah (Surgeon)</option>
                        <option value="neurologi" <?php echo ($dokter['spesialisasi'] == 'neurologi') ? 'selected' : ''; ?>>Saraf (Neurologi)</option>
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
$dokter_id = $_GET['dokter_id'];

$query = $db->query("SELECT * FROM dokter WHERE dokter_id = '$dokter_id'");
$dokter = $query->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Dokter</title>
</head>
<body>
    <h3>Edit Data Dokter</h3>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="dokter_id" value="<?php echo $dokter['dokter_id']; ?>">
        <table border="0">
            <tr>
                <td>Nama Dokter</td>
                <td>
                    <input type="text" name="nama" value="<?php echo $dokter['nama']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Spesialisasi</td>
                <td>
                    <select name="spesialisasi" style="width: 100%" required>
                        <option value="" disabled>Pilih Spesialisasi</option>
                        <option value="internis" <?php echo ($dokter['spesialisasi'] == 'internis') ? 'selected' : ''; ?>>Penyakit Dalam (Internis)</option>
                        <option value="surgeon" <?php echo ($dokter['spesialisasi'] == 'surgeon') ? 'selected' : ''; ?>>Bedah (Surgeon)</option>
                        <option value="neurologi" <?php echo ($dokter['spesialisasi'] == 'neurologi') ? 'selected' : ''; ?>>Saraf (Neurologi)</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
>>>>>>> afe0478f7fb015f508b4f1079d5633d8f2deffa6
</html>