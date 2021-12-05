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
        $table = "CREATE TABLE IF NOT EXISTS BOOKS(
					BID  VARCHAR(5) NOT NULL UNIQUE,
					BNAME VARCHAR(40) NOT NULL,
					AUTHOR VARCHAR(40) NOT NULL,
					QUANTITY INT NOT NULL,
					ORG_QUANT INT NOT NULL,
					STATUS CHAR(2) NOT NULL
                );";
        mysqli_query($conn, $table);
    }
?>