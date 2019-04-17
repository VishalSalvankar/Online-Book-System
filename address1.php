<?php
session_start();
header('location: home.php');

$b= $_POST["bookName"];
$c= $_POST["cost"];
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

$sql = "SELECT id FROM books where title='$b'";


$result1 = $conn->query($sql);
$f=$_SESSION['fname'];
$sql = "SELECT id FROM customer where firstname='$f'";


$result2 = $conn->query($sql);

$row=$result1->fetch_assoc();
$bid=$row['id'];
echo $bid;
if ($result2->num_rows > 0 ) 
{ 
while($row = $result2->fetch_assoc()) 
   {
	//$sql="INSERT INTO history(bid,cid) VALUES ($bid, $row['id'])";

	$result1 = $conn->query($sql);
}

		
}
?>