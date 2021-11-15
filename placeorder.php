
<?php


session_start();
    
    if(!empty($_SESSION['uname']))
    {
        header("Location:login.php");
    }



        $plan=$_GET['plan'];
        // echo $_SESSION['uname'];
         //echo $_SESSION['regid'];
        switch($plan)
        {
            case "1":
                $pname="value";
                $price="799";
                
            break;
            case "2":
                $pname="premium";
                $price="999";
            break;
            case "3":
                $pname="ultra";
                $price="1499";
            break;
            case "4":
                $pname="golden";
                $price="3999";
            break;
            case "5":
                $pname="diamond";
                $price="5999";
            break;
            case "6":
                $pname="ruby";
                $price="9999";
            break; 
            default:
                echo"N/A";
            break;
        }

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
                    $sql="INSERT INTO orders(pname,regid,price,tid,date) VALUES ('".$pname."','".$_SESSION['regid']."','".$price."','123','".$date."')";
                    
                 
                    if($conn->query($sql))
                    {
                        echo"<div class='alert alert-success'>Successfully Ordered</div>";
                    }
                    else{
                     echo"<div class='alert alert-danger'>Not Registered</div>";
                    }
     
                

?>
