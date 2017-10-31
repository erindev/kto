<?php include_once "./header.php"; ?>
<?php include_once "./inc/fn_util.php"; myTitle("보도자료 | 한국관광공사"); ?>

<?php

	include_once "./inc/db_connect.php";
	$no = $_GET['no'];
	
	$sql = "select * from community where cno='$no'";

	$result = mysqli_query($con, $sql) or die ( mysqli_error($con) );
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
?>

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
					<form action="./community_edit.php?no=<?=$no?>" method="post">
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
						<td><input type="text" name="title" id="title" value="<?=$row['ctitle']?>"/></td>
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
						<!-- 비밀번호는 고객님이 직접 입력할 수 있도록 한다. 빈칸으로 비워두기?--> 
					<tr>
						<th scope="row"><label for="content">내용</label></th>
						<td><textarea name="content" id="content" rows="5" cols="56"><?=$row['ccont']?></textarea></td>
					</tr>
					<tr class="menubars">
						<th colspan="2">
							<input type="submit" value="저장"/>
							<input type="reset" value="다시쓰기"/>
							<input type="button" value="목록" onclick="history.back(-1)" />
						</th>
					</tr>
				</tbody>
			</table>
		</form>
				</div>
			</div>
		</div>
	</div>
	<?php include_once "./footer.php"; ?>

