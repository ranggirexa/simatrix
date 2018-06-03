<!DOCTYPE html>
<html>
<head>
	<title></title>
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
				<a class="navbar-brand" href="#">simatrix</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="?controller=home&action=homePenjual">Home <span class="sr-only">(current)</span></a></li>
					<li class="dropdown">
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

	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<p><h1>Input data produk</h1></p>
			<div class="form">
				<form class="form" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="controller" value="produk">
					<input type="hidden" name="action" value="prosesCreateProduk">


							<label>Nama produk</label>
						<div class="input-group">

							<!-- <input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="password" required> -->

							<input name="nama_produk" type="text" class="form-control" placeholder="Masukkan nama produk" aria-describedby="basic-addon1"
							required autofocus>
							<span class="input-group-addon" id="basic-addon1"></span>
						</div>
						<br>
						<label>Jumlah produk</label>
						<div class="input-group">

							<!-- <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="username" required> -->
							<input min="1" name="jumlah_stok" type="number" class="form-control" placeholder="Masukkan jumlah stok" aria-describedby="basic-addon1"
							required >
							<span class="input-group-addon" id="basic-addon1">pcs</span>
						</div>
						<br>

						<label>Harga produk</label>
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">Rp</span>
							<!-- <input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="password" required> -->
							<input min="1" name="harga" type="number" class="form-control" placeholder="Masukkan harga" aria-describedby="basic-addon1"
							required >
							<span class="input-group-addon" id="basic-addon1">/pcs</span>
						</div>

						<br>
						<label>Deskripsi produk</label>
						<div class="input-group">
							<!-- <span class="input-group-addon" id="basic-addon1"></span> -->
							<!-- <input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="password" required> -->
							<!-- <input name="deskripsi" type="text" class="form-control" placeholder="Masukkan deskripsi produk" aria-describedby="basic-addon1"
							required value="<?php echo $item['deskripsi']; ?>"> -->

							<textarea style="width:450px; height:100px;" name="deskripsi" type="text" class="form-control" placeholder="Masukkan deskripsi produk" aria-describedby="basic-addon1"
							required></textarea>

						</div>

					<br>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"></span>
						<!-- <input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="password" required> -->
						<input name="foto_produk" type="file" class="form-control" aria-describedby="basic-addon1"
						required>
					</div>


					<p align="right">
						<button type="submit" class="btn btn-success" style="margin-top:20px;">Submit</button>
					</p>
				</form>
			</div>
		</div>
	</div>

</body>
</html>
