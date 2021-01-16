

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

<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet"href="styles.css" >
      <link rel="stylesheet" href="w.css">
      <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

<title>ONE TOUCH TRACKER</title>

<style>


</style>

<body>

<form method='POST'>
<div class="w3-padding-large" id="main" style='position:absolute; top:80px; right: 180px;'>
<div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about"  style='width:90%'>
    <center>
	
	<h2 class="w3-center" style='color:#177F7D'>School Event</h2>
       <hr style="width:200px" class="w3-opacity">

<?php    
//fetching data
   $sel="select * from event";
   $res=$con->query($sel);

echo"
<div class='w3-container'>
<table class='w3-table-all w3-hoverable' border='1' cellspacing='0' cellpadding='0' width='60%' >
<thead>
 <tr class='w3-light-blue'>
<th>Event No.</th>
<th>Event</th>
<th>Event Name</th>
<th>Event Date</th>
<th>Event Time</th>
</thead>   ";
while ($row=mysqli_fetch_array($res))
{
  $eventid = $row[0];
  $eimage = $row[1];
	$eventname = $row[2];
	$eventdate = $row[3];
	$eventtime = $row[4];

 
  echo "<tr align='center'>";
  echo  "<td width='8%'>".$eventid."</td>";
	echo  "<td width='10%'><img src='images/".$eimage."' width='60px'></td>";
	echo "<td width='10%'>".$eventname."</td>";
	echo "<td width='10%'>".$eventdate."</td>";
	echo "<td width='15%'>".$eventtime."</td>";
	echo "</tr>";
	
      
}   


   



 ?>

    </table>
	   </div>
	   </div>
	   </div>
	   </form>
     
	   </body>

	   <br><br><br>
     

<?php
 
?>