<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the `#content` element and all content thereafter.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coral-residences-kandima
 */

?>

	</div><!-- #content -->

	<?php get_template_part( 'template-parts/layout/footer', 'content' ); ?>

	<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>

</div><!-- #page -->

<script>
//Parralax
	var image = document.getElementsByClassName('thumbnail');
	new simpleParallax(image, {
		delay: .6,
		transition: 'cubic-bezier(0,0,0,1)'
	});


	const openHandler = () =>
	document.querySelector(".sidebar").classList.remove("hidden");

	const closeHandler = () => {
	document.querySelector(".sidebar").classList.add("close_sidebar");
	setTimeout(() => {
		document.querySelector(".sidebar").classList.add("hidden");
		document.querySelector(".sidebar").classList.remove("close_sidebar");
	}, 400);
	};


	window.onload = function () {
        document.querySelector(".sidebar").classList.remove("hidden");
    };

	document.getElementById("open_sidebar_button").addEventListener("click", openHandler);//Header Button
	document.getElementById("open_footersidebar_button").addEventListener("click", openHandler);//footer Button
	document.querySelector(".close_button").addEventListener("click", closeHandler);

</script>

<script>
	/*let dataForm = document.getElementById("detailsForm");

	dataForm.addEventListener("submit", (e) => {
	e.preventDefault();

	let title = document.getElementById("title");
	let fName = document.getElementById("fname");
	let lName = document.getElementById("lname");
	let email = document.getElementById("mail");
	let cNo = document.getElementById("tel");
	let country = document.getElementById("country");
	let message = document.getElementById("msg");

	if (username.value == "" || password.value == "") {
		alert("Ensure you input a value in both fields!");
	} else {
		// perform operation with form input
		alert("This form has been successfully submitted!");
		console.log(
		`This form has a username of ${username.value} and password of ${password.value}`
		);

		username.value = "";
		password.value = "";
	}
	});
*/



AOS.init({
  duration: 1200,
})
</script>

<?php wp_footer(); ?>

</body>
</html>
