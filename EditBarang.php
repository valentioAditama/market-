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
				<form>
					<div class="form-group">
						<input type="text" name="" class="form-control" placeholder="judul">
					</div>
					<div class="form-group">
						<input type="number" name="" class="form-control" placeholder="harga">
					</div>
					<div class="form-group">
						<select class="form-control" id="exampleFormControlSelect1" name="kategori_barang">
							<option value="perlengkapan_sekolah">Perlengkapan Sekolah</option>
							<option value="gadget">Gadget</option>
							<option value="aksesoris">Aksesoris</option>
							<option value="makanan_minuman">Makanan/Minuman</option>
							<option value="lain-lain">Lain-lain</option>
						</select>
					</div>
					<div class="form-group">
						<input type="number" name="" class="form-control" placeholder="jumlah">
					</div>
					<div class="form-group">
						<textarea class="form-control" id="exampleFormControlTextarea1" placeholder="deskripsi" rows="3" style="resize: none;"></textarea>
					</div>
				</form>
			</div>
			<div class="col-2">
				<div style="margin-left: 50px;margin-top: 8px;">
					<a href=""><i class="far fa-times-circle" style="margin-left: 89%"></i></a>
				</div>

				<div style="margin-top: 230px;">
					<button type="submit" class="btn btn-success" style="width: 100%;">Save</button>
				</div>
			</div>
		</div>
	</div>

</body>

</html>