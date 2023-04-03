<?php
require('login_restri.php');
session_start();
require_once('../models/modeldetail.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $title = $_POST['title'];
  $content = $_POST['content'];

  $email = $_SESSION['email'];

  $detail = new Detail();
  $get_detail = $detail->get_detail($title, $content, $email);
  header('Location: cont_data.php'); 
}
?>