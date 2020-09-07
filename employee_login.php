<!DOCTYPE html>
<html>
<head>
    <title>Employer Login</title>
</head>
<body> 
	<fieldset>
    <legend>Login</legend>
    <form>
        <table>
            <tbody>    
                <tr>
                    <td>User Name</td>
                    <td><input type="text" name="userName"></td> 
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>      
            </tbody>
        </table>
        <button type="submit" name="submit">Login</button>
        <tr>
            <?php

                session_start();

                if(isset($_POST['submit']))
                {
                    $userName 	= $_POST['userName'];
                    $password 	= $_POST['password'];

                    if(empty($userName))
                    {
                        echo "Can't leave empty.!!";
                    }
                    else
                    {
                        $mysqlConnection = mysqli_connect('127.0.0.1', 'root', '', 'mid_project');
                        $query = "select * from admin where userName='$userName' and password='$password' ";
                        $sqlExecution = mysqli_query($mysqlConnection, $query);
                        $rowsCount = mysqli_num_rows($sqlExecution);
                        
                        if($rowsCount == 1 )
                        {
                            $_SESSION['userName'] = $userName;
                        
                        }

                        else
                        {
                            echo "Incorrect user id or password.! Please re-enter correct user id and password.";
                        }
                    }
                }
                else
                {
                    echo "ERROR";
                }
            ?>
        </tr>
    </form> 
    <br />
	</fieldset>
</body>
</html>