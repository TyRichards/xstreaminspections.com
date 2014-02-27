<?php
/*
Template Name: Home
*/


get_header(); 

/**
 * determine main column size from actived sidebar
 */

?><section class="header-11-sub bg-midnight-blue">
    <div class="background">
        &nbsp;
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h3>Features of Startup Framework</h3>
                <p>
                    You have the design, you have the code. We’ve created the product that will help your startup to look even better.
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
            <div class="col-sm-7 col-sm-offset-1 player-wrapper">
                <div class="player">
                    <iframe src="http://player.vimeo.com/video/29568236?color=3498db" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    <!--<iframe src="http://www.youtube.com/embed/BCC7rFxo6QA" allowfullscreen></iframe>-->
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$main_column_size = bootstrapBasicGetMainColumnSize();
?> 
<?php get_sidebar('left'); ?> 
        <div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
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
          </main>
        </div>
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 