<?php include_once "./header.php"; ?>
<?php include_once "./inc/fn_util.php"; myTitle("채용안내 | 한국관광공사"); ?>

<?php

	$no = $_GET['no'];
	
	$sql = "select * from hire where hno='$no'";

	$result = mysqli_query($con, $sql) or die ( mysqli_error($con) );
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
?>

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
					<form action="./hire_edit.php?no=<?=$no?>" method="post">
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
						<th scope="row"><label for="title">제목</label></th>
						<td><input type="text" name="title" id="title" value="<?=$row['htitle']?>"/></td>
					</tr>
					<tr>
						<th scope="row"><label for="name">이름</label></th>
						<td>관리자(Admin)</td>
						<!-- 수정못하게 하려면 readonly 보통 일반적으로 이름은 수정이 안됨-->
					</tr>
					<tr>
						<th scope="row"><label for="pass">비밀번호</label></th>
						<td><input type="password" id="pass" name="pass"/><span>* 수정, 삭제시 필수! (관리자 비밀번호 입력)</span></td>
					</tr>
					<tr>
						<th scope="row"><label for="content">내용</label></th>
						<td><textarea name="content" id="content" rows="5" cols="56"><?=$row['hcont']?></textarea></td>
					</tr>
					<tr>
						<th scope="row"><label for="date">기간</label></th>
						<td><input type="text" name="date" id="date" value="<?=$row['hdate']?>"></td>
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
		</div>
					
	<?php include_once "./footer.php"; ?>

