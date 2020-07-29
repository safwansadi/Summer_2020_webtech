
<?php
        if (! empty($response)) {
            ?>
<div id="response" class="<?php echo $response["type"]; ?>
    ">
    <?php echo $response["message"]; ?>
</div>
<?php
        }
        ?>
<form action="" method="POST" onsubmit="return signupvalidation()">
    <div class="row">
        <label>Name</label><span id="name_error"></span>
        <div>
            <input type="text" class="form-control" name="name"
                id="name" placeholder="Enter your name">

        </div>
    </div>

    <div class="row">
        <label>Email</label><span id="email_error"></span>
        <div>
            <input type="text" name="email" id="email"
                class="form-control" placeholder="Enter your Email ID">

        </div>
    </div>

    <div class="row">
        <label>Password</label><span id="password_error"></span>
        <div>
            <input type="Password" name="password" id="password"
                class="form-control" placeholder="Enter your password">

        </div>
    </div>

    <div class="row">
        <label>Confirm Password</label><span id="confirm_password_error"></span>
        <div>
            <input type="password" name="confirm_pasword"
                id="confirm_pasword" class="form-control"
                placeholder="Re-enter your password">

        </div>
    </div>

    <div class="row">
        <div align="center">
            <button type="submit" name="submit" class="btn signup">Sign
                Up</button>
        </div>
    </div>

<div class="row">
    <div>
        <a href="login.php"><button type="button" name="submit"
                class="btn login">Login</button></a>
    </div>
</div>

</form>