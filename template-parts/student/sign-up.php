<?php
$student_signup_title = get_field('student_signup_title');
$student_signup_subtitle = get_field('student_signup_subtitle');

$student_signup_plan_one_title = get_field('student_signup_plan_one_title');
$student_signup_plan_one_subtitle = get_field('student_signup_plan_one_subtitle');
$student_signup_plan_one_price = get_field('student_signup_plan_one_price');
$student_signup_plan_one_bottom_text = get_field('student_signup_plan_one_bottom_text');

$student_signup_plan_two_title = get_field('student_signup_plan_two_title');
$student_signup_plan_two_subtitle = get_field('student_signup_plan_two_subtitle');
$student_signup_plan_two_price = get_field('student_signup_plan_two_price');
$student_signup_plan_two_bottom_text = get_field('student_signup_plan_two_bottom_text');
?>

<section class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col">
                
                <?php if($student_signup_title) { ?>
                    <p class="headingThree text-blue text-center"><?php echo $student_signup_title; ?></p>
                <?php } ?>
                
                <?php if($student_signup_subtitle) { ?>
                    <p class="bodyText text-center"><?php echo $student_signup_subtitle; ?></p>
                <?php } ?>

            </div>
        </div>
        <div class="row w-1/2 m-auto">

            <input type="radio" name="card" id="card_one" class="hidden peer/annually">
            <label for="card_one" class="price-card peer-checked/annually:bg-blue peer-checked/annually:text-white">
                <p class="subtitleOne uppercase"><?php echo $student_signup_plan_one_title; ?></p>
                <p class="subtitleTwo"><?php echo $student_signup_plan_one_subtitle; ?></p>
                <p><span class="headingFive">£</span><span class="headingOne font-light"><?php echo $student_signup_plan_one_price; ?></span></p>
                <p class="bodyText text-center"><?php echo $student_signup_plan_one_bottom_text; ?></p>
            </label>
            <input type="radio" name="card" id="card_two" class="hidden peer/monthly">
            <label for="card_two" class="group price-card peer-checked/monthly:bg-blue peer-checked/monthly:text-white">
                <p class="subtitleOne uppercase"><?php echo $student_signup_plan_two_title; ?></p>
                <p class="subtitleTwo"><?php echo $student_signup_plan_two_subtitle; ?></p>
                <p><span class="headingFive">£</span><span class="headingOne font-light"><?php echo $student_signup_plan_two_price; ?></span></p>
                <p class="bodyText text-center"><?php echo $student_signup_plan_two_bottom_text; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
            <div class="inline-block text-center">
                    <a href="#" class="ctaButton bg-gradient-to-br from-cyan via-blue to-purple text-white">See what's on<img src="<?php echo get_stylesheet_directory_uri();?>/img/blue-arrow-button.svg"></a>
                </div>
            </div>
        </div>
    </div>
</section>
