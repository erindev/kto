<?php
	include_once "./inc/db_connect.php";
?>
<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="utf-8">
	<title>어드벤처 게시글 삭제</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

<body>
	<div class="basic">
		<h3>데이터 삭제 비밀번호 확인</h3>
		<form action="./adventure_delete.php?no=<?=$_GET['no']?>" method="post" id="delform">
			<fieldset>
				<legend> 비밀번호확인</legend>
				<p>
					<label for="pass">관리자(Admin) 비밀번호 </label>
					<input type="password" id="pass" name="pass" size="20" maxlength="10" />
					<input type="submit" value="확인" />
					<input type="reset" value="취소" onclick="history.back(-1)" />
				</p>
			</fieldset>
		</form>
	</div>
