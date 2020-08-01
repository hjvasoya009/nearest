<?php get_header(); ?>



	<div class="error-404-content">


		<div class="section-inner">
            <h2>404</h2>

			<p><?php printf( __( "Sorry, looks like this page is flushed. <br> But don't worry, you can visit our %s for more information.", 'nearest' ), '<a href="' . esc_url( home_url() ) . '">' . __( 'Home Page', 'nearest' ) . '</a>' ); ?></p>

		</div><!-- .section-inner -->

	</div><!-- .error-404-content -->


<?php get_footer(); ?>



<!-- Sorry, we couldn't find this page. But don't worry, you can visit our homepage for more information.  -->