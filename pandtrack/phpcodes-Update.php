<?php
include("dbconnection.php");
include("session.php");

//Course Update
if(isset($_POST["btnpatientUp"]))
{
	$p_id = $_POST['p_id'];
	$p_name = $_POST['p_name'];
	$p_gender = $_POST['p_gender'];
	$p_mobilenum = $_POST['p_mobilenum'];
	$p_address = $_POST['p_address'];
	$p_email = $_POST['p_email'];
	
	$p_update = date('Y-m-d H:i:s');
	
	$msg = "2";
	
	$updateqry="UPDATE `pantra`.`patient` SET p_name='$p_name', p_gender='$p_gender', p_mobilenum='$p_mobilenum', p_address='$p_address', p_email='$p_email', p_update='$p_update' WHERE p_id='$p_id'";
	$updateresult = mysqli_query($dbconnection,$updateqry);
	if($updateresult) 
	{
		echo "Updated";
		exit();
	} else 
	{
		echo "Not Updated";
		exit();
	}		
} 

if(isset($_POST["btndiseaseUp"]))
{
	$d_id = $_POST['d_id'];
	$d_title = $_POST['d_title'];
	$d_date_of_onset = $_POST['d_date_of_onset'];
	
	$up_date = date('Y-m-d H:i:s');
	
	$msg = "2";
	
	$updateqry="UPDATE `pantra`.`disease` SET d_title='$d_title', d_date_of_onset='$d_date_of_onset', up_date='$up_date' WHERE d_id='$d_id'";
	$updateresult = mysqli_query($dbconnection,$updateqry);
	if($updateresult) 
	{
		echo "Updated";
		exit();
	} else 
	{
		echo "Not Updated";
		exit();
	}		
}
if(isset($_POST["btnsymptomsUp"]))
{
	$d_s_id = $_POST['d_s_id'];
	$d_s_name = $_POST['d_s_name'];
	$d_s_date_of_onset = $_POST['d_s_date_of_onset'];
	
	$up_date = date('Y-m-d H:i:s');
	
	$msg = "2";
	
	$updateqry="UPDATE `pantra`.`symptoms` SET d_s_name='$d_s_name', d_s_date_of_onset='$d_s_date_of_onset', up_date='$up_date' WHERE d_s_id='$d_s_id'";
	$updateresult = mysqli_query($dbconnection,$updateqry);
	if($updateresult) 
	{
		echo "Updated";
		exit();
	} else 
	{
		echo "Not Updated";
		exit();
	}		
}

if(isset($_POST["btnmedicinesup"]))
{
	$d_m_id = $_POST['d_m_id'];
	$d_m_name = $_POST['d_m_name'];
	$d_m_dose = $_POST['d_m_dose'];
	$d_m_startingdate = $_POST['d_m_startingdate'];
	$d_m_duration = $_POST['d_m_duration'];
	
	
	$d_m_update = date('Y-m-d H:i:s');
	
	$msg = "2";
	
	$updateqry="UPDATE `pantra`.`medicines` SET d_m_name='$d_m_name', d_m_dose='$d_m_dose', d_m_startingdate='$d_m_startingdate', d_m_duration='$d_m_duration', d_m_update='$d_m_update' WHERE d_m_id='$d_m_id'";
	$updateresult = mysqli_query($dbconnection,$updateqry);
	if($updateresult) 
	{
		echo "Updated";
		exit();
	} else 
	{
		echo "Not Updated";
		exit();
	}		
} 
if(isset($_POST["btnsourceup"]))
{
	$d_source_id = $_POST['d_source_id'];
	$d_source_confirmed_location = $_POST['d_source_confirmed_location'];
	$d_source_state = $_POST['d_source_state'];
	$d_source_district = $_POST['d_source_district'];
	$d_source_panchayath = $_POST['d_source_panchayath'];
	$d_source_ward_no = $_POST['d_source_ward_no'];
	
	
	$d_source_up_date = date('Y-m-d H:i:s');
	
	$msg = "2";
	
	$updateqry="UPDATE `pantra`.`source` SET d_source_confirmed_location='$d_source_confirmed_location', d_source_state='$d_source_state', d_source_district='$d_source_district', d_source_panchayath='$d_source_panchayath', d_source_ward_no='$d_source_ward_no',d_source_up_date='$d_source_up_date' WHERE d_source_id='$d_source_id'";
	$updateresult = mysqli_query($dbconnection,$updateqry);
	if($updateresult) 
	{
		echo "Updated";
		exit();
	} else 
	{
		echo "Not Updated";
		exit();
	}		
} 
if(isset($_POST["btnhotspotUp"]))
{
	$h_id = $_POST['h_id'];
	$h_state= $_POST['h_state'];
	$h_district = $_POST['h_district'];
	$h_taluk = $_POST['h_taluk'];
	$h_block = $_POST['h_block'];
	$h_panchayath = $_POST['h_panchayath'];
	$h_ward_no = $_POST['h_ward_no'];
	$h_confirmed_area = $_POST['h_confirmed_area'];


	
	$h_up_date = date('Y-m-d H:i:s');
	
	$msg = "2";
	
	$updateqry="UPDATE `pantra`.`hotspot` SET h_state='$h_state', h_state='$h_state', h_district='$h_district', h_taluk='$h_taluk', h_block='$h_block', h_panchayath='$h_panchayath', h_ward_no='$h_ward_no', h_confirmed_area='$h_confirmed_area',h_up_date='$h_up_date' WHERE h_id='$h_id'";
	$updateresult = mysqli_query($dbconnection,$updateqry);
	if($updateresult) 
	{
		echo "Updated";
		exit();
	} else 
	{
		echo "Not Updated";
		exit();
	}		
} 

