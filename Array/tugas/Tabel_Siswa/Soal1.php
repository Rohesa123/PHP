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
        .navbar {
            z-index: 1;
        }
        .navbar.navbar-expand-lg {
            background-color: rgb(128, 128, 128);
            color: black;
        }
        .logo-a {
            z-index: 0;
            animation: logo-a 3s cubic-bezier(0.41, 1.23, 1, 1.39) 1 forwards;
        }
        @keyframes logo-a {
            0% {
                transform: translateY(-180px) scale(0.2);
            }
            50% {
                transform: translateY(0px) scale(0.2);
            }
            100% {
                transform: scale(1.1);
            }
        }
        .text-sm-start {
            transform:translateY(15px) ;
        }
    </style>
    <title>Soal 1</title>
</head>
<body>

<!-- navbar pembuka -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="logo-custom.png" width="90px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
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

<!-- conten pembuka -->
    <center>
        <div class="logo">
            <img src="logo-custom.png" class="logo-a" width="200px">
        </div>
        <div class="judul">
            <h4>Penilaian  Mata Pelajaran Produktif</h4>
        </div>
        <div class="card text-dark bg-primary mb-3" style="max-width: 30rem;">
            <div class="card-header text-start"><b>Masukan Jumlah Siswa</b></div>
            <div class="card-body bg-warning">
                <form action="" method="post">
                        <p class="text-sm-start">Jumlah :</p>
                    <input type="number" class="form-control" name="jumlah" placeholder="Jumlah Siswa" min="1">
                    <div class="col-12 mt-2">
                        <button type="submit" class="btn btn-primary" name="proses">Proses</button>
                    </div>
                </form>
            </div>
        </div>
    </center>
<!-- conten penutup -->

<?php
error_reporting(0);
if (isset($_POST['proses'])) {
    $jumlah = $_POST['jumlah'];
    ?>
<div class="jumlah_data">
        <?php
for ($i = 1; $i <= $jumlah; $i++) {
        ?>
        <center>
            <form action="Data_Nilai.php" method="post">
                <div class="card text-dark bg-light mb-3" style="max-width: 30rem;">
                    <div class="card-header text-start bg-primary"><b>Data Siswa ke -<?php echo $i; ?></b></div>
                    <div class="card-body bg-warning">
                        <p class="text-sm-start">NIS :</p>
                        <input type="number" class="form-control" name="nis[]" placeholder="Masukan NIS" required>
                        <p class="text-sm-start">Nama :</p>
                        <input type="text" class="form-control" name="nama[]" placeholder="Masukan Nama" required>
                        <p class="text-sm-start">Kelas :</p>
                        <select class="form-select" aria-label="Default select example" name="kelas">
                            <option selected>Kelas</option>
                            <option value="X RPL 1">X RPL 1</option>
                            <option value="X RPL 2">X RPL 2</option>
                            <option value="XI RPL 1">XI RPL 1</option>
                            <option value="XI RPL 2">XI RPL 2</option>
                            <option value="XI RPL 3">XI RPL 3</option>
                            <option value="XII RPL 1">XII RPL 1</option>
                            <option value="XII RPL 2">XII RPL 2</option>
                            <option value="XII RPL 3">XII RPL 3</option>
                        </select>
                        <p><b><i>Nilai Produktif</i></b></p>
                        <p class="text-sm-start">Nilai Bulanan <i><b>(35%)</i></b> :</p>
                        <input type="number" class="form-control" name="bulanan[]" placeholder="Masukan Nilai Bulanan" min="0" max="100" required>
                        <p class="text-sm-start">Nilai PTS <i><b>(15%)</i></b> :</p>
                        <input type="number" class="form-control" name="pts[]" placeholder="Masukan Nilai PTS" required>
                        <p class="text-sm-start">Nilai PAS <i><b>(20%)</i></b>:</p>
                        <input type="number" class="form-control" name="pas[]" placeholder="Masukan Nilai PAS" required>
                        <p class="text-sm-start">Kehadiran <i><b>(30%)</i></b> :</p>
                        <input type="number" class="form-control" name="kehadiran[]" placeholder="Masukan Nilai Kehadiran" required>
                    </div>
                </div>
                <?php }?>
                <div class="col-12 mt-2">
                    <button type="submit" class="btn btn-primary" name="kirim">Kirim</button>
                </div>
            </form>
        </center>
    </div>
<?php
}
?>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffd700" fill-opacity="1"
            d="M0,128L48,128C96,128,192,128,288,149.3C384,171,480,213,576,218.7C672,224,768,192,864,154.7C960,117,1056,75,1152,80C1248,85,1344,139,1392,165.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
<!-- conten penutup -->

<!-- footer pembuka -->
    <div class="footer" style="background: #ffd700;">
        <div class="text-sm-center">
            <h4 class="mb-0 p-3">&copy;2022 created with
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                    class="bi bi-hearts text-danger" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M4.931.481c1.627-1.671 5.692 1.254 0 5.015-5.692-3.76-1.626-6.686 0-5.015Zm6.84 1.794c1.084-1.114 3.795.836 0 3.343-3.795-2.507-1.084-4.457 0-3.343ZM7.84 7.642c2.71-2.786 9.486 2.09 0 8.358-9.487-6.268-2.71-11.144 0-8.358Z" />
                </svg> by Four Hardolin
            </h4>
        </div>
    </div>
<!-- footer penutup -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
