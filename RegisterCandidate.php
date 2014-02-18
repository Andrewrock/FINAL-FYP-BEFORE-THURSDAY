<?php

/*** begin our session ***/
session_start();

/*** set a form token ***/
$form_token = md5( uniqid('auth', true) );

/*** set the session form token ***/
$_SESSION['form_token'] = $form_token;
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    	<title>Register as a Candidate</title><!-- Bootstrap core CSS -->
    	<link href="css/bootstrap.css" rel="stylesheet" type="text/css"><!-- Add custom CSS here -->
    	<link href="css/RegistrationOfCandidates.css" rel="stylesheet" type="text/css">
    	<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href="css/sb-admin.css" rel="stylesheet" type="text/css">
		<link href="css/parsley.css" rel="stylesheet" type="text/css">
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="scripts/bootstrap.min.js"></script>
		<script type="text/javascript" src="scripts/jquery.min.js"></script>
		<script type="text/javascript" src="scripts/parsley.js"></script>

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
          <a class="navbar-brand" href="user.html">Uvote</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="SelectElections.php"><i class="fa fa-dashboard"></i> On-going Elections</a></li>
            <li><a href="CandidateIdea.php"><i class="fa fa-comment-o"></i> Contact Candidates</a></li>
            <li><a href="CreateElection.html"><i class="fa fa-tasks"></i> Previous elections</a></li>
            <li><a href="RegisterCandidate.php"><i class="fa fa-pencil"></i> Register as candidate</a></li>
            <li><a href="User.html"><i class="fa fa-desktop"></i> Home</a></li>
            <li><a href="logout.php"><i class="fa fa-user"></i> Logout</a></li>
            </li>
          </ul>

         </div><!-- /.navbar-collapse -->
      </nav>



        <form action="Register_signup.php" method="post" class="sign-up form-horizontal" id="register" data-validate="parsley">
      			<h1 class="sign-up-title">Register as a Candidate</h1>
	  			<div class="control-group">

	  		<label class="control-label" for="first_name"></label>
	  		<div class="controls">
	  		<input type="text" id="first_name" name='first_name' class="sign-up-input" required data-trigger="change" placeholder="First Name">
	  		</div>


	  		<label class="control-label" for="last_name"></label>
	  		<div class="controls">
	  		<input type="text" id="last_name" name='last_name' class="sign-up-input"parslay-validation-minlength="2" required data-trigger="change" placeholder="Last Name"/>
	  		</div>

	  		<label class="control-label" for="candidate_student_number"></label>
	  		<div class="controls">
	  		<input type="text" id="candidate_student_number" name='candidate_student_number' class="sign-up-input"parslay-type="digits" required placeholder="Student Number"/>
	  		</div>

	  		<label class="control-label" for="candidate_password"></label>
	  		<div class="controls">
	  		<input type="password" id="candidate_password" name='candidate_password' class="sign-up-input" parslay-type ="alphanum" required placeholder="Enter a password"/>
	  		</div>

	  		<label class="control-label" for="candidate_email"></label>
	  	    <div class="controls">
	  	    <input type="text" id="candidate_email" name='candidate_email' class="sign-up-input" data-type="email" data-trigger="change" required
	  	    placeholder="@umail.ucc.ie"/>
	  					</div></div>


            <input type="text" id="facebook_link" name="facebook_link" class="sign-up-input" placeholder="Link your Facebook account" >
			<input type="text" id="twitter_link" name="twitter_link" class="sign-up-input" placeholder="Link your Twitter account" >
			<input type="text" id="linkedIn_link" name="LinkedIn_link" class="sign-up-input" placeholder="Link your LinkedIn account" >




								<div class="buttons">
							 	 <input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />
                                <input type="submit" onclick="javascript:$('register').parsley('validate');" value="Submit"  id="submit" class="button green center">
                                <input type="reset" value="Clear"  id="reset" class="button red center">
								</div>

								</form>




        <script>
       $('#Reset').click(function(){
            $('.sign-up')[0].reset();
 });
 </script>
</body>
</html>
