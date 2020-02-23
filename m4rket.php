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
$id = $_SESSION['login'];

$sql = "SELECT profile,nama FROM data_user WHERE id_user = $id";
$result = query($sql);

?>

<html>

<head>
	<title>M4RKET</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="FontAwosome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="Allcss.css">
	<style type="text/css">
		body {
			background-color: white;
		}

		marquee {
			font-family: PanicButton BB;
			font-size: 50px;
			color: white;
		}

		.link-button {
			text-decoration: blink;
			background-color: black;
			color: white;
			padding: 4px 90px 4px 90px;
			border: 3px solid #c2c2c2;
			border-radius: 2px
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
		b {
			font-size: 30px;
		}

		.slidershow {
			width: 1230px;
			height: 500px;
			overflow: hidden;
			margin-left: 50px;
			margin-top: 120px;
		}

		.navigation {
			position: absolute;
			bottom: 65px;
			left: 50%;
			transform: translateX(-50%);
			display: flex;
			margin-bottom: -70px;
		}

		.bar {
			width: 15px;
			height: 15px;
			border: 2px solid #fff;
			margin: 6px;
			cursor: pointer;
			transition: 0.4s;
			border-radius: 50%;
		}

		.bar:hover {
			background: #fff;
		}

		input[name="r"] {
			position: absolute;
			visibility: hidden;
		}

		.slides {
			width: 500%;
			height: 100%;
			display: flex;

		}

		.slide {
			width: 20%;
			transition: 0.6s;
		}

		.slide img {
			width: 100%;
			height: 100%;
		}

		#r1:checked~.s1 {
			margin-left: 0;
		}

		#r2:checked~.s1 {
			margin-left: -20%;
		}

		#r3:checked~.s1 {
			margin-left: -40%;
		}

		#r4:checked~.s1 {
			margin-left: -60%;
		}

		.produk {
			float: left;
			margin-top: -40px;
		}

		.judulbaru {
			font-size: 25px;
			margin-left: 20px;
		}

		.dropdown1 {
			position: absolute;
			margin-top: -10px;
			margin-left: 810px;
		}

		.dropdown1 .dropbtn1 {
			font-size: 20px;
			border: none;
			outline: none;
			color: black;
			padding: 14px 16px;
			background-color: inherit;
			font-family: inherit;
			margin: 0;
		}

		.dropdown1:hover .dropbtn1 {
			color: #2e2eb8;
		}

		.dropdown1-content1 {
			display: none;
			position: absolute;
			background-color: #f9f9f9;
			width: 200px;
			box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
			z-index: 1;
			margin-left: -90px;
			margin-top: -10px;
			border-radius: 10px;
		}

		.dropdown1-content1 a {
			float: none;
			color: black;
			width: 200px;
			height: 40px;
			text-decoration: none;
			display: block;
			text-align: left;
		}

		.dropdown1-content1 a:hover {
			background-color: #ddd;
			border-radius: 10px;
		}

		.dropdown1:hover .dropdown1-content1 {
			display: block;
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
			<td><a href="ContactUs.php" class="atas1"> Contact Us</a></td>
			<td><a href="AboutUs.php" class="atas2">About Us</a></td>
			<td><a href="Jual.php" class="atas3">Jual</a></td>
		</tr>
	</div>
	<nav>
		<ul>
			<li><a href="m4rket.php" class="logo"><img src="Gambar/logo market pth.jpg" class="logo"></a></li>

			<div class="dropdown" style="float: right;">
				<div class="dropbtn">
					<p class="namanya"><?= $result[0]['nama'] ?></p><?php if (isset($result[0]['profile'])) : ?>
						<img class="profile" src="Profile\<?= $result[0]['profile'] ?>">
					<?php else : ?>
						<i class="fas fa-user-circle">Diazs</i>
					<?php endif; ?>
				</div>
				<div class="dropdown-content">
					<a href="Profile.php">Edit</a>
					<a href="logout.php">Logout</a>
				</div>
			</div>

			<div class="dropdown1">
				<div class="dropbtn1">Kategori
					<i class="fa fa-caret-down"></i>
				</div>
				<div class="dropdown1-content1">
					<a href="beli.php?kt=Perlengkapan Sekolah">Perlengkapan Sekolah</a>
					<a href="beli.php?kt=Gadget">Gadget</a>
					<a href="beli.php?kt=Aksesoris">Aksesoris</a>
					<a href="beli.php?kt=Makanan/Minuman">Makanan/Minuman</a>
					<a href="beli.php?kt=Lain-lain">Lain-lain</a>
				</div>
			</div>

		</ul>

		<form method="get" target="" action="beli.php">
			<i class="fas fa-search"></i>
			<input type="text" name="query" class="box" placeholder="Cari Produk Disini..." autocomplete="off" autofocus="on">
			<input type="submit" name="find" value="Search" class="find">
		</form>

	</nav>
	<div class="slidershow">
		<div class="slides">
			<input type="radio" name="r" id="r1" checked="checked">
			<input type="radio" name="r" id="r2" checked="checked">
			<input type="radio" name="r" id="r3" checked="checked">
			<input type="radio" name="r" id="r4" checked="checked">
			<div class="slide s1">
				<img src="Gambar/smk.jpg" alt="">
			</div>
			<div class="slide">
				<img src="Gambar/jadul.jpg" alt="">
			</div>
			<div class="slide">
				<img src="Gambar/depan.jpg" alt="">
			</div>
			<div class="slide">
				<img src="Gambar/10.jpg" alt="">
			</div>
			<div class="navigation">
				<label for="r4" class="bar"></label>
				<label for="r1" class="bar"></label>
				<label for="r2" class="bar"></label>
				<label for="r3" class="bar"></label>
			</div>
		</div>
	</div>

	<?php if (!empty($G)) : ?>
		<p class="judulbaru">Baru di Gadget</p>

		<?php foreach ($G as $data) : ?>

			<div class="produk">
				<a href="deskripsi2.php?id_barang=<?= $data['id_barang'] ?>">
					<table class="a">
						<tr>
							<td>
								<img src="img/<?= $data['gambar_barang'] ?>" width="150" height="120" class="gambar">
							</td>
						</tr>
						<tr>
							<td class="hp">
								<?= $data['nama_barang'] ?>
							</td>
						</tr>
						<tr>
							<td>
								Rp.<?= $data['harga_barang']  ?>
							</td>
						</tr>
					</table>
				</a>
			</div>
		<?php endforeach; ?>
		<?php echo "
"; ?>
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
	<?php endif; ?>

	<?php if (!empty($PS)) : ?>

		<p class="judulbaru">Baru di Perlengkapan Sekolah</p>
		<?php foreach ($PS as $data) : ?>

			<div class="produk">
				<a href="deskripsi2.php?id_barang=<?= $data['id_barang'] ?>">
					<table class="a">
						<tr>
							<td>
								<img src="img/<?= $data['gambar_barang'] ?>" width="150" height="120" class="gambar">
							</td>
						</tr>
						<tr>
							<td class="hp">
								<?= $data['nama_barang'] ?>
							</td>
						</tr>
						<tr>
							<td>
								Rp.<?= $data['harga_barang']  ?>
							</td>
						</tr>
					</table>
				</a>
			</div>
		<?php endforeach; ?>
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
	<?php endif; ?>

	<?php if (!empty($A)) : ?>

		<p class="judulbaru">Baru di Aksesoris</p>
		<?php foreach ($A as $data) : ?>

			<div class="produk">
				<a href="deskripsi2.php?id_barang=<?= $data['id_barang'] ?>">
					<table class="a">
						<tr>
							<td>
								<img src="img/<?= $data['gambar_barang'] ?>" width="150" height="120" class="gambar">
							</td>
						</tr>
						<tr>
							<td class="hp">
								<?= $data['nama_barang'] ?>
							</td>
						</tr>
						<tr>
							<td>
								Rp.<?= $data['harga_barang']  ?>
							</td>
						</tr>
					</table>
				</a>
			</div>
		<?php endforeach; ?>
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
	<?php endif; ?>

	<?php if (!empty($MM)) : ?>
		<p class="judulbaru">Baru di Makanan/Minuman</p>
		<?php foreach ($MM as $data) : ?>

			<div class="produk">
				<a href="deskripsi2.php?id_barang=<?= $data['id_barang'] ?>">
					<table class="a">
						<tr>
							<td>
								<img src="img/<?= $data['gambar_barang'] ?>" width="150" height="120" class="gambar">
							</td>
						</tr>
						<tr>
							<td class="hp">
								<?= $data['nama_barang'] ?>
							</td>
						</tr>
						<tr>
							<td>
								Rp.<?= $data['harga_barang']  ?>
							</td>
						</tr>
					</table>
				</a>
			</div>
		<?php endforeach; ?>
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
	<?php endif; ?>


	<?php if (!empty($L)) : ?>
		<p class="judulbaru">Baru di Lain-lain</p>
		<?php foreach ($L as $data) : ?>

			<div class="produk">
				<a href="deskripsi2.php?id_barang=<?= $data['id_barang'] ?>">
					<table class="a">
						<tr>
							<td>
								<img src="img/<?= $data['gambar_barang'] ?>" width="150" height="120" class="gambar">
							</td>
						</tr>
						<tr>
							<td class="hp">
								<?= $data['nama_barang'] ?>
							</td>
						</tr>
						<tr>
							<td>
								Rp.<?= $data['harga_barang']  ?>
							</td>
						</tr>
					</table>
				</a>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>

</body>

</html>