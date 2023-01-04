
<section class="bg-white hidden lg:block">
    <div class="container">
        <div class="row text-white">
            <?php
            if(have_rows('student_cards')) {

                while( have_rows('student_cards') ) : the_row();
                    
                    $student_card_background_image = get_sub_field('student_card_background_image');
                    $student_card_title = get_sub_field('student_card_title');
                    $student_card_subtitle = get_sub_field('student_card_subtitle');
                    $student_card_link = get_sub_field('student_card_link');
                ?>

                <a href="<?php echo $student_card_link['url']; ?>" class="col lg:col-span-6 student-card">
                    <div class="cover" style="background-image: url('<?php echo $student_card_background_image['url']; ?>');">
                        <p class="headingFour"><?php echo $student_card_title; ?></p>
                    </div>
                    <div class="reveal">
                        <p class="headingFour"><?php echo $student_card_title; ?></p>
                        <p class="bodyText text-white"><?php echo $student_card_subtitle; ?></p>
                        <p class="subtitleOne uppercase">Learn More</p>
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





    
<section class="bg-white lg:hidden">
    <div class="container">
        <div class="row">
            <div class="col">

            <?php
            if(have_rows('student_cards')) {

                while( have_rows('student_cards') ) : the_row();
                    $student_card_title = get_sub_field('student_card_title');
                    $student_card_subtitle = get_sub_field('student_card_subtitle');
                    $student_card_link = get_sub_field('student_card_link');

                    ?>
                    <!-- What is term -->
                    <div class="transition rounded-xl shadow-lg text-charcoal">
                        <!-- header -->
                        <div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center h-16">
                            <p class="headingFour"><?php echo $student_card_title; ?></p>
                            <i class="fas fa-plus"></i>
                        </div>
                        <!-- Content -->
                        <div class="accordion-content px-5 pt-0 overflow-hidden" style="max-height: 0px">
                            <p class="bodyText text-white"><?php echo $student_card_subtitle; ?></p>                       
                            <a href="<?php echo $student_card_link['url']; ?>" class="text-base font-bold text-white uppercase">Learn More</a>
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
        header.parentElement.classList.add("bg-blue");
        
        } else {
        header.parentElement.classList.remove("text-white");
        header.parentElement.classList.add("text-charcoal");
        accordionContent.style.maxHeight = `0px`;
        header.querySelector(".fas").classList.add("fa-plus");
        header.querySelector(".fas").classList.remove("fa-minus");
        header.parentElement.classList.remove("bg-blue");
        
        }
    });
    });
</script>

</section>