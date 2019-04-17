<?php
session_start();
// remove all session variables
session_unset(); 
unset($_SESSION['fname']);

// destroy the session 
session_destroy();

header('location: home.php');
	 
?>