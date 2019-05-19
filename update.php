<?php

$connect = mysqli_connect("localhost","root","","employee_details");

if($connect){
	
	if(isset($_POST['submit'])){
		
		$ID = $_GET['ID'];
		
		$first_name = $_POST['first_name'];
		
		$last_name = $_POST['last_name'];
		
		$query = "UPDATE employees SET ID=$ID, first_name='$first_name', last_name='$last_name' WHERE ID=$ID ";

		$result = mysqli_query($connect, $query);

			header("location:index.php");
			// echo "Successfully Updated ID : ".$ID;echo "<br>";
	}	
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
	<div class="card">
		<div class="card-header">
			<h2>Updates Details</h2>
		</div>
		<div class="card-body">
			<form method="post">
				<div class="form-group">
					<label for="first_name">First Name</label>
					<input type="text" name="first_name" id="first_name" required placeholder="Enter Your First Name" class="form-control" />	
				</div>
				<div class="form-group">
					<label for="first_name">Last Name</label>
					<input type="text" name="last_name" id="first_name" required placeholder="Enter Your Last Name" class="form-control" />	
				</div>
				
				<input type="submit" name="submit" value="Submit" />
			</form>		
		</div>
	</div>
</div>	
</body>

</html>