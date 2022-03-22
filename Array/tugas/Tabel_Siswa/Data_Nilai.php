<?php
if (isset($_POST['kirim'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $bulanan = $_POST['bulanan'];
    $pts = $_POST['pts'];
    $pas = $_POST['pas'];
    $kehadiran = $_POST['kehadiran'];
    $a = 1;
} else {
    $a = 0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            background-color: rgba(74, 153, 255, 0.877);
        }
        .navbar.navbar-expand-lg {
            background-color: rgb(128, 128, 128);
            color: black;
        }
    </style>
    <title>Document</title>
</head>
<body>

<!-- navbar pembuka -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="logo-custom.png" width="90px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="Utama.php">Home</a>
                    <a class="nav-link" href="Soal1.php">Soal 1</a>
                    <a class="nav-link" href="Data_Nilai.php">Data Nilai</a>
                </div>
            </div>
        </div>
    </nav>
<!-- navbar penutup -->

<!-- tabel -->
<?php
if ($a == 1) {
?>
<div class="container mt-5 konten-1">
    <table class="table table-striped border-primary">
        <thead>
            <tr class="bg-primary">
                <th scope="col">NIS</th>
                <th scope="col">NAMA</th>
                <th scope="col">KELAS</th>
                <th scope="col">
                    <p>NILAI BULANAN</p>
                    <P>(35%)</P>
                </th>
                <th scope="col">
                    <p>NILAI PTS</p>
                    <P>(15%)</P>
                </th>
                <th scope="col">
                    <p>NILAI PAS</p>
                    <P>(20%)</P>
                </th>
                <th scope="col">
                    <p>NILAI KEHADIRAN</p>
                    <P>(30%)</P>
                </th>
                <th scope="col">
                    <p>NILAI </p>
                    <P>RAPORT</P>
                </th>
                <th scope="col">GRADE</th>
            </tr>
        </thead>
<?php
    for ($i = 0; $i < count($nis); $i++) {
?>
<?php
        $nilai_raport = ($bulanan[$i] * 0.35) + ($pts[$i] * 0.15) + ($pas[$i] * 0.2) + ($kehadiran[$i] * 0.3);
?>
        <tbody>
            <tr class="bg-warning">
                <td>
                    <?php echo $nis[$i] ?>
                </td>
                <td>
                    <?php echo $nama[$i] ?>
                </td>
                <td>
                    <?php echo $kelas ?>
                </td>
                <td>
                    <?php echo $bulanan[$i] ?>
                </td>
                <td>
                    <?php echo $pts[$i] ?>
                </td>
                <td>
                    <?php echo $pas[$i] ?>
                </td>
                <td>
                    <?php echo $kehadiran[$i] ?>
                </td>
                <td>
                    <?php echo $nilai_raport ?>
                </td>
                <td>
<?php
        if ($nilai_raport > 100 || $nilai_raport < 0) {
            echo "Nilai Tidak Valid";
        } else if ($nilai_raport >= 90) {
            echo "Grade A";
        } else if ($nilai_raport >= 80) {
            echo "Grade B";
        } else if ($nilai_raport >= 70) {
            echo "Grade C";
        } else if ($nilai_raport >= 60) {
            echo "Grade D";
        } else if ($nilai_raport < 60) {
            echo "Grade E";
        }
?>
                </td>
            </tr>
        </tbody>
<?php
}
?>
    </table>
</div>
<?php
} else {
?>
<div class="container mt-5 konten-2">
    <center>
        <table class="table table-striped border-warning">
            <thead>
                <tr class="bg-primary">
                    <th scope="col" class="text-sm-center"><h4>Error</h4></th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-warning text-sm-center">
                    <th>Maaf data belum di isi, silahkan input data terlebih dahulu</th>
                </tr>
                <tr class="bg-warning">
                    <th class="text-sm-center">
                        <a href="Soal1.php"><button class="btn btn-primary">Isi Data</button></a>
                    </th>
                </tr>
            </tbody>
        </table>
    </center>
</div>
<?php
}
?>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffd700" fill-opacity="1" d="M0,128L48,128C96,128,192,128,288,149.3C384,171,480,213,576,218.7C672,224,768,192,864,154.7C960,117,1056,75,1152,80C1248,85,1344,139,1392,165.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
</svg>
<!-- conten penutup -->

<!-- footer pembuka -->
    <div class="footer mb-0 pb-5" style="background: #ffd700;">
        <div class="text-sm-center">
            <h4 class="mb-0 p-3">&copy;2022 created with
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-hearts text-danger" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.931.481c1.627-1.671 5.692 1.254 0 5.015-5.692-3.76-1.626-6.686 0-5.015Zm6.84 1.794c1.084-1.114 3.795.836 0 3.343-3.795-2.507-1.084-4.457 0-3.343ZM7.84 7.642c2.71-2.786 9.486 2.09 0 8.358-9.487-6.268-2.71-11.144 0-8.358Z" />
                </svg> by Four Hardolin
            </h4>
        </div>
    </div>
<!-- footer penutup -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>