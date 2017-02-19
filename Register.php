<?php require 'connections/connect.php';?>
<?php
if(isset($_POST['register']))
{
	
		session_start();
		$fname =$_POST['fname'];
        $lname =$_POST['lname'];
		$email =$_POST['email'];
        $gd =$_POST['gender'];
        $desg =$_POST['desg'];
        $contactno =$_POST['contactno'];
        $dept =$_POST['dept'];
        $orgzn =$_POST['orgzn'];

		$password =$_POST['passwrd'];
		$sql=$con->query("INSERT INTO user_info (first_name,last_name,sex,email_id,contact,designation,organization,dept_id,password)values('{$fname}','{$lname}','{$gd}','{$email}','{$contactno}','{$desg}','{$orgzn}','{$dept}','{$password}')");
        header('Location:login.html');
}
?>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
<nav class="navbar navbar-default">
<div class="container">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsemenu">
        <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
        </button>
    <a href="#" class="navbar-brand">Hack4i</a>

    </div>
    <div class="collapse navbar-collapse" id="collapsemenu">
    <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">Tutorials</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Events</a></li>
        <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
            </div>
        <button type="submit" id="go" class="btn btn-default">Go</button>
        </form>
        </ul></div>
    </div>
</nav>
 <div class="container-fixed">
   <form class="form-horizontal">
    <div class="form-group">
       <label for="fname" class="control-label col-xs-2">First name</label>
       <div class="col-xs-10">
           <input type="First name" class="form-control" id="fname" placeholder="Enter first name">
       </div>
    </div>
    <div class="form-group">
        <label for="lname" class="control-label col-xs-2">Last name</label>
        <div class="col-xs-10">
           <input type="Last name" class="form-control" id="lname" placeholder="Enter last name">
        </div>
     </div>
     <div class="form-group">
        <label for="gender" class="control-label col-xs-2">Gender</label>
        <div class="col-xs-10">
           <input type="Gender" class="form-control" id="gender" placeholder="Enter gender">
        </div>
     </div>
     <div class="form-group">
        <label for="inputE-mail" class="control-label col-xs-2">Email</label>
        <div class="col-xs-10">
           <input type="email" class="form-control" id="email" placeholder="Enter e-mail">
        </div>
     </div>
     <div class="form-group">
        <label for="contactno" class="control-label col-xs-2">Contact number</label>
        <div class="col-xs-10">
          <input type="Contact number" class="form-control" id="contactno" placeholder="Enter contact number">
        </div>
     </div>
     <div class="form-group">
        <label for="desg" class="control-label col-xs-2">Designation</label>
        <div class="col-xs-10">
           <input type="Designation" class="form-control" id="desg" placeholder="Enter designation">
        </div>
     </div>
     <div class="form-group">
        <label for="dept" class="control-label col-xs-2">Department</label>
        <div class="col-xs-10">
           <input type="Department" class="form-control" id="dept" placeholder="Enter department name">
        </div>
     </div>
     <div class="form-group">
        <label for="orgzn" class="control-label col-xs-2">Organization</label>
        <div class="col-xs-10">
           <input type="Organization" class="form-control" id="orgzn" placeholder="Enter organization">
        </div>
     </div>
     <div class="form-group">
        <label for="pswrd" class="control-label col-xs-2">Password</label>
        <div class="col-xs-10">
           <input type="Password" class="form-control" id="pswrd" placeholder="Enter password">
        </div>
     </div>
     <div class="form-group">
        <label for="cnfrm" class="control-label col-xs-2">Confirm password</label>
        <div class="col-xs-10">
           <input type="Confirm password" class="form-control" id="cnfrm" placeholder="Re-enter password">
        </div>
     </div>
    <div class="submit-btn">
        <button type="submit" class="btn btn-primary" id="register">Register</button>
    </div>
  </form>
 </div>
 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</html>
