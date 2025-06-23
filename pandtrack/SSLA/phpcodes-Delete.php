<?php
include("dbconnection.php");
include("session.php");


//Delete Question
if(isset($_POST["btnPatiDel"]))
{
	$p_id = $_POST['p_id'];
		
	$deleteqry="DELETE FROM `pantra`.`patient` WHERE p_id='$p_id'";
	$delresult=mysqli_query($dbconnection,$deleteqry);
	
	$msg = "3";
	
	if($delresult) 
	{
		$msg = urlencode("Patient data Deleted successfully!");
		
		echo "<script> window.location.href ='success3.php?msg=$msg'; </script>";
		exit();
	} 
	else 
	{
		echo "<script> window.location.href ='error.php?msg=$msg'; </script>";
		exit();
	}
}
if(isset($_POST["btndisDel"]))
{
	$d_id = $_POST['d_id'];
		
	$deleteqry="DELETE FROM `pantra`.`disease` WHERE d_id='$d_id'";
	$delresult=mysqli_query($dbconnection,$deleteqry);
	
	$msg = "3";
	
	if($delresult) 
	{
		$msg = urlencode("Disease data Deleted successfully!");
		
		echo "<script> window.location.href ='success3.php?msg=$msg'; </script>";
		exit();
	} 
	else 
	{
		echo "<script> window.location.href ='error.php?msg=$msg'; </script>";
		exit();
	}
}
if(isset($_POST["btnsympDel"]))
{
	$d_s_id = $_POST['d_s_id'];
		
	$deleteqry="DELETE FROM `pantra`.`symptoms` WHERE d_s_id='$d_s_id'";
	$delresult=mysqli_query($dbconnection,$deleteqry);
	
	$msg = "3";
	
	if($delresult) 
	{
		$msg = urlencode("Symptoms data Deleted successfully!");
		
		echo "<script> window.location.href ='success3.php?msg=$msg'; </script>";
		exit();
	} 
	else 
	{
		echo "<script> window.location.href ='error.php?msg=$msg'; </script>";
		exit();
	}
}
if(isset($_POST["btnmedDel"]))
{
	$d_m_id = $_POST['d_m_id'];
		
	$deleteqry="DELETE FROM `pantra`.`medicines` WHERE d_m_id='$d_m_id'";
	$delresult=mysqli_query($dbconnection,$deleteqry);
	
	$msg = "Succesfully Deleted";
	
	if($delresult) 
	{
		$msg = urlencode("Medicine data Deleted successfully!");
		
		echo "<script> window.location.href ='success3.php?msg=$msg'; </script>";
		exit();
	} 
	else 
	{
		echo "<script> window.location.href ='error.php?msg=$msg'; </script>";
		exit();
	}
}
	 
