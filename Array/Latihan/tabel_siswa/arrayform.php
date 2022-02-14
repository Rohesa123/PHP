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
        <form action="" method="post">
            <h2>Data Siswa XI RPL 3</h2>
            <table>
                <tr>
                    <td>Jumlah Siswa</td>
                    <td>:</td>
                    <td><input type="number" name="jumlah"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="proses" value="Proses"></td>
                </tr>
            </table>
        </form>
<?php
if (isset($_POST['proses'])) {
    $jumlah = $_POST['jumlah'];
    ?>
    <form action="hasilarrayform.php" method="post">
        <table>
<?php
for ($i = 1; $i <= $jumlah; $i++) {

        ?>
            <tr>
                <td></td>
                <td></td>
                <td>Data Siswa Ke - <?php echo $i; ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama[]"></td>
            </tr>
<?php
}
    ?>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value="simpan"></td>
            </tr>
        </table>
    </form>
<?php
}
?>
    </center>
</body>
</html>