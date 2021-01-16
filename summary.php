<?php
	session_start();
	if(empty($_SESSION['aid'])){
		echo "<script>window.location.href='adminlogin.php'</script>";
	}
	else{
		include('connect.php');
		include('adminmenu.php');
	}
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
<body>
	<?php 
		if(isset($_POST["link1"])){
			echo"<h1 style='position: absolute; top: 20%; left: 500px;'> Current month: ".date('F')."</h1>";
		}
		else if(isset($_POST["link2"])){
			echo"<h1 style='position: absolute; top: 20%; left: 500px;'> Current Year: ".date('Y')."</h1>";
		}
	?>
	<form method="POST">
		<div style="position: absolute; top: 30%; left: 500px;" class="container" >
			<div class="row">
				<div class="col">
					<table id="dataTables" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>Student ID</th>
								<th>Student Name</th>
								<th>Contact</th>
								<th>Date</th>
								<th>Parent ID</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$current_month = date('m');
								$current_year = date('Y'); 
								if(isset($_POST["link1"])){
									$query = "SELECT * from arrival WHERE MONTH(`date`) = '$current_month'";
								}
								else if(isset($_POST["link2"])){
									$query = "SELECT * from arrival WHERE YEAR(`date`) = '$current_year'";
								}
								else{
									echo "Not set";
								}

								$result = mysqli_query($con, $query);
								while($row = mysqli_fetch_array($result)){
									echo
									"<tr>
										<td>".$row['sid']."</td>
										<td>".$row['sname']."</td>
										<td>".$row['contact']."</td>
										<td>".date("Y-M-d", strtotime($row['date']))."</td>
										<td>".$row['pid']."</td>
									</tr>";
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</form>
<script type="text/javascript">
	$(document).ready(function() {
		$('#dataTables thead tr').clone(true).appendTo( '#dataTables thead' );
		    $('#dataTables thead tr:eq(1) th').each( function (i) {
		        var title = $(this).text();
		        if(i==3){
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
</script>
</body>
</html>