<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Music Player App</title>
    <link rel="stylesheet" href="css/style679.css">
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!--Scroll up button-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <i class="fa fa-angle-up" style="color:white; font-weight: 600;"></i>
    </button>

    <section class="header">
        <nav>
            <a href="index.php" style="text-decoration: none; font-size: 1.5rem; color: white;"><li class="fa fa-music"></li> Music Player MP3</a>
            <div class="nav-container">
                <div class="nav-links" id="navLinks">
                    <img src="img/close1.png" onclick="hideMenu()">
                    <ul>
                        <li><a href="#index.php">HOME</a></li>
                        <li><a href="blog/blog-page.php">BLOG</a></li>
                        <li><a href="#details/about.php">ABOUT</a></li>
                        <li><a href="#details/contact.php">CONTACT</a></li>
                        <li><a href="#details/signup.php">SIGN UP</a></li>
                        <li><a href="#details/login.php">LOGIN</a></li>
                    </ul>
                </div>
                
                <img src="img/menu.png" onclick="showMenu()">
            </div>
        </nav>
        

        <div class="text-box">
            <h1 style="color: white;">KNOW US BETTER</h1>
            <div class="text-body">

            </div>
            <!-- <a href="gospel.php" class="hero-btn"><li class="fa fa-eye"></li> PLAY NOW</a>
            <a href="#details/download.php" class="hero-btn"><li class="fa fa-download"></li> DOWNLOAD MUSIC</a> -->
        </div>
    </section>

    <section id="product1" class="section-p1">
        <p style="font-weight: 600; font-size: 26px; color: black;">ABOUT US</p>
    
        <div class="pro-container">
            <P style="text-align: justify;">
                This is a music player web application used to entartain user with any kind of music. 
                The application was design and developed by ALX student name 
                Kefuoe Sole who specializes as a FRONTEND DEVELOPER studying 
                Software engineering in 2023. 

            </P>
        </div>
    </section>
  
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sin Up For Newsletters</h4>
            <p>Get E-mail updates about LATEST <span>music.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal"><a href="#register.php" >Sign Up</a></button>
        </div>
    </section>

    <!--footer -->
    <?php
        include 'footer/footer.php';
    ?>

    <script src="script.js"></script>


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

<!--Scroll up button JS--> 
<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
mybutton.style.display = "block";
} else {
mybutton.style.display = "none";
}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}
</script>
</body>

</html>