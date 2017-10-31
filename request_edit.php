<?php include_once "./header.php"; ?>
<?php include_once "./inc/fn_util.php"; myTitle("홍보물신청 | 한국관광공사"); ?>
<?php

	$no = $_GET['no'];

	$title = $_POST['title'];

	$content = $_POST['content'];
	$name = $_POST['name'];
$userid = $_POST['userid'];


	$all = "select userpass from kto_members where userid='$userid'";
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
		
		
		$sql= "update request SET rtitle='$title', rcont='$content', rdate='now()' where rno='$no'";
		$result = mysqli_query($con, $sql) or die (mysqli_error($con));
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		echo "<script>alert('수정완료');</script>";
		echo "<meta http-equiv='refresh' content='0; url=./request_detail.php?no=$no'/>";
//	}
}
	else { echo "<script>alert('비밀번호를 확인해주세요'); history.go(-1); </script>"; } ?>
	
	<div class="subMain" id="main">
		<div class="contName cn1">
			<div class="container">
				<h2>Notice</h2>
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
					<h3>공지사항</h3>
					<ol>
						<li>홈</li>
						<li>커뮤니티</li>
						<li>공지사항</li>
					</ol>

					<h4>한국관광공사 소식</h4>
					<p>2경중 하나인 강동·주전 몽돌해변은 보석처럼 반짝이는 몽돌과 하얗게 부서지는 파도가 어우러져 절경을 이루고 있다. 바닷가하면 흔히 속초, 강릉, 동해, 삼척을 잇는 강원도 쪽만 연상하지만 울산의 주전에서 감포로 이어지는 동해안도 이에 못지않은 사람들이 찾고 있는 곳이다. 특히 산과 바다를 끼고 이어지는 국도는 드라이브 코스로 으뜸이며 주변에 볼만한 곳들도 많아 겨</p>
				<div class="container">
					<table class="list">
						<colgroup>
							<col width="30%" />
							<col width="*" />
						</colgroup>
						<thead>
							<th colspan="2">수정결과확인</th>
						</thead>
						<tbody>
							<tr>
								<th scope="row">제목</th>
								<td>
									<?=$row['ttitle']?>
								</td>
							</tr>
							<tr>
								<th scope="row">내용</th>
								<td>
									<?=$row['tcont']?>
								</td>
							</tr>
							<tr>
								<th scope="row">조회수</th>
								<td>
									<?=$row['tview']?>
								</td>
								<?php
						$sql = "UPDATE notice
								SET tview = tview+1
								WHERE tno='$detail'";
						$result = mysqli_query($con, $sql) or die (mysqli_error($con));
									
						mysqli_close($con);
					?>
							</tr>
						</tbody>

					</table>
					<ul class="boardsub">
						<li><a href="./notice.php">[목록보기]</a></li>
						<?php
					if ( $_SESSION['userid'] == "admin" ){ ?>
							<li><a href="./request_deleteform.php?no=<?=$detail?>">[삭제하기]</a></li>
					<?php } else if ( empty($_SESSION['userid']) ){?>
							
							<?php } ?>
					</ul>
				</div>
				</div>
				

<?php
include_once "./footer.php"; 
?>
