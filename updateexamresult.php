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
    $sel="select * from examresult where examid='$examid'";
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
                sname: "required",
                sid: "required",
                examid: "required",
                subject: "required",
                result: "required"
			},
		
        
        // Specify the validation error messages
        messages: {
         
          sname: "<label><h5>Please Enter Student Name</h5></label>",
          sid:"<label><h5>Please Enter Student ID</h5></label>",
			    examid:"<label><h5>Please Enter Exam ID</h5></label>",
          subject: "<label><h5>Please Enter Subject</h5></label>",
          result:"<label><h5>Please Enter Result</h5></label>",

		
		
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
<h2 class="w3-center" style='color:#177F7D'>Update Exam Result</h2>

<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="sname" type="text" value="<?php echo $data['sname'] ?>" placeholder="Enter Student Name" required>
    </div>
</div>

<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="sid" type="text" value="<?php echo $data['sid'] ?>" placeholder="Enter Student ID" required>
    </div>
</div>

<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="examid" type="text" value="<?php echo $data['examid'] ?>" placeholder="Enter Exam ID" required>
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
      <input class="w3-input w3-border" name="result" type="text" value="<?php echo $data['result'] ?>" placeholder="Enter Result" required>
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
	
					
  $sname=$_POST['sname'];
  $sid=$_POST['sid'];
  $examid=$_POST['examid'];
	$subject=$_POST['subject'];
	$result=$_POST['result'];
	
  $sql="UPDATE examresult set sname='$sname', sid='$sid', examid='$examid', subject='$subject', result='$result' where sid='$sid'";
   
	if(mysqli_query($con,$sql))
	  {
		  echo "<script>alert('Examination Result Updated successfully');</script>";
		  echo "<script>location.replace('viewexamresult.php');</script>";
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