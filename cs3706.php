<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/detail_prize.css">
    <title>Document</title>
</head>
<!-- <script src="JS/controler_search.js">
</script> -->
<body>
    <head>
        <div class="logo_prize" style="display: flex; justify-content: center;">
            <a href="home.php"><img src="./img/logo.png" alt=""></a>
            <div class="visitor-counter">Visitors: <span id="visitorCount"></span></div>
            </div>
        </div>
        <div class="banner">
            <img src="" alt="">
        </div>
        <!--Đổ data từ database-->
        <hr style="color: beige;">
        <div class="navbar">
        <div class="menu">
        
           
                <li><a href="home_page.php">Home</a> 
                 
                </li> 
                <li><a href="about.php">About</a>
                  
                   </li> 
                <li><a href="monument.php">Monuments</a>
                    
                </li> 
                <li><a href="Gallery.php">Gallery</a>
                  
                </li> 
                <li><a href="contact_us.php">Contact Us</a>
                  
                </li> 
                <li><a href="feed_back.php">Feedback</a>
                    
                </li> 
                   
        </div>
        
    </div>
    </head>
    </body>
<script>
    let visitorCount = sessionStorage.getItem('visitorCount') || 1;
// visitorCount++;
sessionStorage.setItem('visitorCount', visitorCount);
document.getElementById('visitorCount').textContent = visitorCount;
</script>