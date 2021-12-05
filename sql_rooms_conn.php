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
        $table2 = "CREATE TABLE IF NOT EXISTS ROOMS(
					RID  VARCHAR(5) NOT NULL UNIQUE,
					FLOOR INT(2) NOT NULL,
					DOA DATE,
					STATUS CHAR(2) NOT NULL,
					OCCUP VARCHAR(10) NOT NULL
                );";
        mysqli_query($conn, $table2);
    }
?>