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
          <div class="section-content text-center">
            <div class="row">
              <div class="col-md-6 col-md-offset-3 text-center">
                 <br><br>
                <h2 class="text-theme-colored font-26">Add Primary Contact</h2>
                <ol class="breadcrumb text-center mt-10 white">
                  <li><a href="index.php">Home</a></li>
                  <li class="active">Add Primary Contact</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section: Primary Contact Add Form -->
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-push-3">
              <form class="form form-horizontal" action="phpcodes-insert.php" method="post">
                <div class="form-body">

                  <!-- Hidden patient ID -->
                  <input type="hidden" name="c_p_patient" value="<?php echo $uID; ?>">

                  <!-- 1) Primary Contact Person -->
                  <div class="form-group row">
                    <label class="col-md-3 label-control" for="c_p_person">Contact Person Name</label>
                    <div class="col-md-9">
                      <input type="text" id="c_p_person" name="c_p_person" class="form-control"
                        placeholder="Enter person’s name" required pattern="[A-Za-z\s]+"
                        title="Letters and spaces only">
                    </div>
                  </div>


                        <!-- State -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control">State</label>
                        <div class="col-md-9">
                          <select id="c_p_state" name="c_p_state" class="form-control" required onchange="populateDistricts()">
                            <option value="">--Select State--</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <!-- Add more states if needed -->
                          </select>
                        </div>
                      </div>

                      <!-- District -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control">District</label>
                        <div class="col-md-9">
                          <select id="c_p_district" name="c_p_district" class="form-control" required>
                            <option value="">--Select District--</option>
                            <?php
                              $keralaDistricts = [
                                "Thiruvananthapuram", "Kollam", "Pathanamthitta", "Alappuzha",
                                "Kottayam", "Idukki", "Ernakulam", "Thrissur",
                                "Palakkad", "Malappuram", "Kozhikode", "Wayanad",
                                "Kannur", "Kasaragod"
                              ];
                              foreach ($keralaDistricts as $district) {
                                echo "<option value='$district'>$district</option>";
                              }
                            ?>
                          </select>
                        </div>
                      </div>




















                  <!-- 2) District
                  <div class="form-group row">
  <label class="col-md-3 label-control" for="c_p_district">District</label>
  <div class="col-md-9">
    <input 
      list="kerala_districts" 
      type="text" 
      id="c_p_district" 
      name="c_p_district" 
      class="form-control"
      placeholder="Enter district" 
      required 
      pattern="[A-Za-z\s]+"
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

 -->
                  <!-- 3) Town -->
                  <div class="form-group row">
                    <label class="col-md-3 label-control" for="c_p_town">Town</label>
                    <div class="col-md-9">
                      <input type="text" id="c_p_town" name="c_p_town" class="form-control"
                        placeholder="Enter town/village" required pattern="[A-Za-z\s]+" title="Letters and spaces only">
                    </div>
                  </div>

                  <!-- 4) Place/Address -->
                  <div class="form-group row">
                    <label class="col-md-3 label-control" for="c_p_place">Place</label>
                    <div class="col-md-9">
                      <input type="text" id="c_p_place" name="c_p_place" class="form-control"
                        placeholder="Enter place or address" required pattern="[A-Za-z0-9\s\.,\-]+"
                        title="Letters, numbers, spaces, commas, periods, or hyphens only">
                    </div>
                  </div>

                  <!-- Buttons -->
                  <div class="form-actions" style="float:right">
                  <button type="reset" class="btn btn-warning mr-1">
                          <i class="ft-x"></i> Cancel
                        </button>
                    <button type="submit" id="btnprimarycontactAdd" name="btnprimarycontactAdd" class="btn btn-info">
                      <i class="la la-check-square-o"></i> Save
                    </button>
                  </div>

                </div><!-- /.form-body -->
              </form>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container -->
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