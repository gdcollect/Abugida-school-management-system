<?php  require 'top.php';?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Subject
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Subject Management</a></li>
         
      </ol>
    </section>
	
 
   
 
	 
       
    <!-- Main content -->
    <section class="content">
      
	  
	    
		 
		<?php 
    if (isset($_POST['saved'])) {
      $subject_name = $_POST['subject_name'];
      $t_id = $_POST['t_id'];
      $grade = $_POST['grade'];
      $Section= $_POST['Section'];

		   
	$query = "SELECT  `subject_name`, `t_id`, `grade`, `Section` FROM `subject_table` WHERE `subject_name`= '$subject_name'  AND `t_id`= '$t_id' AND `grade`= '$grade' ";
			  
				$result = mysqli_query($con,$query);
				$count = mysqli_num_rows($result);
				if($count!=0){
					$error = true;
					?>
					<div class="box-body">
          <div class="row">
            <div class="col-md-4">
		 <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Alert!</h4>
               Already Exist!
              </div></div></div>
			  
 	 <?php
			 
	             }else{
  
	
	
	$insert = "INSERT INTO `subject_table` VALUES ('$id','$subject_name','$t_id','$grade','$Section' )";
	if($run = mysqli_query($con,$insert)){
	?>
		   <script>
alert("  successfully registered...");
window:location="subject_entry.php";
</script>
		   <?php
	 
	}else{
	echo '<P style=background:blue;color:white;padding:6px;>Sorry we were unable to register you now. try again later.<a href="form.php">Click here to insert.</p>'.mysql_error();
	}
		}
	}
		
		
		
		
		?>
			
			 
		<div class="row">
		
		
		
        <div class="col-xs-6">
           
          <!-- /.box -->

          <div class="box">
            <div class="box-header btn  btn-flat " >
              <h3 class="box-title"> Class And Subject Info Entry </h3>
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
               
		  <div class=" ">
                                
			 			
								 <form action="#" method="post" role="form">
    <div  class="container"style="color:grey; ">
    <div class="row">
          <div class="col-lg-4">
          <div class="form-group">
            <?php
			 $con = mysqli_connect($host,$user,$password,$db);
      $qs=mysqli_query($con,"select * from subject");
      ?>
      <?php	
      echo "<select  style='color:grey;'   class='form-control' name='subject_name' >";
        echo"  <option value= >  Subject's Name</option>";	  
      while($subject=mysqli_fetch_row($qs))
      {				
       echo"
	  
       <option value=$subject[1]>  $subject[1] </option>";
       }
      echo "</select>"."<br>";
      ?>
           
            <select  style="color:grey" class="form-control" required id="grade" name="grade">
                              <option value="default">  Grade </option>
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

         </div><!--col-row-->
          </div><!--col-container-->
           <div class="container"   style="color:grey; ">
          <div class="row">
          <div class="col-lg-4">

          <div class="form-group">
            <?php
			 $con = mysqli_connect($host,$user,$password,$db);
      $qs=mysqli_query($con,"SELECT * FROM `section` ");
      ?>
      <?php	
      echo "<select  style='color:grey;'   class='form-control' name='Section' >";
        echo"  <option  > Section</option>";	  
      while($sec=mysqli_fetch_row($qs))
      {				
       echo"
	  
       <option value=$sec[1]>  $sec[1] </option>";
       }
      echo "</select>"."<br>";
      ?>
	  
	  
          
          <?php
      $qs=mysqli_query($con,"select * from teacher_table");
      ?>
      <?php	
      echo "<select style='color:grey' class='form-control' name='t_id' >
	  <option value='default'>  Teacher </option>
	  ";	
	  
      while($id=mysqli_fetch_row($qs))
      {				
       echo"
        <option value=$id[0]>$id[0]&nbsp&nbsp&nbsp$id[1]</option>";
       }
      echo "</select>"."<br>";
      ?>
          </div>
          </div>
      </div> 
      </div>
    
      <button type="submit" class="btn bg-purple btn-flat "name="saved"> Add </button>
        
          <button type="reset" class="btn bg-navy btn-flat " name="back"> Clear </button>
      
          
  </form>
								
				 <br> <br>				
								
								
								
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
	  
	  
	  
	  
	  
	  
	  
	   <div class="col-xs-6">
           
          <!-- /.box -->

          <div class="box">
            <div class="box-header btn  btn-flat " >
              <h3 class="box-title">New Subject Entry </h3>
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
                
				
		 
		
		
		 
		 
                                 
								 
								 
								 
								 
							 <form action="#" method="post" role="form">
    <div class="container" style="color:grey; ">
    <div class="row">
          <div class="col-lg-3">
                    <input type="hidden" name="sub_id">
          <div class="form-group">
             <input type="text" class="form-control" id="Subject " placeholder="Subject" name="subject">
          </div>
          </div>
    
          
          
         </div><!--col-row-->
          </div><!--col-container-->
           <div class="container">
          <div class="row">
          
          
         <button type="submit" class="btn bg-purple btn-flat "name="save"> Add </button>
        
          <button type="reset" class="btn bg-navy btn-flat " name="back"> Clear </button>
      
         
      </div> 
      </div>

         
  </form>	 
				

<br><br> 
<form action="#" method="post" role="form">
    <div class="container" style="color:grey; ">
    <div class="row">
          <div class="col-lg-3">
             <input type="hidden"  name="sec_id">

          <div class="form-group">
             <input type="text" class="form-control" id="sec " placeholder="section" name="sec">
          </div>
          </div>
    
          
          
         </div><!--col-row-->
          </div><!--col-container-->
           <div class="container">
          <div class="row">
          
          
      <button type="submit" class="btn bg-purple btn-flat "name="sec1"> Add </button>
        
          <button type="reset" class="btn bg-navy btn-flat " name="back"> Clear </button>
      
         
         
      </div> 
      </div>

         
  </form>	 
				
				
 
<br><br><br><br> <br> 
 	 						 
                  
				  <?php
		
		
		
		 if (isset($_POST['save'])) {
    $id = $_POST['sub_id'];
      $subject = $_POST['subject'];
	  
     
	
	$insert = "INSERT INTO `subject` VALUES ('$id','$subject' )";
	if($run = mysqli_query($con,$insert)){
	 echo "You have successfully Added A Subject...";
	 
	}else{
	echo '<P style=background:blue;color:white;padding:6px;>Sorry we were unable to register you now. try again later.<a href="form.php">Click here to insert.</p>'.mysql_error();
	}
		}
		
		
		 if (isset($_POST['sec1'])) {
			 
    $sec_id = $_POST['sec_id'];
	
      $sec = $_POST['sec'];
	  
    $query = "SELECT sec FROM section WHERE sec='$sec'   " ;
				$result = mysqli_query($con,$query);
				$count = mysqli_num_rows($result);
				if($count!=0){
					$error = true;
				echo "Provided List  Already Exist"; 
	
	}else{
	$insert = "INSERT INTO `section` VALUES ('$sec_id','$sec' )";
	
	if($run = mysqli_query($con,$insert)){
	 echo "You have successfully Added A Section...";
	 
	}else{
	echo '<P style=background:blue;color:white;padding:6px;>Sorry we were unable to register you now. try again later.<a href="form.php">Click here to insert.</p>'.mysql_error();
	}
	}
	}
		 ?>  

             
      
		  
				
				
				
             
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
