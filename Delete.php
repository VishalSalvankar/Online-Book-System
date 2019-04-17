<!DOCTYPE HTML>

<html>

<head>
  <title>Delete Book</title>
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
      <button id="login"><a  style="text-decoration:none;font-size: 23px;color:white" href="Admin.php">Admin Page</a></button>
    </div>
  </span>
  <div align="left">
    <h4>Delete Book</h4>
    <br>
    <br>
    <br>
    <form  method="post">
      <span>
        <label align="left">Book Name:<br></label>
        <input type="text" name="bname" required maxlength="30"/><br>
      </span>

      <span>
        <label>Publisher Name:<br></label>
        <input type="text" name="pname" maxlength="30"/><br>
      </span>
       <span>
        <input type="submit" name="submit" value="Delete"/><br>
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
if(isset($_POST['submit'])){
  $bname = $_POST['bname'];
  
$pname = $_POST['pname'];


$sql="DELETE FROM books WHERE title='$bname' AND publisher='$pname'";

if($conn->query($sql)==TRUE)
{
  echo "book deleted successfully.";
  header('location: Admin.php');
}

}
?>
  
