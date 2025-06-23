<?php
include("dbconnection.php");


//Delete Branch
if(isset($_POST["btnCareDel"]))
{
	$cid  = $_POST['cid'];
		
	$deleteqry="DELETE FROM `flglobal_wp103`.`career` WHERE cid ='$cid'";
	$delresult=mysqli_query($dbconnection,$deleteqry);
	
	
	$msg = "6";
	
	//Check whether the query was successful or not
	if($delresult) 
	{
		echo "<script>location='success.php?msg=$msg'</script>";
		exit();
	} 
	else 
	{
		
		echo "<script>location='error.php?msg=$msg'</script>";
		exit();
	}
}

//Delete Brnad
if(isset($_POST["btnNewsDel"]))
{
	$nid = $_POST['nid'];
		
	$deleteqry="DELETE FROM `flglobal_wp103`.`news` WHERE nid='$nid'";
	$delresult=mysqli_query($dbconnection,$deleteqry);
	
	
	$msg = "9";
	
	//Check whether the query was successful or not
	if($delresult) 
	{
		echo "<script>location='success.php?msg=$msg'</script>";
		exit();
	} 
	else 
	{
		
		echo "<script>location='error.php?msg=$msg'</script>";
		exit();
	}
}


//Delete Product
if(isset($_POST["btnProDel"]))
{
	$bid = $_POST['bid'];
		
	$deleteqry="DELETE FROM `sajagrou_db`.`bpage` WHERE bid='$bid'";
	$delresult=mysqli_query($dbconnection,$deleteqry);
	
	
	$msg = "12";
	
	//Check whether the query was successful or not
	if($delresult) 
	{
		echo "<script>location='success.php?msg=$msg'</script>";
		exit();
	} 
	else 
	{
		
		echo "<script>location='error.php?msg=$msg'</script>";
		exit();
	}
}


//Delete Product
if(isset($_POST["btnGalDel"]))
{
	$gid  = $_POST['gid'];
		
	$deleteqry="DELETE FROM `sajagrou_db`.`gallery` WHERE gid ='$gid'";
	$delresult=mysqli_query($dbconnection,$deleteqry);
	
	
	$msg = "15";
	
	//Check whether the query was successful or not
	if($delresult) 
	{
		echo "<script>location='success.php?msg=$msg'</script>";
		exit();
	} 
	else 
	{
		
		echo "<script>location='error.php?msg=$msg'</script>";
		exit();
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SAJA</title>
</head>

<body>
</body>
</html>