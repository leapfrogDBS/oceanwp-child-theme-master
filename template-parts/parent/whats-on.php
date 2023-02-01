<?php
$student_whats_on_title = get_field('student_whats_on_title');
$student_whats_on_subtitle = get_field('student_whats_on_subtitle');
$student_whats_on_button_text = get_field('student_whats_on_button_text');
$student_whats_on_button_link = get_field('student_whats_on_button_link');
?>


<section id="parent-whats-on-section" class="bg-cover bg-fixed pb-0 lg:pt-24">
    <div class="container3 max-w-none">
        <div class="row text-white ">
            <div class="column lg:col-span-7 flex flex-col justify-center mb-16 px-12 md:px-[8%] lg:pr-0 lg:pl-[16.6%]">
                
                    <?php if ($student_whats_on_title) { ?>
                        <p class="headingThree mb-6"><?php echo $student_whats_on_title; ?></p>
                    <?php } ?>

                    <?php if ($student_whats_on_subtitle) { ?>
                        <p class="bodyText text-white"><?php echo $student_whats_on_subtitle; ?></p>
                    <?php } ?>
                    
                    <?php if($student_whats_on_button_text && $student_whats_on_button_link) { ?>
                        <div class="inline-block">
                            <a href="<?php echo $student_whats_on_button_link['url']; ?>" class="elementor-animation-pulse ctaButton bg-white text-purple"><?php echo $student_whats_on_button_text; ?><img src="<?php echo get_stylesheet_directory_uri();?>/img/purple-arrow-button.svg" target="<?php echo $student_whats_on_button_link['target']; ?>"></a>
                        </div>
                    <?php } ?>
                
            </div>
            <div class="column lg:col-span-6 lg:col-start-7 relative -mt-24 lg:mt-0">
                <img src="<?php echo get_stylesheet_directory_uri();?>/img/parent/events-desktop.png" class="w-full h-full hidden lg:block lg:absolute lg:bottom-0 lg:h-auto max-w-[710px] right-0">
                <img src="<?php echo get_stylesheet_directory_uri();?>/img/parent/events-mobile.png" class="w-full h-full max-w-lg sm:scale-100 m-auto origin-bottom z-30 lg:hidden mr-0">
            </div>
        </div>
    </div>
</section>