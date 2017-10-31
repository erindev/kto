<?php
	include_once "./db_connect.php";

	$htitle = $_POST['htitle'];
	$hdate = $_POST['hdate1'] . " ~ " . $_POST['hdate2'];
	$hcont = $_POST['hcont'];

	

	$sql = "insert into hire
			(htitle,hdate, hcont)
			values ('$htitle','$hdate','$hcont')";

	$result = mysqli_query($con, $sql) or die (mysqli_error($con));

	if ( $result ) { echo "<script>alert('[채용]글쓰기가 성공했습니다');</script>"; } //07

	$sqlno = "select * from hire where 'htitle'='$htitle'";
	$result2 = mysqli_query($con, $sqlno);
	$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
	$hview = 0;
	$id = $row['hno'];

	
echo "<meta http-equiv='refresh' content='0; URL=../hire.php'/>";
	
?>