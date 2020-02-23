<!DOCTYPE html>
<html>
<head>
	<title>M4RKET</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		body{
			background-color: #ddd;
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
    		height:80px;
    		background-color:black;
   	 		line-height:60px;
   			position:relative;
    		top:0px;
   			width: 1366px;
    		margin:auto;
    		font-size: 20px;
    		margin-top: -20px;
    		margin-left: -8px;	
    		position: fixed;	
    	}
		nav ul{
    		list-style:none;
		}
		nav ul li a {
			margin-left: -75px;
    		float:left;
    		width:250px;
    		color:#fff;
    		text-decoration:none;
    		display:block;
    		text-align:left;
    		text-align: center;
		}
		nav ul li a:hover {
    		display: inline-block;
    		width: 250px;
    		color: #1a53ff;
		}
		nav ul li:hover .sub1 {
			display:block;
		}
		nav ul .sub1 {
		    display:none;
		    position:absolute;
		    left:0px;
		    top:60px;
		    background-color:black;
		    width: 150px;
		    height: 591px;

		}
		.sub1 a:hover {
			color:#1a53ff;
		}
		/*form {
    		width:500px;
   		 	margin:50px auto;
		}
		.search {
    		padding:8px 15px;
    		background:rgba(50, 50, 50, 0.2);
    		border:0px solid #dbdbdb;
		}
		.button {
    		position:relative;
    		padding:6px 15px;
    		left:-8px;
    		border:2px solid #53bd84;
    		background-color:#53bd84;
    		color:#fafafa;
		}
		.button:hover  {
		    background-color:#fafafa;
		    color:#207cca;
		}*/
		b{
			font-size: 30px;
		}
		.box{
			height: 24px;
			border: 2px solid blue;
			margin-left: 50px;
			width: 720px;
			border-radius: 6px;
		}
		.find{
			height: 30px;
			margin-left: -9px;
			background-color: #1a53ff;
			border: solid #1a53ff;
			border-radius: 0px 6px 6px 0px;
			font-size: 15px;
			font-family: arial;
		}
		.find:hover{	
			color: white;
		}
		.beda{
			float: right;
			width: 150px;
			height: 40px;
			margin-top: 5px;
			margin-right: 50px;
		}
		.beda:hover{
			background-color: black;
		}
		.beda1{
			padding-top: 30px;
			font-size: 120px;
			height: 150px;	
		}
		.beda1 :hover{
			color: #1a53ff;
			height: 100px;
		}
		.slidershow{
			width: 1230px;
			height: 500px;
			overflow: hidden;
			margin-left: 50px;
			margin-top: 120px;
		}		
		.navigation{
			position: absolute;
			bottom: 20px;
			left: 50%;
			transform: translateX(-50%);
			display: flex;
			margin-bottom: 15px;
		}
		.bar{
			width: 15px;
			height: 15px;
			border: 2px solid #fff;
			margin: 6px;
			cursor: pointer;
			transition: 0.4s;
			border-radius: 50%;
		}
		.bar:hover{
			background: #fff;
		}
		input[name = "r"]{
			position: absolute;
			visibility: hidden;
		}
		.slides{
			width: 500%;
			height: 100%;
			display: flex;

		}
		.slide{
			width: 20%;
			transition: 0.6s;
		}
		.slide img{
			width: 100%;
			height: 100%;
		}
		#r1:checked ~ .s1{
			margin-left: 0;
		}
		#r2:checked ~ .s1{
			margin-left: -20%;
		}
		#r3:checked ~ .s1{
			margin-left: -40%;
		}
		#r4:checked ~ .s1{
			margin-left: -60%;
		}
		#r5:checked ~ .s1{
			margin-left: -80%;
		}
		td{
  			width: 150px;
		}
		table{
		  width: 200px;
		  height: 250px;
		  background-color: gray;
		  border-radius: 5px;
		  margin-left: 50px;
		}
		.foto{
		  margin-left: -2px;
		  margin-top: -11px;
		  margin-right: -2px;
		  border-radius: 5px 5px 0px 0px;
		  margin-bottom: -12px;
		  height: 150px;
		  width: 200px;
		}
		.jual{
		  height: 50px;
		}
		.konten{
		color: white;
		}
		a.konten:hover{
		  color: white;
		}
		.tabel{
		  margin-top: 40px;
		  width: 1330px;
		  height: 200px;
		}
		p{
			font-size: 30px;
			margin-top: 150px;
			margin-left: 50px;
			margin-bottom: -40px;
		}
		</style>
	</head>
	<body><script src="https://kit.fontawesome.com/6562c2a9ad.js">
		</script>
	<nav><ul>
		<li><a href=""><i class="fas fa-bars"></i> Home</a>
		<ul class="sub1">
			<li class="beda1"><a href="Profile.php"><i class="fas fa-user-circle"></i></a></li>
			<li><a href="jualBeli.php"><i class="fas fa-shopping-cart"></i> Beli</a></li>
			<li><a href="Jual.php"><i class="fas fa-camera"></i> Jual</a></li>
			<li><a href="ContactUs.php"><i class="fas fa-phone-alt"></i> Contact Us</a></li>
			<li><a href="AboutUs.php"><i class="fas fa-code"></i> About Us</a></li>
		</ul>
		</li>
			<li><a href="" class="beda"><img src="logo market pth.jpg" class="beda"></a></li>
		</ul>
		<form method="get" target="" action="">
		<input type="text" name="find" class="box" placeholder="Cari Produk Disini..." autocomplete="off" autofocus="on">
		<input type="submit" name="find" value="Search" class="find">
	</form>
	</nav>
	<div class="slidershow">
		<div class="slides">
			<input type="radio" name="r" id="r1" checked="checked">
			<input type="radio" name="r" id="r2" checked="checked">
			<input type="radio" name="r" id="r3" checked="checked">
			<input type="radio" name="r" id="r4" checked="checked">
			<div class="slide s1">
				<img src="smk.jpg" alt="">
			</div>
			<div class="slide">
				<img src="jadul.jpg" alt="">
			</div>
			<div class="slide">
				<img src="depan.jpg" alt="">
			</div>
			<div class="slide">
				<img src="10.jpg" alt="">
			</div>
		<div class="navigation">
			<label for="r1" class="bar"></label>
			<label for="r2" class="bar"></label>
			<label for="r3" class="bar"></label>
			<label for="r4" class="bar"></label>
		</div>
	</div>
	</div>

	<p>Baru di Gadget</p>
	<div class="tabel"><a href="market.html" class="konten">
    <table>
      <tr>
        <td>
          <img src="10.jpg" width="150" height="120" class="foto">
        </td>
      </tr>
      <tr>
        <td class="jual">
          Nama Barang
      </tr>
      <tr>
        <td>
          Rp. Harga Barang
        </td>
      </tr>
    </table>
	</a>
  </div>

  <p>Baru di Perlengkapan Sekolah</p>
  <div class="tabel"><a href="market.html" class="konten">
    <table>
      <tr>
        <td>
          <img src="10.jpg" width="150" height="120" class="foto">
        </td>
      </tr>
      <tr>
        <td class="jual">
          Nama Barang
      </tr>
      <tr>
        <td>
          Rp. Harga Barang
        </td>
      </tr>
    </table>
  </a>	
  </div>

  <p>Baru di Aksesoris</p>
  <div class="tabel"><a href="market.html" class="konten">
    <table>
      <tr>
        <td>
          <img src="10.jpg" width="150" height="120" class="foto">
        </td>
      </tr>
      <tr>
        <td class="jual">
          Nama Barang
      </tr>
      <tr>
        <td>
          Rp. Harga Barang
        </td>
      </tr>
    </table>
  </a>	
  </div>

  <p>Baru di Makanan/Minuman</p>
  <div class="tabel"><a href="market.html" class="konten">
    <table>
      <tr>
        <td>
          <img src="10.jpg" width="150" height="120" class="foto">
        </td>
      </tr>
      <tr>
        <td class="jual">
          Nama Barang
      </tr>
      <tr>
        <td>
          Rp. Harga Barang
        </td>
      </tr>
    </table>
  </a>	
  </div>

  <p>Baru di Lain-lain</p>
  <div class="tabel"><a href="market.html" class="konten">
    <table>
      <tr>
        <td>
          <img src="10.jpg" width="150" height="120" class="foto">
        </td>
      </tr>
      <tr>
        <td class="jual">
          Nama Barang
      </tr>
      <tr>
        <td>
          Rp. Harga Barang
        </td>
      </tr>
    </table>
  </a>	
  </div>
</body>
</html>