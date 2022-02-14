<?php
$artikel = [
    "Kategori" => "Olahraga",
    "Tanggal" => "Jumat (11/2/20222)",
    "Judul" => "Hari ini Persib Bandung akan menghadapi PSS Sleman",
    "Isi" => "Suara.com - PSS Sleman akan melakoni misi berat melawan Persib Bandung dalam pekan ke-24 BRI Liga 1 <br>2021/2022 di Stadion Kapten 1 Wayan Dipta, Gianyar, Bali, Jumat (11/2/2022)",
];
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
    <p>Kategori : <?php echo $artikel['Kategori']; ?></p>
    <p>Tanggal : <?php echo $artikel['Tanggal']; ?></p>
    <h1><?php echo $artikel['Judul']; ?></h1>
    <p><?php echo $artikel['Isi']; ?></p>
    <hr>
</body>
</html>