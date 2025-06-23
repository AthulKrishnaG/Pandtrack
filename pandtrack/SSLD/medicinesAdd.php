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
        <h3 class="content-header-title">Medicine Info</h3>
        <div class="row breadcrumbs-top">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Medicine Info</a></li>
              <li class="breadcrumb-item active"><a href="#">Medicine Info</a></li>
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

                  <form class="form form-horizontal" action="phpcodes-Insert.php" method="post" onsubmit="return validateMedicinesForm()">
                    <div class="form-body">
                      <h4 class="form-section"><i class="ft-user"></i>Medicines Info</h4>

                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="d_m_name">Medicines Title</label>
                        <div class="col-md-9">
                          <select id="d_m_name" name="d_m_name" class="form-control" required>
                            <option value="" disabled selected>-- Select Medicine --</option>
                            <option value="Paracetamol">Paracetamol</option>
                            <option value="Ibuprofen">Ibuprofen</option>
                            <option value="Amoxicillin">Amoxicillin</option>
                            <option value="Azithromycin">Azithromycin</option>
                            <option value="Ciprofloxacin">Ciprofloxacin</option>
                            <option value="Metformin">Metformin</option>
                            <option value="Atorvastatin">Atorvastatin</option>
                            <option value="Omeprazole">Omeprazole</option>
                            <option value="Amlodipine">Amlodipine</option>
                            <option value="Losartan">Losartan</option>
                            <option value="Simvastatin">Simvastatin</option>
                            <option value="Levothyroxine">Levothyroxine</option>
                            <option value="Hydrochlorothiazide">Hydrochlorothiazide</option>
                            <option value="Sertraline">Sertraline</option>
                            <option value="Montelukast">Montelukast</option>
                            <option value="Prednisone">Prednisone</option>
                            <option value="Furosemide">Furosemide</option>
                            <option value="Tramadol">Tramadol</option>
                            <option value="Gabapentin">Gabapentin</option>
                            <option value="Cetirizine">Cetirizine</option>
                            <option value="Clindamycin">Clindamycin</option>
                            <option value="Citalopram">Citalopram</option>
                            <option value="Alprazolam">Alprazolam</option>
                            <option value="Tamsulosin">Tamsulosin</option>
                            <option value="Warfarin">Warfarin</option>
                            <option value="Doxycycline">Doxycycline</option>
                            <option value="Metoprolol">Metoprolol</option>
                            <option value="Ranitidine">Ranitidine</option>
                            <option value="Zolpidem">Zolpidem</option>
                            <option value="Lisinopril">Lisinopril</option>
                            <option value="Hydrocodone">Hydrocodone</option>
                            <option value="Morphine">Morphine</option>
                            <option value="Clonazepam">Clonazepam</option>
                            <option value="Fluoxetine">Fluoxetine</option>
                            <option value="Allopurinol">Allopurinol</option>
                            <option value="Budesonide">Budesonide</option>
                            <option value="Levocetirizine">Levocetirizine</option>
                            <option value="Naproxen">Naproxen</option>
                            <option value="Insulin">Insulin</option>
                            <option value="Diazepam">Diazepam</option>
                            <option value="Hydroxychloroquine">Hydroxychloroquine</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="d_m_dose">Medicines Dose</label>
                        <div class="col-md-9">
                          <input type="text" id="d_m_dose" class="form-control" placeholder="Medicines dose (e.g., 500mg)" name="d_m_dose" required pattern="^[\w\s.,-]+$" title="Please enter a valid dose">
                        </div>
                      </div>

                     

                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="d_m_duration">Duration</label>
                        <div class="col-md-9">
                          <input type="text" id="d_m_duration" class="form-control" placeholder="Duration (e.g., 5 days)" name="d_m_duration" required pattern="^[\w\s]+$" title="Please enter a valid duration">
                        </div>
                      </div>

                    </div>

                    <div class="form-actions center">
                      <button type="reset" class="btn btn-warning mr-1">
                        <i class="ft-x"></i> Cancel
                      </button>
                      <button type="submit" id="btnmedicinesadd" name="btnmedicinesadd" class="btn btn-info">
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
  function validateMedicinesForm() {
    const name = document.getElementById('d_m_name').value;
    const dose = document.getElementById('d_m_dose').value.trim();
    const startDate = document.getElementById('d_m_startingdate').value;
    const duration = document.getElementById('d_m_duration').value.trim();

    if (!name) {
      alert('Please select the Medicines Title.');
      return false;
    }
    if (!dose) {
      alert('Please enter the Medicines Dose.');
      return false;
    }
    if (!startDate) {
      alert('Please select the Medicines Starting Date.');
      return false;
    }
    if (!duration) {
      alert('Please enter the Duration.');
      return false;
    }

    // Optional: further validation on dose and duration patterns can be added here if needed

    return true;
  }
</script>
