<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>

  <div id="footer_wrap">
  	<footer id="footer_inner">
  		<h2 class="hidden">하단정보영역</h2>
  		<p id="copyright">
  			copyright(c)2012 GLAMSHELL. all right reserved.
  		</p>

  	</footer>
  </div>


<?php
include_once(G5_PATH."/tail.sub.php");
?>