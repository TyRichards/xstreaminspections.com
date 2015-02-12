<?php
/*
Template Name: Right Sidebar
*/
?>

<?php get_header(); ?>

<section class="primary-content">
    <div class="container col-no-padding-xs">
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
            <div class="col-sm-10 col-sm-offset-2 col-no-padding-xs">
                <?php 
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('sidebar-thumb', array('class' => 'feature-image attachment-sidebar-thumb img-rounded' ));
                    } 
                ?>         
                <?php get_sidebar('default'); ?>
            </div>
        </section>
    </div>
</section>

<?php get_footer(); ?>                