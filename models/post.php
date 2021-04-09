<?php
class Post
{
  public $id;
  public $title;
  public $content;
  public $mode;
  public $image;

  function __construct($id, $title, $content, $mode, $image)
  {
    $this->id = $id;
    $this->title = $title;
    $this->content = $content;  
    $this->mode = $mode;
    $this->image = $image;
  }

  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query("SELECT * FROM posts WHERE mode = 'public' " );
    foreach ($req->fetchAll() as $item) {
      $list[] = new Post($item['id'], $item['title'], $item['content'],$item['mode'], $item['image']);
    }
    return $list;
  }

  static function allAdmin()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query("SELECT * FROM posts" );
    foreach ($req->fetchAll() as $item) {
      $list[] = new Post($item['id'], $item['title'], $item['content'],$item['mode'], $item['image']);
    }
    return $list;
  }

  static function find($id)
  {
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM posts WHERE id = :id');
    $req->execute(array('id' => $id));
    $item = $req->fetch();
    if (isset($item['id'])) {
      return new Post($item['id'], $item['title'], $item['content'],$item['mode'], $item["image"]);
    }
    return null;
  }

  static function delete($id){
    $db = DB::getInstance();
    $req = $db->query("DELETE FROM posts WHERE id = '$id'");
    $req->execute();
  }

  static function editPostImg($id, $title, $content, $mode, $image){
    $db = DB::getInstance();
    $req = $db->prepare("UPDATE posts SET title='$title', content = '$content', mode = '$mode', image = '$image'  WHERE id = '$id'");
    $req->execute();
  }

  static function editPost($id, $title, $content, $mode){
  
    $db = DB::getInstance();
    $req = $db->prepare("UPDATE posts SET title='$title', content = '$content', mode = '$mode' WHERE id = '$id'");
    $req->execute();
  }
}