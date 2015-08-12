  <section>

    <div class="leftpanel">
      <div class="leftpanelinner">

        <!-- ################## LEFT PANEL PROFILE ################## -->

        <div class="media leftpanel-profile">
          <div class="media-left">
            <a href="#">
              <img src="../images/photos/loggeduser.png" alt="" class="media-object img-circle">
            </a>
          </div>
          <div class="media-body">
            <h4 class="media-heading">Elen Adarna <a data-toggle="collapse" data-target="#loguserinfo" class="pull-right"><i class="fa fa-angle-down"></i></a></h4>
            <span>Software Engineer</span>
          </div>
        </div><!-- leftpanel-profile -->

        <div class="leftpanel-userinfo collapse" id="loguserinfo">
          <h5 class="sidebar-title">Address</h5>
          <address>
            4975 Cambridge Road
            Miami Gardens, FL 33056
          </address>
          <h5 class="sidebar-title">Contact</h5>
          <ul class="list-group">
            <li class="list-group-item">
              <label class="pull-left">Email</label>
              <span class="pull-right">me@themepixels.com</span>
            </li>
            <li class="list-group-item">
              <label class="pull-left">Home</label>
              <span class="pull-right">(032) 1234 567</span>
            </li>
            <li class="list-group-item">
              <label class="pull-left">Mobile</label>
              <span class="pull-right">+63012 3456 789</span>
            </li>
            <li class="list-group-item">
              <label class="pull-left">Social</label>
              <div class="social-icons pull-right">
                <a href="#"><i class="fa fa-facebook-official"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
              </div>
            </li>
          </ul>
        </div><!-- leftpanel-userinfo -->

        <ul class="nav nav-tabs nav-justified nav-sidebar">
          <li class="tooltips active" data-toggle="tooltip" title="Main Menu"><a data-toggle="tab" data-target="#mainmenu"><i class="tooltips fa fa-ellipsis-h"></i></a></li>
          <li class="tooltips unread" data-toggle="tooltip" title="Check Mail"><a data-toggle="tab" data-target="#emailmenu"><i class="tooltips fa fa-envelope"></i></a></li>
          <li class="tooltips" data-toggle="tooltip" title="Contacts"><a data-toggle="tab" data-target="#contactmenu"><i class="fa fa-user"></i></a></li>
          <li class="tooltips" data-toggle="tooltip" title="Settings"><a data-toggle="tab" data-target="#settings"><i class="fa fa-cog"></i></a></li>
          <li class="tooltips" data-toggle="tooltip" title="Log Out"><a href="signin.html"><i class="fa fa-sign-out"></i></a></li>
        </ul>

        <div class="tab-content">

          <!-- ################# MAIN MENU ################### -->

          <div class="tab-pane active" id="mainmenu">
            <h5 class="sidebar-title">Favorites</h5>
            <ul class="nav nav-pills nav-stacked nav-quirk">
              <li><a href="index.html"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
              <li><a href="widgets.html"><span class="badge pull-right">10+</span><i class="fa fa-cube"></i> <span>Widgets</span></a></li>
              <li><a href="maps.html"><i class="fa fa-map-marker"></i> <span>Maps</span></a></li>
            </ul>

            <h5 class="sidebar-title">Main Menu</h5>
            <ul class="nav nav-pills nav-stacked nav-quirk">
              <li class="nav-parent">
                <a href="#"><i class="fa fa-check-square"></i> <span>Forms</span></a>
                <ul class="children">
                  <li><a href="general-forms.html">Form Elements</a></li>
                  <li><a href="form-validation.html">Form Validation</a></li>
                  <li><a href="form-wizards.html">Form Wizards</a></li>
                  <li><a href="wysiwyg.html">Text Editor</a></li>
                </ul>
              </li>
              <li class="nav-parent"><a href="#"><i class="fa fa-suitcase"></i> <span>UI Elements</span></a>
                <ul class="children">
                  <li><a href="buttons.html">Buttons</a></li>
                  <li><a href="icons.html">Icons</a></li>
                  <li><a href="typography.html">Typography</a></li>
                  <li><a href="alerts.html">Alerts &amp; Notifications</a></li>
                  <li><a href="tabs-accordions.html">Tabs &amp; Accordions</a></li>
                  <li><a href="sliders.html">Sliders</a></li>
                  <li><a href="graphs.html">Graphs &amp; Charts</a></li>
                  <li><a href="panels.html">Panels</a></li>
                  <li><a href="extras.html">Extras</a></li>
                </ul>
              </li>
              <li class="nav-parent"><a href="#"><i class="fa fa-th-list"></i> <span>Tables</span></a>
                <ul class="children">
                  <li><a href="basic-tables.html">Basic Tables</a></li>
                  <li><a href="data-tables.html">Data Tables</a></li>
                </ul>
              </li>
              <li class="nav-parent active"><a href="#"><i class="fa fa-file-text"></i> <span>Pages</span></a>
                <ul class="children">
                  <li class="active"><a href="asset-manager.html">Asset Manager</a></li>
                  <li><a href="people-directory.html">People Directory</a></li>
                  <li><a href="timeline.html">Timeline</a></li>
                  <li><a href="profile.html">Profile</a></li>
                  <li><a href="blank.html">Blank Page</a></li>
                  <li><a href="notfound.html">404 Page</a></li>
                  <li><a href="signin.html">Sign In</a></li>
                  <li><a href="signup.html">Sign Up</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- tab-pane -->

          <!-- ######################## EMAIL MENU ##################### -->

          <div class="tab-pane" id="emailmenu">
            <div class="sidebar-btn-wrapper">
              <a href="compose.html" class="btn btn-danger btn-block">Compose</a>
            </div>

            <h5 class="sidebar-title">Mailboxes</h5>
            <ul class="nav nav-pills nav-stacked nav-quirk nav-mail">
              <li><a href="email.html"><i class="fa fa-inbox"></i> <span>Inbox (3)</span></a></li>
              <li><a href="email.html"><i class="fa fa-pencil"></i> <span>Draft (2)</span></a></li>
              <li><a href="email.html"><i class="fa fa-paper-plane"></i> <span>Sent</span></a></li>
            </ul>

            <h5 class="sidebar-title">Tags</h5>
            <ul class="nav nav-pills nav-stacked nav-quirk nav-label">
              <li><a href="#"><i class="fa fa-tags primary"></i> <span>Communication</span></a></li>
              <li><a href="#"><i class="fa fa-tags success"></i> <span>Updates</span></a></li>
              <li><a href="#"><i class="fa fa-tags warning"></i> <span>Promotions</span></a></li>
              <li><a href="#"><i class="fa fa-tags danger"></i> <span>Social</span></a></li>
            </ul>
          </div><!-- tab-pane -->

          <!-- ################### CONTACT LIST ################### -->

          <div class="tab-pane" id="contactmenu">
            <div class="input-group input-search-contact">
              <input type="text" class="form-control" placeholder="Search contact">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
              </span>
            </div>
            <h5 class="sidebar-title">My Contacts</h5>
            <ul class="media-list media-list-contacts">
              <li class="media">
                <a href="#">
                  <div class="media-left">
                    <img class="media-object img-circle" src="../images/photos/user1.png" alt="">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Christina R. Hill</h4>
                    <span><i class="fa fa-phone"></i> 386-752-1860</span>
                  </div>
                </a>
              </li>
              <li class="media">
                <a href="#">
                  <div class="media-left">
                    <img class="media-object img-circle" src="../images/photos/user2.png" alt="">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Floyd M. Romero</h4>
                    <span><i class="fa fa-mobile"></i> +1614-650-8281</span>
                  </div>
                </a>
              </li>
              <li class="media">
                <a href="#">
                  <div class="media-left">
                    <img class="media-object img-circle" src="../images/photos/user3.png" alt="">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Jennie S. Gray</h4>
                    <span><i class="fa fa-phone"></i> 310-757-8444</span>
                  </div>
                </a>
              </li>
              <li class="media">
                <a href="#">
                  <div class="media-left">
                    <img class="media-object img-circle" src="../images/photos/user4.png" alt="">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Alia J. Locher</h4>
                    <span><i class="fa fa-mobile"></i> +1517-386-0059</span>
                  </div>
                </a>
              </li>
              <li class="media">
                <a href="#">
                  <div class="media-left">
                    <img class="media-object img-circle" src="../images/photos/user5.png" alt="">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Nicholas T. Hinkle</h4>
                    <span><i class="fa fa-skype"></i> nicholas.hinkle</span>
                  </div>
                </a>
              </li>
              <li class="media">
                <a href="#">
                  <div class="media-left">
                    <img class="media-object img-circle" src="../images/photos/user6.png" alt="">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Jamie W. Bradford</h4>
                    <span><i class="fa fa-phone"></i> 225-270-2425</span>
                  </div>
                </a>
              </li>
              <li class="media">
                <a href="#">
                  <div class="media-left">
                    <img class="media-object img-circle" src="../images/photos/user7.png" alt="">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Pamela J. Stump</h4>
                    <span><i class="fa fa-mobile"></i> +1773-879-2491</span>
                  </div>
                </a>
              </li>
              <li class="media">
                <a href="#">
                  <div class="media-left">
                    <img class="media-object img-circle" src="../images/photos/user8.png" alt="">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Refugio C. Burgess</h4>
                    <span><i class="fa fa-mobile"></i> +1660-627-7184</span>
                  </div>
                </a>
              </li>
              <li class="media">
                <a href="#">
                  <div class="media-left">
                    <img class="media-object img-circle" src="../images/photos/user9.png" alt="">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Ashley T. Brewington</h4>
                    <span><i class="fa fa-skype"></i> ashley.brewington</span>
                  </div>
                </a>
              </li>
              <li class="media">
                <a href="#">
                  <div class="media-left">
                    <img class="media-object img-circle" src="../images/photos/user10.png" alt="">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Roberta F. Horn</h4>
                    <span><i class="fa fa-phone"></i> 716-630-0132</span>
                  </div>
                </a>
              </li>
            </ul>
          </div><!-- tab-pane -->

          <!-- #################### SETTINGS ################### -->

          <div class="tab-pane" id="settings">
            <h5 class="sidebar-title">General Settings</h5>
            <ul class="list-group list-group-settings">
              <li class="list-group-item">
                <h5>Daily Newsletter</h5>
                <small>Get notified when someone else is trying to access your account.</small>
                <div class="toggle-wrapper">
                  <div class="leftpanel-toggle toggle-light success"></div>
                </div>
              </li>
              <li class="list-group-item">
                <h5>Call Phones</h5>
                <small>Make calls to friends and family right from your account.</small>
                <div class="toggle-wrapper">
                  <div class="leftpanel-toggle-off toggle-light success"></div>
                </div>
              </li>
            </ul>
            <h5 class="sidebar-title">Security Settings</h5>
            <ul class="list-group list-group-settings">
              <li class="list-group-item">
                <h5>Login Notifications</h5>
                <small>Get notified when someone else is trying to access your account.</small>
                <div class="toggle-wrapper">
                  <div class="leftpanel-toggle toggle-light success"></div>
                </div>
              </li>
              <li class="list-group-item">
                <h5>Phone Approvals</h5>
                <small>Use your phone when login as an extra layer of security.</small>
                <div class="toggle-wrapper">
                  <div class="leftpanel-toggle toggle-light success"></div>
                </div>
              </li>
            </ul>
          </div><!-- tab-pane -->


        </div><!-- tab-content -->

      </div><!-- leftpanelinner -->
    </div><!-- leftpanel -->

    <div class="mainpanel">

      <div class="contentpanel">

        <ol class="breadcrumb breadcrumb-quirk">
          <li><a href="index.html"><i class="fa fa-home mr5"></i> Home</a></li>
          <li><a href="buttons.html">Pages</a></li>
          <li class="active">Asset Manager</li>
        </ol>


      <div class="row">
        <div class="col-sm-8 col-md-9 col-lg-10">
          <div class="well well-asset-options clearfix">
            <div class="btn-toolbar btn-toolbar-media-manager pull-left" role="toolbar">
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-default"><i class="fa fa-share"></i> Share</button>
                <button type="button" class="btn btn-default"><i class="fa fa-download"></i> Download</button>
              </div>
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-default disabled"><i class="fa fa-pencil"></i> Edit</button>
                <button type="button" class="btn btn-default disabled"><i class="fa fa-trash"></i> Delete</button>
              </div>
            </div><!-- btn-toolbar -->

            <div class="btn-group pull-right" data-toggle="buttons">
              <label class="btn btn-default-active active">
                <input type="checkbox" checked> All
              </label>
              <label class="btn btn-default-active">
                <input type="checkbox"> Images
              </label>
              <label class="btn btn-default-active">
                <input type="checkbox"> Videos
              </label>
              <label class="btn btn-default-active">
                <input type="checkbox"> Documents
              </label>
              <label class="btn btn-default-active">
                <input type="checkbox"> Music
              </label>
            </div>
          </div>

          <div class="row filemanager">

            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 audio">
              <div class="thmb">
                <label class="ckbox">
                  <input type="checkbox"><span></span>
                </label>
                <div class="btn-group fm-group">
                  <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu pull-right fm-menu" role="menu">
                    <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                    <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                    <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                  </ul>
                </div><!-- btn-group -->
                <div class="thmb-prev">
                  <img src="../images/mp3.png" class="img-responsive" alt="" />
                </div>
                <h5 class="fm-title"><a href="#">Happy.mp3</a></h5>
                <small class="text-muted">Added: July 1, 2015</small>
              </div><!-- thmb -->
            </div><!-- col-xs-6 -->

            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 document">
              <div class="thmb">
                <label class="ckbox">
                  <input type="checkbox"><span></span>
                </label>
                <div class="btn-group fm-group">
                  <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu pull-right fm-menu" role="menu">
                    <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                    <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                    <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                  </ul>
                </div><!-- btn-group -->
                <div class="thmb-prev">
                  <img src="../images/doc.png" class="img-responsive" alt="" />
                </div>
                <h5 class="fm-title"><a href="#">MyDocuments.doc</a></h5>
                <small class="text-muted">Added: July 1, 2015</small>
              </div><!-- thmb -->
            </div><!-- col-xs-6 -->

            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 image">
              <div class="thmb">
                <label class="ckbox">
                  <input type="checkbox"><span></span>
                </label>
                <div class="btn-group fm-group">
                  <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu pull-right fm-menu" role="menu">
                    <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                    <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                    <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                  </ul>
                </div><!-- btn-group -->
                <div class="thmb-prev">
                  <a href="#">
                    <img src="../images/png.png" class="img-responsive" alt="" />
                  </a>
                </div>
                <h5 class="fm-title"><a href="#">GreatCity.png</a></h5>
                <small class="text-muted">Added: June 30, 2015</small>
              </div><!-- thmb -->
            </div><!-- col-xs-6 -->

            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 video">
              <div class="thmb">
                <label class="ckbox">
                  <input type="checkbox"><span></span>
                </label>
                <div class="btn-group fm-group">
                  <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu pull-right fm-menu" role="menu">
                    <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                    <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                    <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                    <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                  </ul>
                </div><!-- btn-group -->
                <div class="thmb-prev">
                  <img src="../images/mp4.png" class="img-responsive" alt="" />
                </div>
                <h5 class="fm-title"><a href="#">InTheSea.mp4</a></h5>
                <small class="text-muted">Added: June 30, 2015</small>
              </div><!-- thmb -->
            </div><!-- col-xs-6 -->

            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 document">
              <div class="thmb">
                <label class="ckbox">
                  <input type="checkbox"><span></span>
                </label>
                <div class="btn-group fm-group">
                    <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu pull-right fm-menu" role="menu">
                      <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                      <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                      <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                      <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                    </ul>
                </div><!-- btn-group -->
                <div class="thmb-prev">
                  <img src="../images/doc.png" class="img-responsive" alt="" />
                </div>
                <h5 class="fm-title"><a href="#">MyDocuments.doc</a></h5>
                <small class="text-muted">Added: Jan 03, 2015</small>
              </div><!-- thmb -->
            </div><!-- col-xs-6 -->

            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 image">
              <div class="thmb">
                <label class="ckbox">
                  <input type="checkbox"><span></span>
                </label>
                <div class="btn-group fm-group">
                    <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu pull-right fm-menu" role="menu">
                      <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                      <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                      <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                      <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                    </ul>
                </div><!-- btn-group -->
                <div class="thmb-prev">
                  <a href="#">
                    <img src="../images/png.png" class="img-responsive" alt="" />
                  </a>
                </div>
                <h5 class="fm-title"><a href="#">Vegetarian.png</a></h5>
                <small class="text-muted">Added: Jan 02, 2015</small>
              </div><!-- thmb -->
            </div><!-- col-xs-6 -->

            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 video">
              <div class="thmb">
                <label class="ckbox">
                  <input type="checkbox"><span></span>
                </label>
                <div class="btn-group fm-group">
                    <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu pull-right fm-menu" role="menu">
                      <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                      <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                      <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                      <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                    </ul>
                </div><!-- btn-group -->
                <div class="thmb-prev">
                  <img src="../images/mp4.png" class="img-responsive" alt="" />
                </div>
                <h5 class="fm-title"><a href="#">DogAnimation.mp4</a></h5>
                <small class="text-muted">Added: Jan 02, 2015</small>
              </div><!-- thmb -->
            </div><!-- col-xs-6 -->

            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 audio">
              <div class="thmb">
                <label class="ckbox">
                  <input type="checkbox"><span></span>
                </label>
                <div class="btn-group fm-group">
                    <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu pull-right fm-menu" role="menu">
                      <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                      <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                      <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                      <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                    </ul>
                </div><!-- btn-group -->
                <div class="thmb-prev">
                  <img src="../images/mp3.png" class="img-responsive" alt="" />
                </div>
                <h5 class="fm-title"><a href="#">WreckingBall.mp3</a></h5>
                <small class="text-muted">Added: Jan 01, 2015</small>
              </div><!-- thmb -->
            </div><!-- col-xs-6 -->

            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 image">
              <div class="thmb">
                <label class="ckbox">
                  <input type="checkbox"><span></span>
                </label>
                <div class="btn-group fm-group">
                    <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu pull-right fm-menu" role="menu">
                      <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                      <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                      <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                      <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                    </ul>
                </div><!-- btn-group -->
                <div class="thmb-prev">
                  <a href="#">
                    <img src="../images/png.png" class="img-responsive" alt="" />
                  </a>
                </div>
                <h5 class="fm-title"><a href="#">MyFirstArt.png</a></h5>
                <small class="text-muted">Added: Jan 01, 2015</small>
              </div><!-- thmb -->
            </div><!-- col-xs-6 -->

            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 document">
              <div class="thmb">
                <label class="ckbox">
                  <input type="checkbox"><span></span>
                </label>
                <div class="btn-group fm-group">
                    <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu pull-right fm-menu" role="menu">
                      <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                      <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                      <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                      <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                    </ul>
                </div><!-- btn-group -->
                <div class="thmb-prev">
                  <img src="../images/docx.png" class="img-responsive" alt="" />
                </div>
                <h5 class="fm-title"><a href="#">MyResume.docx</a></h5>
                <small class="text-muted">Added: Jan 01, 2015</small>
              </div><!-- thmb -->
            </div><!-- col-xs-6 -->

            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 video">
              <div class="thmb">
                <label class="ckbox">
                  <input type="checkbox"><span></span>
                </label>
                <div class="btn-group fm-group">
                    <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu pull-right fm-menu" role="menu">
                      <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                      <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                      <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                      <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                    </ul>
                </div><!-- btn-group -->
                <div class="thmb-prev">
                  <img src="../images/mp4.png" class="img-responsive" alt="" />
                </div>
                <h5 class="fm-title"><a href="#">MyFirstMovie.mp4</a></h5>
                <small class="text-muted">Added: Jan 01, 2015</small>
              </div><!-- thmb -->
            </div><!-- col-xs-6 -->

            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 image">
              <div class="thmb">
                <label class="ckbox">
                  <input type="checkbox"><span></span>
                </label>
                <div class="btn-group fm-group">
                    <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu pull-right fm-menu" role="menu">
                      <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                      <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                      <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                      <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                    </ul>
                </div><!-- btn-group -->
                <div class="thmb-prev">
                  <a href="#">
                    <img src="../images/png.png" class="img-responsive" alt="" />
                  </a>
                </div>
                <h5 class="fm-title"><a href="#">MeAndFriends.png</a></h5>
                <small class="text-muted">Added: Jan 01, 2015</small>
              </div><!-- thmb -->
            </div><!-- col-xs-6 -->

            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 audio">
              <div class="thmb">
                <label class="ckbox">
                  <input type="checkbox"><span></span>
                </label>
                <div class="btn-group fm-group">
                    <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu pull-right fm-menu" role="menu">
                      <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                      <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                      <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                      <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                    </ul>
                </div><!-- btn-group -->
                <div class="thmb-prev">
                  <img src="../images/mp3.png" class="img-responsive" alt="" />
                </div>
                <h5 class="fm-title"><a href="#">IWillSurvive.mp3</a></h5>
                <small class="text-muted">Added: Dec 31, 2014</small>
              </div><!-- thmb -->
            </div><!-- col-xs-6 -->

            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 document">
              <div class="thmb">
                <label class="ckbox">
                  <input type="checkbox"><span></span>
                </label>
                <div class="btn-group fm-group">
                    <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu pull-right fm-menu" role="menu">
                      <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                      <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                      <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                      <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                    </ul>
                </div><!-- btn-group -->
                <div class="thmb-prev">
                  <img src="../images/doc.png" class="img-responsive" alt="" />
                </div>
                <h5 class="fm-title"><a href="#">MyDocuments.doc</a></h5>
                <small class="text-muted">Added: Dec 31, 2014</small>
              </div><!-- thmb -->
            </div><!-- col-xs-6 -->

            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 image">
              <div class="thmb">
                <label class="ckbox">
                  <input type="checkbox"><span></span>
                </label>
                <div class="btn-group fm-group">
                    <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu pull-right fm-menu" role="menu">
                      <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                      <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                      <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                      <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                    </ul>
                </div><!-- btn-group -->
                <div class="thmb-prev">
                  <a href="#">
                    <img src="../images/png.png" class="img-responsive" alt="" />
                  </a>
                </div>
                <h5 class="fm-title"><a href="#">GreatCity.png</a></h5>
                <small class="text-muted">Added: Dec 30, 2014</small>
              </div><!-- thmb -->
            </div><!-- col-xs-6 -->

            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 video">
              <div class="thmb">
                <label class="ckbox">
                  <input type="checkbox"><span></span>
                </label>
                <div class="btn-group fm-group">
                    <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu pull-right fm-menu" role="menu">
                      <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                      <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                      <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                      <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                    </ul>
                </div><!-- btn-group -->
                <div class="thmb-prev">
                  <img src="../images/mp4.png" class="img-responsive" alt="" />
                </div>
                <h5 class="fm-title"><a href="#">InTheSea.mp4</a></h5>
                <small class="text-muted">Added: Dec 30, 2014</small>
              </div><!-- thmb -->
            </div><!-- col-xs-6 -->

          </div><!-- row -->
        </div><!-- col-sm-9 -->
        <div class="col-sm-4 col-md-3 col-lg-2">
          <div class="fm-sidebar">

            <button class="btn btn-danger btn-quirk btn-block mb20">Upload Files</button>

            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title">Folders</h4>
              </div>
              <div class="panel-body">
                <ul class="folder-list">
                  <li><a href="#"><i class="fa fa-folder-open"></i> My Pictures</a></li>
                  <li><a href="#"><i class="fa fa-folder-open"></i> Facebook Photos</a></li>
                  <li><a href="#"><i class="fa fa-folder-open"></i> My Collection</a></li>
                  <li><a href="#"><i class="fa fa-folder-open"></i> Illustrations</a></li>
                  <li><a href="#"><i class="fa fa-folder-open"></i> TV Series</a></li>
                  <li><a href="#"><i class="fa fa-folder-open"></i> Downloaded Movies</a></li>
                  <li><a href="#"><i class="fa fa-folder-open"></i> E-book</a></li>
                </ul>
              </div>
            </div>

            <br>

            <h4 class="panel-title mb20">Tags</h4>
            <ul class="tag-list">
              <li><a href="#">Animation</a></li>
              <li><a href="#">Design</a></li>
              <li><a href="#">Trailer</a></li>
              <li><a href="#">Short Film</a></li>
              <li><a href="#">Dubstep</a></li>
              <li><a href="#">Soundtrack</a></li>
              <li><a href="#">Photography</a></li>
              <li><a href="#">Macro</a></li>
              <li><a href="#">Tuturials</a></li>
              <li><a href="#">Documentation</a></li>
            </ul>

            <div class="mb30 clearfix"></div>

            <h4 class="panel-title mb10">Credit</h4>
            <small class="text-muted">Icons by <a href="https://www.iconfinder.com/iconsets/hawcons">Hawcons</a></small>

          </div>
        </div><!-- col-sm-3 -->
      </div>
    </div>

  </div><!-- mainpanel -->

