<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
    <title>Hospital Management</title>
</head>
<body>
    <h3>Tambah Data Pasien</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>
                    <input type="date" name="tgl_Lahir" style="width: 100%">
                </td>
            </tr>
            <tr>
                <td>L/P</td>
                <td>
                    <select name="gender" style="width: 100%" required>
                        <option value="" selected disabled>Pilih Jenis Kelamin</option>
                        <option value="male">L</option>
                        <option value="female">P</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</body>
=======
<!DOCTYPE html>
<html>
<head>
    <title>Hospital Management</title>
</head>
<body>
    <h3>Tambah Data Pasien</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>
                    <input type="date" name="tgl_Lahir" style="width: 100%">
                </td>
            </tr>
            <tr>
                <td>L/P</td>
                <td>
                    <select name="gender" style="width: 100%" required>
                        <option value="" selected disabled>Pilih Jenis Kelamin</option>
                        <option value="male">L</option>
                        <option value="female">P</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</body>
>>>>>>> afe0478f7fb015f508b4f1079d5633d8f2deffa6
</html>