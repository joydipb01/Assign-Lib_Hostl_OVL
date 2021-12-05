<!DOCTYPE html>
<html>
<head>
<title>HostlMS: Admin Page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
	window.onload = function(){
		document.getElementById("roomid").focus();
	}
  </script>
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
            <li class="active"><a href="deleteRoom.php">Delete Room</a></li>
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
	<h3>Delete Room Details</h3>
<form action="deleteRoombts.php" method="post" align="center">
<input type="hidden" name="action" value="add"> 
<label for= "Roomid">Room Number</label>
<input type="text" class="ggg" placeholder="Enter Room No." name="roomid" id="roomid" required><br>
 <div class="clearfix"></div>
 <button type="submit" name="action" value="delete">Delete</button><br>
</form> 
</div>
</div>
</body>
</html>