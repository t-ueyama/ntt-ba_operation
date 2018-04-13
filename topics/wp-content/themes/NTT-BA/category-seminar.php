<?php get_header(); ?>

<!-- content -->
		<div id="content"><span class="accessKeyDest">コンテンツエリアはここからです。</span>
			<div class="container">
				
				<ol class="breadcrumb">
					<li><a href="/">ホーム</a></li>
					<li><a href="<?php echo home_url( '/' ); ?>">新着情報</a></li>
					<li class="active">イベント・セミナー</li>
				</ol>

				<div id="third-page" class="row">
					<div class="col-xs-12 col-sm-9">
						<div id="main-area">
							<h2 class="main-img"><img src="/img/page_head_seminar01.png" class="img-responsive center-block" alt="新着情報"></h2>

							<div class="info-area">

								<h2>イベント・セミナー</h2>
<?php
	$args = array(
		'cat' => 3,
	);
	get_template_part('loop');
?>

							</div>
						</div>
					</div>
					
<?php get_sidebar(); ?>

				</div>

			</div><!-- /.container -->
		</div>
<!-- content -->


<?php get_footer(); ?>