<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Student Registration</title>
        <link rel="stylesheet" href="reg.css">
    </head>
    <body>
        <?php
            $pw = $_POST['pwd'];
            $n = $_POST['name'];
            $e = $_POST['email'];
            $c = $_POST['phone'];
            $d = $_POST['dob'];
            include_once 'dbdata.php';
            $sql = "insert into Student(Name,Email,Phone,DOB,pwd) values('$n','$e','$c','$d','$pw');";
            $result = mysqli_query($conn,$sql);
            $idq = "select ID from Student where Email='$e';";
            $id = mysqli_fetch_assoc(mysqli_query($conn,$idq));
            $sid = $id['ID'];
        ?>
        <div class="dl">
            <div id="register">
                <h2> Registration Complete! </h2>
                <p> Allocated Student ID: <?php echo $sid ?></p>
                <a href="../login form.php"> Click Here to Log in </a>
            </div>

        </div>
    </body>
</html>
