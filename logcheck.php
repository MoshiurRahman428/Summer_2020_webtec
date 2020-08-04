<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$id 		= $_POST['id'];
		$password 	= md5($_POST['password']);

		if(empty($id) || empty($password) ){
			echo "null submission found!";
		}else{
			if(isset($_COOKIE['id']) && isset($_COOKIE['password'])){
				if($uname == $_COOKIE['id'] && $password == $_COOKIE['password']){
					
					setcookie('status', "OK", time()+3600, '/');
					header('location: home.php');

				}else{
					header('location: login.php?msg=invalid_username/password');
				}
			}else{
				echo "don't have any account!";
			}
			
		}	

	}else{
		//echo "invalid request";
		header('location: login.php?msg=submitbuttonerror');
	}




?>