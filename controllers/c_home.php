<?php 
Class HomeController{

	public function home(){
		
		$posts=Produk::showAllProduk();
		require_once("views/pages/home.php");


	}
	public function homeAdmin(){
		if (isset($_SESSION['login_user'])) {
			$stat=Home::showStatAdmin();
			$user=User::showDataUser();
			require_once("views/pages/admin/homeAdmin.php");
		}
		else{
			header('location:index.php?controller=login&action=login');
		}
	}
	public function homePenjual(){
		if (isset($_SESSION['login_user'])) {
			$stat=Home::showStat();
			$user=User::showDataUser();

			require_once("views/pages/penjual/homePenjual.php");
		}
		else{
			header('location:index.php?controller=login&action=login');
		}

		
	}
	public function homePembeli(){
		if (isset($_SESSION['login_user'])) {
			$posts=Produk::showAllProduk();
			$user=User::showDataUser();
			require_once("views/pages/pembeli/homePembeli.php");
		}
		else{
			header('location:index.php?controller=login&action=login');
		}

		
	}


	public function showTransaksiPembeli(){


		if (isset($_SESSION['login_user'])) {
			$posts=Home::showTransaksiPembeli($_SESSION['id_user']);
			require_once('views/pages/pembeli/transaksi.php');
		}

		else{
			header('location:index.php?controller=login&action=login');
		}
		
		
	}
}
?>
