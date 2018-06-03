<!DOCTYPE html>
<?php $chartData=''; ?>
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
				<a class="navbar-brand" href="#">simatrix</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li ><a href="?controller=home&action=homeAdmin">Home <span class="sr-only">(current)</span></a></li>

					<li><a href="?controller=keranjang&action=transaksiAdmin">Transaksi</a></li>
						<li><a href="?stok=0&controller=peramalan&action=showPeramalan">Peramalan</a></li>
						 <li class="active"><a href="?controller=peramalan&action=tambahToko">Tambah Toko</a></li>
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
		<div class="col-md-3">
			<p><h3>Tambah Toko</h3></p>

			<div class="pembatas"></div>
			<div class="container">
				<div class="col-md-3">
					<p><h3>Menambah Data Kantor Cabang</h3></p>
				<form class="form" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="controller" value="peramalan">
					<input type="hidden" name="action" value="addToko">
							<label>Lokasi Tempat</label>
						<div class="input-group">
							<!-- <input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="password" required> -->
							<input name="nama" type="text" class="form-control" placeholder="Masukkan Lokasi Tempat" aria-describedby="basic-addon1"
							required autofocus>
							<span class="input-group-addon" id="basic-addon1"></span>
						</div>
						<br>
						<label>Username</label>
						<div class="input-group">
							<!-- <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="username" required> -->
							<input name="username" type="text" class="form-control" placeholder="Masukkan Username" aria-describedby="basic-addon1"
							required autofocus>
							<span class="input-group-addon" id="basic-addon1"></span>
						</div>
						<br>
						<label>Password</label>
						<div class="input-group">
							<input name="password" type="text" class="form-control" placeholder="Masukkan Password" aria-describedby="basic-addon1"
							required autofocus>
							<span class="input-group-addon" id="basic-addon1"></span>
						</div>
						<br>
						<label>email</label>
						<div class="input-group">
							<input name="email" type="text" class="form-control" placeholder="Masukkan Email" aria-describedby="basic-addon1"
							required autofocus>
							<span class="input-group-addon" id="basic-addon1"></span>
						</div>
					<br>
					<label>No Telepon</label>
					<div class="input-group">
						<input name="telepon" type="text" class="form-control" placeholder="Masukkan No Telepon" aria-describedby="basic-addon1"
						required autofocus>
						<span class="input-group-addon" id="basic-addon1"></span>
					</div>


					<p align="right">
						<button type="submit" class="btn btn-success" style="margin-top:20px;">Submit</button>
					</p>
				</form>
			</div>
