<!--side Database start-->
<?php
    include("dbconnection.php");
    include("session.php");
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
        <h3 class="content-header-title">Hotspot Area Info</h3>
        <div class="row breadcrumbs-top">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Form Layouts</a></li>
              <li class="breadcrumb-item active"><a href="#">Hotspot Area Info</a></li>
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

                  <form class="form form-horizontal" id="hotspotForm" action="phpcodes-Insert.php" method="post" novalidate>
                    <div class="form-body">
                      <h4 class="form-section"><i class="ft-user"></i>Hotspot Info</h4>

                      <!-- State dropdown -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="h_state">State <span style="color:red;">*</span></label>
                        <div class="col-md-9">
                          <select id="h_state" name="h_state" class="form-control" required onchange="populateDistricts()">
                            <option value="">-- Select State --</option>
                            <option value="Kerala">Kerala</option>
                            <!-- Add other states here if needed -->
                          </select>
                          <div class="invalid-feedback">Please select a state.</div>
                        </div>
                      </div>

                      <!-- District dropdown -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="h_district">District <span style="color:red;">*</span></label>
                        <div class="col-md-9">
                          <select id="h_district" name="h_district" class="form-control" required onchange="populatePanchayaths()">
                            <option value="">-- Select District --</option>
                          </select>
                          <div class="invalid-feedback">Please select a district.</div>
                        </div>
                      </div>

                      <!-- Panchayath dropdown -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="h_panchayath">Panchayath</label>
                        <div class="col-md-9">
                          <select id="h_panchayath" name="h_panchayath" class="form-control">
                            <option value="">-- Select Panchayath --</option>
                          </select>
                        </div>
                      </div>

                      <!-- Taluk -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="h_taluk">Taluk</label>
                        <div class="col-md-9">
                          <input type="text" id="h_taluk" name="h_taluk" class="form-control" placeholder="hotspot taluk">
                        </div>
                      </div>

                      <!-- Block -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="h_block">Block</label>
                        <div class="col-md-9">
                          <input type="text" id="h_block" name="h_block" class="form-control" placeholder="hotspot block">
                        </div>
                      </div>

                      <!-- Ward -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="h_ward_no">Ward</label>
                        <div class="col-md-9">
                          <input type="text" id="h_ward_no" name="h_ward_no" class="form-control" placeholder="hotspot ward">
                        </div>
                      </div>

                      <!-- Area -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="h_confirmed_area">Area</label>
                        <div class="col-md-9">
                          <input type="text" id="h_confirmed_area" name="h_confirmed_area" class="form-control" placeholder="hotspot area">
                        </div>
                      </div>

                    </div>

                    <div class="form-actions center">
                      <button type="reset" class="btn btn-warning mr-1">
                        <i class="ft-x"></i> Cancel
                      </button>
                      <button type="submit" id="btnhotspotadd" name="btnhotspotadd" class="btn btn-info">
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
// Kerala districts
const keralaDistricts = [
  "Alappuzha", "Ernakulam", "Idukki", "Kannur", "Kasaragod", "Kollam",
  "Kottayam", "Kozhikode", "Malappuram", "Palakkad", "Pathanamthitta",
  "Thiruvananthapuram", "Thrissur", "Wayanad"
];

// Panchayaths mapped by district (sample; extend as needed)
const districtPanchayaths = {
  "Alappuzha": ["Ambalappuzha", "Cherthala", "Kuttanad", "Alappuzha South", "Alappuzha North"],
  "Ernakulam": ["Aluva", "Kalamassery", "Kochi", "Perumbavoor", "Muvattupuzha"],
  "Idukki": ["Adimali", "Devikulam", "Thodupuzha", "Udumbanchola"],
  "Kannur": ["Payyannur", "Thalassery", "Kannur North", "Kannur South"],
  "Kasaragod": ["Hosdurg", "Manjeshwaram", "Kanhangad"],
  "Kollam": ["Kollam East", "Kollam West", "Kottarakkara"],
  "Kottayam": ["Kanjirappally", "Meenachil", "Vaikom"],
  "Kozhikode": ["Kozhikode North", "Kozhikode South", "Thamarassery"],
  "Malappuram": ["Perinthalmanna", "Tirur", "Nilambur"],
  "Palakkad": ["Chittur", "Ottapalam", "Alathur"],
  "Pathanamthitta": ["Konni", "Ranni", "Adoor"],
  "Thiruvananthapuram": ["Neyyattinkara", "Nagercoil", "Varkala"],
  "Thrissur": ["Chalakudy", "Kodungallur", "Thrissur East"],
  "Wayanad": ["Mananthavady", "Sulthan Bathery", "Kalpetta"]
};

// Populate districts based on selected state
function populateDistricts() {
  const stateSelect = document.getElementById('h_state');
  const districtSelect = document.getElementById('h_district');
  const panchayathSelect = document.getElementById('h_panchayath');
  const selectedState = stateSelect.value;

  // Clear district & panchayath dropdowns
  districtSelect.innerHTML = '<option value="">-- Select District --</option>';
  panchayathSelect.innerHTML = '<option value="">-- Select Panchayath --</option>';

  if (selectedState === 'Kerala') {
    keralaDistricts.forEach(function(district) {
      const option = document.createElement('option');
      option.value = district;
      option.text = district;
      districtSelect.appendChild(option);
    });
  }
}

// Populate panchayaths based on selected district
function populatePanchayaths() {
  const districtSelect = document.getElementById('h_district');
  const panchayathSelect = document.getElementById('h_panchayath');
  const selectedDistrict = districtSelect.value;

  // Clear panchayath dropdown
  panchayathSelect.innerHTML = '<option value="">-- Select Panchayath --</option>';

  if (districtPanchayaths[selectedDistrict]) {
    districtPanchayaths[selectedDistrict].forEach(function(panchayath) {
      const option = document.createElement('option');
      option.value = panchayath;
      option.text = panchayath;
      panchayathSelect.appendChild(option);
    });
  }
}

// Client-side validation
(function () {
  'use strict'

  const form = document.getElementById('hotspotForm');

  form.addEventListener('submit', function (event) {
    if (!form.checkValidity()) {
      event.preventDefault()
      event.stopPropagation()
    }
    form.classList.add('was-validated');
  }, false)
})();
</script>
