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
        <legend>OOP Aritmatika</legend>
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        <label for="bil1">Bil 1</label>
                    </td>
                    <td>
                        <input type="number" name="b1" id="bil1" min="0" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="bil2">Bil 2</label>
                    </td>
                    <td>
                        <input type="number" name="b2" id="bil2" min="0" required>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" name="input">Kirim</button>
                        <button type="reset">Reset</button>
                    </td>
                </tr>
            </table>
        </form>
        <br>
<?php
if (isset($_POST['input'])) {
    $b1 = $_POST['b1'];
    $b2 = $_POST['b2'];

    require_once("./class.php");
    $hitung = new Aritmatika($b1,$b2);
    $hitung->hasil();
}
?>
    </fieldset>
</body>
</html>