<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
<?php
include_once("../../connect/connect.php");
// $conn = mysqli_connect("localhost", "root", "", "student");
		
// 		// Check connection
// if ($conn === false) {
// 	die("ERROR: Could not connect. "
// 		. mysqli_connect_error());
// }
				//echo $_REQUEST['Description'];
				$annoucement_title = $_REQUEST['Title'];
				$description =  $_REQUEST['Description'];
				$skills_required =  $_REQUEST['skills'];
				$location = $_REQUEST['Location'];
				$start_date = $_REQUEST['startDate'];
				$duration = $_REQUEST['Duration'];
				$branch = $_REQUEST['Branch'];
				$work_type = $_REQUEST['WorkType'];
				$stipend_type = $_REQUEST['StipendType'];
				$stipend = $_REQUEST['Stipend'];
				$work_location = $_REQUEST['Location'];
				$perks = $_REQUEST['Perks'];
				// $user_id = "demo@gmail.com";

				$sql = "INSERT INTO new_annoucement (announcement_title,description,skills_required,location,start_date,duration,branch,work_type,stipend_type,stipend,work_location,perks) VALUES ('$annoucement_title',
				'$description','$skills_required','$location','$start_date','$duration','$branch','$work_type','$stipend_type','$stipend','$work_location','$perks')";
				//echo $sql;
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
			
		
	</center>
</body>

</html>