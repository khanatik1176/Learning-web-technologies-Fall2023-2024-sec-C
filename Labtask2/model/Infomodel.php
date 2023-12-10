<?php 

require_once('dbmodel.php');

function login($useremail, $userpassword)
{
    $con = getConnection();
    $sql = "select * from infomanagement where Useremail ='{$useremail}' and Userpassword='{$userpassword}'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    if (isset($_POST['submit'])) {

        if (!is_null($row) && $row["UserRole"] == "Admin") {

  
                header("location: ../view/admindashboard.php");

            }

        } 
        
        
        elseif (!is_null($row) && $row["UserRole"] == "Member") {
            $_SESSION['Username'] = $row['UserName'];
            $_SESSION['UserEmail'] = $row['UserEmail'];
            $_SESSION['UserPass'] = $row['UserPassword'];
            $_SESSION['Role'] = 'Member';
            if (!empty($_POST["check"])) {
                setcookie("UserEmail", $useremail, time() + 30, "/");
                setcookie("UserPass", $userpassword, time() +30, "/");
                header("location: ../view/Memberdashboard.php");
            } else {

                header("location: ../view/Memberdashboard.php");

            }
        } elseif (!is_null($row) && $row["UserRole"] == "DeliveryMan") {
            $_SESSION['Username'] = $row['UserName'];
            $_SESSION['UserEmail'] = $row['UserEmail'];
            $_SESSION['UserPass'] = $row['UserPassword'];
            $_SESSION['Role'] = 'Deliveryman';
            if (!empty($_POST["check"])) {

                setcookie("UserEmail", $useremail, time() + 30, "/");
                setcookie("UserPass", $userpassword, time() + 30, "/");
                header("location: ../view/deliverymandashboard.php");

            } else {

                header("location: ../view/deliverymandashboard.php");
            }


        } else {
            echo "Invalid";
        }
    }

?>