<?php

/* This is the template for displaying the Student page */

get_header(); ?>
	
	<?php 
        include(locate_template('template-parts/student/hero.php'));
        include(locate_template('template-parts/student/intro.php'));
        include(locate_template('template-parts/student/cards.php'));
        include(locate_template('template-parts/student/whats-on.php'));
        include(locate_template('template-parts/student/sign-up.php'));
        include(locate_template('template-parts/student/testimonials.php'));
    ?>
	
<?php get_footer(); ?>
