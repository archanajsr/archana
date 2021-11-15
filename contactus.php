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
            <form  method="POST" action="contact.php">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">
                            Full Name
                        </span>
                        <input type="text" style="text-transform:uppercase;" name="fname" placeholder="Enter your name">
                    </div>
                    <div class="input-box">
                        <span class="details">
                            Username
                        </span>
                        <input type="text" style="text-transform:uppercase;" name="uname" placeholder="Enter your username">
                    </div>
                    <div class="input-box">
                        <span class="details">
                            Email
                        </span>
                        <input type="text" name="mail" placeholder="Enter your email" >
                    </div>
                    <div class="input-box">
                        <span class="details">
                            Phone Number
                        </span>
                        <input type="text" name="phone" placeholder="Enter your number" >
                    </div>
                    <div class="input-box">
                        <span class="details">
                            Password
                        </span>
                        <input type="text" placeholder="Enter your password" >
                    </div>
                    <div class="input-box">
                        <span class="details">
                            Confirm Password
                        </span>
                        <input type="text" placeholder="Confirm your password" >
                    </div>
                </div>
                
                <div class="button">
                    <input type="submit"  value="Register">
                </div>

            </form>
        </div>
    </body>
</html>