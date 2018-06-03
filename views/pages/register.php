<!DOCTYPE html>
<html>
<head>
	<title>login</title>
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
					<li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
			<!-- 		<li><a href="komoditas.html">Daftar Komoditas</a></li>
					<li><a href="#">Cara Pemesanan</a></li> -->
				</ul>
				<!-- <form class="navbar-form navbar-left">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form> -->
				<ul class="nav navbar-nav navbar-right">
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login/Register <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="?controller=login&action=login">Login</a></li>
							<li><a href="?controller=register&action=register">Register</a></li>
							
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<p><h1>Register</h1></p>
			<div class="form">
				<form method="POST">
					<input type="hidden" name="controller" value="register">
					<input type="hidden" name="action" value="createUser">

					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"></span>
						<!-- <input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="password" required> -->
						<input name="nama" type="text" class="form-control" placeholder="Masukkan Nama" aria-describedby="basic-addon1"
						required>
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"></span>
						<!-- <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="username" required> -->
						<input name="username" type="text" class="form-control" placeholder="Masukkan username" aria-describedby="basic-addon1"
						required autofocus>
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"></span>
						<!-- <input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="password" required> -->
						<input name="password" type="password" class="form-control" placeholder="Masukkan password" aria-describedby="basic-addon1"
						required>
					</div>

					<br>					
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"></span>
						<!-- <input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="password" required> -->
						<input name="email" type="text" class="form-control" placeholder="Masukkan email" aria-describedby="basic-addon1"
						required>
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"></span>
						<!-- <input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="password" required> -->
						<input name="no_telepon" type="text" class="form-control" placeholder="Masukkan no telepon" aria-describedby="basic-addon1"
						required>
					</div>
					

					<p align="right">
						<button type="submit" class="btn btn-success" style="margin-top:20px;">REGISTER</button>
					</p>
				</form>
			</div>
		</div>
	</div>
</body>
</html>