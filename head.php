<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->
	
  
  <div id="header_wrap">

    <header id="header_inner">
      <a href="/glamshell_rwd/index.php"><h1 id="logo"><img src="/glamshell_rwd/images/logo.gif" alt="글렘쉘웹사이트"></h1></a>
      <nav id="topmenu">
        <h2 class="hidden">상단빠른메뉴</h2>
   
  		 <ul id="topmenu_list">
            <?php if ($is_member) {  ?>

            <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
            <?php if ($is_admin) {  ?>
            <li class="tnb_admin"><a href="<?php echo G5_ADMIN_URL ?>">관리자</a></li>
            <?php }  ?>
            <?php } else {  ?>
               <li><a href="<?php echo G5_BBS_URL ?>/login.php">LOGIN</a></li>
            <?php }  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/register.php">JOIN</a></li>
  			<li><a href="#">SEARCH</a></li>
        	<li><a href="/glamshell_rwd/bbs/board.php?bo_table=qa&page=">QNA</a></li>
            <li><a href="/glamshell_rwd/bbs/board.php?bo_table=custom">CUSTOM</a></li>
        </ul>
   
   
   
      </nav>

      <nav id="mainmenu">
        <h2 class="hidden">메인메뉴</h2>
        <ul id="mainmenu_list">

          <li><a href="/glamshell_rwd/brand.php">BRAND</a>
             <ul class="submenu_list">
               <li><a href="#">서브메뉴1</a></li>
               <li><a href="#">서브메뉴2</a></li>
               <li><a href="#">서브메뉴3</a></li>
               <li><a href="#">서브메뉴4</a></li>
             </ul>
          </li>
          <li><a href="/glamshell_rwd/collection.php">COLLECTION</a>
             <ul class="submenu_list">
               <li><a href="#">서브메뉴1</a></li>
               <li><a href="#">서브메뉴2</a></li>
               <li><a href="#">서브메뉴3</a></li>
               <li><a href="#">서브메뉴4</a></li>
             </ul>
          </li>
          <li><a href="#">STORE</a>
             <ul class="submenu_list">
               <li><a href="#">서브메뉴1</a></li>
               <li><a href="#">서브메뉴2</a></li>
               <li><a href="#">서브메뉴3</a></li>
               <li><a href="#">서브메뉴4</a></li>
             </ul>
          </li>
          <li><a href="#">REVIEW</a>
             <ul class="submenu_list">
               <li><a href="#">서브메뉴1</a></li>
               <li><a href="#">서브메뉴2</a></li>
               <li><a href="#">서브메뉴3</a></li>
               <li><a href="#">서브메뉴4</a></li>
             </ul>
          </li>
          <li><a href="#">CUSTOMER</a>
             <ul class="submenu_list">
               <li><a href="#">서브메뉴1</a></li>
               <li><a href="#">서브메뉴2</a></li>
               <li><a href="#">서브메뉴3</a></li>
               <li><a href="#">서브메뉴4</a></li>
             </ul>
          </li>
        </ul>
      </nav>

      <h2 id="weeklybest">
      	<img src="/glamshell_rwd/images/best_btn.gif" alt="주간베스트상품">
      </h2>

    </header>

    <div id="sub_bg"></div>
  </div>
	
<!-- } 상단 끝 -->












