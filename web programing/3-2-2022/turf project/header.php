<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #596970;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>
</head>
<body>

<div class="header">
             <a href="index.php" class="logo"><b>club 35 turf</b></a>
                   
                   
                   
                       <div class="header-right">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           
                           <a href="logout.php"> Logout</a>
                           <?php
                           }else{
                            ?>
                            <a href="signup.php"> Sign Up</a>
                           <a href="login.php"> Login</a>
                           <?php
                           }
                           ?>
                           
                       </div>
                 
</div>
</body>
</html>