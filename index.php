<!DOCTYPE html>
<html>
<head>
	<title>New Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h2>Add Details</h2>
			</div>
			<div class="card-body">
				<form action="index_script.php" method="post">
				<div class="form-group">
					<label for="name">Full Name</label>
					<input type="text" id="name" required placeholder="Enter Your Full Name" class="form-control" />	
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" id="email" required placeholder="Enter Email" class="form-control"/>	
				</div>
				<div class="form-group">
					<label for="DOB">Date Of Birth</label>
					<input type="date" id="DOB" required class="form-control"/>	
				</div>
				<div class="form-group">
					<label for="department">Department</label>
					<input type="text" id="department" required placeholder="Enter Department" class="form-control"/>	
				</div>
				<button type="submit" name="submit" class="btn btn-lg btn-primary">Submit</button>
			</form>		
			</div>
		</div>
		
		<hr>

		<h1>List of Employees</h1>
		<?php
			$connect  = mysqli_connect("localhost","root","","demo");
			$list = "SELECT * FROM new";
			$result = mysqli_query($connect,$list); 
		?>
			<table class="table">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>DOB</th>
					<th>Department</th>
					<th></th>
					<th></th>
				</tr>
				<?php
					if(mysqli_num_rows($result)>0){
						while($row = mysqli_fetch_assoc($result)){
			    ?>
						<tr>
							<td><?php echo $row["ID"] ?></td>
							<td><?php echo $row["name"] ?></td>
							<td><?php echo $row["email"] ?></td>
							<td><?php echo $row["DOB"] ?></td>
							<td><?php echo $row["department"] ?></td>
							<td><a href='update.php?ID=<?php echo $row["ID"];?>'>Update</a></td>
							<td><a href='delete.php?ID=<?php echo $row["ID"];?>'>Delete</a></td>
						</tr>
				<?php		
						}
					}
					else{
						
						echo "No results found!"; echo "<br>";
					}
				?>
			</table>	
	</div>
</body>
</html>