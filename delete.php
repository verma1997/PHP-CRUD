<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<form method="post">
	<div class="jumbotron">
		<h1>Are you sure you want to delete?</h1>
		<input type="submit" name="yes" value="Yes">
		<input type="submit" name="cancel" value="Cancel">
	</div>
</form>
</body>
</html>

<?php
	$connect = mysqli_connect("localhost","root","","employee_details");

	$ID = $_GET['ID'];

	if(isset($_POST['yes'])){
		
		$delete_query = "DELETE FROM employees WHERE ID='$ID'";

		$result = mysqli_query($connect,$delete_query);
		
		if($result){
			header("location:index.php");		
		}
	}
	elseif(isset($_POST['cancel'])){
		header("location:index.php");
	}
?>