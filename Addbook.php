<?php
session_start();

?>
<!DOCTYPE HTML>

<html>

<head>
  <title>Add Book</title>
  <style type="text/css">

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

  span{
    display:block;
    margin-bottom: 15px;
  }

  div{
    width:500px;
    padding-left: 100px;
  }

  h4{
    margin-top: 10px;
    margin-bottom: 10px;
    font-weight: 400;
    font-size: 28px;
    line-height: 1.2;
  }
  body{
    margin: 0px;
    font-family: tahoma;
    background-repeat:no-repeat;
    background-image: url("background.jpeg");
    background-size: cover;
  }
  div{
    width:500px;
    padding-left: 100px;
  }

  h4{
    margin-top: 10px;
    margin-bottom: 10px;
    font-weight: 400;
    font-size: 28px;
    line-height: 1.2;
  }
   #logindiv{
    padding:0px;
    width:200px;
    margin:0px;
    float:right;
  }
  #login{
    padding-right:30px;
    color:white;
    font-size: 25px;
    float:right;
    background-color: #003333;
    border:0px;
    height:70px;
  }

  #banner{
    margin-bottom: 30px;
    height:70px;
    background-color:#003333;
  }

  #sitediv{
    padding: 0px;
    width:200px;
    margin:0px;
    float:left;
  }
  #site{
    width:320px;
    margin:0px;
    padding-top: 10px;
    padding-left: 10px;
    color: white;
    font-size: 40px;
    float:left;
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
margin:-20 10 20 275;
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

  <script  src="jquery-3.1.1.js"></script>

  <script>
    
    $(document).ready(function(){
  $("p").click(function(){
        window.location.href="/";
    });

  $("#login").click(function(){
        window.location.href="logout.php";
    });
});

  </script>
</head>

<body>
  <span id="banner">
    <div id="sitediv">
      <p id="site">Online Book Store</p>
    </div>
   <div id="logindiv">
      <button id="login">Log Out</button>
    </div>
    <div id="logindiv">
      <button id="login"><a style="text-decoration:none;font-size: 23px;color:white" href="Admin.php">Admin Page</a></button>
    </div>
  </span>
  <div align="left">
    <h4>Add book</h4>
    <br>
    <br>
    
    <form  method="post">
      
     <!-- <span>
        <label align="left">Book id:<br></label>
        <input type="text" name="bid" required maxlength="30"/><br>
      </span>-->


      <span>
        <label align="left">Book Name:<br></label>
        <input type="text" name="bname" required maxlength="30"/><br>
      </span>

       <span>
        <label align="left">Author Name:<br></label>
        <input type="text" name="aname" required maxlength="30"/><br>
      </span>

      <span>
        <label align="left">Publisher Name:<br></label>
        <input type="text" name="pname" required maxlength="30"/><br>
      </span>

      <span>
        <label align="left">Year:<br></label>
        <input type="text" name="year" required maxlength="30"/><br>
      </span>

           <span>
        <label align="left">Stock:<br></label>
        <input type="text" name="stock" required maxlength="30"/><br>
      </span>

      <span>
        <label align="left">Price:<br></label>
        <input type="text" name="price" required maxlength="30"/><br>
      </span>

       <span>
        <input type="submit" name="submit" value="ADD"/><br>
      </span>

    </form>
  </div>
</body>

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
$y = $_POST['year'];
$s = $_POST['stock'];
$pr = $_POST['price'];


$sql="INSERT INTO books(id,title,author,publisher,year,stock,price) VALUES('$bid','$bname','$aname','$pname','$y','$s','$pr')";

if($conn->query($sql)==TRUE)
{

  echo "<div id='divbutton' style='color:white;'>Book ".$bname." added successfully.</div>";
  header('location: Admin.php');
}
else{
  echo "Book not inserted, Sorry";
}

}

?>
 
