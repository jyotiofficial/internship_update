<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>

		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database_name => staff
		$conn = mysqli_connect("localhost", "root", "", "internship_portal");

		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		// Taking all 5 values from the form data(input)
        $na_companyname = $_REQUEST['na_companyname'];
        $na_companyadd = $_REQUEST['na_companyadd'];
        $na_companylocation = $_REQUEST['na_companylocation'];
		$na_startdate = $_REQUEST['na_startdate'];
		$na_enddate = $_REQUEST['na_enddate'];
		$na_branch = $_REQUEST['na_branch'];
		$na_currentsem = $_REQUEST['na_currentsem'];
		$na_stipend = $_REQUEST['na_stipend'];
		$na_worklocation = $_REQUEST['na_worklocation'];
		// $user_id = "myadav20ecs@stuent.mes.ac.in";
		// Performing insert query execution
		// here our table name is college
		//take user id from session
		$sql = "INSERT INTO new_application VALUES ('$na_companyname',
			'$na_companyadd','$na_companylocation','$na_startdate','$na_enddate','$na_branch','$na_currentsem','$na_stipend','$na_worklocation')";

		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>

</body>

</html>


<!-- $CompanyName = $_REQUEST['na_companyname']
$CompanyAddress = $_REQUEST['na_companyadd']
$CompanyLoacation = $_REQUEST['na_companylocation']
$startDate = $_REQUEST['na_startdate']
$endDate = $_REQUEST['na_enddate']
$branch = $_REQUEST['na_branch']
$Semester = $_REQUEST['na_currentsem']
$Stipend = $_REQUEST['na_companyname']
$Location = $_REQUEST['na_worklocation'] -->