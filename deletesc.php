<?php
 include("connect.php");
 $scid=$_GET['scid'];
 $sql="Delete from sched where scid='$scid'";

 if(mysqli_query($con,$sql))
 {
	 echo "<script>location.replace('viewsc.php')</script>" ;
 }
 else
 {
	 
 }
 ?>