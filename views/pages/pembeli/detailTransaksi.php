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
					<li><a href="?controller=home&action=homePembeli">Home <span class="sr-only">(current)</span></a></li>
				<!-- 	<li><a href="komoditas.html">Daftar Komoditas</a></li>
					<li><a href="#">Cara Pemesanan</a></li> -->

					<li><a href="?controller=keranjang&action=showCart">Keranjang</a></li>
					<li class="active"><a href="?controller=home&action=showTransaksiPembeli">Transaksi</a></li>

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
	<div class="container">
		<br><br><br>
		<h1>Detail Transaksi</h1>
		<table class="table" style="margin-top: 30px;">

			<tr>

				<th>No</th>
				<!-- <th>id produk</th> -->
				<th>nama produk</th>
				<!-- <th>penjual</th> -->
				<th>jumlah</th>
				<th>total harga</th>

			</tr>

			<?php 
			$no=1;
			$i=0;

			$totalBayar=0;

			
				foreach ($posts as $item) { 
					/*$harga=$post->harga;
					$jumlahBeli=$post->jumlah;
					$totalHarga=$harga*$jumlahBeli;*/

					//$harga=$item['harga'];
					$jumlahBeli=$item['jumlahBeli'];
					$totalHarga=$item['total_harga'];


					?>
					<tr>
						<td><?php echo $no; ?></td>
						<!-- <td><?php echo $post->id_produk; ?></td> -->
						<td><?php echo $item['nama_produk']; ?></td>
						<!-- <td><?php echo $item['penjual']; ?></td> -->
						<td><?php echo $item['jumlahBeli']." pcs" ?></td>
						<td><?php echo "Rp ". number_format($totalHarga,0,".","."); ?></td>

					</tr>
					<?php 
					$no++;
					$i++; 
					$totalBayar+=$totalHarga;
				}


			 ?>


		</table>
		<div>
			<div class="col-md-8">

			</div>
			<div class="col-md-4"><font color="blue" >
				<h3>Total Bayar	: <?php echo "Rp ". number_format($totalBayar,0,".","."); ?> </h3>
			</font>
			

		</div>


	</div>

</div>
<br><br><br>

</body>
</html>