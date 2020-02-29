<?php 
session_start();
require 'function.php';
include 'koneksi.php';
if(isset($_POST["login"])) {
	$username = $_POST["user"];
	$password = $_POST["pass"];
    $height = 300;
	$result = mysqli_query($conn, "SELECT * FROM data_user WHERE username = '$username'");
	if (mysqli_num_rows($result) === 1) {
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password,$row["password"])) {
			$_SESSION["login"] = true;
			echo "<script>
				document.location.href='m4rket.php';
				</script>";
		}
	}
	$error = true;
}
?>
<?php if (isset($error)){
	$height = 400;
}

?>
<head>
	<link rel="shortcut icon" href="logo.jpg">
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login2.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
	.box{
	width: 400px;
	padding: 25px;
	position: absolute;
	top: 60%;
	left: 50%;
	transform: translate(-50%, -50%);
	background: white;
	text-align: center;
	border-radius: 15px;
	height: <?=$height ?> px;
	margin-top: -60px;
		}
	body{
	margin: 0;
	padding: 0;
	font-family: "ailerons", sans-serif;
	background-color: rgb(52,152,219);
}

.animated-text {
	border-radius: 27px;
	color: #3498db;
	position: absolute;
	top: 8%;
	left: 50%;
	transform: translate(-50%, -50%);
	background: #191919;
	padding: 0 40px;
	height: 60px;
	overflow: hidden;
}

.line{
	text-transform: uppercase;
	text-align: center;
	font-size: 40px;
	line-height: 60px;
}

.line:first-child{
	animation: anim 10s infinite;
}

@keyframes anim{
	0%{
		margin-top: 0;	
	}
	25%{
		margin-top: -60px;	
	}
	50%{
		margin-top: -120px;	
	}
	75%{
		margin-top: -180px;	
	}	
	100%{
		margin-top: 0;	
	}
}

.box h1{
	color: black;
	text-transform: uppercase;
	font-weight: 500;
}

.box input[type = "text"], .box input[type = "password"]{
	border: 0;
	background: none;
	display:block;
	margin: 20px auto;
	border: 2px solid #3498db;
	padding: 14px 10px;
	width: 390px;
	outline: none;
	color:black;
	border-radius: 24px;
	transition: 0.4s;

}

.box input[type = "text"]:focus,.box input[type = "password"]:focus{
	border-color: #2ecc71;
	background-color: white;
}

.box input[type = "submit"]{
	border: 0;
	background: none;
	display: block;
	margin: 20px auto;
	text-align: center;
	border: 2px solid #2ecc71;
	padding: 14px 40px;
	outline: none;
	color: black;
	border-radius: 24px;
	transition: 0.25s;
	cursor: pointer;
}

.box input[type = "submit"]:hover{
	background: #2ecc71;
}

a{
	color: #2ecc71;
	font-family: agency fb;
	font-size: 17px;
	text-decoration: none;
}

a:hover{
	color: #3498db;
}

p{
	color: black;
	font-family: agency fb;
}

}
</style>
</head >
<body>

	<form class="box" action="" method="post">
		<h1>Login</h1>
		<input type="text" name="user" autofocus="on" placeholder="Username" required="required" autocomplete="off">
		<input type="password" name="pass" placeholder="Password" required="required" autocomplete="off/">
		<input type="submit" name="log" value="Login">
		<?php 
		if(isset($error)) : ?>
			<p style="color: red; font-style: italic; " align="center">Username/Password Salah</p>
		 <?php endif; ?>
		<p>Belum punya akun? <a href="Register.php">Daftar</a></p>
	
	</form>

</body>
</html>