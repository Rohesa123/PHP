<?php
if (isset($_POST['kirim'])) {
    $data = $_POST['data_siswa'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Data</title>
</head>
<body>
    <div class="konten 1">
        <div class="isi">
            <div class="judul">
                <h3>Data Siswa</h3>
            </div>
            <div class="tabel">
                <table border="1">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Umur</th>
                            <th>Alamat</th>
                            <th>No. Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
<?php
foreach ($data as $data_siswa) {
?>
                        <tr>
<?php
    foreach ($data_siswa as $siswa) {
?>
                            <th><?php echo $siswa; ?></th>
<?php
}
?>
                        </tr>
<?php
}
?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="5">
                                <a href="form.php">
                                    <button type="submit" name="kembali">Isi Data Kembali</button>
                                </a>
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</body>
</html>