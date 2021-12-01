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
        <legend>Pendaftaran Peserta Didik Baru</legend>
        <form action="proses_2.php" method="post">
            <table>
                <tr>
                    <th style="text-align: left;">Nama Lengkap</th>
                    <th>:</th>
                    <td><input type="text" name="nama" size="50"></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Email</th>
                    <th>:</th>
                    <td><input type="email" name="email" size="50"></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Jenis Kelamin</th>
                    <th>:</th>
                    <td><input type="radio" name="jk" value="Laki-laki">L
                        <input type="radio" name="jk" value="Perempuan">P
                    </td>
                </tr>
                <tr>
                    <th style="text-align: left;">Agama</th>
                    <th>:</th>
                    <td><select name="agama" id="">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Tingi Badan & Berat Badan</th>
                    <th>:</th>
                    <td><input type="number" name="tb" min="100" max="200" placeholder="Tinggi Badan">
                        <input type="number" name="bb" min="1" max="100" placeholder="Berat Badan">
                    </td>
                </tr>
                <tr>
                    <th style="text-align: left;">Kelengkapan Persyaratan</th>
                    <th>:</th>
                    <td><input type="checkbox" name="sSehat" id="">Surat Keluarga
                        <input type="checkbox" name="kk" id="">Kartu Keluarga
                        <input type="checkbox" name="skl" id="">Surat Keterangan Lulus
                    </td>
                </tr>
                <tr>
                    <th style="text-align: left;">Nomor Telepon</th>
                    <th>:</th>
                    <td><input type="number" name="nomor"></td>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="simpan">Daftar</button>
                        <button type="reset">Bersihkan Fomulir</button>
                    </th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>
