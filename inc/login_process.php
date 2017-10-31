<?php
	include_once "./db_connect.php";

	$userid = $_POST["userid"];
	$userpass = $_POST["userpass"];
	
	

	//5. 디비에 데이터 확인하고 데이터가 비밀번호와 아이디가 맞는지 확인하기

	$sql = "select count(*) from kto_members where userid='$userid' AND userpass='$userpass'";
	$result = mysqli_query( $con, $sql ); // 표로 데이터 가져오기

	$row = mysqli_fetch_array( $result, MYSQLI_NUM ); // 줄로 데이터 가져오기
	
	//5-2) 만약 id와 pass라는 데이터가 1개라면 로그인 성공
	if ( $row[0] == 1 ) {

		//1.로그인에 성공했을 때 SESSION 설정 및 시작하기. [원하는 변수명 쓰기]
		//세션은 여러개 사용이 가능하다. 하지만 설정을 많이 해놓으면 서버 과부화로 무거워진다. 그러므로 최소화! 꼭 필요한것만!
		//세션 사용할 때는 편집이 들어있기 전에 설정해야 한다 ex) echo 로 출력하기 등.
		//세션으로 설정해주면 해당 변수를 다른 php파일에서도 사용할 수 있다!!! (현재 php 변수 활용의 한계 극복)
		session_start(); $_SESSION['userid']=$userid; $_SESSION['now']=$userid.date("Ymd His"); //날짜+시간

		
		echo "alert('로그인에 성공했습니다')";
	
	} 
	else { echo "<script>
						alert('아이디와 비밀번호를 확인해주세요');
						history.go(-1);
				</script>";}




	//5-1) members라는 테이블에서 id와 pass를 두개다 일치하는 데이터 가져오기
	$useridInfo = "select * from kto_members where userid = '$userid' "; /// 입력한 아이디 애

		$useridInfo_result = mysqli_query ( $con, $useridInfo ) or die ( mysqli_error($con) );
		$inputuserid = mysqli_fetch_array( $useridInfo_result, MYSQLI_ASSOC );	
		
	$userpassInfo = "select * from kto_members where userpass = '$userpass'"; /// 입력한 패스워드 애
		$userpassInfo_result = mysqli_query ( $con, $userpassInfo ) or die (mysqli_error($con) );
		$inputuserpass = mysqli_fetch_array( $userpassInfo_result, MYSQLI_ASSOC);
		
		if ( $inputuserid['userpass'] == $inputuserpass['userpass'] ) { echo "비밀번호 일치"; }
		else {echo "비밀번호 불일치";}

	


	
	//6. db종료
	mysqli_free_result( $result );
	mysqli_close($con);
	//7. board.php로 파일 넘기기
	echo "<meta http-equiv='refresh' content='0; URL=../index.php?userdata=$userid'/>";

?>