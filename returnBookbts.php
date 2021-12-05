<?php
    include "sql_issue_conn.php";
    $id = $student = "";
	$status="AV";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = trim($_POST["bookid"]);
        $student =trim($_POST["sid"]);
		$query=mysqli_query($conn, "SELECT * FROM BOOKS WHERE BID='$id';");
		if(mysqli_num_rows($query)==0){
			echo '<script>alert("The Book ID '.$id.' is not registered!"); window.location.href = "./returnBook.php";</script>';
			return;
		}
		$query=mysqli_query($conn, "SELECT * FROM USERS WHERE ID='$student';");
		if(mysqli_num_rows($query)==0){
			echo '<script>alert("The Student ID '.$student.' is not registered!"); window.location.href = "./returnBook.php";</script>';
			return;
		}
		$query=mysqli_query($conn, "SELECT * FROM BOOKS WHERE BID='$id';");
		if(mysqli_num_rows($query)==1){
			$query = mysqli_query($conn, "SELECT * FROM ISSUE WHERE BID = '$id' AND SID='$student'");

			if(mysqli_num_rows($query) == 1){
				$query=mysqli_query($conn, "DELETE FROM ISSUE WHERE BID = '$id' AND SID='$student'");
				if($query){
					echo '<script> alert("Book Returned Successfully!"); window.location.href = "./returnBook.php";</script>';
				}
				else{
					echo '<script> alert("Unsuccessful Return!"); window.location.href = "./returnBook.php";</script>';
					return;
				}
			}
			else{ 
				echo '<script> alert("The student '.$student.' was not issued Book ID '.$id.'. Enter a different Book ID."); window.location.href = "./returnBook.php";</script>';          
			}
			$query1=mysqli_query($conn, "UPDATE BOOKS SET QUANTITY=QUANTITY+1 WHERE BID='$id'");
			$query2=mysqli_query($conn, "SELECT * FROM BOOKS WHERE BID='$id';");
			if(mysqli_num_rows($query2) == 1){
				$row=mysqli_fetch_assoc($query2);
				if($row['QUANTITY']!=0){
					$query1=mysqli_query($conn, "UPDATE BOOKS SET STATUS='$status' WHERE BID='$id'");
				}
			}
		}
    
    }
?>