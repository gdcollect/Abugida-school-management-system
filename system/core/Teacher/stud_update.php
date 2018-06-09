 
      <?php
	  require "req.php";
	  $std_roll_no = $_REQUEST['std_roll_no'];
	  $studentname = $_REQUEST['studentname'];
	        $lname = $_REQUEST['lname'];
              $dob = $_REQUEST['dob'];
	          $age = $_REQUEST['age'];
           $gender = $_REQUEST['gender'];
	          $phone = $_REQUEST['phone'];
             $Phone_2 = $_REQUEST['Phone_2'];
			 $gurdian = $_REQUEST['gurdian'];
			 $grade = $_REQUEST['grade'];
			 $Program = $_REQUEST['Program'];
			         $con = mysqli_connect($host,$user,$password,$db);
 
	$query=("UPDATE student_table SET studentName='".$studentname."', lname='".$lname."', dob='".$dob."', 
	
	age='".$age."',gender ='".$gender."' ,phone='".$phone."',Phone_2='".$Phone_2."',gurdian='".$gurdian."',
	
	grade='".$grade."',Program='".$Program."'


	WHERE std_roll_no ='".$std_roll_no ."'");
		
			  if(!mysqli_query($con,$query))
		  {die ("An unexpected error occured while saving the record, Please try again!");}
		  else
		 {
		   ?>
		   <script>
alert("student successfully updated. ");
window:location="student.php";
</script>
		   <?php
		   }
	  
       
        ?> 
  