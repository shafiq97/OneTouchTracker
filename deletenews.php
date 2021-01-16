<?php
 include("connect.php");
 $newsid=$_GET['newsid'];
 $sql="Delete from news where newsid='$newsid'";

 if(mysqli_query($con,$sql))
 {
	 echo "<script>location.replace('viewnews.php')</script>" ;
 }
 else
 {
	 
 }
 ?>