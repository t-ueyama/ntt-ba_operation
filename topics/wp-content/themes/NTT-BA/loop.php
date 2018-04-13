<?php
	global $args;
	$my_query = new WP_Query($args);
?>

<?php 
	if ( $my_query->have_posts() ) {
		while ( $my_query->have_posts() ) {
			$my_query->the_post();
?>
				<dl class="wp-loop dl-horizontal">
					<dt class="entry-date"><?php the_time('Y年n月j日'); ?></dt>
					<dd class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
				</dl>
				<hr>
<?php
		} 
	}else{
?>
				<p>記事がありません。</p>
<?php
	}
?>


<?php 
	wp_reset_query();
?>

