<?php
    if(isset($_POST['submiter'])){
        $bgroup = $_POST['blood'];
        echo "Your Blood group is {$bgroup}";
    }
?>

<html lang="en">
<head>
    <title>Blood Group Form</title>
</head>
<body >

    <form method =" post " action="" enctype="">
        <fieldset>
          Blood Group <select name="blood"> 
            <option value="A+">A+</option>
            <option value="B+">B+</option>
            <option value="O+">O+</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="A-">A-</option>
            <option value="B-">B-</option>
        </select> <br>
         
          <hr>
          




        </fieldset>
        <br/>
        <input type="submit" name="submiter" value="submit" />  

    </form>
    
</body>
</html>