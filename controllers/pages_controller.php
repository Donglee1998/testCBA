<?php

class PagesController extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages';
  }

  public function home()
  {
    $data = array(
      'name' => 'Dong',
      'age' => 23
    );
   $this->render('home', $data); 
  }

  public function error()
  {
    $this->render('error');
  }
}