<?php
	$connect = mysqli_connect("localhost","root","","employee_details");
	if(!$connect){
		die ("Connection Failed".mysqli_connect_error());
	}
?>