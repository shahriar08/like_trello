<h1>Dashboard</h1>



<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>User registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Home Page</h2>

	</div>

<div class="content">
	<?php if (isset($_SESSION['success'])): ?>
		<div class="error success">
			
			<h3>
				<?php 
				echo $_SESSION['success'];
				unset($_SESSION['success']);


				 ?>

			</h3>
		</div>
	<?php endif ?>

<?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

<?php  
if (isset($_GET['logout'])) {

	session_destroy();
	unset($_SESSION['username']);
	header('location: register.php');

	# code...
}?>






</body>
</html>