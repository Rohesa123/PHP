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
            <br>
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
            <td>NIS</td>
            <td>:</td>
            <td><input type="text" name="nis[]"></td>
        </tr><td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama[]"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="kelas[]"></td>
        </tr>
        <tr>
            <td>Nilai Bahasa Indonesia</td>
            <td>:</td>
            <td><input type="text" name="indonesia[]"></td>
        </tr>
        <tr>
            <td>Nilai Bahasa Inggris</td>
            <td>:</td>
            <td><input type="text" name="inggris[]"></td>
        </tr>
        <tr>
            <td>Nilai Matematika</td>
            <td>:</td>
            <td><input type="text" name="matematika[]"></td>
        </tr>
        <tr>
            <td>Nilai Produktif</td>
            <td>:</td>
            <td><input type="text" name="produktif[]"></td>
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