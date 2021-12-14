<?php
$objResult_header    = mysqli_query($mysqli,"SELECT * from  tbl_admin WHERE `adminid` = '1'");
$Fetch_header        = mysqli_fetch_array($objResult_header);
?> 
<header id="topnav">
<!-- Topbar Start -->  
<div class="navbar-custom">
<div class="container-fluid">
<ul class="list-unstyled topnav-menu float-right mb-0">
<li class="dropdown notification-list">
<!-- Mobile menu toggle-->
<a class="navbar-toggle nav-link">
<div class="lines"> <span></span> <span></span> <span></span> </div>
</a>
<!-- End mobile menu toggle-->
</li>
<li class="d-none d-sm-block">
<form class="app-search">
<div class="app-search-box">
<div class="input-group">
<input type="text" class="form-control" placeholder="Search...">
<div class="input-group-append">
<button class="btn" type="submit"> <i class="fe-search"></i> </button>
</div>
</div>
</div>
</form>
</li>
<li class="dropdown notification-list"> <a class="nav-link dropdown-toggle waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"> <i class="fe-bell noti-icon"></i> <span class="badge badge-danger rounded-circle noti-icon-badge">0</span> </a>
<div class="dropdown-menu dropdown-menu-right dropdown-lg">
<!-- item-->
<div class="dropdown-item noti-title">
<h5 class="m-0"> <span class="float-right"> <a href="" class="text-dark"> <small>Clear All</small> </a> </span> No Notification Found </h5>
</div>
<div class="slimscroll noti-scroll">
<!-- item-->
<!--<a href="javascript:void(0);" class="dropdown-item notify-item active">
<div class="notify-icon"> <img src="assets/images/users/user-1.jpg" class="img-fluid rounded-circle" alt="" /> </div>
<p class="notify-details">Cristina Pride</p>
<p class="text-muted mb-0 user-msg"> <small>Hi, How are you? What about our next meeting</small> </p>
</a>

<a href="javascript:void(0);" class="dropdown-item notify-item">
<div class="notify-icon bg-primary"> <i class="mdi mdi-comment-account-outline"></i> </div>
<p class="notify-details">Caleb Flakelar commented on Admin <small class="text-muted">1 min ago</small> </p>
</a>

<a href="javascript:void(0);" class="dropdown-item notify-item">
<div class="notify-icon"> <img src="assets/images/users/user-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
<p class="notify-details">Karen Robinson</p>
<p class="text-muted mb-0 user-msg"> <small>Wow ! this admin looks good and awesome design</small> </p>
</a>

<a href="javascript:void(0);" class="dropdown-item notify-item">
<div class="notify-icon bg-warning"> <i class="mdi mdi-account-plus"></i> </div>
<p class="notify-details">New user registered. <small class="text-muted">5 hours ago</small> </p>
</a>

<a href="javascript:void(0);" class="dropdown-item notify-item">
<div class="notify-icon bg-info"> <i class="mdi mdi-comment-account-outline"></i> </div>
<p class="notify-details">Caleb Flakelar commented on Admin <small class="text-muted">4 days ago</small> </p>
</a>

<a href="javascript:void(0);" class="dropdown-item notify-item">
<div class="notify-icon bg-secondary"> <i class="mdi mdi-heart"></i> </div>
<p class="notify-details">Carlos Crouch liked <b>Admin</b> <small class="text-muted">13 days ago</small> </p>
</a> </div>

<a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all"> View all <i class="fi-arrow-right"></i> </a> --></div>
</li>
<li class="dropdown notification-list"> <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
<?php if($Fetch_header['varphoto']=="") { ?>
Admin
<?php } else { ?>
Admin
<?php } ?>
<span class="pro-user-name ml-1">  <i class="mdi mdi-chevron-down"></i> </span>

