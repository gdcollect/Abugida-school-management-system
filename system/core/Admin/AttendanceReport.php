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
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Students Management</a></li>
         
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
 
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
 		  <a href="../../core/admin/do_attendance.php"  class="btn bg-purple btn-flat  "><i class="glyphicon glyphicon-plus"> </i> Do Atten </a> 
		<button type="button" onclick="window.print()" class="btn bg-navy btn-flat  ">Print/Export PDF</button>
      </div>
            </div>
            <!-- /.box-body -->
          </div> </div></div>
          <!-- /. box -->
		   
        </div>
        <!-- /.col -->
        <div class="col-md-9">
         
		  <div class="box box-primary">
            <div class="box-body no-padding">
		 
		
		  <div class="box-header with-border">
              <h4 class="box-title">  All Attendance List</h4>
            </div>
		
		  <div class="box-body">
		  
              <table id="example1" class="table table-bordered table-striped">
                                    <thead  style="color:grey"  >
                                        <tr>
                      <th> Roll No</th>
					  <th> Date</th>
                      <th> Attendence </th>
					  
                                        </tr>
                                    </thead>
                                    <tbody>
                                         
                                        
                                         
									 <?php        
	 $con = mysqli_connect($host,$user,$password,$db);

 	   
      
	  
		 
		$select = "SELECT * FROM `tbl_attendance`  WHERE NOT studentRollNumber  = 0";
				  
               if($run = mysqli_query($con,$select)){
				 while($row = mysqli_fetch_array($run)){
		 
	            
          echo '<tr style="color:grey"; >';

            // echo '<td>'. $post['student_id'] . '</td>'; 
			
            echo '<td>'.$row['studentRollNumber']. '</td>';		
            echo '<td>'. $row['Date'] . '</td>';			
        
		
		 $status=$row['Attendence'];
		 
            if ($status=="Present")
				
				$flag="primary"; 
		 	else 
				
			if ($status=="Absent")
				
				$flag="danger"; 
			else 
				
			if ($status=="Late")
				
				$flag="success"; 
			
			else $flag="warning";
            
		
		
 			?>
		 <td><span class="label label-<?php echo $flag;?>"><?php echo $status;?></span></td>   

			<?php
            
           echo '</tr>';  
				 }  
			 }
           ?>	 
										 
								 
										 
										 
                                    </tbody>
                                </table>
		  
		  
		  
		  
		   
		  
		  
		  
		  
		  
		</div>  
		  
		  
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
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
