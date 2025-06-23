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
        <h3 class="content-header-title">Daily Duty Info</h3>
        <div class="row breadcrumbs-top">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Form Layouts</a></li>
              <li class="breadcrumb-item active"><a href="#">Daily Duty Info</a></li>
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
                  <form class="form form-horizontal" action="phpcodes-Insert.php" method="post" id="dailyDutyForm" novalidate>
                    <div class="form-body">
                      <h4 class="form-section"><i class="ft-user"></i>Daily Duties Info</h4>


                  <div class="form-group row">
                    <label class="col-md-3 label-control">Select Daily Duty Doctor Name</label>
                    <div class="col-md-9">
                      <select id="doctor_duty_list" name="doctor_duty_list" class="form-control" required>
                        <option value="">--Select Name--</option>
                        <?php
                        // Database query to get doctors from the user table
                        $queryemp = "SELECT * FROM user WHERE urole='Doctor' ORDER BY uname ASC";
                        $resultemp = mysqli_query($dbconnection, $queryemp);

                        // Check if the query was successful
                        if ($resultemp) {
                          while ($rowemp = mysqli_fetch_assoc($resultemp)) {
                            $uid = htmlspecialchars($rowemp['uid']);
                            $uname = htmlspecialchars($rowemp['uname']);

                            echo "<option value='$uname'>$uname</option>";
                          }
                        } else {
                          echo "<option value=''>Error loading doctors</option>";
                        }
                        ?>
                      </select>
                    </div>
                  </div>

                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="doctor_duty_dept">Daily Duty Doctor Department</label>
                        <div class="col-md-9">
                          <select id="doctor_duty_dept" name="doctor_duty_dept" class="form-control" required>
                            <option value="" selected disabled>-- Select Department --</option>
                            <option value="General Medicine">General Medicine</option>
                            <option value="Cardiology">Cardiology</option>
                            <option value="Neurology">Neurology</option>
                            <option value="Orthopedics">Orthopedics</option>
                            <option value="Pediatrics">Pediatrics</option>
                            <option value="Radiology">Radiology</option>
                            <option value="Oncology">Oncology</option>
                            <option value="Dermatology">Dermatology</option>
                            <option value="Gynecology">Gynecology</option>
                            <option value="ENT">ENT</option>
                            <option value="Psychiatry">Psychiatry</option>
                            <option value="Surgery">Surgery</option>
                            <!-- Add more as needed -->
                          </select>
                          <div class="invalid-feedback">Please select the doctor's department.</div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="doctor_duty_day_and_date">Day and Date</label>
                        <div class="col-md-9">
                         <input type="date" id="doctor_duty_day_and_date" name="doctor_duty_day_and_date" class="form-control" required="min">
                          <div class="invalid-feedback">Please select the day and date.</div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="doctor_duty_fromtime">Daily Duty Doctor From Time</label>
                        <div class="col-md-9">
                          <input type="time" id="doctor_duty_fromtime" name="doctor_duty_fromtime" class="form-control" required>
                          <div class="invalid-feedback">Please enter the starting time.</div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="doctor_duty_totime">Daily Duty Doctor To Time</label>
                        <div class="col-md-9">
                          <input type="time" id="doctor_duty_totime" name="doctor_duty_totime" class="form-control" required>
                          <div class="invalid-feedback">Please enter the ending time.</div>
                        </div>
                      </div>

                    </div>

                    <div class="form-actions center">
                      <button type="reset" class="btn btn-warning mr-1">
                        <i class="ft-x"></i> Cancel
                      </button>
                      <button type="submit" id="btndaiydutiesAdd" name="btndaiydutiesAdd" class="btn btn-info">
                        <i class="la la-check-square-o"></i> Save
                      </button>
                    </div>
                  </form>

                  <script>
                    // JavaScript for client-side validation
                    (function() {
                      'use strict';
                      var form = document.getElementById('dailyDutyForm');
                      form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                          event.preventDefault();
                          event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                      }, false);
                    })();
                  </script>

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
<!------------------------to load future dates only-------------------------->
<script>
 // window.addEventListener('DOMContentLoaded', function () {
 //   const dateInput = document.getElementById('doctor_duty_day_and_date');
 //   const today = new Date();
 //   today.setDate(today.getDate() + 1); // Set to tomorrow
 //   const yyyy = today.getFullYear();
 //   const mm = String(today.getMonth() + 1).padStart(2, '0');
 //  const dd = String(today.getDate()).padStart(2, '0');
 //   const minDate = `${yyyy}-${mm}-${dd}`;
 //   dateInput.setAttribute('min', minDate);
 // });
</script>


<!------------------------to load future dates and also today-------------------------->

<script>
  window.addEventListener('DOMContentLoaded', function () {
    const dateInput = document.getElementById('doctor_duty_day_and_date');
    const today = new Date();
    const yyyy = today.getFullYear();
    const mm = String(today.getMonth() + 1).padStart(2, '0');
    const dd = String(today.getDate()).padStart(2, '0');
    const minDate = `${yyyy}-${mm}-${dd}`; // today's date
    dateInput.setAttribute('min', minDate);
  });
</script>
