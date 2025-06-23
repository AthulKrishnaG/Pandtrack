<?php
include("dbconnection.php");


if(isset($_POST["btnCareAdd"]))
{
	$ctitle = $_POST['ctitle'];
	$ctext = $_POST['ctext'];
	$cquali = $_POST['cquali'];
	$cagea = $_POST['cagea'];
	$cageb = $_POST['cageb'];
	$cgender = $_POST['cgender'];
	$cexperi = $_POST['cexperi'];
	$cjobl = $_POST['cjobl'];
	$cdline = $_POST['cdline'];
	$cstatus = $_POST['cstatus'];
	$cupdate = date('Y-m-d H:i:s');
	
	$cage = $cagea.$cageb; 
	
	$msg = "1";
		
	//Insert into Registation table
	$insertqry="INSERT INTO  `flglobal_wp103`.`career` (`cid` ,`ctitle` ,`ctext`,`cquali` ,`cage` ,`cgender` ,`cexperi` ,`cjobl`,`cdline` ,`cupdate` ,`cstatus`)
VALUES (NULL, '$ctitle', '$ctext', '$cquali', '$cage', '$cgender', '$cexperi', '$cjobl', '$cdline', '$cupdate', '$cstatus')";
	$insertresult=mysqli_query($dbconnection,$insertqry);
	//Check whether the query was successful or not
	if($insertresult) 
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