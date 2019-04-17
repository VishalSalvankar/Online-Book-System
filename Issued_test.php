
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
$id=$_SESSION['user_id'];
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
$b=$_GET['bid'];
$c=$_GET['cid'];
$sql="DELETE FROM history_2 WHERE bid= '$b' AND cid = '$c'";
$result1 = $conn->query($sql);

}

 $sql="select bid,cid,qty from history_2 where cid='$id'";
$result = $conn->query($sql);
$tot=0;

while($row = $result->fetch_assoc()) 
{
$b=$row['bid'];
$sql="select * from books where id='$b'";
$result1 = $conn->query($sql);
$i=1;

if($result1->num_rows < 4)
{
echo "<table><tr><td>Title</td><td>Author</td><td>Book Id</td><td>Cart</td></tr>";
while($row1 = $result1  ->fetch_assoc()) 
{
 echo "<tr>";
  echo "<td>".$row["title"]."</td>";
        echo "<td>".$row["author"]."</td>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>Issued</td>";
  echo "</tr>";

}
echo "</table><br><br><br>";
}
}

?>
</body>
</html>

