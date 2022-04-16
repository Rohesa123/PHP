<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th, td {
            text-align: left;
        }
        table {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Inheritance OOP</legend>
        <form action="" method="post">
            <table>
                <tr>
                    <th>
                        <label for="jenis">Jenis Makhluk</label>
                    </th>
                    <td>:</td>
                    <td>
                        <select name="jenisMakhluk" id="jenis" required>
                            <option value="" hidden>-- Jenis Makhluk --</option>
                            <option value="Manusia">Manusia</option>
                            <option value="Malaikat">Malaikat</option>
                            <option value="Jin">Jin</option>
                            <option value="Setan">Setan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit" name="kirim">Kirim</button>
                    </td>
                </tr>
            </table>
        </form>
<?php
if (isset($_POST['kirim'])) { 
    $jenisMakhluk = $_POST['jenisMakhluk'];

    require_once "class.php";

    $makhluk = new Makhluk($jenisMakhluk);
    ?>
        <table>
            <tr>
                <th>Jenis Makhluk</th>
                <td>:</td>
                <td><?php echo $makhluk->jenis(); ?></td>
            </tr>
            <tr>
                <th>Tugasnya</th>
                <td>:</td>
                <td><?php echo $makhluk->tugas(); ?></td>
            </tr>
        </table>
<?php
}
?>
    </fieldset>
</body>
</html>