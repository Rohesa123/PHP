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
            /* width: 100%; */
            padding: 30px;
        }
        .konten {
            display: flex;
            flex-direction: column;
            margin: 0px auto 0px auto;
            border: 1px solid black;
            flex-wrap: wrap;
            max-width:900px;
            align-items: center;
            padding: 10px;
        }
        .konten form .tabel {
            display: flex;
            border: 1px solid black;
            flex-wrap: wrap;
            margin: 0px auto 0px auto;
            width: 800px;
            min-height: 150px;
            padding: 5px;
            flex-direction: row;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="gambar">
        <img src="" alt="">
    </div>
    <div class="konten">
        <div class="judul">
            <h1>Penggajihan Pt Makmur Sentosa</h1>
        </div>
        <form action="hasil.php" method="post">
            <div class="judul_1" style="text-align: center; margin-bottom: 20px;">
                    Data Penggajihan
            </div>
            <div class="tabel">
                <div class="isi satu">
                    <div class="judul_isi satu">
                        <h4>Gaji</h4>
                    </div>
                    <div class="input satu">
                        <div class="karyawan">
                            <label for="nk">Nama Karyawan</label>
                            <input type="text" name="karyawan" placeholder="Nama Karyawan" required id="nk">
                        </div>
                        <div class="jabatan">
                            <label for="jb">Jabatan</label>
                            <select name="jabatan" id="jb">
                                <option value="Tidak Ada">Pilih Jabatan</option>
                                <option value="Direktur">Direktur</option>
                                <option value="Manager">Manager</option>
                                <option value="Karyawan">Karyawan</option>
                                <option value="OB">OB</option>
                            </select>
                        </div>
                        <div class="status_kerja">
                            <label for="sk">Status Kerja</label>
                            <select name="status_kerja" id="sk" required>
                                <option value="Tidak Ada">Pilih Status Kerja</option>
                                <option value="Tetap">Tetap</option>
                                <option value="Kontrak">Kontrak</option>
                            </select>
                        </div>
                        <div class="lama_kerja">
                            <label for="lk">Lama Kerja</label>
                            <input type="number" name="lama_kerja" id="lk" required placeholder="Lama Kerja">
                        </div>
                    </div>
                </div>
                <div class="isi dua">
                    <div class="judul_isi dua">
                        <h4>Potongan</h4>
                    </div>
                    <div class="input dua">
                        <div class="pinjaman">
                            <label for="pnjmn">Pinjaman</label>
                            <input type="number" name="pinjaman" id="pnjmn" required min="0" placeholder="Pinjaman">
                        </div>
                        <div class="tabungan">
                            <label for="tbngn">Tabungan</label>
                            <input type="number" name="tabungan" id="tbngn" required min="0" placeholder="Tabungan">
                        </div>
                    </div>
                </div>
            </div>
            <div class="tombol">
                <button name="proses" type="submit">Proses</button>
            </div>
        </form>
    </div>
</body>
</html>
