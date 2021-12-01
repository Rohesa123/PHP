<?php
// Penampungan Data
if (isset($_POST['simpan'])) {
    // textfield
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    // radio
    $jk = $_POST['jk'];

    //select
    $agama = $_POST['agama'];

    // number
    $tb = $_POST['tb'];
    $bb = $_POST['bb'];
    $nomor = $_POST['nomor'];

    // checkbox
    $sSehat = "Tidak Ada";
    $kk = "Tidak Ada";
    $skl = "Tidak Ada";

    if (isset($_POST['sSehat'])) {
        $sSehat = "Ada";
    } else {
        $sSehat = "Tidak Ada";
    }
    if (isset($_POST['kk'])) {
        $kk = "Ada";
    } else {
        $kk = "Tidak Ada";
    }
    if (isset($_POST['skl'])) {
        $skl = "Ada";
    } else {
        $skl = "Tidak Ada";
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
    <center><h1>Pendaftaran Peserta Didik Baru</h1></center>
    Nama Lengkap : <b><?php echo $nama; ?></b><br>
    Email : <b><?php echo $email; ?></b><br>
    Jenis Kelamin : <b><?php echo $jk; ?></b><br>
    Agama : <b><?php echo $agama; ?></b><br>
    Tinggi Badan : <b><?php echo $tb; ?></b><br>
    Berat Badan : <b><?php echo $bb; ?></b><br>
    Kelengkapan Persyaratan : <b>
    <li>Surat Sehat : <b><?php echo "$sSehat"; ?></b></li><br>
    <li>Surat Sehat : <b><?php echo "$kk"; ?></b></li><br>
    <li>Surat Sehat : <b><?php echo "$skl"; ?></b></li><br>
    Nomor Telepon : <b><?php echo $nomor; ?></b>
</body>

</html>