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
          <h3 class="content-header-title">Medicines Info</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Medicines Info</a>
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
					 $d_m_id = $_POST['d_m_id'];
					  $select="SELECT * FROM `pantra`.`medicines` WHERE d_m_id='$d_m_id'";
			
						$result=mysqli_query($dbconnection, $select);
						$num = mysqli_num_rows($result);
						$i=0;
						if($num > 0)

						{
							while($i < $num)
							{
							
							$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
							$d_m_id  = $row['d_m_id'];
							$d_m_name = $row['d_m_name'];
							$d_m_dose = $row['d_m_dose'];
						//	$d_m_startingdate= $row['d_m_startingdate'];
							$d_m_duration = $row['d_m_duration'];
						    $d_m_indate = $row['d_m_indate'];
							$d_m_update = $row['d_m_update'];
							
							$i = $i+1;
							echo "
							<input type = 'hidden' name='d_m_id' id = 'd_m_id' value = '$d_m_id'>
							<h4 class='form-section'><i class='ft-user'></i> Medicines Info</h4>
                        <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput1'>Medicines Name</label>
                          <div class='col-md-9'>
                            <input type='text' id='d_m_name' class='form-control' value='$d_m_name'
                            name='d_m_name'>
                          </div>
                        </div>
						
                        <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput3'>Dose</label>
                          <div class='col-md-9'>
                            <input type='text' id='d_m_dose' class='form-control' value='$d_m_dose' name='d_m_dose'>
                          </div>
                        </div>
                        
                        
                        <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput9'>Duration</label>
                          <div class='col-md-9'>
                            <textarea id='d_m_duration' rows='5' class='form-control' name='d_m_duration' placeholder='About Project'>$d_m_duration</textarea>
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
                        <button type="submit" id="btnmedicinesup" name="btnmedicinesup" class="btn btn-info">
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
