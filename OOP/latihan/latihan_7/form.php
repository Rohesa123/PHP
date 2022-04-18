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

    require_once "titan.php";
    $titan = new Titan($poin);

    require_once "armor_titan.php";
    $armor_titan = new ArmorTitan($titan->powerPoint);
    require_once "attack_titan.php";
    $attack_titan = new AttackTitan($titan->powerPoint);
    require_once "beast_titan.php";
    $beast_titan = new BeastTitan($titan->powerPoint);
    require_once "human.php";
    $human = new Human($titan->powerPoint);

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