</a>
<div class="dropdown-menu dropdown-menu-right profile-dropdown ">
<!-- item-->
<div class="dropdown-header noti-title">
<h6 class="text-overflow m-0">Welcome !</h6>
</div>
<!-- item-->
<a href="#" class="dropdown-item notify-item"> <i class="fe-user"></i> <span>My Account</span> </a>
<!-- item-->
<a href="changepassword.php" class="dropdown-item notify-item"> <i class="fe-settings"></i> <span>Change Password</span> </a>
<!-- item-->
<a href="javascript:void(0);" class="dropdown-item notify-item"> <i class="fe-lock"></i> <span>Lock Screen</span> </a>
<div class="dropdown-divider"></div>
<!-- item-->
<a href="logout.php" class="dropdown-item notify-item"> <i class="fe-log-out"></i> <span>Logout</span> </a> </div>
</li>
<li class="dropdown notification-list"> <a href="#" class="nav-link right-bar-toggle waves-effect"> <i class="fe-settings noti-icon"></i> </a> </li>
</ul>
<!-- LOGO -->
<div class="logo-box"> <a href="view_orders.php" class="logo text-center"> <span class="logo-lg"> <span style="font-size:32px; font-weight:bold;">T20 Crackers</span>
<!-- <span class="logo-lg-text-light">UBold</span> -->
</span> <span class="logo-sm">
<!-- <span class="logo-sm-text-dark">U</span> -->
<span style="font-size:32px; font-weight:bold;">T20 Crackers</span> </span> </a> </div>
<ul class="list-unstyled topnav-menu topnav-menu-left m-0">
<!--<li class="dropdown d-none d-lg-block"> <a class="nav-link dropdown-toggle waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"> Create New <i class="mdi mdi-chevron-down"></i> </a>
<div class="dropdown-menu">

<a href="pending_senderid.php" class="dropdown-item"> <i class="fe-briefcase mr-1"></i> <span>Pending Setup <span style="color:#FF0000"></span></span> </a>

<a href="voice_panel.php" class="dropdown-item"> <i class="fe-user mr-1"></i> <span>Voice Panel</span> </a>

<a href="https://www.mvaayoo.com/" target="_blank" class="dropdown-item"> <i class="fe-bar-chart-line- mr-1"></i> <span>SMS Panel</span> </a>

<a href="activated_senderid.php" class="dropdown-item"> <i class="fe-settings mr-1"></i> <span>Setup History</span> </a>
<div class="dropdown-divider"></div>

<a href="javascript:void(0);" class="dropdown-item"> <i class="fe-headphones mr-1"></i> <span>Help & Support</span> </a> </div>
</li>-->
<!--<li class="dropdown dropdown-mega d-none d-lg-block">
<a class="nav-link dropdown-toggle waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
Mega Menu
<i class="mdi mdi-chevron-down"></i> 
</a>
<div class="dropdown-menu dropdown-megamenu">
<div class="row">
<div class="col-sm-8">

<div class="row">
<div class="col-md-4">
<h5 class="text-dark mt-0">UI Components</h5>
<ul class="list-unstyled megamenu-list">
<li>
<a href="javascript:void(0);">Widgets</a>
</li>
<li>
<a href="javascript:void(0);">Nestable List</a>
</li>
<li>
<a href="javascript:void(0);">Range Sliders</a>
</li>
<li>
<a href="javascript:void(0);">Masonry Items</a>
</li>
<li>
<a href="javascript:void(0);">Sweet Alerts</a>
</li>
<li>
<a href="javascript:void(0);">Treeview Page</a>
</li>
<li>
<a href="javascript:void(0);">Tour Page</a>
</li>
</ul>
</div>

<div class="col-md-4">
<h5 class="text-dark mt-0">Applications</h5>
<ul class="list-unstyled megamenu-list">
<li>
<a href="javascript:void(0);">eCommerce Pages</a>
</li>
<li>
<a href="javascript:void(0);">CRM Pages</a>
</li>
<li>
<a href="javascript:void(0);">Email</a>
</li>
<li>
<a href="javascript:void(0);">Calendar</a>
</li>
<li>
<a href="javascript:void(0);">Team Contacts</a>
</li>
<li>
<a href="javascript:void(0);">Task Board</a>
</li>
<li>
<a href="javascript:void(0);">Email Templates</a>
</li>
</ul>
</div>

