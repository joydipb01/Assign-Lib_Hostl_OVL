<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Admin Dashboard</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="css/style1.css" rel='stylesheet' type='text/css' />
</head>
<body>

<?php
        if(!isset($_COOKIE["loggedin"])){
            header("location: ./adminLogin.html");
        }
?>

<div class="login-form">
    <div class = "well">
    <h1>Welcome Admin</h1>
	<h3 id="login-line">Choose one of the following:</h3>
	
	<form action="adminDashboardLib.php">
    <button type="submit" value="lib">LibMS (Library)</button>
    </form>
     <br>
    <form action="adminDashboardHos.php">
    <button type="submit" value="hos">HostlMS (Hostel)</button>
    </form>
    <br>
    <form action="adminDashboardTut.php">
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