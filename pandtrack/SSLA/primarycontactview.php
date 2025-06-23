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
          <h3 class="content-header-title">Primary Contact Info</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">DataTables</a>
                </li>
                <li class="breadcrumb-item active">Primary Contact Info
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
                            <th>Name</th>
							<th>State</th>
                            <th>District</th>
							<th>Town & Place</th>
                            <th>Inserted Date</th>
                            <th style="width:160px">Action</th>
                           
                          </tr>
                        </thead>
                        <tbody>
						
						<?php
						$select="SELECT * FROM `pantra`.`primary_contact`";
						$result=mysqli_query($dbconnection, $select);
						$num = mysqli_num_rows($result);
						$i=0;
						if($num > 0)
						{
							while($i < $num)
							{
							
							$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
							$c_p_id  = $row['c_p_id'];
							$c_p_patient = $row['c_p_patient'];
							$c_p_person = $row['c_p_person'];
							$c_p_state = $row['c_p_state'];
							$c_p_district = $row['c_p_district'];
							$c_p_town = $row['c_p_town'];
							$c_p_place = $row['c_p_place'];
	
							$c_p_in_date= $row['c_p_in_date'];
							
							$c_p_up_date= $row['c_p_up_date'];
							
							$p_name = "";
							$p_mobilenum = "";
							$queryst = "select p_name, p_mobilenum from patient WHERE p_id='$c_p_patient'";
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
								<td>$c_p_person</td>
								<td>$c_p_state</td>
								<td>$c_p_district</td>
								<td>$c_p_town & $c_p_place</td>

								<td>$c_p_in_date</td>
								
								<td>
								<form  method='post'>
										<input type = 'hidden' name='c_p_id' id = 'c_p_id' value = '$c_p_id'>
										<div class='col-sm-12'>
										  
										  <button type='submit' id='' name='' formaction='primarycontactUpdate.php' class='btn btn-icon btn-sm btn-warning mr-0' ><i class='la la-edit'></i></button>
										  <button type='submit' id='btnPrimContDel' name='btnPrimContDel' formaction='phpcodes-Delete.php' onclick='return functionbtnDel()' class='btn btn-icon btn-sm btn-danger mr-0' ><i class='la la-trash'></i></button>
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
                            <th>Name</th>
							<th>State</th>
                            <th>District</th>
							<th>Town & Place</th>
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