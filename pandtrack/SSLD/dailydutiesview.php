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
	 <script>
	function functionbtnDel() 
	{
		if (confirm("Are you sure on deleting Data")) 
		{
			return true;
		} 
		else 
		{
			return false;
		}
	}
   </script>
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
                <li class="breadcrumb-item"><a href="#">DataTables</a>
                </li>
                <li class="breadcrumb-item active">Daily Duty Info
                </li>
              </ol>
            </div>
          </div>
        </div>
        
      </div>
      <div class="content-body">
        <!-- HTML5 export buttons table -->
        <section id="html5">
          <div class="row">
            <div class="col-12">
              <div class="card">
                
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                  
                      <table class="table table-striped table-bordered dataex-html5-export">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Daily duty doctor department</th>
							<th>duty day and date</th>
                            <th>duty fromtime</th>
                            <th>duty totime</th>
   
                            
                            <th>Action</th>
                           
                          </tr>
                        </thead>
                        <tbody>
						
						<?php
						$select="SELECT * FROM `pantra`.`dailyduties`";
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
							$doctor_duty_day_and_date  = $row['doctor_duty_day_and_date'];
							$doctor_duty_fromtime = $row['doctor_duty_fromtime'];
							$doctor_duty_totime = $row['doctor_duty_totime'];
							$doctor_duty_indate= $row['doctor_duty_indate'];
							$doctor_duty_update = $row['doctor_duty_update'];
							
							
							$i = $i+1;
								echo "
							  <tr>
								<td>$doctor_duty_id</td>
								<td>$doctor_duty_list</td>
								<td>$doctor_duty_dept</td>
								<td>$doctor_duty_day_and_date</td>
								<td>$doctor_duty_fromtime</td>
								<td>$doctor_duty_totime</td>
								<td>
								<form  method='post'>
										<input type = 'hidden' name='doctor_duty_id' id = 'doctor_duty_id' value = '$doctor_duty_id'>
										<div class='col-sm-12'>
										 
										  <button type='submit' id='' name='' formaction='dailydutiesUpdate.php' class='btn btn-icon btn-sm btn-warning mr-0' ><i class='la la-edit'></i></button>
										  <button type='submit' id='btndailyDel' name='btndailyDel' formaction='phpcodes-Delete.php' onclick='return functionbtnDel()' class='btn btn-icon btn-sm btn-danger mr-0' ><i class='la la-trash'></i></button>
										</div>
									</form> 
								
								</td>
								
	
							
								
								
							  </tr>
							 ";
						 
							}
	
						}
						?> 
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Daily duty doctor department</th>
							<th>duty day and date</th>
                            <th>duty fromtime</th>
                            <th>duty totime</th>
   
                          
                            
                          
                          </tr>
                        </tfoot>
                      </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/ HTML5 export buttons table -->
        
      </div>
    </div>
  </div>
  	<!--side menu start-->
	<?php
        include("footer.php");
    ?>
	<!--side menu end-->