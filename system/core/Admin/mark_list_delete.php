 <?php 
 	 $m_id=$_REQUEST['m_id']; 
	        $con = mysqli_connect($host,$user,$password,$db);

	  
	 $query="DELETE FROM marklist WHERE m_id=$m_id ";
		
		  if(!mysqli_query($con,$query))
		  {
			  die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");
			  
			  }
		  else
		 {
		   
		  ?> 
		  
		  
		  <script>
alert("  Successfully  Deleted. Thanks...");
window:location="all_mark_list.php";
</script>
		   <?php
		   }
	 ?>