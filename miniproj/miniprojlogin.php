<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="./logincheck.php" method="POST">
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
                
        </fieldset>
    </form>
</body>
</html>