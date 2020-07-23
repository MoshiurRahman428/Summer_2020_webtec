<?php 
	if($_SERVER["REQUEST"] == "POST"){
		$name = $_POST['sname'];
		$EMAIL = $_POST['email'];

		if($name==""){
			echo "name required";
		}
		$EMAIL = filter_var($email, FILTER_SANITIZE_EMAIL);
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      	
	      echo("$Email address is not a valid");
	        
		}
				    
?>
<html>
	<head>
		<title>Lab Task</title>
	</head>
	<body>

					<form method="post">
						Name <br>
				    <input type="text" name="sname" value="" size="90px" placeholder="<?php 
				    	if(isset($name)){
				    		echo $name;

				    	}
				    	else
				    	{
				    		echo "Can't be empty";
				    	}

				    ?>"
				    ><br>
				 
					</form>
					<input type="submit" name="" value="submit">

				<form method="post">
					Email <br>
				    <input type="email" name="email" value="" size="90px" placeholder="">
				</form>
	    		<input type="submit" name="" value="submit">								
	</body>
</html>