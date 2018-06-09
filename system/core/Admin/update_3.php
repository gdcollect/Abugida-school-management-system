 <?php
 	   $con = mysqli_connect($host,$user,$password,$db);

 
		   
  $m_id =($_REQUEST['m_id']);
  $std_roll_no =($_REQUEST['std_roll_no']);
		  $sec = ($_REQUEST['sec']);
		$name  = ($_REQUEST['name']);
	  $subject = ($_REQUEST['subject']);
		$grade = ($_REQUEST['grade']);
		
		
    
        $testA = ($_REQUEST['testA']);
		$testB = ($_REQUEST['testB']);
		$testC = ($_REQUEST['testC']); 
		$testD = ($_REQUEST['testD']);
		$test1 = ($_REQUEST['test1']);
		$test2 = ($_REQUEST['test2']);	
        $final = ($_REQUEST['final']);    
			
	    $testE = ($_REQUEST['testE']);
		$testF = ($_REQUEST['testF']);
		$testG = ($_REQUEST['testG']); 
		$testH = ($_REQUEST['testH']);	
		$test3 = ($_REQUEST['test3']);
		$test4 = ($_REQUEST['test4']);
		$finalI = ($_REQUEST['finalI']);
		
		
		$addition = $testA + $testB + $testC + $testD + $test1 + $test2 ;
		
		$addition2 = $testE + $testF + $testG + $testH + $test3 + $test4 ;
		
		$final_add = $addition + $final ;
		
		$final_adds2 = $addition2 + $finalI ;
	    
		$ave = ($final_add + $final_adds2)/2 ;
    
  
 
  
  
  $sql="UPDATE marklist SET     testA='".$testA."',
	testB='".$testB."', testC='".$testC."', testD='".$testD."',test1='".$test1."',test2='".$test2."',addition='".$addition."', final='".$final."',final_add='".$final_add."',
	
	
	
	
	testE='".$testE."', testF='".$testF."',
	testG='".$testG."', testH='".$testH."', test3='".$test3."', test4='".$test4."', addition2='".$addition2."', finalI='".$finalI."', final_adds2='".$final_adds2."' , ave='".$ave."' WHERE m_id ='".$m_id ."'";
		
   
  if($run = mysqli_query($con,$sql)){
		?>
		   <script>
alert("  successfully registered");
window:location="school_setup.php";

 </script>
		   <?php
 
 
}else{
echo '<P style=background:blue;color:white;padding:6px;>Sorry we were unable to register now.  </p>'.mysql_error();
}
    
   
  
  
 if (isset($_REQUEST['clear']))
       {
  $std_roll_no =""; 
		  $sec = ""; 
		$name  = ""; 
	  $subject = ""; 
		$grade = ""; 
		$testA = ""; 
		$testB = ""; 
		$testC = ""; 
		$testD = ""; 
		$test1 = ""; 
		$test2 = ""; 
		$final = ""; 
		$testE = ""; 
		$testF = ""; 
		$testG = ""; 
		$testH = ""; 
		$test3 = ""; 
		$test4 = ""; 
    	$finalI = ""; 
       }
    
 
 
?>
