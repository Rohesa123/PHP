<?php

if (isset($_GET['save'])) {
    $nama = $_GET['nama'];
    $tb = $_GET['tb'];
    $bb = $_GET['bb'];
    $jk = $_GET['jk'];

    if ($jk == "Laki-laki") {

        if ($tb < 170 || $bb >= 90) {
            $k = "Mohon Maaf Anda Tidak Diterima";
        } else {
            $k = "Selamat Anda Diterima";
        }

    } else {

        if ($tb < 160 || $bb >= 75) {
            $k = "Mohon Maaf Anda Tidak Diterima";
        } else {
            $k = "Selamat Anda Diterima";
        }

    }
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
    <fieldset>
        <Legend><h2>Hasil</h2></Legend>
        <table>
            <tr>
                <th style="text-align: left;">Nama</th>
                <th>:</th>
                <th style="text-align: left;"><?php echo "$nama"; ?></th>
            </tr>
            <tr>
                <th style="text-align: left;">Tinggi Badan</th>
                <th>:</th>
                <th style="text-align: left;"><?php echo "$tb"; ?></th>
            </tr>
            <tr>
                <th style="text-align: left;">Berat Badan</th>
                <th>:</th>
                <th style="text-align: left;"><?php echo "$bb"; ?></th>
            </tr>
            <tr>
                <th style="text-align: left;">Jenis Kelamin</th>
                <th>:</th>
                <th style="text-align: left;"><?php echo "$jk"; ?></th>
            </tr>
            <tr>
                <th style="text-align: left;">Kepada</th>
                <th>:</th>
                <th style="text-align: left;"><?php echo "$nama, $k"; ?></th>
            </tr>
        </table>
    </fieldset>
</body>
</html>