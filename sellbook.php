
<html>
<head>
<title>Online Book Store</title>
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
input{
    border-radius: 2px;
    border:solid;
    border-width: thin;
    border-color: #cccccc;
    height:30px;
    width:450px;
    font-size: 15px;

  }

input[type=submit]{
    font-size: 15px;
    word-spacing: 3px;
    width:100px;
    height:50px;
}
  
  #abc{
    width:500px;
    padding-left: 100px;
    align:center;
  }

  h4{
    margin-top: 10px;
    margin-bottom: 10px;
    font-weight: 400;
    font-size: 28px;
    line-height: 1.2;
  }
  
  label{
    margin-top: 10px;
    margin-bottom: 10px;
    font-weight: 370;
    font-size: 20px;
    line-height: 1.2;
    align:left;
  }
  #divbutton
{
height:100px;
width:350px;
color:white;
background-color:grey;
display:inline-block;
border-radius:8px;
padding:10px;
margin:20 75 50 180;
vertical-align:middle;
text-align:center;
line-height: 50px;
font-family:lato;
font-weight:bold;
font-size:20px;
border: 2px solid black;
align:center;
}


</style>

</head>

<body>
<div id="wrapper">
  <div id="inner">
    <div id="eader">

<ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="#contact">Privacy</a></li>
  <li><a href="#about">Contact Us</a></li>


<?php
if(isset($_SESSION['fname']))
{
echo '<li style="float:right"><a href="cart.php">Cart</a></li>';
echo '<li style="float:right"><a href="logout.php" >Logout</a></li>';	
}
else 
{
echo '<li style="float:right"><a href="login.php" >Login</a></li>';	
echo '<li style="float:right"><a href="signup.php" >Signup</a></li>';	
}
?>	

</ul>

<div id="imageSlider">
<img class="mySlides" src="1.1.jpg" style="width:100%">
  <img class="mySlides" src="1.2.jpg" style="width:100%">
  <img class="mySlides" src="1.4.jpg" style="width:100%">
  <img class="mySlides" src="1.3.jpg" style="width:100%">
 </div>
    <div id="abc">
    <h4>Enter the Book Details</h4>
    <form action="sellbook.php" method="post" align="center">
    

      <span>
        <label align="left">Book Name:<br><br></label>
        <input type="text" name="bname" required maxlength="30"/><br><br>
      </span>

       <span>
        <label align="left">Author Name:<br><br></label>
        <input type="text" name="aname" required maxlength="30"/><br><br>
      </span>

      <span>
        <label align="left">Publisher Name:<br><br></label>
        <input type="text" name="pname" required maxlength="30"/><br><br>
      </span>

      <span>
        <label align="left">MRP:<br><br></label>
        <input type="text" name="mrp" required maxlength="30"/><br><br>
      </span>

       <span>
        <input type="submit" name="submit" value="NEXT>"/><br><br>
      </span>

    </form>
   
  </div>
  </div>
  </div>
  </div>
  </body>
  </html>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "obs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit']))
{
  $bid = mt_rand(60,200);//$_POST['bid'] ; 
$bname = $_POST['bname'];
$aname = $_POST['aname'] ;
$pname = $_POST['pname'];
//$y = $_POST['year'];
//$s = $_POST['stock'];
$mrp = $_POST['mrp'];
$d=0.4;
$sp= $mrp * $d;
 

$sql="INSERT INTO sec_books(id,title,author,publisher,price) VALUES('$bid','$bname','$aname','$pname','$mrp')";

if($conn->query($sql)==TRUE)
{
  echo "<div id='wrapper'><div id='inner'><div id='eader'><div id='divbutton' style='align:center';>The selling Price of the Book is:<br>".$sp." Rs</div></div></div></div>";
 // header('location: Admin.php');
}

else
{
  echo "Error:";
}
}
?>