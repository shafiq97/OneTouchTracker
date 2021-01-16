<?php
	session_start();
	$aid=$_SESSION['aid'];
	if(empty($aid))
	{
		echo "<script>window.location.href='adminlogin.php'</script>";
	}
	include('adminmenu.php');
	include('connect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>One Touch Tracker</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet"href="styles.css" >
	<link rel="stylesheet" href="w.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
</head>
<style type="text/css">
	.img{
		max-width: 50%;
		max-height: 50%;
	}
	/* Style the Image Used to Trigger the Modal */
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal-content, #caption {
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
<body>
	<h1 style='position: absolute; top: 20%; left: 500px;'>View Leave</h1>
	<div style="position: absolute; top: 30%; left: 500px;" class="container" >
		<div class="row">
			<div class="col">
				<table id="dataTables" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th>Student ID</th>
							<th>Leave Detail</th>
							<th>From (month)</th>
							<th>To (month)</th>
							<th>Date Applied</th>
							<th>Image</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$query = "SELECT * from ldetail";
							$result = mysqli_query($con, $query);
							while($row = mysqli_fetch_array($result)){
								
								echo
								"<tr>
									<td>".$row['sid']."</td>
									<td>".$row['ldetail']."</td>
									<td>".date("Y-M-d", strtotime($row['fdate']))."</td>
									<td>".date("Y-M-d", strtotime($row['tdate']))."</td>
									<td>".date("Y-M-d", strtotime($row['date']))."</td>
									<td>
										<a href='mc\\".$row['image']."' target='_blank'>
									  		<img width='220' height='250' border='0' align='center' src='mc\\".$row['image']."'/>
										</a>
									</td>
								</tr>";
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#dataTables thead tr').clone(true).appendTo( '#dataTables thead' );
		    $('#dataTables thead tr:eq(1) th').each( function (i) {
		        var title = $(this).text();
		        if(i==2 || i==3){
		        	$(this).html( "<select><option></option><option value='Jan'>Jan</option><option value='Feb'>Feb</option><option value='Mar'>Mar</option><option value='Apr'>Apr</option><option value='May'>May</option><option value='Jun'>Jun</option><option value='Jul'>Jul</option><option value='Aug'>Aug</option><option value='Sep'>Sep</option><option value='Oct'>Oct</option><option value='Nov'>Nov</option><option value='Dec'>Dec</option></select>" );
		        }
		        else{
		        	$(this).html( '<input type="text" placeholder="Search '+title+'" />' );
		        }
		 
		        $( 'input', this ).on( 'keyup change', function () {
		            if ( table.column(i).search() !== this.value ) {
		                table
		                    .column(i)
		                    .search( this.value )
		                    .draw();
		            }
		        } );

		        $( 'select', this ).on( 'keyup change', function () {
		            if ( table.column(i).search() !== this.value ) {
		                table
		                    .column(i)
		                    .search( this.value )
		                    .draw();
		            }
		        } );
		    } );
		 
		    var table = $('#dataTables').DataTable( {
		        orderCellsTop: true,
		        fixedHeader: true
		    } );
	} );

	var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script>

</body>
</html>
