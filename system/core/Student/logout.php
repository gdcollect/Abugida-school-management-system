<?php

	session_start();
	
	if (!isset($_SESSION['user_student'])) {
		header("Location: index.php");
	} else if(isset($_SESSION['user_student'])!="") {
		header("Location: index.php");
	}
	
	if (isset($_GET['logout'])) {
		unset($_SESSION['user_student']);
		session_unset();
		session_destroy();
		header("Location: login.php");
		exit;
	}