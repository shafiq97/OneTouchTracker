<?php
session_start();
include('connect.php');

 if(empty($_SESSION['aid']))
 {
	 echo "<script>window.location.href='adminlogin.php'</script>";
 }
 else
 {
    include('adminmenu.php');
 
    $scid=$_GET['scid'];
    $sel="select * from sched where scid='$scid'";
	$res=$con->query($sel);
	$data=mysqli_fetch_array($res);


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
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="jquery.validate.min.js"></script>
  <script>
  $(function() {
  
    // Setup form validation on the #register-form element
    $("#myForm").validate({
    
        // Specify the validation rules
        rules: {
                scid: "required",
                grade: "required",
                class: "required",
                day: "required",
                time_start: "required",
                time_end: "required",
                subject: "required",
               
                teachername: "required",
                venue: "required" 
			
			
			},
		
        
        // Specify the validation error messages
        messages: {
         
          scid: "<label><h5>Please Enter Schedule ID</h5></label>",
          grade:"<label><h5>Please Enter Grade</h5></label>",
			    class:"<label><h5>Please Enter Class</h5></label>",
          day: "<label><h5>Please Enter Day</h5></label>",
			    time_start: "<label><h5>Please Enter Start Time</h5></label>",
          time_end:"<label><h5>Please Enter Start Time</h5></label>",
			    subject:"<label><h5>Please Enter Subject</h5></label>",
          teachername:"<label><h5>Please Enter Teacher Name</h5></label>",
          venue:"<label><h5>Please Enter Venue</h5></label>",

		
		
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>

<body>
<form method="post" id='myForm' novalidate="novalidate" enctype="multipart/form-data">
<center> 
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;
<table width='90%' border='0' align='center'>
<tr align='center'>
<td>
<div class="w3-container w3-card-4 w3-light-grey w3-text-black " style='width:60%; position:absolute; top: 170px; right:180px;'>
<h2 class="w3-center" style='color:#177F7D'>Update Schedule</h2>


<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="scid" type="text" value="<?php echo $data['scid'] ?>" placeholder="Enter Schedule ID" required>
    </div>
</div>

<div class="w3-row w3-section" style='width:60%'>
  <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
     <select type="text" class="w3-input w3-border" name='grade' id='grade' style='color:grey' required>
		  <option><?php echo $data['grade'] ?></option>
		   <option value=''>--Select Grade--</option>
		  <?php
		 $sql5="select * from class";
		  //$cnt=$cnt+1;
		 $res = $con->query($sql5);
		while($row = $res->fetch_assoc()) 
		{
			?>
			<option value="<?php echo $row['grade'] ?>"/><?php echo $row['grade'] ?></option>
		 
			<?php }
			
			
		?>
		</select>
    </div>
</div>

<div class="w3-row w3-section" style='width:60%'>
  <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
     <select type="text" class="w3-input w3-border" name='class' id='class' style='color:grey' required>
		  <option><?php echo $data['class'] ?></option>
		   <option value=''>--Select Class--</option>
		  <?php
		 $sql5="select * from class";
		  //$cnt=$cnt+1;
		 $res = $con->query($sql5);
		while($row = $res->fetch_assoc()) 
		{
			?>
			<option value="<?php echo $row['class'] ?>"/><?php echo $row['class'] ?></option>
		 
			<?php }
			
			
		?>
		</select>
    </div>
</div>



<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="day" type="text" value="<?php echo $data['day'] ?>" placeholder="Enter Day" required>
    </div>
</div>



<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="time_start" type="text" value="<?php echo $data['time_start'] ?>" placeholder="Enter Start Time" required>
    </div>
</div>


<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="time_end" type="text" value="<?php echo $data['time_end'] ?>" placeholder="Enter End Time" required>
    </div>
</div>


<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="subject" type="text" value="<?php echo $data['subject'] ?>" placeholder="Enter Subject" required>
    </div>
</div>






<div class="w3-row w3-section w3-center" style='width:60%'>
  <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
    <input class="w3-input w3-border" name="teachername" type="text" value="<?php echo $data['teachername'] ?>" placeholder="Enter Teacher Name" required>
    </div>
</div>

<div class="w3-row w3-section w3-center" style='width:60%'>
  <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="venue" type="text" value="<?php echo $data['venue'] ?>" placeholder="Enter Venue" required>
    </div>
</div>



<p class="w3-center">
<input type='submit' class="w3-button w3-section w3-teal w3-ripple" value='Update' name='update'>
</p>
</center>

</div>
<?php
if(isset($_POST['update']))
{
	
					
  $grade=$_POST['grade'];
  $class=$_POST['class'];
  $day=$_POST['day'];
	$time_start=$_POST['time_start'];
	$time_end=$_POST['time_end'];
	$subject=$_POST['subject'];
  $teachername=$_POST['teachername'];
  $venue=$_POST['venue'];
	
  $sql="Update sched set  grade='$grade', class='$class',day='$day', time_start='$time_start', time_end='$time_end', subject='$subject',  teachername='$teachername', venue='$venue' where scid='$scid'";
   
	if(mysqli_query($con,$sql))
	  {
		  echo "<script>alert('Timetable Updated successfully');</script>";
		  echo "<script>location.replace('viewsc.php');</script>";
      }
}
		?>
		</td>
		</tr>
		</table>
</form>
</body>
</html>
<br>
<?php

 }
?>