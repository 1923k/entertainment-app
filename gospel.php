<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gospel - Music Player</title>
    <link rel="stylesheet" href="css/style679.css">
    <link rel="stylesheet" href="css/soudds1.css">
    <link rel="stylesheet" href="css/flex-boxes.css">
    <script src="js/gospel.js" defer></script>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    
 <!-- Top navigation bar links -->
<section id="product1" class="section-p1">
        <font>
        <nav>
            <a href="index.php" style="text-decoration: none; font-size: 1.5rem; color: white;"><li class="fa fa-music"></li> Music Player MP3</a>
            <div class="nav-container">
                <div class="nav-links" id="navLinks">
                    <img src="img/close1.png" onclick="hideMenu()">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="#download.php">DOWNLOAD</a></li>
                        <li><a href="blog/blog-page.php">NEWS</a></li>
                        <li><a href="#contact.php">CONTACT</a></li>
                        <li><a href="#signup.php">SIGN UP</a></li>
                        <li><a href="#ogin.php">LOGIN</a></li>
                        <li><a href="index.php" style="color: white; text-decoration: none;">
                            <li class="fa fa-sign-out" style="font-size: 16px; color: white;"> EXIT</li></a>
                        </li>
                    </ul>
                </div>
                
                <img src="img/menu.png" onclick="showMenu()">
            </div>
        </nav>
        </font>
        
        <!-- Music access -->
        <div class="pro-container">
            <div class="pro" style="width: 47%; background-color: powderblue;" >
                <div class="div-1">
                    <img src="img/ban-1.png">
                </div>
                <div>
                    <h4>ENTERTAINMENT FOR LIFE <br><b style="color: navy;">#PENYA PLAY</b></h4>
                </div>
                <a href="#gospel.php" class="hero-btn" style="background-color: navy;"><li class="fa fa-play"></li> GOSPEL</a>
                <a href="house.php" class="hero-btn"><li class="fa fa-play"></li> HOUSE</a>
                <a href="r&b.php" class="hero-btn"><li class="fa fa-play"></li> R & B</a>
                <a href="hiphop.php" class="hero-btn"><li class="fa fa-play"></li> HIP HOP</a>
            </div>    

             <div class="pro" style="width: 47%; background-color: powderblue;" >
                <div class="des">         
                    <div class="wrapper"><!--End of Wrapper-->
                        <div class="details">
                            <h2>GOSPEL MUSIC PLAY</h2>
                            <div class="now-playing">PLAYING x OF y</div>
                            <div class="track-art">
                                <div class="dis">
                                    <div id="wave">
                                        <span class="stroke1"></span>
                                        <span class="stroke1"></span>
                                        <span class="stroke1"></span>
                                        <span class="stroke1"></span>
                                        <span class="stroke1"></span>
                                        <span class="stroke1"></span>
                                        <span class="stroke1"></span>
                                    </div>  
                                </div>
                            </div>
                            <div class="track-name">Track Name</div>
                            <div class="track-artist">Track Artist</div>
                        </div>
                    
                        <div class="slider_container">
                            <div class="current-time">00:00</div>
                            <input type="range" min="1" max="100" value="0" class="seek_slider" onchange="seekTo()">
                            <div class="total-duration">00:00</div>
                        </div>

                        <div class="slider_container">
                            <i class="fa fa-volume-down"></i>
                            <input type="range" min="1" max="100" value="99" class="volume_slider" onchange="setVolume()">
                            <i class="fa fa-volume-up"></i>
                        </div>

                        <div class="buttons">
                            <div class="random-track" onclick="randomTrack()">
                                <i class="fas fa-random fa-2x" title="Random Track"></i>
                            </div>
                            <div class="prev-track" onclick="prevTrack()">
                                <i class="fa fa-step-backward fa-2x" title="Previous Track"></i>
                            </div>
                            <div class="playpause-track" onclick="playpauseTrack()">
                                <i class="fa fa-play-circle fa-2x" title="Play"></i>
                            </div>
                            <div class="next-track" onclick="nextTrack()">
                                <i class="fa fa-step-forward fa-2x" title="Next Track"></i>
                            </div>
                            <div class="repeat-track" onclick="repeatTrack()">
                                <i class="fa fa-repeat fa-2x" title="Repeat Track"></i>
                            </div>
                        </div>
                    </div><!--End of Wrapper-->
                </div>
            </div>  
        </div>
    </section>

<!--Javascript for toggle menu-->
<script>
    var navLinks = document.getElementById("navLinks");
    function showMenu() {
        navLinks.style.right = "0";
    }
    function hideMenu() {
        navLinks.style.right = "-200px";
    }
</script>
</body>
</html>