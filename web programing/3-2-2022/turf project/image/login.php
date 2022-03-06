<?php
    require 'connection.php';
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
				background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(image/434959.jpg);
			background-size: cover;
		}
		.box{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			width: 400px;
			padding: 40px;
			background: rgba(0,0,0,0.6);
			border-radius: 10px;
			box-sizing: border-box;
			box-shadow: 0 15px 25px rgba(0,0,0,0.5);
		}
		.box h1{
			margin: 0 0 30px;
			padding: 0;
			color: #00939b;
			text-align: center;
		}
		.box .inputbox{
			position: relative;
		}
		.box .inputbox input{
			width: 100%;
			padding: 10px 0;
			font-size: 16px;
			color: #fff;
			margin-bottom: 30px;
			border-bottom: 1px solid #fff;
			outline: none;
			background: transparent;
			border: none;
		}
		label{
			color: #00939b;
		}
		.box input[type="submit"]{
			background: transparent;
			border: none;
			outline: none;
			color: #fff;
			background: #00939b;
			padding: 10px 20px;
			cursor: pointer;
			border-radius: 5px;
		}
		.footer{
			text-align: center;
			margin-top: 660px;
			color: #fff;
		}
		/* home button css*/
		ul{
	float:  left;
	list-style-type: none;
	margin-top: -45%;
}
ul li{
	display: inline-block;
}
ul li a{
	text-decoration: none;
	color: white;
	padding: 5px 20px;
	border: 1px solid ;
	transition: 0.6s ease;
}
ul li a:hover{
	background-color: #fff;
	color: #000;
}
	</style>
</head>
<body>
	<div>
            <?php
                require 'header.php';
            ?>

	<form method="post" action="login_submit.php">
	
<div class="box">
	<h1><u><b>Login</b></u></h1>
	<div class="inputbox">
		<label><i class="fa fa-user" aria-hidden="true"></i></label>

		<input type="email" name="email" placeholder="Email" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
	</div>
	<div class="inputbox">
		<label><i class="fa fa-lock" aria-hidden="true"></i></label>
		<input type="password" name="password" placeholder="Password" required="" pattern=".{6,}" >
	</div>
	<input type="submit"  value="Login">
</div>
</form>
<div class="footer">
	Don't have an Account?<a href="signup.php">Register</a>
</div>


</div>
</body>
</html>