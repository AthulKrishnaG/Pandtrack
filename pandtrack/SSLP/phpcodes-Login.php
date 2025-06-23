<?php
include("dbconnection.php");
//login
if(isset($_POST["btnlogin"]))
{
  
  if(count($_POST)>0) 
  {
	$usernamees = $_POST['username'];
	$passwordes = $_POST['password'];
	
	$ucemail = strtolower($usernamees);
	
	$username = mysqli_real_escape_string($dbconnection, $ucemail);
	$password = mysqli_real_escape_string($dbconnection, $passwordes);
	
	
	//Create query
	$qry="SELECT * FROM  `login` WHERE luname='$username' AND lpass='$password'";
	$resultlog = mysqli_query($dbconnection,$qry);  
	$row_cntlog = $resultlog->num_rows;
	$rowlog = mysqli_fetch_array($resultlog, MYSQLI_ASSOC);
	if ($row_cntlog>0)
	{
		if($rowlog["lflag"]=="Available")
		{
			
			ob_start();
			session_start();
			
			
			$_SESSION["uEmail"] = $rowlog["luname"];
			
			if ($rowlog["lrole"]=="Admin")
			{
				echo "<script>location='SSLA/index.php'</script>";
				exit();
			}
			else if ($rowlog["lrole"]=="Doctor")
			{
				echo "<script>location='SSLD/index.php'</script>";
				exit();
			}
			else if ($rowlog["lrole"]=="Medical")
			{
				echo "<script>location='SSLM/index.php'</script>";
				exit();
			}
			else if ($rowlog["lrole"]=="Patient")
			{
				echo "<script>location='SSLP/index.php'</script>";
				exit();
			}
			else
			{
				$msg=1;
				echo "<script>location='error.php?msg=$msg'</script>";
				exit();
			}
		}
		else
		{
			
			
			if ($rowlog["lFlag"]=="Unvailable")
			{
				$msg=3;
				echo "<script>location='error.php?msg=$msg'</script>";
				exit();
			}
			else 
			{
				$msg=4;
				echo "<script>location='error.php?msg=$msg'</script>";
				exit();
			}
			
		}
	} 
	else 
	{
		$msg=2;
		echo "<script>location='error.php?msg=$msg'</script>";
		exit();
	}
	
  }
}

?>