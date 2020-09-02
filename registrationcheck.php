<?php

$con = mysqli_connect("127.0.0.1", "root", "", "mini_project");
 

if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$id = mysqli_real_escape_string($con, $_REQUEST['id']);
$username = mysqli_real_escape_string($con, $_REQUEST['username']);
$password = mysqli_real_escape_string($con, $_REQUEST['password']);
$email = mysqli_real_escape_string($con, $_REQUEST['email']);
 

$sql = "INSERT INTO final (id, username,  email, password) VALUES ('$id','$username','$email' , '$password'')";
if(mysqli_query($con, $sql)){

    header('location: login.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

mysqli_close($con);

?>