<div class="col-md-4">
<h5 class="text-dark mt-0">Extra Pages</h5>
<ul class="list-unstyled megamenu-list">
<li>
<a href="javascript:void(0);">Left Sidebar with User</a>
</li>
<li>
<a href="javascript:void(0);">Menu Collapsed</a>
</li>
<li>
<a href="javascript:void(0);">Small Left Sidebar</a>
</li>
<li>
<a href="javascript:void(0);">New Header Style</a>
</li>
<li>
<a href="javascript:void(0);">Search Result</a>
</li>
<li>
<a href="javascript:void(0);">Gallery Pages</a>
</li>
<li>
<a href="javascript:void(0);">Maintenance & Coming Soon</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="text-center mt-3">
<h3 class="text-dark">Special Discount Sale!</h3>
<h4>Save up to 70% off.</h4>
<button class="btn btn-primary btn-rounded mt-3">Download Now</button>
</div>
</div>
</div>

</div>
</li>-->
</ul>
</div>
<!-- end container-fluid-->
</div>
<!-- end Topbar -->
<div class="topbar-menu">
<div class="container-fluid">
<div id="navigation">
<!-- Navigation Menu-->
<ul class="navigation-menu">
<li class="has-submenu"> <a href="view_orders.php"> <i class="fe-package"></i>Orders 
<div class="arrow-down"></div>
</a>
<ul class="submenu">
<li> <a href="#"></a> </li>
</ul>
<ul class="submenu megamenu">
<li>
<ul>
<li>
<a href="view_orders.php">View Orders</a>
</li>
</ul>
</li>
</ul>
</li>

<!--<li class="has-submenu"> <a href="#"> <i class="fe-layers"></i>Staff Panel
<div class="arrow-down"></div>
</a>
<ul class="submenu">
<li> <a href="#"></a> </li>
</ul>
<ul class="submenu megamenu">
<li>
<ul>
<li>
<a href="promocode.php">Add Staff</a>
</li>
<li>
<a href="staffstatus.php">View Staff Status</a>
</li>
</ul>
</li>
</ul>
</li>

<li class="has-submenu"> <a href="#"> <i class="fe-briefcase"></i>Enquiries
            <div class="arrow-down"></div>
            </a>
            <ul class="submenu">
              <li> <a href="#"></a> </li>
            </ul>
            <ul class="submenu megamenu">
              <li>
                <ul>
                  <li> <a href="newenquiries.php">New Enquiries</a> </li>
				   <li> <a href="assignedenquiries.php">Assigned Enquiries</a> </li>
                  <li> <a href="postponedenquiries.php">Postponed Enquiries</a> </li>
                  <li> <a href="ringingenquiries.php">Ringing Enquiries</a> </li>
                  <li> <a href="notinterestedenquiries.php">Not Interested Enquiries</a> </li>
				  <li> <a href="signedenquiries.php">Signed Enquiries</a> </li>
                </ul>
              </li>
            </ul>
          </li>

<li class="has-submenu">
<a href="#"><i class="fe-sidebar"></i>Plan <div class="arrow-down"></div></a>
<ul class="submenu">
<li>
<a href="addplan.php">Add Plan</a>
</li>
<li>
<a href="viewplans.php">View Plans</a>
</li>
</ul>
</li>
<li class="has-submenu">
<a href="#"><i class="fe-briefcase"></i>Users<div class="arrow-down"></div></a>
<ul class="submenu">
<li>
<a href="adduser.php">Add User</a>
</li>
<li>
<a href="viewusers.php">View Users</a>
</li>
</ul>
</li>

<li class="has-submenu">
<a href="#"><i class="fe-briefcase"></i>Samples DB <div class="arrow-down"></div></a>
<ul class="submenu">
<li>
<a href="addsample.php">Add Sample</a>
</li>
<li>
<a href="viewsamples.php">View Samples</a>
</li>
</ul>
</li>-->

