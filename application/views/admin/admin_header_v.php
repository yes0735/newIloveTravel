<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/assets/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">I Love Travel Project</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="<?php if($one_depth == 'dashboard') { echo 'active'; } ?>"><a href="/admin/dashboard">Dashboard</a></li>
            <li class="dropdown <?php if($one_depth == 'customer') { echo 'active'; } ?>">
              <a href="/admin/customer/company" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">고객관리 <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/admin/customer/company">업체관리</a></li>
                <li><a href="/admin/customer/member">회원관리</a></li>
                <!-- <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li> -->
              </ul>
            </li>
            <li class="dropdown <?php if($one_depth == 'room') { echo 'active'; } ?>">
              <a href="/admin/room/room" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">객실관리 <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/admin/room/room">객실관리</a></li>
              </ul>
            </li>
			<li class="dropdown <?php if($one_depth == 'service') { echo 'active'; } ?>">
              <a href="/admin/service/banner" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">서비스관리 <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/admin/service/banner">배너관리</a></li>
                <li><a href="/admin/service/event">이벤트관리</a></li>
                <li><a href="/admin/service/coupon">쿠폰관리</a></li>
              </ul>
            </li>
			<li class="dropdown <?php if($one_depth == 'board') { echo 'active'; } ?>">
              <a href="/admin/board/notice" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">게시판관리 <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/admin/board/notice">공지사항관리</a></li>
                <li><a href="/admin/board/faq">자주묻는질문관리</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>