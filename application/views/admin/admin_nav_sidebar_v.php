    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <?php if($one_depth == 'dashboard') { ?>
			<li class="<?php if($tow_depth == 'dashboard' || $tow_depth == '') { echo 'active'; } ?>"><a href="/admin/dashboard">Dashboard</a></li>
			<?php } ?>
			<?php if($one_depth == 'customer') { ?>
			<li class="<?php if($tow_depth == 'company') { echo 'active'; } ?>"><a href="/admin/customer/company">업체관리</a></li>
            <li class="<?php if($tow_depth == 'member') { echo 'active'; } ?>"><a href="/admin/customer/member">회원관리</a></li>
			<?php } ?>
			<?php if($one_depth == 'room') { ?>
			<li class="<?php if($tow_depth == 'room') { echo 'active'; } ?>"><a href="/admin/room/room">객실관리</a></li>
			<?php } ?>
			<?php if($one_depth == 'service') { ?>
			<li class="<?php if($tow_depth == 'banner') { echo 'active'; } ?>"><a href="/admin/service/banner">배너관리</a></li>
			<li class="<?php if($tow_depth == 'event') { echo 'active'; } ?>"><a href="/admin/service/event">이벤트관리</a></li>
			<li class="<?php if($tow_depth == 'coupon') { echo 'active'; } ?>"><a href="/admin/service/coupon">쿠폰관리</a></li>
			<?php } ?>
			<?php if($one_depth == 'board') { ?>
			<li class="<?php if($tow_depth == 'notice') { echo 'active'; } ?>"><a href="/admin/board/notice">공지사항관리</a></li>
			<li class="<?php if($tow_depth == 'faq') { echo 'active'; } ?>"><a href="/admin/board/faq">자주묻는질문관리</a></li>
			<?php } ?>
          </ul>
         <!--  <ul class="nav nav-sidebar">
            <li><a href="/admin/room/room">객실관리</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul> -->
        </div>
