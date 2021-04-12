<?php

class AdminAdminsController extends AdminBaseController
{
  function __construct()
  {
    $this->folder = 'admin';
  }

  public function viewLogin(){
  	$this->render('login');
  }

  public function viewAddAdmin(){
    if (!isset($_SESSION["email_admin"])) {
      header("Location: index.php?controller=adminadmins&action=viewLogin");
    }
  	$this->render('add');
  }

  public function index(){
    if (!isset($_SESSION["email_admin"])) {
      header("Location: index.php?controller=adminadmins&action=viewLogin");
    }
  	$list = Admin::allAdmin();
    $data = array('list' => $list);
  	$this->render('index', $data);
  }

  public function addAdmin(){
    if (!isset($_SESSION["email_admin"])) {
      header("Location: index.php?controller=adminadmins&action=viewLogin");
    }
  	if (isset($_POST['add'])) {
  		$name = $_POST['name'];
  		$email = $_POST['email'];
  		$password = $_POST['password'];
  		$re_password = $_POST['re_password'];
  		$role = $_POST['role'];
  		if ($password == $re_password) {
  			$checkEmail=Admin::checkEmail($email);

  			if ($checkEmail != null) {
	        $data = array('note' => 'The email already has a user');
	        $this->render('add', $data); 
	      }else{
            $password = md5($password);
            Admin::addAdmin($name, $email, $password, $role);
            $data = array('notes' => 'Add Admin is successful');
            $this->render('add', $data);
       	  }
  		}else{
  			$data = array('note' => 'Password must be the same');
	      	$this->render('add', $data); 
  		}

  	}else{
	      $this->render('add');
	}
  }

  public function viewEditAdmin(){
    if (!isset($_SESSION["email_admin"])) {
      header("Location: index.php?controller=adminadmins&action=viewLogin");
    }
  	$detail = Admin::find($_GET['id']);
  	$data = array('detail' => $detail);
  	$this->render('edit', $data);
  }

  public function editAdmin(){
    if (!isset($_SESSION["email_admin"])) {
      header("Location: index.php?controller=adminadmins&action=viewLogin");
    }
  	if (isset($_POST['edit'])) {
  		$role = $_POST['role'];
  		$edit = Admin::editAdmin($_GET['id'],$role);
  		$detail = Admin::find($_GET['id']);
	  	$data = array('detail' => $detail, 'notes' => 'Change successful');
	  	$this->render('edit', $data);
  	}
  }

  public function deleteAdmin(){
    if (!isset($_SESSION["email_admin"])) {
      header("Location: index.php?controller=adminadmins&action=viewLogin");
    }
  	Admin::deleteAdmin($_GET['id']);
  	$list = Admin::allAdmin();
    $data = array('list' => $list, 'notes' => 'Delete successful');
  	$this->render('index', $data);
  }

  public function login(){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password = md5($password);
    $log = Admin::check($email, $password);
    if ($log == 1) {
      $_SESSION["email_admin"] = $email;
      header("Location: index.php?controller=adminadmins&action=index");

    }else{
      $data = array('note' => 'Unvalid login infomation');
      $this->render('login', $data); 
    }
  }

  public function logout(){
    unset($_SESSION["email_admin"]);
    header("Location: index.php?controller=adminadmins&action=viewLogin");
  }

  public function viewChangePass(){
    if (!isset($_SESSION["email_admin"])) {
      header("Location: index.php?controller=adminadmins&action=viewLogin");
    }
    $this->render('change_password');
  }

  public function changePass(){
    if (isset($_POST['edit'])) {
    $email = $_SESSION["email_admin"];
    $password = $_POST["password"];
    $password1 = $_POST["password1"];
    $re_password = $_POST["re_password"];
    $password = md5($password);
    $log = Admin::check($email, $password);

    if ($log == 1) {
      if ($password1==$re_password) {
   
        $password1 = md5($password1);
        Admin::changePass($email, $password1);
        $data = array('notes' => 'New password changed successfully');
        $this->render('change_password', $data); 
      }else{
        $data = array('note' => 'New password must be the same');
        $this->render('change_password', $data); 
      }
    }else{
      $data = array('note' => 'Unvalid password infomation');
      $this->render('change_password', $data); 
  }
    }
    
  }
}
?>

