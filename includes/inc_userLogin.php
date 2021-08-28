<?php

require "inc_login_DB_bikestore.php";
if(isset($_POST['login'])) {
    $user_name = $_POST['userName'];
    $password = $_POST['password'];


    $conn = inc_login_DB_bikestore::Connect();

    $sql = "SELECT * FROM users WHERE username=? ";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "<script>document.write('SQL ERROR !!!')</script>";
        exit();
    } else {

        mysqli_stmt_bind_param($stmt, "s", $user_name);
        mysqli_stmt_execute($stmt);
        $sql_result = mysqli_stmt_get_result($stmt);
        $number_rows = mysqli_num_rows($sql_result);
        if ($number_rows < 1) {
            echo "<script>alert('نام کابری موجود نیست') </script>";
            echo "<h1><a href='../home.php'>خانه</a></h1>";
            exit();
        } else {
            $row = mysqli_fetch_assoc($sql_result);
            $pwd = $row['password'];
            $checkPWD = password_verify($password, $pwd);
            if ($checkPWD) {
               session_start();
               $_SESSION['$uid']=$row['username'];
               header("Location: ../home.php");
            } else {
                echo " رمز عبور صحیح نیست";
                   echo"<h1><a href='../home.php'>خانه</a></h1>";
            }
        }


    }
}
else
{
    echo "echo \"<h1><a href='../home.php'>خانه</a></h1>";
}
