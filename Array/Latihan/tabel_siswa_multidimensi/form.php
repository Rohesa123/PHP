<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            font-family:Georgia, 'Times New Roman', Times, serif;
            padding: 0 30px 0 30px;
        }
        .konten.satu {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            max-width: 400px;
            height: auto;
            padding: 20px 10px 0px 10px;
            align-items: center;
            margin: 30px auto;
            border: 1px solid rgba(0,0,0,0.9);
            border-radius: 15px;
            box-shadow: 0px 10px 1px 0.5px rgba(12, 37, 116, 1),
            0px 0px 1px 0.5px rgba(124, 7, 7, 0.801);
            background-color: rgba(22, 59, 182, 0.801);
            transition: 0.5s;
            color: rgba(225,225,225,1);
        }
        .konten.satu:hover {
            transform:translateY(10px);
            background-color: rgba(189, 15, 15, 0.801);
            box-shadow: 0px 0px 0px 0px rgba(12, 37, 116, 1),
            0px -10px 1px 0.5px rgba(124, 7, 7, 0.801);
        }
        .konten.satu div {
            margin-bottom: 20px;
        }
        .konten.satu .inputan {
            display: flex;
            width: 100%;
            flex-wrap: wrap;
            flex-direction: column;
        }
        .konten.satu .inputan label {
            margin-bottom: 5px;
            align-self: flex-start;
        }
        .konten.satu .inputan input[type="number"] {
            align-self: center;
            border: none;
            padding: 3px;
            background-color: rgba(12, 22, 56, 0.726);
            border-radius: 5px;
            outline: none;
            transition: 0.5s;
            color:rgba(225,225,225,1);
        }
        .konten.satu:hover .inputan input[type="number"] {
            background-color: rgba(146, 8, 8, 0.801);
        }
        .konten.satu .tombol.satu button[type="submit"] {
            color: white;
            background-color: rgba(12, 22, 56, 0.726);
            transition: 0.5s;
            outline: none;
            border: none;
            padding: 3px;
            border-radius: 5px;
        }
        .konten.satu:hover .tombol.satu button[type="submit"] {
            background-color: rgba(146, 8, 8, 0.801);
        }
    </style>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div class="konten satu">
            <div class="judul">
                <h4>Form Data Siswa</h4>
            </div>
            <div class="inputan">
                <label for="data">Jumlah Data : </label>
                <input type="number" name="data" id="data" required placeholder="Jumlah Data" min="1">
            </div>
            <div class="tombol satu">
                <button type="submit" name="proses">Proses</button>
            </div>
        </div>
    </form>

<?php
if (isset($_POST['proses'])) {
    $data = $_POST['data'];
    for ($i = 0; $i < $data; $i++) {
        ?>
    <form action="tabel.php" method="post">
        <div class="konten dua">
            <div class="judul">
                <h3>Data Siswa Ke <?php echo ($i + 1); ?></h3>
            </div>
            <div class="inputan">
                <div class="input satu">
                    <label for="nama<?php echo ($i + 1); ?>">Nama : </label>
                    <input type="text" name="data_siswa[<?php echo $i; ?>][nama]" required placeholder="Masukkan Nama" id="nama<?php echo ($i + 1); ?>">
                </div>
                <div class="input dua">
                    <label for="kelas<?php echo ($i + 1); ?>">Kelas : </label>
                    <select name="data_siswa[<?php echo $i; ?>][kelas]" id="kelas<?php echo ($i + 1); ?>">
                        <option value="X RPL 1">X RPL 1</option>
                        <option value="X RPL 2">X RPL 2</option>
                        <option value="X RPL 3">X RPL 3</option>
                        <option value="XI RPL 1">XI RPL 1</option>
                        <option value="XI RPL 2">XI RPL 2</option>
                        <option value="XI RPL 3">XI RPL 3</option>
                        <option value="XII RPL 1">XII RPL 1</option>
                        <option value="XII RPL 2">XII RPL 2</option>
                        <option value="XII RPL 3">XII RPL 3</option>
                    </select>
                </div>
                <div class="input tiga">
                    <label for="umur<?php echo ($i + 1); ?>">Umur : </label>
                    <input type="number" name="data_siswa[<?php echo $i; ?>][umur]" min="0" required id="umur<?php echo ($i + 1); ?>" placeholder="Masukkan Umur">
                </div>
                <div class="input empat">
                    <label for="alamat<?php echo ($i + 1); ?>">Alamat : </label>
                    <textarea name="data_siswa[<?php echo $i; ?>][alamat]" id="alamat<?php echo ($i + 1); ?>" cols="20" rows="5" required placeholder="Masukkan Alamat"></textarea>
                </div>
                <div class="input lima">
                    <label for="tlp<?php echo ($i + 1); ?>">No Telepon : </label>
                    <input type="number" name="data_siswa[<?php echo $i; ?>][no_telepon]" id="tlp<?php echo ($i + 1); ?>" required placeholder="Masukkan No Telepon">
                </div>
            </div>
        </div>
<?php
    }
?>
        <div class="tombol dua">
            <button name="kirim" type="submit">Kirim</button>
        </div>
    </form>
<?php
}
?>
</body>
</html>