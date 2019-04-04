<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


		<form action="newprojectserver.php" method="post" id="project">
		
				
		<input type="text" name="projectname" placeholder="Projct name">
		<input type="submit" name="psubmit">

	</form>

	<?php 
	$project_name = "";
	$errors = array(); 
	if (!empty($_POST['projectname'])){
			$name =  $_POST['projectname'];
			$con = mysqli_connect("localhost","root","","dashboard");
			$project_name = mysqli_real_escape_string($con,$name);
	
	if (!$con)
 	 {
 		 die("Connection error: " . mysqli_connect_errno());
  	 }	

  	 if (isset($_POST['psubmit'])) {

  	 	if(empty($project_name))
  	 	{
  	 		echo "Please enter a projectname";

  	 	}


	}

  	$query = "CREATE table $project_name
				(todo varchar (100),
				 todo_status BOOLEAN,
				 doing varchar (100),
				 doing_status BOOLEAN,
				 done varchar (100),
				 done_status BOOLEAN)";

				if (!mysqli_query($con,$query)) {
  				die('Error: ' . mysqli_error($con));
				}
  	
  	echo "Your project is created";
  
	}
	?>

</body>
</html>