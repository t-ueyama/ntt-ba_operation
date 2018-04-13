<?php
	$category = get_the_category();
	$cat_id   = $category[0]->cat_ID;
	$cat_name = $category[0]->cat_name;
?>

<?php get_header(); ?>

<!-- content -->
		<div id="content"><span class="accessKeyDest">コンテンツエリアはここからです。</span>
			<div class="container">
				
				<ol class="breadcrumb">
					<li><a href="/">ホーム</a></li>
					<li><a href="<?php echo home_url( '/' ); ?>">新着情報</a></li>
					<li><a href="<?php echo get_category_link($cat_id) ?>"><?php echo $cat_name ?></a></li>
					<li class="active"><?php the_title(); ?></li>
				</ol>

				<div id="third-page" class="row">
					<div class="col-xs-12 col-sm-9">
						<div id="main-area">

<?php 
	if($cat_id==2) {
?>
							<h2 class="main-img"><img src="/img/page_head_topicslist01.png" class="img-responsive center-block" alt="TOPICS"></h2>
<?php
	}elseif($cat_id==3) {
?>
							<h2 class="main-img"><img src="/img/page_head_seminar01.png" class="img-responsive center-block" alt="イベント・セミナー"></h2>
<?php } ?>

<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
		 the_post();
?>
							<div id="wp-single" class="info-area">
								<h2><?php the_title(); ?></h2>
								
								<?php the_content(); ?>

<?php
		}
	}
?>

<div class="banner-button text-center">
<?php 
	if($cat_id==2) {
?>
	<a href="<?php echo home_url( '/topics_list/' ); ?>"><img class="aligncenter" src="/img/topics_btn01.png" alt="TOPICS 一覧はこちら" /></a>
<?php
	}elseif($cat_id==3) {
?>

	<a href="<?php echo home_url( '/seminar/' ); ?>"><img class="aligncenter" src="/img/topics_btn02.png" alt="イベント・セミナー 一覧はこちら" /></a>
<?php } ?>
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