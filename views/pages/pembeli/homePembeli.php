<!DOCTYPE html>
<html>
<head>
	<title>simatrix</title>
	

	
</head>
<body class="body-custom">

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
				<a class="navbar-brand" href="index.php">simatrix</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="?controller=home&action=homePembeli">Home <span class="sr-only">(current)</span></a></li>
					<!-- <li><a href="komoditas.html">Daftar Komoditas</a></li>
					<li><a href="#">Cara Pemesanan</a></li> -->

					<li><a href="?controller=keranjang&action=showCart">Keranjang</a></li>
					<li><a href="?controller=home&action=showTransaksiPembeli">Transaksi</a></li>

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
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<div class="pembatas"></div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="resources/img/1.png">
					</div>

					<div class="item">
						<img src="resources/img/2.png" >
					</div>

					<div class="item">
						<img src="resources/img/3.png" >
					</div>
				</div>

				<!-- Left and right controls -->

			</div>
		</div>
		<div class="col-md-2"></div>

	</div>

	<div class="container">
		<div class="pembatas"></div>




		<div class="container">
			<?php foreach ($posts as $item){

				?>


				<div class="d-inline-block">
					<div class="card" style="width: 25rem;">
						<img class="card-img-top" src="foto_produk/<?php echo $item['foto_produk'] ?>" alt="Card image cap">
						<div class="card-block">
							<h4 class="card-title"><?php echo $item['nama_produk'] ?></h4>
							<p class="card-text">
								<font size="4" color="#2196F3"><b><p> <?php echo "Rp ". number_format($item['harga'],0,".",".")."/pcs"; ?></p></b></font>


							</p>
							<p class="card-text">

								Stok : <b><?php echo $item['jumlah_stok']." "; ?>pcs</b> <br>
								Oleh : <b><?php echo $item['penjual']; ?></b>

							</p>
							<a href="?controller=produk&action=detailBeliProduk&id_produk=<?php echo $item['id_produk']; ?>" class="btn btn-primary" style="width:100%;">Beli</a>
						</div>
					</div>
				</div>
				<?php } ?>
			
		</div>


	</body>
	</html>