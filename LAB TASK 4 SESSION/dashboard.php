<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>
</head>
<body>
    <form>
        
        <table>
            <img src="images/logo.png">
            <td>Logged in as <?php

                echo $_COOKIE["userName"]
                
                
                ?> </td>

            <tr>
                <td><a href="dashboard.php">Dashboard</a></td>
            </tr>
            <tr>
                <td><a href="">View Profile</a></td>
            </tr>
            <tr>
                <td><a href="edit_profile.html">Edit Profile</a></td>
            </tr>
            <tr>
                <td><a href="">Chanage Profile Picture</a></td>
            </tr>
            <tr>
                <td><a href="">Change Password</a></td>
            </tr>
            <tr>
                <td><a href="logout.php">Logout</a></td>
            </tr>

            <tr>
                <td></td>
                <td>Welcome <?php echo $_COOKIE["userName"]; ?> </td>
            </tr>

        </table>
    </form>
    
</body>
</html>