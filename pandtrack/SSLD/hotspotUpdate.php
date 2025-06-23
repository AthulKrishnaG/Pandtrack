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
	<!--side menu end-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Hotspot Area Info</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Hotspot Area Info</a>
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
					  $h_id = $_POST['h_id'];
					  $select="SELECT * FROM `pantra`.`hotspot` WHERE h_id='$h_id'";
			
						$result=mysqli_query($dbconnection, $select);
						$num = mysqli_num_rows($result);
						$i=0;
						if($num > 0)
						{
							while($i < $num)
							{
							
							$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
							$h_id  = $row['h_id'];
							$h_state = $row['h_state'];
							$h_district = $row['h_district'];
							$h_taluk= $row['h_taluk'];
							$h_block = $row['h_block'];
							$h_panchayath = $row['h_panchayath'];
							$h_ward_no = $row['h_ward_no'];
							$h_confirmed_area = $row['h_confirmed_area'];
							$h_in_date = $row['h_in_date'];
							$h_up_date = $row['h_up_date'];
							
							$i = $i+1;
							echo "
							<input type = 'hidden' name='h_id' id = 'h_id' value = '$h_id'>
							<h4 class='form-section'><i class='ft-user'></i> Info</h4>
                        <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput1'>State </label>
                          <div class='col-md-9'>
                            <input type='text' id='h_state' class='form-control' value='$h_state'
                            name='h_state'>
                          </div>
                        </div>
						
                        <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput3'>District</label>
                          <div class='col-md-9'>
                            <input type='text' id='h_district' class='form-control' value='$h_district' name='h_district'>
                          </div>
                        </div>
                        <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput4'>Taluk </label>
                          <div class='col-md-9'>
                            <input type='text' id='h_taluk' class='form-control' value='$h_taluk' name='h_taluk'>
                          </div>
                        </div>
                        
                        <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput9'>Block</label>
                          <div class='col-md-9'>
                            <textarea id='h_block' rows='5' class='form-control' name='h_block' placeholder='About Project'>$h_block</textarea>
                          </div>
                        </div>
						<div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput9'>Panchayath</label>
                          <div class='col-md-9'>
                            <textarea id='h_panchayath' rows='5' class='form-control' name='h_panchayath' placeholder='About Project'>$h_panchayath</textarea>
                          </div>
                        </div>
						 <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput9'>Ward</label>
                          <div class='col-md-9'>
                            <textarea id='h_ward_no' rows='5' class='form-control' name='h_ward_no' placeholder='About Project'>$h_ward_no</textarea>
                          </div>
                        </div>
						<div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput9'>Area</label>
                          <div class='col-md-9'>
                            <textarea id='h_confirmed_area' rows='5' class='form-control' name='h_confirmed_area' placeholder='About Project'>$h_confirmed_area</textarea>
                          </div>
                        </div>
                      </div>";
							}
						}
					  
					  ?>
                     
                      <div class="form-actions center">
                        <div class="form-actions center">
                        <button type="button" id="btnbk" name="btnbk"  class="btn btn-light" onclick="history.back();">
                           <i class="la la-arrow-left"></i> Back
                        </button>
                        <button type="reset" class="btn btn-warning mr-1">
                          <i class="ft-x"></i> Cancel
                        </button>
                        <button type="submit" id="btnhotspotUp" name="btnhotspotUp" class="btn btn-info">
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
