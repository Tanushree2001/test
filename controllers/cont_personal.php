<?php
/**
 * @require login_restri.php This file restricts access to users which are not login.
 * 
 * @require_once ../models/modelactionuserpost.php This file contains the UserPost class.
 * 
 * @require_once ../views/personal.php This file containing the HTML for displaying users post.
 */
// require('../controllers/login_restri.php');
session_start();
require_once('../models/modelactionuserpost.php');

$servername = "localhost";
  $username = "root";
  $password = "toor";
  $dbname = "test";
  // create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // check connection
  if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  }
  
  $email = $_SESSION['email'];
  $sql_name = "SELECT FirstName, LastName FROM signup WHERE email = '$email'";
  $sql_name_res = mysqli_query($conn, $sql_name); 
  if (mysqli_num_rows($sql_name_res) == 0){
    echo("No rows found from login table");
  }

  $sql_res = mysqli_fetch_assoc($sql_name_res);
  $fname = $sql_res['FirstName'];
  $lname = $sql_res['LastName'];
  $user_post = new UserPost();

  $userpost = $user_post->getUserPost($fname, $lname);

  require_once('../Views/personal.php');
  if (isset($_POST['delete_post'])){
    $postid = $_POST['post_id'];
    $user_post->deletepost($postid);
  }
?>

