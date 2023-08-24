<?php 
session_start();
	if($_POST){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$_SESSION['msg'] = '';
	
		if(!isset($_SESSION['count'])){
			$_SESSION['count'] = 0;
		}
		
	if($email == ''){
			$_SESSION['msg'] = 'Username Needed.<br>';
			header('location:signin.php');exit;
		}
		

	
	include_once 'databaseConnection.php';
	$connect= connect();
	
	$sql = "SELECT * FROM members WHERE memberEmail= '$email' AND memberPassword= '$password'  OR memberUserName= '$email' AND memberPassword= '$password' ";
       
	$result = $connect->query($sql);
        
		
		if($result->num_rows > 0){
			
			foreach($result AS $row){
				$_SESSION['userName'] = $row['memberUserName'];
				$_SESSION['userRole'] = $row['memberRole'];
				$_SESSION['userId'] = $row['memberId'];
				$_SESSION['status'] = $row['memberStatus'];
			}			
			$_SESSION['loggedin'] = true;
			unset($_SESSION['count']);
							
			header('location:index.php');
		}else{
			$_SESSION['count']++;
			if($_SESSION['count'] >= 3){
				setcookie('signinCounter', true, time() + (60*3));
				$_SESSION['count'] = 0;
			}
			$_SESSION['msg'] = 'Invalid Login.';	
			header('location:signin.php');
		}	
	}

?>