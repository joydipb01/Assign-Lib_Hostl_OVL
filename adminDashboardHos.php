<!DOCTYPE html>
<html>
<head>
<title>HostlMS: Admin Page</title>
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
            header("location: ./adminLogin.html");
        }
?>

<nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <a href="adminDashboard.php" class="navbar-brand">Dashboard</a>
    </div>
    <div class="navbar-header">
        <a href="adminDashboardHos.php" class="navbar-brand">HostlMS Dashboard</a>
    </div>
    <!-- Collection of nav links and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li><a href="addRoom.php">Add Room</a></li>
            <li><a href="updateRoom.php">Update Room</a></li>
            <li><a href="deleteRoom.php">Delete Room</a></li>
			<li><a href="allotRoom.php">Allot Room</a></li>
			<li><a href="vacateRoom.php">Vacate Room</a></li>
			<li><a href="viewAllotedRooms.php">View Alloted Rooms</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</nav>
<div class="login-form">
<div class="well">
<h1>HostlMS Dashboard: Admin</h1><br>
<p>As an admin you have the authority to add, update, delete, allot and vacate the rooms in the Library.<br>A Sample Room is given in the background photo.</p>
</div>
</div>
</body>
</html>