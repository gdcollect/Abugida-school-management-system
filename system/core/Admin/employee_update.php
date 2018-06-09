<?php  require 'top.php';?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Employee
        <small>Update</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Employee Registeration</a></li>
                 <li><a href="#">Employee Update</a></li>

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
           
          <!-- /.box -->

          <div class="box">
            <div class="box-header btn  btn-flat " >
              <h3 class="box-title"> Update Employee </h3>
            </div>
            <!-- /.box-header -->
            
			
			 

<?php
  
	 $id = $_REQUEST['id'];
	 
 	  $con = mysqli_connect($host,$user,$password,$db);
					 
	 
	 $query="SELECT * FROM  employee WHERE id='".$id."'";
 	
		 $resource=mysqli_query( $con,$query) or die ("An unexpected error occured  ");
		  $result=mysqli_fetch_array($resource);
		  
	 ?>	   

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
                
				
 
     <form action="emp_update.php" method="post" role="form" >
				 	 <input type="hidden"   id="id" value="<?php echo $result['id'];  ?>"     name="id">

    <div class="container">
    <div class="row">
    <div class="col-lg-3">
          <div class="form-group">
            <input type="text" class="form-control" required id="name" placeholder="First Name" name="first_name" value="<?php echo $result['first_name'];  ?>">
          </div>
    </div>
    <div class="col-lg-3">
          <div class="form-group">
             <input type="text" class="form-control" required id="lname" placeholder="Last Name"  name="last_name" value="<?php echo $result['last_name'];  ?>">
          </div>
    </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-lg-3">
          <div class="form-group">
             <input type="date" class="form-control" id="dob" name="dob" value="<?php echo $result['dob'];  ?>">
          </div>
  </div>
  <div class="col-lg-3">

          <div class="form-group">
            <select  class="form-control" required id="sex" name="gender" value="<?php echo $result['gender'];  ?>">
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
             <input type="text" class="form-control" required id="postition" placeholder="Postition" name="postition" value="<?php echo $result['postition'];  ?>" >
          </div>
   </div>
    <div class="col-lg-3">

          <div class="form-group">
             <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone"  value="<?php echo $result['phone'];  ?>" >
          </div>
    </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-lg-3">
           <div class="form-group">
            <select  class="form-control"   required id="class" name="class" value="<?php echo $result['class'];  ?>" >
           <option> Class </option>
           <option >1st</option>
           <option >2st</option>
           <option >3st</option>
           <option >4st</option>
           </select>
          </div>
    </div>
    <div class="col-lg-3">
          <div class="form-group">
             <input type="text" class="form-control" required id="salary" placeholder="Salary"  name="salary" value="<?php echo $result['salary'];  ?>" >
          </div>
    </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-lg-3">

          <div class="form-group">
             <textarea class="form-control" id="address" placeholder="Address" rows="3" name="address" value="<?php echo $result['address'];  ?>" ></textarea>
          </div>
		  
		   <button type="submit"  class="btn bg-navy btn-flat " name="register"> Register </button>
        
          <button type="reset" class="btn bg-purple btn-flat" name="back"> Clear </button>
<a href="../../system/core/employee.php"  class="btn btn-default btn-flat  ">  </i>Back </a> 
 
		  
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
