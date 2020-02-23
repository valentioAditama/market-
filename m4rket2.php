<?php 
session_start();
require 'function.php';
if (!isset($_SESSION["login"])) {
	echo "<script>
				alert('Gagal Masuk');
				document.location.href='index.php';
				</script>";
				exit();
}
$id = $_GET['id'];
?>

<html>
<head>
	<title>M4RKET</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="FontAwosome/css/all.min.css">
	<style type="text/css">
		body{
			background-color: white;
		}
		marquee{
			font-family: PanicButton BB;
			font-size: 50px;
			color: white;
		}
		.link-button{
			text-decoration: blink;
			background-color: black;
			color: white;
			padding: 4px 90px 4px 90px;
			border: 3px solid #c2c2c2;
			border-radius: 2px
		}
		nav {
    		height:70px;
    		background-color:#2e2eb8;
   	 		line-height:26px;
   			position:relative;
   			width: 1366px;
    		margin:auto;
    		font-size: 20px;
    		margin-top: 30px;
    		margin-left: -8px;	
    		position: fixed;	
    		top:0px;
    	}
		nav ul{
    		list-style:none;
		}
		nav ul li:hover .sub1 {
			
		}
		nav ul .sub1 {
		    display:none;
		    position:absolute;
		    left:0px;
		    top:60px;
		    background-color:black;
		    width: 200px;
		    height: 617px;
		    transition: height 2s;
		}
		a{
			text-decoration: none;
		}
		.sub1 a:hover {
			color:#1a53ff;
		}
		.atas{
			width: 1366px;
			height: 50px;
			background-color: #ddd;
			position: fixed;
			margin-top: -170px;
			margin-left: -8px;
		}
		.atas1{
			text-decoration: none;
			color: black;
			float: right;
			margin-top: 25px;
			margin-right: 80px;
		}
		.atas1:hover{
			color: #2e2eb8;
		}
		.atas2{
			text-decoration: none;
			color: black;
			float: right;
			margin-top: 25px;
			margin-right: 35px
		}
		.atas2:hover{
			color: #2e2eb8;
		}
		.atas3{
			text-decoration: none;
			color: black;
			float: right;
			margin-top: 25px;
			margin-right: 35px;
		}
		.atas3:hover{
			color: #2e2eb8;
		}
		.bawah{
			float: right;
			display: block;
			margin-right: 90px;
			margin-top: 1px;
			color: white;
			border:solid 1.5px white;
			padding-right: 10px;
			padding-left: 10px;
			padding-bottom: 5px;
			border-radius: 5px;
			background-color: white;
			color: #2e2eb8;
		}
		.bawah1{
			margin-left: 806px;
			display: block;
			position: absolute;
			font-size: 20px;
			color: black;
			margin-top: 1px;
			border: solid white;
			height: 30px;
			width: 120px;
		}
		select{
			width: 100px;
		}
		.bawah2{
			float: right;
			display: block;
			margin-right: 20px;
			margin-top: 1px;
			color: white;
			border:solid 1.5px white;
			padding-right: 10px;
			padding-left: 10px;
			padding-bottom: 5px;
			border-radius: 5px;
		}
		/*form {
    		width:500px;
   		 	margin:50px auto;
		}
		.search {
    		padding:8px 15px;
    		background:rgba(50, 50, 50, 0.2);
    		border:0px solid #dbdbdb;
		}
		.button {
    		position:relative;
    		padding:6px 15px;
    		left:-8px;
    		border:2px solid #53bd84;
    		background-color:#53bd84;
    		color:#fafafa;
		}
		.button:hover  {
		    background-color:#fafafa;
		    color:#207cca;
		}*/
		b{
			font-size: 30px;
		}
		.box{
			height: 30px;
			border: 2px solid #fff;
			margin-left: 70px;
			width: 720px;
			border-radius: 6px;
			padding-left: 35px;
		}
		.find{
			height: 30px;
			margin-left: -14px;
			background-color: #2e2eb8;
			border: 2px solid #fff;
			border-radius: 6px 6px 6px 6px;
			font-family: arial;
		}
		.find:hover{	
			color: white;
		}
		.beda{
			float: left;
			width: 150px;
			height: 40px;
			margin-top: -2px;
			margin-left: 0px;
		}
		.beda1{
			padding-top: 30px;
			font-size: 120px;
			height: 150px;	
		}
		.beda1 :hover{
			color: #1a53ff;
			height: 100px;
		}
		.fa-search{
			font-size: 20px;
			position: absolute;
			margin-left: 78px;
			margin-top: 6px;
			color: gray;
		}
		.produk{
  width: 200px;
  height: 260px;
  float: left;
  margin-left: 22px;
  margin-top: 10px;
}
.gambar{
  width: 150px;
  height: 150px;
  border: 1px solid #ddd; 
  border-radius: 5px 5px 0px 0px;
}
.a{
  margin-top: 20px;
  margin-left: 10px;
  width: 150px;
  height: 200px;
  background-color: #ddd;
  border-radius: 5px;
}

