<?php
session_start();

?>
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

</head>

<body>
<div id="wrapper">
  <div id="inner">
    <div id="eader">

<ul>
  <li><a class="active" href="home.php">Home</a></li>
 
  <li><a href="#about">Contact Us</a></li>
<form action="result.php" method="post"  style="padding:10px 0px 0px 0px">  
<li>
        <select name="opt" required autofocus>
          <option value="">Select an Option:</option>
          <option value="id">Book-Id</option>
          <option value="title">Book-Name</option>
          <option value="author">Author-Name</option>
        </select>
<input type="search" name="bsearch" > <input type="submit"></li></form>

<?php
if(isset($_SESSION['fname']))
{
echo '<li style="float:right"><a href="Issued_test.php">Cart</a></li>';
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
<img class="mySlides" src="Tour/1.1.jpg" style="width:100%">
  <img class="mySlides" src="Tour/1.2.jpg" style="width:100%">
  <img class="mySlides" src="Tour/1.4.jpg" style="width:100%">
  <img class="mySlides" src="Tour/1.3.jpg" style="width:100%">
 </div>


<dl id="browse">
  <dt>Full Category Lists</dt>
	<dd class="first"><a href="tourIndex.php">DVD</a></dd>
  <dd class="first"><a href="DS.php">DATA STRUCTURES</a></dd>
  <dd ><a href="OS.php">OPERATING SYSTEM</a></dd>
  <dd style="height:30"><a href="DBMS.php">DATABASE MANAGEMENT SYSTEM</a></dd>
  <dd><a href="WT.php">WEB TECH</a></dd>
  <dd><a href="CAO.php">COMP ORGANISATION</a></dd>
</dl>
<div id="body">

<div class="inner">
<div class="leftbox">
  <h3>Web Technologies (Black Book)</h3>
  <img src="Tour/WT/wt1.jpeg" width="93" height="95" alt="photo 1" class="left" />
  <p><b>Price:</b> <b>Rs.255</b> &amp;
  eligible for FREE Super Saver Shipping on orders over <b>Rs.195</b>.
  </p>

  <p><b>Availability:</b> Usually ships within 24 hours</p>
  <a class="readmore" href='WT.php?bookName=Web Technologies (Black Book)&cost=255&submit=submit'>ADD TO CART</a>

<div class="clear"></div>
</div>


<div class="rightbox">
<h3>Modern Web Developement</h3>
<img src="Tour/WT/wt2.jpeg" width="107" height="91" alt="photo 4" class="left" />
<p><b>Price:</b> <b>Rs.345</b> &amp; eligible for FREE Super Saver Shipping on orders over <b>Rs.195</b>.</p>
<p><b>Availability:</b> Usually ships within 24 hours</p>
<a class="readmore" href='WT.php?bookName=Modern Web Development&cost=345&submit=submit'>ADD TO CART</a>
<div class="clear"></div>
</div>


<div class="clear br"></div>
<div class="leftbox">
<h3>Web Technologies</h3>
<img src="Tour/WT/wt3.jpeg" width="93" height="101" alt="photo 2" class="left" />
<p><b>Price:</b> <b>Rs.450</b> &amp; eligible for FREE Super Saver Shipping on orders over <b>Rs.195</b>.</p>
<p><b>Availability:</b> Usually ships within 24 hours</p>
<a class="readmore" href='WT.php?bookName=Web Technologies&cost=450&submit=submit'>ADD TO CART</a>
<div class="clear"></div>
</div>

<div class="rightbox">
<h3>Internet and Web Technologies</h3>
<img src="Tour/WT/wt4.jpeg" width="90" height="103" alt="photo 5" class="left" />
<p><b>Price:</b> <b>Rs.320</b> &amp; eligible for FREE Super Saver Shipping on orders over <b>Rs.195</b>.</p>
<p><b>Availability:</b> Usually ships within 24 hours</p>
<a class="readmore" href='WT.php?bookName=Internet and Web Technologies&cost=320&submit=submit'>ADD TO CART</a>
<div class="clear"></div>
</div>

<div class="clear br"></div>
<div class="leftbox">
<h3>Web Technologies</h3>
<img src="Tour/WT/wt5.jpeg" width="106" height="100" alt="photo 3" class="left" />
<p><b>Price:</b> <b>Rs.450</b> &amp; eligible for FREE Super Saver Shipping on orders over <b>Rs.195</b>.</p>
<p><b>Availability:</b> Usually ships within 24 hours</p>
<a class="readmore" href='WT.php?bookName=Web Technologies&cost=450&submit=submit'>ADD TO CART</a>
<div class="clear"></div>
</div>

<div class="rightbox">
<h3>Web Technologies</h3>
<img src="Tour/WT/wt6.jpeg" width="91" height="99" alt="photo 6" class="left" />
<p><b>Price:</b> <b>Rs.275</b> &amp; eligible for FREE Super Saver Shipping on orders over <b>Rs.195</b>.</p>
<p><b>Availability:</b> Usually ships within 24 hours</p>
<a class="readmore" href='WT.php?bookName=Web Technologies&cost=275&submit=submit'>ADD TO CART</a>
<div class="clear"></div>
</div>

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

if(isset($_GET['submit']))
{
$book=$_GET['bookName'];
$cost=$_GET['cost'];
$sql = "SELECT id FROM books where title='$book'";


$result1 = $conn->query($sql);
$f=$_SESSION['fname'];
$sql = "SELECT id FROM customer where firstname='$f'";


$result2 = $conn->query($sql);

$row1=$result1->fetch_assoc();
$row2=$result2->fetch_assoc();
$book=$row1['id'];
$f=$row2['id'];
$sql = "insert into history_2(bid,cid,status) values('$book','$f','cart')";

$result2 = $conn->query($sql);
}
?>



<div class="clear"></div>
</div>
</div>
<div class="clear"></div>
</div>
</div>
</html>
