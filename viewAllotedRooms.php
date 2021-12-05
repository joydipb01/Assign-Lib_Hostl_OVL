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
			<li class="active"><a href="viewAllotedRooms.php">View Alloted Rooms</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</nav>

<?php 
	include "sql_rooms_conn.php";
	$query=mysqli_query($conn, "SELECT * FROM ROOMS WHERE STATUS='NA';");
?>

<div class="login-form">
<div class="well">
	<h3>View Allotted Rooms</h3>
<table style="border:1px solid rgba(89, 59, 124, 0.767); width:100%">
<tr>
<th style="border:1px solid rgba(89, 59, 124, 0.767);width:25%">Room Number</th>
<th style="border:1px solid rgba(89, 59, 124, 0.767);width:25%">Floor</th>
<th style="border:1px solid rgba(89, 59, 124, 0.767);width:25%">Student ID</th>
<th style="border:1px solid rgba(89, 59, 124, 0.767);width:25%"><abbr title="Date of Allotment">DOA</abbr></th>
</tr>
<?php 
	if(mysqli_num_rows($query)>=1){
		while($row=mysqli_fetch_array($query)){
			echo "<tr>";
                echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:25%">' . $row["RID"] . '</td>';
                echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:25%">' . $row["FLOOR"] . '</td>';
				echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:25%">' . $row["OCCUP"] . '</td>';
				echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:25%">' . $row["DOA"] . '</td>';
                echo "</tr>";
		}
	}
?>
</form> 
</div>
</div>
</body>
</html>