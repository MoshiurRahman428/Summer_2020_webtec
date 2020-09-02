<?php
	session_start();

	if(isset($_SESSION['status'])){
		if($_SESSION['status'] == "OK"){

			$connection = mysqli_connect('127.0.0.1', 'root', '', 'mini_project'); 
			$result = mysqli_query($connection, "select * from user");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Welcome Home</h1><a href="logout.php"> Logout</a>
	<a href="profile.php"> Profile</a>
	<div id = "div1">
		
	</div>

</body>
<script type="text/javascript">
	
	function ajax_user_list(){

				  var xhttp = new XMLHttpRequest();
				  xhttp.onreadystatechange = function() {
				    if (this.readyState == 4 && this.status == 200) {
				      document.getElementById("div1").innerHTML = this.responseText;
				    }
				  };
			}
</script>
</html>


<?php
}else{
		header('location: login.php');
		}
	}else{
		header('location: login.php');
	}
?>