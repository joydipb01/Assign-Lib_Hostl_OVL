<?php
    include "sql_books_conn.php";
    $title = $author = $id = $status = $student = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = trim($_POST["bookid"]);
		$title = trim($_POST["title"]);
        $author = trim($_POST["author"]);
		$qty=trim($_POST["quantity"]);
		if((int)$qty<=0){
			echo '<script> alert("Unsuccessful Addition! Quantity is less than or equal to 0!"); window.location.href = "./addBook.php";</script>';
			return;
		}
        $status ="AV";
        $query = mysqli_query($conn, "SELECT * FROM BOOKS WHERE BID = '$id'");

        if(mysqli_num_rows($query) == 0){
            mysqli_query($conn, "INSERT INTO BOOKS VALUES ('$id','$title','$author', '$qty', '$qty', '$status'); ");
            $query = mysqli_query($conn, "SELECT * FROM BOOKS WHERE BNAME='$title' AND AUTHOR='$author';" );
            if(mysqli_num_rows($query) == 1){
				echo '<script> alert("Book Added Successfully!!"); window.location.href = "./addBook.php";</script>';
            }
            else{
				$query2=mysqli_query($conn, "DELETE FROM BOOKS WHERE BID='$id';");
				echo '<script> alert("Unsuccessful Addition! The same title and author exist!"); window.location.href = "./addBook.php";</script>';
            }
        }
        else{ 
            echo '<script> alert("The ID '.$id.' already exists. Enter a different Book ID."); window.location.href = "./addBook.php";</script>';          
        
        }
    
    }


?>