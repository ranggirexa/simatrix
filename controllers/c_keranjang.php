<?php
Class KeranjangController{

	public function addCart(){

		$_SESSION['id_produk'][]=$_GET['id_produk'];
		$_SESSION['jumlah'][]=$_GET['jumlah'];
		header("location:index.php?controller=keranjang&action=showCart");

		//$posts=Keranjang::showCart($_SESSION['id_produk'],$_SESSION['jumlah']);






	}


	public function showCart(){
		//$cabang=Home::showCabang();

		if(array_key_exists('id_produk',$_SESSION) && !empty($_SESSION['id_produk'])) {
			$id_produk=$_SESSION['id_produk'];

			$posts=Keranjang::showCart($id_produk);

		}
/*$id_produk=$_SESSION['id_produk'];
$posts=Keranjang::showCart($id_produk);
var_dump($posts);
exit;*/
/*var_dump($_SESSION['id_produk']);
var_dump($_SESSION['jumlah']);
exit;*/

require_once("views/pages/pembeli/keranjang.php");


}

public function clearCart(){
	unset($_SESSION['id_produk']);
	unset($_SESSION['jumlah']);
	header("location:index.php?controller=home&action=homePembeli");
}
public function bayarCart(){
	$id_produk=$_SESSION["id_produk"];
	$jumlah=$_SESSION["jumlah"];
	$id_user=$_SESSION["id_user"];

	$posts=Keranjang::bayarCart($id_user,$id_produk,$jumlah);
	header("location:index.php?controller=home&action=showTransaksiPembeli");
}
public function detailTransaksiPembeli(){

	if (isset($_SESSION['login_user'])) {
		$posts=Keranjang::detailTransaksiPembeli($_GET['id_penjualan']);
		require_once("views/pages/pembeli/detailTransaksi.php");
	}

	else{
		header('location:index.php?controller=login&action=login');
	}



}
public function detailTransaksiAdmin(){

	if (isset($_SESSION['login_user'])) {
		$posts=Keranjang::detailTransaksiAdmin($_GET['id_penjualan']);
		require_once("views/pages/admin/detailTransaksi.php");
	}

	else{
		header('location:index.php?controller=login&action=login');
	}



}

public function transaksiPenjual(){

	if (isset($_SESSION['login_user'])) {
		$posts=Keranjang::transaksiPenjual();
		require_once("views/pages/penjual/transaksi.php");
	}

	else{
		header('location:index.php?controller=login&action=login');
	}



}

public function transaksiAdmin(){

	if (isset($_SESSION['login_user'])) {
		$posts=Keranjang::transaksiAdmin();
		require_once("views/pages/admin/transaksi.php");
	}

	else{
		header('location:index.php?controller=login&action=login');
	}


}

public function editStatusTransaksi(){
	$posts=Keranjang::editStatusTransaksi($_GET['id_penjualan']);
	header("location:index.php?controller=keranjang&action=transaksiAdmin");
}

}

?>
