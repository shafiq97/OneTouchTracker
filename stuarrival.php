<?php
	session_start();
	//$sid= $_SESSION['sid'];
	$pid = $_SESSION['pid'];
	if(empty($_SESSION['pid'])){
		echo "<script>window.location.href='parentlogin.php'</script>";
	}
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

<body>

<form method='POST'>
	<div class="w3-padding-large" id="main">
		<div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about"  style='width:90%; position: absolute; left: 58%; top: 40%; transform: translate(-50%, -50%);'>
		    <center>
				<h2 class="w3-center" style='color:#177F7D'>View Student Arrival Details</h2>
			       <hr style="width:200px" class="w3-opacity">
				<table style='width:60%' border='0'>
					<tr>
						<td  style='width:29%'>
							<div class="w3-row w3-section " style='width:100%'>
							  <div class="w3-col" style="width:50px"></div>
							    <div class="w3-rest">
									Student Name: <br>
									<select name="sid" class="w3-input w3-border">
										<?php 
											$query = "SELECT * from student where pid = '$pid'";
											$result = mysqli_query($con, $query);
											while($row = mysqli_fetch_array($result)){
												echo"<option value='".$row['sid']."'>".$row['sname']."</option>";
											}
										?>
									</select>
							    </div>
							</div>
						</td>
						<td  style='width:29%'>
							<div class="w3-row w3-section " style='width:100%'>
							  <div class="w3-col" style="width:50px"></div>
							    <div class="w3-rest">
								Enter Start Date:<br>
							      <input class="w3-input w3-border" name="fdate" type="date" value="<?php if (isset($_POST['fdate'])) { echo $_POST['fdate']; }  ?>" required>
							    </div>
							</div>
						</td>
						<td align='center' style='width:2%'><br>
						-
						</td>
						<td  style='width:29%'>
						<div class="w3-row w3-section" style='width:100%'>
						  <div class="w3-col" style="width:50px"></div>
						    <div class="w3-rest">
							Enter End Date:<br>
						      <input class="w3-input w3-border" name="tdate" type="date" value="<?php if (isset($_POST['tdate'])) { echo $_POST['tdate']; }  ?>" required>
						    </div>
						</div>
						</td>
					</tr>
				</table>
</form>

<p class="w3-center">
<input type='submit' class="w3-button w3-section w3-teal w3-ripple" value='Search' name='search'>
</p>
</center>

<?php
if(isset($_POST['search']))
{
	$sid = $_POST['sid']; 
	$fdate=date("Y-m-d",strtotime($_POST['fdate']));
	$tdate=date("Y-m-d",strtotime($_POST['tdate']));
	echo $fdate;
	$sel="SELECT * from arrival where sid='$sid' and `date` between '$fdate' and '$tdate'";
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
        <tr class='w3-light-green'>
	   <th>Stu_Id</th>
	   <th>Stu_Name</th>
	   <th>Class</th>
	   <th>Contact</th>
	   <th>Date</th>
	   <th>In-Time</th>
	   <th>Out-Time</th>
	  
		</tr>
    </thead>   ";
		   while($data=mysqli_fetch_array($res))
		   {
				$sel1="select * from student where sid='$sid'";
				$res1=$con->query($sel1);
				$data1=mysqli_fetch_array($res1);

$sid=$data['sid'];
$sname=$data['sname'];
$class=$data1['class'];
$contact=$data['contact'];
$date=$data['date'];
$intime=$data['intime'];
$outtime=$data['outtime'];
			  echo"
    <tbody bgcolor='#f6f6f6'>
      <tr align='center'>
        <td width='5%'>".$sid."</td>
        <td width='10%'>".$sname."</td>
		<td width='10%'>".$class."</td>
		<td width='10%'>".$contact."</td>
		<td width='10%'>".$date."</td>
		<td width='10%'>".$intime."</td>
		<td width='10%'>".$outtime."</td>
	
      </tr>
      
    </tbody>";
		   }
			   
	   }
}

?> 
</table></div></div></div><br><br><br><br>
