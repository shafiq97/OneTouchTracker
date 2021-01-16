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
  <script src="jquery-1.8.2.js"></script>
</head>

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
  .w3-input{margin: auto;
    width: 50%;
    border: 3px solid teal;
    padding: 10px;}
</style>

<script>
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
    xhttp.open("GET", "studetails.php?sid="+sid, true);
    xhttp.send();
  }
</script>

<body>
<form method="post">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.php">ABOUT</a></li>
        <li><a href="home.php#services">SERVICES</a></li>
        <li><a href="home.php#eventsandnews">EVENTS AND NEWS</a></li>
        <li><a href="record.php">RECORD ARRIVAL</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>ONE TOUCH TRACKER</h1> 
  <p>Children Security System via RFID</p> 
</div>

<!-- Container (Pricing Section) -->
<div id="recordarrival" class="container-fluid">
  <div class="text-center">
    <h2>record arrival</h2>
    <hr style="width:200px" class="w3-opacity">
    <p><label style="color:black; font-size:18px;">Please scan your student card here:</label><br><br>
    <input class="w3-input w3-light-grey w3-border w3-padding-16"  type="text" placeholder="Student Id" name="sid" id='sid' maxlength='10' style='width:40%; '></p>
  </div>
</div>
<br>
<br>

<script type="text/javascript">
  var $id = $('#sid');
  $id.keyup(function(e) {
    if ($id.val().length >= 10) {
      $(this.form).submit();
    }
  });

</script>
</form>

<?php
  include 'connect.php';
  date_default_timezone_set("Asia/Kuala_Lumpur");

  if(isset($_POST['sid'])){

    $student_id = $_POST['sid'];

    $query = "SELECT * from student WHERE sid = '$student_id'";
    $result = mysqli_query($con, $query);

    if($result){
      if($row = mysqli_fetch_array($result)){

        $id             = $row['sid'];
        $name           = $row['sname'];
        $parent_contact = $row['contact'];
        $img            = $row['image'];
        $school         = $row['school'];
        $grade          = $row['grade'];
        $class          = $row['class'];
        $pid            = $row['pid'];
        $pname          = $row['pname'];  
            
        echo"
          <input type='hidden' value='".$id."' name='stuid'>

          <table border='0' width='40%' align='center'>
            <tr>
              <td width='20%'>
                <img src='images/".$img."' width='40%'>
              </td>
                <td width='10%'>
                  <label class='' align= 'justify'>
                  <b>Student&nbsp;ID:&nbsp;".$id."</b><br>
                    <b>Student&nbsp;Name:&nbsp;".$name."</b><br>
                  <b>School&nbsp;&nbsp;: ".$school."</b><br>
                  <b>Parent name&nbsp;&nbsp;: ".$pname."</b><br>
                    <b>Grade&nbsp;&nbsp;: ".$grade."&nbsp;".$class."</b><br><br>
                </label>
              </td>
            </tr>
            <tr>
              <td colspan='2'></td>
            </tr>
          </table>";

        //Get last result in arrival table based on student id
        $query2 = "SELECT id, sname, intime, outtime, `date` from arrival where sid='$id' ORDER BY id DESC LIMIT 1";
        $result2 = mysqli_query($con, $query2);

        if($result2){
          if($row2 = mysqli_fetch_array($result2)){
            
            $current_id = $row2['id'];
            $student_name = $row2['sname'];
            $current_time = date('G:i');
            $current_date = date('Y-m-d');

            if(strlen($row2['outtime'])===0){
              $query3 = "UPDATE arrival SET outtime = '$current_time', `date` = '$current_date' WHERE id='$current_id'";
              $result3 = mysqli_query($con, $query3);
              if($result3){
                echo "1. Record updated successfully to out time</script>";
              }
              else{
                echo "2. Error updating record ".$con->error;
              }
            }
            else{
              
              $query3 = "INSERT INTO arrival (pid, sid, sname, contact, `date`, intime) 
                    VALUES ('$pid', '$id', '$name', '$parent_contact', '$current_date', '$current_time') ";
              $result3 = mysqli_query($con, $query3);
              if($result3){
                echo "3. Record updated successfully inserted to intime ";
              }
              else{
                echo "4. Error updating record ".$con->error;
              }
            }
          }
          else
          {
            echo "5. No data found on arrival found Inserting new record";
            //insert new here
            $current_time = date('G:i');
            $current_date = date('Y-m-d');
            $query3 = "INSERT INTO arrival (pid, sid, sname, contact, `date`, intime) 
                  VALUES ('$pid' ,'$id', '$name', '$parent_contact', '$current_date', '$current_time') ";
            $result3 = mysqli_query($con, $query3);
            if($result3){
              echo "6. Record updated successfully inserted to in time ";
            }
            else{
              echo "7. Error updating record ".$con->error;
            }
          }
        }
        else{
          echo "Query 2: ". $con->error;
        }
        //$query2 = "INSERT INTO arrival (sid, sname, contact, date('D-m-Y'))";
      }
      else{
        echo "No data found";
      }
    }
    else{
      echo $con->error;
    }
  }
  else{
    echo "Student Id is not set";
  }
?>
</body>
</html>