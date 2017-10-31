/*jslint browser: true*/
/* global $, jQuery, alert*/
/*jshint strict: true */
$.browser = {};

$(document).ready(function () {

	//위로가기(TOP BTN)
	"use strict";
	$("#top").hide(); //1
	var mouse = $("#top img:eq(1)");
	mouse.css({
		"width": "30px",
		"height": "30px"
	});

	$(".tc>.ctr").removeAttr("href");

	$(window).scroll(function () {
		if ($(this).scrollTop() > 300) {
			$("#top").fadeIn(1000);
			$("#top").css({
				"position": "fixed",
				"top": "65%"
			});
			mouse.fadeToggle(1000);

		} else {
			$("#top").fadeOut(1000);
		}
	});

	$("#top").click(function (e) {

		e.preventDefault(); // a태그의 href로 넘어가는 기능을 막는 것.
		$(this).find("img:eq(0)").attr({
			"src": "./images/top.png"
		});
		$("body, html").animate({
			"scrollTop": "0"
		}, 1500);
		$(this).find("img:eq(1)").hide();
	});

	// portfolio pop up

	$(".close, #subpop").click(function () {
		controlCookies();
		return false;
	});

	function controlCookies() {
		$(".popWrap").fadeOut(2500);

		if ($("#subpop").is(":checked") == true) {
			alert("알림창이 하루동안 켜지지 않습니다");
			setCookie("subpop", "done", 1);

		} else {
			alert("알림창이 또 켜질거에용");

		}

	}

	if (getCookie("subpop") == "done") {
		$(".popWrap").remove();
	} else {} {
		$(".popWrap").fadeIn(2500);
	}
	//쿠키가 설정되어 있다면 팝업창 닫기 / 아니라면 보여주기

	var x;
	var y;
	$(document).mousemove(function (event) {
		//console.log ( event.pageX + ", " + event.pageY ); 
		x = event.pageX + "px";
		y = event.pageY + "px";

		/*$("h2").html("left : " + x + "/" + "top :" + y );
			});
*/

		var xp, yp;
		$(".popWrap").mousedown(function (e) {

			//$("body").bind("selectstart", function(){return false;}); //selectstart 뭔지 찾아보기

			//alert("누르고있네?");


			xp = $(".popWrap").data("x", e.pageX) + "px";
			yp = $(".popWrap").data("y", e.pageY) + "px";
			/*$(".popWrap").append("이벤트 X 위치 : " + $(".popWrap").data("x") + "/" +
				"이벤트 Y 위치 : " + $(".popWrap").data("y"));
*/
			//1.팝업창의 현재위치구하기
			$(".popWrap").data("goldX", e.pageX - $(this).offset().left)
				.data("goldY", e.pageY - $(this).offset().top);

			//2.팝업창 움직이기
			$(document).mousemove(function (e) {
				$(".popWrap").css({
					"top": e.pageY - $(".popWrap").data("goldY"),
					"left": e.pageX - $(".popWrap").data("goldX")
				});
			});
		}).mouseup(function () {
			//3. 팝업창 멈추기
			//$("body").unbind("selectstart");
			$(document).off("mousemove");
		});

	});



	//	메뉴 하이라이트


	var findA = $(".gnbPc .gnb>li>ul li");

	var location_text = $(location).attr("pathname");
	var location_test2 = location_text.indexOf("KTO/") + 3; // 18+3

	//console.log(location_text.substring(location_test2,location_text.length)); //      /event.php 현재페이지 주소 뒷부분을 알려줌.


	if ($(location).attr("href").indexOf("food_stay") != -1) {

		$(".contBody>.sub>ul li:eq(2)").addClass("liHighlight");

	}


	for (var v = 0; v < findA.length; v++) {

		var final = $(".gnbPc .gnb>li>ul li:eq(" + v + ")").find("a").attr("href");



		if (location_text.substring(location_test2, location_text.length) == final.substring(1, final.length)) {
			//console.log(v); //6 실제는 +1 위치에 있음

			if (v == 0 || v == 3 || v == 6 || v == 9 || v == 13) {
				x = 0;
			} else if (v == 1 || v == 4 || v == 7 || v == 10 || v == 14) {
				x = 1;
			} else if (v == 2 || v == 5 || v == 8 || v == 11 || v == 15) {
				x = 2;
			} else if (v == 16 || v == 12) {
				x = 3;
			}
			
			$(".contBody>.sub>ul li:eq(" + x + ")").addClass("liHighlight");
		}
	}


	//스크롤 메뉴바 고정 START

	var jbOffset = $("nav").offset();

	//console.log(jbOffset.top);

	$(window).scroll(function () {
		if ($(document).scrollTop() > jbOffset.top) {
			$("nav").addClass("jbFixed");
		} else {
			$("nav").removeClass("jbFixed");
		}
		return false;
	});

	//스크롤 메뉴바 고정 END

	//서브메뉴 나타나게하기
	$(".subM").hide();
	$(".gnbPc").prepend("<p class='gnb_support'><img src='./images/subMenu_bg.png' alt='' class='gnb_support2'/></p>");

	var gnbBgP = $("nav p:eq(0)");

	gnbBgP.hide();

	$(".gnbGeneral>li:not(:last)").on("mouseenter focusin", function () {
			$(".subM").stop().slideDown();
			$("nav p:eq(0)").stop().slideDown();
		})
		.on("mouseleave focusout", function () {
			$(".subM").stop().slideUp();
			$("nav p:eq(0)").stop().slideUp();
		});


	//서브메뉴 나타나게하기 END
	//GNB 서치 항목 누를 때 START
	$(".searchLayer").hide();
	$(".search").click(function () {
		$(".searchLayer").slideToggle();
		return false;

	});
	
	$("#searchGo").click(function(){
		location.href='./searchResult.php';
	});
						 
	//GNB 서치 항목 누를 때 END

	//mobile version gnb START
	$(".menuicon").click(function () {
		$(this).css({
			"cursor": "pointer"
		});

		if (parseInt($(".gnbMobile").css("marginLeft")) === -156) {
			$(".gnbMobile").animate({
				"marginLeft": "0px"
			});
		} else {
			$(".gnbMobile").animate({
				"marginLeft": "-156px"
			});
		}
		return false;
	});

	$(".gnbMobile li>a").click(function () {
		$(".subM").hide();
		$(this).siblings(".subM").slideToggle();

	});
	//mobile version gnb END

	//배너 무한 롤링
	$(".train").prepend($(".train li:last"));
	$(".train").css({
		"marginLeft": "-100%"
	});
	$(".banner.slide.btn li:eq(0) a").addClass("selected2");
	
	function wait_banner() {
		$(".train").css({
			"marginLeft": "-100%"
		});

		var i = $(".train li a").attr("href");

		$(".banner.slide.btn li a").removeClass("selected2");
		$(i).addClass("selected2");
	}

	$(".previous").click(function () {
		$(".banner.slide.btn li a").removeClass("selected2");

		$(this).children("img").attr("src", "./images/left_arrow_on.png");
		
		$(".train").animate({
			"marginLeft": "+= 100%"
		}, function () {
			$(".train").prepend($(".train li:last"));
			wait_banner();
		});
		
		return false;
	});


	$(".next").click(function () {
		$(".banner.slide.btn li a").removeClass("selected2");

		$(this).children("img").attr("src", "./images/right_arrow_on.png");

		$(".train").animate({
			"marginLeft": "-=100%"
		}, function () {
			$(".train").append($(".train li:first"));
			wait_banner();
		});

		return false;
	});
	
	var timer = window.setInterval(function () {
		$(".next").click();
	}, 2800);
	var now = true;

	$(".playing a").click(function () {

		if (now) {
			window.clearInterval(timer);
			$(this).children("img").attr({
				"src": "./images/play.png"
			});
			now = false;
		} else {
			timer = window.setInterval(function () {
				$(".next").click();
			}, 2000);
			now = true;

			$(this).children("img").attr({
				"src": "./images/pause.png"
			});
		}

		return false;
	});

	
	

	/*$(".banner.slide.btn li>a").click(function (e) {
		e.preventDefault();

		$(".banner.slide.btn li a").removeClass("selected2");
		$(this).addClass("selected2");

		var x = $(this).attr("id");
		alert(x);

		for (var z = 0; z < $(".train li").length; z++) {
			if ($(".train li").eq(z).find("a").attr("href") == "#" + x) {
				if (z == 3) {
					$(".train").css({
						"marginLeft": "-100%"
					});
					$(".train").animate({
						"marginLeft": "-=100%"
					}, function () {
						$(".train").append($(".train li:first"));
						$(".train").css({
							"marginLeft": "-100%"
						});
					});
				} else if (z == 2) {
					$(".train").css({
						"marginLeft": "0%"
					});
					$(".train").animate({
						"marginLeft": "-=100%"
					}, function () {
						$(".train").append($(".train li:first"));
						$(".train").css({
							"marginLeft": "-100%"
						});
					});
				} else if (z == 1) {
					$(".train").css({
						"marginLeft": "-300%"
					});
					$(".train").animate({
						"marginLeft": "-=100%"
					}, function () {
						$(".train").append($(".train li:first"));
						$(".train").css({
							"marginLeft": "-100%"
						});
					});
				} else {
					$(".train").css({
						"marginLeft": "-200%"
					});
					$(".train").animate({
						"marginLeft": "-=100%"
					}, function () {
						$(".train").append($(".train li:first"));
						$(".train").css({
							"marginLeft": "-100%"
						});
					});
				}
			}
		}
	});*/

	
	var bannerindex = $(".banner.slide.btn ul li>a");
	
	$(bannerindex).click(function (e) {
		e.preventDefault();

		$(".banner.slide.btn li a").removeClass("selected2");
		var currentindex = bannerindex.hasClass("selected2"); //1

		$(this).addClass("selected2");

		var myindex = $(this).attr("href"); //2
		console.log( $(currentindex).attr("href")); //#
		console.log(myindex); //NaN
		var differ = Math.abs($(currentindex).attr("href") - myindex); // 두개의 차이의 절대값

		//console.log(differ);



		if ($(currentindex).attr("href") > myindex) {
			for (var v = 0; v < differ; v++) {
				$(".previous").click();
			}
		} else if ($(currentindex).attr("href") > myindex) {
			for (var a = 0; a < differ; a++) {
				$(".next").click();
			}
		} else if ($(currentindex).attr("href") == myindex) {
			return false;
		}

	});


	
	//배너 무한 롤링 END
	
	if ($(window).width() > 420) {

		$(".banner_btn .previous").hide();
		$(".banner_btn .next").hide();

		$(".visual").mouseenter(function () {
			if (window.innerWidth > 769) {
				$(".banner_btn .previous").fadeIn(1000);
				$(".banner_btn .next").fadeIn(1000);
			} else {
				$(".banner_btn .previous, .banner_btn .next").hide();
			}

			$(".banner_btn .previous").mouseenter(function () {
				$(this).find("img").attr("src", "./images/left_arrow_on.png");
			}).mouseleave(function () {
				$(this).find("img").attr("src", "./images/left_arrow_off.png");
			});

			$(".banner_btn .next").mouseenter(function () {
				$(this).find("img").attr("src", "./images/right_arrow_on.png");
			}).mouseleave(function () {
				$(this).find("img").attr("src", "./images/right_arrow_off.png");
			});

		}).mouseleave(function () {
			$(".banner_btn .previous").fadeOut();
			$(".banner_btn .next").fadeOut();
		});
	} else {
		$(".banner_btn .previous").hide();
		$(".banner_btn .next").hide();
	}


	// .m1 news 탭 부분
	$(".newsTab li:eq(0)>a").addClass("selected3 changed");


	$(".newsTab li>a").on("click", function () {
		$(".newsTab li a").removeClass("selected3 changed");

		$(this).addClass("selected3 changed");

		return false;
	});


	// m2 panel, mouseover효과
	$(".panel").css({
		"display": "none"
	});
	$("#tab1").css({
		"display": "block"
	});

	$(".panel .list>li").on("mouseenter focusin", function () {
		$(this).children(".desc_up").stop(true, true).animate({
			"top": "0px"
		}, 1000);
	}).on("mouseleave focusout", function () {
		$(this).children(".desc_up").stop(true, true).animate({
			"top": "256px"

		});

	});



	$(".newsTab>li>a").click(function (e) {
		e.preventDefault();
		$(".panel").css({
			"display": "none"
		});
		$(this).parent("li").find(".panel").css({
			"display": "block"
		});
		return false;
	});


	// .a33 고객센터, 뉴스레터 아코디언
	$(".a33 dt").css({
		"cursor": "pointer"
	});
	$(".a33 dd").hide();
	$(".a33 dd:first").show();
	//$(".a33 dt:first a").addClass("selected");

	$(".a33 dt:eq(0)").click(function () {
		$(this).next("dd:eq(0)").slideToggle(1000);
		$(this).siblings("dd:eq(1)").slideToggle(1000);
	});

	$(".a33 dt:eq(1)").click(function () {
		$(this).siblings("dd:eq(0)").slideToggle(1000);
		$(this).next("dd").slideToggle(1000);
	});

	// .a33 고객센터, 뉴스레터 아코디언 END



	$(".main.video p").mouseenter(function () {
		$(this).find(".govideo").fadeIn(1000);
		$(".govideo a").mouseenter(function () {
			if ($(this).index() == 0) {
				$(this).find("img").attr("src", "./images/youtube_on.png");
			} else {
				$(this).find("img").attr("src", "./images/morevideo_on.png")
			};
		}).mouseleave(function () {
			if ($(this).index() == 0) {
				$(this).find("img").attr("src", "./images/youtube_off.png.png");
			} else {
				$(this).find("img").attr("src", "./images/morevideo_off.png")
			};

		});
	}).mouseleave(function () {
		$(".govideo").hide();
	});

	$(".sub.video p").click(function () {
		var subLoc = $(this).children("img").attr("src");
		var mainLoc = $(".main.video p img").attr("src");
		//alert(subLoc);
		$(".main.video p>img").attr("src", "" + subLoc + "");
		$(this).children("img").attr("src", "" + mainLoc + "");

	});

	// mobile version travel review START
	$(".travel_review_mobile li p").hide();
	$(".travel_review_mobile li span").hide();
	$(".travel_review_mobile li p:eq(0)").show();
	$(".travel_review_mobile li span:eq(0)").show();
	// mobile version travel review END


	$(".m3").swipe({
		swipe: function (event, direction) {

			var liwidth = parseFloat($(".poster>li").css("width"));
			var leftLoc = $(".container").offset().left;
			var leftLoc2 = leftLoc + $(".container").width();

			if (direction == "left") {
				$(".poster").stop().animate({
					"marginLeft": "-=8%"
				}, 1000, function () {
					$(".poster").stop().prepend($(".poster li:last"));
					if ($(".poster li:eq(0)").offset().left >= leftLoc) {
						alert("마지막 공모전입니다. 반대로 움직여보세요!");
						$(".poster").append($(".poster li:first"));
						$(document).off("mouseover");
					}
				});
			} else if (direction == "right") {
				$(".poster").stop().animate({
					"marginLeft": "+=8%"
				}, 1000, function () {
					$(".poster").append($(".poster li:first"));
					var posterlength = $(".poster li:eq(9)").offset().left;
					var pp = posterlength + liwidth;
					if (pp < leftLoc2 + 10) {
						alert("마지막 공모전입니다. 반대로 움직여보세요!");
						$(".poster").prepend($(".poster li:last"));
						$(document).off("mouseover");
					}
				});
			}

		},
		threshold: 0
	});
});

