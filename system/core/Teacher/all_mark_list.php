<?php  require 'top.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mark List 
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Mark List  Management</a></li>
         
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
           
          <!-- /.box -->

		  
		  
		  
		  
		  
		  
		  <?php
		         $con = mysqli_connect($host,$user,$password,$db);

 				 
				 
				 
				 $grade1f = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'female' AND grade = '1' ");
				 $r_grade1f = mysqli_num_rows($grade1f);
				 
				 
				 $grade2m = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'male' AND grade = '2' ");
				 $r_grade2m= mysqli_num_rows($grade2m);
				 
				 $grade2f = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'female' AND grade = '2' ");
				 $r_grade2f = mysqli_num_rows($grade2f);
				 
				 
				 $grade3m = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'male' AND grade = '3' ");
				 $r_grade3m= mysqli_num_rows($grade3m);
				 
				 $grade3f = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'female' AND grade = '3' ");
				 $r_grade3f = mysqli_num_rows($grade3f);
				 
				 
				 $grade4m = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'male' AND grade = '4' ");
				 $r_grade4m= mysqli_num_rows($grade4m);
				 
				 $grade4f = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'female' AND grade = '4' ");
				 $r_grade4f = mysqli_num_rows($grade4f);
				 
				 
				 
				 $grade5m = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'male' AND grade = '5' ");
				 $r_grade5m= mysqli_num_rows($grade5m);
				 
				 $grade5f = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'female' AND grade = '5' ");
				 $r_grade5f = mysqli_num_rows($grade5f);
				 
				 
				 $grade6m = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'male' AND grade = '6' ");
				 $r_grade6m= mysqli_num_rows($grade6m);
				 
				 $grade6f = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'female' AND grade = '6' ");
				 $r_grade6f = mysqli_num_rows($grade6f);
				 
				 
				 
				 $grade7m = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'male' AND grade = '7' ");
				 $r_grade7m= mysqli_num_rows($grade7m);
				 
				 $grade7f = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'female' AND grade = '7' ");
				 $r_grade7f = mysqli_num_rows($grade7f);
				 
				 
				 $grade8m = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'male' AND grade = '8' ");
				 $r_grade8m= mysqli_num_rows($grade8m);
				 
				 $grade8f = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'female' AND grade = '8' ");
				 $r_grade8f = mysqli_num_rows($grade8f);
				 
				 
				 
				 $grade9m = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'male' AND grade = '9' ");
				 $r_grade9m= mysqli_num_rows($grade9m);
				 
				 $grade9f = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'female' AND grade = '9' ");
				 $r_grade9f = mysqli_num_rows($grade9f);
				 
				 
				 $grade10m = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'male' AND grade = '10' ");
				 $r_grade10m= mysqli_num_rows($grade10m);
				 
				 $grade10f = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'female' AND grade = '10' ");
				 $r_grade10f = mysqli_num_rows($grade10f);
				 
				 
				 $grade11m = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'male' AND grade = '11' ");
				 $r_grade1m= mysqli_num_rows($grade10m);
				 
				 $grade11f = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'female' AND grade = '11' ");
				 $r_grade11f = mysqli_num_rows($grade11f);
				 
				 
				 
				 $grade12m = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'male' AND grade = '12' ");
				 $r_grade12m= mysqli_num_rows($grade12m);
				 
				 $grade12f = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'female' AND grade = '12' ");
				 $r_grade12f = mysqli_num_rows($grade12f);
				 
				 
				
				 ?>
	
		  
		  
		  
		  
		  
		   <div class="row">
        <div class="col-md-3">
		  <div class="box box-primary">
            <div class="box-body no-padding">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h4 class="box-title">  Action</h4>
            </div>
			
            <div class="box-body">
              <!-- the events -->
              <div id="external-events">
 		  <a href="../../core/teacher/all_mark_list.php"  class="btn bg-purple btn-flat  "><i class="glyphicon glyphicon-refresh"></i>&nbsp; &nbsp; Refrash</a> 
		<button type="button" onclick="window.print()" class="btn bg-navy btn-flat  ">Print/Export PDF</button>

                
               
              </div>
            </div>
            <!-- /.box-body -->
          </div> </div></div>
          <!-- /. box -->
		  <div class="box box-primary">
            <div class="box-body no-padding">
		 
          <div class="box box-solid">
            <div class="box-header with-border">
              <h5 class="box-title">Search Student Mark List</h5>
            </div>
			
            <div class="box-body">
             
              <!-- /btn-group -->
              <div class="input-group">
                <input id="new-event" type="text" class="form-control" placeholder="Name ">

                <div class="input-group-btn">
                  <button id="add-new-event" type="button" class="btn bg-navy btn-flat">Search</button>
                </div>
                <!-- /btn-group -->
              </div>
              <!-- /input-group --> 
            </div>
          </div>
        </div>
		 </div>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
         
		 
	<?php 
     $con = mysqli_connect($host,$user,$password,$db);
  if (isset($_REQUEST['saved']))
       {
		   
  $std_roll_no = ($_REQUEST['std_roll_no']);
		  $sec = ($_REQUEST['sec']);
		$name  = ($_REQUEST['name']);
	  $subject = ($_REQUEST['subject']);
		$grade = ($_REQUEST['grade']);
		$teacher = $userRow['userId'];
		
		
    
        
   $query = "SELECT * FROM marklist WHERE std_roll_no='$std_roll_no'  AND subject='$subject' " ;
				$result = mysqli_query($con,$query);
				$count = mysqli_num_rows($result);
				if($count!=0){
					$error = true;
					?>
					<div class="box-body">
          <div class="row">
            <div class="col-md-6">
		 <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Alert!</h4>
              Provided Mark List Already Exist!
              </div></div></div>
			  
 	 <?php
			 
	}else{
  
  
  $insert = "INSERT INTO `marklist` (`std_roll_no`,`sec`,`name`,`subject`,`grade` ,`teacher` )
             VALUES 
			 ('$std_roll_no','$sec','$name','$subject','$grade','$teacher')";
	  
  
   
  if($run = mysqli_query($con,$insert)){
		?>
		   <script>
alert("  successfully registered");
 </script>
		   <?php
 
 
}else{
echo '<P style=background:blue;color:white;padding:6px;>Sorry we were unable to register now.  </p>'.mysql_error();
}
    }
    }
  
  
  
 
