<?php  require 'top.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Teacher Schedule
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="sched.php"> Schedule Management</a></li>
        <li><a href="#">Teacher Schedule Management</a></li>
         
      </ol>
    </section>
	<br>
	
	<section class="content">
	
	<?php 
	if(isset($_POST['teacher']))
		
 
		 $teacher_id = $_POST['teacher1'];
		 
         $run2 = mysqli_query($con,"SELECT * FROM `teacher_table`  WHERE teacher_id = '$teacher_id'  ");
         $row2 = mysqli_fetch_array($run2);

	 
	?>
	<div class="row">

         <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border ">
              <h3 class="box-title">Week schedule of <?php echo $row2['first_name'];?> <?php echo $row2['last_name'];?></h3>
			    
               </div>
            </div>
	</div>
            </div>
	
	
		<div class="row">

         <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border ">
              <h3 class="box-title">Schedule on monday</h3>
			   <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="glyphicon glyphicon-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="glyphicon glyphicon-remove"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">Period</th>
                  <th>Time</th>
                   <th>Subject</th>
                  <th>Grade</th>
                  <th>Section</th>
                 </tr>
                
				 <?php        
	 $con = mysqli_connect($host,$user,$password,$db);	 
		$select = "SELECT * FROM `schedule`  WHERE day = 'm'  AND teacher_id='$teacher_id' order by time_id";
               if($run = mysqli_query($con,$select)){
				 while($row = mysqli_fetch_array($run)){
					 $time=$row['time_id'];
					 
					 $run1 = mysqli_query($con,"SELECT * FROM `time`  WHERE time_id = '$time'  ");
                  	$row1 = mysqli_fetch_array($run1);
					$start=date("h:i a",strtotime($row1['time_start']));
					$end=date("h:i a",strtotime($row1['time_end']));
					
					
					
		   
				?>
                <tr>
                  <td><?php echo $row['time_id'];?>.</td>
                  <td><?php echo $start."-".$end;?></td>
                   <td><?php echo $row['subject'] ;?></td>
                  <td><?php echo $row['grade'] ;?></td>
                  <td><?php echo $row['section'] ;?></td>

                </tr>
				
			   <?php }}?>
              </table>
            </div>
            
          </div>
          
        </div>
 
	  
	  
	  
	   <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border ">
              <h3 class="box-title">Schedule on tuesday</h3>
			   <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="glyphicon glyphicon-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="glyphicon glyphicon-remove"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">Period</th>
                  <th>Time</th>
                   <th>Subject</th>
                  <th>Grade</th>
                  <th>Section</th>
                 </tr>
                
				 <?php        
	 $con = mysqli_connect($host,$user,$password,$db);	 
		$select = "SELECT * FROM `schedule`  WHERE day = 't'  AND teacher_id='$teacher_id' order by time_id";
               if($run = mysqli_query($con,$select)){
				 while($row = mysqli_fetch_array($run)){
					 $time=$row['time_id'];
					 
					 $run1 = mysqli_query($con,"SELECT * FROM `time`  WHERE time_id = '$time'  ");
                  	$row1 = mysqli_fetch_array($run1);
					$start=date("h:i a",strtotime($row1['time_start']));
					$end=date("h:i a",strtotime($row1['time_end']));
					
					
					
 				?>
                <tr>
                  <td><?php echo $row['time_id'];?>.</td>
                  <td><?php echo $start."-".$end;?></td>
                   <td><?php echo $row['subject'] ;?></td>
                  <td><?php echo $row['grade'] ;?></td>
                  <td><?php echo $row['section'] ;?></td>

                </tr>
				
			   <?php }}?>
              </table>
            </div>
            
          </div>
          
        </div>        </div>
		
		
		
		
		
		
		
		
		<div class="row">

         <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border ">
              <h3 class="box-title">Schedule on wednesday</h3>
			   <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="glyphicon glyphicon-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="glyphicon glyphicon-remove"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">Period</th>
                  <th>Time</th>
                   <th>Subject</th>
                  <th>Grade</th>
                  <th>Section</th>
                 </tr>
                
				 <?php        
	 $con = mysqli_connect($host,$user,$password,$db);	 
		$select = "SELECT * FROM `schedule`  WHERE day = 'w'  AND teacher_id='$teacher_id' order by time_id";
               if($run = mysqli_query($con,$select)){
				 while($row = mysqli_fetch_array($run)){
					 $time=$row['time_id'];
					 
					 $run1 = mysqli_query($con,"SELECT * FROM `time`  WHERE time_id = '$time'  ");
                  	$row1 = mysqli_fetch_array($run1);
					$start=date("h:i a",strtotime($row1['time_start']));
					$end=date("h:i a",strtotime($row1['time_end']));
									?>
                <tr>
                  <td><?php echo $row['time_id'];?>.</td>
                  <td><?php echo $start."-".$end;?></td>
                   <td><?php echo $row['subject'] ;?></td>
                  <td><?php echo $row['grade'] ;?></td>
                  <td><?php echo $row['section'] ;?></td>

                </tr>
				
			   <?php }}?>
              </table>
            </div>
            
          </div>
          
        </div>
 
	  
	  
	  
	   <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border ">
              <h3 class="box-title">Schedule on thursday</h3>
			   <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="glyphicon glyphicon-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="glyphicon glyphicon-remove"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">Period</th>
                  <th>Time</th>
                   <th>Subject</th>
                  <th>Grade</th>
                  <th>Section</th>
                 </tr>
                
				 <?php        
	 $con = mysqli_connect($host,$user,$password,$db);	 
		$select = "SELECT * FROM `schedule`  WHERE day = 'th'  AND teacher_id='$teacher_id' order by time_id";
               if($run = mysqli_query($con,$select)){
				 while($row = mysqli_fetch_array($run)){
					 $time=$row['time_id'];
					 
					 $run1 = mysqli_query($con,"SELECT * FROM `time`  WHERE time_id = '$time'  ");
                  	$row1 = mysqli_fetch_array($run1);
					$start=date("h:i a",strtotime($row1['time_start']));
					$end=date("h:i a",strtotime($row1['time_end']));
			 
				?>
                <tr>
                  <td><?php echo $row['time_id'];?>.</td>
                  <td><?php echo $start."-".$end;?></td>
                   <td><?php echo $row['subject'] ;?></td>
                  <td><?php echo $row['grade'] ;?></td>
                  <td><?php echo $row['section'] ;?></td>

                </tr>
				
			   <?php }}?>
              </table>
            </div>
            
          </div>
          
        </div>        </div>
		
		
		
		
		
		
		
		<div class="row">

         <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border ">
              <h3 class="box-title">Schedule on friday</h3>
			   <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="glyphicon glyphicon-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="glyphicon glyphicon-remove"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">Period</th>
                  <th>Time</th>
                   <th>Subject</th>
                  <th>Grade</th>
                  <th>Section</th>
                 </tr>
                
				 <?php        
	 $con = mysqli_connect($host,$user,$password,$db);	 
		$select = "SELECT * FROM `schedule`  WHERE day = 'f'  AND teacher_id='$teacher_id' order by time_id";
               if($run = mysqli_query($con,$select)){
				 while($row = mysqli_fetch_array($run)){
					 $time=$row['time_id'];
					 
					 $run1 = mysqli_query($con,"SELECT * FROM `time`  WHERE time_id = '$time'  ");
                  	$row1 = mysqli_fetch_array($run1);
					$start=date("h:i a",strtotime($row1['time_start']));
					$end=date("h:i a",strtotime($row1['time_end']));
	 
				?>
                <tr>
                  <td><?php echo $row['time_id'];?>.</td>
                  <td><?php echo $start."-".$end;?></td>
                   <td><?php echo $row['subject'] ;?></td>
                  <td><?php echo $row['grade'] ;?></td>
                  <td><?php echo $row['section'] ;?></td>

                </tr>
				
			   <?php }}?>
              </table>
            </div>
            
          </div>
          
        </div>
 
	  
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
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