<!--<li class="has-submenu">
<a href="#">
<i class="fe-layers"></i>Components <div class="arrow-down"></div></a>
<ul class="submenu">
<li class="has-submenu">
<a href="#">Forms <div class="arrow-down"></div></a>
<ul class="submenu">
<li>
<a href="forms-elements.html">General Elements</a>
</li>
<li>
<a href="forms-advanced.html">Advanced</a>
</li>
<li>
<a href="forms-validation.html">Validation</a>
</li>
<li>
<a href="forms-pickers.html">Pickers</a>
</li>
<li>
<a href="forms-wizard.html">Wizard</a>
</li>
<li>
<a href="forms-masks.html">Masks</a>
</li>
<li>
<a href="forms-summernote.html">Summernote</a>
</li>
<li>
<a href="forms-quilljs.html">Quilljs Editor</a>
</li>
<li>
<a href="forms-file-uploads.html">File Uploads</a>
</li>
<li>
<a href="forms-x-editable.html">X Editable</a>
</li>
<li>
<a href="forms-image-crop.html">Image Crop</a>
</li>
</ul>
</li>
<li class="has-submenu">
<a href="#">Tables <div class="arrow-down"></div></a>
<ul class="submenu">
<li>
<a href="tables-basic.html">Basic Tables</a>
</li>
<li>
<a href="tables-datatables.html">Data Tables</a>
</li>
<li>
<a href="tables-editable.html">Editable Tables</a>
</li>
<li>
<a href="tables-responsive.html">Responsive Tables</a>
</li>
<li>
<a href="tables-footables.html">FooTable</a>
</li>
<li>
<a href="tables-bootstrap.html">Bootstrap Tables</a>
</li>
<li>
<a href="tables-tablesaw.html">Tablesaw Tables</a>
</li>
<li>
<a href="tables-jsgrid.html">JsGrid Tables</a>
</li>
</ul>
</li>
<li class="has-submenu">
<a href="#">Charts <div class="arrow-down"></div></a>
<ul class="submenu">
<li>
<a href="charts-flot.html">Flot Charts</a>
</li>
<li>
<a href="charts-morris.html">Morris Charts</a>
</li>
<li>
<a href="charts-chartjs.html">Chartjs Charts</a>
</li>
<li>
<a href="charts-peity.html">Peity Charts</a>
</li>
<li>
<a href="charts-chartist.html">Chartist Charts</a>
</li>
<li>
<a href="charts-c3.html">C3 Charts</a>
</li>
<li>
<a href="charts-sparklines.html">Sparklines Charts</a>
</li>
<li>
<a href="charts-knob.html">Jquery Knob Charts</a>
</li>
<li>
<a href="charts-ricksaw.html">Ricksaw Charts</a>
</li>
<li>
<a href="charts-just-gage.html">JustGage Charts</a>
</li>
</ul>
</li>
<li class="has-submenu">
<a href="#">Icons <div class="arrow-down"></div></a>
<ul class="submenu">
<li>
<a href="icons-feather.html">Feather Icons</a>
</li>
<li>
<a href="icons-mdi.html">Material Design Icons</a>
</li>
<li>
<a href="icons-dripicons.html">Dripicons</a>
</li>
<li>
<a href="icons-font-awesome.html">Font Awesome</a>
</li>
<li>
<a href="icons-themify.html">Themify</a>
</li>
<li>
<a href="icons-simple-line.html">Simple Line</a>
</li>
<li>
<a href="icons-weather.html">Weather</a>
</li>
</ul>
</li>
<li class="has-submenu">
<a href="#">Maps <div class="arrow-down"></div></a>
<ul class="submenu">
<li>
<a href="maps-google.html">Google Maps</a>
</li>
<li>
<a href="maps-vector.html">Vector Maps</a>
</li>
<li>
<a href="maps-mapael.html">Mapael Maps</a>
</li>
</ul>
</li>
</ul>
</li>-->
<!--<li class="has-submenu">
<a href="#"> <i class="fe-package"></i>Pages <div class="arrow-down"></div></a>
<ul class="submenu megamenu">
<li>
<ul>
<li>
<a href="pages-starter.html">Starter</a>
</li>
<li>
<a href="pages-login.html">Log In</a>
</li>
<li>
<a href="pages-register.html">Register</a>
</li>
<li>
<a href="pages-signin-signup.html">Signin - Signup</a>
</li>
<li>
<a href="pages-recoverpw.html">Recover Password</a>
</li>
<li>
<a href="pages-lock-screen.html">Lock Screen</a>
</li>
<li>
<a href="pages-logout.html">Logout</a>
</li>
</ul>
</li>
<li>
<ul>
<li>
<a href="pages-confirm-mail.html">Confirm Mail</a>
</li>
<li>
<a href="pages-404.html">Error 404</a>
</li>
<li>
<a href="pages-404-alt.html">Error 404-alt</a>
</li>
<li>
<a href="pages-500.html">Error 500</a>
</li>
<li>
<a href="extras-profile.html">Profile</a>
</li>
<li>
<a href="extras-timeline.html">Timeline</a>
</li>
<li>
<a href="extras-sitemap.html">Sitemap</a>
</li>
</ul>
</li>
<li>
<ul>
<li>
<a href="extras-invoice.html">Invoice</a>
</li>
<li>
<a href="extras-faqs.html">FAQs</a>
</li>
<li>
<a href="extras-search-results.html">Search Results</a>
</li>
<li>
<a href="extras-pricing.html">Pricing</a>
</li>
<li>
<a href="extras-maintenance.html">Maintenance</a>
</li>
<li>
<a href="extras-coming-soon.html">Coming Soon</a>
</li>
<li>
<a href="extras-gallery.html">Gallery</a>
</li>
</ul>
</li>
</ul>
</li>-->
<!--<li class="has-submenu">
<a href="#"> <i class="fe-sidebar"></i>Layouts <div class="arrow-down"></div></a>
<ul class="submenu">
<li>
<a href="layouts-topbar-dark.html">Topbar Dark</a>
</li>
<li>
<a href="layouts-menubar-light.html">Menubar Light</a>
</li>
<li>
<a href="layouts-center-menu.html">Center Menu</a>
</li>
<li>
<a href="layouts-topbar-gradient.html">Gradient Topbar</a>
</li>
<li>
<a href="layouts-menu-drop-dark.html">Menu Drop Dark</a>
</li>
<li>
<a href="layouts-preloader.html">Preloader</a>
</li>
<li>
<a href="layouts-normal-header.html">Unsticky Header</a>
</li>
<li>
<a href="layouts-boxed.html">Boxed</a>
</li>
</ul>
</li>-->
<li class="has-submenu"> <!--<a href="sms_reload.php"> <i class="fe-delete"></i>Reload Alert <span style="color: #FFFF00">(<span id="show6"></span>)</span>
</a>-->
<!--<ul class="submenu">
<li> <a href="activated_senderid.php">Activated Sender Id</a> </li>
<li> <a href="activated_smsmessage.php">Activated SMS Message</a> </li>
<li> <a href="activated_voicemessages.php">Activated Voice Messages</a> </li>
<li> <a href="completed_voicemessages.php" >Completed Voice Messages</a> </li>
<li> <a href="activated_advancedvoicemessages.php">Activated Advanced Voice Messages</a> </li>
<li> <a href="completed_advancedvoicemessages.php" >Completed Advanced Voice Messages</a> </li>
</ul>-->
</li>



