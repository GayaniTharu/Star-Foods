<?php
	
	$conn = mysqli_connect('localhost','root','','foodie-moodie');

	if ($conn == false) 
	{
		echo "Database connection failed";
	}
?>