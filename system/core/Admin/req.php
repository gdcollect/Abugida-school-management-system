<?php  
 
 
$host = "localhost";
$user = "root";
$password = "";
$db = "register";


 $con = mysqli_connect($host,$user,$password,$db);

 
 
		ob_start();
		session_start();
		
		// if session is not set this will redirect to login page
		if( !isset($_SESSION ['user_admin']) ) {
			header("Location: login.php");
			exit;
		}
		// select loggedin users detail
		$res=mysqli_query($con,"SELECT * FROM Admin_users WHERE userId=".$_SESSION ['user_admin']);
	
		$userRow=mysqli_fetch_array($res);
		
	    include_once 'common.php';
 	  
	 ?>
	 