<?php
class Admin
{
	public $id;
	public $name;
	public $email;
	public $password;
	public $role;
	function __construct($id, $name, $email, $password, $role)
  	{
  		$this->id = $id;
	    $this->name = $name;
	    $this->email = $email;
	    $this->password = $password;
	    $this->role = $role;
  	}

  	static function addAdmin($name, $email, $password, $role){
  		$db = DB::getInstance();
	    $req =$db->prepare("INSERT INTO admin(name, email, password, role) VALUES ('$name', '$email', '$password', '$role')");
	    $req->execute();
  	}

  	static function checkEmail($email){
  		
	    $db = DB::getInstance();
	    $req = $db->prepare("SELECT * FROM admin WHERE email = '$email'");
	    $req->execute();
	    $admin = $req->fetch();
	    if (isset($admin['id'])) {
	      return new Admin($admin['id'], $admin['name'], $admin['email'],$admin['password'],$admin['role']);
	    }
	    return null;
	}

	static function allAdmin()
	{
		$list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT * FROM admin" );
		foreach ($req->fetchAll() as $item) {
		$list[] = new Admin($item['id'], $item['name'], $item['email'],$item['password'], $item['role']);
	}
		return $list;
	}

	static function find($id)
	{
		$db = DB::getInstance();
		$req = $db->prepare('SELECT * FROM admin WHERE id = :id');
		$req->execute(array('id' => $id));
		$item = $req->fetch();
		if (isset($item['id'])) {
		  return new Admin($item['id'], $item['name'], $item['email'],$item['password'], $item["role"]);
		}
	return null;
	}

	static function editAdmin($id, $role){
		$db = DB::getInstance();
		$req = $db->prepare("UPDATE admin SET role='$role' WHERE id = '$id'");
		$req->execute();
	}

	static function deleteAdmin($id){
		$db = DB::getInstance();
	    $req = $db->query("DELETE FROM admin WHERE id = '$id'");
	    $req->execute();
	}

	static function changePass($email, $password){
		$db = DB::getInstance();
      	$req = $db->prepare("UPDATE admin SET password='$password' WHERE email = '$email'");
      	$req->execute();
	}

	static function check($email, $password)
	{
		$db = DB::getInstance();
		$req = $db->query("SELECT * FROM admin WHERE email = '$email' AND password = '$password'" );
		$req->execute();
		$item = $req->fetch();
		if (isset($item['id'])) {
		return 1;
	}else{
		return 0;
	}

	}


}
?>