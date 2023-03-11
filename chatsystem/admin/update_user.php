<?php
    include('session.php');
    if(isset($_POST['edit'])){
        $id = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $institution = $_POST['institution'];
        $phonenumber = $_POST['phonenumber'];
        $password = $_POST['password'];

        // Update user information in the database
        $query = "UPDATE `user` SET FirstName='$fname', LastName='$lname', Institution='$institution', PhoneNumber='$phonenumber', Password='$password' WHERE UserID='$id'";
        mysqli_query($conn, $query);
    }
	print_r($_POST);
?>

