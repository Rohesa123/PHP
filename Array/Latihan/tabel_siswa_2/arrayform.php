<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background-image: url(latar.png);
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .navbar {
            z-index: 1;
        }

        .logo .logo.konten {
            z-index: 0;
            animation: animasi_logo 2s cubic-bezier(0.8, 0.66, 0.52, 1.46) 1 forwards;
        }

        @keyframes animasi_logo {
            0% {
                transform: translateY(-180px) scale(0.5);
            }

            50% {
                transform: translateY(0px) scale(0.5);
            }

            100% {
                transform: scale(1.1);
            }
        }

        .tombol button {
            transition: 0.45s;
        }

        .tombol button:hover {
            transform: scaleX(1.1);
            background-color: rgba(20, 240, 20, 0.836);
            border: 2px solid rgba(20, 240, 20, 0.836);
        }

        .inputan input {
            color: black;
        }

        .inputan {
            transition: 1s;
        }

        .inputan:hover {
            background-color: rgba(20, 240, 20, 0.836);
            border: 1px solid rgba(20, 240, 20, 0.836);
        }

        .inputan:focus {
            background-color: rgba(13, 109, 253, 0.700);
            border: 1px solid rgba(13, 109, 253, 0.700);
        }
    </style>
    <title>FOUR HARDOLIN</title>
</head>

<body>
    <div class="latar"></div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
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
                    <a class="nav-link active" aria-current="page" href="arrayform.php">Data Siswa</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar Penutup -->

    <!-- Konten -->
    <center>
        <div class="logo">
            <img src="logo-custom.png" width="200px" class="logo konten">
        </div>
        <div class="card text-dark bg-light mb-3" style="max-width: 30rem;">
            <div class="card-header text-sm-start bg-primary"><b>Masukan Jumlah Siswa</b></div>
            <div class="card-body bg-warning">
                <form action="" method="post">
                    <p class="text-sm-start">Jumlah :</p>
                    <input type="number" class="form-control inputan" name="jumlah" placeholder="Jumlah Siswa" min="1"
                        required>
                    <div class="col-12 mt-2 tombol">
                        <button type="submit" class="btn btn-primary" name="proses">Proses</button>
                    </div>
                </form>
            </div>
        </div>
    </center>
    <!-- Konten Penutup -->

    <!-- Program php -->
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
            <form action="hasilarrayform.php" method="post">
                <div class="card text-dark bg-light mb-3" style="max-width: 30rem;">
                    <div class="card-header text-sm-start bg-primary"><b>Data Siswa ke -
                            <?php echo $i; ?>
                        </b></div>
                    <div class="card-body bg-warning">
                        <p class="text-sm-start">NIS :</p>
                        <input type="number" class="form-control inputan" name="nis[]" placeholder="Masukan NIS"
                            required>
                        <p class="text-sm-start">Nama :</p>
                        <input type="text" class="form-control inputan" name="nama[]" placeholder="Masukan Nama"
                            required>
                        <p class="text-sm-start">Kelas :</p>
                        <select class="form-select inputan" aria-label="Default select example" name="kelas">
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
                        <p><b>Nilai Ulangan :</b></p>
                        <p class="text-sm-start">Nilai Bahasa Indonesia :</p>
                        <input type="number" class="form-control inputan" name="bindo[]"
                            placeholder="Masukan Nilai Bahasa Indonesia" required min="0" max="100">
                        <p class="text-sm-start">Nilai Bahasa Inggris :</p>
                        <input type="number" class="form-control inputan" name="binggris[]"
                            placeholder="Masukan Nilai Bahasa Inggris" required min="0" max="100">
                        <p class="text-sm-start">Nilai Matematika:</p>
                        <input type="number" class="form-control inputan" name="matematika[]"
                            placeholder="Masukan Nilai Matematika" required min="0" max="100">
                        <p class="text-sm-start">Nilai Produktif :</p>
                        <input type="number" class="form-control inputan" name="produktif[]"
                            placeholder="Masukan Nilai Produktif" required min="0" max="100">
                    </div>
                </div>
                <?php
    }
?>
                <div class="col-3 mt-2 tombol">
                    <button type="submit" class="btn btn-primary" name="kirim">Kirim</button>
                </div>
            </form>
        </center>
    </div>
    <br><br><br><br><br>
    <?php
}
?>
    <!-- Penutup Program php -->

    <!-- Link Boostrap Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>