
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BIS Society Election</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/RegistrationOfCandidates.css" rel="stylesheet">


    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">

	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
	<script type="text/javascript" src="scripts/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jquery.validate.js"></script>

  	<script>
	  $(function() {
	  $( "#Election_start" ).datepicker({dateFormat: "dd-mm-yy"});
	  });
	 </script>

	 <script>
	  $(function() {
	  $( "#Election_end" ).datepicker({dateFormat: "dd-mm-yy"});
	  });
	 </script>

	 <script>
	  $(function() {
	  $( "#Election_deadline" ).datepicker({dateFormat: "dd-mm-yy"});
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


			         <form action="SocietyCreate_Submit.php" class="sign-up form-horizontal" method="post">
						 <h1 class="sign-up-title">Create Election</h1>
		<input type="text" class="sign-up-input" id="Election_title" name="Election_title" placeholder="Election Title" />

		<input type="text" id="Election_start" class="sign-up-input" name="Election_start" placeholder="Election start date" />


        <input type="text" id="Election_end" class="sign-up-input" name="Election_end" placeholder="Election end date" />

        <input type="text" id="Election_deadline" class="sign-up-input" name="Election_deadline" placeholder="Election Deadline to register" />



			<div class="buttons">

                                <input type="submit" value="Submit"  id="submit" class="button green center">
                                <input type="reset" value="Clear"  id="reset" class="button red center">
								</div>

								</form>




<script>
$('#Reset').click(function(){
            $('#Election')[0].reset();
 });
 </script>

  <script>
	 $('.trigger').click(function(){
		 $('.content').show();
		 $('.' +(this).data('rel')).show();
	 });
 </script>






    <!-- Bootstrap core JavaScript -->
     <!-- Bootstrap core JavaScript -->

    <script src="scripts/bootstrap.js"></script>
    <!-- Page Specific Plugins -->

    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>


  </body>
</html>
