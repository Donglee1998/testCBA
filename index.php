<?php
require_once('connection.php');
require_once('controllers/base_controller.php');
require_once('models/basemodel.php');
require_once('controllers/adminbase_controller.php');
require_once('models/post.php');
require_once('models/user.php');
require_once('models/admin.php');
session_start();
if (isset($_GET['controller'])) {
  $controller = $_GET['controller'];
  if (isset($_GET['action'])) {
    $action = $_GET['action'];
  } else {
    $action = 'index';
  }
} else {
  $controller = 'posts';
  $action = 'index';
}	
require_once('routes.php');