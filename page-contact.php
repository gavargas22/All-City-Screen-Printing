<?php get_header(); ?>

<div style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/images/background.png)" class="wrapper-class message-holder">
      <div class="container">
        <h1>Direct Contact</h1>
        <p>This is if you prefer to contact us directly.</p>
      </div>
    </div>
    <div class="wrapper-class">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="docs-content">
            <?php if (have_posts()) : ?>
        	<?php while (have_posts()) : the_post(); ?>
              <h1><?php the_title(); ?></h1>
              <p>
                <p><?php the_content(); ?></p>
              </p>
            <?php endwhile; ?>
    		<?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      
<?php get_footer(); ?>