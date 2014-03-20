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
                <h2 style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/clipboard.png') no-repeat top left; padding-left: 120px;">Inspect Your Investment</h2>
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



<?php get_footer(); ?> 