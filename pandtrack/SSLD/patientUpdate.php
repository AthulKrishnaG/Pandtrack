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
                <li class="breadcrumb-item"><a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Patient Info</a>
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
					  $p_id = $_POST['p_id'];
					  $select="SELECT * FROM `pantra`.`patient` WHERE p_id='$p_id'";
						$result=mysqli_query($dbconnection, $select);
						$num = mysqli_num_rows($result);
						$i=0;
						if($num > 0)
						{
							while($i < $num)
							{
							
							$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
							$p_id  = $row['p_id'];
							$p_name = $row['p_name'];
							$p_gender = $row['p_gender'];
							$p_mobilenum= $row['p_mobilenum'];
							$p_address = $row['p_address'];
							$p_email = $row['p_email'];
							$p_indate = $row['p_indate'];
							$p_update = $row['p_update'];
							
							$i = $i+1;
							echo "
							<input type = 'hidden' name='p_id' id = 'p_id' value = '$p_id'>
							<h4 class='form-section'><i class='ft-user'></i> Personal Info</h4>
                        <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput1'>Patient Name</label>
                          <div class='col-md-9'>
                            <input type='text' id='p_name' class='form-control' value='$p_name'
                            name='p_name'>
                          </div>
                        </div>
						<div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput7'>Gender</label>
                          <div class='col-md-9'>
                            <select id='p_gender' name='p_gender' class='form-control'>
                              <option value='' selected='' disabled=''>--Select Gender--</option>
                              <option value='Male'>Male</option>
                              <option value='Female'>Female</option>
							  <option value='others'>others</option> 
                            </select>
                          </div>
                        </div>
                        <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput3'>E-mail</label>
                          <div class='col-md-9'>
                            <input type='text' id='p_email' class='form-control' value='$p_email' name='p_email'>
                          </div>
                        </div>
                        <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput4'>Contact Number</label>
                          <div class='col-md-9'>
                            <input type='text' id='p_mobilenum' class='form-control' value='$p_mobilenum' name='p_mobilenum'>
                          </div>
                        </div>
                        
                        <div class='form-group row'>
                          <label class='col-md-3 label-control' for='projectinput9'>Address</label>
                          <div class='col-md-9'>
                            <textarea id='p_address' rows='5' class='form-control' name='p_address' placeholder='Address'>$p_address</textarea>
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
                        <button type="submit" id="btnpatientUp" name="btnpatientUp" class="btn btn-info">
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
