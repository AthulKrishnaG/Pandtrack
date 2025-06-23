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
                <li class="breadcrumb-item"><a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">User Info</a>
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
					 $doctor_id = $_POST['doctor_id'];
					  $select="SELECT * FROM `pantra`.`doctor` WHERE doctor_id='$doctor_id'";
			
						$result=mysqli_query($dbconnection, $select);
						$num = mysqli_num_rows($result);
						$i=0;
						if($num > 0)

						{
							while($i < $num)
							{
							
							$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
							$doctor_id  = $row['doctor_id'];
							$doctor_name = $row['doctor_name'];
							$doctor_dept = $row['doctor_dept'];
							
						    $doctor_in_date = $row['doctor_in_date'];
							$doctor_up_date = $row['doctor_up_date'];
							
							$i = $i+1;
							echo "
							<input type = 'hidden' name='doctor_id' id = 'doctor_id' value = '$doctor_id'>
							<h4 class='form-section'><i class='ft-user'></i> Medicines Info</h4>
                        <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput1'>Doctor Name</label>
                          <div class='col-md-9'>
                            <input type='text' id='doctor_name' class='form-control' value='$doctor_name'
                            name='doctor_name'>
                          </div>
                        </div>
						
                        <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput3'>Department</label>
                          <div class='col-md-9'>
                            <input type='text' id='doctor_dept' class='form-control' value='$doctor_dept' name='doctor_dept'>
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
                        <button type="submit" id="btndoctorUp" name="btndoctorUp" class="btn btn-info">
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
