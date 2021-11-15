<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>
    <body>
    <?php

    
        if(!empty($_POST))
        {

        $error="";
        $email=$_POST['email'];



        

        

        if($email=="")
        {
            $error.="<li>Email Is Mandatory</li>";
        }
        elseif(strlen($email>3))
        {
            $error.="<li>Email - Min 10 Character Required</li>";
        }
        elseif(!filter_var($email , FILTER_VALIDATE_EMAIL))
        {
            $error.="<li>Invalid Email</li>";
        }

        
        if ($error!="")
        {
            echo"<div class='alert alert-danger'>
                <ul>".$error."</ul>
            </div>";
        }


        // else{

        //     echo"<div class='alert alert-success'>
        //         Successfully Submitted
        //         </div>";

        // }

         else{
                 $dbname="dets";
                 $hostname="localhost";
                 $username="root";
                 $password="";
                 date_default_timezone_set("Asia/Kolkata");
                 $date=date("Y-m-d H:i:s");

                 $conn=new mysqli($hostname,$username,$password,$dbname);

                 if($conn->connect_error)
                 {
                     echo"Connection Error";
                    
                 }

                 $sql="INSERT INTO dets(email,pass,date) VALUES ('".$email."','".$password."','".$date."')";
                // echo"$sql";

                if($conn->query($sql))
                {
                    echo"Successfully Registered";
                }
                else{
                    echo"NOT REGISTERED";
                }
         

         }

        }
        

    ?>
    </body>
</html> 




























<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="astyle.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>

    <title>Admin Form</title>
  </head>
  <body>

  

  <div class="login-wrap">
  <?php
  echo"
  <form method='POST' action='".$_SERVER['PHP_SELF']."'>
  <div class='login-html'>
      <input id='tab-1' type='radio' name='tab' class='sign-in' checked><label for='tab-1' class='tab'>Sign In</label>
      <input id='tab-2' type='radio' name='tab' class='for-pwd'><label for='tab-2' class='tab'>Forgot Password</label>
      <div class='login-form'>
          <div class='sign-in-htm'>
              <div class='group'>
                  <label for='user' class='label'>Email</label>
                  <input id='user' type='text' name='email' class='input'>
              </div>
              <div class='group'>
                  <label for='pass' class='label'>Password</label>
                  <input id='pass' type='password' class='input' data-type='password'>
              </div>
              <div class='group'>
              <input type='submit' class='button' value='Sign In'>
              </div>
              <div class='hr'></div>
          </div>
          <div class='for-pwd-htm'>
              <div class='group'>
                  <label for='user' class='label'>Email</label>
                  <input id='user' type='text' class='input'>
              </div>
              <div class='group'>
                  <a href=''><input type='submit' class='button' value='Reset Password'></a>
              </div>
              <div class='hr'></div>
          </div>
      </div>
  </div>
</form>";
  
  
  
  ?>
</div>



  


  </body>
</html>