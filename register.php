<?php
	include('conn.php');
	session_start();
	function check_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$firstname=check_input($_POST['FirstName']);
		$lname = check_input($_POST["lastname"]);
		
		if (!preg_match("/^[a-zA-Z0-9_]*$/",$firstname)) {
			$_SESSION['sign_msg'] = "Name should not contain space and special characters!"; 
			header('location: signup.php');
		}
		else{
			
			
		$fname=$firstname;
		$lastname = $lname;
		$IdNo = check_input($_POST["IdNo"]);
		$Institution = check_input($_POST["Institution"]);
		$DateOfBirth = check_input($_POST["DateOfBirth"]);
		$HomeCounty = check_input($_POST["HomeCounty"]);
		$PhoneNumber = check_input($_POST["PhoneNumber"]);
		$password = check_input($_POST["password"]);
		$fpassword=md5($password);
		

		if( isset($_FILES['Photo'])){
			$pic_name = $_FILES['Photo']['name'];
			$temp_name = $_FILES['Photo']['tmp_name'];
			
			$img_ex = pathinfo($pic_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);
			
			$new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
			$img_upload_path = 'profileImg/'.$new_img_name;
			move_uploaded_file($temp_name, $img_upload_path);
		}
		
		mysqli_query($conn,"insert into `user` (FirstName, Lastname, IdNo, Institution, DateOfBirth, HomeCounty, PhoneNumber, password, photo, access) 
		values ('$fname', '$lastname', '$IdNo', '$Institution', '$DateOfBirth', '$HomeCounty', '$PhoneNumber', '$password', '$new_img_name', '2')");
		
		$_SESSION['msg'] = "Sign up successful. You may login now!"; 
		header('location: login.php');
		}
	}
?>