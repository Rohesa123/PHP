<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
        <div class="konten row ms-auto me-auto container d-flex justify-content-center">
            <div class="judul konten container row text-center">
                <h2 class="pt-3 pb-3">Raport</h2>
            </div>
            <div class="tabel konten row bg-warning p-0">
                <div class="judul tabel konten bg-primary card-header">
                    <h4 class="font-monospace mt-2">Penilaian</h4>
                </div>
                <div class="data col-6">
                    <div class="input11 row ps-4 pb-3">
                        <label for="nama" class="row form-label mb-0">Nama</label>
                        <input type="text" name="nama" id="nama" required placeholder="Masukkan Nama" class="row-cols-1 form-control form-control-sm">
                    </div>
                    <div class="input12 row ps-4 pb-3">
                        <label for="kelas" class="row form-label mb-0">Kelas</label>
                        <input type="text" name="kelas" id="kelas" required placeholder="Masukkan Kelas" class="row-cols-1 form-control form-control-sm">
                    </div>
                    <div class="input13 row ps-4 pb-3">
                        <label for="nis" class="row form-label mb-0">NIS</label>
                        <input type="number" name="nis" id="nis" required placeholder="Masukkan NIS" min="0" class="row-cols-1 form-control form-control-sm">
                    </div>
                    <div class="input4 row ps-4 pb-3">
                        <label for="mapel" class="row form-label mb-0">Mapel</label>
                        <input type="text" name="mapel" id="mapel" required placeholder="Masukkan Mapel" class="row-cols-1 form-control form-control-sm">
                    </div>
                </div>
                <div class="nilai col-6 ps-4 pe-4">
                    <div class="input21 row ps-4 pb-3">
                        <label for="nh" class="row form-label mb-0">Nilai Harian (45%)</label>
                        <input type="number" name="nh" id="nh" min="0" max="100" required placeholder="Masukkan Nilai Harian" class="row-cols-1 form-control form-control-sm">
                    </div>
                    <div class="input22 row ps-4 pb-3">
                        <label for="n_uts" class="row form-label mb-0">Nilai UTS (20%)</label>
                        <input type="number" name="n_uts" id="n_uts" min="0" max="100" required placeholder="Masukkan Nilai UTS" class="row-cols-1 form-control form-control-sm">
                    </div>
                    <div class="input23 row ps-4 pb-3">
                        <label for="n_uas" class="row form-label mb-0">Nilai UAS (20%)</label>
                        <input type="number" name="n_uas" id="n_uas" min="0" max="100" required placeholder="Masukkan UAS" class="row-cols-1 form-control form-control-sm">
                    </div>
                    <div class="input24 row ps-4 pb-3">
                        <label for="n_a" class="row form-label mb-0">Nilai Absensi (15%)</label>
                        <input type="number" name="absensi" id="n_a" min="0" max="100" required placeholder="Masukkan Nilai Absensi" class="row-cols-1 form-control form-control-sm">
                    </div>
                </div>
                <div class="tombol row-col-1 text-center mb-4">
                    <button name="kirim" type="submit" class="btn btn-primary">Kirim</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </div>
        </div>
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
    <table class="ms-auto me-auto mt-5 table table-striped container table-dark">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>NIS</th>
                <th>Mapel</th>
                <th>Nilai Harian (45%)</th>
                <th>Nilai UTS (20%)</th>
                <th>Nilai UAS (20%)</th>
                <th>Nilai Absensi (15%)</th>
                <th>Hasil</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $raport1->nama; ?></td>
                <td><?php echo $raport1->kelas; ?></td>
                <td><?php echo $raport1->nis; ?></td>
                <td><?php echo $raport1->mapel; ?></td>
                <td><?php echo $raport1->nilai_harian; ?></td>
                <td><?php echo $raport1->nilai_uts; ?></td>
                <td><?php echo $raport1->nilai_uas; ?></td>
                <td><?php echo $raport1->absensi; ?></td>
                <td><?php echo "{$raport1->hasil()} > Grade : {$raport1->grade()} "; ?></td>
                <td><?php echo $raport1->status(); ?></td>
            </tr>
        </tbody>
    </table>
<?php
}
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
