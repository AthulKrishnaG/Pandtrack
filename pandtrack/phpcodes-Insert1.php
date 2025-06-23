<?php
include("dbconnection.php");
include("session.php");
error_reporting(0);

if(isset($_POST["btnpatientAdd"]))
{
	$p_name = $_POST['p_name'];
	$p_gender = $_POST['p_gender'];
	$p_mobilenum = $_POST['p_mobilenum'];
	$p_address = $_POST['p_address'];
	$p_email = $_POST['p_email'];
	
	$p_indate = date('Y-m-d H:i:s');
	$p_update = date('Y-m-d H:i:s');
	
	
		
	//Insert into Registation table
	$insertqry="INSERT INTO  `pantra`.`patient` (`p_id` ,`p_name` ,`p_gender`,`p_mobilenum` ,`p_address` ,`p_email` ,`p_indate` ,`p_update`)
VALUES (NULL, '$p_name', '$p_gender', '$p_mobilenum', '$p_address', '$p_email', '$p_indate', '$p_update')";
	$insertresult=mysqli_query($dbconnection,$insertqry);
	//Check whether the query was successful or not
	if($insertresult) 
	{
		$lrole = "Patient";
		$lflag = "Available";
								
		//Insert into Login table
		$logqry="INSERT INTO  `pantra`.`login` (`lid` ,`luname` ,`lpass` ,`lrole` ,`lflag` ) VALUES (NULL, '$p_email', '$p_mobilenum', '$lrole', '$lflag')";
		$logresult=mysqli_query($dbconnection,$logqry);
		$msg = urlencode("Patient data added successfully!");
		echo "<script> window.location.href ='success.php?msg=$msg'; </script>";
		exit();
	} 
	else 
	{
		$msg = urlencode("error");
		echo "<script> window.location.href ='error.php?msg=$msg'; </script>";
		exit();
	}	
} 


if(isset($_POST["btndiseaseadd"]))
{
	$d_title = $_POST['d_title'];
	$d_date_of_onset = $_POST['d_date_of_onset'];
	
	$in_date = date('Y-m-d H:i:s');
	$up_date = date('Y-m-d H:i:s');
	
	
		
	//Insert into Registation table
	$insertqry="INSERT INTO  `pantra`.`disease` (`d_id` ,`d_title` ,`d_date_of_onset`,`in_date` ,`up_date`)
VALUES (NULL, '$d_title', '$d_date_of_onset', '$in_date', '$up_date')";
	$insertresult=mysqli_query($dbconnection,$insertqry);
	//Check whether the query was successful or not
	if($insertresult) 
	{
		$msg = urlencode("Disease data added successfully!");
		
		echo "<script> window.location.href ='success.php?msg=$msg'; </script>";
		exit();
	} 
	else 
	{
		echo "<script> window.location.href ='error.php?msg=$msg'; </script>";
		exit();
	}	
} 


if(isset($_POST["btnsymptomsadd"]))
{
	$d_s_name = $_POST['d_s_name'];
	$d_s_date_of_onset = $_POST['d_s_date_of_onset'];
	
	
	$in_date = date('Y-m-d H:i:s');
	$up_date = date('Y-m-d H:i:s');
	
	
		
	//Insert into Registation table
	$insertqry="INSERT INTO  `pantra`.`symptoms` (`d_s_id` ,`d_s_name` ,`d_s_date_of_onset`,`in_date` ,`up_date` )
VALUES (NULL, '$d_s_name', '$d_s_date_of_onset', '$in_date', '$up_date')";
	$insertresult=mysqli_query($dbconnection,$insertqry);
	//Check whether the query was successful or not
	if($insertresult) 
	{
		$msg = urlencode("Symptoms data added successfully!");
		
		echo "<script> window.location.href ='success.php?msg=$msg'; </script>";
		exit();
	} 
	else 
	{
		echo "<script> window.location.href ='error.php?msg=$msg'; </script>";
		exit();
	}	
} 

