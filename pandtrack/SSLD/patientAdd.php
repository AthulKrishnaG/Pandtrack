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
        <h3 class="content-header-title">Patient Info</h3>
        <div class="row breadcrumbs-top">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="#">Add Patient</a></li>
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

                  <form class="form form-horizontal" action="phpcodes-Insert.php" method="post" novalidate>
                    <div class="form-body">
                      <h4 class="form-section"><i class="ft-user"></i> Patient Information</h4>

                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="p_name">Patient Name</label>
                        <div class="col-md-9">
                          <input type="text" id="p_name" class="form-control" placeholder="Full Name" name="p_name"
                            required pattern="[A-Za-z ]{2,50}" title="Only letters and spaces allowed. Min 2 characters.">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="p_gender">Gender</label>
                        <div class="col-md-9">
                          <select id="p_gender" name="p_gender" class="form-control" required>
                            <option value="" disabled selected>--Select Gender--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="others">Others</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="p_email">E-mail</label>
                        <div class="col-md-9">
                          <input type="email" id="p_email" class="form-control" placeholder="E-mail" name="p_email" required>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="p_mobilenum">Contact Number</label>
                        <div class="col-md-9">
                          <input type="tel" id="p_mobilenum" class="form-control" placeholder="10-digit Mobile Number"
                            name="p_mobilenum" required pattern="[0-9]{10}" maxlength="10"
                            title="Enter a valid 10-digit phone number.">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-3 label-control" for="p_address">Address</label>
                        <div class="col-md-9">
                          <textarea id="p_address" rows="5" class="form-control" name="p_address" placeholder="Address" required></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="form-actions center">
                      <button type="reset" class="btn btn-warning mr-1">
                        <i class="ft-x"></i> Cancel
                      </button>
                      <button type="submit" id="btnpatientAdd" name="btnpatientAdd" class="btn btn-info">
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

<!--side footer start-->
<?php include("footer.php"); ?>
<!--side footer end-->
