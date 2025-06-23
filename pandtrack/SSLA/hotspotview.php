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
          <h3 class="content-header-title">Hotspot Area Info</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">DataTables</a>
                </li>
                <li class="breadcrumb-item active">Hotspot Area Info
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
                            <th>State</th>
                            <th>District</th>
							<th>Taluk</th>
                            <th>Block</th>
                            <th>Panchayath</th>
							<th>Ward</th>
                            <th>Area</th>
                            <th>Action</th>
                            
                           
                          </tr>
                        </thead>
                        <tbody>
						
						<?php
						$select="SELECT * FROM `pantra`.`hotspot` order by h_state, h_district, h_taluk, h_block, h_panchayath, h_ward_no asc";
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
							$h_in_date= $row['h_in_date'];
							$h_up_date = $row['h_up_date'];
					
							
							$i = $i+1;
								echo "
							  <tr>
								<td>$h_id</td>
								<td>$h_state</td>
								<td>$h_district</td>
								<td>$h_taluk</td>
								<td>$h_block</td>
								<td>$h_panchayath</td>
								<td>$h_ward_no</td>
								<td>$h_confirmed_area</td>

								
								
								<td>
								<form  method='post'>
										<input type = 'hidden' name='h_id' id = 'h_id' value = '$h_id'>
										<div class='col-sm-12'>
										
										  <button type='submit' id='' name='' formaction='hotspotUpdate.php' class='btn btn-icon btn-sm btn-warning mr-0' ><i class='la la-edit'></i></button>
										  <button type='submit' id='btnhotspDel' name='btnhotspDel' formaction='phpcodes-Delete.php' onclick='return functionbtnDel()' class='btn btn-icon btn-sm btn-danger mr-0' ><i class='la la-trash'></i></button>
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
                            <th>State</th>
                            <th>District</th>
							<th>Taluk</th>
                            <th>Block</th>
                            <th>Panchayath</th>
							<th>Ward</th>
                            <th>Area</th>
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