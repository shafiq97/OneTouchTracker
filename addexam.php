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
        venue: "required",
				
				},
						
			},
		
        
        // Specify the validation error messages
        messages: {
          examid: "<label><h5>Please Enter Date!</h5></label>",
			      date: "<label><h5>Please Enter Date!</h5></label>",
            time_start: "<label><h5>Please Enter Start Date!</h5></label>",
			      time_end: "<label><h5>Please Enter End Date!</h5></label>",
            subject:"<label><h5>Please Enter Subject</h5></label>",
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
<br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;
<table width='90%' border='0' align='center' style='position:absolute;  top: 170px; left:180px;'>
<tr align='center'>
<td>
<div class="w3-container w3-card-4 w3-light-grey w3-text-black " style='width:65%;'>
<h2 class="w3-center" style='color:#177F7D'>Add Examination Schedule</h2>


<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="examid" type="text" value="" placeholder="Exam ID">
    </div>
</div>


<div class="w3-row w3-section" style='width:60%'>
  <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
     <select type="text" class="w3-input w3-border" name='grade' id='grade' style='color:grey' required>
		   <?php  
		   if (isset($_POST['grade']))
		 {
			  echo "<option>".$_POST['grade']."</option>";
		 }
		 else
		 {
		 }
		 ?>
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
      <input class="w3-input w3-border" name="date" type="date"  placeholder="Enter Date">
    </div>
</div>


<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="time_start" type="text" placeholder="Enter Start Time" required>
    </div>
</div>

<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="time_end" type="text" placeholder="Enter End Time" required>
    </div>
</div>


<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="subject" type="text" placeholder="Enter Subject" required>
    </div>
</div>







<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="venue" type="text" placeholder="Enter Venue" required>
    </div>
</div>


<p class="w3-center">
<input type='submit' class="w3-button w3-section w3-teal w3-ripple" value='Add Examination' name='add'>

    </div>
</div>



</p>
</center>

</div>
<?php
if(isset($_POST['add']))
{
	
  $examid=$_POST['examid'];	
  $grade=$_POST['grade'];
	$date=$_POST['date'];
    $time_start=$_POST['time_start'];	
	$time_end=$_POST['time_end'];
	$subject=$_POST['subject'];
  $venue=$_POST['venue'];
	
	
$sql="Insert into examsched values('$examid','$grade','$date','$time_start','$time_end','$subject','$venue')";

	if(mysqli_query($con,$sql))
	  {
	
		
		echo "<script>alert('Examination Schedule added successfully');</script>";
		echo "<script>location.replace('addexam.php')</script>";
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