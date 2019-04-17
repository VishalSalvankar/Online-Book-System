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

// sql to create table
$sql = "INSERT INTO books(title, author, publisher, year, stock, price) VALUES ( 'Computer Architecture ', 'WB Iyer', 'Modelhouse',2010 ,50 ,175)";
	

if ($conn->query($sql) === TRUE) {
    echo "Inserted successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>