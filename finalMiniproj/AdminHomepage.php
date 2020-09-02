<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Homepage</title>
</head>
<body>
    <div>

    <h1>Welcome <?php 
        if(isset($_SESSION['Name'])){
            echo $_SESSION['Name'];
        } 
    ?> 
    </h1>    
    </div>

    <div>
        <h1>What Do You Want To Do ? <h1>
    </div>

    <div class="activity_section">
        <form action="?" method="POST">
            <table>
                <tr>
                    <td><input type="submit" name="show_info" value="ADMIN PORTAL"></td>
                </tr>
                
                <tr>
                    <td><input type="submit" name="show_doctor_req" value="DOCTOR REQUESTS"></td>
                </tr>
                
                <tr>
                    <td><input type="submit" name="show_patient_req" value="PATIENT REQUESTS"></td>
                </tr>

                <tr>
                    <td><input type="submit" name="logout" value="LOGOUT"></td>
                </tr>
            </table>
        </form>
    </div>

    <?php
        if(isset($_POST['logout'])) {
            header("Location: ./AdminFacade.php");
            session_destroy();

        }

        if(isset($_POST['show_doctor_req'])) {
            header("Location: ./Requests/Doctor_Requests.php");
          

        }

        if(isset($_POST['show_patient_req'])) {
            header("Location: ./AdminFacade.php");
      
        }

        if(isset($_POST['show_info'])) {
            header("Location: ./Requests/AdminUser.html");
        }

    ?>

</body>
</html>