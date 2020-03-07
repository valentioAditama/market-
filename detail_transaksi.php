<?php 
session_start();

require_once 'function.php';
$user = $_SESSION['login'];

$profile = query("SELECT * FROM data_user WHERE id_user = '$user'")[0];
$id_transaksi = $_SESSION['transaksi'][0]['id_transaksi'];
$nama_barang = $_SESSION['transaksi'][0]['nama_barang'];
$pelapak = $_SESSION['transaksi'][0]['pelapak'];
$jumlah = $_SESSION['transaksi'][0]['jumlah'];
$id_barang = $_SESSION['transaksi'][0]['id_barang'];
$harga_barang = query("SELECT harga_barang FROM barang WHERE id_barang = $id_barang")[0];
$harga_barang = $harga_barang['harga_barang'];
$total = $jumlah * $harga_barang;

$barang = query("
  SELECT *
  FROM barang 
  WHERE id_barang = '$id_barang'")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<script type="text/javascript" src="toastr.min.js"></script>
<script src="sweetalert/sweetalert2.all.min.js"></script>


<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="bootstrap-number-input.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="toastr.min.css">
<link rel="stylesheet" href="style.css">

<body>
    <script>
        function openSlideMenu() {
            document.getElementById('menu').style.width = '200px';
            document.getElementById('content').style.marginLeft = '200px';
        }

        function closeSideMenu() {
            document.getElementById('menu').style.width = '0';
            document.getElementById('content').style.marginLeft = '0';
        }
    </script>

    <div id="content">
        <span class="slide">

        </span>

        <div id="menu" class="nav">
            <a href="#" class="close" onclick="closeSideMenu()">
                <i class="fa fa-times"></i>
            </a>
            <a href="market.php"><i class="fa fa-home"></i> Home</a>
            <a href="AboutUs.php"> <i class="fa fa-question-circle"></i> About</a>
            <a href="Jual.php"><i class="fa fa-cart-plus"></i> Jual</a>
            <a href=""> <i class="fa fa-shopping-bag"></i> Kategori</a>
            <a href=""> <i class="fa fa-sign-out"></i> Logout</a>
        </div>


        <form method="post" action="">

            <body style="background-color: rgb(236, 234, 226)">
                <nav class="navbar navbar-expand-sm navbar-dark bg-light">
                    <a href="#" onclick="openSlideMenu()">
                        <i class="fa fa-bars"></i>
                    </a>
                    &nbsp;
                    <a class="navbar-brand text-dark" href="m4rket.php">MARKET</a>

                    <input type="text" class="form-control" name="query" value="<?= @$query ?>"
                        placeholder="Cari produk barang disini.." />
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" name="cari">Cari</button>
                    </div>

                    &nbsp;
        </form>
        <?php if (!isset($_SESSION['login'])) : ?>
        <a href="login.php"><button class="btn btn-success">Login</button></a>
        <?php else : ?>
        <a href="Profile.php"><img style="margin-left: 8px; margin-top: 10px;" height="30"
                src="Profile/<?= !empty($foto) ? "$foto" : "default.png" ?>">
            <p style="font-size: 12px; margin: 0px; margin-left: 10px;"><?= word_limit($profile['nama'], 8) ?></p>
        </a>
        <?php endif; ?>
        </nav>

        </nav>
        <ol class="breadcrumb h-25">
            <li class="breadcrumb-item h-25 "><a href="market.php">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Kategori</a></li>
            <li class="breadcrumb-item active">Toko</li>
        </ol>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                </div>

                <div class="col-sm-8" style="background-color: aliceblue; height: 600px; width: 800px; ">
                    <div class="row"
                        style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-weight: 500; font-size: 20px; margin-left: 30px;">
                        <div class="col-sm-4" style="margin-top: 40px; margin-left: 20px;">
                            Nama Pelapak
                        </div>
                        <div class="col-sm-4" style="margin-top: 40px;">
                            Produk
                        </div>
                        <div class="col-sm-3" style="margin-top: 40px;">
                            Nama pembeli
                        </div>
                    </div>

                    <div class="row" style="margin-left: 30px;">
                        <div class="col-sm-4" style="margin-top: 20px; margin-left: 25px;">
                            <a href=""><img src="img_avatar1.png" height="100px" style="border-radius: 200px;"
                                    alt=""></a>
                        </div>
                        <div class="col-sm-4" style="margin-top: 20px;">
                            <a href=""><img src="img/<?=$barang['gambar_barang'] ?>" height="100px;" alt=""></a>
                        </div>
                        <div class="col-sm-3" style="margin-top: 20px; margin-left: 5px;">
                            <a href=""><img src="Profile/<?= !empty($foto) ? "$foto" : "default.png" ?>" height="100px" style="border-radius: 200px;"
                                    alt=""></a>
                        </div>
                        <div class="col-sm-2" style="margin-top: 20px;">

                        </div>
                    </div>
                    <div class="row" style="margin-left: 30px;">
                        <div class="col-sm-3" style="margin-left: 25px; margin-top: 10px;">
                            <a href="" style="color: black;"><?=$pelapak?></a>
                        </div>
                        <div class="col-sm-4" style="margin-top: 10px; margin-left: 60px; ">
                            <a href="" style="color: black;"><?=word_limit($nama_barang,100) ?></a>
                        </div>
                        <div class="col-sm-3" style="margin-top: 10px; margin-left: 60px; margin-left: 20px; ">
                            <a href="" style="color: black;"> <?=$profile['nama']?> </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2" style="margin-top: 80px; margin-left: 30px; font-size: 18px;">
                            Id Transaksi:
                        </div>
                        <div class="col-sm-2" style="margin-top: 80px; font-weight: 500;">
                            <?=$id_transaksi ?>
                        </div>
                        <div class="col-sm-2" style="margin-top: 80px; margin-left: 60px;">
                            Jumlah Barang:
                        </div>
                        <div class="col-sm-2" style="margin-top: 80px; margin-left: 60px;">
                            <?=$jumlah ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2" style="margin-top: 80px; margin-left: 30px;">
                            Harga Barang:
                        </div>
                        <div class="col-sm-2"
                            style="margin-top: 75px; color: rgb(230, 91, 36); font-family: roboto; font-size: 20px; font-weight: 600; ">
                            <?=explode_money($harga_barang) ?>
                        </div>
                        <div class="col-sm-2" style="margin-top: 80px; margin-left: 60px;">
                            Total Belanja:
                        </div>
                        <div class="col-sm-2"
                            style="color: rgb(230, 91, 36); font-family: roboto; font-size: 20px; font-weight: 600; margin-top: 75px; margin-left: 60px;">
                            <?=explode_money($total) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-1" style="margin-top: 90px;">
                            <a href="home.php"></a><button class="btn btn-primary">Selesai</button>
                        </div>
                        <div class="col-sm-2" style="margin-top: 90px;">
                            <button class="btn btn-info">Chat Pelapak</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>