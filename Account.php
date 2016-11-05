<?php require 'connections/connect.php';?>
<?php
session_start();
if(isset($_SESSION["name"]))
{}
else{
	header('Location:login.php');
}
?>
<?php
$result=$con->query("SELECT * FROM report");
$rows=$result->fetch_row();
$num=$con->query("SELECT COUNT(*) FROM report");
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



    </div>    
<table border="0" cellspacing="2" cellpadding="2">
<tr>
<td>
<font face="Arial, Helvetica, sans-serif">RNo</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">Topic</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">Location</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">Report Details</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">Name</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">Contact</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">Date</font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif">Time</font>
</td> 
<td>
<font face="Arial, Helvetica, sans-serif">Status</font>
</td>    
</tr>
<?php$i=0;while ($i < $num) {
$f1=mysqli_result($result,$i,"rno");
$f2=mysqli_result($result,$i,"topic");
$f3=mysqli_result($result,$i,"location");
$f4=mysqli_result($result,$i,"body");
$f5=mysqli_result($result,$i,"name");
$f6=mysqli_result($result,$i,"contact");
$f7=mysqli_result($result,$i,"date");
$f8=mysqli_result($result,$i,"time");
$f9=mysqli_result($result,$i,"status");    
?>
<tr>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f4; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f5; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f6; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f7; ?></font>
</td>
<td>
<font face="Arial, Helvetica, sans-serif"><?php echo $f8; ?></font>
</td>    
</tr>
<?php$i++;}?>
