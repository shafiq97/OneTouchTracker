<?php
	session_start();
	$aid= $_SESSION['aid'];
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
<div class="w3-padding-large" id="main" style='position:absolute;  top: 80px; right:180px;'>
	<div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about"  style='width:90%'>
    <h2 class="w3-center" style='color:#177F7D'>View Schedule</h2>

    <?php

   		$pid = $_SESSION['pid'];
   		$query = "SELECT * FROM student where pid = '$pid' LIMIT 1";
   		$result = mysqli_query($con, $query);
   		while($row = mysqli_fetch_array($result)){
   			$parentName = $row['pname'];
   		}

   		$query2 = "SELECT * FROM student where pid = '$pid'";
   		$result2 = mysqli_query($con, $query2);
   		while($row2 = mysqli_fetch_array($result2)){
   			
   			$query3 = "SELECT * from sched where grade = '".$row2['grade']."'";
   			$result3 = mysqli_query($con, $query3);
   			while($row3 = mysqli_fetch_array($result3)){
   				//echo "Student name: ". $row2['sname'] ." Grade: " . $row2['grade'];
	   			echo"
	   			<caption>Student name: ".$row2['sname']."</caption>
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
						</tr>
			    	</thead>
				    <tbody bgcolor='#f6f6f6'>
				      <tr align='center'>
						<td width='5%'>".$row3['scid']."</td>
						<td width='10%'>".$row3['grade']."</td>
						<td width='10%'>".$row3['class']."</td>
						<td width='10%'>".$row3['day']."</td>
				        <td width='10%'>".$row3['time_start']."</td>
				        <td width='10%'>".$row3['time_end']."</td>
						<td width='10%'>".$row3['subject']."</td>
				        <td width='20%'>".$row3['teachername']."</td>
				        <td width='10%'>".$row3['venue']."</td>
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

