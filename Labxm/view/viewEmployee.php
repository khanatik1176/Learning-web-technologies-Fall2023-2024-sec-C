<?php
require_once('../model/employee_model.php');
session_start();

$user = $_SESSION['username'];
$emp =getAllEmployee($user);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .editp {
            background: #36a420;
            border: 1px solid #36a420;
            color:aliceblue;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            padding: 8px;
            border-radius: 10px;
            text-decoration: none;
        }
        .deletep{
            background: red;
            border: 1px solid #36a420;
            color:aliceblue;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            padding: 8px;
            border-radius: 10px;
            text-decoration: none;
        }
    </style>
    <title>View Delivery Man</title>
</head>

<body>
    <form action="">
        <h2 align="center">Welcome
            <?php echo $_SESSION['Username'] ?>
        </h2>
        <table class="tb_1" border="1" cellspacing="0" width="100%" cellpadding="10" height="400px">
            <tr>
                <td><img src="../asset/clogo.png" alt="" height="30px"><b>All in One Parcel Service</td>
                <td align="right" colspan="2">
                    <a href="deliverymanNotification.php">Notifications</a> |
                    <a href="../controller/logoutChecker.php">Logout?</a>
                </td>
            </tr>
            <tr>
                <td width="1250px" colspan="2">
                    <table border="1" cellspacing="0" align="center" cellpadding="5">
                        <td colspan="9" rowspan="2">
                            <img src="../asset/profile.png" height="100px" width="100px" align="center">
                        </td>
                        <td align="center">ID</td>
                        <td align="center">NAME</td>
                        <td align="center">EMAIL</td>
                        <td align="center">Gender</td>
                        <td align="center">Date of Birth</td>
                        <td align="center">Phone Number</td>
                        <td align="center">NID Number</td>
                        <td align="center">Vehicle</td>
                        <td align="center">Address</td>

                        <?php for ($i = 0; $i < count($emp); $i++) { ?>
                            <tr>

                                <td align="center">
                                    <?= $emp[$i]['Name'] ?>
                                </td>
                                <td align="center">
                                    <?= $emp[$i]['Contact Number'] ?>
                                </td>
                                <td align="center">
                                    <?= $emp[$i]['User Name'] ?>
                                </td>
                                <td align="center">
                                    <?= $emp[$i]['Password'] ?>
                                </td>
                           
                            </tr>


                        <?php } ?>
                </td>
            </tr>
            <tr>
                <td colspan="18" align="center">
                    <table border="0" cellspacing="0" cellpadding="10">
                        <tr>
                            <td >
                            <a href="./Editemployee.html"class="editp">Edit Profile
                            </td>
                            <td>
                            <a href="./DeleteEmployee.html" class="deletep">Delete Profile</a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table><br><br>
        <table align="center" border="0" cellspacing="0" cellpadding="5">
            <tr>
                <td align="center">
                    <a href="deliverymandashboard.php" style="text-decoration: none;
                    border: 1px solid black; padding:8px; border-radius:20px;
                    background-color: aqua; color: black;">Back to Home!?</a>
                </td>
            </tr>
        </table>

        </table>
    </form>
</body>

</html>
