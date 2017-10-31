<?php include_once "./header.php"; ?>
<?php include_once "./inc/fn_util.php"; myTitle("보도자료 | 한국관광공사"); ?>

<?php

	$no = $_GET['no'];
	
	$sql = "select * from food where fno='$no'";

	$result = mysqli_query($con, $sql) or die ( mysqli_error($con) );
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
?>

 <div class="subMain" id="main">
		<div class="contName cn6">
			<div class="container">
				<h2>Food Travel</h2>
			</div>
		</div>
		<!--배경깔고 h3 오른쪽으로 글씨체 변경-->
		<div class="container">
			<div class="contBody">
				<div class="sub">
					<h3><span>대한민국</span>파헤치기</h3>
					<ul>
						<li><a href="#">자연</a></li>
						<li><a href="#">액티비티</a></li>
						<li><a href="#">먹을거리</a></li>
						<li><a href="#">숙박</a></li>
					</ul>
				</div>
				<div class="contArea">
					<h3>먹을거리</h3>
					<ol>
						<li>홈</li>
						<li>대한민국 파헤치기</li>
						<li>먹을거리</li>
					</ol>
					<h4>전통음식부터 다양한 음식의 천국</h4>
					<p>2경중 하나인 강동·주전 몽돌해변은 보석처럼 반짝이는 몽돌과 하얗게 부서지는 파도가 어우러져 절경을 이루고 있다. 바닷가하면 흔히 속초, 강릉, 동해, 삼척을 잇는 강원도 쪽만 연상하지만 울산의 주전에서 감포로 이어지는 동해안도 이에 못지않은 사람들이 찾고 있는 곳이다. 특히 산과 바다를 끼고 이어지는 국도는 드라이브 코스로 으뜸이며 주변에 볼만한 곳들도 많아 겨</p>
					<form action="./food_edit.php?no=<?=$no?>" method="post">
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
						<td><input type="text" name="title" id="title" value="<?=$row['ftitle']?>"/></td>
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
						<td><textarea name="content" id="content" rows="5" cols="56"><?=$row['fcont']?></textarea></td>
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
					
				</div>

	<?php include_once "./footer.php"; ?>

