<?php get_header(); ?>

<script type="text/javascript"src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4xKGXg5aY_0umRphlyqZ_BHST3pqTsDY&sensor=false"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/mapLoader.js"></script>
<div class="wrapper-class message-holder">
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
              <h1></h1>
              <p>
                <p><?php the_content(); ?></p>

                <h1>Our Location</h1>
              <div class="map-card-wrapper"><div id="map-canvas" style="height:400px;"></div></div>
              </p>
            <?php endwhile; ?>
    		<?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      
<?php get_footer(); ?>