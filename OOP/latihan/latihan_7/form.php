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

    $armor_titan = new ArmorTitan($titan->powerPoint);
    $attack_titan = new AttackTitan($titan->powerPoint);
    $beast_titan = new BeastTitan($titan->powerPoint);
    $human = new Human($titan->powerPoint);

    echo "<hr>";
    echo "Level Point Human $human->powerPoint<br>";
    echo "Sifat Dari Human {$human->killAllTitan()}";
    echo "<hr>";
    echo "Level Point Armor Titan $armor_titan->powerPoint<br>";
    echo "Sifat Dari Armor Titan {$armor_titan->terjang()}";
    echo "<hr>";
    echo "Level Point Attack Titan $attack_titan->powerPoint<br>";
    echo "Sifat Dari Attack Titan {$attack_titan->punch()}";
    echo "<hr>";
    echo "Level Point Beast Titan $beast_titan->powerPoint<br>";
    echo "Sifat Dari Beast Titan {$beast_titan->lempar()}";
    echo "<hr>";

    
}
?>
    </body>
    </html>
</body>
</html>
