<?php  require 'top.php';?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mark List Entry
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Mark List Entry Management</a></li>
         
      </ol>
    </section>
	<?php 
	   $con = mysqli_connect($host,$user,$password,$db);

	    $m_id=$_REQUEST['m_id']; 
 
	    $query="SELECT * FROM marklist WHERE m_id='".$m_id."' ";
		
		 $resource=mysqli_query($con,$query) or die ("An unexpected error occured  ");
		 $result=mysqli_fetch_array($resource);
		 
		 
		 
		 
		    if (isset($_REQUEST['update']))
       {
		
		
		
		
		
				   
  $std_roll_no =($_REQUEST['std_roll_no']);
		  $sec = ($_REQUEST['sec']);
		$name  = ($_REQUEST['name']);
	  $subject = ($_REQUEST['subject']);
		$grade = ($_REQUEST['grade']);
		
		
    
        $testA = ($_REQUEST['testA']);
		$testB = ($_REQUEST['testB']);
		$testC = ($_REQUEST['testC']); 
		$testD = ($_REQUEST['testD']);
		$test1 = ($_REQUEST['test1']);
		$test2 = ($_REQUEST['test2']);	
        $final = ($_REQUEST['final']);    
			
	    $testE = ($_REQUEST['testE']);
		$testF = ($_REQUEST['testF']);
		$testG = ($_REQUEST['testG']); 
		$testH = ($_REQUEST['testH']);	
		$test3 = ($_REQUEST['test3']);
		$test4 = ($_REQUEST['test4']);
		$finalI = ($_REQUEST['finalI']);
		
		
		$addition = $testA + $testB + $testC + $testD + $test1 + $test2 ;
		
		$addition2 = $testE + $testF + $testG + $testH + $test3 + $test4 ;
		
		$final_add = $addition + $final ;
		
		$final_adds2 = $addition2 + $finalI ;
	    
		$ave = ($final_add + $final_adds2)/2 ;
    
  
 
  
  
  $sql="UPDATE marklist SET     testA='".$testA."',
	testB='".$testB."', testC='".$testC."', testD='".$testD."',test1='".$test1."',test2='".$test2."',addition='".$addition."', final='".$final."',final_add='".$final_add."',
	
	
	
	
	testE='".$testE."', testF='".$testF."',
	testG='".$testG."', testH='".$testH."', test3='".$test3."', test4='".$test4."', addition2='".$addition2."', finalI='".$finalI."', final_adds2='".$final_adds2."' , ave='".$ave."' WHERE m_id ='".$m_id ."'";
		
   
  if($run = mysqli_query($con,$sql)){
		?>
		   <script>
alert("  successfully updated");
window:location="gradem.php?grade=<?php echo $_GET ['grade'];?>";
 </script>
		   <?php
 
 
}else{
echo '<P style=background:blue;color:white;padding:6px;>Sorry we were unable to register now.  </p>'.mysql_error();
}
		
		
		
		
		
	   }
		  
		  
		 
		 
