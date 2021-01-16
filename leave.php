<?php
  session_start();
  $pid= $_SESSION['pid'];
  if(empty($pid))
  {
  	echo "<script>window.location.href='parentlogin.php'</script>";
  }
	include('parentmenu.php');
	include('connect.php');
?>
		<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet"href="styles.css" >
    <link rel="stylesheet" href="w.css">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

<body>
<form method='POST' enctype="multipart/form-data">
  <div class="w3-padding-large" id="main">
    <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about"  style='width:90%; position: absolute; left: 58%; top: 45%; transform: translate(-50%, -50%);'>
    <center>
      <h2 class="w3-center" style='color:#177F7D'>Leave Application</h2>
        <div>
          <?php
            
            $query = "SELECT * from student where pid = '$pid'";
            $result = mysqli_query($con, $query);
            
            echo "<select name='snameSelect'>";
            
            while($row = mysqli_fetch_array($result)){
              echo "<option value='".$row['sid']."'>".$row['sname']."</option>";
            
            }
            echo"</select>";
          ?>
        </div>
        <hr style="width:200px" class="w3-opacity">
        <div class="w3-row w3-section" style='width:60%'>
          <div class="w3-col" style="width:50px"></div>
            <div class="w3-rest">Enter Leave reason
              <textarea name='leave' class="w3-input w3-border" required></textarea>
            </div>
        </div>

      <table style='width:60%' border='0'>
        <tr>
          <td  style='width:29%'>
            <div class="w3-row w3-section " style='width:100%'>
              <div class="w3-col" style="width:50px"></div>
                <div class="w3-rest">Enter From Date:<br>
                  <input class="w3-input w3-border" name="fdate" type="date" required>
                </div>
            </div>
          </td>

          <td align='center' style='width:2%'><br>-</td>

          <td style='width:29%'>
            <div class="w3-row w3-section" style='width:100%'>
              <div class="w3-col" style="width:50px"></div>
                <div class="w3-rest">Enter To Date:<br> 
                  <input class="w3-input w3-border" name="tdate" type="date" required>
                </div>
            </div>
          </td>

          <td style='width:29%'>
            <div class="w3-row w3-section" style='width:100%'>
              <div class="w3-col" style="width:50px"></div>
                <div class="w3-rest">Upload File:<br>
                  <input class="w3-input w3-border" name="mc" type="file" required>
                </div>
            </div>
          </td>
        </tr>
      </table>
      <tr>
        <input type='submit' class="w3-button w3-section w3-teal w3-ripple" value='Submit' name='sub'>
      </tr>
    </center>
    </div>
  </div>
</form>

<?php
  if(isset($_POST['sub']))
  {
    $sid   = $_POST['snameSelect']; 
    $mc    = $_FILES['mc']['name'];
    $leave = $_POST['leave'];
    $today = date('Y-m-d');
    $fdate = $_POST['fdate'];
    $tdate = $_POST['tdate'];

  	$sql="INSERT into ldetail (sid,ldetail,fdate,tdate,`date`,image) values('$sid','$leave','$fdate','$tdate','$today','$mc')";


  	if(mysqli_query($con,$sql)){
      $file_name = $_FILES['mc']['name'];
      $file_temp = $_FILES['mc']['tmp_name'];
      move_uploaded_file($file_temp, "mc/".$file_name);
  		echo "<script>alert('Leave Application submitted successfully');</script>";
    }
    else{
      echo $con->error;
    }
  }
?>