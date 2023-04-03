<?php
/**
 * @require ../contollers/login_restri.php This file restricts access to users which are not login.
 * 
 * The UserPost class represents a user's post section and methods for accessing users post.
*/
// require ('../controllers/login_restri.php');
class UserPost{
	private $conn;
  /**
   * Construct a new userpost's instance and establishes a database connection.
   */
	public function __construct()
	{ 
		$servername = 'localhost';
		$username = 'root';
		$password = 'toor';
		$dbname = 'test';

		$this->conn = mysqli_connect($servername, $username,$password,$dbname);	
	}
  /**
   * 
   * Retrieve's all users post which is log in or firstname and lastname is equal to $fname and $lname
   * 
   * @param string $fname contains the firstname of user.
   * @param string $lname contains the lastname of user.
   * @return array An array of user's posts for the given firstname and lastname.
   * 
   */
	public function getUserPost($fname ,$lname)
	{
		$sql = "SELECT FirstName, LastName, Title, Content, timestamp, id FROM detail WHERE FirstName = '$fname' AND LastName ='$lname' ORDER BY id DESC";
		$res = mysqli_query($this->conn, $sql);
		$all_users_post = array();
		while($all_post_print = mysqli_fetch_assoc($res)){
      $all_users_post[] = $all_post_print;
    }
    return $all_users_post;
	}
  public function deletepost($postid)
	{
		$sql1 = "DELETE from detail WHERE id=$postid";
		$res1 = mysqli_query($this->conn,$sql1); 
		if($res1){
			return true;
		}else{
			return false;
		}
	}
}
?>