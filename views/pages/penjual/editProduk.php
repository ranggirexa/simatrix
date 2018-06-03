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
					<li><a href="?controller=peramalan&action=showPeramalan&produk=Abon+lele">Peramalan</a></li>
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
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nama_user'] ?> <span class="caret"></span></a>
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
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<p><h1>Update data produk</h1></p>
			<div class="form">
				<?php foreach ($posts as $item) {

					?>
					<form class="form" method="POST" enctype="multipart/form-data">

						<div class="card" style="width: 50rem; height:auto; margin-bottom:30px;">
							<img class="card-img-top" src="foto_produk/<?php echo $item['foto_produk'] ?>" alt="Card image cap">
							<div class="card-block">
								<h2 class="card-title"><?php echo $item['nama_produk'] ?></h2>
								<p class="card-text">
									<font size="4" color="#2196F3"><b><p> <?php echo "Rp ". number_format($item['harga'],0,".",".")."/pcs"; ?></p></b></font>
									

								</p>
								<p class="card-text">

									Jumlah stok : <?php echo $item['jumlah_stok']." "; ?>pcs <br>

								</p>

							</div>
						</div>





						<input type="hidden" name="controller" value="produk">
						<input type="hidden" name="action" value="updateDataProduk">
						<input type="hidden" name="id_produk" value="<?php echo $item['id_produk'] ?>">

						<label>Nama produk</label>
						<div class="input-group">
							
							<!-- <input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="password" required> -->
							
							<input name="nama_produk" type="text" class="form-control" placeholder="Masukkan nama produk" aria-describedby="basic-addon1"
							required value="<?php echo $item['nama_produk']; ?>" autofocus> 
							<span class="input-group-addon" id="basic-addon1"></span>
						</div>
						<br>
						<label>Jumlah produk</label>
						<div class="input-group">
							
							<!-- <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="username" required> -->
							<input min="1" name="jumlah_stok" type="number" class="form-control" placeholder="Masukkan jumlah stok" aria-describedby="basic-addon1"
							required value="<?php echo $item['jumlah_stok']; ?>">
							<span class="input-group-addon" id="basic-addon1">pcs</span>
						</div>
						<br>

						<label>Harga produk</label>
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">Rp</span>
							<!-- <input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="password" required> -->
							<input name="harga" type="number" class="form-control" placeholder="Masukkan harga" aria-describedby="basic-addon1"
							required value="<?php echo $item['harga']; ?>">
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
							required><?php echo $item['deskripsi']; ?></textarea>

						</div>
						<br>
					<!-- <div class="input-group">
						<span class="input-group-addon" id="basic-addon1"></span>
						<input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="password" required>
						<input name="foto_produk" type="file" class="form-control" aria-describedby="basic-addon1"
						required>
					</div> -->
					

					<p align="right">
						<button type="submit" class="btn btn-primary" style="margin-top:20px;">Update</button>
						
						<a href="?controller=produk&action=showAllProdukPenjual"><button class="btn btn-danger" style="margin-top:20px;">Cancel</button></a>

					</p>

					<?php } ?>
				</form>
			</div>
		</div>
	</div>

</body>
</html>