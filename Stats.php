<?php

// Make a MySQL Connection
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("UVOTE") or die(mysql_error());
// Get all the data from the "candidate" table
$result = mysql_query("SELECT Election_title, Election_start, Election_end, Election_deadline FROM Elections where election_id =1") or die(mysql_error());
$data = mysql_query("SELECT candidate_position, count(candidate_position) counting FROM candidate_details group by candidate_position") or die(mysql_error());
$elections =mysql_query("Select * from Elections where election_id > 1");
$infos = mysql_query("SELECT first_name, last_name, candidate_position FROM voting");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Home</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/stats.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
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
            <li><a href="Adminlogout.php"><i class="fa fa-pencil"></i> Logout</a></li>
            </li>
          </ul>

         </div><!-- /.navbar-collapse -->
      </nav>

      </nav>

	  <h1>Most Recent Election</h1>

	  <table class="responstable">

						<tr>
							<th>Election Title</th>
							<th>Election Start Date</th>
							<th>Election End Date</th>
							<th>Deadline to register as candidate</th>
							</tr>


	 <?php
   while($row = mysql_fetch_array( $result )) {
   ?>
   		<td><?php echo $row['Election_title']?></td>
		<td><?php echo $row['Election_start']?></td>
		<td><?php echo $row['Election_end']?></td>
	    <td><?php echo $row['Election_deadline']?></td>
			</tr>
			</table>
				<?php
				}
				?>




             <h1>Number of Candidates per position</h1>

			 <table class="responstable">
				 	<tr>
							<th>Position</th>
							<th>Number of Candidates</th>
				 	</tr>


					 		<?php
					 		while($info = mysql_fetch_array( $data ))
					 		{
					 		?>
					<tr>
					<td><?php echo $info['candidate_position']?></td>
					<td><?php echo str_repeat('&nbsp;', 15) .$info['counting']?></td>
						 		</tr>

						 		<?php
						 		}
						 		?>
						 		</table>










			 <h1>Candidates running in election</h1>

	  <table class="responstable">

						<tr>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Position</th>

							</tr>

							<?php
					 		while($datas = mysql_fetch_array( $infos ))
					 		{
					 		?>
					<tr>
					<td><?php echo $datas['first_name']?></td>
					<td><?php echo $datas['last_name']?></td>
					<td><?php echo $datas['candidate_position']?></td>

						 		</tr>

						 		<?php
						 		}
						 		?>
						 		</table>






<h1>Previous Elections</h1>

	  <table class="responstable">

						<tr>
							<th>Election Title</th>
							<th>Election Start Date</th>
							<th>Election End Date</th>
							<th>Deadline to register as candidate</th>
							</tr>


	 <?php
   while($row = mysql_fetch_array( $elections )) {
   ?>
   		<td><?php echo $row['Election_title']?></td>
		<td><?php echo $row['Election_start']?></td>
		<td><?php echo $row['Election_end']?></td>
	    <td><?php echo $row['Election_deadline']?></td>
			</tr>
			</table>
				<?php
				}
				?>






           <!-- Bootstrap core JavaScript -->

    <script src="scripts/bootstrap.js"></script>
    <!-- Page Specific Plugins -->

    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>


  </body>
</html>