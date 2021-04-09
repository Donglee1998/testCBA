<?php

class AdminPagesController extends AdminBaseController
{
  function __construct()
  {
    $this->folder = 'pages';
  }

  public function index()
  {
    $posts = Post::allAdmin();
    $data = array('posts' => $posts);
    $this->render('index', $data); 
  }

  public function viewUserList(){
    $list = User::allUser();
    $data = array('list' => $list);
    $this->render('userlist', $data); 
  }

  public function deleteUser(){
    User::delete($_GET['id']);
    header("Location: index.php?controller=adminpages&action=viewUserList");
  }

  public function deletePost(){
    Post::delete($_GET['id']);
    header("Location: index.php?controller=adminpages&action=index");
  }

  public function viewEditPost(){
    $post = Post::find($_GET['id']);
    $data = array('post' => $post);
    $this->render('editpost', $data);
  }

  public function editPost(){
    $title = $_POST["title"];
    $content = $_POST["content"];
    $mode = $_POST["mode"];
    $image = $_FILES["image"]["name"];
    $target_dir = "./assets/uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    if ($image == "") {
      Post::editPost($_GET['id'], $title, $content, $mode);
      header("Location: index.php?controller=adminpages&action=index");
    }else{
      if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            Post::editPostImg($_GET['id'], $title, $content, $mode, $image);
            header("Location: index.php?controller=adminpages&action=index");
        }
      
    }

  }
}