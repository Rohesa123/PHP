<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .konten {
            padding: 0px 50px 0px 50px;
        }
        .login {
            border-radius: 15px;
            border: 2px solid rgba(135, 167, 135, 0.836);
            padding: 80px 0px 30px 0px;
            max-width: 600px;
            height: 350px;
            background-color: rgb(85, 122, 90);
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
        }
        .login input {
            max-width: 250px;
        }
        .login .konten{
            display: flex;
            justify-content: center;
        }
        .konten .login .status {
            padding: 0px 5px 0px 5px;
        }
        .konten .login .status .col-12 {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin: 10px auto 0pc auto;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <div class="konten">
        <div class="login container mt-5 m-auto bg-warning">
            <form method="post">
                <div class="mb-3 row">
                    <div class="konten 1 col-12">
                        <input type="text" name="user" class="form-control" placeholder="Username" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="konten 2 col-12">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                </div>
                <div class="row">
                    <div class="konten 3 col-12">
                        <button class="btn btn-primary" name="login" type="submit">Login</button>
                    </div>
                </div>
            </form>
<?php
if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];

    if ($user !== "Admin" && $password == "12345") {
?>
            <div class="status row">
                <div class="col-12">
                    <center>
                        <b style="color: red;">Username Anda Salah !</b>
                    </center>
                </div>
            </div>
<?php
    } else if ($user == "Admin" && $password !== "12345") {
?>
            <div class="status row">
                <div class="col-12">
                    <center>
                        <b style="color: red;">Password Anda Salah !</b>
                    </center>
                </div>
            </div>
<?php
    } else if ($user !== "Admin" && $password !== "12345") {
?>
            <div class="status row">
                <div class="col-12">
                    <center>
                        <b style="color: red;">Username Dan Password Anda Salah !</b>
                    </center>
                </div>
            </div>
<?php
    } else if ($user == "Admin" && $password == "12345") {
?>
        <script>
            window.location.replace("halaman.php");
        </script>
<?php
}
}
?>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>