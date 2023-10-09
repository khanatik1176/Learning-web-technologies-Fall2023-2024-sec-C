<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<table border="1" width="60%" cellspacing="0" align ="center">
        <td><img src="abstract-geometric-logo-or-infinity-line-logo-for-your-company-free-vector.jpg" width="80px" height="80px" align ="left">
                <p align = "right"><a href="index.php">Home |</a>
                <a href="Logout.php" >Logout</a> </p>
            </td>

         </tr>
         <tr>
            <td> Account <hr> <br> 
            
            <ul>
            
            <li><a href="Dashboard.php">Dashboard</a></li>
            <li><a href="ViewProfile.php">View Profle</a></li>
            <li><a href="EditProfile.php">Edit Profile</a></li>
            <li><a href="ChangeProfilePic.php">Change Profile Picture</a></li>
            <li><a href="ChangePassword.php">Change Password</a></li>

            </ul>
         
        </td>
        <td colspan="2">
            Welcome <?php echo "$_COOKIE[Unem]" ?>
        </td>

         </tr>
         <tr>
            <td colspan="2" height="10px" align="center">Copyright © 2017</td>
         </tr>
   
        </table>
    
</body>
</html>