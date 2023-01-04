<?php
	$student_introduction_title = get_field('student_introduction_title');
    $student_introduction_copy = get_field('student_introduction_copy');
?>

<section class="bg-white">
    <div class="container">
        <div class="row">

            <?php if($student_introduction_title) { ?>
                <div class="col lg:col-span-6">
                    <p class="headingTwo text-transparent bg-clip-text bg-gradient-to-br from-cyan via-blue to-purple pb-0 "><?php echo $student_introduction_title; ?></p>
                </div>
            <?php } ?>
            
            <?php if($student_introduction_copy) { ?>
                <div class="col lg:col-span-6 editor-content">
                    <?php echo $student_introduction_copy; ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

