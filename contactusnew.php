<?php
     $error="";
     $salt="gp2021";

        if(!empty($_POST))
        {

    
       
        $fname=$_POST['fname'];        
        $mail=$_POST['mail'];
        $number=$_POST['phone'];
        $pass=$_POST['pass'];
       

       

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

    }

?>


<html lang='en'>
    <head>
        <meta charset='utf-8'>
        <title>REGISTRATION FORM </title>
        <link rel='stylesheet' href='cstyle.css'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    </head>

    <body>
        <?php
           
echo"

<form  method='POST' action='".$_SERVER['PHP_SELF']."'>
        <div class='container'>
       
            <div class='title'>Registration</div>";
    



            
            if ($error!="")
            {
                echo"<div class='alert alert-danger'>
                    <ul>".$error."</ul>
            </div>";
            }

            else
            {

                if(!empty($_POST))
                {
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
                    $sql="INSERT INTO client(fname,mail,phone,pass,date) VALUES ('".$fname."','".$mail."','".$number."','".crypt($pass,$salt)."','".$date."')";
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
            
            
echo" <div class='user-details'>
                    <div class='input-box'>
                        <span class='details'>
                            Full Name
                        </span>
                        <input type='text' style='text-transform:uppercase;' name='fname' placeholder='Enter your name'>
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
                            Photo
                        </span>
                        <input type='file' name='photo'  >
                    </div>
                    <div class='input-box'>
                        <span class='details'>
                            Password
                        </span>
                        <input type='text' placeholder='Enter your password' name='pass'>
                    </div>
                    <div class='input-box'>
                        <span class='details'>
                            Confirm Password
                        </span>
                        <input type='text' placeholder='Confirm your password' >
                    </div>
                </div>
                
                <div class='button'>
                    <input type='submit'  value='Register'>
                </div>

        </div>
    </form>";

    ?>
        
    </body>
</html>