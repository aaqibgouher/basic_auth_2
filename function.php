<?php
	include "database.php";			/*included database file here, so now the connection with DB is done .*/

	function is_login(){		/*in this function, we are checking that , user is login or not using $_SESSION var.*/
		// if user is login then do nothing
		// else redirect to login page

		if($_SESSION["email"]){		/*$_SESSION is like an associatve array only, which stores data in key-value pair, we are checking that , if any of the email exist in that array or not , if exist , it will return true else false.*/
			return true;
		}else{
			return false;
		}
	}

	function get_login_user(){		/*this function is called from home page to retrieve the users data.*/
		global $con;		/*we are using the $con var , that we have alreadt defined in the dataabse php file, so we are using it here , so we have defined it in global keyword*/
		// $user = [];
		// logic
		$session_email = $_SESSION["email"];		/*we are simply , taking the email of the user who is login in the website using $_SESSION variable , and storing it inot the another var.*/

		if($session_email){		/*if that email is true then it will go further*/
			$result = mysqli_query($con, "select * from users where email = '$session_email'");		/*so we are passing the connection var and our select query in mysqli_query function. So Whatevre the things that function will return , we are storing it in result var.*/
			$user = mysqli_fetch_assoc($result);	/*this mysql_fetch_assoc function , return the matched data in the form of array . and inside that array , its in key-value pair format.*/	
			// echo json_encode($user);
			return $user;		/*we are just returning that object .*/
		}
		
	}

?>