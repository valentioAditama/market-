<?php
session_start();
require 'function.php';
$id = $_SESSION['login'];
if (isset($_GET['id'])) {

	$id = $_GET['id'];
}

$penjual = query("SELECT barang.*,data_user.nama,data_user.nama_pelapak FROM data_user join barang on barang.id_user = data_user.id_user WHERE data_user.id_user = $id");

?>
<link rel="shortcut icon" href="favicon.ico">
<title>M4RKET</title>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<<<<<<< HEAD
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="FontAwosome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="Allcss.css">
=======
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="FontAwosome/css/all.min.css">
<link rel="shortcut icon" href="logo.jpg">
<link rel="stylesheet" type="text/css" href="Allcss.css">
>>>>>>> refs/remotes/origin/master
<style type="text/css">
	body {
		background-color: #ddd;
	}
</style>

<body>
	<div class="container-fluid">
		<div class="row ataspenjual">
			<div class="col-sm-10">
				<table>
					<tr>
						<td rowspan="3"><img class="penjual img-fluid" src="Profile/<?= !empty($penjual[0]['profile']) ? $penjual[0]['profile'] : "default.png" ?>"></td>
						<td>
							<h3><?= $penjual[0]['nama'] ?></h3>
						</td>
					</tr>
					<tr>
						<td>
							<h3><?= $penjual[0]['nama_pelapak'] ?></h3>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="row" style="margin-right: 0px;margin-left: 0px;">
			<div class="fiturpenjual col-sm-3">
				<a href="">Follow</a>
			</div>
			<div class="fiturpenjual col-sm-3">
				<a href="">Like</a>
			</div>
			<div class="fiturpenjual col-sm-3">
				<a href="">Rating</a>
			</div>
			<?php if ($penjual[0]['id_user'] == $_SESSION['login']) : ?>
				<div class="fiturpenjual col-sm-3">
					<a href="EditBarang.php?id=<?= $id ?>">Edit</a>
				</div>
			<?php else : ?>
				<div class="fiturpenjual col-sm-3">
					<a href="">Call</a>
				</div>
			<?php endif; ?>

		</div>
	</div>

	<p class="tulisan">Iklan yang terpasang</p>
	<?php foreach ($penjual as $data) : ?>
		<div class="tabel">
			<a <?php if (isset($_GET['id'])) : ?>href="deskripsi.php?id=<?= $data['id_barang'] ?>" <?php else : ?> href="EditBarang.php?id=<?= $data['id_barang'] ?>" <?php endif; ?>class="link">
				<table class="barangpenjual" cellpadding="3px" cellspacing="3px">
					<tr>
						<td class="" width="10%">
							<img class="baranggpenjual" src="img/<?= $data['gambar_barang'] ?>">
						</td>
					<tr>
						<td class="" width="20%">
							<?= $data['nama_barang'] ?>
						</td>
					</tr>
					<tr>
						<td class="" width="30%">
							<?= explode_money($data['harga_barang']) ?>
						</td>
					</tr>
				</table>
			</a>
		</div>
	<?php endforeach; ?>
</body>

</html>