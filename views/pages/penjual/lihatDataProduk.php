<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

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
					<a class="navbar-brand" href="#">simatrix</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="?controller=home&action=homePenjual">Home <span class="sr-only">(current)</span></a></li>
						<li class="dropdown" class="active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kelola produk<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="?controller=produk&action=createProduk">Input data produk</a></li>
								<li><a href="?controller=produk&action=showAllProdukPenjual">Lihat data produk</a></li>
								<!-- <li><a href="?controller=register&action=register">Register</a></li> -->

							</ul>
						</li>
						<li><a href="?controller=keranjang&action=transaksiPenjual">Transaksi</a></li>
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
	<div class="pembatas"></div>



	<div class="container">
		<div class="pembatas"></div>


		<div class="container">
			<?php foreach ($posts as $item) {

				?>
				<div class="d-inline-block">
					<div class="card" style="width: 25rem;">
						<img class="card-img-top" src="foto_produk/<?php echo $item['foto_produk'] ?>" alt="Card image cap">
						<div class="card-block">
							<font size="4">
							<p class="card-title"><?php echo $item['nama_produk'] ?></p></font>
							<p class="card-text">
								<font size="4" color="#2196F3"><b><p> <?php echo "Rp ". number_format($item['harga'],0,".",".")."/pcs"; ?></p></b></font>


							</p>
							<p class="card-text">

								Jumlah stok : <?php echo $item['jumlah_stok']." "; ?>pcs <br>

							</p>
							<a href="?controller=produk&action=editProduk&id_produk=<?php echo $item['id_produk']; ?>" class="btn btn-primary">Edit</a>
							<a href="?controller=produk&action=deleteDataProdukPenjual&id_produk=<?php echo$item['id_produk']; ?>" class="btn btn-danger">Delete</a>
						</div>
					</div>
				</div>
				<?php }  ?>
			</div>


		</body>
		</html>
