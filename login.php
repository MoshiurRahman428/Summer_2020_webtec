<?php

	if(isset($_GET['msg'])){
		echo $_GET['msg'];
	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<form action="logcheck.php" method="post">
		<fieldset>
			<legend>Login</legend>
			<table>
				<tr>
					<td>User Id</td>
					<td><input type="text" name="id"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="login" name="login" value="Login"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>