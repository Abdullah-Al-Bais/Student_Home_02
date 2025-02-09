<?php
require_once 'connect.php';
if(isset($_POST['submit']))
{
    $dormatory=$_POST['dormatory'];
    $institution=$_POST['institution'];
    $about=$_POST['about'];
    $map=$_POST['map'];
    $no_single=$_POST['no_single'];
    $about_single=$_POST['about_single'];
    $no_shared=$_POST['no_shared'];
    $about_shared=$_POST['about_shared'];
    $contact=$_POST['contact'];
    

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