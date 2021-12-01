<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftara</title>
</head>

<body>
    <fieldset>
        <legend>
            <h2>Daftar Perguruan Tinggi</h2>
        </legend>
        <form action="proses_2.php" method="get">
            <table>
                <tr>
                    <th style="text-align: left;"><label for="nama1">Nama</label></th>
                    <th>:</th>
                    <td><input type="text" name="nama" id="nama1" placeholder="Masukkan Nama" required></td>
                </tr>
                <tr>
                    <th style="text-align: left;"><label for="nm1">Nilai Matematika</label></th>
                    <th>:</th>
                    <td><input type="number" name="nm" id="nm1" min="0" max="100" required></td>
                </tr>
                <tr>
                    <th style="text-align: left;"><label for="nbi1">Nilai Bahasa Indonesia</label></th>
                    <th>:</th>
                    <td><input type="number" name="nbi" id="nbi1" min="0" max="100" required></td>
                </tr>
                <tr>
                    <th style="text-align: left;"><label for="nbii1">Nilai Bahasa Iggris</label></th>
                    <th>:</th>
                    <td><input type="number" name="nbii" id="nbii1" min="0" max="100" required></td>
                </tr>
                <tr>
                    <th style="text-align: left;"><label for="nk1">Nilai Kejuruan</label></th>
                    <th>:</th>
                    <td><input type="number" name="nk" id="nk1" min="0" max="100" required></td>
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