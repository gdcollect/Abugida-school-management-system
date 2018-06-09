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
	  
	  
	  
  
	
			 $con = mysqli_connect($host,$user,$password,$db);

	$insert = "INSERT INTO `lesson_plan` VALUES ('$id','$departement','$grade','$chapter','$title1','$an1','$date1'
	 ,'$title2','$an2','$date2','$title3','$an3','$date3','$title4','$an4','$date4','$title5','$an5','$date5'
	 ,'$title6','$an6','$date6','$title7','$an7','$date7'
	  )";
	if($run = mysqli_query($con,$insert)){
		 ?>  
	<script>
			alert("  successfully registered");
			window:location="lesson_plan.php";
			</script>
 <?php
	}else{
	echo '<P style=background:blue;color:white;padding:6px;>Sorry we were unable to register you now. try again later.<a href="form.php">Click here to insert.</p>'.mysql_error();
	}
		}
     ?>  
	 
       
    <!-- Main content -->
    <section class="content">
      
	  
	  
	   <div class="box box-primary">
	   
		 <?php  
				 		         $con = mysqli_connect($host,$user,$password,$db);
if (isset($_POST['plan'])) {

      $grade = ($_REQUEST['grade']);
 	  $departement = ($_REQUEST['departement']);

 	  $date = ($_REQUEST['date']);
	  
					
				$select = "SELECT * FROM `lesson_plan`  WHERE departement='$departement'  AND   grade='$grade' AND   date1='$date'    ";
		 

             if($run = mysqli_query($con,$select)){
				 while($row = mysqli_fetch_array($run)){ ?>
				 
				
                 <div class="table-responsive">
				 
				<form action="#" method="post" role="form">
                 <table class=" table table-bordered">
                  <thead style="color:#0067ab";  >
                    <tr>          
                      <th> Roll no</th>
                      <th> Departement</th>
                      <th> Grade</th>
                      <th> Chapter</th>
                      
                    </tr>
                  </thead>
      <tbody  style="color:grey" >
          
            
            <tr>        
             <td>      </td> 
			 
			 
			 
			 
             <td>     
		                   
		                    <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control"  id="departement" name="departement" value="<?php echo $row['departement']   ?>" READONLY>
          </div>
          </div>  </td> 
		  
		  
		  
             <td>     
		                    <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control"  id="grade" name="grade" value="<?php echo $row['grade']   ?>" READONLY>
          </div>
          </div>   </td> 
		  
		  
		  
            <td>    
		                    <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control"  id="chapter" name="chapter" value="<?php echo $row['chapter']   ?>" READONLY>
          </div>
          </div>  </td>
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  <tr>
		  
		  
		  
		  <td> 1 </td>
		  <td> 

 <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control"  id="title1" name="title1" value="<?php echo $row['title1']   ?>" READONLY>
          </div>
          </div>

		  </td>
		  
		  
		  <td> 
 <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control"   id="an1" name="an1" value="<?php echo $row['an1'] ?>" READONLY>
          </div>
          </div>

		  </td>
		  
		  
		  
		  <td>  <div class="col-lg-8">
          <div class="form-group">
             
            <input type="text" class="form-control"  id="date1" name="date1" value="<?php echo $row['date1']  ?>" READONLY>
          </div>
          </div> </td>
		  
		  </tr>
             
          
		  
		  
		  
		  
		   
		  <tr>
		  
		  
		  
		  <td> 2 </td>
		  <td> 

 <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control"  id="title2" name="title2" value="<?php echo $row['title2']  ?>" READONLY>
          </div>
          </div>

		  </td>
		  
		  
		  <td> 
 <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control"    id="an2" name="an2"  value="<?php echo $row['an2']    ?>" READONLY>
          </div>
          </div>

		  </td>
		  
		  
		  
		  <td>  <div class="col-lg-8">
          <div class="form-group">
             
            <input type="text" class="form-control"  id="date2" name="date2" value="<?php echo $row['date2']  ?>" READONLY>
          </div>
          </div> </td>
		  
		  </tr>
             
			 
			 
			 
			 
			 
			 
			 
			  
		  <tr>
		  
		  
		  
		  <td> 3</td>
		  <td> 

 <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control"   id="title3" name="title3" value="<?php echo $row['title3']  ?>" READONLY>
          </div>
          </div>

		  </td>
		  
		  
		  <td> 
 <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control"    id="an3" name="an3"value="<?php echo $row['an3']   ?>" READONLY>
          </div>
          </div>

		  </td>
		  
		  
		  
		  <td>  <div class="col-lg-8">
          <div class="form-group">
             
            <input type="text" class="form-control"  id="date3" name="date3" value="<?php echo $row['date3']  ?>" READONLY>
          </div>
          </div> </td>
		  
		  </tr>
             
			 
			 
			 
			 
			 
			 
			 
			  
		  <tr>
		  
		  
		  
		  <td> 4 </td>
		  <td> 

 <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control"   id="title4" name="title4" value="<?php echo $row['title4']   ?>" READONLY>
          </div>
          </div>

		  </td>
		  
		  
		  <td> 
 <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control"    id="an4" name="an4"  value="<?php echo $row['an4'] ?>" READONLY>
          </div>
          </div>

		  </td>
		  
		  
		  
		  <td>  <div class="col-lg-8">
          <div class="form-group">
             
            <input type="text" class="form-control"  id="date4" name="date4"value="<?php echo  $row['date4']   ?>" READONLY>
          </div>
          </div> </td>
		  
		  </tr>
             
			 
			 
			 
			 
			 
			  
		  <tr>
		  
		  
		  
		  <td> 5 </td>
		  <td> 

 <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control"   id="title5" name="title5" value="<?php echo $row['title5']   ?>" READONLY>
          </div>
          </div>

		  </td>
		  
		  
		  <td> 
 <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control"    id="an5" name="an5" value="<?php echo $row['an5']    ?>" READONLY>
          </div>
          </div>

		  </td>
		  
		  
		  
		  <td>  <div class="col-lg-8">
          <div class="form-group">
             
            <input type="text" class="form-control"  id="date5" name="date5" value="<?php echo $row['date5']  ?>" READONLY>
          </div>
          </div> </td>
		  
		  </tr>
             
			 
			 
			 
			 
			 
			  
		  <tr>
		  
		  
		  
		  <td> 6 </td>
		  <td> 

 <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control"   id="title6" name="title6" value="<?php echo $row['title6']   ?>" READONLY>
          </div>
          </div>

		  </td>
		  
		  
		  <td> 
 <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control"   id="an6" name="an6"value="<?php echo $row['an6']  ?>" READONLY>
          </div>
          </div>

		  </td>
		  
		  
		  
		  <td>  <div class="col-lg-8">
          <div class="form-group">
             
            <input type="text" class="form-control"  id="date6" name="date6"value="<?php echo $row['date6']   ?>" READONLY>
          </div>
          </div> </td>
		  
		  </tr>
             
			 
			 
			 
			 
			 
			 
			  
		  <tr>
		  
		  
		  
		  <td> 7 </td>
		  <td> 

 <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control"  id="title7" name="title7" value="<?php echo $row['title7']  ?>" READONLY>
          </div>
          </div>

		  </td>
		  
		  
		  <td> 
 <div class="col-lg-8">
          <div class="form-group">
              
            <input type="text" class="form-control"   id="an7" name="an7" value="<?php echo $row['an7']  ?>" READONLY>
          </div>
          </div>

		  </td>
		  
		  
		  
		  <td>  <div class="col-lg-8">
          <div class="form-group">
             
            <input type="text" class="form-control"  id="date7" name="date7"  value="<?php echo $row['date7']   ?>" READONLY>
          </div>
          </div> </td>
		  
		  </tr>
             
			 
			 
			 
      </tbody>     
             </table>
			 
 
</form>
<?php
				 
			 }}
			 }
           ?>
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
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
</body>
</html>
