<?php
/**
 * @require_once ../models/modelactionlogin.php contains the function loginuser.
 */
session_start();
require_once('../models/modelactionlogin.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $email = $_POST['email'];
  $user_password = $_POST['password'];

  //variables created for connecting through database
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
  /**
   * The function login user checks the email and password from the signup table. 
   * 
   * @param string $conn is the connection from the database.
   * @param string $email is the email of the user.
   * @param string $user_password is the password of the user.
   */

  // function calling in which email, password and connection is sent  
  if (loginuser($conn, $email, $user_password)){
    $_SESSION['email'] = $email;
    // $_SESSION['loggedin'] = true;
    header('Location: ../Views/details.php');
  } else {
    echo "Incorrect email or password";
  }

//   loginuser($conn, $email, $user_password);
}
?>