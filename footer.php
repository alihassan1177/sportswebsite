<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sportswebsite
 */

?>

<footer>
	<section class="bg-pattern bg-green-200 contact">
		<div class="container">
			<h2 class="section-heading text-center">
				Get in touch with us
			</h2>
			<form class="contact-form">

				<div class="form-group">
					<label for="name" class="form-label">Name</label>
					<input type="text" placeholder="enter name" id="name" class="form-control">
				</div>

				<div class="form-group">
					<label for="email" class="form-label">Email</label>
					<input type="text" placeholder="enter email" id="email" class="form-control">
				</div>

				<div class="form-group">
					<label for="country" class="form-label">Country</label>
					<select class="form-select" id="country">
						<option selected value="usa">USA</option>
						<option value="pakistan">Pakistan</option>
						<option value="india">INDIA</option>
					</select>
				</div>

				<div class="form-group">
					<label for="state" class="form-label">State</label>
					<select class="form-select" id="state">
						<option selected value="usa">USA</option>
						<option value="pakistan">Pakistan</option>
						<option value="india">INDIA</option>
					</select>
				</div>

				<div class="form-group col-span-2">
					<label for="gender" class="form-label">Gender</label>

					<div class="radio-button-wrapper">
						<div class="form-radio">
							<input checked type="radio" id="male" name="gender">
							<label for="male">Male</label>
						</div>

						<div class="form-radio">
							<input type="radio" id="female" name="gender">
							<label for="female">female</label>
						</div>

						<div class="form-radio">
							<input type="radio" id="other" name="gender">
							<label for="other">other</label>
						</div>
					</div>

				</div>

				<div class="form-group col-span-2">
					<label for="message" class="form-label">Message</label>
					<textarea class="form-textarea" id="message" cols="30" rows="2"></textarea>
				</div>

				<div class="form-button col-span-2">
					<button class="btn">Submit</button>
				</div>

			</form>
		</div>
	</section>

	<section class="bg-pattern bg-green-300 footer-bottom">
		<div class="footer-bottom-wrapper">
			<div class="container text-center">

				<ul class="footer-links">
					<li>
						<a href="">Our Tracks</a>
					</li>
					<li>
						/
					</li>
					<li>
						<a href="">Find Events</a>
					</li>
					<li>
						/
					</li>
					<li>
						<a href="">Track Map</a>
					</li>
					<li>
						/
					</li>
					<li>
						<a href="">Shop</a>
					</li>
					<li>
						/
					</li>
					<li>
						<a href="">About Us</a>
					</li>
				</ul>

				<ul class="footer-social">
					<li>
						<a href="">
							<img src="<?php echo get_template_directory_uri() . "/assets/img/instagram-icon.png" ?>" alt="Instagram">
						</a>
					</li>
					<li>
						<a href="">
							<img src="<?php echo get_template_directory_uri() .  "/assets/img/facebook-icon.png" ?>" alt="Facebook">
						</a>
					</li>
					<li>
						<a href="">
							<img src="<?php echo get_template_directory_uri() . "/assets/img/linkedin-icon.png"  ?>" alt="Linkedin">
						</a>
					</li>
					<li>
						<a href="">
							<img src="<?php echo get_template_directory_uri() . "/assets/img/twitter-icon.png" ?>" alt="">
						</a>
					</li>
				</ul>

				<small class="copyright">
					© copyright 2020 Adidas
				</small>

			</div>
		</div>
	</section>
</footer>




</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>