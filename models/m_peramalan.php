<?php

Class Peramalan{


/*	public $id_produk;
	public $nama_produk;
	public $id_user;
	public $jumlah_stok;
	public $harga;
	public $foto_produk;
	public $deskripsi;*/


	function __construct(/*$id_produk,$nama_produk,$id_user,$jumlah_stok,$harga,$foto_produk,$deskripsi*/)
	{
		/*$this->id_produk=$id_produk;
		$this->nama_produk=$nama_produk;
		$this->id_user=$id_user;
		$this->jumlah_stok=$jumlah_stok;
		$this->harga=$harga;
		$this->foto_produk=$foto_produk;
		$this->deskripsi=$deskripsi;*/

	}

	public function tabel(){
		$list=[];
		$db = DB::getInstance();

		$req = $db->query("SELECT u.nama, AVG(p.permintaan) as permintaan, AVG(p.harga) as harga ,
		AVG(p.berat) as berat,AVG(p.kualitas) as kualitas,AVG(p.kesegaran) as kesegaran from perhitungan
		 p join users u on p.id_user=u.id_user GROUP by p.id_user");

	/*	foreach ($req->fetchAll() as $post) {

			$list[] = new Laporan("",$post['nama_produk'],"",$post['total_harga'],"",$post['tanggal'],"","","","",$post['jumlah']
				);
	}*/

	foreach ($req as $item) {
		$list[]=array(
			'nama'=>$item['nama'],
			'permintaan'=>$item['permintaan'],
			'harga'=>$item['harga'],
			'berat'=>$item['berat'],
			'kualitas'=>$item['kualitas'],
			'kesegaran'=>$item['kesegaran']


			);
	}

	return $list;
	}

	public static function showPeramalan($nama_produk){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT p.nama_produk, SUM(dp.jumlah) as

			jumlah_terjual,DATE_FORMAT(dp.tanggal,'%M') as

			bulan, Year(dp.tanggal) as tahun
			FROM detail_penjualan dp
			JOIN produk p ON dp.id_produk=p.id_produk
			WHERE p.nama_produk='$nama_produk'

			GROUP by dp.id_produk,Month(dp.tanggal)");



		foreach ($req as $item) {
			$list[]=array(

				'nama_produk'=>$item['nama_produk'],
				'jumlah_terjual'=>$item['jumlah_terjual'],
				'bulan'=>$item['bulan'],
				'tahun'=>$item['tahun']


				);
		}
		if (isset($list)) {
			return $list;
		} else {
			return null;
		}

	}

	public static function tampilramal(){
		$list=[];

		$db = DB::getInstance();
  	$user=$_SESSION['id_user'];
		$req = $db->query("SELECT * from perhitungan WHERE id_user = $user");
		foreach ($req as $item) {
			$list[]=array(
				'id_perhitungan'=>$item['id_perhitungan'],
				'permintaan'=>$item['permintaan'],
				'harga'=>$item['harga'],
				'berat'=>$item['berat'],
				'kualitas'=>$item['kualitas'],
				'kesegaran'=>$item['kesegaran']
				);
		}
		if (isset($list)) {
			return $list;
		} else {
			return null;
		}

	}
	public static function tampiledit($id_perhitungan){
		$list=[];

		$db = DB::getInstance();
		$user=$_SESSION['id_user'];
		$req = $db->query("SELECT * from perhitungan WHERE id_perhitungan = $id_perhitungan");
		foreach ($req as $item) {
			$list[]=array(
				'id_perhitungan'=>$item['id_perhitungan'],
				'permintaan'=>$item['permintaan'],
				'harga'=>$item['harga'],
				'berat'=>$item['berat'],
				'kualitas'=>$item['kualitas'],
				'kesegaran'=>$item['kesegaran']
				);
		}
		if (isset($list)) {
			return $list;
		} else {
			return null;
		}

	}
	public static function inputRamal($permintaan,$harga,$berat,$kualitas,$kesegaran){
		$db = DB::getInstance();

		$req = $db->query("INSERT INTO perhitungan (id_perhitungan,id_user, permintaan, harga,berat, kualitas, kesegaran)
			VALUES (NULL,'".$_SESSION['id_user']."', '".$permintaan."', '".$harga."', '".$berat."', '".$kualitas."', '".$kesegaran."');
			");

		return $req;
	}

	public static function inputToko($nama,$username,$password,$email,$telepon){
		$db = DB::getInstance();

		$req = $db->query("INSERT INTO users
			VALUES (NULL, '".$nama."', '".$username."', '".$password."', '".$email."', '".'2'."', '".$telepon."');
			");

		return $req;
	}


public static function UpdateDataPeramalan($id_perhitungan,$permintaan,$harga,$berat,$kualitas,$kesegaran){
	$db = DB::getInstance();
	$req = $db->query("UPDATE perhitungan set permintaan='$permintaan', harga='$harga', berat='$berat',kualitas='$kualitas',kesegaran='$kesegaran'
	where id_perhitungan=".$id_perhitungan);
	return $req;
}

	public static function optionProduk(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT `nama_produk` FROM `produk` ");

		foreach ($req as $item) {
			$list[] = array(
				'nama_produk'=>$item['nama_produk']


				);
		}




		if (isset($list)) {
			return $list;
		} else {
			return null;
		}

	}
}

?>
