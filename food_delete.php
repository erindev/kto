<?php include_once "./inc/db_connect.php"; 

	//삭제할 번호 넘겨받기, 비밀번호 넘겨받기
	$no = $_GET['no'];
	$userpass = $_POST['pass'];

	$sql = "select userpass from kto_members where userid='admin'";
	$result = mysqli_query($con ,$sql) or die (mysqli_error($con));
	$row = mysqli_fetch_array($result, MYSQLI_NUM);

	if ( $row[0] == $userpass ) {
		echo "<script>alert('일치합니다. 삭제되었습니다');</script>";

		$deletesql = "delete from food where fno='$no'";
		$resultdelete = mysqli_query($con, $deletesql) or die (mysqli_error($con));

		echo "<meta http-equiv='refresh' content='0; url=./food_stay.php?no=$no'/>";
	} else { 
	//비밀번호가 다르다면 비밀번호를 확인해주세요 알림창
		echo "<script>alert('일치하지않습니다');  history.go(-1); </script>";
	}

?>