if(isset($_POST["btncontactUp"]))
{
	$c_id = $_POST['c_id'];
	$c_district = $_POST['c_district'];
	$c_visited_places = $_POST['c_visited_places'];
	$c_explain_the_activities = $_POST['c_explain_the_activities'];
	$c_explanation_activities_date = $_POST['c_explanation_activities_date'];
	$c_explanation_activities_time = $_POST['c_explanation_activities_time'];
	
	
	$c_up_date = date('Y-m-d H:i:s');
	
	$msg = "2";
	
	$updateqry="UPDATE `pantra`.`contact` SET c_district='$c_district', c_visited_places='$c_visited_places', c_explain_the_activities='$c_explain_the_activities', c_explanation_activities_date='$c_explanation_activities_date', c_explanation_activities_time='$c_explanation_activities_time',c_up_date='$c_up_date' WHERE c_id='$c_id'";
	$updateresult = mysqli_query($dbconnection,$updateqry);
	if($updateresult) 
	{
		echo "Updated";
		exit();
	} else 
	{
		echo "Not Updated";
		exit();
	}		
} 
if(isset($_POST["btnprimarycontactUp"]))
{
	$c_p_id = $_POST['c_p_id'];
	$c_p_person= $_POST['c_p_person'];
	$c_p_district = $_POST['c_p_district'];
	$c_p_town = $_POST['c_p_town'];
	$c_p_place = $_POST['c_p_place'];
	


	
	$c_p_up_date = date('Y-m-d H:i:s');
	
	$msg = "2";
	
	$updateqry="UPDATE `pantra`.`primary_contact` SET c_p_person='$c_p_person', c_p_district='$c_p_district', c_p_town='$c_p_town', c_p_place='$c_p_place',c_p_up_date='$c_p_up_date' WHERE c_p_id='$c_p_id'";
	$updateresult = mysqli_query($dbconnection,$updateqry);
	if($updateresult) 
	{
		echo "Updated";
		exit();
	} else 
	{
		echo "Not Updated";
		exit();
	}		
} 

