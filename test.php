<!doctype html>
<html lang="en">

<?php
  session_start();
  $aid = $_SESSION['aid'];
  include('parentmenu.php');
  include('connect.php');
?>

	<html>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet"href="styles.css" >
  <link rel="stylesheet" href="w.css">
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

<title>ONE TOUCH TRACKER</title>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Schedule Template | CodyHouse</title>
</head>

<body>

<?php
      $pid = $_SESSION['pid'];
      //echo $pid;

      $q = "SELECT * FROM student where pid = '$pid'";
      $r = mysqli_query($con, $q);

      while($row6=mysqli_fetch_array($r)){
        //echo $row6['grade'];
        echo"<header class='cd-main-header text-center flex flex-column flex-center'>
    <h1 class='text-xl'>Timetable for ".$row6['sname']."</h1>
  </header>

  <div class='cd-schedule cd-schedule--loading margin-top-lg margin-bottom-lg js-cd-schedule'>
    <div class='cd-schedule__timeline'>
      <ul>
        <li><span>08:00</span></li>
        <li><span>08:30</span></li>
        <li><span>09:00</span></li>
        <li><span>09:30</span></li>
        <li><span>10:00</span></li>
        <li><span>10:30</span></li>
        <li><span>11:00</span></li>
        <li><span>11:30</span></li>
        <li><span>12:00</span></li>
        <li><span>12:30</span></li>
        <li><span>13:00</span></li>
        <li><span>13:30</span></li>
        <li><span>14:00</span></li>
        <li><span>14:30</span></li>
        <li><span>15:00</span></li>
      </ul>
    </div> <!-- .cd-schedule__timeline -->

    <div class='cd-schedule__events'>
      <ul>
        <li class='cd-schedule__group'>";

    
      $query = "SELECT * from sched WHERE day = 'Monday' and grade = '".$row6['grade']."'";
      $result = mysqli_query($con, $query);

      $query2 = "SELECT * from sched WHERE day = 'Tuesday' and grade = '".$row6['grade']."'";
      $result2 = mysqli_query($con, $query2);

      $query3 = "SELECT * from sched WHERE day = 'Wednesday' and grade = '".$row6['grade']."'";
      $result3 = mysqli_query($con, $query3);

      $query4 = "SELECT * from sched WHERE day = 'Thursday' and grade = '".$row6['grade']."'";
      $result4 = mysqli_query($con, $query4);

      $query5 = "SELECT * from sched WHERE day = 'Friday' and grade = '".$row6['grade']."'";
      $result5 = mysqli_query($con, $query5);

      echo"<div class='cd-schedule__top-info'><span>Monday</span></div>
      <ul>";

      while($row=mysqli_fetch_array($result)){
        echo"
            <li class='cd-schedule__event'>";

            if($row['subject']==="Math"){
              echo"<a data-start='".$row['time_start']."' data-end='".$row['time_end']."' data-content='event-abs-circuit' data-event='event-1' href='#0'>";
            }
            else if($row['subject']==="English"){
              echo"<a data-start='".$row['time_start']."' data-end='".$row['time_end']."' data-content='event-abs-circuit' data-event='event-2' href='#0'>";
            }
            else if($row['subject']==="Malay"){
              echo"<a data-start='".$row['time_start']."' data-end='".$row['time_end']."' data-content='event-abs-circuit' data-event='event-3' href='#0'>";
            }
            else if($row['subject']==="Science"){
              echo"<a data-start='".$row['time_start']."' data-end='".$row['time_end']."' data-content='event-abs-circuit' data-event='event-4' href='#0'>";
            }
            else if($row['subject']==="Civics"){
              echo"<a data-start='".$row['time_start']."' data-end='".$row['time_end']."' data-content='event-abs-circuit' data-event='event-1' href='#0'>";
            }
            else if($row['subject']==="History"){
              echo"<a data-start='".$row['time_start']."' data-end='".$row['time_end']."' data-content='event-abs-circuit' data-event='event-2' href='#0'>";
            }
            else if($row['subject']==="ICT"){
              echo"<a data-start='".$row['time_start']."' data-end='".$row['time_end']."' data-content='event-abs-circuit' data-event='event-3' href='#0'>";
            }
            else if($row['subject']==="Art"){
              echo"<a data-start='".$row['time_start']."' data-end='".$row['time_end']."' data-content='event-abs-circuit' data-event='event-4' href='#0'>";
            }
            else{
              echo"<a data-start='".$row['time_start']."' data-end='".$row['time_end']."' data-content='event-abs-circuit' data-event='event-1' href='#0'>";
            }
              echo"<em class='cd-schedule__name'>".$row['subject']."</em>
              </a>
            </li>
          ";
      }
      echo "</ul>";

      echo"<li class='cd-schedule__group'>";
      echo"<div class='cd-schedule__top-info'><span>Tuesday</span></div>
      <ul>";

      while($row2=mysqli_fetch_array($result2)){
        echo"
            <li class='cd-schedule__event'>";
            if($row2['subject']==="Math"){
              echo"<a data-start='".$row2['time_start']."' data-end='".$row2['time_end']."' data-content='event-abs-circuit' data-event='event-1' href='#0'>";
            }
            else if($row2['subject']==="English"){
              echo"<a data-start='".$row2['time_start']."' data-end='".$row2['time_end']."' data-content='event-abs-circuit' data-event='event-2' href='#0'>";
            }
            else if($row2['subject']==="Malay"){
              echo"<a data-start='".$row2['time_start']."' data-end='".$row2['time_end']."' data-content='event-abs-circuit' data-event='event-3' href='#0'>";
            }
            else if($row2['subject']==="Science"){
              echo"<a data-start='".$row2['time_start']."' data-end='".$row2['time_end']."' data-content='event-abs-circuit' data-event='event-4' href='#0'>";
            }
            else if($row2['subject']==="Civics"){
              echo"<a data-start='".$row2['time_start']."' data-end='".$row2['time_end']."' data-content='event-abs-circuit' data-event='event-1' href='#0'>";
            }
            else if($row2['subject']==="History"){
              echo"<a data-start='".$row2['time_start']."' data-end='".$row2['time_end']."' data-content='event-abs-circuit' data-event='event-2' href='#0'>";
            }
            else if($row2['subject']==="ICT"){
              echo"<a data-start='".$row2['time_start']."' data-end='".$row2['time_end']."' data-content='event-abs-circuit' data-event='event-3' href='#0'>";
            }
            else if($row2['subject']==="Art"){
              echo"<a data-start='".$row2['time_start']."' data-end='".$row2['time_end']."' data-content='event-abs-circuit' data-event='event-4' href='#0'>";
            }
            else{
              echo"<a data-start='".$row2['time_start']."' data-end='".$row2['time_end']."' data-content='event-abs-circuit' data-event='event-1' href='#0'>";
            }
              echo"<em class='cd-schedule__name'>".$row2['subject']."</em>
              </a>
            </li>
          ";
      }
      echo "</ul>";

      echo"<li class='cd-schedule__group'>";
      echo"<div class='cd-schedule__top-info'><span>Wednesday</span></div>
      <ul>";

      while($row3=mysqli_fetch_array($result3)){
        echo"
            <li class='cd-schedule__event'>";
            if($row3['subject']==="Math"){
              echo"<a data-start='".$row3['time_start']."' data-end='".$row3['time_end']."' data-content='event-abs-circuit' data-event='event-1' href='#0'>";
            }
            else if($row3['subject']==="English"){
              echo"<a data-start='".$row3['time_start']."' data-end='".$row3['time_end']."' data-content='event-abs-circuit' data-event='event-2' href='#0'>";
            }
            else if($row3['subject']==="Malay"){
              echo"<a data-start='".$row3['time_start']."' data-end='".$row3['time_end']."' data-content='event-abs-circuit' data-event='event-3' href='#0'>";
            }
            else if($row3['subject']==="Science"){
              echo"<a data-start='".$row3['time_start']."' data-end='".$row3['time_end']."' data-content='event-abs-circuit' data-event='event-4' href='#0'>";
            }
            else if($row3['subject']==="Civics"){
              echo"<a data-start='".$row3['time_start']."' data-end='".$row3['time_end']."' data-content='event-abs-circuit' data-event='event-1' href='#0'>";
            }
            else if($row3['subject']==="History"){
              echo"<a data-start='".$row3['time_start']."' data-end='".$row3['time_end']."' data-content='event-abs-circuit' data-event='event-2' href='#0'>";
            }
            else if($row3['subject']==="ICT"){
              echo"<a data-start='".$row3['time_start']."' data-end='".$row3['time_end']."' data-content='event-abs-circuit' data-event='event-3' href='#0'>";
            }
            else if($row3['subject']==="Art"){
              echo"<a data-start='".$row3['time_start']."' data-end='".$row3['time_end']."' data-content='event-abs-circuit' data-event='event-4' href='#0'>";
            }
            else{
              echo"<a data-start='".$row3['time_start']."' data-end='".$row3['time_end']."' data-content='event-abs-circuit' data-event='event-1' href='#0'>";
            }
              
                echo"<em class='cd-schedule__name'>".$row3['subject']."</em>
              </a>
            </li>
          ";
      }
      echo "</ul>";

      echo"<li class='cd-schedule__group'>";
      echo"<div class='cd-schedule__top-info'><span>Thursday</span></div>
      <ul>";

      while($row4=mysqli_fetch_array($result4)){
        echo"
            <li class='cd-schedule__event'>";
            if($row4['subject']==="Math"){
              echo"<a data-start='".$row4['time_start']."' data-end='".$row4['time_end']."' data-content='event-abs-circuit' data-event='event-1' href='#0'>";
            }
            else if($row4['subject']==="English"){
              echo"<a data-start='".$row4['time_start']."' data-end='".$row4['time_end']."' data-content='event-abs-circuit' data-event='event-2' href='#0'>";
            }
            else if($row4['subject']==="Malay"){
              echo"<a data-start='".$row4['time_start']."' data-end='".$row4['time_end']."' data-content='event-abs-circuit' data-event='event-3' href='#0'>";
            }
            else if($row4['subject']==="Science"){
              echo"<a data-start='".$row4['time_start']."' data-end='".$row4['time_end']."' data-content='event-abs-circuit' data-event='event-4' href='#0'>";
            }
            else if($row4['subject']==="Civics"){
              echo"<a data-start='".$row4['time_start']."' data-end='".$row4['time_end']."' data-content='event-abs-circuit' data-event='event-1' href='#0'>";
            }
            else if($row4['subject']==="History"){
              echo"<a data-start='".$row4['time_start']."' data-end='".$row4['time_end']."' data-content='event-abs-circuit' data-event='event-2' href='#0'>";
            }
            else if($row4['subject']==="ICT"){
              echo"<a data-start='".$row4['time_start']."' data-end='".$row4['time_end']."' data-content='event-abs-circuit' data-event='event-3' href='#0'>";
            }
            else if($row4['subject']==="Art"){
              echo"<a data-start='".$row4['time_start']."' data-end='".$row4['time_end']."' data-content='event-abs-circuit' data-event='event-4' href='#0'>";
            }
            else{
              echo"<a data-start='".$row4['time_start']."' data-end='".$row4['time_end']."' data-content='event-abs-circuit' data-event='event-1' href='#0'>";
            }
              
                echo"<em class='cd-schedule__name'>".$row4['subject']."</em>
              </a>
            </li>
          ";
      }
      echo "</ul>";

      echo"<li class='cd-schedule__group'>";
      echo"<div class='cd-schedule__top-info'><span>Friday</span></div>
      <ul>";

      while($row5=mysqli_fetch_array($result5)){
        echo"
            <li class='cd-schedule__event'>";
            if($row5['subject']==="Math"){
              echo"<a data-start='".$row5['time_start']."' data-end='".$row5['time_end']."' data-content='event-abs-circuit' data-event='event-1' href='#0'>";
            }
            else if($row5['subject']==="English"){
              echo"<a data-start='".$row5['time_start']."' data-end='".$row5['time_end']."' data-content='event-abs-circuit' data-event='event-2' href='#0'>";
            }
            else if($row5['subject']==="Malay"){
              echo"<a data-start='".$row5['time_start']."' data-end='".$row5['time_end']."' data-content='event-abs-circuit' data-event='event-3' href='#0'>";
            }
            else if($row5['subject']==="Science"){
              echo"<a data-start='".$row5['time_start']."' data-end='".$row5['time_end']."' data-content='event-abs-circuit' data-event='event-4' href='#0'>";
            }
            else if($row5['subject']==="Civics"){
              echo"<a data-start='".$row5['time_start']."' data-end='".$row5['time_end']."' data-content='event-abs-circuit' data-event='event-1' href='#0'>";
            }
            else if($row5['subject']==="History"){
              echo"<a data-start='".$row5['time_start']."' data-end='".$row5['time_end']."' data-content='event-abs-circuit' data-event='event-2' href='#0'>";
            }
            else if($row5['subject']==="ICT"){
              echo"<a data-start='".$row5['time_start']."' data-end='".$row5['time_end']."' data-content='event-abs-circuit' data-event='event-3' href='#0'>";
            }
            else if($row5['subject']==="Art"){
              echo"<a data-start='".$row5['time_start']."' data-end='".$row5['time_end']."' data-content='event-abs-circuit' data-event='event-4' href='#0'>";
            }
            else{
              echo"<a data-start='".$row5['time_start']."' data-end='".$row5['time_end']."' data-content='event-abs-circuit' data-event='event-1' href='#0'>";
            }
              
                echo"<em class='cd-schedule__name'>".$row5['subject']."</em>
              </a>
            </li>
          ";
      }
      echo "</ul>
      </ul>
      </div>";
      }

  
?>
      
  
    <div class="cd-schedule-modal">
      <header class="cd-schedule-modal__header">
        <div class="cd-schedule-modal__content">
          <span class="cd-schedule-modal__date"></span>
          <h3 class="cd-schedule-modal__name"></h3>
        </div>
  
        <div class="cd-schedule-modal__header-bg"></div>
      </header>
  
      <div class="cd-schedule-modal__body">
        <div class="cd-schedule-modal__event-info"></div>

        <div class="cd-schedule-modal__body-bg"></div>
      </div>
  
      <a href="#0" class="cd-schedule-modal__close text-replace">Close</a>
    </div>
  
    <div class="cd-schedule__cover-layer"></div>
  </div> <!-- .cd-schedule -->

  <script src="assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="assets/js/main.js"></script>
</body>

</html>
<?php


