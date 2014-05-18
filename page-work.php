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

	<div class="work-tile col-xs-3">
		<div class="work-tile-image-holder">
			<a href="#"><img src="https://dov5cor25da49.cloudfront.net/products/5040/636x460shirt_guys_01.jpg" /></a>
		</div>
		<div class="work-tile-description-holder">
			<p>Furr Division</p>
		</div>
	</div>
	<div class="work-tile col-xs-3">
		<div class="work-tile-image-holder">
			<a href="#"><img src="https://dov5cor25da49.cloudfront.net/products/3997/636x460shirt_guys_01.jpg" /></a>
			<div class="work-tile-description-holder">
				<p>El Paso Skull</p>
			</div>
		</div>
	</div>
	
	<div class="work-tile col-xs-3">
		<div class="work-tile-image-holder">
			<a href="#"><img src="https://dov5cor25da49.cloudfront.net/products/5842/636x460shirt_guys_01.jpg" /></a>
			<div class="work-tile-description-holder">
				<p>Abide</p>
			</div>
		</div>
	</div>
	
	<div class="work-tile col-xs-3">
		<div class="work-tile-image-holder">
			<a href="#"><img src="https://dov5cor25da49.cloudfront.net/products/5857/636x460shirt_guys_01.jpg" /></a>
			<div class="work-tile-description-holder">
				<p>Front Stage</p>
			</div>
		</div>
	</div>
	
	<div class="work-tile col-xs-3">
		<div class="work-tile-image-holder">
			<a href="#"><img src="https://dov5cor25da49.cloudfront.net/products/3602/636x460shirt_guys_01.jpg" /></a>
			<div class="work-tile-description-holder">
				<p>Say something nice</p>
			</div>
		</div>
	</div>
	
	<div class="work-tile col-xs-3">
		<div class="work-tile-image-holder">
			<a href="#"><img src="https://dov5cor25da49.cloudfront.net/products/5826/636x460shirt_guys_01.jpg" /></a>
			<div class="work-tile-description-holder">
				<p>Cool</p>
			</div>
		</div>
	</div>

	<?php 
		$args = array( 'post_type' => 'work_sample', 'posts_per_page' => 10 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
	?>
	<div class="work-tile col-xs-3">
		<div class="work-tile-image-holder">
			<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?></a>
			<div class="work-tile-description-holder">
				<p><?php the_title(); ?></p>
			</div>
		</div>
	</div>
	<?php endwhile; ?>

</div>

<?php get_footer(); ?>