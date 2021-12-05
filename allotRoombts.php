<?php
    include "sql_stud_conn.php";
    include "sql_rooms_conn.php";
    $id = $rid = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = trim($_POST["sid"]);
        $rid = trim($_POST["roomid"]);
        $status = "NA";
        $query = mysqli_query($conn, "SELECT * FROM USERS WHERE ID = '$id'");
        if(mysqli_num_rows($query) == 1){
			$query=mysqli_query($conn, "SELECT * FROM ROOMS WHERE OCCUP='$id'");
			if(mysqli_num_rows($query)==1){
				echo '<script> alert("A room has already been alloted to '.$id.'");  window.location.href = "./allotRoom.php"</script>';
				return;
			}
			$query = mysqli_query($conn, "SELECT * FROM ROOMS WHERE RID = '$rid'");
            if(mysqli_num_rows($query) == 1){
                $row = mysqli_fetch_assoc($query);
				if($row['STATUS']=='NA'){
					echo '<script> alert("The room '.$rid.' has already been alloted!");  window.location.href = "./allotRoom.php"</script>';
					return;
				}
                $query = mysqli_query($conn,"UPDATE ROOMS SET STATUS='$status', DOA=CURDATE(), OCCUP ='$id' WHERE RID ='$rid' ");
                if($query){
                    echo '<script> alert("The Room has been Alloted!");  window.location.href = "./allotRoom.php"</script>';
                }
                else{
                    echo '  <script> alert("Unsuccessful Allotment");  window.location.href = "./allotRoom.php"</script>';
                }
        
            }
            else{
				echo '  <script> alert("The Room ID does not exist");  window.location.href = "./allotRoom.php"</script>';
            }    
        }
        else{ 
			echo '  <script> alert("The Student ID does not exist");  window.location.href = "./allotRoom.php"</script>';
        }
    }

?>