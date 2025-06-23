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
          <h3 class="content-header-title">Contact Info</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">DataTables</a>
                </li>
                <li class="breadcrumb-item active">Contact Info
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
							<th>District</th>
                            <th>Places</th>
							<th>Explanation</th>
                            <th>Date & Time</th>

                            <th hidden>Inserted Date</th>
 
                           
                          </tr>
                        </thead>
                        <tbody>
						
						<?php
						$select="SELECT * FROM `pantra`.`contact` order by c_patient asc";
						$result=mysqli_query($dbconnection, $select);
						$num = mysqli_num_rows($result);
						$i=0;
						if($num > 0)
						{
							while($i < $num)
							{
							
							$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
							$c_id  = $row['c_id'];
							$c_patient = $row['c_patient'];
							$c_district = $row['c_district'];
							$c_visited_places = $row['c_visited_places'];
							$c_explain_the_activities= $row['c_explain_the_activities'];
							$c_explanation_activities_date = $row['c_explanation_activities_date'];
							$c_explanation_activities_time= $row['c_explanation_activities_time'];
							$c_in_date= $row['c_in_date'];
							$c_up_date= $row['c_up_date'];
							
							$p_name = "";
							$p_mobilenum = "";
							$queryst = "select p_name, p_mobilenum from patient WHERE p_id='$c_patient'";
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
								<td>$c_district</td>
								<td>$c_visited_places</td>
								<td>$c_explain_the_activities</td>
								<td>$c_explanation_activities_date & $c_explanation_activities_time</td>
								<td hidden>$c_in_date</td>
								
								
				
								
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
							<th>District</th>
                            <th>Places</th>
							<th>Explanation</th>
                            <th>Date & Time</th>

                            <th hidden>Inserted Date</th>
  
                           
                          </tr>
                            
                           
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