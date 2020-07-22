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
		<hr>
        Gender: 
            <input type="radio" name="gender"
            <?php if (isset($sgender) && $gender=="male") echo "checked";?>
            value="male">Male

            <input type="radio" name="sgender"
            <?php if (isset($sgender) && $gender=="female") echo "checked";?>
            value="female">Female

            <input type="radio" name="gender"
            <?php if (isset($sgender) && $gender=="other") echo "checked";?>
            value="other">Other
        <br>
		</hr>
		<label for="birthday">Birthday:</label>
 		 <input type="date" id="birthday" name="birthday">
         <input type="submit" name="" value="Submit">
    </form>
</body>
</html>