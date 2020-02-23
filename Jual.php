<?php
session_start();
include_once "function.php";
$user = $_SESSION['login'];
$daftarBarang = query("SELECT * FROM barang WHERE id_user !='$user'");
$profile = query("SELECT * FROM data_user WHERE id_user = '$user'")[0];
if (!isset($_SESSION["login"])) {
	echo "<script>
					alert('Gagal Masuk');
					document.location.href='index.php';
					</script>";
	exit();
}
$sql = "SELECT profile,nama FROM data_user WHERE id_user = $user";
$result = query($sql);
if (isset($_POST['Jual'])) {
	if (tambahbrg($_POST, $user) > 0) {
		echo "<script>
					alert('Data Berhasil Ditambahkan');
					document.location.href = '';
				</sctipt>";
	}
}

?>

<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>

	<link rel="shortcut icon" href="favicon.ico">
	<title>M4RKET</title>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="Allcss2.css">

	<link rel="stylesheet" href="style.css">
	<style type="text/css">
		body {
			background-color: #ddd;
		}

		header {
			width: 100%;
			height: 50px;
			background: blue;
			font-size: 40px;
		}

		hr {
			border: 0.5px solid black;
			margin: auto;
		}

		a {
			text-decoration: none;
			color: black;
		}

		h1 {
			text-align: center;
			font-size: 40px;
			font-family: sans-serif;
			margin-top: 30px;
		}

		.beda {
			width: 30px;
			height: 35px;
			margin-left: 25px;
			margin-right: -7px;
			background-color: white;
			border-right: transparent;
			border: 2px solid black;
			padding-left: 1px;
			padding-right: 1px;
		}

		.utama5 {
			background-color: white;
			padding-left: 45px;
		}

		.utama6 {
			margin-top: -10px;
			margin-left: 15px;
			width: 390px;
			background-color: white;
		}

		.garis {
			color: gray;
			position: absolute;
			width: 850px;
			margin-left: -4px;
			height: 1px;
			background-color: gray;
		}

		.kategori2 {
			font-size: 20px;
			font-family: sans-serif;
			padding-left: 15px;
			margin-top: 10px;
		}

		.pajangan {
			position: absolute;
			margin-top: -33px;
			font-family: sans-serif;
			font-size: 18px;
			margin-left: 11px;
			color: black;
		}

		.pajangan1 {
			position: absolute;
			width: 2px;
			height: 25px;
			background-color: #ddd;
			margin-top: -32px;
			margin-left: 40px;
		}

		.pajangan2 {
			position: absolute;
			margin-top: 10px;
			font-family: sans-serif;
			font-size: 18px;
			margin-left: 20px;
		}

		.bulat {
			font-size: 80px;
			margin-left: 15px;
			margin-top: -10px;
		}

		.utama7 {
			margin: auto;
			width: 82.5%;
			display: block;
			padding-left: 5px;
			margin-left: 120px;
			margin-top: -65px;
		}

		.kategori1 {
			font-size: 13px;
			font-family: sans-serif;
			padding-left: 15px;
			margin-top: 10px;
		}

		.utama8 {
			position: relative;
			width: 390px;
			height: 40px;
			background-color: white;
			margin: auto;
			display: block;
			padding-left: 5px;
			border: 1px solid black;
			margin-left: 15px;
			margin-top: -10px;
		}

		.mancing {
			height: 120px;
		}

		.iklan {
			margin-top: 120px;
		}

		[type=text] {
			font-size: 18px;
			outline: none;
		}

		[type=number] {
			font-size: 18px;
			outline: none;
		}

		.box {
			padding-left: 35px;
			word-spacing: 2px;
			height: 30px;
			font-size: 13px;
		}

		label {
			font-size: 20px;
		}
	</style>
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



	<h1>Pasang Iklan Anda</h1>
	<div class="container lg">
		<div class="row-sm-10">
			<div class="col-sm-9 iklanjual">
				<form method="post" action="" enctype="multipart/form-data" class="">
					<div class="form-group">
						<label>Kategori Barang</label>
						<select class="form-control" id="exampleFormControlSelect1" name="kategori_barang">
							<option value="perlengkapan_sekolah">Perlengkapan Sekolah</option>
							<option value="gadget">Gadget</option>
							<option value="aksesoris">Aksesoris</option>
							<option value="makanan_minuman">Makanan/Minuman</option>
							<option value="lain-lain">Lain-lain</option>
						</select>
					</div>
					<div class="form-group">
						<hr>
						<label>Lengkapi Data Barang</label>
						<input type="text" name="nama_barang" placeholder="Nama Barang" class="jarakjual form-control" autocomplete="off" required="">
						<input type="number" name="stok_barang" class="jarakjual form-control" min="1" placeholder="Stok Barang" autocomplete="off" required="">
						<textarea rows="7" placeholder="Deskripsi Barang" class="jarakjual form-control" autocomplete="off" style="resize: none;" name="deskripsi" required=""></textarea>
					</div>
					<div class="form-group">
						<hr>
						<label>Tentukan Harga</label>
						<input type="number" name="harga_barang" placeholder="harga barang" autocomplete="off" required="" class="utama5 form-control">
						<p class="pajangan">Rp</p>
						<p class="pajangan1"></p>
					</div>
					<div class="form-group">
						<hr>
						<label>Foto Barang</label>
						<input type="file" name="gambar" accept="image/*" class="form-control-file" required="">
					</div>
					<hr>
					<div class="btnjual">
						<input type="submit" name="Jual" value="Jual" class="btn btn-success">
						<a href="m4rket.php" class="btn btn-danger">Batal</a>
					</div>
				</form>
			</div>
		</div>
	</div><br>


	<footer>
		<h3 align="center">Contact Us</h3>
		<h1 class="kontak" style="text-align: center;"><a href="https://www.instagram.com/m4rket_/?hl=id"><i class="fab fa-instagram"></i></a>
			<a href="http://line.me/ti/p/~@262wsqjs"><i class="fab fa-line"></i></a>
			<a href="https://twitter.com/m4rketbdg"><i class="fab fa-twitter"></i></a>
			<a href=""><i class="fab fa-facebook-square"></i></a></h1>
		<h6 align="center" style="margin-top: 0px;">Copyright © 2019-2020 M4RKET. All rights reserved.</h6>
	</footer>
	</body>

</html>