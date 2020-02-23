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
 $id = $_GET['id'];
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    nav {
        height:70px;
        background-color:#2e2eb8;
        line-height:26px;
        position:relative;
        top:0px;
        width: 1366px;
        margin:auto;
        font-size: 20px;
        margin-top: 30px;
        margin-left: -8px;  
        position: fixed;  
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
    .atas{
      width: 1366px;
      height: 50px;
      background-color: #ddd;
      position: fixed;
      margin-top: -8px;
      margin-left: -8px;
    }
    .atas1{
      text-decoration: none;
      color: black;
      float: right;
      margin-top: 5px;
      margin-right: 80px;
    }
    .atas1:hover{
      color: #2e2eb8;
    }
    .atas2{
      text-decoration: none;
      color: black;
      float: right;
      margin-top: 5px;
      margin-right: 40px
    }
    .atas2:hover{
      color: #2e2eb8;
    }
    .atas3{
      text-decoration: none;
      color: black;
      float: right;
      margin-top: 5px;
      margin-right: 40px;
    }
    .atas3:hover{
      color: #2e2eb8;
    }
    .bawah{
      float: right;
      display: block;
      margin-right: 60px;
      margin-top: 1px;
      color: white;
    }
    .bawah:hover{
      color: white;
    }
    .bawah1{
      margin-left: 1000px;
      display: block;
      position: absolute;
      font-size: 20px;
      color: white;
    }
    .bawah2{
      float: right;
      display: block;
      margin-right: 20px;
      margin-top: 1px;
      color: white;
    }
    .box{
      height: 30px;
      border: 2px solid #fff;
      margin-left: 70px;
      width: 720px;
      border-radius: 6px;
    }
    .find{
      height: 30px;
      margin-left: -9px;
      background-color: #2e2eb8;
      border: 2px solid #fff;
      border-radius: 0px 6px 6px 0px;
      font-family: arial;
    }
    .find:hover{  
      color: white;
    }
    .beda{
      float: left;
      width: 150px;
      height: 40px;
      margin-top: -2px;
      margin-left: 0px;
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
img{
  margin-left: 30px;
  margin-top: 40px;
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
.a{
  margin-top: 20px;
  margin-left: 10px;
  width: 150px;
  height: 200px;
  background-color: #ddd;
  border-radius: 5px;
}

img{
  height: auto;
  margin-left: -2px;
  margin-top: -11px;
  margin-right: -2px;
  border-radius: 5px 5px 0px 0px;
  margin-bottom: -12px;
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
.produk{
  width: 200px;
  height: 260px;
  float: left;
  margin-left: 22px;
  margin-top: 10px;
}
.gambar{
  width: 150px;
  height: 150px;
  border: 1px solid #ddd; 
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
$barang = query("SELECT * FROM barang WHERE stok_barang>0 LIMIT $AD,$JDPH");
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
 <div class="atas">
      <tr>
        <td><a href="ContactUs.php?id=<?=$id ?>" class="atas1"> Contact Us</a></td>
        <td><a href="AboutUs.php?id=<?=$id ?>" class="atas2">About Us</a></td>
        <td><a href="Jual.php?id=<?=$id ?>" class="atas3">Jual</a></td>
      </tr>
    </div>
  <nav><ul>
    <li></li>
    <ul class="sub1">
      <li class="beda1"><a href="Profile.php?id=<?=$id ?>"><i class="fas fa-user-circle"></i></a></li>
      <li><a href="beli.php?id=<?=$id ?>"><i class="fas fa-shopping-cart"></i> Beli</a></li>
      <li></li>
      <li></li>
      <li></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
    </li>
      <li><a href="" class="beda"><img src="Gambar/logo market pth.jpg" class="beda"></a></li>
      <li><a href=" " class="bawah">Daftar</a></li>
      <li><a href=" " class="bawah2">Masuk</a></li>
      <li><a href="" class="bawah1">Kategori</a></li>
    </ul>
    <form method="get" target="" action="">
    <input type="text" name="find" class="box" placeholder="Cari Produk Disini..." autocomplete="off" autofocus="on">
    <input type="submit" name="find" value="Search" class="find">
  </form>
  </nav>
  <div class="navigation">

  </div>
  <br>
  <br>
  <br>
  <br>
  <?php foreach ($barang as $data): ?>
  <div class="produk">
    <a href="deskripsi.php?id_barang=<?= $data['id_barang']?>&id=<?=$id ?>">
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