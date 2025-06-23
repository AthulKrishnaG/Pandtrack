<?php

	include("dbconnection.php");
	
	session_start();
	
	
	$uEmail=$_SESSION['uEmail'];
	$uID = "";
	$uName = "";
	$uMob = "";
	$uAddress="";
	
	
	$sql = "SELECT * FROM patient WHERE p_email='$uEmail'";
	$result = mysqli_query($dbconnection, $sql);

	if (mysqli_num_rows($result) > 0) 
	{
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) 
		{
			$uID = $row["p_id"];
			$uName = $row["p_name"];
			$uMob = $row["p_mobilenum"];
			$uGender = $row["p_gender"];
			$uAddress = $row["p_address"];

			
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