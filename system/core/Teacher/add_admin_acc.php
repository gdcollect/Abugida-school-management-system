<?php  require 'top.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Admin Account 
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Admin Account  Management</a></li>
         
      </ol>
    </section>
	
	
	<?php  
	
    $con = mysqli_connect($host,$user,$password,$db);
	 
     error_reporting(0);
	 
	if ( isset($_POST['btn-signup']) ) {
		
		// clean user inputs to prevent sql injections
		$name = trim($_POST['name']);
		$name = strip_tags($name);
		$name = htmlspecialchars($name);
		
		$email = trim($_POST['email']);
		$email = strip_tags($email);
		$email = htmlspecialchars($email);
		
		
		$userId = trim($_POST['userId']);
		$userId = strip_tags($userId);
		$userId = htmlspecialchars($userId);
		
		$pass = trim($_POST['pass']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);
		
		// basic name validation
		if (empty($name)) {
			$error = true;
			$nameError = "Please enter your full name.";
		} else if (strlen($name) < 3) {
			$error = true;
			$nameError = "Name must have atleat 3 characters.";
		} else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
			$error = true;
			$nameError = "Name must contain alphabets and space.";
		}
		
		//basic email validation
		if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$error = true;
			$emailError = "Please enter valid email address.";
		} else {
			// check email exist or not
			$query = "SELECT userEmail FROM admin_users WHERE userEmail='$email'";
			$result = mysqli_query($con,$query);
			$count = mysqli_num_rows($result);
			if($count!=0){
				$error = true;
				$emailError = "Provided Email is already in use.";
			}
			
			
			
			
			
			$query = "SELECT userId FROM admin_users WHERE userId='$userId'";
			$result = mysqli_query($con,$query);
			$count = mysqli_num_rows($result);
			if($count!=0){
				$error = true;
				$rollError = "Provided Roll Number is already in use.";
			}
			
			
			
			
			
		}
		// password validation
		if (empty($pass)){
			$error = true;
			$passError = "Please enter password.";
		} else if(strlen($pass) < 6) {
			$error = true;
			$passError = "Password must have atleast 6 characters.";
		}
		
		// password encrypt using SHA256();
		$password = hash('sha256', $pass);
		
		// if there's no error, continue to signup
		if( !$error ) {
			                                                                      
			$query = "INSERT INTO admin_users(userId,userName,userEmail,userPass) VALUES('$userId','$name','$email','$password')";
			$res = mysqli_query($con,$query);
				
			if ($res) {
				$errTyp = "success";
				$errMSG = "Successfully Added ";
				unset($userId);
				unset($name);
				unset($email);
				unset($pass);
			} else {
				$errTyp = "danger";
				$errMSG = "Something went wrong, try again later...";	
			}	
				
		}
		
		
	}
?>
 
 
   
	 
       
    <!-- Main content -->
    <section class="content">
      
	  
	  
	   <div class="row">
        <div class="col-md-6">

          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Create New Admin Account </h3>
            </div>
            <div class="box-body">
              <!-- Date dd/mm/yyyy -->
        
		 
		  
		  
 <form method="post"   action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    
    	<div class="col-md-15">
        
         
        
        	<div class="form-group">
            	<hr />
            </div>
            
            <?php
			if ( isset($errMSG) ) {
				
				
				?>
				<div class="form-group">
            	<div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
				<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
            	</div>
                <?php
			}
			?>
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            	<input type="text" name="name" class="form-control" placeholder="Enter Name" maxlength="50" value="<?php echo $name ?>" />
                </div>
                <span class="text-danger"><?php echo $nameError; ?></span>
            </div>
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            	<input type="email" name="email" class="form-control" placeholder="Enter  Email" maxlength="40" value="<?php echo $email ?>" />
                </div>
                <span class="text-danger"><?php echo $emailError; ?></span>
            </div>
			
			
			
			 <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            	<input type="text" name="userId" class="form-control" placeholder="Enter  Roll Number" maxlength="40" value="<?php echo $userId ?>" />
                </div>
                <span class="text-danger"><?php echo $rollError; ?></span>
            </div>
            
			
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            	<input type="password" name="pass"  class="form-control" placeholder="Enter Password" maxlength="15" />
                </div>
                <span class="text-danger"><?php echo $passError; ?></span>
            </div>
            
            <div class="form-group">
            	<hr />
            </div>
            
            <div class="form-group">
            	<button type="submit" class="btn bg-navy btn-flat" name="btn-signup">Create    </button>
			<button type="clear" class="btn bg-default btn-flat" name="clear">Clear</button>

            </div>
            
            <div class="form-group">
            	<hr />
            </div>
            
            <div class="form-group">
            	 
            </div>
        
        </div>
   
    </form>
		   
		    
		   
		    
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
              <h3 class="box-title">All Admin Account </h3>
            </div>
            <div class="box-body">
              <!-- Date -->
               
			   
			   
			   
                                <table class="table">
                                    <table id="example1" class="table table-bordered table-striped">
                                    <thead    >
                                        <tr>
                      <th> Roll No</th>
					  <th> Name</th>
                      <th> Email </th>
					   <th> Action </th>
					  
                                        </tr>
                                    </thead>
                                    <tbody>
                                         
                                        
                                         
									 <?php        
		  
				  
		 
		$select = "SELECT * FROM `admin_users`    ";
				  
               if($run = mysqli_query($con,$select)){
				 while($row = mysqli_fetch_array($run)){
		 
	            
          echo '<tr style="color:grey"; >';

            // echo '<td>'. $post['student_id'] . '</td>'; 
			
            echo '<td>'.$row['userId']. '</td>';		
            echo '<td>'. $row['userName'] . '</td>';	
             echo '<td>'. $row['userEmail'] . '</td>';				
        
			
echo '<td width=25>';
            echo "<div class='ui mini buttons'>";
            echo '<a class="btn btn-danger btn-sm"  href="delete_admin_account.php?userId='.$row['userId'].'"><i class="glyphicon glyphicon-remove"> </i>&nbsp;Delete</a>';
            echo "</div>";
            echo '</td>';    
           echo '</tr>';  			

			  
				 }
			 }
           ?>	 
										 
								 
										 
										 
                                    </tbody>
                                </table>
                           
                        </div>
			   
			    
			 
			  <div class="box-footer">
          
        </div>
		  
		  
            </div>
            <!-- /.box-body -->
			 
          </div>
          <!-- /.box -->

          <!-- iCheck -->
          
          <!-- /.box -->
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
