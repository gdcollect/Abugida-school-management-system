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
		    
        <div class="col-md-4">
		 
		  <div class="box box-primary">
            <div class="box-body no-padding">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h4 class="box-title">  Do Attendance</h4>
			  <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="glyphicon glyphicon-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="glyphicon glyphicon-remove"></i></button>
              </div>
            </div>
            <div class="box-body">
              <!-- the events -->
              <div id="external-events">
 		  
            					 	  
<?php  
	error_reporting(E_ALL ^ E_DEPRECATED);
	?>
	 
		<form method="post" action="#" role="form">
		 
<?php
       $con = mysqli_connect($host,$user,$password,$db);
	   
     if (isset($_POST['att'])) {
		 
        $grade = $_POST['grade'];
		
      $section = $_POST['section'];
	 }
	  
      $qs=mysqli_query($con,"select * from student_table     " );
	
	?>
   
      <?php	
      echo "<select  style='color:grey;'   class='form-control' name='stid' >";			
      while($stid=mysqli_fetch_row($qs))
      {				
       echo"
       <option value=$stid[0]>$stid[0] &nbsp&nbsp $stid[1] </option>";
       }
      echo "</select>"."<br>";
      ?>
	  
	  	
					<?php
	error_reporting(0);
	 
	 
	 
	$stid=$_POST['stid'];
	 
	$atten=$_POST['present'];
	$date = date('Y-m-d');
 	$query = "SELECT  `studentRollNumber`, `Date` FROM `tbl_attendance` WHERE   `studentRollNumber`='$stid'  AND `Date`='$date' " ;
				$result = mysqli_query($con,$query);
				$count = mysqli_num_rows($result);
				if($count!=0){
					$error = true;
					?>
					 
            <div class="col-md-12">
		 <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Alert!</h4>
				Selected Student's Attendence Already Registered !!
              </div> </div> <br>
			  
 	 <?php
 	 
	}else{
  
  $query=mysqli_query($con,"Insert into tbl_attendance (studentRollNumber, Attendence,Date)VALUES('$stid', '$atten','$date')");
	if(!$query)
	{
		echo mysqli_error();
		}
	}





?>

	  <input  type="radio" name="present" value="Present" /><b style="color:grey;" > Present</b><br><br>
      <input type="radio" name="present" value="Absent" /><b style="color:grey;" > Absent<br><br>
	  
	  <input type="radio" name="present" value="Late" /><b style="color:grey;" > Late<br><br>
      <input type="radio" name="present" value="Permitted" /><b style="color:grey;" > Permitted<br><br><br>
      <button type="submit" name="save" value="Save" class="btn bg-navy  "><i class=" glyphicon glyphicon-check"> </i>  check </button>
 
      
 </form>
 
              </div>
            </div>
            <!-- /.box-body -->
          </div> </div></div>
          <!-- /. box -->
		  
		  
	<div class="box box-primary">
            <div class="box-body no-padding">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h4 class="box-title">  Action</h4>
			   <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="glyphicon glyphicon-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="glyphicon glyphicon-remove"></i></button>
              </div>
            </div>
			
            <div class="box-body">
              <!-- the events -->
              <div id="external-events">
 		<button type="button" onclick="window.print()" class="btn bg-navy btn-flat  "><i class="glyphicon glyphicon-print"></i>&nbsp;&nbsp; Print/Export PDF</button>
 		  <a href="../../system/core/AttendenceReport.php"  class="btn bg-primary btn-flat  "><i class="glyphicon glyphicon-repeat"></i>&nbsp; Back </a> 
 		  <a href="../../system/core/do_attendence.php"  class="btn bg-purple btn-flat  "><i class="glyphicon glyphicon-refresh"></i>&nbsp; &nbsp; Refrash</a> 
		  <br>
<br>

			    <form action="AttendenceReport.php" method="post" role="form">

   <div class="row">
           <div class="col-lg-6">

          <div  class="form-group">
         
            <select  class="form-control"   required id="sex"   name="grade">
           <option> Select Grade </option>
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
          </div>
          <div class="col-lg-6">

          <div class="form-group">
           
		   
		   
 <?php
                   $con = mysqli_connect($host,$user,$password,$db);

      $qs=mysqli_query($con,"select * from section");
      ?>
      <?php	
      echo "<select  style='color:grey;'   class='form-control' name='section' >";		
        echo "<option>Select Section </option> "; 
      while($section=mysqli_fetch_row($qs))
      {				
       echo "<option value=$section[1] >  $section[1] </option>";
       }
      echo "</select>"."<br>";
      ?>			
	 	   
          </div>
          </div>
		   
		  </div>
         
				<div class="input-group input-group-Normal">
				 <span class="input-group-addon" id="basic-addon1">
               <i class="fa fa-edit " aria-hidden="true"></i></span>
              <input type="date" class="form-control" placeholder="" name="date" aria-describedby="basic-addon1" value="">
                    <span class="input-group-btn">
          <button type="submit" name="att"   class="btn bg-purple btn-flat " ><i class="glyphicon glyphicon-list-alt "> </i>  Get List</button>
                    </span>
              </div>
				
		   
 </form> 
               
              </div>
            </div>
            <!-- /.box-body -->
          </div> </div></div>
		  
		  
		  
		  
        </div>
        <!-- /.col -->
        <div class="col-md-8">
         
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
		  
		 
          $cu_date = date('Y-m-d');
		
 		
$select = "SELECT   `studentRollNumber`, `Attendence`, `Date` FROM `tbl_attendance` WHERE  `Date` ='$cu_date' AND  NOT `attendence`  =  ''   ";
     
 		
		
				  
               if($run = mysqli_query($con,$select)){
				 while($row = mysqli_fetch_array($run)){
		 
	            
          echo '<tr style="color:grey" >';

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
