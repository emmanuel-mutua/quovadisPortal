<!DOCTYPE html>
<html lang="en">

<?php
include("./userdata/userdetails.php");
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
                <li><a class="active" href = "./dashboard.php" >Back</a></li>
            </ul>
        </nav>

        <div class="info-container">
  <div class="personal-info">
    <h2>Basic Information</h2>

    <img src="profileImg/<?php echo $picture;?>" alt="CV">
    <ul>
      <li><strong>Name:  </strong> <?php echo $fullname; ?> </li>
      <li><strong>Gender:  </strong>  <?php echo $gender; ?></li>
      <li><strong>Status: </strong>  <?php echo $status; ?></li>
      <li><strong>Email: </strong>  <?php echo $email; ?></li>
      <li><strong>Phone: </strong>  <?php echo $phone; ?></li>
    </ul>
  </div>
  
  <div class="other-info">
    <h2>Additional Information</h2>
    <ul>
   
      <li><strong>Home Diocese:</strong>  <?php echo $diocese; ?></li>
      <li><strong>Home Parish:</strong>  <?php echo $parish; ?></li>
      <li><strong>Highschool:</strong>  <?php echo  $high_school; ?></li>
      <li><strong>Institution(college):</strong>  <?php echo $college; ?></li>
      <li><strong>KCSE:</strong>  <?php echo $kcse; ?></li>
      <li><strong>KCSE:</strong>  <?php echo  $kcsegrade; ?></li>
     
    
    </ul>
  </div>
</div>
        
</section>

</body>
</html>
