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


        $error="";
        $fname=$_POST['fname'];
        $uname=$_POST['uname'];
        $mail=$_POST['mail'];
        $number=$_POST['phone'];
        $filename=$_FILES["photo"]["name"];
        $filesize=$_FILES["photo"]["size"];
        $filetype=$_FILES["photo"]["type"];

        $faname=explode(".",$filename);
        // echo$fname[0];

        $time=time();
        // echo $time;

        $filenamenew="".$faname[0]."_".time().".".$faname[1]."";

         echo $filenamenew;
        
        

       

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



            // echo$filetype;

        if($filetype!='image/jpeg' && $filetype!='image/png') 
        {
            $error.="Invalid File Format";
        }
        
        if($filesize>2097152)
        {
            $error.="File Size Exced To 2MB";
        }




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
            $sql="INSERT INTO dets(fname,uname,mail,phone,pass,date,photo) VALUES ('".$fname."','".$uname."','".$mail."','".$number."','".$password."','".$date."','".$filenamenew."')";
            // echo "$sql";

            if($conn->query($sql))
            {
                echo"Successfully Registered";
            }
            else{
                echo"NOT REGISTERED";
            }

            move_uploaded_file($_FILES["photo"]["tmp_name"],"Uploads/".$filenamenew);
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