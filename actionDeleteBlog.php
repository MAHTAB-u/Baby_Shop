<?php 
	session_start();
	if(isset($_GET['blogid'])){
			$blog_id = $_GET['blogid'];
			
			include_once 'databaseConnection.php';
			$connect = connect(); 
			
			$sql = "DELETE FROM blog WHERE blogId= $blog_id";
			
			If($connect->query($sql)){
				$_SESSION['msg1'] = "Blog deleted successfully.";
			}else{
				$_SESSION['msg'] = "Error ".$connect->error;
			}
	}

header("location:manageBlogs.php");

?>