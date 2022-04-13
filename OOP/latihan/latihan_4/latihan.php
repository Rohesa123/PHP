<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        tr {
            text-align: left;
        }
        th {
            text-align: left;
        }
    </style>
</head>
<body>
    <form action="" method="post" class="">
        <div class="konten col ps-5 pe-5 ms-auto me-auto w-75 mt-5 mb-5">
            <div class="konten1 text-start">
                <label for="nama" class="form-label">Nama Pembalap</label>
                <input type="text" name="nama" id="nama" required placeholder="Masukkan Nama Pembalap" class="form-control border-1 border-primary mb-3">
            </div>
            <div class="konten2">
                <label for="tim_n" class="form-label">Nama Tim</label>
                <input type="text" name="tim" id="tim_n" required placeholder="Masukkan Nama Tim" class="form-control border-1 border-primary mb-3">
            </div>
            <div class="konten3">
                <label for="sponsor" class="form-label">Sponsor</label>
                <input type="text" name="sponsor" id="sponsor" required placeholder="Sponsor" required class="form-control border-1 border-primary mb-3">
            </div>
            <div class="konten4">
                <label for="kecepatan" class="form-label">Kecepatan</label>
                <input type="number" name="kecepatan" id="kecepatan" required placeholder="Kecepatan" class="form-control border-1 border-primary mb-3">
            </div>
            <div class="konten5">
                <label for="kesehatan" class="form-label">Kesehatan</label>
                <input type="number" name="kesehatan" id="kesehatan" required placeholder="Kesehatan" class="form-control border-1 border-primary mb-3">
            </div>
            <div class="konten6 text-center">
                <button type="submit" name="kirim" class="btn btn-primary mb-2">Kirim</button>
                <button type="reset" class="btn btn-danger mb-2">Reset</button>
            </div>
        </div>
    </form>
<?php
if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $nama_tim = $_POST['tim'];
    $sponsor = $_POST['sponsor'];
    $kecepatan = $_POST['kecepatan'];
    $kesehatan = $_POST['kesehatan'];

    require_once "class.php";

    $pembalap1 = new Pembalap($nama, $nama_tim, $sponsor, $kecepatan, $kesehatan);
?>
    <table class="table ms-auto me-auto w-75 table-dark table-striped">
        <tr>
            <th>Nama Pembalap</th>
            <td>:</td>
            <td><?php echo $pembalap1->name; ?></td>
        </tr>
        <tr>
            <th>Nama Tim</th>
            <td>:</td>
            <td><?php echo $pembalap1->team_name; ?></td>
        </tr>
        <tr>
            <th>Sponsor</th>
            <td>:</td>
            <td><?php echo $pembalap1->sponsor; ?></td>
        </tr>
        <tr>
            <th>Kecepatan</th>
            <td>:</td>
            <td><?php echo "($pembalap1->speed_bike) > Status : {$pembalap1->kecepatan()}"; ?></td>
        </tr>
        <tr>
            <th>Kesehatan</th>
            <td>:</td>
            <td><?php echo "($pembalap1->health) > Status : {$pembalap1->kesehatan()}"; ?></td>
        </tr>
    </table>
<?php
}
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
