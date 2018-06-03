<?php
Class PeramalanController{

	// public function showPeramalan(){
	//
	// 	$produk=Peramalan::optionProduk();
	// 	$posts=Peramalan::showPeramalan($_GET["produk"]);
	// 	require_once("views/pages/penjual/lihatPeramalan.php");
	//
	// }
	public function peramal(){
				$cust = Peramalan::tampilramal();
				require_once("views/pages/penjual/lihatPeramalan.php");


	}
	public function tambahToko(){

		require_once("views/pages/Penjualan/tambahToko.php");


	}

	public function peramalAdmin(){
			$stat= Home::showStatAdmin();
			$user= User::showDataUser();
			require_once("views/pages/admin/ramalanAdmin.php");
	}

	public function ramal(){
		// $produk=Peramalan::optionProduk();
		$Peramalan = Peramalan::inputRamal($_POST["permintaan"],$_POST["harga"],$_POST["berat"]
			,$_POST["kualitas"],$_POST["kesegaran"]);
			header("location:index.php?controller=peramalan&action=peramal");
		// require_once("views/pages/penjual/lihatPeramalan.php");

	}

	public function addToko(){
		$User = Peramalan::inputToko($_POST["nama"],$_POST["username"],$_POST["password"],$_POST["email"],$_POST["telepon"]);
		require_once("views/pages/penjual/lihatPeramalan.php");
}

public function addStok(){
	$stok = $_POST["total"];
	require_once("views/pages/admin/ramalanAdmin.php");
}

public function updateDataPeramalan(){
	$posts=Peramalan::UpdateDataPeramalan($_POST['id_perhitungan'],$_POST["permintaan"],$_POST["harga"],$_POST["berat"],$_POST["kualitas"],$_POST["kesegaran"]);
	header('location:index.php?controller=peramalan&action=peramal');
}

public function showPeramalan(){

	if (isset($_SESSION['login_user'])) {
		$posts= Peramalan::tabel();
		require_once("views/pages/admin/ramalanAdmin.php");
	}

	else{
		header('location:index.php?controller=login&action=login');
	}
}

public function editperamalan(){
	$edit = Peramalan::tampiledit($_GET['id_perhitungan']);
		$cust = Peramalan::tampilramal();
	require_once("views/pages/penjual/editPeramalan.php");
}


}
?>
