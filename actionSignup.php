<?php
session_start();
if($_POST){
$name	    =$_POST['name'];
$email		=$_POST['email'];
$phone		=$_POST['phone'];
$username	=$_POST['username'];
$address	=$_POST['address'];
$password	=$_POST['password'];
$cpassword	=$_POST['cpassword'];
    if($name == ''){
			$_SESSION['msg1']= 'Full Name Needed.<br>';
			header('location:signup.php');
				exit;
			}
			
	if($email == ''){
			$_SESSION['msg1']= 'Email Needed.<br>';
			header('location:signup.php');
				exit;
			}
	if($phone == ''){
			$_SESSION['msg1']= 'Phone Number Needed.<br>';
			header('location:signup.php');
				exit;
			}
	
	if($username == ''){
			$_SESSION['msg1']= 'User Name Needer.<br>';
			header('location:signup.php');
				exit;
			}
	if($password == ''){
			$_SESSION['msg1']= 'Password Needed.<br>';
			header('location:signup.php');
				exit;
			}
    
    	if (strlen($password ) <= '8') {
		$_SESSION['msg1']= 'Your Password Must Contain At Least 8 Characters!<br>';
		header('location:signup.php');
		exit;
	}
	elseif(!preg_match("#[0-9]+#",$password)) {
		$_SESSION['msg1']= 'Your Password Must Contain At Least 1 Number!<br>';
		header('location:signup.php');
		exit;
	}
	elseif(!preg_match("#[A-Z]+#",$password)) {
		$_SESSION['msg1']= 'Your Password Must Contain At Least 1 Capital Letter!<br>';
		header('location:signup.php');
		exit;
	}
	elseif(!preg_match("#[a-z]+#",$password)) {
		$_SESSION['msg1']= 'Your Password Must Contain At Least 1 Lowercase Letter!<br>';
		header('location:signup.php');
		exit;
	}elseif($password==$cpassword){
		include_once 'databaseConnection.php';
		$connect = connect();

		$sql = "SELECT * FROM members WHERE memberUserName = '$username' OR memberEmail ='$email'";
		$output= $connect->query($sql);

		if($output-> num_rows > 0){
			$_SESSION['msg1']= 'Username or email already exists.<br>';
			header('location:signup.php');
			exit;
		}else{
			 $sql = "INSERT INTO members (memberName, memberEmail, memberPhone, memberUserName, memberAddress,memberPassword,confirmPassword) VALUES ('$name','$email','$phone','$username','$address','$password','$cpassword')";
			$connect->query($sql);
		$_SESSION['msg']= 'Registered Successfully';
			header('location:signup.php');
            }
}
    else{
        $_SESSION['msg1']= 'Password did not match';
        header('location:signup.php');
		exit;
    }
		
    }



?>


