<?php 
 $hero_image = wp_get_attachment_image_url( get_post_meta( get_the_ID(), 'banner_img_first_id', 1 ), "large", "", array( "class" => "w-full h-screen  block bg-no-repeat bg-cover" ) );
 $mob_hero_image = wp_get_attachment_image_url( get_post_meta( get_the_ID(), 'mob_banner_img_first_id', 1 ), "large", "", array( "class" => "w-full h-screen  block bg-no-repeat bg-cover" ) );
 $headline = get_post_meta( get_the_ID(), 'headline', true );

?>

<section class="hero lg:h-screen">
    <div class="hero-container">
        <div class="hero-section1">
            <!-- Content for the first section -->
            <div class="content">
                <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 

               <dotlottie-player src="https://lottie.host/7eac475e-0ec5-46b3-9937-21663b56fa93/VF2UpdnFNg.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
            </div>
        </div>
        <div class="hero-section">
            <!-- Content for the second section -->
            <div class="slider desktop">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">

                        <?php 
                        $banner_img = get_post_meta( get_the_ID(), 'banner_img', 1 );
                                                
                            foreach ( (array) $banner_img as $attachment_id2 => $attachment_url2 ) { 
                                $mainImg = wp_get_attachment_image( $attachment_id2, 'large', null, array(
                                    'class' => '',
                                ) );
                                                
                        ?>
                        <div class="swiper-slide"><?php echo $mainImg; ?></div>

                        <?php } ?>

                    </div>

                </div>
            </div>

            <!-- Content for the second section mobile -->
            <div class="slider mobile h-screen">
                <div class="swiper mySwiper_mob">
                    <div class="swiper-wrapper">

                        <?php 
                        $banner_img = get_post_meta( get_the_ID(), 'mob_banner_img', 1 );
                                                
                            foreach ( (array) $banner_img as $attachment_id2 => $attachment_url2 ) { 
                                $mobhero_image = wp_get_attachment_image( $attachment_id2, 'large', null, array(
                                    'class' => ' ',
                                ) );
                                                
                        ?>
                        <div class="swiper-slide"><?php echo $mobhero_image; ?></div>

                        <?php } ?>

                    </div>

                </div>
            </div>
        </div>
    </div>

</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    effect: "fade",
    centeredSlides: true,
    autoplay: {
    delay: 2500,
    disableOnInteraction: false
    },
    speed: 2000
});

var swiper = new Swiper(".mySwiper_mob", {
    spaceBetween: 30,
    effect: "fade",
    centeredSlides: true,
    autoplay: {
    delay: 2500,
    disableOnInteraction: false
    },
    speed: 2000
});
</script>

<style>

.hero-container {
            display: flex;
            height: 100vh;
            flex-direction: column;
        }

        .hero-section {
            flex: 1;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .hero-section1 {
            flex: 1;
            background-size: cover;
            background-position: center;
            position: relative;
            display:block;
            width:100%;
            height:100vh;
            background-repeat: no-repeat;
background-position: center center;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size:cover;
        }

        .hero-section_mob {
            flex: 1;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        
        .hero-section:nth-child(2) {
            position: relative;
            overflow: hidden;
        }

        .slider img {
            width: 100%;
            height: auto;
        }


        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            text-align: center;
        }

        /* apply image  only on desktop devices */
        @media screen and (min-width: 768px) {

            .hero-section1:nth-child(1) {
                background-image: url(<?php echo $hero_image; ?>);
            }

            .mobile{
                display:none;
            }


        }


        @media screen and (max-width: 767px) {

                .hero-section1:nth-child(1) {
                    background-image: url(<?php echo $mob_hero_image; ?>);
                }

                .desktop{
                    display:none;
                }
            

        }
	</style>