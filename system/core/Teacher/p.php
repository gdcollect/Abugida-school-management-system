<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Invoice</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../../plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../../dist/css/skins/_all-skins.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i> AdminLTE, Inc.
          <small class="pull-right">Date: 2/10/2014</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong>Admin, Inc.</strong><br>
          795 Folsom Ave, Suite 600<br>
          San Francisco, CA 94107<br>
          Phone: (804) 123-5432<br>
          Email: info@almasaeedstudio.com
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        To
        <address>
          <strong>John Doe</strong><br>
          795 Folsom Ave, Suite 600<br>
          San Francisco, CA 94107<br>
          Phone: (555) 539-1037<br>
          Email: john.doe@example.com
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <b>Invoice #007612</b><br>
        <br>
        <b>Order ID:</b> 4F3S8J<br>
        <b>Payment Due:</b> 2/22/2014<br>
        <b>Account:</b> 968-34567
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
         <tr>
                  <th> Roll No</th>
                      <th> Name </th>
					  <th> L.Name </th>
                      <th> Gender </th>
					  <th> DOB </th>
                      <th> Age </th>
                      <th> Phone </th>
                       <th> Address </th>
                      <th> Gurdian.N</th>
                      <th> Grade </th>
                      <th> Program </th>
					 
                </tr>
          </thead>
         <tbody>
                 
				 
				 
				 
				 
				 <?php        
		  
                  $con = mysqli_connect("localhost","root","","register");

				         $grade = $_GET['grade'];
						 
		$select = "SELECT * FROM `student_table` WHERE grade ='$grade'  ";
				  
               if($run = mysqli_query($con,$select)){
				 while($row = mysqli_fetch_array($run)){
		 
	            
          echo '<tr >';

            // echo '<td>'. $post['student_id'] . '</td>'; 
            echo '<td>'.$row['std_roll_no']. '</td>';			
            echo '<td>'.$row['studentname']. '</td>';
            echo '<td>'. $row['lname'] . '</td>';
            echo '<td>'. $row['gender'] . '</td>';
            echo '<td>'. $row['dob'] . '</td>';
			echo '<td>'. $row['age'] . '</td>';
            echo '<td>'. $row['phone'] . '</td>';
             echo '<td>'. $row['add']. '</td>';
            echo '<td>'. $row['gurdian']. '</td>';
            echo '<td>'. $row['grade'] . '</td>';
			echo '<td>'. $row['Program']. '</td>';
            
			
			
			
			
			
			
			
	
	
           echo '</tr>';  
				 }
			 }
           ?>	 
				 
				 
				 
				 
				 
                </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
