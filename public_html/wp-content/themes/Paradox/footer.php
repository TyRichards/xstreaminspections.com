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
			        <div><img src="" alt="">
			        </div>
			        <div><img src="" alt="">
			        </div>
			        <div><img src="" alt="">
			        </div>
			        <div><img src="" alt="">
			        </div>
			        <div><img src="" alt="">
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
				              		
				                <p class="social-btns">				                	
				                	<a href="#" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
				                	<a href="#" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
				                	<a href="#" target="_blank"><i class="fa fa-google-plus fa-2x"></i></a>
				                	<a href="#" target="_blank"><i class="fa fa-youtube fa-2x"></i></a>
				                	<a href="#" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>			                	
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
					            <a class="btn btn-success btn-block" href="#">Schedule Inspection</a> or <a href="#">Learn More</a>
					        </div>
					   </div>
			        </div>
	      		</section>	      		
	      		<section class="small-footer">
	      			<div class="container">
	      				<div class="col-sm-8">
			        		<div class="pull-left footer-credits">		        			
			        			<small>
			        				<a href="<?php echo esc_url(home_url('/')); ?>">
			        					© <?php echo date("Y"); ?> <?php echo esc_attr(get_bloginfo('name', 'display')); ?>
			        				</a>
			        			</small>		        			
			        		</div>
			        		<div class="pull-left footer-menu">
			        			<?php dynamic_sidebar('footer-credits'); ?>
			        		</div>
		        		</div>
		        		<div class="col-sm-4">
			        		<div class="pull-right">
			        			<a href="http://paradoxcreative.com" target="_blank">
			        				<small>Site crafted by Paradox</small>
			        			</a>
			        		</div>
			        	</div>
		        	</div>
		        </section>	
	      	</footer>	
		
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
		<!-- Typekit -->
		<script type="text/javascript" src="//use.typekit.net/ksc8vkp.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>		
	</body>
</html>