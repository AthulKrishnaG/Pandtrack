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
          <h3 class="content-header-title">Patients History Info</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Patients History Info</a>
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
					  $select="SELECT * FROM `pantra`.`history` WHERE h_id='$h_id'";
			
						$result=mysqli_query($dbconnection, $select);
						$num = mysqli_num_rows($result);
						$i=0;
						if($num > 0)

						{
							while($i < $num)
							{
							
							$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
							$h_id  = $row['h_id'];
							$h_patient  = $row['h_patient'];
							$h_days_after_the_onset_of_the_disease = $row['h_days_after_the_onset_of_the_disease'];
							$h_effective_medicines = $row['h_effective_medicines'];
						
				
						    $h_in_date = $row['h_in_date'];
							$h_up_date = $row['h_up_date'];
							$p_name = "";
							$p_mobilenum = "";
							$queryst = "select p_name, p_mobilenum from patient WHERE p_id='$h_patient'";
							$resultst = mysqli_query($dbconnection,$queryst);	
							while($rowst=mysqli_fetch_row($resultst))
							{
								$p_name = $rowst[0];
								$p_mobilenum = $rowst[1];
							}
							
							$i = $i+1;
							echo "
							<input type = 'hidden' name='h_id' id = 'h_id' value = '$h_id'>
							<h4 class='form-section'><i class='ft-user'></i> History Info</h4>
                        <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput1'>Name & Mobile </label>
                          <div class='col-md-9'>
                            $p_name ($p_mobilenum)
                          </div>
                        </div>
						<div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput1'>History  Days After The Onset Of The Disease</label>
                          <div class='col-md-9'>
                            <input type='text' id='h_days_after_the_onset_of_the_disease' class='form-control' value='$h_days_after_the_onset_of_the_disease'
                            name='h_days_after_the_onset_of_the_disease'>
							</div>
                          </div>
						  <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput2'>Effective Medicines</label>
                          <div class='col-md-9'>
                            <input type='text' id='h_effective_medicines' class='form-control' value='$h_effective_medicines'
                            name='h_effective_medicines'>
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
                        <button type="submit" id="btnhistoryUp" name="btnhistoryUp" class="btn btn-info">
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
