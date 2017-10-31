<?php include_once "./header.php"; ?>
<?php include_once "./inc/fn_util.php"; myTitle("보도자료 | 한국관광공사"); ?>
<?php

	$no = $_GET['no'];

	$title = $_POST['title'];
	 ##### admin 비밀번호여야지 통과

	$content = $_POST['content'];
	


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
		
		
		$sql= "update nature SET atitle='$title', acont='$content', adate='now()' where ano='$no'";
		$result = mysqli_query($con, $sql) or die (mysqli_error($con));
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		echo "<script>alert('수정완료');</script>";
		echo "<meta http-equiv='refresh' content='0; url=./nature_detail.php?no=$no'/>";
//	}
}
	else { echo "<script>alert('비밀번호를 확인해주세요'); history.go(-1); </script>"; } ?>
	
	<div class="subMain" id="main">
		<div class="contName cn1">
			<div class="container">
				<h2>Advenure Travel</h2>
			</div>
		</div>
		<!--배경깔고 h3 오른쪽으로 글씨체 변경-->
		<div class="container">
			<div class="contBody">
				<div class="sub">
					<h3><span>대한민국</span>파헤치기</h3>
					<ul>
						<li><a href="#">자연</a></li>
						<li><a href="#">어드벤처</a></li>
						<li><a href="#">먹을거리</a></li>
						<li><a href="#">숙박</a></li>
					</ul>
				</div>
				<div class="contArea">
					<h3>어드벤처</h3>
					<ol>
						<li>홈</li>
						<li>대한민국 파헤치기</li>
						<li>어드벤처</li>
					</ol>

					<h4>이달의 추천여행</h4>
					<p>2경중 하나인 강동·주전 몽돌해변은 보석처럼 반짝이는 몽돌과 하얗게 부서지는 파도가 어우러져 절경을 이루고 있다. 바닷가하면 흔히 속초, 강릉, 동해, 삼척을 잇는 강원도 쪽만 연상하지만 울산의 주전에서 감포로 이어지는 동해안도 이에 못지않은 사람들이 찾고 있는 곳이다. 특히 산과 바다를 끼고 이어지는 국도는 드라이브 코스로 으뜸이며 주변에 볼만한 곳들도 많아 겨</p>
				</div>
			</div>
		</div>
		
				<div class="container">
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
									<?=$row['vtitle']?>
								</td>
							</tr>
							<tr>
								<th scope="row">내용</th>
								<td>
									<?=$row['vcont']?>
								</td>
							</tr>
							<tr>
								<th scope="row">조회수</th>
								<td>
									<?=$row['vview']?>
								</td>
								<?php
						$sql = "UPDATE adventure
								SET vview = vview+1
								WHERE vno='$detail'";
						$result = mysqli_query($con, $sql) or die (mysqli_error($con));
									
						mysqli_close($con);
					?>
							</tr>
						</tbody>

					</table>
					<ul class="boardsub">
						<li><a href="./adventure.php">[목록보기]</a></li>
						<?php
					if ( $_SESSION['userid'] == "admin" ){ ?>
							<li><a href="./adventure_editform.php?no=<?=$detail?>">[수정하기]</a></li>
							<li><a href="./adventure_deleteform.php?no=<?=$detail?>">[삭제하기]</a></li>
					<?php } else if ( empty($_SESSION['userid']) ){?>
							
							<?php } ?>
					</ul>
				</div>
				</div>
				

<?php
include_once "./footer.php"; 
?>
