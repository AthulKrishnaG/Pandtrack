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
          <h3 class="content-header-title">User Info</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">DataTables</a>
                </li>
                <li class="breadcrumb-item active">User Info
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
                            <th>Sl No</th>
                            <th>Name and ID</th>
                            <th>Designation</th>
                            <th>Contact Data</th>
							<th>Image</th>
                            
                           
                          </tr>
                        </thead>
                        <tbody>
						
						<?php
						$select="SELECT * FROM `pantra`.`user`";
						$result=mysqli_query($dbconnection, $select);
						$num = mysqli_num_rows($result);
						$i=0;
						if($num > 0)
						{
							while($i < $num)
							{
							
							$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
							$uid  = $row['uid'];
							$uempid = $row['uempid'];
							$uname = $row['uname'];
							$udesignation= $row['udesignation'];
							$uemail = $row['uemail'];
							$umob  = $row['umob'];
							$uimg = $row['uimg'];
							$urole  = $row['urole'];
							$ustatus = $row['ustatus'];
							$u_up_date= $row['u_up_date'];
							
							
							$i = $i+1;
								echo "
							  <tr>
								<td>$uid</td>
								<td>$uname ( $uempid )</td>
								<td>$udesignation
								<br>Role: $urole</td>
								<td>$uemail , <br>Mob: $umob</td>
								<td>
								 <a href='../images/user/$uimg' itemprop='contentUrl' data-size='' target='_Blank'>
															<img class='img-thumbnail img-fluid' src='../images/user/$uimg'' width='60px'
															itemprop='thumbnail' alt='Image description' />
														  </a>
								</td>
									
							
								
							  </tr>
							 ";
						 
							}
	
						}
						?> 
                        </tbody>
                        <tfoot>
                          <tr>
							<th>Sl No</th>
                            <th>Name and ID</th>
                            <th>Designation</th>
                            <th>Contact Data</th>
							<th>Image</th>
                         
                            
                              
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