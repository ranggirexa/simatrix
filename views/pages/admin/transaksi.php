<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

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

          <li class="active"><a href="?controller=keranjang&action=transaksiAdmin">Transaksi</a></li>
					  <li><a href="?stok=0&controller=peramalan&action=showPeramalan">Peramalan</a></li>
						 <li><a href="?controller=peramalan&action=tambahToko">Tambah Toko</a></li>
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
	<div class="container">
		<br><br><br>
		<table class="table" style="margin-top: 30px;">

			<tr>

				<th>No</th>
				<!-- <th>id produk</th> -->
				<th>id Transaksi</th>
				<th>nama pembeli</th>
				<th>tanggal</th>
				<th>status</th>
				<th>action</th>



			</tr>

			<?php
			$no=1;
			foreach ($posts as $item) { ?>


			<tr>
				<td><?php echo $no; ?></td>

				<td><?php echo $item['id_penjualan']; ?></td>
				<td><?php echo $item['pembeli']; ?></td>
				<td><?php echo $item['tanggal']; ?></td>
				<td><?php echo $item['status']; ?></td>
				<td>
				<a href="?controller=keranjang&action=editStatusTransaksi&id_penjualan=<?php echo $item['id_penjualan']; ?>"> <button class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button></a>
					<a href="?controller=keranjang&action=detailTransaksiAdmin&id_penjualan=<?php echo $item['id_penjualan']; ?>"> <button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span></button></a>

				</td>

			</tr>
			<?php
			$no++;
		}

		?>


	</table>


</div>
<br><br><br>
</body>
</html>
