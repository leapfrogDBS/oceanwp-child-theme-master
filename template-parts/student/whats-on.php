<?php
$student_whats_on_title = get_field('student_whats_on_title');
$student_whats_on_subtitle = get_field('student_whats_on_subtitle');
$student_whats_on_button_text = get_field('student_whats_on_button_text');
$student_whats_on_button_link = get_field('student_whats_on_button_link');
?>


<section class="bg-cover bg-fixed py-0" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/bg-whats-on2.png')">
    <div class="container">
        <div class="row text-white">
            <div class="col lg:col-span-6 flex flex-col justify-center">
                
                <?php if ($student_whats_on_title) { ?>
                    <p class="headingThree"><?php echo $student_whats_on_title; ?></p>
                <?php } ?>

                <?php if ($student_whats_on_subtitle) { ?>
                    <p class="bodyText text-white"><?php echo $student_whats_on_subtitle; ?></p>
                <?php } ?>
                
                <?php if($student_whats_on_button_text && $student_whats_on_button_link) { ?>
                    <div class="inline-block">
                        <a href="<?php echo $student_whats_on_button_link['url']; ?>" class="ctaButton bg-white text-purple"><?php echo $student_whats_on_button_text; ?><img src="<?php echo get_stylesheet_directory_uri();?>/img/blue-arrow-button.svg"></a>
                    </div>
                <?php } ?>
            </div>
            <div class="col lg:col-span-6">
                <img src="<?php echo get_stylesheet_directory_uri();?>/img/whats-on-photo.png" class="w-full h-full">
            </div>
        </div>
    </div>
</section>