<?php
require 'function.php';
include 'koneksi.php';

$id = $_GET['id_barang'];
$query = "SELECT * FROM barang WHERE id_barang = $id";
$barang = query($query);
$data_user = query("SELECT u.id_user,b.id_barang,u.nama_pelapak,b.id_user FROM data_user u,barang b WHERE b.id_barang = $id AND u.id_user = b.id_user");
if (isset($_POST['beli'])&&$_POST['jml_beli']>0) {
	$jml = $_POST['jml_beli'];

	if (isset($jml)<=$barang[0]['stok_barang']){
		if (($barang[0]['stok_barang']-$jml)>=0){
			$jml_baru = $barang[0]['stok_barang']-$jml;
      if ($jml_baru==0) {
        echo"<script>alert('Terima kasih telah memborong ".$barang[0]['nama_barang']." ');
          window.location.href='beli.php';
        </script> ";
      }
			$query="UPDATE barang SET stok_barang = $jml_baru WHERE id_barang = $id";
			mysqli_query($conn, $query);
			$barang[0]['stok_barang']-=$jml;

		}else{
			echo "<script>alert('Jumlah melebihi stok');</script>";
		}
	}
}
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="jualBeli4.css">
  <title>Document</title>
</head>
<style type="text/css">
* {box-sizing: border-box;}

.img-zoom-container{
  position: relative;
}
.img-zoom-lens {
  position: absolute;
  border: 1px solid #d4d4d4;
  /*set the size of the lens:*/
  width: 60px;
  height:60px;
}
img{
  position: relative;
}

.img-zoom-result {
  border: 1px solid #d4d4d4;
  /*set the size of the result div:*/
  width: 200px;
  height: 200px;
}
.profiles img{
  border: 2px solid black;
  border-radius: 50%;
  width: 120px;
  height: 120px;
  position: relative;
  left: 10px;
  top: -20px;
}

.profile{
	height: 600px;
	width: 300px;
	float: right;
	position: absolute;
	right: 40px;
	top: 50px;
	padding: 0;
	margin: 0;
}

.foto_profiles{
  position: absolute;
	left: 60px;
}

.tulisan_profiles{
	color: black;
	font-family: cursive;
	position: absolute;
	top: 180px;
	left: 35px;
}

.Header{
  margin-top: -8px;
  margin-left: -8px;
  background-color: black;
  width: 100%;
  height: 50px;
  color: white;
  position: inherit;
}
.kembali{
 width: 100px;
 color: white;
 height: 20px;
 position: relative;
 left: -1300px;
 background-color: red;
 border-radius: 25px;
 text-align: center;
}
.kembali:hover{
   background-color: indianred;
}
p{
  margin-top: 2px;
  text-align: center;
}
hr{
	width: 240px;
	position: absolute;
	left: -10px;
}

.hr1{
	width: 300px;
	position: absolute;
	left: -75px;
}

.judul_pelapak{
	font-family: cursive;
	position: absolute;
	top: -160px;
	left: -80px;
	font-weight: bold;
}

.instagram_logo{
	height: 40px;
	position: absolute;
	top: 120px;
	left: -80px;
}

.facebook_logo{
	height: 40px;
	position: absolute;
	top: 120px;
	left: -10px;
}

.line_logo{
		height: 40px;
		position: absolute;
		top: 120px;
		left: 60px;
}

.twitter_logo{
	height: 40px;
	position: absolute;
	top: 120px;
	left: 130px;
}


</style>
<body>
	<form action="" method="post">
	<div class="profile">
    <div class="foto_profiles">
        <a href="penjual(1).php?id=<?=$data_user[0]['id_user']?>">
        <img class="boy" src="orang.png">
				</a>
				<hr class="hr2">
        <div class="tulisan_profiles">
          <p class="Nama_pelapak"><?=$data_user[0]['nama_pelapak'] ?></p>
					<p class="judul_pelapak">Pelapak</p>
					<p class="alamat_pelapak">Bandung</p><br>
					<p>SMKN 4 Bandung</p>
					<hr class="hr1">
					<p class="logo">
					 <a href="https://www.instagram.com/adjinurdiman/?hl=id"><img src="instagram.png" class="instagram_logo" alt=""> </a>
					 <a href="https://www.facebook.com/groups/MemeComicJonesIndonesia.MCJI/?ref=bookmarks"><img src="facebook.png" class="facebook_logo" alt=""> </a>
						<img src="line.png" class="line_logo" alt="">
						<img src="twitter.png" class="twitter_logo" alt="">
					</p>
      </div>
		</div>
		  </div>

	<section>
  <div class="content">
    <table>
      <tr>
        <td class="gambarproduk">
        <div class="img-zoom-container">
          <img class="gambar" id="myimage" src="img\<?= $barang[0]['gambar_barang'] ?>">
          </div>
        </td>
        <td class="judul">
          <?php word_limit($barang[0]['nama_barang'],30);  ?>
        </td>
        <td class="harga">
          RP.<?= $barang[0]['harga_barang'] ?>
        </td>
        <td class="stok_barang">
          <?php if ($barang[0]['stok_barang']>1){
          	echo"Tersedia > ".($barang[0]['stok_barang']-1);
          }else{
          	echo"Tersedia ". $barang[0]['stok_barang'];
          }?> stok barang <br>
          <font class="a">masukan jumlah yang diinginkan</font><br>
          <input type="number" name="jml_beli">
        </td>
        <td class="beli">
          <input type="submit" class="beli_sekarang" name="beli" value="Beli"<?php if(isset($_POST['beli'])&&isset($jml)) : ?>
          <?php if ($jml>0): ?>
            onclick="
            var r = confirm('Anda yakin ingin membeli <?php word_limit($barang[0]['nama_barang'],20) ?>')
            "
            <?php endif; ?>
          <?php endif; ?> > <br>
          <input type="button" class="tambah_Kekeranjang" name="" value="tambahkan ke keranjang">
          <input type="button" class="chat_pelapak" name="" value="Chat Pelapak">
        </td>
        <td class="nanya">
          <input type="button" class="bertanya1" name="" value="apakah stok masih ada?">
          <input type="button" class="bertanya2" name="" value="saya pesan sekarang ya ">
        </td>
        <td class="jaminan">
          <font class="c">Jaminan 100% Aman</font>
          Uang pasti kembali. Sistem pembayaran bebas penipuan.<br>
          Barang tidak sesuai pesanan? Ikuti langkah retur barang disini.
        </td>
      </tr>
      <tr>
      	<td><div id="myresult" class="img-zoom-result"></div></td>
      </tr>
    </table>
  </div>
  </section>
  <div class="opsi">
            <a href="#">
            <img src="buku.png" class="icon-book"> <font class="opsi1">Informasi Produk</font>
            </a>
            <a href="#">
            <img src="star.png" class="icon-star" alt="">
              <font class="opsi2">Ulasan</font>
            </a>
            <a href="">
            <img src="chat.png" class="icon-chat" alt="">
            <font class="opsi3">Diskusi Produk</font>
            </a>
  </div>
  <hr class="ab">
  <div class="content1">
  <div class="informasi_produk">
    <font class="font_informasi_produk">

   <font>spesifikasi:
    <br>
    <br>
   <?=$barang[0]['deskripsi'] ?>
   </font>  <br>
    </font>
  </div>
  </div>

  </form>
  <script src="js/zoom.js"></script>
  <script>
  	imageZoom('myimage', 'myresult');
  </script>
</body>
</div>
