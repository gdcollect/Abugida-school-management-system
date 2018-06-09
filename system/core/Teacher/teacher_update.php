<?php  require 'top.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Teacher
        <small>Registeration</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Teacher Registeration</a></li>
         
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
           
          <!-- /.box -->

          <div class="box">
            <div class="box-header btn  btn-flat " >
              <h3 class="box-title"> Register New Teacher </h3>
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
                
				
<?php
 
	 $teacher_id = $_REQUEST['teacher_id']; 
 	 
	      	  $con = mysqli_connect($host,$user,$password,$db);

	 $query="SELECT * FROM  teacher_table WHERE teacher_id='".$teacher_id."'";
 	
		 $resource=mysqli_query($con,$query) or die ("An unexpected error occured  ");
		  $result=mysqli_fetch_array($resource);
		  
	 ?>	    
 		
				 <form method="post" role="form" action="teach_update.php"  >
 <input type="hidden"   id="teacher_id" value="<?php echo $result['teacher_id'];  ?>"     name="teacher_id">

    <div class="container">
    <div class="row">
    <div class="col-lg-3">
          <div class="form-group">
            <label for="name" > First Name (*)</label>
            <input type="text" class="form-control" required id="name" placeholder="First Name" name="name" value="<?php echo $result['first_name']; ?>">
          </div>
    </div>
    <div class="col-lg-3">
          <div class="form-group">
            <label for="lname" > Last Name</label>
            <input type="text" class="form-control" required id="lname" placeholder="Last Name"  name="lname" value="<?php echo $result['last_name']; ?>">
          </div>
    </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-lg-3">
          <div class="form-group">
            <label for="dob"> Date Of Birth </label>
            <input type="date" class="form-control" id="dob" name="dob" value="<?php echo $result['dob']; ?>">
          </div>
    </div>
    <div class="col-lg-3">
          <div class="form-group">
          <label for="gender" >Gender</label>
           <select  class="form-control" name="gender" required id="sex" name="gender" >
           <?php echo $result['gender']; ?>
           <option>-------select-------</option>
           <option>Male</option>
           <option>Female</option> 
           </select>
          </div>
     </div>
     </div>
     </div>

     <div class="container">
    <div class="row">
    <div class="col-lg-3">
          <div class="form-group">
            <label for="email">Email address </label>
            <input type="email" class="form-control" required id="email" placeholder=" Email" name="email" value="<?php echo $result['email']; ?>">
          </div>
          </div>
    <div class="col-lg-3">
          <div class="form-group">
            <label for="phone">Phone </label>
            <input type="text" class="form-control" id="phone" placeholder="Phone Number" name="phone" value="<?php echo $result['phone']; ?>">
          </div>
    </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-lg-3">
           <div class="form-group">
          <label for="degree" >Degree</label>
           <select  class="form-control" name="degree"  required id="degree" name="degree">
           <?php echo $result['degree']; ?>
           <option>-------select-------</option>
           <option >Bachelor</option>
           <option >Master</option>
           <option >M.Phil</option>
           <option >P.HD</option>
           </select>
          </div>
          </div>

    <div class="col-lg-3">
          <div class="form-group">
            <label for="salary"> Salary </label>
            <input type="text" class="form-control" required id="salary" placeholder=" Enter salary"  name="salary" value="<?php echo $result['salary']; ?>">
          </div>
    </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-lg-3">
          <div class="form-group">
            <label for="address">Address</label>
            <textarea class="form-control" id="address" placeholder="Your address please" rows="3" name="address"><?php echo $result['address']; ?></textarea>
          </div>
          </div>
    </div>
    </div>

	
	  <button type="submit" class="btn btn-primary"name="update"> Update </button>
        
          <button type="reset" class="btn btn-default" name="back"> Clear </button>
		  
       </form>
				
				
				
				
				
				
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
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<body class="hold-transition skin-blue sidebar-mini" >
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>AB</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"   ><b >ABUGIDA</b> SMS</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"><i class="glyphicon glyphicon-menu-hamburger"></i>
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    
                  </li>
                  
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          <ul class="nav pull-left">
					  <li   class="dropdown">
							<a href="#" id="name123" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="glyphicon glyphicon-asterisk"></i> <b><?php  echo $lang['lang'];  ?></b><i class="caret"></i></a>
							<ul class="dropdown-menu">
								<!--  <li><a class="jkl" tabindex="-1" href="#">Profile</a></li> -->
								<li class="divider"></li>
								<li ><a  class="jkl" tabindex="-1" href="student.php?lang=am"><i class="icon-signout icon-large"></i>&nbsp;Amharic</a></li>
								<li><a  class="jkl" tabindex="-1" href="student.php?lang=en"><i class="icon-signout icon-large"></i>&nbsp;English</a></li>
							</ul>
						</li>
					</ul>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="../../system/core/logout.php?logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="glyphicon glyphicon-cog"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/abugida.jpeg" class="img-circle"   alt="ABUGIDA ">
        </div>
        <div class="pull-left info">
          <p>Make Life Easier</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
		<li>
          <a href="../../system/core/index.php">
            <i class="glyphicon glyphicon-home "></i> <span><?php  echo $lang['Home'];  ?></span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-save-file  "></i> <span><?php  echo $lang['Register'];  ?></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../system/core/student.php"><i class="glyphicon glyphicon-user "></i>Student</a></li>
            <li><a href="../../system/core/teacher.php" ><i class="glyphicon glyphicon-education"></i> Teacher</a></li>
            <li><a href="../../system/core/employee.php" ><i class="glyphicon glyphicon-asterisk "></i> Other Employees</a></li>

          </ul>
        </li>
        <li>
          <a href="../../system/core/all_mark_list.php">
            <i class="glyphicon glyphicon-folder-open"></i> <span> <?php  echo $lang['Mark_list'];  ?></span>
            
          </a>
        </li>
        <li>
          <a href="../../system/core/lesson_plan_entry.php">
            <i class="glyphicon glyphicon-calendar"></i> <span>Lasson Plan</span>
            
          </a>
        </li>
       <li>
          <a href="../../system/core/AttendenceReport.php">
            <i class="glyphicon glyphicon-check"></i> <span>Attendance</span>
            
          </a>
        </li>
        <li>
         <a href="../../system/core/subject_entry.php">
            <i class="glyphicon glyphicon-th-list"></i> <span>Subject Management</span>
            
          </a>
        </li>
        <li>
      <a href="../../system/core/upload.php">
            <i class="glyphicon glyphicon-cloud-upload"></i> <span>File Upload </span>
            
          </a>
        </li>
        <li>
         <a href="../../system/core/add_new.php">
            <i class="glyphicon glyphicon-bullhorn"></i> <span>Notice Board</span>
            
          </a>
        </li>
        <li class="treeview ">
          <a href="#">
            <i class="glyphicon glyphicon-user "></i> <span> Users Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>  <a href="../../system/core/add_stud_acc.php"><i class="glyphicon glyphicon-user "></i>Student</a></li>
            <li><a href="../../system/core/add_teach_acc.php"><i class="glyphicon glyphicon-education"></i> Teacher</a></li>
            <li><a href="../../system/core/add_admin_acc.php"><i class="glyphicon glyphicon-asterisk "></i> Admin</a></li>

          </ul>
        </li>
         
        
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
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
