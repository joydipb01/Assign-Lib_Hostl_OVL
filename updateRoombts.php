<?php
    include "sql_rooms_conn.php";
    $id = $fno = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = trim($_POST["roomid"]);
		$fno = trim($_POST["fno"]);
        $query = mysqli_query($conn, "SELECT * FROM ROOMS WHERE RID = '$id'");

        if(mysqli_num_rows($query) == 1){
            $query=mysqli_query($conn, "UPDATE ROOMS SET FLOOR='$fno' WHERE RID='$id'");
            if($query){
				echo '<script> alert("Room Updated Successfully!!"); window.location.href = "./updateRoom.php";</script>';
            }
            else{
				echo '<script> alert("Unsuccessful Update!"); window.location.href = "./updateRoom.php";</script>';
            }
        }
        else{ 
            echo '<script> alert("The ID '.$id.' does not exist. Enter a different Room ID."); window.location.href = "./updateRoom.php";</script>';          
        
        }
    
    }


?>