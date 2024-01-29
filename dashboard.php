<?php
session_start();

if (!isset($_SESSION['username'])) {
  header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="WEB LOGO.png">
    <title>Diary and Emotional Tracker </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500;600;700&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">   
    <link rel="stylesheet" href="homestyle.css"> 
</head>
<body>
    <style> 
    body {
        background:#D1C4E9;
        color: white; 
        font-family: Lora, serif;
    }
    </style>

    <div class="navigation">
        <div class="LOGO">
            <img src ="MOOD LOGO.png"alt="Top Left" class="top-left-image">
            </div>
             
            </head>
            <body>
               <!--=============== HEADER ===============-->
               <header class="header">
                  <nav class="nav container">
                     <div class="nav__data">
                        <a href="#" class="nav__logo">
                           <i class="ri-planet-line"></i> 
                        </a>
                        
                        <div class="nav__toggle" id="nav-toggle">
                           <i class="ri-menu-line nav__burger"></i>
                           <i class="ri-close-line nav__close"></i>
                        </div>
                     </div>
         
                     <!--=============== NAV MENU ===============-->
                     <div class="nav__menu" id="nav-menu">
                        <ul class="nav__list">
                            <li><a href="#" class="nav__link" onclick="redirectToHome();"</a></li>Home</a></li>
                            
                           <li><a href="#" class="nav__link" onclick="redirectToMoodTracker();"</a></li>Mood Tracker</a></li>
         
                           <li><a href="#" class="nav__link" onclick="redirectToDiary();"</a></li>Diary</a></li>

                           <li><a href="#" class="nav__link" onclick="redirectToProfile();"</a></li>Profile</a></li>

                        </ul>
                     </div>
                  </nav>
               </header>
         
               
            </body>
         </html>
       
    </div>
<div class="text">
    <div class="ul-content">
        <h1> What are you feeling today? </h1>
    </div>

<div class="text-container">
</div>

    

</div>
<div class="MOODS">
    <div class="content">  
        <img src = "HAPPY.png"alt="Center" class="faces">
        <h3> Joy, the Happy Cat </h3>
        <button class="button1">HAPPY</button>
        </div>
        
        <div class="content"> 
        <img src = "SAD.png"alt="Center" class="faces">
        <h3> Cloudy, the Sad Cat</h3>
        <button class="button2">SAD</button>
    </div>

        <div class="content"> 
        <img src = "ANGRY.png"alt="Center" class="faces">
        <h3> Sparky, the Angry Cat </h3>
        <button class="button3">ANGRY</button>
    </div>

        <div class="content"> 
        <img src = "EXCITED.png"alt="Center" class="faces">
        <h3> Ziggy, the Excited Cat </h3>
        <button class="button4">EXCITED</button>
    </div>

        <div class="content"> 
        <img src = "UNCOMFORTABLE.png"alt="Center" class="faces">
        <h3> Fidgy, the Uncomfortable Cat </h3>
        <button class="button5">UNCOMFORTABLE</button>
    </div>

        <div class="content"> 
        <img src = "CALM.png"alt="Center" class="faces">
        <h3> Zen, the Calm Cat </h3>
        <button class="button6">CALM</button>
    </div>

        <div class="content"> 
        <img src = "BORED.png"alt="Center" class="faces">
        <h3> Snoozer, the Bored Cat </h3>
        <button class="button7">BORED</button>
    </div>

        <div class="content"> 
        <img src = "TIRED.png"alt="Center" class="faces">
        <h3> Snozzzy, the Tired Cat </h3>
        <button class="button8">TIRED</button>
    </div>

        <div class="content"> 
        <img src = "WORRIED.png"alt="Center" class="faces">
        <h3> Trembles, the Worried Cat </h3>
        <button class="button9">WORRIED</button>
    </div>

    </div>
</div>
    <link rel="icon" href="WEB LOGO.png">
        
    <hr class="h">
    <footer class = "footer">
        <p> Stand Proud, You're strong! </p>
    </footer>
    <script>
        function redirectToHome(){
            window.location.href = 'http://localhost/WEBSITE/home.html#';
        }
        function redirectToProfile(){
            window.location.href = 'http://127.0.0.1:5500/profile.html';
        }
        function redirectToMoodTracker(){
            window.location.href = 'http://localhost/WEBSITE/moodtracker.html';
        }
        function redirectToDiary(){
            window.location.href = 'http://localhost/WEBSITE/diary.html';
        }
    </script>
</body>
</html>