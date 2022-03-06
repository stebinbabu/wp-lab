<?php
    require 'connection.php';
    session_start();
    if(isset($_SESSION['email'])){
        header('location: products.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
            body{
    background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(image/football.jpg);
    background-image: 100%;
    background-size: cover;
    background-position: center;
  background-attachment: fixed;
 
}
            form{
            position: absolute;
            top: 80%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400px;
            height: 800px;
            padding: 40px;
            background: rgba(0,0,0,0.6);
            border-radius: 10px;
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0,0,0,0.5);
        }
        .form-control{
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border-bottom: 1px solid #fff;
            outline: hidden;
            background: transparent;
            border: none;
            position: relative;
        }
        input[type="submit"]{
            margin-top: 15px;
            background: transparent;
            border: none;
            outline: none;
            color: #fff;
            background:#6b5e32;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        .footer{
            text-align: center;
            margin-top: 880px;
            color: #fff;
            font-family: arial;
        }
        .footer a{
            background: transparent;
            border: none;
            outline: none;
            color: #fff;
            background:lightslategrey;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;

        }
        label{
            color: #6b5e32;
            font-family: sans-serif;
            font-size: 20px;
        }
        h2{
            color: lightgrey;
            font-size: 50px;
            margin-top: -20px;
        }
        </style>
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br><br>
            <center>
            <div class="container">
                <div class="row">
                  <h2><u>Registration Form</u></h2>
                        <form method="post" action="user_registration_script.php">
                            <label>Full Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                                <br>
                            <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                <br>
                                <label>City</label>
                                <input type="text" class="form-control" name="city" placeholder="City" required="true">
                                <label>District</label>
                                <input type="text" class="form-control" name="district" placeholder="District" required="true">
                            
                            <label>Contact Number</label>
                                <input type="tel" class="form-control" name="contact" placeholder="Contact" required="true" maxlength="10" >
                                <br>
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}" maxlength="12">
                                <br>
                                <label> Confirm Password</label>
                                <input type="password" class="form-control" name="cpassword" placeholder=" ConfirmPassword" required="true" pattern=".{6,}" maxlength="12">
                                <br>
                                <input type="submit" class="btn btn-primary" value="Sign Up">
                            </div>
                         </div>
                    </form>
            <br><br><br>
           <footer class="footer">
                   Already have an Account?<a href="login.php">Login here</a>
               </p>
             </center>
           </footer>

        </div>
    </body>
</html>
