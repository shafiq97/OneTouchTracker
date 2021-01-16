<!DOCTYPE html>
<html lang="en">
<head>
  <title>ONE TOUCH TRACKER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-blue-grey.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">






  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: teal;
    color: #fff;
    padding: 30px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: teal;
    font-size: 50px;
  }
  .logo {
    color: teal;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: teal;
  }
  .carousel-indicators li {
    border-color: teal;
  }
  .carousel-indicators li.active {
    background-color: teal;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid teal; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid teal;
    background-color: #fff !important;
    color: teal;
  }
  .panel-heading {
    color: #fff !important;
    background-color: teal !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: teal;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: teal;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: teal !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: teal;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }

/*Events and news */
.searchForm {
    position: relative;
}
.customSelect {
    width: 100%;
    max-width: 370px;
}
.searchForm.type2 input[type="search"] {
    background: #fff;
    border: 2px solid #959595;
}

.searchForm input[type="search"] {
    display: inline-block;
    width: 100%;
    max-width: 505px;
    height: 52px;
    padding: 11px 0 11px 20px;
    font-size: 17px;
    line-height: 19px;
    color: #222;
    font-style: normal;
    background-color: #f1f1f1;
    background-image: none;
    border: 1px solid #8196a1;
    border-radius: 0;
    -webkit-transition: none;
    transition: none;
}
.searchForm input[type="submit"] {
    background: transparent url(https://www.solodev.com/assets/news-events-tabs/search-ico.png) no-repeat center center;
    font-size: 0;
    color: transparent;
    border: 0;
    width: 52px;
    height: 52px;
    position: absolute;
    top: 0;
    right: 0;
}
.dropdownCategories {
    display: inline-block;
    width:100%;
    max-width: 505px;
    height: 52px;
    padding: 15px 0 11px;
    font-size: 17px;
    line-height: 19px;
    color: #222;
    font-style: normal;
    background: #fff;
    border: 2px solid #959595;
    background-image: none;
    border-radius: 0;
    -webkit-transition: none;
    transition: none;
}
.dropdownCategories select {
  width: 100%;
  padding: 0 20px;
  border: 0px;
  outline: none;
}

.nav-pills > li > a {
    border-radius: 0;
    font-size: 18px;
    padding: 6px 18px;
}
.nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus {
    color: #fff;
    background-color: #662d91;
}

.tab-content {
    margin: 50px 0 20px 0;
  
}
.media > .pull-left {
    margin-right: 29px;
}
.media .dateEl {
    display: inline-block;
    text-align: center;
    background: #16A085;
    padding: 18px 0 25px 0;
    color: #173d51;
    font-size: 16px;
    font-weight: 700;
    width: 113px;
    text-transform: uppercase;
}
.media .dateEl em {
    display: block;
    color: #F7F7F7  ;
    font-size: 42px;
    line-height: 1;
    margin-bottom: 5px;
    font-style: normal;
}
.media .media-heading a {
    color: #022235;
    font-size: 21px;
    text-transform: uppercase;
}
.media .meta-data {
    margin: 0 0 7px 0;
}
.media .longDate, .media .timeEl {
    display: inline-block;
    font-size: 14px;
    line-height: 14px;
    font-family: 'PT Sans Narrow', sans-serif;
    font-weight: 700;
    color: #636465;
    text-transform: uppercase;
    min-height: 16px;
}
.media .longDate {
    background: transparent url(../images/ico-calendar.png) no-repeat left top;
    padding: 0 10px 0 24px;
    border-right: 1px solid #eb5b4c;
    margin-right: 3px;
}
#tab1.tab-pane .media .longDate {
    border-right: none;
}
.blogPost--small {
    color: #7c7b7b;
    margin: 20px 30px 40px 0;
}
.blogPost--small .media > .pull-left {
    margin-right: 25px;
}
.blogPost--small a {
    color: #662d91;
}
.blogPost--small .date, .blogPost--small .dateEl2 {
    display: block;
    text-align: center;
    padding: 18px 0 25px 0;
    color: #fff;
    background: #662d91;
    width: 113px;
}
.blogPost--small .date span, .blogPost--small .dateEl2 span {
    display: inline-block;
    font-size: 42px;
    line-height: 1;
    letter-spacing: 0em;
    text-indent: -0.1em;
    color: #fff;
    font-weight: bold;
}
.blogPost--small .date small, .blogPost--small .dateEl2 small {
    display: block;
    font-size: 18px;
    text-transform: uppercase;
    color: #fff;
}
.blogPost--small h4 {
    margin: 0 0 12px 0;
    font-size: 22px;
    text-transform: uppercase;
}

