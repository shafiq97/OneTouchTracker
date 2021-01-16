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
	
	<h2 class="w3-center" style='color:#177F7D'>Student Details</h2>
       <hr style="width:200px" class="w3-opacity">
	   <?php
	   $sel="select * from student";
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
	   <th>Student ID</th>
	   <th>Student Name</th>
	   <th>School</th>
	   <th>Grade</th>
	   <th>Class</th>
	   <th>Image</th>
	 <th>Address</th>
	 <th>Parent ID</th>
	   <th>Parent Name</th>
     <th>Contact</th>
     
	   <th>Update</th>
	   <th>Delete</th>
		</tr>
    </thead>   ";
		   while($data=mysqli_fetch_array($res))
		   {
			  $sid=$data['sid'];
			  $sname=$data['sname'];
			  $school=$data['school'];
			  $class=$data['class'];
			  $grade=$data['grade'];
			  $image=$data['image'];
	          $contact=$data['contact'];
			  $address=$data['address'];
			  $pid=$data['pid'];
			  $pname=$data['pname'];
			  echo"
    <tbody bgcolor='#f6f6f6'>
      <tr align='center'>
        <td width='5%'>".$sid."</td>
        <td width='20%'>".$sname."</td>
        <td width='10%'>".$school."</td>
		<td width='10%'>".$grade."</td>
		<td width='10%'>".$class."</td>
		<td width='10%'><img src='images/".$image."' width='50px'></td>
		<td width='50%'>".$address."</td>
		<td width='20%'>".$pid."</td>
		<td width='20%'>".$pname."</td>
		<td width='10%'>".$contact."</td>
		<td width='5%'>
		<a href='updatestu.php?sid=".$sid."' style='font-weight:bold;color:	red'>
         Update
        </a>
		</td>
		<td width='5%'>
		<a href='deletestu.php?sid=".$sid."' style='font-weight:bold;color:red'>
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