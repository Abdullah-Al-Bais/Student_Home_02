<!DOCTYPE html>

<html>
    <head>
        <title>
          Log In/ Registration
        </title>
        <link rel="stylesheet" href="all_page_style.css">

    </head>
    <body> 
        <div class="lrpage">
            <div class="top">
                <div class="navbar">
                    <div class="icon">
                        <h2 class="logo">Student<font color="#fff">Home</font></h2>
                    </div>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="login_registration_page.php"><font color="#26ff00">LogIn/Register</font></a></li>
                        <li><a href="homepage.php">Home</a></li>
                        <li><a href="profilepage.php">Profile</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="search">
                    <input type="search" class="srch"placeholder="Search Your Versity">
                    <button class="btn">Search</button>
                </div>
            </div>
            <div class="content">
                <h1 class="add">All Dormetory in <br> <font color="orange"> One Place!</font></h1>
                <br><p class="par">moto will be here. moto will <br> be here. moto will be here. moto will be here. <br>moto will be here</p>
            </div>


            <div class="formbox">
                <div class="button_box">
                    <div id="butn"></div>
                    <button type="button" class="toggle1" onclick="login()">Log In</button>
                    <button type="button" class="toggle2" onclick="register()">Register</button>
                </div>
                <form id="login" class="input" action="login-process.php" method="post">
                    <input type="text" class="inputid" placeholder="User Name" name="user_name" required>
                    <input type="text" class="inputid" placeholder="Enter Password" name="password" required>
                    <br>
                    <input type="checkbox" class="checkbox"><span>Remember Password</span>
                    <input name="submit" type="submit" class="submit" value="Log In">
                </form>
             
                <form id="register" class="input" action="register-process.php" method="post">
                    <input type="text" class="inputid" placeholder="Dormatory Name" name="dormatory" required> <br>
                    <input type="text" class="inputid" placeholder="Owner Name" name="user_name" required> <br>
                   <select class="inputid" name="institution">
                    <option selected>Select Near Institution</option>
                    <option value="ruet" >Rajshahi University of Engineering and Technology</option>
                    <option value="kuet" >Khulna University of Engineering and Technology</option>
                    <option value="cuet" >Chitagong University of Engineering and Technology</option>
                    <option value="buet" >Bangladesh University of Engineering and Technology</option>
                  </select><br>
                    <input type="email" class="inputid" placeholder="Email Id" name="email" required>
                    <input type="text" class="inputid" placeholder="Phone Number" name="phone" required>
                    <input type="text" class="inputid" placeholder="Enter Password" name="password" required>
                    <br>
                    <input type="checkbox" class="checkbox" value="yes"><span>I Agree To The Terms And Conditions</span>
                    <input name="submit" type="submit" class="submit" value="Register">
                </form>
            </div>
        </div>
        
        <script src="script_for_lrpage.js"></script>
    </body>
</html>