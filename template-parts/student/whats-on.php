<?php
$student_whats_on_title = get_field('student_whats_on_title', 'option');
$student_whats_on_subtitle = get_field('student_whats_on_subtitle', 'option');
$student_whats_on_button_text = get_field('student_whats_on_button_text', 'option');
$student_whats_on_button_link = get_field('student_whats_on_button_link', 'option');
?>


<section id="student-whats-on-section" class="bg-cover bg-fixed pb-0 lg:pt-24">
    <div class="container3">
        <div class="row text-white ">
            <div class="column lg:col-span-5 flex flex-col justify-center mb-16 px-12 md:px-[8%] lg:pr-0 lg:pl-[16.6%]">
                
                <?php if ($student_whats_on_title) { ?>
                    <p class="headingThree mb-6"><?php echo $student_whats_on_title; ?></p>
                <?php } ?>

                <?php if ($student_whats_on_subtitle) { ?>
                    <p class="bodyText text-white"><?php echo $student_whats_on_subtitle; ?></p>
                <?php } ?>
                
                <?php if($student_whats_on_button_text && $student_whats_on_button_link) { ?>
                    <div class="inline-block">
                        <a href="<?php echo $student_whats_on_button_link['url']; ?>" class="elementor-animation-pulse ctaButton bg-white text-purple"><?php echo $student_whats_on_button_text; ?><img src="<?php echo get_stylesheet_directory_uri();?>/img/purple-arrow-button.svg"></a>
                    </div>
                <?php } ?>
            </div>
            <div class="column lg:col-span-7 relative">
                <img src="<?php echo get_stylesheet_directory_uri();?>/img/whats-on-photo.png" class="w-full h-full hidden lg:block lg:absolute lg:bottom-0 lg:h-auto ">
                <img src="<?php echo get_stylesheet_directory_uri();?>/img/whats-on-mobile.png" class="w-full h-full scale-125 max-w-[75vw] sm:scale-100 m-auto origin-bottom z-30 lg:hidden ">
            </div>
        </div>
    </div>
</section>