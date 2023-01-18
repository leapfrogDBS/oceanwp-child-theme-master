
<section id="parent-cards" class="bg-white hidden lg:block lg:pt-14 lg:pb-48">
    <div class="container2">
        <div class="row text-white gap-6">
            <?php
            if(have_rows('parent_cards')) {

                while( have_rows('parent_cards') ) : the_row();
                    
                    $student_card_background_image = get_sub_field('student_card_background_image');
                    $student_card_title = get_sub_field('student_card_title');
                    $student_card_subtitle = get_sub_field('student_card_subtitle');
                    $student_card_link = get_sub_field('student_card_link');
                ?>

                <a href="<?php echo $student_card_link['url']; ?>" class="column lg:col-span-6 student-card">
                    <div class="cover" style="background-image: url('<?php echo $student_card_background_image['url']; ?>');">
                        <p class="headingFour"><?php echo $student_card_title; ?></p>
                    </div>
                    <div class="reveal">
                        <p class="headingFour"><?php echo $student_card_title; ?></p>
                        <p class="bodyText text-white mb-0"><?php echo $student_card_subtitle; ?></p>
                        <p class="subtitleOne uppercase leading-[0] inline-flex items-baseline justify-center gap-x-4 mb-6">Learn More<img src="<?php echo get_stylesheet_directory_uri();?>/img/white-arrow-button.svg"></p>
                    </div>    
                </a>

                <?php
                endwhile;
                reset_rows();
            }
            ?>
        </div>
    </div>
</section>





    
<section class="bg-white pt-6 lg:hidden">
    <div class="container2">
        <div class="row">
            <div class="column">

            <?php
            if(have_rows('parent_cards')) {

                while( have_rows('parent_cards') ) : the_row();
                    $student_card_title = get_sub_field('student_card_title');
                    $student_card_subtitle = get_sub_field('student_card_subtitle');
                    $student_card_link = get_sub_field('student_card_link');

                    ?>
                    <!-- What is term -->
                    <div class="transition rounded-xl shadow-2xl text-charcoal px-5 pt-8 pb-0 mb-4">
                        <!-- header -->
                        <div class="accordion-header cursor-pointer transition flex space-x-5 items-start h-16">
                            <p class="headingFour leading-tight flex-1"><?php echo $student_card_title; ?></p>
                            <i class="fas fa-plus"></i>
                        </div>
                        <!-- Content -->
                        <div class="accordion-content pt-0 overflow-hidden" style="max-height: 0px">
                            <p class="bodyText text-white"><?php echo $student_card_subtitle; ?></p>                       
                            <a href="<?php echo $student_card_link['url']; ?>" class="text-base font-normal  text-white uppercase leading-[0] inline-flex items-baseline justify-center gap-x-4 mb-6">Learn More<img src="<?php echo get_stylesheet_directory_uri();?>/img/white-arrow-button.svg"></a>
                        </div>
                    </div> 
                   
                <?php endwhile;
                reset_rows();
            } ?>
            </div>
        </div>
    </div>
        
<style>
    .accordion-content {
    transition: max-height 0.3s ease-out, padding 0.3s ease;
    }
</style>

<script>
    const accordionHeader = document.querySelectorAll(".accordion-header");
    accordionHeader.forEach((header) => {
    header.addEventListener("click", function () {
        const accordionContent = header.parentElement.querySelector(".accordion-content");
        let accordionMaxHeight = accordionContent.style.maxHeight;

        // Condition handling
        if (accordionMaxHeight == "0px" || accordionMaxHeight.length == 0) {
        accordionContent.style.maxHeight = `${accordionContent.scrollHeight + 32}px`;
        header.parentElement.classList.remove("text-charcoal");
        header.parentElement.classList.add("text-white");
        header.querySelector(".fas").classList.remove("fa-plus");
        header.querySelector(".fas").classList.add("fa-minus");
        header.parentElement.classList.add("bg-purple");
        
        } else {
        header.parentElement.classList.remove("text-white");
        header.parentElement.classList.add("text-charcoal");
        accordionContent.style.maxHeight = `0px`;
        header.querySelector(".fas").classList.add("fa-plus");
        header.querySelector(".fas").classList.remove("fa-minus");
        header.parentElement.classList.remove("bg-purple");
        
        }
    });
    });
</script>

</section>