<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
</head>
<body>
<form method="post">
	<h1>Are you sure you want to delete?</h1>
	<input type="submit" name="yes" value="Yes">
	<input type="submit" name="cancel" value="Cancel">
</form>
</body>
</html>

<?php
	$connect = mysqli_connect("localhost","root","","demo");

	$ID = $_GET['ID'];

	if(isset($_POST['yes'])){
		
		$delete_query = "DELETE FROM new WHERE ID='$ID'";

		$result = mysqli_query($connect,$delete_query);
		
		if($result){
			header("location:index.php");		
		}
	}
	elseif(isset($_POST['cancel'])){
		header("location:index.php");
	}
?>