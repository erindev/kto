<?php
	include_once "./db_connect.php";

	$userid = $_POST["username"];
	$userpass = $_POST["password"];
	
	


	$sql = "select * from kto_members where userid='admin'";
	$result = mysqli_query($con, $sql) or die (mysqli_error($con));

	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

	if ( $userid == $row['userid'] && $userpass == $row['userpass']) {
		
		session_start(); $_SESSION['userid']=$userid; $_SESSION['now']=$userid.date("Ymd His"); //날짜+시간
		echo "alert('로그인에 성공했습니다')";
	}
	else { echo "<script>
						alert('아이디와 비밀번호를 확인해주세요');
						history.go(-1);
				</script>";}

	
	//6. db종료
	mysqli_free_result( $result );
	mysqli_close($con);
	//7. board.php로 파일 넘기기
	echo "<meta http-equiv='refresh' content='0; URL=../admin.php?userdata=$userid'/>";

?>