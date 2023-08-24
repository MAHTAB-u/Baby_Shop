<?php 
session_start();
if(isset($_POST['confirm'])){
	$firstName = $_POST['firstName'];	
	$lastName = $_POST['lastName'];	
	$streetAddress = $_POST['streetAddress'];	
	$optional = $_POST['optional'];	
	$city = $_POST['city'];	
	$postCode = $_POST['postCode'];		
	$phone = $_POST['phone'];	
	$email = $_POST['email'];	
	$totalAmount = $_POST['totalAmount'];
	
	$session_id = session_id();
	
	$six_digit_random_number = mt_rand(100000, 999999);
	$OrderId = 'O'.$six_digit_random_number;
	
if($firstName == ''){
		$_SESSION['msg']= 'First Name Needed.<br>';
			header('location:checkout.php');
				exit;
	}

    	if($lastName == ''){
		$_SESSION['msg']= 'Last Name Needed.<br>';
			header('location:checkout.php');
				exit;
	}
	
	if($streetAddress == ''){
		$_SESSION['msg']= 'Street Address Needed.<br>';
			header('location:checkout.php');
				exit;
	}
	
	
	if($city == ''){
		$_SESSION['msg']= 'City Needed.<br>';
			header('location:checkout.php');
				exit;
	}
    
    if($postCode == ''){
		$_SESSION['msg']= 'Post Code Needed.<br>';
			header('location:checkout.php');
				exit;
	}
    
    if($phone == ''){
		$_SESSION['msg']= 'Phone Number Needed.<br>';
			header('location:checkout.php');
				exit;
	}
    
    if($email == ''){
		$_SESSION['msg']= 'Email Needed.<br>';
			header('location:checkout.php');
				exit;
	}

	
	if($totalAmount == 0){
			$_SESSION['msg']= 'Select a Product.<br>';
			header('location:checkout.php');
				exit;
	}

	include_once 'databaseConnection.php';
	$conect= connect();
	
	$sql = "UPDATE `cart` SET `order_id`='$OrderId' WHERE session_id='$session_id'";
	$conect->query($sql);	

	
	$sql = "INSERT INTO orderdetails(order_id,firstName,lastName,streetAddress,optional,city,postCode,phone,email,totalAmount) 
		    VALUES ('$OrderId','$firstName','$lastName','$streetAddress','$optional','$city','$postCode','$phone','$email','$totalAmount')"; 
   
	if($conect->query($sql)){
		session_regenerate_id (true);
		$_SESSION['msg1'] = 'Your order is confirmed.';
	header('location:cart.php');
	}
}
	
	
	
	
	







?>