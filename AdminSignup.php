<?php

/*** begin our session ***/
session_start();

/*** set a form token ***/
$form_token = md5( uniqid('auth', true) );

/*** set the session form token ***/
$_SESSION['form_token'] = $form_token;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">

<html>
<head>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/loginidea.css">


    <title>Signup</title>
</head>

<body>
<form action="AdminSignup_Submit.php" method="post">
    <div id="logmsk" style="display: block;">
        <div id="userbox">
            <h1 id="signup" style="background-color: rgb(118, 171, 219); background-position: initial initial; background-repeat: initial initial;">Signup</h1>

            <div id="sumsk" style="display: none;">
                Sending
            </div>
            <input id="admin_username" name="admin_username" placeholder="ID" style="opacity: 1; background-color: rgb(255, 255, 255); background-position: initial initial; background-repeat: initial initial;">


            <input id="admin_email" name="admin_email" type="email" placeholder="@ucc.ie" style="opacity: 1; background-color: rgb(255, 255, 255); background-position: initial initial; background-repeat: initial initial;">

            <input id="admin_password" name="admin_password" type="password" placeholder="Password" style="opacity: 1; background-color: rgb(255, 255, 255); background-position: initial initial; background-repeat: initial initial;">



            <p id="nameal" style="display: none; opacity: 1;">ID:</p>

            <p id="passal" style="display: none; opacity: 1;">Password:</p>

				<a href="Adminlogin.php"><p id="logint" style="opacity: 1;">Login as an existing user</p></a>

				<input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />

              <button>Signup</button>
        </div>
    </div>
</form>
    <script type="text/javascript">
$(function () {
    var user = {}, flg = {};
    init();
    $('.upload').click(function(){if(flg.upd==0){upd('upload');flg.upd=1;}else{upd('');flg.upd=0;}});
    $('#login').click(function(){initub();$('#logmsk').fadeIn();ub(0);});


    $( "#admin_username" ).keyup(function() {
    var len = $('#admin_username').val().length;
    if(len > 20 || len == 0){
    $('#admin_username').css('background','rgb(255, 214, 190)');
    blsp();
    if(len != 0){
    $('#nameal').css('color','rgb(255, 57, 19)').text('ID: Too long').fadeIn();
    }else{
    $('#nameal').css('color','rgb(255, 57, 19)').text('ID: Null').fadeIn();
    }
    flg.name = 1;
    }else if(len > 3){
    $('#admin_username').css('background','rgb(255, 255, 255)');
    $('#nameal').css('color','rgb(17, 170, 42)').text('ID: Ok').fadeIn();
    flg.name = 0;
    tcheck();
    }
    });

    $( "#admin_email" ).keyup(function() {
    var len = $('#admin_email').val().length;
    if(len > 30 || len == 0){
    $('#admin_email').css('background','rgb(255, 214, 190)');
    blsp();
    if(len != 0){
    $('#nameal').css('color','rgb(255, 57, 19)').text('ID: Too long').fadeIn();
    }else{
    $('#nameal').css('color','rgb(255, 57, 19)').text('ID: Null').fadeIn();
    }
    flg.name = 1;
    }else if(len > 3){
    $('#admin_email').css('background','rgb(255, 255, 255)');
    $('#nameal').css('color','rgb(17, 170, 42)').text('ID: Ok').fadeIn();
    flg.name = 0;
    tcheck();
    }
    });


    $( "#admin_password" ).keyup(function() {
    var len = $('#student_password').val().length;
    if(len > 10 || len == 0){
    $('#admin_password').css('background','rgb(255, 214, 190)');
    blsp();
    if(len != 0){
    $('#passal').css('color','rgb(255, 57, 19)').text('Password: Too long').fadeIn();
    }else{
    $('#passal').css('color','rgb(255, 57, 19)').text('Password: Null').fadeIn();
    }
    flg.pass = 1;
    }else{
    $('#admin_password').css('background','rgb(255, 255, 255)');
    $('#passal').css('color','rgb(17, 170, 42)').text('Password: Ok').fadeIn();
    flg.pass = 0;
    tcheck();
    }
    });

    function tcheck(){
    if(flg.name == 0 && flg.pass == 0){
    $('#signupb').css('opacity', '1').css('cursor', 'pointer');
    }else{
    blsp();
    }
    }


    $('#signupb').click(function(){
    if(flg.name == 0 && flg.pass == 0){
    $('#sumsk').fadeIn();
    $('#admin_username, #admin_email #admin_password, #logint, #nameal, #passal, #signupb').css('opacity', '0.2');
    }
    });

    function init() {
      flg.logt = 0;
    }







    function initub(){
        flg.name = -1;
        flg.pass = -1;
        $('#sumsk').hide();
        $('#nameal').hide();
        $('#passal').hide();
        $('#admin_username, #admin_email, #admin_password, #logint, #nameal, #passal, #signupb').css('opacity', '1');
        $('#admin_username').css('background','rgb(255, 255, 255)');
        $('#admin_email').css('background','rgb(255, 255, 255)');
        $('#student_password').css('background','rgb(255, 255, 255)');
        $('#signupb').css('opacity', '0.2').css('cursor', 'default');
        $('#admin_username, #admin_email #admin_password').val('');
    }


    function upd(button){
    location.hash = button;
    if(flg.upd == 0){
    $('#drop').fadeIn();
    }else{
    $('#drop').fadeOut();
    }
    }

    function ub(flg){
    if(flg == 0){
    $('#signup').text('Sign up').css('background', '#76ABDB');
    $('#signupb').text('Sign up');
    $('#logint').text('Login as an existing user');
    }else{
    $('#signup').text('Login').css('background', '#FFA622');
    $('#signupb').text('Login');
    $('#logint').text('Sign up as a new user');
    }
    }

    function blsp(){
    $('#signupb').css('opacity', '0.2').css('cursor', 'default');
    }


    });
    </script>
</body>
</html>
