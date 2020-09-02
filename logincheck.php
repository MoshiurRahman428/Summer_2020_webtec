<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$username 		= $_POST['username'];
		$password 	= $_POST['password'];

		if(empty($username) || empty($password) ){
			echo "null submission found!";
		}else{
			
			$con = mysqli_connect('127.0.0.1', 'root', '', 'mini_project');
			//$sql = "select * from final where username ='".$username."' and password='".$password."'";

			$sql = "SELECT username , password from final where username ='$username' and password='$password'";
			
			$result = mysqli_query($con, $sql);
			$row = mysqli_fetch_assoc($result);

			if(count($row) > 0){
				$_SESSION['username'] = $row['username'];
				$_SESSION['status'] = "OK";
				header('location: home.php');
			}else{
				header('location: login.php?msg=invalid_username/password');
			}
		}	

	}else{
		//echo "invalid request";
		header('location: login.php');
	}


?>