<?php
session_start();
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
        <tr>
        <td><img src="abstract-geometric-logo-or-infinity-line-logo-for-your-company-free-vector.jpg" width="80px" height="80px" align ="left">
                <p align = "right"><a href="index.php">Home |</a>
                <a href="Login.php" >Login |</a>
                <a href="RegistrationIndex.php" >Registration</a></p>
            </td>

         </tr>
         <tr>
            <td colspan="2" height="100px">
                <form method="post">
                    <fieldset>

                    <legend>FORGOT PASSWORD</legend>
                    Email: <input type="email" name="mail"value= ""><br/><hr>
                    <input type="submit" name="sub" value="Submit">
                    
                </fieldset>

            </form>
        </td>
         </tr>
         <tr>
            <td colspan="2" height="10px" align="center">Copyright © 2017</td>
         </tr>
   
        </table>
    
</body>
</html>

<?php

    if(isset($_POST['sub']))
    {
        if($_POST['mail'] != "")
        {
            $_SESSION['Mailer'] = $_POST['mail'];
            header('location: Login.php');
        }

        else 
        {
            echo "Please provide a valid email!!";
        }
    }




?>
