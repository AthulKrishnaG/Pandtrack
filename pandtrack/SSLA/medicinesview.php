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
          <h3 class="content-header-title">Medicines Info</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">DataTables</a>
                </li>
                <li class="breadcrumb-item active">Medicines Info
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
                            <th>dose</th>
							<th>date</th>
                            <th>duration</th>

                            
                            <th>Action</th>
							
                           
                          </tr>
                        </thead>
                        <tbody>
						
						<?php
						$select="SELECT * FROM `pantra`.`medicines`";
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
					////		$d_m_startingdate= $row['d_m_startingdate'];
							$d_m_duration = $row['d_m_duration'];
							$d_m_indate= $row['d_m_indate'];
							$d_m_update = $row['d_m_update'];
			
							
							
							$i = $i+1;
								echo "
							  <tr>
								<td>$d_m_id</td>
								<td>$d_m_name</td>
								<td>$d_m_dose</td>
						
								<td>$d_m_duration</td>
								<td>$d_m_indate</td>
								
								<td>
								<form  method='post'>
										<input type = 'hidden' name='d_m_id' id = 'd_m_id' value = '$d_m_id'>
										<div class='col-sm-12'>
										  
										  <button type='submit' id='' name='' formaction='medicinesUpdate.php' class='btn btn-icon btn-sm btn-warning mr-0' ><i class='la la-edit'></i></button>
										  <button type='submit' id='btnmedDel' name='btnmedDel' formaction='phpcodes-Delete.php' onclick='return functionbtnDel()' class='btn btn-icon btn-sm btn-danger mr-0' ><i class='la la-trash'></i></button>
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
                            <th>dose</th>
							<th>date</th>
                            <th>duration</th>

                            <th>Action</th>
                            
                          
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