.btn-default {
    color: #fff;
    font-size: 14px;
    background-color: #16A085;
    border-radius : 0px;
}



  </style>
  <script>
//Send and receive data from studentdetails.php 
function myFunction(val)
   {
     var xhttp;    
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      
    document.getElementById("details").innerHTML = xhttp.responseText;
    }
  };
  
  var sid=document.getElementById("sid").value;
  xhttp.open("GET", "stuinfo.php?sid="+sid, true);
  xhttp.send();
   }

     var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
 </script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<form method="post">
<?php
  
  include("connect.php");
   session_start();
  
  if(isset($_POST['sub']))
  {
    $stuid=$_POST['stuid'];
    $sel="select * from student where sid='$stuid'";
    $res=$con->query($sel);
    if(mysqli_num_rows($res)== 0)
       {
       
     }
     else
     {
       $data= mysqli_fetch_assoc($res);
       $sname=$data['sname'];
       $contact=$data['contact'];
       $today=date('Y-m-d');
       date_default_timezone_set("Asia/Kolkata");
       $time=date("h:i:s");
       
       $sq="select * from arrival where sid='$stuid' and date='$today'";
       $rq=$con->query($sq);
       if(mysqli_num_rows($rq)==0)
            {
            $ins="insert into arrival values('$stuid','$sname','$contact','$today','$time','')";
                if(mysqli_query($con,$ins))
               {
                
             //SMS code starts here
                $_my_clicksend_username = "poonam.yadav677";
                $_my_clicksend_key = "DE9138B8-8FDD-5AD7-BB86-8ADBD4511CC3";
                //You *MUST* define the 'to', 'message' and 'senderid'
                $to        = $contact;
                $message   = "Student Id: ".$stuid."<br>Student Name:".$sname." arrived in school";
                $senderid  = "XYZ";
                              $message=urlencode($message);
                $to=urlencode($to);
                $vars="method=http&username=$_my_clicksend_username&key=$_my_clicksend_key&to=+91" . $to ."&message=" . $message . "&senderid=" . $senderid;  
file_get_contents('https://api-mapper.clicksend.com/http/v2/send.php?method=http&username=poonam.yadav677&key=DE9138B8-8FDD-5AD7-BB86-8ADBD4511CC3&to=+91'.$to.'&message='.$message.'&senderid=XYZ');
  echo "<script>alert('Intime inserted successfully');</script>";
  echo "<script>location.replace('record.php');</script>";
                 }        
          }
      else
      {
        $data1= mysqli_fetch_assoc($rq);
        $out=$data1['outtime'];
        $in=strtotime($data1['intime']);
        $time1=strtotime($time);
        $diff=($time1-$in)/60;
        if($out=='')
        {
          if($diff > '15')
          {
            $upd="update arrival set outtime='$time' where sid='$stuid' and date='$today'";
            if(mysqli_query($con,$upd))
                      {
                      
                  $_my_clicksend_username = "poonam.yadav677";
                $_my_clicksend_key = "DE9138B8-8FDD-5AD7-BB86-8ADBD4511CC3";
                //You *MUST* define the 'to', 'message' and 'senderid'
                $to        = $contact;
                $message   = "Student Id: ".$stuid."<br>Student Name:".$sname." left from school";
                $senderid  = "XYZ";
                              $message=urlencode($message);
                $to=urlencode($to);
                $vars="method=http&username=$_my_clicksend_username&key=$_my_clicksend_key&to=+91" . $to ."&message=" . $message . "&senderid=" . $senderid;

                file_get_contents('https://api-mapper.clicksend.com/http/v2/send.php?method=http&username=poonam.yadav677&key=DE9138B8-8FDD-5AD7-BB86-8ADBD4511CC3&to=+91'.$to.'&message='.$message.'&senderid=XYZ');
                
                echo "<script>alert('Outtime inserted successfully');</script>";
                echo "<script>location.replace('record.php');</script>";
                        } 
          }
          else
             {
           echo "<script>alert('Please Try Again after some time');</script>";
           echo "<script>location.replace('record.php');</script>";
            }
        }
        else
        {
           echo "<script>alert('Please Try Again');</script>";
           echo "<script>location.replace('record.php');</script>";
        }
        
      }
     }
  }
  
  ?>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#eventsandnews">EVENTS AND NEWS</a></li>
        <li><a href="record.php">RECORD ARRIVAL</a></li>
     
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>ONE TOUCH TRACKER</h1> 
  <p>Children Security System via RFID</p> 
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Us</h2>
      <h4>An RFID web-based system that aims to enhance and ensure school-going childdren's safety.      <br> The RFID card scan to RFID reader will automatically record the exact time-in and time-out of the students. <br>Also help the school management to manage the       students's attendence by relacing tradition methods.</h4><br>
      
    
      <h2>Objective</h2>
      
      <h4><li>To develop a security system for school going children.</li>
      <li>To update guardians the absence of their children through SMS.</li>
      <li>To allow parents access the system to view their children details.</li>
      <li>To manage students’ attendance by replacing paper-based timesheets.</li></h4>
    </div>
    <div class="col-sm-4">
    
      <img src="images/school.jpg" style="width:90%;">
    
    </div>
  </div>
