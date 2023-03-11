<?php
include("./conn.php");
     session_start();
    if(!isset($_SESSION["id"])) {
        header("Location: index.html");
        exit();
    }
    $sq=mysqli_query($conn,"select * from `user` where userid='".$_SESSION['id']."'");
	$srow=mysqli_fetch_array($sq);
	
	$user=$srow['FirstName'];
    $_SESSION["user"] = $user;
    
?>
