<?php
session_start();
$productTitle = $_POST['title'];
$productPrice = $_POST['price'];
$productType = $_POST['type'];
$productDetails= $_POST['details'];


if($productTitle == ''){
	$_SESSION['msg2'] = 'Product Title Needed.<br>';
	header('location:addProducts.php');
	exit;
	}
	
if($productPrice == ''){
	$_SESSION['msg2'] = 'Product Price Needed. <br>';
	header('location:addProducts.php');
	exit;
	}
if($productDetails == ''){
	$_SESSION['msg2'] = 'Product Details Needed. <br>';
	header('location:addProducts.php');
	exit;
	}

if($productType == 'Select Product'){
	$_SESSION['msg2'] = 'Product Type Needed. <br>';
	header('location:addProducts.php');
	exit;
	}
	
	//---- Image Upload 
	$_SESSION['msg2'] = '';
	$target_dir = "img/product/";
	$fileName= basename($_FILES["F_file"]["name"]);
	$target_file = $target_dir . $fileName;
	
	$uploadOk = 1; // Flag
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["F_file"]["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			$_SESSION['msg'] = "File is not an image.<br>";
			$uploadOk = 0;
		}
	}
	
	// Check if file already exists
	if (file_exists($target_file)) {
		$_SESSION['msg2'] = "Sorry, file already exists.<br>";
		$uploadOk = 0;
	}
	
	// Check file size
	if ($_FILES["F_file"]["size"] > 500000000) {
		$_SESSION['msg2'] = "Sorry, your file is too large.<br>";
		$uploadOk = 0;
	}
	
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
		$_SESSION['msg2'] = "Sorry, only JPG,PNG and JPEG files are allowed.";
		$uploadOk = 0;
	}
	
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		$_SESSION['msg2'] = "Sorry, your file was not uploaded.";
		header('location:addProducts.php');
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["F_file"]["tmp_name"], $target_file)) {
			echo "The file ". basename( $_FILES["F_file"]["name"]). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}	
	


	
		include_once 'databaseConnection.php';
	$connect = connect();
	
	$sql = "INSERT INTO products(productTitle,productPrice,productType,productFile,productDetails)
			VALUES ('$productTitle','$productPrice','$productType','$fileName','$productDetails')";

	
	if($connect->query($sql)){
		$_SESSION['msg1'] = 'product added successfully.';
	}else{
		$_SESSION['msg2'] = 'Not Added. '.$connect->error;
	}
	header('location:addProducts.php');
?>