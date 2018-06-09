<?php  require 'top.php';?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       File Upload
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">File Upload Management</a></li>
         
      </ol>
    </section>
	
 
   
 
	 <?php 
			if(!empty($_POST))
			{
				 $con = mysqli_connect($host,$user,$password,$db);

				if (!$con)
					echo('Could not connect: ' . mysqli_error());
				else
				{
					if (file_exists("download/" . $_FILES["file"]["name"]))
					{
						echo '<script language="javascript">alert(" Sorry!! Filename Already Exists...")</script>';
					}
					else
					{
						move_uploaded_file($_FILES["file"]["tmp_name"],
						"download/" . $_FILES["file"]["name"]) ;
						
						 
						$sql = "INSERT INTO downloads(grade,subject,topic,file) VALUES ('" . $_POST["grade"] ."','" . $_POST["sub"] ."','" . $_POST["pre"] . "','" . 
							  $_FILES["file"]["name"] ."');";
						if (!mysqli_query($con,$sql))
							echo('Error : ' . mysqli_error());
						else
							echo '<script language="javascript">alert(" File Uploded")</script>';
						}
				}
				mysqli_close($con);
			}
        ?>
			   
       
    <!-- Main content -->
    <section class="content">
      
	  
	    
		 
 <div >
                    <div class="nav-tabs-custom">
                        
                        
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Upload</a>
                                </li>
                                <li class=""><a href="#profile" data-toggle="tab">Manage</a>
                                </li>
                               
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="home">

									
									
							 
														   
  <form   id="form3" enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
		
		   	<div class="col-md-6" style="color:grey">	
   <input type="hidden"  name="MAX_FILE_SIZE" value="8000000"   >
             <input type="text" class="form-control" placeholder="About the file"  name="pre"   id="pre">
         
		  </div>		
		    <br> <br>
			<div class="col-md-6" style="color:grey">	
             <input  type="file" name="file" id="file"  class="form-control"  >
           </div>	
		  <br> <br>
			<div class="col-md-6" style="color:grey">	
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
		  
		  <br><br>
              
           <div class="col-md-6" style="color:grey">	
           <?php
		  $con = mysqli_connect($host,$user,$password,$db);
      $qs=mysqli_query($con,"select * from subject");
      ?>
      <?php	
      echo "<select  style='color:grey;'   class='form-control' name='sub' >";	
 "<option  >Subject</option>";
      while($subject=mysqli_fetch_row($qs))
      {				
       echo"
       <option value=$subject[1] >  $subject[1] </option>";
       }
      echo "</select>"."<br>";
      ?><br><br> 
			</div>
			
			
			
			 
            <div class="col-md-6" style="color:grey">	
           <button type="submit" class="btn bg-navy btn-flat  "name="upload"> Upload </button>
        
          <button type="reset" class="btn btn-default btn-flat" name="back"> Clear </button>
</div>	
      </form>     			
							
						<br><br> <br><br> <br><br> <br><br> <br><br> <br><br> 		
                                 </div>
                                <div class="tab-pane fade" id="profile">
								
								<table id="example1" class="table table-bordered table-striped">
 
              <thead style="color:#0067ab";  >
                <tr>
                  <th width="60px"> No</th>
				  <th>Subject</th>
				   <th>Grade</th>
                  <th>Topic</th>
                  <th>File</th>
               	  <th> Action </th>
                </tr>
              </thead>
              <tbody style="color:grey">
			  <?php 
			  
	  

			    $no=1;
				$result = mysqli_query($con,"SELECT * FROM downloads  ORDER BY subject ASC");
				while($data = mysqli_fetch_object($result) ):
			  ?>
                <tr>
				  <td><?php echo $no;?></td>
                  <td><?php echo $data->subject ?></td>
				   <td><?php echo $data->grade?></td>
                  <td><?php echo $data->topic?></td>
				  <td><?php echo $data->file?></td>
				  <td>
				 <a class='ui mini buttons'  href="deleteById.php?id=<?php echo $data->id ?> ">
				<button  class="btn btn-danger btn-xs btn-flat "  title="Click here to erase file."><i class="fa fa-close"></i> Delete </button>
					</a>
					

				  </td>
                </tr>
			  <?php
				$no++;
				endwhile;
			  ?>
              </tbody>
		</table>
		 	
								
								
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
