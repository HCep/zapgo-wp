<?php

?>

	</div><!-- #content -->
	</div><!-- .row -->
			</div>
	<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="container mx-auto">
				<div class="main-footer d-flex">
				
					<?php get_sidebar('footer'); ?> 
					
					
				</div>
				
<hr class="my-2" style="background-color:#2D4C5A; color:#2D4C5A;">
		<!-- prawa autorskie -->
		<div class="footer-bottom-row">
			
			
						<div class="site-info d-flex">

						<?php get_sidebar('footer-two'); ?> 
					
			
		</div>
		</div>
		</div>
		
<div class="footer-to-top" id="to-top">
	<a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri() ?>/images/to-top.svg" alt=""></a>
</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/splide.min.js"></script>
<script>
  new Splide( '.splide',{
	arrowPath:'M24 12.001H2.914l5.294-5.295-.707-.707L1 12.501l6.5 6.5.707-.707-5.293-5.293H24v-1z',
  } ).mount();
</script>

</body>
</html>
