<?php
session_start();
include_once 'function.php';
$user = $_SESSION['login'];
$profile = query("SELECT * FROM data_user WHERE id_user = '$user'")[0];
$foto = $profile['profile'];
$id_barang = $_GET['id'];
$barang = query("
  SELECT barang.*,data_user.*
  FROM barang 
  JOIN data_user
  ON barang.id_user = data_user.id_user
  WHERE id_barang = '$id_barang'")[0];

$_SESSION['transaksi'] = array();

$transaksi = array();
$transaksi['pelapak'] = $barang['nama_pelapak'];
$transaksi['nama_barang'] = $barang['nama_barang'];
$transaksi['id_barang'] = $barang['id_barang'];

array_push($_SESSION['transaksi'], $transaksi);

if (isset($_GET['query'])) {
  $query = $_GET['query'];
  header("Location:market.php?query=$query");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>M4RKET</title>
</head>
<link rel="shortcut icon" href="logo.jpg">
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
    <li class="breadcrumb-item h-25 "><a href="market.php">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Kategori</a></li>
    <li class="breadcrumb-item active">Toko</li>
  </ol>


  <div class="container">
    <div class="row">
      <div class="col">
        <img src="img/<?= $barang['gambar_barang'] ?>" class="img-fluid" style="margin-top: 60px; height: 300px; width: 300px;" alt="" />
        <div class="col" style="margin-left: -20px; margin-top: 10px;">
          <img src="5.jpg" style="height: 100px;" alt="">
          <img src="7.jpg" style="height: 100px;" alt="">
          <img src="8.png" style="height: 100px;" alt="">
        </div>
      </div>
      <div class="col" style="margin-top: 80px; margin-left: -430px; font-family: roboto; font-size: large; font-weight: bold;">
        <?= $barang['nama_barang'] ?>
        <hr />
        <div class="row">
          <div class="col" style="color: rgb(83, 78, 78);">
            Harga
          </div>
          <div class="loading">
            <img src="Loading.gif" width="300" height="300" style="position: fixed; z-index: 2; left: 40%; top: 30%; background-color: black;">
          </div>
          <div class="col" style="margin-left: -500px; color: rgb(230, 91, 36); font-family: roboto; font-size: 34px;">
            Rp.<?= $barang['harga_barang'] ?>
          </div>
        </div>
        <div class="col" style="margin-left: 130px; font-size: small; color: gray;">
          Garansi 7 hari
        </div>
        <hr />
        <div class="row">
          <div class="col" style="font-family: roboto; color:  rgb(83, 78, 78);">
            Jumlah
          </div>
          <?php if ($barang['stok_barang'] > 0) : ?>
            <div class="col" style="margin-right: 500px;">
              <input id="colorful" class="form-control jumlah" name="jumlah" type="number" value="1" min="1" max="<?= $barang['stok_barang'] ?>" />
            </div>
          <?php else : ?>
            <div class="col" style=" font-size: small; color: gray;">
              STOK HABIS
            </div>
          <?php endif; ?>
        </div>
        <div class="col" style="margin-left: 125px; font-size: small; color: gray;">
          <?php if ($barang['stok_barang'] > 0) : ?>
            pembelian maksimal <?= $barang['stok_barang'] ?> pcs.
          <?php endif ?>

        </div>
        <hr>
        <div class="row">
          <div class="col" style="font-family: roboto; color:  rgb(83, 78, 78);">
            Deskripsi
          </div>
          <div class="col" style="font-size: 14px; font-weight: lighter; margin-left: -500px;">
            <?= $barang['deskripsi'] ?>
          </div>
        </div>
        <div class="row">
          <div class="col" style="margin-top: 50px;">

            <?php if ($barang['stok_barang'] > 0) : ?>
              <div name="link" type="submit" type2="phpMailler.php?buy=<?= $_SESSION['login'] ?>&sell=<?= $barang['id_barang'] ?>&jumlah=<?= @$jumlah ?>" class="btn btn-success btnBeli" data-toggle="modal" data-target="#modelId">
                Beli sekarang!
              </div>
              <button class="btn btn-danger">Simpan diKeranjang</button>
            <?php endif; ?>

            <!-- Modal -->
            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Silakan pilih metode Transaksi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" style="font-weight: lighter; font-family: roboto;">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col">
                          COD
                          <input type="radio" name="tipe" value="COD" id="0" onclick="setKukis(this.value)" required="">
                        </div>
                        <div class="col">
                          Pulsa
                          <input type="radio" name="tipe" value="pulsa" onclick="setKukis(this.value)" required="">
                        </div>
                        <div class="col">
                          Transfer
                          <input type="radio" name="tipe" value="transfer" onclick="setKukis(this.value)" required="">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col" style="font-weight: lighter; font-family: cursive; margin-left: 50px;">
                          <br>
                          Harga
                        </div>

                        <div class="col" style="color: rgb(230, 91, 36); font-family: roboto;">
                          <br>
                          Rp<?= $barang['harga_barang'] ?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col" style="font-weight: lighter; font-family: cursive; margin-left: 50px;">
                          <br>
                          <?= $barang['nama'] ?>
                        </div>
                        <div class="col">
                          <br>
                          <?= $barang['nama_pelapak'] ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=" modal-footer">
<<<<<<< HEAD
                    <button onclick="directWA()" id="dir" type="button" class="btn btn-primary"> Chat Pelapak</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success btnLanjut">Lanjutkan</button>
=======
                    <a href="chat/indexchat.html"><button type="button" class="btn btn-primary"><img src="icons8-chat-48.png" height="25px" alt=""> Chat</button></a>
                    <a href="<?= getWALink(no_telepon($barang['no_tlp'])); ?>"><button type="button" class="btn btn-primary"> <img src="icons8-whatsapp-48.png" height="25px" alt=""> Chat Pelapak</button></a>
                    <button type="button" class="btn btn-success btnLanjut ">Lanjutkan</button>
>>>>>>> cf19e67fb3d91429f5c3200bcd098075eeecb740
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </div>
  </div>
</div>
</div>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-2">

    </div>

    <div class="col-sm-8" style="background-color: floralwhite; height: 90px; width: 600px; border: 2px solid black;">
      <div class="row">
        <div class="col-sm-2" style="margin-left: 20px;">
          <a href=""><img src="img_avatar1.png" height="75px;" style="border-radius: 200px; margin-top: 7px;" alt=""></a>
        </div>
        <div class="col-sm-3">
          <a href="" style="text-decoration: none;">
            <p style="color: black; margin-top: 25px; font-weight: 500; font-family: sans-serif; font-size: 24px;">Realme.official</p>
          </a>
        </div>
        <div class="col-sm-3">
          <a href="chat/indexchat.html"><button class="btn btn-primary btn-sm" style="margin-top: 27px; margin-right: 50px;">Chat pelapak</button></a>
        </div>
        <div class="col-sm-3">
          <a href="penjual.php"><button class="btn btn-outline-info btn-sm" style="margin-top: 27px; margin-left: -80px;">Lihat Toko</button></a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-sm-2">

</div>
</div>
</div>
<br>
<br>
<br>

<script type="text/javascript">
    function directWA(){
      window.open("<?=getWALink(no_telepon($barang['no_tlp'])); ?>");
      document.location.href = "";
    }

</script>


<script type="text/javascript">
    function setKukis(value){
      
      document.cookie = "tipe =" + value;
    }
 </script>

<script>
  $(function() {
    $(".loading").hide();
    $(".btnBeli").on('click', function() {
      event.preventDefault();

      var jumlah = $(".jumlah").val();
      var href = $(this).attr('type2') + "&jumlah=" + jumlah;
      var url = "detail_transaksi.php";
      $(".btnLanjut").off();
      $(".btnLanjut").on('click', function() {
        $(".modal-body").fadeOut(400);
        $(".modal-header").fadeOut(400);
        $(".modal-footer").fadeOut(400);
        $("#colorful").css("display", "none");
        $(".loading").show();
        $.ajax({
          'url': href,
          'type': 'POST',
          'success': function(result) {
            $(".loading").css("display", "none");
            Swal.fire(
              'Success',
              'Pesanan telah Berhasil',
              'success'
            )
            setTimeout(function() {
              $(location).attr('href', url);
            }, 1000);
          }
        });
      });
    });
    // Remember set you events before call bootstrapSwitch or they will fire after bootstrapSwitch's events
    $("[name='checkbox2']").change(function() {
      if (!confirm('Do you wanna cancel me!')) {
        this.checked = true;
      }
    });

    $('#after').bootstrapNumber();
    $('#colorful').bootstrapNumber({
      upClass: 'success',
      downClass: 'danger'
    });
  });
</script>

</body>

</html>