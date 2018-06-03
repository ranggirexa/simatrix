<?php 
Class User {


	public $nama;
	public $username;
	public $email;
	public $no_telepon;

	function __construct($nama,$username,$email,$no_telepon)
	{
		$this->nama=$nama;
		$this->username = $username;
		$this->email = $email;
		$this->no_telepon=$no_telepon;
	}
	public static function showDataUser(){


		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM users where id_user=".$_SESSION['id_user']);

		foreach ($req->fetchAll() as $post) {
			$_SESSION['nama_user']=$post['nama'];
			$_SESSION['username']=$post['username'];
			$_SESSION['email']=$post['email'];
			$_SESSION['no_telepon']=$post['no_telepon'];
			
		}



	}
	



}


?>