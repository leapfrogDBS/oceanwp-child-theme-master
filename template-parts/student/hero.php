<?php
	$student_hero_title = get_field('student_hero_title');
	$student_hero_subtitle = get_field('student_hero_subtitle');
	$student_hero_button_text = get_field('student_hero_button_text');
	$typewritter_effect_headings = get_field('student_hero_title_words');
?>
<section id="student-hero" class ="bg-gradient-to-br from-cyan via-blue to-purple pb-0 relative">
    <div class="container3 lg:mt-20">
        <div class="row">
            <div class="column flex flex-col text-white z-50 mb-8 px-12 md:px-[8%] lg:pr-0 lg:pl-[16.6%] lg:mb-24 lg:mt-20 lg:col-span-7 xl:col-span-6">
                
              <p class="headingOne mb-8 lg:mb-14"><span class="lg:hidden">Feeling<br>a little<br></span><span class="hidden lg:inline">Feeling a <br>little </span><span id="feeling" class="text-cyan txt-rotate" data-period="2000"></span></p>
          
              <?php if($student_hero_subtitle) { ?>
                <p class="headingFive mb-9 lg:w-3/4 lg:mb-14"><?php echo $student_hero_subtitle; ?></p>
              <?php } ?>
                      
              <?php if($student_hero_button_text) { ?>
                <div class="inline-block">
                  <a href="#sign-up" class="ctaButton bg-white text-blue"><?php echo $student_hero_button_text;?><img src="<?php echo get_stylesheet_directory_uri();?>/img/blue-arrow-button.svg"></a>
                </div>
              <?php } ?>

            </div>
            <div class="column lg:col-span-5 xl:col-span-6 xl:pl-[16.6%] flex flex-col justify-end">
                <img src="<?php echo get_stylesheet_directory_uri();?>/img/hero-photo.png" class="w-full h-auto hidden lg:block">
                <img src="<?php echo get_stylesheet_directory_uri();?>/img/hero-mobile.png" class="w-full h-full scale-[1.35] max-w-[280px] m-auto origin-bottom z-30 lg:hidden">
            </div>
        </div>
    </div>
</section>

<script defer type="text/javascript">
	
var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 180 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate =  [];
	var typewritterHeadings = <?php echo json_encode((array)$typewritter_effect_headings); ?>;
	
	for (j=0; j<typewritterHeadings.length; j++) {
		toRotate.push(typewritterHeadings[j]['student_hero_animated_words'] + "?");
	}
	var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(JSON.stringify(toRotate)), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #fff }";
  document.body.appendChild(css);
};

	
</script>


