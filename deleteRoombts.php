<?php
    include "sql_books_conn.php";
    $id = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = trim($_POST["roomid"]);
        $query = mysqli_query($conn, "SELECT * FROM ROOMS WHERE RID = '$id'");
		
		if(mysqli_num_rows($query)== 1){
			$row=mysqli_fetch_assoc($query);
			if($row['STATUS']=='NA'){
				echo '<script> alert("Room no. '.$id.' has been alloted to a student(s), cannot be deleted!"); window.location.href = "./deleteRoom.php";</script>';
				return;
			}
			$query2=mysqli_query($conn, "DELETE FROM ROOMS WHERE RID='$id'");
            if($query2){
				echo '<script> alert("Room Deleted Successfully!"); window.location.href = "./deleteRoom.php";</script>';
            }
            else{
				echo '<script> alert("Unsuccessful Deletion!"); window.location.href = "./deleteRoom.php";</script>';
            }
        }
        else{ 
            echo '<script> alert("The Room ID '.$id.' does not exist."); window.location.href = "./deleteRoom.php";</script>';          
        
        }
    
    }


?>