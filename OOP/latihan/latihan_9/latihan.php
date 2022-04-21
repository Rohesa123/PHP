<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..\latihan_8\bootstrap\css\bootstrap.min.css">
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
        body {
            background-image: url(img/latar_3.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
        .animasi_1 {
            animation: animasi1 2s cubic-bezier(0.11, 0.76, 0.91, 1.3) forwards;
        }
        @keyframes animasi1 {
            0% {
                transform: translateY(-200px) scale(0.4);
            }
            50% {
                transform: translateY(0px) scale(0.4);
            }
            100% {
                transform: scale(1);
            }
        }
        .animasi2 {
            animation: animasi2 5s cubic-bezier(0.11, 0.76, 0.91, 1.3) forwards;
        }
        @keyframes animasi2 {
            0% {
                transform: translateX(-1200px) scale(0.4);
            }
            80% {
                transform: translateX(0px) scale(0.4);
            }
            100% {
                transform: scale(1);
            }
        }
    </style>
</head>
<body class="bg-secondary">
    <form action="" method="post">
        <div class="konten container">
            <div class="judul text-center mt-4 mb-3 d-flex justify-content-center">
                <h4 style="color: white; background-color: rgba(0, 0, 0, 0.712); border-radius: 20px; box-shadow: 0px 4px 0px 0px rgba(225, 225, 225, 0.637);" class="p-2 animasi_1"><b>Nilai Ujian Sekolah<br>SMK ASSALAAM BANDUNG</b></h4>
            </div>
            <div class="konten tabel card border-2 border-dark mb-3">
                <div class="judul tabel card-header border-2 border-dark bg-primary text-white">
                    Data Nilai
                </div>
                <div class="konten input text-start p-2 bg-warning text-dark">
                    <div class="input satu text-start pt-2">
                        <label for="nis" class="form-label">Nis</label>
                        <input type="number" name="nis" required placeholder="Masukkan Nis" id="nis" min="0" class="form-control form-control-sm">
                    </div>
                    <div class="input dua text-start pt-2">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" required placeholder="Masukkan Nama" id="nama" class="form-control form-control-sm">
                    </div>
                    <div class="input dua text-start pt-2">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select name="jurusan" id="jurusan" required class="form-select form-select-sm">
                            <option value="" hidden>Pilih Jurusan</option>
                            <option value="RPL">Rekayasa Perangkat Lunak</option>
                            <option value="TBSM">Teknik Bisnis Sepeda Motor</option>
                            <option value="TKRO">Teknik Kendaraan Ringan Otomotif</option>
                        </select>
                    </div>
                    <div class="input dua text-start pt-2">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" name="kelas" required placeholder="Masukkan Kelas" id="kelas" class="form-control form-control-sm">
                    </div>
                    <div class="judul input text-center mt-3 mb-3">
                        <h4><u>Nilai Ujian Sekolah</u></h4>
                    </div>
                    <div class="judul inputan dua row row-cols-1">
                        <div class="judul text-center col-3">
                            <b>Bahasa Indonesia</b>
                        </div>
                        <div class="judul text-center col-3">
                            <b>Bahasa Inggris</b>
                        </div>
                        <div class="judul text-center col-3">
                            <b>Matematika</b>
                        </div>
                        <div class="judul text-center col-3">
                            <b>Produktif</b>
                        </div>
                    </div>
                    <div class="konten inputan dua row row-cols-1">
                        <div class="indonesia col-3">
                            <input type="number" min="0" max="100" required name="BInilaiK" placeholder="Nilai Kehadiran" class="form-control form-select-sm w-100 mt-2"> 
                            <input type="number" min="0" max="100" required name="BInilaiT" placeholder="Nilai Tugas" class="form-control form-select-sm w-100 mt-2"> 
                            <input type="number" min="0" max="100" required name="BInilaiA" placeholder="Nilai Absen" class="form-control form-select-sm w-100 mt-2"> 
                            <input type="number" min="0" max="100" required name="BInilaiU" placeholder="Nilai Ujian" class="form-control form-select-sm w-100 mt-2"> 
                        </div>
                        <div class="inggris col-3">
                            <input type="number" min="0" max="100" required name="BENnilaiK" placeholder="Nilai Kehadiran" class="form-control form-select-sm w-100 mt-2"> 
                            <input type="number" min="0" max="100" required name="BENnilaiT" placeholder="Nilai Tugas" class="form-control form-select-sm w-100 mt-2"> 
                            <input type="number" min="0" max="100" required name="BENnilaiA" placeholder="Nilai Absen" class="form-control form-select-sm w-100 mt-2"> 
                            <input type="number" min="0" max="100" required name="BENnilaiU" placeholder="Nilai Ujian" class="form-control form-select-sm w-100 mt-2"> 
                        </div>
                        <div class="mtk col-3">
                            <input type="number" min="0" max="100" required name="MTKnilaiK" placeholder="Nilai Kehadiran" class="form-control form-select-sm w-100 mt-2"> 
                            <input type="number" min="0" max="100" required name="MTKnilaiT" placeholder="Nilai Tugas" class="form-control form-select-sm w-100 mt-2"> 
                            <input type="number" min="0" max="100" required name="MTKnilaiA" placeholder="Nilai Absen" class="form-control form-select-sm w-100 mt-2"> 
                            <input type="number" min="0" max="100" required name="MTKnilaiU" placeholder="Nilai Ujian" class="form-control form-select-sm w-100 mt-2">
                        </div>
                        <div class="produktif col-3">
                            <input type="number" min="0" max="100" required name="PnilaiK" placeholder="Nilai Kehadiran" class="form-control form-select-sm w-100 mt-2"> 
                            <input type="number" min="0" max="100" required name="PnilaiT" placeholder="Nilai Tugas" class="form-control form-select-sm w-100 mt-2"> 
                            <input type="number" min="0" max="100" required name="PnilaiA" placeholder="Nilai Absen" class="form-control form-select-sm w-100 mt-2"> 
                            <input type="number" min="0" max="100" required name="PnilaiU" placeholder="Nilai Ujian" class="form-control form-select-sm w-100 mt-2">
                        </div>
                    </div>
                    <div class="tombol text-center mt-3 mb-2">
                        <button type="submit" name="proses" class="btn btn-primary">Proses</button>
                        <button type="reset" class="btn btn-danger">Hapus</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php
    if(isset($_POST['proses'])) {

        // * Identitas
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $kelas = $_POST['kelas'];

        // * Nilai Indonesia
        $BInilaiK = $_POST['BInilaiK'];
        $BInilaiT = $_POST['BInilaiT'];
        $BInilaiA = $_POST['BInilaiA'];
        $BInilaiU = $_POST['BInilaiU'];

        // * Nilai Inggris
        $BENnilaiK = $_POST['BENnilaiK'];
        $BENnilaiT = $_POST['BENnilaiT'];
        $BENnilaiA = $_POST['BENnilaiA'];
        $BENnilaiU = $_POST['BENnilaiU'];


        // * Nilai MTK
        $MTKnilaiK = $_POST['MTKnilaiK'];
        $MTKnilaiT = $_POST['MTKnilaiT'];
        $MTKnilaiA = $_POST['MTKnilaiA'];
        $MTKnilaiU = $_POST['MTKnilaiU'];

        // * Nilai Produktif
        $PnilaiK = $_POST['PnilaiK'];
        $PnilaiT = $_POST['PnilaiT'];
        $PnilaiA = $_POST['PnilaiA'];
        $PnilaiU = $_POST['PnilaiU'];

        require_once "class.php";

        $identitas = new Nilai($nis,$nama,$jurusan,$kelas);
        $indo = new NilaiIndo($BInilaiK,$BInilaiT,$BInilaiA,$BInilaiU);
        $inggris = new NilaiInggris($BENnilaiK,$BENnilaiT,$BENnilaiA,$BENnilaiU);
        $mtk = new NilaiMTK($MTKnilaiK,$MTKnilaiT,$MTKnilaiA,$MTKnilaiU);
        $produktif = new NilaiProduktif($PnilaiK,$PnilaiT,$PnilaiA,$PnilaiU);
?>
    <div class="konten dua container mt-5 mb-5">
        <div class="judul konten dua text-center mb-4 animasi2">
            <h4><b style="color: white; background-color: rgba(0, 0, 0, 0.712); border-radius: 15px; box-shadow: 0px 4px 0px 0px rgba(225, 225, 225, 0.637);" class="p-2 ">Nilai Ujian sekolah</b></h4>
        </div>
        <div class="konten dua card border-2 border-warning">
            <div class="judul tabel konten text-center card-header border-2 border-bottom border-warning bg-primary text-white">
                <b>Form Nilai</b>
            </div>
            <div class="konten satu text-primary bg-dark">
                <div class="judul tabel konten text-center mt-2">
                    <h4><b>Data Siswa</b></h4>
                </div>
                <div class="identitas d-flex justify-content-center">
                    <table class="mt-3 mb-3">
                        <tr>
                            <td>
                                NIS
                            </td>
                            <td>:</td>
                            <td><?php echo $identitas->getNis(); ?></td>
                        </tr>
                        <tr>
                            <td>
                                Nama
                            </td>
                            <td>:</td>
                            <td>
                                <?php echo $identitas->getNama(); ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="pe-3">
                                Jurusan 
                            </td>
                            <td class="pe-3">:</td>
                            <td>
                                <?php echo $identitas->getJurusan(); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Kelas 
                            </td>
                            <td>:</td>
                            <td>
                                <?php echo $identitas->getKelas(); ?>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="judul tabel dua text-center">
                    <h4><b>Data Nilai</b></h4>
                </div>
                <div class="data nilai d-flex justify-content-center container">
                    <table class="table text-primary table-bordered border-2 border-dark table-responsive table-sm">
                        <thead class="text-center">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">
                                    Bahasa Indonesia
                                </th scope="col">
                                <th>
                                    Bahasa Inggris
                                </th>
                                <th scope="col">
                                    Matematika
                                </th>
                                <th scope="col">
                                    Produktif
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td class="text-start">
                                    Nilai Kehadiran
                                </td>
                                <td scope="col">
                                    <?php echo $indo->getNilaiK(); ?>
                                </td>
                                <td scope="col">
                                    <?php echo $inggris->getNilaiK(); ?>
                                </td>
                                <td scope="col">
                                    <?php echo $mtk->getNilaiK(); ?>
                                </td>
                                <td scope="col">
                                    <?php echo $produktif->getNilaiK(); ?>
                                </td>
                            </tr>
                            <tr>
                                <td scope="col" class="text-start">
                                    Nilai tugas
                                </td>
                                <td scope="col">
                                    <?php echo $indo->getNilaiT(); ?>
                                </td>
                                <td scope="col">
                                    <?php echo $inggris->getNilaiT(); ?>
                                </td>
                                <td scope="col">
                                    <?php echo $mtk->getNilaiT(); ?>
                                </td>
                                <td scope="col">
                                    <?php echo $produktif->getNilaiT(); ?>
                                </td>
                            </tr>
                            <tr>
                                <td scope="col" class="text-start">
                                    Nilai Absen
                                </td>
                                <td scope="col">
                                    <?php echo $indo->getNilaiA(); ?>
                                </td>
                                <td scope="col">
                                    <?php echo $inggris->getNilaiA(); ?>
                                </td>
                                <td scope="col">
                                    <?php echo $mtk->getNilaiA(); ?>
                                </td>
                                <td scope="col">
                                    <?php echo $produktif->getNilaiA(); ?>
                                </td>
                            </tr>
                            <tr>
                                <td scope="col" class="text-start">
                                    Nilai Ujian
                                </td>
                                <td scope="col">
                                    <?php echo $indo->getNilaiU(); ?>
                                </td>
                                <td scope="col">
                                    <?php echo $inggris->getNilaiU(); ?>
                                </td>
                                <td scope="col">
                                    <?php echo $mtk->getNilaiU(); ?>
                                </td>
                                <td scope="col">
                                    <?php echo $produktif->getNilaiU(); ?>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot class="text-center">
                            <tr>
                                <th>
                                    Nilai akhir
                                </th>
                                <th>
                                    <?php echo $indo->nilaiAkhir(); ?>
                                </th>
                                <th>
                                    <?php echo $inggris->nilaiAkhir(); ?>
                                </th>
                                <th>
                                    <?php echo $mtk->nilaiAkhir(); ?>
                                </th>
                                <th>
                                    <?php echo $produktif->nilaiAkhir(); ?>
                                </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php
    }
?>

    <script src="../latihan_8/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>