<?php require 'connections/connect.php';?>
<?php
if(isset($_POST['Report']))
{
	
		session_start();
		$topic =$_POST['topic'];
		$location =$_POST['location'];
		$body =$_POST['body'];
        $name =$_POST['name'];
        $contact =$_POST['contact'];
        
		$sql=$con->query("INSERT INTO report(topic,location,body,name,contact,date,time,status)values('{$topic}','{$location}','{$body}','{$name}','{$contact}',NOW(),NOW(),'PENDING')");
}
?>
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
<link href="css/Master.css" rel="stylesheet" type="text/css" />
 <link href="css/Menu.css" rel="stylesheet" type="text/css" />   

<h2> Report Shivaji Squads</h2>
<div id="tabs">
  <ul>
    <li><a href="index.html"><span>HOME</span></a></li>
    <li><a href="reg.php"><span>REGISTER</span></a></li>
    <li><a href="#"><span>ABOUT US</span></a></li>
    <li><a href="#"><span>CONTACT US</span></a></li>
     </ul>
</div>
<div>
&nbsp;
&nbsp;    
<form action=""  method="post">
<div class="FormElement">
<input name="topic" type="text" required="required" class="TField" id="topic" placeholder="Topic">
</div>    
<div class="FormElement">
  <input name="location" type="text" required="required" class="TField" id="location" placeholder="Location">
</div>
<div class="FormElement">
  <input name="body" type="text" required="required" class="TField" id="body" placeholder="Details of activity">
</div>
<div class="FormElement">
<input name="name" type="text" required="required" id="name" class="TField" placeholder="Name of Reporter">
</div>
<div class="FormElement">
<input name="contact" type="text" required="required" id="contact" class="TField" placeholder="Contact">
</div>
<div class="FormElement">    
<input name="Report" type="submit" class="button" id="Report" value="Report">    
    </div>    
</form> 
</div>    



