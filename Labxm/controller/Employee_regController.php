<?php 

require_once("../model/employee_model.php");

session_start();

$name = $_POST['uname'];
$contactno = $_POST['uphone'];
$username = $_POST['username'];
$password = $_POST['upassword'];

$_SESSION['Username'] = $username;
if(isset($_POST['submit'])){

$flag = createEmployee($name, $contactno, $username, $password);

if ($flag == true)

{
    header("location:../view/Employee_registration.html");
}
}

else
{
    echo "Invalid";
}

?>