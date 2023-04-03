<?php
/**
 * @require ../contollers/login_restri.php This file restricts access to users which are not login.
 */
// require '../controllers/login_restri.php';
/**
 * The signupuser function did insertion of firstname, lastname, email and password of the user. 
 * 
 * @param string $firstname contains the firstname of user.
 * @param string $lastname contains the lastname of the user.
 * @param string $email contains the email of the user.
 * @param string $user_password contains the password of the user.
 */
function signupuser($conn, $firstname, $lastname, $email, $user_password){
    echo('inside function');
  // A query is created which checks that the selected element is matching with the email and password in signup table.
  $query = "INSERT INTO signup (FirstName ,LastName ,email ,password) VALUES ('$firstname','$lastname','$email','$user_password')";
  // this funtion helps in performing sql query in conn database 
  $result = mysqli_query($conn, $query);
  if($result){
    echo('inside result');
    return $result;
  }
}
?>
