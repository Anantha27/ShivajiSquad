<?php require 'connections/connect.php';?>


<head>
    <meta charset="UTF-8">
    <title>SQUAD</title>
<link href="css/Master.css" rel="stylesheet" type="text/css" />
 <link href="css/Menu.css" rel="stylesheet" type="text/css" /> 
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/> 
<script src="javascript/bootstrap.js"></script>    
</head>
<body>
     <h2>Shivaji: Let's break up the chain to corruption </h2>


<div id="tabs">
  <ul>
    <li><a href="index.html"><span>HOME</span></a></li>
    <li><a href="reg.php"><span>REGISTER</span></a></li>
    <li><a href="#"><span>ABOUT US</span></a></li>
    <li><a href="#"><span>CONTACT US</span></a></li>
     </ul>
    </div>
   
&nbsp;
&nbsp;    
<h3> LIST OF ALL REPORTS </h3>    
  
  <?php
      $stmt = $con->query("SELECT * FROM report");
echo "<table border='1' cellpadding='2'";
echo "<tr><td>RepNo.</td><td>Topic</td><td>Name</td><td>Date</td><td>Time</td><td>Status</td>";
while ($row = $stmt->fetch_array()) {
    $name = $row['name'];
    
    $topic = $row['topic'];
    $date = $row['date'];
    $time = $row['time'];
    $repno=$row['repno'];
    $status=$row['status'];
        echo "<tr>";
    
        echo "<td>".$repno."</td>";
         echo "<td>".$topic."</td>";
         echo "<td>".$name."</td>";
        echo "<td >".$date."</td>";
         echo "<td>".$time."</td>";
        echo "<td>".$status."</td>";    
      echo "</tr>";
}
   
$stmt->free();
$con->close();
?>
  