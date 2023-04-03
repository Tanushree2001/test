<?php
/**
 * @require ../contollers/login_restri.php This file restricts access to users which are not login.
 * 
 * The class Post is created for retrieving the value for every user.
 */
// require '../controllers/login_restri.php';
class Post{
  private $conn;
  /**
   * Created a new Post,s instance and establishes a database connection
   */
  public function __construct()
  {
    $servername = "localhost";
    $username = "root";
    $password = "toor";
    $dbname = "test";

    $this->conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$this->conn){
      die('Connection failed: ' .mysqli_connect_error());
    }  
  }
  /**
   * 
   * Retrieves all post of every user which has logged in the system.
   * 
   * @return array The array returns the textarea, imagedata, firstname and lastname of every user.
   * 
   */
  public function print_post_content()
  { 
    $sql1 = "SELECT FirstName, LastName, Title, Content, timestamp FROM detail ORDER BY id DESC";
    $res1 = mysqli_query($this->conn, $sql1);
    if(mysqli_num_rows($res1) == 0){
      echo "No rows found";
    }
    $all_post = array();
    while($post_print = mysqli_fetch_assoc($res1)){
      $all_post[] = $post_print;
    }
    return $all_post;
  }
}
?>