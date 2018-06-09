<?php  require 'top.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Lesson Plan
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Lesson Plan Management</a></li>
         
      </ol>
    </section>
	
 
   
 <?php
 if (isset($_POST['lesson'])) {
       $id = ($_REQUEST['id']);
      $departement = ($_REQUEST['departement']);
	  $grade = ($_REQUEST['grade']);
	  $chapter = ($_REQUEST['chapter']);
	  
      $title1 = ($_REQUEST['title1']);
	  $an1 = ($_REQUEST['an1']);
      $date1 = ($_REQUEST['date1']);
	  
	  $title2 = ($_REQUEST['title2']);
	  $an2 = ($_REQUEST['an2']);
      $date2 = ($_REQUEST['date2']);
	  
	  $title3 = ($_REQUEST['title3']);
	  $an3 = ($_REQUEST['an3']);
      $date3 = ($_REQUEST['date3']);
	  
	  $title4 = ($_REQUEST['title4']);
	  $an4 = ($_REQUEST['an4']);
      $date4 = ($_REQUEST['date4']);
	  
	  $title5 = ($_REQUEST['title5']);
	  $an5 = ($_REQUEST['an5']);
      $date5 = ($_REQUEST['date5']);
	  
	  $title6 = ($_REQUEST['title6']);
	  $an6 = ($_REQUEST['an6']);
      $date6 = ($_REQUEST['date6']);
	  
	  $title7 = ($_REQUEST['title7']);
	  $an7 = ($_REQUEST['an7']);
      $date7 = ($_REQUEST['date7']);
	  
	  $con=mysqli_connect("localhost","root","","register");
	  
	$insert = "INSERT INTO `lesson_plan` VALUES ('$id','$departement','$grade','$chapter','$title1','$an1','$date1'
	 ,'$title2','$an2','$date2','$title3','$an3','$date3','$title4','$an4','$date4','$title5','$an5','$date5'
	 ,'$title6','$an6','$date6','$title7','$an7','$date7'
	  )";
	if($run = mysqli_query($con,$insert)){
		 ?>  
	<script>
			alert("  successfully registered");
		    window:location="lesson_plan_entry.php";

 			</script>
 <?php
	}else{
	echo '<P style=background:blue;color:white;padding:6px;>Sorry we were unable to register you now. try again later.<a href="form.php">Click here to insert.</p>'.mysql_error();
	}
		}
     ?>  
	 
       
    <!-- Main content -->
    <section class="content">
	        

       <div class="box-header with-border">
 
         
        </div> 
	   <div class="row">
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
		  <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="glyphicon glyphicon-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="glyphicon glyphicon-remove"></i></button>
              </div>
            <!-- Add the bg color to the header using any of the bg-* classes -->
             <div class="widget-user-header bg-aqua-active">
			 
			 
              <div class="form-group">
			  <form  method="post" action="lesson_plan.php"   >
                <label>Select Subject</label>
               
       <select class="form-control" name="departement" >
	   						<option value="">Subject</option>

	   <?php 
				 $con = mysqli_connect($host,$user,$password,$db);

					$query2=mysqli_query($con,"select * from subject  ")or die(mysqli_error($con));
					  while($row=mysqli_fetch_array($query2)){
				  ?>
						<option value="<?php echo $row['subject'];?>"><?php echo $row['subject'];?></option>
				  <?php }
					
				  ?>
				 </select>
				
              </div>
            </div>
            
          </div>
          <!-- /.widget-user -->
        </div>
		
		
		
		
		<div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
		   <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="glyphicon glyphicon-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="glyphicon glyphicon-remove"></i></button>
              </div>
            <!-- Add the bg color to the header using any of the bg-* classes -->
             <div class="widget-user-header bg-aqua-active">
              <div class="form-group">
 			 
                <label>Select Grade</label>
                <select class="form-control select2" name="grade" style="width: 100%;">
				 
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
          <!-- /.widget-user -->
        </div>
		
		
		<div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
		   <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="glyphicon glyphicon-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="glyphicon glyphicon-remove"></i></button>
              </div>
            <!-- Add the bg color to the header using any of the bg-* classes -->
             <div class="widget-user-header bg-aqua-active">
              <div class="form-group">
			   
                <label>Select Date</label>
                  <input type="date" class="form-control" id="dob" name="date">

				<br>
				 <div class=" ">
				 <button type="submit" name="plan"   class="btn bg-navy btn-flat pull-right ">View Selected Lesson plan</button>
              </div>
				</form>
              </div>
            </div>
            
          </div>
          <!-- /.widget-user -->
        </div>
		
		
		
		
		</div>
        <!-- /.col -->
	 
	  
	   <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title" align="center">Add New Lesson Plan</h3>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
             
              <!-- /.form-group -->
              
			
			
			
			
			
			
			
                  
				<form action="#" method="post" role="form">
				     <!-- Advanced Tables -->
                 			 <input type="hidden" name="id" > 

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" >
                                    <thead  >
                    <tr>          
                      <th> Days</th>
                      <th> Departement</th>
                      <th> Grade</th>
                      <th> Chapter</th>
                      
                    </tr>
                  </thead>
      <tbody class="table table-striped table-bordered table-hover" style="color:grey" >
          
            
            <tr>        
             
			  <td> 

		  </td>
			 
			 
			 
             <td>    <div class="col-lg-8">

          <div class="form-group">
            
           <select style="color:grey"  class="form-control" name="departement" >
		   				  		      <option value="default">Select  </option>

	   <?php 
				 $con = mysqli_connect($host,$user,$password,$db);

					$query2=mysqli_query($con,"select * from subject  ")or die(mysqli_error($con));
					  while($row=mysqli_fetch_array($query2)){
				  ?>

						<option value="<?php echo $row['subject'];?>"><?php echo $row['subject'];?></option>
				  <?php }
					
				  ?>
				 </select>
          </div>
          </div>    </td> 
		  
		  
		  
             <td>     <div class="col-lg-8">

          <div class="form-group">
            
           <select style="color:grey"  class="form-control" required id="grade" name="grade">
		                    <option value="default">Select  </option>
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
          </div>      </td> 
		  
		  
		  
            <td>   <div class="col-lg-8">

          <div class="form-group">
            
           <select style="color:grey"  class="form-control" required id="chapter" name="chapter">
		                    <option value="default">Select  </option>
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
          </div>       </td>
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  <tr>
		  
		  
		  
		  <td> Day 1 </td>

		  <td> 

 <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control" placeholder="Title" id="title1" name="title1">
          </div>
          </div>

		  </td>
		  
		  
		  <td> 
 <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control"  placeholder="Additional Note" id="an1" name="an1">
          </div>
          </div>

		  </td>
		  
		  
		  
		  <td>  <div class="col-lg-8">
          <div class="form-group">
             
            <input type="date" class="form-control"  id="date1" name="date1">
          </div>
          </div> </td>
		  
		  </tr>
             
          
		  
		  
		  
		  
		   
		  <tr>
		  
		  
		  
		  <td>Day 2 </td>
		  <td> 

 <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control" placeholder="Title" id="title" name="title2">
          </div>
          </div>

		  </td>
		  
		  
		  <td> 
 <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control"  placeholder="Additional Note" id="an2" name="an2">
          </div>
          </div>

		  </td>
		  
		  
		  
		  <td>  <div class="col-lg-8">
          <div class="form-group">
             
            <input type="date" class="form-control"  id="date" name="date2">
          </div>
          </div> </td>
		  
		  </tr>
             
			 
			 
			 
			 
			 
			 
			 
			  
		  <tr>
		  
		  
		  
		  <td>Day 3</td>
		  <td> 

 <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control" placeholder="Title" id="title3" name="title3">
          </div>
          </div>

		  </td>
		  
		  
		  <td> 
 <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control"  placeholder="Additional Note" id="an3" name="an3">
          </div>
          </div>

		  </td>
		  
		  
		  
		  <td>  <div class="col-lg-8">
          <div class="form-group">
             
            <input type="date" class="form-control"  id="date3" name="date3">
          </div>
          </div> </td>
		  
		  </tr>
             
			 
			 
			 
			 
			 
			 
			 
			  
		  <tr>
		  
		  
		  
		  <td>Day 4 </td>
		  <td> 

 <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control" placeholder="Title" id="title4" name="title4">
          </div>
          </div>

		  </td>
		  
		  
		  <td> 
 <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control"  placeholder="Additional Note" id="an4" name="an4">
          </div>
          </div>

		  </td>
		  
		  
		  
		  <td>  <div class="col-lg-8">
          <div class="form-group">
             
            <input type="date" class="form-control"  id="date4" name="date4">
          </div>
          </div> </td>
		  
		  </tr>
             
			 
			 
			 
			 
			 
			  
		  <tr>
		  
		  
		  
		  <td>Day 5 </td>
		  <td> 

 <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control" placeholder="Title" id="title5" name="title5">
          </div>
          </div>

		  </td>
		  
		  
		  <td> 
 <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control"  placeholder="Additional Note" id="an5" name="an5">
          </div>
          </div>

		  </td>
		  
		  
		  
		  <td>  <div class="col-lg-8">
          <div class="form-group">
             
            <input type="date" class="form-control"  id="date5" name="date5">
          </div>
          </div> </td>
		  
		  </tr>
             
			 
			 
			 
			 
			 
			  
		  <tr>
		  
		  
		  
		  <td>Day 6 </td>
		  <td> 

 <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control" placeholder="Title" id="title6" name="title6">
          </div>
          </div>

		  </td>
		  
		  
		  <td> 
 <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control"  placeholder="Additional Note" id="an6" name="an6">
          </div>
          </div>

		  </td>
		  
		  
		  
		  <td>  <div class="col-lg-8">
          <div class="form-group">
             
            <input type="date" class="form-control"  id="date6" name="date6">
          </div>
          </div> </td>
		  
		  </tr>
      
		  <tr>
	  
		  <td>Day 7 </td>
		  <td> 

 <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control" placeholder="Title" id="title7" name="title7">
          </div>
          </div>

		  </td>
		  
		  
		  <td> 
 <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control"  placeholder="Additional Note" id="an7" name="an7">
          </div>
          </div>

		  </td>
		  
		  <td>  <div class="col-lg-8">
          <div class="form-group">
             
            <input type="date" class="form-control"  id="date7" name="date7">
          </div>
          </div> </td>
		  
		  </tr>
             
			 
      </tbody>    
	  
             </table>
			 
			 <div >
         <button type="submit" class="btn bg-navy btn-flat  "name="lesson"> Add </button>
        
           <button type="reset" class="btn btn-default btn-flat"  name="back"> Clear </button>
          </div> 
		  
			  
       
			 
</form>


			
			
			
			
			
			
			
            <!-- /.col -->
          </div> </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
      </div>
      <!-- /.box -->
	  
	 
	  
	  
	  
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
