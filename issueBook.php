<!DOCTYPE html>
<html>
<head>
<title>LibMS: Admin Page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
	window.onload = function(){
		document.getElementById("bookid").focus();
	}
  </script>
  <link href="css/style.css" rel='stylesheet' type='text/css' />
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
        <a href="adminDashboardLib.php" class="navbar-brand">LibMS Dashboard</a>
    </div>
    <!-- Collection of nav links and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li><a href="addBook.php">Add Book</a></li>
            <li><a href="updateBook.php">Update Book</a></li>
            <li><a href="deleteBook.php">Delete Book</a></li>
			<li class="active"><a href="issueBook.php">Issue Book</a></li>
			<li><a href="returnBook.php">Return Book</a></li>
			<li><a href="viewIssuedBooks.php">View Issued Books</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</nav>

<?php 
	include "sql_books_conn.php";
	$query=mysqli_query($conn, "SELECT BID, BNAME, QUANTITY FROM BOOKS WHERE STATUS='AV';");
?>

<div class="login-form">
<div class="well">
	<h3>Issue Book</h3>
<form action="issueBookbts.php" method="post" align="center">
<input type="hidden" name="action" value="add"> 
<label for= "Bookid">Book ID</label>
<input type="text" class="ggg" placeholder="Enter Book ID" name="bookid" id="bookid" required><br>
<label for= "sid">Student ID</label>
<input type="text" class="ggg" placeholder="Enter Student ID" name="sid" id="sid" pattern="[0-9]{2}[A-Z]{4}[0-9]{2}" required><br>
 <div class="clearfix"></div>
 <button type="submit" name="action" value="issue">Issue</button><br>
</form> 
<br /><br />
<strong>List of Available Books</strong><br /><br />
<table style="border:1px solid rgba(89, 59, 124, 0.767); width:100%">
<tr>
<th style="border:1px solid rgba(89, 59, 124, 0.767);width:33%">Book ID</th>
<th style="border:1px solid rgba(89, 59, 124, 0.767);width:33%">Book Name</th>
<th style="border:1px solid rgba(89, 59, 124, 0.767);width:33%">Quantity Available</th>
</tr>
<?php 
	if(mysqli_num_rows($query)>=1){
		while($row=mysqli_fetch_array($query)){
			echo "<tr>";
                echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:33%">' . $row["BID"] . '</td>';
                echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:33%">' . $row["BNAME"] . '</td>';
				echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:33%">' . $row["QUANTITY"] . '</td>';
                echo "</tr>";
		}
	}
?>

</div>
</div>
</body>
</html>