<?php include_once "./inc/db_connect.php";   ?>

<?php
	$detail = $_GET['no'];
	$mysql = "select * from community where no='$detail'";

	$result = mysqli_query($con, $mysql) or die (mysqli_error($con) );
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

?>
<?php include_once "./inc/header.php";   ?>

		<table summary="QNA DETAIL">
			<colgroup>
				<col width="30%"/>
				<col width="*"/>
			</colgroup>
			<thead>
				<th colspan="2">상세페이지</th>
			</thead>
			<tbody>
				<tr>
					<th scope="row">제목</th>
					<td><?=$row['title']?></td>
				</tr>
				<tr>
					<th scope="row">이름</th>
					<td><?=$row['name']?></td>
				</tr>
				<tr>
					<th scope="row">이메일</th>
					<td><?=$row['email']?></td>
				</tr>
				<tr>
					<th scope="row">조회수</th>
					<td><?=$row['view']?></td>
					<?php
						$sql = "UPDATE multiboard
								SET view = view+1
								WHERE no='$detail'";
						mysqli_query ( $con, $sql ) or die (mysqli_query($con));
						//테이블표 받아왔으니 테이블 해지
						mysqli_free_result( $result);
						mysqli_close($con);
					?>
				</tr>
				<tr>
					<th scope="row">날짜</th>
					<td><?=$row['wdate']?></td>
				</tr>
				<tr>
					<th scope="row">내용</th>
					<td><?=$row['content']?></td>
<!-- 				</tr>
							<tr class="menubars">
						<td colspan="@">
							<input type="button" value="목록보기" onclick="history.back(-1)"/>
							<input type="button" value="답글달기"/>
							<input type="button" onclick="location.href='./02_board_editform.php?no=<?=$no?>'" value="다시쓰기"/>
							<input type="button" value="삭제" />
						</td>
				</tr> -->
			</tbody>
			<ul>
				<li><a href="./01_board.php">[목록보기]</a></li>
				<li><a href="./02_board_editform.php.php?no=<?=$detail?>">[수정하기]</a></li>
				<li><a href="./board_delform.php?no=<?=$detail?>">[삭제하기]</a></li>
			</ul>
		</table>
<?php include_once "./inc/footer.php";   ?>