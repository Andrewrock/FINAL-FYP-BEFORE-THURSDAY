<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Election Results</title>
		<link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/Adminhome.css" rel="stylesheet">
    <link href="css/RegistrationOfCandidates.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function() {
			var options = {
	            chart: {
	                renderTo: 'container',
	                type: 'bar'
	            },
	            title: {
	                text: 'Winning Candidates',
	                x: -20 //center
	            },
	            subtitle: {
	                text: 'Per Position',
	                x: -20
	            },
	            xAxis: {
	                categories: []
	            },
	            yAxis: {
	                min: 0,
	                title: {
	                    text: 'Votes'
	                },
	                labels: {
	                    overflow: 'justify'
	                }
	            },
	            tooltip: {
	                formatter: function() {
	                        return '<b>'+ this.series.name +'</b><br/>'+
	                        this.x +': '+ this.y;
	                }
	            },
	            legend: {
	                layout: 'vertical',
	                align: 'right',
	                verticalAlign: 'top',
	                x: -10,
	                y: 100,
	                borderWidth: 0
	            },
	            plotOptions: {
	                bar: {
	                    dataLabels: {
	                        enabled: true
	                    }
	                }
	            },
	            series: []
	        }

	        $.getJSON("dataChart.php", function(json) {
				options.xAxis.categories = json[0]['data'];
	        	options.series[0] = json[1];
	        	options.series[1] = json[2];
	        	options.series[2] = json[3];
		        chart = new Highcharts.Chart(options);
	        });
	    });
		</script>
	    <script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="http://code.highcharts.com/modules/exporting.js"></script>
	</head>
	<body>
<div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Uvote Admin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
       <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="OngoingAdmin.php"><i class="fa fa-dashboard"></i> On-going Elections</a></li>
                <li><a href="Adminhome.php"><i class="fa fa-desktop"></i> Home</a></li>
            <li><a href="Previous.php"><i class="fa fa-bar-chart-o"></i> Previous Elections</a></li>
            <li><a href="SocietyCreate.php"><i class="fa fa-table"></i> Create Election</a></li>
            <li><a href="ReminderEmail.html"><i class="fa fa-edit"></i> Send reminder emails</a></li>
            <li><a href="AdminSignup.php"><i class="fa fa-font"></i> Add Admin</a></li>
             <li><a href="Chart.php"><i class="fa fa-tasks"></i> Results</a></li>


            <li><a href="Adminlogout.php"><i class="fa fa-pencil"></i> Logout</a></li>
            </li>
          </ul>

         </div><!-- /.navbar-collapse -->
      </nav>

      </nav>


		<div id="container" style="width: 90%; height: 500px; margin-left: 10%;"></div>
				<div class="buttons">
           <a href="FullResultCharts.php"><input type="submit"  value="View Full Results"  id="submit" class="button green center"></a>
		   </div>

	</body>
</html>