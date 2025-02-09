<?php
    session_start();
    $con=mysqli_connect("localhost","root","","student_home");

    if (!$con) {
        die(mysqli_connect_error());
    }
    
    function isLoggedIn() {
        return isset($_SESSION['user']) && $_SESSION['user'] != '';
    }
?>