?>
    
		 
	  <form action="#" method="post" role="form">
	  
	  
	   <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Basic Information</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
             <input type="text" class="form-control" id="std_roll_no"  placeholder="Roll No"  required  name="std_roll_no">
           </div>
              <!-- /.form-group -->
              <div class="form-group">
                <div class="form-group">
            <select  class="form-control"   required id="sex"   name="sec">
           <option> Section </option>
           <option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
			<option value="D">D</option>
			<option value="E">E</option>
			<option value="F">F</option>
			<option value="G">G</option>
			<option value="H">H</option>
			 
           </select>
          </div>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <div      class="form-group">
             <input type="text" class="form-control" required id="name"    placeholder="Name "  name="name">
          </div>
              </div>
              <!-- /.form-group -->
               <div class="form-group">
      	 
            <select class="form-control" style="color:grey"  name="subject" >
	   						<option value="">Subject</option>

	   <?php 
				 $con = mysqli_connect($host,$user,$password,$db);

					$query2=mysqli_query($con,"select * from subject  ")or die(mysqli_error($con));
					  while($row=mysqli_fetch_array($query2)){
				  ?>
						<option value="<?php echo $row['subject'];?>"><?php echo $row['subject'];?></option>
				  <?php }
					
				  ?>
				 </select>
		 	
        </div>
              <!-- /.form-group -->
            </div>
			 <div class="col-md-6">
              <div  class="form-group">
         
            <select  class="form-control"   required id="sex"  name="grade">
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
              <!-- /.form-group -->
              
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
           <button type="submit" class="btn bg-navy btn-flat  "name="saved"> Add </button>
          <button type="reset" class="btn btn-default btn-flat" name="clear"> Clear </button>
		  
        </div>
      </div>
      <!-- /.box -->
	 
	  </form>
          <!-- /. box -->
        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->
		
		
		
		

		
		
		
		
		   <div class="row">
		<div class="col-md-12">
         
		  <div class="box box-primary">
            <div class="box-body no-padding">
		 
		
		  <div class="box-header with-border">
              <h4 class="box-title">  Select Grade Level</h4>
            </div>
		 
		 
		  
		   <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-purple">
		  <?php
			$userId= $userRow['userId'];

		  $grade1 = mysqli_query($con,"select * FROM `marklist` WHERE  grade = '1' AND `teacher`='$userId' ");
				 $r_grade1 = mysqli_num_rows($grade1);
				 
 		  
		  ?>
   <span class="info-box-icon"><a href="../../core/teacher/gradem.php?grade=1" class="btn bg-navy btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
				
            <div class="info-box-content">
              <span class="info-box-text">Grade</span>
              <span class="info-box-number">1</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
                  <span class="progress-description">
                   <?php   echo  $r_grade1 ;?>   Mark list
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-purple">
		  <?php

		  $grade2 = mysqli_query($con,"select * FROM `marklist` WHERE  grade = '2' AND `teacher`='$userId' ");
				 $r_grade2 = mysqli_num_rows($grade2);
				 
 		  
		  ?>
   <span class="info-box-icon"><a href="../../core/teacher/gradem.php?grade=2"class="btn bg-navy btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
				
            <div class="info-box-content">
              <span class="info-box-text">Grade</span>
              <span class="info-box-number">2</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
                  <span class="progress-description">
                   <?php   echo  $r_grade2 ;?>   Mark list
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-purple">
		  <?php

		  $grade3 = mysqli_query($con,"select * FROM `marklist` WHERE  grade = '3' AND `teacher`='$userId' ");
				 $r_grade3 = mysqli_num_rows($grade3);
				 
 		  
		  ?>
   <span class="info-box-icon"><a href="../../core/teacher/gradem.php?grade=3"class="btn bg-navy btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
				
            <div class="info-box-content">
              <span class="info-box-text">Grade</span>
              <span class="info-box-number">3</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
                  <span class="progress-description">
                   <?php   echo  $r_grade3 ;?>   Mark list
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
       <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-purple">
		  <?php

		  $grade4 = mysqli_query($con,"select * FROM `marklist` WHERE  grade = '4' AND `teacher`='$userId' ");
				 $r_grade4 = mysqli_num_rows($grade4);
				 
 		  
		  ?>
   <span class="info-box-icon"><a href="../../core/teacher/gradem.php?grade=4"class="btn bg-navy btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
				
            <div class="info-box-content">
              <span class="info-box-text">Grade</span>
              <span class="info-box-number">4</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
                  <span class="progress-description">
                   <?php   echo  $r_grade4 ;?>   Mark list
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
		  
		  
		  
		  
		  
		  
		  
		  <div class="row">
       <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-purple">
		  <?php

		  $grade5 = mysqli_query($con,"select * FROM `marklist` WHERE  grade = '5' AND `teacher`='$userId' ");
				 $r_grade5 = mysqli_num_rows($grade5);
				 
 		  
		  ?>
   <span class="info-box-icon"><a href="../../core/teacher/gradem.php?grade=5"class="btn bg-navy btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
				
            <div class="info-box-content">
              <span class="info-box-text">Grade</span>
              <span class="info-box-number">5</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
                  <span class="progress-description">
                   <?php   echo  $r_grade5 ;?>   Mark list
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
       <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-purple">
		  <?php

		  $grade6 = mysqli_query($con,"select * FROM `marklist` WHERE  grade = '6' AND `teacher`='$userId' ");
				 $r_grade6 = mysqli_num_rows($grade6);
				 
 		  
		  ?>
   <span class="info-box-icon"><a href="../../core/teacher/gradem.php?grade=6"class="btn bg-navy btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
				
            <div class="info-box-content">
              <span class="info-box-text">Grade</span>
              <span class="info-box-number">6</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
                  <span class="progress-description">
                   <?php   echo  $r_grade6 ;?>   Mark list
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-purple">
		  <?php

		  $grade7 = mysqli_query($con,"select * FROM `marklist` WHERE  grade = '7' AND `teacher`='$userId'  ");
				 $r_grade7 = mysqli_num_rows($grade7);
				 
 		  
		  ?>
   <span class="info-box-icon"><a href="../../core/teacher/gradem.php?grade=7"class="btn bg-navy btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
				
            <div class="info-box-content">
              <span class="info-box-text">Grade</span>
              <span class="info-box-number">7</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
                  <span class="progress-description">
                   <?php   echo  $r_grade7 ;?>   Mark list
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
       <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-purple">
		  <?php

		  $grade8 = mysqli_query($con,"select * FROM `marklist` WHERE  grade = '8' AND `teacher`='$userId' ");
				 $r_grade8 = mysqli_num_rows($grade8);
				 
		  
		  ?>
   <span class="info-box-icon"><a href="../../core/teacher/gradem.php?grade=8" class="btn bg-navy btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
				
            <div class="info-box-content">
              <span class="info-box-text">Grade</span>
              <span class="info-box-number">8</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
                  <span class="progress-description">
                   <?php   echo  $r_grade8 ;?>   Mark list
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
		  
		  
		  
		  
		  
		  
		  
		  
		  <div class="row">
       <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-purple">
		  <?php

		  $grade9 = mysqli_query($con,"select * FROM `marklist` WHERE  grade = '9' AND `teacher`='$userId' ");
				 $r_grade9 = mysqli_num_rows($grade9);
				 
 		  
		  ?>
   <span class="info-box-icon"><a href="../../core/teacher/gradem.php?grade=9" class="btn bg-navy btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
				
            <div class="info-box-content">
              <span class="info-box-text">Grade</span>
              <span class="info-box-number">9</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
                  <span class="progress-description">
                   <?php   echo  $r_grade9 ;?>   Mark list
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-purple">
		  <?php

		  $grade10 = mysqli_query($con,"select * FROM `marklist` WHERE  grade = '10' AND `teacher`='$userId'  ");
				 $r_grade10 = mysqli_num_rows($grade10);
				 
 		  
		  ?>
   <span class="info-box-icon"><a href="../../core/teacher/gradem.php?grade=10" class="btn bg-navy btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
				
            <div class="info-box-content">
              <span class="info-box-text">Grade</span>
              <span class="info-box-number">10</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
                  <span class="progress-description">
                   <?php   echo  $r_grade10 ;?>   Mark list
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
       <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-purple">
		  <?php

		  $grade11 = mysqli_query($con,"select * FROM `marklist` WHERE  grade = '11' AND `teacher`='$userId' ");
				 $r_grade11 = mysqli_num_rows($grade11);
				  
		  ?>
   <span class="info-box-icon"><a href="../../core/teacher/gradem.php?grade=11 "class="btn bg-navy btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
				
            <div class="info-box-content">
              <span class="info-box-text">Grade</span>
              <span class="info-box-number">11</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
                  <span class="progress-description">
                   <?php   echo  $r_grade11 ;?>   Mark list
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
       <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-purple">
		  <?php
	 $userId= $userRow['userId'];

			$grade12 = mysqli_query($con,"select * FROM `marklist` WHERE  grade = '12' AND `teacher`='$userId'  ");
			$r_grade12 = mysqli_num_rows($grade12);
				 		  
		  ?>
   <span class="info-box-icon"><a href="../../core/teacher/gradem.php?grade=12"  class="btn bg-navy btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
				
            <div class="info-box-content">
              <span class="info-box-text">Grade</span>
              <span class="info-box-number">12</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
                  <span class="progress-description">
                   <?php   echo  $r_grade12 ;?>   Mark list
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
		  
		  </div>
        <!-- /.col -->
      </div>
		 
          <!-- /. box -->
        </div>
		</div>
	 
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
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
    $("#example1").DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
	
	
	
	
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>
</body>
</html>
