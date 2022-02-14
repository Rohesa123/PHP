<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Data Siswa Kelas XI RPL 3</h2>
        <table border="1">
            <tr>
                <th>Nama</th>
            </tr>
<?php
for ($a = 0; $a < count($nama); $a++) {
    ?>
            <tr>
                <td><?php echo $nama[$a];} ?></td>
            </tr>
        </table>
    </center>
</body>
</html>