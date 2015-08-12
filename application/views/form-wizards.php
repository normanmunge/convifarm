  <div class="mainpanel">

    <div class="contentpanel">

      <ol class="breadcrumb breadcrumb-quirk">
        <li><a href="index.html"><i class="fa fa-home mr5"></i> Home</a></li>
        <li><a href="general-forms.html">Forms</a></li>
        <li class="active">Form Wizards</li>
      </ol>

      <hr class="darken">

      <div class="row">
        <div class="col-md-6">
          <h4 class="panel-title mb5">Basic Wizard</h4>
          <p class="mb15">A basic view of a wizard using the basic style.</p>

          <div id="wizard-basic">
            <h3>First Step</h3>
            <div>
              <p>Try the keyboard navigation by clicking arrow left or right!</p>
            </div>
            <h3>Second Step</h3>
            <div>
              <p>Wonderful transition effects.</p>
            </div>
            <h3>Last Step</h3>
            <div>
              <p>The next and previous buttons help you to navigate through your content.</p>
            </div>
          </div>
        </div><!-- col-md-6 -->

        <div class="col-md-6">
          <h4 class="panel-title mb5">Basic Form Wizard</h4>
          <p class="mb15">A basic form wizard with a form validation.</p>

          <form class="form-horizontal" id="wizard-form" action="#">
            <h3>Personal Information</h3>
            <div>
              <div class="form-group mt10">
                <label class="col-sm-3 control-label"><span class="text-danger">*</span> First Name:</label>
                <div class="col-sm-8">
                  <input name="firstname" type="text" class="form-control required" placeholder="Enter your firstname">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label"><span class="text-danger">*</span> Last Name:</label>
                <div class="col-sm-8">
                  <input name="lastname" type="text" class="form-control required" placeholder="Enter your lastname">
                </div>
              </div>
            </div>
            <h3>Shipping Information</h3>
            <div>
              <div class="form-group mt10">
                <label class="col-sm-3 control-label"><span class="text-danger">*</span> Street Name:</label>
                <div class="col-sm-8">
                  <input name="address" type="text" class="form-control required" placeholder="Enter your address">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label"><span class="text-danger">*</span> City/Town:</label>
                <div class="col-sm-8">
                  <input name="city" type="text" class="form-control required" placeholder="Enter your city">
                </div>
              </div>
            </div>
          </form>
        </div><!-- col-md-6 -->
      </div><!-- row -->

      <div class="mb15"></div>

      <div class="row">
        <div class="col-md-10">
          <h4 class="panel-title mb5">Emphasize Step Wizard</h4>
          <p class="mb15">An emphasized step style wizard that is perfect for e-commerce websites.</p>

          <div id="wizard-basic2" class="wizard-style2">
            <h3>Personal Details <small>Enter your personal information.</small></h3>
            <div>
              <p>Try the keyboard navigation by clicking arrow left or right!</p>
            </div>
            <h3>Shipping Details <small>Choose your shipping options.</small></h3>
            <div>
              <p>Wonderful transition effects.</p>
            </div>
            <h3>Payment Details <small>Enter your card information.</small></h3>
            <div>
              <p>The next and previous buttons help you to navigate through your content.</p>
            </div>
          </div>
        </div><!-- col-md-6 -->
      </div><!-- row -->

      <div class="mb15"></div>

      <div class="row">
        <div class="col-md-10">
          <h4 class="panel-title mb5">Vertical Wizard</h4>
          <p class="mb15">A vertical style wizard that's perfect for registration or survey apps.</p>

          <div id="wizard-vertical" class="wizard-style2">
            <h3>Personal Details <small>Enter your personal information.</small></h3>
            <div>
              <p>Try the keyboard navigation by clicking arrow left or right!</p>
            </div>
            <h3>Shipping Details <small>Choose your shipping options.</small></h3>
            <div>
              <p>Wonderful transition effects.</p>
            </div>
            <h3>Payment Details <small>Enter your card information.</small></h3>
            <div>
              <p>The next and previous buttons help you to navigate through your content.</p>
            </div>
          </div>
        </div><!-- col-md-6 -->
      </div><!-- row -->

    </div><!-- contentpanel -->
  </div><!-- mainpanel -->

</section>

<script src="<?php echo base_url();?>assets/lib/jquery/jquery.js"></script>
<script src="<?php echo base_url();?>assets/lib/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/lib/jquery-toggles/toggles.js"></script>
<script src="<?php echo base_url();?>assets/lib/jquery.steps/jquery.steps.js"></script>
<script src="<?php echo base_url();?>assets/lib/jquery-validate/jquery.validate.js"></script>

<script src="../js/quirk.js"></script>

<script>

$(document).ready(function() {

  'use strict';

  $('#wizard-basic, #wizard-basic2').steps({
    headerTag: 'h3',
    bodyTag: 'div',
    transitionEffect: 'slideLeft',
    autoFocus: true
  });



  var form = $('#wizard-form');
  form.steps({
    headerTag: 'h3',
    bodyTag: 'div',
    transitionEffect: 'slideLeft',
    onStepChanging: function (event, currentIndex, newIndex) {

      // Allways allow previous action even if the current form is not valid!
      if (currentIndex > newIndex) { return true; }

      // Needed in some cases if the user went back (clean up)
      if (currentIndex < newIndex) {
        // To remove error styles
        form.find('.body:eq(' + newIndex + ') label.error').remove();
        form.find('.body:eq(' + newIndex + ') .error').removeClass('error');
      }

      form.validate().settings.ignore = ':disabled,:hidden';
      return form.valid();
    },
    onFinishing: function (event, currentIndex) {
      form.validate().settings.ignore = ':disabled';
      return form.valid();
    },
    onFinished: function (event, currentIndex) {
      alert('Submitted!');
    }
  }).validate({
    highlight: function(element) {
      $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      $(element).closest('.form-group').removeClass('has-error');
    }
  });

  $('#wizard-vertical').steps({
    headerTag: 'h3',
    bodyTag: 'div',
    transitionEffect: 'slideLeft',
    autoFocus: true,
    stepsOrientation: 'vertical'
  });


});
</script>

