<section class="pb-0 relative bg-cover pb-36 lg:pb-0 lg:pt-12" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/testimonials-background.png')">
    <div class="container2">
        <div class="row">
            <div class="column lg:col-span-8 text-white pt-12 lg:pr-12  ">
                <p class="headingFour uppercase mb-12">Our members say...</p>
                
                <?php if(have_rows('student_testimonial', 'option')) { ?>
               
                    <div class="splide" id="testimonial-slider">
                        <div class="splide__track">
                            <ul class="splide__list"> 
                                <?php while( have_rows('student_testimonial', 'option') ) : the_row(); 
                                    $student_review = get_sub_field('student_review');
                                    $student_written_by = get_sub_field('student_written_by');
                                    ?>
                                    <li class="splide__slide"> 
                                        <p class="headingThree light mb-12 text-[40px] leading-tight">“<?php echo $student_review; ?>”</p>
                                        <p class="headingFive w-1/2"><?php echo $student_written_by; ?></p>
                                    </li>
                                <?php endwhile; ?>
                                
                            </ul>
                        </div>
                    </div>

                <?php } ?>

            </div>
            <div class="column lg:col-span-4 flex flex-col justify-end">
                <img src="<?php echo get_stylesheet_directory_uri();?>/img/testimonial-photo.png" class="w-full h-auto hidden lg:block lg:mt-24">
                <img src="<?php echo get_stylesheet_directory_uri();?>/img/testimonial-mobile.png" class="w-auto h-[50%] right-0 bottom-0 absolute lg:hidden">
            </div>
        </div>
    </div>
</section>

<script defer>
    var testimonailSlider = new Splide( '#testimonial-slider', {
           pagination: true,
           autoplay: true,
           interval: 5000,
           arrows: false,
           type: 'loop',

    });
    testimonailSlider.mount();
</script>