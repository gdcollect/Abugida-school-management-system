<?php  require 'top.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Students
        <small>Update</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Students Update</a></li>
         
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
           
          <!-- /.box -->

          <div class="box">
            <div class="box-header btn  btn-flat " >
              <h3 class="box-title"> Update Student </h3>
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
   $pagetitle="Update Student's Record";
 
 
	 $std_roll_no=$_REQUEST['std_roll_no']; 
	 
	 $con = mysqli_connect($host,$user,$password,$db);
 	 $query="SELECT * FROM student_table WHERE std_roll_no='".$std_roll_no."'";
		
		 $resource=mysqli_query($con,$query) or die ("An unexpected error occured  ");
		  $result=mysqli_fetch_array($resource);
		  
	 ?>
     
 
				 
				 
		  <form action="stud_update.php" method="post" role="form">
    <input type="hidden"   id="std_roll_no" value="<?php echo $result['std_roll_no'];  ?>"     name="std_roll_no">

        <div class="container">
          <div class="row">
          <div class="col-lg-4">
          <div class="form-group">
            <label for="name" > Student Name </label>
            <input type="text" class="form-control" required id="name" placeholder=" Student_Name " value="<?php echo $result['studentname'];  ?>"   name="studentname">
          </div>
          </div>
          <div class="col-lg-4">
          <div class="form-group">
           <label for="Last Name" >  Last_Name  </label>
            <input type="text" class="form-control" required id="Last Name" placeholder=" Last_Name "value="<?php echo $result['lname'];  ?>"   name="lname">
          </div>
          </div>
         </div>
        </div>  <!-- col-container-->

		
		
		
		
		 <div class="container">
          <div class="row">
          <div class="col-lg-4">
          <div class="form-group">
             <label for="dob">  DOB </label>
            <input type="date" class="form-control" id="dob"value="<?php echo $result['dob'];  ?>"  name="dob">
          </div>
          </div>
          <div class="col-lg-4">
          <div class="form-group">
             <label for="Age" > Age </label>
            <input type="text" class="form-control" id="Age" placeholder=" Age " value="<?php echo $result['age'];  ?>" name="age">
          </div>
          </div>
         </div>
        </div> 
		
		
		
		
         <div class="container">
          <div class="row">
           <div class="col-lg-4">

          <div class="form-group">
          <label for="gender"  > Gender </label>
           <select  class="form-control"  value="<?php echo $result['gender'];  ?>"  required id="sex" name="gender">
           <option>------- Gender ------</option>
           <option value="male">Male</option>
           <option value="female">Female</option> 
           </select>
          </div>
          </div>
          <div class="col-lg-4">

          <div class="form-group">
        <label for="add ">  Address </label>
            <input type="text" class="form-control" placeholder=" Address "value="<?php echo $result['add'];  ?>"  id="add" name="add">  
          </div>
          </div>
           </div>
          </div><!-- col-container-->

       <div class="container">
        <div class="row">
         <div class="col-lg-4">
          <div class="form-group">
            <label for="phone" > Phone  </label>
            <input type="text" class="form-control" id="phone" placeholder=" Phone "value="<?php echo $result['phone'];  ?>"  name="phone">
        </div>
        </div>
          <div class="col-lg-4">

          <div class="form-group">
            <label for="Phone 2" > Phone_2 </label>
            <input type="text" class="form-control" id="Phone 2" placeholder=" Phone 2" rows="3" value="<?php echo $result['Phone_2'];  ?>" name="Phone_2"></input> 
          </div>
          </div>
          </div>
          </div>
          <div class="container">
           <div class="row">
          <div class="col-lg-4">

          <div class="form-group">
            <label for="gurdian" > Gurdian Name </label>
            <input type="text" class="form-control" id="Gurdian Name" placeholder=" Gurdian_Name "value="<?php echo $result['gurdian'];  ?>"  name="gurdian">
          </div>
          </div>
              <div class="col-lg-4">
          <div class="form-group">
          <label for="grade"   > Grade </label>
           <select  class="form-control"    required id="grade"value="<?php echo $result['grade'];  ?>"  name="grade">
          <option selected="selected" value="default">--- Grade ---</option>
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

          <div class="col-lg-4">
          <div class="form-group">
           <label for="program"   > Program </label>
           <select  class="form-control"    required id="program" value="<?php echo $result['Program'];  ?>"  name="Program">
          <option selected="selected" value="None">  Program </option>
           
           <option value="Social">Social</option>
           <option value="Natural">Natural</option>
		   <option value="None">None</option>
            
           </select>
		   
		   
		   
		   
          </div> 
        <button type="submit" class="btn btn-primary"name="button"> Update </button>
        
            <a href="student.php"  type="submit" class="btn btn-default" name="back"> Back </a>
		  
 
          </div> <br><br>
           
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
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
