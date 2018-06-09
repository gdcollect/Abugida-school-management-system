<!DOCTYPE html>
<?php  require 'req.php';?>

<html >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible"  content="IE=edge">
  <title>Abugida | Teacher</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../../plugins/datatables/dataTables.bootstrap.css">
  
  <link rel="stylesheet" href="../../../plugins/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../../plugins/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../../dist/css/skins/_all-skins.min.css">
  
 <link rel="shortcut icon" href="../../../dist/img/favicon.png">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-purple sidebar-mini" >
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
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> 
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
<?php
			$con = mysqli_connect($host,$user,$password,$db);
			
			     $cont1 = mysqli_query($con,"select * FROM `noticemsg` WHERE position='Teachers' ");
				 $tech = mysqli_num_rows($cont1);
				 
				 $cont2 = mysqli_query($con,"select * FROM `noticemsg` WHERE position='Students' ");
				 $stud = mysqli_num_rows($cont2);
				 $not = $tech + $stud
				 ?>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
						 <i class="glyphicon glyphicon-bullhorn"></i>
              <span class="label label-danger"><?php   echo  $not ;?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have <?php   echo  $not ;?> Notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
				
                 
                <ul class="menu">
				
				 <?php        
		   
		$select = "SELECT `id`, `position`, `date`, `title`, `message` FROM `noticemsg` order by `date`   ";
				  
               if($run = mysqli_query($con,$select)){
				 while($row = mysqli_fetch_array($run)){
		  
           ?>	 
                  <li><!-- start message -->
                    <a href="../../../system/core/teacher/add_new.php">
					     <div class="pull-left">
						 <i class="glyphicon glyphicon-envelope"></i>
                       </div>
                      <h4>
					  
                        <?php  echo $row['position'] ?>
                        <small><i class="fa fa-clock-o"></i> <?php  echo $row['date'] ?></small>
                      </h4>
                      <p><?php  echo $row['title'] ?></p>
                    </a>
                  </li> <?php
				  }}
				  
				  ?>
                  <!-- end message -->
                  
                  <li>
                    
                  </li>
                  
                </ul>
              </li>
              <li class="footer"><a href="../../system/core/teacher/add_new.php">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
	  
		   <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
						 <i class="glyphicon glyphicon-cloud-download"></i>
              <span class="label label-danger"><?php   echo  $not ;?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have <?php   echo  $not ;?> Notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
				
                 
                <ul class="menu">
				
				 <?php        
		   	$q="select count(*) \"total\"  from downloads";
	$ros=mysqli_query($con,$q);
	$row=(mysqli_fetch_array($ros));
	$total=$row['total'];
	$dis=3;
	$total_page=ceil($total/$dis);
	$page_cur=(isset($_GET['page']))?$_GET['page']:1;
	$k=($page_cur-1)*$dis;
 
	$q="SELECT * FROM downloads   ";
	$ros=mysqli_query($con,$q);
	
	if($ros = mysqli_query($con,$q))
	{	 
	while($row=mysqli_fetch_array($ros))
	{ 
           ?>	 
                  <li><!-- start message -->
                    <a href="../../../system/core/teacher/upload.php">
					     <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                   <i class="glyphicon glyphicon-cloud-download"></i>
                  <div class="product-info">
                    <a href="download.php?id=<?php echo $row['file']?>" class="product-title"><?php echo $row['subject']; ?> Grade <?php echo $row['grade']; ?> 
                      <span class="label label-info pull-right">Download</span></a>
                        <span class="product-description">
                         <?php echo $row['topic']; ?>
                        </span>
                  </div>
                </li>
                <!-- /.item -->
       
              </ul>
            </div>
                    </a>
                  </li> <?php
				  }}
				  
				  ?>
                  <!-- end message -->
                 
                  
                </ul>
              </li>
              <li class="footer"><a href="../../../system/core/teacher/add_new.php">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->

          <!-- Tasks: style can be found in dropdown.less -->
          <ul class="nav pull-left">
					  <li   class="dropdown">
							<a href="#" id="name123" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-language"></i> <b><?php  echo $lang['lang'];  ?></b><i class="caret"></i></a>
							<ul class="dropdown-menu">
								<!--  <li><a class="jkl" tabindex="-1" href="#">Profile</a></li> -->
								<li class="divider"></li>
								<li ><a  class="jkl" tabindex="-1" href="index.php?lang=am">&nbsp;Amharic</a></li>
								<li><a  class="jkl" tabindex="-1" href="index.php?lang=en">&nbsp;English</a></li>
							</ul>
						</li>
					</ul> <?php
			     
 $result = mysqli_query($con,"SELECT * FROM school_setup ");
while($row = mysqli_fetch_array($result))
{
?>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../../dist/logo/<?php echo $row['logo'] ;?>" class="user-image" alt="logo Image">
              <span class="hidden-xs"><?php echo $userRow['userName']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
			  
			 
              <li class="user-header">
                <img src="../../../dist/logo/<?php  echo $row['logo'] ;?>" class="img-circle" alt="User Image">

                <p>
                <?php echo $row['name'] ; ?>
                  <small><?php echo $userRow['userName']; ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <?php } ?>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="../../../system/core/teacher/logout.php?logout" class="btn btn-default btn-flat">Sign out</a>
                </div> 
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
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
          <img src="../../../dist/img/abugida.png"     alt="ABUGIDA ">
        </div>
        <div class="pull-left info">
          <p>Make Life Easier</p>
         </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="glyphicon glyphicon-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
		
		<li>
           
        </li>
		<li>
          <a href="../../../system/core/teacher/index.php">
            <i class="glyphicon glyphicon-home "></i> <span><?php  echo $lang['Home'];  ?></span>
            
          </a>
        </li>
		<li>
 <li><a href="../../../system/core/teacher/student.php"><i class="glyphicon glyphicon-user "></i><?php echo $lang['Students'];  ?></a></li>

        </li>
        
        <li>
          <a href="../../../system/core/teacher/all_mark_list.php">
            <i class="glyphicon glyphicon-folder-open"></i> <span> <?php  echo $lang['Mark_list'];  ?></span>
            
          </a>
        </li>
        <li>
          <a href="../../../system/core/teacher/lesson_plan_entry.php">
            <i class="glyphicon glyphicon-calendar"></i> <span>Lasson Plan</span>
            
          </a>
        </li>
       <li>
          <a href="../../../system/core/teacher/AttendenceReport.php">
            <i class="glyphicon glyphicon-check"></i> <span>Attendance</span>
            
          </a>
        </li>
        <li>
         <a href="../../../system/core/teacher/subject_entry.php">
            <i class="glyphicon glyphicon-th-list"></i> <span>Subject Management</span>
            
          </a>
        </li>
        <li>
      <a href="../../../system/core/teacher/upload.php">
            <i class="glyphicon glyphicon-cloud-upload"></i> <span><?php echo $lang['File_upload']; ?></span>
            
          </a>
        </li>
        <li>
         <a href="../../../system/core/teacher/add_new.php">
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
            <li>  <a href="../../../system/core/teacher/add_stud_acc.php"><i class="glyphicon glyphicon-user "></i><?php echo $lang['Students'];  ?></a></li>
            <li><a href="../../../system/core/teacher/add_teach_acc.php"><i class="glyphicon glyphicon-education"></i> <?php echo $lang['Teachers'] ; ?></a></li>
            <li><a href="../../../system/core/teacher/add_admin_acc.php"><i class="glyphicon glyphicon-asterisk "></i> Admin</a></li>

          </ul>
        </li>
         
        
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>