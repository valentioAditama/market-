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
$sql = "SELECT profile FROM data_user WHERE id_user = $id";
$result = query($sql);
if(isset($_POST['Jual']))
{
	if(tambahbrg($_POST,$id)>0)
	{
		echo "Data berhasil ditambahkan ";
		header("Location: m4rket.php");
	}
}

?>


<html>
<head>
	<title>M4rket</title>
	<link rel="stylesheet" type="text/css" href="FontAwosome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="Allcss.css">
	<style type="text/css">
		body{
			background-color: #ddd;
		}
		header{
			width: 100%;
			height: 50px;
			background: blue;
			font-size: 40px;
		}
		table{
			border:  1px solid gray;
			margin: auto;
			height: 900px;
			width: 850px;
			background-color: white;
			border-radius: 2px;
		}
		.button{
			border: 2px solid black;
			padding: 4px 30px;
			background-color: white;
			text-decoration: none;
			color: black;
			font-family: arial;
			font-size: 13.7px;
			border-radius: 5px;
			margin-top: 20px;
		}
		.button:hover{
			background-color: #ddd;
		}
		.button1{
			height: 28px;
			width: 100px;
			background-color: white;
			border: 2px solid black;
			color: black;
			margin-left: 300px;
			margin-right: 10px;
			border-radius: 5px;
		}
		.button1:hover{
			background-color: #ddd;
		}
		a{
			text-decoration: none;
			color: black;
		}
		.utama{
			width: 390px;
			height: 40px;
			background-color: white;
			margin: auto;
			display: block;
			padding-left: 5px;
			border: 1px solid black;
			margin-left: 15px;
		}
		.utamaa{
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
		.utama1{
			width: 391px;
			height: 35px;
			margin: auto;
			display: block;
			border: 1px solid black;
		}
		.utama2{
			background-color: white;
			width: 390px;
			display: block;
			padding-left: 5px;
			border: 1px solid black;
			margin-left: 15px;
		}
		h1{
			text-align: center;
			font-size: 40px;
			font-family: sans-serif;
		}
		.utama3{
			margin-left: 25px;
			margin-right: -10px;
			padding-left: 5px;
			width: 65px;
			border-radius: 5px 0px 0px 5px;
			background-color: white;
			height: 35px;
			border: 1px solid black;
		}
		.utama4{
			margin-left: 15px;
			height: 35px;
			background-color: white;
			width: 331px;
			border: 1px solid black;
			margin-bottom: 15px;
			margin-top: -10px;
		}
		.beda{
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
		.utama5{
			height: 35px;
			background-color: white;
			width: 390px;
			border-left: transparent;
			padding-left: 5px;
			border: 1px solid black;
			margin-top: -10px;
			margin-left: 15px;
			padding-left: 45px;
		}
		.utama6{
			margin-top: -10px;
			margin-left: 15px;
			width: 390px;
			background-color: white;
		}
		.garis{
			color: gray;
			position: absolute;
			width: 850px;
			margin-left: -4px;
			height: 1px;
			background-color: gray;
		}
		.kategori2{
				font-size: 20px;
				font-family: sans-serif;	
				padding-left: 15px;
				margin-top: 10px;
		}
		.pajangan{
			position: absolute;
			margin-top: -26px;
			font-family: sans-serif;
			font-size: 16px;
			margin-left: 23px;
			color: #ddd;
		}
		.pajangan1{
			position: absolute;
			width: 2px;
			height: 25px;
			background-color: #ddd;
			margin-top: -30px;
			margin-left: 50px;
		}
		.pajangan2{
			position: absolute;
			margin-top: 10px;
			font-family: sans-serif;
			font-size: 18px;
			margin-left: 20px;
		}
		.bulat{
			font-size: 80px;
			margin-left: 15px;
			margin-top: -10px;
		}
		.utama7{
			position: absolute;
			width: 390px;
			height: 40px;
			background-color: white;
			margin: auto;
			display: block;
			padding-left: 5px;
			border: 1px solid black;
			margin-left: 120px;
			margin-top: -65px;
		}
		.kategori1{
			font-size: 13px;
			font-family: sans-serif;	
			padding-left: 15px;
			margin-top: 10px;
		}
		.utama8{
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
		.mancing{
			height: 120px;
		}
		.iklan{
			margin-top: 120px;
		}
	</style>
</head>
<body>
	<div class="atas" style="margin-top: -120px;">
      <tr>
        <td><a href="ContactUs.php" class="atas1"> Contact Us</a></td>
        <td><a href="AboutUs.php" class="atas2">About Us</a></td>
        <td><a href="Jual.php" class="atas3">Jual</a></td>
      </tr>
    </div>
  <nav><ul>
      <li><a href="m4rket.php" class="logo"><img src="Gambar/logo market pth.jpg" class="logo"></a></li>
      <li><a href="" class="kategori">Kategori</a></li>
          <div class="dropdown" style="float: right;">
  <div class="dropbtn"><p class="namanya">Diazskkkkkkkkkkk</p><?php if (isset($result[0]['profile'])) : ?> 
            <img class="profile" src="Profile\<?= $result[0]['profile'] ?>" >
          <?php else: ?>
            <i class="fas fa-user-circle">Diazs</i>
        <?php endif; ?>
      </div>
  <div class="dropdown-content">
    <a href="Profile.php">Edit</a>
    <a href="logout.php">Logout</a>
  </div>
    </ul>

    <form method="get" target="" action="beli.php">
    <i class="fas fa-search"></i>
    <input type="text" name="query" class="box" placeholder="Cari Produk Disini..." autocomplete="off" autofocus="on">
    <input type="submit" name="find" value="Search" class="find">
  </form>

  </nav>

	<form method="post" action="" enctype="multipart/form-data" class="iklan">
		<h1>Pasang Iklan Anda</h1>
		<table>
			<tr>
				<td colspan="2" class="garisan">
					<p class="kategori2">Kategori Barang</p>
					<select name="kategori_barang" class="utama4" autofocus="on">
						<option value="perlengkapan_sekolah">Perlengkapan Sekolah</option>
						<option value="gadget">Gadget</option>
						<option value="aksesoris">Aksesoris</option>
						<option value="makanan_minuman">Makanan/Minuman</option>
						<option value="lain-lain">Lain-lain</option>
					</select>
					<p class="garis"></p>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<p class="kategori2">Lengkapi Data Barang</p>
					<input type="text" name="nama_barang" placeholder="Nama Barang" class="utamaa" autocomplete="off" required="">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="number" name="stok_barang" class="utama" placeholder="Stok Barang" autocomplete="off" required="">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<textarea rows="7" placeholder="Deskripsi Barang" class="utama2" autocomplete="off" style="resize: none;" name="deskripsi" required=""></textarea>
					<p class="garis"></p>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<p class="kategori2">Tentukan Harga</p>
					<input type="number" name="harga_barang" placeholder="harga barang" autocomplete="off" required="" class="utama5"><p class="pajangan">Rp</p><p class="pajangan1"></p>
					<p class="garis"></p>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<p class="kategori2">Foto Barang</p>
					<input type="file" name="gambar" accept="image/*" class="utama6" required="">
					<p class="garis"></p>
				</td>
			</tr>
			<tr>
				<td>
					<p class="kategori2">Cek Profil Anda</p>
					<i class="fas fa-user-circle bulat"></i>
					<input type="text" name="nama" placeholder="Nama Lengkap" class="utama7" autocomplete="off"  value="<?= @$profile[0]['nama']?>">
					<p class="kategori1">Periksa nomor hp anda agar tidak terjadi hal yang tidak diingankan</p>
					<input type="text" name="wa" placeholder="No. Whatsapp"  autocomplete="off" maxlength="14" class="utama8">
					<p class="garis"></p>
				</td>
			</tr>
			<tr>
				<td colspan="2" class="mancing">
					<input type="submit" name="Jual" value="Jual" class="button1">
					<a href="m4rket.php" class="button">Batal</a>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