?>

       
    <!-- Main content -->
    <section class="content">
      
	  
	  <form action="#" method="post" role="form">
	  
	  
	   <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Basic Information</h3>

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
             <input type="text" class="form-control" id="std_roll_no" value="<?php echo $result['std_roll_no'];   ?>" placeholder="Roll No"  required  name="std_roll_no" readonly>
          </div>
              <!-- /.form-group -->
              <div class="form-group">
                <div class="form-group">
				
				
            <input  class="form-control"   required id="sex"  value="Section <?php echo $result['sec'];  ?>" name="sec" readonly>
            
          </div>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <div      class="form-group">
             <input type="text" class="form-control" required id="name" value="Name <?php echo $result['name'];  ?>"   placeholder="Name "  name="name" readonly>
          </div>
              </div>
              <!-- /.form-group -->
               <div class="form-group">
      	 
           
       <input  style="color:grey;"   class="form-control" value="Subject <?php echo $result['subject'];  ?>" name="subject" readonly> 
		 	
        </div>
              <!-- /.form-group -->
            </div>
			 <div class="col-md-6">
              <div  class="form-group">
         
            <input  class="form-control"   required id="sex" value="Gread <?php echo $result['grade'];  ?>" name="grade" readonly>
           
          </div>
              <!-- /.form-group -->
              
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
      </div>
      <!-- /.box -->
	  
	  
	  
	  
	  
	  
	   <div class="row">
        <div class="col-md-6">

          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">First Semister</h3>
            </div>
            <div class="box-body">
              <!-- Date dd/mm/yyyy -->
                 <div class="form-group">
             
             <input type="text" class="form-control" id="testA"  value="<?php echo $result['testA'];  ?>"  placeholder="First Test" name="testA">
			 
        </div>
 <div class="form-group">
             <input type="text" class="form-control" id="testB" value="<?php echo  $result['testB']; ?>"    placeholder="Second Test" name="testB">
          
          </div>
		 <div class="form-group">
             <input type="text" class="form-control" id="testC" value="<?php echo $result['testC']; ?>"  placeholder="Thired Test" name="testC">
         
          </div> 
		  
		   <div class="form-group">
             <input type="text" class="form-control" id="testD" value="<?php echo  $result['testD']; ?>"  placeholder="Fourth Test" name="testD">
         
          </div> 
		   <div class="form-group">
             <input type="text" class="form-control" id="test1" value="<?php echo $result['test1'];  ?>"  placeholder="Fifth Test" name="test1">
          </div>  
		   <div class="form-group">
             <input type="test2" class="form-control" id="test2" value="<?php echo $result['test2'];   ?>"  placeholder="Sixth Test" name="test2">
          </div>  
		    
		    <div class="form-group">
             <input type="text" class="form-control" id="final"value="<?php echo  $result['final']; ?>"  placeholder="Final" name="final">
          </div>  
            </div>
            <!-- /.box-body -->
			 <div class="box-footer">
          
        </div>
          </div>
          <!-- /.box -->

          

        </div>
        <!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Second Semister</h3>
            </div>
            <div class="box-body">
              <!-- Date -->
               
			   <div class="form-group">
            
             <input type="text" class="form-control" id="testE" value="<?php echo $result['testE']; ?>" placeholder="First Test" name="testE">
			 
          </div>
			    <div class="form-group">
            
             <input type="text" class="form-control" id="testF" value="<?php echo  $result['testF']; ?>" placeholder="Second Test" name="testF">
          </div>
			 <div class="form-group">
             <input type="text" class="form-control" id="testG"  value="<?php echo  $result['testG']; ?>"  placeholder="Thired Test" name="testG">
          </div>
			    <div class="form-group">
             <input type="text" class="form-control" id="testH" value="<?php echo  $result['testH']; ?>"  placeholder="Fourth Test" name="testH">
		  
		  
          </div>
			   <div class="form-group">
             <input type="text" class="form-control" id="test3"  value="<?php echo $result['test3']; ?>" placeholder="Fifth Test" name="test3">
          </div>   
			    <div class="form-group">
             <input type="text" class="form-control" id="test4"  value="<?php echo  $result['test4']; ?>" placeholder="Sixth Test" name="test4">
          </div>  
		   
		   <div class="form-group">
             <input type="text" class="form-control" id="finalI"  value="<?php echo $result['finalI']; ?>" placeholder="Final" name="finalI">
          </div>  
		  
            </div>
            <!-- /.box-body -->
			 <div class="box-footer">
          
        </div>
          </div>
          <!-- /.box -->

          <!-- iCheck -->
          
          <!-- /.box -->
        </div>
		
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
 		 <button type="submit" class="btn bg-navy btn-flat  "name="update"> update </button>
          <button type="reset" class="btn btn-default btn-flat" name="clear"> Clear </button>
		  
                
               
              </div>
            </div>
            <!-- /.box-body -->
          </div> </div></div></div>
        <!-- /.col (right) -->
      </div>
	  </form>
	  
	  
	  
	  
	  
	  
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
