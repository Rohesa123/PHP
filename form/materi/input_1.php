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
        <legend>Input Formulir</legend>
        <form action="" method="GET">
            <label for="">Masukkan Nama : </label>
            <input type="text" name="nama" required>
            <br>
            <button type="submit" name="Save">Simpan</button>
        </form>
    </fieldset>
    <?php
if (isset($_GET['Save'])) {
    $a = $_GET['nama'];
    echo "Nama Saya Adalah <b>$a</b>";
}
?>
</body>
</html>