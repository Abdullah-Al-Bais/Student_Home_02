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
          Update Page
        </title>
        <link rel="stylesheet" href="all_page_style.css">
        <script src="https://kit.fontawesome.com/344c28c452.js" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <div class="uppage">
            <div class="top">
                <div class="navbar">
                    <div class="icon">
                        <h2 class="logo">Student<font color="#fff">Home</font></h2>
                    </div>
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

            <div class="profilebox">
                <img src="profilepic.jpg" alt="" class="profilepic">
                <h1 class="profilename"><?php echo $row['user_name']?></h1>
                <div class="details">
                    <div class="details_op"><i class="fa-solid fa-building-columns"></i> <?=$row['dormatory']?> </div><br>
                    <div class="details_op"><i class="fa-solid fa-envelope"></i> <?=$row['email']?> </div><br>
                    <div class="details_op"><i class="fa-solid fa-phone"></i> <?=$row['phone']?></div>
                </div>
                <div class="logout-btn">
                    <form action="logout.php">
                     <input name="submit" type="submit" class="submit" value="Logout">
                    </form>
                </div>
            </div>

             <div class="updatehostel">
                <div class="theader">
                    <h1>Update hostel details</h1>
                </div>
                <div class="upd">
                    <form  class="upd-form" action="update-process.php" method="post">
                        <input type="text" class="inputid1" placeholder="Dormatory Name" name="dormatory" required> <br>
                            <select class="inputid1" name="institution">
                                <option selected>Select Near Institution</option>
                                <option value="ruet" >Rajshahi University of Engineering and Technology</option>
                                <option value="kuet" >Khulna University of Engineering and Technology</option>
                                <option value="cuet" >Chitagong University of Engineering and Technology</option>
                                <option value="buet" >Bangladesh University of Engineering and Technology</option>
                             </select><br>
                        <input type="text" class="inputid1" placeholder="About your hostel!" name="about" required> <br>
                        <input type="text" class="inputid1" placeholder="map" name="map" required><br>
                        <input type="text" class="inputid1" placeholder="Number Of vacant single_room " name="no_single" required><br>
                        <input type="text" class="inputid1" placeholder="Details of Single room!" name="about_single" required> <br>
                        <input type="text" class="inputid1" placeholder="Number Of vacant Shared_room " name="no_shared" required><br>
                        <input type="text" class="inputid1" placeholder="Details of Shared room!" name="about_shared" required> <br>
                        <input type="text" class="inputid1" placeholder="Contact Info" name="contact" required> <br><br>
                        Upload Hostel Image:<input type="file" class="" onchange="readURL(this)" accept="Image/*"><br>
                        Upload Single Room Image:<input type="file" class="" onchange="readURL(this)" accept="Image/*"><br>
                        Upload Shared Room Image:<input type="file" class="" onchange="readURL(this)" accept="Image/*"><br>
                        <div><input type="checkbox" id="checkbox" class="checkbox" value="yes"><label for="checkbox">I Agree To The Terms And Conditions</label></div>
                        <input name="submit" type="submit" class="submit" value="Update">
                    </form>
                </div>

             </div>
        </div>
        
    </body>
</html>