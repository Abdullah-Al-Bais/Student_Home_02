<?php
require_once 'connect.php';
if (!isLoggedIn()) {
    header('Location: login_registration_page.php');
}
$user_name = $_SESSION['user'];
$query="select * from users where user_name='$user_name';"; 

$query_run = mysqli_query($con, $query);

$row = mysqli_fetch_assoc($query_run);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
          Profile Page
        </title>
        <link rel="stylesheet" href="all_page_style.css">
        <script src="https://kit.fontawesome.com/344c28c452.js" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <div class="profpage">
            <div class="top">
                <div class="icon">
                        <h2 class="logo">Student<font color="#fff">Home</font></h2>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="login_registration_page.php">LogIn/Register</a></li>
                         <li><a href="homepage.php">Home</a></li>
                        <li><a href="profilepage.php"><font color="#26ff00">Profile</font></a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="profilebox">
                <img src="profilepic.jpg" alt="" class="profilepic">
                <h1 class="profilename"><?php echo $row['user_name']?></h1>
                <div class="details">
                    <div class="details_op"><i class="fa-solid fa-building-columns"></i> <?=$row['dormatory']?> </div><br>
                    <div class="details_op"><i class="fa-solid fa-envelope"></i> <?=$row['email']?> </div><br>
                    <div class="details_op"><i class="fa-solid fa-phone"></i> <?=$row['phone']?></div>
                </div>
                <div class="updatebtn">
                    <a href="updatepage.php" class="updatebtn1">Update your hostel details!</a>
                </div>
                <div class="logout-btn">
                    <form action="logout.php">
                     <input name="submit" type="submit" class="submit" value="Logout">
                    </form>
                </div>
             </div>
        </div>
        
    </body>
</html>