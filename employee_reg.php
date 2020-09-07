<!DOCTYPE html>
<html>
<head>
    <title>Employer</title>
</head>
<body>
    <form>
		<fieldset>
                <legend>Registration</legend>
                <table>
                     
                    <tr>
                        <td>Company Name</td>
                        <td><input type="text" name="companyName" id="companyName"></td> 
                    </tr>
                    <tr>
                        <td>Job Title</td>
                        <td><input type="text" name="jobTitle" id="jobTitle"></td>
                    </tr>
                    <tr>
                        <td>Job Location</td>
                        <td><input type="text" name="jobLocation" id="jobLocation"></td>
                    </tr>
                    <tr>
                        <td>Salary</td>
                        <td><input type="text" name="salary" id="salary"></td>
                    </tr>        
                 </table> 
                 <br />
                 <button type="button" id="submit">Submit</button>
                 <tr>
                    <?php

                            $companyName = $_POST['companyName'];
                            $jobTitle = $_POST['jobTitle'];
                            $jobLocation = $_POST['jobLocation'];
                            $salary = $_POST['salary'];

                            if( empty($companyName) || empty($jobTitle) || empty($jobLocation) || empty($salary))
                            {
                                echo "Can't leave empty.!!";
                            }

                            else
                            {
                                
                                $mysqlConnection = mysqli_connect('127.0.0.1', 'root', '', 'mid_project');
                                $query = "Insert into employer Values('$companyName','$jobTitle','$jobLocation','$salary')";
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
            var companyName = $("#companyName").val();
            var jobTitle = $("#jobTitle").val();
            var jobLocation = $("#jobLocation").val();
            var salary = $("#salary").val();
            var dataString = "companyName="+companyName+"&jobTitle="+jobTitle+"&jobLocation="+jobLocation+"&salary="+salary;
           
            $.ajax({
               type: "POST",
               url: "employer_login.php",
               data: dataString,
               success: function(){
                 alert("SUCCESSFULLY POSTED NEW JOB");
               },
               Error: function() {
                   alert("AN UNEXPECTED ERROR OCCURED POSTING NEW JOB !");
               }
           });
       }); 
    });
    </script>
</body>
</html>