<?php
require_once 'connect.php';
if(isset($_POST['submit']))
{
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];

    $query="select * from users where user_name='$user_name' and password='$password';"; 

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status']="login successful";
        $_SESSION['user']= $user_name;
        header("location: profilepage.php");
    }
    else{
        $_SESSION['status']="not inserted";
        header("location: login_registration_page.php");
    }
}