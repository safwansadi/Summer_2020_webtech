<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="" method="POST">
        <fieldset>
           <legend>Login </legend>
           <table>
               <tr>
                   <td>User Id </td>
                   <td><input type="text" name="uid" ></td>
                </tr>
                <tr>
                   <td>Password </td>
                   <td><input type="password" name="password"></td>
                </tr>
                
                <tr>  
                    <td>
                        <input name="remember" type="checkbox">Remember Me
                        <br/>
                        <hr>
                    </td> 
                </tr>
            

                <tr>
                   <td><input type="submit" name="ulogin" value="Login" ></td>
                   <td><a href="./registration">Register</a></td>
                </tr>

                <tr>
                    <td>
                        <?php
                        if(isset($_POST['ulogin'])){
                            $myfile = fopen("summertest.txt", "r");
                            $temp = fgets($myfile);
                            if($temp == $_POST['uid']) {
                                header("Location: ./homepage.php");
                            } else{
                                echo "Register Yourself First ";
                            }
                        }
                        ?>
                    </td>
                </tr>
                

        </fieldset>
    </form>
</body>
</html>