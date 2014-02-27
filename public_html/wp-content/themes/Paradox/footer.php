<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

			</div><!--.site-content-->			

			<!-- Footer 1 -->
			<footer class="footer-1 bg-midnight-blue">
		        <div class="container">
				    <div class="row">
				        <div class="col-sm-5">
			                <p class="lead">
			                	Serving North Texas Since 2001
			                </p>
			              		We’ve created the product that will help your startup to look even better.
			                <p class="social-btns">
			                	<img src="../../common-files/img/content/social-icons.png" alt="">
			              	</p>
				        </div>
				        <nav>
				            <div class="col-sm-2">
								<?php dynamic_sidebar('footer-left'); ?>
				            </div>
				            <div class="col-sm-2">
				            	<?php dynamic_sidebar('footer-right'); ?>
<!-- 				                <h6>Follow Us</h6>
				                <ul>
									<li><a href="#">Facebook</a>
									</li>
									<li><a href="#">Twitter</a>
									</li>
									<li><a href="#">Instagram</a>
									</li>
				                </ul> -->
				            </div>
				        </nav>
				        <div class="col-sm-3 buy-btn">
				            <a class="btn btn-danger btn-block" href="#">Schedule Inspection</a> or <a href="#">Learn More</a>
				        </div>
				   </div>
		           <div class="row">
				        <div class="col-sm-5 additional-links">
				        	<a href="#">© 2014 Xstream Inspections</a>				            
				            <a href="/privacy">Privacy Policy</a>
				        </div>
				    </div>
		        </div>
      </footer>		
		
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
	</body>
</html>