<section class="bg-gradient-to-br from-cyan via-blue to-purple pb-0">
    <div class="container">
        <div class="row">
            <div class="col lg:col-span-9 text-white">
                <p class="headingFour uppercase ">Our members say...</p>
                <div class="splide" id="testimonial-slider">
                    <div class="splide__track">
                        <ul class="splide__list"> 
                            <li class="splide__slide"> 
                                <p class="headingThree light">“Lorem ipsum dolor sit amet lorem ipsum two lines dolor sit lorem.”</p>
                                <p class="headingFive">Proin Vitae, Student</p>
                            </li>
                            <li class="splide__slide"> 
                                <p class="headingThree light">“Lorem ipsum dolor sit amet lorem ipsum two lines dolor sit lorem.”</p>
                                <p class="headingFive">Proin Vitae, Student</p>
                            </li>
                            <li class="splide__slide"> 
                                <p class="headingThree light">“Lorem ipsum dolor sit amet lorem ipsum two lines dolor sit lorem.”</p>
                                <p class="headingFive">Proin Vitae, Student</p>
                            </li>
                            <li class="splide__slide"> 
                                <p class="headingThree light">“Lorem ipsum dolor sit amet lorem ipsum two lines dolor sit lorem.”</p>
                                <p class="headingFive">Proin Vitae, Student</p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col lg:col-span-3">
                <img src="<?php echo get_stylesheet_directory_uri();?>/img/testimonial-photo.png" class="w-full h-full">
            </div>
        </div>
    </div>
</section>

<script defer>
    var testimonailSlider = new Splide( '#testimonial-slider', {
        pagination: true,
        arrows: false,
        rewind: true,
        speed: '1000',
        type: 'loop',
        drag: true,
        snap: true,
        perMove: 1,
        perPage: 1,                         
    });
    testimonailSlider.mount( window.splide.Extensions );
</script>