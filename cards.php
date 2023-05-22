<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trello Board</title>
    <link rel="shortcut icon" href="img/icons/logoo.png" width="55px" height="52px">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <!--ICONS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/style.css"> <!--style css-->
    <link rel="stylesheet" href="../css/buttons.css"> <!--style css-->
<style>
.fa{
    font-size: 30px;
}

.sub-header{
    height: 50vh;
    width: 100%;
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(../img/banners/banner0.png);
    background-position: center;
    background-size: cover;
    text-align: center;
    color: white;
}
.sub-header h1{
  padding : 20px;
  color: white;
}
p{
    text-align: center;
    font-size: 22px;
    color: white;
}

</style>
</head>
<body>
    <!--Scroll up button-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <i class="fa fa-angle-up" style="color:white; font-weight: 600;"></i>
    </button>
   
    <div class="sub-header">
    <br><br><br><br><br><br>
        <table style="margin-left: 50px;">
            <tr>
                <th style="font-size: 30px; float: left; ">TRELLO BOARD</th>
            </tr>
            <tr>
                <td style="font-size: 20px;"><li class="fa fa-code" style="font-size: 23px;"></li> ALX Software Engineering</td>
            </tr>
            
        </table>
        <br><br>
        <table style="margin-left: 50px;">
            <tr>
                <th style="font-size: 16px; float: left;">Team Member:</th>
            </tr>
            <tr>
                <td style="font-size: 16px;color: orange;"><li class="fa fa-users" style="font-size: 15px;"></li> Kefuoe Sole & Bright Brako</td>
            </tr>

        </table>
    </div>

    <section id="product1" class="section-p1">
        <h4><i class="fa fa-dashboard" style="font-size:24px"></i> TRELLO BOARD <i class="fa fa-arrow-right" style="font-size:24px"></i> Proposed Column</h4>
        <div class="pro-container">
            <div class="pro" style="width: 47%; background-color: powderblue;" >
                <div class="des">
                    <div style="width: 100%; border: 1px solid powderblue;">
                        <h4 style="padding: 7px;">Card 1    
                            <a href="card1.php">Sign Up Member</a>
                            <a href="../index.php" title="Close"><i class="fa fa-close" style="font-size:16px; float: right;"></i></a>
                        </h4>
                    </div>
                    <br>
                    <h3><i class="fa fa-window-maximize" style="font-size:16px"></i> Implement Audio Mangement Interface</h3>
                    <h4>In list <a href="">Proposed</a> <i class="fa fa-eye" style="font-size:16px"></i></h4>
                    <br><br>
                    <b><i class="fa fa-server" style="font-size:16px"></i> Description</b>
                    <br><br>
                    This is the overall description for the Audio management interface for users to interact with
                    <br><br>
                    <table>
                        <tr>
                            <td style="width: 40%;">
                                <form action="#cards.php">
                                    <b><i class="fa fa-check-square-o" style="font-size:16px"></i> Checklist</b><br><br>
                                    <input type="checkbox" id="btn1" name="btn1" value="prev">
                                    <label for="button1"> Previous Button</label><br>
                                    <input type="checkbox" id="btn2" name="btn2" value="nex">
                                    <label for="button2"> Next Button</label><br>
                                    <input type="checkbox" id="btn3" name="btn3" value="pau">
                                    <label for="button3"> Pause Button</label><br>
                                    <input type="checkbox" id="btn4" name="btn4" value="rep">
                                    <label for="button4"> Repeat Button</label><br>
                                    <input type="checkbox" id="btn5" name="btn5" value="vol">
                                    <label for="button5"> Volume Button</label><br>
                                    <input type="checkbox" id="btn6" name="btn6" value="shu">
                                    <label for="button6"> Shuffle Button</label><br><br>
                                    <input type="submit" value="OK">
                                </form>
                    <br><br>
                    <form>
                        <b><i class="fa fa-sliders" style="font-size:16px"></i> Activity</b>
                        <br><br>
                        <textarea type="text" style="padding: 10px; width: 100%;"></textarea>
                        <input type="submit" value="Ok">
                    </form>
                            </td>
                            <td>
                                <h4 style="margin-left: 30px; margin-top: 20px;">ADD TO CARD</h4><br>
                                <button style="width: 80%; text-align: left; margin-left: 30px; padding: 3px; border: none;"> 
                                    <i class="fa fa-user" style="font-size:16px"></i> Members
                                </button>
                               
                                <br><br><br><br><br><br><br><br><br><br>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>    
             <div class="pro" style="width: 47%; background-color: powderblue;" >
                <div class="des">
                    <div style="width: 100%; border: 1px solid powderblue;">
                        <h4 style="padding: 7px;">Card 2 
                            <a href="card2.php">Sign Up Member</a>
                            <a href="../index.php" title="Close"><i class="fa fa-close" style="font-size:16px; float: right;"></i></a>
                        </h4>
                    </div>
                    <br>
                    <h3><i class="fa fa-window-maximize" style="font-size:16px"></i> Implement Music Display</h3>
                    <h4>In list <a href="">Proposed</a> <i class="fa fa-eye" style="font-size:16px"></i></h4>
                    <br><br>
                    <b><i class="fa fa-server" style="font-size:16px"></i> Description</b>
                    <br><br>
                    This is the overall description of how the song is displayed on the UI
                    <br><br>
                    <table>
                        <tr>
                            <td style="width: 40%;">
                                <form action="#cards.php">
                        <b><i class="fa fa-check-square-o" style="font-size:16px"></i> Checklist</b><br><br>
                        <input type="checkbox" id="btn1" name="btn1" value="artist">
                        <label for="button1"> Artist</label><br>
                        <input type="checkbox" id="btn2" name="btn2" value="song">
                        <label for="button2"> Song Length</label><br><br>
                        <input type="submit" value="OK">
                    </form>
                    <br><br><br><br>
                    <form>
                        <b><i class="fa fa-sliders" style="font-size:16px"></i> Activity</b>
                        <br><br>
                        <textarea type="text" style="padding: 10px; width: 100%;"></textarea>
                        <input type="submit" value="Ok">
                    </form>
                            </td>
                            <td>
                                <h4 style="margin-left: 30px; margin-top: 20px;">ADD TO CARD</h4><br>
                                <button style="width: 80%; text-align: left; margin-left: 30px; padding: 3px; border: none;"> 
                                    <i class="fa fa-user" style="font-size:16px"></i> Members
                                </button>
                                <button style="width: 80%; margin-top: 3px; text-align: left; margin-left: 30px; padding: 3px; border: none;"> 
                                    <i class="fa fa-eyedropper" style="font-size:16px"></i> Labels
                                </button>
                                <button style="width: 80%; margin-top: 3px; text-align: left; margin-left: 30px; padding: 3px; border: none;"> 
                                    <i class="fa fa-check-square-o" style="font-size:16px"></i> Checklist
                                </button>
                                <button style="width: 80%; margin-top: 3px; text-align: left; margin-left: 30px; padding: 3px; border: none;"> 
                                    <i class="fa fa-clock-o" style="font-size:16px"></i> Due Date
                                </button>
                                <button style="width: 80%; margin-top: 3px; text-align: left; margin-left: 30px; padding: 3px; border: none;"> 
                                    <i class="fa fa-file-archive-o" style="font-size:16px"></i> Attachments
                                </button>
                                <button style="width: 80%; margin-top: 3px; text-align: left; margin-left: 30px; padding: 3px; border: none;"> 
                                    <i class="fa fa-window-maximize" style="font-size:16px"></i> Cover
                                </button>
                                <br><br><br><br><br><br><br><br>
                            </td>
                        </tr>
                    </table>
                 
                </div>
            </div>  
        </div>

      
    </section>
    
    <div>
        <hr>
        <p style="color: black; font-size: 15px;">ALX Project Approval(Part 3)@Team Project</p>
    </div>

    <script src="../script.js"></script>

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