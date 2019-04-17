<?php
session_start();

?>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    background-color: #f1f1c1;
    
}
table{
width:100%
}
th, td {
    padding: 5px;
    text-align: left;
}
</style>

<link href="Tour/style.css" rel="stylesheet" type="text/css" />
<script src="jquery-3.1.1.js"></script>
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
<br><br><br>

<?php
session_start();
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
$option=$_POST['opt'];
$name=$_POST['bsearch'];
$d="books";
$n='%'.$name.'%';
$o=$option;
$sql="select * from $d where $option like '$n' ";
$result = $conn->query($sql);	

if ($result->num_rows > 0) 
{
echo "<table><tr><td>Title</td><td>Author</td><td>Price</td><td>Cart</td></tr>";
    while($row = mysqli_fetch_assoc($result)) 
   {
        echo "<tr>";
	echo "<td>".$row["title"]."</td>";
        echo "<td>".$row["author"]."</td>";
        echo "<td>".$row["price"]."</td>";
        echo "<td><a class='readmore' href='tourIndex.php?bookName=".$row["title"]."&cost=".$row["price"]."&submit=submit'>ADD TO CART</a>";
	echo "</tr>";
    }

echo "</table><br><br><br>";
}
else
{
  echo "Please input according to the option selected.<br>";
  echo $_POST['opt'];
  echo $_POST['bsearch'];
}
?>
</body>
</html>