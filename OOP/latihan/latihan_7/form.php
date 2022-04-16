<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="post">
            <table>
                <tr>
                    <th>
                        <label for="point">Masukkan Level Point</label>
                    </th>
                    <td>
                        <input type="number" name="poin" required placeholder="Masukkan Level Point" id="point">
                    </td>
                    <td>
                        <button type="submit" name="simpan">Simpan</button>
                    </td>
                </tr>
            </table>
        </form>
<?php
if (isset($_POST['simpan'])) {
    $poin = $_POST['poin'];

    require "titan.php";
    require "armor_titan.php";
    require "attack_titan.php";
    require "beast_titan.php";
    require "human.php";

    $titan = new  Titan();
    $titan->powerPoint = $poin;

    $armor_titan = new ArmorTitan();
    $attack_titan = new AttackTitan();
    $beast_titan = new BeastTitan();
    $human = new Human();

    $armor_titan->aksi();
    echo "<hr>";
    $attack_titan->aksi();
    echo "<hr>";
    $beast_titan->aksi();
    echo "<hr>";
    $human->aksi();
    echo "<hr>";
}
?>
    </body>
    </html>
</body>
</html>
