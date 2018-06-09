
<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Print Report</title>

    <!-- Bootstrap Core CSS -->
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

    <style type="text/css">
        .wrapper {
            margin-top:20px !important;            
            border:1px solid #777;
            background:#fff;
            margin:0 auto;
            padding: 20px;
        }
        body {
            background:#ccc;   
        }
        img {
            max-height:150px;   
            max-width:150px;   
            margin-right:10px;
        }
        .table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
            border-top: none !important;   
        }
        
    </style>
</head>
<body>
    <div class="container wrapper">
        
        
        
        <div class="box">
		  
		   
            <div class="box-header btn   btn-flat ">
              <h3 class="box-title"> All Students In <?php  echo $_GET ['grade']?></h3>
            </div>
             
            <!-- /.box-header -->
            <div class="box-body">
			                            <div class="table-responsive">

              <table id="example1" class="table table-bordered table-striped">
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
            </div>
					<button type="button" onclick="window.print()" class="btn bg-navy btn-flat  ">Print/Export PDF</button>

            <!-- /.box-body -->
          </div>
    
</body>

</html>