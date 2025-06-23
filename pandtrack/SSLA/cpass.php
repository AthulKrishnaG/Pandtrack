<!DOCTYPE html>
	<!--side Database start-->
	<?php
        include("dbconnection.php");
		include("session.php");
		$pagetitle = "Change Password";
    ?>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
   <title>Arrow -  <?php echo"$pagetitle"; ?></title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/selects/selectize.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/selects/selectize.default.css">
	<link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/sweetalert2.min.css">
    <!-- END: Vendor CSS-->
   

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/forms/selectize/selectize.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	 <!-- END Custom CSS-->
	<script>
	function functionbtnUpd() 
	{
		var newpass = document.getElementById("newpass");
		var cnfpass = document.getElementById("cnfpass");
		
				if(newpass.value == '' || cnfpass.value == '')
				{
					Swal.fire({
					  title: 'Enter Correct Values!',
					  animation: false,
					  customClass: 'animated shake',
					  confirmButtonClass: 'btn btn-primary',
					  buttonsStyling: false,
					})
					return false;
				}
				if(newpass.value != cnfpass.value) {
					newpass.value="";
					cnfpass.value="";
					newpass.focus();
					
					 Swal.fire({
					  title: 'Password are NOT Matching!',
					  animation: false,
					  customClass: 'animated shake',
					  confirmButtonClass: 'btn btn-primary',
					  buttonsStyling: false,
					})
					return false;
				} 	
				else
				{
					document.getElementById("myform").submit();
				}
		
	}
   </script>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

	<!--side menu start-->
	<?php
        include("header.php");
    ?>
	<!--side menu end-->
	<!--side menu start-->
	<?php
        include("menu.php");
    ?>
	<!--side menu end-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"><?php echo"$pagetitle"; ?></h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a>
                                </li>
                               
                                <li class="breadcrumb-item active"><?php echo"$pagetitle"; ?>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="content-body">
                <!-- Selectize selects start -->
                <section class="basic-selectize">
                    <div class="row match-height">
                         <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    
                                        
										<form class="form form-horizontal" id="myform" method="post" action="phpcodes-Update.php">
										  <div class="form-body">
											
											<h4 class="form-section"><i class="ft-clipboard"></i> Password Info</h4>
											<div class="form-group row">
											  <label class="col-md-3 label-control" for="projectinput5">Current Password *</label>
											  <div class="col-md-9">
												<input type="password" class="form-control" id='currpas' name='currpas' required>
											  </div>
											</div>
											<div class="form-group row">
											  <label class="col-md-3 label-control" for="projectinput5">New Password *</label>
											  <div class="col-md-9">
												<input type="password"  class="form-control" id='newpass' name='newpass' title="Password must contain: Minimum 6 characters atleast 1 Alphabet and 1 Number" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$" required='required'>
												**Password must contain: Minimum 6 characters atleast 1 Alphabet and 1 Number
											  </div>
											</div>
											<div class="form-group row">
											  <label class="col-md-3 label-control" for="projectinput5">Confirm Password * </label>
											  <div class="col-md-9">
												<input type="password" class="form-control" id='cnfpass' name='cnfpass' title="Password must contain: Minimum 6 characters atleast 1 Alphabet and 1 Number" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$" required='required'>
											  </div>
											</div>
											
										  <div class="form-actions center">
											<button type="reset" class="btn btn-warning mr-1">
											  <i class="ft-x"></i> Cancel
											</button>
											<input type = 'hidden' name='btnUserChpswd' id = 'btnUserChpswd' value = 'btnUserChpswd'>
											<button type="button" id="" name="" onclick='return functionbtnUpd()' class="btn btn-info">
											  <i class="la la-check-square-o"></i> Change
											</button>
										  </div>
										</form>
					
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </section>
                <!-- Selectize selects end -->


            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!--side menu start-->
	<?php
        include("footer.php");
    ?>
	<!--side menu end-->

    <!-- BEGIN: Vendor JS-->
    <script src="../app-assets/vendors/js/vendors.min.js"></script>
	<script src="../app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../app-assets/vendors/js/forms/select/selectize.min.js"></script>
    <script src="../app-assets/js/core/libraries/jquery_ui/jquery-ui.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/forms/select/form-selectize.js"></script>
	<script src="../app-assets/js/scripts/extensions/ex-component-sweet-alerts.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>