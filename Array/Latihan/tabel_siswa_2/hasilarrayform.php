<!-- Mengambil data di arrayform.php -->
<?php
if (isset($_POST['kirim'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $bindo = $_POST['bindo'];
    $binggris = $_POST['binggris'];
    $matematika = $_POST['matematika'];
    $produktif = $_POST['produktif'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background-image: url(latar.png);
            font-family:Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
    <title>FOUR HARDOLIN</title>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="logo-custom.png" width="90px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="arrayform.php">Data Siswa</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar Penutup -->

    <br><br>
    <!-- Container -->
    <div class="container">
        <table class="table table-striped">
            <thead class="bg-primary">
                <tr>
                    <th scope="col">
                        NIS
                    </th>
                    <th scope="col">
                        NAMA
                    </th>
                    <th scope="col">
                        KELAS&nbsp;&nbsp;&nbsp;
                    </th>
                    <th scope="col">
                        NILAI Bahasa Indonesia
                    </th>
                    <th scope="col">
                        NILAI Bahasa Inggris
                    </th>
                    <th scope="col">
                        NILAI PAS
                    </th>
                    <th scope="col">
                        NILAI KEHADIRAN
                    </th>
                    <th scope="col">
                        Rata - rata
                    </th>
                    <th scope="col">
                        Status
                    </th>
                </tr>
            </thead>

<!-- Program php -->
<?php
for ($i = 0; $i < count($nis); $i++) {
    $ratarata = ($bindo[$i] + $binggris[$i] + $matematika[$i] + $produktif[$i]) / 4;
?>
            <tbody class="bg-warning">
                <tr>
                    <td><?php echo $nis[$i] ?></td>
                    <td><?php echo $nama[$i] ?></td>
                    <td><?php echo $kelas ?></td>
                    <td><?php echo $bindo[$i] ?></td>
                    <td><?php echo $binggris[$i] ?></td>
                    <td><?php echo $matematika[$i] ?></td>
                    <td><?php echo $produktif[$i] ?></td>
                    <td><?php echo $ratarata ?></td>
                    <td>
<?php
    if ($ratarata >= 75) {
        echo "Lulus";
    } else {
        echo "Tidak Lulus";
    }
?>
                    </td>
                </tr>
            </tbody>
<?php
}
?>
<!-- Penutup program php -->

        </table>
    </div>
    <!-- Penutup Container -->

    <!-- Link Boostrap Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
