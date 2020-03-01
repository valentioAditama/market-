<?php
include_once '../koneksi.php';
$id = $_GET['id'];

@mysqli_query($conn,"DELETE FROM barang WHERE id_barang = $id");

@mysqli_query($conn,"DELETE FROM data_user WHERE id_user = $id");


?>

<script type="text/javascript">
	document.history.go(-1);
</script>