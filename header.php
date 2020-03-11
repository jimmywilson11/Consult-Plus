<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action('wp_body_open'); ?>
	<div class="site" id="page">
		<header>
			<div class="color-wrapper">
				<ul class="container d-flex justify-content-end">
					<li class="mail pr-2">
						<p class="pt-2 mb-2">Email: <a href="mailto:<?php the_field('email', 8); ?>"><?php the_field('email', 8); ?></a></p>
					</li>
					<li class="phone ml-2 pr-0">
						<p class="pt-2 mb-2">Phone: <a href="tel:<?php the_field('phone', 8); ?>"> <?php the_field('phone', 8); ?></a></p>
					</li>
				</ul>
			</div>
			<nav class="navbar navbar-expand-md navbar-light container">
				<?php if (is_front_page() && is_home()) : ?>
					<h1 class="site-title">
						<?php sitelogo() ?>
					</h1>
				<?php else :
					sitelogo();
				endif; ?>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuburger" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'menuburger',
						'menu_class'      => 'navbar-list navbar-nav ml-auto text-center text-uppercase',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			</nav>
		</header>
	</div>