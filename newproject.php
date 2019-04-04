<!DOCTYPE html>
<html>
<head>
	<title>Enroll new project</title>
</head>
<body>

	<form action="newproject.php" method="post" id="project">
		

		
		<input type="text" name="projectname" value="<?php echo $projectname; ?>">
		<input type="submit" name="psubmit">

	</form>


	<?php 
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
  	 		array_push($errors, "Please Enter a project name");

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