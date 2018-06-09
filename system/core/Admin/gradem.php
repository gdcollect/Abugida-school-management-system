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
        <div class="col-xs-12">
           
          <!-- /.box -->
 
		  <?php
		         $con = mysqli_connect($host,$user,$password,$db);

 				 
				 
				 
				 $gradef = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'female' AND grade =".$_GET ['grade'] );
				 $r_gradef = mysqli_num_rows($gradef);
				 
				 
				 $gradem = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'male' AND grade =".$_GET ['grade'] );
				 $r_gradem= mysqli_num_rows($gradem);
				 
				 $Ad =( $r_gradef + $r_gradem);
		 
		            $add = round($Ad );
				
				 ?>
	
		  
		  
		  
		  
		  
		  
		   <div class="row">
		    <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
         <div class="box box-primary">
            <div class="box-body no-padding">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h4 class="box-title">  Action</h4>
            </div>
            <div class="box-body">
              <!-- the events -->
              <div id="external-events">
 		  <a href="../../core/admin/mark_list_entry.php"  class="btn bg-purple btn-flat  "><i class="glyphicon glyphicon-plus"> </i> Add New </a> 
		<button type="button" onclick="window.print()" class="btn bg-navy btn-flat  ">Print/Export PDF</button>
 		  <a href="../../core/admin/all_mark_list.php"  class="btn bg-purple btn-flat  "><i class="glyphicon glyphicon-arrow-left"> </i> Back </a> 

                
               
              </div>
            </div>
            <!-- /.box-body -->
          </div> </div></div>
          <!-- /.widget-user -->
        </div>
          <!-- /.widget-user -->
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
             <div class="widget-user-header bg-aqua-active">
              <div class="form-group">
			  <form  method="post" action="mark_select_sec.php?grade=<?php echo $_GET ['grade']?>  "  >
			  <input type="hidden" name="<?php echo $_GET ['grade'] ?>">
                <label>Select Section</label>
                <select class="form-control select2" name="section" style="width: 100%;">
				 
				  <?php 
				  
					$query2=mysqli_query($con,"select * from section  ")or die(mysqli_error($con));
					  while($row=mysqli_fetch_array($query2)){
				  ?>
						<option value="<?php echo $row['sec'];?>"><?php echo $row['sec'];?></option>
				  <?php }
					
				  ?>
				</select>
				<br>
				 
				 
              </div>
            </div>
            
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
       <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-aqua-active">
              <div class="form-group">
                 <label>Select Subject</label>
                <select class="form-control select2" name="subject1" style="width: 100%;">
				 
				  <?php 
				  
					$query2=mysqli_query($con,"select * from subject  ")or die(mysqli_error($con));
					  while($row=mysqli_fetch_array($query2)){
				  ?>
						<option value="<?php echo $row['subject'];?>"><?php echo $row['subject'];?></option>
				  <?php }
					
				  ?>
				</select>
				<br>
				 <div class=" ">
				 <button type="submit" name="sub"   class="btn bg-navy btn-flat pull-right ">View</button>
              </div>
				</form>
              </div>
			 
            </div>
            
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
       
        </div>
        <!-- /.col -->
      
      <!-- /.row -->
		  
		   
		  
		  
		  
		  
		  
		   
                   
				   <div  >
		  
		   
           


 <div class="nav-tabs-custom">
                        
                        
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#First" data-toggle="tab">First Semister</a>
                                </li>
                                <li class=""><a href="#Second" data-toggle="tab">Second Semister</a>
                                </li>
                               
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="First">

									
									
									 <div class="box-header btn   btn-flat ">
              <h3 class="box-title"> Mark list in Grade <?php  echo $_GET ['grade']?> </h3>
            </div>
             
            <!-- /.box-header -->
            <div class="box-body">
			                            <div class="table-responsive">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th > Roll no </th>
					  <th> Section </th>
					  <th> Name </th>
					  <th> subject </th>
					    
					  <th>Grade </th>
					  <th> 	Test_1 </th>
					  <th> 	 2 </th>
					  <th> 	 3 </th>
					  <th> 	 4 </th>
					  <th> 	 5 </th>
					  <th> 	 6 </th>
					   
					  <th>  60%</th>
					  <th>  40%</th>
					  <th>  100%</th>
					 
					  <th> Action </th>
                </tr>
                </thead>
                <tbody>
                 
				 
				 
				 
				 
				 <?php        
		  
                  $con = mysqli_connect($host,$user,$password,$db);

		$select = "SELECT * FROM `marklist` WHERE grade=".$_GET ['grade'];
				  
               if($run = mysqli_query($con,$select)){
				 while($row = mysqli_fetch_array($run)){
		 
	            
          echo '<tr style="color:grey"; >';

           echo "<td>".$row['std_roll_no']."</td>";
			echo "<td>".$row['sec']."</td>";
			echo "<td>".$row['name']."</td>";
			 
			echo "<td>".$row['subject']."</td>";
			echo "<td>".$row['grade']."</td>";
			
			echo "<td>".$row['testA']."</td>";

			echo "<td>".$row['testB']."</td>";
			echo "<td>".$row['testC']."</td>";
			echo "<td>".$row['testD']."</td>";
			echo "<td>".$row['test1']."</td>";
			echo "<td>".$row['test2']."</td>";
			echo "<td>".$row['addition']."</td>";
			echo "<td>".$row['final']."</td>";
	        echo "<td>".$row['final_add']."</td>";
			
			
 
			
			
			
			
	
	echo '<td width=250>';
	echo'<div class="btn-group">';
				echo'  <button data-toggle="dropdown" class="btn bg-navy btn-flat btn-xs  dropdown-toggle">Action <span class="caret"></span></button>';
				echo'  <ul class="dropdown-menu">';
				echo'	<li><a href="mark_list_update.php?m_id='.$row['m_id'].'"><i class="glyphicon glyphicon-pencil"></i>Update</a></li>';
				echo'	<li><a href="report_card.php?std_roll_no='.$row['std_roll_no'].'"><i class="glyphicon glyphicon-list-alt"> </i>Report</a></li>';
				echo'	<li><a href="mark_list_delete.php?m_id='.$row['m_id'].'"><i class="glyphicon glyphicon-remove"> </i>Delete</a></li>';
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
                 <th > Roll no </th>
					  <th> Section </th>
					  <th> Name </th>
					  <th> subject </th>
					    
					  <th>Grade </th>
					  <th> 	Test_1 </th>
					 <th> 	 2 </th>
					  <th> 	 3 </th>
					  <th> 	 4 </th>
					  <th> 	 5 </th>
					  <th> 	 6 </th>
					   
					  <th>  60%</th>
					  <th>  40%</th>
					  <th>  100%</th>
					 
					  <th> Action </th>
                </tr>
                </tfoot>
              </table>
			   </div> </div>






									
									
									
									
							 
                                 </div>
								 
								 
								 
								 
								 
								 
								 
                                <div class="tab-pane fade" id="Second">
								
								 
								 
								 
								  <div class="box-header btn   btn-flat ">
              <h3 class="box-title"> Mark list in Grade <?php  echo $_GET ['grade']?> </h3>
            </div>
             
            <!-- /.box-header -->
            <div class="box-body">
			                            <div class="table-responsive">

              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th > Roll no </th>
					  <th> Section </th>
					  <th> Name </th>
					  <th> subject </th>
					    
					  <th>Grade </th>
					  <th> 	Test_1 </th>
					  <th> 	 2 </th>
					  <th> 	 3 </th>
					  <th> 	 4 </th>
					  <th> 	 5 </th>
					  <th> 	 6 </th>
					   
					  <th>  60%</th>
					  <th>  40%</th>
					  <th>  100%</th>
					 
					  <th> Action </th>
                </tr>
                </thead>
                <tbody>
                 
				 
				 
				 
				 
				 <?php        
		  
                  $con = mysqli_connect($host,$user,$password,$db);

		$select = "SELECT * FROM `marklist` WHERE grade=".$_GET ['grade'];
				  
               if($run = mysqli_query($con,$select)){
				 while($row = mysqli_fetch_array($run)){
		 
	            
          echo '<tr style="color:grey"; >';

           echo "<td>".$row['std_roll_no']."</td>";
			echo "<td>".$row['sec']."</td>";
			echo "<td>".$row['name']."</td>";
			 
			echo "<td>".$row['subject']."</td>";
			echo "<td>".$row['grade']."</td>";
			
			echo "<td>".$row['testE']."</td>";

			echo "<td>".$row['testF']."</td>";
			echo "<td>".$row['testG']."</td>";
			echo "<td>".$row['testH']."</td>";
			echo "<td>".$row['test3']."</td>";
			echo "<td>".$row['test4']."</td>";
			echo "<td>".$row['addition2']."</td>";
			echo "<td>".$row['finalI']."</td>";
	        echo "<td>".$row['final_adds2']."</td>";
			
			
			
			
			
			
			
	
	echo '<td width=250>';
	echo'<div class="btn-group">';
				echo'  <button data-toggle="dropdown" class="btn bg-navy btn-flat btn-xs  dropdown-toggle">Action <span class="caret"></span></button>';
				echo'  <ul class="dropdown-menu">';
				echo'	<li><a href="mark_list_update.php?m_id='.$row['m_id'].'"><i class="glyphicon glyphicon-pencil"></i>Update</a></li>';
				echo'	<li><a href="report_card.php?std_roll_no='.$row['std_roll_no'].'"><i class="glyphicon glyphicon-list-alt"> </i>Report</a></li>';
				echo'	<li><a href="mark_list_delete.php?m_id='.$row['m_id'].'"><i class="glyphicon glyphicon-remove"> </i>Delete</a></li>';
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
                 <th > Roll no </th>
					  <th> Section </th>
					  <th> Name </th>
					  <th> subject </th>
					    
					  <th>Grade </th>
					  <th> 	Test_1 </th>
					 <th> 	 2 </th>
					  <th> 	 3 </th>
					  <th> 	 4 </th>
					  <th> 	 5 </th>
					  <th> 	 6 </th>
					   
					  <th>  60%</th>
					  <th>  40%</th>
					  <th>  100%</th>
					 
					  <th> Action </th>
                </tr>
                </tfoot>
              </table>
			   </div> </div>






								 
								
								
                                  </div>
                               
                            </div>
                       
                    </div>







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
    $("#example1").DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
	
	
	
	
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>
</body>
</html>
