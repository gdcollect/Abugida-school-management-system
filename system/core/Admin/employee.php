<?php  require 'top.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Emplyees
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Emplyees Management</a></li>
         
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	
	 <?php
		         $con = mysqli_connect($host,$user,$password,$db);

				 $gradef = mysqli_query($con,"select * FROM `employee` WHERE gender = 'female'   "  );
				 $r_gradef = mysqli_num_rows($gradef);
				 
				 
				 $gradem = mysqli_query($con,"select * FROM `employee` WHERE gender = 'male'   "  );
				 $r_gradem= mysqli_num_rows($gradem);
				 
				 $Ad =( $r_gradef + $r_gradem);
		 
		            $add = round($Ad );
				
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
 		  <a href="../../core/admin/employee_entry.php"  class="btn bg-purple btn-flat  "><i class="glyphicon glyphicon-plus"> </i>Register </a> 
 		  <a href="../../core/admin/print.php"  class="btn bg-navy btn-flat  "target="_blank"><i class="glyphicon glyphicon-print"> </i>Print/Export</a> 
</div></div>
</div></div>
</div></div>


 <div class="col-md-3">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
             <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username"><i class="glyphicon glyphicon-user "></i> All  Female Employees<span class="pull-right badge bg-navy"> <?php echo $r_gradef ?> </span></h3>
            </div>
            
          </div>
          <!-- /.widget-user -->
        </div>
		 <div class="col-md-3">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
             <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username"><i class="glyphicon glyphicon-user "></i> All  Male Employees<span class="pull-right badge bg-navy"> <?php echo $r_gradem ?> </span></h3>
             </div>
            
          </div>
          <!-- /.widget-user -->
        </div>
		
		 <div class="col-md-3">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
             <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username"><i class="glyphicon glyphicon-user "></i> All Emp. count<span class="pull-right badge bg-navy"> <?php echo $add ?> </span></h3>
             </div>
             
          </div>
          <!-- /.widget-user -->
        </div>

</div>
	
	
	
	
      <div class="row">
        <div class="col-xs-12">
           
     
           <div class="box">
		  
		   
            <div class="box-header btn   btn-flat ">
              <h3 class="box-title"> All Emplyees</h3>
            </div>
             
            <!-- /.box-header -->
            <div class="box-body">
			                            <div class="table-responsive">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>First_Name</th>
                      <th>Last_Name</th>
                      <th>DOB</th>
                      <th>Gender</th>
                      <th>Phone</th>
                      <th>Position</th>
					  <th>Class</th>
                      <th>Salary</th>
                      <th>Address</th>
                     <th>Action</th>
                </tr>
                </thead>
                <tbody>
                 
				 
				 
				 <?php        
		   $con = mysqli_connect($host,$user,$password,$db);

		$select = "SELECT * FROM `employee`    ";
			  
               if($run = mysqli_query($con,$select)){
				 while($row = mysqli_fetch_array($run)){
		 
	            
          echo '<tr style="color:grey"; >';

            // echo '<td>'. $post['student_id'] . '</td>'; 
			echo '<td>'. $row['first_name'] . '</td>';
			echo '<td>'. $row['last_name'] . '</td>';
			echo '<td>'. $row['dob'] . '</td>';
			echo '<td>'. $row['gender'] . '</td>';
             echo '<td>'. $row['phone'] . '</td>';
             echo '<td>'. $row['postition'] . '</td>';
             echo '<td>'. $row['class'] . '</td>';
             echo '<td>'. $row['salary'] . '</td>';
             echo '<td>'. $row['address'] . '</td>';
            
			
			
			
			
			
		
			echo '<td width=250>';
	echo'<div class="btn-group">';
				echo'  <button data-toggle="dropdown" class="btn bg-navy btn-flat  dropdown-toggle">Action <span class="caret"></span></button>';
				echo'  <ul class="dropdown-menu">';
				echo'	<li><a href="employee_update.php?id='.$row['id'].'"><i class="glyphicon glyphicon-pencil"></i>Update</a></li>';
				echo'	<li><a href="delete_emp.php?id='.$row['id'].'"><i class="glyphicon glyphicon-remove"> </i>Delete</a></li>';
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
                <th>First_Name</th>
                      <th>Last_Name</th>
                      <th>DOB</th>
                      <th>Gender</th>
                      <th>Phone</th>
                      <th>Position</th>
					  <th>Class</th>
                      <th>Salary</th>
                      <th>Address</th>
                     <th>Action</th>
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
