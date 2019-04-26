<?php
	session_start();
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "fitwhey";

	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	$strSQL = "SELECT * FROM member WHERE m_user = '".mysqli_real_escape_string($objCon,$_POST['txtUsername'])."' 
	and m_pass = '".mysqli_real_escape_string($objCon,$_POST['txtPassword'])."'";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["UserID"] = $objResult["m_id"];
			$_SESSION["Status"] = $objResult["m_level"];

			session_write_close();
			
			if($objResult["m_level"] == "1")
			{
				header("location:manager_course.php");
			}
			else
			{
				header("location:user_page.php");
			}
	}
	mysqli_close($objCon);
?>
