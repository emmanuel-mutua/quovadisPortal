
<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>QUO VADIS YOUTH HUB JOB PLACEMENT</title>
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/loading.css">
<!--fav-icon-->
<link rel="shortcut icon" href="images/Log 1.png"/>
<link rel="stylesheet" href="css/fullstyle.css">
</head>
<div id="loading-page">
    <div class="loading-icon">
      <i class="fa fa-spinner fa-spin"></i>
    </div>
  </div>
<script>
    setTimeout(function(){
      document.getElementById("loading-page").style.display = "none";
    }, 2000); // 2 seconds
  </script>
<script>
        document.addEventListener("DOMContentLoaded", function() {
            var alertBox = document.createElement("div");
            alertBox.innerHTML = "Success";
            alertBox.style = "position: fixed; top: 10px; right: 10px; padding: 10px; background-color: #f2f2f2; border: 1px solid #ddd; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);";
            document.body.appendChild(alertBox);

            setTimeout(function() {
                alertBox.style.display = "none";
            }, 2000);
        });

    </script>

            <a href="./index.html">SignOut</a>
    



<body id="main-body">
    
    <section class="main" style="background-image: url(images/hero-bg.png);">
        
        <nav>
            <a href="#" class="Logo">
                <img src="images/LOGO.png" width="320px" />
            </a>
            <input class="menu-btn" type="checkbox" id="menu-btn"/>
            <label class="menu-icon" for="menu-btn">
                <span class="nav-icon"></span>
            </label>
            <ul class="menu" style="border-radius: 5px;">
                <li><a href="https://quovadisyouthhub.org">About</a></li>
                <li><a href="#services">services</a></li>
                <li><a href="./userProfile.php">My Profile</a></li>
                <li><a href="#">Available Jobs</a></li>
                <li><a href="#">Career Guidance</a></li>
                <li><a class="active" href = "./index.html" >Log Out</a></li>
            </ul>
        </nav>

        <!--main-content-->
        <div class="home-content">
            
            <!--text-->
            <div class="home-text" >
            <h1 style="color: orange; font-size: 50px"><h1 style="color: orange; font-size: 50px">Hi, <?php echo $user?>!</h1></h1>
                <h3 style="color: white; letter-spacing: 3px;">Welcome to Quo Vadis Youth Hub</h3>
                <h1 style="color: white;"> ONLINE PORTAL</h1>
                <p style="color: white;">The main aim is to capture the details of the Young people in an aid of capturing the progress and know their status in the Job Market. The job placement department will work to link the Young people with the Job market accross the Country. We will also lias with the Employers to give them young people best suited for the job vacance they have.</p>
            <!--login-btn-->
            <a href="#" class="main-login" style="border-radius: 10px;">BECOME A MEMBER</a>
            </div>
            <!--img-->
            <div class="home-img" style="width: 500px;">
                <img src="images/Post.png" width="500px" style="text-shadow: 20px 22px;"/>
                <marquee width="100%" direction="left" onmouseover="this.stop();"
                onmouseout="this.start();">
                    <a href="#" style="color: white;">Check our updates on a daily Basis, we will be updating our website for new vacances accross the country</a>
                    </marquee>
                    <marquee width="100%" direction="right" onmouseover="this.stop();"
                onmouseout="this.start();">
                    <a href="#" style="color: white;">WELCOME FOR A CAREER DAY ON 18TH FEBRUARY 2023.</a>
                    </marquee>
            </div>
            
        </div>
        
        <!--arrow-->
        <div class="arrow"></div>
        <span class="scroll">Scroll</span>
    </section>
    
    <!--services----------------------->
    <section class="services" id = "services" >
        <script>
            fetch("index.html")
  .then(response => response.text())
  .then(html => {
    const doc = new DOMParser().parseFromString(html, "text/html");
    const div1 = doc.querySelector("#services");
    // ... insert the content of services into your dashboard.php file
    const newDiv = document.createElement("div");
newDiv.innerHTML = div1.innerHTML;
document.body.appendChild(newDiv);
  });
        </script>
    
    
    </section>
    
   
    <script>
        // Get the modal
        var modal = document.getElementById('id01');
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/641a94a04247f20fefe74ae7/1gs3t958k';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

    </body>
</html>