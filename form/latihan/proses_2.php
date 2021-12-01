<?php

if (isset($_GET['save'])) {
    $nama = $_GET['nama'];
    $nm = $_GET['nm'];
    $nbi = $_GET['nbi'];
    $nbii = $_GET['nbii'];
    $nk = $_GET['nk'];

    $hasil = $nm + $nbi + $nbii + $nk;
    $hasil1 = $hasil / 4;

    if ($hasil1 < 85) {
        $k = "Mohon Maaf Anda Tidak Diterima";
    } else {
        $k = "Selamat Anda Diterima";
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
                <th style="text-align: left;">Nilai Matematika</th>
                <th>:</th>
                <th style="text-align: left;"><?php echo "$nm"; ?></th>
            </tr>
            <tr>
                <th style="text-align: left;">Nilai Bahasa Indonesia</th>
                <th>:</th>
                <th style="text-align: left;"><?php echo "$nbi"; ?></th>
            </tr>
            <tr>
                <th style="text-align: left;">Nilai Bahasa Ingris</th>
                <th>:</th>
                <th style="text-align: left;"><?php echo "$nbii"; ?></th>
            </tr>
            <tr>
                <th style="text-align: left;">Nilai Kejuruan</th>
                <th>:</th>
                <th style="text-align: left;"><?php echo "$nk"; ?></th>
            </tr>
            <tr>
                <th style="text-align: left;">Nilai Keseluruhan</th>
                <th>:</th>
                <th style="text-align: left;"><?php echo "$hasil"; ?></th>
            </tr>
            <tr>
                <th style="text-align: left;">Nilai Rata-rata</th>
                <th>:</th>
                <th style="text-align: left;"><?php echo "$hasil1"; ?></th>
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