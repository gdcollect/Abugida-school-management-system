  <title>ABUGIDA ADVANCED SCHOOL MANAGEMENT SYSTEM</title>

<?php  require 'top.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Students Report
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Students Report</a></li>
       </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
			<?php
			     
 $result = mysqli_query($con,"SELECT * FROM school_setup ");
while($row = mysqli_fetch_array($result))
{
?>
              <img class="profile-user-img img-responsive  " src="../../../dist/logo/<?php echo $row['logo'] ;?>" alt="User profile picture">

              <h3 class="profile-username text-center"> <?php echo $row['name'] ; ?> REPORT CARD</h3>

              <p class="text-muted text-center">Software Engineer</p>
			   <?php } ?>
 <?php 
   $pagetitle="REPORT CARD";
 
  
  
	 $std_roll_no=$_REQUEST['std_roll_no']; 
	 
	   $con = mysqli_connect($host,$user,$password,$db);

	 $query="SELECT * FROM marklist WHERE std_roll_no='".$std_roll_no."'";
		
		 $resource=mysqli_query($con,$query) or die ("An unexpected error occured  ");
		  $result=mysqli_fetch_array($resource);
		  
	       
 
		$select = "SELECT * FROM `student_table`  WHERE std_roll_no ='".$std_roll_no ."'";  
		 
		 
             if($run = mysqli_query($con,$select)){
				 while($row = mysqli_fetch_array($run)){
		 
	            
             
		    
           ?>
  
			  
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Student name <a class="pull-right"><?php echo $row['studentname']; ?> &nbsp; <?php echo  $row['lname'];    ?></a></b> 
                </li>
                <li class="list-group-item">
                  <b>Gender <a class="pull-right"><?php echo   $row['gender']  ; ?></a></b> 
                </li>
                <li class="list-group-item">
                  <b>Date of Birth  <a class="pull-right"><?php echo   $row['dob'] ; ?></a></b> 
                </li>
                <li class="list-group-item">
                  <b>Age  <a class="pull-right"><?php echo  $row['age'] ; ?></a></b> 
                </li>	
				<li class="list-group-item">
                  <b>Grade<a class="pull-right"><?php echo   $row['grade'] ; ?></a></b> 
                </li>
              </ul>
				

             </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

           
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          
		  
		  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Grade Report </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                   <th>Subject</th>
                  <th style="width: 40px">First Semiseter</th>
                  <th style="width: 40px">Second Semiseter</th>
			      <th style="width: 40px">Avarage</th>

                </tr>
				 <?php        
		  		  
 		$select = "SELECT * FROM `marklist`  WHERE   std_roll_no ='".$std_roll_no ."'";  
		 
		 
             if($run = mysqli_query($con,$select)){
				 while($row = mysqli_fetch_array($run)){
		 ?>
                <tr>
                   <td><b><?php echo  $row['subject'];  ?></b></td>
			<?php	   

			
			
 $status1 = $row['final_add'];
		 
            if ($status1 < 50)
				
				$flag1="red"; 
		 	else 
				
			  $flag1="green";
            
 $status2 = $row['final_adds2'];
		 
            if ($status2 < 50)
				
				$flag2="red"; 
		 	else 
				
			  $flag2="green";

			  
			  
		$ave1 = $row['ave'];	   
		 
		 
            if ($ave1 < 50)
				
				$flag3="red"; 
		 	else 
				
			  $flag3="green";
			  
			  
			    
			  
			  ?>
			
                   <td><span class="badge bg-<?php echo $flag1;?>"> <b><?php echo $status1;?></b></span></td>
		           <td><span class="badge bg-<?php echo $flag2;?>"> <b><?php echo $status2;?></b></span></td>
				    <td><span class="badge bg-<?php echo $flag3;?>"> <b><?php echo $ave1 ;?></b></span></td>
				   
				   
				   
			 <?php 
			 
			       $ave="SELECT AVG(ave) AS value_sum   FROM `marklist`  WHERE   std_roll_no ='".$std_roll_no ."'";  
				   $ave= mysqli_query($con,$ave) ;
				   $ave = mysqli_fetch_array($ave); 
				   $ave =$ave['value_sum'];
			 
			 
			 }}
		    
			   } } 
			   
			    if ($ave < 50)
				
				$flag4="red"; 
		 	else 
				
			  $flag4="green";
			   
			   ?>
                </tr>
				<tr>
	 <td><span class="badge bg-green "> <b>Total Avarage</b></span></td>
<td></td>
<td></td>
                 <td><span class="badge bg-<?php echo $flag4;?>"><b><?php echo $ave ;?></b></span></td>
                </tr>
               
              </table>
            </div>
    </section>
	   
<button type="button" onclick="window.print()" class="btn btn-primary pull-right" style="margin-right: 500px;">
            <i class="fa fa-print"></i> Print  
          </button>    <!-- /.content -->
  </div>
		  
		  
		  
		  
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
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
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
