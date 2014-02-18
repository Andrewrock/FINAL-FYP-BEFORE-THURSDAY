<?php
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("UVOTE") or die(mysql_error());

$query = mysql_query(
	'Select first_name, last_name, candidate_position, vote from voting');

	$Num = mysql_query(
	'SELECT count(candidate_position) from voting');
?>

<!doctype html>
<html>
	<head>
		<title>Results</title>
		 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/Results.css" rel="stylesheet" type="text/css">
    <link href="css/Graph.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js" type="text/javascript"></script>
	<script src="scripts/Chart.js"></script>
	<script src="scripts/voting.js"></script>

	<script>
	$(document).ready(function () {
	var testArray =new Array();
  	var increment = 0;
});
	</script>
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
             <li><a href="Results.php"><i class="fa fa-tasks"></i> Results</a></li>
              <li><a href="stats.php"><i class="fa fa-ttechometer"></i> Results</a></li>
            <li><a href="Adminlogout.php"><i class="fa fa-pencil"></i> Logout</a></li>
            </li>
          </ul>

         </div><!-- /.navbar-collapse -->
      </nav>

      </nav>



					<?php while($row = mysql_fetch_array($query)):
					{
					$Votes = 0;

					}

					?>
					<div class="wrapper">
						<div class="title">
							<?php echo $row['candidate_position'] ?>
							</div>
							 <div id="p1" class="chart">
								 <canvas id="c1" style="width:250; height:500px";> </canvas>
							 </div>
							 <div class="footer">
								<ul class="os-percentages horizontal-list">
									<li>
										<p class="ios os scnd-font-color"><?php echo $row['first_name'].' '.$row['last_name']?></p>
										<p class="os-percentage"><?php echo $row['vote']?></p>
									</li><?php echo $Votes ++; ?>

									<li>
										<p class="mac os scnd-font-color"><?php echo $row['first_name'].' '.$row['last_name']?></p>
										<p class="os-percentage"><?php echo $row['vote']?></p>
									</li>
									<li>
										<p class="linux os scnd-font-color"><?php echo $row['first_name'].' '.$row['last_name']?></p>
										<p class="os-percentage"><?php echo $row['vote']?></p>
									</li>
									<li>
										<p class="win os scnd-font-color"><?php echo $row['first_name'].' '.$row['last_name']?></p>
										<p class="os-percentage"><?php echo $row['vote']?></p>
									</li>

									<li>
										<p class="wins os scnd-font-color"><?php echo $row['first_name'].' '.$row['last_name']?></p>
										<p class="os-percentage"><?php echo $row['vote']?></p>
									</li>

									</ul>
							 </div>

								 <div class="description">
									 <p>The Election had<?php echo $Num?> candidates running for the Auditor position</p>


								 </div></div>


<script>
testArray = '<?php echo $row['vote'] ?>'
testArray = '<?php echo $row['first_name'].' '.$row['last_name']?>'
console.log (testArray);
</script>
 <?php endwhile?>

	 </div>





	<script>

		var pieData= [
				{
					value: 104,
					color:"#e64c65"
				},
				{
					value : 50,
					color : "#11a8ab"
				},
				{
					value : 100,
					color : "#fcb150"
				},
				{
					value : 150,
					color : "#4fc4f6"
				},
				{
					value : 120,
					color : "#76a346"

				}

			];

var myPie = new Chart(document.getElementById("c1").getContext("2d")).Pie(pieData);



	</script>

	</body>
</html>
