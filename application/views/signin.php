<!DOCTYPE html>
<html lang="en">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png" type="image/png">

    <title>
        ConviFarm | KilimoRahisi
    </title>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/fontawesome/css/font-awesome.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/quirk.css">

  <script src="<?php echo base_url();?>assets/lib/modernizr/modernizr.js"></script>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="<?php echo base_url()?>assets/lib/html5shiv/html5shiv.js"></script>
  <script src="<?php echo base_url()?>assets/lib/respond/respond.src.js"></script>
  <![endif]-->
</head>

<body class="signwrapper">

  <div class="sign-overlay"></div>
  <div class="signpanel"></div>

  <div class="panel signin">
    <div class="panel-heading">
      <h1>ConviFarm KilimoRahisi</h1>
      <h4 class="panel-title">Welcome! Please Signin.</h4>
    </div>
    <div class="panel-body">
      <button class="btn btn-primary btn-quirk  btn-block cf-green">Connect with Facebook</button>
      <div class="or_option">or</div>
      <form action="#">
        <div class="form-group mb10">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" placeholder="Enter Username">
          </div>
        </div>
        <div class="form-group nomargin">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="text" class="form-control" placeholder="Enter Password">
          </div>
        </div>
        <div><a href="#" class="forgot">Forgot password?</a></div>
        <div class="form-group">
          <button class="btn btn-success btn-quirk btn-block cf-green">Sign In</button>
        </div>
      </form>
      <hr class="invisible">
      <div class="form-group">
          <a href="<?php echo site_url('convifarm/signup')?>" class="btn btn-default btn-quirk btn-stroke btn-stroke-thin btn-block btn-sign">Not a member? Sign up now!</a>
      </div>
    </div>
  </div><!-- panel -->

</body>
</html>
