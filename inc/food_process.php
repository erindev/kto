<?php
	include_once "./db_connect.php";

	$ftitle = $_POST['ftitle'];
	$fcity = $_POST['fcity'];
	$fcont = $_POST['fcont'];
	$fpart = $_POST['fpart'];

	$target_dir = "food_uploads/"; // 올릴파일이름잡기
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // 전체 경로: uploads/filename
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


	$sql = "insert into food
			(ftitle,fcity,fcont, fimage,fpart)
			values ('$ftitle','$fcity','$fcont','$target_file','$fpart')";

	$result = mysqli_query($con, $sql) or die (mysqli_error($con));

	if ( $result ) { echo "<script>alert('[먹거리]글쓰기가 성공했습니다');</script>"; } //07

	$sqlno = "select * from food where 'ftitle'='$ftitle'";
	$result2 = mysqli_query($con, $sqlno);
	$row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
	$eview = 0;
	$id = $row['eno'];

	
// 파일첨부해서 이미지가 있는지 없는지 확인하기
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// 업로드한 파일이 존재한다면
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// 업로드 파일 사이즈 체크
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "ERROR : 파일사이즈가 너무 커요!";
    $uploadOk = 0;
}

// 허용한 파일 확장자 체크
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "ERROR : JPG, JPEG, PNG & GIF 파일만 업로드 가능합니다.";
    $uploadOk = 0;
}

// 파일첨부를 했는지 안했는지 확인## 파일첨부버튼 눌렀는지
if ($uploadOk == 0) {
    echo "ERROR : 파일을 선택해주세요.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). "이 성공적으로 업로드 되었습니다.";
		
		echo "<script>alert($id);</script>";
		
		
		
    } else {
        echo "ERROR : 업로드에 실패했습니다.";
    }
}

echo "<meta http-equiv='refresh' content='0; URL=../food_stay.php'/>";
	
?>