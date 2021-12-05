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
<?php
	include "sql_issue_conn.php";
    include "sql_books_conn.php";
    $id = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = trim($_POST["sid"]);
		$query=mysqli_query($conn, "SELECT B.BNAME AS BNAME, B.BID AS BID, I.DOI AS DOI FROM BOOKS B, ISSUE I WHERE B.BID=I.BID AND I.SID='$id'");
		echo "<h3>Borrowed Books:</h3>";
		echo '<table style="border:1px solid rgba(89, 59, 124, 0.767); width:100%">';
		echo "<tr>";
		echo '<th style="border:1px solid rgba(89, 59, 124, 0.767);width:33%">Book Name</th>';
		echo '<th style="border:1px solid rgba(89, 59, 124, 0.767);width:33%">Book ID</th>';
		echo '<th style="border:1px solid rgba(89, 59, 124, 0.767);width:33%"><abbr title="Date of Issue">DOI</abbr></th>';
		echo '</tr>';
		if(mysqli_num_rows($query)>=1){
			while($row = mysqli_fetch_array($query)){
                echo "<tr>";
                echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:33%">' . $row["BNAME"] . '</td>';
                echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:33%">' . $row["BID"] . '</td>';
				echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:33%">' . $row["DOI"] . '</td>';
                echo "</tr>";
            }
		}
    }


?>
</div>
</div>
</body>
</html>