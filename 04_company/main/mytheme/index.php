<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<div class="content">
		<ul class="contList clearfix">
			<li class="wow fadeInLeft" data-wow-delay="0" data-wow-duration=".1"></li> <!-- 1 -->
			<li class="wow fadeInUp" data-wow-delay="0.2s">
				<!-- 2 -->
				<div class="liTxt">
					<h2>더 스마트하게<br> 이디야커피를 만나는 방법.</h2>
					<h4>쉽고 빠르게 이디야 커피를 주문하세요.</h4>
					<p>이디야오더를 통해 원하는 음료를 주문한 뒤 알림을 통해 실시간 주문현황 확인 및 음료를 바로 받아보실 수 있습니다.</p>
					<a href="#" class="btn">이디야오더 안내</a>
				</div>
			</li>
			<li class="wow fadeInUp" data-wow-delay="0.4s">
				<!-- 3 -->
				<a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=gift"><img src="<? echo G5_THEME_IMG_URL?>/images/block-coffee.png" alt="">
					<p>선물하기</p>
				</a>
			</li>
			<li class="wow fadeInUp" data-wow-delay="0.6s"></li> <!-- 4 -->
			<li class="wow fadeInUp" data-wow-delay="0.2s">
				<!-- 5 -->
				<a href="#"><img src="<? echo G5_THEME_IMG_URL?>/images/block-book.png" alt="">
					<p>이벤트</p>
				</a>
			</li>
			<li class="wow fadeInUp" data-wow-delay="0.4s">
				<!-- 6 -->
				<div class="liTxt">
					<h2>매장찾기</h2>
					<h4>가까운 이디야 매장을<br> 확인해보세요</h4>
					<input type="search" name="location" placeholder="FIND A STORE">
					<button class="btn_search">search</button>
				</div>
			</li>
			<li class="wow fadeInUp" data-wow-delay="0.6s"></li> <!-- 7 -->
			<li class="wow fadeInUp" data-wow-delay="0.8s">
				<a href="#"><img src="<? echo G5_THEME_IMG_URL?>/images/block-coffeepot.png" alt="">
					<p>창업안내</p>
				</a>
			</li> <!-- 8 -->
			<li class="wow fadeInUp" data-wow-delay="0.2s">
				<div class="liTxt">
					<h2 style="font-weight: 100">ALWAYS BESIDE YOU,<span style="font-weight: 900">EDIYA COFFEE</span></h2>
					<p>늘 당신 곁에, 이디야 커피의 다양한 메뉴를 맛보세요.</p>
					<div class="btn btn09"><a href="#">메뉴보기</a></div>
				</div>
			</li> <!-- 9 -->
			<li class="wow fadeInUp" data-wow-delay="0.4s">
				<a href="#"><img src="<? echo G5_THEME_IMG_URL?>/images/block-conversation.png" alt="">
					<p>공지사항</p>
				</a>
			</li>
			<!--10-->
			<li class="wow fadeInUp" data-wow-delay="0.6s">
				<a href="https://www.youtube.com/embed/nuHjZrfLAzY" class="youtube" title="21영상"></a>
			</li>
			<!--11-->
		</ul>
	</div> <!-- content -->

	<div class="container">
		<!-- w100% -->
		<div class="section">
			<!-- 1240 -->

			<h4>EDIYA <span style="font-weight: 900">CULTURE LAB</span></h4>
			<p>커피를 더 특별하게 만드는 문화가 시작되는 공간</p>
			<ul class="clearfix">
				<li onclick="location.href='http://www.daum.net'">
					<div class="card">
						<img src="<? echo G5_THEME_IMG_URL?>/images/block03_icon01.png" alt="" class="wow rubberBand" data-wow-iteration="infinite" data-wow-delay="0s">
						<div class="card_body">
							<h3>이디야 <br> 뮤직 페스타</h3>
							<p>2011년부터 시작된 '이디야 뮤직페스타'는 2018년 약 1만 명의 고객을 무료로 처청하는 등 매년 업그레이드되고 있습니다.</p>
						</div>
					</div>
				</li>
				<li>
					<div class="card">
						<img src="<? echo G5_THEME_IMG_URL?>/images/block03_icon02.png" alt=""class="wow rubberBand" data-wow-iteration="infinite" data-wow-delay="0.2s">
						<div class="card_body">
							<h3>컬쳐랩<br> 시설대관</h3>
							<p>누구나 자유롭게 자신의 재능을 선보일 수 있도록 다양한 Artists들의 장르를 뛰어넘은 무대를 지원합니다.</p>
						</div>
					</div>
				</li>
				<li>
					<div class="card">
						<img src="<? echo G5_THEME_IMG_URL?>/images/block03_icon03.png" alt=""class="wow rubberBand" data-wow-iteration="infinite" data-wow-delay="0.4s">
						<div class="card_body">
							<h3>이디야<br> 컬쳐랩</h3>
							<p>고객의 사랑에 보답하기 위해 축제의 장을 지속적으로 마련하며 고객과의 열정을 함께합니다.</p>
						</div>
					</div>
				</li>
			</ul>

		</div> <!-- section -->
	</div> <!-- container -->
	<article class="news">
		<ul class="newsList clearfix">
			<li>
				<h3>가장 특별한 <br>커피연구소</h3>
				<p>완벽한 커피 한 잔을 위해,<br>
					최고의 커피 전문가들이 끊임없이<br>
					연구합니다.
				</p>
				<div class="btn">
					<a href="#">이디야커피랩</a>
				</div>
			</li>
			<li></li>
			<li><a href="#">엄선된 스페셜티 원두의
					풍미를 최상으로 끌어낸
					최고의 커피를
					경험할 수 있는 공간.
					<span class="wow tada" data-wow-delay="0.6s">MORE ></span></a>
			</li>
			<li></li>
			<li><a href="#">
					신선한 재료와
					저온 숙성 공법으로 만든
					프리미엄 베이커리와
					정통 프랑스식 디저트 커피와
					샌드위치의 완벽한 조화를
					경험하세요.
					<span class="wow tada" data-wow-delay="1s">MORE ></span></a>
			</li>
			<li></li>
			<li><a href="#">
					국내 정상급 바리스타가
					선보이는 커피연구소의
					시그니처 음료,
					그 차이를 느껴보세요.
					<span class="wow tada" data-wow-delay="1.4s">MORE ></span></a>
			</li>
		</ul>
	</article>
	<article class="column clearfix">
		<ul class="colList">
			<li>
				<div class="wrapT">
					<div class="wrap1 clearfix">
						<h3>이디야 소식</h3>
						<a href="#"><span><br>more></span></a>
					</div>
					<table>
						<tr>
							<td><a href="#">21년도 상반기 이디야 메이트 희망기금 안내 </a></td>
							<td class="date">2021.04.05</td>
						</tr>
						<tr>
							<td><a href="#">EDIYA COFFEE X SUBSUB 2021 다이어리세트<br>상세페이지 ＆ 판매매장리스트</a></td>
							<td class="date"><br>2020.09.14</td>
						</tr>
						<tr>
							<td><a href="#">2020 이디야 메이트 희망기금 안내</a></td>
							<td class="date">2020.08.14</td>
						</tr>
					</table>
				</div>
				<div class="wrapB">
					<p style="color: white"><a href="#">브로슈어 다운받기
							<p class="arrow">→</p>
							<img src="<? echo G5_THEME_IMG_URL?>/images/main_brochure_img.png" alt="">
						</a>
					</p>
				</div>
			</li>
			<li>
				<div class="colTxt">
					<h3>고객과 가맹점주, 협력사의<br>
						상생의 가치를 실천합시다.</h3>
					<p>해외에 로열티를 내지 않는 순수한 국내브랜드로<br> 품질좋고 맛있는 정직한 커피를 제공합니다.</p>
					<div class="btn">
						<a href="#">창업안내</a>
					</div>
					<div class="btn">
						<a href="#">창업설명회 안내</a>
					</div>
					<div class="btn">
						<a href="#">브랜드소개</a>
					</div>
				</div>
			</li>
		</ul>
	</article>
