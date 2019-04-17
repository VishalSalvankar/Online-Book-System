<?php
session_start();

?>


<html>
<head>
<title>Home Screen</title>
<style>
html, body {
	background-color:white;
    margin: 0;
    height: 100%;
}

a{color:#333}

#divbutton
{
height:50px;
width:130px;
color:#333;
background-color:white;
display:inline-block;
border-radius:8px;
padding:10px;
margin:-20 10 20 120;
vertical-align:middle;
text-align:center;
line-height: 50px;
font-family:lato;
font-weight:bold;
font-size:20px;
border: 2px solid green;
}

#divbutton:hover
{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}

.mySlides {display:none;
height:100%;
}

#imageSlider
{width:100%;
height:420px;}

#bookstore{
font-family:delicious;
font-size:20px;
margin:30 150 60 145;
color:#333;
text-align:center;
}

ul {
    position:fixed;
	width:100%;
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color: #333;
    font-size:20px;
    opacity:0.7;
}

li {
    float: left;
}

li a {
    display: block;
    font-family:Tahoma;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li:hover
{opacity:1.0;}

li a:hover {
    background-color: #271A18;
	transition: background 1000ms ease-out;
}

ul:hover {
transition: 1000ms ease-out;
opacity:1.0;
}

.footer{
  background-color: grey;
  
}
.column{
  float: left;
  background-color: #333;
  color:white;
  width: 32.5%;
  height: 250px;
  padding-left: 10px;
}

</style>

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
</head>

<body>

<div id="imageSlider">

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">Terms Of Service</a></li>
  <li><a href="#contact">Privacy</a></li>
  <li><a href="formpage.html">Feedback</a></li>

<?php
if(isset($_SESSION['fname']))
{
echo '<li style="float:right;font-family:tahoma;font-size:20;color:white;padding-top:15px;padding-right:10px">'.$_SESSION['fname']."</li>";
echo '<li style="float:right"><a href="logout.php" >Logout</a></li>';	
}
else 
{
echo '<li style="float:right"><a href="login.php" >Login</a></li>';	
echo '<li style="float:right"><a href="signup.php" >Signup</a></li>';	
}
?>
</li>
</ul>
  <img class="mySlides" src="new1.jpg" style="width:100%">
  <img class="mySlides" src="new2.jpg" style="width:100%">
  <img class="mySlides" src="new3.jpg" style="width:100%">
  <img class="mySlides" src="new4.jpg" style="width:100%">
  <img class="mySlides" src="new5.jpg" style="width:100%">
  <img class="mySlides" src="new6.jpg" style="width:100%">
  <img class="mySlides" src="new7.jpg" style="width:100%">
  <img class="mySlides" src="new8.jpg" style="width:100%">
  <img class="mySlides" src="new9.jpg" style="width:100%">
  <img class="mySlides" src="new10.jpg" style="width:100%">
 </div>

 <p id="bookstore">"If you only read the books that everyone else is reading, you can only think what everyone else is thinking." <br>-Haruki Murakami, Norwegian Wood <p>

<div id="divbutton" style="background-color:white color:white; font-size: 14px"><a href="tourIndex.php" style="text-decoration:none;">BOOK STORE</a></div>
<div id="divbutton" style="background-color:#333 color:#333;"> <?php
if(isset($_SESSION['fname']))
{
echo '<a href="libindex_test.php" style="text-decoration:none; font-size: 14px;" >LIBRARY</a></li>';	
}
else 
{
echo '<a href="login.php" style="text-decoration:none; font-size: 14px;" >LIBRARY</a></li>';	
	
}
?></div>
<div id="divbutton" style="background-color:#333 color:white;font-size: 8px;"><a href="sellbook.php" style="text-decoration:none;font-size:15px;">SELL BOOKS </a></div>
<div id="divbutton" style="background-color:#333 color:#333;"> <a href="admin_login.php" style="text-decoration:none;font-size:14px;">ADMIN LOG IN</a></div>
<div class="footer" style="background-color: #999">
      <div class="row ">
      <div class="column ">
    <h2>TECHNOLOGY PARTNERS</h2>
    <p>VIT UNIVERSITY<br>SCOPE</p>
  </div>
  <div class="column">
    <h2>CONNECTIONS MADE</h2>
    <p>11609 Book Users Registered<br>

138102 Request Served Till Date<br>

750 Connections made in last 30 Days<br>
</p>
  </div>
  <div class="column ">
    <h2>CONTACT US</h2>
    <p>Address:<br>

Indian Boook Library 
127, Katpadi,
Vellore - 632014,
Tamil Nadu (India).<br>

Email-id: info@indianbooklibrary.com</p>
  </div>
</div>
</div>


</body>
<html>
