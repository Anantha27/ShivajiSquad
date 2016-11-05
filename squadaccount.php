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
</head>
<body>
<h1>SHIVAJI :Spying each and every corruption</h1>


<div id="tabs">
  <ul>
    <li><a href="#"><span>HOME</span></a></li>
    <li><a href="#"><span>REGISTER</span></a></li>
    <li><a href="#"><span>ABOUT US</span></a></li>
    <li><a href="#"><span>CONTACT US</span></a></li>
     </ul>
</div>


   

<div>


<div id="Pageheading">
  <h1>SHIVAJI SQUAD</h1>
</div>
<div id = "user">
<div class="LeftBody">&nbsp;</div>
  <div class="Rightbody">Welcome
 <?php echo $_SESSION["name"];	?>
  to SHIVAJI</div>
</div>


<?php
$stmt = $con->query("SELECT * FROM report");
echo "<table border='1' cellpadding='2' cellspacing='2'";echo "<table border='1' cellpadding='2' cellspacing='2'";
echo "<tr><th>Repno</th><th>Topic</th><th>Location</th><th>Report</th><th>Submitted By</th><th>Contact</th><th>Date</th><th>Time</th><th>Status</th></tr>";

while($row = $stmt->fetch_array()) {
    $repno = $row['repno'];
    $topic = $row['topic'];
    $location = $row['location'];
    $body = $row['body'];
    $name= $row['name'];
    $date = $row['date'];
    $time = $row['time'];
    $status = $row['status'];
    echo "<tr><td>".$repno."</td><td style='width: 200px;'>".$topic."</td><td>".$location."</td><td style='width: 600px;'>".$Report."</td><td>".$name."</td><td>".$date."</td><td>".$time."</td><td>".$status."</td></tr>";
} 

$stmt->free();
$con->close();
?>
