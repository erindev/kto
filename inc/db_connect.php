<?php
	header("Content-type:text/html; charset=utf-8");
	$con = mysqli_connect("localhost","yjkang3530","k1142002","yjkang3530");
	if( mysqli_connect_errno() ) { echo " FAIL : " . mysqli_connect_error(); exit();}
	#else { echo "SUCCESS"; }

	mysqli_set_charset($con, "utf8");
?>