<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Music Player App</title>
    <link rel="stylesheet" href="css/style679.css">
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="css/flex-boxes.css">
    <link rel="stylesheet" href="css/style0.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!--Scroll up button-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <i class="fa fa-angle-up" style="color:white; font-weight: 600;"></i>
    </button>

    <!-- Top navigation bar links -->
    <section class="header">
        <nav>
            <a href="index.php" style="text-decoration: none; font-size: 1.5rem; color: white;"><li class="fa fa-music"></li> Music Player MP3</a>
            <div class="nav-container">
                <div class="nav-links" id="navLinks">
                    <img src="img/close1.png" onclick="hideMenu()">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="blog/blog-page.php">BLOG</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                        <li><a href="#signup.php">SIGN UP</a></li>
                        <li><a href="#login.php">LOGIN</a></li>
                    </ul>
                </div>
                
                <img src="img/menu.png" onclick="showMenu()">
            </div>
        </nav>
        

        <div class="text-box">
            <h1 style="color: white;">KNOW US BETTER</h1>
            <div class="text-body">

            </div>
        </div>
    </section>
    
   <!-- About section for the project-->
    <section id="form-details">
        <form action=""> 
            <h3>Sole's Card</h3>
            
            <p style="text-align:justify">
            He is highly motivated individual in the field of Information Communication Technology learning and 
            applying knowledge and skills learnt in fields of  Software Engineering, Computer Networking, 
            Cyber Security, ICT Teaching Facilitation, Cloud Computing and 
            IT Support and many more to cater to the specific needs of the people. 
            <br><br>
            He is currently pursuing my BSc (Hons) in Computing (Software Engineering and Network & Infrastructure Management)
            at Botho University and he is in his final year(5th) of study. Ever since enrolled in this field of Information Technology, 
            his experience with IT change day to day for better amazing changes.                
            </p> 
            
        </form>

        <div class="people">
            <div>
                <img src="img/icon-1.jpg" alt="" style="border-radius: 50%;">
                <p><span>Kefuoe Sole</span> 
                Software Developer (Frontend Developer) <br> 
                Phone: (+266) 58183915 <br> 
                Email: soolekefuoe2@gmail.com<br>
                Github: <a href="https://github.com/1923k">Github link</a><br>
                Linkedin: <a href="https://www.linkedin.com/in/kefuoe-sole-0797061ba/">Linkedin link</a><br>
            </p>
            </div>
        </div>
    </section>
    <!--End of about us for the project -->

    <!--Subscribe section-->
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
    <!--End of Subscribe section-->

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