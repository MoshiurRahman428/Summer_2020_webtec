<?php

if(isset($_POST['register']))
{
    $id = $_POST['id'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
	$name = $_POST['name'];
    $email = $_POST['email'];

    if( empty($id) || empty($name) || empty($email)  )
    {
        echo "Can't be null";
    }
    
    else
    {
        
        $mysqlConnection = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
        $query = "insert into users(id,password,confirmPassword,name,email) values('$id','$password','$confirmPassword','$name','$email')";
        mysqli_query($mysqlConnection, $query);

        sleep(6);
        
    }

}

    $data = "Sucessfully registered !";
    echo $data;
?>