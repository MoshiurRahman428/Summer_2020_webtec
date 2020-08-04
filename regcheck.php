<?php
	
	session_start();
	
	if(isset($_POST['login'])){


		$id			= $_POST['id'];
		$password 	= md5($_POST['password']);
		$uname 		= $_POST['uname'];
		$email 		= $_POST['email'];
		


		if(empty($id) ||empty($uname) || empty($password) || empty($email) ){
			echo "null submission found!";
		}else{
			


			setcookie('id', $id, time()+3600, '/');
			setcookie('uname', $uname, time()+3600, '/');
			setcookie('password', $password, time()+3600, '/');
			setcookie('email', $email, time()+3600, '/');

			header('location: login.php');
		}	

	}else{
		//echo "invalid request";
		header('location: login.php');
	}




?>