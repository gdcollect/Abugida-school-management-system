
	  <?php 
	 $id=$_REQUEST['id']; 
	 
 	  $con = mysqli_connect("localhost","root","woshti1234","register");
	
	 
	 $query="DELETE FROM employee WHERE id='".$id."'";
		
		  if(!mysqli_query($con,$query))
		  {die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");}
		  else
		 {
		   
		  ?> 
		  
		  
		  <script>
alert(" Employee Successfully  Deleted...");
window:location="employee.php";
</script>
		   <?php
		   }
	 ?>
	 
	 
	 