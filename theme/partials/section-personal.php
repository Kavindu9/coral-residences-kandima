<?php
$title = get_post_meta( get_the_ID(), '1_title', true );
$img = wp_get_attachment_image( get_post_meta( get_the_ID(), 'personal_img_id', 1 ), "large", "", array( "class" => "w-full h-auto mx-auto block thumbnail" ) );
$desc = get_post_meta( get_the_ID(), '1_description', true );

$btn_txt = get_post_meta( get_the_ID(), 'button_txt', true );
$btn_url = get_post_meta( get_the_ID(), 'button_url', true );
?>

<section class="lg:py-28 py-10">
    <div class="text-center max-w-screen-lg mx-auto px-12">
        <div  class="sm:px-10  relative">
            <div data-aos="zoom-out"><?php echo $img; ?><div>
            <div class=" lg:absolute top-1.5 left-2/4 title_personal" style="">
                <h1 class="font-title lg:text-4xl text-xl uppercase text-center text-black"><?php echo $title; ?></h1>
            </div>
        </div>
        <p class="lg:px-32 px-6 text-base py-10 font-body font-extrabold"><?php echo $desc; ?></p><br>
        <?php if($btn_url) { ?>
            <a href="<?php echo $btn_url; ?>" class="font-display max-w-sm text-sm font-bold leading-tight">
                <span class="link link-underline link-underline-black text-black"> <?php echo $btn_txt; ?> </span>
            </a>
            <?php } ?>
    </div>
</section>

<style>

@media (min-width: 769px) {
    .title_personal{
        transform: translate(-50%, -50%);
    }
    
}

</style>