<?php  require 'top.php';?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Students
        <small>Registeration</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a  href="../../core/admin/student.php" >Students Management</a></li>
        <li><a href="#">Students Registeration</a></li>
         
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
           
          <!-- /.box -->

          <div class="box">
            <div class="box-header btn  btn-flat " >
              <h3 class="box-title"> Register New Student </h3>
            </div>
            <!-- /.box-header -->
            
			
			 



 <div class="box box-default">
        <div class="box-header with-border">
 
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
                
				
				
<?php  
 
    if (isset($_POST['register'])) {

      $std_roll_no = ($_REQUEST['std_roll_no']);
	  $studentName = ($_REQUEST['name']);
	  $lname = ($_REQUEST['lname']);
      $dob = ($_REQUEST['dob']);
	  $age = ($_REQUEST['age']);
      $gender = ($_REQUEST['gender']);
	  $add= ($_REQUEST['add']);
      $phone = ($_REQUEST['phone']);
	  $Phone_2 = ($_REQUEST['Phone_2']);
      $gurdian= ($_REQUEST['gurdian']);
      
      $grade = ($_REQUEST['grade']);
	  $section = ($_REQUEST['section']);
      $program= ($_REQUEST['program']);
	  
	  
	  
    $con = mysqli_connect($host,$user,$password,$db);

	$insert = "INSERT INTO `student_table` VALUES ('$std_roll_no','$studentName','$lname','$dob','$age','$gender',
	'$add','$phone','$Phone_2','$gurdian',
	 '$grade','$section','$program' )";
	if($run = mysqli_query($con,$insert)){
		?>
		   <script>
alert("  successfully registered");
 </script>
		   <?php
 
 
}else{
echo '<P style=background:blue;color:white;padding:6px;>Sorry we were unable to register now. try again later</p>'.mysql_error();
}
	}
     ?>  
 
			   
				
				
				 <form action="student_entry.php" method="post" role="form">
            <input type="hidden"   name="std_roll_no">

        <div class="container">
          <div class="row">
          <div class="col-lg-4">
          <div class="form-group">
            <input type="text" class="form-control" required id="name" placeholder="Student Name"  name="name">
          </div>
          </div>
          <div class="col-lg-4">
          <div class="form-group">
            <input type="text" class="form-control" required id="Last Name" placeholder=" Last Name "  name="lname">
          </div>
          </div>
         </div>
        </div>  <!-- col-container-->

		
		
		
		
		 <div class="container">
          <div class="row">
          <div class="col-lg-4">
          <div class="form-group">
            <input type="date" class="form-control" id="dob" name="dob">
          </div>
          </div>
          <div class="col-lg-4">
          <div class="form-group">
            <input type="text" class="form-control" id="Age" placeholder=" Age " name="age">
          </div>
          </div>
         </div>
        </div> 
		
		
		
		
         <div class="container">
          <div class="row">
           <div class="col-lg-4">

          <div class="form-group">
           <select  class="form-control"   required id="sex" name="gender">
           <option> Gender  </option>
           <option value="male">Male</option>
           <option value="female">Female</option> 
           </select>
          </div>
          </div>
          <div class="col-lg-4">

          <div class="form-group">
            <input type="text" class="form-control" placeholder=" Address " id="add" name="add">  
          </div>
          </div>
           </div>
          </div><!-- col-container-->

       <div class="container">
        <div class="row">
         <div class="col-lg-4">
          <div class="form-group">
            <input type="text" class="form-control" id="phone" placeholder=" Phone " name="phone">
        </div>
        </div>
          <div class="col-lg-4">

          <div class="form-group">
            <input type="text" class="form-control" id="Phone 2" placeholder=" Phone_2 " rows="3" name="Phone_2"></input> 
          </div>
          </div>
          </div>
          </div>
          <div class="container">
           <div class="row">
          <div class="col-lg-4">

          <div class="form-group">
            <input type="text" class="form-control" id="Gurdian Name" placeholder="Gurdian_Name" name="gurdian">
          </div>
          </div>
              <div class="col-lg-4">
          <div class="form-group">
           <select  class="form-control"    required id="grade" name="grade">
          <option selected="selected" value="default"> Grade  </option>
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
		  
		  
           </div>
          </div>
		  
		  
		  
		  
		  
		  
		  
		  
		   <div class="container">
           <div class="row">
          <div class="col-lg-4">

          <div class="form-group">
           <select  class="form-control" name="program"  required id="program" name="program">
          <option selected="selected" value="default"> Program  </option>
           
           <option >Social</option>
           <option >Natural</option>
		   <option >None</option>
            
           </select>
          </div>
          </div>
              <div class="col-lg-4">
          <div class="form-group">
           <?php
	  $con = mysqli_connect($host,$user,$password,$db);

      $qs=mysqli_query($con,"select * from section");
      ?>
      <?php	
      echo "<select  style='color:grey;'   class='form-control' name='section' >";		
        echo "<option> section  </option> "; 
      while($section=mysqli_fetch_row($qs))
      {				
       echo "<option value=$section[1] >  $section[1] </option>";
       }
      echo "</select>"."<br>";
      ?>
          </div>  
          </div>
		  
		  
           </div>
          </div>
		  
         <button type="submit" class="btn bg-purple btn-flat "name="register"> Register </button>
        
          <button type="reset" class="btn bg-navy btn-flat " name="back"> Clear </button>
<a href="../../core/admin/student.php"  class="btn btn-default btn-flat  "><i class="glyphicon glyphicon-repeat"> </i> Back</a> 

       </form>
				
				
				
				
				
				
             
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
         
      </div>
			
			
			
			
			
			
			
			
			
			
			
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div> </div>
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
