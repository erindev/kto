<?php
	include_once "./db_connect.php";

	$utype = $_POST['type'];
	$uname = $_POST['uname'];
	$uemail = $_POST['email'];
	$ucall = $_POST['tel'];
	$utitle = $_POST['title'];
	$ucont = $_POST['content'];


	
	$sql = "insert into customer
			(utype, uname, uemail, ucall, utitle, ucont, udate)
			values ('$utype','$uname','$uemail','$ucall','$utitle','$ucont',now())";
	
	$result = mysqli_query($con, $sql) or die (mysqli_error($con));

	if ( $result ) { echo "<script>alert('정상적으로 문의가 완료되었습니다');</script>"; } 

echo "<meta http-equiv='refresh' content='0; URL=../customerSound.php'/>";
	
?>