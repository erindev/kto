<?php
	include_once "./db_connect.php";

	$ctitle = htmlspecialchars($_POST['ctitle']);
	$ccont = htmlspecialchars($_POST['ccont']);
	$cdate = date("Y-m-d");
	$cview = 0;

	echo $cdate; //2017-07-22 080545

	$sql = "insert into community
			(ctitle,ccont,cdate)
			values
			('$ctitle','$ccont','$cdate')";

	$result = mysqli_query( $con, $sql ) or die ( mysqli_error($con) );

	if ( $result ) { echo "<script>alert('글쓰기가 성공했습니다');</script>"; } //07

	$sqlno = "select * from community where 'ctitle'='$ctitle'";
	$result2 = mysqli_query($con, $sqlno);
	$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);

	mysqli_free_result($result2);
	
	$cno = $row['cno'];

	echo "<meta http-equiv:'refresh'; content='0; url=../community.php'/>";

	
	mysqli_close($con);

	
?>