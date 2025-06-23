	<!--side Database start-->
	<?php
        include("dbconnection.php");
		include("session.php");
    ?>
	<!--side Database end-->
	<!--side Header start-->
	<?php
        include("header.php");
    ?>
	<!--side Header end-->
	<!--side menu start-->
	<?php
        include("menu.php");
    ?>
	<!--side menu end-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Disease Info</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="diseaseView.php">View Disease</a>
                </li>
                <li class="breadcrumb-item active"><a>Update</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
        
      </div>
      <div class="content-body">
        <!-- Basic form layout section start -->
        <section id="horizontal-form-layouts">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                
                <div class="card-content collpase show">
                  <div class="card-body">
                    <form class="form form-horizontal" action="phpcodes-Update.php" method="post">
                      <div class="form-body">
                      <?php 
  $d_id   = (int) $_POST['d_id'];
  $select = "SELECT * FROM `pantra`.`disease` WHERE d_id='$d_id'";
  $result = mysqli_query($dbconnection, $select);
  if (!$result) {
      die("Query Error: " . mysqli_error($dbconnection));
  }
  if ($row = mysqli_fetch_assoc($result)) {
      // 1) pull existing values
      $d_title         = $row['d_title'];
      $d_date_of_onset = $row['d_date_of_onset'];
      $current_p_id    = $row['p_id'];    // ←— set this here!

      // 2) fetch patients
      $p_q  = "SELECT p_id, p_name FROM `pantra`.`patient` ORDER BY p_name";
      $p_res = mysqli_query($dbconnection, $p_q);
      if (!$p_res) {
          die("Patient Query Error: " . mysqli_error($dbconnection));
      }

      // 3) output form
      echo "
      <input type='hidden' name='d_id' value='{$d_id}'>
      <h4 class='form-section'><i class='ft-user'></i> Disease Info</h4>

      <!-- Patient Name -->
      <div class='form-group row'>
        <label class='col-md-3 label-control' for='p_id'>Patient Name</label>
        <div class='col-md-9'>
          <select id='p_id' name='p_id' class='form-control' required>
            <option value=''>-- Select patient --</option>";
      while ($p = mysqli_fetch_assoc($p_res)) {
          $sel = $p['p_id'] == $current_p_id ? ' selected' : '';
          echo "<option value='{$p['p_id']}'{$sel}>{$p['p_id']} – " 
               . htmlspecialchars($p['p_name'], ENT_QUOTES) 
               . "</option>";
      }
      echo "
          </select>
        </div>
      </div>

      <!-- Disease Name -->
      <div class='form-group row'>
        <label class='col-md-3 label-control' for='d_title'>Disease Name</label>
        <div class='col-md-9'>
          <input type='text' id='d_title' name='d_title' class='form-control'
                 value='" . htmlspecialchars($d_title, ENT_QUOTES) . "' required>
        </div>
      </div>

      <!-- Date of Onset -->
      <div class='form-group row'>
        <label class='col-md-3 label-control' for='d_date_of_onset'>
          Date of Onset
        </label>
        <div class='col-md-9'>
          <input type='date' id='d_date_of_onset' name='d_date_of_onset'
                 class='form-control' value='{$d_date_of_onset}' required>
        </div>
      </div>";
  }
?>

					  
                       
                      <div class="form-actions center">
                        <button type="button" id="btnbk" name="btnbk"  class="btn btn-light" onclick="history.back();">
                           <i class="la la-arrow-left"></i> Back
                        </button>
                        <button type="reset" class="btn btn-warning mr-1">
                          <i class="ft-x"></i> Cancel
                        </button>
                        <button type="submit" id="btndiseaseUp" name="btndiseaseUp" class="btn btn-info">
                          <i class="la la-check-square-o"></i> Save
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
			
          </div>
          
        </section>
        <!-- // Basic form layout section end -->
      </div>
    </div>
  </div>
  	<!--side menu start-->
	<?php
        include("footer.php");
    ?>
	<!--side menu end-->
