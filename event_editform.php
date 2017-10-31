<?php include_once "./header.php"; ?>
<?php include_once "./inc/fn_util.php"; myTitle("보도자료 | 한국관광공사"); ?>

<?php

	$no = $_GET['no'];
	
	$sql = "select * from event where eno='$no'";

	$result = mysqli_query($con, $sql) or die ( mysqli_error($con) );
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
?>

 <div class="subMain" id="main">
        <div class="contName cn2">
            <div class="container">
				<h2>Event</h2>
            </div>
        </div> <!--배경깔고 h3 오른쪽으로 글씨체 변경-->
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
					<form action="./event_edit.php?no=<?=$no?>" method="post">
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
						<td><input type="text" name="title" id="title" value="<?=$row['etitle']?>"/></td>
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
						<th scope="row"><label for="edate">기간</label></th>
						<td>
						<input type="text" name="edate1" id="edate1" value="<?=$row['edate']?>"/>
						</td> 

					</tr>
					<tr>
						<th scope="row"><label for="content">내용</label></th>
						<td><textarea name="content" id="content" rows="5" cols="56"><?=$row['econt']?></textarea></td>
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

