<?php

/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>
<div class="wrapper" id="wrapper-footer">
	<div class="container">
		<div class="row">
			<div class="newsletter col-lg-6 mb-5">
				<h2>News Letter</h2>
				<p class="w-75">Enter your email address to subscribe our notification
					of our new post &amp; features by email.</p>
				<form class="mailchimp row d-flex" action="https://gmail.us4.list-manage.com/subscribe/post" method="POST">
					<input type="hidden" name="u" value="219558500c7fe6af6c9360caf">
					<input type="hidden" name="id" value="c9e259e058">
					<input type="email" autocapitalize="off" name="MERGE0" id="MERGE0" class="ml-3" placeholder="Email Address" value="">
					<input type="submit" class="formEmailButton" name="submit" value="Subscribe">
				</form>
			</div>
			<div class="links col-lg-6 d-flex flex-wrap mb-3 justify-content-center">
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'footer_menu_1',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'navigation col-12 col-md-4 mb-4 text-center text-md-left',
						'fallback_cb'     => '',
						'menu_id'         => '',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'footer_menu_2',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'industary col-12 col-md-4 mb-4 text-center text-md-left"',
						'fallback_cb'     => '',
						'menu_id'         => '',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'footer_menu_3',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'social col-12 col-md-4 mb-4 text-center text-md-left',
						'fallback_cb'     => '',
						'menu_id'         => '',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			</div>
		</div>
		<p class="copyright text-uppercase text-center text-md-left">Copyright &#169; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> Theme</p>
	</div>
</div><!-- wrapper end -->
</div><!-- #page we need this extra closing tag here -->
<?php wp_footer(); ?>
</body>

</html>