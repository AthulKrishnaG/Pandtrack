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
          <h3 class="content-header-title">Discharge Info</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Discharge Info</a>
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
                   
                    <form class="form form-horizontal" action="phpcodes-Update.php" method="post">
                      <div class="form-body">
					   <?php 
					  $discharge_p_id = $_POST['discharge_p_id'];
					  $select="SELECT * FROM `pantra`.`discharge` WHERE discharge_p_id='$discharge_p_id'";
						$result=mysqli_query($dbconnection, $select);
						$num = mysqli_num_rows($result);
						$i=0;
						if($num > 0)
						{
							while($i < $num)
							{
							
							$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
							$discharge_p_id  = $row['discharge_p_id'];
							$discharge_p_name = $row['discharge_p_name'];
							$discharge_p_gender = $row['discharge_p_gender'];
							$discharge_p_mobilenum= $row['discharge_p_mobilenum'];
							$discharge_p_address = $row['discharge_p_address'];
							$discharge_p_email = $row['discharge_p_email'];
							$discharge_p_type = $row['discharge_p_type'];
							$discharge_p_in_date = $row['discharge_p_in_date'];
							$discharge_p_up_date = $row['discharge_p_up_date'];
						     $i = $i+1;
							echo "
							<input type = 'hidden' name='discharge_p_id' id = 'discharge_p_id' value = '$discharge_p_id'>
							<h4 class='form-section'><i class='ft-user'></i> Discharge info </h4>
                        
						<div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput1'>patient name</label>
                          <div class='col-md-9'>
                            <input type='text' id='discharge_p_name' class='form-control' value='$discharge_p_name'
                            name='discharge_p_name'>
                          </div>
                        </div>
                       
						<div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput7'>Gender</label>
                          <div class='col-md-9'>
                            <select id='discharge_p_gender' name='discharge_p_gender' class='form-control'>
                              <option value='' disabled>--Select Gender--</option>
              <option value='Male' " . ($discharge_p_gender == 'Male' ? 'selected' : '') . ">Male</option>
              <option value='Female' " . ($discharge_p_gender == 'Female' ? 'selected' : '') . ">Female</option>
              <option value='others' " . ($discharge_p_gender == 'others' ? 'selected' : '') . ">Others</option>
                            </select>
                          </div>
                        </div>
						
                        <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput3'>Mobile Number </label>
                          <div class='col-md-9'>
                            <input type='text' id='discharge_p_mobilenum' class='form-control' value='$discharge_p_mobilenum' name='discharge_p_mobilenum'>
                          </div>
                        </div>
                       
					    <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput4'>Address</label>
                          <div class='col-md-9'>
                            <input type='text' id='discharge_p_address' class='form-control' value='$discharge_p_address' name='discharge_p_address'>
                          </div>
                        </div>
						 <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput4'>Email</label>
                          <div class='col-md-9'>
                            <input type='text' id='discharge_p_email' class='form-control' value='$discharge_p_email' name='discharge_p_email'>
                          </div>
                        </div>
                         <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput4'>Disease Type</label>
                          <div class='col-md-9'>
                            <input type='text' id='discharge_p_type' class='form-control' value='$discharge_p_type' name='discharge_p_type'>
                          </div>
                        </div>
                      </div>";
							}
						}
					  
					  ?>
                        
                        
                       
                      <div class="form-actions center">
                         <button type="button" id="btnbk" name="btnbk"  class="btn btn-light" onclick="history.back();">
                           <i class="la la-arrow-left"></i> Back
                        </button>
                        <button type="reset" class="btn btn-warning mr-1">
                          <i class="ft-x"></i> Cancel
                        </button>
                        <button type="submit" id="btndischargeUp" name="btndischargeUp" class="btn btn-info">
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
