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
	 
	 $var="select max(cid) as max from class";
	   $res=$con->query($var);
       $row = mysqli_fetch_assoc($res);

	     $cid = $row['max'] + 1;
?>

<!-- Latest compiled JavaScript -->


<form method="post">
<center> 
<br><br><br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;
<table width='100%' border='0' align='center' style='position:absolute; top: 190px; left:90px;'>
  <tr align='center'> 
    <td>
      <div class="w3-container w3-card-4 w3-light-grey w3-text-black " style='width:800px; margin:0; auto;'>
      <h2 class="w3-center" style='color:#177F7D'>Add Class</h2>

      <!--<div class="w3-row w3-section " style='width:60%;'>
        <div class="w3-col" style="width:50px;"></div>
          <div class="w3-rest">
            <input class="w3-input w3-border" name="bid" type="text" value="">
          </div>
      </div>-->


      <div class="w3-row w3-section " style='width:60%;'>
        <div class="w3-col" style="width:50px;"></div>
          <div class="w3-rest">
            <input class="w3-input w3-border" name="school" type="text" placeholder="School" required>
          </div>
      </div>

      <div class="w3-row w3-section" style='width:60%'>
        <div class="w3-col" style="width:50px"></div>
          <div class="w3-rest">
            <input class="w3-input w3-border" name="grade" type="text" placeholder="Grade Name" required>
          </div>
      </div>


      <div class="w3-row w3-section w3-center" style='width:60%'>
        <div class="w3-col" style="width:50px"></div>
          <div class="w3-rest">
            <input class="w3-input w3-border" name="class" type="text" placeholder="Class Name"  required>
          </div>
      </div>

      <p class="w3-center">
      <input type='submit' class="w3-button w3-section w3-teal w3-ripple" value='Add' name='add'>
      </p>
      </center>

</div>
<?php
if(isset($_POST['add']))
{
	$school=$_POST['school'];
	$grade=$_POST['grade'];
	$class=$_POST['class'];
	
	
	$sql="Insert into class values('$cid','$school','$grade','$class')";
	if(mysqli_query($con,$sql))
	  {
		echo "<script>alert('Class details added successfully');</script>";
      }
}
		?>
		</td>
		</tr>
		</table>
</form><br><br><br><br>
</body>
</html>

<?php

 }
?>