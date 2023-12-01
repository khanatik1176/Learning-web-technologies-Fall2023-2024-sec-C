<?php 

require_once("./db_model.php");



function getAllEmployee($username) // Members
{
    $con = getConnection();
    $sql = "select * from employeemanagement where User Name = $username";
    $result = mysqli_query($con, $sql);
    $employee = [];
    while ($row = mysqli_fetch_array($result)) {

        array_push($employee, $row);

    }
    return $employee;
}

function createEmployee($name, $contactno, $username, $password)
{

    $con = getConnection(); // unique id generation 
    

    // Query for creating Member 
    $sql = " insert into employeemanagement values ( '{$name}','{$contactno}','{$username}','{$password}')";
    $result = mysqli_query($con, $sql);


    if ($result == true) {

        return true;
        
    } else {
        echo "User can not created";
        return false;
    }
}


function UpdateEmployee($name, $contactno, $username, $password)
{

    $con = getConnection(); // unique id generation 
    

    // Query for creating Member 
    $sql = " update adminmanagement set Name = '{name}', Contact Number = '{$contactno}', password = '{$password}' where User name = '{$username}';";
        $upresult = mysqli_query($con, $sql);


    if ($upresult == true) {

        return true;
        
    } else {
        echo "User can not updated";
        return false;
    }
}

function deleteEmployee($username)
{
    $con = getConnection();
    $sql = " Delete from employeemanagement where User Name = '{$username}';";
    $result = mysqli_query($con, $sql);

    if ($result == true) {
        // updated 11/11/23

        return true;
    
     

    } else {
        echo "User can not be deleted";

        return false;
    }
}









?>