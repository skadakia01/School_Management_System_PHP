<?php include_once 'includes/dbdata.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title> School Admin </title>
        <link rel="stylesheet" href="includes/Panels.css">
    </head>
    <?php
        $sql = "select * from Student;";
        $result = mysqli_query($conn,$sql);
        $stuNum = mysqli_num_rows($result);
        $sql = "select * from Subject;";
        $result = mysqli_query($conn,$sql);
        $subNum = mysqli_num_rows($result);
        $sql = "select * from Teacher;";
        $result = mysqli_query($conn,$sql);
        $tNum = mysqli_num_rows($result);
        $sql = "select * from Marks;";
        $result = mysqli_query($conn,$sql);
        $mNum = mysqli_num_rows($result);
        $sql = "select * from fees;";
        $result = mysqli_query($conn,$sql);
        $fNum = mysqli_num_rows($result);
    ?>

    <body>
        <div id="title"><h1> Admin Dashboard </h1></div>
        <a href="View Data/Studentad.php" ><div class="admin">
             <img src="includes/Images/student.png" alt="Student Avatar"> <p class="menu">Student Details <br> <?php echo $stuNum ?> </p>
            <hr width="90%">
        </div> </a>
        <a href="View Data/Subjectad.php" >
             <div class="admin">
            <img src="includes/Images/Subjects.png" alt="Subject Icon"> <p class="menu">Subject Details <br> <?php echo $subNum ?> </p>
            <hr width="90%">
        </div> </a>
        <a href="View Data/Teacherad.php" > <div class="admin">
            <img src="includes/Images/Teacher.png" alt="Teacher Icon"> <p class="menu">Teacher Details <br> <?php echo $tNum ?> </p>
            <hr width="90%">
        </div> </a>
        <a href="View Data/Marksad.php" > <div class="admin">
            <img src="includes/Images/marks.png" alt="Marks Icon"> <p class="menu">Student marks Details <br> <?php echo $mNum ?> </p>
            <hr width="90%">
        </div> </a>
        <a href="View Data/Feesad.php" > <div class="admin">
            <img src="includes/Images/fee.png" alt="Fees Icon"> <p class="menu">Fee Payment Details <br> <?php echo $fNum ?> </p>
            <hr width="90%">
        </div> </a>
    </body>
</html>
