
	  <?php 
	 $std_roll_no=$_REQUEST['std_roll_no']; 
	  require "req.php";
 	
 	 $query="DELETE FROM student_table WHERE std_roll_no='".$std_roll_no."'";
		
		  if(!mysqli_query($con,$query))
		  {die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");}
		  else
		 {
		   
		  ?> 
		  
		  
		  <script>
alert(" Student Successfully  Deleted...");
window:location="student.php";
</script>
		   <?php
		   }
	 ?>
	 
	 
	 