if(isset($_POST["btnmedicinesadd"]))
{
	$d_m_name = $_POST['d_m_name'];
	$d_m_dose = $_POST['d_m_dose'];
	$d_m_startingdate = $_POST['d_m_startingdate'];
	$d_m_duration = $_POST['d_m_duration'];
	$d_m_indate = date('Y-m-d H:i:s');
	$d_m_update = date('Y-m-d H:i:s');
	
	
		
	//Insert into Registation table
	$insertqry="INSERT INTO  `pantra`.`medicines` (`d_m_id` ,`d_m_name` ,`d_m_dose`,`d_m_startingdate` ,`d_m_duration`,`d_m_indate` ,`d_m_update`)
VALUES (NULL, '$d_m_name', '$d_m_dose', '$d_m_startingdate', '$d_m_duration', '$d_m_indate', '$d_m_update')";
	$insertresult=mysqli_query($dbconnection,$insertqry);
	//Check whether the query was successful or not
	if($insertresult) 
	{
		$msg = urlencode("Medicine data added successfully!");
		
		echo "<script> window.location.href ='success.php?msg=$msg'; </script>";
		exit();
	} 
	else 
	{
		echo "<script> window.location.href ='error.php?msg=$msg'; </script>";
		exit();
	}	
} 
if(isset($_POST["btnsourceadd"]))
{
	$d_source_patient = $_POST['d_source_patient'];
	$d_source_confirmed_location = $_POST['d_source_confirmed_location'];
	$d_source_state = $_POST['d_source_state'];
	$d_source_district = $_POST['d_source_district'];
	$d_source_panchayath = $_POST['d_source_panchayath'];
	$d_source_ward_no = $_POST['d_source_ward_no'];
	
	
	$d_source_in_date = date('Y-m-d H:i:s');
	$d_source_up_date	 = date('Y-m-d H:i:s');
	
	
		
	//Insert into Registation table
	$insertqry="INSERT INTO  `pantra`.`source` (`d_source_id` ,`d_source_patient` ,`d_source_confirmed_location` ,`d_source_state`,`d_source_district` ,`d_source_panchayath`,`d_source_ward_no` ,`d_source_in_date`,`d_source_up_date`)
VALUES (NULL, '$d_source_patient','$d_source_confirmed_location', '$d_source_state', '$d_source_district', '$d_source_panchayath','$d_source_ward_no', '$d_source_in_date','$d_source_up_date')";
	$insertresult=mysqli_query($dbconnection,$insertqry);
	//Check whether the query was successful or not
	if($insertresult) 
	{
		$msg = urlencode("Source data added successfully!");
		
		echo "<script> window.location.href ='success.php?msg=$msg'; </script>";
		exit();
	} 
	else 
	{
		echo "<script> window.location.href ='error.php?msg=$msg'; </script>";
		exit();
	}	
} 
if(isset($_POST["btnhotspotadd"]))
{
	$h_state = $_POST['h_state'];
	$h_district = $_POST['h_district'];
	$h_taluk = $_POST['h_taluk'];
	$h_block = $_POST['h_block'];
	$h_panchayath = $_POST['h_panchayath'];
	$h_ward_no = $_POST['h_ward_no'];
	$h_confirmed_area = $_POST['h_confirmed_area'];
	
	$h_in_date = date('Y-m-d H:i:s');
	$h_up_date	 = date('Y-m-d H:i:s');
	
	
		
	//Insert into Registation table
	$insertqry="INSERT INTO  `pantra`.`hotspot` (`h_id` ,`h_state` ,`h_district`,`h_taluk` ,`h_block`,`h_panchayath`,`h_ward_no`,`h_confirmed_area` ,`h_in_date`,`h_up_date`)
VALUES (NULL, '$h_state', '$h_district', '$h_taluk', '$h_block','$h_panchayath', '$h_ward_no','$h_confirmed_area','$h_in_date','$h_up_date')";
	$insertresult=mysqli_query($dbconnection,$insertqry);
	//Check whether the query was successful or not
	if($insertresult) 
	{
		$msg = urlencode("Hotspot data added successfully!");
		
		echo "<script> window.location.href ='success.php?msg=$msg'; </script>";
		exit();
	} 
	else 
	{
		echo "<script> window.location.href ='error.php?msg=$msg'; </script>";
		exit();
	}	
} 
if(isset($_POST["btncontactadd"]))
{
	$c_district = $_POST['c_district'];
	$c_patient = $_POST['c_patient'];
	$c_visited_places = $_POST['c_visited_places'];
	$c_explain_the_activities = $_POST['c_explain_the_activities'];
	$c_explanation_activities_date = $_POST['c_explanation_activities_date'];
	$c_explanation_activities_time = $_POST['c_explanation_activities_time'];
	
	$c_in_date = date('Y-m-d H:i:s');
	$c_up_date	 = date('Y-m-d H:i:s');
	
	
		
	//Insert into Registation table
	$insertqry="INSERT INTO  `pantra`.`contact` (`c_id` ,`c_patient` ,`c_district` ,`c_visited_places`,`c_explain_the_activities` ,`c_explanation_activities_date`,`c_explanation_activities_time`,`c_in_date`,`c_up_date`)
VALUES (NULL, '$c_patient', '$c_district', '$c_visited_places', '$c_explain_the_activities','$c_explanation_activities_date','$c_explanation_activities_time','$c_in_date','$c_up_date')";
	$insertresult=mysqli_query($dbconnection,$insertqry);
	//Check whether the query was successful or not
	if($insertresult) 
	{
		$msg = urlencode("Contact data added successfully!");
		
		echo "<script> window.location.href ='success.php?msg=$msg'; </script>";
		exit();
	} 
	else 
	{
		echo "<script> window.location.href ='error.php?msg=$msg'; </script>";
		exit();
	}	
} 
if(isset($_POST["btnprimarycontactAdd"]))
{
	$c_p_patient = $_POST['c_p_patient'];
	$c_p_person = $_POST['c_p_person'];
	$c_p_district = $_POST['c_p_district'];
	$c_p_town = $_POST['c_p_town'];
	$c_p_place = $_POST['c_p_place'];
	
	$c_p_in_date = date('Y-m-d H:i:s');
	$c_p_up_date	 = date('Y-m-d H:i:s');
	
	
		
	//Insert into Registation table
	$insertqry="INSERT INTO  `pantra`.`primary_contact` (`c_p_id` ,`c_p_patient` ,`c_p_person`,`c_p_district`,`c_p_town` ,`c_p_place` ,`c_p_in_date`,`c_p_up_date`)
VALUES (NULL, '$c_p_patient','$c_p_person', '$c_p_district', '$c_p_town', '$c_p_place','$c_p_in_date','$c_p_up_date')";
	$insertresult=mysqli_query($dbconnection,$insertqry);
	//Check whether the query was successful or not
	if($insertresult) 
	{
		$msg = urlencode("Primary Contact data added successfully!");
		
		echo "<script> window.location.href ='success.php?msg=$msg'; </script>";
		exit();
	} 
	else 
	{
		echo "<script> window.location.href ='error.php?msg=$msg'; </script>";
		exit();
	}	
}
if(isset($_POST["btnhistoryAdd"]))
{
	$h_patient	 = $_POST['h_patient'];
	$h_days_after_the_onset_of_the_disease = $_POST['h_days_after_the_onset_of_the_disease'];
	$h_effective_medicines = $_POST['h_effective_medicines'];
	
	$h_in_date = date('Y-m-d H:i:s');
	$h_up_date	 = date('Y-m-d H:i:s');
	
	
		
	//Insert into Registation table
	$insertqry="INSERT INTO  `pantra`.`history` (`h_id` ,`h_patient` ,`h_days_after_the_onset_of_the_disease` ,`h_effective_medicines` ,`h_in_date`,`h_up_date`)
VALUES (NULL, '$h_patient',  '$h_days_after_the_onset_of_the_disease','$h_effective_medicines','$h_in_date','$h_up_date')";
	$insertresult=mysqli_query($dbconnection,$insertqry);
	//Check whether the query was successful or not
	if($insertresult) 
	{
		$msg = urlencode("History data added successfully!");
		echo "<script> window.location.href ='success.php?msg=$msg'; </script>";
		exit();
	} 
	else 
	{
		echo "<script> window.location.href ='error.php?msg=$msg'; </script>";
		exit();
	}	
}
if(isset($_POST["btnuseradd"]))
{
	$uempid = $_POST['uempid'];
	$uname = $_POST['uname'];
	$udesignation = $_POST['udesignation'];
	$uemail = $_POST['uemail'];
	$umob = $_POST['umob'];
	$urole = $_POST['urole'];
	
	$u_in_date = date('Y-m-d H:i:s');
	$u_up_date	 = date('Y-m-d H:i:s');
	
	$filename = $_FILES["uimg"]["name"];
    $tempname = $_FILES["uimg"]["tmp_name"];   
    $folder = "../images/user/".$filename;
	
	 if (move_uploaded_file($tempname, $folder))  {
		
		//Insert into Registation table
		$insertqry="INSERT INTO  `pantra`.`user` (`uid` ,`uempid` ,`uname`,`udesignation`,`uemail` ,`umob`,`uimg`,`urole`,`ustatus` ,`u_in_date`,`u_up_date`)
	VALUES (NULL, '$uempid', '$uname','$udesignation', '$uemail','$umob','$filename','$urole', '$ustatus','$u_in_date','$u_up_date')";
		$insertresult=mysqli_query($dbconnection,$insertqry);
		//Check whether the query was successful or not
		if($insertresult) 
		{
			
			$lflag = "Available";
									
			//Insert into Login table
			$logqry="INSERT INTO  `pantra`.`login` (`lid` ,`luname` ,`lpass` ,`lrole` ,`lflag` ) VALUES (NULL, '$uemail', '$umob', '$urole', '$lflag')";
			$logresult=mysqli_query($dbconnection,$logqry);
			$msg = urlencode("User data added successfully!");
			
			echo "<script> window.location.href ='success.php?msg=$msg'; </script>";
			exit();
		} 
		else 
		{
			echo "<script> window.location.href ='error.php?msg=$msg'; </script>";
			exit();
		}
	 }
	 else 
	{
		echo "<script> window.location.href ='error.php?msg=$msg'; </script>";
		exit();
	}
}


