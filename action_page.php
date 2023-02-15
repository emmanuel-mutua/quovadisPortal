<?php
// check user login
include('db.php');

session_start();

$uname = $_POST['uname'];
$password = $_POST['pssw'];

//to prevent from mysqli injection  
$uname = stripcslashes($uname);  
$password = stripcslashes($password);  
$uname = mysqli_real_escape_string($conn, $uname);  
$password = mysqli_real_escape_string($conn, $password);  

$sql = "select * from reg where Uname = '$uname' and pssw = '$password'"; 
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
    // Set the session variable
    $_SESSION["uname"] = $uname;
    header('Location: ./dashboard.php');
} else {
    echo '<script> alert("Login Unsuccessful");</script>';
    include('index.html');
}
?>
