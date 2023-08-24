<?php 


session_start();
if($_POST){
	$productTitle     = $_POST['title'];
	$productPrice     = $_POST['price'];
	$productType  	 = $_POST['type'];
	$productDetails      = $_POST['details'];
	$proId      = $_POST['proId'];

     
if($productType == '----------Select Type----------'){
	$_SESSION['msg'] = 'Insert product Type. <br>';
	header('location:updateProduct.php?proId='.$proId);
	exit;
	}
	include_once 'databaseConnection.php';
	$connect = connect();
	$sql = "UPDATE `products` SET `productTitle`='$productTitle',`productPrice`='$productPrice',`productType`='$productType',`productDetails`='$productDetails' WHERE productId=$proId";
    
		If($connect->query($sql)){
				$_SESSION['msg1'] = "Product updated successfully.";
			}else{
				$_SESSION['msg'] = "Error ".$connect->error;
			}
			
}
header('location:editProducts.php?proId='.$proId);
?>