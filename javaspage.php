<!--#5FCF80 is color-->
<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
    .mouse
    {
        transform: rotate(90deg);
        background-color: black;
    }
    .price-table:hover
    {
       box-shadow: 5px 5px 5px lightgrey, -5px 0px 5px lightgrey;
    }
   .modal-header
    {
        background-color:#5FCF80;
        
    }
    .mybutton {
  border-radius: 0px 40px 40px 0px;
  background-color: #5FCF80;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 10px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
} */

.mybutton span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.mybutton span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.mybutton:hover span {
  padding-right: 25px;
}

.mybutton:hover span:after {
  opacity: 1;
  right: 0;
}
    .parallax {
    /* The image used */
    /* background-image: url("aboutus.jpg"); */

    /* Set a specific height */
    min-height: 50px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
 <style>

        /*  Page styles  */

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font: normal 14px/1.4 Arial, Helvetica, sans-serif;
        }

        .skrollr-desktop body {
            height:100% !important;
        }

        #skrollr-body {
            height:100%;
            overflow:visible;
            position:relative;
        }


        /*  Styles for this example */

        .dummy-content{
            padding: 150px 0;
            background: radial-gradient(white, #EEF6F9);
            color: #3FA564;
            font-size: 24px;
            height: 10vh;
            text-align: center;
        }

        .dummy-content h2{
            font-weight: normal;
        }


        .gallery{
            background-color: #fff;
            color: #221f51;
            font: normal 24px sans-serif;
            min-height: 300vh;
            text-align: center;
            overflow: hidden;
        }

        .scroll-pause{
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            padding-top: 20vh;
        }


        .scroll-pause .row{
            width: 200vw;
            height: 30vh;
            overflow: hidden;
        }

        .scroll-pause .row div{
            width: 11.5%;
            height: 90%;
            float: left;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            margin: 0.5%;
            border-radius: 10px;
        }

        .scroll-pause .row div:first-child{
            margin-left: 0.4%;
        }

        .scroll-pause .row div:last-child{
            margin-right: 0.4%;
        }



        /* question */
        .study .que{
            color:#3FA564;
            margin:1% 1% 1% 4%;
            
        }

        .study .ans{
            margin:1% 4% 1% 4%;
          width:90%;
          text-overflow: unset;
          /* display: flex; */
          color:black;
  
          word-wrap: break-word;
        }
        .study .dott{
          margin:1% 15% 1% 4%;
          width:79%;        
          word-wrap: break-word;
          color: #0364ff;
        }

        /* question */

    </style>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>learntocode.com</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- =======================================================
    Theme Name: Mentor
    Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home.php"><span> OLP</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a  href="home.php">Features</a></li>
          <li><a  href="home.php">Organisations</a></li>
          <li><a  href="home.php">Courses</a></li>
          <li><a  href="home.php">Contact Us</a></li>
          <li><a href="#" data-target="#login" data-toggle="modal">Log in</a></li>
          <li class="btn-trial"><a href="#" data-target="#signin" data-toggle="modal">Sign in</a></li>
        </ul>
      </div>
    </div>
  </nav>   <br>
    <br>
    <br>
    

    <!-- question -->
    
    <div class="study">
        <h2 class="que">What is JavaScript?</h2>
        <p class="ans">Javascript is a dynamic computer programming language. It is lightweight and most
commonly used as a part of web pages, whose implementations allow client-side
script to interact with the user and make dynamic pages. It is an interpreted
programming language with object-oriented capabilities.</p>
    <p class="ans">JavaScript was first known as <b>LiveScript</b>, but Netscape changed its name to
JavaScript, possibly because of the excitement being generated by Java. JavaScript
made its first appearance in Netscape 2.0 in 1995 with the name <b>LiveScript</b>. The
general-purpose core of the language has been embedded in Netscape, Internet
Explorer, and other web browsers.</p>
<br>
<p class="ans">The ECMA-262 Specification defined a standard version of the core JavaScript
language.</p>
        <p class="dott">JavaScript is a lightweight, interpreted programming language.</p>
        <p class="dott">Designed for creating network-centric applications.</p>
<p class="dott">Complementary to and integrated with Java.</p>
<p class="dott">Complementary to and integrated with HTML.</p>
<p class="dott">Open and cross-platform.</p>


        <h2 class="que">Client-Side JavaScript</h2>
        <p class="ans">Client-side JavaScript is the most common form of the language. The script should
be included in or referenced by an HTML document for the code to be interpreted by
the browser.</p>
        <p class="ans">It means that a web page need not be a static HTML, but can include programs that
interact with the user, control the browser, and dynamically create HTML content.</p>
        <p class="ans">The JavaScript client-side mechanism provides many advantages over traditional CGI
server-side scripts. For example, you might use JavaScript to check if the user has
entered a valid e-mail address in a form field.</p>
        <p class="ans">The JavaScript code is executed when the user submits the form, and only if all the
entries are valid, they would be submitted to the Web Server.</p>
        <p class="ans">JavaScript can be used to trap user-initiated events such as button clicks, link
navigation, and other actions that the user initiates explicitly or implicitly.</p>
   
        <h2 class="que">Advantages of JavaScript</h2>
        <p class="ans">The merits of using JavaScript are:</p>
        <p class="dott"><b>Less server interaction:</b> You can validate user input before sending the page
off to the server. This saves server traffic, which means less load on your
server.</p>
        <p class="dott"><b>Immediate feedback to the visitors:</b> They don't have to wait for a page
reload to see if they have forgotten to enter something.
</p>
        <p class="dott"><b>Increased interactivity:</b> You can create interfaces that react when the user
hovers over them with a mouse or activates them via the keyboard.</p>
        <p class="dott"><b>Richer interfaces:</b> You can use JavaScript to include such items as drag-anddrop components and sliders to give a Rich Interface to your site visitors.</p>
        

        <h2 class="que">Limitations of JavaScript</h2>
        <p class="ans">We cannot treat JavaScript as a full-fledged programming language. It lacks the
following important features:</p>
        <p class="dott">Client-side JavaScript does not allow the reading or writing of files. This has
been kept for security reason.</p>
        <p class="dott">JavaScript cannot be used for networking applications because there is no such
support available.
</p>
        <p class="dott">JavaScript doesn't have any multithreading or multiprocessor capabilities.</p>
        <p class="ans">Once again, JavaScript is a lightweight, interpreted programming language that
allows you to build interactivity into otherwise static HTML pages.</p>

        
        <h2 class="que">JavaScript Development Tools</h2>
        <p class="ans">One of major strengths of JavaScript is that it does not require expensive
development tools. You can start with a simple text editor such as Notepad. Since it is an interpreted language inside the context of a web browser, you don't even need
to buy a compiler.
</p>

        <p class="ans">To make our life simpler, various vendors have come up with very nice JavaScript
editing tools. Some of them are listed here:
</p>
        <p class="dott"><b>Microsoft FrontPage: </b>Microsoft has developed a popular HTML editor called 
FrontPage. FrontPage also provides web developers with a number of 
JavaScript tools to assist in the creation of interactive websites.
</p>
        <p class="dott"><b>Macromedia Dreamweaver MX:</b> Macromedia Dreamweaver MX is a very 
popular HTML and JavaScript editor in the professional web development 
crowd. It provides several handy prebuilt JavaScript components, integrates 
well with databases, and conforms to new standards such as XHTML and XML.</p>
        <p class="dott"><b>Macromedia HomeSite 5:</b> HomeSite 5 is a well-liked HTML and JavaScript 
editor from Macromedia that can be used to manage personal websites 
effectively.</p>
        <h2 class="que">Where is JavaScript Today?</h2>
        <p class="ans">The ECMAScript Edition 5 standard will be the first update to be released in over four 
years. JavaScript 2.0 conforms to Edition 5 of the ECMAScript standard, and the 
difference between the two is extremely minor.</p>
        <p class="ans">Today, Netscape's JavaScript and Microsoft's JScript conform to the ECMAScript 
standard, although both the languages still support the features that are not a part 
of the standard</p>
        <p class="ans">JavaScript can be implemented using JavaScript statements that are placed within 
the <b><script>....</script></b> HTML tags in a web page.</p>
        <p class="ans"></p>
        <p class="ans"></p>
        <p class="ans"></p>

        <h2 class="que">what is html</h2>
        <p class="ans">hcbdhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>

        <h2 class="que">what is html</h2>
        <p class="ans">hcbdhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>

        <h2 class="que">what is html</h2>
        <p class="ans">hcbdhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>

        <h2 class="que">what is html</h2>
        <p class="ans">hcbdhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>
    
        <h2 class="que">what is html</h2>
        <p class="ans">hcbdhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>
    
        <h2 class="que">what is html</h2>
        <p class="ans">hcbdhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>
    
        <h2 class="que">what is html</h2>
        <p class="ans">hcbdhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>
    
        <h2 class="que">what is html</h2>
        <p class="ans">hcbdhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>
    
        <h2 class="que">what is html</h2>
        <p class="ans">hcbdhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>
    
        <h2 class="que">what is html</h2>
        <p class="ans">hcbdhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>
    
        <h2 class="que">what is html</h2>
        <p class="ans">hcbdhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>
    
        <h2 class="que">what is html</h2>
        <p class="ans">hcbdhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>
    
        <h2 class="que">what is html</h2>
        <p class="ans">hcbdhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>
    
        <h2 class="que">what is html</h2>
        <p class="ans">hcbdhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>
    
    
      </div>

    <!-- question -->

    <div class="parallax"></div>
<script src="assets/skrollr.min.js"></script>

<script>
    skrollr.init();
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

  <!--/ Contact-->
  <!--Footer-->
  <footer id="footer" class="footer">
    <div class="container text-center">

      <h3>Suggestions Are Welcomed</h3>

      <form class="mc-trial row" action="review.php" method="get">
        <div class="form-group col-md-3 col-md-offset-2 col-sm-4">
          <div class=" controls">
            <input name="username" placeholder="Enter Your FullName" class="form-control" type="text">
          </div>
        </div>
        <!-- End email input -->
        <div class="form-group col-md-3 col-sm-4">
          <div class=" controls">
            <input name="comment" placeholder="Enter Your Suggestion" class="form-control" type="text">
          </div>
        </div>
        <!-- End email input -->
        <div class="col-md-2 col-sm-4">
          <p>
            <button name="submit" type="submit" class="btn btn-block btn-submit">
            Suggest this! <i class="fa fa-arrow-right"></i></button>
          </p>
        </div>
      </form>
      <!-- End newsletter-form -->
      <ul class="social-links">
        <li><a href="https://twitter.com/RaushanKumar790?t=1OSyGRhkVNwI2DlyeEHalg&s=09"><i class="fa fa-twitter fa-fw"></i></a></li>
        <li><a href="https://www.facebook.com/people/K%C5%99-S%C3%B8%C3%B1a-%C5%98%C3%A3a%C5%BC/100053722641703/"><i class="fa fa-facebook fa-fw"></i></a></li>
        <li><a href="http://Instagram.com/kr_sona_raaz"><i class="fa fa-instagram fa-fw"></i></a></li>
        <li><a href="http://www.linkedin.com/in/raushan-kumar-844aa1229"><i class="fa fa-linkedin fa-fw"></i></a></li>
      </ul>
      ©2023 Online Learning Platform  All rights reserved
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Mentor
        -->
        
      </div>
    </div>
  </footer>
  <!--/ Footer-->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>
<!--    php for calculating visits in site-->
<?php

     
     if($_SERVER['REQUEST_METHOD']=="GET"){
       $localhost = "localhost:3307";
       $usernamew = "root";
       $passwordw = "";
          $db = "expdb";
      $conn = mysqli_connect($localhost,$usernamew,$passwordw,$db);
      if(!$conn){
       echo "Connection error";
       }
         else{
     
     $sql = "UPDATE counter SET visit=visit+1 WHERE id = 2";
    $result = mysqli_query($conn,$sql);
 }

}

?>
</html>
