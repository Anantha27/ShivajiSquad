<?php require 'connections/connect.php';?>
<?php
if(isset($_POST['Register']))
{
	
		session_start();
		$name =$_POST['name'];
		$email =$_POST['email'];
        $sex =$_POST['sex'];
		$password =$_POST['password'];
		$sql=$con->query("INSERT INTO squad (name,email,sex,password)values('{$name}','{$email}','{$sex}','{$password}')");
        header('Location:login.php');
}
?>
<head>
    <meta charset="UTF-8">
    <title>REGISTER</title>
<link href="css/Master.css" rel="stylesheet" type="text/css" />
 <link href="css/Menu.css" rel="stylesheet" type="text/css" />   
</head>
<h1>&nbsp;</h1>
<h1>SHIVAJI</h1>
<div id="tabs">
  <ul>
    <li><a href="index.html"><span>HOME</span></a></li>
    <li><a href="reg.php"><span>REGISTER</span></a></li>
    <li><a href="#"><span>ABOUT US</span></a></li>
    <li><a href="Contact.html"><span>CONTACT US</span></a></li>
     </ul>
</div>
<div>
<div id="Pageheading">
  <h1>Shivaji:An anti-corruption movement </h1>
</div>
&nbsp;    
<form action="" method="post">
<div class="FormElement">
 
  <input name="name" type="text" required="required" class="TField" id="name" placeholder="Name">
</div>
<div class="FormElement">

  <input name="email" type="email" required="required" class="TField" id="email" placeholder="Email ID">
</div>
    <div class="FormElement">

  <input name="sex" type="text" required="required" class="TField" id="sex" placeholder="Sex">
</div>
<div class="FormElement">

  <input name="password" type="password" required="required" class="TField" id="password" placeholder="Password">
</div>
<div class="FormElement">
<input name="Register" type="submit" class="button" id="Register" value="Register">
</div>
</form>  
</div>



