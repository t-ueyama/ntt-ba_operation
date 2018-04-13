<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="/img/favicon.ico" rel="icon" type="image/x-icon" />
		<link href="/img/favicon.ico" rel="shortcut icon" type="img/x-icon" />
		<!-- ogp -->
		<meta property="og:site_name" content="ＮＴＴビジネスアソシエ" />
		<meta property="og:title" content="総務・人事・経理の代行（アウトソーシング）ならＮＴＴビジネスアソシエ" />
		<meta property="og:description" content="総務・人事・経理の代行（アウトソーシング）なら、ＮＴＴビジネスアソシエにお任せください！ＮＴＴグループで培った豊富な実務経験と高い専門性を生かしたノウハウで、煩雑な間接業務を代行いたします。コンサルティング、アウトソーシング、企業研修などで、総務・人事・経理に関するお悩みを解消いたします。" />
		<meta property="og:url" content="http://www.ntt-ba.co.jp/" />
		<meta property="og:image" content="http://www.ntt-ba.co.jp/common/img/ogp.png" />
		<!--ogp -->

		<title><?php wp_title ( '|', true,'right' ); ?><?php bloginfo('name'); ?></title>
<?php
$uri = $_SERVER['REQUEST_URI'];
if(preg_match("/^\/topics\/$/", $uri)){
?>
		<meta name="description" content="NTTビジネスアソシエの新着情報です。NTTグループで培った豊富な実務経験と高い専門性を生かしたノウハウで、煩雑な間接業務を代行いたします。コンサルティング、アウトソーシング、企業研修などで、総務・人事・経理に関するお悩みを解消いたします。" />
		<meta name="keywords" content="新着情報,経理,総務,人事,代行,アウトソーシング,間接業務,コンサルティング,コンサルテーション,NTTビジネスアソシエ,エヌ・ティ・ティ ビジネスアソシエ" />
<?php
}elseif(preg_match("/^\/topics\/topics_list/", $uri)){
?>
		<meta name="description" content="TOPICS一覧のご案内です。NTTビジネスアソシエは、NTTグループで培った豊富な実務経験と高い専門性を生かしたノウハウで、煩雑な間接業務を代行いたします。コンサルティング、アウトソーシング、企業研修などで、総務・人事・経理に関するお悩みを解消いたします。" />
		<meta name="keywords" content="TOPICS一覧,経理,総務,人事,代行,アウトソーシング,間接業務,コンサルティング,コンサルテーション,NTTビジネスアソシエ,エヌ・ティ・ティ ビジネスアソシエ" />
<?php
}elseif(preg_match("/^\/topics\/seminar/", $uri)){
?>
		<meta name="description" content="NTTビジネスアソシエの経営セミナー一覧です。総務・人事・経理の代行（アウトソーシング）なら、お任せください！NTTグループで培った豊富な実務経験と高い専門性を生かしたノウハウで、煩雑な間接業務を代行いたします。コンサルティング、アウトソーシング、企業研修などで、総務・人事・経理に関するお悩みを解消いたします。" />
		<meta name="keywords" content="経営セミナー,経理,総務,人事,代行,アウトソーシング,間接業務,コンサルティング,コンサルテーション,NTTビジネスアソシエ,エヌ・ティ・ティ ビジネスアソシエ" />
<?php
}
?>

		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<link href="/css/font-awesome.min.css" rel="stylesheet">
		<link href="/css/common.css" rel="stylesheet">
		<link href="/css/page.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

		<?php include('../include/header_inc.php' ); ?>

		<!-- GoogleAnalytics 2016.4.1 /////////////////////////////////////////////////////// -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-27934865-1', 'auto');
		  ga('send', 'pageview');

		</script>
		<!-- //////////////////////////////////////////////////////////////////////////////// -->

	</head>
	<body><span class="accessKeyDest">ページの先頭です。</span>
		<noscript>
			<p id="NoScriptWarning">当ウェブサイトを快適にご覧いただくには、ブラウザ のJavaScript設定を有効（オン）、CSSを有効（オン）にしていただく必要がご ざいます。</p> 
		</noscript>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4 logo-top">
						<h1><a href="/index.html"><img alt="ＮＴＴビジネスアソシエ" src="/img/common/logo.png"></a></h1>
					</div>
					<div class="col-xs-12 col-sm-8 top-banner">
						<div class="text-right hidden-xs">
							<img src="/img/common/head_freedial.png" class="freedial" alt="お客さま専用フリーダイヤル0120-27-3622（平日9時30分～18時）">
							<a href="/nttservice.html"><img src="/img/common/head_groupetel.png" alt="ＮＴＴグループの方からのお問い合わせはこちら"></a>
							<a href="/mailma_regist/form.html" target="_blank"><img src="/img/common/head_btn01.png" onclick="goocv_nttba_mlist(); xdmpcv_nttba_mlist();" alt="メールマガジンのご登録"></a>
							<a href="/inquiry/form/form.html" target="_blank"><img src="/img/common/head_btn02.png" onclick="goocv_nttba_contact(); xdmpcv_nttba_contact();" alt="資料請求・お問い合わせ"></a>
						</div>

						<div class="text-right">
							<form id="search" class="pull-right" action="http://search.goo.ne.jp/web.jsp" name="query">
								<input type="text"  name="MT" value="" title="サイト内検索"><button type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
								<input onclick="0" type="hidden" name="RD" value="DM" />
								<input type="hidden" name="Domain" value="www.ntt-ba.co.jp" />
								<input type="hidden" name="from" value="USR" />
								<input type="hidden" name="IE" value="UTF8" />
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="gnavi-area"><span class="accessKeyDest">グローバルナビはここからです。</span>
				<div class="container">
					<nav class="navbar navbar-default" id="gnavi">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand visible-xs" href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>ホーム</a>
							<a class="navbar-brand visible-xs" href="/inquiry/form/form.html" aria-label="ホーム" title="ホーム"><span class="fa fa-file-text"></span>お問い合わせ</a>
						</div>

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<div>
								<ul class="nav navbar-nav container-fluid">
									<li class="hidden-xs current"><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
									<li><a href="/concept/index.html"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>ＮＴＴビジネスアソシエとは</a></li>
									<li class="dropdown hidden-xs">
										<a href="/servicemenu01/index.html"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>サービスメニュー</a>
										<ul class="dropdown-menu gnavi-sub">
											<li><a href="/servicemenu01/index.html"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>社宅管理・不動産関連</a></li>
											<li><a href="/servicemenu02/index.html"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>経理・財務関連</a></li>
											<li><a href="/servicemenu03/index.html"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>人事・給与・福利厚生関連</a></li>
											<li><a href="/servicemenu05/index.html"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>RPA関連</a></li>
											<li><a href="/servicemenu04/index.html"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>課題から探す</a></li>
											
										</ul>
									</li>
									<li class="visible-xs">
										<a href="/servicemenu01/index.html"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>サービスメニュー</a>
										<ul class="list-unstyled gnavi-sub">
											<li><a href="/servicemenu01/index.html"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>社宅管理・不動産関連</a></li>
											<li><a href="/servicemenu02/index.html"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>経理・財務関連</a></li>
											<li><a href="/servicemenu03/index.html"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>人事・給与・福利厚生関連</a></li>
											<li><a href="/servicemenu05/index.html"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>RPA関連</a></li>
											<li><a href="/servicemenu04/index.html"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>課題から探す</a></li>
										</ul>
									</li>
									<li class="dropdown hidden-xs">
										<a href="/casemenu01/index.html"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>導入事例</a>
										<ul class="dropdown-menu gnavi-sub">
											<li><a href="/casemenu01/index.html"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>社宅管理・不動産関連</a></li>
											<li><a href="/casemenu02/index.html"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>経理・財務関連</a></li>
											<li><a href="/casemenu03/index.html"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>人事・給与・福利厚生関連</a></li>
											<li><a href="/casemenu04/index.html"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>RPA関連</a></li>
										</ul>
									</li>
									<li class="visible-xs">
										<a href="/casemenu01/index.html"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>導入事例</a>
										<ul class="list-unstyled gnavi-sub">
											<li><a href="/casemenu01/index.html"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>社宅管理・不動産関連</a></li>
											<li><a href="/casemenu02/index.html"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>経理・財務関連</a></li>
											<li><a href="/casemenu03/index.html"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>人事・給与・福利厚生関連</a></li>
											<li><a href="/casemenu04/index.html"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>RPA関連</a></li>
										</ul>
									</li>
									<li><a href="/topics/"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>新着情報</a></li>
									<li><a href="/company/index.html"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>企業情報</a></li>
									<li><a href="/recruit/index.html"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>採用情報</a></li>
								</ul>
							</div>
						</div><!-- /.navbar-collapse -->
					</nav>
				</div><!-- /.container -->
			</div>
<?php wp_head(); ?>
		</header>

<!-- header -->