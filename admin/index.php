<?php
session_start();
ob_start();

//login
if (!isset($_SESSION['admin'])) {
  header("location: public/login.php");
} else {
  $admin = $_SESSION['admin'];
}

// page
include_once('./public/header.php');
if (!isset($_GET['page'])) {

  include_once('./public/home.php');
} else {
  $page = $_GET['page'];
  switch ($page) {
    case 'category':
      include_once('./public/category.php');
      break;
    case 'logout':
      if (isset($_SESSION['admin'])) {
        unset($_SESSION['admin']);
        header("location: public/login.php");
      }
      break;

    default:
      include_once('./public/home.php');
      break;
  }
}
include_once('./public/footer.php');
