<?php
session_start();

$aid= $_SESSION['aid'];
if(empty($aid))
{
	echo "<script>window.location.href='adminlogin.php'</script>";
}
else
{
	include('adminmenu.php');
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
<style>

</style>
<body>

<form method='POST'>
<div class="w3-padding-large" id="main" style='position:absolute; top: 80px; right:180px;'>
<div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about"  style='width:90%'>
    <center>
	
	<h2 class="w3-center" style='color:#177F7D'>View School Event</h2>
       <hr style="width:200px" class="w3-opacity">
	   <?php
      
     
	   $sel="select * from event";
	   $res=$con->query($sel);
	   if(mysqli_num_rows($res)== 0)
	   {
		  echo "<table align='center'><tr align='center'><td style='color:red'><b>No data found</b></td></tr></table>";
	   }
	   else
	   {
		   echo"
		   <div class='w3-container'>
	   <table class='w3-table-all w3-hoverable' border='1' cellspacing='0' cellpadding='0' width='95%' >
	   <thead>
        <tr class='w3-light-blue'>
       <th>Event ID</th>
       <th>Event Image</th>
	   <th>Event Name</th>
	   <th>Event Date</th>
	   <th>Event Time</th>
	  
     
	   <th>Update</th>
	   <th>Delete</th>
		</tr>
    </thead>   ";
		   while($data=mysqli_fetch_array($res))
		   {
              $eventid=$data['eventid'];
              $eimage=$data['eimage'];
			  $eventname=$data['eventname'];
			  $eventdate=$data['eventdate'];
			  $eventtime=$data['eventtime'];
			
			  echo"
    <tbody bgcolor='#f6f6f6'>
      <tr align='center'>
      <td width='8%'>".$eventid."</td>
      <td width='12%'><img src='images/".$eimage."' width='60px' ></td>
        <td width='10%'>".$eventname."</td>
        <td width='10%'>".$eventdate."</td>
		<td width='15%'>".$eventtime."</td>
	

	
		<td width='5%'>
		<a href='updateevent.php?eventid=".$eventid."' style='font-weight:bold;color:red;'>
         Update
        </a>
		</td>
		<td width='5%'>
		<a href='deleteevent.php?eventid=".$eventid."' style='font-weight:bold;color:red'>
         Delete
        </a>
		</td>
      </tr>
      
    </tbody>";
		   }
			   
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

}
?>