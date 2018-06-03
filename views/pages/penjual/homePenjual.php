<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>


<body class="body-custom">
	<!-- <h1>PENJUAL PANEL</h1> -->
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">simatrix</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="?controller=home&action=homePenjual">Home <span class="sr-only">(current)</span></a></li>
					<!-- <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kelola produk<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="?controller=produk&action=createProduk">Input data produk</a></li>
							<li><a href="?controller=produk&action=showAllProdukPenjual">Lihat data produk</a></li> -->
							<!-- <li><a href="?controller=register&action=register">Register</a></li> -->

						<!-- </ul>
					</li> -->
          <!-- <li><a href="?controller=keranjang&action=transaksiPenjual">Transaksi</a></li> -->
           <li><a href="?controller=peramalan&action=peramal">Peramalan</a></li>
          <!-- <li><a href="#">Cara Pemesanan</a></li> -->
        </ul>
				<!-- <form class="navbar-form navbar-left">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form> -->
				<ul class="nav navbar-nav navbar-right">

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nama_user']; ?> <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="logout.php">Logout</a></li>
							<!-- <li><a href="?controller=register&action=register">Register</a></li> -->

						</ul>
					</li>

				</ul>
			</div>
		</div>
	</nav>


	<div class="row">
    <div class="col-md-8">
      <div class="row state-overview">
       <?php foreach ($stat as $item){

         ?>

         <div class="col-lg-6 col-sm-6" >
          <section class="panel" style="background-color: #242D3E;">
            <div class="symbol terques">
              <i class="fa fa-users"></i>
            </div>
            <div class="value" style="margin-left: 15px;">
              <h1 class="count" style="color: white;"><?php echo $item['terjual']." pcs"; ?></h1>
              <p style="color: white;">produk yang Terjual</p>
            </div>
          </section>
        </div>
        <div class="col-lg-6 col-sm-6">
          <section class="panel" style="background-color: #242D3E;">
            <div class="symbol red">
              <i class="fa fa-gift"></i>
            </div>
            <div class="value" style="margin-left: 15px;">
              <h1 class="count2" style="color: white;"><?php echo $item['jumlah_stok']." pcs"; ?></h1>
              <p style="color: white;">Stok produk</p>
            </div>
          </section>
        </div>

        <div class="col-lg-6 col-sm-6">
          <section class="panel" style="background-color: #242D3E;">
            <div class="symbol purple">
              <i class="fa fa-money"></i>
            </div>
            <div class="value" style="margin-left: 15px;">
              <h1 class="count4" style="color: white;"><?php echo $item['nama_produk']; ?></h1>
              <p style="color: white;">produk Terlaris</p>
            </div>
          </section>
        </div>
        <?php } ?>
        <div class="col-md-12">
         <div class="panel-heading" style="background-color: #526485; border: none;">
          <header class="panel-title">
            <div class="text-center">
              <strong style="color: white;">Quote of the Day</strong>
            </div>
          </header>
        </div>
        <section class="panel" style="border-radius: 0px 0px 7px 7px; background-color: #242D3E; padding-bottom: 85px;">
         <div class="symbol purple">
          <i class="fa fa-money"></i>
        </div>
        <div class="value" style="margin-left: 15px;">
          <h1 class="count4" style="color: white;">Jangan lupa bersyukur hari ini...!</h1>

        </div>
      </section>
    </div>
  </div>
</div>
<div class="col-md-4">
  <div class="panel panel-default" style="border:none; border-radius: 5px 5px 10px 10px;">
    <div class="panel-heading" style="background-color: #526485; border: none;">
      <header class="panel-title">
        <div class="text-center">
          <strong style="color: white;">Profile</strong>
        </div>
      </header>
    </div>
    <div class="panel-body" style="background-color: #242D3E; border-radius: 0px 0px 10px 10px; border: none;">
      <div class="text-center" id="author">
        <br>
        <img src="resources/img/man.png" style="width: 190px; height: 180px;">
        <br>
        <h3 style="color: white;">Penjual</h3>
        <small class="label label-warning" style="color: white;"><?php echo $_SESSION['nama_user'];?></small>
        <br><br><br><br>
        <p style="color: white;">Selamat Datang Kembali , Selamat Bekerja Kembali</p>
      </div>
    </div>
  </div>
</div>
</div>



</body>
</html>
