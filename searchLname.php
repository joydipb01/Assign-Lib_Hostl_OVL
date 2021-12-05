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
            header("location: ./studentLogin.html");
        }
?>

<nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <a href="studentDashboard.php" class="navbar-brand">Dashboard</a>
    </div>
    <div class="navbar-header">
        <a href="studentDashboardTut.php" class="navbar-brand">OVL Dashboard</a>
    </div>
    <!-- Collection of nav links and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li><a href="viewLesson.php">View Lessons</a></li>
			<li class="active"><a href="searchLname.php">Search Lesson Name</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</nav>
<div class="login-form">
<div class="well">
<h3>Search by Lesson Name</h3><br>
<form action="searchLnamebts.php" method="post" align="center">
<input type="hidden" name="action" value="view"> 
<label for= "sid"><abbr title="Complete or Partial Search">Lesson Name</abbr></label>
<input type="text" class="ggg" placeholder="Enter Lesson Name" name="lname" id="lname" required><br> 
<button type="submit" name="action" value="searchn">Search</button><br>
</form>
</div>
</div>
</body>
</html>