if(isset($_POST["btnhistoryUp"]))
{
	$h_id = $_POST['h_id'];
	$h_days_after_the_onset_of_the_disease = $_POST['h_days_after_the_onset_of_the_disease'];
	$h_effective_medicines = $_POST['h_effective_medicines'];
	
	$h_up_date = date('Y-m-d H:i:s');
	
	$msg = "2";
	
	$updateqry="UPDATE `pantra`.`history` SET h_days_after_the_onset_of_the_disease='$h_days_after_the_onset_of_the_disease', h_effective_medicines='$h_effective_medicines',h_up_date='$h_up_date' WHERE h_id='$h_id'";
	$updateresult = mysqli_query($dbconnection,$updateqry);
	if($updateresult) 
	{
		echo "Updated";
		exit();
	} else 
	{
		echo "Not Updated";
		exit();
	}
}	
if(isset($_POST["btndoctorUp"]))
{
	$doctor_id = $_POST['doctor_id'];
	$doctor_name = $_POST['doctor_name'];
	$doctor_dept = $_POST['doctor_dept'];
	
	$doctor_up_date = date('Y-m-d H:i:s');
	
	$msg = "2";
	
	$updateqry="UPDATE `pantra`.`doctor` SET doctor_name='$doctor_name', doctor_dept='$doctor_dept',doctor_up_date='$doctor_up_date' WHERE doctor_id='$doctor_id'";
	$updateresult = mysqli_query($dbconnection,$updateqry);
	if($updateresult) 
	{
		echo "Updated";
		exit();
	} else 
	{
		echo "Not Updated";
		exit();
	}		
}	

if(isset($_POST["btndailydutiesUp"]))
{
	$doctor_duty_id = $_POST['doctor_duty_id'];
	$doctor_duty_list= $_POST['doctor_duty_list'];
	$doctor_duty_dept = $_POST['doctor_duty_dept'];
	$doctor_duty_day_and_date = $_POST['doctor_duty_day_and_date'];
	$doctor_duty_fromtime = $_POST['doctor_duty_fromtime'];
	$doctor_duty_totime = $_POST['doctor_duty_totime'];
	
	
	$doctor_duty_update = date('Y-m-d H:i:s');
	
	$msg = "2";
	
	$updateqry="UPDATE `pantra`.`dailyduties` SET doctor_duty_list='$doctor_duty_list', doctor_duty_dept='$doctor_duty_dept',doctor_duty_day_and_date='$doctor_duty_day_and_date',doctor_duty_fromtime='$doctor_duty_fromtime',doctor_duty_totime='$doctor_duty_totime',doctor_duty_update='$doctor_duty_update' WHERE doctor_duty_id='$doctor_duty_id'";
	$updateresult = mysqli_query($dbconnection,$updateqry);
	if($updateresult) 
	{
		echo "Updated";
		exit();
	} else 
	{
		echo "Not Updated";
		exit();
	}		
} 
if(isset($_POST["btndischargeUp"]))
{
	$discharge_p_id = $_POST['discharge_p_id'];
	$discharge_p_name= $_POST['discharge_p_name'];
	$discharge_p_gender = $_POST['discharge_p_gender'];
	$discharge_p_mobilenum = $_POST['discharge_p_mobilenum'];
	$discharge_p_address = $_POST['discharge_p_address'];
	$discharge_p_email = $_POST['discharge_p_email'];
	$discharge_p_type = $_POST['discharge_p_type'];
	
	$discharge_p_up_date = date('Y-m-d H:i:s');
	
	$msg = "2";
	
	$updateqry="UPDATE `pantra`.`discharge` SET discharge_p_name='$discharge_p_name', discharge_p_gender='$discharge_p_gender',discharge_p_mobilenum='$discharge_p_mobilenum',discharge_p_address='$discharge_p_address',discharge_p_email='$discharge_p_email',discharge_p_type='$discharge_p_type',discharge_p_up_date='$discharge_p_up_date' WHERE discharge_p_id='$discharge_p_id'";
	$updateresult = mysqli_query($dbconnection,$updateqry);
	if($updateresult) 
	{
		echo "Updated";
		exit();
	} else 
	{
		echo "Not Updated";
		exit();
	}		
} 

