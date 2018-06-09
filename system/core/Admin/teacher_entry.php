<?php  require 'top.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Teacher
        <small>Registeration</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="../../core/admin/teacher.php" >Teacher Management</a></li>
        <li><a href="#">Teacher Registeration</a></li>
         
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
           
          <!-- /.box -->

          <div class="box">
            <div class="box-header btn  btn-flat " >
              <h3 class="box-title"> Register New Teacher </h3>
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
 $pagetitle="Teachers Registration Page";
 
    if (isset($_POST['register'])) {
		
      $teacher_id = $_POST['teacher_id'];
      $firstName = $_POST['name'];
      $lastName = $_POST['lname'];
      $dob = $_POST['dob'];
      $gender = $_POST['gender'];
      $email = $_POST['email'];
      $phone= $_POST['phone'];
      $degree= $_POST['degree'];
      $salary= $_POST['salary'];
      $address= $_POST['address'];
     
     	  $con = mysqli_connect($host,$user,$password,$db);

	$insert = "INSERT INTO `teacher_table` VALUES ('$teacher_id','$firstName','$lastName','$dob','$gender','$email','$phone',
	'$degree','$salary','$address' )";
	if($run = mysqli_query($con,$insert)){
		?>
		   <script>
alert("  successfully registered");
 </script>
		   <?php
 
 
}else{
echo '<P style=background:blue;color:white;padding:6px;>Sorry we were unable to register you now. try again later.<a href="form.php">Click here to insert.</p>'.mysql_error();
}
	}
     ?>  
 		
				
				 <form action="#" method="post" role="form" >
				             <input type="hidden"   name="teacher_id">

    <div class="container">
    <div class="row">
    <div class="col-lg-3">
          <div class="form-group">
            <input type="text" class="form-control" required id="name" placeholder="First Name" name="name">
          </div>
    </div>
    <div class="col-lg-3">
          <div class="form-group">
             <input type="text" class="form-control" required id="lname" placeholder="Last Name"  name="lname">
          </div>
    </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-lg-3">
          <div class="form-group">
             <input type="date" class="form-control" id="dob" name="dob">
          </div>
  </div>
  <div class="col-lg-3">

          <div class="form-group">
            <select  class="form-control" required id="sex" name="gender" >
           <option> Gender </option>
           <option value="male">Male</option>
           <option value="female">Female</option> 
           </select>
          </div>
  </div>
  </div>
  </div>
   <div class="container">
    <div class="row">
    <div class="col-lg-3">

          <div class="form-group">
             <input type="email" class="form-control" required id="email" placeholder=" Email" name="email">
          </div>
   </div>
    <div class="col-lg-3">

          <div class="form-group">
             <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone">
          </div>
    </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-lg-3">
           <div class="form-group">
            <select  class="form-control" name="degree"  required id="degree" name="degree">
           <option> Degree </option>
           <option >Diploma</option>
           <option >1st Degree</option>
           <option >Master</option>
           <option >P.HD</option>
           </select>
          </div>
    </div>
    <div class="col-lg-3">
          <div class="form-group">
             <input type="text" class="form-control" required id="salary" placeholder="Salary"  name="salary">
          </div>
    </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-lg-3">

          <div class="form-group">
             <textarea class="form-control" id="address" placeholder="Address" rows="3" name="address"></textarea>
          </div>
		  
		   <button type="submit" class="btn bg-purple btn-flat"name="register"> Register </button>
        
          <button type="reset" class="btn bg-navy btn-flat" name="back"> Clear </button>
		  
		  
    </div>
	
	
	 
	
    </div>
    </div>
 
       </form>
				
				
				
				
				
				
              </div>
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
