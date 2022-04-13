<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th {
            text-align: left;
        }
        td {
            text-align: left;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <th>
                    <label for="nama">Nama</label>
                </th>
                <td>:</td>
                <td>
                    <input type="text" name="nama" id="nama" required placeholder="Masukkan Nama">
                </td>
            </tr>
            <tr>
                <th>
                    <label for="kelas">Kelas</label>
                </th>
                <td>:</td>
                <td>
                    <input type="text" name="kelas" id="kelas" required placeholder="Masukkan Kelas">
                </td>
            </tr>
            <tr>
                <th>
                    <label for="nis">NIS</label>
                </th>
                <td>:</td>
                <td>
                    <input type="number" name="nis" id="nis" required placeholder="Masukkan NIS" min="0">
                </td>
            </tr>
            <tr>
                <th>
                    <label for="mapel">Mapel</label>
                </th>
                <td>:</td>
                <td>
                    <input type="text" name="mapel" id="mapel" required placeholder="Masukkan Mapel">
                </td>
            </tr>
            <tr>
                <th>
                    <label for="nh">Nilai Harian</label>
                </th>
                <td>:</td>
                <td>
                    <input type="number" name="nh" id="nh" min="0" max="100" required placeholder="Masukkan Nilai Harian">
                </td>
            </tr>
            <tr>
                <th>
                    <label for="n_uts">Nilai UTS</label>
                </th>
                <td>:</td>
                <td>
                    <input type="number" name="n_uts" id="n_uts" min="0" max="100" required placeholder="Masukkan Nilai UTS">
                </td>
            </tr>
            <tr>
                <th>
                    <label for="n_uas">Nilai UAS</label>
                </th>
                <td>:</td>
                <td>
                    <input type="number" name="n_uas" id="n_uas" min="0" max="100" required placeholder="Masukkan UAS">
                </td>
            </tr>
            <tr>
                <th>
                    <label for="n_a">Nilai Absensi</label>
                </th>
                <td>:</td>
                <td>
                    <input type="number" name="absensi" id="n_a" min="0" max="100" required placeholder="Masukkan Nilai Absensi">
                </td>
            </tr>
            <tr>
                <th></th>
                <td></td>
                <td>
                    <button name="kirim" type="submit">Kirim</button>
                    <button type="reset">Reset</button>
                </td>
            </tr>
        </table>
    </form>
<?php
if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nis = $_POST['nis'];
    $mapel = $_POST['mapel'];
    $nh = $_POST['nh'];
    $n_uts = $_POST['n_uts'];
    $n_uas = $_POST['n_uas'];
    $absensi = $_POST['absensi'];

    require_once "class_1.php";
    $raport1 = new Raport($nama, $kelas, $nis, $mapel, $nh, $n_uts, $n_uas, $absensi);
?>
    <table>
        <tr>
            <th>Nama</th>
            <td>:</td>
            <td><?php echo $raport1->nama; ?></td>
        </tr>
        <tr>
            <th>Kelas</th>
            <td>:</td>
            <td><?php echo $raport1->kelas; ?></td>
        </tr>
        <tr>
            <th>NIS</th>
            <td>:</td>
            <td><?php echo $raport1->nis; ?></td>
        </tr>
        <tr>
            <th>Mapel</th>
            <td>:</td>
            <td><?php echo $raport1->mapel; ?></td>
        </tr>
        <tr>
            <th>Nilai Harian</th>
            <td>:</td>
            <td><?php echo $raport1->nilai_harian; ?></td>
        </tr>
        <tr>
            <th>Nilai UTS</th>
            <td>:</td>
            <td><?php echo $raport1->nilai_uts; ?></td>
        </tr>
        <tr>
            <th>Nilai UAS</th>
            <td>:</td>
            <td><?php echo $raport1->nilai_uas; ?></td>
        </tr>
        <tr>
            <th>Nilai Absensi</th>
            <td>:</td>
            <td><?php echo $raport1->absensi; ?></td>
        </tr>
        <tr>
            <th>Hasil</th>
            <td>:</td>
            <td><?php echo "{$raport1->hasil()} > Grade : {$raport1->grade()} "; ?></td>
        </tr>
        <tr>
            <th>Status</th>
            <td>:</td>
            <td><?php echo $raport1->status(); ?></td>
        </tr>
    </table>
<?php
}
?>
</body>
</html>
