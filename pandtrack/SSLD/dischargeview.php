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
          <h3 class="content-header-title">Discharge Info</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="dischargeAdd.php">Add discharge</a>
                </li>
                <li class="breadcrumb-item active">Discharge Info
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
                            <th> Patient Name</th>
							<th> gender </th>
                            <th>mobile number</th>
                            <th>address </th>
                            <th>email </th>
                            <th>Disease type</th>
                            <th>Action</th>
                            
                           
                          </tr>
                        </thead>
                        <tbody>
						
						<?php
						$select="SELECT * FROM `pantra`.`discharge`";
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
							$discharge_p_gender  = $row['discharge_p_gender'];
							$discharge_p_mobilenum = $row['discharge_p_mobilenum'];
							$discharge_p_address = $row['discharge_p_address'];
							$discharge_p_email= $row['discharge_p_email'];
							$discharge_p_type = $row['discharge_p_type'];
							$discharge_p_in_date= $row['discharge_p_in_date'];
							$discharge_p_up_date = $row['discharge_p_up_date'];
							
							
							$i = $i+1;
								echo "
							  <tr>
								<td>$discharge_p_id</td>
								<td>$discharge_p_name</td>
								<td>$discharge_p_gender</td>
								<td>$discharge_p_mobilenum</td>
								<td>$discharge_p_address</td>
								<td>$discharge_p_email</td>
								<td>$discharge_p_type</td>
								<td>
								<form  method='post'>
										<input type = 'hidden' name='discharge_p_id' id='discharge_p_id' value='$discharge_p_id'>
										<div class='col-sm-12'>
										 
										  <button type='submit' id='' name='' formaction='dischargeUpdate.php' class='btn btn-icon btn-sm btn-warning mr-0' ><i class='la la-edit'></i></button>
										  <button type='submit' id='btndiscDel' name='btndiscDel' formaction='phpcodes-Delete.php' onclick='return functionbtnDel()' class='btn btn-icon btn-sm btn-danger mr-0' ><i class='la la-trash'></i></button>
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
                            <th> Patient Name</th>
							<th> gender </th>
                            <th>mobile number</th>
                            <th>address </th>
                            <th>email </th>
                            <th>Disease type</th>
                       
                          
      
                           
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