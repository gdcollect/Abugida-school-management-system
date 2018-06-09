<?php
require"req.php";
$con = mysqli_connect($host,$user,$password,$db);

if($_POST)
{
    $teacher = $_POST['teacher'];
	$subject = $_POST['subject'];
	$section = $_POST['section'];
	$grade = $_POST['grade'];
	$remarks = $_POST['remarks'];
 
    $m = $_POST['m'];
	$t = $_POST['t'];
	$w = $_POST['w'];
	$th = $_POST['th'];
	$f = $_POST['f'];

	//monday sched
	foreach ($m as $daym){
		//check conflict for member
		$query_member=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join teacher_table natural join time where teacher_id='$teacher' and schedule.time_id='$daym' and day='m'")or die(mysqli_error($con));
			$row=mysqli_fetch_array($query_member);
			$count_t=$row['count'];
			$time1=date("h:i a",strtotime($row['time_start']))."-".date("h:i a",strtotime($row['time_end']));
			$teacher1=$row['first_name'].", ".$row['last_name'];
			
			$error_t="<span class='text-danger'>
			<table width='100%'>
				<tr>	
					<td>monday</td>
					<td>$time1</td> 
					<td>$teacher1</td>
					<td class='text-danger'><b>Not Available</b></td>					
				</tr>
				</span>
			</table>";
			
			
			
			//check conflict for section
		$query_room=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join teacher_table natural join time where section='$section' and schedule.time_id='$daym' and day='m'")or die(mysqli_error($con));
			$rowr=mysqli_fetch_array($query_room);
			$count_r=$rowr['count'];
			$timer=date("h:i a",strtotime($rowr['time_start']))."-".date("h:i a",strtotime($rowr['time_end']));
			$sectionr=$rowr['section'];
			
			$error_r="<span class='text-danger'>
			<table width='100%'>
				<tr>
					<td>monday</td>
					<td>$timer</td> 
					<td>Room $sectionr</td>
					<td class='text-danger'><b>Not Available</b></td>					
				</tr>
				</span>
			</table>";
			
			
			//check conflict for class
		$query_class=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join teacher_table natural join time where grade='$grade' and schedule.time_id='$daym' and day='m'")or die(mysqli_error($con));
			$rowc=mysqli_fetch_array($query_class);
			$count_c=$rowc['count'];
			$gradec=$rowc['grade'];
			$timec=date("h:i a",strtotime($rowc['time_start']))."-".date("h:i a",strtotime($rowc['time_end']));
			
			$error_c="<span class='text-danger'>
			<table width='100%'>
				<tr>
					<td>monday</td>
					<td>$timec</td> 
					<td>$gradec</td>
					<td class='text-danger'><b>Not Available</b>	</td>					
				</tr>
			</table></span>";	
			
			
			$queryt=mysqli_query($con,"select * from teacher_table where teacher_id='$teacher'")or die(mysqli_error($con));
				$rowt=mysqli_fetch_array($queryt);
				$teachert=$rowt['first_name'].", ".$rowt['last_name'];
			
		$querytime=mysqli_query($con,"select * from time where time_id='$daym'")or die(mysqli_error($con));
				$rowt=mysqli_fetch_array($querytime);
				$timet=date("h:i a",strtotime($rowt['time_start']))."-".date("h:i a",strtotime($rowt['time_end']));	
		
		
		if (($count_t==0) and ($count_r==0) and ($count_c==0))
		{
			mysqli_query($con,"INSERT INTO schedule(time_id,day,teacher_id,subject,section,grade,remarks) 
				VALUES('$daym','m','$teacher','$subject','$section','$grade','$remarks')")or die(mysqli_error());
				
			echo "<span class='text-success'>
			<table width='100%'>
				<tr>
					<td>monday</td>
					<td>$timet</td> 
					
					<td>Success</td>					
				</tr>
			</table></span><br>";	
		}
					
		else if ($count_t>0) echo $error_t."<br>";
		else if ($count_r>0) echo $error_r."<br>";
		else {echo $error_c."<br>";}	
 
	}
		
		
		
		
		//tusday sched
	foreach ($t as $daym){
		//check conflict for member
		$query_member=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join teacher_table natural join time where teacher_id='$teacher' and schedule.time_id='$daym' and day='t'")or die(mysqli_error($con));
			$row=mysqli_fetch_array($query_member);
			$count_t=$row['count'];
			$time1=date("h:i a",strtotime($row['time_start']))."-".date("h:i a",strtotime($row['time_end']));
			$teacher1=$row['first_name'].", ".$row['last_name'];
			
			$error_t="<span class='text-danger'>
			<table width='100%'>
				<tr>	
					<td>monday</td>
					<td>$time1</td> 
					<td>$teacher1</td>
					<td class='text-danger'><b>Not Available</b></td>					
				</tr>
				</span>
			</table>";
			
			
			
			//check conflict for section
		$query_room=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join teacher_table natural join time where section='$section' and schedule.time_id='$daym' and day='t'")or die(mysqli_error($con));
			$rowr=mysqli_fetch_array($query_room);
			$count_r=$rowr['count'];
			$timer=date("h:i a",strtotime($rowr['time_start']))."-".date("h:i a",strtotime($rowr['time_end']));
			$sectionr=$rowr['section'];
			
			$error_r="<span class='text-danger'>
			<table width='100%'>
				<tr>
					<td>monday</td>
					<td>$timer</td> 
					<td>Room $sectionr</td>
					<td class='text-danger'><b>Not Available</b></td>					
				</tr>
				</span>
			</table>";
			
			
			//check conflict for class
		$query_class=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join teacher_table natural join time where grade='$grade' and schedule.time_id='$daym' and day='t'")or die(mysqli_error($con));
			$rowc=mysqli_fetch_array($query_class);
			$count_c=$rowc['count'];
			$gradec=$rowc['grade'];
			$timec=date("h:i a",strtotime($rowc['time_start']))."-".date("h:i a",strtotime($rowc['time_end']));
			
			$error_c="<span class='text-danger'>
			<table width='100%'>
				<tr>
					<td>monday</td>
					<td>$timec</td> 
					<td>$gradec</td>
					<td class='text-danger'><b>Not Available</b>	</td>					
				</tr>
			</table></span>";	
			
			
			$queryt=mysqli_query($con,"select * from teacher_table where teacher_id='$teacher'")or die(mysqli_error($con));
				$rowt=mysqli_fetch_array($queryt);
				$teachert=$rowt['first_name'].", ".$rowt['last_name'];
			
		$querytime=mysqli_query($con,"select * from time where time_id='$daym'")or die(mysqli_error($con));
				$rowt=mysqli_fetch_array($querytime);
				$timet=date("h:i a",strtotime($rowt['time_start']))."-".date("h:i a",strtotime($rowt['time_end']));	
		
		
		if (($count_t==0) and ($count_r==0) and ($count_c==0))
		{
			mysqli_query($con,"INSERT INTO schedule(time_id,day,teacher_id,subject,section,grade,remarks) 
				VALUES('$daym','t','$teacher','$subject','$section','$grade','$remarks')")or die(mysqli_error());
				
			echo "<span class='text-success'>
			<table width='100%'>
				<tr>
					<td>monday</td>
					<td>$timet</td> 
					
					<td>Success</td>					
				</tr>
			</table></span><br>";	
		}
					
		else if ($count_t>0) echo $error_t."<br>";
		else if ($count_r>0) echo $error_r."<br>";
		else {echo $error_c."<br>";}	
 
		
	}
 
 
 
 //wednesday sched
	foreach ($w as $daym){
		//check conflict for member
		$query_member=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join teacher_table natural join time where teacher_id='$teacher' and schedule.time_id='$daym' and day='w'")or die(mysqli_error($con));
			$row=mysqli_fetch_array($query_member);
			$count_t=$row['count'];
			$time1=date("h:i a",strtotime($row['time_start']))."-".date("h:i a",strtotime($row['time_end']));
			$teacher1=$row['first_name'].", ".$row['last_name'];
			
			$error_t="<span class='text-danger'>
			<table width='100%'>
				<tr>	
					<td>monday</td>
					<td>$time1</td> 
					<td>$teacher1</td>
					<td class='text-danger'><b>Not Available</b></td>					
				</tr>
				</span>
			</table>";
			
			
			
			//check conflict for section
		$query_room=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join teacher_table natural join time where section='$section' and schedule.time_id='$daym' and day='w'")or die(mysqli_error($con));
			$rowr=mysqli_fetch_array($query_room);
			$count_r=$rowr['count'];
			$timer=date("h:i a",strtotime($rowr['time_start']))."-".date("h:i a",strtotime($rowr['time_end']));
			$sectionr=$rowr['section'];
			
			$error_r="<span class='text-danger'>
			<table width='100%'>
				<tr>
					<td>monday</td>
					<td>$timer</td> 
					<td>Room $sectionr</td>
					<td class='text-danger'><b>Not Available</b></td>					
				</tr>
				</span>
			</table>";
			
			
			//check conflict for class
		$query_class=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join teacher_table natural join time where grade='$grade' and schedule.time_id='$daym' and day='w'")or die(mysqli_error($con));
			$rowc=mysqli_fetch_array($query_class);
			$count_c=$rowc['count'];
			$gradec=$rowc['grade'];
			$timec=date("h:i a",strtotime($rowc['time_start']))."-".date("h:i a",strtotime($rowc['time_end']));
			
			$error_c="<span class='text-danger'>
			<table width='100%'>
				<tr>
					<td>monday</td>
					<td>$timec</td> 
					<td>$gradec</td>
					<td class='text-danger'><b>Not Available</b>	</td>					
				</tr>
			</table></span>";	
			
			
			$queryt=mysqli_query($con,"select * from teacher_table where teacher_id='$teacher'")or die(mysqli_error($con));
				$rowt=mysqli_fetch_array($queryt);
				$teachert=$rowt['first_name'].", ".$rowt['last_name'];
			
		$querytime=mysqli_query($con,"select * from time where time_id='$daym'")or die(mysqli_error($con));
				$rowt=mysqli_fetch_array($querytime);
				$timet=date("h:i a",strtotime($rowt['time_start']))."-".date("h:i a",strtotime($rowt['time_end']));	
		
		
		if (($count_t==0) and ($count_r==0) and ($count_c==0))
		{
			mysqli_query($con,"INSERT INTO schedule(time_id,day,teacher_id,subject,section,grade,remarks) 
				VALUES('$daym','w','$teacher','$subject','$section','$grade','$remarks')")or die(mysqli_error());
				
			echo "<span class='text-success'>
			<table width='100%'>
				<tr>
					<td>monday</td>
					<td>$timet</td> 
					
					<td>Success</td>					
				</tr>
			</table></span><br>";	
		}
					
		else if ($count_t>0) echo $error_t."<br>";
		else if ($count_r>0) echo $error_r."<br>";
		else {echo $error_c."<br>";}	
 
		
	}
		
		
 //th sched
	foreach ($th as $daym){
		//check conflict for member
		$query_member=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join teacher_table natural join time where teacher_id='$teacher' and schedule.time_id='$daym' and day='th'")or die(mysqli_error($con));
			$row=mysqli_fetch_array($query_member);
			$count_t=$row['count'];
			$time1=date("h:i a",strtotime($row['time_start']))."-".date("h:i a",strtotime($row['time_end']));
			$teacher1=$row['first_name'].", ".$row['last_name'];
			
			$error_t="<span class='text-danger'>
			<table width='100%'>
				<tr>	
					<td>monday</td>
					<td>$time1</td> 
					<td>$teacher1</td>
					<td class='text-danger'><b>Not Available</b></td>					
				</tr>
				</span>
			</table>";
			
			
			
			//check conflict for section
		$query_room=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join teacher_table natural join time where section='$section' and schedule.time_id='$daym' and day='th'")or die(mysqli_error($con));
			$rowr=mysqli_fetch_array($query_room);
			$count_r=$rowr['count'];
			$timer=date("h:i a",strtotime($rowr['time_start']))."-".date("h:i a",strtotime($rowr['time_end']));
			$sectionr=$rowr['section'];
			
			$error_r="<span class='text-danger'>
			<table width='100%'>
				<tr>
					<td>monday</td>
					<td>$timer</td> 
					<td>Room $sectionr</td>
					<td class='text-danger'><b>Not Available</b></td>					
				</tr>
				</span>
			</table>";
			
			
			//check conflict for class
		$query_class=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join teacher_table natural join time where grade='$grade' and schedule.time_id='$daym' and day='th'")or die(mysqli_error($con));
			$rowc=mysqli_fetch_array($query_class);
			$count_c=$rowc['count'];
			$gradec=$rowc['grade'];
			$timec=date("h:i a",strtotime($rowc['time_start']))."-".date("h:i a",strtotime($rowc['time_end']));
			
			$error_c="<span class='text-danger'>
			<table width='100%'>
				<tr>
					<td>monday</td>
					<td>$timec</td> 
					<td>$gradec</td>
					<td class='text-danger'><b>Not Available</b>	</td>					
				</tr>
			</table></span>";	
			
			
			$queryt=mysqli_query($con,"select * from teacher_table where teacher_id='$teacher'")or die(mysqli_error($con));
				$rowt=mysqli_fetch_array($queryt);
				$teachert=$rowt['first_name'].", ".$rowt['last_name'];
			
		$querytime=mysqli_query($con,"select * from time where time_id='$daym'")or die(mysqli_error($con));
				$rowt=mysqli_fetch_array($querytime);
				$timet=date("h:i a",strtotime($rowt['time_start']))."-".date("h:i a",strtotime($rowt['time_end']));	
		
		
		if (($count_t==0) and ($count_r==0) and ($count_c==0))
		{
			mysqli_query($con,"INSERT INTO schedule(time_id,day,teacher_id,subject,section,grade,remarks) 
				VALUES('$daym','th','$teacher','$subject','$section','$grade','$remarks')")or die(mysqli_error());
				
			echo "<span class='text-success'>
			<table width='100%'>
				<tr>
					<td>monday</td>
					<td>$timet</td> 
					
					<td>Success</td>					
				</tr>
			</table></span><br>";	
		}
					
		else if ($count_t>0) echo $error_t."<br>";
		else if ($count_r>0) echo $error_r."<br>";
		else {echo $error_c."<br>";}
		
		
	}
		
 	
		
 //th sched
	foreach ($f as $daym){
		//check conflict for member
		$query_member=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join teacher_table natural join time where teacher_id='$teacher' and schedule.time_id='$daym' and day='f'")or die(mysqli_error($con));
			$row=mysqli_fetch_array($query_member);
			$count_t=$row['count'];
			$time1=date("h:i a",strtotime($row['time_start']))."-".date("h:i a",strtotime($row['time_end']));
			$teacher1=$row['first_name'].", ".$row['last_name'];
			
			$error_t="<span class='text-danger'>
			<table width='100%'>
				<tr>	
					<td>monday</td>
					<td>$time1</td> 
					<td>$teacher1</td>
					<td class='text-danger'><b>Not Available</b></td>					
				</tr>
				</span>
			</table>";
			
			
			
			//check conflict for section
		$query_room=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join teacher_table natural join time where section='$section' and schedule.time_id='$daym' and day='f'")or die(mysqli_error($con));
			$rowr=mysqli_fetch_array($query_room);
			$count_r=$rowr['count'];
			$timer=date("h:i a",strtotime($rowr['time_start']))."-".date("h:i a",strtotime($rowr['time_end']));
			$sectionr=$rowr['section'];
			
			$error_r="<span class='text-danger'>
			<table width='100%'>
				<tr>
					<td>monday</td>
					<td>$timer</td> 
					<td>Room $sectionr</td>
					<td class='text-danger'><b>Not Available</b></td>					
				</tr>
				</span>
			</table>";
			
			
			//check conflict for class
		$query_class=mysqli_query($con,"select *,COUNT(*) as count from schedule 
		natural join teacher_table natural join time where grade='$grade' and schedule.time_id='$daym' and day='f'")or die(mysqli_error($con));
			$rowc=mysqli_fetch_array($query_class);
			$count_c=$rowc['count'];
			$gradec=$rowc['grade'];
			$timec=date("h:i a",strtotime($rowc['time_start']))."-".date("h:i a",strtotime($rowc['time_end']));
			
			$error_c="<span class='text-danger'>
			<table width='100%'>
				<tr>
					<td>monday</td>
					<td>$timec</td> 
					<td>$gradec</td>
					<td class='text-danger'><b>Not Available</b>	</td>					
				</tr>
			</table></span>";	
			
			
			$queryt=mysqli_query($con,"select * from teacher_table where teacher_id='$teacher'")or die(mysqli_error($con));
				$rowt=mysqli_fetch_array($queryt);
				$teachert=$rowt['first_name'].", ".$rowt['last_name'];
			
		$querytime=mysqli_query($con,"select * from time where time_id='$daym'")or die(mysqli_error($con));
				$rowt=mysqli_fetch_array($querytime);
				$timet=date("h:i a",strtotime($rowt['time_start']))."-".date("h:i a",strtotime($rowt['time_end']));	
		
		
		if (($count_t==0) and ($count_r==0) and ($count_c==0))
		{
			mysqli_query($con,"INSERT INTO schedule(time_id,day,teacher_id,subject,section,grade,remarks) 
				VALUES('$daym','f','$teacher','$subject','$section','$grade','$remarks')")or die(mysqli_error());
				
			echo "<span class='text-success'>
			<table width='100%'>
				<tr>
					<td>monday</td>
					<td>$timet</td> 
					
					<td>Success</td>					
				</tr>
			</table></span><br>";	
		}
					
		else if ($count_t>0) echo $error_t."<br>";
		else if ($count_r>0) echo $error_r."<br>";
		else {echo $error_c."<br>";}
		
		
	}
	  } 
?>