<?php
    include "sql_lesson_conn.php";
    $id = $status = $fno = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = trim($_POST["lessonid"]);
		$lname = trim($_POST["lname"]);
        $link = trim($_POST["link"]);
        $query = mysqli_query($conn, "SELECT * FROM LESSONS WHERE LID = '$id'");

        if(mysqli_num_rows($query) == 0){
            mysqli_query($conn, "INSERT INTO LESSONS VALUES ('$id','$lname', '$link'); ");
            $query = mysqli_query($conn, "SELECT * FROM LESSONS WHERE LID = '$id';" );
            if(mysqli_num_rows($query) == 1){
				echo '<script> alert("Lesson Added Successfully!!"); window.location.href = "./addLesson.php";</script>';
            }
            else{
				echo '<script> alert("Unsuccessful Addition!"); window.location.href = "./addLesson.php";</script>';
            }
        }
        else{ 
            echo '<script> alert("The ID '.$id.' already exists. Enter a different Lesson ID."); window.location.href = "./addLesson.php";</script>';          
        
        }
    
    }


?>