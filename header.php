
<?php
//session_start();
//echo "<script>  login=document.getElementById('loginLink');
//                   let logout=document.getElementById('logoutLink')</script>";
//if(isset($_SESSION['uid']))
//{
//
//    //echo "<script>login.visibility='hidden'</script>";
//
//
//
//}
//else{
//
//}
?>


    <div class="headerDiv">
        <div  class="headerRightDiv">
              <div class="linkHeaderDiv">
                  <a   id="regLink">ثبت نام</a>
                  <a  id="loginLink">ورود</a>
              </div>

              <div class="formsDiv">
                  <div id="regDIV">
                      <?php require "signup.php" ?>
                  </div>

                  <div id='signUpDiv' class="signup">
                      <form name='loginForm' id='loginForm' class='form' method="post" action="includes/inc_userLogin.php">
                          <input type='text' id='userName'  name ='userName' placeholder='username' ><br>
                          <input type='password' name='password' id='password' placeholder='password' ><br>
                          <input type='submit' value='ورود' id='submit' onclick='validLoginForm()' name="login">
                          <input type='submit' value='فراموشی رمز عبور'  id='submit' style='color: red'>
                      </form>
                 </div>
        </div>
        </div>

        <div id="figure" class="headerLeftDiv">
             <img src="img/cubetwo.jpg" width="1500px">
        </div>
    </div>


    <div id="selectHeaderImage">
        <label for="Attention">Attention</label><input type="radio" name="image_header" id="Attention" >
        <label for="Elite">Elite</label><input type="radio" name="image_header" id="Elite" >
    </div>





    <script src="js/header.js"></script>