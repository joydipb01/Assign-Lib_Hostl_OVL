<?php
    include "sql_books_conn.php";
    $id = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = trim($_POST["lessonid"]);
        $query = mysqli_query($conn, "SELECT * FROM LESSONS WHERE LID = '$id'");
		
		if(mysqli_num_rows($query)== 1){
			$query=mysqli_query($conn, "DELETE FROM LESSONS WHERE LID='$id'");
            if($query){
				echo '<script> alert("Lesson Deleted Successfully!"); window.location.href = "./deleteLesson.php";</script>';
            }
            else{
				echo '<script> alert("Unsuccessful Deletion!"); window.location.href = "./deleteLesson.php";</script>';
            }
        }
        else{ 
            echo '<script> alert("The Lesson ID '.$id.' does not exist."); window.location.href = "./deleteLesson.php";</script>';          
        
        }
    
    }


?>