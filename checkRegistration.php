
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<?php

include('db.php');
// Check connection
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());
} 
//checking if username and password exists
    $email = $_POST['Email'];

       //to prevent from mysqli injection  
       $email = stripcslashes($email);  
       $email = mysqli_real_escape_string($conn, $email);   
       
     
       $sql = "select * from reg where Email = '$email'"; 
      

       $result = mysqli_query($conn, $sql); 
    

       $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  


       $count = mysqli_num_rows($result);  
       

         //if there is one common email 
       if($count == 1){
    
            include('register.html');
            echo '<script>
    
            document.getElementById("errmsg").innerHTML = "Email Exists, ";
            
        </script>
        
        '; 

        
         
}  
       else{ 
        // username and email not found, so send data to db 
    //getting data from the registration form
$fname = $_POST['fname'];
$uname = $_POST['Uname'];
$dname = $_POST['Dname'];
$pname = $_POST['Pname'];
$kcse = $_POST['KCSE'];
$status = $_POST['Status'];
$cname = $_POST['Cname'];
$email = $_POST['Email'];
$pno = $_POST['pno'];
$pssw = $_POST['pssw'];
$cpssw = $_POST['cpssw'];
$gender = $_POST['gender'];
$pic = $_FILES['pic'];

// Insert data into database
$sql_send = "INSERT INTO reg (fname, Uname, Dname, Pname, KCSE, theStatus, Cname, Email, pno, pssw, cpssw, gender, pic)
        VALUES ('$fname', '$uname', '$dname', '$pname', '$kcse', '$status', '$cname', '$email', '$pno', '$pssw', '$cpssw', '$gender', '$pic')";

if (mysqli_query($conn, $sql_send)) {
    echo '<script>alert("SuccessFully Registered")</script>';
    include("./dashboard.php");
} else {
    echo "<div class='form'>
    <h3>Required fields are missing.</h3><br/>
    <p class='link'>Click here to <a href='register.html'>registration</a> again.</p>
    </div>";
}

mysqli_close($conn);
        }



?>
