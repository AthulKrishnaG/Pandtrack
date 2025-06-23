<!--side Database start-->
<?php
    include("dbconnection.php");
    include("session.php");
    $sql = "SELECT p_id, p_name FROM `pantra`.`patient` ORDER BY p_name";
    $patients_res = mysqli_query($dbconnection, $sql);
    if (!$patients_res) {
        die("Query Error: " . mysqli_error($dbconnection));
    }
?>
<!--side Database end-->
<!--side Header start-->
<?php include("header.php"); ?>
<!--side Header end-->
<!--side menu start-->
<?php include("menu.php"); ?>
<!--side menu end-->

<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Disease Info</h3>
        <div class="row breadcrumbs-top">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              
              <li class="breadcrumb-item active"><a>Disease Info</a></li>
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
              <div class="card-content collapse show">
                <div class="card-body">
                  <form class="form form-horizontal" id="diseaseForm" action="phpcodes-Insert.php" method="post" novalidate>
                    <div class="form-body">
                      <h4 class="form-section"><i class="ft-user"></i>Disease Info</h4>

                      <!-- Disease Dropdown -->
                      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="p_id">
          Patient Name <span class="text-danger">*</span>
        </label>
        <div class="col-md-9">
        <select id="p_id" name="p_id" class="form-control" required>
      <option value="">-- Select patient --</option>
      <?php while ($row = mysqli_fetch_assoc($patients_res)): ?>
        <option value="<?= $row['p_id'] ?>">
          <?= $row['p_id'] . ' – ' . htmlspecialchars($row['p_name'], ENT_QUOTES) ?>
        </option>
      <?php endwhile; ?>
    </select>
          <div class="invalid-feedback">Please select a patient.</div>
        </div>
      </div>
      
 
     <!-- Disease Dropdown -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="d_title">Disease Name <span style="color:red;">*</span></label>
                        <div class="col-md-9">
                          <select id="d_title" name="d_title" class="form-control" required>
                            <option value="">-- Select Disease --</option>
                            <option value="COVID-19">COVID-19</option>
                            <option value="SARS">SARS</option>
                            <option value="MERS">MERS</option>
                            <option value="Ebola">Ebola</option>
                            <option value="H1N1 (Swine Flu)">H1N1 (Swine Flu)</option>
                            <option value="Zika Virus">Zika Virus</option>
                            <option value="Cholera">Cholera</option>
                            <option value="Plague">Plague</option>
                            <option value="Tuberculosis">Tuberculosis</option>
                            <option value="Malaria">Malaria</option>
                            <!-- Add more if needed -->
                          </select>
                          <div class="invalid-feedback">Please select a disease.</div>
                        </div>
                       </div> 
      <!-- Date of Onset -->
      <div class="form-group row">
        <label class="col-md-3 col-form-label" for="d_date_of_onset">
          Date of Onset <span class="text-danger">*</span>
        </label>
        <div class="col-md-9">
          

          <input type="date" id="d_date_of_onset" name="d_date_of_onset" class="form-control" required max="">
                          <div class="invalid-feedback">Please select a valid date (today or earlier).</div>





        </div>
      </div>
                    </div>

                    <div class="form-actions center">
                      <button type="reset" class="btn btn-warning mr-1">
                        <i class="ft-x"></i> Cancel
                      </button>
                      <button type="submit" id="btndiseaseadd" name="btndiseaseadd" class="btn btn-info">
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
<?php include("footer.php"); ?>
<!--side menu end-->

<script>
// Bootstrap style validation
(function () {
  'use strict'

  const form = document.getElementById('diseaseForm')

  form.addEventListener('submit', function (event) {
    if (!form.checkValidity()) {
      event.preventDefault()
      event.stopPropagation()
    }
    form.classList.add('was-validated')
  }, false)
})();
</script>




<script>
  document.addEventListener("DOMContentLoaded", function () {
    const dateInput = document.getElementById("d_date_of_onset");
    const today = new Date().toISOString().split('T')[0];
    dateInput.setAttribute("max", today);
  });
</script>