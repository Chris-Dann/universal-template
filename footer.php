	</div><!-- #content -->

	<footer class="footer container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					Address line 1<br>
					Address line 2<br>
					Address line 3<br>
					Address line 4
				</div>
				<div class="col-md-3">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-3',
						'menu_id'        => 'footer-menu',
						'container'		 => '',
					) );
					?>
				</div>
				<div class="col-md-3"></div>
				<div class="col-md-3"></div>
			</div>	
		
		</div><!-- .container -->
	</footer><!-- footer .container-fluid -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
