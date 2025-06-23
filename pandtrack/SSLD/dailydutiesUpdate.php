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
          <h3 class="content-header-title">Daily Duty Info</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Daily Duty Info</a>
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
					 $doctor_duty_id = $_POST['doctor_duty_id'];
					  $select="SELECT * FROM `pantra`.`dailyduties` WHERE doctor_duty_id='$doctor_duty_id'";
			
						$result=mysqli_query($dbconnection, $select);
						$num = mysqli_num_rows($result);
						$i=0;
						if($num > 0)

						{
							while($i < $num)
							{
							
							$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
							$doctor_duty_id  = $row['doctor_duty_id'];
							$doctor_duty_list = $row['doctor_duty_list'];
							$doctor_duty_dept = $row['doctor_duty_dept'];
							$doctor_duty_day_and_date= $row['doctor_duty_day_and_date'];
							$doctor_duty_fromtime = $row['doctor_duty_fromtime'];
							$doctor_duty_totime = $row['doctor_duty_totime'];
						    $doctor_duty_indate = $row['doctor_duty_indate'];
							$doctor_duty_update = $row['doctor_duty_update'];
							
							$i = $i+1;
							echo "
							<input type = 'hidden' name='doctor_duty_id' id = 'doctor_duty_id' value = '$doctor_duty_id'>
							<h4 class='form-section'><i class='ft-user'></i> dailyduties Info</h4>
                        <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput1'>Daily Duty Doctor Name</label>
                          <div class='col-md-9'>
                            <input type='text' id='doctor_duty_list' class='form-control' value='$doctor_duty_list'
                            name='doctor_duty_list'>
                          </div>
                        </div>
						
                        <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput3'>Daily Duty Doctor Department</label>
                          <div class='col-md-9'>
                            <input type='text' id='doctor_duty_dept' class='form-control' value='$doctor_duty_dept' name='doctor_duty_dept'>
                          </div>
                        </div>
                      
					   <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput3'>Day and Date</label>
                          <div class='col-md-9'>
                            <input type='date' id='doctor_duty_day_and_date	'class='form-control' value='$doctor_duty_day_and_date'  name='doctor_duty_day_and_date'>
                          </div>
                        </div>
 
                        <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput3'>Daily Duty Doctor FromTime</label>
                          <div class='col-md-9'>
                            <input type='time' id='doctor_duty_fromtime	'class='form-control' value='$doctor_duty_fromtime'  name='doctor_duty_fromtime'>
                          </div>
                        </div>
						 <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput3'>Daily Duty Doctor ToTime</label>
                          <div class='col-md-9'>
                            <input type='time' id='doctor_duty_totime	'class='form-control'  value='$doctor_duty_totime' name='doctor_duty_totime'>
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
                        <button type="submit" id="btndaiydutiesUp" name="btndailydutiesUp" class="btn btn-info">
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
