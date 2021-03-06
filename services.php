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
          <div class="col-sm-3" style="border-right:1px solid #eee;">
            <nav class="docs-sidebar hidden-xs">
              <ul class="sidebar-nav">
                <li><a href="#screen-printing" class="nav-heading">Screen Printing</a></li>
                <li><a href="#embroidery" class="nav-heading">Embroidery</a></li>
                <li><a href="#design" class="nav-heading">Graphic Design</a></li>
                <!--<li><a href="/services/other" class="nav-heading">Other</a></li>-->
              </ul><hr>
              <ul class="sidebar-nav" style="text-align:center; font-size:14px; font-weight:bold;">
              <p>Ready to go?</p>
                <a href="/job" style="background-color:#ccc;" class="custom-btn custom-btn-lg custom-btn-secondary" role="button">Get Started</a>
              </ul>
            </nav>
          </div>
          <div class="col-sm-9">
            <div class="docs-content custom-posts-with-style">
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