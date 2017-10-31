<?php
	include_once "./db_connect.php";

	$username = $_POST['username'];
	$userid = $_POST['userid'];
	$userpass = $_POST['userpass'];
	$useremail = $_POST['useremail'] . "@" . $_POST['emailaddress'];




	$userphone = $_POST['phone1'] . "-" . $_POST['phone2'] . "-" . $_POST['phone3'];
	$usersms = $_POST['sms'];

	$sql = "insert into kto_members (username,userid,userpass,useremail,userphone,sms,joindate)
	values ('$username','$userid','$userpass','$useremail','$userphone','$usersms', now())";
	
	$result = mysqli_query ($con, $sql) or die (mysqli_error($con));
	

	mysqli_close( $con );

	echo "<meta http-equiv='refresh' content='0; URL=../joining.php?userdata=$userid'/>";


?>