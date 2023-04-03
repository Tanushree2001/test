<?php
/**
 * @require ../controllers/login_restri.php restricts the user who has not logged in.
 */
require('../controllers/login_restri.php');
class Detail{
  private $conn;
  
  /**
   * Construct a new Post's instance and establishes a database connection.
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
   * This function is used to insert the title , content ,names in database
   * 
   * @param $title contains the title of the card.
   * @param $content contains the content.
   * @param $email contains the email of user.
   */
  public function get_detail($title, $content , $email){
    $sql_name = "SELECT FirstName, LastName FROM signup WHERE email = '$email'";
    $sql_name_res = mysqli_query($this->conn, $sql_name); 
    if (mysqli_num_rows($sql_name_res) == 0){
      echo("No rows found from login table");
    }
    $sql_res = mysqli_fetch_assoc($sql_name_res);
    $sql = "INSERT INTO detail(Firstname, Lastname, Title, Content) VALUES('{$sql_res['FirstName']}','{$sql_res['LastName']}','$title','$content')";
    $res = mysqli_query($this->conn, $sql);
    if(!$res){
      echo "not inserted";
    }
  }
}
?>