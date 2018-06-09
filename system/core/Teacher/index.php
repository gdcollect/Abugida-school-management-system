<?php  require 'top.php';?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
 <?php
				 
		 $con = mysqli_connect($host,$user,$password,$db);

				  
 				 $result1 = mysqli_query( $con,"select * FROM `teacher_table` ");
				 $rows1 = mysqli_num_rows($result1);
				  
				 $result2 = mysqli_query( $con,"select * FROM `student_table` ");
				 $rows2 = mysqli_num_rows($result2);
				  
				 $result3 = mysqli_query( $con,"select * FROM `employee` ");
				 $rows3 = mysqli_num_rows($result3);
				 
				 $all =($rows1 + $rows2 + $rows3);
				 
				$add=round ($all);
				 
				  
 			 
 				 $grade1m = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'male' AND   grade = '1' ");
				 $r_grade1m= mysqli_num_rows($grade1m);
				 
				 $grade1f = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'female' AND grade = '1' ");
				 $r_grade1f = mysqli_num_rows($grade1f);
				 
				 
				 $grade2m = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'male' AND grade = '2' ");
				 $r_grade2m= mysqli_num_rows($grade2m);
				 
				 $grade2f = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'female' AND grade = '2' ");
				 $r_grade2f = mysqli_num_rows($grade2f);
				 
				 
				 $grade3m = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'male' AND grade = '3' ");
				 $r_grade3m= mysqli_num_rows($grade3m);
				 
				 $grade3f = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'female' AND grade = '3' ");
				 $r_grade3f = mysqli_num_rows($grade3f);
				 
				 
				 $grade4m = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'male' AND grade = '4' ");
				 $r_grade4m= mysqli_num_rows($grade4m);
				 
				 $grade4f = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'female' AND grade = '4' ");
				 $r_grade4f = mysqli_num_rows($grade4f);
				 
				 
				 
				 $grade5m = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'male' AND grade = '5' ");
				 $r_grade5m= mysqli_num_rows($grade5m);
				 
				 $grade5f = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'female' AND grade = '5' ");
				 $r_grade5f = mysqli_num_rows($grade5f);
				 
				 
				 $grade6m = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'male' AND grade = '6' ");
				 $r_grade6m= mysqli_num_rows($grade6m);
				 
				 $grade6f = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'female' AND grade = '6' ");
				 $r_grade6f = mysqli_num_rows($grade6f);
				 
				 
				 
				 $grade7m = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'male' AND grade = '7' ");
				 $r_grade7m= mysqli_num_rows($grade7m);
				 
				 $grade7f = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'female' AND grade = '7' ");
				 $r_grade7f = mysqli_num_rows($grade7f);
				 
				 
				 $grade8m = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'male' AND grade = '8' ");
				 $r_grade8m= mysqli_num_rows($grade8m);
				 
				 $grade8f = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'female' AND grade = '8' ");
				 $r_grade8f = mysqli_num_rows($grade8f);
				 
				 
				 
				 $grade9m = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'male' AND grade = '9' ");
				 $r_grade9m= mysqli_num_rows($grade9m);
				 
				 $grade9f = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'female' AND grade = '9' ");
				 $r_grade9f = mysqli_num_rows($grade9f);
				 
				 
				 $grade10m = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'male' AND grade = '10' ");
				 $r_grade10m= mysqli_num_rows($grade10m);
				 
				 $grade10f = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'female' AND grade = '10' ");
				 $r_grade10f = mysqli_num_rows($grade10f);
				 
				 
				 $grade11m = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'male' AND grade = '11' ");
				 $r_grade11m= mysqli_num_rows($grade11m);
				 
				 $grade11f = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'female' AND grade = '11' ");
				 $r_grade11f = mysqli_num_rows($grade11f);
				 
				 
				 
				 $grade12m = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'male' AND grade = '12' ");
				 $r_grade12m= mysqli_num_rows($grade12m);
				 
				 $grade12f = mysqli_query($con,"select * FROM `student_table` WHERE gender = 'female' AND grade = '12' ");
				 $r_grade12f = mysqli_num_rows($grade12f);
				 
				 $teach_m = mysqli_query($con,"select * FROM `teacher_table` WHERE gender = 'male'  ");
				 $r_teach_m = mysqli_num_rows($teach_m);
				 
				 $teach_f = mysqli_query($con,"select * FROM `teacher_table` WHERE gender = 'female'  ");
				 $r_teach_f = mysqli_num_rows($teach_f);
				 
				 ?>
    <!-- Main content -->
    <section class="content">
	 <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php   echo  $rows2 ;?></h3>

              <p><?php echo $lang['Students'];  ?></p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="student.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php   echo  $rows1 ;?> <sup style="font-size: 20px"></sup></h3>

              <p> <?php echo $lang['Teachers'] ; ?></p>
            </div>
            <div class="icon">
              <i class="fa fa-graduation-cap"></i>
            </div>
            <a href="teacher.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php   echo  $rows3 ;?> </h3>

              <p>Employees</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="employee.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php   echo  $add ;?> </h3>

              <p>All</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- Small boxes (Stat box) -->
	  
	   <div class="row">
        <div class="col-md-10">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Students Count Data</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="glyphicon glyphicon-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="glyphicon glyphicon-remove"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div> </div>



 <div class="col-md-2">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Chart Key</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="glyphicon glyphicon-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="glyphicon glyphicon-remove"></i></button>
              </div>
            </div>
            <div class="box-body">
              <ul class="chart-legend clearfix">
                    <li><i class="glyphicon glyphicon-stop text-green "></i> Opera</li>

                    <li><i class="glyphicon glyphicon-stop text-gray"></i> Opera</li>
                   </ul>
            </div>
            <!-- /.box-body -->
          </div> </div>		  </div>
          <!-- /.box -->

	  
     <div class="row">
        <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Area Chart</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="glyphicon glyphicon-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="glyphicon glyphicon-remove"></i></button>
              </div>              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="pieChart" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Donut Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="areaChart" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Line Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="lineChart" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- BAR CHART -->
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Quick Notification</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
             <form action="notifyexec.php" method="post">
                <div class="form-group">
				<label><small>Choose Where To Send The Notification</small> </label>
               <select  class="form-control"   required id="sex"    name="position">
            <option value="Students">Students</option>
			<option value="Teachers">Teachers</option>
 			 
           </select>                </div>
                <div class="form-group">
               <input type="date" class="form-control" id="date" name="date">
              </div>
			   <div class="form-group">
                <input type="text" class="form-control" placeholder="Title"  name="title">
              </div>
                <div>
                  <textarea class="textarea" placeholder="Message" name="message"
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
             
            </div>
            <div class="box-footer clearfix">
              <button type="submit" value="Send" class="pull-right btn btn-default" id="sendEmail">Post
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
          </div>
          <!-- /.box -->
 </form>
        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row (main row) -->

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
<!-- ChartJS 1.0.1 -->
<script src="../../../plugins/chartjs/Chart.min.js"></script>
<!-- FastClick -->
<script src="../../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../dist/js/demo.js"></script>
<!-- page script -->
<script>

  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var areaChart = new Chart(areaChartCanvas);

    var areaChartData = {
      labels: ["Grade 1", "Grade 2", "Grade 3", "Grade 4", "Grade 5", "Grade 6", "Grade 7", "Grade 8", "Grade 9", "Grade 10", "Grade 11", "Grade 12"],
      datasets: [
        {
          label: "Male",
          fillColor: "rgba(210, 214, 222, 1)",
          strokeColor: "rgba(210, 214, 222, 1)",
          pointColor: "rgba(210, 214, 222, 1)",
          pointStrokeColor: "#c1c7d1",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [<?php echo   $r_grade1m ;?>, <?php echo   $r_grade2m ;?>,<?php echo   $r_grade3m ;?>,<?php echo   $r_grade4m ;?>,
		  
		         <?php echo   $r_grade5m ;?>,<?php echo   $r_grade6m ;?>,<?php echo   $r_grade7m ;?>,<?php echo   $r_grade8m ;?>,
				 
		         <?php echo   $r_grade9m ;?>,<?php echo   $r_grade10m ;?>,<?php echo   $r_grade11m ;?>,<?php echo   $r_grade12m ;?>]
        },
        {
          label: "Female",
          fillColor: "rgba(60,141,188,0.9)",
          strokeColor: "rgba(60,141,188,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [<?php echo   $r_grade1f ;?>, <?php echo   $r_grade2f ;?>,<?php echo   $r_grade3f ;?>,<?php echo   $r_grade4f ;?>,
		  
		         <?php echo   $r_grade5f ;?>,<?php echo   $r_grade6f ;?>,<?php echo   $r_grade7f ;?>,<?php echo   $r_grade8f ;?>,
				 
		         <?php echo   $r_grade9f ;?>,<?php echo   $r_grade10f ;?>,<?php echo   $r_grade11f ;?>,<?php echo   $r_grade12f ;?>]
        }
      ]
    };

    var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: false,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - Whether the line is curved between points
      bezierCurve: true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension: 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot: false,
      //Number - Radius of each point dot in pixels
      pointDotRadius: 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth: 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius: 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke: true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth: 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true
    };

    //Create the line chart
    areaChart.Line(areaChartData, areaChartOptions);

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
    var lineChart = new Chart(lineChartCanvas);
    var lineChartOptions = areaChartOptions;
    lineChartOptions.datasetFill = false;
    lineChart.Line(areaChartData, lineChartOptions);

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas);
    var PieData = [
   
      {
        value: <?php  echo $r_teach_m ;?>,
        color: "#00a65a",
        highlight: "#00a65a",
        label: "Male"
      },
     
      {
        value:  <?php  echo $r_teach_f ;?>,
        color: "#00c0ef",
        highlight: "#00c0ef",
        label: "Female"
      }
    
     
    ];
    var pieOptions = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke: true,
      //String - The colour of each segment stroke
      segmentStrokeColor: "#fff",
      //Number - The width of each segment stroke
      segmentStrokeWidth: 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps: 100,
      //String - Animation easing effect
      animationEasing: "easeOutBounce",
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate: true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale: true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
    };
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions);

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $("#barChart").get(0).getContext("2d");
    var barChart = new Chart(barChartCanvas);
    var barChartData = areaChartData;
    barChartData.datasets[1].fillColor = "#00a65a";
    barChartData.datasets[1].strokeColor = "#00a65a";
    barChartData.datasets[1].pointColor = "#00a65a";
    var barChartOptions = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - If there is a stroke on each bar
      barShowStroke: true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth: 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing: 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing: 1,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to make the chart responsive
      responsive: true,
      maintainAspectRatio: true
    };

    barChartOptions.datasetFill = false;
    barChart.Bar(barChartData, barChartOptions);
  });
</script>
</body>
</html>
