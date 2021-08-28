
<?php

require 'inc_login_DB_bikestore.php';

$myconn=inc_login_DB_bikestore::Connect();
if($myconn->connect_error)
{
    echo $myconn->connect_error;
    die('اتصال با سرور برقرار نشد');

}



if(    isset($_POST['userFullName']))
{

    $username = $_POST['userName'];
    $password = $_POST['password'];
    $userPasswordRepeat = $_POST['repeatPassword'];
    $fullname = $_POST['userFullName'];
    $nationalID = $_POST['nationalID'];
    $birthday = $_POST['birthday'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $province=$_POST['province'];
    $Address = $_POST['َaddress'];


    if (empty($username) || empty($password) || empty($fullname) || empty($nationalID) || empty($birthday) || empty($phone || empty($Address))) {
       print("error=empty_fields&userName=" . $username . "&user_Full_name=" . $fullname .
            "&nationalID=" . $nationalID . "&phone=" . $phone . "&Address=" );
        exit();

    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      print("error=invalid_email&email=" . $email);
        exit();

    } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        print("error=username_pattern_missing=" . username);
        exit();

    } else if ($password != $userPasswordRepeat) {
        print("Location:signup.php?error=password_error&email=" . $password);

        exit();

    }
  try{


      $sql = 'SELECT * FROM users WHERE userName=?';
      $stmt = mysqli_stmt_init($myconn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
          print(" the mysql_stmt_prepare_1 is not prepared");
          exit();
      }
      else {
          mysqli_stmt_bind_param($stmt, 's', $username);
          mysqli_stmt_execute($stmt);
          mysqli_stmt_store_result($stmt);
          $resultCheck = mysqli_stmt_num_rows($stmt);
          if ($resultCheck > 0) {
             print("error=userTaken&mail=$email");
              exit();
          }
      }

      $sql = 'SELECT * FROM users WHERE national_id=?';
      $stmt = mysqli_stmt_init($myconn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
          print("ht mysql_stmt_prepare_2 is not prepared");
          exit();
      } else {
          mysqli_stmt_bind_param($stmt, 's', $nationalID);
          mysqli_stmt_execute($stmt);
          mysqli_stmt_store_result($stmt);
          $resultCheck = mysqli_stmt_num_rows($stmt);
          if ($resultCheck > 0) {
              print("error=national_IDTaken&mail=$email");
              exit();
          } else
          {


              $sql = "INSERT INTO users (userName,user_auth_str,fullname,birthday,national_id,phone,email,province,address
)values (?,?,?,?,?,?,?,?,?)";
              $stmt = mysqli_stmt_init($myconn);
              if (!mysqli_stmt_prepare($stmt, $sql)) {

                  print("sql_stmt_prepare_3  is not prepared");
                  exit();
              }
              else {


                  $hashedPWD = password_hash($password, PASSWORD_DEFAULT);
                  mysqli_stmt_bind_param($stmt, "sssssssss", $username, $hashedPWD, $fullname, $birthday,
                      $nationalID,$phone,$email,$province,$Address);
                  mysqli_stmt_execute($stmt);
                 echo mysqli_sqlstate($myconn);
                  echo "ثبت نام شما موفقیت آمیز بود";



              }
          }

      }

  }

    catch(mysqli_sql_exception $e)
    {
        print ('the sql run into an error : '+$e->getMessage());
        print(" the sql error code : "+$e->getCode());


    }
    mysqli_stmt_close($stmt);
    mysqli_close($myconn);

}
else{
    print( "ارسال فرم موفقیت آمیز نبود");
    exit();
}