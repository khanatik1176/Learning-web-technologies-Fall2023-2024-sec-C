<?php
session_start();
$cookie_username = $_SESSION['User'];
$cookie_Password = $_SESSION['Pass'];
setcookie($cookie_username, $cookie_Password, time () + (86400*30), "/");
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

                    <legend>LOGIN</legend>
                    User Name: <input type="text" name="uname" value=""> <br/>
                    Password: <input type="password" name="pass"value= ""><br/><hr>
                    <hr>
                    <input type="checkbox" name="rem"value= "">Remember Me 
                    
                    <input type="submit" name="sub" value="Submit">
                    <a href="ForgetPassword.php">Forgot Password?</a>
                    
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
    if($_POST['uname'] != " " && $_POST['pass'] != " ")
    {
        if($_SESSION['User'] == $_POST['uname'] && $_SESSION['Pass'] == $_POST ['pass'])
        {
            header("location: Dashboard.php");
        }
        
        else if($_SESSION['User'] == $_POST['uname'] && $_SESSION['Pass'] == $_POST ['pass'] && isset($_POST['rem']))
        {
            

    
        }

        else 
        {
            echo "Wrong Username or Password !";
        }


    }



}

?>



