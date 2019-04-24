<?php
	
	session_start();
	session_destroy();
	unset($_SESSION['id'], $_SESSION['password']);
	header("location: index.php");
	exit();
	  
?>