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
          <h3 class="content-header-title"> Source Info</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">DataTables</a>
                </li>
                <li class="breadcrumb-item active"> Source Info
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
                            <th>Patient</th>
							<th>Location</th>
                            <th>District & State</th>
                            <th>panchayath & Ward</th>
                            <th>Inserted Date</th>
                            <th style="width:160px">Action</th>
                           
                          </tr>
                        </thead>
                        <tbody>
						
						<?php
						$select="SELECT * FROM `pantra`.`source` order by d_source_patient asc";
						$result=mysqli_query($dbconnection, $select);
						$num = mysqli_num_rows($result);
						$i=0;
						if($num > 0)
						{
							while($i < $num)
							{
							
							$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
							$d_source_id  = $row['d_source_id'];
							$d_source_patient  = $row['d_source_patient'];
							$d_source_confirmed_location = $row['d_source_confirmed_location'];
							$d_source_state = $row['d_source_state'];
							$d_source_district= $row['d_source_district'];
							$d_source_panchayath = $row['d_source_panchayath'];
							$d_source_ward_no = $row['d_source_ward_no'];
							$d_source_in_date= $row['d_source_in_date'];
							
							$p_name = "";
							$p_mobilenum = "";
							$queryst = "select p_name, p_mobilenum from patient WHERE p_id='$d_source_patient'";
							$resultst = mysqli_query($dbconnection,$queryst);	
							while($rowst=mysqli_fetch_row($resultst))
							{
								$p_name = $rowst[0];
								$p_mobilenum = $rowst[1];
							}
							
					
							
							$i = $i+1;
								echo "
							  <tr>
								<td>$i</td>
								<td>$p_name ($p_mobilenum)</td>
								<td>$d_source_confirmed_location</td>
								<td>$d_source_district, $d_source_state</td>
								<td>$d_source_panchayath - $d_source_ward_no</td>
								<td>$d_source_in_date</td>
								
							
							  <td>
								<form  method='post'>
										<input type = 'hidden' name='d_source_id' id = 'd_source_id' value = '$d_source_id'>
										<div class='col-sm-12'>
										  
										  <button type='submit' id='' name='' formaction='sourceUpdate.php' class='btn btn-icon btn-sm btn-warning mr-0' ><i class='la la-edit'></i></button>
										  <button type='submit' id='btnsourceDel' name='btnsourceDel' formaction='phpcodes-Delete.php' onclick='return functionbtnDel()' class='btn btn-icon btn-sm btn-danger mr-0' ><i class='la la-trash'></i></button>
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
                            <th>Patient</th>
							<th>Location</th>
                            <th>District & State</th>
                            <th>panchayath & Ward</th>
                            <th>Inserted Date</th>
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