//Branch Update
if(isset($_POST["btnBpageUpdate"]))
{
	
	$bmid = $_POST["bmid"];
													
	$bmtitle = $_POST['bmtitle'];
	$bmtext = $_POST['bmtext'];
													
	$bmaddress = $_POST['bmaddress'];
	$bmemail = $_POST['bmemail'];
	$bmwebli = $_POST['bmwebli'];
	$bmwhats = $_POST['bmwhats'];
	$bmfb = $_POST['bmfb'];
	$bmlin = $_POST['bmlin'];
	$bmyout = $_POST['bmyout'];
	$bminst = $_POST['bminst'];
	$bmcontnum = $_POST['bmcontnum'];
	$bmorder = $_POST['bmorder'];
													
	$bmstatus = $_POST['bmstatus'];
	
	
	$msg = "8";
	
	if ($_FILES['bmimage']['size'] == 0)
	{
		
		$updateqry="UPDATE `sajagrou_db`.`bmmpage` SET bmtitle='$bmtitle', bmtext='$bmtext', bmaddress='$bmaddress', bmemail='$bmemail',  bmwebli='$bmwebli',bmwhats='$bmwhats', bmfb='$bmfb', bmlin='$bmlin', 
		bmyout='$bmyout', bminst='$bminst', bmcontnum='$bmcontnum', bmorder='$bmorder', bmstatus='$bmstatus' WHERE bmid='$bmid'";
			$updateresult = mysqli_query($dbconnection,$updateqry);
			if($updateresult) 
			{
				echo "<script>location='success.php?msg=$msg'</script>";
				exit();
				
			} else {
				
				echo "<script>location='error.php?msg=$msg'</script>";
				exit();
				
			}
	

	}
	else {
		
		$target_dir = "../../images/webpage/";
		$uploaded_file = rand(1000,1000000)."-". basename($_FILES["bmimage"]["name"]);
		$target_file = $target_dir .$uploaded_file;
		
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		
			$check = getimagesize($_FILES["bmimage"]["tmp_name"]);
			if($check !== false) {
				//$msg =  "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				//$msg =  "File is not an image.";
				$uploadOk = 0;
				$msg = "406";
				echo "<script>location='error.php?msg=$msg'</script>";
				exit();
			}

		// Check if file already exists
		if (file_exists($target_file)) {
			//$msg =  "Sorry, file already exists.";
			$uploadOk = 0;
			
		}
		// Check file size
		if ($_FILES["bmimage"]["size"] > 50000000) {
			//$msg =  "Sorry, your file is too large.";
			$uploadOk = 0;
			$msg = "405";
			echo "<script>location='error.php?msg=$msg'</script>";
			exit();
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			//$msg =  "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
			$msg = "404";
			echo "<script>location='error.php?msg=$msg'</script>";
			exit();
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
				$msg = "0";
				echo "<script>location='error.php?msg=$msg'</script>";
				exit();
		} else {
			if (move_uploaded_file($_FILES["bmimage"]["tmp_name"], $target_file)) {
				
				$ppFileSize = $_FILES['bmimage']['size'];
				$ppFileType = $_FILES['bmimage']['type'];
				$updateqry="UPDATE `sajagrou_db`.`bmmpage` SET bmtitle='$bmtitle', bmtext='$bmtext', bmimage='$uploaded_file', bmaddress='$bmaddress', bmemail='$bmemail', bmwhats='$bmwhats', bmfb='$bmfb', bmlin='$bmlin', 
		bmyout='$bmyout', bminst='$bminst', bmcontnum='$bmcontnum', bmorder='$bmorder', bmstatus='$bmstatus' WHERE bmid='$bmid'";
		
				
				$updateresult = mysqli_query($dbconnection,$updateqry);
				
				if($updateresult) 
				{
					echo "<script>location='success.php?msg=$msg'</script>";
					exit();
					
				} else {
					
					echo "<script>location='error.php?msg=$msg'</script>";
					exit();
					
				}
				
			} else {
				
				echo "<script>location='error.php?msg=$msg'</script>";
				exit();
				
			}
		}
	}
		
		
}


