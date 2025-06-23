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
        <h3 class="content-header-title">Primary Contact Info</h3>
        <div class="row breadcrumbs-top">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Form Layouts</a></li>
              <li class="breadcrumb-item active"><a href="#">Primary Contact Info</a></li>
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
              <div class="card-content collapse show">
                <div class="card-body">
                  <form class="form form-horizontal" action="phpcodes-Insert.php" method="post">
                    <div class="form-body">
                      <h4 class="form-section"><i class="ft-user"></i> Primary Contact Info</h4>

                     








 <div class="form-group row">
                        <label class="col-md-3 label-control">Select Patient</label>
                        <div class="col-md-9">
                          <select id="c_p_patient" name="c_p_patient" class="form-control" required>
                            <option value=''>--Select Name--</option>
                            <?php
                              $queryemp = "select p_id, p_name from patient order by p_name asc";
                              $resultemp = mysqli_query($dbconnection, $queryemp);
                              while ($rowemp = mysqli_fetch_array($resultemp)) {
                                echo "<option value='{$rowemp['p_id']}'>{$rowemp['p_name']}</option>";
                              }
                            ?>
                          </select>
                        </div>
                      </div>




                      <div class="form-group row">
                        <label class="col-md-3 label-control">Primary Contact Title</label>
                        <div class="col-md-9">
                          <input type="text" id="c_p_person" name="c_p_person" class="form-control" placeholder="Person Name" required>
                        </div>
                      </div>

                        <!-- State -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control">State</label>
                        <div class="col-md-9">
                          <select id="c_p_state" name="c_p_state" class="form-control" required onchange="populateDistricts()">
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
                          <select id="c_p_district" name="c_p_district" class="form-control" required>
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


                      <div class="form-group row">
                        <label class="col-md-3 label-control">Town</label>
                        <div class="col-md-9">
                          <input type="text" id="c_p_town" name="c_p_town" class="form-control" placeholder="Town" required>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 label-control">Place</label>
                        <div class="col-md-9">
                          <input type="text" id="c_p_place" name="c_p_place" class="form-control" placeholder="Place" required>
                        </div>
                      </div>

                      <div class="form-actions center">

                        <button type="reset" class="btn btn-warning mr-1">
                          <i class="ft-x"></i> Cancel
                        </button>
                        <button type="submit" id="btnprimarycontactAdd" name="btnprimarycontactAdd" class="btn btn-info">
                          <i class="la la-check-square-o"></i> Save
                        </button>
                      </div>

                    </div> <!-- /.form-body -->
                  </form>
                </div> <!-- /.card-body -->
              </div> <!-- /.card-content -->
            </div> <!-- /.card -->
          </div>
        </div>
      </section>
    </div>
  </div>
</div>

<!--side Footer start-->
<?php include("footer.php"); ?>
<!--side Footer end-->
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
    const stateSelect = document.getElementById("c_p_state");
    const districtSelect = document.getElementById("c_p_district");
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