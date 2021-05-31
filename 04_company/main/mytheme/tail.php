<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

    </div>
    <div id="aside">
        <?php echo outlogin('theme/basic'); // 외부 로그인, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
        <?php echo poll('theme/basic'); // 설문조사, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
    </div>
</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>
<footer>
  <div class="footWrap">
    <a href="#">
      <h1>logo</h1>
    </a>
    <div class="fContent">
      <ul class="clearfix">
        <li class="active"><a href="#">개인정보처리방침</a></li>
        <li><a href="#">멤버스 이용약관</a></li>
        <li><a href="#">가맹 안내</a></li>
        <li><a href="#">대량쿠폰구매</a></li>
        <li><a href="#">채용안내</a></li>
        <li><a href="#">Sitemap</a></li>
        <li><a href="#">점주의 방</a></li>
      </ul>
      <p>서울특별시 강남구 논현로 636 이디야빌딩(서울특별시 강남구 논현동 221-17) | TEL : 02-543-6467 | FAX : 02-543-7191
        <br>
        사업자등록번호 : 107-86-16302 | 통신판매업 신고 : 강남 제 002519호 | 대표이사 : 문창기
        <br><br>
        &copy; 2017 EDIYA COFFEE COMPANY. ALL RIGHTS RESERVED..
      </p>
    </div>
  </div>
</footer>
<!-- 하단 시작 { -->

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
