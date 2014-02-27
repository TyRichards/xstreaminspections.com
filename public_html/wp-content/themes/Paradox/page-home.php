<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<!-- determine main column size from actived sidebar -->

<!-- Subheader Section -->
<section class="header-11-sub bg-concrete">
    <div class="background">
        &nbsp;
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <h1>Schedule Your Inspection</h1>
                <p>
                    Complete the form below to schedule an inspection with us.
                </p>
                <div class="signup-form">
                    <form>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Your E-mail">
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <div>
                                <input type="password" class="form-control" placeholder="Confirmation">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-info">Sign Up</button>
                        </div>
                    </form>
                </div>
                <div class="additional-links">
                    By signing up you agree to <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
                </div>
            </div>
            <div class="col-sm-7 player-wrapper">
                <div class="player">
                    <iframe src="http://player.vimeo.com/video/29568236?color=3498db" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    <!--<iframe src="http://www.youtube.com/embed/BCC7rFxo6QA" allowfullscreen></iframe>-->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Credibility indicators -->
<section class="logos">
    <div class="container">
        <div><img src="img/logos/mashable.png" alt="">
        </div>
        <div><img src="img/logos/guardian.png" alt="">
        </div>
        <div><img src="img/logos/forbes.png" alt="">
        </div>
        <div><img src="img/logos/red-bull.png" alt="">
        </div>
        <div><img src="img/logos/ny-times.png" alt="">
        </div>
    </div>
</section>

<!-- content-9  -->
<section class="content-9">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">                
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
 
            </div>
            <div class="col-sm-5">
                <div class="col-sm-11 col-sm-offset-1"
                <?php get_sidebar('default'); ?>                 
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?> 