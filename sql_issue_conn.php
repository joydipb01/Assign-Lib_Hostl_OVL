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
        $table = "CREATE TABLE IF NOT EXISTS ISSUE(
					BID  VARCHAR(5) NOT NULL,
					SID VARCHAR(10) NOT NULL,
					DOI DATE NOT NULL,
					PRIMARY KEY(BID, SID)
                );";
        mysqli_query($conn, $table);
    }
?>