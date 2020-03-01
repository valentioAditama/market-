<?php
session_start();
include_once "function.php";
@$user = $_SESSION['login'];
@$daftarBarang = query("SELECT * FROM barang WHERE id_user !='$user' AND stok_barang > 0");
@$profile = query("SELECT * FROM data_user WHERE id_user = '$user'")[0];
$foto = $profile['profile'];
if (isset($_GET['query'])) {
  $query = $_GET['query'];
  $daftarBarang = query("SELECT * FROM barang WHERE id_user !='$user' AND nama_barang LIKE '%$query%' OR Kategori_barang LIKE '%$query%'");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <style type="text/css">
    .card {
      margin: 10px;
    }
  </style>
  <link rel="shortcut icon" href="logo.jpg">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>M4RKET</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <script type="text/javascript" src="toastr.min.js"></script>
  <script src="sweetalert/sweetalert2.all.min.js"></script>


  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="bootstrap-number-input.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="toastr.min.css">
  <link rel="stylesheet" href="style.css">

</head>

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
    <a href=""><i class="fa fa-home"></i> Home</a>
    <a href="AboutUs.php"> <i class="fa fa-question-circle"></i> About</a>
    <a href="Jual.php"><i class="fa fa-cart-plus"></i> Jual</a>
    <a href=""> <i class="fa fa-shopping-bag"></i> Kategori</a>
    <a href="logout.php"> <i class="fa fa-sign-out"></i> Logout</a>
  </div>
  <form method="get" action="">

    <body style="background-color: rgb(236, 234, 226)">
      <nav class="navbar navbar-expand-sm navbar-dark bg-light">
        <a href="#" onclick="openSlideMenu()">
          <i class="fa fa-bars"></i>
        </a>
        &nbsp;
        <a class="navbar-brand text-dark" href="m4rket.php">MARKET</a>

        <input type="text" class="form-control" name="query" value="<?= @$query ?>" placeholder="Cari produk barang disini.." />
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="submit" name="cari">Cari</button>
        </div>

        &nbsp;
  </form>
  <?php if (!isset($_SESSION['login'])) : ?>
    <a href="login.php"><button class="btn btn-success">Login</button></a>
  <?php else : ?>
    <a href="Profile.php"><img style="margin-left: 8px; margin-top: 10px;" height="30" src="Profile/<?= !empty($foto) ? "$foto" : "default.png" ?>">
      <p style="font-size: 12px; margin: 0px; margin-left: 10px;"><?= word_limit($profile['nama'], 8) ?></p>
    </a>
  <?php endif; ?>
  </nav>

  </nav>
  <ol class="breadcrumb h-25">
    <li class="breadcrumb-item h-25 "><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Kategori</a></li>
    <li class="breadcrumb-item active">Toko</li>
  </ol>
  <center>
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block w-100" src="star-wars-jedi-fallen-order-hero-banner-02-ps4-us-29may19.jpg" data-src="holder.js/900x500?theme=social" alt="900x500" style="width: 900px; height: 400px;" data-holder-rendered="true" />
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="wallpaper1.png" data-src="holder.js/900x500?theme=industrial" alt="900x500" style="width: 900px; height: 400px;" data-holder-rendered="true" />
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </center>
  <br />
  <br />

  <div class="container-fluid">
    <div class="row row-cols-2 row-cols-md-3">
      <?php foreach ($daftarBarang as $barang) : ?>
        <div class="col-md-2">
          <div class="card" style="width: 13rem;">
            <img src="img/<?= $barang['gambar_barang'] ?>" class="card-img-top" height="200" />
            <div class="card-body">
              <h5 class="card-title"><?= $barang['nama_barang'] ?></h5>
              <p class="card-text">
                <?= word_limit($barang['deskripsi'], 15); ?>
              </p>
              <a href="deskripsi.php?id=<?= $barang['id_barang'] ?>" class="btn btn-primary">Beli Sekarang!</a>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</div>

</body>

</html>