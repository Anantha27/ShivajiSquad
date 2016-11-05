<?php require 'connections/connect.php';?>
<?php
if(isset($_POST['LOGIN']))
{
	
		session_start();
		$EM =$_POST['email'];
		
		$PW =$_POST['password'];
		$result=$con->query("select * from squad where email='$EM' AND password='$PW'");
		$row=$result->fetch_array(MYSQLI_BOTH);
		session_start();
		$_SESSION["name"]= $row['name'];
		header('Location:shivajisquad.php');
		
}


?>
<html>
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
<link href="css/Master.css" rel="stylesheet" type="text/css" />
 <link href="css/Menu.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/> 
<script src="javascript/bootstrap.js"></script>    
</head>



 


<h1>&nbsp;</h1>
<h1>SHIVAJI :Spying each and every corruption</h1>


<div id="tabs">
  <ul>
    <li><a href="login.php"><span>HOME</span></a></li>
    <li><a href="reg.php"><span>REGISTER</span></a></li>
    <li><a href="#"><span>ABOUT US</span></a></li>
    <li><a href="Contact.html"><span>CONTACT US</span></a></li>
     </ul>
</div>

<div id="leftbody"></div> 

<div id ="Pageheading">
<form action="" method="post">
    <div class="form-group">
        <label for="inputEmail">Email</label>
        <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
    </div>
    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input name="password" type="password" class="form-control" id="password" placeholder="Password">
    </div>
    <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
    </div>
    <button id="LOGIN" name="LOGIN"  type="submit" class="btn btn-primary">Login</button> 
    <a href="reg.php"> Not a member? Sign up</a>
</form>


 

</div>



</html>