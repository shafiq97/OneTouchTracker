<?php
 include("connect.php");
 $examid=$_GET['examid'];
 $sql="Delete from examsched where examid='$examid'";

 if(mysqli_query($con,$sql))
 {
	 echo "<script>location.replace('viewexam.php')</script>" ;
 }
 else
 {
	 
 }
 ?>