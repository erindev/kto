/*jslint browser: true*/
/* global $, jQuery, alert*/
/*jshint strict: true */
$.browser = {};

$(document).ready(function () {
	// searchResult.html
	"use strict";
	$(".searchResult ul li:first").css({
		"backgroundColor": "#fff",
		"borderTop": "2px solid #ef4000",
		"borderLeft": "1px solid #ef4000"
	});
	$(".searchResult ul li>a>span").css({
		"color": "#ef4000"
	});


	//recommendTravel.html

	var firstSrc1 = $(".list>li:eq(0) .listImage>li:eq(1) img").attr("src");
	var firstSrc2 = $(".list>li:eq(1) .listImage>li:eq(1) img").attr("src");
	var firstSrc3 = $(".list>li:eq(2) .listImage>li:eq(1) img").attr("src");

	$(".list>li:eq(0) .firstPhoto").append("<img src=" + firstSrc1 + " title=''/>");
	$(".list>li:eq(1) .firstPhoto").append("<img src=" + firstSrc2 + " title=''/>");
	$(".list>li:eq(2) .firstPhoto").append("<img src=" + firstSrc3 + " title=''/>");

	$(".list>li .listImage>li").click(function () {
		$(this).siblings(".firstPhoto").find("img").attr("src", $(this).find("img").attr("src"));
	});

	var m = new Date();
	var thisMonth = m.getMonth() + 1;
	$(".monthView dl dd").eq(thisMonth - 1).css({
		"backgroundColor": "yellow",
		"borderRadius": "50%"
	});
	$(".monthView dl dd").eq(thisMonth - 1).find("a").addClass("monthClick");
	$(".rec_goods").find("h4").prepend("<span>" + thisMonth + "</span>");


	$(".monthView dl dd a").click(function () {
		$(".rec_goods").find("h4 span:eq(0)").empty();
		$(".monthView dl dd a").removeClass("monthClick");
		$(".monthView dl dd").css({
			"backgroundColor": "rgba(0,0,0,0)"
		});
		$(this).parent("dd").css({
			"backgroundColor": "yellow",
			"borderRadius": "50%"
		});
		$(this).addClass("monthClick");
		var whatMonth = $(this).parent("dd").index();


		$(".rec_goods").find("h4").prepend("<span>" + whatMonth + "</span>");

		return false;
	});

	//	guideBook.html


	// joining.html
	$("#no").click(function () {
		$(this).attr("name", "no");
	});
	$("#yes").click(function () {
		$(this).attr("name", "no");
	});

	//	step 초기화
	$(".step").hide();
	$(".step.st1").show();
	$(".fourstep li:eq(0)").addClass("highlight");

	///////////////st1
	$(".st1 li").click(function () {
		$(".step").hide();
		$(".st2").show();
		$(".fourstep li").removeClass("highlight");
		$(".fourstep li:eq(1)").addClass("highlight");
	});
	///////////////st2
	//var st2check = $(".st2 input[type='checkbox']");



	$(".st2 input[type='checkbox']").click(function () {

		if ($(".st2 input[type='checkbox']:checked").length == 2) {
			$("#all_check:checked").attr("checked", true);

		} else if ($(".st2 input[type='checkbox']:checked").length < 2) {
			$("#all_check").prop("checked", false);
		}
	});



	$(".st2 input[type='radio']").click(function () {
		$(".st2 input[type='checkbox']").attr("checked", true);
	});

	if ($(".st2 input[type='radio']").prop("checked", false)) {
		$(".st2 input[type='radio']").click(function () {
			$(".st2 input[type='checkbox']").prop("checked", true);
		});
	}







	$(".st2 input[type='submit']").click(function (e) {
		e.preventDefault();
		if ($(".st2 input[type=checkbox]:checked").length == 1) {
			alert("약관 동의에 모두 체크해주세요");
			$(".st2 input[type=checkbox]").not($(".st2 input[type=checkbox]:checked")).focus();
		} else if ($(".st2 input[type=checkbox]:checked").length == 2) {
			alert("동의 확인 완료! 다음단계로 넘어갑니다.");
			$(".st2").hide();
			$(".st3").show();
			$(".fourstep li").removeClass("highlight");
			$(".fourstep li:eq(2)").addClass("highlight");
		} else if ($(".st2 input[type=checkbox]:checked").length === 1 || $(".st2 input[type=checkbox]:checked").length === 0) {
			alert("약관 동의에 모두 체크해주세요");
			$(".st2 input[type=checkbox]:eq(0)").focus();
		}

	});

	$(".st3 #userid").keydown(function () {
		if ($(this).length < 4) {

		}
	});

	$(".st3 #emailaddress").click(function () {
		$("#useremail2").val($(".st3 #emailaddress:selected").val());
	});


	///////////////st3

	var userInfo = [$("#username"), $("#userid"), $("#userpass"), $("#userpass2"), $("#phone1"), $("#phone2"), $("#phone3")];
	var userInfoCont = ["성명", "아이디", "비밀번호", "비밀번호 재확인", "휴대폰번호 첫번째 칸", "휴대폰번호 두번째 칸", "휴대폰번호 세번째 칸"];

	$("#st3").submit(function () {

		for (var v = 0; v < userInfo.length; v++) {
			if (userInfo[v].val() === "") {
				alert("다음 칸이 빈칸입니다. 채워주세요 : " + userInfoCont[v]);
				userInfo[v].focus();
				return false;
			}
		}


		if ($("#userpass").val() != $("#userpass2").val()) {
			alert("비밀번호가 서로 일치하지 않습니다. 확인해주세요");
			return false;
		}


	});

	$("#st3 #prevbtn").click(function () {
		$(".step").hide();
		$(".step.st2").show();
	});

	$("#postcode").click(function () {
		alert("우편번호 검색을 시작합니다");

		//new:공간 마련 = 기능을 뭉쳐놓은 뭔가를 사용하겠다!
		new daum.Postcode({
			oncomplete: function (data) {
				$("#post1").val(data.postcode1); //우편번호 앞자리
				$("#post2").val(data.postcode2); //우편번호 앞자리
				$("#address").val(data.address); //기본(지번)주소
				$("#address2").focus();
				// 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분입니다.
				// 예제를 참고하여 다양한 활용법을 확인해 보세요.
			}
		}).open(); //open() = 팝업 모드를 여는 것 (다음에서 만들어 놓은 것임).

	});


	$("#emailaddress").change(function () {
		$("#emailaddress option:selected").each(function () {
			if ($(this).val() == 'default') {
				$("#useremail2").val("");
				$("#useremail2").attr("disabled", false); //활성화
			} else {
				$("#useremail2").val($(this).attr("value"));
				$("#useremail2").attr("disabled", true); //비활성화
				$("#useremail2").css({
					"backgroundColor": "#eee"
				});
			}
		});
	});

	//st4
	var current_url = document.URL;
	//console.log(current_url);


	if (current_url.indexOf("http://127.0.0.1:8081/Portfolio_server/KTO/joining.php?userdata=") == 0) {
		$(".step").hide();
		$(".st4").show();
		$(".fourstep li").removeClass("highlight");
		$(".fourstep li:eq(3)").addClass("highlight");
	}


	//	login.html
	var userInfo = [$("#userid"), $("#userpass")];
	var userInfoCont = ["아이디", "비밀번호"];

	$("#loginForm").submit(function () {
		for (var v = 0; v < userInfo.length; v++) {
			if (userInfo[v].val() == "") {
				alert(userInfoCont[v] + "가 빈칸입니다. 채워주세요");
				userInfo[v].focus();
				return false;
			}
		}
	});





	//food_saty.html
	$(".kt_category dl>dt").show();
	$(".kt_category dl dt:eq(0)").addClass("fsHigh");
	$(".kt_category dl dt:eq(0) a").css({
		"color": "#fff"
	});
	$(".kt_category dl dd").hide();
	$(".kt_category dl dd:eq(0)").show();

	$(".kt_category dt").click(function () {
		$(".kt_category dt").removeClass("fsHigh");
		$(".kt_category dt a").css({
			"color": "#000"
		});

		$(this).addClass("fsHigh");
		$(this).find("a").css({
			"color": "#fff"
		});
		$(".kt_category dd").hide();
		$(this).next("dd").show();
		return false;
	});



	//gnb5 PART
	$(".history dd").hide();
	$(".history dd:eq(0)").show();



	$(".history dt").click(function () {
		var nextdd = $(this).next("dd");
		nextdd.slideToggle();
		$(window).stop().animate({
			"scrollTop": $(this).offset().top
		});

		var nextddex = $(".history dd").not(nextdd);
		if (nextddex.show()) {
			nextddex.hide();
		}

		return false;
	});

	function scroll() {
		"use strict";
		for (var v = 0; v < 10; v++) {
			$(".bgline li").eq(v).fadeIn(800 * (v + 1));
		}
	}

	$(window).ready(function () {
		"use strict";
		$(".bgline li").hide();
		var max = 20;

		$(window).scroll(function () {
			var scrollPX = $(this).scrollTop();
			//console.log(scrollPX); //점점 올라가는 값

			if (scrollPX < max) {} else {
				setInterval(scroll(), 2000);
			}

		});
	});

	//	business.html

	$(".vision ul li").hide();
	var max = 5;

	$(window).scroll(function () {
		var scrollPX = $(this).scrollTop();
		//console.log(scrollPX); //점점 올라가는 값

		if (scrollPX < max) {

		} else {
			setInterval(vision(), 2000);
		}

	});

	function vision() {
		var visionLi = $(".vision ul li");
		$(".vision>h4").fadeIn("3000");
		$(".vision>b").fadeIn("3500");
		$(".vision>p").fadeIn("4000");
		for (var v = 0; v < visionLi.length; v++) {
			$(".vision ul li").eq(v).fadeIn(800 * (v + 1));
		}
	}

	$(function () {
		baloonUp();

		function baloonUp() {
			$('.bingle').animate({
				'top': "40%"
			}, 1000, null, baloonDown);
		}

		function baloonDown() {
			$('.bingle').animate({
				'top': "35%"
			}, 700, null, baloonUp);
		}
	});

	//	photo.html
	var albumCount = $(".album_photo li");
	//console.log(albumCount.length); //38개

	for (var v = 0; v < albumCount.length; v++) {
		albumCount.eq(v).append("<img src='./images/photo" + (v + 1) + ".jpg'>");
	}


	var firstPhoto = 0;
	albumCount.slice(firstPhoto, firstPhoto + 12).show();

	$(".loadMore a").click(function (e) {
		var visibleLastPhoto = $(".album_photo li:visible:last").index();

		e.preventDefault();
		albumCount.slice(firstPhoto, visibleLastPhoto + 10).show();

		if (visibleLastPhoto >= albumCount.length - 10) {
			alert("마지막 사진입니다");
			$(this).parent("p").remove();
		}

	});


	$(".album_photo>li").click(function () {

		if ($(this).find("img").length == 2) {
			$(this).find("img:eq(1)").remove();
			$(this).css("backgroundColor", "#fff");
			$(".album .select").attr({
				"value": "SELECT ALL"
			});
			$(".album .select").css({
				"backgroundColor": "#f9ba48",
				"color": "#000"
			});
		} else {
			$(this).find("img:eq(1)").remove();
			$(this).css({
				"cursor": "pointer",
				"backgroundColor": "#f9ba48"
			});

			$(".album .select").css({
				"backgroundColor": "#000",
				"color": "#eee"
			});
			$(".album .select").attr({
				"value": "UNSELECT"
			});
			$(this).append("<img class='ch' src='./images/checked.png' alt='사진선택'>");
		}

	});


	$(".album .select").click(function () {
		$(this).css({
			"cursor": "pointer"
		});

		if ($(".album_photo li img").length > albumCount.length) {

			$(".album_photo li").find("img:eq(1)").remove();
			$(this).attr({
				"value": "SELECT ALL"
			});
			$(".album_photo li").css({
				"backgroundColor": "#fff"
			});
			$(this).css({
				"backgroundColor": "#f9ba48",
				color: "#000"
			});

		} else {
			$(".album_photo li").append("<img class='ch' src='./images/checked.png' alt='사진선택'>");
			$(".album_photo li").css({
				"backgroundColor": "#f9ba48"
			});

			$(this).attr({
				"value": "UNSELECT"
			});
			$(this).css({
				"backgroundColor": "#000",
				"color": "#eee"
			});
		}
	});



	//	koreaInfo.html

	var city = [
		{
			"name": "jeju",
			"change": "./images/jeju.png"
		},
		{
			"name": "busan",
			"change": "./images/busan.png"
		},
		{
			"name": "gyeongB",
			"change": "./images/gyeongB.png"
		},
		{
			"name": "kangwon",
			"change": "./images/kangwon.png"
		},
		{
			"name": "gyeongB",
			"change": "./images/gyeongB.png"
		},
		{
			"name": "gyeongi",
			"change": "./images/gyeongi.png"
		},
		{
			"name": "incheon",
			"change": "./images/incheon.png"
		},

	]; // 배열안에 객체 담기 ... 

	//	console.log(Object.keys(city)[0]); // 제주
	//	console.log(city.jeju); //./images/jeju.png

	$("#imgmap area").mouseenter(function (e) {
		
		var changemap = $(this).attr("href");
		
		var imgsrc = city.filter(function (city) {
			return city.name == changemap
		});
		//console.log(imgsrc[0].change); // 경로(value) 

		$(".imgmap").attr("src", imgsrc[0].change);


	});


	//notice.html
	$(".board dd").hide();
	$(".board dd:eq(0)").show();

	$(".board dt a").click(function () {
		$(".board dd").hide();
		$(this).parent("dt").next("dd").show();
		return false;
	});

	//nature.html

	$(".kt_cont>li:eq(0)").css({
		"display": "block"
	});
	$(".koreaTrain .control li:eq(0) img").attr("src", "./images/m4_slide_btn_on.png");

	var imgList = $(".kt_cont>li");
	var nImgCount = imgList.length;
	var nIndex = 0;
	var koreaTrainSlide = setInterval(autoSlide2, 2000);

	function autoSlide2() {
		var next = (++nIndex % nImgCount);
		$(imgList.get(next - 1)).fadeOut();
		$(imgList.get(next)).fadeIn();
		$(".koreaTrain .control li img").attr({
			"src": "./images/m4_slide_btn.png"
		});
		$(".koreaTrain .control li:eq(" + next + ")").find("img").attr({
			"src": "./images/m4_slide_btn_on.png"
		});
	}

	var koreaTrain = true;

	$(".playing").find("a").click(function (e) {
		e.preventDefault();

		if (koreaTrain) {
			window.clearInterval(koreaTrainSlide);
			$(this).children("img").attr({
				"src": "./images/play.png"
			});
			koreaTrain = false;
		} else {
			koreaTrainSlide = setInterval(autoSlide2, 1500);
			koreaTrain = true;

			$(this).children("img").attr({
				"src": "./images/pause.png"
			});
		}
		return false;
	});

	//	custommerSound.html

	var userSound = [$("#devide1"), $("#tel"), $("#title"), $("#content")];
	var userSoundCont = ["구분 항목", "전화번호", "제목", "내용"];

	$("#writeForm").submit(function () {

		for (var v = 0; v < userSound.length; v++) {
			if (userSound[v].val() === "") {
				alert("다음 칸이 빈칸입니다. 채워주세요 : " + userSoundCont[v]);
				userSound[v].focus();
				return false;
			}
		}

		if ($("#agree1").is("selected") != true || $("#agree2").is("selected") != true) {
			alert("모두 동의를 해주셔야 합니다.");
			return false;
		}

	});

	//request.html

	var requestInfo = [$("#userid"), $("#rname"), $("#remail"), $("#rphone"), $("#post1"), $("#post2"), $("#raddress"), $("#rtitle"), $("#rcont")];
	var requestInfoCont = ["아이디", "비밀번호", "이메일", "연락처", "우편번호 첫번째 칸", "우편번호 두번째 칸", "상세주소", "제목", "내용"];

	$("#require form").submit(function () {
		for (var v = 0; v < requestInfo.length; v++) {
			if (requestInfoCont[v].val() == "") {
				alert(requestInfoCont[v] + "가 빈칸입니다. 채워주세요");
				requestInfo[v].focus();
				return false;
			}
		}
	});

});
