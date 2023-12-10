<?php


    require_once('../model/InfoModel.php');
    $Login_email = $_POST['login'];
    $Login_password = $_POST['password'];


    if($Login_email == "" || $Login_password == ""){
        echo "Invalid Email or password!";   
    }
    else{
    
        login($Login_email, $Login_password);
    
    }

?>




