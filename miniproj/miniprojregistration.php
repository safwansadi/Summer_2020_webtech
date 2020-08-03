<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form action="" method="POST">
        <fieldset>
            <legend> Registration </legend>
            <table>
                <tr>
                    <td>Id </td>
                    <td><input type="text" name="uid" > </td> 
                </tr>
                <tr>
                    <td>Password </td>
                    <td><input type="password" name="upassword" > </td> 
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type="password" name="ucpassword"> </td> 
                </tr>
                <tr>
                    <?php
                        if($_POST['upassword'] != $_POST['ucpassword']){
                            echo "Password should be matched";
                        }
                    ?>
                </tr>
                <tr>
                    <td> Name </td>
                    <td><input type="text" name="uname" > </td> 
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="uemail"> </td> 
                </tr>
                <tr>
                    <td>User Type [User/Admin]
                    <hr>
                    </td>
                </tr>
                
                <tr>
                   <td>
                   <select id="uprofile" name="uprofile">
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                   </td> 
                </tr>
                
                <tr>
                    <td><input type="submit" name="uregister" value="Register" ></td>
                    <td><a href="./login">Login</a></td>
                </tr>

                <tr>
                    <?php
                        if(isset($_POST['uregister'])){
                            $myfile = fopen("summertest.txt", "w") or die("Unable to open file!");;
                            $userID = $_POST['uid'] ;
                            fwrite($myfile, $userID);
                            $userPass = $_POST['upassword'];
                            fwrite($myfile, $userPass);
                            fclose($myfile);
                        } else {
                            echo "Please add Profile Description";
                        }
                    ?>
                </tr>
                <!-- For testing -->
                 <tr> 
                    <?php
                        $myfile = fopen("summertest.txt", "r") or die("Unable to open file!");
                        echo fgets($myfile);
                        fclose($myfile);
                    ?>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
