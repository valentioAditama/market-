<?php
session_start();
include_once 'function.php';
@$user = $_SESSION['login'];
@$data_user = query("SELECT * FROM data_user WHERE id_user = '$user'")[0];
$foto = $data_user['profile'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="logo.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome! || MARKET</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="introMarket2.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-light">
        <a class="navbar-brand text-dark" href="m4rket.php">MARKET</a>
        <input type="text" class="form-control" placeholder="Cari produk barang disini.." />
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">Cari</button>
        </div>
        &nbsp;
        <?php if (!isset($_SESSION['login'])) : ?>
            <a href="login.php"><button class="btn btn-success">Login</button></a>
        <?php else : ?>
            <a href="profile.php">
                <img width="50" height="50" src="Profile/<?= !empty($foto) ? "$foto" : "default.png" ?>">
                <p><?= word_limit($data_user['nama'],8) ?> </p>
            </a>
        <?php endif; ?>
    </nav>
    <center>
        <font class="font1">
            Selamat Datang di Tempat <br>
            Dimana kamu bisa menjual sesuatu <br>
            di sini <br>
        </font>

        <font class="font2">
            disini kamu bisa menjual atau membeli barang yang kamu cari <br>
            yuk cari barang kamu <b>sekarang!</b>
        </font>
        <br>
        <br>
        <a href="login.php"><button class="btn btn-info" style="border-radius: 20px;"> Mulai sekarang</button></a>
        <div class="container-fluid">
            <br>
            <br>
            <img src="0.png" class="img-fluid" alt="responsive-image" style="height: 600px;">
        </div>
        <div class="container-fluid" style="background-color: rgb(199, 194, 187);">
            <div class="container">
                <div class="row">
                    <div class="col" style="margin-top: 80px; margin-bottom: 50px;">
                        <img src="Screenshot (21).png" class="img-fluid" style="margin-left: -40px;" height="650px" alt="">
                    </div>
                    <div class="col" style="margin-top: 260px;">
                        <font class="text2">
                            Disini kalian bisa menjual produk-produk <br>
                            yang kalian ingin jual, kalian bebas untuk <br>
                            menjual produk yang kalian sukai <br>
                            soo ini lah marketplace kami! M4rket
                        </font>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="background-color: rgb(235, 219, 219);">
            <div class="container">
                <div class="row">
                    <div class="col" style="margin-top: 250px; margin-left: -200px;">
                        <font class="text3">
                            Disini kalian bisa mencari produk <br> yang kalian butuhkan <br>
                            baik dari perlengkapan <u><b>sekolah</b></u> <br>
                            hingga aksesoris <b> <br>
                                <u> Handphone</b></u>
                        </font>
                    </div>
                    <div class="col">
                        <img src="Screenshot (23).png" height="500px" style="margin-top: 150px; margin-right: -150px; margin-bottom: 100px;" alt="">
                    </div>
                </div>
            </div>
            <div class="col">
                <a href="login.php"><button class="btn btn-outline-primary" style="border-radius: 20px; margin-top: -100px; height: 50px; width: 20;">Mulai
                        sekarang</button></a>
            </div>
    </center>
</body>

</html>