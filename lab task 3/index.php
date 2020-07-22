<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['sname'];
        $first_word = '';
        $email = $_POST['semail'];

        if($name == ""){ echo "name is required";}

        if(!preg_match('/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/', $name) ){
            echo "Input must start with a letter";
        } 
        else if($email == ""){ echo "email is required";}

        else{
            print_r($_POST);
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>

    <form method="post">
        Name: <input type="text" name="sname" value="" placeholder="">
        <br> 
        Email: <input type="email" name="semail" value="" placeholder="">
        <br>

        <input type="submit" name="" value="Submit">
    </form>
</body>
</html>