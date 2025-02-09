<?php
require_once 'connect.php';
$versity = $_GET['v'] ?? 'RUET';
$query="select * from institution where institution='$versity';"; 

$query_run = mysqli_query($con, $query);

$row = mysqli_fetch_assoc($query_run);
?>
<!DOCTYPE html>

<html>
    <head>
        <title>
           Versity Page
        </title>
        <link rel="stylesheet" href="all_page_style.css">
        
    </head>
    <body>
        
        <div class="verpage">
            <div class="top">
                <div class="icon">
                        <h2 class="logo">Student<font color="#fff">Home</font></h2>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="login_registration_page.php">LogIn/Register</a></li>
                        <li><a href="homepage.php">Home</a></li>
                        <li><a href="profilepage.php">Profile</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="headbox">
                <div class="logo1">
                    <?php echo '<img class="verlogo1" src="data:image;base64,'.base64_encode($row['image']).'" alt="RUET">';?>
                    <div class="moto"><?=$row['moto'];?></div>
                    <iframe  src="<?=$row['map'];?>"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                
                <div class="listbox">
                    <div class="theader">
                        <h1>Dormatories near "<?=$row['institution'];?>"</h1>
                    </div>
                    
                    <div class="row">
                        
                        <table class="table1" >
                            <thead>
                                <tr >
                                    <th class="col">Dormatory Name</th>
                                    <th class="col">Single Room Vacancy</th>
                                    <th class="col">Shared Room Vacancy</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr >
                                    <td class="col"> <a href="hostelpage.php">RH Student Hostel</a> </td>
                                    <td class="col">2</td>
                                    <td class="col">5</td>
                                </tr>
                                <tr>
                                    <td class="col">b Hostel</td>
                                    <td class="col">2</td>
                                    <td class="col">5</td>
                                </tr>
                                <tr>
                                    <td class="col">c Hostel</td>
                                    <td class="col">2</td>
                                    <td class="col">5</td>
                                </tr>
                                <tr>
                                    <td class="col">d Hostel</td>
                                    <td class="col">2</td>
                                    <td class="col">5</td>
                                </tr>
                                <tr>
                                    <td class="col">e Hostel</td>
                                    <td class="col">2</td>
                                    <td class="col">5</td>
                                </tr>
                                <tr>
                                    <td class="col">f Hostel</td>
                                    <td class="col">2</td>
                                    <td class="col">5</td>
                                </tr>
                                <tr>
                                    <td class="col">g Hostel</td>
                                    <td class="col">2</td>
                                    <td class="col">5</td>
                                </tr>
                                <tr>
                                    <td class="col">h Hostel</td>
                                    <td class="col">2</td>
                                    <td class="col">5</td>
                                </tr>
                                <tr>
                                    <td class="col">i Hostel</td>
                                    <td class="col">2</td>
                                    <td class="col">5</td>
                                </tr>
                                <tr>
                                    <td class="col">j Hostel</td>
                                    <td class="col">2</td>
                                    <td class="col">5</td>
                                </tr>
                               
                            </tbody>

                        </table>
                    </div>            
                </div>
            </div>
            
        </div>
        
    </body>
</html>