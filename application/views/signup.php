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
  

  <title>Convifarm | Kilimorahisi </title>
  <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/favicon.png" type="image/png">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/lib/fontawesome/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/lib/select2/select2.css">

  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/quirk.css">

  <script src="<?php echo base_url() ?>assets/lib/modernizr/modernizr.js"></script>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="<?php echo base_url()?>assets/lib/html5shiv/html5shiv.js"></script>
  <script src="<?php echo base_url()?>assets/lib/respond/respond.src.js"></script>
  <![endif]-->
</head>

<body class="signwrapper">

  <div class="sign-overlay"></div>
  <div class="signpanel"></div>

  <div class="signup">
    <div class="row">
      <div class="col-sm-5">
        <div class="panel">
          <div class="panel-heading">
              <h1 class="">ConviFarm KilimoRahisi</h1>
            <h4 class="panel-title">Create an Account!</h4>
          </div>
          <div class="panel-body">
            <button class="btn btn-primary btn-quirk  btn-block cf-green">Sign Up Using Facebook</button>
            <div class="or_option">or</div>
            <form action="#">
              <div class="form-group mb15">
                <input type="text" class="form-control" placeholder="Enter Your Username">
              </div>
              <div class="form-group mb15">
                <input type="text" class="form-control" placeholder="Enter Your Password">
              </div>
              <div class="form-group mb15">
                <input type="text" class="form-control" placeholder="Enter Your Full Name">
              </div>

              <div class="row mb15">
                <div class="col-xs-5">
                  <div class="form-group">
                    <select class="form-control" style="width: 100%" data-placeholder="Birth Month">
                      <option value="">&nbsp;</option>
                      <option value="January">January</option>
                      <option value="February">February</option>
                      <option value="March">March</option>
                      <option value="April">April</option>
                      <option value="May">May</option>
                      <option value="June">June</option>
                    </select>
                  </div>
                </div>
                <div class="col-xs-3">
                  <div class="form-group">
                    <select class="form-control" style="width: 100%" data-placeholder="Birth Day">
                      <option value="">&nbsp;</option>
                      <option value="01">01</option>
                      <option value="02">02</option>
                      <option value="03">03</option>
                      <option value="04">04</option>
                      <option value="05">05</option>
                      <option value="06">06</option>
                    </select>
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="form-group">
                    <select class="form-control" style="width: 100%" data-placeholder="Birth Year">
                      <option value="">&nbsp;</option>
                      <option value="1986">1986</option>
                      <option value="1987">1987</option>
                      <option value="1988">1988</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group mb20">
                <label class="ckbox">
                  <input type="checkbox" name="checkbox">
                  <span>Accept terms and conditions</span>
                </label>
              </div>
              <div class="form-group">
                <button class="btn btn-success btn-quirk btn-block cf-green">Create Account</button>
              </div>
            </form>
          </div><!-- panel-body -->
        </div><!-- panel -->
      </div><!-- col-sm-5 -->
      <div class="col-sm-7">
        <div class="sign-sidebar">
          <h3 class="signtitle mb20">Kilimo Rahisi</h3>
          <p>Lorum instance ivictus mon realo</p>
          <p>Lorum instance ivictus mon realo</p>

          <br>

          <h4 class="reason">1. Lorum</h4>
          <p>Lorum instance ivictus mon realo</p>

          <br>

          <h4 class="reason">2. Lorum</h4>
          <p>Lorum instance ivictus mon realo</p>

          <hr class="invisible">

          <div class="form-group">
            <a href="<?php echo site_url('convifarm/signin'); ?>" class="btn btn-default btn-quirk btn-stroke btn-stroke-thin btn-block btn-sign">Already a member? Sign In Now!</a>
          </div>
        </div><!-- sign-sidebar -->
      </div>
    </div>
  </div><!-- signup -->



<script src="../lib/jquery/jquery.js"></script>
<script src="../lib/bootstrap/js/bootstrap.js"></script>
<script src="../lib/select2/select2.js"></script>

<script>
$(function() {

  // Select2 Box
  $("select.form-control").select2({ minimumResultsForSearch: Infinity });

});
</script>

</body>

<!-- Mirrored from themepixels.com/demo/webpage/quirk/templates/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Aug 2015 12:47:18 GMT -->
</html>
