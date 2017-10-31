<?php include_once "./header.php"; ?>
<?php include_once "./inc/fn_util.php"; myTitle("홍보물신청 | 한국관광공사"); ?>

<?php

	$no = $_GET['no'];
	
	$sql = "select * from request where rno='$no'";

	$result = mysqli_query($con, $sql) or die ( mysqli_error($con) );
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
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

				</div>
			</div>
		</div>
				<div class="container">
					<form action="./request_edit.php?no=<?=$no?>" method="post">
			<table id="peopleTable"  class="list">
				<caption>WRITE</caption>
				<colgroup>
					<col width="30%"/>
					<col width="*"/>
				</colgroup>
				<thead>
					<tr>
						<th scope="col" colspan="2">게시물 수정하기</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row"><label for="userid">아이디</label><input type="text" name="userid" id="userid" value="<?=$row['userid']?>" readonly></th>
					</tr>
					<tr>
						<th scope="row"><label for="title">제목</label></th>
						<td><input type="text" name="title" id="title" value="<?=$row['rtitle']?>"/></td>
					</tr>
					<tr>
						<th scope="row"><label for="name">이름</label></th>
						<td><input type="text" id="name" name="name" value="<?=$row['rname']?>" readonly></td>
					</tr>
					<tr>
						<th scope="row"><label for="pass">비밀번호</label></th>
						<td><input type="password" id="pass" name="pass"/><span>* 수정, 삭제시 필수!</span></td>
					</tr>
					<tr>
						<th scope="row"><label for="date">기간</label></th>
						<td><input type="text" name="date" id="date" rows="5" cols="56" value="<?=$row['rdate']?>" readonly/></td>
					</tr>
					<tr>
						<th scope="row"><label for="content">내용</label></th>
						<td><textarea name="content" id="content" rows="5" cols="56"><?=$row['rcont']?></textarea></td>
					</tr>
					<tr class="menubars">
						<th colspan="2">
							<input type="submit" value="저장"/>
							<input type="reset" value="다시쓰기"/>
							<input type="button" value="목록" onclick="history.back(-2)" />
						</th>
					</tr>
				</tbody>
			</table>
		</form>
				</div>
</div>
				
					


	<?php include_once "./footer.php"; ?>

