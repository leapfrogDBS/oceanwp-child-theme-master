<section class="pb-0 relative bg-cover pb-36 lg:pb-0 lg:pt-12" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/parent/testimonials-bg.png')">
    <div class="container3 max-w-none">
        <div class="row">
            <div class="column lg:col-span-8 text-white pt-12 px-12 md:px-[8%] lg:pr-0 lg:pl-[16.6%] ">
                <p class="headingFour uppercase mb-12">Our members say...</p>
                
                <?php if(have_rows('parent_testimonial')) { ?>
               
                    <div class="splide mb-16 lg:mb-32" id="testimonial-slider">
                        <div class="splide__track">
                            <ul class="splide__list"> 
                                <?php while( have_rows('parent_testimonial') ) : the_row(); 
                                    $parent_review = get_sub_field('parent_review');
                                    $parent_written_by = get_sub_field('parent_written_by');
                                    ?>
                                    <li class="splide__slide"> 
                                        <p class="headingThree light mb-12 text-[40px] leading-tight">“<?php echo $parent_review; ?>”</p>
                                        <p class="headingFive w-1/2"><?php echo $parent_written_by; ?></p>
                                    </li>
                                <?php endwhile; ?>
                                
                            </ul>
                        </div>
                    </div>

                <?php } ?>

            </div>
            <div class="column lg:col-span-4 flex flex-col justify-end">
                <img src="<?php echo get_stylesheet_directory_uri();?>/img/parent/testimonial-photo.png" class="w-full h-auto hidden lg:block lg:absolute lg:bottom-0 lg:right-0  max-w-[467px]">
                <img src="<?php echo get_stylesheet_directory_uri();?>/img/parent/testimonial-mobile.png" class="w-auto h-[45%] sm:h-[60%] right-0 bottom-0 absolute lg:hidden">
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