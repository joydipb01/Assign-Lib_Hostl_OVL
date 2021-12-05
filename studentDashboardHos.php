<!DOCTYPE html>
<html>
<head>
<title>HostlMS: Student Page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/style2.css" rel='stylesheet' type='text/css' />
</head>
<body>

<?php
        if(!isset($_COOKIE["loggedin"])){
            header("location: ./studentLogin.html");
        }
?>

<nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <a href="studentDashboard.php" class="navbar-brand">Dashboard</a>
    </div>
    <div class="navbar-header">
        <a href="studentDashboardHos.php" class="navbar-brand">HostlMS Dashboard</a>
    </div>
    <!-- Collection of nav links and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li><a href="viewRoom.php">View Alloted Room</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</nav>
<div class="login-form">
<div class="well">
<h1>HostlMS Dashboard: Student</h1><br>
<p>You can have a look at your alloted hostel room, as well as those of other students!<br>A Sample Hostel Room is given in the background image!</p>
</div>
</div>
</body>
</html>