<!DOCTYPE html>
<html>
<head>
<title>HostlMS: Student Page</title>
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
            header("location: ./studentLogin.html");
        }
?>

<nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <a href="studentDashboard.php" class="navbar-brand">Dashboard</a>
    </div>
    <div class="navbar-header">
        <a href="studentDashboardHos.php" class="navbar-brand">HostlMS Dashboard</a>
    </div>
    <!-- Collection of nav links and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="viewRoom.php">View Alloted Room</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</nav>
<div class="login-form">
<div class="well">
<?php
	include "sql_rooms_conn.php";
    $id = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = trim($_POST["sid"]);
		$query=mysqli_query($conn, "SELECT RID, FLOOR FROM ROOMS WHERE OCCUP='$id'");
		echo "<h3>Alloted Room:</h3>";
		echo '<table style="border:1px solid rgba(89, 59, 124, 0.767); width:100%">';
		echo "<tr>";
		echo '<th style="border:1px solid rgba(89, 59, 124, 0.767);width:50%">Room Number</th>';
		echo '<th style="border:1px solid rgba(89, 59, 124, 0.767);width:50%">Floor Number</th>';
		if(mysqli_num_rows($query)>=1){
			while($row = mysqli_fetch_array($query)){
                echo "<tr>";
                echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:50%">' . $row["RID"] . '</td>';
                echo '<td style="border:1px solid rgba(89, 59, 124, 0.767);width:50%">' . $row["FLOOR"] . '</td>';
                echo "</tr>";
            }
		}
    }


?>
</form>
</div>
</div>
</body>
</html>