if(isset($_POST["btnsourceDel"]))
{
	$d_source_id = $_POST['d_source_id'];
		
	$deleteqry="DELETE FROM `pantra`.`source` WHERE d_source_id='$d_source_id'";
	$delresult=mysqli_query($dbconnection,$deleteqry);
	
	$msg = "3";
	
	if($delresult) 
	{
		$msg = urlencode("Source data Deleted successfully!");
		
		echo "<script> window.location.href ='success3.php?msg=$msg'; </script>";
		exit();
	} 
	else 
	{
		echo "<script> window.location.href ='error.php?msg=$msg'; </script>";
		exit();
	}
}
if(isset($_POST["btnhotspDel"]))
{
	$h_id = $_POST['h_id'];
		
	$deleteqry="DELETE FROM `pantra`.`hotspot` WHERE h_id='$h_id'";
	$delresult=mysqli_query($dbconnection,$deleteqry);
	
	$msg = "3";
	
	if($delresult) 
	{
		$msg = urlencode("Hotspot data Deleted successfully!");
		
		echo "<script> window.location.href ='success3.php?msg=$msg'; </script>";
		exit();
	} 
	else 
	{
		echo "<script> window.location.href ='error.php?msg=$msg'; </script>";
		exit();
	}
}
if(isset($_POST["btnconDel"]))
{
	$c_id = $_POST['c_id'];
		
	$deleteqry="DELETE FROM `pantra`.`contact` WHERE c_id='$c_id'";
	$delresult=mysqli_query($dbconnection,$deleteqry);
	
	$msg = "3";
	
	if($delresult) 
	{
		$msg = urlencode("Contact data Deleted successfully!");
		
		echo "<script> window.location.href ='success3.php?msg=$msg'; </script>";
		exit();
	} 
	else 
	{
		echo "<script> window.location.href ='error.php?msg=$msg'; </script>";
		exit();
	}
}
if(isset($_POST["btnPrimContDel"]))
{
	$c_p_id = $_POST['c_p_id'];
		
	$deleteqry="DELETE FROM `pantra`.`primary_contact` WHERE c_p_id='$c_p_id'";
	$delresult=mysqli_query($dbconnection,$deleteqry);
	
	$msg = "3";
	
	if($delresult) 
	{
		$msg = urlencode("Primary Contact data Deleted successfully!");
		
		echo "<script> window.location.href ='success3.php?msg=$msg'; </script>";
		exit();
	} 
	else 
	{
		echo "<script> window.location.href ='error.php?msg=$msg'; </script>";
		exit();
	}
}
if(isset($_POST["btnhisDel"]))
{
	$h_id = $_POST['h_id'];
		
	$deleteqry="DELETE FROM `pantra`.`history` WHERE h_id='$h_id'";
	$delresult=mysqli_query($dbconnection,$deleteqry);
	
	$msg = "3";
	
	if($delresult) 
	{
		$msg = urlencode("History data Deleted successfully!");
		
		echo "<script> window.location.href ='success3.php?msg=$msg'; </script>";
		exit();
	} 
	else 
	{
		echo "<script> window.location.href ='error.php?msg=$msg'; </script>";
		exit();
	}
}
if(isset($_POST["btndocpDel"]))
{
	$doctor_id = $_POST['doctor_id'];
		
	$deleteqry="DELETE FROM `pantra`.`doctor` WHERE doctor_id='$doctor_id'";
	$delresult=mysqli_query($dbconnection,$deleteqry);

	
	if($delresult) 
	{
		$msg = urlencode("Doctor data Deleted successfully!");
		
		echo "<script> window.location.href ='success3.php?msg=$msg'; </script>";
		exit();
	} 
	else 
	{
		echo "<script> window.location.href ='error.php?msg=$msg'; </script>";
		exit();
	}
}
if(isset($_POST["btndailyDel"]))
{
	$doctor_duty_id = $_POST['doctor_duty_id'];
		
	$deleteqry="DELETE FROM `pantra`.`dailyduties` WHERE doctor_duty_id='$doctor_duty_id'";
	$delresult=mysqli_query($dbconnection,$deleteqry);
	
	$msg = "3";
	
	if($delresult) 
	{
		$msg = urlencode("Daily Duty data Deleted successfully!");
		
		echo "<script> window.location.href ='success3.php?msg=$msg'; </script>";
		exit();
	} 
	else 
	{
		echo "<script> window.location.href ='error.php?msg=$msg'; </script>";
		exit();
	}
}
if(isset($_POST["btndiscDel"]))
{
	$discharge_p_id = $_POST['discharge_p_id'];
		
	$deleteqry="DELETE FROM `pantra`.`discharge` WHERE discharge_p_id='$discharge_p_id'";
	$delresult=mysqli_query($dbconnection,$deleteqry);

	
	if($delresult) 
	{
		$msg = urlencode("Discharge data Deleted successfully!");
		
		echo "<script> window.location.href ='success3.php?msg=$msg'; </script>";
		exit();
	} 
	else 
	{
		echo "<script> window.location.href ='error.php?msg=$msg'; </script>";
		exit();
	}
}
//Delete Exam Candedate
//Delete Exam Candedate
//Delete Exam Candedate

//Delete Exam Candedate
//Delete Exam Candedate
//Delete Exam Candedate
if(isset($_POST["btnexamRegtDel"]))
{
	$eregid = $_POST['eregid'];
		
	$deleteqry="DELETE FROM `dbarrow`.`examreg` WHERE eregid='$eregid'";
	$delresult=mysqli_query($dbconnection,$deleteqry);
	
	$msg = "6";
	
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


//Delete Exam Candedate
if(isset($_POST["btnexamRegtDel"]))
{
	$eregid = $_POST['eregid'];
		
	$deleteqry="DELETE FROM `dbarrow`.`examreg` WHERE eregid='$eregid'";
	$delresult=mysqli_query($dbconnection,$deleteqry);
	
	$msg = "6";
	
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