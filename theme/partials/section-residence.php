<?php 
$title = get_post_meta( get_the_ID(), '3_title', true );
$small = get_post_meta( get_the_ID(), 'small_expalin', true );
$image_1 = wp_get_attachment_image( get_post_meta( get_the_ID(), 'img_1_id', 1 ), "large", "", array( "class" => "w-full h-1/2 w-full object-cover aspect-[9/2]" ) );
$image_2 = wp_get_attachment_image( get_post_meta( get_the_ID(), 'img_2_id', 1 ), "large", "", array( "class" => "w-full h-1/2 w-full object-cover aspect-[9/2]" ) );
?>
<section>
    <div class="text-center max-w-screen-xl mx-auto px-12">
        <h1 class="font-title lg:text-4xl text-xl uppercase text-center text-black font-normal px-3.5 lg:px-12"><?php echo $title; ?></h1>
        <p class="text-base text-black font-body font-bold pt-8"><?php echo $small; ?></p>
        <div data-aos="fade-down" class="py-20 lg:px-12 ">
            
            <div class="swiffy-slider slider-item-ratio slider-item-ratio-16x9 slider-item-nogap slider-nav-square slider-nav-dark slider-nav-visible slider-nav-page slider-nav-animation slider-nav-animation-appear">
                <ul class="slider-container">

                    <?php 
                        $banner_img = get_post_meta( get_the_ID(), 'bresidence_img', 1 );
                                                
                            foreach ( (array) $banner_img as $attachment_id2 => $attachment_url2 ) { 
                                $exImg = wp_get_attachment_image( $attachment_id2, 'large', null, array(
                                    'class' => 'w-full object-cover thumbnail',
                                ) );
                                                
                    ?>

                        <li class="slide-visible">
                            <div id="slide1">
                                <figure class="w-full mx-auto object-cover"><?php echo $exImg; ?></figure>
                             </div>
                        </li>

                    <?php } ?>
                </ul>

                <button type="button" class="slider-nav"></button>
                <button type="button" class="slider-nav slider-nav-next"></button>

            </div>

        </div>
    </div>
</section>