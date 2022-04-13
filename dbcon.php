<?php

	$con = mysqli_connect('localhost','root','','student_database');

	if($con == false){
		echo "Connection not successful";
	}
	
	// mysqli_set_charset($con,"utf8");
?>
