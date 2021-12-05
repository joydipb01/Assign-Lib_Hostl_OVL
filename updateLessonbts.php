<?php
    include "sql_lesson_conn.php";
    $id = $fno = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = trim($_POST["lessonid"]);
		$lname = trim($_POST["lname"]);
        $link = trim($_POST["link"]);
        $query = mysqli_query($conn, "SELECT * FROM LESSONS WHERE LID = '$id'");

        if(mysqli_num_rows($query) == 1){
			if($lname!=''){
				$query=mysqli_query($conn, "UPDATE LESSONS SET LNAME='$lname' WHERE LID='$id'");
				if($query){
					;
				}
				else{
					echo '<script> alert("Unsuccessful Update!"); window.location.href = "./updateLesson.php";</script>';
				}
			}
			else if($link!=''){
				$query=mysqli_query($conn, "UPDATE LESSONS SET LINK='$link' WHERE LID='$id'");
				if($query){
					;
				}
				else{
					echo '<script> alert("Unsuccessful Update!"); window.location.href = "./updateLesson.php";</script>';
				}
			}
			echo '<script> alert("Lesson Updated Successfully!!"); window.location.href = "./updateLesson.php";</script>';
        }
        else{ 
            echo '<script> alert("The ID '.$id.' does not exist. Enter a different Lesson ID."); window.location.href = "./updateLesson.php";</script>';          
        
        }
    
    }


?>