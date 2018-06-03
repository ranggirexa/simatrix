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
					<li><a href="?controller=home&action=homePenjual">Home <span class="sr-only">(current)</span></a></li>
					<!-- <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kelola produk<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="?controller=produk&action=createProduk">Input data produk</a></li>
							<li><a href="?controller=produk&action=showAllProdukPenjual">Lihat data produk</a></li> -->
							<!-- <li><a href="?controller=register&action=register">Register</a></li> -->

						<!-- </ul>
					</li> -->
					<!-- <li ><a href="?controller=keranjang&action=transaksiPenjual">Transaksi</a></li> -->
					<li class="active"><a href="?controller=peramalan&action=peramal">Peramalan</a></li>
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
			<p><h3>Peramalan</h3></p>
		<form class="form" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="controller" value="peramalan">
			<input type="hidden" name="action" value="ramal">
					<label>Tingkat Permintaan</label>
				<div class="input-group">
					<!-- <input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="password" required> -->
					<input name="permintaan" type="text" class="form-control" placeholder="Masukkan Tingkat Permintaan" aria-describedby="basic-addon1"
					required autofocus>
					<span class="input-group-addon" id="basic-addon1"></span>
				</div>
				<br>
				<label>Harga Pasar</label>
				<div class="input-group">
					<!-- <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="username" required> -->
					<input name="harga" type="text" class="form-control" placeholder="Masukkan Harga Pasar" aria-describedby="basic-addon1"
					required autofocus>
					<span class="input-group-addon" id="basic-addon1"></span>
				</div>
				<br>
				<label>Berat Per-Ikan</label>
				<div class="input-group">
					<input name="berat" type="text" class="form-control" placeholder="Masukkan Berat Ikan" aria-describedby="basic-addon1"
					required autofocus>
					<span class="input-group-addon" id="basic-addon1"></span>
				</div>
				<br>
				<label>Kualitas Ikan</label>
				<div class="input-group">
					<input name="kualitas" type="text" class="form-control" placeholder="Masukkan Kualitas Ikan" aria-describedby="basic-addon1"
					required autofocus>
					<span class="input-group-addon" id="basic-addon1"></span>
				</div>
			<br>
			<label>Tingkat Kesegaran</label>
			<div class="input-group">
				<input name="kesegaran" type="text" class="form-control" placeholder="Masukkan Tingkat Kesegaran" aria-describedby="basic-addon1"
				required autofocus>
				<span class="input-group-addon" id="basic-addon1"></span>
			</div>


			<p align="right">
				<button type="submit" class="btn btn-success" style="margin-top:20px;">Submit</button>
			</p>
		</form>



	</div>
	<div class="col-md-9">
<div class="table-responsive">
	<table class="table table-hover table-bordered">
			<thead>
					<tr class="active">
						<th style="text-align: center;">id_perhitungan</th>
							<!-- <th style="text-align: center;">id_user</th> -->
							<th style="text-align: center;">Permintaan</th>
							<th style="text-align: center;">Harga</th>
							<th style="text-align: center;">Berat</th>
							<th style="text-align: center;">Kualitas</th>
							<th style="text-align: center;">Kesegaran</th>
							<th style="text-align: center;">opsi</th>
					</tr>
			</thead>
			<tbody>
					<?php foreach ($cust as $item) { ?>
					<tr>
							<td style="text-align: center;" ><?php echo $item['id_perhitungan']; ?></td>
							<td style="text-align: center;"><?php echo $item['permintaan']; ?></td>
							<td style="text-align: center;"><?php echo $item['harga']; ?></td>
							<td style="text-align: center;"><?php echo $item['berat']; ?></td>
							<td style="text-align: center;"><?php echo $item['kualitas']; ?></td>
							<td style="text-align: center;"><?php echo $item['kesegaran']; ?></td>
							<td>   <a href="?controller=peramalan&action=editperamalan&id_perhitungan=<?=$item['id_perhitungan']?>">  <center><button type="button" class="btn btn-info">Edit</button>
													<button type="button" class="btn btn-danger">Hapus</button>
							</center>
							</td>
			</tr>
			<?php } ?>
	</tbody>
	</table>

</div>

</div>
<right>

</right>
	</div>
