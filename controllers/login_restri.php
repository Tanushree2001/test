<?php
session_start();
if($_SESSION['loggedin']!==true){
  header('Location: ../views/index.php');
}
?>