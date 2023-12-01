<?php 

require_once('../model/FunctionalitesModel.php');


if(!isset($_POST['update']))
{
    echo "Fill All The Data.";
}

elseif(isset($_POST['update']))
{
    $Newname = $_POST['ename'];
    $contactno = $_POST['ephone'];
    $username = $_POST['eusername'];
    $password = $_POST['epassword'];


    updateEmployee($Newname, $NewEmail,$NewGender,$NewDOB,$NewPhoneNo,$NewNIDNo,$NewVehicle,$NewAddress);


}

?>
