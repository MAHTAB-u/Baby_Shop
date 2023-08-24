<?php 
session_start();
if(isset($_GET["addtocart"])){
	$cart_product_id = $_GET["productid"];
	$quantity = $_GET["quantity"];
	$productTitle = $_GET["title"];
	$session_id = session_id();

	if($quantity <=0){
        $_SESSION['msg1'] = 'Select a quantity.<br>';
		header('location:product-single.php?productid='.$cart_product_id);
		exit;
	}
	
	include_once 'databaseConnection.php';
	$connect = connect();
	
	$sql = "SELECT * FROM cart WHERE  session_id = '$session_id'";
	$result = $connect->query($sql);
	
	if ($result  !=false){
		foreach($result AS $row){
			$product_id = $row['productId'];
			
		}	
		
		if ($product_id  == $cart_product_id) {
            $_SESSION['msg1'] = 'Product already added.<br>';
			header('location:product-single.php?productid='.$cart_product_id);
			exit;
		}
		else {
			$sql = "INSERT INTO cart (productId,productQuantity,productTitle,session_id)
			VALUES ('$cart_product_id','$quantity','$productTitle','$session_id')";
			$connect->query($sql);
			header('location:cart.php?productid='.$cart_product_id);
		}
		
	}
	
}

?>

<?php 
	if(isset($_GET["id"])){
		$pid = $_GET["id"];
		$session_id = session_id();
		
		include_once 'databaseConnection.php';
		$connect = connect();
		
		
		$sql = "DELETE FROM cart WHERE  session_id = '$session_id' AND productId = '$pid'";

		if($connect->query($sql)){
			header('location:cart.php');
		}else{
			$_SESSION['msg1']="Error:".$connect->error;
		}
		
		
	}



?>