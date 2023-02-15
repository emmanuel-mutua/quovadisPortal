
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
    $uname = $_POST['Uname'];

       //to prevent from mysqli injection  
       $email = stripcslashes($email);  
       $email = mysqli_real_escape_string($conn, $email); 
       $uname = stripcslashes($uname);  
       $uname = mysqli_real_escape_string($conn, $uname);   
         
       
     
       $sql = "SELECT * FROM reg WHERE Email = '$email' OR Uname = '$uname'";

      

       $result = mysqli_query($conn, $sql); 
      
    

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
       


       $count = mysqli_num_rows($result); 
         
       

         //if there is one common email or uname
       if($count > 0){
    
            include('register.html');
            echo '<script>
    
            document.getElementById("errmsg").innerHTML = "Uname/Email Exists, ";
            
        </script>
        
        '; 

        
         
}  
       else{ 
        // username and email not found, so send data to db 
    //getting data from the registration form

    
    session_start();

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

if( isset($_FILES['pic'])){
    $pic_name = $_FILES['pic']['name'];
    $temp_name = $_FILES['pic']['tmp_name'];
    
    $img_ex = pathinfo($pic_name, PATHINFO_EXTENSION);
    $img_ex_lc = strtolower($img_ex);
    
    $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
    $img_upload_path = 'profileImg/'.$new_img_name;
    move_uploaded_file($temp_name, $img_upload_path);
}

// Insert data into database
$sql_send = "INSERT INTO reg (fname, Uname, Dname, Pname, KCSE, theStatus, Cname, Email, pno, pssw, cpssw, gender, pic)
        VALUES ('$fname', '$uname', '$dname', '$pname', '$kcse', '$status', '$cname', '$email', '$pno', '$pssw', '$cpssw', '$gender', '$new_img_name')";

if (mysqli_query($conn, $sql_send)) {
   $_SESSION["uname"] = $uname;
    header('Location: ./dashboard.php');
    //we can add a back to login instead of going direct to dashboard
} else {
    echo "<div class='form'>
    <h3>Required fields are missing.</h3><br/>
    <p class='link'>Click here to <a href='register.html'>registration</a> again.</p>
    </div>";
}

mysqli_close($conn);
        }



?>
