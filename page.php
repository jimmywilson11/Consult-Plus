<?php

/**
 * The template for Blog pages.
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();
$container = get_theme_mod('understrap_container_type');
?>
<section id="title">
	<div class="container">
		<h2 class="title-head text-uppercase"><?= __('Blog Post', 'understrap') ?></h2>
	</div>
</section>
<div class="wrapper" id="page-wrapper">
	<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">
		<span class="section-description"><?php the_field('section_our_blog_description', 8); ?></span>
        <h2 class="section-title text-uppercase mb-4"><?php the_field('section_our_blog_title', 8); ?></h2>
		<div class="row">
			<?php get_template_part('global-templates/left-sidebar-check'); ?>
			<main class="site-main" id="main">
				<?php
				$posts = get_posts(array(
					'numberposts' => -1,
					'orderby'     => 'date',
					'order'       => 'DESC',
					'post_type'   => 'post',
					'suppress_filters' => true,
				));
				foreach ($posts as $post) {
					setup_postdata($post);
				?>
					<div class="post-card">
						<?php the_post_thumbnail('post_head_image'); ?>
						<time class="post-time" date="<?php the_time('d, M, Y'); ?>"><?php the_time('d-M-Y'); ?></time>
						<a href="<?php the_permalink(); ?>"><h2 class="post-title text-uppercase"><?php the_title(); ?></h2></a>
						<p class="except"><?php the_excerpt(); ?></p>
						<div class="wrapper d-flex justify-content-between">
							<a class="read-more-btn" href="<?php the_permalink(); ?>">Read More</a>
							<div class="sharebtn-group dropleft">	
								<span type="button" class="dropdown-toggle" data-toggle="dropdown">Share: </span>
								<div class="dropdown-menu">
									<ul class="social d-flex">
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-google"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
				<?php }
				wp_reset_postdata();
				?>
			</main>
			<?php get_template_part('global-templates/right-sidebar-check'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>