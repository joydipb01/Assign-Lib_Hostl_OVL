<?php
    include "sql_books_conn.php";
    $title = $author = $id = $status = $student = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = trim($_POST["bookid"]);
		$title = trim($_POST["title"]);
        $author = trim($_POST["author"]);
		$qty=trim($_POST["quantity"]);
        $query = mysqli_query($conn, "SELECT * FROM BOOKS WHERE BID = '$id'");

        if(mysqli_num_rows($query) == 1){
			if($title != ''){
				$query=mysqli_query($conn, "UPDATE BOOKS SET BNAME='$title' WHERE BID='$id'");
				if($query){
					;
				}
				else{
					echo '<script> alert("Unsuccessful Update!"); window.location.href = "./updateBook.php";</script>';
				}
			}
			else if($author != ''){
				$query=mysqli_query($conn, "UPDATE BOOKS SET AUTHOR='$author' WHERE BID='$id'");
				if($query){
					;
				}
				else{
					echo '<script> alert("Unsuccessful Update!"); window.location.href = "./updateBook.php";</script>';
				}
			}
			else if($qty != ''){
				if((int)$qty<=0){
					echo '<script> alert("Unsuccessful Updation! Quantity is less than or equal to 0!"); window.location.href = "./updateBook.php";</script>';
					return;
				}
				$query=mysqli_query($conn, "UPDATE BOOKS SET QUANTITY='$qty', ORG_QUANT='$qty' WHERE BID='$id'");
				if($query){
					;
				}
				else{
					echo '<script> alert("Unsuccessful Update!"); window.location.href = "./updateBook.php";</script>';
				}
			}
			echo '<script> alert("Book Updated Successfully!!"); window.location.href = "./updateBook.php";</script>';
        }
        else{ 
            echo '<script> alert("The ID '.$id.' does not exist. Enter a different Book ID."); window.location.href = "./updateBook.php";</script>';          
        
        }
    
    }
?>