<?php
	session_start();

	if(isset($_COOKIE['status'])){
		if($_COOKIE['status'] == "OK"){
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<table>
		<tr>
			<td>Admin's home page</td>
			<h1>Welcome  Bob!</h1>
			<a href="profile.php"> Profile</a>
			<a href="changepassword.php"> ChangePassword</a>
			<a href="viewusers.php"> View Users</a>
			<a href="logout.php"> Logout</a>
		</tr>
		<tr>
			<td>User's home page</td>
			<h1>Welcome Anne!</h1>
			<a href="profile.php"> Profile</a>
			<a href="changepassword.php"> ChangePassword</a>
			<a href="logout.php"> Logout</a>
		</tr>
		
	</table>
</body>
</html>


<?php
}else{
		header('location: login.php');
		}
	}else{
		header('location: login.php?msg=statusnotfound');
	}
?>