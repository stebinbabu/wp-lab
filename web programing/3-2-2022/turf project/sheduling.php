<?php
include 'connection.php';
 require 'header.php';
 session_start();

if (isset($_POST['submit'])) {
  # code...
  $user_id=$_SESSION['users_id'];
  $fname=$_POST['fname'];
  $mobileno=$_POST['mobileno'];
  $qty=$_POST['nplayers'];
  $time=$_POST['time'];
  $query="INSERT INTO sheduling(`id`,`fname`,`mobileno`,`qty`,`time`)
        VALUES('$user_id','$fname','$mobileno','$qty','$time')";
        $result=mysqli_query($con,$query) or die(mysqli_error($con));
  
       
        if (!$result) {
          # code...
          echo "Insertion Failed".mysql_error();
        }
}
?>

<html>
<head>
<script type="text/javascript" src="validate.js"></script>
</head>
<body>
<form action="ready.php" name="Shedule" method="POST" onsubmit="return(validate());">

<table cellpadding="2" width="20%" bgcolor="99FFFF" align="center"
cellspacing="2">

<tr>
<td colspan=2>
<center><font size=4><b>Sheduling time</b></font></center>
</td>
</tr>

<tr>
<td>Enter your FullName</td>
<td><input type="text" name="fname" id="fname" ></td>
</tr>

<tr>
<td>MobileNo</td>
<td><input type="text" name="mobileno" id="mobileno"  maxlength="10"></td>
</tr>

<tr>
<td>Number of players</td>
<td><input type="number" name="nplayers" id="qty" ></td>
</tr>

<tr>
<td> select your time
<select name="time" id="time">
  <option value="6am">6 am</option>
  <option value="7.30am">7.30am</option>
  <option value="10am">10 am</option>
  <option value="3pm">3pm</option>
<option value="4pm">4pm</option>
<option value="5.30pm">5.30pm</option>
<option value="7pm">7 pm</option>
<option value="8pm">8pm</option>
<option value="9pm">9pm</option>
<option value="10pm">10pm</option></td>
</tr>



<tr>
<td>Do you want sports accessories</td>
<td><input type="radio" name="stock" value="yes"  >Yes
<input type="radio" name="stock" value="no" >No</td>
</tr>


<tr>
<td>Does  players are vaccinted</td>
<td><input type="radio" name="store" value="yes"  >Yes
<input type="radio" name="store" value="no" >No</td>
</tr>



<tr>
<td><input type="reset"></td>
<td><input type="submit" name="submit" value="submit">confirm booking</a></button></td>
</tr>
</table>
</form>
</body>
</html>

