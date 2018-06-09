<?php  require 'top.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      School 
        <small>Information</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">School Information</a></li>
         
      </ol>
    </section>
 
	<?php
	        $con = mysqli_connect($host,$user,$password,$db);

	if(isset($_POST['submit'])!=""){
		
      $school_name = $_POST['school_name'];
      $type1	= $_POST['type'];
      $Elementary = $_POST['Elementary'];
	  $High = $_POST['High'];
	  $Preparatory = $_POST['Preparatory'];
      $phone= $_POST['phone'];
      $address= $_POST['address'];
	  
	  $logo=$_FILES['photo']['name'];
	  $size=$_FILES['photo']['size'];
	  $type=$_FILES['photo']['type'];
	  $temp=$_FILES['photo']['tmp_name'];
	  
	  move_uploaded_file($temp,"logo/".$logo);
	  
 
	$insert=mysqli_query($con,"insert into school_setup (name,type,Elementary,High,Preparatory,logo,phone,address)values('$school_name','$type1','$Elementary','$High','$Preparatory','$logo','$phone' ,'$address')");
	if($insert){
	?>
		   <script>
alert("  successfully registered...");
window:location="school_setup.php";
 </script>
		   <?php
	}
	else{
	die(mysqli_error());
	}
	}
	?>   
       
    <!-- Main content -->
    <section class="content">
      
	  
	    
		 
 <div >
                    <div class="nav-tabs-custom">
                        
                        
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">View</a>
                                </li>
                                <li class=""><a href="#profile" data-toggle="tab">Add School Info </a>
								
                                </li> <li class=""><a href="#more" data-toggle="tab">More  </a>
                                </li>
                               
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="home">
								
								 <?php
			     $con = mysqli_connect($host,$user,$password,$db);

 $result = mysqli_query($con,"SELECT * FROM school_setup ");
while($row = mysqli_fetch_array($result))
{
 

?>	 
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username"> <?php echo $row['name'] ; ?></h3>
              <h5 class="widget-user-desc">Something</h5>
            </div>
			
			
            <div class="widget-user-image">
 
              <img class="img"  src="../../system/core/logo/<?php  echo $row['logo'] ;?>" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Address</h5><br>
                    <span class="description-text"><?php  echo $row['address'] ;?></span>
                  </div>
                  <!-- /.description-block -->
                </div> 
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Phone</h5><br>
                    <span class="description-text"><?php  echo $row['phone'] ;?></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">Level</h5><br>
                    <span class="description-text"><?php echo $row['Elementary'] ; ?> ,<?php echo $row['High'] ; ?> ,<?php echo $row['Preparatory'] ; ?> </span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
				 <?php }?>
                                <div class="tab-pane fade" id="profile">
										<br><br> 	
								
								
<div class="row">
        <div class="col-md-6">
									
									
				<div class="box box-danger">
            <div class="box-body no-padding">
		 
          <div class="box box-solid">
            <div class="box-header with-border">
             </div>
            <div class="box-body">
             <div id="external-events">
	<form enctype="multipart/form-data" action="#" name="form" method="post">
			  
			   <div style="width: 70%; " class="alert alert-info alert-dismissible">
                <h4>School Name</h4>
            <input placeholder=" Name"  style="width: 80%;" type="text" class="form-control"  name="school_name">

               </div>
  			
					<div style="width: 70%; " class="alert alert-info alert-dismissible">
                <h4>School Type </h4>
 <select style="width: 80%;     "  class="form-control" required id="chapter" name="type">
                              <option value="Private">Government</option>
							<option value="Private">Private</option>
							 
           </select>
               </div>
				


<div style="width: 70%; "class="alert alert-info alert-dismissible">
                <h4>School Level</h4>
                  <input type="checkbox" name="Elementary" value="Elementary" class="minimal-red"> &nbsp;&nbsp;<span><b  > Elementary  </b></span><br>
                  <input type="checkbox" name="High" value="High School" class="minimal-red"> &nbsp;&nbsp;<span><b  > High School  </b></span><br>
 				  <input type="checkbox" name="Preparatory" value="Preparatory" class="minimal-red"> &nbsp;&nbsp;<span><b  > Preparatory  </b></span><br>

               </div>
				
					
 					 

		
               
              </div>
            </div>
          </div>
        </div>
		 </div> </div>
		 
		 
		 
		 
		 
		   <div class="col-md-6">
									
									
				<div class="box box-danger">
            <div class="box-body no-padding">
		 
          <div class="box box-solid">
            <div class="box-header with-border">
             </div>
            <div class="box-body">
             <div id="external-events">
			  
			   <div style="width: 70%; " class="alert alert-info alert-dismissible"   >
                <h4> School Logo </h4>
	 <input  type="file"  name="photo"  id="file"   class="form-control" style="width: 80%; height:80px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" > 

               </div>
 
 
 
 
					
					<div style="width: 70%; "  class="alert alert-info alert-dismissible">
                <h4>School Phone </h4>
            <input  placeholder="Phone Number" style="width: 80%;" type="text" class="form-control"  name="phone">

               </div>



