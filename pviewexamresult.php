<?php
session_start();
include('connect.php');

 if(empty($_SESSION['pid']))
 {
	 echo "<script>window.location.href='parentlogin.php'</script>";
 }
 else
 {
     include('parentmenu.php');
      include("connect.php"); 
}  
?>



<style>
*{
  font-style: normal;
  
}

.sidebar-container {
    position: fixed;
    
    width: 260px;
    height: 100%;
    left: 0;
    overflow-x: hidden;
    overflow-y: auto;
    background: #1a1a1a;
    color: #fff;
  }
  
  .content-container {
    padding-top: 30px;
  }
  
  .sidebar-logo {
    
    padding: 10px 10px 10px 40px;
    font-size: 20px;
    background-color:#177F7D;
  }
  
  .sidebar-navigation {
    padding: 0;
    margin: 0;
    list-style-type: none;
    position: relative;
  }
  
  .sidebar-navigation li {
    background-color: transparent;
    position: relative;
    display: inline-block;
    width: 100%;
    line-height: 20px;
  }
  
  .sidebar-navigation li a {
    padding: 10px 15px 10px 30px;
    display: block;
    color: #fff;
  }
  
  .sidebar-navigation li .fa {
    margin-right: 10px;
  }
  
  .sidebar-navigation li a:active,
  .sidebar-navigation li a:hover,
  .sidebar-navigation li a:focus {
    text-decoration: none;
    outline: none;
  }
  
  .sidebar-navigation li::before {
    background-color: #177F7D;
    position: absolute;
    content: '';
    height: 100%;
    left: 0;
    top: 0;
    -webkit-transition: width 0.2s ease-in;
    transition: width 0.2s ease-in;
    width: 3px;
    z-index: -1;
    
  }
  
  .sidebar-navigation li:hover::before {
    width: 100%;
  }
  
  .sidebar-navigation .header {
    font-size: 12px;
    text-transform: uppercase;
    background-color: #151515;
    padding: 10px 15px 10px 30px;
  }
  
  .sidebar-navigation .header::before {
    background-color: transparent;
  }
  
  .content-container {
    padding-left: 220px;
  }

.sidebar-container .sidebar .social_media{
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}

.wrapper .social_media a{
  display: block;
  width: 40px;
  background: 	#FFFFFF;
  height: 40px;
  line-height: 45px;
  text-align: center;
  margin: 10px 5px;
  color: #bdb8d7;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.wrapper .main_content{
  width: 100%;
  margin-left: 200px;
}

.wrapper .main_content .headerr{
  padding: 10px;
  background: #177F7D;
  text-align: right;

  color: #fff;
  border-bottom: 1px solid #e0e4e8;
  font-size: 17px;
}

.wrapper .main_content .info{
  margin: 20px;
  color: #717171;
  line-height: 25px;
}

.wrapper .main_content .info div{
  margin-bottom: 20px;
}



</style>
<body>

<form method='POST'>
<div class="w3-padding-large" id="main" style='position:absolute; top:4px; margin-left: 400px;'>
<div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about"  style='width:90%'>
    <center>
	
	<h2 class="w3-center" style='color:#177F7D'>View Examination Result</h2>
       <hr style="width:200px" class="w3-opacity">

<?php    
//fetching data
    $pid = $_SESSION['pid'];
    $query = "SELECT sid from student where pid = '$pid'";
    $result2 = mysqli_query($con,$query);

    while($row=mysqli_fetch_array($result2)){
        $sid = $row['sid'];
        $sel="select * from examresult where sid='$sid'";
        $res=$con->query($sel);
        echo"
            <div class='w3-container'>
            <table class='w3-table-all w3-hoverable' border='1' cellspacing='0' cellpadding='0' width='80%' >
            <thead>
             <tr class='w3-light-blue'>
            <th>Student Name</th>
            <th>Student ID</th>
            <th>Exam ID</th>
            <th>Subject</th>
            <th>Result</th>
            </thead>   ";
        while ($row=mysqli_fetch_array($res))
        {
          $sname = $row[0];
          $sid = $row[1];
          $examid = $row[2];
          $subject = $row[3];
          $result = $row[4];

         
          echo "<tr align='center'>";
          echo  "<td width='8%'>".$sname."</td>";
          echo  "<td width='10%'>".$sid."</td>";
          echo "<td width='10%'>".$examid."</td>";
          echo "<td width='10%'>".$subject."</td>";
          echo "<td width='15%'>".$result."</td>";
          echo "</tr>";
          
              
        }
    }   
?>

 

