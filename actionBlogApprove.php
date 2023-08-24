<?php 
	session_start();
	if(isset($_GET['blogid'])){
			$blog_id = $_GET['blogid'];
			
			include_once 'databaseConnection.php';
			$conect = connect(); 
			
			$sql = "UPDATE `blog` SET `blogApproval` = 'Approved' WHERE `blog`. blogId = '$blog_id'";
			
			If($conect->query($sql)){
				$_SESSION['msg'] = "Blog approved successfully.";
			}else{
				$_SESSION['msg'] = "Error ".$connect->error;
			}
	}

header("location:manageBlogs.php");

?>