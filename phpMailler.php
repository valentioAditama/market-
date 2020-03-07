<?php
session_start();

require_once "vendor/autoload.php";
require_once 'p.php';
include_once 'function.php';
@$jumlah = $_GET['jumlah'];
$user = $_SESSION['login'];
$profile = query("SELECT * FROM data_user WHERE id_user = '$user'")[0];
$nama_barang = $_SESSION['transaksi'][0]['nama_barang'];
$id_barang = $_SESSION['transaksi'][0]['id_barang'];
$pelapak = $_SESSION['transaksi'][0]['pelapak'];
$_SESSION['transaksi'][0]['jumlah'] = $jumlah;
$tanggal = date("Y-m-d H:i:s");
$tipe = $_COOKIE['tipe'];
$id_transaksi = time();
$_SESSION['transaksi'][0]['id_transaksi'] = $id_transaksi;
$_SESSION['transaksi'][0]['tanggal'] = $tanggal;

$q = "INSERT INTO transaksi VALUES($id_transaksi,$id_barang,$user,$jumlah,'$tanggal','$tipe')";

mysqli_query($conn,$q);


$pembeli = $_GET['buy'];
$id_barang = $_GET['sell'];
@$jumlah = $_GET['jumlah'];


$data_pembeli = query("SELECT * FROM data_user WHERE id_user = '$pembeli'")[0];
$barang = query("
  SELECT barang.*,data_user.*
  FROM barang 
  JOIN data_user
  ON barang.id_user = data_user.id_user
  WHERE id_barang = '$id_barang'")[0];
$jmlAkhir = $barang['stok_barang'] - $jumlah;
mysqli_query($conn,"UPDATE barang SET 
				stok_barang = $jmlAkhir
				WHERE id_barang = '$id_barang'
				");
$email_pembeli = $data_pembeli['email'];
$nama_pembeli = $data_pembeli['nama'];
$email_penjual = $barang['email'];
$nama_penjual =  $barang['nama'];

//PHPMailer Object
$mail = new PHPMailer\PHPMailer\PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
 
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
 
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
 
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
 
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
 
//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Send HTML or Plain Text email
$mail->isHTML(true);

 
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "diazsmartiansyah28@gmail.com";
 
$mail->Password = "$pis";
 
//Set who the message is to be sent from
$mail->setFrom("$email_pembeli", "$nama_pembeli");
 
//Set an alternative reply-to address
$mail->addReplyTo("$email_pembeli", "$nama_pembeli");
 
//Set who the message is to be sent to
$mail->addAddress("$email_penjual", "$nama_penjual");
 
$mail->Subject = "PESANAN PRODUK M4RKET";
$mail->Body = "<i>$nama_pembeli Memesan Produk $barang[nama_barang] Dengan Jumlah $jumlah</i>";
$mail->AltBody = "TERIMAKASIH TELAH MENGGUNAKAN LAYANAN JASA KAMI";

//send the message, check for errors
if (!$mail->send()) {
    echo 0;
} else {
    echo 1;
}
?>