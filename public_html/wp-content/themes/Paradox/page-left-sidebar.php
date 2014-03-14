<?php
/*
Template Name: Left Sidebar
*/
?>

<?php get_header(); ?>

<section class="primary-content">
    <div class="container">        
        <section class="main-col page-content col-sm-7 col-sm-push-5 container">                
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
        <section class="sidebar-col sidebar sidebar-left col-sm-5 col-sm-pull-7">
            <div class="col-sm-10">
                <?php get_sidebar('default'); ?>       
            </div>                       
        </section>        
    </div>
</section>

<?php get_footer(); ?> 