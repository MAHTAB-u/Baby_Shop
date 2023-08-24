<?php 
	session_start();
	if(isset($_GET['proId'])){
			$proID = $_GET['proId'];
			
			include_once 'databaseConnection.php';
			$connect = connect(); 
			
			$sql = "DELETE FROM products WHERE productId = $proID";
			
			If($connect->query($sql)){
				$_SESSION['msg'] = "Product deleted successfully.";
			}else{
				$_SESSION['msg'] = "Error ".$connect->error;
			}
	}

header("location:editProducts.php");

?>