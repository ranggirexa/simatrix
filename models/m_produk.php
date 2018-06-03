<?php 

Class Produk{
	
	
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
	public static function showAllProduk(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT *
			FROM produk p join users u
			ON p.id_user=u.id_user");

	/*	foreach ($req->fetchAll() as $post) {
			$list[] = new Produk($post['id_produk'],$post['nama_produk'],$post['id_user']
				,$post['jumlah_stok'],$post['harga'],$post['foto_produk'],$post['deskripsi']
				);
}*/

foreach ($req as $item) {
	$list[]=array(
		'id_produk'=>$item['id_produk'],
		'nama_produk'=>$item['nama_produk'],
		'id_user'=>$item['id_user'],
		'jumlah_stok'=>$item['jumlah_stok'],
		'harga'=>$item['harga'],
		'foto_produk'=>$item['foto_produk'],
		'deskripsi'=>$item['deskripsi'],
		'penjual'=>$item['nama']

		);
}
if (isset($list)) {
	return $list;
} else {
	return null;
}


}

public static function showDetailProduk($id_produk){
	$list=[];

	$db = DB::getInstance();

	$req = $db->query("SELECT *
		FROM produk p join users u
		ON p.id_user=u.id_user where p.id_produk=".$id_produk);

	/*	foreach ($req->fetchAll() as $post) {
			$list[] = new Produk($post['id_produk'],$post['nama_produk'],$post['id_user']
				,$post['jumlah_stok'],$post['harga'],$post['foto_produk'],$post['deskripsi']
				);
}*/

foreach ($req as $item) {
	$list[]=array(
		'id_produk'=>$item['id_produk'],
		'nama_produk'=>$item['nama_produk'],
		'id_user'=>$item['id_user'],
		'jumlah_stok'=>$item['jumlah_stok'],
		'harga'=>$item['harga'],
		'foto_produk'=>$item['foto_produk'],
		'deskripsi'=>$item['deskripsi'],
		'penjual'=>$item['nama']

		);
}
if (isset($list)) {
	return $list;
} else {
	return null;
}


}


public static function showAllProdukPenjual($id_user){
	$list=[];

	$db = DB::getInstance();

	$req = $db->query("SELECT * FROM produk where id_user=".$id_user);

	foreach ($req as $item) {
		$list[]=array(
			'id_produk'=>$item['id_produk'],
			'nama_produk'=>$item['nama_produk'],
			'id_user'=>$item['id_user'],
			'jumlah_stok'=>$item['jumlah_stok'],
			'harga'=>$item['harga'],
			'foto_produk'=>$item['foto_produk'],
			'deskripsi'=>$item['deskripsi']

			);
	}
	if (isset($list)) {
		return $list;
	} else {
		return null;
	}

	/*	foreach ($req->fetchAll() as $post) {
			$list[] = new Produk($post['id_produk'],$post['nama_produk'],$post['id_user']
				,$post['jumlah_stok'],$post['harga'],$post['foto_produk'],$post['deskripsi']
				);
		}


		return $list;*/
	}

	public static function createProduk($nama_produk,$harga,$jumlah_stok,$foto_produk,$deskripsi){
		$db = DB::getInstance();

		$req = $db->query("INSERT INTO produk (id_produk,id_user, nama_produk, jumlah_stok,harga, foto_produk, deskripsi) 
			VALUES (NULL,'".$_SESSION['id_user']."', '".$nama_produk."', '".$jumlah_stok."', '".$harga."', '".$foto_produk."', '".$deskripsi."');
			");

		return $req;
	}


	public static function editProduk($id_produk){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM produk where id_produk=".$id_produk);


		foreach ($req as $item) {
			$list[]=array(
				'id_produk'=>$item['id_produk'],
				'nama_produk'=>$item['nama_produk'],
				'id_user'=>$item['id_user'],
				'jumlah_stok'=>$item['jumlah_stok'],
				'harga'=>$item['harga'],
				'foto_produk'=>$item['foto_produk'],
				'deskripsi'=>$item['deskripsi']

				);
		}
		if (isset($list)) {
			return $list;
		} else {
			return null;
		}

	/*	foreach ($req->fetchAll() as $post) {
			$list[] = new Produk($post['id_produk'],$post['nama_produk'],$post['id_user']
				,$post['jumlah_stok'],$post['harga'],$post['foto_produk'],$post['deskripsi']
				);
		}


		return $list;*/
	}
	public static function updateDataProduk($id_produk,$nama_produk,$harga,$jumlah_stok,$deskripsi){
		$db = DB::getInstance();

		$req = $db->query("UPDATE produk set nama_produk='$nama_produk',jumlah_stok='$jumlah_stok',harga='$harga'
			,deskripsi='$deskripsi' where id_produk=".$id_produk);

		return $req;
	}
	public static function deleteDataProdukPenjual($id_produk){
		$db = DB::getInstance();

		$req = $db->query("DELETE from produk where id_produk='$id_produk'");

		return $req;
	}
}

?>