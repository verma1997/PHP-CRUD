<?php

$connect = mysqli_connect("localhost","root","","employee_details");

if(!$connect){
	echo "Connected Failed" . mysqli_connect_error();
}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$department = $_POST['department'];
$DOB = $_POST['DOB'];
$DOJ = $_POST['DOJ'];
$salary = $_POST['salary'];

$sql = "INSERT INTO employees (first_name,last_name,department,DOB,DOJ,salary) VALUES ('$first_name','$last_name','$department','$DOB','$DOJ','$salary')";

if(!mysqli_query($connect,$sql))
{
	echo "Not Inserted";
}
else{
	echo "Inserted"; echo "<br>";
	header("location:index.php");
}

?>
