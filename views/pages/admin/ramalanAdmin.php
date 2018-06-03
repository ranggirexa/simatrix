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
					<!-- <li ><a href="?controller=home&action=homeAdmin">Home <span class="sr-only">(current)</span></a></li>

          <li ><a href="?controller=keranjang&action=transaksiAdmin">Transaksi</a></li> -->
					  <li class="active"><a href="?stok=0&controller=peramalan&action=showPeramalan">Peramalan</a></li>
						 <!-- <li><a href="?controller=peramalan&action=tambahToko">Tambah Toko</a></li> -->
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
		<br><br><br>

		<h2>Tabel Data</h2>
		<table class="table" style="margin-top: 30px;">


			<tr>

				<th>No</th>
				<!-- <th>id produk</th> -->
				<th>Lokasi</th>
				<!-- <th>penjual</th> -->
				<th>permintaan</th>
				<th>harga</th>
				<th>berat</th>
				<th>kualitas</th>
				<th>kesegaran</th>


			</tr>

			<?php
			$no=1;
			$i=0;
			$hasilPeramalan=0;
			$permintaan=array();
			$harga=array();
			$berat=array();
			$kualitas=array();
			$kesegaran=array();
			$lokasi=array();
			// $totalBayar=0;


			foreach ($posts as $item) {
					/*$harga=$post->harga;
					$jumlahBeli=$post->jumlah;
					$totalHarga=$harga*$jumlahBeli;*/

					//$harga=$item['harga'];
					// $jumlahBeli=$item['jumlahBeli'];
					// $totalHarga=$item['total_harga'];


					?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $item['nama']; ?></td>
						<td><?php echo $item['permintaan'];?></td>
						<td><?php echo $item['harga'];?></td>
						<td><?php echo $item['berat']; ?></td>
						<td><?php echo $item['kualitas']; ?></td>
						<td><?php echo $item['kesegaran'];?></td>

					</tr>
					<?php
					$lokasi[$i]=$item['nama'];
					$permintaan[$i]=$item['permintaan'];
					$harga[$i]=$item['harga'];
					$berat[$i]=$item['berat'];
					$kualitas[$i]=$item['kualitas'];
					$kesegaran[$i]=$item['kesegaran'];
					$no++;
					$i++;

					// $totalBayar+=$totalHarga;
				}

				$i=0;
				$a=array();
				$b=array();
				$c=array();
				$d=array();
				$e=array();
				$WE= array();
				//bobot
				$x1=4;
				$x2=3;
				$x3=4;
				$x4=5;
				$x5=4;
				$totalbobot=$x1+$x2+$x3+$x4+$x5;
				// echo $totalbobot;
				foreach ($permintaan as $item) {
					$a[$i] = $permintaan[$i]*$x1/$totalbobot;
					$i++;
				}
				$i=0;
				foreach ($harga as $item) {
					$b[$i] = $harga[$i]*$x2/$totalbobot;
					$i++;
				}
				$i=0;
				foreach ($berat as $item) {
					$c[$i] = $berat[$i]*$x3/$totalbobot;
					$i++;
					// echo $harga[1];
				}
				$i=0;
				foreach ($kualitas as $item) {
					$d[$i] = $kualitas[$i]*$x4/$totalbobot;
					$i++;
				}
				$i=0;
				foreach ($kesegaran as $item) {
					$e[$i] = $kesegaran[$i]*$x5/$totalbobot;
					$i++;
				}
				$i=0;
				foreach($lokasi as $item ){
				$WE[$i]=$a[$i]+$b[$i]+$c[$i]+$d[$i]+$e[$i];
				// echo $WE[$i];
				$i++;
				}

				?>
				<!-- < -->
				<form class="form" method="GET" enctype="multipart/form-data">
					<input type="hidden" name="controller" value="peramalan">
					<input type="hidden" name="action" value="showPeramalan">
							<label>Masukkan Total Stok</label>
						<div class="input-group">
							<!-- <input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="password" required> -->
							<input name="stok" type="text" class="form-control" placeholder="Masukkan Total Stok" aria-describedby="basic-addon1"
							required autofocus>
							<span class="input-group-addon" id="basic-addon1"></span>
						</div>
						<p align="right">
							<button type="submit" class="btn btn-success" style="margin-top:20px;">Submit</button>
						</p>
					</form>

				<!-- </div>? -->
					<br>


			</table>
			<h1>Peramalan</h1>
			<table class="table" style="margin-top:30px;">
				<tr>
				<th>No</th>
				<th>Lokasi</th>
				<th>JUMLAH DISTRIBUSI</th>
				</tr>
				<tr>
					<?php
					$no=1;
					$i=0;
					$WEtot=0;
					$arrayWE = sizeof($WE);

					foreach($lokasi as $arrayWE ){
						$WEtot=$WEtot+$WE[$i];
						$i++;
					}
					// echo $WEtot.$WE[3];
					$i=0;
					// $_GET['stok']=$stok;
					foreach ($lokasi as $item) {
					?>
					<td><?php echo $no; ?></td>
					<td><?php echo $lokasi[$i]; ?></td>
					<td><?php echo ($WE[$i]/$WEtot)*($_GET['stok']);?></td>
					</tr>
					<?php
					$no++;
					$i++;
					}
			?></td>


				</tr>
			</table>

			<div>
				<div class="col-md-8">




			</div>


		</div>

	</div>
</body>
</html>
