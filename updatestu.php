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
	 
	$sid=$_GET['sid'];
	$sel="select * from student where sid='$sid'";
	$res=$con->query($sel);
	$data=mysqli_fetch_array($res);
	$img=$data['image'];
?>

<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet"href="styles.css" >
      <link rel="stylesheet" href="w.css">
      <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

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
				school: "required",
				grade: "required",
				address: "required",
				pid: "required",
				pname: "required",
				campus: "required",
				room: "required",
				email: {
                required: true,
                email: true
				},
				contact:{
				required:true,
				minlength:8,
				maxlength:16,
				number: true
				},		
			},
		
        
        // Specify the validation error messages
        messages: {
            sname: "<label><h5>Please Enter Student Name!</h5></label>",
			school: "<label><h5>Please select school</h5></label>",
            grade:"<label><h5>Please select Grade</h5></label>",
			address:"<label><h5>Please Enter address</h5></label>",
			pid:"<label><h5>Please Enter Parents ID</h5></label>",
			pname:"<label><h5>Please Enter Parents Name</h5></label>",
			email:"<label><h5>Please enter valid email Address!</h5></label>",
			contact:"<label><h5>Please enter Valid Contact No!</h5></label>",
			campus:"<label><h5>Please enter campus location</h5></label>",
			room: "<label><h5>Please enter Room number</h5></label>",
		
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

&nbsp;&nbsp;&nbsp;&nbsp;
<table width='90%' border='0' align='center' style='position:absolute; top: 170px;  left:180px; '>
<tr align='center'>
<td>
<div class="w3-container w3-card-4 w3-light-grey w3-text-black " style='width:65%; margin-bottom:35px;' >
<h2 class="w3-center" style='color:#177F7D'>Update Student</h2>




<div class="w3-row w3-section " style='width:60%;'>
  <div class="w3-col" style="width:50px;"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="sname" type="text" value="<?php echo $data['sname'] ?>" placeholder="Enter Student Name" required>
    </div>
</div>

<div class="w3-row w3-section" style='width:60%'>
  <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
     <select type="text" class="w3-input w3-border" name='school' id='school' style='color:grey' required>
		   <option><?php echo $data['school'] ?></option>
		   <option value=''>--Select School--</option>
		  <?php
		 $sql5="select * from class";
		  //$cnt=$cnt+1;
		 $res = $con->query($sql5);
		while($row = $res->fetch_assoc()) 
		{
			?>
			<option value="<?php echo $row['school'] ?>"/><?php echo $row['school'] ?></option>
		 
			<?php }
			
			
		?>
		</select>
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

<div class="w3-row w3-section w3-center" style='width:60%'>
  <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
	<img src="images/<?php echo $data['image'] ?>" width='60px'><br><br>
      <input type='file' name='image' class='w3-border' style='width:100%'>
    </div>
</div>

<div class="w3-row w3-section w3-center" style='width:60%'>
  <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
      <textarea name='address' class="w3-input w3-border" placeholder="Enter Address" style='width:100%' required><?php echo $data['address'] ?></textarea>
    </div>
</div>

<div class="w3-row w3-section w3-center" style='width:60%'>
  <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="pid" type="text" value="<?php echo $data['pid'] ?>" placeholder="Enter Parents ID">
    </div>
</div>

<div class="w3-row w3-section w3-center" style='width:60%'>
  <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="pname" type="text" value="<?php echo $data['pname'] ?>" placeholder="Enter Parents Name">
    </div>
</div>

<div class="w3-row w3-section w3-center" style='width:60%'>
  <div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="contact" type="text" value="<?php echo $data['contact'] ?>" placeholder="Enter Parents Contact"  required>
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
	 $file=$_FILES['image']['tmp_name'];
					  $iname=$_FILES['image']['name'];
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
					
	
    $sname=$_POST['sname'];	
	$school=$_POST['school'];
	$grade=$_POST['grade'];
	$class=$_POST['class'];
	$image=$iname;
	$address=$_POST['address'];
	$pid=$_POST['pid'];
	$pname=$_POST['pname'];
	$contact=$_POST['contact'];
	$image=$iname;
	if(empty($image))
	{
	$sql="Update student set sname='$sname',school='$school',grade='$grade',class='$class',image='$img',address='$address',pid='$pid',pname='$pname',contact='$contact' where sid='$sid'";
	}
	else
	{
		$sql="Update student set sname='$sname',school='$school',grade='$grade',class='$class',image='$image',address='$address',pid='$pid',pname='$pname',contact='$contact' where sid='$sid'";
	}
	if(mysqli_query($con,$sql))
	  {
		echo "<script>alert('Student details Updated successfully');</script>";
		 echo "<script>location.replace('viewstu.php');</script>";
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