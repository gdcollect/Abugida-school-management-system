 <?php 
	 $userId=$_REQUEST['userId']; 
	 
	 $link=mysql_connect("localhost","root","woshti1234") or die("Cannot Connect to the database!");
	
	 mysql_select_db("register",$link) or die ("Cannot select the database!");
	 $query="DELETE FROM  admin_users WHERE userId='".$userId."'";
		
		  if(!mysql_query($query,$link))
		  {die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");}
		  else
		 {
		   
		  ?> 
		  
		  
		  <script>
alert("  Successfully  Deleted ....");
window:location="add_admin_acc.php";
</script>
		   <?php
		   }
	 ?>
	 
	 