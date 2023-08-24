<?php 
	session_start();

		if(isset($_POST['btn_Comment'])){
		$cmnt = $_POST['comment'];
		$C_userId = $_SESSION['userId'];
		$C_username = $_SESSION['userName'];
		$activeBlogId = $_SESSION['blogId'];
		
		include_once 'databaseConnection.php';
		$connect = connect();
		$sql = "INSERT INTO `comment`(`comment`, `userId`, `userName`,`blogId`) 
		VALUES ('$cmnt','$C_userId','$C_username','$activeBlogId')";

		$connect->query($sql);	
		header('location:blog-single.php?blogid='.$activeBlogId);
						
}?>