<div style="width: 70%; " class="alert alert-info alert-dismissible">
                <h4>School Address</h4>
               <input placeholder="Address" style="width: 80%;" type="text" class="form-control"  name="address">

               </div>
  
 			 <button type="submit"   id="submit" value="Upload" name="submit"   class="btn bg-navy btn-flat pull-right ">Save</button>

		  </form>
               
              </div>

            </div>
          </div>
        </div>
		 </div> </div>
		 </div>
				 			
								
                                  </div>
								  
								  
								  
         <div class="tab-pane " id="more">

					 		  
<div class="row">
		

								  
								  
			  <div class="col-xs-6">
       					  
								  
	 
        <div class="box-body">
          
           
              <div class="form-group">
                 		 
								 
							 <form action="#" method="post" role="form">
    <div class="container" style="color:grey; ">
    <div class="row">
          <div class="col-lg-3">
                    <input type="hidden" name="sub_id">
          <div class="form-group">
             <input type="text" class="form-control" id="Subject " placeholder="Add Subject" name="subject">
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
             <input type="text" class="form-control" id="sec " placeholder="Add section" name="sec">
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
				
				<br><br> 
<form action="#" method="post" role="form">
    <div class="container" style="color:grey; ">
    <div class="row">
          <div class="col-lg-3">
             <input type="hidden"  name="bra_id">

          <div class="form-group">
             <input type="text" class="form-control" id=" " placeholder="Add Branch" name="bra">
          </div>
          </div>
    
          
          
         </div><!--col-row-->
          </div><!--col-container-->
           <div class="container">
          <div class="row">
          
          
      <button type="submit" class="btn bg-purple btn-flat "name="branch"> Add </button>
        
          <button type="reset" class="btn bg-navy btn-flat " name="back"> Clear </button>
      
         
         
      </div> 
      </div>

         
  </form>	 
				
				
 
<br> 
 	 						 
                  
				  <?php 
    
		
		
		 if (isset($_POST['save'])) {
    $id = $_POST['sub_id'];
      $subject = $_POST['subject'];
	  
     
	  $query = "SELECT subject FROM subject WHERE subject='$subject'   " ;
				$result = mysqli_query($con,$query);
				$count = mysqli_num_rows($result);
				if($count!=0){
					$error = true;
				?>
		 <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Alert!</h4>
              Provided Subject Already Exist!
              </div>
			  
 	 <?php
			 
	}else{
	 
	
	$insert = "INSERT INTO `subject` VALUES ('$id','$subject' )";
	if($run = mysqli_query($con,$insert)){
		
		?>
		 <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Alert!</h4>
               You have successfully Added A Subject...
              </div>
			  
 	 <?php
	}else{
	echo '<P style=background:blue;color:white;padding:6px;>Sorry we were unable to register you now. try again later.<a href="form.php">Click here to insert.</p>'.mysql_error();
	}
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
					?>
		 <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Alert!</h4>
              Provided Section Already Exist!
              </div>
			  
 	 <?php
			 
	}else{
	$insert = "INSERT INTO `section` VALUES ('$sec_id','$sec' )";
	
	if($run = mysqli_query($insert)){
		
		?>
		 <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Alert!</h4>
              You have successfully Added A Section...
              </div>
			  
 	 <?php
 	 
	}else{
	echo '<P style=background:blue;color:white;padding:6px;>Sorry we were unable to register you now. try again later.<a href="form.php">Click here to insert.</p>'.mysql_error();
	}
	}
	}
	
	
	
	
	
	if (isset($_POST['branch'])) {
			 
      $bra_id = $_POST['bra_id'];

      $bra = $_POST['bra'];
	  
    $query = "SELECT bra FROM branch WHERE bra='$bra'   " ;
				$result = mysqli_query($con,$query);
				$count = mysqli_num_rows($result);
				if($count!=0){
					$error = true;
				?>
		 <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Alert!</h4>
              Provided Branch Already Exist!
              </div>
			  
 	 <?php
			 
	}else{
	$insert = "INSERT INTO `branch` VALUES ('$bra_id','$bra' )";
	
	if($run = mysqli_query($con,$insert)){
		?>
		 <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Alert!</h4>
              You have successfully Added A New Branch...
              </div>
			  
 	 <?php
		
	 
	 
	}else{
	echo '<P style=background:blue;color:white;padding:6px;>Sorry we were unable to register you now. try again later.<a href="form.php">Click here to insert.</p>'.mysql_error();
	}
	}
	}
		 ?>  
 
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
         
          <!-- /.row -->
        
        <!-- /.box-body -->
         
      </div>
			                
                            </div> 
							
							</div> </div> 
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
