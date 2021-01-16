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
	
	<h2 class="w3-center" style='color:#177F7D'>View School News</h2>
       <hr style="width:200px" class="w3-opacity">
	   <?php
	   $sel="select * from news";
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
	<th>News ID</th>
	<th>News Image</th>
	   <th>News Topic</th>
	   <th>Date</th>
	   <th>Description</th>

	
	   <th>Update</th>
	   <th>Delete</th>
		</tr>
    </thead>   ";
		   while($data=mysqli_fetch_array($res))
		   {
			$newsid=$data['newsid'];
			$newsimage=$data['newsimage'];
			  $newstopic=$data['newstopic'];
			  $newsdate=$data['newsdate'];
			  $newsdesc=$data['newsdesc'];
		
			
	      
			  echo"
    <tbody bgcolor='#f6f6f6'>
	  <tr align='center'>
	<td width='8%'>".$newsid."</td>
	<td width='15%'><img src='images/".$newsimage."' width='60px' ></td>
        <td width='25%'>".$newstopic."</td>
        <td width='20%'>".$newsdate."</td>
        <td width='50%'>".$newsdesc."</td>

	
		<td width='5%'>
		<a href='updatenews.php?newsid=".$newsid."' style='font-weight:bold;color:	red'>
         Update
        </a>
		</td>
		<td width='5%'>
		<a href='deletenews.php?newsid=".$newsid."' style='font-weight:bold;color:red'>
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