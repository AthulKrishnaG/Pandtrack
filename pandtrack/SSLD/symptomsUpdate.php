	<!--side menu start-->
	<?php
        include("dbconnection.php");
		include("session.php");
    ?>

	<?php
        include("header.php");
    ?>
	<!--side menu end-->
	<!--side menu start-->
	<?php
        include("menu.php");
    ?>
	<!--side menu end-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Symptoms Info</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Symptoms Info</a>
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
    $d_s_id = $_POST['d_s_id'];
    $select = "SELECT * FROM `pantra`.`symptoms` WHERE d_s_id='$d_s_id'";
    $result = mysqli_query($dbconnection, $select);
    $num = mysqli_num_rows($result);
    $i = 0;

    if ($num > 0) {
      while ($i < $num) {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $d_s_id  = $row['d_s_id'];
        $d_s_name = $row['d_s_name']; // comma-separated string
        $d_s_date_of_onset = $row['d_s_date_of_onset'];
        $in_date = $row['in_date'];
        $up_date = $row['up_date'];

        // Convert to array
        $symptomArray = explode(",", $d_s_name);
        $i++;

        echo "
        <input type='hidden' name='d_s_id' id='d_s_id' value='$d_s_id'>
        <h4 class='form-section'><i class='ft-user'></i> Symptoms Info</h4>

        <!-- Symptoms Multi-select -->
        <div class='form-group row'>
          <label class='col-md-3 label-control' for='d_s_name'>Symptoms Name</label>
          <div class='col-md-9'>
            <select id='d_s_name' name='d_s_name[]' class='form-control' multiple required>
              <option value='Fever' ".(in_array('Fever', $symptomArray) ? 'selected' : '').">Fever</option>
              <option value='Cough' ".(in_array('Cough', $symptomArray) ? 'selected' : '').">Cough</option>
              <option value='Shortness of Breath' ".(in_array('Shortness of Breath', $symptomArray) ? 'selected' : '').">Shortness of Breath</option>
              <option value='Fatigue' ".(in_array('Fatigue', $symptomArray) ? 'selected' : '').">Fatigue</option>
              <option value='Loss of Taste or Smell' ".(in_array('Loss of Taste or Smell', $symptomArray) ? 'selected' : '').">Loss of Taste or Smell</option>
              <option value='Sore Throat' ".(in_array('Sore Throat', $symptomArray) ? 'selected' : '').">Sore Throat</option>
              <option value='Headache' ".(in_array('Headache', $symptomArray) ? 'selected' : '').">Headache</option>
              <option value='Muscle or Body Aches' ".(in_array('Muscle or Body Aches', $symptomArray) ? 'selected' : '').">Muscle or Body Aches</option>
              <option value='Chills' ".(in_array('Chills', $symptomArray) ? 'selected' : '').">Chills</option>
              <option value='Nasal Congestion' ".(in_array('Nasal Congestion', $symptomArray) ? 'selected' : '').">Nasal Congestion</option>
              <option value='Nausea or Vomiting' ".(in_array('Nausea or Vomiting', $symptomArray) ? 'selected' : '').">Nausea or Vomiting</option>
              <option value='Diarrhea' ".(in_array('Diarrhea', $symptomArray) ? 'selected' : '').">Diarrhea</option>
            </select>
            <small class='text-muted'>Hold Ctrl (Windows) or Cmd (Mac) to select multiple.</small>
          </div>
        </div>

        <!-- Date of Onset -->
        <div class='form-group row'>
          <label class='col-md-3 label-control' for='d_s_date_of_onset'>Date Of Onset Of The Symptoms</label>
          <div class='col-md-9'>
            <input type='date' id='d_s_date_of_onset' class='form-control' name='d_s_date_of_onset' value='$d_s_date_of_onset' max=''>
          </div>
        </div>
        ";
      }
    }
    ?>
    <div class="form-actions center">
                          <button type="button" id="btnbk" name="btnbk"  class="btn btn-light" onclick="history.back();">
                           <i class="la la-arrow-left"></i> Back
                        </button>
      <button type="reset" class="btn btn-warning mr-1">
        <i class="ft-x"></i> Cancel
      </button>
      <button type="submit" id="btnsymptomsUp" name="btnsymptomsUp" class="btn btn-info">
        <i class="la la-check-square-o"></i> Save
      </button>
    </div>
  </div>
</form>
 <?php 
        include("footer.php");
    ?>
	<!--side menu end-->


  <script>
  document.addEventListener("DOMContentLoaded", function () {
    const dateInput = document.getElementById("d_s_date_of_onset");
    const today = new Date().toISOString().split('T')[0];
    if (dateInput) {
      dateInput.setAttribute("max", today);
    }
  });
</script>
