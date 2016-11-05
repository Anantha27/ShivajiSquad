<?php require 'connections/connect.php';?>
<?php
session_start();
if(isset($_SESSION["name"]))
{}
else{
	header('Location:login.php');
}
?>

<head>
    <meta charset="UTF-8">
    <title>SQUAD</title>
<link href="css/Master.css" rel="stylesheet" type="text/css" />
 <link href="css/Menu.css" rel="stylesheet" type="text/css" /> 
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/> 
<script src="javascript/bootstrap.js"></script>    
</head>
<body>
     <h1>SHIVAJI SQUAD</h1>


<div id="tabs">
  <ul>
    <li><a href="#"><span>HOME</span></a></li>
    <li><a href="#"><span>REGISTER</span></a></li>
    <li><a href="#"><span>ABOUT US</span></a></li>
    <li><a href="#"><span>CONTACT US</span></a></li>
      <li><a href="logout.php"><span>LOGOUT</span></a></li>
     </ul>
    </div>
   
<h3>Welcome
   <?php echo $_SESSION["name"];	?>,</h3>
&nbsp;
&nbsp;    
<div><h2> PENDING REPORTS </h2>    
  
  <?php
      $stmt = $con->query("SELECT * FROM report where status='PENDING' ");
echo "<table border='1' cellpadding='2'";
echo "<tr><td>RepNo.</td><td>Topic</td><td>Location</td><td>Body</td><td>Name</td><td>Date</td><td>Time</td>";
while ($row = $stmt->fetch_array()) {
    $name = $row['name'];
     $body = $row['body'];
    $topic = $row['topic'];
    $date = $row['date'];
    $time = $row['time'];
    $repno=$row['repno'];
    $location=$row['location'];
        echo "<tr>";
    
        echo "<td>".$repno."</td>";
         echo "<td>".$topic."</td>";
         echo "<td>".$location."</td>";
        echo "<td style='width: 300px;'>".$body."</td>";
         echo "<td>".$name."</td>";
        echo "<td>".$date."</td>";
         echo "<td>".$time."</td>";    
      echo "</tr>";
}
   
$stmt->free();
$con->close();
    ?></div>

    
  