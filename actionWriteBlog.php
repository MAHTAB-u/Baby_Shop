<?php
session_start();
$blogTitle = $_POST['title'];
$bloggerName = $_POST['name'];
$blogDetails = $_POST['details'];


if($blogTitle == ''){
	$_SESSION['msg'] = 'Insert blog title.<br>';
	header('location:writeBlog.php');
	exit;
	}
	
if($bloggerName == ''){
	$_SESSION['msg'] = 'Insert writer name. <br>';
	header('location:writeBlog.php');
	exit;
	}	

if($blogDetails == ""){
	$_SESSION['msg'] = 'write something first.<br>';
	header('location:writeBlog.php');
	exit;
	}
	
	
	//---- Image Upload 
	$_SESSION['msg'] = '';
	$target_dir = "img/blog/";
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
		$_SESSION['msg'] = "Sorry, file already exists.<br>";
		$uploadOk = 0;
	}
	
	// Check file size
	if ($_FILES["F_file"]["size"] > 500000000) {
		$_SESSION['msg'] = "Sorry, your file is too large.<br>";
		$uploadOk = 0;
	}
	
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
		$_SESSION['msg'] = "Sorry, only JPG,PNG and JPEG files are allowed.";
		$uploadOk = 0;
	}
	
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		$_SESSION['msg'] = "Sorry, your file was not uploaded.";
		header('location:writeBlog.php');
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["F_file"]["tmp_name"], $target_file)) {
			echo "The file ". basename( $_FILES["F_file"]["name"]). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}	
	
	//---- End of Image Upload
			include_once 'databaseConnection.php';
	$connect = connect();
	
	$sql = "INSERT INTO blog(blogTitle,bloggerName,blogDetails,blogImage)
			VALUES ('$blogTitle','$bloggerName','$blogDetails','$fileName')";
			
	
	if($connect->query($sql)){
		$_SESSION['msg1'] = 'Blog is pending.';
	
	}else{
		$_SESSION['msg'] = 'Not Added. '.$connect->error;
	}
	header('location:writeBlog.php');
