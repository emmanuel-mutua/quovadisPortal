<!DOCTYPE html>
<html lang="en">


<?php
include("./conn.php");
			$query=mysqli_query($conn,"select * from `user` order by FirstName asc");
			while($row=mysqli_fetch_array($query)){
				$photo = $row['photo'];	
        echo $row['FirstName'];
      }
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

    <img src="profileImg/<?php echo $photo;?>" alt="CV">
   
  </div>
  
  <div class="other-info">
    <h2>Additional Information</h2>
    <ul>

     
    
    </ul>
  </div>
</div>
        
</section>

</body>
</html>