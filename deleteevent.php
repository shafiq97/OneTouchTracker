<?php
 include("connect.php");
 $eventid=$_GET['eventid'];
 $sql="Delete from event where eventid='$eventid'";

 if(mysqli_query($con,$sql))
 {
	 echo "<script>location.replace('viewevent.php')</script>" ;
 }
 else
 {
	 
 }
 ?>