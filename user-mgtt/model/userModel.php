<?php
    require_once('db.php');

    function login($username, $password){
        $con = getConnection();
        $sql = "select * from demotable where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function createUser($username, $password, $email){
        $con = getConnection();
        $sql = " insert into demotable values ('{$username}','{$password}',{'$email'})";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if( $result == true){

            echo "User Created";



        }
        else{
            echo "User can not created";
        }
        


    }

    function getUser($id){
        $con = getConnection();
        $sql = "select * from users where username = '{$id}'";
        $result = mysqli_query($con, $sql);

    }

    function getAllUser(){
        $con = getConnection();
        $sql = "select * from users";
        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($users, $row);
        }

        return $users;
    }

    function updateUser($user, $password, $email){
        $con = getConnection();
        $sql = " update demotable set password = '{$password}', email= '{$email}' where username = '{$user}';"; 
        $result = mysqli_query($con, $sql);


    }

    function deleteUser($username){
        $con = getConnection();
        $sql = " Delete from demotable where username = '{$username}';"; 
        $result = mysqli_query($con, $sql);

        if($result == true){

         echo "User has been deleted";
        }

        else{
            echo "User can not be deleted";
        }
    }


?>