<?php
    include "sql_rooms_conn.php";
    $id = $status = $fno = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = trim($_POST["roomid"]);
		$fno = trim($_POST["fno"]);
		if($id==0){
			echo '<script> alert("Unsuccessful Addition! Room Number cannot be 0!"); window.location.href = "./addRoom.php";</script>';
		}
        $status ="AV";
		$occupy="0";
        $query = mysqli_query($conn, "SELECT * FROM ROOMS WHERE RID = '$id'");

        if(mysqli_num_rows($query) == 0){
            mysqli_query($conn, "INSERT INTO ROOMS VALUES ('$id','$fno', NULL, '$status', '$occupy'); ");
            $query = mysqli_query($conn, "SELECT * FROM ROOMS WHERE RID = '$id';" );
            if(mysqli_num_rows($query) == 1){
				echo '<script> alert("Room Added Successfully!!"); window.location.href = "./addRoom.php";</script>';
            }
            else{
				echo '<script> alert("Unsuccessful Addition!"); window.location.href = "./addRoom.php";</script>';
            }
        }
        else{ 
            echo '<script> alert("The ID '.$id.' already exists. Enter a different Room ID."); window.location.href = "./addRoom.php";</script>';          
        
        }
    
    }


?>