<?php include_once "./header.php"; ?>
<?php include_once "./inc/fn_util.php"; myTitle("한국관광공사"); ?>
		<div class="popWrap">
            <h3>NOTICE</h3>
            <p class="qr">
                <span>본사이트는 상업적 목적이 아닌</span>
                <span>개인포트폴리오 용도로 제작되었으며,</span>
                <span>홈페이지의 일부내용과 기타이미지 등은</span>
                <span>그 출처가 따로 있음을 밝힙니다.</span>
            </p>
            <p><img src="./images/QRCodeImg.jpg" alt="" style="width:150px"/></p>
            <p>
                <input type="checkbox" id="subpop" name="subpop" title="오늘 하루동안 이창 열지 않음"/>
                <label for="subpop">오늘 하루동안 이 창 열지 않음</label>
                <a href="#" class="close">[닫기]</a>
            </p>
        	</div>
		<!-- #header END-->
		<section class="visual">
			<h2 class="hidden">메인배너이미지</h2>
			<ul class="train">
				<li class="tt tr1">
					<div class="container">

						<div class="tc">
							<a href="#ctr1" class="#ctr1" title="첫번째배너이미지"></a>
							<h3>케이스타일 허브, '한식체험관' 오픈</h3>
							<h4>사진으로 미리보는, 서울 이색명소</h4>
							<a href="#" title="한식체험관 뉴스 내용 자세히 보기" class="read_more">READ MORE</a>

						</div>

					</div>

				</li>
				<li class="tt tr2">

					<div class="container">

						<div class="tc">
							<a href="#ctr2" class="#ctr2" title="두번째배너이미지"></a>
							<h3>한국관광공사, 일본·러시아서 평창올림픽 집중 홍보</h3>
							<h4>다시 뛰는 공기업</h4>
							<a class="read_more" href="#" title="평창올림픽 집중 홍보 내용 자세히 보기">READ MORE</a>

						</div>

					</div>

				</li>
				<li class="tt tr3">

					<div class="container">

						<div class="tc">
							<a href="#ctr3" class="#ctr3"  title="세번째배너이미지"></a>
							<h3>러시아 사하공화국서 의료관광 홍보</h3>
							<h4>한국과 러시아의 경제 협력</h4>
							<a class="read_more" href="./notice_detail.php?no=8" title="러시아 사하공화국서 의료관광 홍보 뉴스 내용 자세히 보기">READ MORE</a>

						</div>

					</div>

				</li>
				<li class="tt tr4">

					<div class="container">

						<div class="tc">
							<a href="#ctr4" class="#ctr4"  title="네번째배너이미지"></a>
							<h3>대한민국 관광사진 공모전 수상작 발표</h3>
							<h4>한국의 가치와 매력을 사진 한장에!</h4>
							<a class="read_more" href="#" title="대한민국 관광사진 공모전 수상작 발표 내용 자세히 보기">READ MORE</a>

						</div>

					</div>

				</li>
			</ul>
			<!--배너 열차 END-->

			<!-- VISUAL (BANNER) END-->
			<div class="banner_btn">
				<div class="container">
					<p class="previous">
						<a href="#" title="이전 뉴스 배너이미지 보기"><img src="./images/left_arrow_off.png" alt="이전 뉴스 배너이미지 보기" /></a>
					</p>
					<p class="next">
						<a href="#" title="다음 뉴스 배너이미지 보기"><img src="./images/right_arrow_off.png" alt="다음 뉴스 배너이미지 보기 화살표" /></a>
					</p>

					<div class="banner slide btn">
						<ul>
							<li>
								<a href="#" id="ctr4" title="첫번째 뉴스 배너이미지와 내용 보기">1</a>
							</li>
							<li>
								<a href="#" id="ctr1" title="두번째 뉴스 배너이미지와 내용 보기">2</a>
							</li>
							<li>
								<a href="#" id="ctr2" title="세번째 뉴스 배너이미지와 내용 보기">3</a>
							</li>
							<li>
								<a href="#" id="ctr3" title="네번째 뉴스 배너이미지와 내용 보기">4</a>
							</li>


						</ul>
						<span class="playing">
							<a href="#" title="banner1"><img src="./images/pause.png" alt="배너슬라이드 정지 버튼" /></a>
						</span>
					</div>

					<!--banner slide btn END 배너이미지에 hover하면 좌우 이동 아이콘 및 정지/재생버튼, 아래 동그라미 4개 나타나게 하기-->
				</div>
			</div>
			<!--banner_btn END-->
		</section>
		<div id="main">
			<section class="m_content m1">
				<div class="container">
					<h3 class="hidden">빠른메뉴서비스</h3>
					<ul class="fastmenu">
						<li class="recomm"><a href="./recommendTravel.php" title="추천여행지 자세히 보러가기"><strong>추천여행지</strong></a></li>
						<li class="event"><a href="./event.php" title="한국관광공사 이벤트 자세히 보러가기"><strong>이벤트</strong></a></li>
						<li class="complain"><a href="./customerSound.php" title="불편신고 자세히 보러가기"><strong>불편신고</strong></a></li>
						<li class="guideBook"><a href="./guideBook.php" title="가이드북 자세히 보러가기"><strong>가이드북</strong></a></li>
						<li class="travel_detail"><a href="./travelMap.php" title="관광지도 자세히 보러가기"><strong>관광지도</strong></a></li>
						<li class="personal_setting">
							<a href="./travelMap.php" title="빠른메뉴 사용자 설정"></a>
						</li>
					</ul>
					<ul class="fastmenu_mobile">
						<li>
							<a href="./recommendTravel.php"><img src="./images/location.png" alt="추천여행지 빠른메뉴 아이콘" />추천여행지</a>
						</li>
						<li class="mr_none2">
							<a href="./event.php"><img src="./images/gift.png" alt="이벤트 빠른메뉴 아이콘" />이벤트</a>
						</li>
						<li class="mr_none">
							<a href="./customerSound.php"><img src="./images/megaphone.png" alt="불편신고 빠른메뉴 아이콘" />불편신고</a>
						</li>
						<li class="mr_none2">
							<a href="./guideBook.php"><img src="./images/open-book.png" alt="가이드북 빠른메뉴 아이콘" />가이드북</a>
						</li>
						<li>
							<a href="./travelMap.php"><img src="./images/map.png" alt="관광지도 빠른메뉴 아이콘" />관광지도</a>
						</li>
						<li class="mr_none mn2">
							<a href="#"><img src="./images/worker.png" alt="빠른메뉴 사용자 커스텀 아이콘" />빠른메뉴설정</a>
						</li>
					</ul>
				</div>
			</section>
			<!--.m_content m1 END-->
			<section class="m_content m2">
				<div class="container">
					<h3>NEWS</h3>
					<span class="devide_line"></span>
					<p class="m2_desc">한국관광공사의 새로운 소식을 전합니다.</p>
					<article class="m2 m21">
						<h2 class="hidden">news article</h2>
						<ul class="newsTab">
							<li class="big">
								<a href="#tab1" title="엄청난 새소식 보기">KTO 빅뉴스!</a>
								<div class="panel" id="tab1">
									<ul class="m list">
										<li class="one">
											<div class="desc_up">
												<h4>여름 레저스포츠 우수 여행상품 선정</h4>
												<p class="particle">관광공사는 여름에 어울리는 레저스포츠 종목 및 지역 문화·관광자원과 결합된 여행상품을 대상으로 공모를 진행, 우수상품 9개를 선정했다. 선정된 여행상품들은 ‘고성 서핑캠프’, ‘내륙의 숨겨진 오아시스! 충주에서 짚라인과 함께 짜릿한 여름을!’, ‘행복한 감성이 있는 홍천 레포츠 여행’, ‘무더위를 박살내는 평창로드 액티비티 레포츠 투어’, ‘고성 내 맘대로 떠난다! 스노클링★해양레포츠★오토캠핑장★어선체험’, ‘제천 레포츠 투어’, ‘제주도 썸머 싸이클링 캠프, 자전거 국토종주’, ‘천혜의 비경! 영월 동강 래프팅 기차여행’, ‘올여름 짚라인과 래프팅을 한방에!! 문경에서 보내는 시원한 여름휴가’ 등이다.
												</p>
												<p class="more"><a href="#" title="K-컬쳐체험여행가이드 자세히보기">자세히 보기</a></p>
											</div>
										</li>
										<li class="two">
											<div class="desc_up">
												<h4>김광석을 추억하는 버스여행</h4>
												<p class="particle">‘더 플레이 버스: 김광석’이라는 이름의 음악버스가 운행된다. 김광석 음악버스는 김광석의 음악과 삶을 버스여행에 접목한 새로운 개념의 시티투어 프로그램으로 한국관광공사와 문화체육관광부의 지원으로 기획·개발됐다.
												</p>
												<p class="more"><a href="#" title="평창 캠핑페스티벌 참가자 모 더보기">자세히 보기</a></p>
											</div>
										</li>
										<li class="three">
											<div class="desc_up">
												<h4>시장 다변화를 위한 대규모 초청 투어 실시</h4>
												<p class="particle">한국관광공사는 5월 21일부터 6월 4일까지 전 세계 주요 언론인 및 여행업자 약 200명을 초청, 방한 관광을 홍보하고 신규 상품 개발을 유도하기 위한 투어를 진행했다. 관광공사는 시장별 특성에 따른 맞춤형 코스를 선보이면서도 공통적으로 ‘2030’ 젊은 세대가 좋아하는 체험 콘텐츠와 롯데월드 서울스카이, 서울로7017, 영종도 파라다이스 시티 등과 같은 신규 랜드마크 코스를 집중 소개하며 개별관광객 유치에 힘을 쏟았다.
												</p>
												<p class="more"><a href="#" title="채용공고 안내 더보기">자세히 보기</a></p>
											</div>
										</li>
										<li class="four mr_none">
											<div class="desc_up">
												<h4>동심으로의 초대, 평창 ‘숲속의 요정’</h4>
												<p class="particle">강원 평창군 백운계곡 상류에 자리한 ‘숲속의 요정’은 동화 속 세상을 옮겨 놓은 듯한 대규모 단지형 펜션이다. 특히 평창 내 한국관광 품질인증제 시범 인증 숙소 중 유일한 펜션으로 가격대비 높은 만족도를 준다. 40~196㎡ 규모의 힐링룸, 키즈룸, 이브닝룸 등 총 83개 객실을 갖췄으며, 방의 테마와 크기에 따라 월풀 욕조, 공주침대, 커플침대 등을 세심하게 준비했다. 모든 객실 테라스에는 태기산 기슭을 바라보며 바비큐를 즐길 수 있도록 개별 데크를 깔았다.
												</p>
												<p class="more"><a href="#" title="채용공고 안내 더보기">자세히보기</a></p>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li class="hiring">
								<a href="#tab2" title="인재 채용 정보 보기">인재를 찾아요!</a>
								<div class="panel" id="tab2">
									<p>
										<strong>한국관광공사가 원하는 인재 바로 당신입니다.</strong>
										<b>도전적 혁신정신, 자율적 책임의식, 국제적 전문가 정신을 갖춘 인재를 기다립니다.</b>

										<span>◎ 담당자 : 신정현(인재개발팀)</span>
										<span>◎ 이메일 : howser@knto.or.kr</span>
										<span>◎ 전화 : 033 - 738 - 3144</span>
										<span>◎ 팩스 : 033 - 738 -3140</span>
										<a href="#">더 많은 채용공고 보러가기</a>
									</p>
									<ul class="m list">
										<li class="one">
											<div class="desc_up">
												<h4>2017년 신입사원 채용 관련 사전 공고</h4>
												<p class="particle">한국관광공사는 2017년 한국 관광 산업의 발전을 이끌어갈 정규직 신입사원을 선발할 예정입니다. 원활한 취업 준비에 도움이 되고자 기존 대비 변경 예정 사항 등을 사전에 공고하오니 참조하시어 좋은 결과를 얻으시기 바랍니다.
												</p>
												<p class="more"><a href="#" title="K-컬쳐체험여행가이드 자세히보기">자세히 보기</a></p>
											</div>
										</li>
										<li class="four mr_none">
											<div class="desc_up">
												<h4>2017년 무기계약직 채용공고</h4>
												<p class="particle">한국관광공사는 「공기업·준정부기관의 인사운영에 관한 지침」제7조에 의거, 공개경쟁시험에 의해 채용하는 것을 원칙으로 하고 있습니다. 공개경쟁시험에 의한 채용 이외, 별도의 사적인 채용전형을 시행하고 있지 않으니 취업알선/소개 등과 관련한 피해가 생기지 않도록 주의하시기 바랍니다.
												</p>
												<p class="more"><a href="#" title="채용공고 안내 더보기">자세히보기</a></p>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<!--                            //인재채용-->
							<li class="mr_none">
								<a href="#tab3" title="정보 교류 내용 보기">정보 교류의 장</a>
								<div class="panel" id="tab3">
									<ul class="m list">
										<li class="one">
											<div class="desc_up">
												<h4>2017~2018 한국관광100선 선정결과</h4>
												<p class="particle">한국관광100선은 종전의 인터넷 투표방식에서 거대자료(빅테이터) 분석과 관광지 인지도와 만족도, 방문의향 온라인 설문, 통신사·소셜·내비게이션 분석, 관광객 증가율, 검색량 등 관광 통계 분석과 전문가 17인의 서면·현장평가를 병행한 결과를 종합적으로 반영해 선정했다.
												</p>
												<p class="more"><a href="#" title="한국관광100선 선정결과 자세히보기">자세히 보기</a></p>
											</div>
										</li>
										<li class="two">
											<div class="desc_up">
												<h4>2017년 한국관광공사 사업계획 발표자료</h4>
												<p class="particle">한국관광공사가 관광을 통한 경제 활력 회복을 위해 국내 관광시장 예산을 지난해보다 2배로 늘린다. 또 한국을 찾는 외국 관광객을 다변화하기 위해 동남아시아 시장과 무슬림 시장 대상 마케팅 예산도 지난해보다 2배 가까이 증액할 방침이다. 아울러 '제1 방한시장'인 중국 방한 관광상품의 품질 개선에도 힘쓸 계획이다.
												</p>
												<p class="more"><a href="#" title="2017년 사업계획 자세히 보기">자세히 보기</a></p>
											</div>
										</li>
										<li class="three">
											<div class="desc_up">
												<h4>중국 관광객 감소에 따른 KTO-RTO-시도 간담회 결과보고</h4>
												<p class="particle">방한 최대시장인 중국 관광객 유치에 그간 많은 노력을 기울여 800만 시장으로 확대시켜 놓은 상황에서 금번 중국 정부의 조치가 이루어져 타격이 더 크고, 조치의 내용도 FIT가 접촉할 수 있는 온라인 판매망까지 차단해 버리는 등 타격의 깊이도 심대함.
												</p>
												<p class="more"><a href="#" title="중국관광객 재유치 간담회 자세히">자세히 보기</a></p>
											</div>
										</li>
										<li class="four mr_none">
											<div class="desc_up">
												<h4>2017 부산시 외국인관광객 유치 인센티브 지원사업 실시</h4>
												<p class="particle">부산시는 관광산업 기반을 조성하기 위해 지난해 설치한 국제시장 ‘외국인 쇼핑블록’을 자갈치시장 등으로 확대하고 가상현실 등 신기술을 활용해 관광과 첨단산업을 육성할 계획이다. 시내면세점을 추가 개설하고 태종대 모노레일과 송도 해상케이블카 등 유료 관광지를 확대해 관광 수입 확충에 나선다. 여행사를 지원하고 관광택시 활성화에도 나설 계획이다. 국제회의 유치와 제2컨벤션 건립을 추진해 마이스(MICE: 기업회의·포상관광·컨벤션·전시회) 거점 및 관광도시로 육성한다는 방침이다.
												</p>
												<p class="more"><a href="#" title="부산 외국인 관광객 유치 사업 자세히 보기">자세히보기</a></p>
											</div>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</article>
					<!--m2 m21 END-->
					<div class="m2 m22">
						<dl class="a3 a31">
							<dt class="hidden">한국관광공사 동영상</dt>
							<dd class="main video">
								<p><img src="./images/video1.png" alt="메인비디오클립이미지" /><span class="govideo">
									<span>
									<a href="https://youtu.be/rMPE6BGxyns" title="동영상보러가기(유투브)"><img src="./images/youtube_off.png.png" alt="해당 동영상 유투브 보러가기 아이콘"/></a>
									<a href="#" title="더 많은 동영상 보러가기" ><img src="./images/morevideo_off.png" alt="더 많은 동영상 보러가기 아이콘"/></a></span>
								</span>
								</p>
							</dd>
							<dd class="sub video">
								<p><img src="./images/video2.png" alt="서브비디오1 클립 이미지" /></p>
								<p class="subMiddle"><img src="./images/video3.png" alt="서브비디오2 클립 이미지" /></p>
								<p><img src="./images/video4.png" alt="서브비디오3 클립 이미지" /></p>
							</dd>
						</dl>
						<dl class="a3 a33">
							<dt>고객센터</dt>
							<dd id="a33DD">
								<div>
									<p class="arcco_desc">고객의 편의를 위해 노력하겠습니다.<span>(평균 응답시간 1일 이내)</span>
									</p>
									<p class="centerImage"><img src="./images/telemarketer.png" alt="고객센터이미지" /></p>
									<p class="call">
										<a href="#" title="대표 문의 전화번호"><img src="./images/call.png" alt="전화아이콘" />033-738-3195</a>
									</p>
									<p class="email">
										<a href="#" title="대표 문의 이메일주소"><img src="./images/email.png" alt="이메일 아이콘" />gong412@knto.or.kr</a>
									</p>
									<p class="personal"><a href="#" title="1:1 상담 신청하기">1:1 상담 신청하기</a></p>
								</div>
							</dd>
							<dt>한국관광공사 e-뉴스레터</dt>
							<dd id="a33DD2">
								<div class="news_letter">
									<p>한국관광공사 소식을 전해드리는 뉴스레터, <br />지금 바로 신청하세요!</p>
									<p class="mailimage"><img src="./images/mailed.png" alt="뉴스레터 신청하기 이미지" /></p>
									<form action="#" method="get">
										<fieldset>
											<legend class="hidden">한국관광공사e-뉴스레터</legend>
											<p>
												<input type="email" id="user_email" name="user_email" placeholder="VistKorea@kto.co.kr" required="required" />
												<input type="submit" id="propose" name="propose" value="신청하기" />
											</p>
										</fieldset>
									</form>

								</div>
							</dd>
						</dl>
					</div>
				</div>
			</section>
			<!--            .m_content m2 END-->
			<section class="m_content m3">

				<div class="container">
					<!--				<p class="btnbg bbR"><img src="./images/hand_R.png" alt="왼쪽에 숨겨져 있는 공모전 더 보기 이미지"/></p>-->
					<h3 class="hidden">공모전 슬라이드</h3>
					<!--                    <p>한국관광공사에서는 다양한 공모전을 개최합니다.</p>-->
					<ul class="poster">
						<li>
							<a href="#" title="제2회 아름다운 해상교량 사진공모전 바로가기"><img src="./images/m3_img1.jpg" alt="제2회 아름다운 해상교량 사진공모전 포스터 이미지" /></a>
						</li>
						<li>
							<a href="#" title="경상북도 캐릭터 디자인 공모전 바로가기"><img src="./images/m3_img2.png" alt="경상북도 캐릭터 디자인 공모전 포스터 이미지" /></a>
						</li>
						<li>
							<a href="#" title="평창을 선물하자! 공모전 바로가기"><img src="./images/m3_img3.jpg" alt="평창을 선물하자! 공모전 포스터 이미지" /></a>
						</li>
						<li>
							<a href="#" title="2017 전라남도 관광사진 공모전 바로가기"><img src="./images/m3_img4.jpg" alt="2017 전라남도 관광사진 공모전 포스터 이미지" /></a>
						</li>
						<li>
							<a href="#" title="2017 전라남도 관광사진 공모전 바로가기"><img src="./images/m3_img_opacity1.jpg" alt="2017 파주 관광 사진 공모전 포스터이미지" /></a>
						</li>
						<li>
							<a href="#" title="2017 전라남도 관광사진 공모전 바로가기"><img src="./images/img_6.jpg" alt="제 2회 대학생 관광광고대상 포스터 이미지" /></a>
						</li>
						<li>
							<a href="#" title="2017 전라남도 관광사진 공모전 바로가기"><img src="./images/m3_img4.jpg" alt="2017 전라남도 관광사진 공모전 포스터 이미지" /></a>
						</li>
						<li>
							<a href="#" title="2017 전라남도 관광사진 공모전 바로가기"><img src="./images/m3_img5.jpg" alt="다시 떠나는 대한민국 포스터 이미지" /></a>
						</li>
						<li>
							<a href="#" title="2017 전라남도 관광사진 공모전 바로가기"><img src="./images/m3_img7.png" alt="관광벤처 푸드테크 통합공모전" /></a>
						</li>
						<li>
							<a href="#" title="전국 관광기념품 공모전 수상작 전시회 포스터 이미지"><img src="./images/m3_img9.png" alt="2017 전라남도 관광사진 공모전 포스터 이미지" /></a>
						</li>
					</ul>
					<!--
					<div class="poster_btn">

						<p class="left_arrow">
							<a href="#" title="이전 슬라이드 보기"><img src="./images/poster_left.png" alt="이전 슬라이드 보기 버튼" /></a>
						</p>
						<p class="right_arrow">
							<a href="#" title="다음 슬라이드 보기"><img src="./images/poster_right.png" alt="다음 슬라이드 보기 버튼" /></a>
						</p>
					</div>
					                    .m_content m3 .m3 btn END
					<p class="btnbg bbL"><img src="./images/hand_L.png" alt="오른쪽에 숨겨져 있는 공모전 더 보기 이미지"/></p>
