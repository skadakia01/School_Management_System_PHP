<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Create Account</title>
        <link rel="stylesheet" href="includes/reg.css?v=<?php echo time(); ?>">
        <script type="text/javascript" src="includes/validation.js"></script>
    </head>
    <body>
        <div class="dl">
            <form id="register" name="register" onsubmit="return validate()" autocomplete="off" action="includes/regdb.php" method="post">
                <table id="reg">
                    <th> <h2> Create Account </h2> </th>
                </table>
                <p> <input type="text" name="name" placeholder="Full Name" class="f1"> </p>
                <p> <input type="text" name="email" placeholder="Email Address" class="f1"> </p>
                <p> <input type="text" name="phone" placeholder="Contact Number" class="f1"> </p>
                <p> <input type="date" name="dob" placeholder="Date Of Birth" class="f1"> </p>
                <p> <input type="password" name="pwd" placeholder="Password" class="f1"> </p>
                <p> <input type="password" name="cpwd" placeholder="Confirm Password" class="f1"> </p>
                <p> <button id="submitbutton" type="submit" form="register">Register</button> </p>
                <p> Already Registered? <a href="login form.php">Log in instead</a> </p>
            </form>
        </div>
    </body>
</html>
