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
        <legend>Isi Data Kucing</legend>
        <form action="" method="post">
            <label for="nama">Nama Kucing</label>
            <input type="text" name="nama" id="nama" required>
            <br>
            <label for="wk">Warna Kucing</label>
            <input type="text" name="warna" id="wk" required>
            <br>
            <label for="">Jenis Kelamin Kucing</label>
            <input type="radio" name="jk" id="j" value="Jantan" required><label for="j">Jantan</label>&nbsp;
            <input type="radio" name="jk" id="b" value="Betina" required><label for="b">Betina</label>
            <br>
            <button type="submit" name="input">Simpan</button>
        </form>
<?php
    if (isset($_POST['input'])) {

    $nama = $_POST['nama'];
    $warna = $_POST['warna'];
    $jk = $_POST['jk'];

    // * Mengimport / Memanggil semua code/class didalam file 'kucing.php'
    require_once("./kucing.php");
    
    $kucing = new Kucing($warna,$nama,$jk);
    echo $kucing->dataKucing();

}

?>
    </fieldset>
</body>
</html>
