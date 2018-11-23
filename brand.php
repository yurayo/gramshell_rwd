<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>



<!-- start 서브 비쥬얼 영역 -->
<div id="sub_visual_wrap">
	<section id="sub_visual">
		<h2 class="hidden">서브비쥬얼 영역</h2>
		<img src="/glamshell_rwd/images/brand_visual.gif" alt="">
		
	</section>
</div>

<!-- end서브 비주얼 영역 -->


<!-- start 서브컨텐츠영역-->
<div id="sub_contents_wrap">
	<section id="sub_contents">
		<h2 class="hidden">서브컨텐츠영역</h2>
		<section id="sub_menu">
			<h3 class="hidden">서브메뉴</h3>
			<p id="brand_title">
				<img src="/glamshell_rwd/images/brand_title.gif" alt="brand_title">
			</p>
			<p id="brand_title_text">
				<img src="/glamshell_rwd/images/brand_title_text.gif" alt="brand_title_text">
			</p>
			<p id="brand_title_img">
				<img src="/glamshell_rwd/images/brand_title_img.gif" alt="brand_title_img">
			</p>
		</section>
		<section id="sub_article">
			<h3 class="hidden">서브본문</h3>
			<p id="brand_story_img">
				<img src="/glamshell_rwd/images/brand_story_img.jpg" alt="brand_story_img" />
			</p>
			<p id="brand_story_text">
				<img src="/glamshell_rwd/images/brand_story_text.gif" alt="brand_story_text" />
			</p>
		</section>
	</section>
</div>




<?php
include_once(G5_PATH.'/tail.php');
?>