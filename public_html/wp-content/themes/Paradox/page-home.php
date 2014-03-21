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
                <a href="#">
                    <span class="fa fa-play-circle btn-play fa-5x" href="#"></span>
                    <img class="player" src="<?php echo get_template_directory_uri(); ?>/assets/images/video-placeholder.png" alt="Xstream Inspections Commercial & Residential Inspections" width="100%" height="100%">
                </a>                    
            </div>
        </div>
        <div class="col-sm-5">
            <div class="col-sm-11 col-sm-offset-1">
                <h2 class="clipboard-icon" >Inspect Your Investment</h2>
                <p>
                    Our 200 point, 50-100 digitally documented inspection gives you the comfort of knowing that your real estate purchase, sale or lease is being tested, inspected and analyzed by the best in the business.
                </p>
                <a class="btn btn-danger" href="/schedule-online">
                    <i class="fa fa-building fa-1x"></i>
                    Commercial
                </a>
                &nbsp;
                <a class="btn btn-primary" href="/schedule-online">
                    <i class="fa fa-home fa-1x"></i>
                    Residential
                </a>
                <div class="text-center">
                or <a href="/about-us">Learn More</a>
                </div>
            </div>
        </div>        
    </div>
</section>

<section class="primary-content">
    <div class="container">
        <section class="main-col page-content col-sm-7 container">
            <div id="main" class="site-main" role="main">
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
                <a class="btn btn-danger" href="#">
                    <i class="fa fa-phone fa-1x">&nbsp;&nbsp;&nbsp;</i>
                    Call (972) 492-7920
                </a>
                    &nbsp;&nbsp;
                <a class="btn btn-danger" href="/contact-us">
                    <i class="fa fa-envelope fa-1x">&nbsp;&nbsp;&nbsp;</i>
                    Email Us
                </a>                  
           </div>
        </section>
        <section class="sidebar-col sidebar-right sidebar col-sm-5">
            <div class="col-sm-10 col-sm-offset-2">
                <?php 
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('sidebar-thumb', array('class' => 'feature-image attachment-sidebar-thumb img-rounded' ));
                    } 
                    else {
                        ?><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sidebar-default.jpg" class="feature-image attachment-sidebar-thumb wp-post-image img-rounded" alt="<?php wp_title('|', true, 'right'); ?>"><?php
                    }
                ?>         
                <?php get_sidebar('default'); ?>
            </div>
        </section>
    </div>
</section>


<?php get_footer(); ?> 