/* Slideshow container */
.slideshow {
  height:  300px;
  margin: auto;
  margin-top: 150px;
  width: 1200px;
  overflow: hidden;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: relative;
  width: auto;
  padding: 16px;
  margin-top: 2px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0px;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
		</style>
	</head>
<?php 

$G = query("SELECT * FROM barang WHERE kategori_barang = 'gadget' AND stok_barang>0 ORDER BY tanggal_barang ASC LIMIT 0,5");
$PS = query("SELECT * FROM barang WHERE kategori_barang = 'perlengkapan_sekolah' AND stok_barang>0 ORDER BY tanggal_barang ASC LIMIT 0,5");
$A = query("SELECT * FROM barang WHERE kategori_barang = 'aksesoris' AND stok_barang>0 ORDER BY tanggal_barang ASC LIMIT 0,5");
$MM = query("SELECT * FROM barang WHERE kategori_barang = 'makanan_minuman' AND stok_barang>0 ORDER BY tanggal_barang ASC LIMIT 0,5");
$L = query("SELECT * FROM barang WHERE kategori_barang = 'lain-lain' AND stok_barang>0 ORDER BY tanggal_barang ASC LIMIT 0,5");



 ?>
	<body>
		<div class="atas">
			<tr>
				<td><a href="ContactUs.php?id=<?=$id ?>" class="atas1"> Contact Us</a></td>
				<td><a href="AboutUs.php?id=<?=$id ?>" class="atas2">About Us</a></td>
				<td><a href="Jual.php?id=<?=$id ?>" class="atas3">Jual</a></td>
				<td></td>
			</tr>
		</div>
	<nav><ul>
		<li></li>
		<ul class="sub1">
			<li class="beda1"><a href="Profile.php?id=<?=$id ?>"><i class="fas fa-user-circle"></i></a></li>
			<li><a href="beli.php?id=<?=$id ?>"><i class="fas fa-shopping-cart"></i> Beli</a></li>
			<li></li>
			<li></li>
			<li></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
		</li>
			<li><a href="" class="beda"><img src="Gambar/logo market pth.jpg" class="beda"></a></li>
			<li><a href="Register.php" class="bawah">Daftar</a></li>
			<li><a href="login.php" class="bawah2" type="button">Masuk</a></li>
			<li><select class="bawah1">
				<option>Gadget</option>
				<option>Gadget</option>
				<option>Aksesoris</option>
			</select></li>
		</ul>
		<form method="get" target="" action="">
		<i class="fas fa-search"></i>
		<input type="text" name="find" class="box" placeholder="Cari Produk Disini..." autocomplete="off" autofocus="on">
		<input type="submit" name="find" value="Search" class="find">
	</form>
	<a href="beli.php?id=<?=$id ?>"><i class="fas fa-shopping-cart"></i> Beli</a>
	</nav>

	<div class="slideshow">

<div class="mySlides fade">
  <img src="Gambar/smk.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="Gambar/jadul.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="Gambar/depan.jpg" style="width:100%">
</div>
	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>


</div>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>


  <div class="produk">
    <a href="deskripsi2.php?id_barang=<?= $data['id_barang']?>&id=<?=$id ?>">
    <table class="a">
      <tr>
        <td>
          <img class="gambar" src="Gambar/depan.jpg">
        </td>
      </tr>
      <tr>
        <td class="hp"> <br>
        nma
        </td>
      </tr>
      <tr>
        <td>
          RP.
        </td>
      </tr>
    </table>
    </a>
  </div>


<p>s</p>
<p>s</p>
<p>s</p>
<p>s</p>
<p>s</p>
<p>s</p>
<p>s</p>
<p>s</p>
<p>s</p>
<p>s</p>
<p>s</p>
<p>s</p><p>s</p>
<p>s</p>
<p>s</p>
<p>s</p>
<p>s</p>
<p>s</p><p>s</p>
<p>s</p>
<p>s</p>
<p>s</p>
<p>s</p>
<p>s</p>
</body>
</html>