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
   <style>
		form {display:inline};
		
	</style>

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
         <!--       <li class="breadcrumb-item"><a href="#">DataTables</a>
                </li>-->
                <li class="breadcrumb-item active">View Patient Data
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
                            <th>#</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Address</th>
							 <th hidden>Updated On</th>
                            
							<th style="width:160px">Action</th>
                          </tr>
                        </thead>
                        <tbody>
						
						<?php
						$select="SELECT * FROM `pantra`.`patient`";
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
							  <tr>
								<td>$i</td>
								<td>$p_name</td>
								<td>$p_gender</td>
								<td>$p_mobilenum</td>
								<td>$p_address</td>
								<td>$p_email</td>
								<td hidden>$p_indate</td>
								
								<td>
								<form  method='post'>
										<input type = 'hidden' name='p_id' id = 'p_id' value = '$p_id'>
										<div class='col-sm-12'>
										  
										  <button type='submit' id='' name='' formaction='patientUpdate.php' class='btn btn-icon btn-sm btn-warning mr-0' ><i class='la la-edit'></i></button>
										  <button type='submit' id='btnPatiDel' name='btnPatiDel' formaction='phpcodes-Delete.php' onclick='return functionbtnDel()' class='btn btn-icon btn-sm btn-danger mr-0' ><i class='la la-trash'></i></button>
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
                            <th>#</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Address</th>
							 <th hidden>Updated On</th>
                            
							<th style="width:160px">Action</th>
                           
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