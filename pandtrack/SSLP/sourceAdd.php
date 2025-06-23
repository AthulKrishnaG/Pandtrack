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
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
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
  <link href="css/css-plugin-collections.css" rel="stylesheet" />
  <!-- CSS | menuzord megamenu skins -->
  <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet" />
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

  <!-- external javascripts -->
  <script src="js/jquery-2.2.0.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- JS | jquery plugin collection for this theme -->
  <script src="js/jquery-plugin-collection.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
  <script>

    function functionChgPaswd() {
      var decimal = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
      var chkpass = document.getElementById('ppassword').value;
      if (chkpass.match(decimal)) {
        if (document.getElementById('ppassword').value == document.getElementById('cpaasword').value) {
          return true;
        } else {
          alert("Passwords are NOT matching");
          return false;
        }
      }
      else {
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
      <!-- Section: inner-header -->
      <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="http://placehold.it/1920x1280">
        <div class="container pt-30 pb-30">
          <!-- Section Content -->
          <div class="section-content text-center">
            <div class="row">
              <div class="col-md-6 col-md-offset-3 text-center">
                <br><br>
                <h2 class="text-theme-colored font-26">Source Details</h2>
                <ol class="breadcrumb text-center mt-10 white">
                <li><a href="index.php">Home</a></li>
                <li class="active">Add Source</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-push-3">
              <form class="form form-horizontal" action="phpcodes-Insert.php" method="post">
                <div class="form-body">

                  <div class="form-group row">
                    <label class="col-md-3 label-control" for="projectinput1">Source Confirmed Location</label>
                    <div class="col-md-9">
                      <input type="text" id="d_source_confirmed_location" class="form-control"
                        placeholder="exact location" name="d_source_confirmed_location" required pattern="[A-Za-z\s]+"
                        title="Letters and spaces only">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-md-3 label-control" for="projectinput3">State</label>
                    <div class="col-md-9">
                      <input list="states" id="d_source_state" class="form-control" placeholder="Source confirmed state"
                        name="d_source_state" pattern="[A-Za-z\s]+" title="Letters and spaces only">
                      <datalist id="states">
                        <option value="Andhra Pradesh">
                        <option value="Arunachal Pradesh">
                        <option value="Assam">
                        <option value="Bihar">
                        <option value="Chhattisgarh">
                        <option value="Goa">
                        <option value="Gujarat">
                        <option value="Haryana">
                        <option value="Himachal Pradesh">
                        <option value="Jharkhand">
                        <option value="Karnataka">
                        <option value="Kerala">
                        <option value="Madhya Pradesh">
                        <option value="Maharashtra">
                        <option value="Manipur">
                        <option value="Meghalaya">
                        <option value="Mizoram">
                        <option value="Nagaland">
                        <option value="Odisha">
                        <option value="Punjab">
                        <option value="Rajasthan">
                        <option value="Sikkim">
                        <option value="Tamil Nadu">
                        <option value="Telangana">
                        <option value="Tripura">
                        <option value="Uttar Pradesh">
                        <option value="Uttarakhand">
                        <option value="West Bengal">
                        <option value="Andaman and Nicobar Islands">
                        <option value="Chandigarh">
                        <option value="Dadra and Nagar Haveli and Daman and Diu">
                        <option value="Delhi">
                        <option value="Jammu and Kashmir">
                        <option value="Ladakh">
                        <option value="Lakshadweep">
                        <option value="Puducherry">
                      </datalist>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-md-3 label-control" for="projectinput3">District</label>
                    <div class="col-md-9">
                      <input list="kerala_districts" id="d_source_district" class="form-control"
                        placeholder="Source confirmed district" name="d_source_district" pattern="[A-Za-z\s]+"
                        title="Letters and spaces only">
                      <datalist id="kerala_districts">
                        <option value="Alappuzha">
                        <option value="Ernakulam">
                        <option value="Idukki">
                        <option value="Kannur">
                        <option value="Kasaragod">
                        <option value="Kollam">
                        <option value="Kottayam">
                        <option value="Kozhikode">
                        <option value="Malappuram">
                        <option value="Palakkad">
                        <option value="Pathanamthitta">
                        <option value="Thiruvananthapuram">
                        <option value="Thrissur">
                        <option value="Wayanad">
                      </datalist>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label class="col-md-3 label-control" for="projectinput3">Panchayath</label>
                    <div class="col-md-9">
                      <input type="text" id="d_source_panchayath" class="form-control"
                        placeholder="source confirmed panchayath" name="d_source_panchayath" required
                        pattern="[A-Za-z\s]+" title="Letters and spaces only">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-md-3 label-control" for="projectinput3"> Ward</label>
                    <div class="col-md-9">
                      <input type="text" id="d_source_ward_no" class="form-control" placeholder="source confirmed ward"
                        name="d_source_ward_no" required pattern="[A-Za-z0-9\s\.,\-]+"
                        title="Letters, numbers, spaces, commas, periods, or hyphens only">
                    </div>
                  </div>

                  <div class="form-actions " style="float:right">
                    <button type="reset" class="btn btn-warning mr-1">
                      <i class="ft-x"></i> Cancel
                    </button>
                    <button type="submit" id="btnsourceadd" name="btnsourceadd" class="btn btn-info">
                      <i class="la la-check-square-o"></i> Save
                    </button>
                  </div>
              </form>
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