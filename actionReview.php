<?php 
	session_start();

		if(isset($_POST['btn_Review'])){
		$rev = $_POST['review'];
		$R_userId = $_SESSION['userId'];
		$R_username = $_SESSION['userName'];
		$activeProdId = $_SESSION['productId'];
		
		if( empty($_POST['review']) ){
			$_SESSION['msg'] .= 'Please write a review first.<br>';
			header('location:product-single.php?productid='.$activeProdId);
			exit;
		}
		
		include_once 'databaseConnection.php';
		$connect = connect();
		$sql = "INSERT INTO `review`(`review`, `userId`, `userName`,`productId`) 
		VALUES ('$rev','$R_userId','$R_username','$activeProdId')";
		$connect->query($sql);	
		header('location:product-single.php?productid='.$activeProdId);
						
}?>