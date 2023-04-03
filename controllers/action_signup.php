<?php
/**
 * @require_once ../models/modelactionsignup.php contains the function signupuser
 */
session_start();
require_once('../models/modelactionsignup.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
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
   * The function signupuser insert the firstname, lastname, email and password of the user.
   * 
   * @param $conn is the database connection.
   * @param $firstname contains the firstname of the user.
   * @param $lastname contains the lastname of the user.
   * @param $user_password contains the password of the user.
   */

  // function calling in which email, password and connection is sent  
  if (signupuser($conn, $firstname, $lastname, $email, $user_password)){
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
    $_SESSION['FirstName'] = $FirstName;
    $_SESSION['LastName'] = $LastName;
    header('Location: ../Views/details.php');
  } else {
    // include('../views/signin.php');
    echo "Incorrect email or password";
  }

}

?>