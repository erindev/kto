<?php include_once "./header.php"; ?>
<?php include_once "./inc/fn_util.php"; myTitle("공지사항 | 한국관광공사"); ?>

<?php

	$detail = $_GET['no'];


	$mysql = "select * from request where rno='$detail'";

	$result = mysqli_query($con, $mysql) or die ( mysqli_error($con));

	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


$sql = "select userpass from kto_members where userid='admin'";
	$result2 = mysqli_query($con ,$sql) or die (mysqli_error($con));
	$row2 = mysqli_fetch_array($result2, MYSQLI_NUM);


	
?>
		<div class="subMain" id="main">
		<div class="contName cn4">
			<div class="container">
				<h2>
Application for promotional materials</h2>
			</div>
		</div>
		<!--배경깔고 h3 오른쪽으로 글씨체 변경-->
		<div class="container">
			<div class="contBody">
				<div class="sub">
					<h3>고객참여</h3>
					<ul>
						<li><a href="#">고객소리함</a></li>
						<li><a href="#">관광사진갤러리</a></li>
						<li><a href="#">홍보물신청</a></li>
						<li><a href="#">e-Book</a></li>
					</ul>
				</div>
				<div class="contArea">
					<h3>홍보물 신청</h3>
					<ol>
						<li>홈</li>
						<li>고객참여</li>
						<li>홍보물 신청</li>
					</ol>
					<h4>대한민국 관광 가이드북(홍보물) 신청하기</h4>
				</div><div class="conatainer">
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
						<?=$row['rtitle']?>
					</td>
				</tr>
				<tr>
					<th scope="row">신청자</th>
					<td>
						<?=$row['rname']?>
					</td>
				</tr>
				<tr>
					<th scope="row">내용</th>
					<td>
						<?=$row['rcont']?>
					</td>
				</tr>
				<tr>
					<th scope="row">상태</th>
					<td>
						<?=$row['rstatus']?>
					</td>
				</tr>
				<tr>
					<th scope="row">등록일</th>
					<td>
						<?=$row['rdate']?>
					</td>
				</tr>
				<tr>
					<th scope="row">조회수</th>
					<td>
						<?=$row['rview']?>
					</td>
					<?php
			$sql = "UPDATE request
					SET rview = rview+1
					WHERE rno='$detail'";
			$result = mysqli_query($con, $sql) or die (mysqli_error($con));

			mysqli_close($con);
		?>
				</tr>
				<?php
					if ( $_SESSION['userid'] == "admin" ){ ?>
			
				<tr>
					<th scope="row">상태설정(관리자만가능)</th>
					<td>
					<form action="./inc/request_process.php?no=<?=$row['rno']?>" method="post">
						<select name="rstatus" id="rstatus">
							<option value="접수완료">접수완료</option>
							<option value="대기중">대기중</option>
							<option value="배송중">배송중</option>
							<option default="미확인">미확인</option>
						</select>
						<input type="submit" value="상태반영하기">
						</form>
						
					
					</td>
				</tr>
				<?php } else if ( empty($_SESSION['userid']) ){?>
							
							<?php } ?>
			</tbody>

		</table>
		<ul class="boardsub">
			<li><a href="./request.php">[목록보기]</a></li>
			<li><a href="./request_editform.php?no=<?=$detail?>">[수정하기]</a></li>
			
			<?php
		if ( $_SESSION['userid'] == "admin" ){ ?>
				
				<li><a href="./request_deleteform.php?no=<?=$detail?>">[삭제하기]</a></li>
		<?php } else if ( empty($_SESSION['userid']) ){?>

				<?php } ?>
		</ul>
	</div>
			</div>
			</div>
</div>
	<?php include_once "./footer.php"; ?>
