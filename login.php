
<?php


    session_start();
    
    if(!empty($_SESSION['uname']))
    {
        header("Location:index.php");
    }
    $error="";

    
    if(!empty($_POST))
    {
       
        $uname=$_POST['uname'];
        $pass=$_POST['pass'];





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

        


        $sql="SELECT * FROM dets WHERE mail='".$uname."' AND pass='".md5($pass)."'";
        
        

        if($uname=="")
        {
            $error.="<li>Mail Is Mandatory</li>";
        }
        elseif(!filter_var($uname , FILTER_VALIDATE_EMAIL))
        {
            $error.="<li>Invalid Email</li>";
        }


        if($pass=="")
        {
            $error.="<li>Password Is Mandatory</li>";
        }



        if($result=mysqli_query($conn,$sql))
        {
            if(mysqli_num_rows($result)>0)
            {
                 echo "Successfully Submitted";

                
                $row=mysqli_fetch_array($result);
                $_SESSION['uname']=$row['fname'];
                $_SESSION['regid']=$row['regid'];
                $_SESSION['mail']=$row['mail'];
                $_SESSION['phone']=$row['phone'];
                $_SESSION['date']=$row['date'];
                
               // echo $_SESSION['uname'];
                //echo $_SESSION['regid'];
               // header("Location:index.php");
            }

             else{
                 $error.="<li>Mail Or Password Is Inavlid</li>";
             }

        }




    }        
?>

<html>
    <head>
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
    </head>

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    <?php



                        if ($error!="")
                        {
                            echo"<div class='alert alert-danger'>
                                <ul>".$error."</ul>
                        </div>";
                        }

                        


                        echo"
                    <form id='login-form' class='form' action='".$_SERVER['PHP_SELF']."' method='POST'>

                        <h3 class='text-center text-info'>Login</h3>
                        <div class='form-group'>
                            <label for='username' class='text-info'>Username (E-mail):</label><br>
                            <input type='text' name='uname' id='uname' class='form-control'>
                        </div>
                        <div class='form-group'>
                            <label for='password' class='text-info'>Password (Mobile.No):</label><br>
                            <input type='text' name='pass' id='pwd' class='form-control'>
                        </div>
                        <div class='form-group'>
                            <label for='remember-me' class='text-info'><span>Remember me</span> <span><input id='remember-me' name='remember-me' type='checkbox'></span></label><br>
                            <input type='submit' name='submit' class='btn btn-info btn-md' value='submit'>
                        </div>
                        <div id='register-link' class='text-right'>
                            <a href='#' class='text-info'>Register here</a>
                        </div>


                    </form>";
                        
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
