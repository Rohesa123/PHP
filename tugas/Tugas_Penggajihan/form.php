<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        select:required:invalid {
            color: #666;
        }
        option[value=""][disabled] {
            display: none;
        }
        option {
            color: #000;
        }
    </style>
</head>
<body class="bg-secondary">
    <div class="gambar text-center">
        <img src="logo-custom.png" alt="" class="figure-img img" width="250px" style="transform: translateY(20px);">
    </div>
    <div class="konten container text-center mb-5">
        <div class="judul card-title mb-4">
            <h1>Penggajihan<br>Pt Makmur Sentosa</h1>
        </div>
        <div class="konten_isi card border-dark row bg-primary">
            <form action="hasil.php" method="post" class="">
                <div class="judul_1 card-header text-start border-dark bg-warning row" >
                        Data Penggajihan
                </div>
                <div class="tabel row text-start ps-4 pt-3">
                    <div class="isi satu col-6">
                        <div class="judul_isi satu text-center">
                            <h4>Gaji</h4>
                        </div>
                        <div class="input satu">
                            <div class="karyawan col-12">
                                <label for="nk" class="row pb-1 ">Nama Karyawan</label>
                                <input type="text" name="karyawan" placeholder="Nama Karyawan" required id="nk" class="row mb-sm-2 form-control border-dark">
                            </div>
                            <div class="jabatan col-12">
                                <label for="jb" class="row pt-1">Jabatan</label>
                                <select name="jabatan" id="jb" required class="row form-control border-dark mb-sm-2 form-select">
                                    <option value="" selected disabled>Pilih Jabatan</option>
                                    <option value="Direktur">Direktur</option>
                                    <option value="Manager">Manager</option>
                                    <option value="Karyawan">Karyawan</option>
                                    <option value="OB">OB</option>
                                </select>
                            </div>
                            <div class="status_kerja">
                                <label for="sk" class="row pb-1">Status Kerja</label>
                                <select name="status_kerja" id="sk" required class="row mb-sm-2 form-control border-dark form-select">
                                    <option value="" selected disabled>Pilih Status Kerja</option>
                                    <option value="Tetap">Tetap</option>
                                    <option value="Kontrak">Kontrak</option>
                                </select>
                            </div>
                            <div class="lama_kerja">
                                <label for="lk" class="row pb-1">Lama Kerja</label>
                                <input type="number" name="lama_kerja" id="lk" required placeholder="Lama Kerja" min="0" class="row mb-sm-2 form-control border-dark">
                            </div>
                        </div>
                    </div>
                    <div class="isi dua col-6">
                        <div class="judul_isi dua text-center">
                            <h4>Potongan</h4>
                        </div>
                        <div class="input dua">
                            <div class="pinjaman">
                                <label for="pnjmn" class="row pb-1">Pinjaman</label>
                                <input type="number" name="pinjaman" id="pnjmn" required min="0" placeholder="Pinjaman" class="row mb-sm-2 form-control border-dark">
                            </div>
                            <div class="tabungan">
                                <label for="tbngn" class="row pb-1">Tabungan</label>
                                <input type="number" name="tabungan" id="tbngn" required min="0" placeholder="Tabungan" class="row mb-sm-2 form-control border-dark">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tombol pt-3">
                    <button name="proses" type="submit" class="btn btn-warning mb-3">Proses</button>
                </div>
            </form>
        </div>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
