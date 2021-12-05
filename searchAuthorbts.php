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
            <li><a href="viewBooks.php">View Borrowed Books</a></li>
            <li><a href="searchName.php">Search Book Name</a></li>
            <li class="active"><a href="searchAuthor.php">Search Book Author</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</nav>
<div class="login-form">
<div class="well">
<h3>Search by Author Name</h3><br>
<?php
    include "sql_books_conn.php";
    $author = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $author = trim($_POST["auth"]);
        $query = mysqli_query($conn, "SELECT * FROM BOOKS WHERE AUTHOR LIKE '%$author%'");
        echo '<table style="border:1px solid rgba(89, 59, 124, 0.767); width:100%">';
		echo "<tr>";
		echo '<th style="border:1px solid rgba(89, 59, 124, 0.767);width:25%">Book ID</th>';
		echo '<th style="border:1px solid rgba(89, 59, 124, 0.767);width:25%">Book Name</th>';
		echo '<th style="border:1px solid rgba(89, 59, 124, 0.767);width:25%">Book Author</th>';
		echo '<th style="border:1px solid rgba(89, 59, 124, 0.767);width:25%">Availability</th>';
		if(mysqli_num_rows($query)>=1){
			while($row = mysqli_fetch_array($query)){
                echo "<tr>";
                echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:25%">' . $row["BID"] . '</td>';
                echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:25%">' . $row["BNAME"] . '</td>';
				echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:25%">' . $row["AUTHOR"] . '</td>';
				echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:25%">' . $row["STATUS"] . '</td>';
                echo "</tr>";
            }
		}
        else{
            echo '  <script> alert("No Book authored by '.$author.' exists");  window.location.href = "./searchName.php"</script>';
        }
    }

?>
<small>AV=Available; NA=Not Available</small><br /><br />
</div>
</div>
</body>
</html>
