<!DOCTYPE html>
<html lang="en">
<?php
include("./conn.php");
include("./auth_session.php");
$user =  $_SESSION["user"];
$query=mysqli_query($conn,"SELECT * FROM `user` WHERE FirstName='$user'");
$row=mysqli_fetch_array($query);
$photo = $row['photo'];
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/userProfile.css">
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/loading.css">
  <!--fav-icon-->
  <link rel="shortcut icon" href="images/Log 1.png"/>
  <link rel="stylesheet" href="css/fullstyle.css">
  <title>User Profile</title>
</head>
<body>
  <section class="main" style=" height: 100vh; " >
    <nav>
      <a href="#" class="Logo">
        <img src="images/LOGO.png" width="250px" />
      </a>
      <input class="menu-btn" type="checkbox" id="menu-btn"/>
      <label class="menu-icon" for="menu-btn">
        <span class="nav-icon"></span>
      </label>
      <ul class="menu" style="border-radius: 5px;">
        <li><a class="active" href="./dashboard.php">Back</a></li>
      </ul>
    </nav>
    <div class="info-container">
  <div class="personal-info">
    <h2>User Information</h2>
    <img src="profileImg/<?php echo $photo;?>" height="100px" width="100px" border = 1px alt="User Profile Photo">
    
    <p>First Name: <?php echo $row['FirstName'];?></p>
    <p>Last Name: <?php echo $row['Lastname'];?></p>
    <p>IdNumber: <?php echo $row['IdNo'];?></p>
    <p>Last Name: <?php echo $row['Institution'];?></p>
    <p>Date Of Birth: <?php echo $row['DateOfBirth'];?></p>
    <p> HomeCounty: <?php echo $row['HomeCounty'];?></p>
    <p> PhoneNumber: <?php echo $row['PhoneNumber'];?></p>
   
  </div>
</div>
</section>
</body>
</html>