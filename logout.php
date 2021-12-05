<?php
    session_start();
    setcookie("loggedin", "", time()- 30);
    session_destroy();
    header('location:./index.html');
?>