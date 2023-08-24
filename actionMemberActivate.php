<?php 
	session_start();
	if(isset($_GET['memId'])){
			$Customer_ID = $_GET['memId'];
			
			include_once 'databaseConnection.php';
			$connect = connect(); 
			
			$sql = "UPDATE `members` SET `memberStatus` = 'Activate' WHERE `members`.memberId = '$Customer_ID'";
			
			If($connect->query($sql)){
				$_SESSION['msg1'] = "User activated successfully.";
			}else{
				$_SESSION['msg'] = "Error ".$connect->error;
			}
	}
header("location:memberDetails.php");
?>