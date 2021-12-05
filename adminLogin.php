<?php
    $_SESSION["login"] = "admin";
    setcookie("loggedin", "admin", time()+ 3600);
    header("location: ./adminDashboard.php");
?>