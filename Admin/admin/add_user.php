<?php
    include('session.php');
    if(isset($_POST['adduser'])){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $idno=$_POST['idno'];
        $institution=$_POST['institution'];
        $dateofbirth=$_POST['dateofbirth'];
        $Gender=$_POST['Gender'];
        $homecounty=$_POST['homecounty'];
        $phonenumber=$_POST['phonenumber'];
        $password=$_POST['password'];
        $access=$_POST['access'];
        
        mysqli_query($conn,"INSERT INTO `user` (firstname, lastname, idno, institution, dateofbirth, Gender, homecounty, phonenumber, password, access) VALUES ('$firstname', '$lastname', '$idno', '$institution', '$dateofbirth','$Gender','$homecounty', '$phonenumber', '$password', '$access')");
    }
?>
