<?php
    include("dbconnection.php");
    include("session.php");
    include("header.php");
    include("menu.php");
?>

<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Contact Info</h3>
        <div class="row breadcrumbs-top">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Form Layouts</a></li>
              <li class="breadcrumb-item active"><a href="#">Contact Info</a></li>
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

                  <form class="form form-horizontal" action="phpcodes-Insert.php" method="post">
                    <div class="form-body">
                      <h4 class="form-section"><i class="ft-user"></i> Contact Info</h4>

                      <!-- Patient -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control">Select Patient</label>
                        <div class="col-md-9">
                          <select id="c_patient" name="c_patient" class="select2 form-control" required>
                            <option value=''>--Select Patient--</option>
                            <?php
                              $queryemp = "SELECT p_id, p_name FROM patient ORDER BY p_name ASC";
                              $resultemp = mysqli_query($dbconnection, $queryemp);  
                              while ($rowemp = mysqli_fetch_array($resultemp)) {
                                echo "<option value='" . $rowemp['p_id'] . "'>" . $rowemp['p_name'] . "</option>";
                              }
                            ?>
                          </select>
                        </div>
                      </div>

                      <!-- State -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control">State</label>
                        <div class="col-md-9">
                          <select id="c_state" name="c_state" class="form-control" required onchange="populateDistricts()">
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
                          <select id="c_district" name="c_district" class="form-control" required>
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

                      <!-- Visited Places -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control">Places</label>
                        <div class="col-md-9">
                          <input type="text" id="c_visited_places" name="c_visited_places" class="form-control" placeholder="Visiting places" required>
                        </div>
                      </div>

                      <!-- Explanation -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control">Explanation</label>
                        <div class="col-md-9">
                          <input type="text" id="c_explain_the_activities" name="c_explain_the_activities" class="form-control" placeholder="Explain activities" required>
                        </div>
                      </div>

                      <!-- Date -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control">Date</label>
                        <div class="col-md-9">
                          <input type="date" id="c_explanation_activities_date" name="c_explanation_activities_date" class="form-control" required max="">
                          <div class="invalid-feedback">Please select a valid date (today or earlier).</div>
                        </div>
                      </div>

                      <!-- Time -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control">Time</label>
                        <div class="col-md-9">
                          <input type="time" id="c_explanation_activities_time" name="c_explanation_activities_time" class="form-control" required>
                        </div>
                      </div>

                      <!-- Actions -->
                      <div class="form-actions center">

                        <button type="reset" class="btn btn-warning mr-1">
                          <i class="ft-x"></i> Cancel
                        </button>
                        <button type="submit" id="btncontactadd" name="btncontactadd" class="btn btn-info">
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

<!-- JavaScript for Dynamic District -->
<script>
  const districtsByState = {
    "Tamil Nadu": ["Chennai", "Coimbatore", "Madurai", "Salem", "Tiruchirappalli"],
    "Maharashtra": ["Mumbai", "Pune", "Nagpur", "Nashik", "Thane"],
    "Karnataka": ["Bengaluru", "Mysuru", "Mangaluru", "Hubli", "Belgaum"],
    "Kerala": ["Thiruvananthapuram",
      "Kollam",
      "Pathanamthitta",
      "Alappuzha",
      "Kottayam",
      "Idukki",
      "Ernakulam",
      "Thrissur",
      "Palakkad",
      "Malappuram",
      "Kozhikode",
      "Wayanad",
      "Kannur",
      "Kasaragod"]
    // Add more states and districts as needed
  };

  function populateDistricts() {
    const stateSelect = document.getElementById("c_state");
    const districtSelect = document.getElementById("c_district");
    const selectedState = stateSelect.value;

    districtSelect.innerHTML = '<option value="">--Select District--</option>';

    if (selectedState && districtsByState[selectedState]) {
      districtsByState[selectedState].forEach(function(district) {
        const option = document.createElement("option");
        option.value = district;
        option.textContent = district;
        districtSelect.appendChild(option);
      });
    }
  }
</script>



<script>
  document.addEventListener("DOMContentLoaded", function () {
    const dateInput = document.getElementById("c_explanation_activities_date");
    const today = new Date().toISOString().split('T')[0];
    dateInput.setAttribute("max", today);
  });
</script>
