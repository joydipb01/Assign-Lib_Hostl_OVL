<!DOCTYPE html>
<html>
<head>
<title>OVL: Admin Page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
	window.onload = function(){
		document.getElementById("lessonid").focus();
	}
  </script>
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
            <li class="active"><a href="deleteLesson.php">Delete Lesson</a></li>
			<li><a href="adminViewLesson.php">View Lessons</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</nav>

<div class="login-form">
<div class="well">
<h3>Delete a Lesson</h3>
<form action="deleteLessonbts.php" method="post" align="center">
<input type="hidden" name="action" value="add"> 
<label for= "lessonid">Lesson ID</label>
<input type="text" class="ggg" placeholder="Enter Lesson ID" name="lessonid" id="lessonid" required><br>
 <button type="submit" name="action" value="delete">Delete</button><br>
</form> 
</div>
</div>
</body>
</html>