<!--<li class="has-submenu"> <a href="#"> <i class="fe-briefcase"></i>Callcenter Staff
<div class="arrow-down"></div>
</a>
<ul class="submenu">
<li> <a href="staffstatus.php">Staff Status</a> </li>
<li> <a href="addtoper_incentives.php">Topers Incentives</a> </li>
<li> <a href="callcenter_staffattendance.php">Staff Attendance</a> </li>
<li> <a href="staff_profile.php">Staff Profile</a> </li>
<li> <a href="leave_request.php">Leave Request</a> </li>
</ul>
</li>-->
</ul>
<!-- End navigation menu -->
<div class="clearfix"></div>
</div>
<!-- end #navigation -->
</div>
<!-- end container -->
</div>
<!-- end navbar-custom -->
</header>

<div class="right-bar">
<div class="rightbar-title"> <a href="javascript:void(0);" class="right-bar-toggle float-right"> <i class="dripicons-cross noti-icon"></i> </a>
<h5 class="m-0 text-white">Settings</h5>
</div>
<div class="slimscroll-menu rightbar-content">
<!-- User box -->
<div class="user-box">
<div class="user-img"> <?php if($Fetch_header['varphoto']=="") { ?>
<img src="assets/images/favicon.png" alt="user-image" class="rounded-circle">
<?php } else { ?>
<img src="profile/<?php echo $Fetch_header['varphoto']; ?>" alt="user-image" class="rounded-circle img-fluid">
<?php } ?>
<a href="changepassword.php" class="user-edit"><i class="mdi mdi-pencil"></i></a> </div>
<h5><a href="changepassword.php"><?php echo $Fetch_header['mem_name']; ?></a> </h5>
<p class="text-muted mb-0"><small><?php echo $Fetch_header['mem_mobile_number']; ?></small></p>
</div>
<!-- Settings -->
<hr class="mt-0" />
<h5 class="pl-3">Basic Settings</h5>
<hr class="mb-0" />
<div class="p-3">
<div class="checkbox checkbox-primary mb-2">
<input id="Rcheckbox1" type="checkbox" checked>
<label for="Rcheckbox1"> Notifications </label>
</div>
<div class="checkbox checkbox-primary mb-2">
<input id="Rcheckbox2" type="checkbox" checked>
<label for="Rcheckbox2"> API Access </label>
</div>
<div class="checkbox checkbox-primary mb-2">
<input id="Rcheckbox3" type="checkbox">
<label for="Rcheckbox3"> Auto Updates </label>
</div>
<div class="checkbox checkbox-primary mb-2">
<input id="Rcheckbox4" type="checkbox" checked>
<label for="Rcheckbox4"> Online Status </label>
</div>
<div class="checkbox checkbox-primary mb-0">
<input id="Rcheckbox5" type="checkbox" checked>
<label for="Rcheckbox5"> Auto Payout </label>
</div>
</div>
<!-- Timeline -->
<hr class="mt-0" />
<h5 class="pl-3 pr-3">Messages <span class="float-right badge badge-pill badge-danger">0</span></h5>
<hr class="mb-0" />
<div class="p-3">
<div class="inbox-widget">
<div class="inbox-item">
<p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Current Login Date</a></p>
<p class="inbox-item-text"><?php echo $Fetch_header['login_date']; ?></p>
</div>
<div class="inbox-item">
<div class="inbox-item-img"></div>
<p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Last Login Date</a></p>
<p class="inbox-item-text"><?php echo $Fetch_header['lastlogin_date']; ?></p>
</div>
<!--<div class="inbox-item">
<div class="inbox-item-img"><img src="assets/images/users/user-2.jpg" class="rounded-circle" alt=""></div>
<p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
<p class="inbox-item-text">I've finished it! See you so...</p>
</div>
<div class="inbox-item">
<div class="inbox-item-img"><img src="assets/images/users/user-3.jpg" class="rounded-circle" alt=""></div>
<p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
<p class="inbox-item-text">This theme is awesome!</p>
</div>
<div class="inbox-item">
<div class="inbox-item-img"><img src="assets/images/users/user-4.jpg" class="rounded-circle" alt=""></div>
<p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
<p class="inbox-item-text">Nice to meet you</p>
</div>
<div class="inbox-item">
<div class="inbox-item-img"><img src="assets/images/users/user-5.jpg" class="rounded-circle" alt=""></div>
<p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
<p class="inbox-item-text">Hey! there I'm available...</p>
</div>
<div class="inbox-item">
<div class="inbox-item-img"><img src="assets/images/users/user-6.jpg" class="rounded-circle" alt=""></div>
<p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Adhamdannaway</a></p>
<p class="inbox-item-text">This theme is awesome!</p>
</div>-->
</div>
<!-- end inbox-widget -->
</div>
<!-- end .p-3-->
</div>
<!-- end slimscroll-menu-->
</div>