 <?php 
	 $userId=$_REQUEST['userId']; 
	 
	  $con = mysqli_connect("localhost","root","woshti1234","register");
	 $query="DELETE FROM accounts WHERE userId='".$userId."'";
		
		  if(!mysqli_query($con,$query ))
		  {die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");}
		  else
		 {
		   
		  ?> 
		  
		  
		  <script>
alert("  Successfully  Deleted ....");
window:location="add_stud_acc.php";
</script>
		   <?php
		   }
	 ?>
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 