 
      <?php
	   require "req.php" ;
	  $teacher_id = $_REQUEST['teacher_id'];
	  
	  $firstName = $_REQUEST['name'];
      $lastName = $_REQUEST['lname'];
      $dob = $_REQUEST['dob'];
      $gender = $_REQUEST['gender'];
      $email = $_REQUEST['email'];
      $phone= $_REQUEST['phone'];
      $degree= $_REQUEST['degree'];
      $salary= $_REQUEST['salary'];
      $address= $_REQUEST['address'];
      
	  		         $con = mysqli_connect($host,$user,$password,$db);

	  
	  
 	  
	$query=("UPDATE  teacher_table SET first_name='".$firstName."', last_name='".$lastName."', dob='".$dob."', 
	
	email='".$email."',gender ='".$gender."' ,phone='".$phone."',degree='".$degree."',salary='".$salary."',address='".$address."' 
 
	WHERE 	teacher_id ='".$teacher_id ."'");
		
			  
		  if(!mysqli_query($con,$query))
		  {die(mysqli_error());}
		  else
		 {
		  ?>
		   <script>
alert("You have successfully updated");
window:location="teacher.php";
</script>
		   <?php
		   }
	  
       
        ?> 
  