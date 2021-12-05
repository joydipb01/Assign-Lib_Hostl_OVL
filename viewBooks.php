<!DOCTYPE html>
<html>
<head>
<title>LibMS: Student Page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/style.css" rel='stylesheet' type='text/css' />
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
        <a href="studentDashboardLib.php" class="navbar-brand">LibMS Dashboard</a>
    </div>
    <!-- Collection of nav links and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="viewBooks.php">View Borrowed Books</a></li>
            <li><a href="searchName.php">Search Book Name</a></li>
            <li><a href="searchAuthor.php">Search Book Author</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</nav>
<div class="login-form">
<div class="well">
<h3>View Borrowed Books</h3><br>
<form action="viewBooksbts.php" method="post" align="center">
<input type="hidden" name="action" value="view"> 
<label for= "sid">Student ID</label>
<input type="text" class="ggg" placeholder="Enter your ID" name="sid" id="sid" pattern="[0-9]{2}[A-Z]{4}[0-9]{2}" required><br> 
<button type="submit" name="action" value="view">View</button><br>
</form>
</div>
</div>
</body>
</html>