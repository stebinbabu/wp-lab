<?php
    session_start();
    require 'connection.php';
    function build_calender($month,$year){
$daysOfWeek = array('Sunday', 'Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
$firstDayOfMonth = mktime(0,0,0,$month,1,$year);
$numberDays = date('t',$firstDayOfMonth);   
$dateComponents = getdate($firstDayOfMonth);
$monthName = $dateComponents['month'];
$dayOfWeek = $dateComponents['wday'];
$datetoday = date('Y-m-d'); 
$calendar = "<table class='table table-bordered'>"; 
$calendar .= "<center><h2>$monthName $year</h2></center>";

$calendar .= "<tr>"; 
// Create the calendar headers 
foreach($daysOfWeek as $day) { 
     $calendar .= "<th class='header'>$day</th>"; 
}   
$calendar .= "</tr><tr>";
if($dayOfWeek > 0) { 
    for($k=0;$k<$dayOfWeek;$k++){ 
        $calendar .= "<td></td>"; 
    } 
}
$currentDay = 1;
$month = str_pad($month, 2, "0", STR_PAD_LEFT);
while ($currentDay <= $numberDays) { 
    //Seventh column (Saturday) reached. Start a new row. 
    if ($dayOfWeek == 7) { 
        $dayOfWeek = 0; 
        $calendar .= "<tr></tr>"; 
    } 
    $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT); 
    $date = "$year-$month-$currentDayRel";  
    $dayname = strtolower(date('l', strtotime($date)));
         $eventNum = 0;
          $calendar.="<td><button><a href='sheduling.php'>book</a></button>";
          if($datetoday==$date){
   $calendar.="<td class='today'><h4>$currentDay</h4>"; 
}else{
    $calendar.="<td><h4>$currentDay</h4>";
}

    
    $calendar .="</td>"; 
    //Increment counters 
    $currentDay++; 
    $dayOfWeek++; 
} 
//Complete the row of the last week in month, if necessary 
if ($dayOfWeek != 7) { 
    $remainingDays = 7 - $dayOfWeek; 
    for($l=0;$l<$remainingDays;$l++){ 
        $calendar .= "<td></td>"; 
    } 
} 

$calendar .= "</tr>"; 
$calendar .= "</table>";
echo $calendar;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
 table {
    table-layout: fixed;  
    border-collapse: collapse;
}  
} 
    td {
    width: 33%;
    text-align: center;
}
.today{
background:yellow;
}


body {
  background-color: #355461;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
  }
  .btn{
   
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #f2f2f2;
  color: black;
  font-size: 16px;
  padding: 16px 30px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.btn:hover {
  background-color: #355461 ;
  color: #000;
  
</style>
</head>
<body>
    <form action="scheduling.php" method="POST">
<div>
  <?php
                require 'header.php';
            ?>

<!-- MAIN (Center website) -->
  <div class="main">

  <h1>SLOT BOOKING PAGE</h1>
  <hr>
<?php 
      $dateComponents = getdate(); 
      $month = $dateComponents['mon']; 
      $year = $dateComponents['year']; 
      echo build_calender($month,$year); 
     ?>  
  
                            </center>
      <h3></h3>
      <p></p>
    </div>
  </div>
  </div>
  </div>
</div>
</body>
</html>
