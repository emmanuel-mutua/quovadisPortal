<?php
include("./conn.php");
     session_start();
    $sq=mysqli_query($conn,"select * from `user` where userid='".$_SESSION['id']."'");
	$srow=mysqli_fetch_array($sq);
	
	$user=$srow['FirstName'];
    $_SESSION["user"] = $user;
    
?>
