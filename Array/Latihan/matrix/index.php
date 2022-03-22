<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriks</title>
</head>

<body>
    <center>
        <form action="" method="post">
            <table>
                <tr>
                    <th colspan="2">Matriks 2 Dimensi</th>
                </tr>
                <tr>
                    <th><label for="baris">Baris : </label></th>
                    <th><input type="number" id="baris" min="0" required name="baris"></th>
                </tr>
                <tr>
                    <th><label for="kolom">Kolom : </label></th>
                    <th><input type="number" id="kolom" min="0" required name="kolom"></th>
                </tr>
                <tr>
                    <td><button type="submit" name="kirim">Kirim</button></td>
                </tr>
            </table>
        </form>
        <form action="hasil.php" method="post">
<?php
if (isset($_POST['kirim'])) {
    $kolom = $_POST['kolom'];
    $baris = $_POST['baris'];
    for ($a = 0; $a <= ($baris - 1); $a++) {
        for ($b = 0; $b <= ($kolom - 1); $b++) {
            ?>
            <table>
                <tr>
                    <td><label for="matrix[<?php echo $a; ?>][<?php echo $b; ?>]">Matriks Baris-
                        <?php echo $a + 1; ?> Kolom-
                        <?php echo $b + 1; ?></label>
                    </td>
                    <td><input type="number" min="1" name="matrix[<?php echo $a; ?>][<?php echo $b; ?>]" id="matrix[<?php echo $a; ?>][<?php echo $b; ?>]" required></td>
                </tr>
                <?php
}
    }
}
?>
                <tr>
                    <td><button type="submit" name="kirim_1">Kirim</button></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>