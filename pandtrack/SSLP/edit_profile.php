<?php
error_reporting(0);
// edit_profile.php
include("dbconnection.php");
session_start();

// Ensure user is logged in
if (!isset($_SESSION['uEmail'])) {
    header('Location: login.php');
    exit;
}
$uEmail = $_SESSION['uEmail'];

// Fetch patient and login details
$sql = "SELECT p.p_id, p.p_name, p.p_gender, p.p_mobilenum, p.p_address, p.p_email,
               l.lpass AS password
        FROM patient p
        JOIN login l ON l.luname = p.p_email
        WHERE p.p_email = ?
        LIMIT 1";
$stmt = $dbconnection->prepare($sql);
$stmt->bind_param('s', $uEmail);
$stmt->execute();
$stmt->bind_result($pId, $name, $gender, $mobile, $address, $email, $password);
if (!$stmt->fetch()) {
    header('Location: error.php?msg=User+not+found');
    exit;
}
$stmt->close();

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
   /* $name    = mysqli_real_escape_string($dbconnection, $_POST['name']);
    $gender  = mysqli_real_escape_string($dbconnection, $_POST['gender']);
    $mobile  = mysqli_real_escape_string($dbconnection, $_POST['mobile']);
    $address = str_replace(array("\r", "\n"), ' ', $_POST['address']);
    //$address = mysqli_real_escape_string($dbconnection, $_POST['address']);
    $email   = mysqli_real_escape_string($dbconnection, $_POST['email']);
    $pass    = mysqli_real_escape_string($dbconnection, $_POST['password']);
*/

$name    = preg_replace('/\r\n|\r|\n/', ' ', $_POST['name']);
$gender  = $_POST['gender']; // dropdown — safe
$mobile  = preg_replace('/\r\n|\r|\n/', '', $_POST['mobile']);
$email   = preg_replace('/\r\n|\r|\n/', '', $_POST['email']);
$pass    = preg_replace('/\r\n|\r|\n/', '', $_POST['password']);
$address = preg_replace('/\r\n|\r|\n/', ' ', $_POST['address']);
$address = mysqli_real_escape_string($dbconnection, trim($address));





   try {
    // Start transaction
    $dbconnection->begin_transaction();

    // Update patient table
    $updP = "UPDATE patient SET p_name=?, p_gender=?, p_mobilenum=?, p_address=?, p_email=?, p_update=NOW() WHERE p_id=?";
    $s1 = $dbconnection->prepare($updP);
    $s1->bind_param('sssssi', $name, $gender, $mobile, $address, $email, $pId);
    $s1->execute();

    // Update login table
    $updL = "UPDATE login SET luname=?, lpass=? WHERE luname = ?";
    $s2 = $dbconnection->prepare($updL);
    $s2->bind_param('sss', $email, $pass, $uEmail);
    $s2->execute();

    // Commit transaction
    $dbconnection->commit();

    // Update session and redirect
    $_SESSION['uEmail'] = $email;
    header("Location: profile.php?msg=" . urlencode("Profile updated successfully") . "&msg_type=Success");
    exit;

} catch (Exception $e) {
    // Rollback on error
    $dbconnection->rollback();
    $error = "Update failed: " . $e->getMessage();
}
}
?>
<!DOCTYPE html>
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
  <title>Edit Profile</title>

  <!-- Favicon -->
  <link href="images/favicon.png" rel="shortcut icon" type="image/png">

  <!-- Stylesheets -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" type="text/css">
  <link href="css/css-plugin-collections.css" rel="stylesheet" />
  <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet" />
  <link href="css/style-main.css" rel="stylesheet" type="text/css">
  <link href="css/preloader.css" rel="stylesheet" type="text/css">
  <link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
  <link href="css/responsive.css" rel="stylesheet" type="text/css">
  <link href="css/colors/theme-skin-yellow.css" rel="stylesheet" type="text/css">

  <!-- jQuery & Bootstrap JS -->
  <script src="js/jquery-2.2.0.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-plugin-collection.js"></script>

  <style>
    /* Custom Form Container */
    .edit-card { background: #fff; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.12); margin-top: 40px; border-left: 6px solid #ffc107; padding: 30px; }
  </style>
</head>

<body>
  <div id="wrapper">
    <!-- preloader -->
    <div id="preloader">
      <div id="spinner"><div class="preloader-dot-loading"><div class="cssload-loading"><i></i><i></i><i></i><i></i></div></div></div>
      <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div>

    <!-- side menu -->
    <?php include("header2.php"); ?>

    <div class="main-content">
      <!-- Section: inner-header -->
      <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="http://placehold.it/1920x1280">
        <div class="container pt-30 pb-30">
          <div class="section-content text-center">
            <div class="row">
              <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="text-theme-colored font-36">Edit Profile</h2>
                <ol class="breadcrumb text-center mt-10 white">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="profile.php">view profile</a></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="pt-30 pb-30">
        <div class="container">
          <div class="row justify-content-center">
          <div class="col-md-6 col-md-offset-3">
              <div class="edit-card">
                <?php if ($error): ?><div class="alert alert-danger"><?= htmlspecialchars($error) ?></div><?php endif; ?>
                <form method="POST">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($name) ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" class="form-control" required>
                      <option value="Male" <?= $gender=='Male'? 'selected': '' ?>>Male</option>
                      <option value="Female" <?= $gender=='Female'? 'selected': '' ?>>Female</option>
                      <option value="Other" <?= $gender=='Other'? 'selected': '' ?>>Other</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Mobile No.</label>
                    <input type="tel" name="mobile" class="form-control" value="<?= htmlspecialchars($mobile) ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <textarea name="address" class="form-control" rows="3" required><?= htmlspecialchars($address) ?></textarea>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($email) ?>" required>
                  </div>
                  <div class="form-group position-relative">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control pr-5" value="<?= htmlspecialchars($password) ?>" required>
                    <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password" style="position:absolute; right:15px; top:50%; transform:translateY(-50%); cursor:pointer;"></span>
                  </div>
                  <button type="submit" class="btn btn-warning">Save Changes</button>
                  <button type="reset" class="btn btn-secondary">Cancel</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- footer -->
    <?php include("footer.php"); ?>
  </div>

  <script src="js/custom.js"></script>
  <script>
  // Toggle password visibility
  document.querySelectorAll('.toggle-password').forEach(function(el) {
    el.addEventListener('click', function() {
      var input = document.querySelector(this.getAttribute('toggle'));
      if (input.type === 'password') {
        input.type = 'text';
        this.classList.remove('fa-eye');
        this.classList.add('fa-eye-slash');
      } else {
        input.type = 'password';
        this.classList.remove('fa-eye-slash');
        this.classList.add('fa-eye');
      }
    });
  });
</script>
</body>

</html>
