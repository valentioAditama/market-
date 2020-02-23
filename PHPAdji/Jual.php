<?php 
require 'function.php';

if(isset($_POST['submit']))
{
	if(tambahbrg($_POST)>0)
	{
		echo "Data berhasil ditambahkan ";
		header("Location: LihatDataBarang.php");
	} else{
		echo "Data gagal ditambahkan";
	}
}

?>


<html>
<head>
	<title>M4rket</title>
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
			border:  2px solid;
			margin: auto;
			height: 550px;
			width: 450px;
			background-color: white;
			border-radius: 20px;
		}
		.button{
			border: 2px solid #ddd;
			padding: 4px 30px;
			background-color: black;
			text-decoration: none;
			color: white;
			font-family: arial;
			font-size: 13px;
			border-radius: 5px;
		}
		.button1{
			height: 28px;
			width: 100px;
			background-color: black;
			border: 2px solid #ddd;
			color: white;
			margin-left: 100px;
			margin-right: 10px;
			border-radius: 5px;
		}
		a{
			text-decoration: none;
			color: black;
		}
		.utama{
			width: 387px;
			height: 25px;
			background-color: #ddd;
			margin: auto;
			display: block;
			border-radius: 10px;
		}
		.utama1{
			width: 391px;
			height: 25px;
			margin: auto;
			display: block;
		}
		.utama2{
			background-color: #ddd;
			width: 387px;
			margin: auto;
			display: block;
			border-radius: 10px;
		}
		h1{
			text-align: center;
			font-size: 40px;
		}
		.utama3{
			margin-left: 25px;
			margin-right: -10px;
			padding-left: 5px;
			width: 55px;
			border-radius: 10px 0px 0px 10px;
			background-color: #ddd;
			height: 19px;
		}
		.utama4{
			border-radius: 0px 10px 10px 0px;
			height: 25px;
			background-color: #ddd;
			width: 331px;
		}
		tr{
			margin-top: 5px;
		}
		.beda{
			width: 20px;
			height: 25px;
			margin-left: 25px;
			margin-right: -5px;
			border-radius: 10px 0px 0px 10px;
			background-color: #ddd;
			border-right: transparent;
		}
		.utama5{
			border-radius: 0px 10px 10px 0px;
			height: 25px;
			background-color: #ddd;
			width: 367px;
			border-left: transparent;
		}
		.utama6{
			margin-left: 25px;
			width: 90px;
		}
	</style>
</head>
<body>
	<form method="post" action="" enctype="multipart/form-data">
		<h1>Pasang Iklan Anda</h1>
		<table>
			<tr>
				<td colspan="2">
					<input type="text" name="nama_barang" placeholder="Masukkan Nama Anda" class="utama" autocomplete="off" style="margin-top: 25px;" autofocus="on">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="text" name="Nama" placeholder="Masukkan Nama Barang" class="utama" autocomplete="off">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="readonly" name="" disabled="" placeholder="kategori" class="utama3">
					<select name="kategori_barang" class="utama4">
						<option value="perlengkapan sekolah">Perlengkapan Sekolah</option>
						<option value="gadget">Gadget</option>
						<option value="aksesoris">Aksesoris</option>
						<option value="makanan">Makanan/Minuman</option>
						<option value="lain-lain">Lain-lain</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="" name="" disabled="" placeholder="Rp." class="beda">
					<input type="number" name="harga" placeholder=" harga barang" autocomplete="off" class="utama5">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="number" name="stok" class="utama" placeholder="Stok Barang" autocomplete="off">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="file" name="pic" accept="image/*" class="utama6">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<textarea rows="7" placeholder="Masukkan Deskripsi Barang" class="utama2" autocomplete="off" style="resize: none;"></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="Jual" value="Jual" class="button1">
					<a href="market.html" class="button">Batal</a>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
