<?php
session_start();

?>
<html>
<head>
<title>Admin Page</title>
<link href="Tour/style.css" rel="stylesheet" type="text/css" />
<script src="jquery-3.1.1.js"></script>

<script>
var myIndex = 0;
$(document).ready(
	function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";

		setTimeout(carousel, 3000);
}
);
</script>
<style>

a{color:#333}

#divbutton
{
height:50px;
width:100px;
color:#333;
background-color:white;
display:inline-block;
border-radius:8px;
padding:10px;
margin:-20 50 25 50;
vertical-align:middle;
text-align:center;
line-height: 30px;
font-family:lato;
font-weight:bold;
font-size:20px;
border: 2px solid black;
}

#divbutton:hover
{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}

#bookstore{
font-family:delicious;
font-size:20px;
margin:30 150 60 145;
color:#333;
text-align:center;
}

</style>

</head>

<body>
<div id="wrapper">
  <div id="inner">
    <div id="eader">

<ul>
  <li><a class="active" href="home.php">Home</a></li>
 <!-- <li><a href="#contact">Privacy</a></li>
  <li><a href="#about">Contact Us</a></li>-->

  <?php
if(isset($_SESSION['fName']))
{
//echo '<li style="float:right"><a href="cart.php">Cart</a></li>';
echo '<li style="float:right"><a href="admin_logout.php" >Logout</a></li>'; 
}
else 
{
echo '<li style="float:right"><a href="admin_login.php" >Login</a></li>'; 
//echo '<li style="float:right"><a href="signup.php" >Signup</a></li>'; 
}
?>  

</ul>
<div id="imageSlider">
<img class="mySlides" src="1.1.jpg" style="width:100%">
  <img class="mySlides" src="1.2.jpg" style="width:100%">
  <img class="mySlides" src="1.4.jpg" style="width:100%">
  <img class="mySlides" src="1.3.jpg" style="width:100%">
 </div>

 <p id="bookstore">"If you only read the books that everyone else is reading, you can only think what everyone else is thinking." <br>-Haruki Murakami, Norwegian Wood <p>

<div id="divbutton" style="background-color:white color:white;"><a href="Addbook.php" style="text-decoration:none">Add New Book</a></div>
<div id="divbutton" style="background-color:#333 color:#333;"> <a href="Delete.php" style="text-decoration:none;">Delete Book</a></div>
<div id="divbutton" style="background-color:#333 color:#333;"> <a href="" style="text-decoration:none;">Modify Database</a></div>
<div style="height:170px;width:170px;background-color:white;padding:10px;margin:-20 50 25 50;">
</div>