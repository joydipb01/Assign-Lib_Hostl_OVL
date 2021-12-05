<?php
    include "sql_stud_conn.php";
    include "sql_rooms_conn.php";
    $id = $rid = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = trim($_POST["sid"]);
        $rid = trim($_POST["roomid"]);
        $status = "AV";
        $query = mysqli_query($conn, "SELECT * FROM USERS WHERE ID = '$id'");
        if(mysqli_num_rows($query) == 1){
			$query = mysqli_query($conn, "SELECT * FROM ROOMS WHERE RID = '$rid'");
            if(mysqli_num_rows($query) == 1){
                $row = mysqli_fetch_assoc($query);
				if($row['STATUS']=='AV'){
					echo '<script> alert("The room '.$rid.' has already been vacated!");  window.location.href = "./vacateRoom.php"</script>';
					return;
				}
                $query = mysqli_query($conn,"UPDATE ROOMS SET STATUS='$status', DOA=NULL, OCCUP ='0' WHERE RID ='$rid' ");
                if($query){
                    echo '<script> alert("The Room has been Vacated!");  window.location.href = "./vacateRoom.php"</script>';
                }
                else{
                    echo '  <script> alert("Unsuccessful Vacation!");  window.location.href = "./vacateRoom.php"</script>';
                }
        
            }
            else{
				echo '  <script> alert("The Room ID does not exist");  window.location.href = "./vacateRoom.php"</script>';
            }    
        }
        else{ 
			echo '  <script> alert("The Student ID does not exist");  window.location.href = "./vacateRoom.php"</script>';
        }
    }

?>