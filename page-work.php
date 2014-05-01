<?php get_header(); ?>
    <div style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/images/background.png)"
    class="wrapper-class message-holder">
        <div class="container">
            <h1>Work Samples</h1>
            <p>Our team can make any project come to life, no matter how complex.</p>
        </div>
    </div>
    <div class="wrapper-class">
        <div class="row">
            <div class="col-sm-12">
                <div class="docs-content">
                    <div class="work-tile">
                        <div class="work-tile-image-holder">
                            <img src="https://dov5cor25da49.cloudfront.net/products/4459/1272x920shirt_guys_01.jpg"
                            />
                        </div>
                        <div class="work-tile-description-holder">
                            <h4>Rocket Science</h4>
                        </div>
                    </div>
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <h1>
                                <?php the_title(); ?>
                            </h1>
                            <p>
                                <p>
                                    <?php the_content(); ?>
                                </p>
                            </p>
                            <?php endwhile; ?>
                                <?php endif; ?>
                </div>
            </div>
        </div>
        <?php get_footer(); ?>