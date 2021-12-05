<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Student Dashboard</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="css/style1.css" rel='stylesheet' type='text/css' />
</head>
<body>

<?php
		session_start();
		
		$fname=$id="";
		
        if(!isset($_COOKIE["loggedin"])){
            header("location: ./studentLogin.html");
        }
		else{
			$fname=$_SESSION['fname'];
			$id=$_SESSION['id'];
		}
?>

<div class="login-form">
    <div class = "well">
    <h1>
	Welcome
	<?php 
		echo $fname
	?>!
	</h1>
	<h3 id="login-line">Choose one of the following:</h3>
	
	<form action="studentDashboardLib.php">
    <button type="submit" value="lib">LibMS (Library)</button>
    </form>
     <br>
    <form action="studentDashboardHos.php">
    <button type="submit" value="hos">HostlMS (Hostel)</button>
    </form>
    <br>
    <form action="studentDashboardTut.php">
    	<button type="submit" value="vid">OVL (Video Learning)</button>
    </form>
    <br />
    <br />
    <br />
    <br />
    <br />
    <form action="logout.php">
    	<button type="submit" value="log">Logout</button>
    </form>
</div>
</div>
</body>
</html>