</div>


<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-envelope logo-small"></span>
      <h4>SMS SYSTEM</h4>
      <p>Absentee notification</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>TRACK ATTENDANCE</h4>
      <p>Check in-time and out-time of the children</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-calendar logo-small"></span>
      <h4>CALENDAR</h4>
      <p>Official news and events from school</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>Paperless attendance</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p></p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">RFID AND ARDUINO</h4>
      <p>Latest technology used</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="eventsandnews" class="container-fluid text-center">
  <h2>events and news</h2><br>  
  <hr>
<div class="row">
  <div class="col-lg-push-4 col-md-4 col-md-push-4">
  <div class="searchForm type2">
    <form action="" class="searchForm"><!-- Add The Appropriate Action for Your Site's Search Form/Page -->
    <label class="sr-only" for="searchNewsEvents">Search News and Events</label>
     <input id="searchNewsEvents" name="q" placeholder="What are you looking for?" type="search"> <input type="submit" value="Search">
    </form>
  </div>
  </div>
  <div class="clearfix visible-sm visible-xs">
  &nbsp;
  </div>
  <div class="col-lg-push-4 col-md-4 col-md-push-4">
  <div class="dropdownCategories">
  <label class="sr-only" for="dropdownNewsEvents">Category dropdown for News and Events</label>
  <select>
    <option value="">
    Select Category
    </option>
    <option value=""><!-- Each option value should correspond to the appropriate filter on your site's News or Events page -->
    Academic
    </option>
    <option value=""><!-- Each option value should correspond to the appropriate filter on your site's News or Events page -->
    Sports
    </option>
    <option value=""><!-- Each option value should correspond to the appropriate filter on your site's News or Events page -->
    Forum
    </option>
    <option value=""><!-- Each option value should correspond to the appropriate filter on your site's News or Events page -->
    Training
    </option>
  </select>
  </div>
  </div>  
  <div class="clearfix visible-sm visible-xs">
  &nbsp;
  </div>
  <div class="col-lg-4 col-lg-pull-8 col-md-4 col-md-pull-8">
  <ul class="nav nav-pills" role="tablist">
    <li class="active">
    <a data-toggle="tab" href="#tab1" role="tab" style="background:#16A085">Events</a>
    </li>
    <li>
    <a data-toggle="tab" href="#tab2" role="tab"style="background:white; color:black">News</a>
    </li>
  </ul>
  </div>
