<?php
 $con = mysqli_connect($host,$user,$password,$db);
function clean($str)
	{
		$str = @trim($str);
		if(get_magic_quotes_gpc())
			{
			$str = stripslashes($str);
			}
			$con = mysqli_connect($host,$user,$password,$db);
		return mysqli_real_escape_string($con,$str);
	}
	
$position = clean($_POST['position']);
$date = clean($_POST['date']);
$message = clean($_POST['message']);
$title = clean($_POST['title']);
mysqli_query($con,"INSERT INTO noticemsg (position, date, message ,title) VALUES ('$position','$date','$message','$title')");
	?>
		   <script>
alert("  successfully Noticed");
window:location="add_new.php";
</script>
		   