<h2 class="sound_only">최신글</h2>

<div class="latest_top_wr">
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('theme/pic_list', 'free', 4, 23);		// 최소설치시 자동생성되는 자유게시판
	echo latest('theme/pic_list', 'qa', 4, 23);			// 최소설치시 자동생성되는 질문답변게시판
	echo latest('theme/pic_list', 'notice', 4, 23);		// 최소설치시 자동생성되는 공지사항게시판
    ?>
</div>
<div class="latest_wr">
    <!-- 사진 최신글2 { -->
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('theme/pic_block', 'gallery', 4, 23);		// 최소설치시 자동생성되는 갤러리게시판
    ?>
    <!-- } 사진 최신글2 끝 -->
</div>

<div class="latest_wr">
<!-- 최신글 시작 { -->
    <?php
    //  최신글
    $sql = " select bo_table
                from `{$g5['board_table']}` a left join `{$g5['group_table']}` b on (a.gr_id=b.gr_id)
                where a.bo_device <> 'mobile' ";
    if(!$is_admin)
	$sql .= " and a.bo_use_cert = '' ";
    $sql .= " and a.bo_table not in ('notice', 'gallery') ";     //공지사항과 갤러리 게시판은 제외
    $sql .= " order by b.gr_order, a.bo_order ";
    $result = sql_query($sql);
    for ($i=0; $row=sql_fetch_array($result); $i++) {
		$lt_style = '';
    	if ($i%3 !== 0 ) $lt_style = "margin-left:2%";
    ?>
    <div style="float:left;<?php echo $lt_style ?>" class="lt_wr">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('theme/basic', $row['bo_table'], 6, 24);
        ?>
    </div>
    <?php
    }
    ?>
    <!-- } 최신글 끝 -->
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
