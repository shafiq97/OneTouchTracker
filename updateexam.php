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
 
    $examid=$_GET['examid'];
    $sel="select * from examsched where examid='$examid'";
	$res=$con->query($sel);
	$data=mysqli_fetch_array($res);



?>
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
         examid: "required",
        date: "required",
				time_start: "required",
				time_end: "required",
				subject: "required",
				batch: "required",
			
			
			},
		
        
        // Specify the validation error messages
        messages: {
          examid: "<label><h5>Please Enter ExamID</h5></label>",
            date: "<label><h5>Please Enter Date</h5></label>",
			time_start: "<label><h5>Please Enter Start Time</h5></label>",
            time_end:"<label><h5>Please Enter Start Time</h5></label>",
			subject:"<label><h5>Please Enter Subject</h5></label>",
			batch:"<label><h5>Please Enter Batch</h5></label>",
		
		
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
<br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;
<table width='90%' border='0' align='center'>
<tr align='center'>
<td>
<div class="w3-container w3-card-4 w3-light-grey w3-text-black " style='width:60%; position:absolute; top: 170px; right:180px;'>
<h2 class="w3-center" style='color:#177F7D'>Update Examination Schedule</h2>


<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="examid" type="text" value="<?php echo $data['examid'] ?>" placeholder="Enter ExamID" required>
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

<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="date" type="date" value="<?php echo $data['date'] ?>" placeholder="Enter Date" required>
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
      <input class="w3-input w3-border" name="time_end" type="time_end" value="<?php echo $data['time_end'] ?>" placeholder="Enter End Time" required>
    </div>
</div>


<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="subject" type="text" value="<?php echo $data['subject'] ?>" placeholder="Enter Subject" required>
    </div>
</div>





<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
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
  $date=$_POST['date'];	
	$time_start=$_POST['time_start'];
	$time_end=$_POST['time_end'];
	$subject=$_POST['subject'];
 
  $venue=$_POST['venue'];
  

  $sql="Update examsched set  grade='$grade', date='$date', time_start='$time_start',time_end='$time_end', subject='$subject', venue='$venue' where examid='$examid'";
   
	if(mysqli_query($con,$sql))
	  {
		echo "<script>alert('Examination Updated successfully');</script>";
		 echo "<script>location.replace('viewexam.php');</script>";
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