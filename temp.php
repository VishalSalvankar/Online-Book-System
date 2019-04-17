<html>
<head>
<title>
Address Page
</title>
<style>
#body_div{
	width:400px;
	height:400px;
	border: 2 px solid grey;
	background-color:white;
	margin:150 200 200 450;

}
body{
	 background-image: url("background-learner2.jpg");
	 color:grey;
}
</style>
</head>
<body>

<div id="body_div">
<center><h1> Address Entry </h1></center>

<form align="center" action="address1.php" method="post">
<center><textarea type="text" name="Address" placeholder="Customer's Address" rows="5" cols="25" maxlength="60" id="address"></textarea></center>
<center><p id="address_part"> </p></center>
<input type="hidden" value="<?php echo $_GET['bookName']; ?>" name="bookName"/>
<input type="hidden" value="<?php echo $_GET['cost']; ?>" name="cost"/>
<br><br>
<center><input type="submit" name="Submit" value="Submit"></center>
</div>
</form>
<script type="text/javascript" src="jquery-3.1.1.js"></script>
<script type="text/javascript" src="addjs.js"></script>
</body>

</html>
