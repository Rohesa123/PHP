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
            <table>
                <tr>
                    <td><label for="nama1">Nama</label></td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama" required></td>
                </tr>
                <tr>
                    <td><label for="tl">Tanggal Lahir</label></td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_lahir" id="tl" required></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" id="" value="Pria" id="p" required><label for="p">Pria</label>&nbsp;
                        <input type="radio" name="jk" id="" value="Wanita" id="w" required><label for="w">Wanita</label>
                    </td>
                </tr>
                <tr>
                    <td><label for="agama1">Agama</label></td>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama1" required>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Kong Hu Cu">Kong Hu Cu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="Alamat1">Alamat</label></td>
                    <td>:</td>
                    <td><textarea name="alamat" id="" cols="15" rows="6" id="Alamat" required></textarea></td>
                </tr>
                <tr>
                    <td rowspan="2">Hobi</td>
                    <td rowspan="2">:</td>
                    <td>
                        <input type="checkbox" name="hobi[]" id="" value="Bermain Game" id="bg"><label for="bg">Bermain Game</label>
                    </td>
                    <td>
                        <input type="checkbox" name="hobi[]" id="" value="Mendengarkan Musik" id="mm"><label for="mm">Mendengarkan Musik</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" name="hobi[]" id="" value="Bersepeda" id="b"><label for="b">Bersepeda</label>
                    </td>
                    <td>
                        <input type="checkbox" name="hobi[]" id="" value="Memancing" id="m"><label for="m">Memancing</label>
                    </td>
                </tr>
                <tr>
                    <td><label for="st"></label></td>
                    <td>:</td>
                    <td>
                        <select name="status" id="st" required>
                            <option value="Pelajar">Pelajar</option>
                            <option value="Rakyat Biasa">Rakyat Biasa</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="mh1">Moto Hidup</label></td>
                    <td>:</td>
                    <td><textarea name="mh" id="mh1" cols="15" rows="6" required></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];
    $status = $_POST['status'];
    $mh = $_POST['mh'];

    function biodata($nama1, $tanggal_lahir1, $jk1, $agama1, $alamat1, $hobi1, $status1, $mh1)
    {
        echo "Nama Saya " . $nama1 . "<br>";
        echo "Tanggal Lahir " . $tanggal_lahir1 . "<br>";
        echo "Agama Saya " . $agama1 . "<br>";
        echo "Saya Tinggal Di " . $alamat1 . "<br>";
        echo "Hobi Saya Adalah : ";
        echo "<ul>";
        for ($i = 0; $i < count($hobi1); $i++) {
            echo "<li>" . $hobi1[$i] . "</li>";
        }
        echo "</ul>";

        echo "Saya Seorang " . $status1 . "<br>";
        echo "Moto Hidup Saya Adalah : " . $mh1;
    }

    biodata($nama, $tanggal_lahir, $jk, $agama, $alamat, $hobi, $status, $mh);
}
?>