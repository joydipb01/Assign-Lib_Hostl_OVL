<?php
    include "sql_stud_conn.php";
    $erroMsg = $id = $pwd = $fname ="";
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $fname = trim($_POST["firstname"]);
        $id = trim($_POST["sid"]);
		$pwd=trim($_POST["password"]);
        $query = mysqli_query($conn, "SELECT * FROM USERS WHERE ID = '$id';");
        if(mysqli_num_rows($query) == 0){
          $fpassword= password_hash($pwd, PASSWORD_DEFAULT);
          mysqli_query($conn, "INSERT INTO USERS VALUES('$id','$fname','$fpassword');");
          $query = mysqli_query($conn, "SELECT * FROM USERS WHERE ID= '$id';" );
          if(mysqli_num_rows($query) == 1){
            echo '<script> alert("Account Created Successfully!"); window.location.href = "./studentLogin.html";</script>';
     
          }
          else{
            echo '<script> alert("An error has occured and your account was not created"); window.location.href = "./register.html"; </script>';
            
          }
        }
        else{
          echo '<script> alert("The ID '.$id.' already exists. Please enter a different ID."); window.location.href = "./register.html";</script>';          
       
        }
 
    }

?>