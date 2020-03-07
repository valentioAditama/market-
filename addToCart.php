<?php
include_once 'function.php';
$idBrg = $_GET['id_brg'];
$id_user = $_GET['id_user'];
$query = "INSERT INTO keranjang VALUES('','$idBrg','$id_user')";

mysqli_query($conn,$query);

?>