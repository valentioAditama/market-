<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script type="text/javascript" src="toastr.min.js"></script>
<script src="sweetalert/sweetalert2.all.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="bootstrap-number-input.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
<link rel="stylesheet" type="text/css" href="toastr.min.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="FontAwosome/css/all.min.css" />
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css" />


<body style="background-color: rgb(236, 234, 226)">
  <nav class="navbar navbar-expand-sm navbar-dark bg-light " style="height: 80px;">
    <a class="navbar-brand" href="market.php" style="color: black">M4RKET</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <form class="form-inline my-3 my-lg-0" method="get" action="">
        <input class="form-control mr-sm-2" type="search" placeholder="Search...." name="query" value="<?= @$query ?>" aria-label="Search">
        <button class="btn  my-2 my-sm-0 bg-success text-white" type="submit">Search</button>
      </form>
      <a href="simpan_keranjang.html"><img src="icons8-shopping-cart-100.png" height="50px" alt=""></a>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black">
            <img height="30" width="30" style="border-radius: 50%;" src="Profile/<?= !empty($foto) ? "$foto" : "default.png" ?>" alt=""> Valentio
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="Profile.php">Edit Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout.php">Logout</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <ol class="breadcrumb h-25">
    <li class="breadcrumb-item h-25 "><a href="jual.php">Jual</a></li>
    <li class="breadcrumb-item"><a href="AboutUs.php">About Us</a></li>
    <li class="breadcrumb-item "><a href="ContactUs.php">Contact Us</a></li>
    <li class="breadcrumb-item active"><a href="simpan_keranjang.php">Keranjang</a></li>
  </ol>
  <div class="container" style="background-color: white; width: 1000px; height: auto; margin-top: 70px;">
    <div class="row">
      <div class="col-sm-4" style="margin-left: 50px;"></div>
      <div class=" col-sm-4" style="margin-top: 50px; font-family: cursive; font-weight: bold; font-size: 23px;">
        Keranjang Saya
      </div>
      <div class=" col-sm-1"></div>
    </div>
    <br />
    <br />

    <div class="row" style="margin-left: 120px;">
      <div class="row ">
        <div class="col-sm-6">
          <div class="card small" style="width: 13rem; ">
            <img src="8.png" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title">ps4</h5>
              <p class="card-text">
                Jual Ps4 Slim 1Tb Cfw Hen Full Game Garansi Resmi - Hitam
                dengan harga Rp7.700.000 dari toko....
              </p>
              <a href="deksripsi.html" class="btn btn-primary">Beli Sekarang!</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3" style="margin-left: 20px;">
        <div class="card small" style="width: 13rem; ">
          <img src="8.png" class="card-img-top" />
          <div class="card-body">
            <h5 class="card-title">ps4</h5>
            <p class="card-text">
              Jual Ps4 Slim 1Tb Cfw Hen Full Game Garansi Resmi - Hitam dengan
              harga Rp7.700.000 dari toko....
            </p>
            <a href="deksripsi.html" class="btn btn-primary">Beli Sekarang!</a>
          </div>
        </div>
      </div>
      <div class="col-md-2" style="margin-left: 20px;">
        <div class="card small" style="width: 13rem; ">
          <img src="8.png" class="card-img-top" />
          <div class="card-body">
            <h5 class="card-title">ps4</h5>
            <p class="card-text">
              Jual Ps4 Slim 1Tb Cfw Hen Full Game Garansi Resmi - Hitam dengan
              harga Rp7.700.000 dari toko....
            </p>
            <a href="deksripsi.html" class="btn btn-primary">Beli Sekarang!</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row" style="margin-left: 105px; margin-top: 30px;">
      <div class="col-md-3">
        <div class="card small" style="width: 13rem; ">
          <img src="8.png" class="card-img-top" />
          <div class="card-body">
            <h5 class="card-title">ps4</h5>
            <p class="card-text">
              Jual Ps4 Slim 1Tb Cfw Hen Full Game Garansi Resmi - Hitam dengan
              harga Rp7.700.000 dari toko....
            </p>
            <a href="deksripsi.html" class="btn btn-primary">Beli Sekarang!</a>
          </div>
        </div>
        <br />
        <br />
</body>

</html>