<?php 
	//session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password);
    if (!$conn) {
        die("Error in connection: " . mysqli_connect_error());
    }

    $db = "CREATE DATABASE IF NOT EXISTS ITA2";
    mysqli_query($conn, $db);

    $usedb = "USE ITA2;";
    if(mysqli_query($conn, $usedb)){
        $table2 = "CREATE TABLE IF NOT EXISTS LESSONS(
					LID  VARCHAR(5) NOT NULL UNIQUE,
					LNAME VARCHAR(50) NOT NULL,
					LINK VARCHAR(150) NOT NULL
                );";
        mysqli_query($conn, $table2);
    }
?>