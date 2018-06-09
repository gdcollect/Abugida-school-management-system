<!DOCTYPE html>
<?php  require 'top.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Notifications
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Notifications Management</a></li>
         
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="add_new.php" class="btn btn-primary btn-block margin-bottom">Add New</a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Folders</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
			<?php
			$con = mysqli_connect($host,$user,$password,$db);
			
			     $cont1 = mysqli_query($con,"select * FROM `noticemsg` WHERE position='Teachers' ");
				 $tech = mysqli_num_rows($cont1);
				 
				 $cont2 = mysqli_query($con,"select * FROM `noticemsg` WHERE position='Students' ");
				 $stud = mysqli_num_rows($cont2);
				 
				 ?>
           <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="notify_stud.php"><i class="fa fa-inbox"></i> Students
                  <span class="label label-primary pull-right"><?php   echo  $stud ;?> </span></a></li>
                <li class="active" ><a  href="notify_teach.php"><i class="fa fa-envelope-o"></i> Teachers
				  <span class="label label-primary pull-right"><?php   echo  $tech ;?></span></a></li>
                
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> Add New Notification</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
             <form action="notifyexec.php" method="post">
           <select  class="form-control"   required id="sex"    name="position">
            <option  >Choose Where To Send The Notification</option>
           <option value="Students">Students</option>
			<option value="Teachers">Teachers</option>
 			 
           </select>
              </div>
              <div class="form-group">
               <input type="date" class="form-control" id="date" name="date">
              </div>
			   <div class="form-group">
                <input type="text" class="form-control" placeholder="Title"  name="title">
              </div>
              <div class="form-group">
                    <textarea id="compose-textarea" placeholder="Place Notice Text Here" class="form-control" name="message" style="height: 300px">
                       
					   
					   
					   
                    </textarea>
              </div>
              
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                 <button type="submit" class="btn bg-navy btn-flat "  value="Send" >  <i class="fa fa-envelope-o"></i> Send</button>
				 </form>
              </div>
             </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
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
    //Add text editor
    $("#compose-textarea").wysihtml5();
  });
</script>
</body>
</html>
