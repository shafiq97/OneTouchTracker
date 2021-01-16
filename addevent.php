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
			    eventid: "required",
				eventname: "required",
				eventdate: "required",
				eventtime: "required",
			
				
			},
		
        
        // Specify the validation error messages
        messages: {
			  eventid: "<label><h5>Please Enter Event ID!</h5></label>",
            eventname: "<label><h5>Please Enter Event Name!</h5></label>",
			eventdate: "<label><h5>Please Enter Event Date!</h5></label>",
            eventtime:"<label><h5>Please Enter Time</h5></label>",
		
		
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
<table width='90%' border='0' align='center' style='position:absolute;  top: 190px; left:180px;'>
<tr align='center'>
<td>
<div class="w3-container w3-card-4 w3-light-grey w3-text-black " style='width:65%;  margin-bottom:35px;'>
<h2 class="w3-center" style='color:#177F7D'>Add School Event</h2>


<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="eventid" type="text" value="" placeholder="Enter Event ID">
    </div>
</div>

<div class="w3-row w3-section w3-center" style='width:60%'>
  <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
      <input type='file' name='eimage' class='w3-border' style='width:100%' required>
    </div>
</div>

<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="eventname" type="text" placeholder="Enter Event Name" required>
    </div>
</div>

<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="eventdate" type="date" placeholder="Enter Event Date" required>
    </div>
</div>

<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="eventtime" type="text" placeholder="Enter Event Time" required>
    </div>
</div>



<p class="w3-center">
<input type='submit' class="w3-button w3-section w3-teal w3-ripple" value='Add Event' name='add'>
</p>
</center>

</div>
<?php
if(isset($_POST['add']))
{
	 $file=$_FILES['eimage']['tmp_name'];
					  $iname=$_FILES['eimage']['name'];
					  if(isset($iname))
					  {
					 if(!empty($iname))
					  {      
                      $location = 'images/';      
                     if(move_uploaded_file($file, $location.$iname))
					 {
                             'uploaded';
                     }
                    } 
					  }			
                else
					{
                      'please upload';
                    }
					
    $eventid=$_POST['eventid'];
    $eimage=$iname;
    $eventname=$_POST['eventname'];	
	$eventdate=$_POST['eventdate'];
    $eventtime=$_POST['eventtime'];
	
	
$sql="Insert into event values('$eventid','$eimage','$eventname','$eventdate','$eventtime')";
	if(mysqli_query($con,$sql))
	  {
		        
		echo "<script>alert('Echool Event added successfully');</script>";
		echo "<script>location.replace('addevent.php')</script>";
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