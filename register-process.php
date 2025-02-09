<?php
require_once 'connect.php';
if(isset($_POST['submit']))
{
    $dormatory=$_POST['dormatory'];
    $user_name=$_POST['user_name'];
    $institution=$_POST['institution'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $query="insert into users (dormatory,user_name,institution,email,phone,password)
    values ('$dormatory', '$user_name', '$institution', '$email',' $phone', '$password')"; 

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status']="inserted successfully";
        header("location: login_registration_page.php");
    }
    else{
        $_SESSION['status']="not inserted";
        header("location: login_registration_page.php");
    }
}