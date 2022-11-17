<?php
    $un = $_POST['Username'];
    $pw = $_POST['Password'];
    $lt = $_POST['rad'];
    $table = "";
    if($un=='admin@school.ac.in' && $pw=="admin"){
        header('Location: ../admin.php');
        exit;
    }
    else{
        include_once 'dbdata.php';
        if($lt=="Student")
            $sql = "select * from Student where Email='$un';";
        else
            $sql = "select * from Teacher where Email='$un';";
        $result = mysqli_query($conn,$sql);
        $flag = mysqli_num_rows($result);
        if ($flag)
        {
            $row = mysqli_fetch_assoc($result);
            if ($row['Email']==$un && $row['pwd']==$pw)
            {
                if($lt=="Student"){
                    header('Location: ../student.php');
                    exit;
                }
                else if($lt=="Teacher"){
                    header('Location: ../teacher.php');
                }
            }
        }
    }
?>