</div><!-- / row -->
<hr>
<div class="tab-content">
  <div class="tab-pane fade in active" id="tab1">
  <div class="row">
    <div class="col-md-6">
    <div class="media">
      <a class="pull-left" href="#"><span class="dateEl"><em>30</em>Jan</span></a>
      <div class="media-body">
      <h4 class="media-heading">
        <a href="#">Health Fair</a>
      </h4>
      <div class="meta-data">
        <span class="longDate">Jan 30, 2021</span> <span class="timeEl">10:00am - 12:00pm</span>
      </div>
      <p>
        ---------------------------------------------------------
      </p>
      </div><!-- / media-body -->
    </div><!-- / media -->
    <div class="media">
      <a class="pull-left" href="#"><span class="dateEl"><em>11</em>April</span></a>
      <div class="media-body">
      <h4 class="media-heading">
        <a href="#">Sport's Day</a>
      </h4>
      <div class="meta-data">
        <span class="longDate">April 11, 2021</span> <span class="timeEl">08:00am - 01:30pm</span>
      </div>
      <p>
      ---------------------------------------------------------
      </p>
      </div><!-- / media-body -->
    </div><!-- / media -->
    <div class="media">
      <a class="pull-left" href="#"><span class="dateEl"><em>15</em>May</span></a>
      <div class="media-body">
      <h4 class="media-heading">
        <a href="#">Co-Curricular Day</a>
      </h4>
      <div class="meta-data">
        <span class="longDate">May 15, 2021</span> <span class="timeEl">08:30am - 01:30pm</span>
      </div>
      <p>
      ---------------------------------------------------------
      </p>
      </div><!-- / media-body -->
    </div><!-- / media -->
    </div><!-- / .col-md-6 -->
    <div class="col-md-6">
    <div class="media">
      <a class="pull-left" href="#"><span class="dateEl"><em>18</em>May</span></a>
      <div class="media-body">
      <h4 class="media-heading">
        <a href="#">Codes for Beginners</a>
      </h4>
      <div class="meta-data">
        <span class="longDate">May 18, 2021</span> <span class="timeEl">10:00am - 01:00pm</span>
      </div>
      <p>
      ---------------------------------------------------------
      </p>
      </div><!-- / media-body -->
    </div><!-- / media -->
    <div class="media">
      <a class="pull-left" href="#"><span class="dateEl"><em>21</em>June</span></a>
      <div class="media-body">
      <h4 class="media-heading">
        <a href="#">Canteen Day</a>
      </h4>
      <div class="meta-data">
        <span class="longDate">June 21, 2021</span> <span class="timeEl">10:00am - 12:00pm</span>
      </div>
      <p>
      ---------------------------------------------------------
      </p>
      </div><!-- / media-body -->
    </div><!-- / media -->
    <div class="media">
      <a class="pull-left" href="#"><span class="dateEl"><em>21</em>July</span></a>
      <div class="media-body">
      <h4 class="media-heading">
        <a href="#">Color Run</a>
      </h4>
      <div class="meta-data">
        <span class="longDate">July 22, 2021</span> <span class="timeEl">8:00am - 12:00pm</span>
      </div>
      <p>
      ---------------------------------------------------------
      </p>
      </div><!-- / media-body -->
    </div><!-- / media -->
    </div><!-- / .col-md-6 -->
  </div><!-- / row -->

  </div>
  <div class="tab-pane fade" id="tab2">
  <div class="tab-content">
  <div class="tab-pane fade in active" id="tab1">
  <div class="row">
    <div class="col-md-6">
    <div class="media">
      <!-- <a class="pull-left" href="#"><span class="dateEl"><em>30</em>Nov</span></a> -->
      
      <div class="media-body">
      <h4 class="media-heading">
      <i class="fa fa-newspaper-o" style="font-size:15px">
      <a href="#" style="text-transform: capitalize">Congratulations to our Headmaster!</a></i>
      </h4>
      <div class="meta-data">
       <span class="longDate">Jan 30, 2021</span> 
      </div>
      <p>
      Mr. Albus Dumbledore, who just earned an award at the Ministry of Education for outstanding achievements throughout his career. 
      </p>
      </div><!-- / media-body -->
    </div><!-- / media -->
    <div class="media">
      <!--<a class="pull-left" href="#"><span class="dateEl"><em>11</em>Dec</span></a>-->
      <div class="media-body">
      <h4 class="media-heading">
      <i class="fa fa-newspaper-o" style="font-size:15px">
        <a href="#" style="text-transform: capitalize">Head of Prefect featured in the New Straits Times </a></i>
      </h4>
      <div class="meta-data">
      <span class="longDate">Jan 11, 2021</span> 
      </div>
      <p>
      Get the inspirations from our Head Prefect, Hermione Granger that lead her nominated best prefect in our district this year.
      </p>
      </div><!-- / media-body -->
    </div><!-- / media -->
    <div class="media">
      <!--<a class="pull-left" href="#"><span class="dateEl"><em>15</em>Dec</span></a>-->
      <div class="media-body">
      <h4 class="media-heading">
      <i class="fa fa-newspaper-o" style="font-size:15px">
        <a href="#" style="text-transform: capitalize">Alumni Success </a></i>
      </h4>
      <div class="meta-data">
      <span class="longDate">Feb 15, 2021</span>
      </div>
      <p>
      Get inspires how our remarkable students success in continuing their studies in higher education.
      </p>
      </div><!-- / media-body -->
    </div><!-- / media -->
    </div><!-- / .col-md-6 -->
    <div class="col-md-6">
    <div class="media">
      <!--<a class="pull-left" href="#"><span class="dateEl"><em>18</em>Dec</span></a>-->
      <div class="media-body">
      <h4 class="media-heading">
      <i class="fa fa-newspaper-o" style="font-size:15px">
        <a href="#" style="text-transform: capitalize">Students Artwork shown in Youth Exhibit</a></i>
      </h4>
      <div class="meta-data">
        <span class="longDate">March 11, 2021</span> 
      </div>
      <p>
      Artwork by our 3rd Grade student is on the downtown of Youth Exhibit.
      </p>
      </div><!-- / media-body -->
    </div><!-- / media -->
    <div class="media">
      <!--<a class="pull-left" href="#"><span class="dateEl"><em>21</em>Dec</span></a>-->
      <div class="media-body">
      <h4 class="media-heading">
      <i class="fa fa-newspaper-o" style="font-size:15px">
        <a href="#" style="text-transform: capitalize">10 Students Qualify for Spelling Bee</a></i>
      </h4>
      <div class="meta-data">
        <span class="longDate">Apr 21, 2021</span> 
      </div>
      <p>
      Congrats to students qualifying for the school spelling bee!
      </p>
      </div><!-- / media-body -->
    </div><!-- / media -->
    <div class="media">
      <!--<a class="pull-left" href="#"><span class="dateEl"><em>21</em>Dec</span></a>-->
      <div class="media-body">
      <h4 class="media-heading">
      <i class="fa fa-newspaper-o" style="font-size:15px">
        <a href="#" style="text-transform: capitalize">searching for volunteers</a></i>
      </h4>
      <div class="meta-data">
        <span class="longDate">May 10, 2021</span> 
      </div>
      <p>
      Recreation Club is welcoming any volunteers for their new program.
      </p>
      </div><!-- / media-body -->
    </div><!-- / media -->
    </div><!-- / .col-md-6 -->
  </div><!-- / row -->
  
  </div>
  <div class="text-center">
          <br>
      <br>
          <a class="btn btn-default" href="#">SEE ALL NEWS</a>
        </div>
    </div>
  </div>
  </div>
</div>
      
</div> 
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Children Security via RFID</p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
