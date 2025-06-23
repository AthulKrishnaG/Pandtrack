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
                <li class="breadcrumb-item"><a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Source Info</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Source Info</a>
                </li>
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
                   
                    <form class="form form-horizontal" action="phpcodes-Insert.php" method="post">
                      <div class="form-body">
                        <h4 class="form-section"><i class="ft-user"></i>Source Info</h4>
						<div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput1">Select Patient</label>
                          <div class="col-md-9">
                            <select id="d_source_patient" name="d_source_patient" class="select2 form-control" required>
												<option value=''>--Select Value--</option>
													<?php
														$queryemp = "select p_id, p_name from patient order by p_name asc";
														$resultemp = mysqli_query($dbconnection,$queryemp);	
														while($rowemp=mysqli_fetch_array($resultemp))
														{
															$p_id  = $rowemp['p_id'];
															$p_name = $rowemp['p_name'];
															echo "<option value='".$p_id."'>".$p_name."</option>";
														}
													?>
												</select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput1">Source Confirmed Location</label>
                          <div class="col-md-9">
                            <input type="text" id="d_source_confirmed_location" class="form-control" placeholder="exact location"
                            name="d_source_confirmed_location">
                          </div>
                        </div>
						
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput3">State</label>
                          <div class="col-md-9">
                            <input type="text" id="d_source_state" class="form-control" placeholder="source confirmed state" name="d_source_state">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput3">District</label>
                          <div class="col-md-9">
                            <input type="text" id="d_source_district" class="form-control" placeholder="source confirmed district" name="d_source_district">
                          </div>
                        </div>
  
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput3">Panchayath</label>
                          <div class="col-md-9">
                            <input type="text" id="d_source_panchayath" class="form-control" placeholder="source confirmed panchayath" name="d_source_panchayath">
                          </div>
                        </div>
  
                       <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput3"> Ward</label>
                          <div class="col-md-9">
                            <input type="text" id="d_source_ward_no" class="form-control" placeholder="source confirmed ward" name="d_source_ward_no">
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
	<?php
        include("footer.php");
    ?>
	<!--side menu end-->
