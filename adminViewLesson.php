<!DOCTYPE html>
<html>
<head>
<title>OVL: Student Page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/style3.css" rel='stylesheet' type='text/css' />
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
        <a href="adminDashboardTut.php" class="navbar-brand">OVL Dashboard</a>
    </div>
    <!-- Collection of nav links and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li><a href="addLesson.php">Add Lesson</a></li>
            <li><a href="updateLesson.php">Update Lesson</a></li>
            <li><a href="deleteLesson.php">Delete Lesson</a></li>
			<li  class="active"><a href="adminViewLesson.php">View Lessons</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</nav>

<?php 
	include "sql_lesson_conn.php";
	$query=mysqli_query($conn, "SELECT * FROM LESSONS");
?>

<div class="login-form">
<div class="well">
<h1>Lessons</h1><br>
<table style="border:1px solid rgba(89, 59, 124, 0.767); width:100%">
<tr>
<th style="border:1px solid rgba(89, 59, 124, 0.767);width:33%">Lesson ID</th>
<th style="border:1px solid rgba(89, 59, 124, 0.767);width:33%">Lesson Name</th>
<th style="border:1px solid rgba(89, 59, 124, 0.767);width:33%">Link</th>
<?php 
	if(mysqli_num_rows($query)>=1){
		while($row=mysqli_fetch_array($query)){
			echo "<tr>";
                echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:33%">' . $row["LID"] . '</td>';
                echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:33%">' . $row["LNAME"] . '</td>';
				echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:33%"><a href='.$row["LINK"].' target="_blank">Check</a></td>';
                echo "</tr>";
		}
	}
?>
</div>
</div>
</body>
</html>