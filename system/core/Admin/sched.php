<?php  require 'top.php';
error_reporting(0);

?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Schedule
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Schedule Management</a></li>
         
      </ol>
    </section>
<?php

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
			
			$error_t="
			
			
			<span class='text-danger' align='center'>
			<table class='table table-bordered table-striped' style='margin-right:-10px'>
				<tr>	
					<td>Monday</td>
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
			
			$error_r="<span class='text-danger' align='center'>
			<table class='table table-bordered table-striped' style='margin-right:-10px'>
				<tr>
					<td>Monday</td>
					<td>$timer</td> 
					<td>Section $sectionr</td>
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
			
			$error_c="<span class='text-danger' align='center'>
			<table class='table table-bordered table-striped' style='margin-right:-10px'>
				<tr>
					<td>Monday</td>
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
				
			echo "<span class='text-success' align='center'>
			<table class='table table-bordered table-striped' style='margin-right:-10px'>
				<tr>
					<td>Monday</td>
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
			<table class='table table-bordered table-striped' style='margin-right:-10px'>
				<tr>	
					<td>Tuesday</td>
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
			<table class='table table-bordered table-striped' style='margin-right:-10px'>
				<tr>
					<td>Tuesday</td>
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
			<table class='table table-bordered table-striped' style='margin-right:-10px'>
				<tr>
					<td>Tuesday</td>
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
			<table class='table table-bordered table-striped' style='margin-right:-10px'>
				<tr>
					<td>Tuesday</td>
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
			<table class='table table-bordered table-striped' style='margin-right:-10px'>
				<tr>	
					<td>Wednesday</td>
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
			<table class='table table-bordered table-striped' style='margin-right:-10px'>
				<tr>
					<td>Wednesday</td>
					<td>$timer</td> 
					<td>Section $sectionr</td>
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
			<table class='table table-bordered table-striped' style='margin-right:-10px'>
				<tr>
					<td>Wednesday</td>
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
			<table class='table table-bordered table-striped' style='margin-right:-10px'>
				<tr>
					<td>Wednesday</td>
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
			<table class='table table-bordered table-striped' style='margin-right:-10px'>
				<tr>	
					<td>Thursday</td>
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
			<table class='table table-bordered table-striped' style='margin-right:-10px'>
				<tr>
					<td>Thursday</td>
					<td>$timer</td> 
					<td>Section $sectionr</td>
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
			<table class='table table-bordered table-striped' style='margin-right:-10px'>
				<tr>
					<td>Thursday</td>
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
			<table class='table table-bordered table-striped' style='margin-right:-10px'>
				<tr>
					<td>Thursday</td>
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
			<table class='table table-bordered table-striped' style='margin-right:-10px'>
				<tr>	
					<td>Friday</td>
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
			<table class='table table-bordered table-striped' style='margin-right:-10px'>
				<tr>
					<td>Friday</td>
					<td>$timer</td> 
					<td>Section $sectionr</td>
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
			<table class='table table-bordered table-striped' style='margin-right:-10px'>
				<tr>
					<td>Friday</td>
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
			<table class='table table-bordered table-striped' style='margin-right:-10px'>
				<tr>
					<td>Friday</td>
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
    <!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-3">
			<div class="box box-primary">
				<div class="box box-solid">
					<div class="box-header with-border">
					  <h4 class="box-title">  Input basic info</h4>
					</div>
					<div class="box-body">
						<form method="post" action="sched.php" id="reg-form">
						<!-- the events -->
							<div id="external-events" >
								<div class="form-group">
									<select style="color:grey" class="form-control select2" name="teacher" required>
										<option value=""> Teacher</option>
									  <?php 
										$query2=mysqli_query($con,"select * from teacher_table order by first_name")or die(mysqli_error($con));
										  while($row=mysqli_fetch_array($query2)){
									  ?>
											<option value="<?php echo $row['teacher_id'];?>"><?php echo $row['first_name']."  ".$row['last_name'];?></option>
									  <?php }
										
									  ?>
									</select>
								</div>
								<div class="form-group">
								<select style="color:grey" class="form-control select2" name="subject" required>
									<option value=""> Subject</option>
								  <?php 
									$query2=mysqli_query($con,"select * from subject ")or die(mysqli_error($con));
									 while($row=mysqli_fetch_array($query2)){
								  ?>
										<option><?php echo $row['subject'];?></option>
								  <?php }
									
								  ?>
								</select>
								</div>
								<div class="form-group">
								<select style="color:grey" class="form-control select2" name="section" required>
									<option value=""> Section</option>
								  <?php 
									$query2=mysqli_query($con,"select * from section ")or die(mysqli_error($con));
									 while($row=mysqli_fetch_array($query2)){
								  ?>
										<option><?php echo $row['sec'];?></option>
								  <?php }
									
								  ?>
								</select>
								</div>
								<div  class="form-group">
								<select style="color:grey" class="form-control"   required id="sex"  name="grade">
									<option> Grade </option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
								</select>
								</div>
								<div class="form-group">
									<textarea style="color:grey" name="remarks" cols="30" placeholder="enclose remarks with parenthesis()"></textarea>	
								</div>
								<div class="form-group">
									<button class="btn bg-navy btn-flat"   id="daterange-btn" name="save" type="submit">
										Save schedule
									</button>
									<button class="btn btn-default btn-flat" type="reset">Uncheck All</button>
									</div>
							</div>
					</div>
						<!-- /.box-body -->
				</div> 
			</div>
					<!-- /. box --> 
		<div class="box box-primary">
			<div class="box box-solid">
				<div class="box-header with-border">
				  <h4 class="box-title">  Select Schedule</h4>
				</div>
				<div class="box-body">
					<!-- the events -->
					<div id="external-events">
						<div class="form-group">
							<a href="#searcht" data-target="#searcht" data-toggle="modal" class="dropdown-toggle btn bg-purple btn-flat ">
							 
							  Teacher				
							</a>
							<a href="#searchclass" data-target="#searchclass" data-toggle="modal" class="dropdown-toggle btn bg-navy  btn-flat">
							 
							  Class				
							</a>  
							<a href="../../core/admin/sched.php"   class="dropdown-toggle btn btn-default  btn-flat">
							 <i class="glyphicon glyphicon-refresh"></i>&nbsp; Refrash
							 		
							</a>  
						</div> 
					</div>
				</div>
				<!-- /.box-body -->
			</div> 
		</div>
	</div>
        <!-- /.col -->
	<div class="col-md-9"> 
		<div class="box box-primary">
			<div class="box-body no-padding">
				<div class="box-header with-border">
					<h4 class="box-title">  Input your schedule</h4>
				</div>
				<div class="box-body">
					<table class="table table-bordered table-striped" style="margin-right:-10px">
						<thead>
							<tr>
								<th>Time</th>
								<th>Monday</th>
								<th>Tuesday</th>
								<th>Wednesday</th>
								<th>Thursday</th>
								<th>Friday</th>
							</tr>
						</thead>
