<?php
  session_start();
  include('connect.php');
  //'check if parent logged in'
  if(empty($_SESSION['pid']))
  {
    echo "<script>window.location.href='parentlogin.php'</script>";
  }
  else
  {
    include('parentmenu.php');
    include("connect.php");

    $pid=$_SESSION['pid'];
    $pro="select * from student where pid='$pid'";
    $prof=mysqli_query($con, $pro);

    $pro2="select * from student where pid='$pid'";
    $prof2=mysqli_query($con, $pro2);

    while($row=mysqli_fetch_array($prof2))
    {
      $parentname = $row['pname'];
    }
  }     
?>

<!-- Latest compiled JavaScript -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet"href="styles.css" >
<link rel="stylesheet" href="w.css">
<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" ></script>
<script type="text/javascript" src="\Tparent\Tparent\scripts.js"></script>

<title>ONE TOUCH TRACKER</title>

<form method='POST' >
<div class="container">
  <div class="row">
    <div><br><br><br>
      <center>
        <h2 class="w3-center" style='color:#177F7D; position:absolute;  top: 150px; left:730px;'>
          Parent: <?php echo $parentname ?>
        </h2>
      </center> 
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" style='position:absolute;  top: 200px; left:450px;'>
    <br>
      <?php 
          while($pr=mysqli_fetch_array($prof)){
            echo"
              <div class='row justify-content-md-center'>
                <div class='col-lg-3'>
                  <img alt='User Pic' src='images/".$pr['image']."' class='img-thumbnail'> 
                </div>
                <div class='col-lg-5' style='font-size:1.2em;'>
                  School  : ".$pr['school']." <br>
                  Name    : ".$pr['sname']." <br>
                  Grade   : ".$pr['grade']." <br>
                  Class   : ".$pr['class']." <br>
                  Contact : ".$pr['contact']." <br>
                  Email   : ".$pr['email']." <br>
                  Address : ".$pr['address']." <br><br>
                </div>
              </div>";
          }
      ?>
    </div>
  </div>
</div>