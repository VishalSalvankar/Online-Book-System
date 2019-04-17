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
$fname = $_POST['fname'];
	
$lname = $_POST['lname'];
	
$email = $_POST['email'];
	
$password = $_POST['password'];
	
$number = $_POST['phno'];
		
$address = $_POST['address'];

	
echo $fname;

$duplicate = "SELECT email from customer where email='$email'";

$result = $conn->query($duplicate);	

if ($result->num_rows > 0) 
{
    while($row = mysqli_fetch_assoc($result)) 
   {
        echo $row["email"];
    }
  header('location: signup.php?error_name=this email is already registered');
	
}
 else 
{
    $query = "INSERT INTO customer(firstname, lastname, email, password, number, address) VALUES ( '$fname', '$lname', '$email', '$password', '$number', '$address')";
	
$query_result = $conn->query($query);


$sql = "SELECT id, email, firstname FROM customer where email='$email' AND password = '$password'";


$result = $conn->query($sql);


if ($result->num_rows > 0) 
{ 

session_start();		
$_SESSION['email'] = $email;
while($row = $result->fetch_assoc()) 
   {
        $_SESSION['user_id']=$row["id"] ;
	$_SESSION['fname']=$row["firstname"];		

    }

header('location: home.php');
		
} 
}


$conn->close();
	

?>