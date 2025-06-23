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
        <h3 class="content-header-title">User Info</h3>
        <div class="row breadcrumbs-top">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Form Layouts</a></li>
              <li class="breadcrumb-item active"><a href="#">User Info</a></li>
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

                  <form class="form form-horizontal" action="phpcodes-Insert.php" method="post" enctype="multipart/form-data">
                    <div class="form-body">
                      <h4 class="form-section"><i class="ft-user"></i> User Info</h4>

                      <!-- Emp ID -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="uempid">User Emp ID</label>
                        <div class="col-md-9">
                          <input type="text" id="uempid" name="uempid" class="form-control" placeholder="Emp ID" required>
                        </div>
                      </div>

                      <!-- Name -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="uname">Name</label>
                        <div class="col-md-9">
                          <input type="text" id="uname" name="uname" class="form-control" placeholder="Name" required>
                        </div>
                      </div>

                      <!-- Designation -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="udesignation">Designation</label>
                        <div class="col-md-9">
                          <select id="udesignation" name="udesignation" class="form-control" required>
                            <option value="" selected disabled>--Select Designation--</option>
                            <option value="Medical Officer">Medical Officer</option>
                            <option value="Community Health Officer">Community Health Officer</option>
                            <option value="Auxiliary Nurse Midwife (ANM)">Auxiliary Nurse Midwife (ANM)</option>
                            <option value="General Practitioner">General Practitioner</option>
                            <option value="Pharmacist">Pharmacist</option>
                            <option value="Rural Medical Practitioner (RMP)">Rural Medical Practitioner (RMP)</option>
                            <option value="Health Inspector">Health Inspector</option>
                            <option value="Lab Technician">Lab Technician</option>
                            <option value="ASHA Worker">ASHA Worker</option>
                            <option value="Staff Nurse">Staff Nurse</option>
                            <option value="Block Health Supervisor">Block Health Supervisor</option>
                            <option value="Village Health Nurse">Village Health Nurse</option>
                            <option value="Doctor">Doctor</option>
                            <option value="Field Health Worker">Field Health Worker</option>
                          </select>
                        </div>
                      </div>

                      <!-- Email -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="uemail">Email</label>
                        <div class="col-md-9">
                          <input type="email" id="uemail" name="uemail" class="form-control" placeholder="Email" required>
                        </div>
                      </div>

                      <!-- Mobile -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="umob">Mobile</label>
                        <div class="col-md-9">
                          <input type="tel" id="umob" name="umob" class="form-control" placeholder="Mobile Number" pattern="[0-9]{10}" maxlength="10" required>
                        </div>
                      </div>

                      <!-- Image -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="uimg">Image</label>
                        <div class="col-md-9">
                          <input type="file" id="uimg" name="uimg" class="form-control" accept="image/*" required>
                        </div>
                      </div>

                      <!-- User Role -->
                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="urole">User Role</label>
                        <div class="col-md-9">
                          <select id="urole" name="urole" class="form-control" required>
                            <option value="" selected disabled>--Select Role--</option>
                            <option value="Doctor">Doctor</option>
                            <option value="Medical Officer">Medical Officer</option>
                             <option value="Other">Other</option>

                          </select>
                        </div>
                      </div>

                      <!-- Buttons -->
                      <div class="form-actions center">
                        <button type="reset" class="btn btn-warning mr-1">
                          <i class="ft-x"></i> Cancel
                        </button>
                        <button type="submit" id="btnuseradd" name="btnuseradd" class="btn btn-info">
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
      <!-- // Basic form layout section end -->
    </div>
  </div>
</div>

<!--side footer start-->
<?php
    include("footer.php");
?>
<!--side footer end-->
