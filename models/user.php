<?php
class User extends BaseModel
{
  public $id;
  public $name;
  public $email;
  public $password;
  public $image;

  function __construct($id, $name, $email, $password, $image)
  {
    $this->id = $id;
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
    $this->image = $image;
  }

  static function allUser()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query("SELECT * FROM users" );
    foreach ($req->fetchAll() as $item) {
      $list[] = new User($item['id'], $item['name'], $item['email'],$item['password'], $item['image']);
    }
    return $list;
  }

  static function check($email, $password)
  {
    $db = DB::getInstance();
    $req = $db->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'" );
    $req->execute();
    $item = $req->fetch();
    if (isset($item['id'])) {
      return 1;
    }else{
      return 0;
    }

  }

  static function delete($id){
    $db = DB::getInstance();
    $req = $db->query("DELETE FROM users WHERE id = '$id'");
    $req->execute();
  }

  static function regis($name, $email, $password, $image){
    $db = DB::getInstance();
    $req = $db->prepare("INSERT INTO users (name, email, password, image) VALUES ('$name', '$email', '$password', '$image')");
    $req->execute();
  }

  static function checkEmail($email){
    $db = DB::getInstance();
    $req = $db->prepare("SELECT * FROM users WHERE email = '$email'");
    $req->execute();
    $user = $req->fetch();
    if (isset($user['id'])) {
      return new User($user['id'], $user['name'], $user['email'],$user['password'],$user['image']);
    }
    return null;
  }

  static function editPass($email, $password){
      $db = DB::getInstance();
      $req = $db->prepare("UPDATE users SET password='$password' WHERE email = '$email'");
      $req->execute();
  }

  
  
  
}