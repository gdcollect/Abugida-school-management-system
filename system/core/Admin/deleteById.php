<?php 
  $con = mysqli_connect("localhost","root","woshti1234","register");
  
  $id = $_GET['id']; 

        $del = "DELETE FROM downloads where id = '$id'"; 

  if (mysqli_query($con,$del))
  {
	 ?>
		   <script>
alert(" successfully  Deleted");
window:location="upload.php";
</script>
		   <?php
	  
  }
						else{
							echo('Error : ' . mysqli_error());

						}

?>
