<?php

	include("dbconnection.php");
	
	session_start();
	
	
	$uEmail=$_SESSION['uEmail'];
	$uID = "";
	$uName = "";
	$uMob = "";
	
	
	$sql = "SELECT * FROM user WHERE uemail='$uEmail'";
	$result = mysqli_query($dbconnection, $sql);

	if (mysqli_num_rows($result) > 0) 
	{
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) 
		{
			$uID = $row["uid"];
			$uName = $row["uname"];
			$uMob = $row["umob"];
			$uDesignation = $row["udesignation"];
			
			$uMember = $row["umob"];
			$uStatus = $row["ustatus"];
			$uImg = $row["uimg"];
		}
	} 
	else 
	{
		echo "<script>location='../index.php'</script>";
		exit();
	}
	 
	if(!isset($uEmail))
	{
		
		echo "<script>location='../index.php'</script>";
		exit();
	}

?>