
  <div class="mainpanel">

    <div class="contentpanel">

      <ol class="breadcrumb breadcrumb-quirk">
        <li><a href="index.html"><i class="fa fa-home mr5"></i> Home</a></li>
        <li><a href="general-forms.html">Forms</a></li>
        <li class="active">Form Validation</li>
      </ol>

      <div class="row">

        <div class="col-md-6">
          <div class="panel">
              <div class="panel-heading nopaddingbottom">
                <h4 class="panel-title">Basic Form Validation</h4>
                <p>Please provide your name, email address (won't be published) and a comment.</p>
              </div>
              <div class="panel-body">
                <hr>
                <form id="basicForm" action="http://themepixels.com/demo/webpage/quirk/templates/form-validation.html" class="form-horizontal">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Name <span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" name="name" class="form-control" placeholder="Type your name..." required />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Email <span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="email" name="email" class="form-control" placeholder="Type your email..." required />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">URL</label>
                    <div class="col-sm-8">
                      <input type="url" name="url" class="form-control" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Comment <span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <textarea rows="5" class="form-control" placeholder="Type your comment..." required></textarea>
                    </div>
                  </div>

                  <hr>

                  <div class="row">
                    <div class="col-sm-9 col-sm-offset-3">
                      <button class="btn btn-success btn-quirk btn-wide mr5">Submit</button>
                      <button type="reset" class="btn btn-quirk btn-wide btn-default">Reset</button>
                    </div>
                  </div>

                </form>
              </div><!-- panel-body -->
          </div><!-- panel -->

        </div><!-- col-md-6 -->

        <div class="col-md-6">
          <div class="panel">
              <div class="panel-heading nopaddingbottom">
                <h4 class="panel-title">Error Message In One Container</h4>
                <p>Please provide your name, email address (won't be published) and a comment.</p>
              </div>
              <div class="panel-body nopaddingtop">
                <hr>
                <form id="basicForm2" action="http://themepixels.com/demo/webpage/quirk/templates/form-validation.html" class="form-horizontal">

                  <div class="error"></div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Name <span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="text" name="name" class="form-control" title="Your name is required!" placeholder="Type your name..." required />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Email <span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <input type="email" name="email" class="form-control" title="Your email address is required!" placeholder="Type your email..." required />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">URL</label>
                    <div class="col-sm-8">
                      <input type="url" name="url" title="Please enter a valid url!" class="form-control" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Comment <span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <textarea rows="5" class="form-control" name="comment" title="Please type a comment at least 6 characters long!" placeholder="Type your comment..." required></textarea>
                    </div>
                  </div>

                  <hr>

                  <div class="row">
                    <div class="col-sm-9 col-sm-offset-3">
                      <button class="btn btn-wide btn-primary btn-quirk mr5">Submit</button>
                      <button type="reset" class="btn btn-wide btn-default btn-quirk">Reset</button>
                    </div>
                  </div>
                </form>
              </div><!-- panel-body -->
          </div><!-- panel -->


        </div><!-- col-md-6 -->

      </div><!--row -->

      <div class="row">

        <div class="col-md-6">
          <div class="panel">
              <div class="panel-heading nopaddingbottom">
                <h4 class="panel-title">With Checkboxes and Radio Buttons</h4>
                <p>Validating a form with a radio and checkbox buttons.</p>
              </div>
              <div class="panel-body nopaddingtop">
                <hr>

                <form id="basicForm3" class="form-horizontal" action="http://themepixels.com/demo/webpage/quirk/templates/form-validation.html">

                  <div class="form-group">
                    <label class="col-sm-3 control-label nopaddingtop">Platform <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                      <label class="rdiobox">
                        <input id="platform" type="radio" name="platform" value="mac" required>
                        <span>Mac OS</span>
                      </label>
                      <label class="rdiobox">
                        <input type="radio" name="platform" value="win">
                        <span>Windows</span>
                      </label>
                      <label class="error" for="platform"></label>
                    </div>
                  </div><!-- form-group -->

                  <div class="form-group">
                    <label class="col-sm-3 control-label nopaddingtop">Browser <span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                      <label class="ckbox">
                        <input id="int[]" type="checkbox" name="int[]" required>
                        <span>Firefox</span>
                      </label>
                      <label class="ckbox">
                        <input type="checkbox" name="int[]">
                        <span>Chrome</span>
                      </label>
                      <label class="ckbox">
                        <input type="checkbox" name="int[]">
                        <span>Safari</span>
                      </label>
                      <label class="error" for="int[]"></label>
                    </div>
                  </div><!-- form-group -->

                  <hr>

                  <div class="row">
                    <div class="col-sm-9 col-sm-offset-3">
                      <button class="btn btn-quirk btn-wide btn-primary mr5">Submit</button>
                      <button type="reset" class="btn btn-quirk btn-wide btn-default">Reset</button>
                    </div>
                  </div>
                </form>
              </div><!-- panel-body -->
          </div><!-- panel -->

        </div><!-- col-md-6 -->

        <div class="col-md-6">
          <div class="panel">
              <div class="panel-heading nopaddingbottom">
                <h4 class="panel-title">Validation With Select Boxes</h4>
                <p>Validating a form using select boxes with single or multiple selection.</p>
              </div>
              <div class="panel-body nopaddingtop">
                <hr>
                <form id="basicForm4" class="form-horizontal" action="http://themepixels.com/demo/webpage/quirk/templates/form-validation.html">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Fruits <span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <select id="fruits" class="select2" name="fruits" style="width: 100%" data-placeholder="Choose One" required>
                        <option value="">&nbsp;</option>
                        <option value="apple">Apple</option>
                        <option value="orange">Orange</option>
                        <option value="grapes">Grapes</option>
                        <option value="strawberry">Strawberry</option>
                      </select>
                      <label class="error" for="fruits"></label>
                    </div>
                  </div><!-- form-group -->

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Flowers <span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                      <select id="flowers" class="select2" name="flowers" style="width: 100%" data-placeholder="Choose One" title="Please select at least 2 flowers" multiple required>
                        <option value="">&nbsp;</option>
                        <option value="lily">Lily</option>
                        <option value="jasmine">Jasmine</option>
                        <option value="daisy">Daisy</option>
                        <option value="iris">Iris</option>
                        <option value="rose">Rose</option>
                      </select>
                      <label class="error" for="flowers"></label>
                    </div>
                  </div><!-- form-group -->

                  <hr>

                  <div class="row">
                    <div class="col-sm-9 col-sm-offset-3">
                      <button class="btn btn-quirk btn-wide btn-primary mr5">Submit</button>
                      <button type="reset" class="btn btn-quirk btn-wide btn-default">Reset</button>
                    </div>
                  </div>

                </form>

              </div><!-- panel-body -->
          </div><!-- panel -->
         </div><!-- col-md-6 -->

      </div><!-- row-->

    </div><!-- contentpanel -->

  </div><!-- mainpanel -->
</section>

<script src="<?php echo base_url();?>assets/lib/jquery/jquery.js"></script>
<script src="<?php echo base_url();?>assets/lib/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/lib/jquery-toggles/toggles.js"></script>
<script src="<?php echo base_url();?>assets/lib/select2/select2.js"></script>
<script src="<?php echo base_url();?>assets/lib/jquery-validate/jquery.validate.js"></script>


<script src="../js/quirk.js"></script>
<script>
$(document).ready(function(){

  'use strict';

  // Basic Form
  $('#basicForm').validate({
    highlight: function(element) {
      $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      $(element).closest('.form-group').removeClass('has-error');
    }
  });

  // Error Message In One Container
  $('#basicForm2').validate({
	 errorLabelContainer: jQuery('#basicForm2 div.error')
  });

  // With Checkboxes and Radio Buttons
  $('#basicForm3').validate({
    highlight: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-error');
    }
  });

  // Validation with select boxes
  $('#basicForm4').validate({
    highlight: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-error');
    }
  });

  $('.select2').select2();


});
</script>

