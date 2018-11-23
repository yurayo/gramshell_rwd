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



  <div id="visual_wrap">
  	<section id="visual_inner">
  		<ul id="visual_list">
	  		<li><a><img src="images/visual01.jpg"></a></li>
	  		<li><a><img src="images/visual02.jpg"></a></li>
	  		<li><a><img src="images/visual03.jpg"></a></li>
  		</ul>
  		<span id="left_btn">
  			<img src="images/left_btn.png">
  		</span>
  		<span id="right_btn">
  			<img src="images/right_btn.png">
  		</span>
  	</section>
  </div>

  <!-- 비쥬얼 영역 끝 -->

  <!-- 컨텐츠영역 시작 -->

  <div id="contents_wrap">

  	<section id="contents_inner">

  		<ul id="contents_list">

  			<li>
	  			<p class="contents_title">HOW TO INSTALL</p>
	  			<p class="contents_img">
	  				<img src="images/contents_img01.gif">
	  			</p>
	  			<p class="contents_text">제품 사용방법을 자세히 설명해 드립니다.</p>
  			</li>

  			<li>
	  			<p class="contents_title">HOW TO INSTALL</p>
	  			<p class="contents_img">
	  				<img src="images/contents_img01.gif">
	  			</p>
	  			<p class="contents_text">제품 사용방법을 자세히 설명해 드립니다.</p>
  			</li>

  			<li>
	  			<p class="contents_title">HOW TO INSTALL</p>
	  			<p class="contents_img">
	  				<img src="images/contents_img01.gif">
	  			</p>
	  			<p class="contents_text">제품 사용방법을 자세히 설명해 드립니다.</p>
  			</li>

  			<li>
	  			<p class="contents_title">HOW TO INSTALL</p>
	  			<p class="contents_img">
	  				<img src="images/contents_img01.gif">
	  			</p>
	  			<p class="contents_text">제품 사용방법을 자세히 설명해 드립니다.</p>
  			</li>


  		</ul>
  		
  		<section id="custom">
  			
  			<?
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨이름, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        	echo latest("basic", "custom", 5, 25);
 ?>

  			
  		</section>
  		
  		
  	</section>

  </div>








<?php
include_once(G5_PATH.'/tail.php');
?>