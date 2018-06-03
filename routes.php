<?php
function call($controller, $action){
	require_once('controllers/c_'.$controller.'.php');

	switch ($controller) {
		case 'login':
		require_once('models/m_login.php');
		$controller=new LoginController();
		break;

		case 'register':
		require_once('models/m_register.php');
		$controller=new RegisterController();
		break;

		case 'home':
		$controller=new HomeController();
		require_once('models/m_home.php');
		require_once('models/m_produk.php');
		require_once('models/m_user.php');
		break;

		case 'produk':
		//require_once('models/m_home.php');
		require_once('models/m_produk.php');
		$controller=new ProdukController();
		break;

		case 'laporan':
		require_once('models/m_laporan.php');
		$controller=new LaporanController();
		break;

		case 'keranjang':
		require_once('models/m_home.php');
		//require_once('models/m_kode.php');
		require_once('models/m_keranjang.php');
		$controller=new KeranjangController();
		break;

		case 'peramalan':
		require_once('models/m_peramalan.php');
		require_once('models/m_home.php');
		require_once('models/m_produk.php');
		require_once('models/m_user.php');
		require_once('models/m_keranjang.php');

		$controller=new PeramalanController();
		break;


	}
	$controller->{ $action }();
}

call($controller,$action);

/*$controllers = array('login' => ['login', 'error','authentication'],
	'register'=>['register','createUser','error'],
	'home'=>['home','homeAdmin','homePenjual','homePembeli'],

	'produk'=>['createProduk','prosesCreateProduk','showAllProdukPenjual','editProduk','updateDataProduk','deleteDataProdukPenjual','editProdukCabang','editDataProdukCabang','deleteDataProdukCabang'],
	'laporan'=>['laporanAdminCabang','laporanTransaksiCabang','editStatusTransaksiCabang','detailTransaksiCabang'],
	'keranjang'=>['addCart','showCart','clearCart','bayarCart','kodeUnik']


	);


if (array_key_exists($controller, $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller,$action);
	} else {
		call($controller,'error');
	}

} else {
	call($controller,'error');
}*/

?>
