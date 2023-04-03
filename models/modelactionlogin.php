<?php
/**
 * @require ../controllers/login_restri.php This file restricts access to users which are not login.
 */
require '../controllers/login_restri.php';
/**
 * A function is created which validate the email and password from the signup table. 
 * 
 * @param string $email contains email of the user.
 * @param string $password contains password of the user.
 */
function loginuser($conn, $email, $password){

  // A query is created which checks that the selected element is matching with the email and password in signup table.
  $query = "SELECT * FROM signup WHERE email = '$email' AND password = '$password'";
  // this funtion helps in performing sql query in conn database 
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result)>0){
    return $result;
  }
}
?>
