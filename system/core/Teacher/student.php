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
        <li><a href="../../core/admin/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Students Management</a></li>
         
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
           
          <!-- /.box -->
  
		  <?php
	 $userId= $userRow['userId'];
     $select1 = "SELECT   `subject_name`, `t_id`, `grade`, `Section` FROM `subject_table` WHERE  `t_id`= '$userId' ";
	            $run1 = mysqli_query($con,$select1); 
				 $row1 = mysqli_fetch_assoc($run1) ;
				 
				  	$grade = $row1['grade'];
		 	  		$Section = $row1['Section'];
	 
	
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
              <h4 class="box-title">Select Grade Level</h4>
            </div>
		 
		  
		  
		  	  <?php 
   
     if($run1 = mysqli_query($con,$select1))
	     { 
		   while($row1 = mysqli_fetch_assoc($run1))
		   {
				 $grade = $row1['grade'];
				 $Section = $row1['Section'];
				 $select = "SELECT  * FROM `student_table` WHERE `grade` IN('$grade') AND section IN('$Section')  LIMIT 1   ";
		   
               if($run = mysqli_query($con,$select))
			       {
			         while($row = mysqli_fetch_array($run))
					 {
	                   $count = mysqli_num_rows($run) ;
           ?>	 
 <div class="col-md-3 col-sm-6 col-xs-12">
 
     <div class="info-box bg-aqua">
	 
		  <span class="info-box-icon"><a href="../../core/teacher/grade.php?grade=<?php echo $row['grade'] ;?>"   class="btn bg-purple btn-flat  "><i class="glyphicon glyphicon-th"> </i></a></span>
		  
				<div class="info-box-content">
				   
					  <span class="info-box-text">Grade</span>
					  
						<span class="info-box-number"><?php echo $row['grade'] ;?></span>

						  <div class="progress">
						  
								<div class="progress-bar" style="width: 50%"></div>
							
						  </div>
					  
						  <span class="progress-description">
						  
								<?php echo $count ;?> Students  
							
						  </span>
				</div>
            <!-- /.info-box-content -->
     </div>
          <!-- /.info-box -->
</div>
        <!-- /.col --> 
				  
<?php }
			  
	 }
}} ?>
		  
		  
		   <div class="row">
        
		
		 
       
        <!-- /.col -->
       
        <!-- /.col -->
      </div>
 
	  </div>
	  
	  </div>
	  
	  </div>
	  
	  </div>
		 
           <div class="box">
		  
		   
            <div class="box-header btn   btn-flat ">
              <h3 class="box-title"> All Students</h3>
            </div>
             
            <!-- /.box-header -->
            <div class="box-body">
			                            <div class="table-responsive">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th> Roll No</th>
                      <th> Name </th>
					  <th> L.Name </th>
                      <th> Gender </th>
					  <th> DOB </th>
                      <th> Age </th>
                      <th> Phone </th>
                       <th> Address </th>
                      <th> Gurdian.N</th>
                      <th> Grade </th>
                      <th> Section </th>
                      <th> Program </th>
                 </tr>
                </thead>
                <tbody>
                 
				 
				 
				 
				 
				 <?php        
		  
                $con = mysqli_connect($host,$user,$password,$db);

				
				 if($run1 = mysqli_query($con,$select1)){ 
				 while($row1 = mysqli_fetch_assoc($run1)){
				 
				  	$grade = $row1['grade'];

		 	  		$Section = $row1['Section'];
				
         $select = "SELECT  * FROM `student_table` WHERE grade IN('$grade') AND section IN('$Section')   ";
		   
               if($run = mysqli_query($con,$select)){
			   while($row = mysqli_fetch_array($run)){
	
	
            echo '<tr style="color:grey"; >';

            // echo '<td>'. $post['student_id'] . '</td>'; 
            echo '<td>'.$row['std_roll_no']. '</td>';			
            echo '<td>'.$row['studentname']. '</td>';
            echo '<td>'. $row['lname'] . '</td>';
            echo '<td>'. $row['gender'] . '</td>';
            echo '<td>'. $row['dob'] . '</td>';
			echo '<td>'. $row['age'] . '</td>';
            echo '<td>'. $row['phone'] . '</td>';
            echo '<td>'. $row['add']. '</td>';
            echo '<td>'. $row['gurdian']. '</td>';
            echo '<td>'. $row['grade'] . '</td>';
            echo '<td>'. $row['section'] . '</td>';
			echo '<td>'. $row['Program']. '</td>';
            
			
			
			
			
			
			
			
	
	 
           echo '</tr>';  
				 }
			  
			 }
			 }} 
           ?>	 
				 
				 
				 
				 
				 
                </tbody>
                <tfoot>
                <tr>
                  <th> Roll No</th>
                      <th> Name </th>
					  <th> L.Name </th>
                      <th> Gender </th>
					  <th> DOB </th>
                      <th> Age </th>
                      <th> Phone </th>
                       <th> Address </th>
                      <th> Gurdian.N</th>
                      <th> Grade </th>
                      <th> Section </th>
                      <th> Program </th>
				 
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
