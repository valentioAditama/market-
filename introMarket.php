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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>~Hai</title>
</head>
<link rel="stylesheet" href="introMarket.css">

<body>
    <div class="content1">
        <div class="navbar">
            <ul>
                <li><a href="blank">Home</a></li>
                <li><a href="">Belanja</a></li>
                <li><a href="blank">Contact</a></li>
                <li><a href="blank">About</a></li>
                <li style="float: right;">
                    <?php if (!isset($_SESSION['login'])) : ?>
                        <a href="login.php" class="sign-in">Sign In</a>
                    <?php else : ?>
                        <a href="Profile.php">
                            <img width="100" height="100" src="Profile/<?= !empty($foto) ? "$foto" : "default.png" ?>">
                            <p style="margin-top: -15px; "><?= $data_user['nama'] ?></p>
                        </a>
                    <?php endif; ?>

                </li>
            </ul>
        </div>
        <div class="about1">
            <center>
                <font class="font1">
                    Selamat Datang di Tempat <br>
                    Dimana kamu bisa menjual sesuatu <br>
                    di sini
                </font>
                <br>
                <br>
                <font class="font2">
                    disini kamu bisa menjual atau membeli barang yang kamu cari <br>
                    yuk cari barang kamu <b>sekarang!</b>
                </font>
                <br>
                <br>
                <br>
                <a href="login.php" class="getstarted">Mulai sekarang</a>
            </center>
        </div>
        <center>

        </center>
        <div class="content2">
            <div class="about2">
                <img src="Screenshot (21).png" height="550px" style="margin-top: -480px; margin-left: -100px;" alt="">
                <br>
                <font class="font3" style="float: right; margin-top: -380px; margin-right: 180px;">
                    Disini kalian bisa menjual produk-produk <br>
                    yang kalian ingin jual, kalian bebas untuk <br>
                    menjual produk yang kalian sukai <br>
                    soo ini lah marketplace kami! M4rket
                </font>
            </div>
        </div>
    </div>
    <div class="content3">
        <div class="about3">
            <img src="Screenshot (23).png" style="height: 400px; margin-top: 305px; margin-left: 565px;" alt="">
            <br>
            <table style=" margin-top: -350px; margin-left: 100px;">
                <tr>
                    <td class="td1">
                        Disini kalian bisa mencari produk <br> yang kalian butuhkan <br>
                        baik dari perlengkapan <u><b>sekolah</b></u> <br>
                        hingga aksesoris <b> <br>
                            <u> Handphone</b></u>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>