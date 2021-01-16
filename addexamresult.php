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
            sname: "required",
            sid: "required",
            examid: "required",
		    subject: "required",
			result: "required",
				
				},
						
			},
		
        
        // Specify the validation error messages
        messages: {
            sname: "<label><h5>Please Enter Student Name!</h5></label>",
            sid: "<label><h5>Please Enter Student ID!</h5></label>",
            examid: "<label><h5>Please Enter Exam ID!</h5></label>",
            subject:"<label><h5>Please Enter Subject!</h5></label>",
            result:"<label><h5>Please Enter Result!</h5></label>",
		
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
<h2 class="w3-center" style='color:#177F7D'>Add Examination Result</h2>

<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="sname" type="text" value="" placeholder="Student Name">
    </div>
</div>

<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="sid" type="text" value="" placeholder="Student ID">
    </div>
</div>

<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="examid" type="text" value="" placeholder="Exam ID">
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
      <input class="w3-input w3-border" name="result" type="text" placeholder="Enter Result" required>
    </div>
</div>


<p class="w3-center">
<input type='submit' class="w3-button w3-section w3-teal w3-ripple" value='ADD' name='add'>

    </div>
</div>



</p>
</center>

</div>
<?php
if(isset($_POST['add']))
{
  $sname=$_POST['sname'];
	$sid=$_POST['sid'];
	$examid=$_POST['examid'];	
  $subject=$_POST['subject'];
	$result=$_POST['result'];
	
	
$sql="Insert into examresult values('$sname','$sid','$examid','$subject','$result')";

	if(mysqli_query($con,$sql))
	  {
	
		
		echo "<script>alert('Examination Result added successfully');</script>";
		echo "<script>location.replace('addexamresult.php')</script>";
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