-->
				</div>

			</section>
			<!--            .m_content m3 END-->
			<section class="m_content m4">
				<div class="container">
					<h3>TRAVEL REVIEW</h3>

					<span class="devide_line"></span>
					<p class="m4_desc">각 국 여행자들의 생생한 대한민국 여행 후기를 지금 바로 확인해보세요!</p>
					<ul class="travel_review">
						<li class="tr4 tr41">
							<p class="tr41bg"></p>
							<div class="m4_text">
								<div class="title">
									<i>Festival</i><br />
									<b>축제여행</b>
								</div>
								<p>전통문화를 계승, 발전시켜 새문화를 꽃피우는 한국관광공사 축제</p>
								<p class="m4_more"><a href="#">MORE</a></p>
							</div>
						</li>
						<li class="tr4 tr42">
							<ul class="tr42_train">
								<li class="trfirst">
									<a href="#"><b>Food</b><p>핫 플레이스 명동에 가면 쇼핑거리 한가운데 즐비하고 있는 길거리 떡볶이를 쉽게 만나볼 수 있습니다.</p></a></li>
								<li class="trsecond"><a href="#"><b>Food</b><p>특별한 레시피는 없다! 그저 먹고싶은 신선한 나물과 매콤새콤달콤한 고추장을 넣고 비빈 한국의 별미 밥상!</p></a></li>
							</ul>
							<div class="control">
								<ul>
									<li>
										<a href="#"><img src="./images/m4_slide_btn.png" alt="첫번째 이야기 보기"></a>
									</li>
									<li>
										<a href="#"><img src="./images/m4_slide_btn.png" alt="두번째 이야기 보기"></a>
									</li>
								</ul>
								<p>
									<a href="#" title="자동재생멈추기"><img src="./images/pause.png" alt="자동재생 멈춤버튼" /></a>
								</p>
							</div>
						</li>
						<li class="tr4 tr43">
							<div>
								<div class="title">
									<i>Shopping</i><br />
									<b>핫플레이스! 명동</b>
								</div>
								<p>보세옷들과 명품까지 다양한 브랜드를 만나볼 수 있는 곳이다.</p>
								<p class="m4_more"><a href="#">MORE</a></p>
							</div>
						</li>
						<li class="tr4 tr44">
							<div>
								<ul class="tr44_train">
									<li>
										<a href="#">
											<img src="./images/tr44_bg.png" alt="CULTRUE 첫번째 이미지" /><b>CULTURE</b>
											<p>한국하면 떼려야 뗄 수 없는 K-POP STAR! 스타들이 한 자리에 모인 뮤직뱅크에 다녀왔습니다.</p>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="./images/tr44_bg.jpg" alt="CULTURE 두번째 이미지" />
											<b>CULTURE</b>
											<p>특별한 레시피는 없다! 그저 먹고싶은 신선한 나물과 매콤새콤달콤한 고추장을 넣고 비빈 한국의 별미 밥상! 비빔밥을 맛보자!</p>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="./images/tr44_bg3.jpg" alt="CULTURE 세번째 이미지" />
											<b>CULTURE</b>
											<p>특별한 레시피는 없다! 그저 먹고싶은 신선한 나물과 매콤새콤달콤한 고추장을 넣고 비빈 한국의 별미 밥상! 비빔밥을 맛보자!</p>
										</a>
									</li>
								</ul>
							</div>
							<div class="control">
								<ul>
									<li>
										<a href="#"><img src="./images/m4_slide_btn.png" alt="첫번째 이야기 보기"></a>
									</li>
									<li>
										<a href="#"><img src="./images/m4_slide_btn.png" alt="두번째 이야기 보기"></a>
									</li>
									<li>
										<a href="#"><img src="./images/m4_slide_btn.png" alt="세번째 이야기 보기"></a>
									</li>
								</ul>
								<p>
									<a href="#" title="자동재생멈추기"><img src="./images/pause.png" alt="자동재생 멈춤버튼" /></a>
								</p>
							</div>
						</li>
						<li class="tr4 tr43 tr45">
						<div>
							<div class="title">
								<i>Shopping</i><br />
								<b>핫플레이스! 명동</b>
							</div>
							<p>한국을 방문한 사람이라면 꼭 들리게 되는 핫플레이스이다. 보세옷들과 명품까지 다양한 브랜드를 만나볼 수 있는 곳이다.</p>
							<p class="m4_more"><a href="#">MORE</a></p>
						</div>
					</li>
					</ul>
					

					<ul class="travel_review_mobile">
						<li><a href="#">FESTIVAL</a>
							<p><img src="./images/tr42_bg.jpg" alt="페스티발 여행 후기 이미지" /><span>전통문화를 계승, 발전시켜 새문화를 꽃피우는 한국관광공사 축제</span></p>
						</li>
						<li><a href="#">FOOD</a>
							<p><img src="./images/tr41_bg.png" alt="음식 여행 후기 이미지" /><span>전통문화를 계승, 발전시켜 새문화를 꽃피우는 한국관광공사 축제</span></p>
						</li>
						<li><a href="#">SHOPPING</a>
							<p><img src="./images/tr41_bg.png" alt="쇼핑 여행 후기 이미지" /><span>전통문화를 계승, 발전시켜 새문화를 꽃피우는 한국관광공사 축제</span></p>
						</li>
						<li><a href="#">CULTURE</a>
							<p><img src="./images/tr41_bg.png" alt="문화 여행 후기 이미지" /><span>전통문화를 계승, 발전시켜 새문화를 꽃피우는 한국관광공사 축제</span></p>
						</li>
					</ul>
				</div>
			</section>
			<!--            .m_content m4 END-->
			<section class="m_content m5">
				<div class="container">
					<h3>SOCIAL CENTER</h3>
					<span class="devide_line"></span>
					<p class="m5_desc">한국관광공사의 다양한 이야기를 들려드립니다.</p>
					<div class="m5_sns_content">
						<div class="m5_left">
							<dl class="twitter">
								<dt><img src="./images/profile_twitter.jpg" alt="한국관광공사 인스타그램 프로필 사진"/><span>한국관광공사의 공식 인스타그램입니다.</span></dt>
								<dd>
									<!--<img src="./images/profile_twitter.jpg" alt="한국관광공사 트위터 프로필 사진" class="twiprofile" />
									<b>한국관광공사 :: 대한민국 구석구석</b><span>@Kor_VisitKorea - 13시간</span>
									<p>명동에서 즐기는 주전부리 여행! <a href="https://goo.gl/9tuCgZ" title="인스타그램 '달콤' 태그 검색 결과 보러가기">#달콤</a> <a href="https://goo.gl/Ei7yF7" title="인스타그램 '매콤' 태그 검색 결과 보러가기">#매콤</a> <a href="https://goo.gl/at5AWK" title="인스타그램 '시원' 태그 결과 보러가기">#시원</a> <a href="https://goo.gl/qLHjtE" title="인스타그램 '짭쪼름' 태그 결과 보러가기">#짭쪼름</a> 까지 다양한 주전부리의 항연!! <a href="https://goo.gl/3qmo7t" title="인스타그램 '먹다보니' 태그 결과 보러가기">#먹다보니</a> <a href="#">#명동역6번출구앞이야</a> <a href="#">#시원한수박</a> <a href="#">#월요일</a> <a href="#">#서울</a> <a href="#">#명동여행</a></p>
									<p class="twitmain">
										<img src="./images/twitter_img.jpg" alt="해당글메인사진" /></p>-->
								</dd>
							</dl>
							<dl class="blog">
								<dt><span style="color:lawngreen; font-weight:bold;">한국관광공사 공식블로그</span>에서 보낸 최신글<b>Blog</b></dt>
								<dd>
									<div>
										<span>구석구석 여행</span>
										<p>광주 가볼만한 곳 |<br />예향의 도시, 광주로 떠나는 문화예술여행</p>
										<span>2017-05-14 19:00</span>
										<a href="#" title="해당글 공유하기(URL복사)">URL 복사</a>
									</div>
									<p>뜨거운지라 인간의 동산에는 사랑의 풀이 돋고 이상의 꽃이 피고 희망의 놀이 뜨고 열락의 새가 운다. 사랑의 풀이 없으면 인간은 사막이다. 오아시스도 없는 사막이다. 보이는 끝까지 찾아다녀도 목숨이
									</p>
								</dd>
							</dl>
						</div>
						<div class="facebook">
							<p class="response"><img src="./images/profile_facebook.jpg" alt="한국관광공사 페이스북 프로필 사진" /></p>
							<b>@big5chinese.visitkorea</b>
							<p class="ff">한국관광공사의 공식 SNS 페이스북 친구가 되어주세요.</p>
							<a href="https://goo.gl/MhsiHD" title="한국관광공사 페이스북 바로가기"><img src="./images/facebook_icon.png" alt="페이스북 아이콘" /></a>
							<dl class="facebook_cont">
								<dt>
                                <b>한국관광공사</b><p>239,810개 좋아요</p>
                                <div>
                                <p class="goface">
                                <a href="#" title="페이지 좋아요 누르러 한국관광공사 페이스북으로 가기"><img src="./images/facebook_like.png" alt="페이스북 아이콘"/> 페이지 좋아요</a></p>
                                <p class="gojoin">
                                <a href="#" title="가입하러 한국관광공사 페이스북으로 가기"><img src="./images/pencil.png" alt="연필아이콘"/>가입하기</a></p>
									</div>
                            	</dt>
								<dd>
									<ul class="friend_like">
										<li><img src="./images/fb_ff.jpg" alt="#" /></li>
										<li><img src="./images/fb_ff.jpg" alt="#" /></li>
										<li><img src="./images/fb_ff.jpg" alt="#" /></li>
										<li><img src="./images/fb_ff.jpg" alt="#" /></li>
										<li><img src="./images/fb_ff.jpg" alt="#" /></li>
										<li><img src="./images/fb_ff.jpg" alt="#" /></li>
										<li><img src="./images/fb_ff.jpg" alt="#" /></li>
										<li><img src="./images/fb_ff.jpg" alt="#" /></li>
										<li><img src="./images/fb_ff.jpg" alt="#" /></li>
									</ul>
									<div>
										<img src="./images/profile_facebook.jpg" alt="한국관광공사 페이스북 프로필 사진" /><b>한국관광공사</b><span>8시간</span>

									</div>
									<ul class="fb_cont">
										
									</ul>
									
								</dd>
							</dl>
						</div>
					</div>
					<!--                m5_sns_content END-->
				</div>
			</section>
			<!--                .m_content m5 END-->
			
		</div>
		
		<!--        #main END-->
<?php include_once "./footer.php"; ?>
