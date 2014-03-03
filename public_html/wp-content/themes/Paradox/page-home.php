<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<!-- determine main column size from actived sidebar -->

<!-- Subheader Section -->
<section class="masthead">
    <div class="container">        
        <div class="col-sm-7">            
            <div class="flex-video widescreen">

                <iframe src="//player.vimeo.com/video/43363859?title=0&amp;byline=0&amp;portrait=0" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="col-sm-11 col-sm-offset-1">
                <h3>Serving North Texas Since 2001</h3>
                <p>
                    Our 200 point, 50-100 digitally documented inspection gives you the comfort of knowing that your real estate purchase, sale or lease is being tested, inspected and analyzed by the best in the business.
                </p>
                <a class="btn btn-primary btn-lg btn-block" href="/schedule-online">Schedule Inspection</a>
                <a class="text-center block" href="/about-us">Learn More</a>
            </div>
        </div>        
    </div>
</section>

<section class="primary-content">
    <div class="container">        
        <section class="page-content col-sm-7 container">                
            <main id="main" class="site-main" role="main">
                <?php 
                while (have_posts()) {
                  the_post();

                  get_template_part('content', 'page');

                  echo "\n\n";
                  
                  // If comments are open or we have at least one comment, load up the comment template
                  if (comments_open() || '0' != get_comments_number()) {
                    comments_template();
                  }

                  echo "\n\n";

                } //endwhile;
            ?> 

        </section>
        <section class="sidebar col-sm-5">
            <div class="col-sm-10 col-sm-offset-2">
                <?php get_sidebar('default'); ?>       
            </div>                       
        </section>        
    </div>
</section>

<?php get_footer(); ?> 