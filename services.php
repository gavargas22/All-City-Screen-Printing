<?php
/*
Template Name: Services Root Page
*/

get_header(); ?>

<div class="wrapper-class message-holder">
      <div class="container">
        <h1>Services.</h1>
        <p>Take a look and find out why El Paso makes their shirts with us.</p>
      </div>
    </div>
    <div class="wrapper-class" style="padding-bottom: 50px;">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <nav class="docs-sidebar hidden-xs">
            <h2>Menu</h2>
              <ul class="sidebar-nav">
                <li><a href="/services/screen-printing" class="nav-heading">Screen Printing</a></li>
                <li><a href="/services/embroidery" class="nav-heading">Embroidery</a></li>
                <li><a href="/services/design" class="nav-heading">Graphic Design</a></li>
                <!--<li><a href="/services/other" class="nav-heading">Other</a></li>-->
              </ul><hr>
              <ul class="sidebar-nav">
                <button id="open-wizard" class="custom-btn custom-btn-lg custom-btn-primary">Get Started</button>
              </ul>
            </nav>
          </div>
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


            <!--<div class="row">
              <div class="col-sm-12">
                <div class="col-sm-5">
                  <div class="services-image-holder">
                    <img src="https://farm9.staticflickr.com/8248/8628886128_5f028eb454_n.jpg">
                    <div class="services-title-holder">Screen Printing</div>
                  </div>
                </div>
                <div class="col-sm-5">
                  <div class="services-image-holder">
                    <img src="http://37.media.tumblr.com/tumblr_luu84xZxPx1qg859so1_400.jpg">
                    <div class="services-title-holder">Embroidery</div>
                  </div>
                </div>
                <div class="col-sm-5">
                  <div class="services-image-holder">
                    <img src="https://farm4.staticflickr.com/3164/2469162583_2e66b57779.jpg">
                    <div class="services-title-holder">Graphic Design</div>
                  </div>
                </div>
              </div>
            </div>
            </div>-->
          </div>
        </div>
      </div>
      
<?php get_footer(); ?>