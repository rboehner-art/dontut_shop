<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400;600&family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <title>Donut_Shop</title>
</head>
<body>
        <!---navbar--->
        <nav>
            <div class="bg-img">
            <div class="container">
                <div class="topnav">
                  <a href="Main_page.php">
                  <img src="Image/flat,750x1000,075,f.jpeg" alt="Logo" style="width: 100px;" class="rounded-pill">
                </a>
                <div>
              <ul>
                <li><a onclick="openWindowTwo()"href="">Order Now</a></li>
                <li><a onclick="openChildWindowTwo()"href="" >Location</a></li>
                <li><a href="Image/DonutMENU.pdf">Donut Menu</a></li>
              
              </ul>
                  
                </div>
                </div>
              </div>
            </div>
          </nav>
           <!--Background Video-->
    
    <div class="video-container">
        <video autoplay muted loop id="Donut" src="Image/pexels-olya-kobruseva-5602702.mp4" ></video>
        </div>

    <!--Java Script-->
  <script src="javaScript.js"></script>
</body>
        <footer class="py-4 ">
  <button onclick="openWindow()" class="button button1" >Contact</button>
  <button onclick="openJobs()" class="button button2">Jobs</button> 
  <p class="hours">Hours of operation 5:00 A.M. to 3:00 P.M.</p>
        
  <script src="javaScript.js"></script>
    
</footer>
</html>