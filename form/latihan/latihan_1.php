<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
</head>

<body>
    <fieldset>
        <legend>
            <h2>Pendaftaran TNI/Porli</h2>
        </legend>
        <form action="proses_1.php" method="get">
            <table>
                <tr>
                    <th style="text-align: left;"><label for="nama1">Nama</label></th>
                    <th>:</th>
                    <td><input type="text" name="nama" id="nama1" placeholder="Masukkan Nama" required></td>
                </tr>
                <tr>
                    <th style="text-align: left;"><label for="tb1">Tinggi Badan</label></th>
                    <th>:</th>
                    <td><input type="number" name="tb" id="tb1" min="0" max="300" required></td>
                </tr>
                <tr>
                    <th style="text-align: left;"><label for="bb1">Berat Badan</label></th>
                    <th>:</th>
                    <td><input type="number" name="bb" id="bb1" min="0" max="200" required></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Jenis Kelamin</th>
                    <th>:</th>
                    <td><input type="radio" name="jk" value="Laki-laki" id="jkl" required><label
                            for="jkl">Laki-laki</label>
                        <input type="radio" name="jk" value="Perempuan" id="jkp" required><label
                            for="jkp">Perempuan</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="save">Daftar</button>
                        <button type="reset">Reset</button>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>