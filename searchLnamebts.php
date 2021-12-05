<!DOCTYPE html>
<html>
<head>
<title>LibMS: Student Page</title>
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
<?php
    include "sql_lesson_conn.php";
    $title = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $title = trim($_POST["lname"]);
        $query = mysqli_query($conn, "SELECT * FROM LESSONS WHERE LNAME LIKE '%$title%'");
        echo '<table style="border:1px solid rgba(89, 59, 124, 0.767); width:100%">';
		echo "<tr>";
		echo '<th style="border:1px solid rgba(89, 59, 124, 0.767);width:33%">Lesson ID</th>';
		echo '<th style="border:1px solid rgba(89, 59, 124, 0.767);width:33%">Lesson Name</th>';
		echo '<th style="border:1px solid rgba(89, 59, 124, 0.767);width:33%">Link</th>';
		if(mysqli_num_rows($query)>=1){
			while($row = mysqli_fetch_array($query)){
                echo "<tr>";
                echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:33%">' . $row["LID"] . '</td>';
                echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:33%">' . $row["LNAME"] . '</td>';
				echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:33%"><a href='.$row["LINK"].'>Learn</a></td>';
                echo "</tr>";
            }
		}
        else{
            echo '  <script> alert("No Lesson named '. $title.' exists");  window.location.href = "./searchLname.php"</script>';
        }
    }

?>
</div>
</div>
</body>
</html>