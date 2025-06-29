<!--#5FCF80 is color-->
<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    
     @media screen and (max-width: 1000px) 
    {
    .coursecards {display:block;}
        .card{display: block;min-width: 300px;}
    
     }
    
     @media screen and (max-width: 1000px) 
    {
    #cform{min-width: 500px;}
        
    
     }
    
    
    
    
    
    
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
}

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
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 20%;
  
    float:left;
      margin:8px;
    
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.cardcontainer {
    padding: 2px 16px;
  
    
}



.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
    float: left;
    margin: 5px;
    margin-left: 50px;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
color:white;
}
    img
    {
        width: 100%;
        height: 150px;
    }
    
      #cform
        {
            display: none;
            position: absolute;
            top:-20px;
            left:500px
            
        }

        #javascript a{
          font-size:16px;
        }

    
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
          <!-- <li><a href="#feature">LOGIC</a></li>
          <li><a href="#organisations">RESEARCH</a></li>
          <li><a href="#courses">WEB</a></li>
          <li><a href="#pricing">OTHERS</a></li>
          <li><a href="#" data-target="#login" data-toggle="modal">Log in</a></li>
          <li class="btn-trial"><a href="#" data-target="#signin" data-toggle="modal">Sign in</a></li> -->
          <li class="btn-trial"><a href="home.php" >Logout</a></li>
          
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->
    
<br>
    <br>
<br>
    
    <script>
        	function showMessage(btnId)
            {			

            document.getElementById("cform").style.display="block";
                 document.getElementById("coursecards").style.display="none";
                
                document.getElementById("couselect").value=btnId;
                      document.getElementById("couselect").readOnly=true;
                
                
            
                
                
			}
    </script>
   
    
<!--    payment form-->
<!--
      <form action="payment.php" method="get" id="cform">
    Username<input type="text" name="fname"><br>
    password<input type="text" name="pass"><br>
    Credit card Number<input type="text" name="cred"><br>
    Course Bought<input type="text" name="coursename" id="couselect"><br>

    <input type="submit">
</form>
-->
      
    <div class="modal-dialog modal-sm" id="cform">

      <!-- Modal content no 1-->
      
        

       
                  
                  
                
                  
               
                  
                  
                  
                  
                  
              
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div id="coursecards">
    

    <div class="card" >
    
  <img src="course1.jpg" alt="John" >
  <h1>Java Script</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Online Learning Platform</p>

 <p><button type="submit" id="javascript"><a href="courcenotes/html.pdf">click here</a></button></p>
</div>
   
<!-- <a href=""></a> -->
    
    
    
    
    
     <div class="card" >
  <img src="course2.jpg" alt="John" >
  <h1>React JS</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Online Learning Platform</p>
  

 <p><button type="submit" id="javascript"><a href="https://www.w3schools.com/REACT/DEFAULT.ASP">click here</a></button></p>
</div>
       <div class="card" id="coursecard">
  <img src="course3.jpg" alt="John" >
  <h1>Android</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Online Learning Platform</p>

  <p><button type="submit" id="javascript"><a href="https://www.w3schools.in/android/tutorials/">click here</a></button></p>
</div>
       <div class="card" >
  <img src="course5.jpg" alt="John" >
  <h1>JAVA</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Online Learning Platform</p>
 
  <p><button type="submit" id="javascript"><a href="https://www.w3schools.com/java/">click here</a></button></p>
</div>
    <br><br>
<!--    row2-->
        <div class="card" >
    
  <img src="course4.png" alt="John" >
  <h1>Angular JS</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Online Learning Platform</p>
 
  <p><button type="submit" id="javascript"><a href="https://www.w3schools.com/angular/">click here</a></button></p>
</div>
     <div class="card" >
  <img src="course5.png" alt="John" >
  <h1>C++</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Online Learning Platform</p>
  
  <p><button type="submit" id="javascript"><a href="https://www.w3schools.com/cpp/">click here</a></button></p>
</div>
       <div class="card" >
  <img src="course6.jpg" alt="John" >
  <h1>Jade</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Online Learning Platform</p>

  <p><button type="submit" id="javascript"><a href="https://www.sitepoint.com/jade-tutorial-for-beginners/">click here</a></button></p>
</div>
       <div class="card" >
  <img src="course7.jpg" alt="John" >
  <h1>Boot Strap</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Online Learning Platform</p>

  <p><button type="submit" id="javascript"><a href="https://www.w3schools.com/bootstrap5/">click here</a></button></p>
 </div>
    
    <br><br>
    
    
<!--row3-->
       <div class="card" >
    
  <img src="course8.jpg" alt="John" >
  <h1>PHP</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Online Learning Platform</p>

  <p><button type="submit" id="javascript"><a href="https://www.w3schools.com/php/">click here</a></button></p>
</div>
   
    
    
    
    
    
    
     <div class="card" >
  <img src="course9.png" alt="John" >
  <h1>Web UI</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Online Learning Platform</p>
  
  <p><button type="submit" id="javascript"><a href="https://www.w3schools.com/css/css3_user_interface.asp">click here</a></button></p>
</div>
       <div class="card" id="coursecard">
  <img src="course10.png" alt="John" >
  <h1>Node JS</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Online Learning Platform</p>
 
  <p><button type="submit" id="javascript"><a href="https://www.w3schools.com/nodejs/">click here</a></button></p>
</div>
       <div class="card" >
  <img src="course11.png" alt="John" >
  <h1>Vue JS</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Online Learning Platform</p>
 
  <p><button type="submit" id="javascript"><a href="https://www.w3schools.com/whatis/whatis_vue.asp">click here</a></button></p>
</div>
    <br><br>
    
    
    
<!--    row4-->
       <div class="card" >
    
  <img src="course16.png" alt="John" >
  <h1>Maven</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Online Learning Platform</p>
  
  <p><button type="submit" id="javascript"><a href="https://www.w3schools.blog/maven-tutorial">click here</a></button></p>
</div>
   
    
    
    
    
    
    
     <div class="card" >
  <img src="course15.jpg" alt="John" >
  <h1>Perl</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Online Learning Platform</p>

  <p><button type="submit" id="javascript"><a href="https://www.w3schools.io/languages/perl-tutorials/">click here</a></button></p>
</div>
       <div class="card" id="coursecard">
  <img src="course13.png" alt="John" >
  <h1>Chart JS</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Online Learning Platform</p>
  
  <p><button type="submit" id="javascript"><a href="https://www.w3schools.com/ai/ai_chartjs.asp">click here</a></button></p>
</div>
       <div class="card" >
  <img src="course14.png" alt="John" >
  <h1>Mongo DB</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Online Learning Platform</p>

  <p><button type="submit" id="javascript"><a href="https://www.w3schools.com/mongodb/#:~:text=MongoDB%20is%20a%20document%20database,the%20structure%20of%20JSON%20objects.">click here</a></button></p>
</div>
    <br><br>
    </div>
    
    </body>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!--    php for calculating visits in courses-->
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
     
     $sql = "UPDATE counter SET visit=visit+1 WHERE id = 1";
    $result = mysqli_query($conn,$sql);
 }

}

?>
    
    
    
    
    
    
    
    
    