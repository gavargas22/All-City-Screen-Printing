<?php get_header(); ?>

<div class="wrapper-class message-holder">
      <div class="container">
        <h1>Services.</h1>
        <p>Take a look and find out why El Paso makes their shirts with us.</p>
      </div>
    </div>
    <div class="wrapper-class">
      <div class="container">
        <div class="row">
          <div class="col-sm-9">
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