if(isset($_POST["btndaiydutiesAdd"]))
{
	$doctor_duty_list = $_POST['doctor_duty_list'];
	$doctor_duty_dept = $_POST['doctor_duty_dept'];
	$doctor_duty_day_and_date= $_POST['doctor_duty_day_and_date'];
	$doctor_duty_fromtime = $_POST['doctor_duty_fromtime'];
	$doctor_duty_totime = $_POST['doctor_duty_totime'];

	
	$doctor_duty_indate = date('Y-m-d H:i:s');
	$doctor_duty_update= date('Y-m-d H:i:s');
	
	
		
	//Insert into Registation table
	$insertqry="INSERT INTO  `pantra`.`dailyduties` (`doctor_duty_id` ,`doctor_duty_list` ,`doctor_duty_dept`,`doctor_duty_day_and_date` ,`doctor_duty_fromtime` ,`doctor_duty_totime`,`doctor_duty_indate`,`doctor_duty_update`)
VALUES (NULL, '$doctor_duty_list', '$doctor_duty_dept', '$doctor_duty_day_and_date', '$doctor_duty_fromtime','$doctor_duty_totime','$doctor_duty_indate','$doctor_duty_update')";
	$insertresult=mysqli_query($dbconnection,$insertqry);
	
	//Check whether the query was successful or not
	if($insertresult) 
	{
		$msg = urlencode("Daily Duty data added successfully!");
		
		echo "<script> window.location.href ='success.php?msg=$msg'; </script>";
		exit();
	} 
	else 
	{
		echo "<script> window.location.href ='error.php?msg=$msg'; </script>";
		exit();
	}	
}
if(isset($_POST["btndischargeadd"]))
{
	$discharge_p_name= $_POST['discharge_p_name'];
	$discharge_p_gender = $_POST['discharge_p_gender'];
	$discharge_p_mobilenum= $_POST['discharge_p_mobilenum'];
	$discharge_p_address = $_POST['discharge_p_address'];
	$discharge_p_email = $_POST['discharge_p_email'];
	$discharge_p_type= $_POST['discharge_p_type'];
		
	$discharge_p_in_date = date('Y-m-d H:i:s');
	$discharge_p_up_date= date('Y-m-d H:i:s');
	
	
		
	//Insert into Registation table
	$insertqry="INSERT INTO  `pantra`.`discharge` (`discharge_p_id` ,`discharge_p_name` ,`discharge_p_gender`,`discharge_p_mobilenum` ,`discharge_p_address`,`discharge_p_email` ,`discharge_p_type`,`discharge_p_in_date`,`discharge_p_up_date`)
VALUES (NULL, '$discharge_p_name', '$discharge_p_gender', '$discharge_p_mobilenum', '$discharge_p_address','$discharge_p_email','$discharge_p_type','$discharge_p_in_date','$discharge_p_up_date')";
	$insertresult=mysqli_query($dbconnection,$insertqry);
	//Check whether the query was successful or not
	if($insertresult) 
	{
		$msg = urlencode("Discharge data added successfully!");
		
		echo "<script> window.location.href ='success.php?msg=$msg'; </script>";
		exit();
	} 
	else 
	{
		echo "<script> window.location.href ='error.php?msg=$msg'; </script>";
		exit();
	}	
}



?>
