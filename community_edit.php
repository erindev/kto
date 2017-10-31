<?php include_once "./header.php"; ?>
<?php include_once "./inc/fn_util.php"; myTitle("보도자료 | 한국관광공사"); ?>
<?php

	$no = $_GET['no'];

	$title = $_POST['title'];
	 ##### admin 비밀번호여야지 통과

	$content = $_POST['content'];

	$sql = "select * from community WHERE cno='$no'";
	$result = mysqli_query($con, $sql) or die ( mysqli_error($con) );
	$row2 = mysqli_fetch_array($result, MYSQLI_ASSOC);

	$all = "select userpass from kto_members where userid='admin'";
	$all_result = mysqli_query($con, $all);
	$all_row = mysqli_fetch_array($all_result, MYSQLI_ASSOC);
	if ( $_POST['pass'] == $all_row['userpass'] )
	{ 
		mysqli_query($con, "update community
							SET ccont='$content' where cno='$no'" ) or die (mysqli_error($con));
		
		echo "<script>alert('수정완료');</script>";
		echo "<meta http-equiv='refresh' content='0; url=./community_detail.php?no=$no'/>";}

	else { echo "<script>alert('비밀번호를 확인해주세요'); history.go(-1); </script>"; } ?>
	
	<div class="subMain" id="main">
		<div class="contName cn1">
			<div class="container">
				<h2>Communication</h2>
			</div>
		</div>
		<!--배경깔고 h3 오른쪽으로 글씨체 변경-->
		<div class="container">
			<div class="contBody">
				<div class="sub">
					<h3><span>정부 3.0</span>보도자료</h3>
					<ul>
						<li><a href="#">CEO 인사말</a></li>
						<li><a href="#">경영이념</a></li>
						<li><a href="#">연혁</a></li>
						<li><a href="#">CI 소개</a></li>
						<li><a href="#">보도자료</a></li>
						<li><a href="#">정부 3.0</a></li>
						<li><a href="#">찾아오시는 길</a></li>
					</ul>
				</div>
				<div class="contArea">
					<h3>보도자료</h3>
					<ol>
						<li>홈</li>
						<li>한국관광공사</li>
						<li>보도자료</li>
					</ol>

					<h4>한국관광공사의 최신 보도자료를 제공해드립니다.
						<span>한국관광공사 보도자료저작물은 "공공누리"의 공공저작물 자유이용허락 표시제도에 따라
누구나 이용할 수 있습니다.</span><span class="nuri"><img src="./images/opentype01.gif" alt="공공누리 심볼"></span></h4>
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
									<?=$row['ctitle']?>
								</td>
							</tr>
							<tr>
								<th scope="row">날짜</th>
								<td>
									<?=$row['cdate']?>
								</td>
							</tr>
							<tr>
								<th scope="row">내용</th>
								<td>
									<?=$row['ccont']?>
								</td>
							</tr>
							<tr>
								<th scope="row">조회수</th>
								<td>
									<?=$row['cview']?>
								</td>
								<?php
						$sql = "UPDATE community
								SET cview = cview+1
								WHERE cno='$detail'";
						$result = mysqli_query($con, $sql) or die (mysqli_error($con));
									
						mysqli_close($con);
					?>
							</tr>
						</tbody>

					</table>
					<ul class="boardsub">
						<li><a href="./community.php">[목록보기]</a></li>
						<?php
					if ( $_SESSION['userid'] == "admin" ){ ?>
							<li><a href="./community_editform.php?no=<?=$detail?>">[수정하기]</a></li>
							<li><a href="./community_deleteform.php?no=<?=$detail?>">[삭제하기]</a></li>
					<?php } else if ( empty($_SESSION['userid']) ){?>
							
							<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
<?php
include_once "./inc/footer.php"; 
?>
