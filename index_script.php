<?php

$connect = mysqli_connect("localhost","root","","demo");

if($connect->connect_error){
	die("Connection Failed".$connect->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$DOB = $_POST['DOB'];
$department = $_POST['department'];

$sql = "INSERT INTO new (name,email,DOB,department) VALUES ('$name','$email','$DOB','$department')";

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
