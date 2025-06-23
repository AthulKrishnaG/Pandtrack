<!DOCTYPE html>
<?php
// myprofile.php
include("dbconnection.php");
session_start();

// Ensure user is logged in
if (!isset($_SESSION['uEmail'])) {
    header('Location: login.php');
    exit;
}

// Fetch patient/user details
$uEmail = $_SESSION['uEmail'];
$sql = "SELECT p.p_name AS name, p.p_gender AS gender, p.p_mobilenum AS mobile,
               p.p_address AS address, p.p_email AS email
        FROM patient p
        WHERE p.p_email = ?
        LIMIT 1";
$stmt = $dbconnection->prepare($sql);
$stmt->bind_param('s', $uEmail);
$stmt->execute();
$stmt->bind_result($uName, $uGender, $uMob, $uAddress, $uEmail);
$stmt->fetch();
$stmt->close();
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
  <title>My Profile</title>

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
  <!-- CSS | Theme Color -->
  <link href="css/colors/theme-skin-yellow.css" rel="stylesheet" type="text/css">

  <!-- external javascripts -->
  <script src="js/jquery-2.2.0.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- JS | jquery plugin collection for this theme -->
  <script src="js/jquery-plugin-collection.js"></script>

  <style>
    /* Custom styling for the profile card */
    .profile-card { background: #fff; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.12); overflow: hidden; margin-top: 40px; border-left: 6px solid #ffc107; }
    .profile-header { background: linear-gradient(135deg, #ffc107 0%, #ffeb3b 100%); padding: 40px 0; text-align: center; position: relative; }
    .profile-avatar { width: 120px; height: 120px; border-radius: 50%; background: #fff; font-size: 48px; font-weight: 600; color: #ffc107; display: flex; align-items: center; justify-content: center; position: absolute; bottom: -60px; left: 50%; transform: translateX(-50%); border: 4px solid #fff; text-transform: uppercase; }
    .profile-body { padding: 80px 30px 30px; text-align: center; }
    .profile-card h3 { margin-top: 0; font-size: 26px; color: #333; font-weight: 600; }
    .profile-row { padding: 12px 0; border-bottom: 1px solid #f0f0f0; display: flex; }
    .profile-field-label { flex: 1; font-weight: 500; color: #555; text-align: right; padding-right: 15px; }
    .profile-field-value { flex: 1; text-align: left; color: #333; }
    .btn-profile { margin: 0 5px; }
  </style>
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

    <!-- side menu start -->
    <?php include("header.php"); ?>
    <!-- side menu end -->

    <!-- Start main-content -->
    <div class="main-content">
      <!-- Section: inner-header -->
      <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="http://placehold.it/1920x1280">
        <div class="container pt-30 pb-30">
          <div class="section-content text-center">
            <div class="row">
              <div class="col-md-6 col-md-offset-3 text-center">
                <br>  <br>
                <h2 class="text-theme-colored font-26">My Profile</h2>
                <ol class="breadcrumb text-center mt-10 white">
                  <li><a href="index.php">Home</a></li>
                  <li class="active">Profile</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section: Profile Card -->
      <section class="pt-30 pb-30">
        <div class="container">
          <div class="row justify-content-center">
          <div class="col-md-6 col-md-offset-3">
              <div class="profile-card">
                <div class="profile-header">
                  <div class="profile-avatar"><?= strtoupper(substr($uName,0,1)) ?></div>
                </div>
                <div class="profile-body">
                  <h3><?= htmlspecialchars($uName) ?></h3>
                  <div class="profile-row"><div class="profile-field-label">Gender:</div><div class="profile-field-value"><?= htmlspecialchars($uGender) ?></div></div>
                  <div class="profile-row"><div class="profile-field-label">Mobile:</div><div class="profile-field-value"><?= htmlspecialchars($uMob) ?></div></div>
                  <div class="profile-row"><div class="profile-field-label">Address:</div><div class="profile-field-value"><?= nl2br(htmlspecialchars($uAddress)) ?></div></div>
                  <div class="profile-row"><div class="profile-field-label">Email:</div><div class="profile-field-value"><?= htmlspecialchars($uEmail) ?></div></div>

                  <!-- Action Buttons -->
                  <div class="mt-4">
                    <a href="edit_profile.php" class="btn btn-warning btn-profile">Edit Profile</a>
                    <a href="logout.php" class="btn btn-danger btn-profile">Logout</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- end main-content -->

    <!-- side footer start -->
    <?php include("footer.php"); ?>
    <!-- side footer end -->

    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
  <!-- end wrapper -->

  <!-- Footer Scripts -->
  <script src="js/custom.js"></script>
</body>

</html>