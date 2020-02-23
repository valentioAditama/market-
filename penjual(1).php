<?php
require 'function.php';
$id = $_GET['id'];

$penjual = query("SELECT data_user.profile,data_user.nama_pelapak,barang.gambar_barang,barang.nama_barang,barang.harga_barang,barang.stok_barang FROM data_user,barang WHERE data_user.id_user = $id AND barang.id_user = $id");
?>
<style type="text/css">
	body{
		background-color: #ddd;
	}
	.barang{
		margin-top: -3px;
		margin-left: -3px;
		width: 190px;
		height: 200px;
	}
	.penjual{
		margin-top: 50px;
		width: 200px;
		height: 200px;
		border-radius: 50%;
	}
	.tbl_penjual{
		float: left;
		margin-left: 40px;
		margin-top: -15px;
	}
	.atas{
		width: 1300px;
		height: 280px;
		background-color: white;
		margin: auto;
		border: 1px solid gray;
	}
	h1{
		margin-left: 50px;
		margin-top: 15px;
	}
	h2{
		position: absolute;
		margin-top: 30px;
		margin-left: -100px;
	}
	.tabel{
		  margin-top: 80px;
		  width: 190px;
		  height: 300px;
		  float: left;
		  margin-left: 25px;
		  background-color: white;
		  border: 1px solid gray;
		  margin-right: 0px;
		}
		.link{
			text-decoration: none;
		}
		.garis{
			width: 1px;
			height: 190px;
			background-color: gray;
			position: absolute;
			margin-left: -120px;
			margin-top: -70px;
		}
		.tengah{
			width: 1300px;
			background-color: white;
			height: 50px;
			margin: auto;
			margin-top: -19px;
			border: 1px solid gray;
		}
		.tulisan{
			margin-left: 25px;
			position: absolute;
			margin-top: 35px;
			font-size: 30px;
			font-family: sans-serif;
		}
		.tengah1{
			width: 320px;
			height: 46px;
			background-color: #2e2eb8;
			border: 1px solid gray;
			margin-top: -2px;
			margin-left: -2px;
			margin-right: 0px;
			position: absolute;
			display: inline-block;
			padding-right: 3.9px;
			font-size: 30px;
			text-align: center;
			font-family: sans-serif;
		}
		.tengah2{
			width: 320px;
			height: 46px;
			background-color: #2e2eb8;
			border: 1px solid gray;
			margin-top: -2px;
			margin-left: 323px;
			position: absolute;
			display: inline-block;
			padding-right: 3.9px;
			font-size: 30px;
			text-align: center;
			font-family: sans-serif;
		}
		.tengah3{
			width: 320px;
			height: 46px;
			background-color: #2e2eb8;
			border: 1px solid gray;
			margin-top: -2px;
			margin-left: 648px;
			margin-right: 0px;
			position: absolute;
			display: inline-block;
			padding-right: 3.9px;
			font-size: 30px;
			text-align: center;
			font-family: sans-serif;
		}
		.tengah4{
			width: 319px;
			height: 46px;
			background-color: #2e2eb8;
			border: 1px solid gray;
			margin-top: -2px;
			margin-left: 973px;
			margin-right: 0px;
			position: absolute;
			display: inline-block;
			padding-right: 3.9px;
			font-size: 30px;
			text-align: center;
			font-family: sans-serif;
		}
</style>
<body>
	<div class="atas">
<table align="center" class="tbl_penjual">
	<tr>
		<td>
			<img class="penjual" src="img/<?=$penjual[0]['profile'] ?>">
		</td>
		<td>
			<h1> <?= $penjual[0]['nama_pelapak'] ?> </h1>
		</td>
		<td>
			<h2>Jakarta Selatan</h2>
		</td>
		<td><p class="garis"></p></td>		
	</tr>
</table>
</div>
<br />

<div class="tengah">
	<table>
		<tr>
			<td class="tengah1">
				Hubungi Penjual
			</td>
			<td class="tengah2">
				Follow
			</td>
			<td class="tengah3">
				Rating
			</td>
			<td class="tengah4">
				Like
			</td>
		</tr>
	</table>
</div>

<p class="tulisan">Iklan yang terpasang</p>
<?php foreach ($penjual as $data): ?>
<div class="tabel">
<a href="" class="link">
<table class="barang" cellpadding="3px" cellspacing="3px">
	<tr>
		<td class="a" width="10%">
			<img class="barang" src="img/<?=$data['gambar_barang'] ?>">
		</td>
	<tr>
		<td class="a" width="20%">
			<?= $data['nama_barang']?>
		</td>
	</tr>
	<tr>
		<td class="a" width="30%">
			<?= $data['harga_barang']?>
		</td>
	</tr>
	<tr>
		<td class="a" width="30%">
			<?= $data['stok_barang']?>
		</td>
	</tr>
</table>
</a>
</div>
<?php endforeach; ?>
</body>
</html>