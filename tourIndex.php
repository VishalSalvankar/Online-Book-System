<?php
session_start();

?>
<html>
<head>
<title>Online Book Store</title>
<style type="text/css">
    body{
      width: 100%;
    }
  
</style>
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
var final_transcript = '';
var recognizing = false;

if ('webkitSpeechRecognition' in window) {

  var recognition = new webkitSpeechRecognition();

  recognition.continuous = true;
  recognition.interimResults = true;

  recognition.onstart = function() {
    recognizing = true;
  };

  recognition.onerror = function(event) {
    console.log(event.error);
  };

  recognition.onend = function() {
    recognizing = false;
  };

  recognition.onresult = function(event) {
    var interim_transcript = '';
    for (var i = event.resultIndex; i < event.results.length; ++i) {
      if (event.results[i].isFinal) {
        final_transcript += event.results[i][0].transcript;
      } else {
        interim_transcript += event.results[i][0].transcript;
      }
    }
    final_transcript = capitalize(final_transcript);
    final_span.innerHTML = linebreak(final_transcript);
    interim_span.innerHTML = linebreak(interim_transcript);
    
  };
}

var two_line = /\n\n/g;
var one_line = /\n/g;
function linebreak(s) {
  return s.replace(two_line, '<p></p>').replace(one_line, '<br>');
}

function capitalize(s) {
  return s.replace(s.substr(0,1), function(m) { return m.toUpperCase(); });
}

function startDictation(event) {
  if (recognizing) {
    recognition.stop();
    return;
  }
  final_transcript = '';
  recognition.lang = 'en-US';
  recognition.start();
  final_span.innerHTML = '';
  interim_span.innerHTML = '';
}
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
  <input type="search" name="bsearch" placeholder="Search"> <input type="submit"></li></form>

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
    <h3>Star Wars Trilogy (Novelisation)</h3>
    <img src="Index/photo_1.jpg" width="93" height="95" alt="photo 1" class="left" />
    <p><b>Price:</b> <b>Rs.225</b> &amp;
    eligible for FREE Super Saver Shipping on orders over <b>Rs.195</b>.
    </p>

    <p><b>Availability:</b> Usually ships within 24 hours</p>
    <a class="readmore" href='tourIndex.php?bookName=Star Wars Trilogy (Novelisation)&cost=225&submit=submit'>ADD TO CART</a>

  <div class="clear"></div>
  </div>


  <div class="rightbox">
  <h3>Batman Unlimited #12-#50 </h3>
  <img src="Index/photo_4.jpg" width="107" height="91" alt="photo 4" class="left" />
  <p><b>Price:</b> <b>Rs.125</b> &amp; eligible for FREE Super Saver Shipping on orders over <b>Rs.105</b>.</p>
  <p><b>Availability:</b> Usually ships within 24 hours</p>
  <a class="readmore" href='tourIndex.php?bookName=Batman Unlimited#12-#50&cost=125&submit=submit'>ADD TO CART</a>
  <div class="clear"></div>
  </div>

          <!-- end .rightbox -->
  <div class="clear br"></div>

  <div class="leftbox">
  <h3>Harry Potter and the Prisoner of Azkaban </h3>
  <img src="Index/photo_2.jpg" width="93" height="101" alt="photo 2" class="left" />
  <p><b>Price:</b> <b>Rs.350</b> &amp; eligible for FREE Super Saver Shipping on orders over <b>Rs.295</b>.</p>
  <p><b>Availability:</b> Usually ships within 24 hours</p>
  <a class="readmore" href='tourIndex.php?bookName=Harry Potter and the Prisoner of Azkaban&cost=350&submit=submit'>ADD TO CART</a>
  <div class="clear"></div>
  </div>

         <!-- end .leftbox -->
  <div class="rightbox">
  <h3>Blade - Trinity (New Platinum Series)</h3>
  <img src="Index/photo_5.jpg" width="90" height="103" alt="photo 5" class="left" />
  <p><b>Price:</b> <b>Rs.115</b> &amp; eligible for FREE Super Saver Shipping on orders over <b>Rs.95</b>.</p>
  <p><b>Availability:</b> Usually ships within 24 hours</p>
  <a class="readmore" href='tourIndex.php?bookName=Blade - Trinity (New Platinum Series)&cost=115&submit=submit'>ADD TO CART</a>
  <div class="clear"></div>
  </div>
          <!-- end .rightbox -->
  <div class="clear br"></div>

  <div class="leftbox">
  <h3>Million Dollar Baby (Widescreen Edition)</h3>
  <img src="Index/photo_3.jpg" width="106" height="100" alt="photo 3" class="left" />
  <p><b>Price:</b> <b>Rs.105</b> &amp; eligible for FREE Super Saver Shipping on orders over <b>Rs.99</b>.</p>
  <p><b>Availability:</b> Usually ships within 24 hours</p>
  <a class="readmore" href='tourIndex.php?bookName=Million Dollar Baby (Widescreen Edition)&cost=105&submit=submit'>ADD TO CART</a>
  <div class="clear"></div>
  </div>
           <!-- end .leftbox -->

  <div class="rightbox">
  <h3>The Matrix Reloaded (Full Screen Edition)</h3>
  <img src="Index/photo_6.jpg" width="91" height="99" alt="photo 6" class="left" />
  <p><b>Price:</b> <b>Rs.75</b> &amp; eligible for FREE Super Saver Shipping on orders over <b>Rs.55</b>.</p>
  <p><b>Availability:</b> Usually ships within 24 hours</p>
  <a class="readmore" href='tourIndex.php?bookName=The Matrix Reloaded (Full Screen Edition)&cost=75&submit=submit'>ADD TO CART</a>
  <div class="clear"></div>
  </div>
          <!-- end .rightbox -->
  <div class="clear"></div>
  </div>
        <!-- end .inner -->
  </div>
  <!-- end body -->
  <div class="clear"></div>
  </div>
  <!-- end inner -->
  </div>
  <!-- end wrapper -->
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
$sql = "insert into history(bid,cid,status) values('$book','$f','cart')";

$result2 = $conn->query($sql);
}
?>
