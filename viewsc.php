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
<div class="w3-padding-large" id="main" style='position:absolute;  top: 80px; right:180px;'>
<div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about"  style='width:90%'>
    <center>
	
	<h2 class="w3-center" style='color:#177F7D'>View Schedule</h2>
       <hr style="width:200px" class="w3-opacity">
	   <?php
	   $sel="select * from sched";
	   $res=$con->query($sel);
	   if(mysqli_num_rows($res)==0)
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
      
	  <th>Schedule ID</th>
	  <th>Grade</th>
      <th>Class</th>
		<th>Day</th>
	    <th>Start Time</th>
	    <th>End Time</th>
	    <th>Subject</th>  
      <th>Teacher Name</th>
      <th>Venue</th>
	

	   <th>Update</th>
	   <th>Delete</th>
		</tr>
    </thead>   ";
		   while($data=mysqli_fetch_array($res))
		   {
		  $scid=$data['scid'];
		  $grade=$data['grade'];
          $class=$data['class'];
		  $day=$data['day'];
		  $time_start=$data['time_start'];
		  $time_end=$data['time_end'];
		  $subject=$data['subject'];
          $teachername=$data['teachername'];
          $venue=$data['venue'];
			
	      
			  echo"
    <tbody bgcolor='#f6f6f6'>
      <tr align='center'>
		<td width='5%'>".$scid."</td>
		<td width='10%'>".$grade."</td>
		<td width='10%'>".$class."</td>
		<td width='10%'>".$day."</td>
        <td width='10%'>".$time_start."</td>
        <td width='10%'>".$time_end."</td>
		<td width='10%'>".$subject."</td>
        <td width='20%'>".$teachername."</td>
        <td width='10%'>".$venue."</td>
        

	
		<td width='5%'>
		<a href='updatesc.php?scid=".$scid."' style='font-weight:bold;color:	red'>
         Update
        </a>
		</td>
		<td width='5%'>
		<a href='deletesc.php?scid=".$scid."' style='font-weight:bold;color:red'>
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