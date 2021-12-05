<?php
    include "sql_stud_conn.php";
    $id = $pwd = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $id = trim($_POST["sid"]);
      $pwd = trim($_POST["password"]);
      $query = mysqli_query($conn, "SELECT * FROM USERS WHERE ID = '$id'");
      if(mysqli_num_rows($query) == 1){
        $row = mysqli_fetch_assoc($query);
        $passwd = $row['PASSWORD'];
        if(password_verify($pwd,$passwd) === true){
            $_SESSION['login'] = "stud";
            $_SESSION['fname'] = $row['FNAME'];
            $_SESSION['id'] = $id;
            setcookie("loggedin", "stud", time()+ 3600);
            header("location: ./studentDashboard.php");
        }
        else{
          echo '<script> alert("Invalid Login Credentials!"); window.location.href = "./studentLogin.html";</script>'; 
        }
      }
      else{
        echo '<script> alert("Invalid Login Credentials!"); window.location.href = "./studentLogin.html";</script>';
      }  
    }
?>