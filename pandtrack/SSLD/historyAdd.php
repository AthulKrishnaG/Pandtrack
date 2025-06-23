<!--side Database start-->
<?php
    include("dbconnection.php");
    include("session.php");
?>
<!--side Header start-->
<?php include("header.php"); ?>
<!--side Header end-->
<?php include("menu.php"); ?>
<!--side menu end-->

<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Patients History Info</h3>
        <div class="row breadcrumbs-top">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Patients History Info</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="content-body">
      <section id="horizontal-form-layouts">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-content collpase show">
                <div class="card-body">

                  <form class="form form-horizontal" action="phpcodes-Insert.php" method="post" novalidate>
                    <div class="form-body">
                      <h4 class="form-section"><i class="ft-user"></i> History Info</h4>

                      <!-- Select Patient -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="h_patient">Select Patient</label>
                        <div class="col-md-9">
                          <select id="h_patient" name="h_patient" class="form-control select2" required>
                            <option value="">--Select Patient--</option>
                            <?php
                              $queryemp = "SELECT p_id, p_name FROM patient ORDER BY p_name ASC";
                              $resultemp = mysqli_query($dbconnection, $queryemp);  
                              while($rowemp = mysqli_fetch_array($resultemp)) {
                                echo "<option value='{$rowemp['p_id']}'>{$rowemp['p_name']}</option>";
                              }
                            ?>
                          </select>
                        </div>
                      </div>

                      <!-- Days After Onset -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="h_days_after_the_onset_of_the_disease">
                          Days After Onset of Disease
                        </label>
                        <div class="col-md-9">
                          <input type="text" id="h_days_after_the_onset_of_the_disease" name="h_days_after_the_onset_of_the_disease" class="form-control"
                                 placeholder="e.g., 7" min="0" max="365" required title="Enter a valid number of days">
                        </div>
                      </div>

                      <!-- Effective Medicines -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="h_effective_medicines">Effective Medicines</label>
                        <div class="col-md-9">
                          <input type="text" id="h_effective_medicines" name="h_effective_medicines" class="form-control"
                                 placeholder="Enter effective medicines used" pattern="[A-Za-z0-9 ,.-]+" required
                                 title="Only letters, numbers, commas, dots, and hyphens allowed">
                        </div>
                      </div>

                      <!-- Buttons -->
                      <div class="form-actions center">
                        <button type="reset" class="btn btn-warning mr-1">
                          <i class="ft-x"></i> Cancel
                        </button>
                        <button type="submit" id="btnhistoryAdd" name="btnhistoryAdd" class="btn btn-info">
                          <i class="la la-check-square-o"></i> Save
                        </button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>

<?php include("footer.php"); ?>
