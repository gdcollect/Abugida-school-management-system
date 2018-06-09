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
 		  <a href="../../core/admin/mark_list_entry.php"  class="btn bg-purple btn-flat  "><i class="glyphicon glyphicon-plus"> </i> Add New</a> 
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
         
		  <div class="box box-primary">
            <div class="box-body no-padding">
		 
		
		  <div class="box-header with-border">
              <h4 class="box-title">  Select Grade Level</h4>
            </div>
		 
		 
		  
		   <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-purple">
		  <?php

		  $grade1 = mysqli_query($con,"select * FROM `marklist` WHERE  grade = '1' ");
				 $r_grade1 = mysqli_num_rows($grade1);
				 
                     $grade11 =   "select * FROM `marklist` WHERE  grade = '1' " ;
		  
		  ?>
   <span class="info-box-icon"><a href="../../core/admin/gradem.php?grade=<?php 
               if($run = mysqli_query($con,$grade11)){
				 while($row = mysqli_fetch_array($run)){
   
   echo $row['grade']; ?>" <?php }}?>  class="btn bg-navy btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
				
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

		  $grade2 = mysqli_query($con,"select * FROM `marklist` WHERE  grade = '2' ");
				 $r_grade2 = mysqli_num_rows($grade2);
				 
                     $grade22 =   "select * FROM `marklist` WHERE  grade = '2' " ;
		  
		  ?>
   <span class="info-box-icon"><a href="../../core/admin/gradem.php?grade=<?php 
               if($run = mysqli_query($con,$grade22)){
				 while($row = mysqli_fetch_array($run)){
   
   echo $row['grade']; ?>" <?php }}?>  class="btn bg-navy btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
				
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

		  $grade3 = mysqli_query($con,"select * FROM `marklist` WHERE  grade = '3' ");
				 $r_grade3 = mysqli_num_rows($grade3);
				 
                     $grade33 =   "select * FROM `marklist` WHERE  grade = '3' " ;
		  
		  ?>
   <span class="info-box-icon"><a href="../../core/admin/gradem.php?grade=<?php 
               if($run = mysqli_query($con,$grade33)){
				 while($row = mysqli_fetch_array($run)){
   
   echo $row['grade']; ?>" <?php }}?>  class="btn bg-navy btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
				
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

		  $grade4 = mysqli_query($con,"select * FROM `marklist` WHERE  grade = '4' ");
				 $r_grade4 = mysqli_num_rows($grade4);
				 
                     $grade44 =   "select * FROM `marklist` WHERE  grade = '4' " ;
		  
		  ?>
   <span class="info-box-icon"><a href="../../core/admin/gradem.php?grade=<?php 
               if($run = mysqli_query($con,$grade44)){
				 while($row = mysqli_fetch_array($run)){
   
   echo $row['grade']; ?>" <?php }}?>  class="btn bg-navy btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
				
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

		  $grade5 = mysqli_query($con,"select * FROM `marklist` WHERE  grade = '5' ");
				 $r_grade5 = mysqli_num_rows($grade5);
				 
                     $grade55 =   "select * FROM `marklist` WHERE  grade = '5' " ;
		  
		  ?>
   <span class="info-box-icon"><a href="../../core/admin/gradem.php?grade=<?php 
               if($run = mysqli_query($con,$grade55)){
				 while($row = mysqli_fetch_array($run)){
   
   echo $row['grade']; ?>" <?php }}?>  class="btn bg-navy btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
				
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

		  $grade6 = mysqli_query($con,"select * FROM `marklist` WHERE  grade = '6' ");
				 $r_grade6 = mysqli_num_rows($grade6);
				 
                     $grade66 =   "select * FROM `marklist` WHERE  grade = '6' " ;
		  
		  ?>
   <span class="info-box-icon"><a href="../../core/admin/gradem.php?grade=<?php 
               if($run = mysqli_query($con,$grade66)){
				 while($row = mysqli_fetch_array($run)){
   
   echo $row['grade']; ?>" <?php }}?>  class="btn bg-navy btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
				
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

		  $grade7 = mysqli_query($con,"select * FROM `marklist` WHERE  grade = '7' ");
				 $r_grade7 = mysqli_num_rows($grade7);
				 
                     $grade77 =   "select * FROM `marklist` WHERE  grade = '7' " ;
		  
		  ?>
   <span class="info-box-icon"><a href="../../core/admin/gradem.php?grade=<?php 
               if($run = mysqli_query($con,$grade77)){
				 while($row = mysqli_fetch_array($run)){
   
   echo $row['grade']; ?>" <?php }}?>  class="btn bg-navy btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
				
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

		  $grade8 = mysqli_query($con,"select * FROM `marklist` WHERE  grade = '8' ");
				 $r_grade8 = mysqli_num_rows($grade8);
				 
                     $grade88 =   "select * FROM `marklist` WHERE  grade = '8' " ;
		  
		  ?>
   <span class="info-box-icon"><a href="../../core/admin/gradem.php?grade=<?php 
               if($run = mysqli_query($con,$grade88)){
				 while($row = mysqli_fetch_array($run)){
   
   echo $row['grade']; ?>" <?php }}?>  class="btn bg-navy btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
				
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

		  $grade9 = mysqli_query($con,"select * FROM `marklist` WHERE  grade = '9' ");
				 $r_grade9 = mysqli_num_rows($grade9);
				 
                     $grade99 =   "select * FROM `marklist` WHERE  grade = '9' " ;
		  
		  ?>
   <span class="info-box-icon"><a href="../../core/admin/gradem.php?grade=<?php 
               if($run = mysqli_query($con,$grade99)){
				 while($row = mysqli_fetch_array($run)){
   
   echo $row['grade']; ?>" <?php }}?>  class="btn bg-navy btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
				
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

		  $grade10 = mysqli_query($con,"select * FROM `marklist` WHERE  grade = '10' ");
				 $r_grade10 = mysqli_num_rows($grade10);
				 
                     $grade1010 =   "select * FROM `marklist` WHERE  grade = '10' " ;
		  
		  ?>
   <span class="info-box-icon"><a href="../../core/admin/gradem.php?grade=<?php 
               if($run = mysqli_query($con,$grade1010)){
				 while($row = mysqli_fetch_array($run)){
   
   echo $row['grade']; ?>" <?php }}?>  class="btn bg-navy btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
				
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

		  $grade11 = mysqli_query($con,"select * FROM `marklist` WHERE  grade = '11' ");
				 $r_grade11 = mysqli_num_rows($grade11);
				 
                     $grade1111 =   "select * FROM `marklist` WHERE  grade = '11' " ;
		  
		  ?>
   <span class="info-box-icon"><a href="../../core/admin/gradem.php?grade=<?php 
               if($run = mysqli_query($con,$grade1111)){
				 while($row = mysqli_fetch_array($run)){
   
   echo $row['grade']; ?>" <?php }}?>  class="btn bg-navy btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
				
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

		  $grade12 = mysqli_query($con,"select * FROM `marklist` WHERE  grade = '12' ");
				 $r_grade12 = mysqli_num_rows($grade12);
				 
                     $grade1212 =   "select * FROM `marklist` WHERE  grade = '12' " ;
		  
		  ?>
   <span class="info-box-icon"><a href="../../core/admin/gradem.php?grade=<?php 
               if($run = mysqli_query($con,$grade1212)){
				 while($row = mysqli_fetch_array($run)){
   
   echo $row['grade']; ?>" <?php }}?>  class="btn bg-navy btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
				
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
        <!-- /.col -->
      </div>
      <!-- /.row -->
		  
		  
		  
		  
		  
		  
		  
		  

		  
		  
		  
		   
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
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
