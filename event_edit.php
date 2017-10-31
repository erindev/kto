<?php include_once "./header.php"; ?>
<?php include_once "./inc/fn_util.php"; myTitle("보도자료 | 한국관광공사"); ?>
<?php

	$no = $_GET['no'];

	$title = $_POST['title'];
	 ##### admin 비밀번호여야지 통과

	$content = $_POST['content'];
	$date = $_POST['edate1'];


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
		
		
		$sql= "update event SET etitle='$title', econt='$content', edate='$date' where eno='$no'";
		$result = mysqli_query($con, $sql) or die (mysqli_error($con));
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		echo "<script>alert('수정완료');</script>";
		echo "<meta http-equiv='refresh' content='0; url=./event_detail.php?no=$no'/>";
//	}
}
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
					<h3>커뮤니티</h3>
               		<ul>
               			<li><a href="#">행사안내</a></li>
               			<li><a href="#">공지사항</a></li>
               			<li><a href="#">채용안내</a></li>
               			<li><a href="#">이벤트</a></li>
               		</ul>
                </div>
                <div class="contArea">
					<h3>이벤트</h3>
					<ol>
						<li>홈</li>
						<li>고객참여</li>
						<li>이벤트</li>
					</ol>
               		<h4>진행중인 이벤트</h4>   
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
									<?=$row['etitle']?>
								</td>
							</tr>
							<tr>
								<th scope="row">날짜</th>
								<td>
									<?=$row['edate1']?>
								</td>
								<td>
									<?=$row['edate2']?>
								</td>
							</tr>
							<tr>
								<th scope="row">내용</th>
								<td>
									<?=$row['econt']?>
								</td>
							</tr>
							<tr>
								<th scope="row">조회수</th>
								<td>
									<?=$row['eview']?>
								</td>
								<?php
						$sql = "UPDATE community
								SET eview = eview+1
								WHERE eno='$detail'";
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
include_once "./footer.php"; 
?>
