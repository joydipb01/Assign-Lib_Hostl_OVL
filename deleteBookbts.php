<?php
    include "sql_books_conn.php";
    $id = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = trim($_POST["bookid"]);
        $query = mysqli_query($conn, "SELECT * FROM BOOKS WHERE BID = '$id'");
		
		if(mysqli_num_rows($query)== 1){
			$row=mysqli_fetch_assoc($query);
			$bname=$row['BNAME'];
			if($row['STATUS']=='NA'||$row['QUANTITY']<$row['ORG_QUANT']){
				echo '<script> alert("Book '.$bname.' has been borrowed by a student(s), cannot be deleted!"); window.location.href = "./deleteBook.php";</script>';
				return;
			}
			$query1=mysqli_query($conn, "DELETE FROM BOOKS WHERE BID='$id'");
            if($query1){
				echo '<script> alert("Book '.$bname.' Deleted Successfully!"); window.location.href = "./deleteBook.php";</script>';
            }
            else{
				echo '<script> alert("Unsuccessful Deletion!"); window.location.href = "./deleteBook.php";</script>';
            }
        }
        else{ 
            echo '<script> alert("The ID '.$id.' does not exist."); window.location.href = "./deleteBook.php";</script>';          
        
        }
    
    }


?>