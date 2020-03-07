<?php
include_once '../function.php';
@$id = $_GET['id'];
@$barang = query("
  SELECT *
  FROM barang 
  WHERE id_barang = '$id'")[0];

if (isset($_POST['submit'])) {
	if (ubahbrg($_POST, "../img") > -1) {
		echo "<script>
					alert('Berhasil Diubah');
					document.location.href = 'tables.php';
				</script>";
	} else {
		echo "<script>
					alert('Gagal Diubah');
					document.location.href = '';
				</script>";
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="shortcut icon" href="logo.jpg">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="FontAwosome/css/all.min.css">
	<title>M4RKET</title>
</head>
<style type="text/css">
	body {
		background-color: gray;
	}
</style>

<body>
	<!-- foreach -->
	<div class="container-fluid" style="background-color: white;margin-top: 10px;border-radius: 8px;width: 98%;">
		<div class="row">
			<div class="col-10">
				<label style="font-size: 30px;">Judul Barang</label>
				<form action="" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<input type="file" name="gambar" class="form-control">
					</div>
					<input type="hidden" name="gambarlama" value="<?= @$barang['gambar_barang'] ?>">
					<input type="hidden" name="id_barang" value="<?= @$barang['id_barang'] ?>">
					<div class="form-group">
						<input type="text" name="nama_barang" class="form-control" placeholder="Judul" value="<?= @$barang['nama_barang'] ?>">
					</div>
					<div class="form-group">
						<input type="number" name="harga_barang" class="form-control" placeholder="Harga" value="<?= @$barang['harga_barang'] ?>">
					</div>
					<div class="form-group">
						<select class="form-control" id="exampleFormControlSelect1" name="kategori_barang">
							<option value="perlengkapan_sekolah" <?= @$barang['nama_barang'] == "perlengkapan_sekolah" ? "selected" : "" ?>>Perlengkapan Sekolah</option>
							<option value="gadget" <?= @$barang['kategori_barang'] == "gadget" ? "selected" : "" ?>>Gadget</option>
							<option value="aksesoris" <?= @$barang['kategori_barang'] == "aksesoris" ? "selected" : "" ?>>Aksesoris</option>
							<option value="makanan_minuman" <?= @$barang['kategori_barang'] == "makanan_minuman" ? "selected" : "" ?>>Makanan/Minuman</option>
							<option value="lain-lain" <?= @$barang['kategori_barang'] == "lain-lain" ? "selected" : "" ?>>Lain-lain</option>
						</select>
					</div>
					<div class="form-group">
						<input type="number" name="stok_barang" class="form-control" placeholder="stok" value="<?= @$barang['stok_barang'] ?>">
					</div>
					<div class="form-group">
						<textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Deskripsi" name="deskripsi" rows="3" style="resize: none;"><?= @$barang['deskripsi'] ?></textarea>
					</div>

			</div>
			<div class="col-2">
				<div style="margin-left: 50px;margin-top: 8px;">
					<a href=""><i class="far fa-times-circle" style="margin-left: 89%"></i></a>
				</div>
				<div>
					<img width="200px" class="" src="../img/<?= @$barang['gambar_barang'] ?>">
				</div>
				<div style="margin-top: 100px; margin-bottom: 20px;">
					<button type="submit" class="btn btn-success" name="submit" style="width: 100%;">Save</button>
				</div>
				</form>
			</div>
		</div>
	</div>

</body>

</html>