//Branch Update
if(isset($_POST["btnBPropageUpdate"]))
{
	
	$bid  = $_POST["bid"];
													$bmmid = $_POST['bmmid'];
													$btitle = $_POST['btitle'];
													$btext = $_POST['btext'];
													$bprice = $_POST['bprice'];
													$bpackage = $_POST['bpackage'];
													$bimage = $_POST['bimage'];
													$baddress = $_POST['baddress'];
													$bemail = $_POST['bemail'];
													$bwhats = $_POST['bwhats'];
													$bfb = $_POST['bfb'];
													$blin = $_POST['blin'];
													$byout = $_POST['byout'];
													$binst = $_POST['binst'];
													$bcontnum = $_POST['bcontnum'];
													$border = $_POST['border'];
													$bstatus = $_POST['bstatus'];
	
	
	$msg = "11";
	
	if ($_FILES['bimage']['size'] == 0)
	{
		
		$updateqry="UPDATE `sajagrou_db`.`bmmpage` SET bmmid='$bmmid', btitle='$btitle', btext='$btext', bprice='$bprice', bpackage='$bpackage', baddress='$baddress', bemail='$bemail', bwhats='$bwhats', bfb='$bfb', blin='$blin', 
		byout='$byout', binst='$binst', bcontnum='$bcontnum', border='$border', bmstatus='$bmstatus' WHERE bid='$bid'";
			$updateresult = mysqli_query($dbconnection,$updateqry);
			if($updateresult) 
			{
				echo "<script>location='success.php?msg=$msg'</script>";
				exit();
				
			} else {
				
				echo "<script>location='error.php?msg=$msg'</script>";
				exit();
				
			}
	

	}
	else {
		
		$target_dir = "../../images/webpage/";
		$uploaded_file = rand(1000,1000000)."-". basename($_FILES["bimage"]["name"]);
		$target_file = $target_dir .$uploaded_file;
		
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		
			$check = getimagesize($_FILES["bimage"]["tmp_name"]);
			if($check !== false) {
				//$msg =  "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				//$msg =  "File is not an image.";
				$uploadOk = 0;
				$msg = "406";
				echo "<script>location='error.php?msg=$msg'</script>";
				exit();
			}

		// Check if file already exists
		if (file_exists($target_file)) {
			//$msg =  "Sorry, file already exists.";
			$uploadOk = 0;
			
		}
		// Check file size
		if ($_FILES["bimage"]["size"] > 50000000) {
			//$msg =  "Sorry, your file is too large.";
			$uploadOk = 0;
			$msg = "405";
			echo "<script>location='error.php?msg=$msg'</script>";
			exit();
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			//$msg =  "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
			$msg = "404";
			echo "<script>location='error.php?msg=$msg'</script>";
			exit();
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
				$msg = "0";
				echo "<script>location='error.php?msg=$msg'</script>";
				exit();
		} else {
			if (move_uploaded_file($_FILES["bimage"]["tmp_name"], $target_file)) {
				
				$ppFileSize = $_FILES['bimage']['size'];
				$ppFileType = $_FILES['bimage']['type'];
				$updateqry="UPDATE `sajagrou_db`.`bmmpage` SET bmmid='$bmmid', btitle='$btitle', btext='$btext', bprice='$bprice', bpackage='$bpackage', bimage='$uploaded_file', baddress='$baddress', bemail='$bemail', bwhats='$bwhats', bfb='$bfb', blin='$blin', 
		byout='$byout', binst='$binst', bcontnum='$bcontnum', border='$border', bmstatus='$bmstatus' WHERE bid='$bid'";
				
				
				$updateresult = mysqli_query($dbconnection,$updateqry);
				
				if($updateresult) 
				{
					echo "<script>location='success.php?msg=$msg'</script>";
					exit();
					
				} else {
					
					echo "<script>location='error.php?msg=$msg'</script>";
					exit();
					
				}
				
			} else {
				
				echo "<script>location='error.php?msg=$msg'</script>";
				exit();
				
			}
		}
	}
		
		
}



