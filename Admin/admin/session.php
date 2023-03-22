<?php
	session_start();
	include('../conn.php');
	
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
	header('location:./login.php');
    exit();
	}
	
	$sq=mysqli_query($conn,"select * from `user` where userid='".$_SESSION['id']."'");
	$srow=mysqli_fetch_array($sq);
		
	if ($srow['access']!=1){
		header('location:./login.php');
		exit();
	}
	
	$user=$srow['FirstName'];
?>