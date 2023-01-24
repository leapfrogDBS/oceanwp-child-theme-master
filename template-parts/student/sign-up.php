<?php
$student_signup_title = get_field('student_signup_title');
$student_signup_subtitle = get_field('student_signup_subtitle');

$student_signup_plan_one_title = get_field('student_signup_plan_one_title');
$student_signup_plan_one_subtitle = get_field('student_signup_plan_one_subtitle');
$student_signup_plan_one_price = get_field('student_signup_plan_one_price');
$student_signup_plan_one_bottom_text = get_field('student_signup_plan_one_bottom_text');
$student_signup_plan_one_membership_link = get_field('student_signup_plan_one_link');

$student_signup_plan_two_title = get_field('student_signup_plan_two_title');
$student_signup_plan_two_subtitle = get_field('student_signup_plan_two_subtitle');
$student_signup_plan_two_price = get_field('student_signup_plan_two_price');
$student_signup_plan_two_bottom_text = get_field('student_signup_plan_two_bottom_text');
$student_signup_plan_two_membership_link = get_field('student_signup_plan_two_link');
?>

<section id="student-sign-up" class="bg-white lg:pt-36">
    <div class="container2">
        <div class="row">
            <div class="column">
                
                <?php if($student_signup_title) { ?>
                    <p class="headingThree text-blue text-center mb-6 lg:mb-12"><?php echo $student_signup_title; ?></p>
                <?php } ?>
                
                <?php if($student_signup_subtitle) { ?>
                    <p class="bodyText text-[#8A8799] text-center max-w-2xl mx-auto"><?php echo $student_signup_subtitle; ?></p>
                <?php } ?>

            </div>
        </div>
        <form action=""> 
        <div class="row max-w-[410px] md:max-w-[800px] m-auto gap-x-6">
            <form id="pricing-table">
                <input type="radio" name="card" id="card_one" class="hidden peer/annually" data-link="<?php echo $student_signup_plan_one_membership_link['url']; ?>">
                <label for="card_one" class="price-card peer-checked/annually:bg-blue peer-checked/annually:scale-100 peer-checked/annually:z-50 peer-checked/annually:text-white z-40 col-start-1 row-start-1 scale-75 origin-left md:col-start-auto md:row-start-auto md:scale-100">
                    <p class="subtitleOne uppercase mb-4"><?php echo $student_signup_plan_one_title; ?></p>
                    <p class="subtitleTwo mb-4"><?php echo $student_signup_plan_one_subtitle; ?></p>
                    <p class="mb-4"><span class="headingFive">£</span><span class="headingOne font-light"><?php echo $student_signup_plan_one_price; ?></span></p>
                    <p class="bodyText text-center mb-0 leading-none"><?php echo $student_signup_plan_one_bottom_text; ?></p>
                </label>
                <input type="radio" name="card" id="card_two" class="hidden peer/monthly" data-link="<?php echo $student_signup_plan_two_membership_link['url']; ?>">
                <label for="card_two" class="group price-card peer-checked/monthly:bg-blue peer-checked/monthly:scale-100 peer-checked/monthly:z-50 peer-checked/monthly:text-white z-40 col-start-4 row-start-1 scale-75 origin-right md:col-start-auto md:row-start-auto md:scale-100">
                    <p class="subtitleOne uppercase mb-4"><?php echo $student_signup_plan_two_title; ?></p>
                    <p class="subtitleTwo mb-4"><?php echo $student_signup_plan_two_subtitle; ?></p>
                    <p class="mb-4"><span class="headingFive">£</span><span class="headingOne font-light"><?php echo $student_signup_plan_two_price; ?></span></p>
                    <p class="bodyText text-center mb-0 leading-none"><?php echo $student_signup_plan_two_bottom_text; ?></p>
                </label>
            </form>
        </div>
        <div class="row mt-12">
            <div class="column text-center">
            <div class="inline-block text-center">
                    <div onClick="processForm()" class="elementor-animation-pulse ctaButton bg-gradient-to-r from-cyan via-blue to-purple text-white">Sign up now<img src="<?php echo get_stylesheet_directory_uri();?>/img/white-arrow-button.svg"></button>
                </div>
            </div>
        </div>
                </form>
    </div>
</section>

<script>
   document.getElementById('card_one').checked=true;

   function processForm() {
    window.location.href = document.querySelector('input[name="card"]:checked').getAttribute('data-link');
   }
</script>