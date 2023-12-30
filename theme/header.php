<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coral-residences-kandima
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Swiper Slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
	<link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page">
	<a href="#content" class="sr-only"><?php esc_html_e( 'Skip to content', 'coral-residences-kandima' ); ?></a>

	<?php //get_template_part( 'template-parts/layout/header', 'content' ); ?>



	
	<?php get_template_part('partials/section', 'enquire'); ?>
	<header>
		<div>
			<nav class="fixed top-0 w-full z-40">
				<div class=" flex justify-between px-8 sm:px-10 max-w-none xl:max-w-screen-2xl mx-auto py-6">
					<div class="flex-item">
					
					</div>
					<div class="flex-item">
					</div>
					<div class="flex-item">
						<button id="open_sidebar_button" class="font-display max-w-sm text-sm font-bold leading-tight pt-6">
							<span class="link link-underline link-underline-black text-black"> ENQUIRE NOW </span>
						</button>
					</div>
				</div>
			</nav>
		</div>
	</header>

	<style>
	.link-underline {
		border-bottom-width: 0;
		background-image: linear-gradient(transparent, transparent), linear-gradient(#fff, #fff);
		background-size: 100% 1px;
		background-position: 0 100%;
		background-repeat: no-repeat;
		transition: background-size .5s ease-in-out;
	}

	.link-underline-black {
		background-image: linear-gradient(transparent, transparent), linear-gradient(#000, #000);
	}

	.link-underline:hover {
		background-size: 0 2px;
		background-position: 0 100%
	}

	.sidebar {
	position: fixed;
	bottom: 0;
	left: 0;
	height: 60%;
	border-top: solid 1px #969696;
	width: 100%;
	box-shadow: 4px 3px 8px 1px #969696;
	animation: slide-up ease-out 400ms forwards;
	background: #feefe7;
	z-index: 1000;
	}
	.sidebar p {
	padding: 1rem;
	}
	@media (min-width: 768px) {
		.sidebar {
			top: 0;
			height: 100%;
			left: unset;
			right: 0;
			width: 30%;
			border-top: unset;
			border-left: solid 1px #969696;
			animation-name: slide-left;
		}
	}
	.close_button {
		position: absolute;
		top: 1rem;
		right: 20px;
		color: #fff;
		font-size: 130%;
		display: flex;
		justify-content: center;
		align-items: center;
		padding: 0;
		cursor: pointer;
	}
	@media (min-width: 768px) {
	.close_button {
		left: 90%;
	}
	}
	.close_sidebar {
	animation-name: slide-down;
	}
	.hidden {
	display: none;
	}
	@media (min-width: 768px) {
	.close_sidebar {
		animation-name: slide-right;
	}
	}
	@keyframes slide-up {
	0% {
		height: 0;
	}
	100% {
		height: 80%;
	}
	}
	@keyframes slide-down {
	0% {
		height: 60%;
	}
	100% {
		height: 0;
	}
	}
	@keyframes slide-left {
	0% {
		width: 0;
	}
	100% {
		width: 30%;
	}
	}
	@keyframes slide-right {
	0% {
		width: 30%;
	}
	100% {
		width: 0;
	}
	}
</style>



	<div id="content">
