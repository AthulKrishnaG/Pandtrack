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
        <h3 class="content-header-title">Source Info</h3>
        <div class="row breadcrumbs-top">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Form Layouts</a></li>
              <li class="breadcrumb-item active"><a href="#">Source Info</a></li>
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
                      <h4 class="form-section"><i class="ft-user"></i> Source Info</h4>

                      <div class="form-group row">
                        <label class="col-md-3 label-control">Select Patient</label>
                        <div class="col-md-9">
                          <select id="d_source_patient" name="d_source_patient" class="form-control" required>
                            <option value=''>--Select Value--</option>
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
                        <label class="col-md-3 label-control">Confirmed Location</label>
                        <div class="col-md-9">
                          <input type="text" id="d_source_confirmed_location" name="d_source_confirmed_location" class="form-control" placeholder="Exact location" required>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 label-control">State</label>
                        <div class="col-md-9">
                          <select id="state" name="d_source_state" class="form-control" required onchange="populateDistricts()">
                            <option value="">--Select State--</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Maharashtra">Maharashtra</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 label-control">District</label>
                        <div class="col-md-9">
                          <select id="district" name="d_source_district" class="form-control" required>
                            <option value="">--Select District--</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 label-control">Panchayath</label>
                        <div class="col-md-9">
                          <input type="text" id="d_source_panchayath" name="d_source_panchayath" class="form-control" placeholder="Panchayath name" required>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 label-control">Ward</label>
                        <div class="col-md-9">
                          <input type="text" id="d_source_ward_no" name="d_source_ward_no" class="form-control" placeholder="Ward number" required>
                        </div>
                      </div>

                      <div class="form-actions center">
                        <button type="reset" class="btn btn-warning mr-1">
                          <i class="ft-x"></i> Cancel
                        </button>
                        <button type="submit" id="btnsourceadd" name="btnsourceadd" class="btn btn-info">
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

<!--side menu end-->
<?php include("footer.php"); ?>

<!-- JavaScript for dynamic district loading -->
<script>
  const districtsByState = {
    "Kerala": [
      "Thiruvananthapuram", "Kollam", "Pathanamthitta", "Alappuzha",
      "Kottayam", "Idukki", "Ernakulam", "Thrissur", "Palakkad",
      "Malappuram", "Kozhikode", "Wayanad", "Kannur", "Kasaragod"
    ],
    "Tamil Nadu": ["Chennai", "Coimbatore", "Madurai", "Salem", "Tiruchirappalli"],
    "Karnataka": ["Bengaluru", "Mysuru", "Mangaluru", "Hubli", "Belgaum"],
    "Maharashtra": ["Mumbai", "Pune", "Nagpur", "Nashik", "Thane"]
  };

  function populateDistricts() {
    const stateSelect = document.getElementById("state");
    const districtSelect = document.getElementById("district");
    const selectedState = stateSelect.value;

    districtSelect.innerHTML = '<option value="">--Select District--</option>';

    if (selectedState && districtsByState[selectedState]) {
      districtsByState[selectedState].forEach(district => {
        const option = document.createElement("option");
        option.value = district;
        option.text = district;
        districtSelect.appendChild(option);
      });
    }
  }
</script>
