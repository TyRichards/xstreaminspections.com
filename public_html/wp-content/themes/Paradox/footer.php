<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

			</div><!--.body-content-->	

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
			
			<footer class="footer">
				<section class="more-foot">
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
			        </div>
	      		</section>	      		
	      		<section class="small-footer">
	      			<div class="container">
		        		<p class="pull-left"><small>© <?php echo date("Y"); ?> Xstream Inspections</small></p>
		        		<p class="pull-right">Site crafted by Paradox</p>
		        	</div>
		        </section>	
	      	</footer>	
		
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
	</body>
</html>