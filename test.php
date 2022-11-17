<?php include_once 'includes/dbdata.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form id="login" name="login" method="post" action="includes/checkentry.php">
            <h2> Sign In</h2>
            <p>
                 <input type="text" name="Username" placeholder="username" class="f1"/>
            </p>
            <p>
                 <input type="password" name="Password" placeholder="password" class="f1"/>
            </p>
            <p>
                <button id="submitbutton" type="submit" form="login">Sign in</button>
            </p>
        </form>
    </body>
</html>