/*
	//m3 .poster 커지게 효과  + 그 영역 밖에서는 좌우로 움직이게.

	var leftLoc = $(".container").offset().left;
	var leftLoc2 = leftLoc + $(".container").width();
	//	var topLoc = $(".m3")[0].offset().top + $(".m3").height();
	//	var topLoc2 = $(".m3")[0].offset().top;
	var liwidth = parseFloat($(".poster>li").css("width"));
	//var posterlong = $(".poster li").length;

	var m3 = $(".m3");

	if (m3.length) { //0일때 == undefined 일때
		var topLoc2 = m3.offset().top;
		var topLoc = topLoc2 + m3.height();

		console.log(m3.length);
		console.log(topLoc2);
		console.log(topLoc);
	}*/


//m3
/*$(document).on("mouseover", function (e) {
	if (e.pageY > topLoc2 && e.pageY < topLoc) {
		if (e.pageX < leftLoc) {
			$(".poster").stop().animate({
				"left": "+=8%"
			}, 1000, function () {
				$(".poster").stop().prepend($(".poster li:last"));
				if ($(".poster li:eq(0)").offset().left >= leftLoc) {
									alert("마지막 공모전입니다. 반대로 움직여보세요!");
					$(".poster").append($(".poster li:first"));
					$(document).off("mouseover");
				}
			});
		} else if (e.pageX > leftLoc2) {
			$(".poster").stop().animate({
				"left": "-=8%"
			}, 1000, function () {
				$(".poster").append($(".poster li:first"));
				var posterlength = $(".poster li:eq(9)").offset().left;
				var pp = posterlength + liwidth;
				if (pp < leftLoc2 + 10) {
								alert("마지막 공모전입니다. 반대로 움직여보세요!");
					$(".poster").prepend($(".poster li:last"));
					$(document).off("mouseover");
				}
			});
		} else if (e.pageX > leftLoc && e.pageX < leftLoc2) {
			$(".poster li").hover(function () {
				$(this).css({
					"width": "11%",
					"height": "450px",
					"marginTop": "-35px",
					"marginLeft": "5px",
					"marginRight": "5px"
				});
			}).on("mouseleave", function () {
				$(this).css({
					"width": "9%",
					"height": "100%",
					"marginTop": "0px"
				});
			});
		}
	}
});*/

