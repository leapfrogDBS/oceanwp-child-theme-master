<?php

/* This is the template for displaying the Student page */

get_header(); ?>
		<?php do_action( 'ocean_before_content_wrap' ); ?>

<div id="content-wrap" class="container clr">

    <?php do_action( 'ocean_before_primary' ); ?>

    <div id="primary" class="content-area clr">

        <?php do_action( 'ocean_before_content' ); ?>

        <div id="content" class="site-content clr">

            <?php do_action( 'ocean_before_content_inner' ); ?>

            <?php
            // Elementor `single` location.
            if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'single' ) ) {
?>
	<?php 
        include(locate_template('template-parts/student/hero.php'));
        include(locate_template('template-parts/student/intro.php'));
        include(locate_template('template-parts/student/cards.php'));
        include(locate_template('template-parts/student/whats-on.php'));
        include(locate_template('template-parts/student/sign-up.php')); 
        include(locate_template('template-parts/student/testimonials.php'));
    ?>

 <?php   
}
				?>

				<?php do_action( 'ocean_after_content_inner' ); ?>

			</div><!-- #content -->

			<?php do_action( 'ocean_after_content' ); ?>

		</div><!-- #primary -->

		<?php do_action( 'ocean_after_primary' ); ?>

	</div><!-- #content-wrap -->

	<?php do_action( 'ocean_after_content_wrap' ); ?>

<?php get_footer(); ?>
	

