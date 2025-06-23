<?php
    include("dbconnection.php");
    include("session.php");
?>
<!--side menu start-->
<?php include("header.php"); ?>
<!--side menu end-->
<!--side menu start-->
<?php include("menu.php"); ?>
<!--side menu end-->
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Symptoms Info</h3>
        <div class="row breadcrumbs-top">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Form Layouts</a></li>
              <li class="breadcrumb-item active"><a href="#">Symptoms Info</a></li>
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

                  <form class="form form-horizontal" id="symptomsForm" action="phpcodes-Insert.php" method="post" novalidate>
                    <div class="form-body">
                      <h4 class="form-section"><i class="ft-user"></i>Symptoms Info</h4>

                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="d_s_name">Symptoms Name <span style="color:red;">*</span></label>
                        <div class="col-md-9">
                          
                            <select id="d_s_name" name="d_s_name[]" class="form-control" multiple required>
                            <option value="">-- Select Symptom --</option>
                            <option value="Fever">Fever</option>
                            <option value="Cough">Cough</option>
                            <option value="Shortness of Breath">Shortness of Breath</option>
                            <option value="Fatigue">Fatigue</option>
                            <option value="Loss of Taste or Smell">Loss of Taste or Smell</option>
                            <option value="Sore Throat">Sore Throat</option>
                            <option value="Headache">Headache</option>
                            <option value="Muscle or Body Aches">Muscle or Body Aches</option>
                            <option value="Chills">Chills</option>
                            <option value="Nasal Congestion">Nasal Congestion</option>
                            <option value="Nausea or Vomiting">Nausea or Vomiting</option>
                            <option value="Diarrhea">Diarrhea</option>
                          </select>
                          <div class="invalid-feedback">Please select a symptom.</div>
                        </div>
                      </div>

                     <div class="form-group row">
  <label class="col-md-3 label-control" for="d_s_date_of_onset">Date of Onset <span style="color:red;">*</span></label>
  <div class="col-md-9">
    <input type="date" id="d_s_date_of_onset" name="d_s_date_of_onset" class="form-control" required max="">
    <div class="invalid-feedback">Please select a valid date (today or earlier).</div>
  </div>
</div>


                    </div>

                    <div class="form-actions center">
                      <button type="reset" class="btn btn-warning mr-1">
                        <i class="ft-x"></i> Cancel
                      </button>
                      <button type="submit" id="btnsymptomsadd" name="btnsymptomsadd" class="btn btn-info">
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
// Bootstrap style client-side validation
(() => {
  'use strict'

  const form = document.getElementById('symptomsForm')

  form.addEventListener('submit', event => {
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
    const dateInput = document.getElementById("d_s_date_of_onset");
    const today = new Date().toISOString().split('T')[0];
    dateInput.setAttribute("max", today);
  });
</script>
