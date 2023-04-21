<?php
	include('db.php');
	session_start();
	function check_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$IdNo=check_input($_POST['IdNo']);
		
		if (!preg_match("/^[a-zA-Z0-9_]*$/",$IdNo)) {
			$_SESSION['msg'] = "ID Num should not contain space and special characters!"; 
			header('location: login.php');
		}
		else{
			
		$IDNo =$IdNo;
		
		$password = check_input($_POST["password"]);
		
		$query=mysqli_query($conn,"select * from `user` where IdNo='$IDNo ' and password='$password'");
		
		if(mysqli_num_rows($query)==0){
			$_SESSION['msg'] = "Login Failed, Invalid Input!";
			header('location: login.php');
		}
		else{
			
			$row=mysqli_fetch_array($query);
			if ($row['access']==1){
				$_SESSION['id']=$row['userid'];
				?>
				<script>
					window.alert('Login Success, Welcome Admin!');
					window.location.href='./Admin/admin/index.php';
				</script>
				<?php
			}
			else{
				$_SESSION['id']=$row['userid'];
				header('Location : ./user');
			}
		}
		
		}
	}
?>