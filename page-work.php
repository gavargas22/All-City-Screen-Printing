<?php get_header(); ?>
<div class="wrapper-class message-holder">
	<div class="container">
		<h1>Work Samples</h1>
		<p>
			Our team can make any project come to life, no matter how complex.
		</p>
	</div>
</div>
<div class="wrapper-class" style="z-index: -1">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/fancybox/jquery.fancybox.pack.js"></script>
    <script type="text/javascript">
			$(".fancybox").fancybox();
    </script>
	<?php 
		$args = array( 'post_type' => 'work_sample', 'posts_per_page' => 10 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
	?>
	<div class="work-tile col-xs-3">
		<div class="work-tile-image-holder">
			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
			<a class="fancybox" title="<?php the_title(); ?>" href="<?php echo $url ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?></a>
			<div class="work-tile-description-holder">
				<p><?php the_title(); ?></p>
			</div>
		</div>
	</div>
	<?php endwhile; ?>

</div>

<?php get_footer(); ?>