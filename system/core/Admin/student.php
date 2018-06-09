<?php  require 'top.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Students
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../../core/admin/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Students Management</a></li>
         
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
 		  <a href="../../core/admin/student_entry.php"  class="btn bg-purple btn-flat  "><i class="glyphicon glyphicon-plus"> </i>Register</a> 
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
              <h5 class="box-title">Class Selection  </h5>
            </div>
            <div class="box-body">
             <div id="external-events">
 			  <form  method="post" action="grade_sec.php"  >

 <select style="color:grey"  class="form-control" required id="grade" name="grade">
		                    <option value="default">Select  Grade</option>
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
		  
 <br>
		   
		    <select style="color:grey"  class="form-control select2" name="section" >
				 		                    <option value="default">Select  Section</option>

				  <?php 
				  
					$query2=mysqli_query($con,"select * from section  ")or die(mysqli_error($con));
					  while($row=mysqli_fetch_array($query2)){
				  ?>
						<option value="<?php echo $row['sec'];?>"><?php echo $row['sec'];?></option>
				  <?php }
					
				  ?>
				</select>


<br>
				 <button type="submit" name="class"   class="btn bg-navy btn-flat pull-right ">View Class</button>

		  <form>
               
              </div>
            </div>
          </div>
        </div>
		 </div>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
         
		  <div class="box box-primary">
            <div class="box-body no-padding">
		 
		
		  <div class="box-header with-border">
              <h4 class="box-title">Select Grade Level</h4>
            </div>
		 
		  
		  
		  
		  
		  
		   <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
		  <?php

		  $grade1 = mysqli_query($con,"select * FROM `student_table` WHERE  grade = '1' ");
				 $r_grade1 = mysqli_num_rows($grade1);
				 
                     $grade11 =   "select * FROM `student_table` WHERE  grade = '1' " ;
		  
		  ?>
   <span class="info-box-icon"><a href="../../core/admin/grade.php?grade=<?php
               if($run = mysqli_query($con,$grade11)){
				 while($row = mysqli_fetch_array($run)){
   
   echo $row['grade']; ?>" <?php }}?>  class="btn bg-purple btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
				
            <div class="info-box-content">
              <span class="info-box-text">Grade</span>
              <span class="info-box-number">1</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
                  <span class="progress-description">
                   <?php   echo  $r_grade1 ;?>  Students  
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
		  
		   <?php

		  $grade2 = mysqli_query($con,"select * FROM `student_table` WHERE  grade = '2' ");
				 $r_grade2 = mysqli_num_rows($grade2);
				 
                     $grade22 =   "select * FROM `student_table` WHERE  grade = '2' " ;
		  
		  ?>
		   <span class="info-box-icon"><a href="../../core/admin/grade.php?grade=<?php 
               if($run = mysqli_query($con,$grade22)){
				 while($row = mysqli_fetch_array($run)){
   
   echo $row['grade']; ?>" <?php }}?>  class="btn bg-purple btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
			
            <div class="info-box-content">
              <span class="info-box-text">Grade</span>
              <span class="info-box-number">2</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
                  <span class="progress-description">
                   <?php   echo  $r_grade2 ;?> Students 
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
		   <?php

		  $grade3 = mysqli_query($con,"select * FROM `student_table` WHERE  grade = '3' ");
				 $r_grade3 = mysqli_num_rows($grade3);
				 
                     $grade33 =   "select * FROM `student_table` WHERE  grade = '3' " ;
		  
		  ?>
		   <span class="info-box-icon"><a href="../../core/admin/grade.php?grade=<?php 
               if($run = mysqli_query($con,$grade33)){
				 while($row = mysqli_fetch_array($run)){
   
   echo $row['grade']; ?>" <?php }}?>  class="btn bg-purple btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
			
            <div class="info-box-content">
              <span class="info-box-text">Grade</span>
              <span class="info-box-number">3</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
                  <span class="progress-description">
                    <?php   echo  $r_grade3 ;?> Students 
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
		  
             <?php

		  $grade4 = mysqli_query($con,"select * FROM `student_table` WHERE  grade = '4' ");
				 $r_grade4 = mysqli_num_rows($grade4);
				 
                     $grade44 =   "select * FROM `student_table` WHERE  grade = '4' " ;
		  
		  ?>
		   <span class="info-box-icon"><a href="../../core/admin/grade.php?grade=<?php 
               if($run = mysqli_query($con,$grade44)){
				 while($row = mysqli_fetch_array($run)){
   
   echo $row['grade']; ?>" <?php }}?>  class="btn bg-purple btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
			
            <div class="info-box-content">
              <span class="info-box-text">Grade</span>
              <span class="info-box-number">4</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
                  <span class="progress-description">
                    <?php   echo  $r_grade4 ;?> Students 
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
          <div class="info-box bg-aqua">
		  
            <?php

		  $grade5 = mysqli_query($con,"select * FROM `student_table` WHERE  grade = '5' ");
				 $r_grade5 = mysqli_num_rows($grade5);
				 
                     $grade55 =   "select * FROM `student_table` WHERE  grade = '5' " ;
		  
		  ?>
		   <span class="info-box-icon"><a href="../../core/admin/grade.php?grade=<?php 
               if($run = mysqli_query($con,$grade55)){
				 while($row = mysqli_fetch_array($run)){
   
   echo $row['grade']; ?>" <?php }}?>  class="btn bg-purple btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
			
            <div class="info-box-content">
              <span class="info-box-text">Grade</span>
              <span class="info-box-number">5</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
                  <span class="progress-description">
                    <?php   echo  $r_grade5 ;?> Students 
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
             <?php

		  $grade6 = mysqli_query($con,"select * FROM `student_table` WHERE  grade = '6' ");
				 $r_grade6 = mysqli_num_rows($grade6);
				 
                     $grade66 =   "select * FROM `student_table` WHERE  grade = '6' " ;
		  
		  ?>
		   <span class="info-box-icon"><a href="../../core/admin/grade.php?grade=<?php 
               if($run = mysqli_query($con,$grade66)){
				 while($row = mysqli_fetch_array($run)){
   
   echo $row['grade']; ?>" <?php }}?>  class="btn bg-purple btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
			
            <div class="info-box-content">
              <span class="info-box-text">Grade</span>
              <span class="info-box-number">6</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
                  <span class="progress-description">
                    <?php   echo  $r_grade6 ;?> Students 
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua"> <?php

		  $grade7 = mysqli_query($con,"select * FROM `student_table` WHERE  grade = '7' ");
				 $r_grade7 = mysqli_num_rows($grade7);
				 
                     $grade77 =   "select * FROM `student_table` WHERE  grade = '7' " ;
		  
		  ?>
		   <span class="info-box-icon"><a href="../../core/admin/grade.php?grade=<?php 
               if($run = mysqli_query($con,$grade77)){
				 while($row = mysqli_fetch_array($run)){
   
   echo $row['grade']; ?>" <?php }}?>  class="btn bg-purple btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
			
            <div class="info-box-content">
              <span class="info-box-text">Grade</span>
              <span class="info-box-number">7</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
                  <span class="progress-description">
                    <?php   echo  $r_grade7 ;?> Students 
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
		  <?php

		  $grade8 = mysqli_query($con,"select * FROM `student_table` WHERE  grade = '8' ");
				 $r_grade8 = mysqli_num_rows($grade8);
				 
                     $grade88 =   "select * FROM `student_table` WHERE  grade = '8' " ;
		  
		  ?>
		   <span class="info-box-icon"><a href="../../core/admin/grade.php?grade=<?php 
               if($run = mysqli_query($con,$grade88)){
				 while($row = mysqli_fetch_array($run)){
   
   echo $row['grade']; ?>" <?php }}?>  class="btn bg-purple btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
			
            <div class="info-box-content">
              <span class="info-box-text">Grade</span>
              <span class="info-box-number">8</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
                  <span class="progress-description">
                    <?php   echo  $r_grade8 ;?> Students 
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
          <div class="info-box bg-aqua"><?php

		  $grade9 = mysqli_query($con,"select * FROM `student_table` WHERE  grade = '9' ");
				 $r_grade9 = mysqli_num_rows($grade9);
				 
                     $grade99 =   "select * FROM `student_table` WHERE  grade = '9' " ;
		  
		  ?>
		   <span class="info-box-icon"><a href="../../core/admin/grade.php?grade=<?php 
               if($run = mysqli_query($con,$grade99)){
				 while($row = mysqli_fetch_array($run)){
   
   echo $row['grade']; ?>" <?php }}?>  class="btn bg-purple btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
			
            <div class="info-box-content">
              <span class="info-box-text">Grade</span>
              <span class="info-box-number">9</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
                  <span class="progress-description">
                    <?php   echo  $r_grade9 ;?> Students 
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
		  <?php

		  $grade10 = mysqli_query($con,"select * FROM `student_table` WHERE  grade = '10' ");
				 $r_grade10 = mysqli_num_rows($grade10);
				 
                     $grade10 =   "select * FROM `student_table` WHERE  grade = '10' " ;
		  
		  ?>
		   <span class="info-box-icon"><a href="../../core/admin/grade.php?grade=<?php 
               if($run = mysqli_query($con,$grade10)){
				 while($row = mysqli_fetch_array($run)){
   
   echo $row['grade']; ?>" <?php }}?>  class="btn bg-purple btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
			
            <div class="info-box-content">
              <span class="info-box-text">Grade</span>
              <span class="info-box-number">10</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
                  <span class="progress-description">
                    <?php   echo  $r_grade10 ;?> Students 
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
		  
            <?php

		  $grade11 = mysqli_query($con,"select * FROM `student_table` WHERE  grade = '11' ");
				 $r_grade11 = mysqli_num_rows($grade11);
				 
                     $grade11 =   "select * FROM `student_table` WHERE  grade = '11' " ;
		  
		  ?>
		   <span class="info-box-icon"><a href="../../core/admin/grade.php?grade=<?php 
               if($run = mysqli_query($con,$grade11)){
				 while($row = mysqli_fetch_array($run)){
   
   echo $row['grade']; ?>" <?php }}?>  class="btn bg-purple btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
			
            <div class="info-box-content">
              <span class="info-box-text">Grade</span>
              <span class="info-box-number">11</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
                  <span class="progress-description">
                    <?php   echo  $r_grade11 ;?> Students 
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
		  
             <?php

		  $grade12 = mysqli_query($con,"select * FROM `student_table` WHERE  grade = '12' ");
				 $r_grade12 = mysqli_num_rows($grade12);
				 
                     $grade12 =   "select * FROM `student_table` WHERE  grade = '12' " ;
		  
		  ?>
		   <span class="info-box-icon"><a href="../../core/admin/grade.php?grade=<?php 
               if($run = mysqli_query($con,$grade12)){
				 while($row = mysqli_fetch_array($run)){
   
   echo $row['grade']; ?>" <?php }}?>  class="btn bg-purple btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
			
            <div class="info-box-content">
              <span class="info-box-text">Grade</span>
              <span class="info-box-number">12</span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
                  <span class="progress-description">
                    <?php   echo  $r_grade12 ;?> Students 
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
	  
	  </div>
	  
	  </div>
	  
	  </div>
	  
	  </div>
		  
		  
		   
		  
		  
           <div class="box">
		  
		   
            <div class="box-header btn   btn-flat ">
              <h3 class="box-title"> All Students</h3>
            </div>
             
            <!-- /.box-header -->
            <div class="box-body">
			                            <div class="table-responsive">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th> Roll No</th>
                      <th> Name </th>
					  <th> L.Name </th>
                      <th> Gender </th>
					  <th> DOB </th>
                      <th> Age </th>
                      <th> Phone </th>
                       <th> Address </th>
                      <th> Gurdian.N</th>
                      <th> Grade </th>
                      <th> Section </th>
                      <th> Program </th>
					  <th> Action </th>
                </tr>
                </thead>
                <tbody>
                 
				 
				 
				 
				 
				 <?php        
		  
                  $con = mysqli_connect($host,$user,$password,$db);

		$select = "SELECT * FROM `student_table`    ";
				  
               if($run = mysqli_query($con,$select)){
				 while($row = mysqli_fetch_array($run)){
		 
	            
          echo '<tr style="color:grey"; >';

            // echo '<td>'. $post['student_id'] . '</td>'; 
            echo '<td>'.$row['std_roll_no']. '</td>';			
            echo '<td>'.$row['studentname']. '</td>';
            echo '<td>'. $row['lname'] . '</td>';
            echo '<td>'. $row['gender'] . '</td>';
            echo '<td>'. $row['dob'] . '</td>';
			echo '<td>'. $row['age'] . '</td>';
            echo '<td>'. $row['phone'] . '</td>';
             echo '<td>'. $row['add']. '</td>';
            echo '<td>'. $row['gurdian']. '</td>';
            echo '<td>'. $row['grade'] . '</td>';
            echo '<td>'. $row['section'] . '</td>';
			echo '<td>'. $row['Program']. '</td>';
            
			
			
			
			
			
			
			
	
	echo '<td width=250>';
	echo'<div class="btn-group">';
				echo'  <button data-toggle="dropdown" class="btn bg-navy btn-flat btn-xs  dropdown-toggle">Action <span class="caret"></span></button>';
				echo'  <ul class="dropdown-menu">';
				echo'	<li><a href="student_update.php?std_roll_no='.$row['std_roll_no'].'"><i class="glyphicon glyphicon-pencil"></i>Update</a></li>';
				echo'	<li><a href="report_card.php?std_roll_no='.$row['std_roll_no'].'"><i class="glyphicon glyphicon-list-alt"> </i>Report</a></li>';
				echo'	<li><a href="delete_stu.php?std_roll_no='.$row['std_roll_no'].'"><i class="glyphicon glyphicon-remove"> </i>Delete</a></li>';
				echo'	<li class="divider"></li>';
					
				echo'  </ul>';
				echo'</div>	';	
		
		
		
		
		
			
			
			
            echo '</td>';    
           echo '</tr>';  
				 }
			 }
			 
           ?>	 
				 
				 
				 
				 
				 
                </tbody>
                <tfoot>
                <tr>
                  <th> Roll No</th>
                      <th> Name </th>
					  <th> L.Name </th>
                      <th> Gender </th>
					  <th> DOB </th>
                      <th> Age </th>
                      <th> Phone </th>
                       <th> Address </th>
                      <th> Gurdian.N</th>
                      <th> Grade </th>
                      <th> Program </th>
					  <th> Action </th>
                </tr>
                </tfoot>
              </table>
			   </div>
            </div>
			
            <!-- /.box-body -->
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
