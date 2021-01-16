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
	 
	$newsid=$_GET['newsid'];
	$sel="select * from news where newsid='$newsid'";
	$res=$con->query($sel);
  $data=mysqli_fetch_array($res);
	$img=$data['newsimage'];

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
				newsid: "required",
    
				newstopic: "required",
				newsdate: "required",
				newsdesc: "required",
			
						
			},
		
        
        // Specify the validation error messages
        messages: {
        newsid: "<label><h5>Please Enter News ID!</h5></label>",
			  newstopic: "<label><h5>Please News Topic</h5></label>",
        newsdate:"<label><h5>Please News Date</h5></label>",
			  newsdesc:"<label><h5>Please Enter News Description</h5></label>",
		
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
<table width='90%' border='0' align='center' style='position:absolute; top: 170px; right: -25px; '>
<tr align='center'>
<td>
<div class="w3-container w3-card-4 w3-light-grey w3-text-black " style='width:65%; margin-bottom:35px;' >
<h2 class="w3-center" style='color:#177F7D'>Update School News</h2>




<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name='newstid' type="text" value="<?php echo $data['newsid'] ?>" placeholder="Enter News ID" required>
    </div>
</div>


<div class="w3-row w3-section w3-center" style='width:60%'>
  <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
	<img src="images/<?php echo $data['newsimage'] ?>" width='60px'>
    <br>
    <br>
      <input type='file' name='newsimage' class='w3-border' style='width:100%'>
    </div>
</div>

<div class="w3-row w3-section w3-center" style='width:60%'>
  <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="newstopic" type="text" value="<?php echo $data['newstopic'] ?>" placeholder="Enter News Topic">
    </div>
</div>

<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="newsdate" type="date" value="<?php echo $data['newsdate'] ?>" placeholder="Enter News Date" required>
    </div>
</div>

<div class="w3-row w3-section w3-center" style='width:60%'>
  <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
      <textarea name='newsdesc' class="w3-input w3-border" placeholder="Enter Description" style='width:100%' required><?php echo $data['newsdesc'] ?></textarea>
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

	if(empty($newsimage))
	{
	$sql="Update news set newsimage='$newsimage',newstopic='$newstopic',newsdate='$newsdate',newsdesc='$newsdesc' where newsid='$newsid'";
	}
	else
	{
		$sql="Update news set newsimage='$newsimage',newstopic='$newstopic',newsdate='$newsdate',newsdesc='$newsdesc' where newsid='$newsid'";
	}
	if(mysqli_query($con,$sql))
	  {
		echo "<script>alert('News Updated successfully');</script>";
		 echo "<script>location.replace('viewnews.php');</script>";
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