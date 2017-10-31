<?php include_once "./header.php"; ?>
<?php include_once "./inc/fn_util.php"; myTitle("채용안내 | 한국관광공사"); ?>
<?php

	$no = $_GET['no'];

	$title = $_POST['title'];
	 ##### admin 비밀번호여야지 통과

	$content = $_POST['content'];
	$date = $_POST['date'];


	$all = "select userpass from kto_members where userid='admin'";
	$all_result = mysqli_query($con, $all);
	$all_row = mysqli_fetch_array($all_result, MYSQLI_ASSOC);

	if ( $_POST['pass'] == $all_row['userpass'] )
	{ 
//		if ( $date == "") {ccont='$content'
//				
//		$sql= "update event SET etitle='$title', econt='$content' where eno='$no'";
//		$result = mysqli_query($con, $sql) or die (mysqli_error($con));
//		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//		
//		echo "<script>alert('수정완료');</script>";
//		echo "<meta http-equiv='refresh' content='0; url=./event_detail.php?no=$no'/>";
//			
//		} else {
		
		
		$sql= "update hire SET htitle='$title',hcont='$content', hdate='$date' where hno='$no'";
		$result = mysqli_query($con, $sql) or die (mysqli_error($con));
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		echo "<script>alert('수정완료');</script>";
		echo "<meta http-equiv='refresh' content='0; url=./hire_detail.php?no=$no'/>";
//	}
}
	else { echo "<script>alert('비밀번호를 확인해주세요'); history.go(-1); </script>"; } ?>
	
	<div class="subMain" id="main">
	<div class="contName cn1">
		<div class="container">
			<h2>Hiring</h2>
		</div>
	</div>
	<!--배경깔고 h3 오른쪽으로 글씨체 변경-->
	<div class="container">
		<div class="contBody">
			<div class="sub">
				<h3>커뮤니티</h3>
				<ul>
					<li><a href="#">행사안내</a></li>
					<li><a href="#">공지사항</a></li>
					<li><a href="#">채용안내</a></li>
				</ul>
			</div>
			<div class="contArea">
				<h3>채용안내</h3>
				<ol>
					<li>홈</li>
					<li>한국관광공사</li>
					<li>채용안내</li>
				</ol>

				<h4>한국관광공사 공채 채용 안내</h4>
				<p>한국관광공사는 다양한 인재와 기술을 바탕으로 세계인이 사랑하는 대한민국을 위해 노력합니다.
					<span>인재를 중시하고 키우는 기업문화, '기업이 곧 사람'이라는 신념을 바탕으로 모든 사람이 각자 고유한 역량과 잠재력을 가진 우수한 인재이며, 세상을 움직이는 원동력이라고 믿습니다.</span></p>
			</div>
		</div>
	</div>
	<div class="hire">
		<div class="container">
			<p>집중적으로 자신에게 동기를 부여하는 사람, 열정을 가진 사람을 채용하라.<span>
Do hire people who are enthusiastic, self-motivated, and passionate.</span> 단순히 일자리를 원하는 사람은 채용하지 마라.<span>
Don’t hire people who just want a job.</span></p>
			<ul>
				<li>
					<a href="#" title="지원/결과"><img src="./images/file1.png" alt="지원 아이콘"><b>지원하기/결과조회</b><span>새로운 지원서를 작성하거나 결과를 확인합니다</span></a>
				</li>
				<li class="mid">
					<a href="#" title="FAQ"><img src="./images/file3.png" alt="질문 아이콘"><b>FQA</b><span>자주 묻는 질문 및 궁금한 내용을 찾아보세요</span></a>
				</li>
				<li>
					<a href="#" title="Q&A"><img src="./images/file5.png" alt="질문 아이콘"><b>Q&A</b><span>채용과 관련된 문의사항을 질문하고 답변을 받아보세요</span></a>
				</li>
			</ul>
			<p class="cp2"></p>
		</div>
		
	</div>
	<div class="hr">
	<div class="container">
		<h4>채용공고</h4>
		<p>채용공고 및 안내를 확인해 보시기 바랍니다.</p>
					<table class="list">
						<colgroup>
							<col width="30%" />
							<col width="*" />
						</colgroup>
						<thead>
							<th colspan="2">상세페이지</th>
						</thead>
						<tbody>
							<tr>
								<th scope="row">제목</th>
								<td>
									<?=$row['htitle']?>
								</td>
							</tr>
							<tr>
								<th scope="row">내용</th>
								<td>
									<?=$row['hcont']?>
								</td>
							</tr>
							<tr>
								<th scope="row">기간</th>
								<td>
									<?=$row['hdate']?>
								</td>
							</tr>
							<tr>
								<th scope="row">조회수</th>
								<td>
									<?=$row['hview']?>
								</td>
								<?php
						$sql = "UPDATE hire
								SET hview = hview+1
								WHERE hno='$detail'";
						$result = mysqli_query($con, $sql) or die (mysqli_error($con));
									
						mysqli_close($con);
					?>
							</tr>
						</tbody>

					</table>
					<ul class="boardsub">
						<li><a href="./hire.php">[목록보기]</a></li>
						<?php
					if ( $_SESSION['userid'] == "admin" ){ ?>
							<li><a href="./hire_editform.php?no=<?=$detail?>">[수정하기]</a></li>
							<li><a href="./hire_deleteform.php?no=<?=$detail?>">[삭제하기]</a></li>
					<?php } else if ( empty($_SESSION['userid']) ){?>
							
							<?php } ?>
					</ul>
				</div>

<?php
include_once "./footer.php"; 
?>
