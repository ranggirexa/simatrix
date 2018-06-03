<?php
Class Home {

	public static function showTransaksiPembeli($id_user){
		$list=[];
		$db=DB::getInstance();
		$req=$db->query("SELECT * from tb_penjualan where id_user=$id_user");

		/*foreach ($req->fetchAll() as $post) {
			$list[] = new Home("","","","","",$post['id_penjualan'],$post['tanggal'],$post['status']);
		}*/

		foreach ($req as $item) {
			$list[]=array(
				'id_penjualan'=>$item['id_penjualan'],
				'tanggal'=>$item['tanggal'],
				'status'=>$item['status']

				);
		}
		return $list;
	}


	public static function showStat(){
		$list=[];
		$terjual;
		$jumlah_stok;
		$nama_produk;
		$db = DB::getInstance();

		$req = $db->query("SELECT SUM(jumlah) AS terjual
			from detail_penjualan dp JOIN produk p ON dp.id_produk=p.id_produk
			WHERE p.id_user=".$_SESSION['id_user']."
			GROUP BY Month(tanggal)");
		$req2 = $db->query("SELECT sum(jumlah_stok) as jumlah_stok FROM produk WHERE id_user=".$_SESSION['id_user']);
		$req3 = $db->query("SELECT p.nama_produk, sum(dp.jumlah) as jumlah FROM detail_penjualan dp
			JOIN produk p on dp.id_produk=p.id_produk
			where p.id_user=".$_SESSION['id_user']."
			GROUP by dp.id_produk,Month(dp.tanggal)
			order by jumlah  desc LIMIT 0,1");

		foreach ($req->fetchAll() as $post) {
			$terjual = $post['terjual'];
		}
		foreach ($req2->fetchAll() as $post) {
			$jumlah_stok = $post['jumlah_stok'];
		}
		foreach ($req3->fetchAll() as $post) {
			$nama_produk = $post['nama_produk'];
		}

		 $list[]=array(

			'terjual'=>$terjual,
			'jumlah_stok'=>$jumlah_stok,
			'nama_produk'=>$nama_produk

			);

		 return $list;
	}
	public static function showStatAdmin(){
		$list=[];
		$terjual;
		$jumlah_stok;
		$nama_produk;
		$db = DB::getInstance();

		$req = $db->query("SELECT SUM(jumlah) AS terjual
			from detail_penjualan dp JOIN produk p ON dp.id_produk=p.id_produk
			GROUP BY Month(tanggal)");
		$req2 = $db->query("SELECT sum(jumlah_stok) as jumlah_stok FROM produk");
		$req3 = $db->query("SELECT p.nama_produk FROM detail_penjualan dp
			JOIN produk p on dp.id_produk=p.id_produk
			GROUP by dp.id_produk,Month(dp.tanggal)
			order by dp.jumlah desc LIMIT 0,1");

		foreach ($req->fetchAll() as $post) {
			$terjual = $post['terjual'];
		}
		foreach ($req2->fetchAll() as $post) {
			$jumlah_stok = $post['jumlah_stok'];
		}
		foreach ($req3->fetchAll() as $post) {
			$nama_produk = $post['nama_produk'];
		}

		 $list[]=array(

			'jumlahTerjual'=>$terjual,
			'jumlah_stok'=>$jumlah_stok,
			'produkTerlaris'=>$nama_produk

			);

		 return $list;
	}


}


?>
