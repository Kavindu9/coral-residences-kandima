<?php
$backimg = wp_get_attachment_image_url( get_post_meta( get_the_ID(), 'back_img_id', 1 ), "large", "", array( "class" => " w-full h-fit object-cover bg-no-repeat" ) );

$title = get_post_meta( get_the_ID(), '2_title', true );
?>

<section class="lg:pb-20 pb-10">
    <div class="container1  2xl:h-dvh">
        <div class="flex-item-ex lg:ml-20" style="">
            <div class="swiffy-slider slider-item-ratio slider-item-ratio-4x3 slider-item-nogap slider-item-nosnap slider-nav-animation slider-nav-animation-fadein">
                <ul class="slider-container">
                    <?php 
                        $banner_img = get_post_meta( get_the_ID(), 'ex_img', 1 );
                                                
                            foreach ( (array) $banner_img as $attachment_id2 => $attachment_url2 ) { 
                                $exImg = wp_get_attachment_image( $attachment_id2, 'large', null, array(
                                    'class' => 'object-cover h-full thumbnail w-9/12',
                                ) );
                                                
                    ?>
                        <li class="">
                            <div id="slide1 " ><?php echo $exImg; ?></div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="flex-item-ex bg-no-repeat object-cover bg-cover" style="background-image: url(<?php echo $backimg; ?>);">
            <div data-aos="fade-down" class="lg:ml-40 lg:mt-32 mx-12 my-12 max-w-screen-md">
                <h1 class="font-title text-2xl sm:text-3xl uppercase text-left text-black lg:pr-36"><?php echo $title; ?></h1><br>
                <div class="font-body exclusive text-base"><?php echo wpautop( get_post_meta( get_the_ID(), '2_description', true ) ); ?><div>
            </div>
        </div>
  </div>
</section>  

<style>
    .container1 {
      display: flex;
      overflow: hidden;
      width: 100%;
    }

    .flex-item-ex {
      flex: 1;
      min-width: 0; /* Allow the content to overflow its container */
      transition: transform 0.3s ease;
    }

    .flex-item-ex:first-child {
        margin-right: -200px; /* Adjust the overlapping amount */
        z-index:10;
        margin-top: 180px;
    }

/* Media query for smaller screens */
    @media (max-width: 768px) {
      .container1 {
        flex-direction: column;
      }

      .flex-item-ex:first-child {
        margin-right: 0; /* Remove overlapping on smaller screens */
        margin-top: 0px;

      }
    }

    
    @media (max-width: 1023px) {

      .flex-item-ex:first-child {
        margin-right: -92px; /* Remove overlapping on smaller screens */

      }
    }

    </style>