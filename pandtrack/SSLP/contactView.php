
<!DOCTYPE html>
	<!--side Database start-->
	<?php
        include("dbconnection.php");
		include("session.php");
    ?>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Pandtrack" />
<meta name="keywords" content="building,business,construction,cleaning,transport,workshop" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>Pandtrack</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-yellow.css" rel="stylesheet" type="text/css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

<!-- external javascripts -->
<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
											
	function functionChgPaswd() 
	{
		var decimal=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
		var chkpass = document.getElementById('ppassword').value;
		if(chkpass.match(decimal)) 
		{
			if (document.getElementById('ppassword').value == document.getElementById('cpaasword').value) 
			{
				return true;
			} else 
			{
				alert ("Passwords are NOT matching");
				return false;
			}
		}
		else
		{ 	
			alert('Password must have 8 to 15 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character')
			return false;
		}  
	}
</script>
</head>
<body class="">
<div id="wrapper">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
	<!--side menu start-->
	<?php
        include("header.php");
    ?>
	<!--side menu end-->
  
  <!-- Start main-content -->
  <div class="main-content">
  <?php include 'message.php'; ?>
    <!-- Section: inner-header -->
    <!-- Section: Page Title / Breadcrumbs -->
    <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="http://placehold.it/1920x1280">
      <div class="container pt-30 pb-30">
        <div class="section-content text-center">
          <div class="row"> 
            <div class="col-md-6 col-md-offset-3 text-center">
               <br><br>
              <h2 class="text-theme-colored font-26">My Contact History</h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="index.php">Home</a></li>
                <li class="active">My Contacts</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>

    <!-- Section: Display only this patient's Contact records -->
    <section class="divider parallax layer-overlay overlay-deep" data-stellar-background-ratio="0.2" data-bg-img="">
      <div class="container">
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-12">
              <h3 class="mt-0">Your Submitted Contacts</h3>

              <div data-example-id="hoverable-table" class="bs-example"> 
                <table class="table table-hover table-bordered">
                  <?php
                    // Fetch all contact records for this patient
                    $select = "
                      SELECT 
                        c_id,
                        c_district,
                        c_visited_places,
                        c_explain_the_activities,
                        c_explanation_activities_date,
                        c_explanation_activities_time,
                        c_in_date
                      FROM `pantra`.`contact`
                      WHERE c_patient = '$uID'
                      ORDER BY c_in_date DESC
                    ";
                    $result = mysqli_query($dbconnection, $select);
                    $num = mysqli_num_rows($result);
                    $i = 0;

                    echo "
                      <thead> 
                        <tr> 
                          <th>#</th> 
                          <th>District</th>
                          <th>Visited Places</th>
                          <th>Activities</th>
                          <th>Activity Date</th>
                          <th>Activity Time</th>
                          <th>Submitted On</th>
                        </tr> 
                      </thead> 
                      <tbody>
                    ";

                    if ($num > 0) {
                      while ($row = mysqli_fetch_assoc($result)) {
                        $i++;
                        $cid       = $row['c_id'];
                        $district  = htmlspecialchars($row['c_district']);
                        $places    = htmlspecialchars($row['c_visited_places']);
                        $activities= htmlspecialchars($row['c_explain_the_activities']);
                        $actDate   = $row['c_explanation_activities_date'];
                        $actTime   = $row['c_explanation_activities_time'];
                        $in_date   = $row['c_in_date'];

                        echo "
                          <tr>
                            <td>$i</td>
                            <td>$district</td>
                            <td>$places</td>
                            <td>$activities</td>
                            <td>$actDate</td>
                            <td>$actTime</td>
                            <td>$in_date</td>
                          </tr>
                        ";
                      }
                    } else {
                      echo "
                        <tr>
                          <td colspan='7' class='text-center'>No contact entries found.</td>
                        </tr>
                      ";
                    }

                    echo "
                      </tbody>
                    ";
                  ?>
                </table>
              </div>

            </div>
          </div>
        </div>
      </div>      
    </section>

  </div>
  <!-- end main-content -->
  
    <!--side footer start-->
	<?php
        include("footer.php");
    ?>
	<!--side footer end-->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
</html>