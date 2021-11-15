<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>











    <?php


        if(!empty($_POST))
        {


        $error="";
        $fname=$_POST['fname'];
        $uname=$_POST['uname'];
        $mail=$_POST['mail'];
        $number=$_POST['phone'];
        $gender=$_POST['gender'];

       

        if($fname=="")
        {
            $error.="<li>Name Is Mandatory</li>";
        }
         elseif(strlen($fname>3))
         {
             $error.="<li>Name - Min 3 Character Required</li>";
         }
    

        elseif(!preg_match("/^[a-zA-Z .]+$/",$fname))
        {
            $error.="<li>Invalid Name</li>";
        }
       



        if($uname=="")
        {
            $error.="<li>Username Is Mandatory</li>";
        }
        elseif(strlen($uname>3))
        {
            $error.="<li>Username - Min 3 Character Required</li>";
        }
        

       



        

        if($mail=="")
        {
            $error.="<li>Mail Is Mandatory</li>";
        }
        elseif(!filter_var($mail , FILTER_VALIDATE_EMAIL))
        {
            $error.="<li>Invalid Email</li>";
        }







        if($number=="")
        {
            $error.="<li>Number Is Mandatory</li>";
        }

        elseif(!preg_match("/^[0-9]+$/",$number))
        {
            $error.="<li>Invalid Mobile-number</li>";
        }
        // elseif(strlen($number!=10))
        // {
        //     $error.="<li>Mail - Min 10 Character Required</li>";
        // }
        


                    if ($error!="")
            {
                echo"<div class='alert alert-danger'>
                    <ul>".$error."</ul>
            </div>";
            }

else
{
   $dbname="web";
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
   $sql="INSERT INTO dets(fname,uname,mail,phone,pass,gender,date) VALUES ('".$fname."','".$uname."','".$mail."','".$number."','".$password."','".$gender."','".$date."')";
   // echo "$sql";

   if($conn->query($sql))
   {
       echo"<div class='alert alert-success'>Successfully Registered</div>";
   }
   else{
    echo"<div class='alert alert-danger'>Not Registered</div>";
   }
}


        }           
         

            
            
            


         
    ?>








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html> 















<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>REGISTRATION FORM </title>
        <link rel="stylesheet" href="cstyle.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>

    <body>
        <div class="container">
            <div class="title">Registration</div>
            <?php


                echo"
                <form  method='POST' action='".$_SERVER['PHP_SELF']."'>
                <div class='user-details'>
                    <div class='input-box'>
                        <span class='details'>
                            Full Name
                        </span>
                        <input type='text' style='text-transform:uppercase;' name='fname' placeholder='Enter your name'>
                    </div>
                    <div class='input-box'>
                        <span class='details'>
                            Username
                        </span>
                        <input type='text' style='text-transform:uppercase;' name='uname' placeholder='Enter your username'>
                    </div>
                    <div class='input-box'>
                        <span class='details'>
                            Email
                        </span>
                        <input type='text' name='mail' placeholder='Enter your email' >
                    </div>
                    <div class='input-box'>
                        <span class='details'>
                            Phone Number
                        </span>
                        <input type='text' name='phone' placeholder='Enter your number' >
                    </div>
                    <div class='input-box'>
                        <span class='details'>
                            Password
                        </span>
                        <input type='text' placeholder='Enter your password' >
                    </div>
                    <div class='input-box'>
                        <span class='details'>
                            Confirm Password
                        </span>
                        <input type='text' placeholder='Confirm your password' >
                    </div>
                </div>
                <div class='gender-details'>
                    <input type='radio' name='gender' id='dot-1'>
                    <input type='radio' name='gender' id='dot-2'>
                    <input type='radio' name='gender' id='dot-3'>
                   <span class='gender-title'>
                       Gender
                   </span> 
                   <div class='category'>
                       <label for='dot-1'>
                            <span class='dot one'>

                            </span>
                            <span class='gender'>
                                Male
                            </span>
                       </label>
                       <label for='dot-2'>
                            <span class='dot two'>

                            </span>
                            <span class='gender'>
                                Female
                            </span>
                       </label>
                       <label for='dot-3'>
                            <span class='dot three'>

                            </span>
                            <span class='gender'>
                                Prefer not to say
                            </span>
                       </label>
                   </div>

                </div>


                <div class='button'>
                    <input type='submit'  value='Register'>
                </div>

            </form>";
                


            ?>
        </div>
    </body>
</html>