/*var myTimer = setInterval(btnbg, 1200);
	/*function btnbg() {
		$("#demo").animate({
			"marginTop": "30px"
		}, function () {
			$("#demo").animate({
				"marginTop": "0px"
			});
		});
	}
*/

$(document).ready (function () {

	//tr42
	"use strict";
	$(".tr42_train>li:eq(0)").css({
		"display": "block"
	});
	$(".tr42 .control li:eq(0) img").attr({"src":"./images/m4_slide_btn.png"});
	var tr42List = $(".tr42_train>li");
	var tr42Count = tr42List.length;
	var tr42Slide = setInterval(autoSlide42, 1500);
	var nIndex2 = 0;

	function autoSlide42() {
		var next = (++nIndex2 % tr42Count);
		$(tr42List.get(next - 1)).fadeOut();
		$(tr42List.get(next)).fadeIn();
		$(".tr42 .control li img").attr({
			"src": "./images/m4_slide_btn.png"
		});
		$(".tr42 .control li:eq(" + next + ")").find("img").attr({
			"src": "./images/m4_slide_btn_on.png"
		});
	}

	var tr42now = true;
	$(".tr42 .control p").find("a").click(function (e) {
		e.preventDefault();
		if (tr42now) {
			window.clearInterval(tr42Slide);
			$(this).children("img").attr({
				"src": "./images/play.png"
			});
			tr42now = false;
		} else {
			tr42Slide = setInterval(autoSlide42, 1500);
			tr42now = true;

			$(this).children("img").attr({
				"src": "./images/pause.png"
			});
		}
		return false;
	});

	//tr44
	$(".tr44_train>li:eq(0)").css({
		"display": "block"
	});
	$(".tr44 .control li:eq(0) img").attr("src", "./images/m4_slide_btn_on.png");

	var imgList = $(".tr44_train>li");
	var nImgCount = imgList.length;
	var nIndex = 0;
	var tr44Slide = setInterval(autoSlide, 1500);

	function autoSlide() {
		var next = (++nIndex % nImgCount);
		$(imgList.get(next - 1)).fadeOut();
		$(imgList.get(next)).fadeIn();
		$(".tr44 .control li img").attr({
			"src": "./images/m4_slide_btn.png"
		});
		$(".tr44 .control li:eq(" + next + ")").find("img").attr({
			"src": "./images/m4_slide_btn_on.png"
		});
	}

	var tr44now = true;
	$(".tr44 .control>p").find("a").click(function (e) {
		e.preventDefault();

		if (tr44now) {
			window.clearInterval(tr44Slide);
			$(this).children("img").attr({
				"src": "./images/play.png"
			});
			tr44now = false;
		} else {
			tr44Slide = setInterval(autoSlide, 1500);
			tr44now = true;

			$(this).children("img").attr({
				"src": "./images/pause.png"
			});
		}
		return false;
	});


	//인스타


		
	var tocken = "5831190751.6d97b59.53f5122b256d418da6b8dcf1f61c2729";

	$.ajax({
		url: "https://api.instagram.com/v1/users/self/media/recent/?access_token=" + tocken,
		type: "post",
		dataType: "jsonp",
		cache: false,
		success: function (response) {
			console.log(response); //objcet
			for (var v = 0; v < response.data.length; v++) {

				var link = response.data[v].link;
				var src = response.data[v].images.thumbnail.url;
				var caption = response.data[v].caption.text;

				var insta = '<img src="./images/profile_twitter.jpg" alt="한국관광공사 인스타그램 프로필 사진"/><span>한국관광공사의 공식 인스타그램입니다.</span>';
				insta += '<b>한국관광공사 :: 대한민국 구석구석</b><span>@Kor_VisitKorea - 13시간</span>';
				insta += '<div class="instacont"><p class="twitmain"><a href="'+ link+'" target="_blank"><img src="' + src + '"></a></p>';
				insta += '<p class="insta-caption">' + caption + '</p></div>';


				$(".twitter dd").append(insta);

			}

		},
		error: function () {
			alert("ERROR");
		}
	});


	
	//var xhttp, x, insta;
//	if (window.XMLHttpRequest) {
//		xhttp = new XMLHttpRequest();
//	} else {
//		xhttp = new ActiveXObject("Microsoft.XMLHTTP");
//	}
//
//	xhttp.oepn("get", "https://graph.facebook.com/v2.8/big5chinese.visitkorea/feed?access_token=" + token, true);
//
//	xhttp.onreadystatechange = function(){
//		if(this.readyState==4 && this.status==200){
//			x = xhttp.responseText;
//			var response = x.json_parse();
//
//			for(var v=0; v<response.length;v++){
//				var link = response.data[v].link;
//				var src = response.data[v].images.thumbnail.url;
//				var caption = response.data[v].caption.text;
//
//				insta = '<img src="./images/profile_twitter.jpg" alt="한국관광공사 인스타그램 프로필 사진"/><span>한국관광공사의 공식 인스타그램입니다.</span>';
//				insta += '<b>한국관광공사 :: 대한민국 구석구석</b><span>@Kor_VisitKorea - 13시간</span>';
//				insta += '<div class="instacont"><p class="twitmain"><a href="'+ link+'" target="_blank"><img src="' + src + '"></a></p>';
//				insta += '<p class="insta-caption">' + caption + '</p></div>';
//			}
//			document.getElementsByClassName("twitter dd").append(insta);
//		}
//	}

	//페이스북

	var token = '107492893264148|XJcgmIIvpAQlIfAOND4Ab5o0Ti4';

	$.ajax({
		url: "https://graph.facebook.com/v2.8/big5chinese.visitkorea/feed?access_token=" + token + "&fields=link,picture,message,updated_time",
		type: "GET",
		success: function (msg) {

			var obj = msg;
			console.log(obj);
			for (var v = 0; v < obj.data.length; v++) {

				var dom = "";

				$.ajax({
					url: "https://graph.facebook.com/v2.8/" + msg.data[v].id + "?access_token=" + token + "&fields=link,picture,message,updated_time",
					type: "GET",
					success: function (msg) {

						var obj = msg;
						//console.log(obj);
						var dom = "";
						dom += "<li>";
						dom += "<img src='" + obj['picture'] + "'>";
						dom += '<span class="cont">' + obj['message'] + '</span>';
						dom += "</li>";

						$('.facebook_cont .fb_cont').append(dom);
					},
					error: function (request, status, error) {
						console.log("code:" + request.status + "\n" + "message:" + request.responseText + "\n" + "error:" + error);
					}
				});
			}
		},
		error: function (request, status, error) {
			console.log("code:" + request.status + "\n" + "message:" + request.responseText + "\n" + "error:" + error);
		}
	});


	// var current=0;
	slidetimer();
	var interval;

	function slidetimer() {

		interval = setInterval(function () {
			slide();
		}, 1500);

		function slide() {
			$(".f1_cont").animate({
				left: "-=140px"
			}, 500, function () {
				$(".f1_cont").css({
					"left": 0
				});
				$(".f1_cont").append($(this).find("li:first"));
			});
			// current++;
			// if(current==5)current=0;
		}
	}

	var footnow = true;

	$(".f1 p>a").click(function (e) {
		e.preventDefault();


		if (footnow) {
			$(this).find("img").attr("src", "./images/play.png");
			clearInterval(interval);
			footnow = false;
		} else {
			$(this).find("img").attr("src", "./images/pause.png");
			slidetimer();
			footnow = true;
		}
		return false;
	});

});