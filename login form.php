<?php include_once 'includes/dbdata.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet"  href="includes/login.css?v=<?php echo time(); ?>">
        <title> Login </title>
        <script type="text/javascript">
        function validateform(){
            var x = document.forms["login"]["Username"].value;
            if (x==""){
                alert("Username cannot be blank!");
                return false;
            }
            var y = document.forms["login"]["Password"].value;
            if (y==""){
                alert("Password cannot be blank");
                return false;
            }
            var z = document.forms["login"]["rad"].value;
            if(z=="" && x!="admin@school.ac.in"){
                alert("Please select Login type!");
                return false;
            }
            else {
                return true;
            }
        }
    </script>
    </head>
    <div class="title">
         <img src="includes/Images/logo.jpg" alt="Logo of Website" align="left" class="image"> <h1> Name of Website </h1>
    </div>
    <body>
        <div class="dl">
            <form id="login" name="login" autocomplete="off" onsubmit="return validateform()" method="post" action="includes/checkentry.php">
                <table id="th">
                    <th> <h2>Welcome</h2> </th>
                </table>
                <p>
                     <input type="email" name="Username" placeholder="Email" class="f1"/>
                </p>
                <p>
                     <input type="password" name="Password" placeholder="Password" class="f1"/>
                </p>
                <p>
                    <p align="center"> Login type: </p>
                    <input type="radio" class="f1" name="rad" value="Student"> Student
                    <input type="radio" class="f1" name="rad" value="Teacher"> Teacher
                </p>
                <p>
                    <button id="submitbutton" type="submit" form="login">Sign in</button>
                </p>
                <p>
                    New Here? <a href="Register.php">Create Account</a>
                </p>
            </form>
        </div>
    </body>
</html>