</section>

<script src="<?php echo base_url();?>assets/lib/jquery/jquery.js"></script>
<script src="<?php echo base_url();?>assets/lib/jquery-ui/jquery-ui.js"></script>
<script src="<?php echo base_url();?>assets/lib/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/lib/jquery-toggles/toggles.js"></script>

<script src="../js/quirk.js"></script>
<script>
  jQuery(document).ready(function(){

    'use strict';

    jQuery('.thmb').hover(function(){
      var t = jQuery(this);
      t.find('.ckbox').show();
      t.find('.fm-group').show();
    }, function() {
      var t = jQuery(this);
      if(!t.closest('.thmb').hasClass('checked')) {
        t.find('.ckbox').hide();
        t.find('.fm-group').hide();
      }
    });

    jQuery('.ckbox').each(function(){
      var t = jQuery(this);
      var parent = t.parent();
      if(t.find('input').is(':checked')) {
        t.show();
        parent.find('.fm-group').show();
        parent.addClass('checked');
      }
    });


    jQuery('.ckbox').click(function(){
      var t = jQuery(this);
      if(!t.find('input').is(':checked')) {
        t.closest('.thmb').removeClass('checked');
        enable_itemopt(false);
      } else {
        t.closest('.thmb').addClass('checked');
        enable_itemopt(true);
      }
    });

    jQuery('#selectall').click(function(){
      if(jQuery(this).is(':checked')) {
        jQuery('.thmb').each(function(){
          jQuery(this).find('input').attr('checked',true);
          jQuery(this).addClass('checked');
          jQuery(this).find('.ckbox, .fm-group').show();
        });
        enable_itemopt(true);
      } else {
        jQuery('.thmb').each(function(){
          jQuery(this).find('input').attr('checked',false);
          jQuery(this).removeClass('checked');
          jQuery(this).find('.ckbox, .fm-group').hide();
        });
        enable_itemopt(false);
      }
    });

    function enable_itemopt(enable) {
      if(enable) {
        jQuery('.itemopt').removeClass('disabled');
      } else {

        // check all thumbs if no remaining checks
        // before we can disabled the options
        var ch = false;
        jQuery('.thmb').each(function(){
          if(jQuery(this).hasClass('checked'))
            ch = true;
        });

        if(!ch)
          jQuery('.itemopt').addClass('disabled');
      }
    }

    jQuery("a[data-rel^='prettyPhoto']").prettyPhoto();

  });

</script>
