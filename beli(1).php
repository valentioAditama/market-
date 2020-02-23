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
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="FontAwosome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="Allcss.css">
  <title>M4rket</title>
  <style type="text/css">
    body{
  background-color: white;
  }
    marquee{
      font-family: PanicButton BB;
      font-size: 50px;
      color: white;
    }
    .link-button{
      text-decoration: blink;
      background-color: black;
      color: white;
      padding: 4px 90px 4px 90px;
      border: 3px solid #c2c2c2;
      border-radius: 2px
    }
    nav ul{
        list-style:none;
    }
    nav ul li:hover .sub1 {
      
    }
    nav ul .sub1 {
        display:none;
        position:absolute;
        left:0px;
        top:60px;
        background-color:black;
        width: 200px;
        height: 617px;
        transition: height 2s;
    }
    a{
      text-decoration: none;
    }
    .sub1 a:hover {
      color:#1a53ff;
    }
   .bawah{
      float: right;
      margin-right: 90px;
      margin-top: 1px;
      border-radius: 5px;
    }
    .bawah1{
      margin-left: 806px;
      display: block;
      position: absolute;
      font-size: 20px;
      color: black;
      margin-top: 1px;
      border: solid white;
      height: 30px;
      width: 120px;
    }
    select{
      width: 100px;
    }
    .bawah2{
      float: right;
      display: block;
      margin-right: 20px;
      margin-top: 1px;
      color: white;
      border:solid 1.5px white;
      padding-right: 10px;
      padding-left: 10px;
      padding-bottom: 5px;
      border-radius: 5px;
    }
.Header{
  margin-top: -8px;
  margin-left: -8px;
  background-color: black;
  width: 102%;
  height: 50px;
  color: white;
  position: fixed;
}


td.foto{
  height: 600px;
  position: absolute;
  top: auto;
}

td.judul{
  font-family: sans-serif;
  font-weight: bold;
  height: 100px;
  width: 700px;
  position: absolute;
  margin-left: 10px;
  margin-top: 40px;
  font-size: 24px;
}

.harga{
  font-family: sans-serif;
  font-weight: bold;
  height: 60px;
  width: 700px;
  position: absolute;
  margin-left: 10px;
  margin-top: 150px;
  font-size: 40px;
}

.stok_barang{
  font-family: sans-serif;
  font-weight: bold;
  height: 60px;
  width: 700px;
  position: absolute;
  margin-left: 10px;
  margin-top: 220px;
  font-size: 16px;
}

.a{
  font-family: sans-serif;
  font-size: 12px;
}
.c{
  font-family: cursive;
  font-size: 20px;
}

.content1{
  background-color: white;
  height: 500px;
  width: 1000px;
  margin-top: 650px;
}

td{
  width: 150px;
}
.b{
  position: absolute;
  top: 110px;
  left: 190px;
  width: 150px;
  height: 200px;
  background-color: #ddd;
  border-radius: 5px;
  font-family: sans-serif;
  font-size: 12px;
}
button.cari-kategori, button.cari {
  padding: 4px;
  width: 60px;
  background: #333;
  color: #3498db;
  border: 2px #3498db solid;
  border-radius: 6px;
  transition: 0.3s;
  float: left;
}

select{
  border-radius: 6px;
}

select:focus{
  border: #2ecc71;

}

button.cari-kategori:hover, button.cari:hover{
  background: #3498db;
  color: white;
}

.c{
  position: absolute;
  top: 350px;
  left: 190px;
  width: 150px;
  height: 200px;
  background-color: #ddd;
  border-radius: 5px;
  font-family: sans-serif;
  font-size: 12px;
}

.d{
  position: absolute;
  top: 110px;
  left: 360px;
  width: 150px;
  height: 200px;
  background-color: #ddd;
  border-radius: 5px;
  font-family: sans-serif;
  font-size: 12px;
}

.e{
  position: absolute;
  top: 350px;
  left: 360px;
  width: 150px;
  height: 200px;
  background-color: #ddd;
  border-radius: 5px;
  font-family: sans-serif;
  font-size: 12px;
}

/*rgba(77,77,77,0.7)*/
  .drop{
  text-align: center;
  background-color: rgba(77,77,77,0.7);
  padding: 6px;
  border: 3px solid black;
  width: 100%;
  position: absolute;
  top: 8.3%;
  border-left: 0;
  border-top: 0;
  margin-top: 45px;
}
a.home{
  text-align: center;
  margin-top: 4px;
  color: blue;
  width: 100px;
  height: 30px;
  margin-left: -200px;
  font-size: 25px;
}
.home:hover{
  color: white;
}
.sort{
  height: 27px;
  border: #3498db solid 2px;
  width: 200px;
  float: left;
  margin-right: 5px;
}
.sort1{
  height: 27px;
  border: #3498db solid 2px;
  float: left;
  width: 200px;
  margin-right: 5px;
  margin-left: 10px;
}
.home1{
 width: 50px;
}

  </style>
<?php

$selected = 'semua_barang';
$JDPH = 30;
$JD = count(query("SELECT * FROM barang WHERE stok_barang>0"));
$JH = ceil($JD / $JDPH);
$HA = (isset($_GET["page"])) ? $_GET["page"] : 1;
$AD =($JDPH * $HA) - $JDPH;
$sql2 = "SELECT * FROM barang WHERE stok_barang>0";
$Search = @$_GET['query'];
if (!empty($Search)) {
  $sql2 .= " AND nama_barang LIKE '%$Search%' OR kategori_barang LIKE '%$Search%'";
}
$sql2 .= " LIMIT $AD,$JDPH";
$barang = query($sql2);
if(isset($_POST["cari"])) {
  $barang =  caribrg($_POST["keyword"]);
}
if (isset($_POST['cari-kategori'])&&$_POST['cari-kategori']!="") {
  $barang = crkategori($_POST['kategori_barang']);
  $selected = $_POST['kategori_barang'];
}
if (isset($_POST["sorting"])&&$_POST["sorting"]!="") {
  $barang = asc($_POST["sort"],$_POST["kategori_barang"]);
}

?>
</head>
<body><script src="https://kit.fontawesome.com/6562c2a9ad.js">
    </script>
<div class="atas" style="margin-top: -8px;">
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

  <br>
  <br>
  <br>
  <br>
  <?php foreach ($barang as $data): ?>
  <div class="produk">
    <a href="deskripsi2.php?id_barang=<?= $data['id_barang']?>">
    <table class="a">
      <tr>
        <td>
          <img class="gambar" src="img\<?= $data['gambar_barang'] ?>">
        </td>
      </tr>
      <tr>
        <td class="hp"> <br>
        <?= word_limit($data['nama_barang'])?>
        </td>
      </tr>
      <tr>
        <td>
          RP.<?= $data['harga_barang'] ?>
        </td>
      </tr>
    </table>
  </a>
  </div>
<?php endforeach; ?>


  <div class="content1">

  </div>
<script src="js/jquery-3.4.1.js"></script>
<script src="js/scriptbarang.js"></script>
</body>