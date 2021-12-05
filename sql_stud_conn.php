<?php
    session_start();
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
        $table = "CREATE TABLE IF NOT EXISTS USERS(
					ID  VARCHAR(10) NOT NULL UNIQUE,
					FNAME VARCHAR(20) NOT NULL,
					PASSWORD CHAR(255) NOT NULL
                );";
        mysqli_query($conn, $table);
    }
?>