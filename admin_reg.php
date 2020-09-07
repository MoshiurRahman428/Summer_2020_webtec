<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
</head>
<body>
    <form>
		<fieldset>
                <legend>Registration</legend>
                <table>
                   
                    <tr>
                        <td>Employer Name</td>
                        <td><input type="text" name="eName" id="eName"></td> 
                    </tr>
                    <tr>
                        <td>Company Name</td>
                        <td><input type="text" name="companyName" id="companyName"></td>
                    </tr>
                    <tr>
                        <td>Contact No</td>
                        <td><input type="text" name="contactNo" id="contactNo"></td>
                    </tr>
                    <tr>
                        <td>User Name</td>
                        <td><input type="text" name="userName" id="userName"></td>
                    </tr>
                    <tr>
                       <td>Password</td>
                       <td><input type="text" name="password" id="password"></td>
                    </tr>        
                 </table> 
                 <button type="button" id="submit">Submit</button>

                 <tr>

                    <?php

                        $eName = $_POST['eName'];
                        $companyName = $_POST['companyName'];
                        $contactNo = $_POST['contactNo'];
                        $userName = $_POST['userName'];
                        $password = $_POST['password'];

                        if( empty($eName) || empty($companyName) || empty($contactNo) || empty($userName))
                        {
                            echo "Can't leave empty.!!";
                        }

                        else
                        {
                            
                            $mysqlConnection = mysqli_connect('127.0.0.1', 'root', '', 'mid_project');
                            $query = "Insert into admin Values('$eName','$companyName','$contactNo','$userName','$password')";
                            mysqli_query($mysqlConnection, $query);
                            

                        }

                        ?>
                 </tr>
		</fieldset>
	</form>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $("#submit").click(function (){
            var eName = $("#eName").val();
            var companyName = $("#companyName").val();
            var contactNo = $("#contactNo").val();
            var userName = $("#userName").val();
            var password = $("#password").val();
            var dataString = "eName="+eName+"&companyName="+companyName+"&contactNo="+contactNo+"&userName="+userName+"&password="+password;
           
            $.ajax({
               type: "POST",
               url: "employer_login.php",
               data: dataString,
               success: function(){
                 alert("SUCCESSFULLY REGISTERED EMPLOYER");
               },
               Error: function() {
                   alert("AN UNEXPECTED ERROR OCCURED REGISTERING EMPLOYER !");
               }
           });
       }); 
    });
    </script>
</body>
</html>