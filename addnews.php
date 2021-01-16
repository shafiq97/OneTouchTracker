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
        newsid: "required",
        newsimage: "required",
				newstopic: "required",
				newsdate: "required",
				newsdesc: "required",
			
				
			},
		
        
        // Specify the validation error messages
        messages: {
			  newsid: "<label><h5>Please Enter Event ID!</h5></label>",
        newsimage: "<label><h5>Please Upload News Image!</h5></label>",
        newstopic: "<label><h5>Please Enter Event Topic!</h5></label>",
			  newsdate: "<label><h5>Please Enter Event Date!</h5></label>",
        newsdesc:"<label><h5>Please Enter Description</h5></label>",
		
		
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
<h2 class="w3-center" style='color:#177F7D'>Add School News</h2>


<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="newsid" type="text" value="" placeholder="Enter News ID">
    </div>
</div>

<div class="w3-row w3-section w3-center" style='width:60%'>
  <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
      <input type='file' name='newsimage' class='w3-border' style='width:100%' required>
    </div>
</div>

<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="newstopic" type="text" placeholder="Enter News Topic" required>
    </div>
</div>

<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="newsdate" type="date" placeholder="Enter News Date" required>
    </div>
</div>

<div class="w3-row w3-section w3-center" style='width:60%'>
  <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
      <textarea name='newsdesc' class="w3-input w3-border" placeholder="Enter Description" style='width:100%' required></textarea>
    </div>
</div>



<p class="w3-center">
<input type='submit' class="w3-button w3-section w3-teal w3-ripple" value='Add News' name='add'>
</p>
</center>

</div>
<?php
if(isset($_POST['add']))
{
	 $file=$_FILES['newsimage']['tmp_name'];
					  $iname=$_FILES['newsimage']['name'];
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
					
    $newsid=$_POST['newsid'];
    $newsimage=$iname;
    $newstopic=$_POST['newstopic'];	
	$newsdate=$_POST['newsdate'];
    $newsdesc=$_POST['newsdesc'];
	
	
$sql="Insert into news values('$newsid','$newsimage','$newstopic','$newsdate','$newsdesc')";
	if(mysqli_query($con,$sql))
	  {
		        
		echo "<script>alert('School News added successfully');</script>";
		echo "<script>location.replace('addnews.php')</script>";
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