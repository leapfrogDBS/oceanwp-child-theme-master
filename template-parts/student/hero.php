<?php
	$student_hero_title = get_field('student_hero_title');
	$student_hero_subtitle = get_field('student_hero_subtitle');
	$student_hero_button_text = get_field('student_hero_button_text');
	$student_hero_button_link = get_field('student_hero_button_link');
    $typewritter_effect_headings = get_field('student_hero_title_words');
?>
<section id="student-hero" class ="bg-gradient-to-br from-cyan via-blue to-purple pb-0">
    <div class="container">
        <div class="row">
            <div class="col lg:col-span-6 flex flex-col justify-center text-white">
                
				<?php if($student_hero_title) { ?>
					<p class="headingOne"><?php echo $student_hero_title; ?> <span id="feeling" class="text-cyan"></span>?</p>
				<?php } ?>
                
				<?php if($student_hero_subtitle) { ?>
					<p class="headingFive w-3/4"><?php echo $student_hero_subtitle; ?></p>
				<?php } ?>
                
				<?php if($student_hero_button_text && $student_hero_button_link) { ?>
					<div class="inline-block">
						<a href="<?php echo $student_hero_button_link['url']; ?>" class="ctaButton bg-white text-blue"><?php echo $student_hero_button_text;?><img src="<?php echo get_stylesheet_directory_uri();?>/img/blue-arrow-button.svg"></a>
					</div>
				<?php } ?>

            </div>
            <div class="col lg:col-span-6">
                <img src="<?php echo get_stylesheet_directory_uri();?>/img/hero-photo.png" class="w-full h-full">
            </div>
        </div>
    </div>
</section>

<script defer type="text/javascript">
	/*
	document.addEventListener('DOMContentLoaded',function(event){
	var typewritterHeadings = <?php echo json_encode((array)$typewritter_effect_headings); ?>;
	var dataText = [];

	for (i=0; i<typewritterHeadings.length; i++) {
		dataText.push(typewritterHeadings[i]['student_hero_animated_words']);
	}

	var headerTitle = document.querySelector('#feeling');
	// type one text in the typwriter
	// keeps calling itself until the text is finished
	function typeWriter(text, i, fnCallback) {
		// chekc if text isn't finished yet
		if (i < (text.length)) {
		// add next character to h1
		headerTitle.innerHTML = text.substring(0, i+1) +'<span id="cursor" aria-hidden="true"></span>';

		// wait for a while and call this function again for next character
		setTimeout(function() {
			typeWriter(text, i + 1, fnCallback)
		}, 180);
		}
		// text finished, call callback if there is a callback function
		else if (typeof fnCallback == 'function') {
		// call callback after timeout
		setTimeout(fnCallback, 700);
		}
	}
	// start a typewriter animation for a text in the dataText array
	function StartTextAnimation(i) {
		if (typeof dataText[i] == 'undefined'){
			setTimeout(function() {
			StartTextAnimation(0);
			}, 20000);
		}
		// check if dataText[i] exists
		if (i < dataText.length) {
		// text exists! start typewriter animation
		typeWriter(dataText[i], 0, function(){
		// after callback (and whole text has been animated), start next text
		StartTextAnimation(i + 1);
		});
		}
	}
	// start the text animation
	StartTextAnimation(0);
	});
	*/
</script>