<?php	
							$con = mysqli_connect($host,$user,$password,$db);
							$query=mysqli_query($con,"select * from time   order by time_start")or die(mysqli_error());
							while($row=mysqli_fetch_array($query))
							{
								$id=$row['time_id'];
								$start=date("h:i a",strtotime($row['time_start']));
								$end=date("h:i a",strtotime($row['time_end']));
								$num++;
?>						
							<tr style="color:grey">
								<td><?php echo $num ;?>  &nbsp; &nbsp; &nbsp; <?php echo $start."-".$end;;?></td>
								<td><input type="checkbox" id="check" name="m[]" value="<?php echo $id;?>" style="width: 20px; height: 20px;"></td>
								<td><input type="checkbox" id="check" name="t[]" value="<?php echo $id;?>" style="width: 20px; height: 20px;"></td>
								<td><input type="checkbox" id="check" name="w[]" value="<?php echo $id;?>" style="width: 20px; height: 20px;"></td>
								<td><input type="checkbox" id="check" name="th[]" value="<?php echo $id;?>" style="width: 20px; height: 20px;"></td>
								<td><input type="checkbox" id="check" name="f[]" value="<?php echo $id;?>" style="width: 20px; height: 20px;"></td>
							</tr>
				
<?php }?>					  
					</table>    	
				</div>  
			</div>
		</div>
	</div>
						 </form>	
</div>
	 
	 
	 
	 
<div id="searcht" class="modal fade in" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content" style="height:auto">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">×</span></button>
			<h4 class="modal-title">Search Teacher Schedule</h4>
		  </div>
				<div class="modal-body">
					<form   method="post" action="teacher_sched.php" target="_blank">
			
						<div class="form-group ">
									<select  style="color:grey" class="form-control select2 " name="teacher1" required>
										<option value=""> Teacher</option>
									  <?php 
										$query2=mysqli_query($con,"select * from teacher_table order by first_name")or die(mysqli_error($con));
										  while($row=mysqli_fetch_array($query2)){
									  ?>
											<option value="<?php echo $row['teacher_id'];?>"><?php echo $row['first_name']."  ".$row['last_name'];?></option>
									  <?php }
										
									  ?>
									</select>
						</div>
			
				</div><hr>
				  <div class="modal-footer">
					<button type="submit" name="teacher" class=" btn bg-purple btn-flat">Display Schedule</button>
					<button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
				  </div>
				</form>
		</div>
	</div><!--end of modal-dialog-->
</div>
<!--end of modal--> 
 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.0
    </div>
    <strong>Copyright &copy; 2016-2017 <a href="#">Abugida Sms</a>.</strong> All rights
    reserved. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <b>Developed By</b> <a href="#"><b>Kenean Alemayehu  </b></a>.
	 <div  >
	 
     
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
       
      </div>
      
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

<script type="text/javascript">
$(document).on('submit', '#reg-form', function()
 {  
  $.post('submit.php', $(this).serialize(), function(data)
  {
   $(".result").html(data);  
   $("#form1")[0].reset();
  // $("#check").reset();

  });
  
  return false;
  

})
</script>
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<script src="../../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.min.js"></script>

<script src="../../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../dist/js/demo.js"></script>
<!-- page script -->

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
