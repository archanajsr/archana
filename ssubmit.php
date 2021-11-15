<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>
    <body>
    <?php
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


        else{

            echo"<div class='alert alert-success'>
                Successfully Submitted

        </div>";

        }
        

    ?>
    </body>
</html>