<?php
if (isset($_POST['simpan'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $indonesia = $_POST['indonesia'];
    $inggris = $_POST['inggris'];
    $matematika = $_POST['matematika'];
    $produktif = $_POST['produktif'];
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
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Nilai Bahasa Indonesia</th>
                <th>Nilai Bahasa Inggris</th>
                <th>Nilai Matematika</th>
                <th>Nilai Produktif</th>
                <th>Rata-rata</th>
                <th>Status</th>
            </tr>
<?php
for ($a = 0; $a < count($nama); $a++) {
    ?>
        <tr>
            <td><?php echo $nis[$a]; ?></td>
            <td><?php echo $nama[$a]; ?></td>
            <td><?php echo $kelas[$a]; ?></td>
            <td><?php echo $indonesia[$a]; ?></td>
            <td><?php echo $inggris[$a]; ?></td>
            <td><?php echo $matematika[$a]; ?></td>
            <td><?php echo $produktif[$a]; ?></td>
            <td>
                <?php
                $rata = ($indonesia[$a] + $inggris[$a] + $matematika[$a] + $produktif[$a]) / 4;
                echo $rata;
    ?>
            </td>
            <td>
                <?php
                if ($rata >= 75) {
                    echo "Lulus";
                } else {
                    echo "Kandas";
                }
    ?>
            </td>
        </tr>
<?php
}
?>
        </table>
    </center>
</body>
</html>
