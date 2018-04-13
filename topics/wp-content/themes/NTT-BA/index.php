<?php get_header(); ?>

<!-- content -->
		<div id="content"><span class="accessKeyDest">コンテンツエリアはここからです。</span>
			<div class="container">
				
				<ol class="breadcrumb">
					<li><a href="/">ホーム</a></li>
					<li class="active">新着情報</li>
				</ol>

				<div id="third-page" class="row">
					<div class="col-xs-12 col-sm-9">
						<div id="main-area">
							<h2 class="main-img"><img src="/img/page_head_topicslist.png" class="img-responsive center-block" alt="新着情報"></h2>

							<div class="info-area">

								<h2>TOPICS</h2>
<?php
	$args = array(
		'cat' => 2,
		'posts_per_page' => 10
	);
	get_template_part('loop');
?>
								<div class="banner-button text-center">
									<a href="topics_list/"><img src="/img/topics_btn01.png" alt="TOPICS 一覧はこちら"></a>
								</div>

								<h2>イベント・セミナー</h2>
<?php
	$args = array(
		'cat' => 3,
		'posts_per_page' => 10
	);
	get_template_part('loop');
?>

<div class="banner-button text-center">
									<a href="seminar/"><img src="/img/topics_btn02.png" alt="イベント・セミナー 一覧はこちら"></a>
								</div>



							</div>
						</div>
					</div>
					
<?php get_sidebar(); ?>

				</div>

			</div><!-- /.container -->
		</div>
<!-- content -->


<?php get_footer(); ?>