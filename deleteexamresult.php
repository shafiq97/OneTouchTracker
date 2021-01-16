<?php
 include("connect.php");
 $examid=$_GET['examid'];
 $sql="Delete from examresult where examid='$examid'";

 if(mysqli_query($con,$sql))
 {
	 echo "<script>location.replace('viewexamresult.php')</script>" ;
 }
 else
 {
	 
 }
 ?>