<?php


class LoginsController extends BaseController
{
	function __construct(){  
    $this->folder = 'logins';
  }

  public function view(){
  
    
   	$this->render('login'); 
  }

  public function login(){
 
  	$email = $_POST["email"];
  	$password = $_POST["password"];
    $password = md5($password);
  	$log = User::check($email, $password);
  	if ($log == 1) {
  		$_SESSION["email"] = $email;
  		header("Location: index.php?controller=posts&action=index");
  	}else{
  		$data = array('note' => 'Unvalid login infomation');
  		$this->render('login', $data); 
  	}
  }

  public function logout(){
  	
  	session_destroy();
  	header("Location: index.php?controller=logins&action=view");
  	
  }

  public function viewRegister(){
  	$this->render('register');
  }

  public function register(){
    if (isset($_POST["submit"])) {
      $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $re_password = $_POST["re_password"];
    $image = $_FILES["avatar"]["name"];
    if ($password == $re_password) {
      $checkEmail=User::checkEmail($email);
      if ($checkEmail != null) {
          $data = array('note' => 'The email already has a user');
          $this->render('register', $data); 
      }else{
      $target_dir = "./assets/uploads/";
      $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

      $check = getimagesize($_FILES["avatar"]["tmp_name"]);
        if($check !== false) {
          $uploadOk = 1;
        } else {
          $uploadOk = 0;
      }
      if (file_exists($target_file)) {
        $uploadOk = 0;
      }
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {  
        $uploadOk = 0;
      }

      if ($uploadOk == 0) {
            $data = array('note' => 'Sorry, your file was not uploaded.');
            $this->render('register', $data);
      } else {
        if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
            $password = md5($password);
            User::regis($name, $email, $password, $image);
            $data = array('notes' => 'Account registration is successful');
            $this->render('register', $data);
        }else {
          $data = array('note' => 'Sorry, there was an error uploading your file.');
          $this->render('register', $data); 
          }
        }
      }
    }else{
      $data = array('note' => 'Password must be the same');
      $this->render('register', $data); 
    }
    }else{
      $this->render('register');
    }
  }

  public function showProfile(){
    
    $email = $_SESSION["email"];
    $user = User::checkEmail($email);
    $data = array('user' => $user);
    $this->render('show',$data); 
  }

  public function viewEdit(){
    $this->render('edit');
  }

  public function editPassword(){
    if (isset($_POST["edit"])) {
      session_start();
      $email = $_SESSION["email"];
      $password = $_POST["password"];
      $password1 = $_POST["password1"];
      $re_password = $_POST["re_password"];
      $password = md5($password);
      $log = User::check($email, $password);
      if ($log == 1) {
        if ($password1==$re_password) {
          $password1 = md5($password1);
          User::editPass($email, $password1);
          $data = array('notes' => 'New password changed successfully');
          $this->render('edit', $data); 
        }else{
          $data = array('note' => 'New password must be the same');
          $this->render('edit', $data); 
        }
      }else{
        $data = array('note' => 'Unvalid password infomation');
        $this->render('edit', $data); 
    }
    }
  }


}