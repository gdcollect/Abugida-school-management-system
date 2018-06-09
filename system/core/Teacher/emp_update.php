 
      <?php
	    
	  $id = $_POST['id'];
	  
       $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $dob = $_POST['dob'];
      $gender = $_POST['gender'];
      
      $phone= $_POST['phone'];
      $postition= $_POST['postition'];
      $class= $_POST['class'];
      $salary= $_POST['salary'];
	  $address= $_POST['address'];
	  
	  		     $con = mysqli_connect($host,$user,$password,$db);

	  
	$query=( "UPDATE  employee SET first_name='".$first_name."', last_name='".$last_name."', dob='".$dob."', 
	
	 gender ='".$gender."' ,phone='".$phone."',postition='".$postition."',class='".$class."',salary='".$salary."',address='".$address."' 
 
	WHERE 	id='".$id ."'");
		
			  
		  if(!mysqli_query($con,$query))
		  {die(mysql_error());}
		  else
		 {
		  ?>
		   <script>
alert(" successfully Updated ...");
window:location="employee.php";
</script>
		   <?php
		   }
	  
       
        ?> 
  