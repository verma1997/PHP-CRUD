<?php

$connect = mysqli_connect("localhost","root","","employee_details");

if($connect->connect_error){
	die("Connection Failed".$connect->connect_error);
}

// $first_name = $_POST['first_name'];
// $last_name = $_POST['last_name'];


$sql = "INSERT INTO employees (first_name,last_name) VALUES ('$first_name','$last_name')";

if(!mysqli_query($connect,$sql))
{
	echo "Not Inserted";
}
else{
	echo "Inserted"; echo "<br>";
	header("location:index.php");
}
mysqli_close($connect);

?>
