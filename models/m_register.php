<?php 
class Register
{
	
	public $nama;
	public $username;
	public $password;
	public $email;
	public $no_telepon;




	function __construct($nama,$username,$password,$email,$no_telepon)
	{
		
		$this->nama=$nama;
		$this->username=$username;
		$this->password=$password;
		$this->email=$email;
		$this->no_teleppon=$no_telepon;


	}

	public static function createUser($nama,$username,$password,$email,$no_telepon){
		$db = DB::getInstance();

		$req = $db->query("INSERT INTO users  
			VALUES (NULL, '".$nama."', '".$username."', '".$password."', '".$email."', '".'2'."', '".$no_telepon."');
			");

		return $req;
	}


}

?>