//btnGalUpdate Update
if(isset($_POST["btnGalUpdate"]))
{
	$gid = $_POST['gid'];
	
	
	$gtitle = $_POST['gtitle'];
	$gedate = $_POST['gedate'];
	
	$gstatus = $_POST['gstatus'];
	
	
	$gupdt = date('Y-m-d H:i:s');
	
	
	$msg = "14";
	
	if ($_FILES['gimage']['size'] == 0)
	{
		//adminlog Log
				$logdate = date('Y-m-d H:i:s');
				$logremark = "Without Image";
				$myfile = fopen("adminlog.txt", "a") or die("Unable to open file!");
				$txt = "\n$logdate \t Update \t gallery \t $gid \t $logremark \r\n";
				fwrite($myfile, $txt);
				fclose($myfile);
		$updateqry="UPDATE `sajagrou_db`.`gallery` SET gtitle='$gtitle', gedate='$gedate', gstatus='$gstatus',
		gupdt='$gupdt' WHERE gid='$gid'";
			$updateresult = mysqli_query($dbconnection,$updateqry);
			if($updateresult) 
			{
				echo "<script>location='success.php?msg=$msg'</script>";
				exit();
				
			} else {
				
				echo "<script>location='error.php?msg=$msg'</script>";
				exit();
				
			}
	

	}
	else {
		
		$target_dir = "../../images/gallery/";
		$uploaded_file = rand(1000,1000000)."-". basename($_FILES["gimage"]["name"]);
		$target_file = $target_dir .$uploaded_file;
		
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		
			$check = getimagesize($_FILES["gimage"]["tmp_name"]);
			if($check !== false) {
				//$msg =  "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				//$msg =  "File is not an image.";
				$uploadOk = 0;
				$msg = "406";
				echo "<script>location='error.php?msg=$msg'</script>";
				exit();
			}

		// Check if file already exists
		if (file_exists($target_file)) {
			//$msg =  "Sorry, file already exists.";
			$uploadOk = 0;
			
		}
		// Check file size
		if ($_FILES["gimage"]["size"] > 50000000) {
			//$msg =  "Sorry, your file is too large.";
			$uploadOk = 0;
			$msg = "405";
			echo "<script>location='error.php?msg=$msg'</script>";
			exit();
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			//$msg =  "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
			$msg = "404";
			echo "<script>location='error.php?msg=$msg'</script>";
			exit();
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
				$msg = "0";
				echo "<script>location='error.php?msg=$msg'</script>";
				exit();
		} else {
			if (move_uploaded_file($_FILES["gimage"]["tmp_name"], $target_file)) {
				
				$ppFileSize = $_FILES['gimage']['size'];
				$ppFileType = $_FILES['gimage']['type'];
				
				//adminlog Log
				$logdate = date('Y-m-d H:i:s');
				$logremark = "With Image";
				$myfile = fopen("adminlog.txt", "a") or die("Unable to open file!");
				$txt = "\n$logdate \t Update \t gallery \t $gid \t $logremark \r\n";
				fwrite($myfile, $txt);
				fclose($myfile);
				
				$updateqry="UPDATE `sajagrou_db`.`gallery` SET gtitle='$gtitle', gedate='$gedate', gimage='$uploaded_file',gsize='$ppFileSize',gtype='$ppFileType',gupdt='$gupdt',gstatus='$gstatus' WHERE gid='$gid'";
		
								
				$updateresult = mysqli_query($dbconnection,$updateqry);
				
				if($updateresult) 
				{
					echo "<script>location='success.php?msg=$msg'</script>";
					exit();
					
				} else {
					
					echo "<script>location='error.php?msg=$msg'</script>";
					exit();
					
				}
				
			} else {
				
				echo "<script>location='error.php?msg=$msg'</script>";
				exit();
				
			}
		}
	}
		
		
} 


//Change Password
if(isset($_POST["btnChgPass"]))
{

	$refID = 'sajagroups';
	$currpas = $_POST['currpas'];
	$newpass = $_POST['newpass'];
	$curcnfp = "";
	$msg = "0";
	$sqlsub="SELECT lpass FROM login WHERE luname='$refID'";
	if ($resultsub=mysqli_query($dbconnection,$sqlsub))
	{
		// Fetch one and one row
		while ($rowsub=mysqli_fetch_row($resultsub))
		{
			$curcnfp = $rowsub[0];
		}
	}
	
	
	if($currpas == $curcnfp)
	{
		$msg = "100";
			
		//Insert into Registation table
		$updateqry="UPDATE `sajagrou_db`.`login` SET  lpass='$newpass' WHERE luname='$refID'";
		
		$updateresult=mysqli_query($dbconnection,$updateqry);
		//Check whether the query was successful or not
		if($updateresult) 
		{
			//adminlog Log
			$logdate = date('Y-m-d H:i:s');
			$logremark = "Change Password";
			$myfile = fopen("adminlog.txt", "a") or die("Unable to open file!");
			$txt = "\n$logdate \t Update \t login \t 1 \t $logremark \r\n";
			fwrite($myfile, $txt);
			fclose($myfile);
			echo "<script>location='success.php?msg=$msg'</script>";
			exit();
		} 
		else 
		{
			echo "<script>location='error.php?msg=$msg'</script>";
			exit();
		}
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