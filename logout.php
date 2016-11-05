<?php require 'connections/connect.php';?>
<?php
session_start();
unset($_SESSION["name"]);
session_destroy();

?><head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
<link href="css/Master.css" rel="stylesheet" type="text/css" />
 <link href="css/Menu.css" rel="stylesheet" type="text/css" />   
</head>
<h1>&nbsp;</h1>
<h1>SHIVAJI :Lets join the revolutionised Anti-corrupt movement</h1>


<div id="tabs">
  <ul>
    <li><a href="#"><span>HOME</span></a></li>
    <li><a href="#"><span>REGISTER</span></a></li>
    <li><a href="#"><span>ABOUT US</span></a></li>
    <li><a href="#"><span>CONTACT US</span></a></li>
     </ul>
</div><div>


<div id="Pageheading">
  <h1>SHIVAJI</h1>
</div>
<div id = "user">
<div class="LeftBody"></div>
  <div class="Rightbody">You have logged out!!!<br>
  <br>
    <a href="index.html" class="btn btn-primary btn-blk">HOME</a>  
</div>
</div>



