			<!-- footer -->
			<footer class="footer container-fluide" role="contentinfo">
				<div class="container">
					<div class="row text-center">
						<div class="d-flex mx-auto align-items-center">
							<img src="http://localhost/chateau-pourtales/wp-content/uploads/2018/06/logo-blanc.png" alt="Château de Pourtalès">
							<?php if ( is_active_sidebar( 'sidebar-rs' ) ) : ?>
							    <div id="widget-area" class="widget-rs" role="complementary">
							        <?php dynamic_sidebar( 'sidebar-rs' ); ?>
							    </div>
							<?php endif; ?>

							<a href="#">Mentions légales</a>
						</div>
					</div>
				</div>

			</footer>
			<!-- /footer -->

		<?php wp_footer(); ?>



		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
		<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js">	</script>
	</body>
</html>
